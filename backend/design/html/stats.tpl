{$meta_title=$btr->stats_stats scope=global}
<link rel="stylesheet" href="design/css/table.css">
{literal}
    <script>
        // $.getJSON('ajax/statViews.php', function (data) {
        //     window.dataViews = data
        //     // console.log('dataViews', window.dataViews)
        // });
    </script>
{/literal}
{*Название страницы*}
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="heading_page">{$btr->stats_views|escape}
            <i class="fn_tooltips" title="{$btr->tooltip_stats_views|escape}">
                {include file='svg_icon.tpl' svgId='icon_tooltips'}
            </i>
        </div>
    </div>
</div>
{*Контент статистики просмотров*}
<div class="row">
    <div class="col-md-12">
        <div id='categoryViews'>
            <img src="design/images/ajax_preloader.gif">
        </div>
    </div>
</div>


<!--------------------------------------------------------------->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="heading_page">{$btr->stats_orders|escape}
            <i class="fn_tooltips" title="{$btr->tooltip_stats_stats|escape}">
                {include file='svg_icon.tpl' svgId='icon_tooltips'}
            </i>
        </div>
    </div>
</div>

{*Контент статистики заказов*}
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="boxed fn_toggle_wrap">
            <div id='container'></div>
        </div>
    </div>
</div>
{* On document load *}
<script>
    var stats_orders = '{$btr->stats_orders|escape}';
    var stats_message = '{$btr->stats_message|escape}';
    var stats_orders_amount =  '{$btr->stats_orders_amount|escape}';
</script>
{literal}
    <script src="design/js/highcharts/highcharts.js" type="text/javascript"></script>
    <script src="design/js/highcharts/themes/avocado.js" type="text/javascript"></script>
    <script src="design/js/highcharts/modules/exporting.js" type="text/javascript"></script>

<script>
    var chart;
    $(function() {
        var options = {
            exporting: {
                chartOptions: { // specific options for the exported image
                    plotOptions: {
                        series: {
                            dataLabels: {
                                enabled: true
                            }
                        }
                    }
                },
                fallbackToExportServer: false
            },
            chart: {
                zoomType: 'x',
                renderTo: 'container',
                defaultSeriesType: 'area',
                type : "line"
            },
            title: {
                text: stats_orders
            },
            subtitle: {
                text: stats_message
            },
            xAxis: {
                type: 'datetime',
                minRange: 7 * 24 * 3600000,
                maxZoom: 7 * 24 * 3600000,
                gridLineWidth: 1,
                ordinal: true,
                showEmpty: false
            },
            yAxis: {
                title: {
                    text: '{/literal}{$currency->name|escape}{literal}'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: true,
                    connectNulls: false
                },
                area: {
                    marker: {
                        enabled: false
                    },
                }
            },
            series: []
        };

        $.get('ajax/stat.php', function(data){
            var series = {
                data: []
            };
            var minDate = Date.UTC(data[0].year, data[0].month-1, data[0].day),
                maxDate = Date.UTC(data[data.length-1].year, data[data.length-1].month-1, data[data.length-1].day);

            var newDates = [], currentDate = minDate, d;

            while (currentDate <= maxDate) {
                d = new Date(currentDate);
                newDates.push((d.getMonth() + 1) + '/' + d.getDate() + '/' + d.getFullYear());
                currentDate += (24 * 60 * 60 * 1000); // add one day
            }
            series.name = stats_orders_amount + '{/literal}{$currency->sign|escape}{literal}';

            // Iterate over the lines and add categories or series
            $.each(data, function(lineNo, line) {
                series.data.push([Date.UTC(line.year, line.month-1, line.day), parseInt(line.y)]);
            });
            //
            options.series.push(series);

            // Create the chart
            var chart = new Highcharts.Chart(options);
        });
    Highcharts.setOptions({
        colors: ['#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263',      '#6AF9C4']
    });


    });

    // Apply the theme
    // var highchartsOptions = Highcharts.setOptions(Highcharts.theme);






    /***** categoryViews ****************/



getViewStat("ajax/statViews.php").then(response =>
    Highcharts.chart('categoryViews', {
      chart: {
        height: 500,
        type: 'pie',
        events: {
          render: function() {
            const chart = this,
                  renderer = chart.renderer;

            chart.series.forEach(series => {
              if (!series.customLabel) {
                series.customLabel = renderer.text(series.name).attr({
                  y: 50,
                  'text-anchor': 'middle'
                }).add();
              }

              const bBox = series.customLabel.getBBox();
              series.customLabel.attr({
                x: series.center[0] + chart.plotLeft
              });
            })
          }
        }
      },
      credits: {
        enabled: false
      },
        title: {
            text: 'Статистика просмотров'
        },
      tooltip: {
        pointFormat: '{point.name} {point.percentage:.0f}%<br>{point.y}'
      },
      plotOptions: {
        pie: {
          backgroundColor: null,
          allowPointSelect: true,
          cursor: 'pointer',
          depth: 30,
          dataLabels: {
            formatter: function() {
              if (this.y > 0) {
                return `${this.point.name} ${this.point.y}`
              }
            },
            enabled: true,
            connectorColor: '#777777',
            connectorWidth: 1.5,
          },
          alignColumns: true,
          states: {
            inactive: {
              enabled: false
            },
            hover: {
              enabled: false
            }
          }
        }
      },
      series: [{
        name: 'Категории',
        colorByPoint: true,
        type: 'pie',
        data: response.category,
        center: ['50%', '50%'],
        size: '70%',
        showInLegend: false,
        point: {
          events: {
            legendItemClick: function() {
              const point = this,
                    series = point.series.chart.series;

              for (let i = 1; i < 3; i++) {
                series[i].points[point.index].setVisible(!point.visible);
              }
            }
          }
        }
      }
      /*, {
        name: 'Марки',
        colorByPoint: true,
        type: 'pie',
          data: response.brand,
        center: ['50%', 200],
        size: '80%'
      }, {
        name: 'Производители',
        colorByPoint: true,
        type: 'pie',
          data: response.manufacturer,
        center: ['85%', 200],
        size: '80%'
      }*/
      ]
    }))
    .catch(error =>
        console.error(error)
    );



    // вызов промиса
    function getViewStat(url) {
        return new Promise((succeed, fail) => {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", url);
            xhr.addEventListener("load", () => {
                if (xhr.status >=200 && xhr.status < 400)
                    succeed(JSON.parse(xhr.response));
                else
                    fail(new Error(`из промиса: Request failed ${xhr.statusText}`));
            });
            xhr.addEventListener("error из промиса", () => fail(new Error("ХЗ что")));
            xhr.send();
        });
    }

    // console.log('statViews', $.getJSON('ajax/statViews.php', function (data) {return data}))
</script>
{/literal}
