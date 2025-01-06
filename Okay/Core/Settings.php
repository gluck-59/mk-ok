<?php


namespace Okay\Core;


/**
 * Управление настройками магазина, хранящимися в базе данных
 * В отличие от класса Config оперирует настройками доступными админу и хранящимися в базе данных.
 */
class Settings
{
    
    private $vars;
    private $vars_lang;
    
    /**
     * @var Database
     */
    private $db;

    /**
     * @var Languages
     */
    private $languages;

    /**
     * @var QueryFactory
     */
    private $queryFactory;

    public function __construct(Database $db, Languages $languages, QueryFactory $queryFactory)
    {
        $this->db = $db;
        $this->languages = $languages;
        $this->queryFactory = $queryFactory;
        $this->initSettings();
    }
    
    public function get($param)
    {
        if (isset($this->vars_lang[$param])) {
            return $this->vars_lang[$param];
        } elseif (isset($this->vars[$param])) {
            return $this->vars[$param];
        } else {
            return null;
        }
    }
    
    public function has($param)
    {
        return isset($this->vars_lang[$param]) || isset($this->vars[$param]);
    }
    
    public function set($param, $value)
    {
        if (isset($this->vars_lang[$param])) {
            return;
        }
        
        if(is_array($value)) {
            $valuePrepared = serialize($value);
        } else {
            $valuePrepared = (string) $value;
        }
        
        if(!isset($this->vars[$param])) {
            $insert = $this->queryFactory->newInsert();
            $insert->into('__settings')
                ->cols([
                    'value' => $valuePrepared,
                    'param' => $param,
                ]);

            $this->db->query($insert);
        } elseif ($this->vars[$param] != $value) {
            $update = $this->queryFactory->newUpdate();
            $update->table('__settings')
                ->cols(['value' => $valuePrepared])
                ->where('param = :param');
            $update->bindValue('param', $param);

            $this->db->query($update);
        }

        $this->vars[$param] = $value;
    }
    
    public function __get($param)
    {
        return $this->get($param);
    }

    /*Запись данных в общие настройки*/
    public function __set($param, $value)
    {
        $this->set($param, $value);
    }

    /*Выборка всех данных с таблиц настроек*/
    public function initSettings()
    {
        // Выбираем из базы ОБЩИЕ настройки и записываем их в переменную
        $this->vars = [];
        
        $select = $this->queryFactory->newSelect();
        
        $this->db->query($select->cols(['param', 'value'])->from('__settings'));
        foreach($this->db->results() as $result) {
            $this->vars[$result->param] = $this->unserialize($result->value, $result->value);;
        }

        // Выбираем из базы настройки с переводами к текущему языку
        $this->vars_lang = [];
        $multi = $this->getSettings();
        if (is_array($multi)) {
            foreach ($multi as $s) {
                $this->vars_lang[$s->param] = $this->unserialize($s->value, $s->value);
            }
        }
    }

    private function unserialize($value, $default = false)
    {
        $success = true;
        set_error_handler(function () use (&$success) {
            $success = false;
        });
        $original = unserialize($value);
        restore_error_handler();
        return $success ? $original : $default;
    }
    
    /**
     * Adding a new setting for all languages
     * @param string $param
     * @param string $value
     * @return bool
     * @throws \Exception
     */
    private function add($param, $value)
    {
        $select = $this->queryFactory->newSelect();
        $select->from(\Okay\Entities\LanguagesEntity::getTable())
            ->cols(['id']);
        $this->db->query($select);
        $languagesIds = $this->db->results('id');
        
        if (!empty($languagesIds)) {
            foreach ($languagesIds as $lId) {

                $delete = $this->queryFactory->newDelete();
                $delete->from('__settings_lang')
                    ->where('param =:param')
                    ->where('lang_id =:lang_id')
                    ->bindValue('param', $param)
                    ->bindValue('lang_id', $lId);

                $this->db->query($delete);
                
                $insert = $this->queryFactory->newInsert();
                $insert->into('__settings_lang')
                    ->cols([
                        'param' => $param,
                        'value' => $value,
                        'lang_id' => $lId,
                    ]);

                $this->db->query($insert);
                
            }
        } else {
            $delete = $this->queryFactory->newDelete();
            $delete->from('__settings_lang')
                ->where('param =:param')
                ->bindValue('param', $param);

            $this->db->query($delete);

            $insert = $this->queryFactory->newInsert();
            $insert->into('__settings_lang')
                ->cols([
                    'param' => $param,
                    'value' => $value,
                ]);

            if (!$this->db->query($insert)) {
                return false;
            }
        }
        return true;
    }

