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
    <div class="col-md-4">
        <div id='categoryViews'>
            <img src="design/images/ajax_preloader.gif">
        </div>
    </div>
    <div class="col-md-4">
        <div id='manufacturerViews'>
            <img src="design/images/ajax_preloader.gif">
        </div>
    </div>
    <div class="col-md-4">
        <div id='brandViews'>
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
    });
    // Apply the theme
    var highchartsOptions = Highcharts.setOptions(Highcharts.theme);






    /***** categoryViews ****************/

        (function (H) {
            H.seriesTypes.pie.prototype.animate = function (init) {
                const series = this,
                    chart = series.chart,
                    points = series.points,
                    {
                        animation
                    } = series.options,
                    {
                        startAngleRad
                    } = series;

                function fanAnimate(point, startAngleRad) {
                    const graphic = point.graphic,
                        args = point.shapeArgs;

                    if (graphic && args) {

                        graphic
                            // Set inital animation values
                            .attr({
                                start: startAngleRad,
                                end: startAngleRad,
                                opacity: 1
                            })
                            // Animate to the final position
                            .animate({
                                start: args.start,
                                end: args.end
                            }, {
                                duration: animation.duration / points.length
                            }, function () {
                                // On complete, start animating the next point
                                if (points[point.index + 1]) {
                                    fanAnimate(points[point.index + 1], args.end);
                                }
                                // On the last point, fade in the data labels, then
                                // apply the inner size
                                if (point.index === series.points.length - 1) {
                                    series.dataLabelsGroup.animate({
                                            opacity: 1
                                        },
                                        void 0,
                                        function () {
                                            points.forEach(point => {
                                                point.opacity = 1;
                                            });
                                            series.update({
                                                enableMouseTracking: true
                                            }, false);
                                            chart.update({
                                                plotOptions: {
                                                    pie: {
                                                        innerSize: '40%',
                                                        borderRadius: 8
                                                    }
                                                }
                                            });
                                        });
                                }
                            });
                    }
                }

                if (init) {
                    // Hide points on init
                    points.forEach(point => {
                        point.opacity = 0;
                    });
                } else {
                    fanAnimate(points[0], startAngleRad);
                }
            };
        }(Highcharts));

getViewStat("ajax/statViews.php").then(response =>
         Highcharts.chart('categoryViews', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Что смотрят'
            },
            subtitle: {
                text: 'По категориям'
            },
            tooltip: {
                headerFormat: '',
                pointFormat:
                    '<span style="color:{point.color}">\u25cf</span> ' +
                    '{point.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    borderWidth: 2,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b><br>{point.percentage:.0f}%',
                        distance: 30,
                    }
                }
            },
            series: [{
                // Disable mouse tracking on load, enable after custom animation
                enableMouseTracking: false,
                animation: {
                    duration: 1000
                },
                colorByPoint: true,
                data: response.category
            }]
        },
             Highcharts.chart('brandViews', {
                 chart: {
                     type: 'pie'
                 },
                 title: {
                     text: 'Что смотрят'
                 },
                 subtitle: {
                     text: 'По маркам'
                 },
                 tooltip: {
                     headerFormat: '',
                     pointFormat:
                         '<span style="color:{point.color}">\u25cf</span> ' +
                         '{point.name}: <b>{point.percentage:.1f}%</b>'
                 },
                 accessibility: {
                     point: {
                         valueSuffix: '%'
                     }
                 },
                 plotOptions: {
                     pie: {
                         allowPointSelect: true,
                         borderWidth: 2,
                         cursor: 'pointer',
                         dataLabels: {
                             enabled: true,
                             format: '<b>{point.name}</b><br>{point.percentage:.0f}%',
                             distance: 30,
                         }
                     }
                 },
                 series: [{
                     // Disable mouse tracking on load, enable after custom animation
                     enableMouseTracking: false,
                     animation: {
                         duration: 1000
                     },
                     colorByPoint: true,
                     data: response.brand
                 }]
             })



         ))
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
