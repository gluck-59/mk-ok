<?php

    namespace Okay\Admin\Helpers;
    class Server
    {
        public function printr($input = null, $die = false) {
            $html = '<pre>';
            $html .= print_r($input);
            $html .= '</pre>';

            echo $html;
            if ($die) die;
        }
    }