    /**
     * Updating by $param(current language), or adding;
     * if a setting with specified $param is exist - it will be updated,
     * otherwise it will be added(called add() function).
     * @param string $param
     * @param string $value
     * @return bool
     * @throws \Exception
     */
    public function update($param, $value)
    {
        if (empty($param)) {
            return false;
        }
        $this->vars_lang[$param] = $value;
        $value = is_array($value) ? serialize($value) : (string) $value;

        $select = $this->queryFactory->newSelect();
        $select->from('__settings_lang')
            ->cols(['1'])
            ->where('param = :param')
            ->bindValue('param', $param)
            ->limit(1);
        
        $this->db->query($select);
        if (!$this->db->result()) {
            return $this->add($param, $value);
        } else {
            $delete = $this->queryFactory->newDelete();
            $delete->from('__settings_lang')
                ->where('param =:param')
                ->bindValue('param', $param);
                
            $insert = $this->queryFactory->newInsert();
            $insert->into('__settings_lang')
                ->cols([
                    'param' => $param,
                    'value' => $value,
                ]);

            if ($langId = $this->languages->getLangId()) {
                $delete->where('lang_id =:lang_id')
                    ->bindValue('lang_id', $langId);
                $insert->cols(['lang_id' => $langId]);
            }

            $this->db->query($delete);
            $this->db->query($insert);
            
            return true;
        }
    }

    /**
     * Getting settings.
     * if $langId is not specified, a current language will be returned.
     * $langId = 0 is wrong, will be returned false.
     * @param int $langId
     * @return array|bool
     * @throws \Exception
     */
    public function getSettings($langId = null)
    {
        $select = $this->queryFactory->newSelect();
        $select->from(\Okay\Entities\LanguagesEntity::getTable())
            ->cols(['id'])
            ->where("id=" . (int)$langId)
            ->limit(1);
        $this->db->query($select);
        
        if (!is_null($langId) && !$this->db->results('id')) {
            return false;
        }

        $select = $this->queryFactory->newSelect();
        $select->from('__settings_lang')
            ->cols(['*']);
        
        $langId  = !is_null($langId) ? $langId : $this->languages->getLangId();
        if($langId) {
            $select->where('lang_id=:action_object_lang_id');
            $select->bindValues(['action_object_lang_id'=>$langId]);
        }
        $this->db->query($select);
        return $this->db->results();
    }


    public function setPseudoDiscountProducts_OLD() {
        $sql = $this->queryFactory->newSqlQuery();
        $sql->setStatement("SELECT id FROM ok_products WHERE visible = 1");
        $this->db->query($sql);
        $fieldsTemp = $this->db->results('id', 'id');

        // debug
        /*$fieldsTemp = array(3,4,5,7,8,9,10,11,12,14,15,17,19,20,21,22,23,24,25,26,27,28,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,55,56,57,58,60,61,62,63,64,65,66,68,70,72,74,75,76,77,78,79,80,81,82,84,85,86,87,88,89,90,91,92,95,96,97,98,99,100,103,104,105,106,108,109,112,113,114,116,117,118,119,120,121,122,123,124,126,127,128,129,130,131,132,133,134,135,137,138,139,140,141,143,144,145,146,147,149,151,152,153,154,155,156,157,158,159,160,161,163,164,165,171,173,175,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,195,196,197,198,200,201,202,204,205,206,207,208,209,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,238,239,241,243,244,246,247,248,249,251,252,253,254,255,256,257,259,260,261,262,263,266,267,268,269,270,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,301,302,303,305,306,307,308,309,310,311,312,314,316,318,319,320,321,322,323,324,325,326,327,328,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,348,349,350,351,352,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,375,377,379,381,382,383,384,387,388,389,391,392,394,395,396,398,399,400,401,403,404,405,406,407,408,409,410,412,414,415,416,417,418,419,420,421,422,423,425,426,427,428,429,430,431,433,434,435,436,437,438,439,440,441,442,443,444,445,446,448,449,450,452,453,454,455,457,458,459,460,461,462,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,483,484,485,486,487,488,490,491,492,493,494,496,497,498,499,502,503,505,506,507,508,510,511,512,513,514,515,516,517,518,519,521,523,525,526,527,529,531,532,533,535,536,537,538,539,540,541,542,543,545,546,547,548,549,550,551,552,557,558,560,561,562,563,564,565,567,568,569,570,571,572,573,574,575,576,577,578,579,580,581,583,584,585,586,587,588,589,590,591,592,594,597,599,601,602,603,604,605,606,607,609,610,611,613,614,615,616,617,619,620,621,622,623,624,625,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,646,647,648,649,650,651,653,654,655,656,657,658,659,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678,679,681,682,683,684,685,686,687,688,689,690,691,692,693,694,695,696,699,701,702,704,705,706,707,708,709,710,712,713,714,715,716,717,718,719,720,721,723,724,725,726,727,728,729,731,732,733,734,735,736,737,739,740,741,742,743,744,746,747,748,749,751,752,753,754,755,756,757,758,759,760,761,762,763,764,765,766,767,768,769,770,771,772,773,774,775,776,779,782,785,788,789,790,792,793,794,795,796,798,799,800,801,802,803,804,806,807,808,809,810,811,812,813,814,815,816,817,818,819,820,821,825,826,827,828,829,830,831,832,835,836,837,838,839,840,841,842,843,844,845,846,847,848,849,850,851,852,853,854,855,856,857,858,859,860,861,863,864,865,866,867,868,869,870,871,872,873,874,875,876,877,878,879,880,881,882,883,884,885,887,888,889,890,891,892,893,894,895,896,897,898,899,900,901,902,903,904,905,906,907,908,909,910,911,912,913,914,915,916,917,918,919,920,921,922,923,924,925,926,927,928,929,930,931,932,933,934,935,936,937,938,939,940,941,942,943,944,945,946,947,948,949,950,951,953,954,955,956,957,958,959,960,961,962,963,966,967,968,969,970,971,972,973,974,975,976,977,978,979,980,981,982,983,984,985,986,987,988,989,990,991,992,993,994,995,996,997,998,999,1000,1001,1002,1003,1004,1005,1006,1007,1008,1009,1010,1011,1012,1014,1015,1016,1017,1018,1019,1020,1021,1022,1023,1024,1025,1026,1027,1028,1029,1030,1031,1032,1033,1034,1035,1036,1037,1038,1039,1040,1041,1042,1043,1044,1045,1046,1047,1048,1049,1050,1051,1052,1053,1054,1055,1056,1057,1058,1059,1060,1061,1062,1063,1064,1065,1066,1067,1068,1069,1070,1071,1072,1073);

        foreach ($fieldsTemp as $item) {
            $fieldsTemp[$item] = $item;
        }
        */
        // debug


        $productsCount = sizeof($fieldsTemp);
        $min = $productsCount * (.5 / 100);
        $max = $productsCount * (2 / 100);
        $fieldsTemp = array_rand($fieldsTemp, rand(round($min),round($max)));
        $res = $this->update('pseudoDiscountProducts', implode(',', $fieldsTemp));

        print_r($fieldsTemp);
        return $this->get('pseudoDiscountProducts');
    }



    public function setPseudoDiscountProducts() {
        $sql = $this->queryFactory->newSqlQuery();
        $sql->setStatement("SELECT product_id FROM ok_products_categories pc JOIN ( SELECT RAND() * (SELECT MAX(product_id) FROM ok_products_categories) AS max_id ) AS m WHERE pc.product_id >= m.max_id group by category_id");
        $this->db->query($sql);
        $fieldsTemp = $this->db->results('product_id', 'product_id');

        $res = $this->update('pseudoDiscountProducts', implode(',', $fieldsTemp));

        print_r($fieldsTemp);
        return $this->get('pseudoDiscountProducts');
    }



}
