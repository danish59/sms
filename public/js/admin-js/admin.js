'use strict';
$(document).ready(function() {

    // Just guage charts
    window.onload = function() {
        var gauge1 = new JustGage({
            id: "gauge1",
            relativeGaugeSize: true,
            value: getRandomInt(0, 100),
            min: 0,
            max: 100,
            decimals: 0,
            valueFontFamily: "Source Sans Pro, sans-serif",
            levelColors: ["#4fb7fe"],
            counter: true
        });

        var gauge2 = new JustGage({
            id: "gauge2",
            relativeGaugeSize: true,
            value: getRandomInt(0, 100),
            min: 0,
            max: 100,
            humanFriendly: false,
            valueFontFamily: "Source Sans Pro, sans-serif",
            decimals: 0,
            levelColors: ["#00cc99"],
            counter: true
        });

        var gauge3 = new JustGage({
            id: "gauge3",
            relativeGaugeSize: true,
            value: getRandomInt(0, 100),
            min: 0,
            max: 100,
            valueFontFamily: "Source Sans Pro, sans-serif",
            levelColors: ["#347dff"],
            decimals: 1,
            counter: true
        });

        var gauge4 = new JustGage({
            id: "gauge4",
            relativeGaugeSize: true,
            value: getRandomInt(0, 100),
            min: 0,
            max: 100,
            decimals: 0,
            levelColors: ["#EF6F6C"],
            valueFontFamily: "Source Sans Pro, sans-serif",
            counter: true
        });

        setInterval(function() {
            gauge1.refresh(getRandomInt(50, 100));
            gauge2.refresh(getRandomInt(50, 100));
            gauge3.refresh(getRandomInt(0, 50));
            gauge4.refresh(getRandomInt(0, 50));
        }, 2500);
    };
    // End of just guage charts

    // stacked area chart
    var chart = c3.generate({
        bindto: '#chart2',
        data: {
            columns: [
                ['data1', 30, 300, 100, 400, 150, 300],
                ['data2', 300, 130, 350, 130, 300, 80]
            ],
            type: 'bar',
            colors: {
                data1: '#0fb0c0',
                data2: '#4fb7fe',
                data3: '#00cc99'
            },
            color: function(color, d) {
                return d.id && d.id === 'data3' ? d3.rgb(color) : color;
            }
        }
    });
    setTimeout(function() {
        chart.transform('area-spline', 'data1');
    }, 1000);

    setTimeout(function() {
        chart.transform('area-spline', 'data2');
    }, 2000);

    setTimeout(function() {
        chart.transform('bar');
    }, 3000);

    setTimeout(function() {
        chart.transform('area-spline');
    }, 4000);
    // End of stacked area chart

    // Scatter plot
    var chart3 = c3.generate({
        bindto: '#chart3',
        data: {
            columns: [
                ["setosa", 2, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
                ["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3]
            ],
            type: 'scatter'
        },
        axis: {
            x: {
                label: 'Sepal.Width',
                tick: {
                    fit: false
                }
            },
            y: {
                label: 'Petal.Width'
            }
        }
    });

    // End of Scatter plot

    // Donut chart
    var chart1 = c3.generate({
        bindto: '#chart1',
        data: {
            columns: [
                ['data1', 30],
                ['data2', 120]
            ],
            type: 'donut'
        },
        donut: {
            title: "Iris Petal Width"
        },
        color: {
            pattern: ['#4fb7fe', '#00cc99', '#347dff', '#ff9933', '#69B3BF']
        }
    });

    setTimeout(function() {
        chart1.load({
            columns: [
                ["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                ["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
                ["virginica", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8]
            ]
        });
    }, 1500);

    setTimeout(function() {
        chart1.unload({
            ids: 'data1'
        });
        chart1.unload({
            ids: 'data2'
        });
    }, 2500);
    // End of donut chart

    // Line chart
    var chart4 = c3.generate({
        bindto: '#chart4',
        data: {
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
                ['data2', 50, 20, 10, 40, 15, 25]
            ],
            axes: {
                data1: 'y',
                data2: 'y2'
            }
        },
        axis: {
            y2: {
                show: true
            }
        }
    });

    setTimeout(function() {
        chart4.axis.max(500);
    }, 1000);

    setTimeout(function() {
        chart4.axis.min(-500);
    }, 2000);

    setTimeout(function() {
        chart4.axis.max({ y: 600, y2: 100 });
    }, 3000);

    setTimeout(function() {
        chart4.axis.min({ y: -600, y2: -100 });
    }, 4000);

    setTimeout(function() {
        chart4.axis.range({ max: 1000, min: -1000 });
    }, 5000);

    setTimeout(function() {
        chart4.axis.range({ max: { y: 600, y2: 100 }, min: { y: -100, y2: 0 } });
    }, 6000);

    setTimeout(function() {
        chart4.axis.max({ x: 10 });
    }, 7000);

    setTimeout(function() {
        chart4.axis.min({ x: -10 });
    }, 8000);

    setTimeout(function() {
        chart4.axis.range({ max: { x: 5 }, min: { x: 0 } });
    }, 9000);

    // En dof line chart

    $(".wrapper").on("resize", function() {
        setTimeout(function() {
            chart.resize();
            chart1.resize();
            chart3.resize();
            chart4.resize();
        }, 500);
    });
});

'use strict';
$(document).ready(function(){
    // Scroll - horizontal and Vertical Scroll Table
    $('#example').DataTable( {
        "scrollY": 200,
        "scrollX": true
    });
    //End of Scroll - horizontal and Vertical Scroll Table

    // advanced Table

    var table = $('#example_demo').DataTable({
        "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-responsive't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>"
    });
    var $example_demo= $('#example_demo tbody');
    $example_demo.on( 'mouseenter', 'td', function () {
        var colIdx = table.cell(this).index().column;
        $( table.cells().nodes() ).removeClass( 'highlight' );
        $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
        return false;
    } );
    $example_demo.on( 'mouseleave','td', function () {
        $( table.cells().nodes() ).removeClass( 'highlight' );
        return false;
    } );

    $example_demo.on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
        $('#del_button').on('click', function () {
            table.row('#example_demo tbody .selected').remove().draw( false );
            return false;
        } );
        return false;
    } );
    // End of advanced Table
});
"use strict";
$(document).ready(function() {
    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
        ele.each(function() {

            var eventObject = {
                title: $.trim($(this).text())
            };

            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 1070,
                revert: true,
                revertDuration: 0
            });
        });
    }
    ini_events($('#external-events div.external-event'));
    var evt_obj;

    /* initialize the calendar */
    //Date for the calendar events (dummy data)
    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();
    $('#calendar').fullCalendar({
        displayEventTime: false,
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        buttonText: {
            prev: "",
            next: "",
            today: 'today',
            month: 'M',
            week: 'W',
            day: 'D'
        },
        //Random events
        events: [{
            title: 'Team Out',
            start: new Date(y, m, 2),
            backgroundColor: "#ff9933"
        }, {
            title: 'Client Meeting',
            start: new Date(y, m, d - 2),
            end: new Date(y, m, d - 5),
            backgroundColor: "#ff6666"
        }, {
            title: 'Repeating Event',
            start: new Date(y, m, 6),
            backgroundColor: "#347dff"
        }, {
            title: 'Birthday Party',
            start: new Date(y, m, 12),
            backgroundColor: "#00cc99"
        }, {
            title: 'Product Seminar',
            start: new Date(y, m, 16),
            backgroundColor: "#0fb0c0"
        }, {
            title: 'Anniversary Celebrations',
            start: new Date(y, m, 26),
            backgroundColor: "#ff6666"
        }, {
            title: 'Client Meeting',
            start: new Date(y, m, 10),
            backgroundColor: "#00cc99"
        }],
        eventClick: function(calEvent, jsEvent, view) {
            evt_obj=calEvent;
            $("#event_title").val(evt_obj.title);
            currColor=evt_obj.backgroundColor;
            colorChooser.css({
                "background-color": evt_obj.backgroundColor,
                "border-color": evt_obj.backgroundColor
            }).html('type <span class="caret"></span>');
            $('#evt_modal').modal('show').on("shown.bs.modal",function(){
                $("#event_title").focus();
            }).on("hidden.bs.modal",function () {
                evt_obj="";
            });
            $(".text_save").on("click",function () {
                evt_obj.title=$("#event_title").val();
                evt_obj.backgroundColor=currColor;
                $('#calendar').fullCalendar('updateEvent', evt_obj);
                setTimeout(setpopover,100);
            });
        },
        editable: true,
        droppable: true,
        drop: function(date, allDay) {

            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');

            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);
            var $calendar_tag= $(".calendar_tag");
            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;
            copiedEventObject.backgroundColor = $(this).css("background-color");
            copiedEventObject.borderColor = $(this).css("border-color");

            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
            $calendar_tag.text(parseInt($calendar_tag.text()) + 1);
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                $(this).remove();
            }
            setpopover();
        },
        eventDrop: function() {
            setTimeout(setpopover,100);
        },
        eventResize:function() {
            setTimeout(setpopover,100);
        }
    });

    /* ADDING EVENTS */
    var currColor = "#737373"; //default
    //Color chooser button
    var colorChooser = $(".color-chooser-btn");
    $(".color-chooser > li").on('click',function(e) {
        e.preventDefault();
        //Save color
        currColor = $(this).css("background-color");
        //Add color effect to button
        colorChooser
            .css({
                "background-color": currColor,
                "border-color": currColor
            })
            .html($(this).text() + ' <span class="caret"></span>');
    });
    $("#add-new-event").on('click',function(e) {
        e.preventDefault();
        //Get value and make sure it is not null
        var $newevent= $("#new-event");
        var val = $newevent.val();
        if (val.length == 0) {
            return;
        }

        //Create event
        var event = $("<div />");
        event.css({
            "background-color": currColor,
            "border-color": currColor,
            "color": "#fff"
        }).addClass("external-event");
        event.html(val).append(' <i class="fa fa-times event-clear" aria-hidden="true"></i>');
        $('#external-events').prepend(event);

        //Add draggable funtionality
        ini_events(event);

        //Remove event from text input
        $newevent.val("");
    });
    $("body").on("click", "#external-events .event-clear", function() {
        $(this).closest(".external-event").remove();
        return false;
    });
    $(".modal-dialog [data-dismiss='modal']").on('click', function() {
        $("#new-event").replaceWith('<input type="text" id="new-event" class="form-control" placeholder="Event">');
    });

    function setpopover() {
        $(".fc-month-view").find(".fc-event-container a").each(function() {
            $(this).popover({
                placement: 'top',
                html: true,
                content: $(this).text(),
                trigger: 'hover'
            });
        });
        $(".fc-month-button").on('click',function () {
            $(".fc-event-container a").each(function() {
                $(this).popover({
                    placement: 'top',
                    html: true,
                    content: $(this).text(),
                    trigger: 'hover'
                });
            });
            return false;
        })
    }
    $(".fc-center").find('h2').css('font-size', '18px');
    setpopover();
});
"use strict";
$(document).ready(function () {
    $(".card-collapse").on('show.bs.collapse', function () {
        $(this).prev("div").find("i").removeClass("fa-plus").addClass("fa-minus");
    });
    $(".card-collapse").on('hide.bs.collapse', function () {
        $(this).prev("div").find("i").removeClass("fa-minus").addClass("fa-plus");
    });

//        swiper
    var swiper = new Swiper('.widget_swiper', {
        centeredSlides: true,
        autoplay: 2000,
        loop: true,
        autoplayDisableOnInteraction: false
    });
    $(".wrapper").on("resize", function() {
        setTimeout(function() {
            swiper.update();
        }, 400);
    });
});
'use strict';
$(document).ready(function(){
    // Donut chart
    var data1 = {
        series: [20, 20, 40, 20, 15, 40, 15],
        labels: [1, 2, 3, 4, 5, 6, 7]
    };
    var options1 = {
        donut: true,
        showLabel: false
    };
    var chart= new Chartist.Pie('#animated_chart', data1, options1);
    chart.on('draw', function(data) {
        if(data.type === 'slice') {
            var pathLength = data.element._node.getTotalLength();

            data.element.attr({
                'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
            });

            var animationDefinition = {
                'stroke-dashoffset': {
                    id: 'anim' + data.index,
                    dur: 500,
                    from: -pathLength + 'px',
                    to:  '0px',
                    easing: Chartist.Svg.Easing.easeOutQuint,
                    fill: 'freeze'
                }
            };

            if(data.index !== 0) {
                animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
            }

            data.element.attr({
                'stroke-dashoffset': -pathLength + 'px'
            });

            data.element.animate(animationDefinition, false);
        }
    });

    chart.on('created', function() {
        if(window.__anim21278907124) {
            clearTimeout(window.__anim21278907124);
            window.__anim21278907124 = null;
        }
        window.__anim21278907124 = setTimeout(chart.update.bind(chart), 5000);
    });

    // End of donut chart

    // Stacked bar chart
    var chart1= new Chartist.Bar('#stacked_chart', {
        labels: ['Q1', 'Q2', 'Q3', 'Q4'],
        series: [
            [300000, 200000, 800000, 300000],
            [500000, 700000, 300000, 300000],
            [800000, 200000, 400000, 300000]
        ]
    }, {
        stackBars: true,
        axisY: {
            labelInterpolationFnc: function(value) {
                return (value / 1000) + 'k';
            }
        }
    });
    chart1.on('draw', function(data) {
        if(data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 30px'
            });
        }
    });

    // End of stacked bar chart

    // Peak circles Bi-Pplar Bar Chart
    var chart3 = new Chartist.Bar('#draw_events', {
        labels: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10'],
        series: [
            [1, 2, 4, 8, 6, -2, -1, -4, -6, -2]
        ]
    }, {
        high: 10,
        low: -10,
        axisX: {
            labelInterpolationFnc: function(value, index) {
                return index % 2 === 0 ? value : null;
            }
        }
    });

    chart3.on('draw', function(data) {
        if(data.type === 'bar') {
            data.group.append(new Chartist.Svg('circle', {
                cx: data.x2,
                cy: data.y2,
                r: Math.abs(Chartist.getMultiValue(data.value)) * 2 + 2
            }, 'ct-slice-pie'));
        }
    });
    // End of Peak circles Bi-Pplar Bar Chart

    // Smil animation
    var data4 = {
        labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
        series: [
            [12, 9, 7, 8, 5, 9, 12, 8, 5, 3, 4, 6],
            [4,  8, 12, 8, 3, 5, 5, 10, 4, 12, 5, 5],
            [5,  3, 4, 5, 6, 3, 3, 4, 5, 6, 3, 4],
            [3,  4, 5, 6, 4, 6, 4, 5, 6, 3, 6, 3]
        ]
    };
    var options4 = {
        low: 0
    };
    var chart4= new Chartist.Line('#smil_animation', data4, options4);

// Let's put a sequence number aside so we can use it in the event callbacks
    var seq = 0,
        delays = 50,
        durations = 500;

// Once the chart is fully created we reset the sequence
    chart4.on('created', function() {
        seq = 0;
    });

// On each drawn element by Chartist we use the Chartist.Svg API to trigger SMIL animations
    chart4.on('draw', function(data) {
        seq++;

        if(data.type === 'line') {
            // If the drawn element is a line we do a simple opacity fade in. This could also be achieved using CSS3 animations.
            data.element.animate({
                opacity: {
                    // The delay when we like to start the animation
                    begin: seq * delays ,
                    // Duration of the animation
                    dur: durations,
                    // The value where the animation should start
                    from: 0,
                    // The value where it should end
                    to: 1
                }
            });
        } else if(data.type === 'label' && data.axis === 'x') {
            data.element.animate({
                y: {
                    begin: seq * delays,
                    dur: durations,
                    from: data.y + 100,
                    to: data.y,
                    // We can specify an easing function from Chartist.Svg.Easing
                    easing: 'easeOutQuart'
                }
            });
        } else if(data.type === 'label' && data.axis === 'y') {
            data.element.animate({
                x: {
                    begin: seq * delays,
                    dur: durations,
                    from: data.x - 100,
                    to: data.x,
                    easing: 'easeOutQuart'
                }
            });
        } else if(data.type === 'point') {
            data.element.animate({
                x1: {
                    begin: seq * delays,
                    dur: durations,
                    from: data.x - 10,
                    to: data.x,
                    easing: 'easeOutQuart'
                },
                x2: {
                    begin: seq * delays,
                    dur: durations,
                    from: data.x - 10,
                    to: data.x,
                    easing: 'easeOutQuart'
                },
                opacity: {
                    begin: seq * delays,
                    dur: durations,
                    from: 0,
                    to: 1,
                    easing: 'easeOutQuart'
                }
            });
        } else if(data.type === 'grid') {
            // Using data.axis we get x or y which we can use to construct our animation definition objects
            var pos1Animation = {
                begin: seq * delays,
                dur: durations,
                from: data[data.axis.units.pos + '1'] - 30,
                to: data[data.axis.units.pos + '1'],
                easing: 'easeOutQuart'
            };

            var pos2Animation = {
                begin: seq * delays,
                dur: durations,
                from: data[data.axis.units.pos + '2'] - 100,
                to: data[data.axis.units.pos + '2'],
                easing: 'easeOutQuart'
            };

            var animations = {};
            animations[data.axis.units.pos + '1'] = pos1Animation;
            animations[data.axis.units.pos + '2'] = pos2Animation;
            animations['opacity'] = {
                begin: seq * delays,
                dur: durations,
                from: 0,
                to: 1,
                easing: 'easeOutQuart'
            };

            data.element.animate(animations);
        }
    });

// For the sake of the example we update the chart every time it's created with a delay of 10 seconds

    chart4.on('created', function() {
        if(window.__exampleAnimateTimeout) {
            clearTimeout(window.__exampleAnimateTimeout);
            window.__exampleAnimateTimeout = null;
        }
        window.__exampleAnimateTimeout = setTimeout(chart.update.bind(chart), 12000);
    });

    // End of smil animation

    // Path animation
    var data5 = {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        series: [
            [1, 7, 3, 2, 4, 3],
            [2, 3, 2, 8, 6, 2],
            [5, 4, 3, 5, 1, 0.5]
        ]
    };
    var options5 = {
        low: 0,
        showArea: true,
        showPoint: false,
        fullWidth: true
    };
    var chart5= new Chartist.Line('#path_animation', data5, options5);

    chart5.on('draw', function(data) {
        if(data.type === 'line' || data.type === 'area') {
            data.element.animate({
                d: {
                    begin: 2000 * data.index,
                    dur: 2000,
                    from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                    to: data.path.clone().stringify(),
                    easing: Chartist.Svg.Easing.easeOutQuint
                }
            });
        }
    });
    // En dof path animation

    // Multi line labels
    var data6 = {
        labels: ['First quarter of the year', 'Second quarter of the year', 'Third quarter of the year', 'Fourth quarter of the year'],
        series: [
            [60000, 40000, 80000, 70000],
            [40000, 30000, 70000, 65000],
            [8000, 3000, 10000, 6000]
        ]
    };
    var options6 = {
        seriesBarDistance: 10,
        axisX: {
            offset: 60
        },
        axisY: {
            offset: 80,
            labelInterpolationFnc: function(value) {
                return value + ' CHF'
            },
            scaleMinSpace: 30
        }
    };
    var chart6= new Chartist.Bar('#multi_line', data6, options6);
    // End of multi line labels

    $("#menu-toggle, .toggle-right").on("click", function () {
        setTimeout(function () {
            new Chartist.Pie('#animated_chart', data1, options1);
            var chart1= new Chartist.Bar('#stacked_chart', {
                labels: ['Q1', 'Q2', 'Q3', 'Q4'],
                series: [
                    [300000, 200000, 800000, 300000],
                    [500000, 700000, 300000, 300000],
                    [800000, 200000, 400000, 300000]
                ]
            }, {
                stackBars: true,
                axisY: {
                    labelInterpolationFnc: function(value) {
                        return (value / 1000) + 'k';
                    }
                }
            });
            chart1.on('draw', function(data) {
                if(data.type === 'bar') {
                    data.element.attr({
                        style: 'stroke-width: 30px'
                    });
                }
            });
            var chart3 = new Chartist.Bar('#draw_events', {
                labels: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10'],
                series: [
                    [1, 2, 4, 8, 6, -2, -1, -4, -6, -2]
                ]
            }, {
                high: 10,
                low: -10,
                axisX: {
                    labelInterpolationFnc: function(value, index) {
                        return index % 2 === 0 ? value : null;
                    }
                }
            });
            chart3.on('draw', function(data) {
                if(data.type === 'bar') {
                    data.group.append(new Chartist.Svg('circle', {
                        cx: data.x2,
                        cy: data.y2,
                        r: Math.abs(Chartist.getMultiValue(data.value)) * 2 + 2
                    }, 'ct-slice-pie'));
                }
            });
            new Chartist.Line('#smil_animation', data4, options4);
            new Chartist.Line('#path_animation', data5, options5);
            new Chartist.Bar('#multi_line', data6, options6);
        }, 500);
    });



});
'use strict';
$(document).ready(function(){

    var console = window.console || { log: function () {} };
    var $image = $('#image');
    var $download = $('#download');
    var $dataX = $('#dataX');
    var $dataY = $('#dataY');
    var $dataHeight = $('#dataHeight');
    var $dataWidth = $('#dataWidth');
    var $dataRotate = $('#dataRotate');
    var $dataScaleX = $('#dataScaleX');
    var $dataScaleY = $('#dataScaleY');
    var options = {
        aspectRatio: 16 / 9,
        preview: '.img-preview',
        crop: function (e) {
            $dataX.val(Math.round(e.x));
            $dataY.val(Math.round(e.y));
            $dataHeight.val(Math.round(e.height));
            $dataWidth.val(Math.round(e.width));
            $dataRotate.val(e.rotate);
            $dataScaleX.val(e.scaleX);
            $dataScaleY.val(e.scaleY);
        }
    };

    // Cropper
    $image.on({
        'build.cropper': function (e) {
            console.log(e.type);
        },
        'built.cropper': function (e) {
            console.log(e.type);
        },
        'cropstart.cropper': function (e) {
            console.log(e.type, e.action);
        },
        'cropmove.cropper': function (e) {
            console.log(e.type, e.action);
        },
        'cropend.cropper': function (e) {
            console.log(e.type, e.action);
        },
        'crop.cropper': function (e) {
            console.log(e.type, e.x, e.y, e.width, e.height, e.rotate, e.scaleX, e.scaleY);
        },
        'zoom.cropper': function (e) {
            console.log(e.type, e.ratio);
        }
    }).cropper(options);


    // Buttons
    if (!$.isFunction(document.createElement('canvas').getContext)) {
        $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
    }

    if (typeof document.createElement('cropper').style.transition === 'undefined') {
        $('button[data-method="rotate"]').prop('disabled', true);
        $('button[data-method="scale"]').prop('disabled', true);
    }


    // Download
    if (typeof $download[0].download === 'undefined') {
        $download.addClass('disabled');
    }



    // Methods
    $('.docs-buttons').on('click', '[data-method]', function () {
        var $this = $(this);
        var data = $this.data();
        var $target;
        var result;

        if ($this.prop('disabled') || $this.hasClass('disabled')) {
            return;
        }

        if ($image.data('cropper') && data.method) {
            data = $.extend({}, data); // Clone a new one

            if (typeof data.target !== 'undefined') {
                $target = $(data.target);

                if (typeof data.option === 'undefined') {
                    try {
                        data.option = JSON.parse($target.val());
                    } catch (e) {
                        console.log(e.message);
                    }
                }
            }

            if (data.method === 'rotate') {
                $image.cropper('clear');
            }

            result = $image.cropper(data.method, data.option, data.secondOption);

            if (data.method === 'rotate') {
                $image.cropper('crop');
            }

            switch (data.method) {
                case 'scaleX':
                case 'scaleY':
                    $(this).data('option', -data.option);
                    break;

                case 'getCroppedCanvas':
                    if (result) {

                        // Bootstrap's Modal
                        $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

                        if (!$download.hasClass('disabled')) {
                            $download.attr('href', result.toDataURL('image/jpeg'));
                        }
                    }

                    break;
            }

            if ($.isPlainObject(result) && $target) {
                try {
                    $target.val(JSON.stringify(result));
                } catch (e) {
                    console.log(e.message);
                }
            }

        }
    });


    // Keyboard
    $(document.body).on('keydown', function (e) {

        if (!$image.data('cropper') || this.scrollTop > 300) {
            return;
        }

        switch (e.which) {
            case 37:
                e.preventDefault();
                $image.cropper('move', -1, 0);
                break;

            case 38:
                e.preventDefault();
                $image.cropper('move', 0, -1);
                break;

            case 39:
                e.preventDefault();
                $image.cropper('move', 1, 0);
                break;

            case 40:
                e.preventDefault();
                $image.cropper('move', 0, 1);
                break;
        }

    });


    // Import image
    var $inputImage = $('#inputImage');
    var URL = window.URL || window.webkitURL;
    var blobURL;

    if (URL) {
        $inputImage.on("change",function () {
            var files = this.files;
            var file;

            if (!$image.data('cropper')) {
                return;
            }

            if (files && files.length) {
                file = files[0];

                if (/^image\/\w+$/.test(file.type)) {
                    blobURL = URL.createObjectURL(file);
                    $image.one('built.cropper', function () {

                        // Revoke when load complete
                        URL.revokeObjectURL(blobURL);
                    }).cropper('reset').cropper('replace', blobURL);
                    $inputImage.val('');
                } else {
                    window.alert('Please choose an image file.');
                }
            }
        });
    } else {
        $inputImage.prop('disabled', true).parent().addClass('disabled');
    }

});
'use strict';
$(document).ready(function() {
    TableAdvanced.init();
    $(".dataTables_scrollHeadInner .table").addClass("table-responsive");
    $(".dataTables_wrapper .dt-buttons .btn").addClass('btn-secondary').removeClass('btn-default');
});
var TableAdvanced = function() {
    // ===============table 1====================
    var initTable1 = function() {
        var table = $('#sample_1');
        /* Table tools samples: https://www.datatables.net/release-datatables/extras/TableTools/ */
        /* Set tabletools buttons and button container */
        table.DataTable({
            dom: 'Bflr<"table-responsive"t>ip',
            buttons: [
                'copy', 'csv', 'print'
            ]
        });
        var tableWrapper = $('#sample_1_wrapper'); // datatable creates the table wrapper by adding with id {your_table_id}_wrapper
        tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
    }
    // ===============table 1===============
    // ====================table 4===============
    var initTable4 = function() {
        var table = $('#sample_4');

        /* Formatting function for row expanded details */
        function fnFormatDetails(oTable, nTr) {
            var aData = oTable.fnGetData(nTr);
            var sOut = '<table>';
            sOut += '<tr><td>Name:</td><td>' + aData[1] + '</td></tr>';
            sOut += '<tr><td>Age:</td><td>' + aData[2] + '</td></tr>';
            sOut += '<tr><td>Location:</td><td>' + aData[3] + '</td></tr>';
            sOut += '<tr><td>Contact:</td><td>' + aData[4] + '</td></tr>';
            sOut += '<tr><td>Email:</td><td>' + aData[5] + '</td></tr>';
            sOut += '<tr><td>Others:</td><td>Could provide a link here</td></tr>';
            sOut += '</table>';
            return sOut;
        }
        /*
         * Insert a 'details' column to the table
         */
        var nCloneTh = document.createElement('th');
        nCloneTh.className = "table-checkbox";

        var nCloneTd = document.createElement('td');
        nCloneTd.innerHTML = '<span class="row-details row-details-close"></span>';

        table.find('thead tr').each(function() {
            this.insertBefore(nCloneTh, this.childNodes[0]);
        });

        table.find('tbody tr').each(function() {
            this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
        });

        var oTable = table.dataTable({
            "dom": "<'row'<'col-md-6 col-xs-12'l><'col-md-6 col-xs-12'f>r><'table-responsive't><'row'<'col-md-5 col-xs-12'i><'col-md-7 col-xs-12'p>>", // datatable layout without  horizobtal scroll
            "columnDefs": [{
                "orderable": false,
                "targets": [0]
            }],
            "order": [
                [1, 'asc']
            ],
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 5
        });

        var tableWrapper = $('#sample_4_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
        var tableColumnToggler = $('#sample_4_column_toggler');

        /* modify datatable control inputs */
        tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown

        /* Add event listener for opening and closing details
         * Note that the indicator for showing which row is open is not controlled by DataTables,
         * rather it is done here
         */
        table.on('click', ' tbody td .row-details', function() {
            var nTr = $(this).parents('tr')[0];
            if (oTable.fnIsOpen(nTr)) {
                /* This row is already open - close it */
                $(this).addClass("row-details-close").removeClass("row-details-open");
                oTable.fnClose(nTr);
            } else {
                /* Open this row */
                $(this).addClass("row-details-open").removeClass("row-details-close");
                oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
            }
            return false;
        });

        /* handle show/hide columns*/
        $('input[type="checkbox"]', tableColumnToggler).on("change",function() {
            /* Get the DataTables object again - this is not a recreation, just a get of the object */
            var iCol = parseInt($(this).attr("data-column"));
            var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
            oTable.fnSetColumnVis(iCol, (bVis ? false : true));
            return false;
        });
    }
    // =======================table4==================
    // ==================table5===================
    var initTable5 = function() {

        var table = $('#sample_5');

        /* Fixed header extension: http://datatables.net/extensions/scroller/ */

        var oTable = table.dataTable({
            "dom": "<'row'<'col-md-6 col-xs-12'l><'col-md-6 col-xs-12'f>r>t<'row'<'col-md-5 col-xs-12'i><'col-md-7 col-xs-12'p>>", // datatable layout without  horizobtal scroll
            "scrollY": "200",
            "deferRender": true,
            "paging": false,
            "order": [
                [0, 'asc']
            ],
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            "pageLength": 15 // set the initial value
        });


        var tableWrapper = $('#sample_5_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
        tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
    }
    // ===================table 5========================
    // ==================table 6=======================
    var initTable6 = function() {
        var table = $('#sample_6');
        /* Fixed header extension: http://datatables.net/extensions/keytable/ */
        var oTable = table.dataTable({
            "dom": "<'row'<'col-md-6 col-xs-12'l><'col-md-6 col-xs-12'f>r><'table-responsive't><'row'<'col-md-5 col-xs-12'i><'col-md-7 col-xs-12'p>>",
            "order": [
                [0, 'asc']
            ],
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            "pageLength": 5 // set the initial value,
        });
        var oTableColReorder = new $.fn.dataTable.ColReorder(oTable);
        var tableWrapper = $('#sample_6_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
        tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
    }
    // =====================table 6======================
    return {
        //main function to initiate the module
        init: function() {
            if (!jQuery().dataTable) {
                return;
            }
            initTable1();
            initTable4();
            initTable5();
            initTable6();
        }
    };
}();


'use strict';
$(document).ready(function () {
    Admire.formGeneral();

    // Date picker
    $('#dp1').datepicker({
        format: 'dd-mm-yyyy',
        todayHighlight: true,
        autoclose: true,
        orientation:"bottom"
    });
    $('#dp2').datepicker({
        todayHighlight: true,
        autoclose: true,
        orientation:"bottom"
    });
    $('#dp3').datepicker({
        todayHighlight: true,
        autoclose: true,
        orientation:"bottom"
    });
    $("#dtBox").DateTimePicker();
    $('#dpYears').datepicker({
        todayHighlight: true,
        autoclose: true,
        orientation:"bottom"
    });
    $('#dpMonths').datepicker({
        todayHighlight: true,
        autoclose: true,
        startView: "months",
        minViewMode: "months",
        orientation:"bottom"
    });
    // End of datepicker

    // Date range picker
    $('#date_range').daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        }
    });
    $('#date_range').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        return false;
    });

    $('#date_range').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
        return false;
    });
    $('#reservation').daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        }
    });

    $('#reservation').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
        return false;
    });

    $('#reservation').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
        return false;
    });
    $('#reportrange').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            },
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                'Last 7 Days': [moment().subtract('days', 6), moment()],
                'Last 30 Days': [moment().subtract('days', 29), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
            }
        },
        function(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        });
    $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
        return false;
    });

    $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
        return false;
    });
    // End of date range picker
    // Color picker
    $('#cp1').colorpicker({
        format: 'hex'
    });
    $('#cp-2').colorpicker({
        format:'rgba',
        align:'top'
    });
    $('#cp3').colorpicker();
    $('#cp4').colorpicker().on('changeColor', function(ev) {
        $('#colorPickerBlock').css('background-color', ev.color.toHex());
        return false;
    });
    $("#cp4").on("click",function () {
        $("#cp4").css('color','#fff');
        return false;
    });
    // End of color picker

    // Time picker
    $('#timepicker_default').timepicker();
    $('#basic_time_picker').timepicker();
    $('#setTimeExample').timepicker();
    $('#setTimeButton').on('click', function (){
        $('#setTimeExample').timepicker('setTime', new Date());
        $('#setTimeButton').css('color','#fff');
    });
    // End of time picker

    // Clockpicker
    $('.clockpicker1').clockpicker({
        donetext: 'Done',
        placement: 'top'
    });
    $('.clockpicker2').clockpicker();
    var input = $('#single_input1').clockpicker({
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('#check_minutes').on("click",function(e){
        e.stopPropagation();
        input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
        $('#check_minutes').css('color','#fff');
    });
    $('#single_input2').clockpicker({
        donetext: 'Done'
    });
    // End of clock picker

});
'use strict';
$(document).ready(function () {
    // Spline line chart
    function showTooltipStats(x, y, contents) {
        $('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css({
            position: 'absolute',
            display: 'none',
            top: y + 5,
            left: x + 5
        }).appendTo("body").fadeIn(200);
    }

    var sales = [
        [0, 10],
        [2.5, 23],
        [5, 15],
        [7.5, 25],
        [8.5, 28],
        [9.5, 25],
        [11, 15],
        [13.5, 20],
        [16, 10]
    ];
    var profit = [
        [0, 20],
        [2, 12],
        [5, 22],
        [7.5, 13],
        // [4, 20],
        [10.5, 25],
        [12.5, 12],
        [15, 22],
        [16, 15]
    ];
    var basicflot= $("#basicflot");
    var plot = $.plot(basicflot, [{
        data: sales,
        label: "Sales",
        color: "#4fb7fe"
    }, {
        data: profit,
        label: "Profit",
        color: "#EF6F6C",
        opacity: "1"
    }], {
        series: {
            lines: {
                show: false
            },
            splines: {
                show: true,
                tension: 0.4,
                lineWidth: 1,
                fill: 0.4
            },
            points: {
                radius: 0,
                show: true
            },
            shadowSize: 2
        },
        legend: {
            container: '#basicFlotLegend1',
            noColumns: 0
        },
        grid: {
            hoverable: true,
            clickable: true,
            borderColor: '#ddd',
            borderWidth: 0,
            labelMargin: 5,
            backgroundColor: '#fff'
        },
        colors: ["#4fb7fe", "#EF6F6C"],
        xaxis: {},
        yaxis: {
            ticks: 4
        }
    });

    var previousPoint1 = null;
    basicflot.on("bind","plothover", function(event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));

        if (item) {
            if (previousPoint1 != item.dataIndex) {
                previousPoint1 = item.dataIndex;

                $("#tooltip").remove();
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);

                showTooltipStats(item.pageX, item.pageY,
                    item.series.label + " on " + parseInt(x) + " = " + parseInt(y));
            }

        } else {
            $("#tooltip").remove();
            previousPoint1 = null;
        }

    });

    basicflot.on("bind","plotclick", function(event, pos, item) {
        if (item) {
            plot.highlight(item.series, item.datapoint);
        }
    });

    //line chart start


    var d1, d2, data, Options;

    d1 = [
        [1262304000000, 100], [1264982400000,560], [1267401600000, 1605], [1270080000000, 1129],
        [1272672000000, 2163], [1275350400000, 1905], [1277942400000, 2002], [1280620800000, 2917],
        [1283299200000, 2700], [1285891200000, 2700], [1288569600000, 2100], [1291161600000, 2700]
    ];

    d2 = [
        [1262304000000, 434], [1264982400000,232], [1267401600000, 875], [1270080000000, 553],
        [1272672000000, 975], [1275350400000, 1379], [1277942400000, 789], [1280620800000, 1026],
        [1283299200000, 1240], [1285891200000, 1892], [1288569600000, 1147], [1291161600000, 2256]
    ];

    data = [{
        label: "Total visitors",
        data: d1,
        color: "#0fb0c0"
    }, {
        label: "Total Sales",
        data: d2,
        color: "#ff9933"
    }];

    Options = {
        xaxis: {
            min: (new Date(2009, 12, 1)).getTime(),
            max: (new Date(2010, 11, 2)).getTime(),
            mode: "time",
            tickSize: [1, "month"],
            monthNames: ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
            tickLength: 0
        },
        yaxis: {

        },
        series: {
            lines: {
                show: true,
                fill: false,
                lineWidth: 2
            },
            points: {
                show: true,
                radius: 4.5,
                fill: true,
                fillColor: "#ffffff",
                lineWidth: 2
            }
        },
        grid: {
            hoverable: true,
            clickable: false,
            borderWidth: 0
        },
        legend: {
            container: '#basicFlotLegend',
            show: true
        },

        tooltip: true,
        tooltipOpts: {
            content: '%s: %y'
        }

    };


    var holder = $('#line-chart');

    if (holder.length) {
        $.plot(holder, data, Options );
    }

//line chart end

//start bar chart
    var d1 = [["1", 100],["2", 80],["3", 66],["4", 48],["5", 68],["6", 48],["7",66],["8", 80],["9", 64],["10", 48],["11",64],["12",100]];
    $.plot("#bar-chart", [{
        data: d1,
        label: "Project",
        color: "#0fb0c0"
    }], {
        series: {
            bars: {
                align: "center",
                lineWidth: 0,
                show: !0,
                barWidth: .6,
                fill: .9
            }
        },
        grid: {
            borderColor: "#ddd",
            borderWidth: 1,
            hoverable: !0
        },
        legend: {
            container: '#basicFlotLegend2',
            show: true
        },
        tooltip: true,
        tooltipOpts: {
            content: '%s: %y'
        },

        xaxis: {
            tickColor: "#ddd",
            mode: "categories"
        },
        yaxis: {
            tickColor: "#ddd"
        },
        shadowSize: 0
    });
//end bar chart

//start bar stack
    var d11 = [["Jan", 130],["Feb",63],["Mar", 104],["Apr", 54],["May", 92],["Jun", 150],["Jul", 50],["Aug", 80],["Sep",120],["Oct", 91],["Nov", 79],["Dec", 112]];
    var d12 = [["Jan", 58],["Feb", 30],["Mar", 46],["Apr", 35],["May", 55],["Jun", 46],["Jul", 20],["Aug", 50],["Sep", 50],["Oct", 40],["Nov", 35],["Dec", 57]];
    $.plot("#bar-chart-stacked", [{
        data: d11,
        label: "New Visitor",
        color: "#4fb7fe"
    },{
        data: d12,
        label: "Returning Visitor",
        color: "#0fb0c0"
    }], {
        series: {
            stack: !0,
            bars: {
                align: "center",
                lineWidth: 0,
                show: !0,
                barWidth: .6,
                fill: .9
            }
        },
        grid: {
            borderColor: "#ddd",
            borderWidth: 1,
            hoverable: !0
        },
        legend: {
            container: '#basicFlotLegend3',
            show: true
        },
        tooltip: !0,
        tooltipOpts: {
            content: "%x : %y",
            defaultTheme: false
        },
        xaxis: {
            tickColor: "#ddd",
            mode: "categories"
        },
        yaxis: {
            tickColor: "#ddd"
        },
        shadowSize: 0
    });
//end bar chart stack
//donut
    var datax = [{
        label: "Profile",
        data: 150,
        color: '#4fb7fe'
    }, {
        label: "Facebook ",
        data: 130,
        color: '#00cc99'
    }, {
        label: "Twitter ",
        data: 190,
        color: '#0fb0c0'
    }, {
        label: "Google+",
        data: 180,
        color: '#EF6F6C'
    }, {
        label: "Linkedin",
        data: 120,
        color: '#ff9933'
    }];

    $.plot($("#donut"), datax, {
        series: {
            pie: {
                innerRadius: 0.5,
                show: true
            }
        },
        legend: {
            show: false
        },
        grid: {
            hoverable: true
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s"
        }

    });


    var data = [],
        series = Math.floor(Math.random() * 6) + 3;

    for (var i = 0; i < series; i++) {
        data[i] = {
            label: "Series" + (i + 1),
            data: Math.floor(Math.random() * 100) + 1
        }
    }
    $.plot("#placeholdertranslabel", data, {
        series: {
            pie: {
                show: true,
                radius: 1,
                label: {
                    show: true,
                    radius: 1,
                    formatter:labelFormatter,
                    background: {
                        opacity: 0.8
                    }
                }
            }
        },
        legend: {
            show: false
        },
        colors: [ '#00cc99', '#4fb7fe', '#347dff', '#ff9933', '#0fb0c0']
    });

    $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
    function labelFormatter(label, series) {
        return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
    }
//end of transparent label pie charts

    var data = [],
        series = Math.floor(Math.random() * 6) + 3;

    for (var i = 0; i < series; i++) {
        data[i] = {
            label: "Series" + (i + 1),
            data: Math.floor(Math.random() * 100) + 1
        }
    }
    $.plot('#placeholdertiltedpie', data, {
        series: {
            pie: {
                show: true,
                radius: 1,
                tilt: 0.5,
                label: {
                    show: true,
                    radius: 1,
                    formatter: labelFormatter,
                    background: {
                        opacity: 0.8
                    }
                },
                combine: {
                    color: "#999",
                    threshold: 0.1
                }
            }
        },
        legend: {
            show: false
        },
        colors: [ '#00cc99', '#4fb7fe', '#0fb0c0', '#ff9933', '#347dff']
    });

    $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
    var data = [],
        totalPoints = 300;

    function getRandomData() {
        if (data.length > 0)
            data = data.slice(1);

        // do a random walk
        while (data.length < totalPoints) {
            var prev = data.length > 0 ? data[data.length - 1] : 50;
            var y = prev + Math.random() * 10 - 5;
            if (y < 0)
                y = 0;
            if (y > 100)
                y = 100;
            data.push(y);
        }

        // zip the generated y values with the x values
        var res = [];
        for (var i = 0; i < data.length; ++i)
            res.push([i, data[i]])
        return res;
    }

// up control widget
    var updateInterval = 50;

// setup plot
    var options = {
        colors: ["#4fb7fe"],
        series: {
            shadowSize: 0,
            lines: {
                show: true,
                fill: true,
                fillColor: {
                    colors: [{
                        opacity: 0.5
                    }, {
                        opacity: 0.5
                    }]
                }
            }
        },
        yaxis: {
            min: 0,
            max: 90
        },
        xaxis: {
            show: false
        },
        grid: {
            backgroundColor: '#fff',
            borderWidth: 1,
            borderColor: '#fff'
        }
    };

    var plot4 = $.plot($("#realtime"), [getRandomData()], options);

    function update() {
        plot4.setData([getRandomData()]);
        // since the axes don't change, we don't need to call plot.setupGrid()
        plot4.draw();
        setTimeout(update, updateInterval);
    }
    update();
//start area chart
    var da1 = [["Jan", 50],["Feb", 75],["Mar", 60],["Apr", 100],["May", 60],["Jun", 80],["Jul", 40]];
    var da2 = [["Jan", 20],["Feb", 40],["Mar", 30],["Apr", 40],["May", 15],["Jun", 25],["Jul", 10]];
    $.plot("#area-chart", [{
        data: da1,
        label: "Product 1",
        color: "#00cc99"
    },{
        data: da2,
        label: "product 2",
        color: "#ff9933"
    }], {
        series: {
            lines: {
                show: !0,
                fill: .8
            },
            points: {
                show: !0,
                radius: 4
            }
        },
        grid: {
            borderColor: "#ddd",
            borderWidth: 1,
            hoverable: !0
        },
        tooltip: !0,
        tooltipOpts: {
            content: "%x : %y",
            defaultTheme: false
        },
        xaxis: {
            tickColor: "#ddd",
            mode: "categories"
        },
        yaxis: {
            tickColor: "#ddd"
        },
        shadowSize: 0
    });
//end  area chart
//start spline area chart
    var ds1 = [["Jan", 35],["Feb", 38],["Mar", 36.7],["Apr", 35],["May", 37],["Jun", 39],["Jul", 35]];
    var ds2 = [["Jan", 36],["Feb", 34],["Mar", 35],["Apr", 38],["May", 35],["Jun", 34],["Jul", 37]];
    $.plot("#chart-spline", [{
        data: ds1,
        label: "product 1",
        color: "#0fb0c0"
    },{
        data: ds2,
        label: "product 2",
        color: "#ff9933"
    }], {
        series: {
            lines: {
                show: !1
            },
            splines: {
                show: !0,
                tension: .4,
                lineWidth: 2,
                fill: .8
            },
            points: {
                show: !0,
                radius: 4
            }
        },
        grid: {
            borderColor: "#ddd",
            borderWidth: 1,
            hoverable: !0
        },
        tooltip: !0,
        tooltipOpts: {
            content: "%x : %y",
            defaultTheme: false
        },
        xaxis: {
            tickColor: "#ddd",
            mode: "categories"
        },
        yaxis: {
            tickColor: "#ddd"
        },
        shadowSize: 0
    });
});

"use stict";
$(document).ready(function(){
    new WOW().init();
    $('#login_validator1').bootstrapValidator({
        fields: {
            email_modal: {
                validators: {
                    notEmpty: {
                        message: 'enter your valid email'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            }
        }
    });
    validate();
    function validate() {
        if ($('.email_forgot').val() > 0) {
            $(".submit_email").prop("disabled", false);
        } else {
            $(".submit_email").prop("disabled", true);
        }
    }
});
'use strict';
$(document).ready(function() {
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
    $('.airmode').summernote({
        height: 300,
        airMode: true
    });

    // TinyMCE Full
    tinymce.init({
        selector: "#tinymce_full",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        templates: [{
            title: 'Test template 1',
            content: 'Test 1'
        }, {
            title: 'Test template 2',
            content: 'Test 2'
        }]
    });
    // Bootstrap
    $('#bootstrap-editor').wysihtml5({
        stylesheets: [
            'assets/lib/bootstrap-wysihtml5/stylesheets/bootstrap-wysihtml5wysiwyg-color.css'
        ]
    });

    $('.summernote_editor').summernote({
        height:200
    });
    $(".wysihtml5-toolbar li:nth-child(3) a,.wysihtml5-toolbar li:nth-child(4) a,.wysihtml5-toolbar li:nth-child(5) a,.wysihtml5-toolbar li:nth-child(6) a").addClass("btn-outline-primary");
    $(".wysihtml5-toolbar .btn-group:eq(1) a:first-child,.wysihtml5-toolbar .btn-group:eq(3) a:first-child").addClass("fa fa-list");
    $(".wysihtml5-toolbar .btn-group:eq(1) a:nth-child(2),.wysihtml5-toolbar .btn-group:eq(3) a:nth-child(2)").addClass("fa fa-th-list");
    $(".wysihtml5-toolbar .btn-group:eq(1) a:nth-child(3),.wysihtml5-toolbar .btn-group:eq(3) a:nth-child(3)").addClass("fa fa-align-left");
    $(".wysihtml5-toolbar .btn-group:eq(1) a:nth-child(4),.wysihtml5-toolbar .btn-group:eq(3) a:nth-child(4)").addClass("fa fa-align-right");
    $(".wysihtml5-toolbar li:nth-child(5) span").addClass("fa fa-share");
    $(".wysihtml5-toolbar li:nth-child(6) span").addClass("fa fa-picture-o");
    $("[data-wysihtml5-command='formatBlock'] span").css("position","relative").css("top","-5px").css("left","-5px");
    $(".note-toolbar button").removeClass('btn-default').addClass('btn-secondary');
    $(".wysihtml5-toolbar li:nth-child(2) a").removeClass('btn-default').addClass('btn-secondary');
});
'use strict';
$(document).ready(function () {
    // Chosen
    $(".hide_search").chosen({disable_search_threshold: 10});
    $(".chzn-select").chosen({allow_single_deselect: true});
    $(".chzn-select-deselect,#select2_sample").chosen();
    // End of chosen

    // Input mask
    $("#phones").inputmask();
    $("#product").inputmask("a*-999-a999");
    $("#percent").inputmask("99%");
    $(".date_mask").inputmask("dd/mm/yyyy");
    // End of input mask

    //tags input
    $('#tags').tagsInput();
    $("#input-21").fileinput({
        theme: "fa",
        previewFileType: "image",
        browseClass: "btn btn-success",
        browseLabel: "Pick Image",
        removeClass: "btn btn-danger",
        removeLabel: "Delete"


    });
    $("#input-4").fileinput({showCaption: false,
        theme: "fa"});
    $("#input-22").fileinput({
        theme: "fa",
        previewFileType: "text",
        allowedFileExtensions: ["txt", "md", "ini", "text"],
        previewClass: "bg-warning"
    });
    $("#input-43").fileinput({
        theme: "fa",
        showPreview: false,
        allowedFileExtensions: ["zip", "rar", "gz", "tgz"],
        elErrorContainer: "#errorBlock"
    });
    $("#input-fa").fileinput({
        theme: "fa",
        uploadUrl: "/file-upload-batch/2"
    });

    Admire.formGeneral() ;
});
'use strict';
$(document).ready(function() {
    $(".signin_radio1").on("click", function() {
        $(".form_lay_email1").html("Username ");
        $(".user_icon_change1 .fa-envelope").replaceWith('<i class="fa fa-user"></i>');
        $(".form_lay_input1").replaceWith('<input type="text" class="form-control form_lay_input1" name="Username" placeholder="Username">')
    });
    $(".signin_radio2").on("click", function() {
        $(".form_lay_email1").html("E-mail");
        $(".user_icon_change1 .fa-user").replaceWith('<i class="fa fa-envelope"></i>');
        $(".form_lay_input1").replaceWith('<input type="text" class="form-control form_lay_input1" name="Email" placeholder="E-mail">')
    });
    $(".signin_radio3").on("click", function() {
        $(".form_lay_email2").html("Username ");
        $(".user_icon_change2 .fa-envelope").replaceWith('<i class="fa fa-user"></i>');
        $(".form_lay_input2").replaceWith('<input type="text" class="form-control form_lay_input2" name="username" placeholder="Username">')
    });
    $(".signin_radio4").on("click", function() {
        $(".form_lay_email2").html("E-mail");
        $(".user_icon_change2 .fa-user").replaceWith('<i class="fa fa-envelope"></i>');
        $(".form_lay_input2").replaceWith('<input type="text" class="form-control form_lay_input2" name="email" placeholder="E-mail">')
    });
    $(".layout_btn_prevent").on("click", function(e) {
        e.preventDefault();
    });
    $("#otp_validation").bootstrapValidator({
        fields: {
            digits_only: {
                validators: {
                    notEmpty: {
                        message: 'Enter digits only'
                    },
                    regexp: {
                        regexp: /^\d{10}$/,
                        message: 'Enter a 10 digits number'
                    }
                }
            }

        }
    });
    if ($('#onetime_password').val().length > 0) {
        $("#confirm_tel").prop("disabled", false);
    } else {
        $("#confirm_tel").prop("disabled", true);
    }
    $("#onetime_password").intlTelInput({
        utilsScript: "vendors/intl-tel-input/js/utils.js"
    });
    $('#confirm_tel').on('click', function(e) {
        e.preventDefault();
        swal.queue([{
            title: 'OTP Notification',
            confirmButtonText: 'Show my OTP',
            currentProgressStep: 0,
            showLoaderOnConfirm: true,
            preConfirm: function() {
                return new Promise(function(resolve) {
                    swal.insertQueueStep("4568");
                    resolve();
                });
            }
        }]).done();
    });
});

'use strict';
$(document).ready(function() {
    $('#popup-validation').validationEngine();
    Admire.formValidation();
    $(".error_color").append('<br/>');
    $(".form_val_popup_dp1").datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        autoclose: true
    });
    $(".form_val_popup_dp2").datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        autoclose: true
    });
    $('.form_val_popup_dp3').datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        autoclose: true
    }).on("changeDate", function() {
        $('#form_block_validator').bootstrapValidator('revalidateField', 'date_inline');
    });
    $('.form_val_popup_dp4').datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        autoclose: true
    }).on("changeDate", function() {
        $('#form_inline_validator').bootstrapValidator('revalidateField', 'birthday');
    });
    $(':contains(* Invalid email address)').remove('.formErrorContent');
    $('#form_block_validator').bootstrapValidator({
        fields: {
            Name2: {
                validators: {
                    notEmpty: {
                        message: 'Enter your name'
                    }
                }
            },
            Email2: {
                validators: {
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address.'
                    },
                    notEmpty: {
                        message: 'The email address is required'
                    }
                }
            },
            Password2: {
                validators: {
                    notEmpty: {
                        message: 'Please provide a password'
                    }
                }
            },
            Confirmpassword2: {
                validators: {
                    notEmpty: {
                        message: 'Confirm the password.'
                    },
                    identical: {
                        field: 'Password2',
                        message: 'Please enter the same password as above'
                    }
                }
            },
            date_inline: {
                validators: {
                    notEmpty: {
                        message: 'Date is required and can not be empty'
                    }
                }
            },
            Url2: {
                validators: {
                    notEmpty: {
                        message: 'Enter valid url.'
                    }
                }
            },
            digits_only: {
                validators: {
                    notEmpty: {
                        message: 'This field is required.'
                    },
                    regexp: {
                        regexp: /^\d+$/,
                        message: 'Contains digits only.'
                    }
                }
            },
            Range: {
                validators: {
                    notEmpty: {
                        message: 'Enter digits between 5 to 16.'
                    },
                    between: {
                        min: 5,
                        max: 16,
                        message: 'Please enter a value between 5 and 16.'
                    },
                    regexp: {
                        regexp: /^\d+$/,
                        message: 'The value is not an integer'
                    }
                }
            },
            activate: {
                validators: {
                    notEmpty: {
                        message: 'You have to accept the terms and conditions'
                    }
                }
            }
        }
    });
    $('#form_inline_validator').bootstrapValidator({
        framework: 'bootstrap',
        fields: {
            Name3: {
                validators: {
                    notEmpty: {
                        message: 'Enter your name'
                    }
                }
            },
            Email3: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address.'
                    }
                }
            },
            Password3: {
                validators: {
                    notEmpty: {
                        message: 'Please provide a password'
                    }
                }
            },
            Confirmpassword3: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty.'
                    },
                    identical: {
                        field: 'Password3',
                        message: 'Please enter the same password as above'
                    }
                }
            },

            Url3: {
                validators: {
                    notEmpty: {
                        message: 'Enter valid url.'
                    }
                }
            },
            Minsize3: {
                validators: {
                    notEmpty: {
                        message: 'Enter min 3 characters.'
                    },
                    regexp: {
                        regexp: /^\S.{2,}$/,
                        message: 'Please enter at least 3 characters and should not start with space.'
                    }
                }
            },
            Maxsize3: {
                validators: {
                    notEmpty: {
                        message: 'Enter max 6 characters'
                    },
                    regexp: {
                        regexp: /^\S.{0,5}$/,
                        message: 'Should not be more than 6 characters and should not start with space.'
                    }
                }
            },

            MinNum: {
                validators: {
                    notEmpty: {
                        message: 'Enter the minimum number 3.'
                    },
                    greaterThan: {
                        value: 3,
                        message: 'Please enter a value greater than or equal to 3.'
                    },
                    regexp: {
                        regexp: /^\d+$/,
                        message: 'The value is not an integer'
                    }
                }
            },
            maxNum: {
                validators: {
                    notEmpty: {
                        message: 'Enter maximum number 16.'
                    },
                    lessThan: {
                        value: 16,
                        message: 'Please enter a value less than or equal to 16.'
                    },
                    regexp: {
                        regexp: /^\d+$/,
                        message: 'The value is not an integer'
                    }

                }
            },
            birthday: {
                validators: {
                    notEmpty: {
                        message: 'Date is required and can not be empty'
                    }
                }
            }
        }
    });
});

'use strict';
$(document).ready(function() {
    $('.fancybox').fancybox();
    // Change title type, overlay closing speed
    $(".fancybox-effects-a").fancybox({
        helpers: {
            title: {
                type: 'outside'
            },
            overlay: {
                speedOut: 0
            }
        }
    });
    // Disable opening and closing animations, change title type
    $(".fancybox-effects-b").fancybox({
        openEffect: 'none',
        closeEffect: 'none',

        helpers: {
            title: {
                type: 'over'
            }
        }
    });
    // Set custom style, close if clicked, change title type and overlay color
    $(".fancybox-effects-c").fancybox({
        wrapCSS: 'fancybox-custom',
        closeClick: true,
        openEffect: 'none',

        helpers: {
            title: {
                type: 'inside'
            },
            overlay: {
                css: {
                    'background': 'rgba(238,238,238,0.85)'
                }
            }
        }
    });
    // Remove padding, set opening and closing animations, close if clicked and disable overlay
    $(".fancybox-effects-d").fancybox({
        padding: 0,

        openEffect: 'elastic',
        openSpeed: 150,

        closeEffect: 'elastic',
        closeSpeed: 150,

        closeClick: true,

        helpers: {
            overlay: null
        }
    });
    /*
     *  Button helper. Disable animations, hide close button, change title type and content
     */
    $('.fancybox-buttons').fancybox({
        openEffect: 'none',
        closeEffect: 'none',

        prevEffect: 'none',
        nextEffect: 'none',

        closeBtn: false,

        helpers: {
            title: {
                type: 'inside'
            },
            buttons: {}
        },

        afterLoad: function() {
            this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
    });
    /*
     *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
     */
    $('.fancybox-thumbs').fancybox({
        prevEffect: 'none',
        nextEffect: 'none',

        closeBtn: false,
        arrows: false,
        nextClick: true,

        helpers: {
            thumbs: {
                width: 50,
                height: 50
            }
        }
    });

});
'use strict';
$(document).ready(function () {
    // fontawesome
    $('#icon-search').on("input", function() {
        $(".fa-icon").each(function() {
            var regex = new RegExp($("#icon-search").val().trim().toLowerCase());
            var x = $(this).clone().children().remove().end().text();
            var res = x.match(regex, "i");
            if (res == null) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
        return false;
    });

    // Themify icons
    $('#icon-search2').on("input", function() {
        $(".themify_icon").each(function() {
            var regex = new RegExp($("#icon-search2").val().trim().toLowerCase());
            var y = $(this).clone().children().remove().end().text();
            var res = y.match(regex, "i");
            if (res == null) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
        return false;
    });

    // Glyph icons
    $('#icon-search3').on("input", function() {
        $(".ion_icon").each(function() {
            var regex = new RegExp($("#icon-search3").val().trim().toLowerCase());
            var z = $(this).clone().children().remove().end().text();
            var res = z.match(regex, "i");
            if (res == null) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    });
    return false;
});
"use strict";
$(document).ready(function() {
    $("#visitsspark-chart").sparkline([209, 210, 209, 210, 210, 211, 212, 210, 210, 211, 213, 212, 211, 210, 212, 211, 210, 212], {
        type: 'line',
        width: '100%',
        height: '48',
        lineColor: '#4fb7fe',
        fillColor: '#e7f5ff',
        tooltipSuffix: 'Users'
    });
    function spark_sales() {
        var barParentdiv = $('#salesspark-chart').closest('div');
        var barCount = [209, 210, 209, 210, 210, 211, 212, 210, 210, 211, 213, 212, 211, 210, 212, 211, 210, 212];
        var barSpacing = 2;
        $("#salesspark-chart").sparkline(barCount, {
            type: 'bar',
            width: '100%',
            barWidth: (barParentdiv.width() - (barCount.length * barSpacing)) / barCount.length,
            height: '48',
            barSpacing: barSpacing,
            barColor: '#9bd5ff',
            tooltipSuffix: ' Sales'
        });
        $('#salesspark-chart').sparkline([209, 210, 209, 210, 210, 211, 212, 210, 210, 211, 213, 212, 211, 210, 212, 211, 210, 212],
            {
                composite: true,
                fillColor: false,
                width: "100%",
                spotColor: '#f0ad4e',
                lineColor: '#EF6F6C',
                tooltipSuffix: ' Sales'
            });

    }

    spark_sales();


    function spark_loader() {
        var lpoints = [];
        for (var i = 0; i < 20; i++) {
            var load = 5 + parseInt(Math.random() * 90 - 5);
            if (load < 25) {
                load = 25;
            }
            if (load > 100) {
                load = 90;
            }
            lpoints.push(load);
        }
        $('#mousespeed').sparkline(lpoints, {
            type: 'line',
            height: "48px",
            width: "100%",
            lineColor: '#4fb7fe',
            fillColor: '#e7f5ff',
            tooltipSuffix: ' Comments'
        });
        setTimeout(spark_loader, 1800);
    }

    spark_loader();


    function spark_sales1() {
        var barParentdiv = $('#rating').closest('div');
        var barCount = [1, 2, 3, 2, 5, 3, 5, 6, 5, 6, 5, 7, 8, 8, 6, 7, 4, 3, 5, 4, 2, 3, 5, 3, 2, 1];
        var barSpacing = 2;
        $("#rating").sparkline(barCount, {
            type: 'bar',
            width: '100%',
            barWidth: (barParentdiv.width() - (barCount.length * barSpacing)) / barCount.length,
            height: '50',
            barSpacing: barSpacing,
            barColor: '#9bd5ff',
            tooltipSuffix: ' Rating'
        });
    }

    spark_sales1();

//   flip js

    $("#top_widget1, #top_widget2, #top_widget3, #top_widget4").flip({
        axis: 'x',
        trigger: 'hover'
    });


    var options = {
        useEasing: true,
        useGrouping: true,
        decimal: '.',
        prefix: '',
        suffix: ''
    };
    new CountUp("widget_countup1", 0, 3250, 0, 5.0, options).start();
    new CountUp("widget_countup2", 0, 1140, 0, 5.0, options).start();
    new CountUp("widget_countup3", 0, 85, 0, 7.0, options).start();
    new CountUp("widget_countup4", 0, 8, 0, 9.0, options).start();


//=================================main chart================================

// Chartist
    var Chartist1 = new Chartist.Line('#chart1', {
        labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
        series: [{
            label: 'Views',
            data: [{meta: 'Views', value: 4},
                {meta: 'Views', value: 6},
                {meta: 'Views', value: 4},
                {meta: 'Views', value: 7},
                {meta: 'Views', value: 4},
                {meta: 'Views', value: 6},
                {meta: 'Views', value: 3},
                {meta: 'Views', value: 7},
                {meta: 'Views', value: 3},
                {meta: 'Views', value: 6},

                {meta: 'Views', value: 4},
                {meta: 'Views', value: 6}]
        },

            {
                label: 'Sales',
                data: [{meta: 'Sales', value: 1},
                    {meta: 'Sales', value: 3},
                    {meta: 'Sales', value: 1},
                    {meta: 'Sales', value: 4},
                    {meta: 'Sales', value: 1},
                    {meta: 'Sales', value: 3},
                    {meta: 'Sales', value: 1},
                    {meta: 'Sales', value: 3},
                    {meta: 'Sales', value: 1},
                    {meta: 'Sales', value: 4},
                    {meta: 'Sales', value: 1},
                    {meta: 'Sales', value: 3}]
            }]
    }, {
        height: 300,
        fullWidth: true,
        low: 0,
        high: 7,
        showArea: true,
        axisY: {
            onlyInteger: true,
            offset: 20
        }
        ,
        plugins: [
            Chartist.plugins.tooltip()
        ]
    });

    Chartist1.on('draw', function (data) {


        if (data.type === 'point') {
            data.element.animate({
                y1: {
                    begin: 100 * data.index,
                    dur: 2000,
                    from: data.y + 1000,
                    to: data.y,
                    easing: Chartist.Svg.Easing.easeOutQuint
                },
                y2: {
                    begin: 100 * data.index,
                    dur: 2000,
                    from: data.y + 1000,
                    to: data.y,
                    easing: Chartist.Svg.Easing.easeOutQuint
                }
            });
        }

        if (data.type === 'line' || data.type === 'area') {
            data.element.animate({
                d: {
                    begin: 2000 * data.index,
                    dur: 2000,
                    from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                    to: data.path.clone().stringify(),
                    easing: Chartist.Svg.Easing.easeOutQuint
                }
            });
        }
    });


//===============================coding docs desingi=====================================

    $('#myStat').circliful({
        animationStep: 5,
        fillColor: '#4fb7fe',
        foregroundBorderWidth: 5,
        percent: 40
    });
    $('#myStat2').circliful({
        animationStep: 5,
        fillColor: '#00cc99',
        foregroundBorderWidth: 5,
        percent: 60
    });
    $('#myStat3').circliful({
        animationStep: 5,
        fillColor: '#ff9933',
        foregroundBorderWidth: 5,
        percent: 75
    });


    //server load
    var flot2 = function() {
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data = [],
            totalPoints = 100;

        function getRandomData() {
            if (data.length > 0)
                data = data.slice(1);
            // Do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;
                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }
                data.push(y);
            }
            // Zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }
            return res;
        }
        var plot2 = $.plot("#order_realtime", [getRandomData()], {
            series: {
                shadowSize: 0 // Drawing is faster without shadows
            },
            yaxis: {
                min: 0,
                max: 100
            },
            xaxis: {
                show: false
            },
            colors: ["#22BAA0"],
            legend: {
                show: false
            },
            grid: {
                color: "#AFAFAF",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: '#FFF'},
            tooltip: true,
            tooltipOpts: {
                content: "Y: %y",
                defaultTheme: false
            }
        });

        function update() {
            plot2.setData([getRandomData()]);
            plot2.draw();
            setTimeout(update, 30);
        }
        update();
    };
    flot2();



    //server load
    var flot3 = function() {
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data = [],
            totalPoints = 100;

        function getRandomData() {
            if (data.length > 0)
                data = data.slice(1);
            // Do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;
                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }
                data.push(y);
            }
            // Zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }
            return res;
        }
        var plot3 = $.plot("#sale_realtime", [getRandomData()], {
            series: {
                shadowSize: 0 // Drawing is faster without shadows
            },
            yaxis: {
                min: 0,
                max: 100
            },
            xaxis: {
                show: false
            },
            colors: ["#4fb7fe"],
            legend: {
                show: false
            },
            grid: {
                color: "#AFAFAF",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: '#FFF'},
            tooltip: true,
            tooltipOpts: {
                content: "Y: %y",
                defaultTheme: false
            }
        });

        function update() {
            plot3.setData([getRandomData()]);
            plot3.draw();
            setTimeout(update, 30);
        }
        update();
    };
    flot3();




    //server load
    var flot4 = function() {
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data = [],
            totalPoints = 100;

        function getRandomData() {
            if (data.length > 0)
                data = data.slice(1);
            // Do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;
                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }
                data.push(y);
            }
            // Zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }
            return res;
        }
        var plot4 = $.plot("#users_realtime", [getRandomData()], {
            series: {
                shadowSize: 0 // Drawing is faster without shadows
            },
            yaxis: {
                min: 0,
                max: 100
            },
            xaxis: {
                show: false
            },
            colors: ["#ff9933"],
            legend: {
                show: false
            },
            grid: {
                color: "#AFAFAF",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: '#FFF'},
            tooltip: true,
            tooltipOpts: {
                content: "Y: %y",
                defaultTheme: false
            }
        });

        function update() {
            plot4.setData([getRandomData()]);
            plot4.draw();
            setTimeout(update, 30);
        }
        update();
    };
    flot4();
    // ==================================monthly up laod=================================

    $("#test-circle").circliful({
        animation: 1,
        animationStep: 1,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        percent: 75,
        textSize: 28,
        textStyle: 'font-size: 12px;',
        textColor: '#666',
        multiPercentage: 1,
        percentages: [10, 20, 30]
    });

    function spark_sales_upload() {
        var barParentdiv = $('#monthly_upload').closest('div');
        var barCount = [71, 72, 73, 72, 75, 73, 75, 76, 75, 76, 75, 77, 78, 78, 76, 77, 74, 73, 75, 74, 72, 73, 75, 74, 73, 72, 71];
        var barSpacing = 2;
        $("#monthly_upload").sparkline(barCount, {
            type: 'bar',
            width: '100%',
            barWidth: (barParentdiv.width() - (barCount.length * barSpacing)) / barCount.length,
            height: '50',
            barSpacing: barSpacing,
            barColor: '#4FB7FE',
            tooltipSuffix: '%'
        });
    }
    spark_sales_upload();

    $(window).on('resize', function () {
        Chartist1.update();
        spark_sales();
        spark_sales1();
        spark_sales_upload();

    });
});
"use strict";
$(document).ready(function () {
    $("#title").on("click",function () {
        iziToast.show({
            title: 'title'
        });
        return false;
    });
    $("#message").on("click",function () {
        iziToast.show({
            message: 'message',
            rtl:true
        });
        return false;
    });
    $("#basic").on("click",function () {
        iziToast.show({
            title: 'Hey',
            message: 'What would you like to add?',
            position: 'bottomLeft'
        });
        return false;
    });
    $("#btn_info").on("click",function () {
        iziToast.info({
            title: 'Hello',
            message: 'Welcome!',
            position: 'bottomLeft',
            rtl:true
        });
        return false;
    });
    $("#btn_success").on("click",function () {
        iziToast.success({
            title: 'OK',
            message: 'Successfully inserted record!',
            position: 'bottomCenter'
        });
        return false;
    });
    $("#btn_warning").on("click",function () {
        iziToast.warning({
            title: 'Caution',
            message: 'You forgot important data'
        });
        return false;
    });
    $("#btn_error").on("click",function () {
        iziToast.error({
            title: 'Error',
            message: 'Illegal operation',
            position: 'topCenter'
        });
        return false;
    });
    $("#btn_show").on("click",function () {
        iziToast.show({
            color: 'dark',
            icon: 'fa fa-user',
            title: 'Hey',
            message: 'Welcome!',
            position: 'center',
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
                ['<button>Ok</button>', function (instance, toast) {
                    alert("Hello world!");
                }],
                ['<button>Close</button>', function (instance, toast) {
                    instance.hide({ transitionOut: 'fadeOutUp' }, toast);
                }]
            ]
        });
        return false;
    });
    $("#alert_primary").on("click",function () {
        iziToast.show({
            title: 'Primary',
            message: 'What would you like to add?',
            color:'#4fb7fe'
        });
        return false;
    });
    $("#alert_success").on("click",function () {
        iziToast.show({
            title: 'Success',
            message: 'What would you like to add?',
            color:'#00cc99',
            position: 'bottomCenter'
        });
        return false;
    });
    $("#alert_info").on("click",function () {
        iziToast.show({
            title: 'Info',
            message: 'What would you like to add?',
            color:'#347dff',
            position: 'bottomLeft'
        });
        return false;
    });
    $("#alert_warning").on("click",function () {
        iziToast.show({
            title: 'Warning',
            message: 'What would you like to add?',
            color:'#ff9933',
            position: 'topLeft'
        });
        return false;
    });
    $("#alert_danger").on("click",function () {
        iziToast.show({
            title: 'Danger',
            message: 'What would you like to add?',
            color:'#ff6666',
            position: 'topCenter'
        });
        return false;
    });
    $("#alert_mint").on("click",function () {
        iziToast.show({
            title: 'Mint',
            message: 'What would you like to add?',
            color:'#0fb0c0',
            position: 'topRight'
        });
        return false;
    });
    $("#font_icon").on("click",function () {
        iziToast.show({
            icon:'fa fa-user',
            title:'Icon'
        });
        return false;
    });
    $("#icon_color").on("click",function () {
        iziToast.show({
            title:'Icon color',
            message:'Showing icon color',
            icon:'fa fa-user',
            iconColor:'#4fb7fe',
            position:'topLeft'
        });
        return false;
    });
    $("#toast_image").on("click",function () {
        iziToast.show({
            title:'Image',
            message:'Showing image',
            image:'img/admin.jpg',
            position:'topRight'
        });
        return false;
    });
    $("#image_width").on("click",function () {
        iziToast.show({
            title:'Image Width',
            message:'Showing image width',
            image:'img/admin.jpg',
            imageWidth:100,
            position:'bottomLeft',
            layout:'2'
        });
        return false;
    });
    $("#zindex").on("click",function () {
        iziToast.show({
            title:'Zindex',
            message:'Showing zindex of toastr',
            zindex:999
        });
        return false;
    });
    $("#layout1").on("click",function () {
        iziToast.show({
            title:'Layout small',
            message:'Showing small layout of toastr',
            layout:1,
            position:'center'
        });
        return false;
    });
    $("#layout2").on("click",function () {
        iziToast.show({
            title:'Layout medium',
            message:'Showing medium layout of toastr',
            layout:2,
            position:'topCenter'
        });
        return false;
    });
    $("#balloon").on("click",function () {
        iziToast.show({
            title:'balloon',
            message:'Showing balloon of toastr',
            position:'topLeft',
            balloon:true
        });
        return false;
    });
    $("#close_false").on("click",function () {
        iziToast.show({
            title:'Not closed',
            message:'Showing toast does not close',
            close:false,
            position:'bottomLeft'
        });
        return false;
    });
    $("#rtl").on("click",function () {
        iziToast.show({
            title:'Rtl',
            message:'Right to left toastr',
            rtl:true,
            position:'topRight'
        });
        return false;
    });
    $("#center").on("click",function () {
        iziToast.show({
            title:'center',
            message:'Showing the toastr in center',
            position: 'center'
        });
        return false;
    });
    $("#bottomLeft").on("click",function () {
        iziToast.show({
            title:'bottomLeft',
            message:'Showing the toastr in bottom left',
            position: 'bottomLeft'
        });
        return false;
    });
    $("#bottomRight").on("click",function () {
        iziToast.show({
            title:'bottomRight',
            message:'Showing the toastr in bottom right',
            position: 'bottomRight'
        });
        return false;
    });
    $("#topLeft").on("click",function () {
        iziToast.show({
            title:'topLeft',
            message:'Showing the toastr in top left',
            position: 'topLeft'
        });
        return false;
    });
    $("#top_right").on("click",function () {
        iziToast.show({
            title:'Top right',
            message:'Showing the toastr in top right',
            position: 'topRight'
        });
        return false;
    });
    $("#center_bottom").on("click",function () {
        iziToast.show({
            title:'Center bottom',
            message:'Showing the toastr in center bottom',
            position: 'bottomCenter'
        });
        return false;
    });
    $("#center_top").on("click",function () {
        iziToast.show({
            title:'Center top',
            message:'Showing the toastr in center top',
            position: 'topCenter'
        });
        return false;
    });
    $("#target").on("click",function () {
        iziToast.show({
            title:'Target',
            message:'Showing the toastr target',
            target: '.target_section'
        });
        return false;
    });
    $("#timeout").on("click",function () {
        iziToast.show({
            title:'Timeout',
            message:'Toastr timeout set to 100000',
            timeout:100000,
            position:'topCenter'
        });
        return false;
    });
    $("#pauseon_hover").on("click",function () {
        iziToast.show({
            title:'Pause on hover',
            message:'When you hovered on toastr progressbar stops',
            pauseOnHover: true,
            position:'topRight'
        });
        return false;
    });
    $("#reset_hover").on("click",function () {
        iziToast.show({
            title:'reset on hover',
            message:'When you hovered on toastr progressbar resets',
            resetOnHover: true,
            position:'topLeft'
        });
        return false;
    });
    $("#progress_bar").on("click",function () {
        iziToast.show({
            title:'Without Progressbar',
            message:'Toastr without progressbar',
            progressBar: false
        });
        return false;
    });
    $("#progress_bar_color").on("click",function () {
        iziToast.show({
            title:'Progressbar with color',
            message:'Showing toastr with colored progressbar',
            progressBarColor: '#4fb7fe',
            position:'bottomCenter'
        });
        return false;
    });
    $("#animate_inside").on("click",function () {
        iziToast.show({
            title:'Animate',
            message:'Toastr with inside animation',
            animateInside: true,
            position:'bottomLeft'
        });
        return false;
    });
    $("#animate_inside_false").on("click",function () {
        iziToast.show({
            title:'Animate',
            message:'Toastr without inside animation',
            animateInside: false,
            position:'center'
        });
        return false;
    });
    $("#buttons").on("click",function () {
        iziToast.show({
            title:'Buttons',
            message:'Showing toastr with buttons',
            position:'topLeft',
            buttons: [
                ['<button>Photo</button>', function (instance, toast) {

                }],
                ['<button>Video</button>', function (instance, toast) {

                }],
                ['<button>Text</button>', function (instance, toast) {

                }],
            ]
        });
        return false;
    });
    $("#fadeIn").on("click",function () {
        iziToast.show({
            title:'fadeIn',
            message:'Showing toastr with fadeIn',
            transitionIn: 'fadeIn',
            position:'center'
        });
        return false;
    });
    $("#fadeInUp").on("click",function () {
        iziToast.show({
            title:'fadeInUp',
            message:'Showing toastr with fadeInUp',
            transitionIn: 'fadeInUp',
            position:'topCenter'
        });
        return false;
    });
    $("#fadeInDown").on("click",function () {
        iziToast.show({
            title:'fadeInDown',
            message:'Showing toastr with fadeInDown',
            transitionIn: 'fadeInDown',
            position:'bottomCenter'
        });
        return false;
    });
    $("#fadeInLeft").on("click",function () {
        iziToast.show({
            title:'fadeInLeft',
            message:'Showing toastr with fadeInLeft',
            transitionIn: 'fadeInLeft',
            position:'bottomLeft'
        });
        return false;
    });
    $("#fadeInRight").on("click",function () {
        iziToast.show({
            title:'fadeInRight',
            message:'Showing toastr with fadeInRight',
            transitionIn: 'fadeInRight',
            position:'bottomRight'
        });
        return false;
    });
    $("#bounceInUp").on("click",function () {
        iziToast.show({
            title:'bounceInUp',
            message:'Showing toastr with bounceInUp',
            transitionIn: 'bounceInUp',
            position:'topCenter'
        });
        return false;
    });
    $("#bounceInDown").on("click",function () {
        iziToast.show({
            title:'bounceInDown',
            message:'Showing toastr with bounceInDown',
            transitionIn: 'bounceInDown',
            position:'bottomCenter'
        });
        return false;
    });
    $("#bounceInLeft").on("click",function () {
        iziToast.show({
            title:'bounceInLeft',
            message:'Showing toastr with bounceInLeft',
            transitionIn: 'bounceInLeft',
            position:'topLeft'
        });
        return false;
    });
    $("#bounceInRight").on("click",function () {
        iziToast.show({
            title:'bounceInRight',
            message:'Showing toastr with bounceInRight',
            transitionIn: 'bounceInRight',
            position:'topRight'
        });
        return false;
    });
    $("#fadeOut").on("click",function () {
        iziToast.show({
            title:'fadeOut',
            message:'Showing toastr with fadeOut',
            transitionOut: 'fadeOut',
            position:'center',
            balloon:true
        });
        return false;
    });
    $("#fadeOutUp").on("click",function () {
        iziToast.show({
            title:'fadeOutUp',
            message:'Showing toastr with fadeOutUp',
            transitionOut: 'fadeOutUp',
            position:'topCenter',
            balloon:true
        });
        return false;
    });
    $("#fadeOutDown").on("click",function () {
        iziToast.show({
            title:'fadeOutDown',
            message:'Showing toastr with fadeOutDown',
            transitionOut: 'fadeOutDown',
            position:'bottomCenter',
            balloon:true
        });
        return false;
    });
    $("#fadeOutLeft").on("click",function () {
        iziToast.show({
            title:'fadeOutLeft',
            message:'Showing toastr with fadeOutLeft',
            transitionOut: 'fadeOutLeft',
            position:'topLeft',
            balloon:true
        });
        return false;
    });
    $("#fadeOutRight").on("click",function () {
        iziToast.show({
            title:'fadeOutRight',
            message:'Showing toastr with fadeOutRight',
            transitionOut: 'fadeOutRight',
            balloon:true
        });
        return false;
    });
});
'use strict';
$(document).ready(function () {
    // ========================Jqvmaps=====================

    // World map
    $('#world-map-gdp').vectorMap({
        map: 'world_en',
        backgroundColor: '#eaeaea',
        color: '#ffffff',
        hoverOpacity: 0.7,
        selectedColor: '#EF6F6C',
        values: sample_data,
        scaleColors:['#feEda0','#ff6491'],
        normalizeFunction: 'polynomial',
        onRegionClick: function(element, code, region)
        {
            var message = 'You clicked "'
                + region
                + '" which has the code: '
                + code.toUpperCase();

            alert(message);
        }
    });
    // End of world map

    // Russia map
    $('#russia_map').vectorMap({
        map: 'russia_en',
        backgroundColor: '#eaeaea',
        color: '#ff9933',
        selectedColor: '#EF6F6C',
        hoverColor: '#4fb7fe',
        onRegionClick: function(element, code, region)
        {
            var message = 'You clicked "'
                + region
                + '" which has the code: '
                + code.toUpperCase();

            alert(message);
        }
    });
    // End of russia map

    // Usa map
    $('#usa_map').vectorMap({
        map: 'usa_en',
        backgroundColor: '#eaeaea',
        color: '#4fb7fe',
        selectedColor: '#EF6F6C',
        hoverColor: '#ff9933',
        colors: {
            mo: '#EF6F6C',
            fl: '#00cc99',
            or: '#0fb0c0'
        },
        onRegionClick: function(element, code, region)
        {
            var message = 'You clicked "'
                + region
                + '" which has the code: '
                + code.toUpperCase();

            alert(message);
        }
    });
    // End of usa map

    // Canada map
    $('#canada_map').vectorMap({
        map: 'canada_en',
        backgroundColor: '#eaeaea',
        color: '#347dff',
        selectedColor: '#EF6F6C',
        hoverColor: '#ff9933',
        onRegionClick: function(element, code, region)
        {
            var message = 'You clicked "'
                + region
                + '" which has the code: '
                + code.toUpperCase();

            alert(message);
        }
    });
    // End of canada map

    // Europe map
    $('#europe_map').vectorMap({
        map: 'europe_en',
        backgroundColor: '#eaeaea',
        color: '#00cc99',
        selectedColor: '#EF6F6C',
        hoverColor: '#ff9933',
        onRegionClick: function(element, code, region)
        {
            var message = 'You clicked "'
                + region
                + '" which has the code: '
                + code.toUpperCase();

            alert(message);
        }
    });
    // End of europe map

    $("#menu-toggle,.toggle-right").on("click",function(e) {
        setTimeout(function(){
            $(window).trigger('resize');
        },250);
    });
});
"use strict";
$(document).ready(function () {
    $(window).on("load",function() {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut(1000);
    });
    var textfield = $("input[name=user]");
    $('#index_submit').on('click',function(e) {
        e.preventDefault();
        //little validation just to check username
        if (textfield.val() != "") {
            //$("body").scrollTo("#output");
            $("#output").addClass("alert alert-success animated fadeInUp").html("Welcome back Micheal").removeClass('alert-danger');
            $("input").css({
                "height":"0",
                "padding":"0",
                "margin":"0",
                "opacity":"0"
            });
            //change button text
            $(".locked").addClass("hidden");
            $(".unlocked").removeClass("hidden");
            $('button[type="submit"]').html("CONTINUE")
                .removeClass("btn-primary")
                .addClass("btn-success").on("click",function(){
                window.location.href = 'index.html';
            });

            //show avatar
            $(".avatar").css({
                "background-image": "url('img/admin.jpg')"
            });
        } else {
            //remove success mesage replaced with error message
            $("#output").removeClass(' alert alert-success').addClass("alert alert-danger animated fadeInUp").html("Sorry Enter Your Password ");
        }
        return false;

    });
});
"use strict";
$(document).ready(function () {
    $(window).on("load",function() {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut(1000);
    });
    $(".unlock").on("click",function () {
        $(".lock_show").show();
        $(".unlock").hide();
    });
    $("#lockscreen_validator").bootstrapValidator({
        fields: {
            password: {
                validators: {
                    notEmpty: {
                        message: 'Please provide a password'
                    }
                }
            }
        }
    });
});
"use strict";
$(document).ready(function(){
    $(window).on("load",function() {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut(1000);
    });
    $(".unlock").on("click",function () {
        $(".lock_show").show();
        $(".unlock").hide();
    });
    $(".lock_background3").backstretch([
        "img/login2.png"
        , "img/login13.jpg"
        , "img/login10.png"
    ], {duration: 3000, fade: 750});
    $("#lockscreen_validator").bootstrapValidator({
        fields: {
            password: {
                validators: {
                    notEmpty: {
                        message: 'Please provide a password'
                    }
                }
            }
        }
    });
});
'use strict';
$(document).ready(function() {
    $(window).on("load", function() {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut(1000);
    });
    new WOW().init();
    $('#login_validator').bootstrapValidator({
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Please provide a password'
                    }
                }
            }
        }
    });

});
'use strict';
$(document).ready(function() {
    $(window).on("load",function() {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut(1000);
    });
        new WOW().init();
        $('#login_validator').bootstrapValidator({
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required'
                        },
                        regexp: {
                            regexp: /^\S+@\S{1,}\.\S{1,}$/,
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'Please provide a password'
                        }
                    }
                }
            }
        });
    $('#register_valid').bootstrapValidator({
        fields: {
            UserName: {
                validators: {
                    notEmpty: {
                        message: 'The user name is required and cannot be empty'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Please provide a password'
                    }
                }
            },
            confirmpassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'Please enter the same password as above'
                    }
                }
            }
        }
    });
        $('#login_validator1').bootstrapValidator({
            fields: {
                email_modal: {
                    validators: {
                        notEmpty: {
                            message: 'enter your valid email'
                        },
                        regexp: {
                            regexp: /^\S+@\S{1,}\.\S{1,}$/,
                            message: 'The input is not a valid email address'
                        }
                    }
                }
            }
        });
        validate();
        function validate() {
            if ($('.email_forgot').val() > 0) {
                $(".submit_email").prop("disabled", false);
            } else {
                $(".submit_email").prop("disabled", true);
            }
        }
});

'use strict';
$(document).ready(function() {
    $(".login_backimg").backstretch([
        "img/login2.png"
        , "img/login13.jpg"
        , "img/login10.png"
    ], {duration: 3000, fade: 750});
    $(window).on("load",function() {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut(1000);
    });
    $('#login_validator').bootstrapValidator({
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Please provide a password'
                    }
                }
            }
        }
    });
    $('#register_valid').bootstrapValidator({
        fields: {
            UserName: {
                validators: {
                    notEmpty: {
                        message: 'The user name is required and cannot be empty'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Please provide a password'
                    }
                }
            },
            confirmpassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'Please enter the same password as above'
                    }
                }
            }
        }
    });
    $('#login_validator1').bootstrapValidator({
        fields: {
            email_modal: {
                validators: {
                    notEmpty: {
                        message: 'enter your valid email'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            }
        }
    });
    validate();
    function validate() {
        if ($('.email_forgot').val() > 0) {
            $(".submit_email").prop("disabled", false);
        } else {
            $(".submit_email").prop("disabled", true);
        }
    }
});

'use strict';
$(document).ready(function () {
    // =====================Mail Inbox===================
    $('#inbox_leftmenu').delay(9000).addClass('sidebar-left-hidden');
    $('.custom-control-input').hide();
    $(".select-all").on("change",function () {
        $(".mail tr td [type='checkbox']").prop('checked', $(this).prop("checked"));
        if ($(this).prop("checked")) {
            $(".mail .tab-content .active table tr").addClass("mail_tr_background");
        } else {
            $(".mail .tab-content .active table tr").removeClass("mail_tr_background");
        }
        return false;
    });
    $("#primary2,#social2,#promotions2").on('click', function () {
        $("input:checkbox").prop('checked', false);
        $(".mail .tab-content .active table tr").removeClass("mail_tr_background");
    });
    $(".select-all1,.select-all1 span").on('click', function () {
        $(".select-all").prop('checked', true);
        $(".mail tr td [type='checkbox']").prop('checked', true);
        $(".mail .tab-content .active table tr").addClass("mail_tr_background");
    });
    $("#select-none").on('click', function () {
        $("input:checkbox").prop('checked', false);
        $(".mail .tab-content .active table tr").removeClass("mail_tr_background")
    });
    $('.mail tr td [type="checkbox"]').on('change', function () {
        var chkall=0;
        $(this).closest('tr').toggleClass("mail_tr_background");
        $('.mail tr td [type="checkbox"]').each(function () {
            if ($(this).prop("checked")) {
            } else {
                chkall=1;
                return;
            }
        });
        if(chkall==1){
            $(".select-all").prop("checked", false);
        }else{
            $(".select-all").prop("checked", true);
        }
    });
    $("#refresh_inbox").on('click', function () {
        $(location).attr('href', 'mail_inbox.html');
    });
    $('.mail tr td .fa-star').on('click', function () {
        $(this).toggleClass("text-warning");
        return false;
    });
    $('.contact_scroll').css('height',480);
    $('.contact_scroll').jScrollPane({
        autoReinitialise: true,
        autoReinitialiseDelay: 100
    });
    $(".starred_mail").hide();
    $("#more_items").on('click',function () {
        $(".starred_mail").slideToggle();
        $("#more_items").find('.fa-angle-down,.fa-angle-up').toggleClass("fa-angle-up").toggleClass("fa-angle-down");
    });
    $(".sent_to_mailview").on("click",function () {
        $(location).attr('href','mail_view.html');
        return false;
    });
    // ===================Mail Compose==================

    $(".mail_compose_wysi textarea").wysihtml5();
    $(".mail_view_wysi textarea").wysihtml5();
    $(".wysihtml5-toolbar .btn-group:eq(1) a:first-child").addClass("fa fa-list");
    $(".wysihtml5-toolbar .btn-group:eq(1) a:nth-child(2)").addClass("fa fa-th-list");
    $(".wysihtml5-toolbar .btn-group:eq(1) a:nth-child(3)").addClass("fa fa-align-left");
    $(".wysihtml5-toolbar .btn-group:eq(1) a:nth-child(4)").addClass("fa fa-align-right");
    $(".wysihtml5-toolbar li:nth-child(5) span").addClass("fa fa-share");
    $(".wysihtml5-toolbar li:nth-child(6) span").addClass("fa fa-picture-o");
    $(".wysihtml5-toolbar li:first-child a:first-child").removeClass('btn-default').addClass('btn-secondary');
    $(".wysihtml5-toolbar li:nth-child(2) a,.wysihtml5-toolbar li:nth-child(3) a,.wysihtml5-toolbar li:nth-child(4) a,.wysihtml5-toolbar li:nth-child(5) a,.wysihtml5-toolbar li:nth-child(6) a").removeClass('btn-default').addClass('btn-secondary');
    $("[data-wysihtml5-command='formatBlock'] span").removeClass("glyphicon glyphicon-quote").addClass("fa fa-quote-left");
    // ====================Mail View===========================
    $(".mail_view_wysi").hide();
    $("#view_reply1").on('click',function () {
        $("#forward_to,#view_reply2,#view_reply3").hide();
        $(this).hide();
        $(".mail_view_wysi").show();
        return false;
    });
    $("#view_reply2").on('click',function () {
        $("#view_reply1,#view_reply2,#view_reply3").hide();
        $(".mail_view_wysi").show();
        return false;
    });
    $("#view_reply1").on("click",function () {
        $("#goto_sent_page").on("click",function () {
            $(location).attr("href","mail_sent.html");
            return false;
        })
    });
});
'use strict';
$(document).ready(function () {
    $(".select_all_mail").on("change",function () {
        $(".mail_sent_all tr td [type='checkbox']").prop('checked', $(this).prop("checked"));
        if ($(this).prop("checked")) {
            $(".mail_sent_all table tr").addClass("mail_tr_background");
        } else {
            $(".mail_sent_all table tr").removeClass("mail_tr_background");
        }
    });
    $("#primary2,#social2,#promotions2").on('click', function () {
        $("input:checkbox").prop('checked', false);
        $(".mail_sent_all table tr").removeClass("mail_tr_background");
    });
    $(".select-all1").on('click', function () {
        $(".select_all_mail").prop('checked', true);
        $(".mail_sent_all tr td [type='checkbox']").prop('checked', true);
        $(".mail_sent_all table tr").addClass("mail_tr_background");
    });
    $("#select-none").on('click', function () {
        $("input:checkbox").prop('checked', false);
        $(".mail_sent_all table tr").removeClass("mail_tr_background")
    });
    $('.mail_sent_all tr td [type="checkbox"]').on('change', function () {
        var chkall=0;
        $(this).closest('tr').toggleClass("mail_tr_background");
        $('.mail_sent_all tr td [type="checkbox"]').each(function () {
            if ($(this).prop("checked")) {
            } else {
                chkall=1;
                return;
            }
        });
        if(chkall==1){
            $(".select_all_mail").prop("checked", false);
        }else{
            $(".select_all_mail").prop("checked", true);
        }
    });
    $("#refresh_sent").on('click', function () {
        $(location).attr('href', 'mail_sent.html');
        return false;
    });
    $("#refresh_spam").on('click', function () {
        $(location).attr('href', 'mail_spam.html');
        return false;
    });
    $("#refresh_trash").on('click', function () {
        $(location).attr('href', 'mail_trash.html');
        return false;
    });
    $("#refresh_draft").on('click', function () {
        $(location).attr('href', 'mail_draft.html');
        return false;
    });
    $('.mail tr td .fa-star').on('click', function () {
        $(this).toggleClass("text-warning");
        return false;
    });
    $('.contact_scroll').css('height',480);
    $('.contact_scroll').jScrollPane({
        autoReinitialise: true,
        autoReinitialiseDelay: 100
    });
    $(".starred_mail").hide();
    $("#more_items").on('click',function () {
        $(".starred_mail").slideToggle();
        $("#more_items").find('.fa-angle-down,.fa-angle-up').toggleClass("fa-angle-up").toggleClass("fa-angle-down");
        return false;
    });
});

'use strict';
$(document).ready(function() {
    $("#menu-toggle").on("click", function() {
        setTimeout(function() {
            basicmap.refresh();
            markermap.refresh();
            styledmap.refresh();
            maptypes.refresh();
            search_placemap.refresh();
            routemap.refresh();
        }, 500);
    });
    // ==========basic map=============
    var $gmap = $(".gmap");
    $gmap.css("height", "300px");
    var basicmap = new GMaps({
        div: "#gmap-top",
        lat: -33.865,
        lng: 151.2,
        zoom: 15,
        zoomControl: true,
        zoomControlOpt: {
            style: "SMALL",
            position: "TOP_LEFT"
        },
        disableDefaultUI: !0,
        // scrollwheel: !1
    });
    // =============basic map=============
    // ========map markers=============================
    var markers = [{
        lat: -12.043333,
        lng: -77.028333,
        title: "Marker #1",
        animation: google.maps.Animation.DROP,
        infoWindow: {
            content: "<strong>Marker #1: HTML Content</strong>"
        }
    }, {
        lat: -12.000000,
        lng: -77.000000,
        title: "Marker #2",
        animation: google.maps.Animation.DROP,
        infoWindow: {
            content: "<strong>Marker #2: HTML Content</strong>"
        }
    }, {
        lat: -20,
        lng: 85,
        title: "Marker #3",
        animation: google.maps.Animation.DROP,
        infoWindow: {
            content: "<strong>Marker #3: HTML Content</strong>"
        }
    }, {
        lat: -20,
        lng: -110,
        title: "Marker #4",
        animation: google.maps.Animation.DROP,
        infoWindow: {
            content: "<strong>Marker #4: HTML Content</strong>"
        }
    }];
    var markermap = new GMaps({
        div: "#gmap-markers",
        lat: -12.043333,
        lng: -77.028333,
        zoom: 10,
        zoomControl: true,
        zoomControlOpt: {
            style: "SMALL",
            position: "TOP_LEFT"
        },
        // scrollwheel: !1
    });
    markermap.addMarkers(markers);
    // ========================map markers===================
    // ==============styled map=============
    var styledmap = new GMaps({
        div: "#gmap-styled",
        lat: 41.895465,
        lng: 12.482324,
        zoom: 5,
        zoomControl: true,
        zoomControlOpt: {
            style: "SMALL",
            position: "TOP_LEFT"
        },
        panControl: true,
        streetViewControl: false,
        mapTypeControl: false,
        overviewMapControl: false
    });
    var styles = [{
        stylers: [
            { hue: "#00ffe6" },
            { saturation: -20 }
        ]
    }, {
        featureType: "road",
        elementType: "geometry",
        stylers: [
            { lightness: 100 },
            { visibility: "simplified" }
        ]
    }, {
        featureType: "road",
        elementType: "labels",
        stylers: [
            { visibility: "off" }
        ]
    }];
    styledmap.addStyle({
        styles: styles,
        mapTypeId: "maps_style"
    });

    styledmap.setStyle("maps_style");
    // ================styled map==================
    // ==============map types============
    var maptypes = new GMaps({
        el: '#gmap-types',
        lat: -12.043333,
        lng: -77.028333,
        mapTypeControlOptions: {
            mapTypeIds: ["terrain", "osm", "cloudmade","hybrid","satellite"]
        }
    });
    maptypes.addMapType("osm", {
        getTileUrl: function(coord, zoom) {
            return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
        tileSize: new google.maps.Size(256, 256),
        name: "OpenStreetMap",
        maxZoom: 18
    });
    maptypes.addMapType("cloudmade", {
        getTileUrl: function(coord, zoom) {
            return "http://b.tile.cloudmade.com/8ee2a50541944fb9bcedded5165f09d9/1/256/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
        tileSize: new google.maps.Size(256, 256),
        name: "CloudMade",
        maxZoom: 18
    });
    maptypes.setMapTypeId("osm");
    // ================map types========================
    // ============================================adv maps js=============================
    // var map1;
    // =====================search place====================    
    var search_placemap = new GMaps({
        div: '#map1',
        lat: 43.654438,
        lng: -79.380699,
        zoom: 3
    });
    $('#geocoding_form').on("submit",function(e) {
        e.preventDefault();
        GMaps.geocode({
            address: $('#address').val().trim(),
            callback: function(results, status) {
                if (status == 'OK') {
                    var latlng = results[0].geometry.location;
                    search_placemap.setCenter(latlng.lat(), latlng.lng());
                    search_placemap.addMarker({
                        lat: latlng.lat(),
                        lng: latlng.lng()
                    });
                }
            }
        });
    });
    // ============search places=============

    var routemap;
    // =============search route============================
    var route;

    $('#forward').attr('disabled', 'disabled');
    $('#back').attr('disabled', 'disabled');
    $('#get_route').on("click",function(e) {
        e.preventDefault();

        var origin = routemap.markers[0].getPosition();
        var destination = routemap.markers[routemap.markers.length - 1].getPosition();

        routemap.getRoutes({
            origin: [origin.lat(), origin.lng()],
            destination: [destination.lat(), destination.lng()],
            travelMode: 'driving',
            callback: function(e) {
                route = new GMaps.Route({
                    map: routemap,
                    route: e[0],
                    strokeColor: '#000',
                    strokeOpacity: 0.5,
                    strokeWeight: 10
                });
                $('#forward').removeAttr('disabled');
                $('#back').removeAttr('disabled');
            }
        });
        $('#forward').on("click",function(e) {
            e.preventDefault();
            route.forward();

            if (route.step_count < route.steps_length)
                $('#steps').append('<li>' + route.steps[route.step_count].instructions + '</li>');
        });
        $('#back').on("click",function(e) {
            e.preventDefault();
            route.back();

            if (route.step_count >= 0)
                $('#steps').find('li').last().remove();
        });
    });
    routemap = new GMaps({
        div: '#map',
        lat: 40.758895,
        lng: -73.985131,
        zoom: 14,
        click: function(e) {
            routemap.addMarker({
                lat: e.latLng.lat(),
                lng: e.latLng.lng()
            });
        }
    });
    // ===========search route======================

});

$(document).ready( function(){
  (function($){
    $.fn.setCursorToTextEnd = function() {
      var $initialVal = this.val();
      this.val($initialVal);
    };
  })(jQuery);
  var data = ""
  $("table").on("click", ".editable", function(e) {
    e.stopPropagation();
    $("body").find(".text_donot_save").click();
    data = $(this).text();
    var a = "<div class='editable_table_text form-group editable_table form-inline'><input type='text' class='form-control input_text' value='" + $(this).text() + "'>" +
        "<button class='btn btn-primary text_save'><i class='fa fa-check text-white'></i></button>" +
        "<button class='btn btn-danger text_donot_save'><i class='fa fa-close text-white'></i></button></div>"
    $(this).removeClass("editable");
    $(this).html(a);
    $(this).find("input[type='text']").focus().setCursorToTextEnd();
  });
  $("table").on("click", ".text_save", function() {
    var x = $(".input_text").val();
    $(this).closest("span").addClass("editable").text(x);
  });
  $("table").on("click", ".text_donot_save", function() {
    $(this).closest("span").addClass("editable").text(data);
  });
  $('#users').on("click", ".editable_table_text", function(event) {
    event.stopPropagation();
  });
  $("html").on("click",function() {
    $("body").find(".text_donot_save").click();
  });
  $(".icon-arrow-left").replaceWith("<i class='fa fa-arrow-left arrow_padding text-white'></i>");
  $(".icon-arrow-right").replaceWith("<i class='fa fa-arrow-right arrow_padding text-white'></i>");
  var cTime = new Date(), month = cTime.getMonth()+1, year = cTime.getFullYear();

    theMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    theDays = ["S", "M", "T", "W", "T", "F", "S"];
    events = [
      [
        "5/"+month+"/"+year, 
        'Meet a friend', 
        '#', 
        '#fb6b5b', 
        'Contents here'
      ],
      [
        "8/"+month+"/"+year, 
        'Meeting with CEO', 
        '#', 
        '#ffba4d', 
        'Contents here'
      ],
      [
        "18/"+month+"/"+year, 
        'Milestone release', 
        '#', 
        '#ffba4d', 
        'Contents here'
      ],
      [
        "19/"+month+"/"+year, 
        'A link', 
        '/admire', 
        '#cccccc'
      ]
    ];

    $('#calendar_mini').calendar({
        months: theMonths,
        days: theDays,
        events: events,
        popover_options:{
            placement: 'top',
            html: true
        }
    });
  $('[data-original-title="A link"]').replaceWith('<a data-original-title="A link" href="#" rel="tooltip">19</a>');
  $("#calendar_mini .icon-arrow-right").replaceWith('<i class="fa fa-arrow-right text-white arrow_padding" aria-hidden="true"></i>')
  $("#calendar_mini .icon-arrow-left").replaceWith('<i class="fa fa-arrow-left text-white arrow_padding" aria-hidden="true"></i>')
});
//modals page
'use strict';
$(document).ready(function(){
    $(".rotatein").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#modal-rotatein').addClass('animated rotateIn').one(animationEnd, function() {
            $(this).removeClass('animated rotateIn');
        });
    });
    $(".rotatedownright").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#modal-rotatedownright').addClass('animated rotateInDownRight').one(animationEnd, function() {
            $(this).removeClass('animated rotateInDownRight');
        });
    });
    $(".flipiny").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#modal-flipiny').addClass('animated flipInY').one(animationEnd, function() {
            $(this).removeClass('animated flipInY');
        });
    });
    $(".zoomin").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#modal-zoomin').addClass('animated zoomIn').one(animationEnd, function() {
            $(this).removeClass('animated zoomIn');
        });
    });
    $(".swing").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#modal-swing').addClass('animated swing').one(animationEnd, function() {
            $(this).removeClass('animated swing');
        });
    });
    $(".tada").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#modal-tada').addClass('animated tada').one(animationEnd, function() {
            $(this).removeClass('animated tada');
        });
    });
    $(".shake").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#modal-shake').addClass('animated shake').one(animationEnd, function() {
            $(this).removeClass('animated shake');
        });
    });
    $(".lightspeedin").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#modal-lightspeedin').addClass('animated lightSpeedIn').one(animationEnd, function() {
            $(this).removeClass('animated lightSpeedIn');
        });
    });
    $(".slideinleft").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#modal-slideinleft').addClass('animated fadeInLeft').one(animationEnd, function() {
            $(this).removeClass('animated fadeInLeft');
        });
    });
    $(".slideinright").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#modal-slideinright').addClass('animated slideInRight').one(animationEnd, function() {
            $(this).removeClass('animated slideInRight');
        });
    });
    $(".fadein").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#modal-1').addClass('animated fadeIn').one(animationEnd, function() {
            $(this).removeClass('animated fadeIn');
        });
    });
    $(".fadeindown").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#modal-fadeindown').addClass('animated fadeInDown').one(animationEnd, function() {
            $(this).removeClass('animated fadeInDown');
        });
    });
    $(".bounceinright").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#modal-2').addClass('animated bounceInRight').one(animationEnd, function() {
            $(this).removeClass('animated bounceInRight');
        });
    });
    $(".bounceindown").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#modal-3').addClass('animated bounceInDown').one(animationEnd, function() {
            $(this).removeClass('animated bounceInDown');
        });
    });
    $(".bounceinup").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#modal-bounceinup').addClass('animated bounceInUp').one(animationEnd, function() {
            $(this).removeClass('animated bounceInUp');
        });
    });
});

"use strict";
$(document).ready(function() {

    /* Toastr notifications */

    var i = -1;
    var toastCount = 0;
    var $toastlast;

    var shortCutFunction = "success";
    var msg = "Thanks for checking our theme!";
    var title = "<span>Welcome!</span> <h5 class='text-white'>Micheal</h5>";
    var $showDuration = 1000;
    var $hideDuration = 1000;
    var $timeOut = 5000;
    var $extendedTimeOut = 1000;
    var $showEasing = "swing";
    var $hideEasing = "linear";
    var $showMethod = "fadeIn";
    var $hideMethod = "fadeOut";
    var toastIndex = toastCount++;
    toastr.options = {
        closeButton: $('#closeButton').prop('checked'),
        debug: $('#debugInfo').prop('checked'),
        positionClass: 'toast-top-right',
        onclick: null
    };
    if ($('#addBehaviorOnToastClick').prop('checked')) {
        toastr.options.onclick = function() {
            alert('You can perform some custom action after a toast goes away');
        };
    }
    if ($showDuration.length) {
        toastr.options.showDuration = $showDuration;
    }
    if ($hideDuration.length) {
        toastr.options.hideDuration = $hideDuration;
    }
    if ($timeOut.length) {
        toastr.options.timeOut = $timeOut;
    }
    if ($extendedTimeOut.length) {
        toastr.options.extendedTimeOut = $extendedTimeOut;
    }
    if ($showEasing.length) {
        toastr.options.showEasing = $showEasing;
    }
    if ($hideEasing.length) {
        toastr.options.hideEasing = $hideEasing;
    }
    if ($showMethod.length) {
        toastr.options.showMethod = $showMethod;
    }
    if ($hideMethod.length) {
        toastr.options.hideMethod = $hideMethod;
    }
    $("#toastrOptions").text("Command: toastr[" + shortCutFunction + "](\"" + msg + (title ? "\", \"" + title : '') + "\")\n\ntoastr.options = " + JSON.stringify(toastr.options, null, 2));
    var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
    $toastlast = $toast;
    // =====================main chart js============================
    // tabs 1
    //start area chart
    var da1 = [["Jan", 80],["Feb", 100],["Mar", 95],["Apr", 105],["May", 80],["Jun", 95],["Jul", 80],["Aug", 90],["Sep", 115],["Oct", 90],["Nov", 85],["Dec", 90]];
    var da2 = [["Jan", 40],["Feb", 60],["Mar", 50],["Apr", 60],["May", 35],["Jun", 45],["Jul", 30],["Aug", 40],["Sep", 60],["Oct", 40],["Nov", 60],["Dec", 35]];
    $.plot("#area-chart", [{
        data: da1,
        label: "Views",
        color: "#69d3be"
    },{
        data: da2,
        label: "Likes",
        color: "#4FB7FE"
    }], {
        series: {
            lines: {
                show: !0,
                fill: .8,
                fillColor: { colors: [{ opacity: 0.0 }, { opacity: 0.6}] }
            },
            points: {
                show: !0,
                radius: 3
            }
        },
        grid: {
            borderColor: "#fff",
            borderWidth: 1,
            hoverable: !0
        },
        tooltip: true,
        tooltipOpts: {
            content: "%y",
            defaultTheme: true
        },
        xaxis: {
            tickColor: "#eff",
            mode: "categories"
        },
        yaxis: {
            tickColor: "#eff"
        },
        shadowSize: 0
    });



    // tab-2
    var realtoggle = new Switchery(document.querySelector('#toggle_real'), { size: 'small', color: '#00c0ef', jackColor: '#fff' });
    var data_1 = [],
        totalPoints_1 = 70;

    function getRandomData_1() {
        if (data_1.length > 0)
            data_1 = data_1.slice(1);
        // do a random walk
        while (data_1.length < totalPoints_1) {
            var prev_1 = data_1.length > 0 ? data_1[data_1.length - 1] : 50;
            var y = prev_1 + Math.random() * 10 - 5;
            if (y < 25)
                y = 30;
            if (y > 100)
                y = 90;
            data_1.push(y);
        }
        var res_1 = [];
        for (var i = 0; i < data_1.length; ++i)
            res_1.push([i, data_1[i]])
        return res_1;
    }

    // setup control widget
    var updateInterval_1 = 300;

    // setup plot
    var options_1 = {
        colors: ["linear-gradient(70deg, #4FB7FE 0)"],

        series: {
            shadowSize: 0,
            lines: {
                show: true,
                fill: true,
                fillColor: {
                    colors: [{
                        opacity: 0.3
                    }, {
                        opacity: 1
                    }]
                }
            }
        },
        yaxis: {
            min: 0,
            max: 120
            // tickLength:0
        },
        xaxis: {
            show: false
            // tickLength:0
        },
        grid: {
            backgroundColor: '#fff',
            borderWidth: 1,
            borderColor: '#fff'
        }
    };

    var plot_1 = $.plot($("#realtime"), [getRandomData_1()], options_1);

    function update_1() {
        plot_1.setData([getRandomData_1()]);
        // since the axes don't change, we don't need to call plot.setupGrid()
        plot_1.draw();
        if ($("#toggle_real").prop("checked")) {
            setTimeout(update_1, updateInterval_1);
        }
    }

    update_1();

    $("#toggle_real").on("change",function() {
        update_1();
    });
    // tab2 end
// -=========================end main chat js========================
    // ========================to do list==============

    $('body').on('click', '.border_color', function() {
        $('#btn_color').removeClass('btn-secondary btn-danger btn-primary btn-info btn-mint').addClass($(this).data('color'));
        $('#btn_color').data('badge', $(this).data('badge'));
        $('#btn_color').css("color", "#fff");
        return false;
    });
    $('[data-toggle="popover"]').popover({
        html: true,
        placement: 'right',
        content: function() {
            return $($(this).data('contentwrapper')).html();
        }
    });
    $(".border_danger").on('click',function() {
        $(".todo_mintbadge").addClass('border_danger')
    });
    $("form#main_input_box").submit(function(event) {
        event.preventDefault();
        var deleteButton = " <a href='' class='tododelete redcolor'><span class='fa fa-trash'></span></a>";
        var striks = " <span class='dividor'>|</span> ";
        var editButton = " <a href='#' class='todoedit'><span class='fa fa-pencil'></span></a>";
        var checkBox = "<p><input type='checkbox' class='striked form-control' autocomplete='off' /></p>";
        var twoButtons = "<div class='col-lg-3 col-sm-4 col-xs-3 showbtns todoitembtns'>" + editButton + striks + deleteButton + "</div>";
        var badgeClass = $('#btn_color').data('badge');
        $(".list_of_items").prepend("<div class='todolist_list showactions'>  " + "<div class='col-lg-8 col-sm-8 col-xs-8 nopad custom_textbox1'> <div class='todo_mintbadge " + badgeClass + "'> </div> <div class='todoitemcheck'>" + checkBox + "</div>" + "<div class='todotext todoitem'>" + $("#custom_textbox").val() + "</div> </div>" +   twoButtons + "<span class='seperator'></span>");
        $("#custom_textbox").val('');
        $('#btn_color').css("color", "#fff");
        return false;
    });
    $(".todo_section").on('click','.tododelete', function(e) {
        e.preventDefault();
        $(this).closest('.todolist_list').remove();
    });
    $(".todo_section").on('click','.striked', function(e) {
        $(this).closest('.todolist_list').find('.todotext').toggleClass('strikethrough');
        $(this).closest('.todolist_list').find('.showbtns').toggle();
    });
    $(".todo_section").on('click',".todoedit", function(e) {
        var editButton = " <a href='#' class='todoedit'><span class='fa fa-pencil'></span></a>";
        e.preventDefault();
        $(this).closest('.todolist_list').find('.striked').toggle();
        if ($(this).text() == " ") {
            $(this).closest('.todolist_list').find(".showbtns").toggleClass("opacityfull");
            var text1 = $(this).closest('.todolist_list').find("input[type='text'][name='text']").val().trim();
            if (text1 === '') {
                alert('Come on! you can\'t create a todo without title');
                $(this).closest('.todolist_list').find("input[type='text'][name='text']").focus();
                $(this).closest('.todolist_list').find(".striked").hide();
                return;
            }
            $(this).closest('.todolist_list').find('.todotext').html(text1);
            $(this).html("<span class='fa fa-pencil'></span>");
            $(this).closest('.todolist_list').find(".showbtns").toggleClass("opacityfull");
            return;
        }
        var text = '';
        text = $(this).closest('.todolist_list').find('.todotext').text();
        text = "<input type='text' name='text' value='" + text + "' onkeypress='return event.keyCode != 13;' />";
        $(this).closest('.todolist_list').find('.todotext').html(text);
        $(this).html("<span class='fa fa-check'></span> ");
        text = '';
        return;
    });
    $("#custom_textbox").on("keypress", function(e) {
        if (e.which === 32 && !this.value.length)
            e.preventDefault();
    });
    // ======================to do list end=============================
    // =================top 4 sections countup js==================
    var options = {
        useEasing: true,
        useGrouping: true,
        separator: ',',
        decimal: '.',
        prefix: '',
        suffix: ''
    };
    new CountUp("sales_count", 0, 750, 0, 2.5, options).start();
    new CountUp("visitors_count", 0, 1700, 0, 2.5, options).start();
    new CountUp("revenue_count", 0, 1200, 0, 2.5, options).start();
    new CountUp("subscribers_count", 0, 1020, 0, 2.5, options).start();
    // =========================News ticker===========================================
    var nt_example1 = $('#nt-example1').newsTicker({
        direction: 'down',
        row_height: 85,
        max_rows: 3,
        duration: 2000
    });

    $('.todo_section').slimscroll({
        height: '213px',
        size: '5px',
        opacity: 0.2
    });
    $(".content").css("height",300);
    $('.content').jScrollPane({
        autoReinitialise: true,
        autoReinitialiseDelay: 100
    });

    //server load
    var flot2 = function() {
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data = [],
            totalPoints = 100;

        function getRandomData() {
            if (data.length > 0)
                data = data.slice(1);
            // Do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;
                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }
                data.push(y);
            }
            // Zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }
            return res;
        }
        var plot2 = $.plot("#flotchart2", [getRandomData()], {
            series: {
                shadowSize: 0 // Drawing is faster without shadows
            },
            yaxis: {
                min: 0,
                max: 100
            },
            xaxis: {
                show: false
            },
            colors: ["#22BAA0"],
            legend: {
                show: false
            },
            grid: {
                color: "#AFAFAF",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: '#FFF'},
            tooltip: true,
            tooltipOpts: {
                content: "Y: %y",
                defaultTheme: false
            }
        });

        function update() {
            plot2.setData([getRandomData()]);
            plot2.draw();
            setTimeout(update, 30);
        }
        update();
    };
    flot2();
    //donut
    var datax = [{
        label: "Profile",
        data: 150,
        color: '#00c0ef'
    }, {
        label: "Facebook ",
        data: 130,
        color: '#668cff'
    }, {
        label: "Twitter ",
        data: 190,
        color: '#0fb0c0'
    }, {
        label: "Google+",
        data: 180,
        color: '#ff8080'
    }, {
        label: "Linkedin",
        data: 120,
        color: '#ffb300'
    }];
    $.plot($("#donut"), datax, {
        series: {
            pie: {
                innerRadius: 0.5,
                show: true
            }
        },
        legend: {
            show: false
        },
        grid: {
            hoverable: true
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s"
        }
    });
    var progressBarContainer = $('#progress-bar');
    var progressBar = {
        chain: [],
        progress: progressBarContainer.children('progress'),
        progressBar: progressBarContainer.find('.progress-bar'),
        progressInfo: progressBarContainer.children('.progress-info'),
        set: function(value, info, noPush) {
            if (!noPush) {
                this.chain.push(value);
            }
            if (this.chain[0] == value) {
                this.go(value, info);
            } else {
                var self = this;
                setTimeout(function() {
                    self.set(value, info, true)
                }, 500);
            }
        },
        go: function(value, info) {
            this.progressInfo.text(info);
            var self = this;
            var interval = setInterval(function() {
                var curr = self.progress.attr('value');
                if (curr >= value) {
                    clearInterval(interval);
                    self.progress.attr('value', value);
                    self.progressBar.css('width', value + '%');
                    self.chain.shift()
                } else {
                    self.progress.attr('value', ++curr);
                    self.progressBar.css('width', curr + '%');
                }
            }, 10)
        }
    };
    progressBar.set(5);
    progressBar.set(12);
    progressBar.set(22);
    progressBar.set(32);
    progressBar.set(52);
    var progressBarContainer12 = $('#progress-bar1');
    var progressBar = {
        chain: [],
        progress: progressBarContainer12.children('progress'),
        progressBar: progressBarContainer12.find('.progress-bar'),
        progressInfo: progressBarContainer12.children('.progress-primary'),
        set: function(value, info, noPush) {
            if (!noPush) {
                this.chain.push(value);
            }
            if (this.chain[0] == value) {
                this.go(value, info);
            } else {
                var self = this;
                setTimeout(function() {
                    self.set(value, info, true)
                }, 500);
            }
        },
        go: function(value, info) {
            this.progressInfo.text(info);
            var self = this;
            var interval = setInterval(function() {
                var curr = self.progress.attr('value');
                if (curr >= value) {
                    clearInterval(interval);
                    self.progress.attr('value', value);
                    self.progressBar.css('width', value + '%');
                    self.chain.shift()
                } else {
                    self.progress.attr('value', ++curr);
                    self.progressBar.css('width', curr + '%');
                }
            }, 10)
        }
    };
    progressBar.set(5);
    progressBar.set(10);
    progressBar.set(40);
    progressBar.set(60);
    progressBar.set(80);
    var progressBarContainer2 = $('#progress-bar2');
    var progressBar = {
        chain: [],
        progress: progressBarContainer2.children('progress'),
        progressBar: progressBarContainer2.find('.progress-bar'),
        progressInfo: progressBarContainer2.children('.progress-primary'),
        set: function(value, info, noPush) {
            if (!noPush) {
                this.chain.push(value);
            }
            if (this.chain[0] == value) {
                this.go(value, info);
            } else {
                var self = this;
                setTimeout(function() {
                    self.set(value, info, true)
                }, 500);
            }
        },
        go: function(value, info) {
            this.progressInfo.text(info);
            var self = this;
            var interval = setInterval(function() {
                var curr = self.progress.attr('value');
                if (curr >= value) {
                    clearInterval(interval);
                    self.progress.attr('value', value);
                    self.progressBar.css('width', value + '%');
                    self.chain.shift()
                } else {
                    self.progress.attr('value', ++curr);
                    self.progressBar.css('width', curr + '%');
                }
            }, 10)
        }
    };
    progressBar.set(5);
    progressBar.set(12);
    progressBar.set(22);
    progressBar.set(52);
    progressBar.set(73);
    var progressBarContainer1 = $('#progress-bar3');
    var progressBar = {
        chain: [],
        progress: progressBarContainer1.children('progress'),
        progressBar: progressBarContainer1.find('.progress-bar'),
        progressInfo: progressBarContainer1.children('.progress-info'),
        set: function(value, info, noPush) {
            if (!noPush) {
                this.chain.push(value);
            }
            if (this.chain[0] == value) {
                this.go(value, info);
            } else {
                var self = this;
                setTimeout(function() {
                    self.set(value, info, true)
                }, 500);
            }
        },
        go: function(value, info) {
            this.progressInfo.text(info);
            var self = this;
            var interval = setInterval(function() {
                var curr = self.progress.attr('value');
                if (curr >= value) {
                    clearInterval(interval);
                    self.progress.attr('value', value);
                    self.progressBar.css('width', value + '%');
                    self.chain.shift()
                } else {
                    self.progress.attr('value', ++curr);
                    self.progressBar.css('width', curr + '%');
                }
            }, 10)
        }
    };
    progressBar.set(5);
    progressBar.set(10);
    progressBar.set(22);
    progressBar.set(37);
    progressBar.set(50);
    var progressBarContainer = $('#progress-bar4');
    var progressBar = {
        chain: [],
        progress: progressBarContainer.children('progress'),
        progressBar: progressBarContainer.find('.progress-bar'),
        progressInfo: progressBarContainer.children('.progress-info'),
        set: function(value, info, noPush) {
            if (!noPush) {
                this.chain.push(value);
            }
            if (this.chain[0] == value) {
                this.go(value, info);
            } else {
                var self = this;
                setTimeout(function() {
                    self.set(value, info, true)
                }, 500);
            }
        },
        go: function(value, info) {
            this.progressInfo.text(info);
            var self = this;
            var interval = setInterval(function() {
                var curr = self.progress.attr('value');
                if (curr >= value) {
                    clearInterval(interval);
                    self.progress.attr('value', value);
                    self.progressBar.css('width', value + '%');
                    self.chain.shift()
                } else {
                    self.progress.attr('value', ++curr);
                    self.progressBar.css('width', curr + '%');
                }
            }, 10)
        }
    };
    progressBar.set(5);
    progressBar.set(12);
    progressBar.set(22);
    progressBar.set(37);
    progressBar.set(40);
    var progressBarContainer = $('#progress-bar5');
    var progressBar = {
        chain: [],
        progress: progressBarContainer.children('progress'),
        progressBar: progressBarContainer.find('.progress-bar'),
        progressInfo: progressBarContainer.children('.progress-info'),
        set: function(value, info, noPush) {
            if (!noPush) {
                this.chain.push(value);
            }
            if (this.chain[0] == value) {
                this.go(value, info);
            } else {
                var self = this;
                setTimeout(function() {
                    self.set(value, info, true)
                }, 500);
            }
        },
        go: function(value, info) {
            this.progressInfo.text(info);
            var self = this;
            var interval = setInterval(function() {
                var curr = self.progress.attr('value');
                if (curr >= value) {
                    clearInterval(interval);
                    self.progress.attr('value', value);
                    self.progressBar.css('width', value + '%');
                    self.chain.shift()
                } else {
                    self.progress.attr('value', ++curr);
                    self.progressBar.css('width', curr + '%');
                }
            }, 10)
        }
    };
    progressBar.set(5);
    progressBar.set(12);
    progressBar.set(42);
    progressBar.set(72);
    progressBar.set(93);

});


'use strict';
$(document).ready(function() {
    function dyn_notice() {
        var percent = 0;
        var notice = new PNotify({
            text: "Please Wait",
            type: 'info',
            icon: 'fa fa-spinner fa-spin',
            hide: false,
            buttons: {
                closer: false,
                sticker: false
            },
            opacity: .75,
            shadow: false,
            width: "170px"
        });

        setTimeout(function () {
            notice.update({title: false});
            var interval = setInterval(function () {
                percent += 2;
                var options = {
                    text: percent + "% complete."
                };
                if (percent == 80)
                    options.title = "Almost There";
                if (percent >= 100) {
                    window.clearInterval(interval);
                    options.title = "Done!";
                    options.type = "success";
                    options.hide = true;
                    options.buttons = {
                        closer: true,
                        sticker: true
                    };
                    options.icon = 'fa fa-check';
                    options.opacity = 1;
                    options.shadow = true;
                    options.width = PNotify.prototype.options.width;
                }
                notice.update(options);
            }, 120);
        }, 2000);
    }

    function fake_load() {
        var cur_value = 1,
            progress;

        // Make a loader.
        var loader = new PNotify({
            title: "Creating series of tubes",
            text: '<div class="progress progress-striped active" style="margin:0">\
    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">\
        <span class="sr-only">0%</span>\
    </div>\
</div>',
            //icon: 'fa fa-moon-o fa-spin',
            icon: 'fa fa-cog fa-spin',
            hide: false,
            buttons: {
                closer: false,
                sticker: false
            },
            history: {
                history: false
            },
            before_open: function (notice) {
                progress = notice.get().find("div.progress-bar");
                progress.width(cur_value + "%").attr("aria-valuenow", cur_value).find("span").html(cur_value + "%");
                // Pretend to do something.
                var timer = setInterval(function () {
                    if (cur_value == 70) {
                        loader.update({title: "Aligning discrete worms", icon: "fa fa-circle-o-notch fa-spin"});
                    }
                    if (cur_value == 80) {
                        loader.update({title: "Connecting end points", icon: "fa fa-refresh fa-spin"});
                    }
                    if (cur_value == 90) {
                        loader.update({title: "Dividing and conquering", icon: "fa fa-spinner fa-spin"});
                    }
                    if (cur_value >= 100) {
                        // Remove the interval.
                        window.clearInterval(timer);
                        loader.remove();
                        return;
                    }
                    cur_value += 1;
                    progress.width(cur_value + "%").attr("aria-valuenow", cur_value).find("span").html(cur_value + "%");
                }, 65);
            }
        });
    }

    // Basic notifications

    $(".notify_desktop").on("click", function () {
        PNotify.desktop.permission();
        new PNotify({
            title: 'Desktop Info',
            text: 'If you\'ve given me permission, I\'ll appear as a desktop notification. If you haven\'t, I\'ll still appear as a regular PNotify notice.',
            type: 'info',
            desktop: {
                desktop: true
            }
        }).get().on("click",function (e) {
            if ($('.ui-pnotify-closer, .ui-pnotify-sticker, .ui-pnotify-closer *, .ui-pnotify-sticker *').is(e.target))
                return;
            alert('Hey! You clicked the desktop notification!');
        });
        return false;
    });
    $(".notify_desktopsuccess").on("click", function () {
        PNotify.desktop.permission();
        new PNotify({
            title: 'Desktop Success',
            text: 'If you\'ve given me permission, I\'ll appear as a desktop notification. If you haven\'t, I\'ll still appear as a regular PNotify notice.',
            type: 'success',
            desktop: {
                desktop: true
            }
        }).get().on("click",function (e) {
            if ($('.ui-pnotify-closer, .ui-pnotify-sticker, .ui-pnotify-closer *, .ui-pnotify-sticker *').is(e.target))
                return;
            alert('Hey! You clicked the desktop notification!');
        });
        return false;
    });
    $(".notify_dyn_notice").on("click", function () {
        dyn_notice();
        return false;
    });
    $(".notify_regerror").on("click", function () {
        new PNotify({
            title: 'Oh No!',
            text: 'Something terrible happened.',
            type: 'error'
        });
        return false;
    });
    $(".notify_formnotice").on("click", function () {
        var notice = new PNotify({
            text: $('#form_notice').html(),
            icon: false,
            width: 'auto',
            hide: false,
            type: 'warning',
            buttons: {
                closer: false,
                sticker: false
            },
            insert_brs: false
        });
        notice.get().find('form.pf-form').on('click', '[name=cancel]', function () {
            notice.remove();
        }).on("submit",function () {
            var username = $(this).find('input[name=username]').val();
            if (!username) {
                alert('Please provide a username.');
                return false;
            }
            notice.update({
                title: 'Welcome',
                text: 'Successfully logged in as ' + username,
                icon: true,
                width: PNotify.prototype.options.width,
                hide: true,
                buttons: {
                    closer: true,
                    sticker: true
                },
                type: 'success'
            });
            return false;
        });
        return false;
    });
    $(".notify_regularinfo").on("click", function () {
        new PNotify({
            title: 'New Thing',
            text: 'Just to let you know, something happened.',
            type: 'info'
        });
        return false;
    });

    // End of basic notifications

    // Animated notifications
    $(".notify_fromtop").on("click", function () {
        new PNotify({
            title: 'From the top! Effect',
            text: 'I use effects from Animate.css. Such smooth CSS3 transitions make me feel like better.',
            type: 'warning',
            animate: {
                animate: true,
                in_class: 'slideInDown',
                out_class: 'slideOutUp'
            }
        });
        return false;
    });
    $(".notify_zoom").on("click", function () {
        new PNotify({
            title: 'Zoom Effect',
            text: 'I use effects from Animate.css. Such smooth CSS3 transitions make me feel like better.',
            type: 'info',
            animate: {
                animate: true,
                in_class: 'zoomInLeft',
                out_class: 'zoomOutRight'
            }
        });
        return false;
    });
    $(".notify_zippy").on("click", function () {
        new PNotify({
            title: 'Zippy Effect',
            text: 'I use effects from Animate.css. Such smooth CSS3 transitions make me feel like better.',
            type: 'error',
            animate: {
                animate: true,
                in_class: 'bounceInLeft',
                out_class: 'bounceOutRight'
            }
        });
        return false;
    });
    $(".notify_off_handle").on("click", function () {
        new PNotify({
            title: 'Off the handle Effect',
            text: 'I use effects from Animate.css. Such smooth CSS3 transitions make me feel like better.',
            type: 'success',
            animate: {
                animate: true,
                in_class: 'bounceInDown',
                out_class: 'hinge'
            }
        });
        return false;
    });
    $(".notify_cards").on("click", function () {
        new PNotify({
            title: 'Shuffling cards Effect',
            text: 'I use effects from Animate.css. Such smooth CSS3 transitions make me feel like better.',
            type: 'info',
            animate: {
                animate: true,
                in_class: 'rotateInDownLeft',
                out_class: 'rotateOutUpRight'
            }
        });
        return false;
    });
    // End of animated notifications

    $(".notify_bignotice").on("click", function () {
        new PNotify({
            title: 'Big Notice',
            text: 'Check me out! I\'m tall and wide, even though my text isn\'t.',
            width: '500px',
            min_height: '400px',
            type: 'error'
        });
        return false;
    });

    // Own animation style
    $(".notify_btn").on("click", function () {
        var animate_in = $('#animate_in').val(),
            animate_out = $('#animate_out').val();
        new PNotify({
            title: 'Animate.css Effect',
            text: 'I use effects from Animate.css. Such smooth CSS3 transitions make me feel like better.',
            animate: {
                animate: true,
                in_class: animate_in,
                out_class: animate_out
            }
        });
        return false;
    });
    // End of Own animation style

    // Attension seekers
    $(".notify_bounce").on("click", function () {
        new PNotify({
            title: 'Attention Seeker',
            text: 'Click the button to see how you can highlight the notice with the Animate module:&lt;br&gt;',
            type: 'success',
            after_init: function (notice) {
                notice.attention('bounce');
            }
        });
        return false;
    });
    $(".notify_flash").on("click", function () {
        new PNotify({
            title: 'Attention Seeker',
            text: 'Click the button to see how you can highlight the notice with the Animate module:&lt;br&gt;',
            type: 'warning',
            after_init: function (notice) {
                notice.attention('flash');
            }
        });
        return false;
    });
    $(".notify_pulse").on("click", function () {
        new PNotify({
            title: 'Attention Seeker',
            text: 'Click the button to see how you can highlight the notice with the Animate module:&lt;br&gt;',
            type: 'info',
            after_init: function (notice) {
                notice.attention('pulse');
            }
        });
        return false;
    });
    $(".notify_rubberband").on("click", function () {
        new PNotify({
            title: 'Attention Seeker',
            text: 'Click the button to see how you can highlight the notice with the Animate module:&lt;br&gt;',
            type: 'error',
            after_init: function (notice) {
                notice.attention('rubberBand');
            }
        });
        return false;
    });
    $(".notify_shake").on("click", function () {
        new PNotify({
            title: 'Attention Seeker',
            text: 'Click the button to see how you can highlight the notice with the Animate module:&lt;br&gt;',
            type: 'success',
            after_init: function (notice) {
                notice.attention('rubberBand');
            }
        });
        return false;
    });
    $(".notify_swing").on("click", function () {
        new PNotify({
            title: 'Attention Seeker',
            text: 'Click the button to see how you can highlight the notice with the Animate module:&lt;br&gt;',
            type: 'warning',
            after_init: function (notice) {
                notice.attention('swing');
            }
        });
        return false;
    });
    $(".notify_tada").on("click", function () {
        new PNotify({
            title: 'Attention Seeker',
            text: 'Click the button to see how you can highlight the notice with the Animate module:&lt;br&gt;',
            type: 'info',
            after_init: function (notice) {
                notice.attention('tada');
            }
        });
        return false;
    });
    $(".notify_wobble").on("click", function () {
        new PNotify({
            title: 'Attention Seeker',
            text: 'Click the button to see how you can highlight the notice with the Animate module:&lt;br&gt;',
            type: 'error',
            after_init: function (notice) {
                notice.attention('wobble');
            }
        });
        return false;
    });
    $(".notify_jello").on("click", function () {
        new PNotify({
            title: 'Attention Seeker',
            text: 'Click the button to see how you can highlight the notice with the Animate module:&lt;br&gt;',
            type: 'success',
            after_init: function (notice) {
                notice.attention('jello');
            }
        });
        return false;
    });
    //End of  Attension seekers

    // Confirm Module Confirmation dialogs and prompts
    $(".notify_confirm_dialog").on("click", function () {
        new PNotify({
            title: 'Confirmation Needed',
            text: 'Are you sure?',
            icon: 'fa fa-question-circle',
            hide: false,
            type: 'success',
            confirm: {
                confirm: true
            },
            buttons: {
                closer: false,
                sticker: false
            },
            history: {
                history: false
            }
        }).get().on('pnotify.confirm', function () {
            swal('Ok cool').done();
        }).on('pnotify.cancel', function () {
            swal('Oh ok. Chicken, I see.').done();

        });
        return false;
    });
    $(".notify_modal_dialog").on("click", function () {
        new PNotify({
            title: 'Confirmation Needed',
            text: 'Are you sure?',
            icon: 'fa fa-question-circle',
            hide: false,
            type: 'info',
            confirm: {
                confirm: true
            },
            buttons: {
                closer: false,
                sticker: false
            },
            history: {
                history: false
            },
            addclass: 'stack-modal',
            stack: {'dir1': 'down', 'dir2': 'right', 'modal': true}
        }).get().on('pnotify.confirm', function () {
            swal('Ok cool').done();
        }).on('pnotify.cancel', function () {
            swal('Oh ok. Chicken, I see.').done();
        });
        return false;
    });
    $(".notify_custom_buttons").on("click", function () {
        new PNotify({
            title: 'Choose a Side',
            text: 'You have three options to choose from.',
            icon: 'fa fa-question-circle',
            hide: false,
            type: 'error',
            confirm: {
                confirm: true,
                buttons: [
                    {
                        text: 'Fries',
                        addClass: 'btn-primary',
                        click: function (notice) {
                            notice.update({
                                title: 'You\'ve Chosen a Side',
                                text: 'You want fries.',
                                icon: true,
                                type: 'info',
                                hide: true,
                                confirm: {
                                    confirm: false
                                },
                                buttons: {
                                    closer: true,
                                    sticker: true
                                }
                            });
                        }
                    },
                    {
                        text: 'Mash',
                        click: function (notice) {
                            notice.update({
                                title: 'You\'ve Chosen a Side',
                                text: 'You want mashed potatoes.',
                                icon: true,
                                type: 'info',
                                hide: true,
                                confirm: {
                                    confirm: false
                                },
                                buttons: {
                                    closer: true,
                                    sticker: true
                                }
                            });
                        }
                    },
                    {
                        text: 'Fruit',
                        click: function (notice) {
                            notice.update({
                                title: 'You\'ve Chosen a Side',
                                text: 'You want fruit.',
                                icon: true,
                                type: 'info',
                                hide: true,
                                confirm: {
                                    confirm: false
                                },
                                buttons: {
                                    closer: true,
                                    sticker: true
                                }
                            });
                        }
                    }
                ]
            },
            buttons: {
                closer: false,
                sticker: false
            },
            history: {
                history: false
            }
        });
        return false;
    });
    $(".notify_alert_button").on("click", function () {
        new PNotify({
            title: 'You Will Receive a Side',
            text: 'You have no choice.',
            icon: 'fa fa-info-circle',
            hide: false,
            type: 'warning',
            confirm: {
                confirm: true,
                buttons: [
                    {
                        text: 'Ok',
                        addClass: 'btn-primary',
                        click: function (notice) {
                            notice.remove();
                        }
                    },
                    null
                ]
            },
            buttons: {
                closer: false,
                sticker: false
            },
            history: {
                history: false
            }
        });
        return false;
    });
    $(".notify_prompt_dialog").on("click", function () {
        new PNotify({
            title: 'Input Needed',
            text: 'What side would you like?',
            icon: 'fa fa-question-circle',
            hide: false,
            type: 'success',
            confirm: {
                prompt: true
            },
            buttons: {
                closer: false,
                sticker: false
            },
            history: {
                history: false
            }
        }).get().on('pnotify.confirm', function(e, notice, val){
            notice.cancelRemove().update({
                title: 'You\'ve Chosen a Side', text: 'You want '+$('<div/>').text(val).html()+'.', icon: true, type: 'info', hide: true,
                confirm: {
                    prompt: false
                },
                buttons: {
                    closer: true,
                    sticker: true
                }
            });
        }).on('pnotify.cancel', function(e, notice){
            notice.cancelRemove().update({
                title: 'You Don\'t Want a Side', text: 'No soup for you!', icon: true, type: 'info', hide: true,
                confirm: {
                    prompt: false
                },
                buttons: {
                    closer: true,
                    sticker: true
                }
            });
        });
        return false;
    });
    $(".notify_multiprompt_dialog").on("click", function () {
        new PNotify({
            title: 'Input Needed',
            text: 'Write me a poem, please.',
            icon: 'fa fa-question-circle',
            hide: false,
            type: 'error',
            confirm: {
                prompt: true,
                prompt_multi_line: true,
                prompt_default: 'Roses are red,\nViolets are blue,\n'
            },
            buttons: {
                closer: false,
                sticker: false
            },
            history: {
                history: false
            }
        }).get().on('pnotify.confirm', function(e, notice, val){
            notice.cancelRemove().update({
                title: 'Your Poem', text: $('<div/>').text(val).html(), icon: true, type: 'info', hide: true,
                confirm: {
                    prompt: false
                },
                buttons: {
                    closer: true,
                    sticker: true
                }
            });
        }).on('pnotify.cancel', function(e, notice){
            notice.cancelRemove().update({
                title: 'You Don\'t Like Poetry', text: 'Roses are dead,\nViolets are dead,\nI suck at gardening.', icon: true, type: 'info', hide: true,
                confirm: {
                    prompt: false
                },
                buttons: {
                    closer: true,
                    sticker: true
                }
            });
        });
        return false;
    });
    // End of Confirm Module Confirmation dialogs and prompts

    // Callbacks Module Manipulate the notice during its lifecycle
    $(".notify_callback").on("click", function () {
        var dont_alert = function(){};
        new PNotify({
            title: 'I\'m Here',
            text: 'I have a callback for each of my events. I\'ll call all my callbacks while I change states.',
            before_init: function(opts){
                alert('I\'m called before the notice initializes. I\'m passed the options used to make the notice. I can modify them. Watch me replace the word callback with tire iron!');
                opts.text = opts.text.replace(/callback/g, 'tire iron');
            },
            after_init: function(notice){
                alert('I\'m called after the notice initializes. I\'m passed the PNotify object for the current notice: '+notice+'\n\nThere are more callbacks you can assign, but this is the last notice you\'ll see. Check the code to see them all.');
            },
            before_open: function(notice){
                var source_note = 'Return false to cancel opening.';
                dont_alert('I\'m called before the notice opens. I\'m passed the PNotify object for the current notice: '+notice);
            },
            after_open: function(notice){
                dont_alert('I\'m called after the notice opens. I\'m passed the PNotify object for the current notice: '+notice);
            },
            before_close: function(notice, timer_hide){
                var source_note = 'Return false to cancel close. Use PNotify.queueRemove() to set the removal timer again.';
                dont_alert('I\'m called before the notice closes. I\'m passed the PNotify object for the current notice: '+notice);
                dont_alert('I also have an argument called timer_hide, which is true if the notice was closed because the timer ran down. Value: '+timer_hide);
            },
            after_close: function(notice, timer_hide){
                dont_alert('I\'m called after the notice closes. I\'m passed the PNotify object for the current notice: '+notice);
                dont_alert('I also have an argument called timer_hide, which is true if the notice was closed because the timer ran down. Value: '+timer_hide);
            }
        });
        return false;
    });
    $(".notify_callback1").on("click", function () {
        new PNotify({
            title: 'Notice',
            text: 'Right now I\'m a notice.',
            before_close: function (notice) {
                notice.update({
                    title: 'Error',
                    text: 'Uh oh. Now I\'ve become an error.',
                    type: 'error',


                    before_close: function (notice) {
                        notice.update({
                            title: 'Success',
                            text: 'I fixed the error!',
                            type: 'success',
                            before_close: function (notice) {
                                notice.update({
                                    title: 'Info',
                                    text: 'Everything\'s cool now.',
                                    type: 'info',
                                    before_close: null

                                });
                                notice.attention('swing');
                                notice.queueRemove();
                                return false;
                            }
                        });
                        notice.attention('swing');
                        notice.queueRemove();
                        return false;
                    }
                });
                notice.attention('swing');
                notice.queueRemove();

                return false;
            }
        });
        return false;
    });
    // End of Callbacks Module Manipulate the notice during its lifecycle

    PNotify.prototype.options.styling = "fontawesome";
});
'use strict';
$(document).ready(function(){
    // Bootstrap switch
    $.each($('.make-switch-radio'), function () {
        $(this).bootstrapSwitch({
            onText: $(this).data('onText'),
            offText: $(this).data('offText'),
            onColor: $(this).data('onColor'),
            offColor: $(this).data('offColor'),
            size: $(this).data('size'),
            labelText: $(this).data('labelText')
        });
    });

    // Switchery
    new Switchery(document.querySelector('.sm_toggle'), { size: 'small', color: '#4fb7fe', jackColor: '#fff' });
    new Switchery(document.querySelector('.sm_toggle_checked'), { size: 'small', color: '#EF6F6C', jackColor: '#fff' });
    new Switchery(document.querySelector('.sm_disable'), { size: 'small', disabled: true });

    new Switchery(document.querySelector('.sm_disable_checked'), { size: 'small', disabled: true, color:'#00cc99',  jackColor: '#fff' });

    new Switchery(document.querySelector('.md_toggle'), { color: '#00cc99', secondaryColor: '#ff9933',jackColor: '#fff' });
    new Switchery(document.querySelector('.md_toggle_checked'), { color: '#4fb7fe', jackColor: '#fff' });
    new Switchery(document.querySelector('.md_disable'), { disabled: true });
    new Switchery(document.querySelector('.md_disable_checked'), { color: '#347dff', jackColor: '#fff', disabled: true });

    new Switchery(document.querySelector('.md_colored'),{ color: '#0fb0c0', secondaryColor: '#ff9933', jackColor: '#fff', jackSecondaryColor: '#00cc99' });

});
'use strict';
$(document).ready(function(){
    // Ratings
    $('.rating').rating({
        size:'sm'
    });
    $('#input-3').rating({
        step: 1,
        size: 'sm',
        starCaptions: { 1: 'Poor', 2: 'Average', 3: 'Good', 4: 'Very Good', 5: 'Excellent' },
        starCaptionClasses: { 1: 'text-danger', 2: 'text-warning', 3: 'text-info', 4: 'text-primary', 5: 'text-success' }
    });
    // End of rating

    // Starrability
    var updateCounter = function (rating) {
        $(this).next(".counter").text(rating);
    };
    $("#rateYo").rateYo({
        rating: 3.6
    });
    $("#rateYo_width").rateYo({
        starWidth: "40px",
        rating:2
    });
    $("#rateYo_normalfill").rateYo({
        normalFill: "#A0A0A0"
    });
    $("#rateYo_ratedfill").rateYo({
        ratedFill: "#EF6F6C",
        rating: 2.7
    });
    $("#rateYo_multicolor").rateYo({
        rating    : 1.6,
        spacing   : "5px",
        multiColor: {

            "startColor": "#00cc99",
            "endColor"  : "#EF6F6C"
        }
    });
    $("#rateYo_numstars").rateYo({
        rating:2.6,
        numStars: 7
    });
    $("#rateYo_maxval").rateYo({
        maxValue: 1,
        numStars: 1,
        rating: getRandomRating(0, 1),
        onSet: updateCounter,
        onChange: updateCounter,
        starWidth: "32px"
    });
    $("#rateYo_precission").rateYo({
        precision: 2,
        rating: getRandomRating(),
        onSet: updateCounter,
        onChange: updateCounter
    });
    $("#rateYo_rating").rateYo({
        rating: "50%",
        precision: 0,
        onSet: updateCounter,
        onChange: updateCounter
    });
    $("#rateYo_halfstar").rateYo({
        rating: 1.5,
        halfStar: true
    });
    // End of starrability

    // Advanced starrability
    $("#rateYo_fullstar").rateYo({
        rating: 2,
        fullStar: true
    });
    $("#rateYo_readonly").rateYo({
        rating: 3.2,
        readOnly: true
    });
    $("#rateYo_spacing").rateYo({
        rating: 3.2,
        spacing: "10px",
        onSet: updateCounter,
        onChange: updateCounter
    });

    $("#rateYo_rtl").rateYo({
        rating: 3.2,
        rtl: true,
        onSet: updateCounter,
        onChange: updateCounter
    });
    $("#rateYo_onset").rateYo({
        onSet: function (rating, rateYoInstance) {
            swal({
                title: "Rating is set to: " + rating,
                confirmButtonColor: '#4fb7fe'
            }).done();
        }
    });
    $("#rateYo_onchange").rateYo({
        rating:3.2,
        onSet: updateCounter,
        onChange: function (rating, rateYoInstance) {
            $(this).next().text(rating);
        }
    });
    var $rateYo = $("#rateYo_rate").rateYo({
        rating:2.2
    });

    $("#get_rating").on("click",function () {

        /* get rating */
        var rating = $rateYo.rateYo("rating");
        swal({
            title: "Its " + rating + " Yo!",
            confirmButtonColor: '#4fb7fe'
        }).done();
    });

    $("#set_rating").on("click",function () {
        /* set rating */
        var rating = getRandomRating();
        $rateYo.rateYo("rating", rating);
        return false;
    });
    var $rateYo1 = $("#rateYo_destroy").rateYo({
        rating:3.2
    });
    $("#destroy").on("click",function () {
        $rateYo1.rateYo("destroy");
        return false;
    });
    $("#initialize").on("click",function () {
        $rateYo1.rateYo();
        return false;
    });
    function getRandomRating (min, max) {

        min = min || 0;
        max = max || 5;

        var randomRating = parseFloat(((Math.random())*max).toFixed(2));

        randomRating = randomRating < min? min : randomRating;

        return randomRating;
    }
    // Advanced starrability
});

'use strict';
$(document).ready(function() {
    new WOW().init();
    $(window).on("load",function() {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut(1000);
    });
    $('#register_valid').bootstrapValidator({
        fields: {
            UserName: {
                validators: {
                    notEmpty: {
                        message: 'The user name is required and cannot be empty'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Please provide a password'
                    }
                }
            },
            confirmpassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'Please enter the same password as above'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please enter valid phone number'
                    },
                    regexp: {
                        regexp: /^[0-9]{10}$/,
                        message: 'The phone number can only consist of numbers with 10 digits'
                    }
                }
            },
            check: {
                validators: {
                    notEmpty: {
                        message: 'Check on the field'
                    }
                }
            }
        }
    });
});
//-------------------Line and Toggling chart----------------
'use strict';
$(document).ready(function() {
    //---- Line chart---------------

    var seriesData3 = [
        [],
        [],
        []
    ];
    var random3 = new Rickshaw.Fixtures.RandomData(150);

    for (var i = 0; i < 150; i++) {
        random3.addData(seriesData3);
    }
    var graph3 = new Rickshaw.Graph({
        element: document.querySelector("#chart3"),
        renderer: 'line',
        series: [{
            color: "#4fb7fe",
            data: seriesData3[0],
            name: 'New York'
        }, {
            color: "#ff9933",
            data: seriesData3[1],
            name: 'London'
        }, {
            color: "#ed7669",
            data: seriesData3[2],
            name: 'Tokyo'
        }]
    });
    // End of line chart

    var seriesData1 = [
        [],
        [],
        []
    ];
    var random1 = new Rickshaw.Fixtures.RandomData(150);

    for (var i = 0; i < 150; i++) {
        random1.addData(seriesData1);
    }
    var graph1 = new Rickshaw.Graph({
        element: document.getElementById("chart_1"),

        renderer: 'line',
        series: [{
            color: "#4fb7fe",
            data: seriesData1[0],
            name: 'New York'
        }, {
            color: "#ed7669",
            data: seriesData1[1],
            name: 'London'
        }, {
            color: "#00cc99",
            data: seriesData1[2],
            name: 'Tokyo'
        }]
    });

    graph1.render();

    var legend_1 = document.querySelector('#legend_1');

    var Hover = Rickshaw.Class.create(Rickshaw.Graph.HoverDetail, {

        render: function(args) {

            legend_1.innerHTML = args.formattedXValue;

            args.detail.sort(function(a, b) {
                return a.order - b.order }).forEach(function(d) {

                var line = document.createElement('div');
                line.className = 'line';

                var swatch = document.createElement('div');
                swatch.className = 'swatch';
                swatch.style.backgroundColor = d.series.color;

                var label = document.createElement('div');
                label.className = 'label';
                label.innerHTML = d.name + ": " + d.formattedYValue;

                line.appendChild(swatch);
                line.appendChild(label);

                legend_1.appendChild(line);

                var dot = document.createElement('div');
                dot.className = 'dot';
                dot.style.top = graph1.y(d.value.y0 + d.value.y) + 'px';
                dot.style.borderColor = d.series.color;

                this.element.appendChild(dot);

                dot.className = 'dot active';

                this.show();

            }, this);
        }
    });

    var hover = new Hover({ graph: graph1 });


    //------------------Multiple Renderers Chart---------

    var seriesData2 = [
        [],
        [],
        [],
        [],
        []
    ];
    var random2 = new Rickshaw.Fixtures.RandomData(50);

    for (var i = 0; i < 75; i++) {
        random2.addData(seriesData2);
    }

    var graph2 = new Rickshaw.Graph({
        element: document.getElementById("chart2"),
        renderer: 'multi',

        dotSize: 5,
        series: [{
            name: 'temperature',
            data: seriesData2.shift(),
            color: '#8acbe8',
            renderer: 'stack'
        }, {
            name: 'heat index',
            data: seriesData2.shift(),
            color: '#e6f1d0',
            renderer: 'stack'
        }, {
            name: 'dewpoint',
            data: seriesData2.shift(),
            color: '#0fb0c0',
            renderer: 'scatterplot'
        }, {
            name: 'pop',
            data: seriesData2.shift().map(function(d) {
                return { x: d.x, y: d.y / 4 } }),
            color: '#ff9933',
            renderer: 'bar'
        }, {
            name: 'humidity',
            data: seriesData2.shift().map(function(d) {
                return { x: d.x, y: d.y * 1.5 } }),
            renderer: 'line',
            color: '#347dff'
        }]
    });

    var slider2 = new Rickshaw.Graph.RangeSlider.Preview({
        graph: graph2,
        element: document.querySelector('#slider2')
    });

    var axes = new Rickshaw.Graph.Axis.Time({ graph: graph2 });

    graph2.render();

    var detail = new Rickshaw.Graph.HoverDetail({
        graph: graph2
    });

    var legend_chart2 = new Rickshaw.Graph.Legend({
        graph: graph2,
        element: document.querySelector('#legend_chart2')
    });

    var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight({
        graph: graph2,
        legend: legend_chart2,
        disabledColor: function() {
            return 'rgba(0, 0, 0, 0.2)' }
    });

    var highlighter = new Rickshaw.Graph.Behavior.Series.Toggle({
        graph: graph2,
        legend: legend_chart2
    });


    //---------------Log and Absolute Scale Chart---------------


    var random = new Rickshaw.Fixtures.RandomData(12 * 60 * 60);

    var series = [
        []
    ];

    for (var i = 0; i < 300; i++) {
        random.addData(series);
    }
    var data = series[0]

    var min = Number.MAX_VALUE;
    var max = Number.MIN_VALUE;
    for (i = 0; i < series[0].length; i++) {
        min = Math.min(min, series[0][i].y);
        max = Math.max(max, series[0][i].y);
    }

    var logScale = d3.scale.log().domain([min / 4, max]);
    var linearScale = d3.scale.linear().domain([min, max]).range(logScale.range());
    var graph = new Rickshaw.Graph({
        element: document.getElementById("chart"),
        renderer: 'line',
        series: [{
            color: '#0fb0c0',
            data: JSON.parse(JSON.stringify(data)),
            name: 'Log View',
            scale: logScale
        }, {
            color: '#ed7669',
            data: JSON.parse(JSON.stringify(data)),
            name: 'Linear View',
            scale: linearScale
        }]
    });
    new Rickshaw.Graph.HoverDetail({
        graph: graph
    });

    graph.render();
    //.......................Scaled Series Chart-------------

    var data, graph, i, max, min, point, random, scales, series, _i, _j, _k, _l, _len, _len1, _len2, _ref;

    data = [
        [],
        []
    ];

    random = new Rickshaw.Fixtures.RandomData(12 * 60 * 60);

    for (i = _i = 0; _i < 100; i = ++_i) {
        random.addData(data);
    }

    scales = [];

    _ref = data[1];
    for (_j = 0, _len = _ref.length; _j < _len; _j++) {
        point = _ref[_j];
        point.y *= point.y;
    }

    for (_k = 0, _len1 = data.length; _k < _len1; _k++) {
        series = data[_k];
        min = Number.MAX_VALUE;
        max = Number.MIN_VALUE;
        for (_l = 0, _len2 = series.length; _l < _len2; _l++) {
            point = series[_l];
            min = Math.min(min, point.y);
            max = Math.max(max, point.y);
        }
        if (_k === 0) {
            scales.push(d3.scale.linear().domain([min, max]).nice());
        } else {
            scales.push(d3.scale.pow().domain([min, max]).nice());
        }
    }

    var graph5 = new Rickshaw.Graph({
        element: document.getElementById("chart_5"),
        renderer: 'line',
        series: [{
            color: '#4fb7fe',
            data: data[0],
            name: 'Series A',
            scale: scales[0]
        }, {
            color: '#ff9933',
            data: data[1],
            name: 'Series B',
            scale: scales[1]
        }]
    });
    new Rickshaw.Graph.Axis.Time({
        graph: graph5
    });

    new Rickshaw.Graph.HoverDetail({
        graph: graph5
    });

    graph5.render();

    //-------------Simple Animation chart------------------

    var tv = 250;
    var graph6 = new Rickshaw.Graph({
        element: document.getElementById("chart_6"),

        renderer: 'line',
        series: new Rickshaw.Series.FixedDuration([{ name: 'one' }], undefined, {
            timeInterval: tv,
            maxDataPoints: 100,
            timeBase: new Date().getTime() / 1000
        })
    });

    graph6.render();

    var i = 0;
    var iv = setInterval(function() {

        var data = { one: Math.floor(Math.random() * 40) + 120 };

        var randInt = Math.floor(Math.random() * 100);
        data.two = (Math.sin(i++/ 40) + 4) * (randInt + 400);
        data.three = randInt + 300;

        graph6.series.addData(data); graph6.render();

    }, tv);


    function resize() {
        graph3.configure({ width: $("#chart3").width() });
        graph3.render();
        graph6.configure({ width: $("#chart_6").width() });
        graph6.render();
        graph2.configure({ width: $("#chart2").width() });
        graph2.render();
        graph.configure({ width: $("#chart").width() });
        graph.render();
        graph5.configure({ width: $("#chart_5").width() });
        graph5.render();
        graph1.configure({ width: $("#chart_1").width() });
        graph1.render();
    }
    $("#menu-toggle, .toggle-right").on("click", function() {
        setTimeout(function() {
            resize();
        }, 400);
    });
    $(window).on("resize", function() {
        resize();
    });
    graph3.render();
    var hoverDetail = new Rickshaw.Graph.HoverDetail({
        graph: graph3
    });
    var legend_chart3 = new Rickshaw.Graph.Legend({
        graph: graph3,
        element: document.getElementById('legend_chart3')
    });
    var shelving = new Rickshaw.Graph.Behavior.Series.Toggle({
        graph: graph3,
        legend: legend_chart3
    });
    var axes3 = new Rickshaw.Graph.Axis.Time();
    axes3.render();
});

'use strict';
$(document).ready(function() {
    $('#example1').DataTable( {

        "dom": "<'row'<'col-md-6 col-xs-12'l><'col-md-6 col-xs-12'f>r><'table-responsive't><'row'<'col-md-5 col-xs-12'i><'col-md-7 col-xs-12'p>>",
        "order": [[ 3, "desc" ]]
    } );
    $('#example2').DataTable( {
        "dom": "<'row'<'col-md-6 col-xs-12'l><'col-md-6 col-xs-12'f>r><'table-responsive't><'row'<'col-md-5 col-xs-12'i><'col-md-7 col-xs-12'p>>",
        "pagingType": "full_numbers"
    } );
    $('#example3').DataTable( {
        "dom": "<'row'<'col-md-6 col-xs-12'l><'col-md-6 col-xs-12'f>r><'table-responsive't><'row'<'col-md-5 col-xs-12'i><'col-md-7 col-xs-12'p>>",
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );

                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
'use strict';
$(document).ready(function () {
    $("#example_1").ionRangeSlider({
        min: 0,
        max: 5000,
        type: 'double',
        prefix: "$",
        maxPostfix: "+",
        prettify: false,
        hasGrid: true
    });
    $("#example_2").ionRangeSlider({
        min: 1000,
        max: 100000,
        from: 30000,
        to: 90000,
        type: 'double',
        step: 500,
        postfix: " &euro;",
        hasGrid: true
    });
    $("#example_3").ionRangeSlider({
        min: 0,
        max: 10,
        type: 'single',
        step: 0.1,
        postfix: " carats",
        prettify: false,
        hasGrid: true
    });
    $("#example_4").ionRangeSlider({
        min: -50,
        max: 50,
        from: 0,
        type: 'single',
        step: 1,
        postfix: "°",
        prettify: false,
        hasGrid: true
    });
    $("#example_5").ionRangeSlider({
        values: [
            "January", "February", "March",
            "April", "May", "June",
            "July", "August", "September",
            "October", "November", "December"
        ],
        type: 'single',
        hasGrid: true
    });
    $("#example_6").ionRangeSlider({
        min: 10000,
        max: 100000,
        step: 100,
        postfix: " light years",
        type:'double',
        from: 55000,
        to:65000,
        hideMinMax: false,
        hideFromTo: true
    });
    $("#example_7").ionRangeSlider({
        min: 10000,
        max: 100000,
        step: 100,
        postfix: " light years",
        from: 55000,
        hideMinMax: true,
        hideFromTo: false
    });

    // Bootstrap slider
    $('#ex1Slider').slider({
        formater: function(value) {
            return 'Current value: ' + value;
        }
    });

    /* Example 2 */
    $("#bootstrap_slider2").slider({});

    /* Example 3 */
    var RGBChange = function() {
        $('#RGB_color').css('background', 'rgb(' + r.getValue() + ',' + g.getValue() + ',' + b.getValue() + ')')
    };

    var r = $('#red').slider()
        .on('slide', RGBChange)
        .data('slider');
    var g = $('#green').slider()
        .on('slide', RGBChange)
        .data('slider');
    var b = $('#blue').slider()
        .on('slide', RGBChange)
        .data('slider');
    /* Example 5 */
    $("#bootstrap_slider5").slider();
    $("#destroyEx5Slider").on("click",function() {
        $("#bootstrap_slider5").slider('destroy');
    });

    /* Example 6 */
    $("#bootstrap_slider6").slider();
    $("#bootstrap_slider6").on('slide', function(slideEvt) {
        $("#ex6SliderVal").text(slideEvt.value);
    });

    /* Example 7 */
    $("#bootstrap_slider7").slider();
    $("#ex7-enabled").on("click",function() {
        if (this.checked) {
            $("#bootstrap_slider7").slider("enable");
            $("#enable_text").text('Disable');
            $("#slider_enabled").text('Enabled Slider');
        } else {
            $("#bootstrap_slider7").slider("disable");
            $("#enable_text").text('Enable');
            $("#slider_enabled").text('Disabled Slider');
        }
    });

    /* Example 8 */
    $("#bootstrap_slider8").slider({
        tooltip: 'always'
    });

    /* Example 9 */
    $("#bootstrap_slider9").slider({
        step: 0.01,
        value: 8.115
    });
    $("#bootstrap_slider10").slider({});
})
'use strict';
$(document).ready(function() {
    $('.editable_section').slimScroll({
        height: '134px'
    });
    var byId = function(id) {
            return document.getElementById(id);
        },

        loadScripts = function(desc, callback) {
            var deps = [],
                key, idx = 0;

            for (key in desc) {
                deps.push(key);
            }

            (function _next() {
                var pid,
                    name = deps[idx],
                    script = document.createElement('script');

                script.type = 'text/javascript';
                script.src = desc[deps[idx]];

                pid = setInterval(function() {
                    if (window[name]) {
                        clearTimeout(pid);

                        deps[idx++] = window[name];

                        if (deps[idx]) {
                            _next();
                        } else {
                            callback.apply(null, deps);
                        }
                    }
                }, 30);

                document.getElementsByTagName('head')[0].appendChild(script);
            })()
        },

        console = window.console;


    if (!console.log) {
        console.log = function() {
            alert([].join.apply(arguments, ' '));
        };
    }


    Sortable.create(byId('foo'), {
        group: "words",
        animation: 150,
        store: {
            get: function(sortable) {
                var order = localStorage.getItem(sortable.options.group);
                return order ? order.split('|') : [];
            },
            set: function(sortable) {
                var order = sortable.toArray();
                localStorage.setItem(sortable.options.group, order.join('|'));
            }
        },
        onAdd: function(evt) {
            console.log('onAdd.foo:', [evt.item, evt.from]);
        },
        onUpdate: function(evt) {
            console.log('onUpdate.foo:', [evt.item, evt.from]);
        },
        onRemove: function(evt) {
            console.log('onRemove.foo:', [evt.item, evt.from]);
        },
        onStart: function(evt) {
            console.log('onStart.foo:', [evt.item, evt.from]);
        },
        onSort: function(evt) {
            console.log('onStart.foo:', [evt.item, evt.from]);
        },
        onEnd: function(evt) {
            console.log('onEnd.foo:', [evt.item, evt.from]);
        }
    });


    Sortable.create(byId('bar'), {
        group: "words",
        animation: 150,
        onAdd: function(evt) {
            console.log('onAdd.bar:', evt.item);
        },
        onUpdate: function(evt) {
            console.log('onUpdate.bar:', evt.item);
        },
        onRemove: function(evt) {
            console.log('onRemove.bar:', evt.item);
        },
        onStart: function(evt) {
            console.log('onStart.foo:', evt.item);
        },
        onEnd: function(evt) {
            console.log('onEnd.foo:', evt.item);
        }
    });


// Multi groups
    Sortable.create(byId('multi'), {
        animation: 150,
        draggable: '.tile',
        handle: '.tile__name'
    });

    [].forEach.call(byId('multi').getElementsByClassName('tile__list'), function(el) {
        Sortable.create(el, {
            group: 'photo',
            animation: 150
        });
    });


// Editable list
    var editableList = Sortable.create(byId('editable'), {
        animation: 150,
        filter: '.fa-close',
        onFilter: function(evt) {
            evt.item.parentNode.removeChild(evt.item);
        }
    });
    byId('save').onclick = function() {
        var name = $("#list-name").val();
        if($("#list-name").val() == "" )
        {
            alert("Please Enter some text")
        }
        else{
            $("#editable").prepend('<li class="row"><div class="col-xs-10">' + name + '</div><div class="col-xs-2 sortable_close"><i class="fa fa-close"></i></div></li>');
            $("#myModal").modal('hide');
        }
    };
    $('.editable_add').on('click', function() {
        var $form = $('#myform');
        $form[0].reset();
        $form.find('input, select, textarea').change();
    });

// Advanced groups
    [{
        name: 'advanced',
        pull: true,
        put: true
    }, {
        name: 'advanced',
        pull: 'clone',
        put: false
    }, {
        name: 'advanced',
        pull: false,
        put: true
    }].forEach(function(groupOpts, i) {
        Sortable.create(byId('advanced-' + (i + 1)), {
            sort: (i != 1),
            group: groupOpts,
            animation: 150
        });
    });


// 'handle' option
    Sortable.create(byId('handle-1'), {
        handle: '.drag-handle',
        animation: 150
    });
    $('#myModal').on('hidden.bs.modal', function() {
        $(this).find('form').trigger('reset');
    });

// Background
    document.addEventListener("DOMContentLoaded", function() {
        function setNoiseBackground(el, width, height, opacity) {
            var canvas = document.createElement("canvas");
            var context = canvas.getContext("2d");

            canvas.width = width;
            canvas.height = height;

            for (var i = 0; i < width; i++) {
                for (var j = 0; j < height; j++) {
                    var val = Math.floor(Math.random() * 255);
                    context.fillStyle = "rgba(" + val + "," + val + "," + val + "," + opacity + ")";
                    context.fillRect(i, j, 1, 1);
                }
            }

            el.style.background = "url(" + canvas.toDataURL("image/png") + ")";
        }

        setNoiseBackground(document.getElementsByTagName('body')[0], 50, 50, 0.02);
    }, false);

});



'use strict';
$(document).ready(function () {
    // Basic sweet alerts
    $('.examples .message').on('click', function () {
        swal({
            title: 'Heres your text message in the sweet alert!',
            confirmButtonColor: '#4fb7fe'
        }).done();
        return false;
    });
    $('.examples .primary_clr').on('click', function () {
        swal('Are you sure?', 'You will not be able to recover this imaginary file!').done();
        swal({
            title: 'Are you sure?',
            text: 'You will not be able to recover this imaginary file!',
            type: 'info',
            showCancelButton: true,
            confirmButtonColor: '#4fb7fe',
            confirmButtonText: 'Primary!',
            cancelButtonColor: '#EF6F6C'
        }).done();
        return false;
    });
    $('.examples .info_clr').on('click', function () {
        swal('Are you sure?', 'You will not be able to recover this imaginary file!').done();
        swal({
            title: 'Are you sure?',
            text: 'You will not be able to recover this imaginary file!',
            type: 'info',
            showCancelButton: true,
            confirmButtonColor: '#347dff',
            cancelButtonColor: '#EF6F6C',
            confirmButtonText: 'Info!'
        }).done();
        return false;
    });
    $('.examples .warning_clr').on('click', function () {
        swal('Are you sure?', 'You will not be able to recover this imaginary file!').done();
        swal({
            title: 'Are you sure?',
            text: 'You will not be able to recover this imaginary file!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#ff9933',
            cancelButtonColor: '#EF6F6C',
            confirmButtonText: 'Warning!'
        }).done();
        return false;
    });
    $('.examples .success_clr').on('click', function () {
        swal('Are you sure?', 'You will not be able to recover this imaginary file!').done();
        swal({
            title: 'Are you sure?',
            text: 'You will not be able to recover this imaginary file!',
            type: 'success',
            showCancelButton: true,
            confirmButtonColor: '#00cc99',
            cancelButtonColor: '#EF6F6C',
            confirmButtonText: 'Success!'
        }).done();
        return false;
    });
    $('.examples .danger_clr').on('click', function () {
        swal('Are you sure?', 'You will not be able to recover this imaginary file!').done();
        swal({
            title: 'Are you sure?',
            text: 'You will not be able to recover this imaginary file!',
            type: 'error',
            showCancelButton: true,
            confirmButtonColor: '#EF6F6C',
            cancelButtonColor: '#ff9933',
            confirmButtonText: 'Danger!'
        }).done();
        return false;
    });
    // End of basic sweet alerts

    // Advanced sweet alerts
    $('.examples .ajax-request').on('click', function () {
        swal({
            title: 'Submit email to run ajax request',
            input: 'email',
            showCancelButton: true,
            confirmButtonText: 'Submit',
            confirmButtonColor: '#4fb7fe',
            cancelButtonColor: '#EF6F6C',
            width: 600,
            showLoaderOnConfirm: true,
            preConfirm: function (email) {
                return new Promise(function (resolve, reject) {
                    setTimeout(function () {
                        if (email === 'taken@example.com') {
                            reject('This email is already taken.');
                        } else {
                            resolve();
                        }
                    }, 2000);
                });
            },
            allowOutsideClick: false
        }).then(function (email) {
            swal({
                type: 'success',
                title: 'Ajax request finished!',
                html: 'Submitted email: ' + '<strong>' + email + '</strong>'
            });
        }).done();
        return false;
    });
    $('.examples .chaining-modals').on('click', function () {
        swal.setDefaults({
            confirmButtonText: 'Next &rarr;',
            showCancelButton: true,
            animation: false,
            cancelButtonColor: '#EF6F6C',
            confirmButtonColor: '#4fb7fe',
            progressSteps: ['1', '2', '3']
        });

        var steps = [
            {title: 'Step 1', text: 'Chaining swal2 modals is easy'},
            'Step 2',
            'Step 3'
        ];

        swal.queue(steps).then(function () {
            swal.resetDefaults();
            swal({title: 'All done!', confirmButtonText: 'Lovely!', showCancelButton: false});
        }, function () {
            swal.resetDefaults();
        });
        return false;
    });
    $('.examples .dynamic-queue').on('click', function () {
        swal.queue([
            {
                title: 'Your public IP',
                confirmButtonText: 'Show my public IP',
                text: 'Your public IP will be received via AJAX request',
                currentProgressStep: 0,
                showLoaderOnConfirm: true,
                confirmButtonColor: '#ff9933',
                preConfirm: function () {
                    return new Promise(function (resolve) {
                        $.get('https://api.ipify.org?format=json')
                            .done(function (data) {
                                swal.insertQueueStep(data.ip);
                                resolve();

                            });
                    });
                }
            }
        ]).done();
        return false;
    });
    // End of advanced sweet alerts

    // Different sweet alerts
    $('.examples .title-text').on('click', function () {
        swal({
            title: 'The Internet?',
            text: 'That thing is still around?',
            type: 'question',
            confirmButtonColor: '#4fb7fe'
        }).done();
        return false;
    });
    $('.examples .success').on('click', function () {
        swal({
            title: 'Good job!',
            text: 'You clicked the button!',
            type: 'success',
            confirmButtonColor: '#4fb7fe'
        }).done();
        return false;
    });
    $('.examples .timer').on('click', function () {
        swal({
            title: 'Auto close alert!',
            text: 'I will close in 2 seconds.',
            timer: 2000,
            confirmButtonColor: '#4fb7fe',
            showConfirmButton: false
        }).done();
        return false;
    });
    $('.showcase.sweet').on('click', function () {
        swal({
            title: 'Oops...',
            text: 'Something went wrong!',
            type: 'error',
            confirmButtonColor: '#4fb7fe'
        }).done();
        return false;
    });
    $('.examples .html_ex').on('click', function () {
        swal({
            title: '<i>HTML</i> <u>example</u>',
            type: 'info',
            html: 'You can use <b>bold text</b>, ' +
            '<a href="#">links</a> ' +
            'and other HTML tags',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
            confirmButtonColor: '#4fb7fe',
            cancelButtonText: '<i class="fa fa-thumbs-down"></i>'
        }).done();
        return false;
    });
    // End of Different sweet alerts

    // Sweet alert with different images
    $('.examples .custom-image').on('click', function () {
        swal({
            title: 'Sweet!',
            text: 'Modal with a custom image.',
            imageUrl: 'img/authors/avatar1.jpg',
            confirmButtonColor: '#4fb7fe',
            animation: false
        }).done();
        return false;
    });
    $('.examples .custom-width-padding-background').on('click', function () {
        swal({
            title: 'Custom width, padding, background.',
            width: 600,
            padding: 100,
            confirmButtonColor: '#4fb7fe',
            background: '#fff url(img/authors/bg1.jpg)'
        }).done();
        return false;
    });
    $('.examples .warning.confirm').on('click', function () {
        swal({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#4fb7fe',
            cancelButtonColor: '#EF6F6C',
            confirmButtonText: 'Yes, delete it!'
        }).then(function () {
            swal({
                title: 'Deleted!',
                text: 'Your file has been deleted!',
                type: 'success',
                confirmButtonColor: '#ff9933'
            }).done();
        });
        return false;
    });
    $('.examples .warning.cancel').on('click', function () {
        swal({
            title: 'Are you sure?',
            text: 'Buttons below are styled with Bootstrap classes',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#4fb7fe',
            cancelButtonColor: '#EF6F6C',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger'
        }).then(function () {
            swal({
                title: 'Deleted!',
                text: 'Your file has been deleted!',
                type: 'success',
                confirmButtonColor: '#4fb7fe'
            }).done();
        }, function (dismiss) {
            if (dismiss === 'cancel') {
                swal({
                    title: 'Cancelled',
                    text: 'Your imaginary file is safe :)',
                    type: 'error',
                    confirmButtonColor: '#4fb7fe'
                }).done();
            }
        });
        return false;
    });
    $('.examples .jqueryhtml').on('click', function () {
        swal({
            title: 'jQuery HTML example',
            confirmButtonColor: '#4fb7fe',
            html: $('<div>')
                .addClass('some-class')
                .text('jQuery is everywhere.')
        });
        return false;
    });
});
'use strict';
$(document).ready(function() {
    var i = -1;
    var toastCount = 0;
    var $toastlast;

    var getMessage = function() {
        var msgs = ['My name is Inigo Montoya. You killed my father. Prepare to die!',
            '<div><input class="input-small" value="textbox"/>&nbsp;<a href="http://johnpapa.net" target="_blank">This is a hyperlink</a></div><div><button type="button" id="okBtn" class="btn btn-primary">Close me</button><button type="button" id="surpriseBtn" class="btn" style="margin: 0 8px 0 8px">Surprise me</button></div>',
            'Are you the six fingered man?',
            'Inconceivable!',
            'I do not think that means what you think it means.',
            'Have fun storming the castle!'
        ];
        i++;
        if (i === msgs.length) {
            i = 0;
        }

        return msgs[i];
    };
    $( "[value^='toast-bottom']").on('change', function (event) {
        $("#showMethod option:eq(2)").text("slideUp");
        $("#hideMethod option:eq(2)").text("slideDown");
    });
    $("[value^='toast-top']").on("change", function(event) {
        $("#showMethod option:eq(2)").text("slideDown");
        $("#hideMethod option:eq(2)").text("slideUp");
    });
    $("#toastrOptions").hide();
    $('#showtoast').on("click",function() {
        $("#toastrOptions").show();
        var shortCutFunction = $("#toastTypeGroup input:radio:checked").val();
        var msg = $('#message').val();
        var title = $('#title').val() || '';
        var $showDuration = $('#showDuration');
        var $hideDuration = $('#hideDuration');
        var $timeOut = $('#timeOut');
        var $extendedTimeOut = $('#extendedTimeOut');
        var $showEasing = $('#showEasing');
        var $hideEasing = $('#hideEasing');
        var $showMethod = $('#showMethod');
        var $hideMethod = $('#hideMethod');
        var toastIndex = toastCount++;

        toastr.options = {
            closeButton: $('#closeButton').prop('checked'),
            debug: $('#debugInfo').prop('checked'),
            positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',
            onclick: null
        };


        if ($('#addBehaviorOnToastClick').prop('checked')) {
            toastr.options.onclick = function() {
                alert('You can perform some custom action after a toast goes away');
            };
        }

        if ($showDuration.val().length) {
            toastr.options.showDuration = $showDuration.val();
        }

        if ($hideDuration.val().length) {
            toastr.options.hideDuration = $hideDuration.val();
        }

        if ($timeOut.val().length) {
            toastr.options.timeOut = $timeOut.val();
        }

        if ($extendedTimeOut.val().length) {
            toastr.options.extendedTimeOut = $extendedTimeOut.val();
        }

        if ($showEasing.val().length) {
            toastr.options.showEasing = $showEasing.val();
        }

        if ($hideEasing.val().length) {
            toastr.options.hideEasing = $hideEasing.val();
        }

        if ($showMethod.val().length) {
            toastr.options.showMethod = $showMethod.val();
        }

        if ($hideMethod.val().length) {
            toastr.options.hideMethod = $hideMethod.val();
        }

        if (!msg) {
            msg = getMessage();
        }

        $("#toastrOptions").text("Command: toastr[" + shortCutFunction + "](\"" + msg + (title ? "\", \"" + title : '') + "\")\n\ntoastr.options = " + JSON.stringify(toastr.options, null, 2));

        var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
        $toastlast = $toast;
        if ($toast.find('#okBtn').length) {
            $toast.delegate('#okBtn', 'click', function() {
                alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                $toast.remove();
            });
        }
        if ($toast.find('#surpriseBtn').length) {
            $toast.delegate('#surpriseBtn', 'click', function() {
                alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
            });
        }
    });

    function getLastToast() {
        return $toastlast;
    }
    $('#clearlasttoast').on("click",function() {
        toastr.clear(getLastToast());
    });
    $('#cleartoasts').on("click",function() {
        toastr.clear();
    });
});
// Notifications
var classicLayout = false;
var portfolioKeyword;
var $container, $blog_container;
window.anim = {};
window.anim.open = 'flipInX';
window.anim.close = 'flipOutX';
(function($) {
    $(function() {
        $('#anim-open').on('change', function(e) {
            window.anim.open = $(this).val();
        });
        $('#anim-close').on('change', function(e) {
            window.anim.close = $(this).val();
        });
        $('.runner').on('click', function(e) {
            var notes = [];
            notes['alert'] = 'Best check yo self, you\'re not looking too good.';
            notes['error'] = 'Change a few things up and try submitting again.';
            notes['success'] = 'You successfully read this important alert message.';
            notes['information'] = 'This alert needs your attention, but it\'s not super important.';
            notes['warning'] = '<strong>Warning!</strong> <br /> Best check yo self, you\'re not looking too good.';
            notes['confirm'] = 'Do you want to continue?';
            e.preventDefault();
            var self = $(this);
            if (self.data('layout') == 'inline') {
                $(self.data('custom')).noty({
                    text: notes[self.data('type')],
                    type: self.data('type'),
                    theme: 'relax',
                    dismissQueue: true,
                    animation: {
                        open: {
                            height: 'toggle'
                        },
                        close: {
                            height: 'toggle'
                        },
                        easing: 'swing',
                        speed: 500
                    },
                    buttons: (self.data('type') != 'confirm') ? false : [{
                        addClass: 'btn btn-primary',
                        text: 'Ok',
                        onClick: function($noty) {
                            $noty.close();
                            $(self.data('custom')).noty({
                                force: true,
                                text: 'You clicked "Ok" button',
                                type: 'success'
                            });
                        }
                    }, {
                        addClass: 'btn btn-danger',
                        text: 'Cancel',
                        onClick: function($noty) {
                            $noty.close();
                            $(self.data('custom')).noty({
                                force: true,
                                text: 'You clicked "Cancel" button',
                                type: 'error'
                            });
                        }
                    }]
                });
                return false;
            }
            noty({
                text: notes[self.data('type')],
                type: self.data('type'),
                theme: 'relax',
                dismissQueue: true,
                layout: self.data('layout'),
                animation: {
                    open: {
                        height: 'toggle'
                    },
                    close: {
                        height: 'toggle'
                    },
                    easing: 'swing',
                    speed: 500
                },
                buttons: (self.data('type') != 'confirm') ? false : [{
                    addClass: 'btn btn-primary',
                    text: 'Ok',
                    onClick: function($noty) {
                        $noty.close();
                        noty({
                            force: true,
                            theme: 'relax',
                            animation: {

                                open: {
                                    height: 'toggle'
                                },
                                close: {
                                    height: 'toggle'
                                },
                                easing: 'swing',
                                speed: 500
                            },
                            text: 'You clicked "Ok" button',
                            type: 'success',
                            layout: self.data('layout')
                        });
                    }
                }, {
                    addClass: 'btn btn-danger',
                    text: 'Cancel',
                    onClick: function($noty) {
                        $noty.close();
                        noty({
                            force: true,
                            theme: 'relax',
                            animation: {

                                open: {
                                    height: 'toggle'
                                },
                                close: {
                                    height: 'toggle'
                                },
                                easing: 'swing',
                                speed: 500
                            },
                            text: 'You clicked "Cancel" button',
                            type: 'error',
                            layout: self.data('layout')
                        });
                    }
                }]
            });
            return false;
        });
    });

})(jQuery);

'use strict';
$(document).ready(function(){
    function testAnim(x, str) {
        $('#animationSandbox' + str).removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass();
        });
    }

    function testAnim1(str) {
        var x = document.getElementById('s' + str).value;

        $('#animationSandbox' + str).removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass();
        });
    }

    $(".knob").knob({
        change: function(value) {
            //console.log("change : " + value);
        },
        release: function(value) {
            //console.log(this.$.attr('value'));
            console.log("release : " + value);
        },
        cancel: function() {
            console.log("cancel : ", this);
        },
        /*format : function (value) {
         return value + '%';
         },*/
        draw: function() {
            // "tron" case
            if (this.$.data('skin') == 'tron') {

                this.cursorExt = 0.3;

                var a = this.arc(this.cv) // Arc
                    ,
                    pa // Previous arc
                    , r = 1;

                this.g.lineWidth = this.lineWidth;

                if (this.o.displayPrevious) {
                    pa = this.arc(this.v);
                    this.g.beginPath();
                    this.g.strokeStyle = this.pColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                    this.g.stroke();
                }
                this.g.beginPath();
                this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
                this.g.stroke();

                this.g.lineWidth = 2;
                this.g.beginPath();
                this.g.strokeStyle = this.o.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                this.g.stroke();

                return false;
            }
        }
    });
    // Example of infinite knob, iPod click wheel
    var v, up = 0,
        down = 0,
        i = 0,
        $idir = $("div.idir"),
        $ival = $("div.ival"),
        incr = function() {
            i++;
            $idir.show().html("+").fadeOut();
            $ival.html(i);
        },
        decr = function() {
            i--;
            $idir.show().html("-").fadeOut();
            $ival.html(i);
        };
    $("input.infinite").knob({
        min: 0,
        max: 20,
        stopper: false,
        change: function() {
            if (v > this.cv) {
                if (up) {
                    decr();
                    up = 0;
                } else {
                    up = 1;
                    down = 0;
                }
            } else {
                if (v < this.cv) {
                    if (down) {
                        incr();
                        down = 0;
                    } else {
                        down = 1;
                        up = 0;
                    }
                }
            }
            v = this.cv;
        }
    });

// ======================transitions========================

//        bounce in
    $("#bi").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#bi').addClass('animated bounceIn').one(animationEnd, function() {
            $(this).removeClass('animated bounceIn');
        });
        return false;
    });
//        bounceinleft
    $("#bil").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#bil').addClass('animated bounceInLeft').one(animationEnd, function() {
            $(this).removeClass('animated bounceInLeft');
        });
        return false;
    });

//    bounceinright
    $("#bir").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#bir').addClass('animated bounceInRight').one(animationEnd, function() {
            $(this).removeClass('animated bounceInRight');
        });
        return false;
    });
//    bounce out
    $("#bo").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#bo').addClass('animated bounceOut').one(animationEnd, function() {
            $(this).removeClass('animated bounceOut');
        });
        return false;
    });
// pulse
    $("#pul").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#pul').addClass('animated pulse').one(animationEnd, function() {
            $(this).removeClass('animated pulse');
        });
        return false;
    });
// tada
    $("#tad").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#tad').addClass('animated tada').one(animationEnd, function() {
            $(this).removeClass('animated tada');
        });
        return false;
    });
    // Rubber band
    $("#rubber").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#rubber').addClass('animated rubberBand').one(animationEnd, function() {
            $(this).removeClass('animated rubberBand');
        });
        return false;
    });
//swing
    $("#swing").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#swing').addClass('animated swing').one(animationEnd, function() {
            $(this).removeClass('animated swing');
        });
        return false;
    });
//        wobble
    $("#wobble").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#wobble').addClass('animated wobble').one(animationEnd, function() {
            $(this).removeClass('animated wobble');
        });
        return false;
    });

//fade effects
    $("#fadein").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#fadein').addClass('animated fadeIn').one(animationEnd, function() {
            $(this).removeClass('animated fadeIn');
        });
        return false;
    });
    $("#fadeleft").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#fadeleft').addClass('animated fadeInLeft').one(animationEnd, function() {
            $(this).removeClass('animated fadeInLeft');
        });
        return false;
    });
    $("#faderight").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#faderight').addClass('animated fadeInRight').one(animationEnd, function() {
            $(this).removeClass('animated fadeInRight');
        });
        return false;
    });
    $("#fadeout").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#fadeout').addClass('animated fadeOut').one(animationEnd, function() {
            $(this).removeClass('animated fadeOut');
        });
        return false;
    });
//flip effect
    $("#flip").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#flip').addClass('animated flip').one(animationEnd, function() {
            $(this).removeClass('animated flip');
        });
        return false;
    });
    $("#flipy").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#flipy').addClass('animated flipInY').one(animationEnd, function() {
            $(this).removeClass('animated flipInY');
        });
        return false;
    });
    $("#flipoutx").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#flipoutx').addClass('animated flipOutX').one(animationEnd, function() {
            $(this).removeClass('animated flipOutX');
        });
        return false;
    });
    $("#flipouty").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#flipouty').addClass('animated flipOutY').one(animationEnd, function() {
            $(this).removeClass('animated flipOutY');
        });
        return false;
    });
//rotate
    $("#rotatein").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#rotatein').addClass('animated rotateIn').one(animationEnd, function() {
            $(this).removeClass('animated rotateIn');
        });
        return false;
    });
    $("#rotatedownright").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#rotatedownright').addClass('animated rotateInDownRight').one(animationEnd, function() {
            $(this).removeClass('animated rotateInDownRight');
        });
        return false;
    });
    $("#rotateout").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#rotateout').addClass('animated rotateOut').one(animationEnd, function() {
            $(this).removeClass('animated rotateOut');
        });
        return false;
    });
    $("#rotateoutleft").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#rotateoutleft').addClass('animated rotateOutUpLeft').one(animationEnd, function() {
            $(this).removeClass('animated rotateOutUpLeft');
        });
        return false;
    });
//        zoom effect
    $("#zoomin").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#zoomin').addClass('animated zoomIn').one(animationEnd, function() {
            $(this).removeClass('animated zoomIn');
        });
        return false;
    });
    $("#zoominleft").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#zoominleft').addClass('animated zoomInLeft').one(animationEnd, function() {
            $(this).removeClass('animated zoomInLeft');
        });
        return false;
    });
    $("#zoomoutdown").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#zoomoutdown').addClass('animated zoomOutDown').one(animationEnd, function() {
            $(this).removeClass('animated zoomOutDown');
        });
        return false;
    });
    $("#zoomoutright").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#zoomoutright').addClass('animated zoomOutRight').one(animationEnd, function() {
            $(this).removeClass('animated zoomOutRight');
        });
        return false;
    });
//special effects
    $("#hinge").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#hinge').addClass('animated hinge').one(animationEnd, function() {
            $(this).removeClass('animated hinge');
        });
        return false;
    });
    $("#rollin").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#rollin').addClass('animated rollIn').one(animationEnd, function() {
            $(this).removeClass('animated rollIn');
        });
        return false;
    });
    $("#rollout").on("click", function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('#rollout').addClass('animated rollOut').one(animationEnd, function() {
            $(this).removeClass('animated rollOut');
        });
        return false;
    });
});
'use strict';
$(document).ready(function() {
    var table = $('#editable_table');
    table.DataTable({
        dom: '<"text-xs-right"B><f>lr<"table-responsive"t>ip',
        buttons: [
            'copy', 'csv', 'print'
        ]
    });
    var tableWrapper = $("#editable_table_wrapper");
    tableWrapper.find(".dataTables_length select").select2({
        showSearchInput: false //hide search box with special css class
    }); // initialize select2 dropdown
    $("#editable_table_wrapper .dt-buttons .btn").addClass('btn-secondary').removeClass('btn-default');
});

'use strict';
$(document).ready(function() {
    $('#clear').on('click', function() {
        $('#tryitForm1,  #tryitForm').bootstrapValidator("resetForm");
    });

    $('#tryitForm1').bootstrapValidator({
        fields: {
            firstName: {
                validators: {
                    notEmpty: {
                        message: 'Enter the user name'
                    }
                }
            },
            address1: {
                validators: {
                    notEmpty: {
                        message: 'Enter your address'
                    }
                }
            },
            password: {
                validators: {

                    notEmpty: {
                        message: 'Enter the password'
                    }
                }
            },
            confirmpassword: {
                validators: {
                    notEmpty: {
                        message: 'Confirm the password'
                    },
                    identical: {
                        field: 'password',
                        message: 'Please enter the same password as above'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Enter the email address'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            },
            cell: {
                validators: {
                    notEmpty: {
                        message: 'Enter the phone number'
                    },
                    regexp: {
                        regexp: /^[0-9]{10}$/,
                        message: 'The phone number can only consist of numbers with 10 digits'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'City is required'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'Gender is required'
                    }
                }
            },
            pincode: {
                validators: {
                    notEmpty: {
                        message: 'Pincode number is required'
                    },
                    regexp: {
                        regexp: /^(\+?1-?)?(\([0-9]\d{2}\)|[0-9]\d{2})-?[0-9]\d{2}$/,
                        message: 'Enter valid Pincode number'
                    }
                }
            },
            activate: {
                validators: {
                    notEmpty: {
                        message: 'You have to activate your account'
                    }
                }
            },
            check_active: {
                validators: {
                    notEmpty: {
                        message: 'You have to active your account'
                    }
                }
            },
            terms: {
                validators: {
                    notEmpty: {
                        message: 'You have to accept the terms and policies'
                    }
                }
            }
        },
        submitHandler: function(form) {
            if ($('#tryitForm1').valid()) {
                console.log("now we enable the submit button!");
            }
        }
    }).on('success.form.bv', function(e) {
        e.preventDefault();
        swal({
            title: "Success.",
            text: "Successfully Added",
            type: "success",
            allowOutsideClick: false
        }).then(function() {
            location.reload();
        });
    });

    $('#tryitForm').bootstrapValidator({
        fields: {
            firstName: {
                validators: {
                    notEmpty: {
                        message: 'Enter the user name'
                    }
                }
            },
            address1: {
                validators: {
                    notEmpty: {
                        message: 'Enter your address'
                    }
                }
            },
            password: {
                validators: {

                    notEmpty: {
                        message: 'Enter the password'
                    }
                }
            },
            confirmpassword: {
                validators: {
                    notEmpty: {
                        message: 'Confirm the password'
                    },
                    identical: {
                        field: 'password',
                        message: 'Please enter the same password as above'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Enter the email address'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            },
            cell: {
                validators: {
                    notEmpty: {
                        message: 'Enter the phone number'
                    },
                    regexp: {
                        regexp: /^[0-9]{10}$/,
                        message: 'The phone number can only consist of numbers with 10 digits'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'City is required'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'Gender is required'
                    }
                }
            },
            pincode: {
                validators: {
                    notEmpty: {
                        message: 'Pincode number is required'
                    },
                    regexp: {
                        regexp: /^(\+?1-?)?(\([0-9]\d{2}\)|[0-9]\d{2})-?[0-9]\d{2}$/,
                        message: 'Enter valid Pincode number'
                    }
                }
            },
            activate: {
                validators: {
                    notEmpty: {
                        message: 'You have to activate your account'
                    }
                }
            },
            check_active: {
                validators: {
                    notEmpty: {
                        message: 'You have to active your account'
                    }
                }
            },
            terms: {
                validators: {
                    notEmpty: {
                        message: 'You have to accept the terms and policies'
                    }
                }
            }
        },
        submitHandler: function(form) {
            if ($('#tryitForm').valid()) {
                console.log("now we enable the submit button!");
            }
        }
    });
});
"use strict";
$(document).ready(function() {
    var options = {
        useEasing: true,
        useGrouping: true,
        decimal: '.',
        prefix: '',
        suffix: ''
    };
    new CountUp("widget_count5", 0, 1242, 0, 2.5, options).start();
    new CountUp("widget_count6", 0, 254, 0, 2.5, options).start();
    new CountUp("widget_count7", 0, 685, 0, 2.5, options).start();
    new CountUp("widget_count8", 0, 485, 0, 2.5, options).start();
    new CountUp("gold", 0, 330, 0, 2.5, options).start();
    new CountUp("platinum_plan", 0, 400, 0, 2.5, options).start();
    new CountUp("fb_count", 0, 354, 0, 2.5, options).start();
    new CountUp("tw_count", 0, 547, 0, 2.5, options).start();
    new CountUp("g+_count", 0, 678, 0, 2.5, options).start();
    new CountUp("youtube_count", 0, 21, 0, 2.5, options).start();
    new CountUp("sc_count", 0, 845, 0, 2.5, options).start();
    new CountUp("in_count", 0, 124, 0, 2.5, options).start();
    // swiper
    var swiper = new Swiper('.men_shoes_swiper', {
        centeredSlides: true,
        autoplay: 2000,
        loop: true,
        autoplayDisableOnInteraction: false


    });
    var swiper2 = new Swiper('.women_shoes_swiper', {
        centeredSlides: true,
        autoplay: 2500,
        loop: true,
        autoplayDisableOnInteraction: false


    });
    $(".wrapper").on("resize", function() {
        setTimeout(function() {
            swiper.update();
            swiper2.update();
        }, 200);
    });
    // end of swiper

    // default date
    var datetime = null,
        time = null,
        date = null;

    var update = function () {
        date = moment(new Date());
        datetime.html(date.format('DD MMMM YYYY <br> dddd'));
        time.html(date.format('H:mm:ss'));
    };
    //Current Time
    if($('.current-date')[0] && $('.time')[0]) {
        datetime = $('.current-date');
        time = $('.time');

        update();
        setInterval(update, 1000);
    }
    // End of default date

    // login
    $('#widgets_login_validator').bootstrapValidator({
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Please provide a password'
                    }
                }
            }
        }
    });

});

"use strict";
$(document).ready(function() {
    // swiper
    var swiper = new Swiper('.widget_swiper', {
        centeredSlides: true,
        autoplay: 2000,
        loop: true,
        autoplayDisableOnInteraction: false


    });
    var swiper2 = new Swiper('.widget_swiper2', {
        autoplay: 2000,
        loop: true,
        slidesPerView: 3,
        spaceBetween: 10,
        autoplayDisableOnInteraction: false
    });
    // End of swiper

    $(".wrapper").on("resize", function() {
        setTimeout(function() {
            swiper.update();
            swiper2.update();
        }, 400);
    });

    // Default time
    var timenow = moment().format("h:mm");

    $(".conversation-list").slimscroll({
        height: "360px",
        size: '5px',
        opacity: 0.2
    });
    // End of default time

    // Chat
    $("form#main_input_box").on("submit",function(event) {
        event.preventDefault();
        var scrollTo_int = $(".conversation-list").prop('scrollHeight') + 'px';
        $(".conversation-list").append('<li class="clearfix odd m-t-25"><div class="chat-avatar"><img src="img/widget_image3.jpg" alt="male"><i>' + timenow + '</i></div><div class="conversation-text"><div class="ctext-wrap"><i>Me</i><p>' + $("#custom_textbox").val() + '</p></div></div></li>');
        $("#custom_textbox").val('');
        $(".conversation-list").slimscroll({ scrollTo: scrollTo_int });
    });
    // End of chat

    var options = {
        useEasing: true,
        useGrouping: true,
        decimal: '.',
        prefix: '',
        suffix: ''
    };
    new CountUp("widget_count1", 0, 2436, 0, 2.5, options).start();
    new CountUp("widget_count2", 0, 8569, 0, 2.5, options).start();
    new CountUp("widget_count3", 0, 4859, 0, 2.5, options).start();
    new CountUp("widget_count4", 0, 32568, 0, 2.5, options).start();
    new CountUp("fb_count", 0, 60, 0, 2.5, options).start();
    new CountUp("twitter_count", 0, 25, 0, 2.5, options).start();
    new CountUp("gplus_count", 0, 15, 0, 2.5, options).start();
    new CountUp("followers_count", 0, 962, 0, 2.5, options).start();
    new CountUp("comments_count", 0, 649, 0, 2.5, options).start();
    new CountUp("likes_count", 0, 4236, 0, 2.5, options).start();
    $(".custom_textbox").on("keypress", function(e) {
        if (e.which === 32 && !this.value.length)
            e.preventDefault();
    });


});

"use stict";
$(document).ready(function () {
    var options = {
        useEasing: true,
        useGrouping: true,
        decimal: '.',
        prefix: '',
        suffix: ''
    };
    new CountUp("orders_countup", 0, 1425, 0, 5.0, options).start();
    new CountUp("revenue_countup", 0, 600, 0, 5.0, options).start();
    new CountUp("products_countup", 0, 2100, 0, 5.0, options).start();
    new CountUp("sold_countup", 0, 1025, 0, 5.0, options).start();

    var imgHeight=$(".left_align_img").height();
    $(".left_image").css("height",imgHeight);
});
'use strict';
$(document).ready(function() {
    $("#commentForm").bootstrapValidator({
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The User name is required'
                    }
                },
                required: true,
                minlength: 3
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            },
            confirm: {
                validators: {
                    notEmpty: {
                        message: 'Confirm Password is required'
                    },
                    identical: {
                        field: 'password'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            },
            val_first_name: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required '
                    }
                }
            },
            lname: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required '
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'Please select a gender'
                    }
                }
            },
            val_address: {
                validators: {
                    notEmpty: {
                        message: 'The address is required '
                    }
                }
            },

            password3: {
                validators: {
                    notEmpty: {
                        message: 'Password is required'
                    }
                },
                required: true,
                minlength: 3
            },
            val_age: {
                validators: {
                    notEmpty: {
                        message:'Age is required and between 18 to 100'

                    },
                    digits: {
                        message:'Enter only digits '
                    },
                    greaterThan: {
                        value: 18,
                        message:'The age should be greater than or equal to 18 '
                    },
                    lessThan: {
                        value: 100,
                        message:'The age should be less than or equal to 100 '
                    }

                }
            },
            phone1: {
                validators: {
                    notEmpty: {
                        message: 'The home number is required'
                    },
                    regexp: {
                        regexp: /^(\+?1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/,
                        message: 'Enter valid phone number'
                    }
                }
            },
            phone2: {
                validators: {
                    notEmpty: {
                        message: 'The personal number is required'
                    },
                    regexp: {
                        regexp: /^(\+?1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/,
                        message: 'Enter valid phone number'
                    }
                }
            },
            phone3: {
                validators: {
                    notEmpty: {
                        message: 'Alternate number is required'
                    },
                    different: {
                        field: 'phone1',
                        message: 'The alternate number must be different from Home number'
                    },
                    regexp: {
                        regexp: /^(\+?1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/,
                        message: 'Enter valid phone number'
                    }
                }
            },
            acceptTerms:{
                validators:{
                    notEmpty:{
                        message: 'The checkbox must be checked'
                    }
                }
            }
        }
    });

    $('#acceptTerms').on('ifChanged', function(event){
        $('#commentForm').bootstrapValidator('revalidateField', $('#acceptTerms'));
    });
    $('#rootwizard').bootstrapWizard({
        'tabClass': 'nav nav-pills',
        'onNext': function(tab, navigation, index) {
            var $validator = $('#commentForm').data('bootstrapValidator').validate();
            if($validator.isValid()){
                // alert('fd');
                $(".userprofile_tab1").addClass("tab_clr");
                $(".userprofile_tab2").addClass("tab_clr");
            }
            return $validator.isValid();
        },
        'onPrevious': function(tab, navigation, index) {
            $(".userprofile_tab2").removeClass("tab_clr");
        },
        onTabClick: function(tab, navigation, index) {
            return false;
        },
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            var $rootwizard= $('#rootwizard');
            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $rootwizard.find('.pager .next').hide();
                $rootwizard.find('.pager .finish').show();
                $rootwizard.find('.pager .finish').removeClass('disabled');
            } else {
                $rootwizard.find('.pager .next').show();
                $rootwizard.find('.pager .finish').hide();
            }
            $('#rootwizard .finish').on("click",function() {
                var $validator = $('#commentForm').data('bootstrapValidator').validate();
                if ($validator.isValid()) {
                    $('#myModal').modal('show');
                    return $validator.isValid();
                    $rootwizard.find("a[href='#tab1']").tab('show');
                }
            });

        }});
    $('#rootwizard_no_val').bootstrapWizard({'tabClass': 'nav nav-pills'});

    $(".user2, .finish_tab, .next_btn1").on("click", function(){
        $(".userprofile_tab").addClass("tab_clr");
    });
    $(".user1, .previous_btn2").on("click", function(){
        $(".userprofile_tab").removeClass("tab_clr");
    });
    $(".finish_tab, .next_btn2").on("click", function(){
        $(".profile_tab").addClass("tab_clr");
    });
    $(".user2, .previous_btn3").on("click", function(){
        $(".profile_tab").removeClass("tab_clr");
    });
    $(".user1").on('click',function () {
        $(".user2 a span").removeClass("tab_clr");
    });
    $(".general_number").on('keyup',function () {
        if (/\D/g.test(this.value)) {
            this.value = this.value.replace(/\D/g,'')
        }
    });
});


/*! jQuery UI - v1.10.3 - 2013-05-03
 * http://jqueryui.com
 * Copyright 2013 jQuery Foundation and other contributors; Licensed MIT */
(function(e,t){function i(t,i){var a,n,r,o=t.nodeName.toLowerCase();return"area"===o?(a=t.parentNode,n=a.name,t.href&&n&&"map"===a.nodeName.toLowerCase()?(r=e("img[usemap=#"+n+"]")[0],!!r&&s(r)):!1):(/input|select|textarea|button|object/.test(o)?!t.disabled:"a"===o?t.href||i:i)&&s(t)}function s(t){return e.expr.filters.visible(t)&&!e(t).parents().addBack().filter(function(){return"hidden"===e.css(this,"visibility")}).length}var a=0,n=/^ui-id-\d+$/;e.ui=e.ui||{},e.extend(e.ui,{version:"1.10.3",keyCode:{BACKSPACE:8,COMMA:188,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,LEFT:37,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SPACE:32,TAB:9,UP:38}}),e.fn.extend({focus:function(t){return function(i,s){return"number"==typeof i?this.each(function(){var t=this;setTimeout(function(){e(t).focus(),s&&s.call(t)},i)}):t.apply(this,arguments)}}(e.fn.focus),scrollParent:function(){var t;return t=e.ui.ie&&/(static|relative)/.test(this.css("position"))||/absolute/.test(this.css("position"))?this.parents().filter(function(){return/(relative|absolute|fixed)/.test(e.css(this,"position"))&&/(auto|scroll)/.test(e.css(this,"overflow")+e.css(this,"overflow-y")+e.css(this,"overflow-x"))}).eq(0):this.parents().filter(function(){return/(auto|scroll)/.test(e.css(this,"overflow")+e.css(this,"overflow-y")+e.css(this,"overflow-x"))}).eq(0),/fixed/.test(this.css("position"))||!t.length?e(document):t},zIndex:function(i){if(i!==t)return this.css("zIndex",i);if(this.length)for(var s,a,n=e(this[0]);n.length&&n[0]!==document;){if(s=n.css("position"),("absolute"===s||"relative"===s||"fixed"===s)&&(a=parseInt(n.css("zIndex"),10),!isNaN(a)&&0!==a))return a;n=n.parent()}return 0},uniqueId:function(){return this.each(function(){this.id||(this.id="ui-id-"+ ++a)})},removeUniqueId:function(){return this.each(function(){n.test(this.id)&&e(this).removeAttr("id")})}}),e.extend(e.expr[":"],{data:e.expr.createPseudo?e.expr.createPseudo(function(t){return function(i){return!!e.data(i,t)}}):function(t,i,s){return!!e.data(t,s[3])},focusable:function(t){return i(t,!isNaN(e.attr(t,"tabindex")))},tabbable:function(t){var s=e.attr(t,"tabindex"),a=isNaN(s);return(a||s>=0)&&i(t,!a)}}),e("<a>").outerWidth(1).jquery||e.each(["Width","Height"],function(i,s){function a(t,i,s,a){return e.each(n,function(){i-=parseFloat(e.css(t,"padding"+this))||0,s&&(i-=parseFloat(e.css(t,"border"+this+"Width"))||0),a&&(i-=parseFloat(e.css(t,"margin"+this))||0)}),i}var n="Width"===s?["Left","Right"]:["Top","Bottom"],r=s.toLowerCase(),o={innerWidth:e.fn.innerWidth,innerHeight:e.fn.innerHeight,outerWidth:e.fn.outerWidth,outerHeight:e.fn.outerHeight};e.fn["inner"+s]=function(i){return i===t?o["inner"+s].call(this):this.each(function(){e(this).css(r,a(this,i)+"px")})},e.fn["outer"+s]=function(t,i){return"number"!=typeof t?o["outer"+s].call(this,t):this.each(function(){e(this).css(r,a(this,t,!0,i)+"px")})}}),e.fn.addBack||(e.fn.addBack=function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}),e("<a>").data("a-b","a").removeData("a-b").data("a-b")&&(e.fn.removeData=function(t){return function(i){return arguments.length?t.call(this,e.camelCase(i)):t.call(this)}}(e.fn.removeData)),e.ui.ie=!!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()),e.support.selectstart="onselectstart"in document.createElement("div"),e.fn.extend({disableSelection:function(){return this.bind((e.support.selectstart?"selectstart":"mousedown")+".ui-disableSelection",function(e){e.preventDefault()})},enableSelection:function(){return this.unbind(".ui-disableSelection")}}),e.extend(e.ui,{plugin:{add:function(t,i,s){var a,n=e.ui[t].prototype;for(a in s)n.plugins[a]=n.plugins[a]||[],n.plugins[a].push([i,s[a]])},call:function(e,t,i){var s,a=e.plugins[t];if(a&&e.element[0].parentNode&&11!==e.element[0].parentNode.nodeType)for(s=0;a.length>s;s++)e.options[a[s][0]]&&a[s][1].apply(e.element,i)}},hasScroll:function(t,i){if("hidden"===e(t).css("overflow"))return!1;var s=i&&"left"===i?"scrollLeft":"scrollTop",a=!1;return t[s]>0?!0:(t[s]=1,a=t[s]>0,t[s]=0,a)}})})(jQuery);
/*! jQuery UI - v1.10.3 - 2013-05-03
 * http://jqueryui.com
 * Copyright 2013 jQuery Foundation and other contributors; Licensed MIT */
(function(e,t){var i=0,s=Array.prototype.slice,n=e.cleanData;e.cleanData=function(t){for(var i,s=0;null!=(i=t[s]);s++)try{e(i).triggerHandler("remove")}catch(a){}n(t)},e.widget=function(i,s,n){var a,r,o,h,l={},u=i.split(".")[0];i=i.split(".")[1],a=u+"-"+i,n||(n=s,s=e.Widget),e.expr[":"][a.toLowerCase()]=function(t){return!!e.data(t,a)},e[u]=e[u]||{},r=e[u][i],o=e[u][i]=function(e,i){return this._createWidget?(arguments.length&&this._createWidget(e,i),t):new o(e,i)},e.extend(o,r,{version:n.version,_proto:e.extend({},n),_childConstructors:[]}),h=new s,h.options=e.widget.extend({},h.options),e.each(n,function(i,n){return e.isFunction(n)?(l[i]=function(){var e=function(){return s.prototype[i].apply(this,arguments)},t=function(e){return s.prototype[i].apply(this,e)};return function(){var i,s=this._super,a=this._superApply;return this._super=e,this._superApply=t,i=n.apply(this,arguments),this._super=s,this._superApply=a,i}}(),t):(l[i]=n,t)}),o.prototype=e.widget.extend(h,{widgetEventPrefix:r?h.widgetEventPrefix:i},l,{constructor:o,namespace:u,widgetName:i,widgetFullName:a}),r?(e.each(r._childConstructors,function(t,i){var s=i.prototype;e.widget(s.namespace+"."+s.widgetName,o,i._proto)}),delete r._childConstructors):s._childConstructors.push(o),e.widget.bridge(i,o)},e.widget.extend=function(i){for(var n,a,r=s.call(arguments,1),o=0,h=r.length;h>o;o++)for(n in r[o])a=r[o][n],r[o].hasOwnProperty(n)&&a!==t&&(i[n]=e.isPlainObject(a)?e.isPlainObject(i[n])?e.widget.extend({},i[n],a):e.widget.extend({},a):a);return i},e.widget.bridge=function(i,n){var a=n.prototype.widgetFullName||i;e.fn[i]=function(r){var o="string"==typeof r,h=s.call(arguments,1),l=this;return r=!o&&h.length?e.widget.extend.apply(null,[r].concat(h)):r,o?this.each(function(){var s,n=e.data(this,a);return n?e.isFunction(n[r])&&"_"!==r.charAt(0)?(s=n[r].apply(n,h),s!==n&&s!==t?(l=s&&s.jquery?l.pushStack(s.get()):s,!1):t):e.error("no such method '"+r+"' for "+i+" widget instance"):e.error("cannot call methods on "+i+" prior to initialization; "+"attempted to call method '"+r+"'")}):this.each(function(){var t=e.data(this,a);t?t.option(r||{})._init():e.data(this,a,new n(r,this))}),l}},e.Widget=function(){},e.Widget._childConstructors=[],e.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",defaultElement:"<div>",options:{disabled:!1,create:null},_createWidget:function(t,s){s=e(s||this.defaultElement||this)[0],this.element=e(s),this.uuid=i++,this.eventNamespace="."+this.widgetName+this.uuid,this.options=e.widget.extend({},this.options,this._getCreateOptions(),t),this.bindings=e(),this.hoverable=e(),this.focusable=e(),s!==this&&(e.data(s,this.widgetFullName,this),this._on(!0,this.element,{remove:function(e){e.target===s&&this.destroy()}}),this.document=e(s.style?s.ownerDocument:s.document||s),this.window=e(this.document[0].defaultView||this.document[0].parentWindow)),this._create(),this._trigger("create",null,this._getCreateEventData()),this._init()},_getCreateOptions:e.noop,_getCreateEventData:e.noop,_create:e.noop,_init:e.noop,destroy:function(){this._destroy(),this.element.unbind(this.eventNamespace).removeData(this.widgetName).removeData(this.widgetFullName).removeData(e.camelCase(this.widgetFullName)),this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName+"-disabled "+"ui-state-disabled"),this.bindings.unbind(this.eventNamespace),this.hoverable.removeClass("ui-state-hover"),this.focusable.removeClass("ui-state-focus")},_destroy:e.noop,widget:function(){return this.element},option:function(i,s){var n,a,r,o=i;if(0===arguments.length)return e.widget.extend({},this.options);if("string"==typeof i)if(o={},n=i.split("."),i=n.shift(),n.length){for(a=o[i]=e.widget.extend({},this.options[i]),r=0;n.length-1>r;r++)a[n[r]]=a[n[r]]||{},a=a[n[r]];if(i=n.pop(),s===t)return a[i]===t?null:a[i];a[i]=s}else{if(s===t)return this.options[i]===t?null:this.options[i];o[i]=s}return this._setOptions(o),this},_setOptions:function(e){var t;for(t in e)this._setOption(t,e[t]);return this},_setOption:function(e,t){return this.options[e]=t,"disabled"===e&&(this.widget().toggleClass(this.widgetFullName+"-disabled ui-state-disabled",!!t).attr("aria-disabled",t),this.hoverable.removeClass("ui-state-hover"),this.focusable.removeClass("ui-state-focus")),this},enable:function(){return this._setOption("disabled",!1)},disable:function(){return this._setOption("disabled",!0)},_on:function(i,s,n){var a,r=this;"boolean"!=typeof i&&(n=s,s=i,i=!1),n?(s=a=e(s),this.bindings=this.bindings.add(s)):(n=s,s=this.element,a=this.widget()),e.each(n,function(n,o){function h(){return i||r.options.disabled!==!0&&!e(this).hasClass("ui-state-disabled")?("string"==typeof o?r[o]:o).apply(r,arguments):t}"string"!=typeof o&&(h.guid=o.guid=o.guid||h.guid||e.guid++);var l=n.match(/^(\w+)\s*(.*)$/),u=l[1]+r.eventNamespace,c=l[2];c?a.delegate(c,u,h):s.bind(u,h)})},_off:function(e,t){t=(t||"").split(" ").join(this.eventNamespace+" ")+this.eventNamespace,e.unbind(t).undelegate(t)},_delay:function(e,t){function i(){return("string"==typeof e?s[e]:e).apply(s,arguments)}var s=this;return setTimeout(i,t||0)},_hoverable:function(t){this.hoverable=this.hoverable.add(t),this._on(t,{mouseenter:function(t){e(t.currentTarget).addClass("ui-state-hover")},mouseleave:function(t){e(t.currentTarget).removeClass("ui-state-hover")}})},_focusable:function(t){this.focusable=this.focusable.add(t),this._on(t,{focusin:function(t){e(t.currentTarget).addClass("ui-state-focus")},focusout:function(t){e(t.currentTarget).removeClass("ui-state-focus")}})},_trigger:function(t,i,s){var n,a,r=this.options[t];if(s=s||{},i=e.Event(i),i.type=(t===this.widgetEventPrefix?t:this.widgetEventPrefix+t).toLowerCase(),i.target=this.element[0],a=i.originalEvent)for(n in a)n in i||(i[n]=a[n]);return this.element.trigger(i,s),!(e.isFunction(r)&&r.apply(this.element[0],[i].concat(s))===!1||i.isDefaultPrevented())}},e.each({show:"fadeIn",hide:"fadeOut"},function(t,i){e.Widget.prototype["_"+t]=function(s,n,a){"string"==typeof n&&(n={effect:n});var r,o=n?n===!0||"number"==typeof n?i:n.effect||i:t;n=n||{},"number"==typeof n&&(n={duration:n}),r=!e.isEmptyObject(n),n.complete=a,n.delay&&s.delay(n.delay),r&&e.effects&&e.effects.effect[o]?s[t](n):o!==t&&s[o]?s[o](n.duration,n.easing,a):s.queue(function(i){e(this)[t](),a&&a.call(s[0]),i()})}})})(jQuery);
/*! jQuery UI - v1.10.3 - 2013-05-03
 * http://jqueryui.com
 * Copyright 2013 jQuery Foundation and other contributors; Licensed MIT */
(function(e){var t=!1;e(document).mouseup(function(){t=!1}),e.widget("ui.mouse",{version:"1.10.3",options:{cancel:"input,textarea,button,select,option",distance:1,delay:0},_mouseInit:function(){var t=this;this.element.bind("mousedown."+this.widgetName,function(e){return t._mouseDown(e)}).bind("click."+this.widgetName,function(i){return!0===e.data(i.target,t.widgetName+".preventClickEvent")?(e.removeData(i.target,t.widgetName+".preventClickEvent"),i.stopImmediatePropagation(),!1):undefined}),this.started=!1},_mouseDestroy:function(){this.element.unbind("."+this.widgetName),this._mouseMoveDelegate&&e(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate)},_mouseDown:function(i){if(!t){this._mouseStarted&&this._mouseUp(i),this._mouseDownEvent=i;var s=this,n=1===i.which,a="string"==typeof this.options.cancel&&i.target.nodeName?e(i.target).closest(this.options.cancel).length:!1;return n&&!a&&this._mouseCapture(i)?(this.mouseDelayMet=!this.options.delay,this.mouseDelayMet||(this._mouseDelayTimer=setTimeout(function(){s.mouseDelayMet=!0},this.options.delay)),this._mouseDistanceMet(i)&&this._mouseDelayMet(i)&&(this._mouseStarted=this._mouseStart(i)!==!1,!this._mouseStarted)?(i.preventDefault(),!0):(!0===e.data(i.target,this.widgetName+".preventClickEvent")&&e.removeData(i.target,this.widgetName+".preventClickEvent"),this._mouseMoveDelegate=function(e){return s._mouseMove(e)},this._mouseUpDelegate=function(e){return s._mouseUp(e)},e(document).bind("mousemove."+this.widgetName,this._mouseMoveDelegate).bind("mouseup."+this.widgetName,this._mouseUpDelegate),i.preventDefault(),t=!0,!0)):!0}},_mouseMove:function(t){return e.ui.ie&&(!document.documentMode||9>document.documentMode)&&!t.button?this._mouseUp(t):this._mouseStarted?(this._mouseDrag(t),t.preventDefault()):(this._mouseDistanceMet(t)&&this._mouseDelayMet(t)&&(this._mouseStarted=this._mouseStart(this._mouseDownEvent,t)!==!1,this._mouseStarted?this._mouseDrag(t):this._mouseUp(t)),!this._mouseStarted)},_mouseUp:function(t){return e(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate),this._mouseStarted&&(this._mouseStarted=!1,t.target===this._mouseDownEvent.target&&e.data(t.target,this.widgetName+".preventClickEvent",!0),this._mouseStop(t)),!1},_mouseDistanceMet:function(e){return Math.max(Math.abs(this._mouseDownEvent.pageX-e.pageX),Math.abs(this._mouseDownEvent.pageY-e.pageY))>=this.options.distance},_mouseDelayMet:function(){return this.mouseDelayMet},_mouseStart:function(){},_mouseDrag:function(){},_mouseStop:function(){},_mouseCapture:function(){return!0}})})(jQuery);
/*! jQuery UI - v1.10.3 - 2013-05-03
 * http://jqueryui.com
 * Copyright 2013 jQuery Foundation and other contributors; Licensed MIT */
(function(e){e.widget("ui.draggable",e.ui.mouse,{version:"1.10.3",widgetEventPrefix:"drag",options:{addClasses:!0,appendTo:"parent",axis:!1,connectToSortable:!1,containment:!1,cursor:"auto",cursorAt:!1,grid:!1,handle:!1,helper:"original",iframeFix:!1,opacity:!1,refreshPositions:!1,revert:!1,revertDuration:500,scope:"default",scroll:!0,scrollSensitivity:20,scrollSpeed:20,snap:!1,snapMode:"both",snapTolerance:20,stack:!1,zIndex:!1,drag:null,start:null,stop:null},_create:function(){"original"!==this.options.helper||/^(?:r|a|f)/.test(this.element.css("position"))||(this.element[0].style.position="relative"),this.options.addClasses&&this.element.addClass("ui-draggable"),this.options.disabled&&this.element.addClass("ui-draggable-disabled"),this._mouseInit()},_destroy:function(){this.element.removeClass("ui-draggable ui-draggable-dragging ui-draggable-disabled"),this._mouseDestroy()},_mouseCapture:function(t){var i=this.options;return this.helper||i.disabled||e(t.target).closest(".ui-resizable-handle").length>0?!1:(this.handle=this._getHandle(t),this.handle?(e(i.iframeFix===!0?"iframe":i.iframeFix).each(function(){e("<div class='ui-draggable-iframeFix' style='background: #fff;'></div>").css({width:this.offsetWidth+"px",height:this.offsetHeight+"px",position:"absolute",opacity:"0.001",zIndex:1e3}).css(e(this).offset()).appendTo("body")}),!0):!1)},_mouseStart:function(t){var i=this.options;return this.helper=this._createHelper(t),this.helper.addClass("ui-draggable-dragging"),this._cacheHelperProportions(),e.ui.ddmanager&&(e.ui.ddmanager.current=this),this._cacheMargins(),this.cssPosition=this.helper.css("position"),this.scrollParent=this.helper.scrollParent(),this.offsetParent=this.helper.offsetParent(),this.offsetParentCssPosition=this.offsetParent.css("position"),this.offset=this.positionAbs=this.element.offset(),this.offset={top:this.offset.top-this.margins.top,left:this.offset.left-this.margins.left},this.offset.scroll=!1,e.extend(this.offset,{click:{left:t.pageX-this.offset.left,top:t.pageY-this.offset.top},parent:this._getParentOffset(),relative:this._getRelativeOffset()}),this.originalPosition=this.position=this._generatePosition(t),this.originalPageX=t.pageX,this.originalPageY=t.pageY,i.cursorAt&&this._adjustOffsetFromHelper(i.cursorAt),this._setContainment(),this._trigger("start",t)===!1?(this._clear(),!1):(this._cacheHelperProportions(),e.ui.ddmanager&&!i.dropBehaviour&&e.ui.ddmanager.prepareOffsets(this,t),this._mouseDrag(t,!0),e.ui.ddmanager&&e.ui.ddmanager.dragStart(this,t),!0)},_mouseDrag:function(t,i){if("fixed"===this.offsetParentCssPosition&&(this.offset.parent=this._getParentOffset()),this.position=this._generatePosition(t),this.positionAbs=this._convertPositionTo("absolute"),!i){var s=this._uiHash();if(this._trigger("drag",t,s)===!1)return this._mouseUp({}),!1;this.position=s.position}return this.options.axis&&"y"===this.options.axis||(this.helper[0].style.left=this.position.left+"px"),this.options.axis&&"x"===this.options.axis||(this.helper[0].style.top=this.position.top+"px"),e.ui.ddmanager&&e.ui.ddmanager.drag(this,t),!1},_mouseStop:function(t){var i=this,s=!1;return e.ui.ddmanager&&!this.options.dropBehaviour&&(s=e.ui.ddmanager.drop(this,t)),this.dropped&&(s=this.dropped,this.dropped=!1),"original"!==this.options.helper||e.contains(this.element[0].ownerDocument,this.element[0])?("invalid"===this.options.revert&&!s||"valid"===this.options.revert&&s||this.options.revert===!0||e.isFunction(this.options.revert)&&this.options.revert.call(this.element,s)?e(this.helper).animate(this.originalPosition,parseInt(this.options.revertDuration,10),function(){i._trigger("stop",t)!==!1&&i._clear()}):this._trigger("stop",t)!==!1&&this._clear(),!1):!1},_mouseUp:function(t){return e("div.ui-draggable-iframeFix").each(function(){this.parentNode.removeChild(this)}),e.ui.ddmanager&&e.ui.ddmanager.dragStop(this,t),e.ui.mouse.prototype._mouseUp.call(this,t)},cancel:function(){return this.helper.is(".ui-draggable-dragging")?this._mouseUp({}):this._clear(),this},_getHandle:function(t){return this.options.handle?!!e(t.target).closest(this.element.find(this.options.handle)).length:!0},_createHelper:function(t){var i=this.options,s=e.isFunction(i.helper)?e(i.helper.apply(this.element[0],[t])):"clone"===i.helper?this.element.clone().removeAttr("id"):this.element;return s.parents("body").length||s.appendTo("parent"===i.appendTo?this.element[0].parentNode:i.appendTo),s[0]===this.element[0]||/(fixed|absolute)/.test(s.css("position"))||s.css("position","absolute"),s},_adjustOffsetFromHelper:function(t){"string"==typeof t&&(t=t.split(" ")),e.isArray(t)&&(t={left:+t[0],top:+t[1]||0}),"left"in t&&(this.offset.click.left=t.left+this.margins.left),"right"in t&&(this.offset.click.left=this.helperProportions.width-t.right+this.margins.left),"top"in t&&(this.offset.click.top=t.top+this.margins.top),"bottom"in t&&(this.offset.click.top=this.helperProportions.height-t.bottom+this.margins.top)},_getParentOffset:function(){var t=this.offsetParent.offset();return"absolute"===this.cssPosition&&this.scrollParent[0]!==document&&e.contains(this.scrollParent[0],this.offsetParent[0])&&(t.left+=this.scrollParent.scrollLeft(),t.top+=this.scrollParent.scrollTop()),(this.offsetParent[0]===document.body||this.offsetParent[0].tagName&&"html"===this.offsetParent[0].tagName.toLowerCase()&&e.ui.ie)&&(t={top:0,left:0}),{top:t.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:t.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)}},_getRelativeOffset:function(){if("relative"===this.cssPosition){var e=this.element.position();return{top:e.top-(parseInt(this.helper.css("top"),10)||0)+this.scrollParent.scrollTop(),left:e.left-(parseInt(this.helper.css("left"),10)||0)+this.scrollParent.scrollLeft()}}return{top:0,left:0}},_cacheMargins:function(){this.margins={left:parseInt(this.element.css("marginLeft"),10)||0,top:parseInt(this.element.css("marginTop"),10)||0,right:parseInt(this.element.css("marginRight"),10)||0,bottom:parseInt(this.element.css("marginBottom"),10)||0}},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()}},_setContainment:function(){var t,i,s,n=this.options;return n.containment?"window"===n.containment?(this.containment=[e(window).scrollLeft()-this.offset.relative.left-this.offset.parent.left,e(window).scrollTop()-this.offset.relative.top-this.offset.parent.top,e(window).scrollLeft()+e(window).width()-this.helperProportions.width-this.margins.left,e(window).scrollTop()+(e(window).height()||document.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top],undefined):"document"===n.containment?(this.containment=[0,0,e(document).width()-this.helperProportions.width-this.margins.left,(e(document).height()||document.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top],undefined):n.containment.constructor===Array?(this.containment=n.containment,undefined):("parent"===n.containment&&(n.containment=this.helper[0].parentNode),i=e(n.containment),s=i[0],s&&(t="hidden"!==i.css("overflow"),this.containment=[(parseInt(i.css("borderLeftWidth"),10)||0)+(parseInt(i.css("paddingLeft"),10)||0),(parseInt(i.css("borderTopWidth"),10)||0)+(parseInt(i.css("paddingTop"),10)||0),(t?Math.max(s.scrollWidth,s.offsetWidth):s.offsetWidth)-(parseInt(i.css("borderRightWidth"),10)||0)-(parseInt(i.css("paddingRight"),10)||0)-this.helperProportions.width-this.margins.left-this.margins.right,(t?Math.max(s.scrollHeight,s.offsetHeight):s.offsetHeight)-(parseInt(i.css("borderBottomWidth"),10)||0)-(parseInt(i.css("paddingBottom"),10)||0)-this.helperProportions.height-this.margins.top-this.margins.bottom],this.relative_container=i),undefined):(this.containment=null,undefined)},_convertPositionTo:function(t,i){i||(i=this.position);var s="absolute"===t?1:-1,n="absolute"!==this.cssPosition||this.scrollParent[0]!==document&&e.contains(this.scrollParent[0],this.offsetParent[0])?this.scrollParent:this.offsetParent;return this.offset.scroll||(this.offset.scroll={top:n.scrollTop(),left:n.scrollLeft()}),{top:i.top+this.offset.relative.top*s+this.offset.parent.top*s-("fixed"===this.cssPosition?-this.scrollParent.scrollTop():this.offset.scroll.top)*s,left:i.left+this.offset.relative.left*s+this.offset.parent.left*s-("fixed"===this.cssPosition?-this.scrollParent.scrollLeft():this.offset.scroll.left)*s}},_generatePosition:function(t){var i,s,n,a,o=this.options,r="absolute"!==this.cssPosition||this.scrollParent[0]!==document&&e.contains(this.scrollParent[0],this.offsetParent[0])?this.scrollParent:this.offsetParent,h=t.pageX,l=t.pageY;return this.offset.scroll||(this.offset.scroll={top:r.scrollTop(),left:r.scrollLeft()}),this.originalPosition&&(this.containment&&(this.relative_container?(s=this.relative_container.offset(),i=[this.containment[0]+s.left,this.containment[1]+s.top,this.containment[2]+s.left,this.containment[3]+s.top]):i=this.containment,t.pageX-this.offset.click.left<i[0]&&(h=i[0]+this.offset.click.left),t.pageY-this.offset.click.top<i[1]&&(l=i[1]+this.offset.click.top),t.pageX-this.offset.click.left>i[2]&&(h=i[2]+this.offset.click.left),t.pageY-this.offset.click.top>i[3]&&(l=i[3]+this.offset.click.top)),o.grid&&(n=o.grid[1]?this.originalPageY+Math.round((l-this.originalPageY)/o.grid[1])*o.grid[1]:this.originalPageY,l=i?n-this.offset.click.top>=i[1]||n-this.offset.click.top>i[3]?n:n-this.offset.click.top>=i[1]?n-o.grid[1]:n+o.grid[1]:n,a=o.grid[0]?this.originalPageX+Math.round((h-this.originalPageX)/o.grid[0])*o.grid[0]:this.originalPageX,h=i?a-this.offset.click.left>=i[0]||a-this.offset.click.left>i[2]?a:a-this.offset.click.left>=i[0]?a-o.grid[0]:a+o.grid[0]:a)),{top:l-this.offset.click.top-this.offset.relative.top-this.offset.parent.top+("fixed"===this.cssPosition?-this.scrollParent.scrollTop():this.offset.scroll.top),left:h-this.offset.click.left-this.offset.relative.left-this.offset.parent.left+("fixed"===this.cssPosition?-this.scrollParent.scrollLeft():this.offset.scroll.left)}},_clear:function(){this.helper.removeClass("ui-draggable-dragging"),this.helper[0]===this.element[0]||this.cancelHelperRemoval||this.helper.remove(),this.helper=null,this.cancelHelperRemoval=!1},_trigger:function(t,i,s){return s=s||this._uiHash(),e.ui.plugin.call(this,t,[i,s]),"drag"===t&&(this.positionAbs=this._convertPositionTo("absolute")),e.Widget.prototype._trigger.call(this,t,i,s)},plugins:{},_uiHash:function(){return{helper:this.helper,position:this.position,originalPosition:this.originalPosition,offset:this.positionAbs}}}),e.ui.plugin.add("draggable","connectToSortable",{start:function(t,i){var s=e(this).data("ui-draggable"),n=s.options,a=e.extend({},i,{item:s.element});s.sortables=[],e(n.connectToSortable).each(function(){var i=e.data(this,"ui-sortable");i&&!i.options.disabled&&(s.sortables.push({instance:i,shouldRevert:i.options.revert}),i.refreshPositions(),i._trigger("activate",t,a))})},stop:function(t,i){var s=e(this).data("ui-draggable"),n=e.extend({},i,{item:s.element});e.each(s.sortables,function(){this.instance.isOver?(this.instance.isOver=0,s.cancelHelperRemoval=!0,this.instance.cancelHelperRemoval=!1,this.shouldRevert&&(this.instance.options.revert=this.shouldRevert),this.instance._mouseStop(t),this.instance.options.helper=this.instance.options._helper,"original"===s.options.helper&&this.instance.currentItem.css({top:"auto",left:"auto"})):(this.instance.cancelHelperRemoval=!1,this.instance._trigger("deactivate",t,n))})},drag:function(t,i){var s=e(this).data("ui-draggable"),n=this;e.each(s.sortables,function(){var a=!1,o=this;this.instance.positionAbs=s.positionAbs,this.instance.helperProportions=s.helperProportions,this.instance.offset.click=s.offset.click,this.instance._intersectsWith(this.instance.containerCache)&&(a=!0,e.each(s.sortables,function(){return this.instance.positionAbs=s.positionAbs,this.instance.helperProportions=s.helperProportions,this.instance.offset.click=s.offset.click,this!==o&&this.instance._intersectsWith(this.instance.containerCache)&&e.contains(o.instance.element[0],this.instance.element[0])&&(a=!1),a})),a?(this.instance.isOver||(this.instance.isOver=1,this.instance.currentItem=e(n).clone().removeAttr("id").appendTo(this.instance.element).data("ui-sortable-item",!0),this.instance.options._helper=this.instance.options.helper,this.instance.options.helper=function(){return i.helper[0]},t.target=this.instance.currentItem[0],this.instance._mouseCapture(t,!0),this.instance._mouseStart(t,!0,!0),this.instance.offset.click.top=s.offset.click.top,this.instance.offset.click.left=s.offset.click.left,this.instance.offset.parent.left-=s.offset.parent.left-this.instance.offset.parent.left,this.instance.offset.parent.top-=s.offset.parent.top-this.instance.offset.parent.top,s._trigger("toSortable",t),s.dropped=this.instance.element,s.currentItem=s.element,this.instance.fromOutside=s),this.instance.currentItem&&this.instance._mouseDrag(t)):this.instance.isOver&&(this.instance.isOver=0,this.instance.cancelHelperRemoval=!0,this.instance.options.revert=!1,this.instance._trigger("out",t,this.instance._uiHash(this.instance)),this.instance._mouseStop(t,!0),this.instance.options.helper=this.instance.options._helper,this.instance.currentItem.remove(),this.instance.placeholder&&this.instance.placeholder.remove(),s._trigger("fromSortable",t),s.dropped=!1)})}}),e.ui.plugin.add("draggable","cursor",{start:function(){var t=e("body"),i=e(this).data("ui-draggable").options;t.css("cursor")&&(i._cursor=t.css("cursor")),t.css("cursor",i.cursor)},stop:function(){var t=e(this).data("ui-draggable").options;t._cursor&&e("body").css("cursor",t._cursor)}}),e.ui.plugin.add("draggable","opacity",{start:function(t,i){var s=e(i.helper),n=e(this).data("ui-draggable").options;s.css("opacity")&&(n._opacity=s.css("opacity")),s.css("opacity",n.opacity)},stop:function(t,i){var s=e(this).data("ui-draggable").options;s._opacity&&e(i.helper).css("opacity",s._opacity)}}),e.ui.plugin.add("draggable","scroll",{start:function(){var t=e(this).data("ui-draggable");t.scrollParent[0]!==document&&"HTML"!==t.scrollParent[0].tagName&&(t.overflowOffset=t.scrollParent.offset())},drag:function(t){var i=e(this).data("ui-draggable"),s=i.options,n=!1;i.scrollParent[0]!==document&&"HTML"!==i.scrollParent[0].tagName?(s.axis&&"x"===s.axis||(i.overflowOffset.top+i.scrollParent[0].offsetHeight-t.pageY<s.scrollSensitivity?i.scrollParent[0].scrollTop=n=i.scrollParent[0].scrollTop+s.scrollSpeed:t.pageY-i.overflowOffset.top<s.scrollSensitivity&&(i.scrollParent[0].scrollTop=n=i.scrollParent[0].scrollTop-s.scrollSpeed)),s.axis&&"y"===s.axis||(i.overflowOffset.left+i.scrollParent[0].offsetWidth-t.pageX<s.scrollSensitivity?i.scrollParent[0].scrollLeft=n=i.scrollParent[0].scrollLeft+s.scrollSpeed:t.pageX-i.overflowOffset.left<s.scrollSensitivity&&(i.scrollParent[0].scrollLeft=n=i.scrollParent[0].scrollLeft-s.scrollSpeed))):(s.axis&&"x"===s.axis||(t.pageY-e(document).scrollTop()<s.scrollSensitivity?n=e(document).scrollTop(e(document).scrollTop()-s.scrollSpeed):e(window).height()-(t.pageY-e(document).scrollTop())<s.scrollSensitivity&&(n=e(document).scrollTop(e(document).scrollTop()+s.scrollSpeed))),s.axis&&"y"===s.axis||(t.pageX-e(document).scrollLeft()<s.scrollSensitivity?n=e(document).scrollLeft(e(document).scrollLeft()-s.scrollSpeed):e(window).width()-(t.pageX-e(document).scrollLeft())<s.scrollSensitivity&&(n=e(document).scrollLeft(e(document).scrollLeft()+s.scrollSpeed)))),n!==!1&&e.ui.ddmanager&&!s.dropBehaviour&&e.ui.ddmanager.prepareOffsets(i,t)}}),e.ui.plugin.add("draggable","snap",{start:function(){var t=e(this).data("ui-draggable"),i=t.options;t.snapElements=[],e(i.snap.constructor!==String?i.snap.items||":data(ui-draggable)":i.snap).each(function(){var i=e(this),s=i.offset();this!==t.element[0]&&t.snapElements.push({item:this,width:i.outerWidth(),height:i.outerHeight(),top:s.top,left:s.left})})},drag:function(t,i){var s,n,a,o,r,h,l,u,c,d,p=e(this).data("ui-draggable"),f=p.options,m=f.snapTolerance,g=i.offset.left,v=g+p.helperProportions.width,b=i.offset.top,y=b+p.helperProportions.height;for(c=p.snapElements.length-1;c>=0;c--)r=p.snapElements[c].left,h=r+p.snapElements[c].width,l=p.snapElements[c].top,u=l+p.snapElements[c].height,r-m>v||g>h+m||l-m>y||b>u+m||!e.contains(p.snapElements[c].item.ownerDocument,p.snapElements[c].item)?(p.snapElements[c].snapping&&p.options.snap.release&&p.options.snap.release.call(p.element,t,e.extend(p._uiHash(),{snapItem:p.snapElements[c].item})),p.snapElements[c].snapping=!1):("inner"!==f.snapMode&&(s=m>=Math.abs(l-y),n=m>=Math.abs(u-b),a=m>=Math.abs(r-v),o=m>=Math.abs(h-g),s&&(i.position.top=p._convertPositionTo("relative",{top:l-p.helperProportions.height,left:0}).top-p.margins.top),n&&(i.position.top=p._convertPositionTo("relative",{top:u,left:0}).top-p.margins.top),a&&(i.position.left=p._convertPositionTo("relative",{top:0,left:r-p.helperProportions.width}).left-p.margins.left),o&&(i.position.left=p._convertPositionTo("relative",{top:0,left:h}).left-p.margins.left)),d=s||n||a||o,"outer"!==f.snapMode&&(s=m>=Math.abs(l-b),n=m>=Math.abs(u-y),a=m>=Math.abs(r-g),o=m>=Math.abs(h-v),s&&(i.position.top=p._convertPositionTo("relative",{top:l,left:0}).top-p.margins.top),n&&(i.position.top=p._convertPositionTo("relative",{top:u-p.helperProportions.height,left:0}).top-p.margins.top),a&&(i.position.left=p._convertPositionTo("relative",{top:0,left:r}).left-p.margins.left),o&&(i.position.left=p._convertPositionTo("relative",{top:0,left:h-p.helperProportions.width}).left-p.margins.left)),!p.snapElements[c].snapping&&(s||n||a||o||d)&&p.options.snap.snap&&p.options.snap.snap.call(p.element,t,e.extend(p._uiHash(),{snapItem:p.snapElements[c].item})),p.snapElements[c].snapping=s||n||a||o||d)}}),e.ui.plugin.add("draggable","stack",{start:function(){var t,i=this.data("ui-draggable").options,s=e.makeArray(e(i.stack)).sort(function(t,i){return(parseInt(e(t).css("zIndex"),10)||0)-(parseInt(e(i).css("zIndex"),10)||0)});s.length&&(t=parseInt(e(s[0]).css("zIndex"),10)||0,e(s).each(function(i){e(this).css("zIndex",t+i)}),this.css("zIndex",t+s.length))}}),e.ui.plugin.add("draggable","zIndex",{start:function(t,i){var s=e(i.helper),n=e(this).data("ui-draggable").options;s.css("zIndex")&&(n._zIndex=s.css("zIndex")),s.css("zIndex",n.zIndex)},stop:function(t,i){var s=e(this).data("ui-draggable").options;s._zIndex&&e(i.helper).css("zIndex",s._zIndex)}})})(jQuery);
/*! jQuery UI - v1.10.3 - 2013-05-03
 * http://jqueryui.com
 * Copyright 2013 jQuery Foundation and other contributors; Licensed MIT */
(function(e){function t(e){return parseInt(e,10)||0}function i(e){return!isNaN(parseInt(e,10))}e.widget("ui.resizable",e.ui.mouse,{version:"1.10.3",widgetEventPrefix:"resize",options:{alsoResize:!1,animate:!1,animateDuration:"slow",animateEasing:"swing",aspectRatio:!1,autoHide:!1,containment:!1,ghost:!1,grid:!1,handles:"e,s,se",helper:!1,maxHeight:null,maxWidth:null,minHeight:10,minWidth:10,zIndex:90,resize:null,start:null,stop:null},_create:function(){var t,i,s,n,a,o=this,r=this.options;if(this.element.addClass("ui-resizable"),e.extend(this,{_aspectRatio:!!r.aspectRatio,aspectRatio:r.aspectRatio,originalElement:this.element,_proportionallyResizeElements:[],_helper:r.helper||r.ghost||r.animate?r.helper||"ui-resizable-helper":null}),this.element[0].nodeName.match(/canvas|textarea|input|select|button|img/i)&&(this.element.wrap(e("<div class='ui-wrapper' style='overflow: hidden;'></div>").css({position:this.element.css("position"),width:this.element.outerWidth(),height:this.element.outerHeight(),top:this.element.css("top"),left:this.element.css("left")})),this.element=this.element.parent().data("ui-resizable",this.element.data("ui-resizable")),this.elementIsWrapper=!0,this.element.css({marginLeft:this.originalElement.css("marginLeft"),marginTop:this.originalElement.css("marginTop"),marginRight:this.originalElement.css("marginRight"),marginBottom:this.originalElement.css("marginBottom")}),this.originalElement.css({marginLeft:0,marginTop:0,marginRight:0,marginBottom:0}),this.originalResizeStyle=this.originalElement.css("resize"),this.originalElement.css("resize","none"),this._proportionallyResizeElements.push(this.originalElement.css({position:"static",zoom:1,display:"block"})),this.originalElement.css({margin:this.originalElement.css("margin")}),this._proportionallyResize()),this.handles=r.handles||(e(".ui-resizable-handle",this.element).length?{n:".ui-resizable-n",e:".ui-resizable-e",s:".ui-resizable-s",w:".ui-resizable-w",se:".ui-resizable-se",sw:".ui-resizable-sw",ne:".ui-resizable-ne",nw:".ui-resizable-nw"}:"e,s,se"),this.handles.constructor===String)for("all"===this.handles&&(this.handles="n,e,s,w,se,sw,ne,nw"),t=this.handles.split(","),this.handles={},i=0;t.length>i;i++)s=e.trim(t[i]),a="ui-resizable-"+s,n=e("<div class='ui-resizable-handle "+a+"'></div>"),n.css({zIndex:r.zIndex}),"se"===s&&n.addClass("ui-icon ui-icon-gripsmall-diagonal-se"),this.handles[s]=".ui-resizable-"+s,this.element.append(n);this._renderAxis=function(t){var i,s,n,a;t=t||this.element;for(i in this.handles)this.handles[i].constructor===String&&(this.handles[i]=e(this.handles[i],this.element).show()),this.elementIsWrapper&&this.originalElement[0].nodeName.match(/textarea|input|select|button/i)&&(s=e(this.handles[i],this.element),a=/sw|ne|nw|se|n|s/.test(i)?s.outerHeight():s.outerWidth(),n=["padding",/ne|nw|n/.test(i)?"Top":/se|sw|s/.test(i)?"Bottom":/^e$/.test(i)?"Right":"Left"].join(""),t.css(n,a),this._proportionallyResize()),e(this.handles[i]).length},this._renderAxis(this.element),this._handles=e(".ui-resizable-handle",this.element).disableSelection(),this._handles.mouseover(function(){o.resizing||(this.className&&(n=this.className.match(/ui-resizable-(se|sw|ne|nw|n|e|s|w)/i)),o.axis=n&&n[1]?n[1]:"se")}),r.autoHide&&(this._handles.hide(),e(this.element).addClass("ui-resizable-autohide").mouseenter(function(){r.disabled||(e(this).removeClass("ui-resizable-autohide"),o._handles.show())}).mouseleave(function(){r.disabled||o.resizing||(e(this).addClass("ui-resizable-autohide"),o._handles.hide())})),this._mouseInit()},_destroy:function(){this._mouseDestroy();var t,i=function(t){e(t).removeClass("ui-resizable ui-resizable-disabled ui-resizable-resizing").removeData("resizable").removeData("ui-resizable").unbind(".resizable").find(".ui-resizable-handle").remove()};return this.elementIsWrapper&&(i(this.element),t=this.element,this.originalElement.css({position:t.css("position"),width:t.outerWidth(),height:t.outerHeight(),top:t.css("top"),left:t.css("left")}).insertAfter(t),t.remove()),this.originalElement.css("resize",this.originalResizeStyle),i(this.originalElement),this},_mouseCapture:function(t){var i,s,n=!1;for(i in this.handles)s=e(this.handles[i])[0],(s===t.target||e.contains(s,t.target))&&(n=!0);return!this.options.disabled&&n},_mouseStart:function(i){var s,n,a,o=this.options,r=this.element.position(),h=this.element;return this.resizing=!0,/absolute/.test(h.css("position"))?h.css({position:"absolute",top:h.css("top"),left:h.css("left")}):h.is(".ui-draggable")&&h.css({position:"absolute",top:r.top,left:r.left}),this._renderProxy(),s=t(this.helper.css("left")),n=t(this.helper.css("top")),o.containment&&(s+=e(o.containment).scrollLeft()||0,n+=e(o.containment).scrollTop()||0),this.offset=this.helper.offset(),this.position={left:s,top:n},this.size=this._helper?{width:h.outerWidth(),height:h.outerHeight()}:{width:h.width(),height:h.height()},this.originalSize=this._helper?{width:h.outerWidth(),height:h.outerHeight()}:{width:h.width(),height:h.height()},this.originalPosition={left:s,top:n},this.sizeDiff={width:h.outerWidth()-h.width(),height:h.outerHeight()-h.height()},this.originalMousePosition={left:i.pageX,top:i.pageY},this.aspectRatio="number"==typeof o.aspectRatio?o.aspectRatio:this.originalSize.width/this.originalSize.height||1,a=e(".ui-resizable-"+this.axis).css("cursor"),e("body").css("cursor","auto"===a?this.axis+"-resize":a),h.addClass("ui-resizable-resizing"),this._propagate("start",i),!0},_mouseDrag:function(t){var i,s=this.helper,n={},a=this.originalMousePosition,o=this.axis,r=this.position.top,h=this.position.left,l=this.size.width,u=this.size.height,c=t.pageX-a.left||0,d=t.pageY-a.top||0,p=this._change[o];return p?(i=p.apply(this,[t,c,d]),this._updateVirtualBoundaries(t.shiftKey),(this._aspectRatio||t.shiftKey)&&(i=this._updateRatio(i,t)),i=this._respectSize(i,t),this._updateCache(i),this._propagate("resize",t),this.position.top!==r&&(n.top=this.position.top+"px"),this.position.left!==h&&(n.left=this.position.left+"px"),this.size.width!==l&&(n.width=this.size.width+"px"),this.size.height!==u&&(n.height=this.size.height+"px"),s.css(n),!this._helper&&this._proportionallyResizeElements.length&&this._proportionallyResize(),e.isEmptyObject(n)||this._trigger("resize",t,this.ui()),!1):!1},_mouseStop:function(t){this.resizing=!1;var i,s,n,a,o,r,h,l=this.options,u=this;return this._helper&&(i=this._proportionallyResizeElements,s=i.length&&/textarea/i.test(i[0].nodeName),n=s&&e.ui.hasScroll(i[0],"left")?0:u.sizeDiff.height,a=s?0:u.sizeDiff.width,o={width:u.helper.width()-a,height:u.helper.height()-n},r=parseInt(u.element.css("left"),10)+(u.position.left-u.originalPosition.left)||null,h=parseInt(u.element.css("top"),10)+(u.position.top-u.originalPosition.top)||null,l.animate||this.element.css(e.extend(o,{top:h,left:r})),u.helper.height(u.size.height),u.helper.width(u.size.width),this._helper&&!l.animate&&this._proportionallyResize()),e("body").css("cursor","auto"),this.element.removeClass("ui-resizable-resizing"),this._propagate("stop",t),this._helper&&this.helper.remove(),!1},_updateVirtualBoundaries:function(e){var t,s,n,a,o,r=this.options;o={minWidth:i(r.minWidth)?r.minWidth:0,maxWidth:i(r.maxWidth)?r.maxWidth:1/0,minHeight:i(r.minHeight)?r.minHeight:0,maxHeight:i(r.maxHeight)?r.maxHeight:1/0},(this._aspectRatio||e)&&(t=o.minHeight*this.aspectRatio,n=o.minWidth/this.aspectRatio,s=o.maxHeight*this.aspectRatio,a=o.maxWidth/this.aspectRatio,t>o.minWidth&&(o.minWidth=t),n>o.minHeight&&(o.minHeight=n),o.maxWidth>s&&(o.maxWidth=s),o.maxHeight>a&&(o.maxHeight=a)),this._vBoundaries=o},_updateCache:function(e){this.offset=this.helper.offset(),i(e.left)&&(this.position.left=e.left),i(e.top)&&(this.position.top=e.top),i(e.height)&&(this.size.height=e.height),i(e.width)&&(this.size.width=e.width)},_updateRatio:function(e){var t=this.position,s=this.size,n=this.axis;return i(e.height)?e.width=e.height*this.aspectRatio:i(e.width)&&(e.height=e.width/this.aspectRatio),"sw"===n&&(e.left=t.left+(s.width-e.width),e.top=null),"nw"===n&&(e.top=t.top+(s.height-e.height),e.left=t.left+(s.width-e.width)),e},_respectSize:function(e){var t=this._vBoundaries,s=this.axis,n=i(e.width)&&t.maxWidth&&t.maxWidth<e.width,a=i(e.height)&&t.maxHeight&&t.maxHeight<e.height,o=i(e.width)&&t.minWidth&&t.minWidth>e.width,r=i(e.height)&&t.minHeight&&t.minHeight>e.height,h=this.originalPosition.left+this.originalSize.width,l=this.position.top+this.size.height,u=/sw|nw|w/.test(s),c=/nw|ne|n/.test(s);return o&&(e.width=t.minWidth),r&&(e.height=t.minHeight),n&&(e.width=t.maxWidth),a&&(e.height=t.maxHeight),o&&u&&(e.left=h-t.minWidth),n&&u&&(e.left=h-t.maxWidth),r&&c&&(e.top=l-t.minHeight),a&&c&&(e.top=l-t.maxHeight),e.width||e.height||e.left||!e.top?e.width||e.height||e.top||!e.left||(e.left=null):e.top=null,e},_proportionallyResize:function(){if(this._proportionallyResizeElements.length){var e,t,i,s,n,a=this.helper||this.element;for(e=0;this._proportionallyResizeElements.length>e;e++){if(n=this._proportionallyResizeElements[e],!this.borderDif)for(this.borderDif=[],i=[n.css("borderTopWidth"),n.css("borderRightWidth"),n.css("borderBottomWidth"),n.css("borderLeftWidth")],s=[n.css("paddingTop"),n.css("paddingRight"),n.css("paddingBottom"),n.css("paddingLeft")],t=0;i.length>t;t++)this.borderDif[t]=(parseInt(i[t],10)||0)+(parseInt(s[t],10)||0);n.css({height:a.height()-this.borderDif[0]-this.borderDif[2]||0,width:a.width()-this.borderDif[1]-this.borderDif[3]||0})}}},_renderProxy:function(){var t=this.element,i=this.options;this.elementOffset=t.offset(),this._helper?(this.helper=this.helper||e("<div style='overflow:hidden;'></div>"),this.helper.addClass(this._helper).css({width:this.element.outerWidth()-1,height:this.element.outerHeight()-1,position:"absolute",left:this.elementOffset.left+"px",top:this.elementOffset.top+"px",zIndex:++i.zIndex}),this.helper.appendTo("body").disableSelection()):this.helper=this.element},_change:{e:function(e,t){return{width:this.originalSize.width+t}},w:function(e,t){var i=this.originalSize,s=this.originalPosition;return{left:s.left+t,width:i.width-t}},n:function(e,t,i){var s=this.originalSize,n=this.originalPosition;return{top:n.top+i,height:s.height-i}},s:function(e,t,i){return{height:this.originalSize.height+i}},se:function(t,i,s){return e.extend(this._change.s.apply(this,arguments),this._change.e.apply(this,[t,i,s]))},sw:function(t,i,s){return e.extend(this._change.s.apply(this,arguments),this._change.w.apply(this,[t,i,s]))},ne:function(t,i,s){return e.extend(this._change.n.apply(this,arguments),this._change.e.apply(this,[t,i,s]))},nw:function(t,i,s){return e.extend(this._change.n.apply(this,arguments),this._change.w.apply(this,[t,i,s]))}},_propagate:function(t,i){e.ui.plugin.call(this,t,[i,this.ui()]),"resize"!==t&&this._trigger(t,i,this.ui())},plugins:{},ui:function(){return{originalElement:this.originalElement,element:this.element,helper:this.helper,position:this.position,size:this.size,originalSize:this.originalSize,originalPosition:this.originalPosition}}}),e.ui.plugin.add("resizable","animate",{stop:function(t){var i=e(this).data("ui-resizable"),s=i.options,n=i._proportionallyResizeElements,a=n.length&&/textarea/i.test(n[0].nodeName),o=a&&e.ui.hasScroll(n[0],"left")?0:i.sizeDiff.height,r=a?0:i.sizeDiff.width,h={width:i.size.width-r,height:i.size.height-o},l=parseInt(i.element.css("left"),10)+(i.position.left-i.originalPosition.left)||null,u=parseInt(i.element.css("top"),10)+(i.position.top-i.originalPosition.top)||null;i.element.animate(e.extend(h,u&&l?{top:u,left:l}:{}),{duration:s.animateDuration,easing:s.animateEasing,step:function(){var s={width:parseInt(i.element.css("width"),10),height:parseInt(i.element.css("height"),10),top:parseInt(i.element.css("top"),10),left:parseInt(i.element.css("left"),10)};n&&n.length&&e(n[0]).css({width:s.width,height:s.height}),i._updateCache(s),i._propagate("resize",t)}})}}),e.ui.plugin.add("resizable","containment",{start:function(){var i,s,n,a,o,r,h,l=e(this).data("ui-resizable"),u=l.options,c=l.element,d=u.containment,p=d instanceof e?d.get(0):/parent/.test(d)?c.parent().get(0):d;p&&(l.containerElement=e(p),/document/.test(d)||d===document?(l.containerOffset={left:0,top:0},l.containerPosition={left:0,top:0},l.parentData={element:e(document),left:0,top:0,width:e(document).width(),height:e(document).height()||document.body.parentNode.scrollHeight}):(i=e(p),s=[],e(["Top","Right","Left","Bottom"]).each(function(e,n){s[e]=t(i.css("padding"+n))}),l.containerOffset=i.offset(),l.containerPosition=i.position(),l.containerSize={height:i.innerHeight()-s[3],width:i.innerWidth()-s[1]},n=l.containerOffset,a=l.containerSize.height,o=l.containerSize.width,r=e.ui.hasScroll(p,"left")?p.scrollWidth:o,h=e.ui.hasScroll(p)?p.scrollHeight:a,l.parentData={element:p,left:n.left,top:n.top,width:r,height:h}))},resize:function(t){var i,s,n,a,o=e(this).data("ui-resizable"),r=o.options,h=o.containerOffset,l=o.position,u=o._aspectRatio||t.shiftKey,c={top:0,left:0},d=o.containerElement;d[0]!==document&&/static/.test(d.css("position"))&&(c=h),l.left<(o._helper?h.left:0)&&(o.size.width=o.size.width+(o._helper?o.position.left-h.left:o.position.left-c.left),u&&(o.size.height=o.size.width/o.aspectRatio),o.position.left=r.helper?h.left:0),l.top<(o._helper?h.top:0)&&(o.size.height=o.size.height+(o._helper?o.position.top-h.top:o.position.top),u&&(o.size.width=o.size.height*o.aspectRatio),o.position.top=o._helper?h.top:0),o.offset.left=o.parentData.left+o.position.left,o.offset.top=o.parentData.top+o.position.top,i=Math.abs((o._helper?o.offset.left-c.left:o.offset.left-c.left)+o.sizeDiff.width),s=Math.abs((o._helper?o.offset.top-c.top:o.offset.top-h.top)+o.sizeDiff.height),n=o.containerElement.get(0)===o.element.parent().get(0),a=/relative|absolute/.test(o.containerElement.css("position")),n&&a&&(i-=o.parentData.left),i+o.size.width>=o.parentData.width&&(o.size.width=o.parentData.width-i,u&&(o.size.height=o.size.width/o.aspectRatio)),s+o.size.height>=o.parentData.height&&(o.size.height=o.parentData.height-s,u&&(o.size.width=o.size.height*o.aspectRatio))},stop:function(){var t=e(this).data("ui-resizable"),i=t.options,s=t.containerOffset,n=t.containerPosition,a=t.containerElement,o=e(t.helper),r=o.offset(),h=o.outerWidth()-t.sizeDiff.width,l=o.outerHeight()-t.sizeDiff.height;t._helper&&!i.animate&&/relative/.test(a.css("position"))&&e(this).css({left:r.left-n.left-s.left,width:h,height:l}),t._helper&&!i.animate&&/static/.test(a.css("position"))&&e(this).css({left:r.left-n.left-s.left,width:h,height:l})}}),e.ui.plugin.add("resizable","alsoResize",{start:function(){var t=e(this).data("ui-resizable"),i=t.options,s=function(t){e(t).each(function(){var t=e(this);t.data("ui-resizable-alsoresize",{width:parseInt(t.width(),10),height:parseInt(t.height(),10),left:parseInt(t.css("left"),10),top:parseInt(t.css("top"),10)})})};"object"!=typeof i.alsoResize||i.alsoResize.parentNode?s(i.alsoResize):i.alsoResize.length?(i.alsoResize=i.alsoResize[0],s(i.alsoResize)):e.each(i.alsoResize,function(e){s(e)})},resize:function(t,i){var s=e(this).data("ui-resizable"),n=s.options,a=s.originalSize,o=s.originalPosition,r={height:s.size.height-a.height||0,width:s.size.width-a.width||0,top:s.position.top-o.top||0,left:s.position.left-o.left||0},h=function(t,s){e(t).each(function(){var t=e(this),n=e(this).data("ui-resizable-alsoresize"),a={},o=s&&s.length?s:t.parents(i.originalElement[0]).length?["width","height"]:["width","height","top","left"];e.each(o,function(e,t){var i=(n[t]||0)+(r[t]||0);i&&i>=0&&(a[t]=i||null)}),t.css(a)})};"object"!=typeof n.alsoResize||n.alsoResize.nodeType?h(n.alsoResize):e.each(n.alsoResize,function(e,t){h(e,t)})},stop:function(){e(this).removeData("resizable-alsoresize")}}),e.ui.plugin.add("resizable","ghost",{start:function(){var t=e(this).data("ui-resizable"),i=t.options,s=t.size;t.ghost=t.originalElement.clone(),t.ghost.css({opacity:.25,display:"block",position:"relative",height:s.height,width:s.width,margin:0,left:0,top:0}).addClass("ui-resizable-ghost").addClass("string"==typeof i.ghost?i.ghost:""),t.ghost.appendTo(t.helper)},resize:function(){var t=e(this).data("ui-resizable");t.ghost&&t.ghost.css({position:"relative",height:t.size.height,width:t.size.width})},stop:function(){var t=e(this).data("ui-resizable");t.ghost&&t.helper&&t.helper.get(0).removeChild(t.ghost.get(0))}}),e.ui.plugin.add("resizable","grid",{resize:function(){var t=e(this).data("ui-resizable"),i=t.options,s=t.size,n=t.originalSize,a=t.originalPosition,o=t.axis,r="number"==typeof i.grid?[i.grid,i.grid]:i.grid,h=r[0]||1,l=r[1]||1,u=Math.round((s.width-n.width)/h)*h,c=Math.round((s.height-n.height)/l)*l,d=n.width+u,p=n.height+c,f=i.maxWidth&&d>i.maxWidth,m=i.maxHeight&&p>i.maxHeight,g=i.minWidth&&i.minWidth>d,v=i.minHeight&&i.minHeight>p;i.grid=r,g&&(d+=h),v&&(p+=l),f&&(d-=h),m&&(p-=l),/^(se|s|e)$/.test(o)?(t.size.width=d,t.size.height=p):/^(ne)$/.test(o)?(t.size.width=d,t.size.height=p,t.position.top=a.top-c):/^(sw)$/.test(o)?(t.size.width=d,t.size.height=p,t.position.left=a.left-u):(t.size.width=d,t.size.height=p,t.position.top=a.top-c,t.position.left=a.left-u)}})})(jQuery);

(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define([], function () {
            return (root.returnExportsGlobal = factory());
        });
    } else if (typeof exports === 'object') {
        // Node. Does not work with strict CommonJS, but
        // only CommonJS-like enviroments that support module.exports,
        // like Node.
        module.exports = factory();
    } else {
        root['Chartist.plugins.tooltips'] = factory();
    }
}(this, function () {

    /**
     * Chartist.js plugin to display a data label on top of the points in a line chart.
     *
     */
    /* global Chartist */
    (function(window, document, Chartist) {
        'use strict';

        var defaultOptions = {
            prefix: undefined,
            suffix: undefined
            // showTooltips: true,
            // tooltipEvents: ['mousemove', 'touchstart', 'touchmove'],
            // labelClass: 'ct-label',
            // labelOffset: {
            //   x: 0,
            //   y: -10
            // },
            // textAnchor: 'middle'
        };

        Chartist.plugins = Chartist.plugins || {};
        Chartist.plugins.tooltip = function(options) {

            options = Chartist.extend({}, defaultOptions, options);

            return function tooltip(chart) {
                var tooltipSelector = '.ct-point';
                if (chart instanceof Chartist.Bar) {
                    tooltipSelector = '.ct-bar';
                } else if (chart instanceof Chartist.Pie) {
                    tooltipSelector = '.ct-slice';
                }

                var $chart = $(chart.container);
                var $toolTip = $chart
                    .append('<div class="chartist-tooltip"></div>')
                    .find('.chartist-tooltip')
                    .hide();

                $chart.on('mouseenter', tooltipSelector, function() {
                    var $point = $(this);
                    var tooltipText = '';

                    if ($point.attr('ct:meta')) {
                        tooltipText += $point.attr('ct:meta') + ': ';
                    } else {
                        // For Pie Charts also take the labels into account
                        // Could add support for more charts here as well!
                        if (chart instanceof Chartist.Pie) {
                            var label = $point.next('.ct-label');
                            if (label.length > 0) {
                                tooltipText += label.text() + ': ';
                            }
                        }
                    }

                    var value = $point.attr('ct:value');
                    if (options.prefix !== undefined && options.prefix) {
                        value = options.prefix + value.replace(/(\d)(?=(\d{3})+(?:\.\d+)?$)/g, "$1,");
                    }
                    tooltipText += value;

                    if (options.suffix !== undefined && options.suffix) {
                        tooltipText += options.suffix;
                    }

                    $toolTip.html(tooltipText).show();
                });

                $chart.on('mouseleave', tooltipSelector, function() {
                    $toolTip.hide();
                });

                $chart.on('mousemove', function(event) {
                    $toolTip.css({
                        left: (event.offsetX || event.originalEvent.layerX) - $toolTip.width() / 2 + 5,
                        top: (event.offsetY || event.originalEvent.layerY) - $toolTip.height() - 10
                    });
                });
            }
        };

    }(window, document, Chartist));

    return Chartist.plugins.tooltips;

}));

/*! TableTools 2.2.1
 * 2009-2014 SpryMedia Ltd - datatables.net/license
 *
 * ZeroClipboard 1.0.4
 * Author: Joseph Huckaby - MIT licensed
 */

/**
 * @summary     TableTools
 * @description Tools and buttons for DataTables
 * @version     2.2.1
 * @file        dataTables.tableTools.js
 * @author      SpryMedia Ltd (www.sprymedia.co.uk)
 * @contact     www.sprymedia.co.uk/contact
 * @copyright   Copyright 2009-2014 SpryMedia Ltd.
 *
 * This source file is free software, available under the following license:
 *   MIT license - http://datatables.net/license/mit
 *
 * This source file is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE. See the license files for details.
 *
 * For details please refer to: http://www.datatables.net
 */


/* Global scope for TableTools for backwards compatibility.
 * Will be removed in 2.3
 */
var TableTools;

(function(window, document, undefined) {


    var factory = function( $, DataTable ) {
        "use strict";


//include ZeroClipboard.js
        /* ZeroClipboard 1.0.4
         * Author: Joseph Huckaby
         */

        var ZeroClipboard_TableTools = {

            version: "1.0.4-TableTools2",
            clients: {}, // registered upload clients on page, indexed by id
            moviePath: '', // URL to movie
            nextId: 1, // ID of next movie

            $: function(thingy) {
                // simple DOM lookup utility function
                if (typeof(thingy) == 'string') {
                    thingy = document.getElementById(thingy);
                }
                if (!thingy.addClass) {
                    // extend element with a few useful methods
                    thingy.hide = function() { this.style.display = 'none'; };
                    thingy.show = function() { this.style.display = ''; };
                    thingy.addClass = function(name) { this.removeClass(name); this.className += ' ' + name; };
                    thingy.removeClass = function(name) {
                        this.className = this.className.replace( new RegExp("\\s*" + name + "\\s*"), " ").replace(/^\s+/, '').replace(/\s+$/, '');
                    };
                    thingy.hasClass = function(name) {
                        return !!this.className.match( new RegExp("\\s*" + name + "\\s*") );
                    };
                }
                return thingy;
            },

            setMoviePath: function(path) {
                // set path to ZeroClipboard.swf
                this.moviePath = path;
            },

            dispatch: function(id, eventName, args) {
                // receive event from flash movie, send to client
                var client = this.clients[id];
                if (client) {
                    client.receiveEvent(eventName, args);
                }
            },

            register: function(id, client) {
                // register new client to receive events
                this.clients[id] = client;
            },

            getDOMObjectPosition: function(obj) {
                // get absolute coordinates for dom element
                var info = {
                    left: 0,
                    top: 0,
                    width: obj.width ? obj.width : obj.offsetWidth,
                    height: obj.height ? obj.height : obj.offsetHeight
                };

                if ( obj.style.width !== "" ) {
                    info.width = obj.style.width.replace("px","");
                }

                if ( obj.style.height !== "" ) {
                    info.height = obj.style.height.replace("px","");
                }

                while (obj) {
                    info.left += obj.offsetLeft;
                    info.top += obj.offsetTop;
                    obj = obj.offsetParent;
                }

                return info;
            },

            Client: function(elem) {
                // constructor for new simple upload client
                this.handlers = {};

                // unique ID
                this.id = ZeroClipboard_TableTools.nextId++;
                this.movieId = 'ZeroClipboard_TableToolsMovie_' + this.id;

                // register client with singleton to receive flash events
                ZeroClipboard_TableTools.register(this.id, this);

                // create movie
                if (elem) {
                    this.glue(elem);
                }
            }
        };

        ZeroClipboard_TableTools.Client.prototype = {

            id: 0, // unique ID for us
            ready: false, // whether movie is ready to receive events or not
            movie: null, // reference to movie object
            clipText: '', // text to copy to clipboard
            fileName: '', // default file save name
            action: 'copy', // action to perform
            handCursorEnabled: true, // whether to show hand cursor, or default pointer cursor
            cssEffects: true, // enable CSS mouse effects on dom container
            handlers: null, // user event handlers
            sized: false,

            glue: function(elem, title) {
                // glue to DOM element
                // elem can be ID or actual DOM element object
                this.domElement = ZeroClipboard_TableTools.$(elem);

                // float just above object, or zIndex 99 if dom element isn't set
                var zIndex = 99;
                if (this.domElement.style.zIndex) {
                    zIndex = parseInt(this.domElement.style.zIndex, 10) + 1;
                }

                // find X/Y position of domElement
                var box = ZeroClipboard_TableTools.getDOMObjectPosition(this.domElement);

                // create floating DIV above element
                this.div = document.createElement('div');
                var style = this.div.style;
                style.position = 'absolute';
                style.left = '0px';
                style.top = '0px';
                style.width = (box.width) + 'px';
                style.height = box.height + 'px';
                style.zIndex = zIndex;

                if ( typeof title != "undefined" && title !== "" ) {
                    this.div.title = title;
                }
                if ( box.width !== 0 && box.height !== 0 ) {
                    this.sized = true;
                }

                // style.backgroundColor = '#f00'; // debug
                if ( this.domElement ) {
                    this.domElement.appendChild(this.div);
                    this.div.innerHTML = this.getHTML( box.width, box.height ).replace(/&/g, '&amp;');
                }
            },

            positionElement: function() {
                var box = ZeroClipboard_TableTools.getDOMObjectPosition(this.domElement);
                var style = this.div.style;

                style.position = 'absolute';
                //style.left = (this.domElement.offsetLeft)+'px';
                //style.top = this.domElement.offsetTop+'px';
                style.width = box.width + 'px';
                style.height = box.height + 'px';

                if ( box.width !== 0 && box.height !== 0 ) {
                    this.sized = true;
                } else {
                    return;
                }

                var flash = this.div.childNodes[0];
                flash.width = box.width;
                flash.height = box.height;
            },

            getHTML: function(width, height) {
                // return HTML for movie
                var html = '';
                var flashvars = 'id=' + this.id +
                    '&width=' + width +
                    '&height=' + height;

                if (navigator.userAgent.match(/MSIE/)) {
                    // IE gets an OBJECT tag
                    var protocol = location.href.match(/^https/i) ? 'https://' : 'http://';
                    html += '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="'+protocol+'download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="'+width+'" height="'+height+'" id="'+this.movieId+'" align="middle"><param name="allowScriptAccess" value="always" /><param name="allowFullScreen" value="false" /><param name="movie" value="'+ZeroClipboard_TableTools.moviePath+'" /><param name="loop" value="false" /><param name="menu" value="false" /><param name="quality" value="best" /><param name="bgcolor" value="#ffffff" /><param name="flashvars" value="'+flashvars+'"/><param name="wmode" value="transparent"/></object>';
                }
                else {
                    // all other browsers get an EMBED tag
                    html += '<embed id="'+this.movieId+'" src="'+ZeroClipboard_TableTools.moviePath+'" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="'+width+'" height="'+height+'" name="'+this.movieId+'" align="middle" allowScriptAccess="always" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="'+flashvars+'" wmode="transparent" />';
                }
                return html;
            },

            hide: function() {
                // temporarily hide floater offscreen
                if (this.div) {
                    this.div.style.left = '-2000px';
                }
            },

            show: function() {
                // show ourselves after a call to hide()
                this.reposition();
            },

            destroy: function() {
                // destroy control and floater
                if (this.domElement && this.div) {
                    this.hide();
                    this.div.innerHTML = '';

                    var body = document.getElementsByTagName('body')[0];
                    try { body.removeChild( this.div ); } catch(e) {}

                    this.domElement = null;
                    this.div = null;
                }
            },

            reposition: function(elem) {
                // reposition our floating div, optionally to new container
                // warning: container CANNOT change size, only position
                if (elem) {
                    this.domElement = ZeroClipboard_TableTools.$(elem);
                    if (!this.domElement) {
                        this.hide();
                    }
                }

                if (this.domElement && this.div) {
                    var box = ZeroClipboard_TableTools.getDOMObjectPosition(this.domElement);
                    var style = this.div.style;
                    style.left = '' + box.left + 'px';
                    style.top = '' + box.top + 'px';
                }
            },

            clearText: function() {
                // clear the text to be copy / saved
                this.clipText = '';
                if (this.ready) {
                    this.movie.clearText();
                }
            },

            appendText: function(newText) {
                // append text to that which is to be copied / saved
                this.clipText += newText;
                if (this.ready) { this.movie.appendText(newText) ;}
            },

            setText: function(newText) {
                // set text to be copied to be copied / saved
                this.clipText = newText;
                if (this.ready) { this.movie.setText(newText) ;}
            },

            setCharSet: function(charSet) {
                // set the character set (UTF16LE or UTF8)
                this.charSet = charSet;
                if (this.ready) { this.movie.setCharSet(charSet) ;}
            },

            setBomInc: function(bomInc) {
                // set if the BOM should be included or not
                this.incBom = bomInc;
                if (this.ready) { this.movie.setBomInc(bomInc) ;}
            },

            setFileName: function(newText) {
                // set the file name
                this.fileName = newText;
                if (this.ready) {
                    this.movie.setFileName(newText);
                }
            },

            setAction: function(newText) {
                // set action (save or copy)
                this.action = newText;
                if (this.ready) {
                    this.movie.setAction(newText);
                }
            },

            addEventListener: function(eventName, func) {
                // add user event listener for event
                // event types: load, queueStart, fileStart, fileComplete, queueComplete, progress, error, cancel
                eventName = eventName.toString().toLowerCase().replace(/^on/, '');
                if (!this.handlers[eventName]) {
                    this.handlers[eventName] = [];
                }
                this.handlers[eventName].push(func);
            },

            setHandCursor: function(enabled) {
                // enable hand cursor (true), or default arrow cursor (false)
                this.handCursorEnabled = enabled;
                if (this.ready) {
                    this.movie.setHandCursor(enabled);
                }
            },

            setCSSEffects: function(enabled) {
                // enable or disable CSS effects on DOM container
                this.cssEffects = !!enabled;
            },

            receiveEvent: function(eventName, args) {
                var self;

                // receive event from flash
                eventName = eventName.toString().toLowerCase().replace(/^on/, '');

                // special behavior for certain events
                switch (eventName) {
                    case 'load':
                        // movie claims it is ready, but in IE this isn't always the case...
                        // bug fix: Cannot extend EMBED DOM elements in Firefox, must use traditional function
                        this.movie = document.getElementById(this.movieId);
                        if (!this.movie) {
                            self = this;
                            setTimeout( function() { self.receiveEvent('load', null); }, 1 );
                            return;
                        }

                        // firefox on pc needs a "kick" in order to set these in certain cases
                        if (!this.ready && navigator.userAgent.match(/Firefox/) && navigator.userAgent.match(/Windows/)) {
                            self = this;
                            setTimeout( function() { self.receiveEvent('load', null); }, 100 );
                            this.ready = true;
                            return;
                        }

                        this.ready = true;
                        this.movie.clearText();
                        this.movie.appendText( this.clipText );
                        this.movie.setFileName( this.fileName );
                        this.movie.setAction( this.action );
                        this.movie.setCharSet( this.charSet );
                        this.movie.setBomInc( this.incBom );
                        this.movie.setHandCursor( this.handCursorEnabled );
                        break;

                    case 'mouseover':
                        if (this.domElement && this.cssEffects) {
                            //this.domElement.addClass('hover');
                            if (this.recoverActive) {
                                this.domElement.addClass('active');
                            }
                        }
                        break;

                    case 'mouseout':
                        if (this.domElement && this.cssEffects) {
                            this.recoverActive = false;
                            if (this.domElement.hasClass('active')) {
                                this.domElement.removeClass('active');
                                this.recoverActive = true;
                            }
                            //this.domElement.removeClass('hover');
                        }
                        break;

                    case 'mousedown':
                        if (this.domElement && this.cssEffects) {
                            this.domElement.addClass('active');
                        }
                        break;

                    case 'mouseup':
                        if (this.domElement && this.cssEffects) {
                            this.domElement.removeClass('active');
                            this.recoverActive = false;
                        }
                        break;
                } // switch eventName

                if (this.handlers[eventName]) {
                    for (var idx = 0, len = this.handlers[eventName].length; idx < len; idx++) {
                        var func = this.handlers[eventName][idx];

                        if (typeof(func) == 'function') {
                            // actual function reference
                            func(this, args);
                        }
                        else if ((typeof(func) == 'object') && (func.length == 2)) {
                            // PHP style object + method, i.e. [myObject, 'myMethod']
                            func[0][ func[1] ](this, args);
                        }
                        else if (typeof(func) == 'string') {
                            // name of function
                            window[func](this, args);
                        }
                    } // foreach event handler defined
                } // user defined handler for event
            }

        };

// For the Flash binding to work, ZeroClipboard_TableTools must be on the global
// object list
        window.ZeroClipboard_TableTools = ZeroClipboard_TableTools;
//include TableTools.js
        /* TableTools
         * 2009-2014 SpryMedia Ltd - datatables.net/license
         */

        /*globals TableTools,ZeroClipboard_TableTools*/


        (function($, window, document) {

            /**
             * TableTools provides flexible buttons and other tools for a DataTables enhanced table
             * @class TableTools
             * @constructor
             * @param {Object} oDT DataTables instance. When using DataTables 1.10 this can
             *   also be a jQuery collection, jQuery selector, table node, DataTables API
             *   instance or DataTables settings object.
             * @param {Object} oOpts TableTools options
             * @param {String} oOpts.sSwfPath ZeroClipboard SWF path
             * @param {String} oOpts.sRowSelect Row selection options - 'none', 'single', 'multi' or 'os'
             * @param {Function} oOpts.fnPreRowSelect Callback function just prior to row selection
             * @param {Function} oOpts.fnRowSelected Callback function just after row selection
             * @param {Function} oOpts.fnRowDeselected Callback function when row is deselected
             * @param {Array} oOpts.aButtons List of buttons to be used
             */
            TableTools = function( oDT, oOpts )
            {
                /* Santiy check that we are a new instance */
                if ( ! this instanceof TableTools )
                {
                    alert( "Warning: TableTools must be initialised with the keyword 'new'" );
                }

                // In 1.10 we can use the API to get the settings object from a number of
                // sources
                var dtSettings = $.fn.dataTable.Api ?
                    new $.fn.dataTable.Api( oDT ).settings()[0] :
                    oDT.fnSettings();


                /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
                 * Public class variables
                 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

                /**
                 * @namespace Settings object which contains customisable information for TableTools instance
                 */
                this.s = {
                    /**
                     * Store 'this' so the instance can be retrieved from the settings object
                     * @property that
                     * @type	 object
                     * @default  this
                     */
                    "that": this,

                    /**
                     * DataTables settings objects
                     * @property dt
                     * @type	 object
                     * @default  <i>From the oDT init option</i>
                     */
                    "dt": dtSettings,

                    /**
                     * @namespace Print specific information
                     */
                    "print": {
                        /**
                         * DataTables draw 'start' point before the printing display was shown
                         *  @property saveStart
                         *  @type	 int
                         *  @default  -1
                         */
                        "saveStart": -1,

                        /**
                         * DataTables draw 'length' point before the printing display was shown
                         *  @property saveLength
                         *  @type	 int
                         *  @default  -1
                         */
                        "saveLength": -1,

                        /**
                         * Page scrolling point before the printing display was shown so it can be restored
                         *  @property saveScroll
                         *  @type	 int
                         *  @default  -1
                         */
                        "saveScroll": -1,

                        /**
                         * Wrapped function to end the print display (to maintain scope)
                         *  @property funcEnd
                         *  @type	 Function
                         *  @default  function () {}
                         */
                        "funcEnd": function () {}
                    },

                    /**
                     * A unique ID is assigned to each button in each instance
                     * @property buttonCounter
                     *  @type	 int
                     * @default  0
                     */
                    "buttonCounter": 0,

                    /**
                     * @namespace Select rows specific information
                     */
                    "select": {
                        /**
                         * Select type - can be 'none', 'single' or 'multi'
                         * @property type
                         *  @type	 string
                         * @default  ""
                         */
                        "type": "",

                        /**
                         * Array of nodes which are currently selected
                         *  @property selected
                         *  @type	 array
                         *  @default  []
                         */
                        "selected": [],

                        /**
                         * Function to run before the selection can take place. Will cancel the select if the
                         * function returns false
                         *  @property preRowSelect
                         *  @type	 Function
                         *  @default  null
                         */
                        "preRowSelect": null,

                        /**
                         * Function to run when a row is selected
                         *  @property postSelected
                         *  @type	 Function
                         *  @default  null
                         */
                        "postSelected": null,

                        /**
                         * Function to run when a row is deselected
                         *  @property postDeselected
                         *  @type	 Function
                         *  @default  null
                         */
                        "postDeselected": null,

                        /**
                         * Indicate if all rows are selected (needed for server-side processing)
                         *  @property all
                         *  @type	 boolean
                         *  @default  false
                         */
                        "all": false,

                        /**
                         * Class name to add to selected TR nodes
                         *  @property selectedClass
                         *  @type	 String
                         *  @default  ""
                         */
                        "selectedClass": ""
                    },

                    /**
                     * Store of the user input customisation object
                     *  @property custom
                     *  @type	 object
                     *  @default  {}
                     */
                    "custom": {},

                    /**
                     * SWF movie path
                     *  @property swfPath
                     *  @type	 string
                     *  @default  ""
                     */
                    "swfPath": "",

                    /**
                     * Default button set
                     *  @property buttonSet
                     *  @type	 array
                     *  @default  []
                     */
                    "buttonSet": [],

                    /**
                     * When there is more than one TableTools instance for a DataTable, there must be a
                     * master which controls events (row selection etc)
                     *  @property master
                     *  @type	 boolean
                     *  @default  false
                     */
                    "master": false,

                    /**
                     * Tag names that are used for creating collections and buttons
                     *  @namesapce
                     */
                    "tags": {}
                };


                /**
                 * @namespace Common and useful DOM elements for the class instance
                 */
                this.dom = {
                    /**
                     * DIV element that is create and all TableTools buttons (and their children) put into
                     *  @property container
                     *  @type	 node
                     *  @default  null
                     */
                    "container": null,

                    /**
                     * The table node to which TableTools will be applied
                     *  @property table
                     *  @type	 node
                     *  @default  null
                     */
                    "table": null,

                    /**
                     * @namespace Nodes used for the print display
                     */
                    "print": {
                        /**
                         * Nodes which have been removed from the display by setting them to display none
                         *  @property hidden
                         *  @type	 array
                         *  @default  []
                         */
                        "hidden": [],

                        /**
                         * The information display saying telling the user about the print display
                         *  @property message
                         *  @type	 node
                         *  @default  null
                         */
                        "message": null
                    },

                    /**
                     * @namespace Nodes used for a collection display. This contains the currently used collection
                     */
                    "collection": {
                        /**
                         * The div wrapper containing the buttons in the collection (i.e. the menu)
                         *  @property collection
                         *  @type	 node
                         *  @default  null
                         */
                        "collection": null,

                        /**
                         * Background display to provide focus and capture events
                         *  @property background
                         *  @type	 node
                         *  @default  null
                         */
                        "background": null
                    }
                };

                /**
                 * @namespace Name space for the classes that this TableTools instance will use
                 * @extends TableTools.classes
                 */
                this.classes = $.extend( true, {}, TableTools.classes );
                if ( this.s.dt.bJUI )
                {
                    $.extend( true, this.classes, TableTools.classes_themeroller );
                }


                /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
                 * Public class methods
                 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

                /**
                 * Retreieve the settings object from an instance
                 *  @method fnSettings
                 *  @returns {object} TableTools settings object
                 */
                this.fnSettings = function () {
                    return this.s;
                };


                /* Constructor logic */
                if ( typeof oOpts == 'undefined' )
                {
                    oOpts = {};
                }

                this._fnConstruct( oOpts );

                return this;
            };



            TableTools.prototype = {
                /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
                 * Public methods
                 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

                /**
                 * Retreieve the settings object from an instance
                 *  @returns {array} List of TR nodes which are currently selected
                 *  @param {boolean} [filtered=false] Get only selected rows which are
                 *    available given the filtering applied to the table. By default
                 *    this is false -  i.e. all rows, regardless of filtering are
                 selected.
                 */
                "fnGetSelected": function ( filtered )
                {
                    var
                        out = [],
                        data = this.s.dt.aoData,
                        displayed = this.s.dt.aiDisplay,
                        i, iLen;

                    if ( filtered )
                    {
                        // Only consider filtered rows
                        for ( i=0, iLen=displayed.length ; i<iLen ; i++ )
                        {
                            if ( data[ displayed[i] ]._DTTT_selected )
                            {
                                out.push( data[ displayed[i] ].nTr );
                            }
                        }
                    }
                    else
                    {
                        // Use all rows
                        for ( i=0, iLen=data.length ; i<iLen ; i++ )
                        {
                            if ( data[i]._DTTT_selected )
                            {
                                out.push( data[i].nTr );
                            }
                        }
                    }

                    return out;
                },


                /**
                 * Get the data source objects/arrays from DataTables for the selected rows (same as
                 * fnGetSelected followed by fnGetData on each row from the table)
                 *  @returns {array} Data from the TR nodes which are currently selected
                 */
                "fnGetSelectedData": function ()
                {
                    var out = [];
                    var data=this.s.dt.aoData;
                    var i, iLen;

                    for ( i=0, iLen=data.length ; i<iLen ; i++ )
                    {
                        if ( data[i]._DTTT_selected )
                        {
                            out.push( this.s.dt.oInstance.fnGetData(i) );
                        }
                    }

                    return out;
                },


                /**
                 * Check to see if a current row is selected or not
                 *  @param {Node} n TR node to check if it is currently selected or not
                 *  @returns {Boolean} true if select, false otherwise
                 */
                "fnIsSelected": function ( n )
                {
                    var pos = this.s.dt.oInstance.fnGetPosition( n );
                    return (this.s.dt.aoData[pos]._DTTT_selected===true) ? true : false;
                },


                /**
                 * Select all rows in the table
                 *  @param {boolean} [filtered=false] Select only rows which are available
                 *    given the filtering applied to the table. By default this is false -
                 *    i.e. all rows, regardless of filtering are selected.
                 */
                "fnSelectAll": function ( filtered )
                {
                    var s = this._fnGetMasterSettings();

                    this._fnRowSelect( (filtered === true) ?
                        s.dt.aiDisplay :
                        s.dt.aoData
                    );
                },


                /**
                 * Deselect all rows in the table
                 *  @param {boolean} [filtered=false] Deselect only rows which are available
                 *    given the filtering applied to the table. By default this is false -
                 *    i.e. all rows, regardless of filtering are deselected.
                 */
                "fnSelectNone": function ( filtered )
                {
                    var s = this._fnGetMasterSettings();

                    this._fnRowDeselect( this.fnGetSelected(filtered) );
                },


                /**
                 * Select row(s)
                 *  @param {node|object|array} n The row(s) to select. Can be a single DOM
                 *    TR node, an array of TR nodes or a jQuery object.
                 */
                "fnSelect": function ( n )
                {
                    if ( this.s.select.type == "single" )
                    {
                        this.fnSelectNone();
                        this._fnRowSelect( n );
                    }
                    else
                    {
                        this._fnRowSelect( n );
                    }
                },


                /**
                 * Deselect row(s)
                 *  @param {node|object|array} n The row(s) to deselect. Can be a single DOM
                 *    TR node, an array of TR nodes or a jQuery object.
                 */
                "fnDeselect": function ( n )
                {
                    this._fnRowDeselect( n );
                },


                /**
                 * Get the title of the document - useful for file names. The title is retrieved from either
                 * the configuration object's 'title' parameter, or the HTML document title
                 *  @param   {Object} oConfig Button configuration object
                 *  @returns {String} Button title
                 */
                "fnGetTitle": function( oConfig )
                {
                    var sTitle = "";
                    if ( typeof oConfig.sTitle != 'undefined' && oConfig.sTitle !== "" ) {
                        sTitle = oConfig.sTitle;
                    } else {
                        var anTitle = document.getElementsByTagName('title');
                        if ( anTitle.length > 0 )
                        {
                            sTitle = anTitle[0].innerHTML;
                        }
                    }

                    /* Strip characters which the OS will object to - checking for UTF8 support in the scripting
                     * engine
                     */
                    if ( "\u00A1".toString().length < 4 ) {
                        return sTitle.replace(/[^a-zA-Z0-9_\u00A1-\uFFFF\.,\-_ !\(\)]/g, "");
                    } else {
                        return sTitle.replace(/[^a-zA-Z0-9_\.,\-_ !\(\)]/g, "");
                    }
                },


                /**
                 * Calculate a unity array with the column width by proportion for a set of columns to be
                 * included for a button. This is particularly useful for PDF creation, where we can use the
                 * column widths calculated by the browser to size the columns in the PDF.
                 *  @param   {Object} oConfig Button configuration object
                 *  @returns {Array} Unity array of column ratios
                 */
                "fnCalcColRatios": function ( oConfig )
                {
                    var
                        aoCols = this.s.dt.aoColumns,
                        aColumnsInc = this._fnColumnTargets( oConfig.mColumns ),
                        aColWidths = [],
                        iWidth = 0, iTotal = 0, i, iLen;

                    for ( i=0, iLen=aColumnsInc.length ; i<iLen ; i++ )
                    {
                        if ( aColumnsInc[i] )
                        {
                            iWidth = aoCols[i].nTh.offsetWidth;
                            iTotal += iWidth;
                            aColWidths.push( iWidth );
                        }
                    }

                    for ( i=0, iLen=aColWidths.length ; i<iLen ; i++ )
                    {
                        aColWidths[i] = aColWidths[i] / iTotal;
                    }

                    return aColWidths.join('\t');
                },


                /**
                 * Get the information contained in a table as a string
                 *  @param   {Object} oConfig Button configuration object
                 *  @returns {String} Table data as a string
                 */
                "fnGetTableData": function ( oConfig )
                {
                    /* In future this could be used to get data from a plain HTML source as well as DataTables */
                    if ( this.s.dt )
                    {
                        return this._fnGetDataTablesData( oConfig );
                    }
                },


                /**
                 * Pass text to a flash button instance, which will be used on the button's click handler
                 *  @param   {Object} clip Flash button object
                 *  @param   {String} text Text to set
                 */
                "fnSetText": function ( clip, text )
                {
                    this._fnFlashSetText( clip, text );
                },


                /**
                 * Resize the flash elements of the buttons attached to this TableTools instance - this is
                 * useful for when initialising TableTools when it is hidden (display:none) since sizes can't
                 * be calculated at that time.
                 */
                "fnResizeButtons": function ()
                {
                    for ( var cli in ZeroClipboard_TableTools.clients )
                    {
                        if ( cli )
                        {
                            var client = ZeroClipboard_TableTools.clients[cli];
                            if ( typeof client.domElement != 'undefined' &&
                                client.domElement.parentNode )
                            {
                                client.positionElement();
                            }
                        }
                    }
                },


                /**
                 * Check to see if any of the ZeroClipboard client's attached need to be resized
                 */
                "fnResizeRequired": function ()
                {
                    for ( var cli in ZeroClipboard_TableTools.clients )
                    {
                        if ( cli )
                        {
                            var client = ZeroClipboard_TableTools.clients[cli];
                            if ( typeof client.domElement != 'undefined' &&
                                client.domElement.parentNode == this.dom.container &&
                                client.sized === false )
                            {
                                return true;
                            }
                        }
                    }
                    return false;
                },


                /**
                 * Programmatically enable or disable the print view
                 *  @param {boolean} [bView=true] Show the print view if true or not given. If false, then
                 *    terminate the print view and return to normal.
                 *  @param {object} [oConfig={}] Configuration for the print view
                 *  @param {boolean} [oConfig.bShowAll=false] Show all rows in the table if true
                 *  @param {string} [oConfig.sInfo] Information message, displayed as an overlay to the
                 *    user to let them know what the print view is.
                 *  @param {string} [oConfig.sMessage] HTML string to show at the top of the document - will
                 *    be included in the printed document.
                 */
                "fnPrint": function ( bView, oConfig )
                {
                    if ( oConfig === undefined )
                    {
                        oConfig = {};
                    }

                    if ( bView === undefined || bView )
                    {
                        this._fnPrintStart( oConfig );
                    }
                    else
                    {
                        this._fnPrintEnd();
                    }
                },


                /**
                 * Show a message to the end user which is nicely styled
                 *  @param {string} message The HTML string to show to the user
                 *  @param {int} time The duration the message is to be shown on screen for (mS)
                 */
                "fnInfo": function ( message, time ) {
                    var info = $('<div/>')
                        .addClass( this.classes.print.info )
                        .html( message )
                        .appendTo( 'body' );

                    setTimeout( function() {
                        info.fadeOut( "normal", function() {
                            info.remove();
                        } );
                    }, time );
                },



                /**
                 * Get the container element of the instance for attaching to the DOM
                 *   @returns {node} DOM node
                 */
                "fnContainer": function () {
                    return this.dom.container;
                },



                /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
                 * Private methods (they are of course public in JS, but recommended as private)
                 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

                /**
                 * Constructor logic
                 *  @method  _fnConstruct
                 *  @param   {Object} oOpts Same as TableTools constructor
                 *  @returns void
                 *  @private
                 */
                "_fnConstruct": function ( oOpts )
                {
                    var that = this;

                    this._fnCustomiseSettings( oOpts );

                    /* Container element */
                    this.dom.container = document.createElement( this.s.tags.container );
                    this.dom.container.className = this.classes.container;

                    /* Row selection config */
                    if ( this.s.select.type != 'none' )
                    {
                        this._fnRowSelectConfig();
                    }

                    /* Buttons */
                    this._fnButtonDefinations( this.s.buttonSet, this.dom.container );

                    /* Destructor */
                    this.s.dt.aoDestroyCallback.push( {
                        "sName": "TableTools",
                        "fn": function () {
                            $(that.s.dt.nTBody).off( 'click.DTTT_Select', 'tr' );
                            $(that.dom.container).empty();

                            // Remove the instance
                            var idx = $.inArray( that, TableTools._aInstances );
                            if ( idx !== -1 ) {
                                TableTools._aInstances.splice( idx, 1 );
                            }
                        }
                    } );
                },


                /**
                 * Take the user defined settings and the default settings and combine them.
                 *  @method  _fnCustomiseSettings
                 *  @param   {Object} oOpts Same as TableTools constructor
                 *  @returns void
                 *  @private
                 */
                "_fnCustomiseSettings": function ( oOpts )
                {
                    /* Is this the master control instance or not? */
                    if ( typeof this.s.dt._TableToolsInit == 'undefined' )
                    {
                        this.s.master = true;
                        this.s.dt._TableToolsInit = true;
                    }

                    /* We can use the table node from comparisons to group controls */
                    this.dom.table = this.s.dt.nTable;

                    /* Clone the defaults and then the user options */
                    this.s.custom = $.extend( {}, TableTools.DEFAULTS, oOpts );

                    /* Flash file location */
                    this.s.swfPath = this.s.custom.sSwfPath;
                    if ( typeof ZeroClipboard_TableTools != 'undefined' )
                    {
                        ZeroClipboard_TableTools.moviePath = this.s.swfPath;
                    }

                    /* Table row selecting */
                    this.s.select.type = this.s.custom.sRowSelect;
                    this.s.select.preRowSelect = this.s.custom.fnPreRowSelect;
                    this.s.select.postSelected = this.s.custom.fnRowSelected;
                    this.s.select.postDeselected = this.s.custom.fnRowDeselected;

                    // Backwards compatibility - allow the user to specify a custom class in the initialiser
                    if ( this.s.custom.sSelectedClass )
                    {
                        this.classes.select.row = this.s.custom.sSelectedClass;
                    }

                    this.s.tags = this.s.custom.oTags;

                    /* Button set */
                    this.s.buttonSet = this.s.custom.aButtons;
                },


                /**
                 * Take the user input arrays and expand them to be fully defined, and then add them to a given
                 * DOM element
                 *  @method  _fnButtonDefinations
                 *  @param {array} buttonSet Set of user defined buttons
                 *  @param {node} wrapper Node to add the created buttons to
                 *  @returns void
                 *  @private
                 */
                "_fnButtonDefinations": function ( buttonSet, wrapper )
                {
                    var buttonDef;

                    for ( var i=0, iLen=buttonSet.length ; i<iLen ; i++ )
                    {
                        if ( typeof buttonSet[i] == "string" )
                        {
                            if ( typeof TableTools.BUTTONS[ buttonSet[i] ] == 'undefined' )
                            {
                                alert( "TableTools: Warning - unknown button type: "+buttonSet[i] );
                                continue;
                            }
                            buttonDef = $.extend( {}, TableTools.BUTTONS[ buttonSet[i] ], true );
                        }
                        else
                        {
                            if ( typeof TableTools.BUTTONS[ buttonSet[i].sExtends ] == 'undefined' )
                            {
                                alert( "TableTools: Warning - unknown button type: "+buttonSet[i].sExtends );
                                continue;
                            }
                            var o = $.extend( {}, TableTools.BUTTONS[ buttonSet[i].sExtends ], true );
                            buttonDef = $.extend( o, buttonSet[i], true );
                        }

                        wrapper.appendChild( this._fnCreateButton(
                            buttonDef,
                            $(wrapper).hasClass(this.classes.collection.container)
                        ) );
                    }
                },


                /**
                 * Create and configure a TableTools button
                 *  @method  _fnCreateButton
                 *  @param   {Object} oConfig Button configuration object
                 *  @returns {Node} Button element
                 *  @private
                 */
                "_fnCreateButton": function ( oConfig, bCollectionButton )
                {
                    var nButton = this._fnButtonBase( oConfig, bCollectionButton );

                    if ( oConfig.sAction.match(/flash/) )
                    {
                        this._fnFlashConfig( nButton, oConfig );
                    }
                    else if ( oConfig.sAction == "text" )
                    {
                        this._fnTextConfig( nButton, oConfig );
                    }
                    else if ( oConfig.sAction == "div" )
                    {
                        this._fnTextConfig( nButton, oConfig );
                    }
                    else if ( oConfig.sAction == "collection" )
                    {
                        this._fnTextConfig( nButton, oConfig );
                        this._fnCollectionConfig( nButton, oConfig );
                    }

                    return nButton;
                },


                /**
                 * Create the DOM needed for the button and apply some base properties. All buttons start here
                 *  @method  _fnButtonBase
                 *  @param   {o} oConfig Button configuration object
                 *  @returns {Node} DIV element for the button
                 *  @private
                 */
                "_fnButtonBase": function ( o, bCollectionButton )
                {
                    var sTag, sLiner, sClass;

                    if ( bCollectionButton )
                    {
                        sTag = o.sTag && o.sTag !== "default" ? o.sTag : this.s.tags.collection.button;
                        sLiner = o.sLinerTag && o.sLinerTag !== "default" ? o.sLiner : this.s.tags.collection.liner;
                        sClass = this.classes.collection.buttons.normal;
                    }
                    else
                    {
                        sTag = o.sTag && o.sTag !== "default" ? o.sTag : this.s.tags.button;
                        sLiner = o.sLinerTag && o.sLinerTag !== "default" ? o.sLiner : this.s.tags.liner;
                        sClass = this.classes.buttons.normal;
                    }

                    var
                        nButton = document.createElement( sTag ),
                        nSpan = document.createElement( sLiner ),
                        masterS = this._fnGetMasterSettings();

                    nButton.className = sClass+" "+o.sButtonClass;
                    nButton.setAttribute('id', "ToolTables_"+this.s.dt.sInstance+"_"+masterS.buttonCounter );
                    nButton.appendChild( nSpan );
                    nSpan.innerHTML = o.sButtonText;

                    masterS.buttonCounter++;

                    return nButton;
                },


                /**
                 * Get the settings object for the master instance. When more than one TableTools instance is
                 * assigned to a DataTable, only one of them can be the 'master' (for the select rows). As such,
                 * we will typically want to interact with that master for global properties.
                 *  @method  _fnGetMasterSettings
                 *  @returns {Object} TableTools settings object
                 *  @private
                 */
                "_fnGetMasterSettings": function ()
                {
                    if ( this.s.master )
                    {
                        return this.s;
                    }
                    else
                    {
                        /* Look for the master which has the same DT as this one */
                        var instances = TableTools._aInstances;
                        for ( var i=0, iLen=instances.length ; i<iLen ; i++ )
                        {
                            if ( this.dom.table == instances[i].s.dt.nTable )
                            {
                                return instances[i].s;
                            }
                        }
                    }
                },



                /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
                 * Button collection functions
                 */

                /**
                 * Create a collection button, when activated will present a drop down list of other buttons
                 *  @param   {Node} nButton Button to use for the collection activation
                 *  @param   {Object} oConfig Button configuration object
                 *  @returns void
                 *  @private
                 */
                "_fnCollectionConfig": function ( nButton, oConfig )
                {
                    var nHidden = document.createElement( this.s.tags.collection.container );
                    nHidden.style.display = "none";
                    nHidden.className = this.classes.collection.container;
                    oConfig._collection = nHidden;
                    document.body.appendChild( nHidden );

                    this._fnButtonDefinations( oConfig.aButtons, nHidden );
                },


                /**
                 * Show a button collection
                 *  @param   {Node} nButton Button to use for the collection
                 *  @param   {Object} oConfig Button configuration object
                 *  @returns void
                 *  @private
                 */
                "_fnCollectionShow": function ( nButton, oConfig )
                {
                    var
                        that = this,
                        oPos = $(nButton).offset(),
                        nHidden = oConfig._collection,
                        iDivX = oPos.left,
                        iDivY = oPos.top + $(nButton).outerHeight(),
                        iWinHeight = $(window).height(), iDocHeight = $(document).height(),
                        iWinWidth = $(window).width(), iDocWidth = $(document).width();

                    nHidden.style.position = "absolute";
                    nHidden.style.left = iDivX+"px";
                    nHidden.style.top = iDivY+"px";
                    nHidden.style.display = "block";
                    $(nHidden).css('opacity',0);

                    var nBackground = document.createElement('div');
                    nBackground.style.position = "absolute";
                    nBackground.style.left = "0px";
                    nBackground.style.top = "0px";
                    nBackground.style.height = ((iWinHeight>iDocHeight)? iWinHeight : iDocHeight) +"px";
                    nBackground.style.width = ((iWinWidth>iDocWidth)? iWinWidth : iDocWidth) +"px";
                    nBackground.className = this.classes.collection.background;
                    $(nBackground).css('opacity',0);

                    document.body.appendChild( nBackground );
                    document.body.appendChild( nHidden );

                    /* Visual corrections to try and keep the collection visible */
                    var iDivWidth = $(nHidden).outerWidth();
                    var iDivHeight = $(nHidden).outerHeight();

                    if ( iDivX + iDivWidth > iDocWidth )
                    {
                        nHidden.style.left = (iDocWidth-iDivWidth)+"px";
                    }

                    if ( iDivY + iDivHeight > iDocHeight )
                    {
                        nHidden.style.top = (iDivY-iDivHeight-$(nButton).outerHeight())+"px";
                    }

                    this.dom.collection.collection = nHidden;
                    this.dom.collection.background = nBackground;

                    /* This results in a very small delay for the end user but it allows the animation to be
                     * much smoother. If you don't want the animation, then the setTimeout can be removed
                     */
                    setTimeout( function () {
                        $(nHidden).animate({"opacity": 1}, 500);
                        $(nBackground).animate({"opacity": 0.25}, 500);
                    }, 10 );

                    /* Resize the buttons to the Flash contents fit */
                    this.fnResizeButtons();

                    /* Event handler to remove the collection display */
                    $(nBackground).click( function () {
                        that._fnCollectionHide.call( that, null, null );
                    } );
                },


                /**
                 * Hide a button collection
                 *  @param   {Node} nButton Button to use for the collection
                 *  @param   {Object} oConfig Button configuration object
                 *  @returns void
                 *  @private
                 */
                "_fnCollectionHide": function ( nButton, oConfig )
                {
                    if ( oConfig !== null && oConfig.sExtends == 'collection' )
                    {
                        return;
                    }

                    if ( this.dom.collection.collection !== null )
                    {
                        $(this.dom.collection.collection).animate({"opacity": 0}, 500, function (e) {
                            this.style.display = "none";
                        } );

                        $(this.dom.collection.background).animate({"opacity": 0}, 500, function (e) {
                            this.parentNode.removeChild( this );
                        } );

                        this.dom.collection.collection = null;
                        this.dom.collection.background = null;
                    }
                },



                /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
                 * Row selection functions
                 */

                /**
                 * Add event handlers to a table to allow for row selection
                 *  @method  _fnRowSelectConfig
                 *  @returns void
                 *  @private
                 */
                "_fnRowSelectConfig": function ()
                {
                    if ( this.s.master )
                    {
                        var
                            that = this,
                            i, iLen,
                            dt = this.s.dt,
                            aoOpenRows = this.s.dt.aoOpenRows;

                        $(dt.nTable).addClass( this.classes.select.table );

                        // When using OS style selection, we want to cancel the shift text
                        // selection, but only when the shift key is used (so you can
                        // actually still select text in the table)
                        if ( this.s.select.type === 'os' ) {
                            $(dt.nTBody).on( 'mousedown.DTTT_Select', 'tr', function(e) {
                                if ( e.shiftKey ) {

                                    $(dt.nTBody)
                                        .css( '-moz-user-select', 'none' )
                                        .one('selectstart.DTTT_Select', 'tr', function () {
                                            return false;
                                        } );
                                }
                            } );

                            $(dt.nTBody).on( 'mouseup.DTTT_Select', 'tr', function(e) {
                                $(dt.nTBody).css( '-moz-user-select', '' );
                            } );
                        }

                        // Row selection
                        $(dt.nTBody).on( 'click.DTTT_Select', this.s.custom.sRowSelector, function(e) {
                            var row = this.nodeName.toLowerCase() === 'tr' ?
                                this :
                                $(this).parents('tr')[0];

                            var select = that.s.select;
                            var pos = that.s.dt.oInstance.fnGetPosition( row );

                            /* Sub-table must be ignored (odd that the selector won't do this with >) */
                            if ( row.parentNode != dt.nTBody ) {
                                return;
                            }

                            /* Check that we are actually working with a DataTables controlled row */
                            if ( dt.oInstance.fnGetData(row) === null ) {
                                return;
                            }

                            // Shift click, ctrl click and simple click handling to make
                            // row selection a lot like a file system in desktop OSs
                            if ( select.type == 'os' ) {
                                if ( e.ctrlKey || e.metaKey ) {
                                    // Add or remove from the selection
                                    if ( that.fnIsSelected( row ) ) {
                                        that._fnRowDeselect( row, e );
                                    }
                                    else {
                                        that._fnRowSelect( row, e );
                                    }
                                }
                                else if ( e.shiftKey ) {
                                    // Add a range of rows, from the last selected row to
                                    // this one
                                    var rowIdxs = that.s.dt.aiDisplay.slice(); // visible rows
                                    var idx1 = $.inArray( select.lastRow, rowIdxs );
                                    var idx2 = $.inArray( pos, rowIdxs );

                                    if ( that.fnGetSelected().length === 0 || idx1 === -1 ) {
                                        // select from top to here - slightly odd, but both
                                        // Windows and Mac OS do this
                                        rowIdxs.splice( $.inArray( pos, rowIdxs )+1, rowIdxs.length );
                                    }
                                    else {
                                        // reverse so we can shift click 'up' as well as down
                                        if ( idx1 > idx2 ) {
                                            var tmp = idx2;
                                            idx2 = idx1;
                                            idx1 = tmp;
                                        }

                                        rowIdxs.splice( idx2+1, rowIdxs.length );
                                        rowIdxs.splice( 0, idx1 );
                                    }

                                    if ( ! that.fnIsSelected( row ) ) {
                                        // Select range
                                        that._fnRowSelect( rowIdxs, e );
                                    }
                                    else {
                                        // Deselect range - need to keep the clicked on row selected
                                        rowIdxs.splice( $.inArray( pos, rowIdxs ), 1 );
                                        that._fnRowDeselect( rowIdxs, e );
                                    }
                                }
                                else {
                                    // No cmd or shift click. Deselect current if selected,
                                    // or select this row only
                                    if ( that.fnIsSelected( row ) && that.fnGetSelected().length === 1 ) {
                                        that._fnRowDeselect( row, e );
                                    }
                                    else {
                                        that.fnSelectNone();
                                        that._fnRowSelect( row, e );
                                    }
                                }
                            }
                            else if ( that.fnIsSelected( row ) ) {
                                that._fnRowDeselect( row, e );
                            }
                            else if ( select.type == "single" ) {
                                that.fnSelectNone();
                                that._fnRowSelect( row, e );
                            }
                            else if ( select.type == "multi" ) {
                                that._fnRowSelect( row, e );
                            }

                            select.lastRow = pos;
                        } );//.on('selectstart', function () { return false; } );

                        // Bind a listener to the DataTable for when new rows are created.
                        // This allows rows to be visually selected when they should be and
                        // deferred rendering is used.
                        dt.oApi._fnCallbackReg( dt, 'aoRowCreatedCallback', function (tr, data, index) {
                            if ( dt.aoData[index]._DTTT_selected ) {
                                $(tr).addClass( that.classes.select.row );
                            }
                        }, 'TableTools-SelectAll' );
                    }
                },

                /**
                 * Select rows
                 *  @param   {*} src Rows to select - see _fnSelectData for a description of valid inputs
                 *  @private
                 */
                "_fnRowSelect": function ( src, e )
                {
                    var
                        that = this,
                        data = this._fnSelectData( src ),
                        firstTr = data.length===0 ? null : data[0].nTr,
                        anSelected = [],
                        i, len;

                    // Get all the rows that will be selected
                    for ( i=0, len=data.length ; i<len ; i++ )
                    {
                        if ( data[i].nTr )
                        {
                            anSelected.push( data[i].nTr );
                        }
                    }

                    // User defined pre-selection function
                    if ( this.s.select.preRowSelect !== null && !this.s.select.preRowSelect.call(this, e, anSelected, true) )
                    {
                        return;
                    }

                    // Mark them as selected
                    for ( i=0, len=data.length ; i<len ; i++ )
                    {
                        data[i]._DTTT_selected = true;

                        if ( data[i].nTr )
                        {
                            $(data[i].nTr).addClass( that.classes.select.row );
                        }
                    }

                    // Post-selection function
                    if ( this.s.select.postSelected !== null )
                    {
                        this.s.select.postSelected.call( this, anSelected );
                    }

                    TableTools._fnEventDispatch( this, 'select', anSelected, true );
                },

                /**
                 * Deselect rows
                 *  @param   {*} src Rows to deselect - see _fnSelectData for a description of valid inputs
                 *  @private
                 */
                "_fnRowDeselect": function ( src, e )
                {
                    var
                        that = this,
                        data = this._fnSelectData( src ),
                        firstTr = data.length===0 ? null : data[0].nTr,
                        anDeselectedTrs = [],
                        i, len;

                    // Get all the rows that will be deselected
                    for ( i=0, len=data.length ; i<len ; i++ )
                    {
                        if ( data[i].nTr )
                        {
                            anDeselectedTrs.push( data[i].nTr );
                        }
                    }

                    // User defined pre-selection function
                    if ( this.s.select.preRowSelect !== null && !this.s.select.preRowSelect.call(this, e, anDeselectedTrs, false) )
                    {
                        return;
                    }

                    // Mark them as deselected
                    for ( i=0, len=data.length ; i<len ; i++ )
                    {
                        data[i]._DTTT_selected = false;

                        if ( data[i].nTr )
                        {
                            $(data[i].nTr).removeClass( that.classes.select.row );
                        }
                    }

                    // Post-deselection function
                    if ( this.s.select.postDeselected !== null )
                    {
                        this.s.select.postDeselected.call( this, anDeselectedTrs );
                    }

                    TableTools._fnEventDispatch( this, 'select', anDeselectedTrs, false );
                },

                /**
                 * Take a data source for row selection and convert it into aoData points for the DT
                 *   @param {*} src Can be a single DOM TR node, an array of TR nodes (including a
                 *     a jQuery object), a single aoData point from DataTables, an array of aoData
                 *     points or an array of aoData indexes
                 *   @returns {array} An array of aoData points
                 */
                "_fnSelectData": function ( src )
                {
                    var out = [], pos, i, iLen;

                    if ( src.nodeName )
                    {
                        // Single node
                        pos = this.s.dt.oInstance.fnGetPosition( src );
                        out.push( this.s.dt.aoData[pos] );
                    }
                    else if ( typeof src.length !== 'undefined' )
                    {
                        // jQuery object or an array of nodes, or aoData points
                        for ( i=0, iLen=src.length ; i<iLen ; i++ )
                        {
                            if ( src[i].nodeName )
                            {
                                pos = this.s.dt.oInstance.fnGetPosition( src[i] );
                                out.push( this.s.dt.aoData[pos] );
                            }
                            else if ( typeof src[i] === 'number' )
                            {
                                out.push( this.s.dt.aoData[ src[i] ] );
                            }
                            else
                            {
                                out.push( src[i] );
                            }
                        }

                        return out;
                    }
                    else
                    {
                        // A single aoData point
                        out.push( src );
                    }

                    return out;
                },


                /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
                 * Text button functions
                 */

                /**
                 * Configure a text based button for interaction events
                 *  @method  _fnTextConfig
                 *  @param   {Node} nButton Button element which is being considered
                 *  @param   {Object} oConfig Button configuration object
                 *  @returns void
                 *  @private
                 */
                "_fnTextConfig": function ( nButton, oConfig )
                {
                    var that = this;

                    if ( oConfig.fnInit !== null )
                    {
                        oConfig.fnInit.call( this, nButton, oConfig );
                    }

                    if ( oConfig.sToolTip !== "" )
                    {
                        nButton.title = oConfig.sToolTip;
                    }

                    $(nButton).hover( function () {
                        if ( oConfig.fnMouseover !== null )
                        {
                            oConfig.fnMouseover.call( this, nButton, oConfig, null );
                        }
                    }, function () {
                        if ( oConfig.fnMouseout !== null )
                        {
                            oConfig.fnMouseout.call( this, nButton, oConfig, null );
                        }
                    } );

                    if ( oConfig.fnSelect !== null )
                    {
                        TableTools._fnEventListen( this, 'select', function (n) {
                            oConfig.fnSelect.call( that, nButton, oConfig, n );
                        } );
                    }

                    $(nButton).click( function (e) {
                        //e.preventDefault();

                        if ( oConfig.fnClick !== null )
                        {
                            oConfig.fnClick.call( that, nButton, oConfig, null, e );
                        }

                        /* Provide a complete function to match the behaviour of the flash elements */
                        if ( oConfig.fnComplete !== null )
                        {
                            oConfig.fnComplete.call( that, nButton, oConfig, null, null );
                        }

                        that._fnCollectionHide( nButton, oConfig );
                    } );
                },



                /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
                 * Flash button functions
                 */

                /**
                 * Configure a flash based button for interaction events
                 *  @method  _fnFlashConfig
                 *  @param   {Node} nButton Button element which is being considered
                 *  @param   {o} oConfig Button configuration object
                 *  @returns void
                 *  @private
                 */
                "_fnFlashConfig": function ( nButton, oConfig )
                {
                    var that = this;
                    var flash = new ZeroClipboard_TableTools.Client();

                    if ( oConfig.fnInit !== null )
                    {
                        oConfig.fnInit.call( this, nButton, oConfig );
                    }

                    flash.setHandCursor( true );

                    if ( oConfig.sAction == "flash_save" )
                    {
                        flash.setAction( 'save' );
                        flash.setCharSet( (oConfig.sCharSet=="utf16le") ? 'UTF16LE' : 'UTF8' );
                        flash.setBomInc( oConfig.bBomInc );
                        flash.setFileName( oConfig.sFileName.replace('*', this.fnGetTitle(oConfig)) );
                    }
                    else if ( oConfig.sAction == "flash_pdf" )
                    {
                        flash.setAction( 'pdf' );
                        flash.setFileName( oConfig.sFileName.replace('*', this.fnGetTitle(oConfig)) );
                    }
                    else
                    {
                        flash.setAction( 'copy' );
                    }

                    flash.addEventListener('mouseOver', function(client) {
                        if ( oConfig.fnMouseover !== null )
                        {
                            oConfig.fnMouseover.call( that, nButton, oConfig, flash );
                        }
                    } );

                    flash.addEventListener('mouseOut', function(client) {
                        if ( oConfig.fnMouseout !== null )
                        {
                            oConfig.fnMouseout.call( that, nButton, oConfig, flash );
                        }
                    } );

                    flash.addEventListener('mouseDown', function(client) {
                        if ( oConfig.fnClick !== null )
                        {
                            oConfig.fnClick.call( that, nButton, oConfig, flash );
                        }
                    } );

                    flash.addEventListener('complete', function (client, text) {
                        if ( oConfig.fnComplete !== null )
                        {
                            oConfig.fnComplete.call( that, nButton, oConfig, flash, text );
                        }
                        that._fnCollectionHide( nButton, oConfig );
                    } );

                    this._fnFlashGlue( flash, nButton, oConfig.sToolTip );
                },


                /**
                 * Wait until the id is in the DOM before we "glue" the swf. Note that this function will call
                 * itself (using setTimeout) until it completes successfully
                 *  @method  _fnFlashGlue
                 *  @param   {Object} clip Zero clipboard object
                 *  @param   {Node} node node to glue swf to
                 *  @param   {String} text title of the flash movie
                 *  @returns void
                 *  @private
                 */
                "_fnFlashGlue": function ( flash, node, text )
                {
                    var that = this;
                    var id = node.getAttribute('id');

                    if ( document.getElementById(id) )
                    {
                        flash.glue( node, text );
                    }
                    else
                    {
                        setTimeout( function () {
                            that._fnFlashGlue( flash, node, text );
                        }, 100 );
                    }
                },


                /**
                 * Set the text for the flash clip to deal with
                 *
                 * This function is required for large information sets. There is a limit on the
                 * amount of data that can be transferred between Javascript and Flash in a single call, so
                 * we use this method to build up the text in Flash by sending over chunks. It is estimated
                 * that the data limit is around 64k, although it is undocumented, and appears to be different
                 * between different flash versions. We chunk at 8KiB.
                 *  @method  _fnFlashSetText
                 *  @param   {Object} clip the ZeroClipboard object
                 *  @param   {String} sData the data to be set
                 *  @returns void
                 *  @private
                 */
                "_fnFlashSetText": function ( clip, sData )
                {
                    var asData = this._fnChunkData( sData, 8192 );

                    clip.clearText();
                    for ( var i=0, iLen=asData.length ; i<iLen ; i++ )
                    {
                        clip.appendText( asData[i] );
                    }
                },



                /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
                 * Data retrieval functions
                 */

                /**
                 * Convert the mixed columns variable into a boolean array the same size as the columns, which
                 * indicates which columns we want to include
                 *  @method  _fnColumnTargets
                 *  @param   {String|Array} mColumns The columns to be included in data retrieval. If a string
                 *			 then it can take the value of "visible" or "hidden" (to include all visible or
                 *			 hidden columns respectively). Or an array of column indexes
                 *  @returns {Array} A boolean array the length of the columns of the table, which each value
                 *			 indicating if the column is to be included or not
                 *  @private
                 */
                "_fnColumnTargets": function ( mColumns )
                {
                    var aColumns = [];
                    var dt = this.s.dt;
                    var i, iLen;

                    if ( typeof mColumns == "object" )
                    {
                        for ( i=0, iLen=dt.aoColumns.length ; i<iLen ; i++ )
                        {
                            aColumns.push( false );
                        }

                        for ( i=0, iLen=mColumns.length ; i<iLen ; i++ )
                        {
                            aColumns[ mColumns[i] ] = true;
                        }
                    }
                    else if ( mColumns == "visible" )
                    {
                        for ( i=0, iLen=dt.aoColumns.length ; i<iLen ; i++ )
                        {
                            aColumns.push( dt.aoColumns[i].bVisible ? true : false );
                        }
                    }
                    else if ( mColumns == "hidden" )
                    {
                        for ( i=0, iLen=dt.aoColumns.length ; i<iLen ; i++ )
                        {
                            aColumns.push( dt.aoColumns[i].bVisible ? false : true );
                        }
                    }
                    else if ( mColumns == "sortable" )
                    {
                        for ( i=0, iLen=dt.aoColumns.length ; i<iLen ; i++ )
                        {
                            aColumns.push( dt.aoColumns[i].bSortable ? true : false );
                        }
                    }
                    else /* all */
                    {
                        for ( i=0, iLen=dt.aoColumns.length ; i<iLen ; i++ )
                        {
                            aColumns.push( true );
                        }
                    }

                    return aColumns;
                },


                /**
                 * New line character(s) depend on the platforms
                 *  @method  method
                 *  @param   {Object} oConfig Button configuration object - only interested in oConfig.sNewLine
                 *  @returns {String} Newline character
                 */
                "_fnNewline": function ( oConfig )
                {
                    if ( oConfig.sNewLine == "auto" )
                    {
                        return navigator.userAgent.match(/Windows/) ? "\r\n" : "\n";
                    }
                    else
                    {
                        return oConfig.sNewLine;
                    }
                },


                /**
                 * Get data from DataTables' internals and format it for output
                 *  @method  _fnGetDataTablesData
                 *  @param   {Object} oConfig Button configuration object
                 *  @param   {String} oConfig.sFieldBoundary Field boundary for the data cells in the string
                 *  @param   {String} oConfig.sFieldSeperator Field separator for the data cells
                 *  @param   {String} oConfig.sNewline New line options
                 *  @param   {Mixed} oConfig.mColumns Which columns should be included in the output
                 *  @param   {Boolean} oConfig.bHeader Include the header
                 *  @param   {Boolean} oConfig.bFooter Include the footer
                 *  @param   {Boolean} oConfig.bSelectedOnly Include only the selected rows in the output
                 *  @returns {String} Concatenated string of data
                 *  @private
                 */
                "_fnGetDataTablesData": function ( oConfig )
                {
                    var i, iLen, j, jLen;
                    var aRow, aData=[], sLoopData='', arr;
                    var dt = this.s.dt, tr, child;
                    var regex = new RegExp(oConfig.sFieldBoundary, "g"); /* Do it here for speed */
                    var aColumnsInc = this._fnColumnTargets( oConfig.mColumns );
                    var bSelectedOnly = (typeof oConfig.bSelectedOnly != 'undefined') ? oConfig.bSelectedOnly : false;

                    /*
                     * Header
                     */
                    if ( oConfig.bHeader )
                    {
                        aRow = [];

                        for ( i=0, iLen=dt.aoColumns.length ; i<iLen ; i++ )
                        {
                            if ( aColumnsInc[i] )
                            {
                                sLoopData = dt.aoColumns[i].sTitle.replace(/\n/g," ").replace( /<.*?>/g, "" ).replace(/^\s+|\s+$/g,"");
                                sLoopData = this._fnHtmlDecode( sLoopData );

                                aRow.push( this._fnBoundData( sLoopData, oConfig.sFieldBoundary, regex ) );
                            }
                        }

                        aData.push( aRow.join(oConfig.sFieldSeperator) );
                    }

                    /*
                     * Body
                     */
                    var aSelected = this.fnGetSelected();
                    bSelectedOnly = this.s.select.type !== "none" && bSelectedOnly && aSelected.length !== 0;

                    var aDataIndex = dt.oInstance
                        .$('tr', oConfig.oSelectorOpts)
                        .map( function (id, row) {
                            // If "selected only", then ensure that the row is in the selected list
                            return bSelectedOnly && $.inArray( row, aSelected ) === -1 ?
                                null :
                                dt.oInstance.fnGetPosition( row );
                        } )
                        .get();

                    for ( j=0, jLen=aDataIndex.length ; j<jLen ; j++ )
                    {
                        tr = dt.aoData[ aDataIndex[j] ].nTr;
                        aRow = [];

                        /* Columns */
                        for ( i=0, iLen=dt.aoColumns.length ; i<iLen ; i++ )
                        {
                            if ( aColumnsInc[i] )
                            {
                                /* Convert to strings (with small optimisation) */
                                var mTypeData = dt.oApi._fnGetCellData( dt, aDataIndex[j], i, 'display' );
                                if ( oConfig.fnCellRender )
                                {
                                    sLoopData = oConfig.fnCellRender( mTypeData, i, tr, aDataIndex[j] )+"";
                                }
                                else if ( typeof mTypeData == "string" )
                                {
                                    /* Strip newlines, replace img tags with alt attr. and finally strip html... */
                                    sLoopData = mTypeData.replace(/\n/g," ");
                                    sLoopData =
                                        sLoopData.replace(/<img.*?\s+alt\s*=\s*(?:"([^"]+)"|'([^']+)'|([^\s>]+)).*?>/gi,
                                            '$1$2$3');
                                    sLoopData = sLoopData.replace( /<.*?>/g, "" );
                                }
                                else
                                {
                                    sLoopData = mTypeData+"";
                                }

                                /* Trim and clean the data */
                                sLoopData = sLoopData.replace(/^\s+/, '').replace(/\s+$/, '');
                                sLoopData = this._fnHtmlDecode( sLoopData );

                                /* Bound it and add it to the total data */
                                aRow.push( this._fnBoundData( sLoopData, oConfig.sFieldBoundary, regex ) );
                            }
                        }

                        aData.push( aRow.join(oConfig.sFieldSeperator) );

                        /* Details rows from fnOpen */
                        if ( oConfig.bOpenRows )
                        {
                            arr = $.grep(dt.aoOpenRows, function(o) { return o.nParent === tr; });

                            if ( arr.length === 1 )
                            {
                                sLoopData = this._fnBoundData( $('td', arr[0].nTr).html(), oConfig.sFieldBoundary, regex );
                                aData.push( sLoopData );
                            }
                        }
                    }

                    /*
                     * Footer
                     */
                    if ( oConfig.bFooter && dt.nTFoot !== null )
                    {
                        aRow = [];

                        for ( i=0, iLen=dt.aoColumns.length ; i<iLen ; i++ )
                        {
                            if ( aColumnsInc[i] && dt.aoColumns[i].nTf !== null )
                            {
                                sLoopData = dt.aoColumns[i].nTf.innerHTML.replace(/\n/g," ").replace( /<.*?>/g, "" );
                                sLoopData = this._fnHtmlDecode( sLoopData );

                                aRow.push( this._fnBoundData( sLoopData, oConfig.sFieldBoundary, regex ) );
                            }
                        }

                        aData.push( aRow.join(oConfig.sFieldSeperator) );
                    }

                    var _sLastData = aData.join( this._fnNewline(oConfig) );
                    return _sLastData;
                },


                /**
                 * Wrap data up with a boundary string
                 *  @method  _fnBoundData
                 *  @param   {String} sData data to bound
                 *  @param   {String} sBoundary bounding char(s)
                 *  @param   {RegExp} regex search for the bounding chars - constructed outside for efficiency
                 *			 in the loop
                 *  @returns {String} bound data
                 *  @private
                 */
                "_fnBoundData": function ( sData, sBoundary, regex )
                {
                    if ( sBoundary === "" )
                    {
                        return sData;
                    }
                    else
                    {
                        return sBoundary + sData.replace(regex, sBoundary+sBoundary) + sBoundary;
                    }
                },


                /**
                 * Break a string up into an array of smaller strings
                 *  @method  _fnChunkData
                 *  @param   {String} sData data to be broken up
                 *  @param   {Int} iSize chunk size
                 *  @returns {Array} String array of broken up text
                 *  @private
                 */
                "_fnChunkData": function ( sData, iSize )
                {
                    var asReturn = [];
                    var iStrlen = sData.length;

                    for ( var i=0 ; i<iStrlen ; i+=iSize )
                    {
                        if ( i+iSize < iStrlen )
                        {
                            asReturn.push( sData.substring( i, i+iSize ) );
                        }
                        else
                        {
                            asReturn.push( sData.substring( i, iStrlen ) );
                        }
                    }

                    return asReturn;
                },


                /**
                 * Decode HTML entities
                 *  @method  _fnHtmlDecode
                 *  @param   {String} sData encoded string
                 *  @returns {String} decoded string
                 *  @private
                 */
                "_fnHtmlDecode": function ( sData )
                {
                    if ( sData.indexOf('&') === -1 )
                    {
                        return sData;
                    }

                    var n = document.createElement('div');

                    return sData.replace( /&([^\s]*);/g, function( match, match2 ) {
                        if ( match.substr(1, 1) === '#' )
                        {
                            return String.fromCharCode( Number(match2.substr(1)) );
                        }
                        else
                        {
                            n.innerHTML = match;
                            return n.childNodes[0].nodeValue;
                        }
                    } );
                },



                /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
                 * Printing functions
                 */

                /**
                 * Show print display
                 *  @method  _fnPrintStart
                 *  @param   {Event} e Event object
                 *  @param   {Object} oConfig Button configuration object
                 *  @returns void
                 *  @private
                 */
                "_fnPrintStart": function ( oConfig )
                {
                    var that = this;
                    var oSetDT = this.s.dt;

                    /* Parse through the DOM hiding everything that isn't needed for the table */
                    this._fnPrintHideNodes( oSetDT.nTable );

                    /* Show the whole table */
                    this.s.print.saveStart = oSetDT._iDisplayStart;
                    this.s.print.saveLength = oSetDT._iDisplayLength;

                    if ( oConfig.bShowAll )
                    {
                        oSetDT._iDisplayStart = 0;
                        oSetDT._iDisplayLength = -1;
                        if ( oSetDT.oApi._fnCalculateEnd ) {
                            oSetDT.oApi._fnCalculateEnd( oSetDT );
                        }
                        oSetDT.oApi._fnDraw( oSetDT );
                    }

                    /* Adjust the display for scrolling which might be done by DataTables */
                    if ( oSetDT.oScroll.sX !== "" || oSetDT.oScroll.sY !== "" )
                    {
                        this._fnPrintScrollStart( oSetDT );

                        // If the table redraws while in print view, the DataTables scrolling
                        // setup would hide the header, so we need to readd it on draw
                        $(this.s.dt.nTable).bind('draw.DTTT_Print', function () {
                            that._fnPrintScrollStart( oSetDT );
                        } );
                    }

                    /* Remove the other DataTables feature nodes - but leave the table! and info div */
                    var anFeature = oSetDT.aanFeatures;
                    for ( var cFeature in anFeature )
                    {
                        if ( cFeature != 'i' && cFeature != 't' && cFeature.length == 1 )
                        {
                            for ( var i=0, iLen=anFeature[cFeature].length ; i<iLen ; i++ )
                            {
                                this.dom.print.hidden.push( {
                                    "node": anFeature[cFeature][i],
                                    "display": "block"
                                } );
                                anFeature[cFeature][i].style.display = "none";
                            }
                        }
                    }

                    /* Print class can be used for styling */
                    $(document.body).addClass( this.classes.print.body );

                    /* Show information message to let the user know what is happening */
                    if ( oConfig.sInfo !== "" )
                    {
                        this.fnInfo( oConfig.sInfo, 3000 );
                    }

                    /* Add a message at the top of the page */
                    if ( oConfig.sMessage )
                    {
                        $('<div/>')
                            .addClass( this.classes.print.message )
                            .html( oConfig.sMessage )
                            .prependTo( 'body' );
                    }

                    /* Cache the scrolling and the jump to the top of the page */
                    this.s.print.saveScroll = $(window).scrollTop();
                    window.scrollTo( 0, 0 );

                    /* Bind a key event listener to the document for the escape key -
                     * it is removed in the callback
                     */
                    $(document).bind( "keydown.DTTT", function(e) {
                        /* Only interested in the escape key */
                        if ( e.keyCode == 27 )
                        {
                            e.preventDefault();
                            that._fnPrintEnd.call( that, e );
                        }
                    } );
                },


                /**
                 * Printing is finished, resume normal display
                 *  @method  _fnPrintEnd
                 *  @param   {Event} e Event object
                 *  @returns void
                 *  @private
                 */
                "_fnPrintEnd": function ( e )
                {
                    var that = this;
                    var oSetDT = this.s.dt;
                    var oSetPrint = this.s.print;
                    var oDomPrint = this.dom.print;

                    /* Show all hidden nodes */
                    this._fnPrintShowNodes();

                    /* Restore DataTables' scrolling */
                    if ( oSetDT.oScroll.sX !== "" || oSetDT.oScroll.sY !== "" )
                    {
                        $(this.s.dt.nTable).unbind('draw.DTTT_Print');

                        this._fnPrintScrollEnd();
                    }

                    /* Restore the scroll */
                    window.scrollTo( 0, oSetPrint.saveScroll );

                    /* Drop the print message */
                    $('div.'+this.classes.print.message).remove();

                    /* Styling class */
                    $(document.body).removeClass( 'DTTT_Print' );

                    /* Restore the table length */
                    oSetDT._iDisplayStart = oSetPrint.saveStart;
                    oSetDT._iDisplayLength = oSetPrint.saveLength;
                    if ( oSetDT.oApi._fnCalculateEnd ) {
                        oSetDT.oApi._fnCalculateEnd( oSetDT );
                    }
                    oSetDT.oApi._fnDraw( oSetDT );

                    $(document).unbind( "keydown.DTTT" );
                },


                /**
                 * Take account of scrolling in DataTables by showing the full table
                 *  @returns void
                 *  @private
                 */
                "_fnPrintScrollStart": function ()
                {
                    var
                        oSetDT = this.s.dt,
                        nScrollHeadInner = oSetDT.nScrollHead.getElementsByTagName('div')[0],
                        nScrollHeadTable = nScrollHeadInner.getElementsByTagName('table')[0],
                        nScrollBody = oSetDT.nTable.parentNode,
                        nTheadSize, nTfootSize;

                    /* Copy the header in the thead in the body table, this way we show one single table when
                     * in print view. Note that this section of code is more or less verbatim from DT 1.7.0
                     */
                    nTheadSize = oSetDT.nTable.getElementsByTagName('thead');
                    if ( nTheadSize.length > 0 )
                    {
                        oSetDT.nTable.removeChild( nTheadSize[0] );
                    }

                    if ( oSetDT.nTFoot !== null )
                    {
                        nTfootSize = oSetDT.nTable.getElementsByTagName('tfoot');
                        if ( nTfootSize.length > 0 )
                        {
                            oSetDT.nTable.removeChild( nTfootSize[0] );
                        }
                    }

                    nTheadSize = oSetDT.nTHead.cloneNode(true);
                    oSetDT.nTable.insertBefore( nTheadSize, oSetDT.nTable.childNodes[0] );

                    if ( oSetDT.nTFoot !== null )
                    {
                        nTfootSize = oSetDT.nTFoot.cloneNode(true);
                        oSetDT.nTable.insertBefore( nTfootSize, oSetDT.nTable.childNodes[1] );
                    }

                    /* Now adjust the table's viewport so we can actually see it */
                    if ( oSetDT.oScroll.sX !== "" )
                    {
                        oSetDT.nTable.style.width = $(oSetDT.nTable).outerWidth()+"px";
                        nScrollBody.style.width = $(oSetDT.nTable).outerWidth()+"px";
                        nScrollBody.style.overflow = "visible";
                    }

                    if ( oSetDT.oScroll.sY !== "" )
                    {
                        nScrollBody.style.height = $(oSetDT.nTable).outerHeight()+"px";
                        nScrollBody.style.overflow = "visible";
                    }
                },


                /**
                 * Take account of scrolling in DataTables by showing the full table. Note that the redraw of
                 * the DataTable that we do will actually deal with the majority of the hard work here
                 *  @returns void
                 *  @private
                 */
                "_fnPrintScrollEnd": function ()
                {
                    var
                        oSetDT = this.s.dt,
                        nScrollBody = oSetDT.nTable.parentNode;

                    if ( oSetDT.oScroll.sX !== "" )
                    {
                        nScrollBody.style.width = oSetDT.oApi._fnStringToCss( oSetDT.oScroll.sX );
                        nScrollBody.style.overflow = "auto";
                    }

                    if ( oSetDT.oScroll.sY !== "" )
                    {
                        nScrollBody.style.height = oSetDT.oApi._fnStringToCss( oSetDT.oScroll.sY );
                        nScrollBody.style.overflow = "auto";
                    }
                },


                /**
                 * Resume the display of all TableTools hidden nodes
                 *  @method  _fnPrintShowNodes
                 *  @returns void
                 *  @private
                 */
                "_fnPrintShowNodes": function ( )
                {
                    var anHidden = this.dom.print.hidden;

                    for ( var i=0, iLen=anHidden.length ; i<iLen ; i++ )
                    {
                        anHidden[i].node.style.display = anHidden[i].display;
                    }
                    anHidden.splice( 0, anHidden.length );
                },


                /**
                 * Hide nodes which are not needed in order to display the table. Note that this function is
                 * recursive
                 *  @method  _fnPrintHideNodes
                 *  @param   {Node} nNode Element which should be showing in a 'print' display
                 *  @returns void
                 *  @private
                 */
                "_fnPrintHideNodes": function ( nNode )
                {
                    var anHidden = this.dom.print.hidden;

                    var nParent = nNode.parentNode;
                    var nChildren = nParent.childNodes;
                    for ( var i=0, iLen=nChildren.length ; i<iLen ; i++ )
                    {
                        if ( nChildren[i] != nNode && nChildren[i].nodeType == 1 )
                        {
                            /* If our node is shown (don't want to show nodes which were previously hidden) */
                            var sDisplay = $(nChildren[i]).css("display");
                            if ( sDisplay != "none" )
                            {
                                /* Cache the node and it's previous state so we can restore it */
                                anHidden.push( {
                                    "node": nChildren[i],
                                    "display": sDisplay
                                } );
                                nChildren[i].style.display = "none";
                            }
                        }
                    }

                    if ( nParent.nodeName.toUpperCase() != "BODY" )
                    {
                        this._fnPrintHideNodes( nParent );
                    }
                }
            };



            /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
             * Static variables
             * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

            /**
             * Store of all instances that have been created of TableTools, so one can look up other (when
             * there is need of a master)
             *  @property _aInstances
             *  @type	 Array
             *  @default  []
             *  @private
             */
            TableTools._aInstances = [];


            /**
             * Store of all listeners and their callback functions
             *  @property _aListeners
             *  @type	 Array
             *  @default  []
             */
            TableTools._aListeners = [];



            /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
             * Static methods
             * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

            /**
             * Get an array of all the master instances
             *  @method  fnGetMasters
             *  @returns {Array} List of master TableTools instances
             *  @static
             */
            TableTools.fnGetMasters = function ()
            {
                var a = [];
                for ( var i=0, iLen=TableTools._aInstances.length ; i<iLen ; i++ )
                {
                    if ( TableTools._aInstances[i].s.master )
                    {
                        a.push( TableTools._aInstances[i] );
                    }
                }
                return a;
            };

            /**
             * Get the master instance for a table node (or id if a string is given)
             *  @method  fnGetInstance
             *  @returns {Object} ID of table OR table node, for which we want the TableTools instance
             *  @static
             */
            TableTools.fnGetInstance = function ( node )
            {
                if ( typeof node != 'object' )
                {
                    node = document.getElementById(node);
                }

                for ( var i=0, iLen=TableTools._aInstances.length ; i<iLen ; i++ )
                {
                    if ( TableTools._aInstances[i].s.master && TableTools._aInstances[i].dom.table == node )
                    {
                        return TableTools._aInstances[i];
                    }
                }
                return null;
            };


            /**
             * Add a listener for a specific event
             *  @method  _fnEventListen
             *  @param   {Object} that Scope of the listening function (i.e. 'this' in the caller)
             *  @param   {String} type Event type
             *  @param   {Function} fn Function
             *  @returns void
             *  @private
             *  @static
             */
            TableTools._fnEventListen = function ( that, type, fn )
            {
                TableTools._aListeners.push( {
                    "that": that,
                    "type": type,
                    "fn": fn
                } );
            };


            /**
             * An event has occurred - look up every listener and fire it off. We check that the event we are
             * going to fire is attached to the same table (using the table node as reference) before firing
             *  @method  _fnEventDispatch
             *  @param   {Object} that Scope of the listening function (i.e. 'this' in the caller)
             *  @param   {String} type Event type
             *  @param   {Node} node Element that the event occurred on (may be null)
             *  @param   {boolean} [selected] Indicate if the node was selected (true) or deselected (false)
             *  @returns void
             *  @private
             *  @static
             */
            TableTools._fnEventDispatch = function ( that, type, node, selected )
            {
                var listeners = TableTools._aListeners;
                for ( var i=0, iLen=listeners.length ; i<iLen ; i++ )
                {
                    if ( that.dom.table == listeners[i].that.dom.table && listeners[i].type == type )
                    {
                        listeners[i].fn( node, selected );
                    }
                }
            };






            /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
             * Constants
             * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */



            TableTools.buttonBase = {
                // Button base
                "sAction": "text",
                "sTag": "default",
                "sLinerTag": "default",
                "sButtonClass": "DTTT_button_text",
                "sButtonText": "Button text",
                "sTitle": "",
                "sToolTip": "",

                // Common button specific options
                "sCharSet": "utf8",
                "bBomInc": false,
                "sFileName": "*.csv",
                "sFieldBoundary": "",
                "sFieldSeperator": "\t",
                "sNewLine": "auto",
                "mColumns": "all", /* "all", "visible", "hidden" or array of column integers */
                "bHeader": true,
                "bFooter": true,
                "bOpenRows": false,
                "bSelectedOnly": false,
                "oSelectorOpts": undefined, // See http://datatables.net/docs/DataTables/1.9.4/#$ for full options

                // Callbacks
                "fnMouseover": null,
                "fnMouseout": null,
                "fnClick": null,
                "fnSelect": null,
                "fnComplete": null,
                "fnInit": null,
                "fnCellRender": null
            };


            /**
             * @namespace Default button configurations
             */
            TableTools.BUTTONS = {
                "csv": $.extend( {}, TableTools.buttonBase, {
                    "sAction": "flash_save",
                    "sButtonClass": "DTTT_button_csv",
                    "sButtonText": "CSV",
                    "sFieldBoundary": '"',
                    "sFieldSeperator": ",",
                    "fnClick": function( nButton, oConfig, flash ) {
                        this.fnSetText( flash, this.fnGetTableData(oConfig) );
                    }
                } ),

                "xls": $.extend( {}, TableTools.buttonBase, {
                    "sAction": "flash_save",
                    "sCharSet": "utf16le",
                    "bBomInc": true,
                    "sButtonClass": "DTTT_button_xls",
                    "sButtonText": "Excel",
                    "fnClick": function( nButton, oConfig, flash ) {
                        this.fnSetText( flash, this.fnGetTableData(oConfig) );
                    }
                } ),

                "copy": $.extend( {}, TableTools.buttonBase, {
                    "sAction": "flash_copy",
                    "sButtonClass": "DTTT_button_copy",
                    "sButtonText": "Copy",
                    "fnClick": function( nButton, oConfig, flash ) {
                        this.fnSetText( flash, this.fnGetTableData(oConfig) );
                    },
                    "fnComplete": function(nButton, oConfig, flash, text) {
                        var
                            lines = text.split('\n').length,
                            len = this.s.dt.nTFoot === null ? lines-1 : lines-2,
                            plural = (len==1) ? "" : "s";
                        this.fnInfo( '<h6>Table copied</h6>'+
                            '<p>Copied '+len+' row'+plural+' to the clipboard.</p>',
                            1500
                        );
                    }
                } ),

                "pdf": $.extend( {}, TableTools.buttonBase, {
                    "sAction": "flash_pdf",
                    "sNewLine": "\n",
                    "sFileName": "*.pdf",
                    "sButtonClass": "DTTT_button_pdf",
                    "sButtonText": "PDF",
                    "sPdfOrientation": "portrait",
                    "sPdfSize": "A4",
                    "sPdfMessage": "",
                    "fnClick": function( nButton, oConfig, flash ) {
                        this.fnSetText( flash,
                            "title:"+ this.fnGetTitle(oConfig) +"\n"+
                            "message:"+ oConfig.sPdfMessage +"\n"+
                            "colWidth:"+ this.fnCalcColRatios(oConfig) +"\n"+
                            "orientation:"+ oConfig.sPdfOrientation +"\n"+
                            "size:"+ oConfig.sPdfSize +"\n"+
                            "--/TableToolsOpts--\n" +
                            this.fnGetTableData(oConfig)
                        );
                    }
                } ),

                "print": $.extend( {}, TableTools.buttonBase, {
                    "sInfo": "<h6>Print view</h6><p>Please use your browser's print function to "+
                    "print this table. Press escape when finished.</p>",
                    "sMessage": null,
                    "bShowAll": true,
                    "sToolTip": "View print view",
                    "sButtonClass": "DTTT_button_print",
                    "sButtonText": "Print",
                    "fnClick": function ( nButton, oConfig ) {
                        this.fnPrint( true, oConfig );
                    }
                } ),

                "text": $.extend( {}, TableTools.buttonBase ),

                "select": $.extend( {}, TableTools.buttonBase, {
                    "sButtonText": "Select button",
                    "fnSelect": function( nButton, oConfig ) {
                        if ( this.fnGetSelected().length !== 0 ) {
                            $(nButton).removeClass( this.classes.buttons.disabled );
                        } else {
                            $(nButton).addClass( this.classes.buttons.disabled );
                        }
                    },
                    "fnInit": function( nButton, oConfig ) {
                        $(nButton).addClass( this.classes.buttons.disabled );
                    }
                } ),

                "select_single": $.extend( {}, TableTools.buttonBase, {
                    "sButtonText": "Select button",
                    "fnSelect": function( nButton, oConfig ) {
                        var iSelected = this.fnGetSelected().length;
                        if ( iSelected == 1 ) {
                            $(nButton).removeClass( this.classes.buttons.disabled );
                        } else {
                            $(nButton).addClass( this.classes.buttons.disabled );
                        }
                    },
                    "fnInit": function( nButton, oConfig ) {
                        $(nButton).addClass( this.classes.buttons.disabled );
                    }
                } ),

                "select_all": $.extend( {}, TableTools.buttonBase, {
                    "sButtonText": "Select all",
                    "fnClick": function( nButton, oConfig ) {
                        this.fnSelectAll();
                    },
                    "fnSelect": function( nButton, oConfig ) {
                        if ( this.fnGetSelected().length == this.s.dt.fnRecordsDisplay() ) {
                            $(nButton).addClass( this.classes.buttons.disabled );
                        } else {
                            $(nButton).removeClass( this.classes.buttons.disabled );
                        }
                    }
                } ),

                "select_none": $.extend( {}, TableTools.buttonBase, {
                    "sButtonText": "Deselect all",
                    "fnClick": function( nButton, oConfig ) {
                        this.fnSelectNone();
                    },
                    "fnSelect": function( nButton, oConfig ) {
                        if ( this.fnGetSelected().length !== 0 ) {
                            $(nButton).removeClass( this.classes.buttons.disabled );
                        } else {
                            $(nButton).addClass( this.classes.buttons.disabled );
                        }
                    },
                    "fnInit": function( nButton, oConfig ) {
                        $(nButton).addClass( this.classes.buttons.disabled );
                    }
                } ),

                "ajax": $.extend( {}, TableTools.buttonBase, {
                    "sAjaxUrl": "/xhr.php",
                    "sButtonText": "Ajax button",
                    "fnClick": function( nButton, oConfig ) {
                        var sData = this.fnGetTableData(oConfig);
                        $.ajax( {
                            "url": oConfig.sAjaxUrl,
                            "data": [
                                { "name": "tableData", "value": sData }
                            ],
                            "success": oConfig.fnAjaxComplete,
                            "dataType": "json",
                            "type": "POST",
                            "cache": false,
                            "error": function () {
                                alert( "Error detected when sending table data to server" );
                            }
                        } );
                    },
                    "fnAjaxComplete": function( json ) {
                        alert( 'Ajax complete' );
                    }
                } ),

                "div": $.extend( {}, TableTools.buttonBase, {
                    "sAction": "div",
                    "sTag": "div",
                    "sButtonClass": "DTTT_nonbutton",
                    "sButtonText": "Text button"
                } ),

                "collection": $.extend( {}, TableTools.buttonBase, {
                    "sAction": "collection",
                    "sButtonClass": "DTTT_button_collection",
                    "sButtonText": "Collection",
                    "fnClick": function( nButton, oConfig ) {
                        this._fnCollectionShow(nButton, oConfig);
                    }
                } )
            };
            /*
             *  on* callback parameters:
             *     1. node - button element
             *     2. object - configuration object for this button
             *     3. object - ZeroClipboard reference (flash button only)
             *     4. string - Returned string from Flash (flash button only - and only on 'complete')
             */

// Alias to match the other plug-ins styling
            TableTools.buttons = TableTools.BUTTONS;


            /**
             * @namespace Classes used by TableTools - allows the styles to be override easily.
             *   Note that when TableTools initialises it will take a copy of the classes object
             *   and will use its internal copy for the remainder of its run time.
             */
            TableTools.classes = {
                "container": "DTTT_container",
                "buttons": {
                    "normal": "DTTT_button",
                    "disabled": "DTTT_disabled"
                },
                "collection": {
                    "container": "DTTT_collection",
                    "background": "DTTT_collection_background",
                    "buttons": {
                        "normal": "DTTT_button",
                        "disabled": "DTTT_disabled"
                    }
                },
                "select": {
                    "table": "DTTT_selectable",
                    "row": "DTTT_selected selected"
                },
                "print": {
                    "body": "DTTT_Print",
                    "info": "DTTT_print_info",
                    "message": "DTTT_PrintMessage"
                }
            };


            /**
             * @namespace ThemeRoller classes - built in for compatibility with DataTables'
             *   bJQueryUI option.
             */
            TableTools.classes_themeroller = {
                "container": "DTTT_container ui-buttonset ui-buttonset-multi",
                "buttons": {
                    "normal": "DTTT_button ui-button ui-state-default"
                },
                "collection": {
                    "container": "DTTT_collection ui-buttonset ui-buttonset-multi"
                }
            };


            /**
             * @namespace TableTools default settings for initialisation
             */
            TableTools.DEFAULTS = {
                "sSwfPath":        "../swf/copy_csv_xls_pdf.swf",
                "sRowSelect":      "none",
                "sRowSelector":    "tr",
                "sSelectedClass":  null,
                "fnPreRowSelect":  null,
                "fnRowSelected":   null,
                "fnRowDeselected": null,
                "aButtons":        [ "copy", "csv", "xls", "pdf", "print" ],
                "oTags": {
                    "container": "div",
                    "button": "a", // We really want to use buttons here, but Firefox and IE ignore the
                    // click on the Flash element in the button (but not mouse[in|out]).
                    "liner": "span",
                    "collection": {
                        "container": "div",
                        "button": "a",
                        "liner": "span"
                    }
                }
            };

// Alias to match the other plug-ins
            TableTools.defaults = TableTools.DEFAULTS;


            /**
             * Name of this class
             *  @constant CLASS
             *  @type	 String
             *  @default  TableTools
             */
            TableTools.prototype.CLASS = "TableTools";


            /**
             * TableTools version
             *  @constant  VERSION
             *  @type	  String
             *  @default   See code
             */
            TableTools.version = "2.2.1";



// DataTables 1.10 API
//
// This will be extended in a big way in in TableTools 3 to provide API methods
// such as rows().select() and rows.selected() etc, but for the moment the
// tabletools() method simply returns the instance.

            if ( $.fn.dataTable.Api ) {
                $.fn.dataTable.Api.register( 'tabletools()', function () {
                    var tt = null;

                    if ( this.context.length > 0 ) {
                        tt = TableTools.fnGetInstance( this.context[0].nTable );
                    }

                    return tt;
                } );
            }




            /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
             * Initialisation
             * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

            /*
             * Register a new feature with DataTables
             */
            if ( typeof $.fn.dataTable == "function" &&
                typeof $.fn.dataTableExt.fnVersionCheck == "function" &&
                $.fn.dataTableExt.fnVersionCheck('1.9.0') )
            {
                $.fn.dataTableExt.aoFeatures.push( {
                    "fnInit": function( oDTSettings ) {
                        var init = oDTSettings.oInit;
                        var opts = init ?
                        init.tableTools || init.oTableTools || {} :
                        {};

                        var oTT = new TableTools( oDTSettings.oInstance, opts );
                        TableTools._aInstances.push( oTT );

                        return oTT.dom.container;
                    },
                    "cFeature": "T",
                    "sFeature": "TableTools"
                } );
            }
            else
            {
                alert( "Warning: TableTools requires DataTables 1.9.0 or newer - www.datatables.net/download");
            }

            $.fn.DataTable.TableTools = TableTools;

        })(jQuery, window, document);

        /*
         * Register a new feature with DataTables
         */
        if ( typeof $.fn.dataTable == "function" &&
            typeof $.fn.dataTableExt.fnVersionCheck == "function" &&
            $.fn.dataTableExt.fnVersionCheck('1.9.0') )
        {
            $.fn.dataTableExt.aoFeatures.push( {
                "fnInit": function( oDTSettings ) {
                    var oOpts = typeof oDTSettings.oInit.oTableTools != 'undefined' ?
                        oDTSettings.oInit.oTableTools : {};

                    var oTT = new TableTools( oDTSettings.oInstance, oOpts );
                    TableTools._aInstances.push( oTT );

                    return oTT.dom.container;
                },
                "cFeature": "T",
                "sFeature": "TableTools"
            } );
        }
        else
        {
            alert( "Warning: TableTools 2 requires DataTables 1.9.0 or newer - www.datatables.net/download");
        }


        $.fn.dataTable.TableTools = TableTools;
        $.fn.DataTable.TableTools = TableTools;


        return TableTools;
    }; // /factory


// Define as an AMD module if possible
    if ( typeof define === 'function' && define.amd ) {
        define( 'datatables-tabletools', ['jquery', 'datatables'], factory );
    }
    else if ( jQuery && !jQuery.fn.dataTable.TableTools ) {
        // Otherwise simply initialise as normal, stopping multiple evaluation
        factory( jQuery, jQuery.fn.dataTable );
    }


})(window, document);


/*!
 * Jasny Bootstrap v3.1.3 (http://jasny.github.io/bootstrap)
 * Copyright 2012-2014 Arnold Daniels
 * Licensed under Apache-2.0 (https://github.com/jasny/bootstrap/blob/master/LICENSE)
 */

if (typeof jQuery === 'undefined') { throw new Error('Jasny Bootstrap\'s JavaScript requires jQuery') }

/* ========================================================================
 * Bootstrap: transition.js v3.1.3
 * http://getbootstrap.com/javascript/#transitions
 * ========================================================================
 * Copyright 2011-2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // CSS TRANSITION SUPPORT (Shoutout: http://www.modernizr.com/)
  // ============================================================

  function transitionEnd() {
    var el = document.createElement('bootstrap')

    var transEndEventNames = {
      WebkitTransition : 'webkitTransitionEnd',
      MozTransition    : 'transitionend',
      OTransition      : 'oTransitionEnd otransitionend',
      transition       : 'transitionend'
    }

    for (var name in transEndEventNames) {
      if (el.style[name] !== undefined) {
        return { end: transEndEventNames[name] }
      }
    }

    return false // explicit for ie8 (  ._.)
  }

  if ($.support.transition !== undefined) return  // Prevent conflict with Twitter Bootstrap

  // http://blog.alexmaccaw.com/css-transitions
  $.fn.emulateTransitionEnd = function (duration) {
    var called = false, $el = this
    $(this).one($.support.transition.end, function () { called = true })
    var callback = function () { if (!called) $($el).trigger($.support.transition.end) }
    setTimeout(callback, duration)
    return this
  }

  $(function () {
    $.support.transition = transitionEnd()
  })

}(window.jQuery);

/* ========================================================================
 * Bootstrap: offcanvas.js v3.1.3
 * http://jasny.github.io/bootstrap/javascript/#offcanvas
 * ========================================================================
 * Copyright 2013-2014 Arnold Daniels
 *
 * Licensed under the Apache License, Version 2.0 (the "License")
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ======================================================================== */

+function ($) { "use strict";

  // OFFCANVAS PUBLIC CLASS DEFINITION
  // =================================

  var OffCanvas = function (element, options) {
    this.$element = $(element)
    this.options  = $.extend({}, OffCanvas.DEFAULTS, options)
    this.state    = null
    this.placement = null
    
    if (this.options.recalc) {
      this.calcClone()
      $(window).on('resize', $.proxy(this.recalc, this))
    }
    
    if (this.options.autohide)
      $(document).on('click', $.proxy(this.autohide, this))

    if (this.options.toggle) this.toggle()
    
    if (this.options.disablescrolling) {
        this.options.disableScrolling = this.options.disablescrolling
        delete this.options.disablescrolling
    }
  }

  OffCanvas.DEFAULTS = {
    toggle: true,
    placement: 'auto',
    autohide: true,
    recalc: true,
    disableScrolling: true
  }

  OffCanvas.prototype.offset = function () {
    switch (this.placement) {
      case 'left':
      case 'right':  return this.$element.outerWidth()
      case 'top':
      case 'bottom': return this.$element.outerHeight()
    }
  }
  
  OffCanvas.prototype.calcPlacement = function () {
    if (this.options.placement !== 'auto') {
        this.placement = this.options.placement
        return
    }
    
    if (!this.$element.hasClass('in')) {
      this.$element.css('visiblity', 'hidden !important').addClass('in')
    } 
    
    var horizontal = $(window).width() / this.$element.width()
    var vertical = $(window).height() / this.$element.height()
        
    var element = this.$element
    function ab(a, b) {
      if (element.css(b) === 'auto') return a
      if (element.css(a) === 'auto') return b
      
      var size_a = parseInt(element.css(a), 10)
      var size_b = parseInt(element.css(b), 10)
  
      return size_a > size_b ? b : a
    }
    
    this.placement = horizontal >= vertical ? ab('left', 'right') : ab('top', 'bottom')
      
    if (this.$element.css('visibility') === 'hidden !important') {
      this.$element.removeClass('in').css('visiblity', '')
    }
  }
  
  OffCanvas.prototype.opposite = function (placement) {
    switch (placement) {
      case 'top':    return 'bottom'
      case 'left':   return 'right'
      case 'bottom': return 'top'
      case 'right':  return 'left'
    }
  }
  
  OffCanvas.prototype.getCanvasElements = function() {
    // Return a set containing the canvas plus all fixed elements
    var canvas = this.options.canvas ? $(this.options.canvas) : this.$element
    
    var fixed_elements = canvas.find('*').filter(function() {
      return $(this).css('position') === 'fixed'
    }).not(this.options.exclude)
    
    return canvas.add(fixed_elements)
  }
  
  OffCanvas.prototype.slide = function (elements, offset, callback) {
    // Use jQuery animation if CSS transitions aren't supported
    if (!$.support.transition) {
      var anim = {}
      anim[this.placement] = "+=" + offset
      return elements.animate(anim, 350, callback)
    }

    var placement = this.placement
    var opposite = this.opposite(placement)
    
    elements.each(function() {
      if ($(this).css(placement) !== 'auto')
        $(this).css(placement, (parseInt($(this).css(placement), 10) || 0) + offset)
      
      if ($(this).css(opposite) !== 'auto')
        $(this).css(opposite, (parseInt($(this).css(opposite), 10) || 0) - offset)
    })
    
    this.$element
      .one($.support.transition.end, callback)
      .emulateTransitionEnd(350)
  }

  OffCanvas.prototype.disableScrolling = function() {
    var bodyWidth = $('body').width()
    var prop = 'padding-' + this.opposite(this.placement)

    if ($('body').data('offcanvas-style') === undefined) {
      $('body').data('offcanvas-style', $('body').attr('style') || '')
    }
      
    $('body').css('overflow', 'hidden')

    if ($('body').width() > bodyWidth) {
      var padding = parseInt($('body').css(prop), 10) + $('body').width() - bodyWidth
      
      setTimeout(function() {
        $('body').css(prop, padding)
      }, 1)
    }
  }

  OffCanvas.prototype.show = function () {
    if (this.state) return
    
    var startEvent = $.Event('show.bs.offcanvas')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    this.state = 'slide-in'
    this.calcPlacement();
    
    var elements = this.getCanvasElements()
    var placement = this.placement
    var opposite = this.opposite(placement)
    var offset = this.offset()

    if (elements.index(this.$element) !== -1) {
      $(this.$element).data('offcanvas-style', $(this.$element).attr('style') || '')
      this.$element.css(placement, -1 * offset)
      this.$element.css(placement); // Workaround: Need to get the CSS property for it to be applied before the next line of code
    }

    elements.addClass('canvas-sliding').each(function() {
      if ($(this).data('offcanvas-style') === undefined) $(this).data('offcanvas-style', $(this).attr('style') || '')
      if ($(this).css('position') === 'static') $(this).css('position', 'relative')
      if (($(this).css(placement) === 'auto' || $(this).css(placement) === '0px') &&
          ($(this).css(opposite) === 'auto' || $(this).css(opposite) === '0px')) {
        $(this).css(placement, 0)
      }
    })
    
    if (this.options.disableScrolling) this.disableScrolling()
    
    var complete = function () {
      if (this.state != 'slide-in') return
      
      this.state = 'slid'

      elements.removeClass('canvas-sliding').addClass('canvas-slid')
      this.$element.trigger('shown.bs.offcanvas')
    }

    setTimeout($.proxy(function() {
      this.$element.addClass('in')
      this.slide(elements, offset, $.proxy(complete, this))
    }, this), 1)
  }

  OffCanvas.prototype.hide = function (fast) {
    if (this.state !== 'slid') return

    var startEvent = $.Event('hide.bs.offcanvas')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    this.state = 'slide-out'

    var elements = $('.canvas-slid')
    var placement = this.placement
    var offset = -1 * this.offset()

    var complete = function () {
      if (this.state != 'slide-out') return
      
      this.state = null
      this.placement = null
      
      this.$element.removeClass('in')
      
      elements.removeClass('canvas-sliding')
      elements.add(this.$element).add('body').each(function() {
        $(this).attr('style', $(this).data('offcanvas-style')).removeData('offcanvas-style')
      })

      this.$element.trigger('hidden.bs.offcanvas')
    }

    elements.removeClass('canvas-slid').addClass('canvas-sliding')
    
    setTimeout($.proxy(function() {
      this.slide(elements, offset, $.proxy(complete, this))
    }, this), 1)
  }

  OffCanvas.prototype.toggle = function () {
    if (this.state === 'slide-in' || this.state === 'slide-out') return
    this[this.state === 'slid' ? 'hide' : 'show']()
  }

  OffCanvas.prototype.calcClone = function() {
    this.$calcClone = this.$element.clone()
      .html('')
      .addClass('offcanvas-clone').removeClass('in')
      .appendTo($('body'))
  }

  OffCanvas.prototype.recalc = function () {
    if (this.$calcClone.css('display') === 'none' || (this.state !== 'slid' && this.state !== 'slide-in')) return
    
    this.state = null
    this.placement = null
    var elements = this.getCanvasElements()
    
    this.$element.removeClass('in')
    
    elements.removeClass('canvas-slid')
    elements.add(this.$element).add('body').each(function() {
      $(this).attr('style', $(this).data('offcanvas-style')).removeData('offcanvas-style')
    })
  }
  
  OffCanvas.prototype.autohide = function (e) {
    if ($(e.target).closest(this.$element).length === 0) this.hide()
  }

  // OFFCANVAS PLUGIN DEFINITION
  // ==========================

  var old = $.fn.offcanvas

  $.fn.offcanvas = function (option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.offcanvas')
      var options = $.extend({}, OffCanvas.DEFAULTS, $this.data(), typeof option === 'object' && option)

      if (!data) $this.data('bs.offcanvas', (data = new OffCanvas(this, options)))
      if (typeof option === 'string') data[option]()
    })
  }

  $.fn.offcanvas.Constructor = OffCanvas


  // OFFCANVAS NO CONFLICT
  // ====================

  $.fn.offcanvas.noConflict = function () {
    $.fn.offcanvas = old
    return this
  }


  // OFFCANVAS DATA-API
  // =================

  $(document).on('click.bs.offcanvas.data-api', '[data-toggle=offcanvas]', function (e) {
    var $this   = $(this), href
    var target  = $this.attr('data-target')
        || e.preventDefault()
        || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') //strip for ie7
    var $canvas = $(target)
    var data    = $canvas.data('bs.offcanvas')
    var option  = data ? 'toggle' : $this.data()

    e.stopPropagation()

    if (data) data.toggle()
      else $canvas.offcanvas(option)
  })

}(window.jQuery);

/* ============================================================
 * Bootstrap: rowlink.js v3.1.3
 * http://jasny.github.io/bootstrap/javascript/#rowlink
 * ============================================================
 * Copyright 2012-2014 Arnold Daniels
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ============================================================ */

+function ($) { "use strict";

  var Rowlink = function (element, options) {
    this.$element = $(element)
    this.options = $.extend({}, Rowlink.DEFAULTS, options)
    
    this.$element.on('click.bs.rowlink', 'td:not(.rowlink-skip)', $.proxy(this.click, this))
  }

  Rowlink.DEFAULTS = {
    target: "a"
  }

  Rowlink.prototype.click = function(e) {
    var target = $(e.currentTarget).closest('tr').find(this.options.target)[0]
    if ($(e.target)[0] === target) return
    
    e.preventDefault();
    
    if (target.click) {
      target.click()
    } else if (document.createEvent) {
      var evt = document.createEvent("MouseEvents"); 
      evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null); 
      target.dispatchEvent(evt);
    }
  }

  
  // ROWLINK PLUGIN DEFINITION
  // ===========================

  var old = $.fn.rowlink

  $.fn.rowlink = function (options) {
    return this.each(function () {
      var $this = $(this)
      var data = $this.data('bs.rowlink')
      if (!data) $this.data('bs.rowlink', (data = new Rowlink(this, options)))
    })
  }

  $.fn.rowlink.Constructor = Rowlink


  // ROWLINK NO CONFLICT
  // ====================

  $.fn.rowlink.noConflict = function () {
    $.fn.rowlink = old
    return this
  }


  // ROWLINK DATA-API
  // ==================

  $(document).on('click.bs.rowlink.data-api', '[data-link="row"]', function (e) {
    if ($(e.target).closest('.rowlink-skip').length !== 0) return
    
    var $this = $(this)
    if ($this.data('bs.rowlink')) return
    $this.rowlink($this.data())
    $(e.target).trigger('click.bs.rowlink')
  })
  
}(window.jQuery);

/* ===========================================================
 * Bootstrap: inputmask.js v3.1.0
 * http://jasny.github.io/bootstrap/javascript/#inputmask
 * 
 * Based on Masked Input plugin by Josh Bush (digitalbush.com)
 * ===========================================================
 * Copyright 2012-2014 Arnold Daniels
 *
 * Licensed under the Apache License, Version 2.0 (the "License")
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================== */

+function ($) { "use strict";

  var isIphone = (window.orientation !== undefined)
  var isAndroid = navigator.userAgent.toLowerCase().indexOf("android") > -1
  var isIE = window.navigator.appName == 'Microsoft Internet Explorer'

  // INPUTMASK PUBLIC CLASS DEFINITION
  // =================================

  var Inputmask = function (element, options) {
    if (isAndroid) return // No support because caret positioning doesn't work on Android
    
    this.$element = $(element)
    this.options = $.extend({}, Inputmask.DEFAULTS, options)
    this.mask = String(this.options.mask)
    
    this.init()
    this.listen()
        
    this.checkVal() //Perform initial check for existing values
  }

  Inputmask.DEFAULTS = {
    mask: "",
    placeholder: "_",
    definitions: {
      '9': "[0-9]",
      'a': "[A-Za-z]",
      'w': "[A-Za-z0-9]",
      '*': "."
    }
  }

  Inputmask.prototype.init = function() {
    var defs = this.options.definitions
    var len = this.mask.length

    this.tests = [] 
    this.partialPosition = this.mask.length
    this.firstNonMaskPos = null

    $.each(this.mask.split(""), $.proxy(function(i, c) {
      if (c == '?') {
        len--
        this.partialPosition = i
      } else if (defs[c]) {
        this.tests.push(new RegExp(defs[c]))
        if (this.firstNonMaskPos === null)
          this.firstNonMaskPos =  this.tests.length - 1
      } else {
        this.tests.push(null)
      }
    }, this))

    this.buffer = $.map(this.mask.split(""), $.proxy(function(c, i) {
      if (c != '?') return defs[c] ? this.options.placeholder : c
    }, this))

    this.focusText = this.$element.val()

    this.$element.data("rawMaskFn", $.proxy(function() {
      return $.map(this.buffer, function(c, i) {
        return this.tests[i] && c != this.options.placeholder ? c : null
      }).join('')
    }, this))
  }
    
  Inputmask.prototype.listen = function() {
    if (this.$element.attr("readonly")) return

    var pasteEventName = (isIE ? 'paste' : 'input') + ".mask"

    this.$element
      .on("unmask.bs.inputmask", $.proxy(this.unmask, this))

      .on("focus.bs.inputmask", $.proxy(this.focusEvent, this))
      .on("blur.bs.inputmask", $.proxy(this.blurEvent, this))

      .on("keydown.bs.inputmask", $.proxy(this.keydownEvent, this))
      .on("keypress.bs.inputmask", $.proxy(this.keypressEvent, this))

      .on(pasteEventName, $.proxy(this.pasteEvent, this))
  }

  //Helper Function for Caret positioning
  Inputmask.prototype.caret = function(begin, end) {
    if (this.$element.length === 0) return
    if (typeof begin == 'number') {
      end = (typeof end == 'number') ? end : begin
      return this.$element.each(function() {
        if (this.setSelectionRange) {
          this.setSelectionRange(begin, end)
        } else if (this.createTextRange) {
          var range = this.createTextRange()
          range.collapse(true)
          range.moveEnd('character', end)
          range.moveStart('character', begin)
          range.select()
        }
      })
    } else {
      if (this.$element[0].setSelectionRange) {
        begin = this.$element[0].selectionStart
        end = this.$element[0].selectionEnd
      } else if (document.selection && document.selection.createRange) {
        var range = document.selection.createRange()
        begin = 0 - range.duplicate().moveStart('character', -100000)
        end = begin + range.text.length
      }
      return {
        begin: begin, 
        end: end
      }
    }
  }
  
  Inputmask.prototype.seekNext = function(pos) {
    var len = this.mask.length
    while (++pos <= len && !this.tests[pos]);

    return pos
  }
  
  Inputmask.prototype.seekPrev = function(pos) {
    while (--pos >= 0 && !this.tests[pos]);

    return pos
  }

  Inputmask.prototype.shiftL = function(begin,end) {
    var len = this.mask.length

    if (begin < 0) return

    for (var i = begin, j = this.seekNext(end); i < len; i++) {
      if (this.tests[i]) {
        if (j < len && this.tests[i].test(this.buffer[j])) {
          this.buffer[i] = this.buffer[j]
          this.buffer[j] = this.options.placeholder
        } else
          break
        j = this.seekNext(j)
      }
    }
    this.writeBuffer()
    this.caret(Math.max(this.firstNonMaskPos, begin))
  }

  Inputmask.prototype.shiftR = function(pos) {
    var len = this.mask.length

    for (var i = pos, c = this.options.placeholder; i < len; i++) {
      if (this.tests[i]) {
        var j = this.seekNext(i)
        var t = this.buffer[i]
        this.buffer[i] = c
        if (j < len && this.tests[j].test(t))
          c = t
        else
          break
      }
    }
  },

  Inputmask.prototype.unmask = function() {
    this.$element
      .unbind(".mask")
      .removeData("inputmask")
  }

  Inputmask.prototype.focusEvent = function() {
    this.focusText = this.$element.val()
    var len = this.mask.length 
    var pos = this.checkVal()
    this.writeBuffer()

    var that = this
    var moveCaret = function() {
      if (pos == len)
        that.caret(0, pos)
      else
        that.caret(pos)
    }

    moveCaret()
    setTimeout(moveCaret, 50)
  }

  Inputmask.prototype.blurEvent = function() {
    this.checkVal()
    if (this.$element.val() !== this.focusText)
      this.$element.trigger('change')
  }

  Inputmask.prototype.keydownEvent = function(e) {
    var k = e.which

    //backspace, delete, and escape get special treatment
    if (k == 8 || k == 46 || (isIphone && k == 127)) {
      var pos = this.caret(),
      begin = pos.begin,
      end = pos.end

      if (end - begin === 0) {
        begin = k != 46 ? this.seekPrev(begin) : (end = this.seekNext(begin - 1))
        end = k == 46 ? this.seekNext(end) : end
      }
      this.clearBuffer(begin, end)
      this.shiftL(begin, end - 1)

      return false
    } else if (k == 27) {//escape
      this.$element.val(this.focusText)
      this.caret(0, this.checkVal())
      return false
    }
  }

  Inputmask.prototype.keypressEvent = function(e) {
    var len = this.mask.length

    var k = e.which,
    pos = this.caret()

    if (e.ctrlKey || e.altKey || e.metaKey || k < 32)  {//Ignore
      return true
    } else if (k) {
      if (pos.end - pos.begin !== 0) {
        this.clearBuffer(pos.begin, pos.end)
        this.shiftL(pos.begin, pos.end - 1)
      }

      var p = this.seekNext(pos.begin - 1)
      if (p < len) {
        var c = String.fromCharCode(k)
        if (this.tests[p].test(c)) {
          this.shiftR(p)
          this.buffer[p] = c
          this.writeBuffer()
          var next = this.seekNext(p)
          this.caret(next)
        }
      }
      return false
    }
  }

  Inputmask.prototype.pasteEvent = function() {
    var that = this

    setTimeout(function() {
      that.caret(that.checkVal(true))
    }, 0)
  }

  Inputmask.prototype.clearBuffer = function(start, end) {
    var len = this.mask.length

    for (var i = start; i < end && i < len; i++) {
      if (this.tests[i])
        this.buffer[i] = this.options.placeholder
    }
  }

  Inputmask.prototype.writeBuffer = function() {
    return this.$element.val(this.buffer.join('')).val()
  }

  Inputmask.prototype.checkVal = function(allow) {
    var len = this.mask.length
    //try to place characters where they belong
    var test = this.$element.val()
    var lastMatch = -1

    for (var i = 0, pos = 0; i < len; i++) {
      if (this.tests[i]) {
        this.buffer[i] = this.options.placeholder
        while (pos++ < test.length) {
          var c = test.charAt(pos - 1)
          if (this.tests[i].test(c)) {
            this.buffer[i] = c
            lastMatch = i
            break
          }
        }
        if (pos > test.length)
          break
      } else if (this.buffer[i] == test.charAt(pos) && i != this.partialPosition) {
        pos++
        lastMatch = i
      }
    }
    if (!allow && lastMatch + 1 < this.partialPosition) {
      this.$element.val("")
      this.clearBuffer(0, len)
    } else if (allow || lastMatch + 1 >= this.partialPosition) {
      this.writeBuffer()
      if (!allow) this.$element.val(this.$element.val().substring(0, lastMatch + 1))
    }
    return (this.partialPosition ? i : this.firstNonMaskPos)
  }

  
  // INPUTMASK PLUGIN DEFINITION
  // ===========================

  var old = $.fn.inputmask
  
  $.fn.inputmask = function (options) {
    return this.each(function () {
      var $this = $(this)
      var data = $this.data('bs.inputmask')
      
      if (!data) $this.data('bs.inputmask', (data = new Inputmask(this, options)))
    })
  }

  $.fn.inputmask.Constructor = Inputmask


  // INPUTMASK NO CONFLICT
  // ====================

  $.fn.inputmask.noConflict = function () {
    $.fn.inputmask = old
    return this
  }


  // INPUTMASK DATA-API
  // ==================

  $(document).on('focus.bs.inputmask.data-api', '[data-mask]', function (e) {
    var $this = $(this)
    if ($this.data('bs.inputmask')) return
    $this.inputmask($this.data())
  })

}(window.jQuery);

/* ===========================================================
 * Bootstrap: fileinput.js v3.1.3
 * http://jasny.github.com/bootstrap/javascript/#fileinput
 * ===========================================================
 * Copyright 2012-2014 Arnold Daniels
 *
 * Licensed under the Apache License, Version 2.0 (the "License")
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================== */

+function ($) { "use strict";

  var isIE = window.navigator.appName == 'Microsoft Internet Explorer'

  // FILEUPLOAD PUBLIC CLASS DEFINITION
  // =================================

  var Fileinput = function (element, options) {
    this.$element = $(element)
    
    this.$input = this.$element.find(':file')
    if (this.$input.length === 0) return

    this.name = this.$input.attr('name') || options.name

    this.$hidden = this.$element.find('input[type=hidden][name="' + this.name + '"]')
    if (this.$hidden.length === 0) {
      this.$hidden = $('<input type="hidden">').insertBefore(this.$input)
    }

    this.$preview = this.$element.find('.fileinput-preview')
    var height = this.$preview.css('height')
    if (this.$preview.css('display') !== 'inline' && height !== '0px' && height !== 'none') {
      this.$preview.css('line-height', height)
    }
        
    this.original = {
      exists: this.$element.hasClass('fileinput-exists'),
      preview: this.$preview.html(),
      hiddenVal: this.$hidden.val()
    }
    
    this.listen()
  }
  
  Fileinput.prototype.listen = function() {
    this.$input.on('change.bs.fileinput', $.proxy(this.change, this))
    $(this.$input[0].form).on('reset.bs.fileinput', $.proxy(this.reset, this))
    
    this.$element.find('[data-trigger="fileinput"]').on('click.bs.fileinput', $.proxy(this.trigger, this))
    this.$element.find('[data-dismiss="fileinput"]').on('click.bs.fileinput', $.proxy(this.clear, this))
  },

  Fileinput.prototype.change = function(e) {
    var files = e.target.files === undefined ? (e.target && e.target.value ? [{ name: e.target.value.replace(/^.+\\/, '')}] : []) : e.target.files
    
    e.stopPropagation()

    if (files.length === 0) {
      this.clear()
      return
    }

    this.$hidden.val('')
    this.$hidden.attr('name', '')
    this.$input.attr('name', this.name)

    var file = files[0]

    if (this.$preview.length > 0 && (typeof file.type !== "undefined" ? file.type.match(/^image\/(gif|png|jpeg)$/) : file.name.match(/\.(gif|png|jpe?g)$/i)) && typeof FileReader !== "undefined") {
      var reader = new FileReader()
      var preview = this.$preview
      var element = this.$element

      reader.onload = function(re) {
        var $img = $('<img>')
        $img[0].src = re.target.result
        files[0].result = re.target.result
        
        element.find('.fileinput-filename').text(file.name)
        
        // if parent has max-height, using `(max-)height: 100%` on child doesn't take padding and border into account
        if (preview.css('max-height') != 'none') $img.css('max-height', parseInt(preview.css('max-height'), 10) - parseInt(preview.css('padding-top'), 10) - parseInt(preview.css('padding-bottom'), 10)  - parseInt(preview.css('border-top'), 10) - parseInt(preview.css('border-bottom'), 10))
        
        preview.html($img)
        element.addClass('fileinput-exists').removeClass('fileinput-new')

        element.trigger('change.bs.fileinput', files)
      }

      reader.readAsDataURL(file)
    } else {
      this.$element.find('.fileinput-filename').text(file.name)
      this.$preview.text(file.name)
      
      this.$element.addClass('fileinput-exists').removeClass('fileinput-new')
      
      this.$element.trigger('change.bs.fileinput')
    }
  },

  Fileinput.prototype.clear = function(e) {
    if (e) e.preventDefault()
    
    this.$hidden.val('')
    this.$hidden.attr('name', this.name)
    this.$input.attr('name', '')

    //ie8+ doesn't support changing the value of input with type=file so clone instead
    if (isIE) { 
      var inputClone = this.$input.clone(true);
      this.$input.after(inputClone);
      this.$input.remove();
      this.$input = inputClone;
    } else {
      this.$input.val('')
    }

    this.$preview.html('')
    this.$element.find('.fileinput-filename').text('')
    this.$element.addClass('fileinput-new').removeClass('fileinput-exists')
    
    if (e !== undefined) {
      this.$input.trigger('change')
      this.$element.trigger('clear.bs.fileinput')
    }
  },

  Fileinput.prototype.reset = function() {
    this.clear()

    this.$hidden.val(this.original.hiddenVal)
    this.$preview.html(this.original.preview)
    this.$element.find('.fileinput-filename').text('')

    if (this.original.exists) this.$element.addClass('fileinput-exists').removeClass('fileinput-new')
     else this.$element.addClass('fileinput-new').removeClass('fileinput-exists')
    
    this.$element.trigger('reseted.bs.fileinput')
  },

  Fileinput.prototype.trigger = function(e) {
    this.$input.trigger('click')
    e.preventDefault()
  }

  
  // FILEUPLOAD PLUGIN DEFINITION
  // ===========================

  var old = $.fn.fileinput
  
  $.fn.fileinput = function (options) {
    return this.each(function () {
      var $this = $(this),
          data = $this.data('bs.fileinput')
      if (!data) $this.data('bs.fileinput', (data = new Fileinput(this, options)))
      if (typeof options == 'string') data[options]()
    })
  }

  $.fn.fileinput.Constructor = Fileinput


  // FILEINPUT NO CONFLICT
  // ====================

  $.fn.fileinput.noConflict = function () {
    $.fn.fileinput = old
    return this
  }


  // FILEUPLOAD DATA-API
  // ==================

  $(document).on('click.fileinput.data-api', '[data-provides="fileinput"]', function (e) {
    var $this = $(this)
    if ($this.data('bs.fileinput')) return
    $this.fileinput($this.data())
      
    var $target = $(e.target).closest('[data-dismiss="fileinput"],[data-trigger="fileinput"]');
    if ($target.length > 0) {
      e.preventDefault()
      $target.trigger('click.bs.fileinput')
    }
  })

}(window.jQuery);

/**
 *
 * jquery.sparkline.js
 *
 * v2.1.2
 * (c) Splunk, Inc
 * Contact: Gareth Watts (gareth@splunk.com)
 * http://omnipotent.net/jquery.sparkline/
 *
 * Generates inline sparkline charts from data supplied either to the method
 * or inline in HTML
 *
 * Compatible with Internet Explorer 6.0+ and modern browsers equipped with the canvas tag
 * (Firefox 2.0+, Safari, Opera, etc)
 *
 * License: New BSD License
 *
 * Copyright (c) 2012, Splunk Inc.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 *     * Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright notice,
 *       this list of conditions and the following disclaimer in the documentation
 *       and/or other materials provided with the distribution.
 *     * Neither the name of Splunk Inc nor the names of its contributors may
 *       be used to endorse or promote products derived from this software without
 *       specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT
 * OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)
 * HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 *
 * Usage:
 *  $(selector).sparkline(values, options)
 *
 * If values is undefined or set to 'html' then the data values are read from the specified tag:
 *   <p>Sparkline: <span class="sparkline">1,4,6,6,8,5,3,5</span></p>
 *   $('.sparkline').sparkline();
 * There must be no spaces in the enclosed data set
 *
 * Otherwise values must be an array of numbers or null values
 *    <p>Sparkline: <span id="sparkline1">This text replaced if the browser is compatible</span></p>
 *    $('#sparkline1').sparkline([1,4,6,6,8,5,3,5])
 *    $('#sparkline2').sparkline([1,4,6,null,null,5,3,5])
 *
 * Values can also be specified in an HTML comment, or as a values attribute:
 *    <p>Sparkline: <span class="sparkline"><!--1,4,6,6,8,5,3,5 --></span></p>
 *    <p>Sparkline: <span class="sparkline" values="1,4,6,6,8,5,3,5"></span></p>
 *    $('.sparkline').sparkline();
 *
 * For line charts, x values can also be specified:
 *   <p>Sparkline: <span class="sparkline">1:1,2.7:4,3.4:6,5:6,6:8,8.7:5,9:3,10:5</span></p>
 *    $('#sparkline1').sparkline([ [1,1], [2.7,4], [3.4,6], [5,6], [6,8], [8.7,5], [9,3], [10,5] ])
 *
 * By default, options should be passed in as teh second argument to the sparkline function:
 *   $('.sparkline').sparkline([1,2,3,4], {type: 'bar'})
 *
 * Options can also be set by passing them on the tag itself.  This feature is disabled by default though
 * as there's a slight performance overhead:
 *   $('.sparkline').sparkline([1,2,3,4], {enableTagOptions: true})
 *   <p>Sparkline: <span class="sparkline" sparkType="bar" sparkBarColor="red">loading</span></p>
 * Prefix all options supplied as tag attribute with "spark" (configurable by setting tagOptionPrefix)
 *
 * Supported options:
 *   lineColor - Color of the line used for the chart
 *   fillColor - Color used to fill in the chart - Set to '' or false for a transparent chart
 *   width - Width of the chart - Defaults to 3 times the number of values in pixels
 *   height - Height of the chart - Defaults to the height of the containing element
 *   chartRangeMin - Specify the minimum value to use for the Y range of the chart - Defaults to the minimum value supplied
 *   chartRangeMax - Specify the maximum value to use for the Y range of the chart - Defaults to the maximum value supplied
 *   chartRangeClip - Clip out of range values to the max/min specified by chartRangeMin and chartRangeMax
 *   chartRangeMinX - Specify the minimum value to use for the X range of the chart - Defaults to the minimum value supplied
 *   chartRangeMaxX - Specify the maximum value to use for the X range of the chart - Defaults to the maximum value supplied
 *   composite - If true then don't erase any existing chart attached to the tag, but draw
 *           another chart over the top - Note that width and height are ignored if an
 *           existing chart is detected.
 *   tagValuesAttribute - Name of tag attribute to check for data values - Defaults to 'values'
 *   enableTagOptions - Whether to check tags for sparkline options
 *   tagOptionPrefix - Prefix used for options supplied as tag attributes - Defaults to 'spark'
 *   disableHiddenCheck - If set to true, then the plugin will assume that charts will never be drawn into a
 *           hidden dom element, avoding a browser reflow
 *   disableInteraction - If set to true then all mouseover/click interaction behaviour will be disabled,
 *       making the plugin perform much like it did in 1.x
 *   disableTooltips - If set to true then tooltips will be disabled - Defaults to false (tooltips enabled)
 *   disableHighlight - If set to true then highlighting of selected chart elements on mouseover will be disabled
 *       defaults to false (highlights enabled)
 *   highlightLighten - Factor to lighten/darken highlighted chart values by - Defaults to 1.4 for a 40% increase
 *   tooltipContainer - Specify which DOM element the tooltip should be rendered into - defaults to document.body
 *   tooltipClassname - Optional CSS classname to apply to tooltips - If not specified then a default style will be applied
 *   tooltipOffsetX - How many pixels away from the mouse pointer to render the tooltip on the X axis
 *   tooltipOffsetY - How many pixels away from the mouse pointer to render the tooltip on the r axis
 *   tooltipFormatter  - Optional callback that allows you to override the HTML displayed in the tooltip
 *       callback is given arguments of (sparkline, options, fields)
 *   tooltipChartTitle - If specified then the tooltip uses the string specified by this setting as a title
 *   tooltipFormat - A format string or SPFormat object  (or an array thereof for multiple entries)
 *       to control the format of the tooltip
 *   tooltipPrefix - A string to prepend to each field displayed in a tooltip
 *   tooltipSuffix - A string to append to each field displayed in a tooltip
 *   tooltipSkipNull - If true then null values will not have a tooltip displayed (defaults to true)
 *   tooltipValueLookups - An object or range map to map field values to tooltip strings
 *       (eg. to map -1 to "Lost", 0 to "Draw", and 1 to "Win")
 *   numberFormatter - Optional callback for formatting numbers in tooltips
 *   numberDigitGroupSep - Character to use for group separator in numbers "1,234" - Defaults to ","
 *   numberDecimalMark - Character to use for the decimal point when formatting numbers - Defaults to "."
 *   numberDigitGroupCount - Number of digits between group separator - Defaults to 3
 *
 * There are 7 types of sparkline, selected by supplying a "type" option of 'line' (default),
 * 'bar', 'tristate', 'bullet', 'discrete', 'pie' or 'box'
 *    line - Line chart.  Options:
 *       spotColor - Set to '' to not end each line in a circular spot
 *       minSpotColor - If set, color of spot at minimum value
 *       maxSpotColor - If set, color of spot at maximum value
 *       spotRadius - Radius in pixels
 *       lineWidth - Width of line in pixels
 *       normalRangeMin
 *       normalRangeMax - If set draws a filled horizontal bar between these two values marking the "normal"
 *                      or expected range of values
 *       normalRangeColor - Color to use for the above bar
 *       drawNormalOnTop - Draw the normal range above the chart fill color if true
 *       defaultPixelsPerValue - Defaults to 3 pixels of width for each value in the chart
 *       highlightSpotColor - The color to use for drawing a highlight spot on mouseover - Set to null to disable
 *       highlightLineColor - The color to use for drawing a highlight line on mouseover - Set to null to disable
 *       valueSpots - Specify which points to draw spots on, and in which color.  Accepts a range map
 *
 *   bar - Bar chart.  Options:
 *       barColor - Color of bars for postive values
 *       negBarColor - Color of bars for negative values
 *       zeroColor - Color of bars with zero values
 *       nullColor - Color of bars with null values - Defaults to omitting the bar entirely
 *       barWidth - Width of bars in pixels
 *       colorMap - Optional mappnig of values to colors to override the *BarColor values above
 *                  can be an Array of values to control the color of individual bars or a range map
 *                  to specify colors for individual ranges of values
 *       barSpacing - Gap between bars in pixels
 *       zeroAxis - Centers the y-axis around zero if true
 *
 *   tristate - Charts values of win (>0), lose (<0) or draw (=0)
 *       posBarColor - Color of win values
 *       negBarColor - Color of lose values
 *       zeroBarColor - Color of draw values
 *       barWidth - Width of bars in pixels
 *       barSpacing - Gap between bars in pixels
 *       colorMap - Optional mappnig of values to colors to override the *BarColor values above
 *                  can be an Array of values to control the color of individual bars or a range map
 *                  to specify colors for individual ranges of values
 *
 *   discrete - Options:
 *       lineHeight - Height of each line in pixels - Defaults to 30% of the graph height
 *       thesholdValue - Values less than this value will be drawn using thresholdColor instead of lineColor
 *       thresholdColor
 *
 *   bullet - Values for bullet graphs msut be in the order: target, performance, range1, range2, range3, ...
 *       options:
 *       targetColor - The color of the vertical target marker
 *       targetWidth - The width of the target marker in pixels
 *       performanceColor - The color of the performance measure horizontal bar
 *       rangeColors - Colors to use for each qualitative range background color
 *
 *   pie - Pie chart. Options:
 *       sliceColors - An array of colors to use for pie slices
 *       offset - Angle in degrees to offset the first slice - Try -90 or +90
 *       borderWidth - Width of border to draw around the pie chart, in pixels - Defaults to 0 (no border)
 *       borderColor - Color to use for the pie chart border - Defaults to #000
 *
 *   box - Box plot. Options:
 *       raw - Set to true to supply pre-computed plot points as values
 *             values should be: low_outlier, low_whisker, q1, median, q3, high_whisker, high_outlier
 *             When set to false you can supply any number of values and the box plot will
 *             be computed for you.  Default is false.
 *       showOutliers - Set to true (default) to display outliers as circles
 *       outlierIQR - Interquartile range used to determine outliers.  Default 1.5
 *       boxLineColor - Outline color of the box
 *       boxFillColor - Fill color for the box
 *       whiskerColor - Line color used for whiskers
 *       outlierLineColor - Outline color of outlier circles
 *       outlierFillColor - Fill color of the outlier circles
 *       spotRadius - Radius of outlier circles
 *       medianColor - Line color of the median line
 *       target - Draw a target cross hair at the supplied value (default undefined)
 *
 *
 *
 *   Examples:
 *   $('#sparkline1').sparkline(myvalues, { lineColor: '#f00', fillColor: false });
 *   $('.barsparks').sparkline('html', { type:'bar', height:'40px', barWidth:5 });
 *   $('#tristate').sparkline([1,1,-1,1,0,0,-1], { type:'tristate' }):
 *   $('#discrete').sparkline([1,3,4,5,5,3,4,5], { type:'discrete' });
 *   $('#bullet').sparkline([10,12,12,9,7], { type:'bullet' });
 *   $('#pie').sparkline([1,1,2], { type:'pie' });
 */

/*jslint regexp: true, browser: true, jquery: true, white: true, nomen: false, plusplus: false, maxerr: 500, indent: 4 */

(function(document, Math, undefined) { // performance/minified-size optimization
    (function(factory) {
        if(typeof define === 'function' && define.amd) {
            define(['jquery'], factory);
        } else if (jQuery && !jQuery.fn.sparkline) {
            factory(jQuery);
        }
    }
    (function($) {
        'use strict';

        var UNSET_OPTION = {},
            getDefaults, createClass, SPFormat, clipval, quartile, normalizeValue, normalizeValues,
            remove, isNumber, all, sum, addCSS, ensureArray, formatNumber, RangeMap,
            MouseHandler, Tooltip, barHighlightMixin,
            line, bar, tristate, discrete, bullet, pie, box, defaultStyles, initStyles,
            VShape, VCanvas_base, VCanvas_canvas, VCanvas_vml, pending, shapeCount = 0;

        /**
         * Default configuration settings
         */
        getDefaults = function () {
            return {
                // Settings common to most/all chart types
                common: {
                    type: 'line',
                    lineColor: '#00f',
                    fillColor: '#cdf',
                    defaultPixelsPerValue: 3,
                    width: 'auto',
                    height: 'auto',
                    composite: false,
                    tagValuesAttribute: 'values',
                    tagOptionsPrefix: 'spark',
                    enableTagOptions: false,
                    enableHighlight: true,
                    highlightLighten: 1.1,
                    tooltipSkipNull: true,
                    tooltipPrefix: '',
                    tooltipSuffix: '',
                    disableHiddenCheck: false,
                    numberFormatter: false,
                    numberDigitGroupCount: 3,
                    numberDigitGroupSep: ',',
                    numberDecimalMark: '.',
                    disableTooltips: false,
                    disableInteraction: false
                },
                // Defaults for line charts
                line: {
                    spotColor: '#f80',
                    highlightSpotColor: '#5f5',
                    highlightLineColor: '#f22',
                    spotRadius: 1.5,
                    minSpotColor: '#f80',
                    maxSpotColor: '#f80',
                    lineWidth: 1,
                    normalRangeMin: undefined,
                    normalRangeMax: undefined,
                    normalRangeColor: '#ccc',
                    drawNormalOnTop: false,
                    chartRangeMin: undefined,
                    chartRangeMax: undefined,
                    chartRangeMinX: undefined,
                    chartRangeMaxX: undefined,
                    tooltipFormat: new SPFormat('<span style="color: {{color}}">&#9679;</span> {{prefix}}{{y}}{{suffix}}')
                },
                // Defaults for bar charts
                bar: {
                    barColor: '#3366cc',
                    negBarColor: '#f44',
                    stackedBarColor: ['#3366cc', '#dc3912', '#ff9900', '#109618', '#66aa00',
                        '#dd4477', '#0099c6', '#990099'],
                    zeroColor: undefined,
                    nullColor: undefined,
                    zeroAxis: true,
                    barWidth: 4,
                    barSpacing: 1,
                    chartRangeMax: undefined,
                    chartRangeMin: undefined,
                    chartRangeClip: false,
                    colorMap: undefined,
                    tooltipFormat: new SPFormat('<span style="color: {{color}}">&#9679;</span> {{prefix}}{{value}}{{suffix}}')
                },
                // Defaults for tristate charts
                tristate: {
                    barWidth: 4,
                    barSpacing: 1,
                    posBarColor: '#6f6',
                    negBarColor: '#f44',
                    zeroBarColor: '#999',
                    colorMap: {},
                    tooltipFormat: new SPFormat('<span style="color: {{color}}">&#9679;</span> {{value:map}}'),
                    tooltipValueLookups: { map: { '-1': 'Loss', '0': 'Draw', '1': 'Win' } }
                },
                // Defaults for discrete charts
                discrete: {
                    lineHeight: 'auto',
                    thresholdColor: undefined,
                    thresholdValue: 0,
                    chartRangeMax: undefined,
                    chartRangeMin: undefined,
                    chartRangeClip: false,
                    tooltipFormat: new SPFormat('{{prefix}}{{value}}{{suffix}}')
                },
                // Defaults for bullet charts
                bullet: {
                    targetColor: '#f33',
                    targetWidth: 3, // width of the target bar in pixels
                    performanceColor: '#33f',
                    rangeColors: ['#d3dafe', '#a8b6ff', '#7f94ff'],
                    base: undefined, // set this to a number to change the base start number
                    tooltipFormat: new SPFormat('{{fieldkey:fields}} - {{value}}'),
                    tooltipValueLookups: { fields: {r: 'Range', p: 'Performance', t: 'Target'} }
                },
                // Defaults for pie charts
                pie: {
                    offset: 0,
                    sliceColors: ['#3366cc', '#dc3912', '#ff9900', '#109618', '#66aa00',
                        '#dd4477', '#0099c6', '#990099'],
                    borderWidth: 0,
                    borderColor: '#000',
                    tooltipFormat: new SPFormat('<span style="color: {{color}}">&#9679;</span> {{value}} ({{percent.1}}%)')
                },
                // Defaults for box plots
                box: {
                    raw: false,
                    boxLineColor: '#000',
                    boxFillColor: '#cdf',
                    whiskerColor: '#000',
                    outlierLineColor: '#333',
                    outlierFillColor: '#fff',
                    medianColor: '#f00',
                    showOutliers: true,
                    outlierIQR: 1.5,
                    spotRadius: 1.5,
                    target: undefined,
                    targetColor: '#4a2',
                    chartRangeMax: undefined,
                    chartRangeMin: undefined,
                    tooltipFormat: new SPFormat('{{field:fields}}: {{value}}'),
                    tooltipFormatFieldlistKey: 'field',
                    tooltipValueLookups: { fields: { lq: 'Lower Quartile', med: 'Median',
                        uq: 'Upper Quartile', lo: 'Left Outlier', ro: 'Right Outlier',
                        lw: 'Left Whisker', rw: 'Right Whisker'} }
                }
            };
        };

        // You can have tooltips use a css class other than jqstooltip by specifying tooltipClassname
        // tooltip modified by westilian:jaman
        defaultStyles = '.jqstooltip { ' +
            'position: absolute;' +
            'left: 30px;' +
            'top: 0px;' +
            'display: block;' +
            'visibility: hidden;' +
            'background: rgb(0, 0, 0) transparent;' +
            'background-color: rgba(0,0,0,0.6);' +
            'filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);' +
            '-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";' +
            'color: white;' +
            'font: 10px arial, san serif;' +
            'text-align: left;' +
            'white-space: nowrap;' +

            'border: 0px solid white;' +
            'border-radius: 3px;' +
            '-webkit-border-radius: 3px;' +
            'z-index: 10000;' +
            '}' +
            '.jqsfield { ' +
            'color: white;' +
            'padding: 5px 5px 5px 5px;' +
            'font: 10px arial, san serif;' +
            'text-align: left;' +
            '}';

        /**
         * Utilities
         */

        createClass = function (/* [baseclass, [mixin, ...]], definition */) {
            var Class, args;
            Class = function () {
                this.init.apply(this, arguments);
            };
            if (arguments.length > 1) {
                if (arguments[0]) {
                    Class.prototype = $.extend(new arguments[0](), arguments[arguments.length - 1]);
                    Class._super = arguments[0].prototype;
                } else {
                    Class.prototype = arguments[arguments.length - 1];
                }
                if (arguments.length > 2) {
                    args = Array.prototype.slice.call(arguments, 1, -1);
                    args.unshift(Class.prototype);
                    $.extend.apply($, args);
                }
            } else {
                Class.prototype = arguments[0];
            }
            Class.prototype.cls = Class;
            return Class;
        };

        /**
         * Wraps a format string for tooltips
         * {{x}}
         * {{x.2}
     * {{x:months}}
     */
        $.SPFormatClass = SPFormat = createClass({
            fre: /\{\{([\w.]+?)(:(.+?))?\}\}/g,
            precre: /(\w+)\.(\d+)/,

            init: function (format, fclass) {
                this.format = format;
                this.fclass = fclass;
            },

            render: function (fieldset, lookups, options) {
                var self = this,
                    fields = fieldset,
                    match, token, lookupkey, fieldvalue, prec;
                return this.format.replace(this.fre, function () {
                    var lookup;
                    token = arguments[1];
                    lookupkey = arguments[3];
                    match = self.precre.exec(token);
                    if (match) {
                        prec = match[2];
                        token = match[1];
                    } else {
                        prec = false;
                    }
                    fieldvalue = fields[token];
                    if (fieldvalue === undefined) {
                        return '';
                    }
                    if (lookupkey && lookups && lookups[lookupkey]) {
                        lookup = lookups[lookupkey];
                        if (lookup.get) { // RangeMap
                            return lookups[lookupkey].get(fieldvalue) || fieldvalue;
                        } else {
                            return lookups[lookupkey][fieldvalue] || fieldvalue;
                        }
                    }
                    if (isNumber(fieldvalue)) {
                        if (options.get('numberFormatter')) {
                            fieldvalue = options.get('numberFormatter')(fieldvalue);
                        } else {
                            fieldvalue = formatNumber(fieldvalue, prec,
                                options.get('numberDigitGroupCount'),
                                options.get('numberDigitGroupSep'),
                                options.get('numberDecimalMark'));
                        }
                    }
                    return fieldvalue;
                });
            }
        });

        // convience method to avoid needing the new operator
        $.spformat = function(format, fclass) {
            return new SPFormat(format, fclass);
        };

        clipval = function (val, min, max) {
            if (val < min) {
                return min;
            }
            if (val > max) {
                return max;
            }
            return val;
        };

        quartile = function (values, q) {
            var vl;
            if (q === 2) {
                vl = Math.floor(values.length / 2);
                return values.length % 2 ? values[vl] : (values[vl-1] + values[vl]) / 2;
            } else {
                if (values.length % 2 ) { // odd
                    vl = (values.length * q + q) / 4;
                    return vl % 1 ? (values[Math.floor(vl)] + values[Math.floor(vl) - 1]) / 2 : values[vl-1];
                } else { //even
                    vl = (values.length * q + 2) / 4;
                    return vl % 1 ? (values[Math.floor(vl)] + values[Math.floor(vl) - 1]) / 2 :  values[vl-1];

                }
            }
        };

        normalizeValue = function (val) {
            var nf;
            switch (val) {
                case 'undefined':
                    val = undefined;
                    break;
                case 'null':
                    val = null;
                    break;
                case 'true':
                    val = true;
                    break;
                case 'false':
                    val = false;
                    break;
                default:
                    nf = parseFloat(val);
                    if (val == nf) {
                        val = nf;
                    }
            }
            return val;
        };

        normalizeValues = function (vals) {
            var i, result = [];
            for (i = vals.length; i--;) {
                result[i] = normalizeValue(vals[i]);
            }
            return result;
        };

        remove = function (vals, filter) {
            var i, vl, result = [];
            for (i = 0, vl = vals.length; i < vl; i++) {
                if (vals[i] !== filter) {
                    result.push(vals[i]);
                }
            }
            return result;
        };

        isNumber = function (num) {
            return !isNaN(parseFloat(num)) && isFinite(num);
        };

        formatNumber = function (num, prec, groupsize, groupsep, decsep) {
            var p, i;
            num = (prec === false ? parseFloat(num).toString() : num.toFixed(prec)).split('');
            p = (p = $.inArray('.', num)) < 0 ? num.length : p;
            if (p < num.length) {
                num[p] = decsep;
            }
            for (i = p - groupsize; i > 0; i -= groupsize) {
                num.splice(i, 0, groupsep);
            }
            return num.join('');
        };

        // determine if all values of an array match a value
        // returns true if the array is empty
        all = function (val, arr, ignoreNull) {
            var i;
            for (i = arr.length; i--; ) {
                if (ignoreNull && arr[i] === null) continue;
                if (arr[i] !== val) {
                    return false;
                }
            }
            return true;
        };

        // sums the numeric values in an array, ignoring other values
        sum = function (vals) {
            var total = 0, i;
            for (i = vals.length; i--;) {
                total += typeof vals[i] === 'number' ? vals[i] : 0;
            }
            return total;
        };

        ensureArray = function (val) {
            return $.isArray(val) ? val : [val];
        };

        // http://paulirish.com/2008/bookmarklet-inject-new-css-rules/
        addCSS = function(css) {
            var tag;
            //if ('\v' == 'v') /* ie only */ {
            if (document.createStyleSheet) {
                document.createStyleSheet().cssText = css;
            } else {
                tag = document.createElement('style');
                tag.type = 'text/css';
                document.getElementsByTagName('head')[0].appendChild(tag);
                tag[(typeof document.body.style.WebkitAppearance == 'string') /* webkit only */ ? 'innerText' : 'innerHTML'] = css;
            }
        };

        // Provide a cross-browser interface to a few simple drawing primitives
        $.fn.simpledraw = function (width, height, useExisting, interact) {
            var target, mhandler;
            if (useExisting && (target = this.data('_jqs_vcanvas'))) {
                return target;
            }

            if ($.fn.sparkline.canvas === false) {
                // We've already determined that neither Canvas nor VML are available
                return false;

            } else if ($.fn.sparkline.canvas === undefined) {
                // No function defined yet -- need to see if we support Canvas or VML
                var el = document.createElement('canvas');
                if (!!(el.getContext && el.getContext('2d'))) {
                    // Canvas is available
                    $.fn.sparkline.canvas = function(width, height, target, interact) {
                        return new VCanvas_canvas(width, height, target, interact);
                    };
                } else if (document.namespaces && !document.namespaces.v) {
                    // VML is available
                    document.namespaces.add('v', 'urn:schemas-microsoft-com:vml', '#default#VML');
                    $.fn.sparkline.canvas = function(width, height, target, interact) {
                        return new VCanvas_vml(width, height, target);
                    };
                } else {
                    // Neither Canvas nor VML are available
                    $.fn.sparkline.canvas = false;
                    return false;
                }
            }

            if (width === undefined) {
                width = $(this).innerWidth();
            }
            if (height === undefined) {
                height = $(this).innerHeight();
            }

            target = $.fn.sparkline.canvas(width, height, this, interact);

            mhandler = $(this).data('_jqs_mhandler');
            if (mhandler) {
                mhandler.registerCanvas(target);
            }
            return target;
        };

        $.fn.cleardraw = function () {
            var target = this.data('_jqs_vcanvas');
            if (target) {
                target.reset();
            }
        };

        $.RangeMapClass = RangeMap = createClass({
            init: function (map) {
                var key, range, rangelist = [];
                for (key in map) {
                    if (map.hasOwnProperty(key) && typeof key === 'string' && key.indexOf(':') > -1) {
                        range = key.split(':');
                        range[0] = range[0].length === 0 ? -Infinity : parseFloat(range[0]);
                        range[1] = range[1].length === 0 ? Infinity : parseFloat(range[1]);
                        range[2] = map[key];
                        rangelist.push(range);
                    }
                }
                this.map = map;
                this.rangelist = rangelist || false;
            },

            get: function (value) {
                var rangelist = this.rangelist,
                    i, range, result;
                if ((result = this.map[value]) !== undefined) {
                    return result;
                }
                if (rangelist) {
                    for (i = rangelist.length; i--;) {
                        range = rangelist[i];
                        if (range[0] <= value && range[1] >= value) {
                            return range[2];
                        }
                    }
                }
                return undefined;
            }
        });

        // Convenience function
        $.range_map = function(map) {
            return new RangeMap(map);
        };

        MouseHandler = createClass({
            init: function (el, options) {
                var $el = $(el);
                this.$el = $el;
                this.options = options;
                this.currentPageX = 0;
                this.currentPageY = 0;
                this.el = el;
                this.splist = [];
                this.tooltip = null;
                this.over = false;
                this.displayTooltips = !options.get('disableTooltips');
                this.highlightEnabled = !options.get('disableHighlight');
            },

            registerSparkline: function (sp) {
                this.splist.push(sp);
                if (this.over) {
                    this.updateDisplay();
                }
            },

            registerCanvas: function (canvas) {
                var $canvas = $(canvas.canvas);
                this.canvas = canvas;
                this.$canvas = $canvas;
                $canvas.mouseenter($.proxy(this.mouseenter, this));
                $canvas.mouseleave($.proxy(this.mouseleave, this));
                $canvas.click($.proxy(this.mouseclick, this));
            },

            reset: function (removeTooltip) {
                this.splist = [];
                if (this.tooltip && removeTooltip) {
                    this.tooltip.remove();
                    this.tooltip = undefined;
                }
            },

            mouseclick: function (e) {
                var clickEvent = $.Event('sparklineClick');
                clickEvent.originalEvent = e;
                clickEvent.sparklines = this.splist;
                this.$el.trigger(clickEvent);
            },

            mouseenter: function (e) {
                $(document.body).unbind('mousemove.jqs');
                $(document.body).bind('mousemove.jqs', $.proxy(this.mousemove, this));
                this.over = true;
                this.currentPageX = e.pageX;
                this.currentPageY = e.pageY;
                this.currentEl = e.target;
                if (!this.tooltip && this.displayTooltips) {
                    this.tooltip = new Tooltip(this.options);
                    this.tooltip.updatePosition(e.pageX, e.pageY);
                }
                this.updateDisplay();
            },

            mouseleave: function () {
                $(document.body).unbind('mousemove.jqs');
                var splist = this.splist,
                    spcount = splist.length,
                    needsRefresh = false,
                    sp, i;
                this.over = false;
                this.currentEl = null;

                if (this.tooltip) {
                    this.tooltip.remove();
                    this.tooltip = null;
                }

                for (i = 0; i < spcount; i++) {
                    sp = splist[i];
                    if (sp.clearRegionHighlight()) {
                        needsRefresh = true;
                    }
                }

                if (needsRefresh) {
                    this.canvas.render();
                }
            },

            mousemove: function (e) {
                this.currentPageX = e.pageX;
                this.currentPageY = e.pageY;
                this.currentEl = e.target;
                if (this.tooltip) {
                    this.tooltip.updatePosition(e.pageX, e.pageY);
                }
                this.updateDisplay();
            },

            updateDisplay: function () {
                var splist = this.splist,
                    spcount = splist.length,
                    needsRefresh = false,
                    offset = this.$canvas.offset(),
                    localX = this.currentPageX - offset.left,
                    localY = this.currentPageY - offset.top,
                    tooltiphtml, sp, i, result, changeEvent;
                if (!this.over) {
                    return;
                }
                for (i = 0; i < spcount; i++) {
                    sp = splist[i];
                    result = sp.setRegionHighlight(this.currentEl, localX, localY);
                    if (result) {
                        needsRefresh = true;
                    }
                }
                if (needsRefresh) {
                    changeEvent = $.Event('sparklineRegionChange');
                    changeEvent.sparklines = this.splist;
                    this.$el.trigger(changeEvent);
                    if (this.tooltip) {
                        tooltiphtml = '';
                        for (i = 0; i < spcount; i++) {
                            sp = splist[i];
                            tooltiphtml += sp.getCurrentRegionTooltip();
                        }
                        this.tooltip.setContent(tooltiphtml);
                    }
                    if (!this.disableHighlight) {
                        this.canvas.render();
                    }
                }
                if (result === null) {
                    this.mouseleave();
                }
            }
        });


        Tooltip = createClass({
            sizeStyle: 'position: static !important;' +
            'display: block !important;' +
            'visibility: hidden !important;' +
            'float: left !important;',

            init: function (options) {
                var tooltipClassname = options.get('tooltipClassname', 'jqstooltip'),
                    sizetipStyle = this.sizeStyle,
                    offset;
                this.container = options.get('tooltipContainer') || document.body;
                this.tooltipOffsetX = options.get('tooltipOffsetX', 10);
                this.tooltipOffsetY = options.get('tooltipOffsetY', 12);
                // remove any previous lingering tooltip
                $('#jqssizetip').remove();
                $('#jqstooltip').remove();
                this.sizetip = $('<div/>', {
                    id: 'jqssizetip',
                    style: sizetipStyle,
                    'class': tooltipClassname
                });
                this.tooltip = $('<div/>', {
                    id: 'jqstooltip',
                    'class': tooltipClassname
                }).appendTo(this.container);
                // account for the container's location
                offset = this.tooltip.offset();
                this.offsetLeft = offset.left;
                this.offsetTop = offset.top;
                this.hidden = true;
                $(window).unbind('resize.jqs scroll.jqs');
                $(window).bind('resize.jqs scroll.jqs', $.proxy(this.updateWindowDims, this));
                this.updateWindowDims();
            },

            updateWindowDims: function () {
                this.scrollTop = $(window).scrollTop();
                this.scrollLeft = $(window).scrollLeft();
                this.scrollRight = this.scrollLeft + $(window).width();
                this.updatePosition();
            },

            getSize: function (content) {
                this.sizetip.html(content).appendTo(this.container);
                this.width = this.sizetip.width() + 1;
                this.height = this.sizetip.height();
                this.sizetip.remove();
            },

            setContent: function (content) {
                if (!content) {
                    this.tooltip.css('visibility', 'hidden');
                    this.hidden = true;
                    return;
                }
                this.getSize(content);
                this.tooltip.html(content)
                    .css({
                        'width': this.width,
                        'height': this.height,
                        'visibility': 'visible'
                    });
                if (this.hidden) {
                    this.hidden = false;
                    this.updatePosition();
                }
            },

            updatePosition: function (x, y) {
                if (x === undefined) {
                    if (this.mousex === undefined) {
                        return;
                    }
                    x = this.mousex - this.offsetLeft;
                    y = this.mousey - this.offsetTop;

                } else {
                    this.mousex = x = x - this.offsetLeft;
                    this.mousey = y = y - this.offsetTop;
                }
                if (!this.height || !this.width || this.hidden) {
                    return;
                }

                y -= this.height + this.tooltipOffsetY;
                x += this.tooltipOffsetX;

                if (y < this.scrollTop) {
                    y = this.scrollTop;
                }
                if (x < this.scrollLeft) {
                    x = this.scrollLeft;
                } else if (x + this.width > this.scrollRight) {
                    x = this.scrollRight - this.width;
                }

                this.tooltip.css({
                    'left': x,
                    'top': y
                });
            },

            remove: function () {
                this.tooltip.remove();
                this.sizetip.remove();
                this.sizetip = this.tooltip = undefined;
                $(window).unbind('resize.jqs scroll.jqs');
            }
        });

        initStyles = function() {
            addCSS(defaultStyles);
        };

        $(initStyles);

        pending = [];
        $.fn.sparkline = function (userValues, userOptions) {
            return this.each(function () {
                var options = new $.fn.sparkline.options(this, userOptions),
                    $this = $(this),
                    render, i;
                render = function () {
                    var values, width, height, tmp, mhandler, sp, vals;
                    if (userValues === 'html' || userValues === undefined) {
                        vals = this.getAttribute(options.get('tagValuesAttribute'));
                        if (vals === undefined || vals === null) {
                            vals = $this.html();
                        }
                        values = vals.replace(/(^\s*<!--)|(-->\s*$)|\s+/g, '').split(',');
                    } else {
                        values = userValues;
                    }

                    width = options.get('width') === 'auto' ? values.length * options.get('defaultPixelsPerValue') : options.get('width');
                    if (options.get('height') === 'auto') {
                        if (!options.get('composite') || !$.data(this, '_jqs_vcanvas')) {
                            // must be a better way to get the line height
                            tmp = document.createElement('span');
                            tmp.innerHTML = 'a';
                            $this.html(tmp);
                            height = $(tmp).innerHeight() || $(tmp).height();
                            $(tmp).remove();
                            tmp = null;
                        }
                    } else {
                        height = options.get('height');
                    }

                    if (!options.get('disableInteraction')) {
                        mhandler = $.data(this, '_jqs_mhandler');
                        if (!mhandler) {
                            mhandler = new MouseHandler(this, options);
                            $.data(this, '_jqs_mhandler', mhandler);
                        } else if (!options.get('composite')) {
                            mhandler.reset();
                        }
                    } else {
                        mhandler = false;
                    }

                    if (options.get('composite') && !$.data(this, '_jqs_vcanvas')) {
                        if (!$.data(this, '_jqs_errnotify')) {
                            alert('Attempted to attach a composite sparkline to an element with no existing sparkline');
                            $.data(this, '_jqs_errnotify', true);
                        }
                        return;
                    }

                    sp = new $.fn.sparkline[options.get('type')](this, values, options, width, height);

                    sp.render();

                    if (mhandler) {
                        mhandler.registerSparkline(sp);
                    }
                };
                if (($(this).html() && !options.get('disableHiddenCheck') && $(this).is(':hidden')) || !$(this).parents('body').length) {
                    if (!options.get('composite') && $.data(this, '_jqs_pending')) {
                        // remove any existing references to the element
                        for (i = pending.length; i; i--) {
                            if (pending[i - 1][0] == this) {
                                pending.splice(i - 1, 1);
                            }
                        }
                    }
                    pending.push([this, render]);
                    $.data(this, '_jqs_pending', true);
                } else {
                    render.call(this);
                }
            });
        };

        $.fn.sparkline.defaults = getDefaults();


        $.sparkline_display_visible = function () {
            var el, i, pl;
            var done = [];
            for (i = 0, pl = pending.length; i < pl; i++) {
                el = pending[i][0];
                if ($(el).is(':visible') && !$(el).parents().is(':hidden')) {
                    pending[i][1].call(el);
                    $.data(pending[i][0], '_jqs_pending', false);
                    done.push(i);
                } else if (!$(el).closest('html').length && !$.data(el, '_jqs_pending')) {
                    // element has been inserted and removed from the DOM
                    // If it was not yet inserted into the dom then the .data request
                    // will return true.
                    // removing from the dom causes the data to be removed.
                    $.data(pending[i][0], '_jqs_pending', false);
                    done.push(i);
                }
            }
            for (i = done.length; i; i--) {
                pending.splice(done[i - 1], 1);
            }
        };


        /**
         * User option handler
         */
        $.fn.sparkline.options = createClass({
            init: function (tag, userOptions) {
                var extendedOptions, defaults, base, tagOptionType;
                this.userOptions = userOptions = userOptions || {};
                this.tag = tag;
                this.tagValCache = {};
                defaults = $.fn.sparkline.defaults;
                base = defaults.common;
                this.tagOptionsPrefix = userOptions.enableTagOptions && (userOptions.tagOptionsPrefix || base.tagOptionsPrefix);

                tagOptionType = this.getTagSetting('type');
                if (tagOptionType === UNSET_OPTION) {
                    extendedOptions = defaults[userOptions.type || base.type];
                } else {
                    extendedOptions = defaults[tagOptionType];
                }
                this.mergedOptions = $.extend({}, base, extendedOptions, userOptions);
            },


            getTagSetting: function (key) {
                var prefix = this.tagOptionsPrefix,
                    val, i, pairs, keyval;
                if (prefix === false || prefix === undefined) {
                    return UNSET_OPTION;
                }
                if (this.tagValCache.hasOwnProperty(key)) {
                    val = this.tagValCache.key;
                } else {
                    val = this.tag.getAttribute(prefix + key);
                    if (val === undefined || val === null) {
                        val = UNSET_OPTION;
                    } else if (val.substr(0, 1) === '[') {
                        val = val.substr(1, val.length - 2).split(',');
                        for (i = val.length; i--;) {
                            val[i] = normalizeValue(val[i].replace(/(^\s*)|(\s*$)/g, ''));
                        }
                    } else if (val.substr(0, 1) === '{') {
                        pairs = val.substr(1, val.length - 2).split(',');
                        val = {};
                        for (i = pairs.length; i--;) {
                            keyval = pairs[i].split(':', 2);
                            val[keyval[0].replace(/(^\s*)|(\s*$)/g, '')] = normalizeValue(keyval[1].replace(/(^\s*)|(\s*$)/g, ''));
                        }
                    } else {
                        val = normalizeValue(val);
                    }
                    this.tagValCache.key = val;
                }
                return val;
            },

            get: function (key, defaultval) {
                var tagOption = this.getTagSetting(key),
                    result;
                if (tagOption !== UNSET_OPTION) {
                    return tagOption;
                }
                return (result = this.mergedOptions[key]) === undefined ? defaultval : result;
            }
        });


        $.fn.sparkline._base = createClass({
            disabled: false,

            init: function (el, values, options, width, height) {
                this.el = el;
                this.$el = $(el);
                this.values = values;
                this.options = options;
                this.width = width;
                this.height = height;
                this.currentRegion = undefined;
            },

            /**
             * Setup the canvas
             */
            initTarget: function () {
                var interactive = !this.options.get('disableInteraction');
                if (!(this.target = this.$el.simpledraw(this.width, this.height, this.options.get('composite'), interactive))) {
                    this.disabled = true;
                } else {
                    this.canvasWidth = this.target.pixelWidth;
                    this.canvasHeight = this.target.pixelHeight;
                }
            },

            /**
             * Actually render the chart to the canvas
             */
            render: function () {
                if (this.disabled) {
                    this.el.innerHTML = '';
                    return false;
                }
                return true;
            },

            /**
             * Return a region id for a given x/y co-ordinate
             */
            getRegion: function (x, y) {
            },

            /**
             * Highlight an item based on the moused-over x,y co-ordinate
             */
            setRegionHighlight: function (el, x, y) {
                var currentRegion = this.currentRegion,
                    highlightEnabled = !this.options.get('disableHighlight'),
                    newRegion;
                if (x > this.canvasWidth || y > this.canvasHeight || x < 0 || y < 0) {
                    return null;
                }
                newRegion = this.getRegion(el, x, y);
                if (currentRegion !== newRegion) {
                    if (currentRegion !== undefined && highlightEnabled) {
                        this.removeHighlight();
                    }
                    this.currentRegion = newRegion;
                    if (newRegion !== undefined && highlightEnabled) {
                        this.renderHighlight();
                    }
                    return true;
                }
                return false;
            },

            /**
             * Reset any currently highlighted item
             */
            clearRegionHighlight: function () {
                if (this.currentRegion !== undefined) {
                    this.removeHighlight();
                    this.currentRegion = undefined;
                    return true;
                }
                return false;
            },

            renderHighlight: function () {
                this.changeHighlight(true);
            },

            removeHighlight: function () {
                this.changeHighlight(false);
            },

            changeHighlight: function (highlight)  {},

            /**
             * Fetch the HTML to display as a tooltip
             */
            getCurrentRegionTooltip: function () {
                var options = this.options,
                    header = '',
                    entries = [],
                    fields, formats, formatlen, fclass, text, i,
                    showFields, showFieldsKey, newFields, fv,
                    formatter, format, fieldlen, j;
                if (this.currentRegion === undefined) {
                    return '';
                }
                fields = this.getCurrentRegionFields();
                formatter = options.get('tooltipFormatter');
                if (formatter) {
                    return formatter(this, options, fields);
                }
                if (options.get('tooltipChartTitle')) {
                    header += '<div class="jqs jqstitle">' + options.get('tooltipChartTitle') + '</div>\n';
                }
                formats = this.options.get('tooltipFormat');
                if (!formats) {
                    return '';
                }
                if (!$.isArray(formats)) {
                    formats = [formats];
                }
                if (!$.isArray(fields)) {
                    fields = [fields];
                }
                showFields = this.options.get('tooltipFormatFieldlist');
                showFieldsKey = this.options.get('tooltipFormatFieldlistKey');
                if (showFields && showFieldsKey) {
                    // user-selected ordering of fields
                    newFields = [];
                    for (i = fields.length; i--;) {
                        fv = fields[i][showFieldsKey];
                        if ((j = $.inArray(fv, showFields)) != -1) {
                            newFields[j] = fields[i];
                        }
                    }
                    fields = newFields;
                }
                formatlen = formats.length;
                fieldlen = fields.length;
                for (i = 0; i < formatlen; i++) {
                    format = formats[i];
                    if (typeof format === 'string') {
                        format = new SPFormat(format);
                    }
                    fclass = format.fclass || 'jqsfield';
                    for (j = 0; j < fieldlen; j++) {
                        if (!fields[j].isNull || !options.get('tooltipSkipNull')) {
                            $.extend(fields[j], {
                                prefix: options.get('tooltipPrefix'),
                                suffix: options.get('tooltipSuffix')
                            });
                            text = format.render(fields[j], options.get('tooltipValueLookups'), options);
                            entries.push('<div class="' + fclass + '">' + text + '</div>');
                        }
                    }
                }
                if (entries.length) {
                    return header + entries.join('\n');
                }
                return '';
            },

            getCurrentRegionFields: function () {},

            calcHighlightColor: function (color, options) {
                var highlightColor = options.get('highlightColor'),
                    lighten = options.get('highlightLighten'),
                    parse, mult, rgbnew, i;
                if (highlightColor) {
                    return highlightColor;
                }
                if (lighten) {
                    // extract RGB values
                    parse = /^#([0-9a-f])([0-9a-f])([0-9a-f])$/i.exec(color) || /^#([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i.exec(color);
                    if (parse) {
                        rgbnew = [];
                        mult = color.length === 4 ? 16 : 1;
                        for (i = 0; i < 3; i++) {
                            rgbnew[i] = clipval(Math.round(parseInt(parse[i + 1], 16) * mult * lighten), 0, 255);
                        }
                        return 'rgb(' + rgbnew.join(',') + ')';
                    }

                }
                return color;
            }

        });

        barHighlightMixin = {
            changeHighlight: function (highlight) {
                var currentRegion = this.currentRegion,
                    target = this.target,
                    shapeids = this.regionShapes[currentRegion],
                    newShapes;
                // will be null if the region value was null
                if (shapeids) {
                    newShapes = this.renderRegion(currentRegion, highlight);
                    if ($.isArray(newShapes) || $.isArray(shapeids)) {
                        target.replaceWithShapes(shapeids, newShapes);
                        this.regionShapes[currentRegion] = $.map(newShapes, function (newShape) {
                            return newShape.id;
                        });
                    } else {
                        target.replaceWithShape(shapeids, newShapes);
                        this.regionShapes[currentRegion] = newShapes.id;
                    }
                }
            },

            render: function () {
                var values = this.values,
                    target = this.target,
                    regionShapes = this.regionShapes,
                    shapes, ids, i, j;

                if (!this.cls._super.render.call(this)) {
                    return;
                }
                for (i = values.length; i--;) {
                    shapes = this.renderRegion(i);
                    if (shapes) {
                        if ($.isArray(shapes)) {
                            ids = [];
                            for (j = shapes.length; j--;) {
                                shapes[j].append();
                                ids.push(shapes[j].id);
                            }
                            regionShapes[i] = ids;
                        } else {
                            shapes.append();
                            regionShapes[i] = shapes.id; // store just the shapeid
                        }
                    } else {
                        // null value
                        regionShapes[i] = null;
                    }
                }
                target.render();
            }
        };

        /**
         * Line charts
         */
        $.fn.sparkline.line = line = createClass($.fn.sparkline._base, {
            type: 'line',

            init: function (el, values, options, width, height) {
                line._super.init.call(this, el, values, options, width, height);
                this.vertices = [];
                this.regionMap = [];
                this.xvalues = [];
                this.yvalues = [];
                this.yminmax = [];
                this.hightlightSpotId = null;
                this.lastShapeId = null;
                this.initTarget();
            },

            getRegion: function (el, x, y) {
                var i,
                    regionMap = this.regionMap; // maps regions to value positions
                for (i = regionMap.length; i--;) {
                    if (regionMap[i] !== null && x >= regionMap[i][0] && x <= regionMap[i][1]) {
                        return regionMap[i][2];
                    }
                }
                return undefined;
            },

            getCurrentRegionFields: function () {
                var currentRegion = this.currentRegion;
                return {
                    isNull: this.yvalues[currentRegion] === null,
                    x: this.xvalues[currentRegion],
                    y: this.yvalues[currentRegion],
                    color: this.options.get('lineColor'),
                    fillColor: this.options.get('fillColor'),
                    offset: currentRegion
                };
            },

            renderHighlight: function () {
                var currentRegion = this.currentRegion,
                    target = this.target,
                    vertex = this.vertices[currentRegion],
                    options = this.options,
                    spotRadius = options.get('spotRadius'),
                    highlightSpotColor = options.get('highlightSpotColor'),
                    highlightLineColor = options.get('highlightLineColor'),
                    highlightSpot, highlightLine;

                if (!vertex) {
                    return;
                }
                if (spotRadius && highlightSpotColor) {
                    highlightSpot = target.drawCircle(vertex[0], vertex[1],
                        spotRadius, undefined, highlightSpotColor);
                    this.highlightSpotId = highlightSpot.id;
                    target.insertAfterShape(this.lastShapeId, highlightSpot);
                }
                if (highlightLineColor) {
                    highlightLine = target.drawLine(vertex[0], this.canvasTop, vertex[0],
                        this.canvasTop + this.canvasHeight, highlightLineColor);
                    this.highlightLineId = highlightLine.id;
                    target.insertAfterShape(this.lastShapeId, highlightLine);
                }
            },

            removeHighlight: function () {
                var target = this.target;
                if (this.highlightSpotId) {
                    target.removeShapeId(this.highlightSpotId);
                    this.highlightSpotId = null;
                }
                if (this.highlightLineId) {
                    target.removeShapeId(this.highlightLineId);
                    this.highlightLineId = null;
                }
            },

            scanValues: function () {
                var values = this.values,
                    valcount = values.length,
                    xvalues = this.xvalues,
                    yvalues = this.yvalues,
                    yminmax = this.yminmax,
                    i, val, isStr, isArray, sp;
                for (i = 0; i < valcount; i++) {
                    val = values[i];
                    isStr = typeof(values[i]) === 'string';
                    isArray = typeof(values[i]) === 'object' && values[i] instanceof Array;
                    sp = isStr && values[i].split(':');
                    if (isStr && sp.length === 2) { // x:y
                        xvalues.push(Number(sp[0]));
                        yvalues.push(Number(sp[1]));
                        yminmax.push(Number(sp[1]));
                    } else if (isArray) {
                        xvalues.push(val[0]);
                        yvalues.push(val[1]);
                        yminmax.push(val[1]);
                    } else {
                        xvalues.push(i);
                        if (values[i] === null || values[i] === 'null') {
                            yvalues.push(null);
                        } else {
                            yvalues.push(Number(val));
                            yminmax.push(Number(val));
                        }
                    }
                }
                if (this.options.get('xvalues')) {
                    xvalues = this.options.get('xvalues');
                }

                this.maxy = this.maxyorg = Math.max.apply(Math, yminmax);
                this.miny = this.minyorg = Math.min.apply(Math, yminmax);

                this.maxx = Math.max.apply(Math, xvalues);
                this.minx = Math.min.apply(Math, xvalues);

                this.xvalues = xvalues;
                this.yvalues = yvalues;
                this.yminmax = yminmax;

            },

            processRangeOptions: function () {
                var options = this.options,
                    normalRangeMin = options.get('normalRangeMin'),
                    normalRangeMax = options.get('normalRangeMax');

                if (normalRangeMin !== undefined) {
                    if (normalRangeMin < this.miny) {
                        this.miny = normalRangeMin;
                    }
                    if (normalRangeMax > this.maxy) {
                        this.maxy = normalRangeMax;
                    }
                }
                if (options.get('chartRangeMin') !== undefined && (options.get('chartRangeClip') || options.get('chartRangeMin') < this.miny)) {
                    this.miny = options.get('chartRangeMin');
                }
                if (options.get('chartRangeMax') !== undefined && (options.get('chartRangeClip') || options.get('chartRangeMax') > this.maxy)) {
                    this.maxy = options.get('chartRangeMax');
                }
                if (options.get('chartRangeMinX') !== undefined && (options.get('chartRangeClipX') || options.get('chartRangeMinX') < this.minx)) {
                    this.minx = options.get('chartRangeMinX');
                }
                if (options.get('chartRangeMaxX') !== undefined && (options.get('chartRangeClipX') || options.get('chartRangeMaxX') > this.maxx)) {
                    this.maxx = options.get('chartRangeMaxX');
                }

            },

            drawNormalRange: function (canvasLeft, canvasTop, canvasHeight, canvasWidth, rangey) {
                var normalRangeMin = this.options.get('normalRangeMin'),
                    normalRangeMax = this.options.get('normalRangeMax'),
                    ytop = canvasTop + Math.round(canvasHeight - (canvasHeight * ((normalRangeMax - this.miny) / rangey))),
                    height = Math.round((canvasHeight * (normalRangeMax - normalRangeMin)) / rangey);
                this.target.drawRect(canvasLeft, ytop, canvasWidth, height, undefined, this.options.get('normalRangeColor')).append();
            },

            render: function () {
                var options = this.options,
                    target = this.target,
                    canvasWidth = this.canvasWidth,
                    canvasHeight = this.canvasHeight,
                    vertices = this.vertices,
                    spotRadius = options.get('spotRadius'),
                    regionMap = this.regionMap,
                    rangex, rangey, yvallast,
                    canvasTop, canvasLeft,
                    vertex, path, paths, x, y, xnext, xpos, xposnext,
                    last, next, yvalcount, lineShapes, fillShapes, plen,
                    valueSpots, hlSpotsEnabled, color, xvalues, yvalues, i;

                if (!line._super.render.call(this)) {
                    return;
                }

                this.scanValues();
                this.processRangeOptions();

                xvalues = this.xvalues;
                yvalues = this.yvalues;

                if (!this.yminmax.length || this.yvalues.length < 2) {
                    // empty or all null valuess
                    return;
                }

                canvasTop = canvasLeft = 0;

                rangex = this.maxx - this.minx === 0 ? 1 : this.maxx - this.minx;
                rangey = this.maxy - this.miny === 0 ? 1 : this.maxy - this.miny;
                yvallast = this.yvalues.length - 1;

                if (spotRadius && (canvasWidth < (spotRadius * 4) || canvasHeight < (spotRadius * 4))) {
                    spotRadius = 0;
                }
                if (spotRadius) {
                    // adjust the canvas size as required so that spots will fit
                    hlSpotsEnabled = options.get('highlightSpotColor') &&  !options.get('disableInteraction');
                    if (hlSpotsEnabled || options.get('minSpotColor') || (options.get('spotColor') && yvalues[yvallast] === this.miny)) {
                        canvasHeight -= Math.ceil(spotRadius);
                    }
                    if (hlSpotsEnabled || options.get('maxSpotColor') || (options.get('spotColor') && yvalues[yvallast] === this.maxy)) {
                        canvasHeight -= Math.ceil(spotRadius);
                        canvasTop += Math.ceil(spotRadius);
                    }
                    if (hlSpotsEnabled ||
                        ((options.get('minSpotColor') || options.get('maxSpotColor')) && (yvalues[0] === this.miny || yvalues[0] === this.maxy))) {
                        canvasLeft += Math.ceil(spotRadius);
                        canvasWidth -= Math.ceil(spotRadius);
                    }
                    if (hlSpotsEnabled || options.get('spotColor') ||
                        (options.get('minSpotColor') || options.get('maxSpotColor') &&
                        (yvalues[yvallast] === this.miny || yvalues[yvallast] === this.maxy))) {
                        canvasWidth -= Math.ceil(spotRadius);
                    }
                }


                canvasHeight--;

                if (options.get('normalRangeMin') !== undefined && !options.get('drawNormalOnTop')) {
                    this.drawNormalRange(canvasLeft, canvasTop, canvasHeight, canvasWidth, rangey);
                }

                path = [];
                paths = [path];
                last = next = null;
                yvalcount = yvalues.length;
                for (i = 0; i < yvalcount; i++) {
                    x = xvalues[i];
                    xnext = xvalues[i + 1];
                    y = yvalues[i];
                    xpos = canvasLeft + Math.round((x - this.minx) * (canvasWidth / rangex));
                    xposnext = i < yvalcount - 1 ? canvasLeft + Math.round((xnext - this.minx) * (canvasWidth / rangex)) : canvasWidth;
                    next = xpos + ((xposnext - xpos) / 2);
                    regionMap[i] = [last || 0, next, i];
                    last = next;
                    if (y === null) {
                        if (i) {
                            if (yvalues[i - 1] !== null) {
                                path = [];
                                paths.push(path);
                            }
                            vertices.push(null);
                        }
                    } else {
                        if (y < this.miny) {
                            y = this.miny;
                        }
                        if (y > this.maxy) {
                            y = this.maxy;
                        }
                        if (!path.length) {
                            // previous value was null
                            path.push([xpos, canvasTop + canvasHeight]);
                        }
                        vertex = [xpos, canvasTop + Math.round(canvasHeight - (canvasHeight * ((y - this.miny) / rangey)))];
                        path.push(vertex);
                        vertices.push(vertex);
                    }
                }

                lineShapes = [];
                fillShapes = [];
                plen = paths.length;
                for (i = 0; i < plen; i++) {
                    path = paths[i];
                    if (path.length) {
                        if (options.get('fillColor')) {
                            path.push([path[path.length - 1][0], (canvasTop + canvasHeight)]);
                            fillShapes.push(path.slice(0));
                            path.pop();
                        }
                        // if there's only a single point in this path, then we want to display it
                        // as a vertical line which means we keep path[0]  as is
                        if (path.length > 2) {
                            // else we want the first value
                            path[0] = [path[0][0], path[1][1]];
                        }
                        lineShapes.push(path);
                    }
                }

                // draw the fill first, then optionally the normal range, then the line on top of that
                plen = fillShapes.length;
                for (i = 0; i < plen; i++) {
                    target.drawShape(fillShapes[i],
                        options.get('fillColor'), options.get('fillColor')).append();
                }

                if (options.get('normalRangeMin') !== undefined && options.get('drawNormalOnTop')) {
                    this.drawNormalRange(canvasLeft, canvasTop, canvasHeight, canvasWidth, rangey);
                }

                plen = lineShapes.length;
                for (i = 0; i < plen; i++) {
                    target.drawShape(lineShapes[i], options.get('lineColor'), undefined,
                        options.get('lineWidth')).append();
                }

                if (spotRadius && options.get('valueSpots')) {
                    valueSpots = options.get('valueSpots');
                    if (valueSpots.get === undefined) {
                        valueSpots = new RangeMap(valueSpots);
                    }
                    for (i = 0; i < yvalcount; i++) {
                        color = valueSpots.get(yvalues[i]);
                        if (color) {
                            target.drawCircle(canvasLeft + Math.round((xvalues[i] - this.minx) * (canvasWidth / rangex)),
                                canvasTop + Math.round(canvasHeight - (canvasHeight * ((yvalues[i] - this.miny) / rangey))),
                                spotRadius, undefined,
                                color).append();
                        }
                    }

                }
                if (spotRadius && options.get('spotColor') && yvalues[yvallast] !== null) {
                    target.drawCircle(canvasLeft + Math.round((xvalues[xvalues.length - 1] - this.minx) * (canvasWidth / rangex)),
                        canvasTop + Math.round(canvasHeight - (canvasHeight * ((yvalues[yvallast] - this.miny) / rangey))),
                        spotRadius, undefined,
                        options.get('spotColor')).append();
                }
                if (this.maxy !== this.minyorg) {
                    if (spotRadius && options.get('minSpotColor')) {
                        x = xvalues[$.inArray(this.minyorg, yvalues)];
                        target.drawCircle(canvasLeft + Math.round((x - this.minx) * (canvasWidth / rangex)),
                            canvasTop + Math.round(canvasHeight - (canvasHeight * ((this.minyorg - this.miny) / rangey))),
                            spotRadius, undefined,
                            options.get('minSpotColor')).append();
                    }
                    if (spotRadius && options.get('maxSpotColor')) {
                        x = xvalues[$.inArray(this.maxyorg, yvalues)];
                        target.drawCircle(canvasLeft + Math.round((x - this.minx) * (canvasWidth / rangex)),
                            canvasTop + Math.round(canvasHeight - (canvasHeight * ((this.maxyorg - this.miny) / rangey))),
                            spotRadius, undefined,
                            options.get('maxSpotColor')).append();
                    }
                }

                this.lastShapeId = target.getLastShapeId();
                this.canvasTop = canvasTop;
                target.render();
            }
        });

        /**
         * Bar charts
         */
        $.fn.sparkline.bar = bar = createClass($.fn.sparkline._base, barHighlightMixin, {
            type: 'bar',

            init: function (el, values, options, width, height) {
                var barWidth = parseInt(options.get('barWidth'), 10),
                    barSpacing = parseInt(options.get('barSpacing'), 10),
                    chartRangeMin = options.get('chartRangeMin'),
                    chartRangeMax = options.get('chartRangeMax'),
                    chartRangeClip = options.get('chartRangeClip'),
                    stackMin = Infinity,
                    stackMax = -Infinity,
                    isStackString, groupMin, groupMax, stackRanges,
                    numValues, i, vlen, range, zeroAxis, xaxisOffset, min, max, clipMin, clipMax,
                    stacked, vlist, j, slen, svals, val, yoffset, yMaxCalc, canvasHeightEf;
                bar._super.init.call(this, el, values, options, width, height);

                // scan values to determine whether to stack bars
                for (i = 0, vlen = values.length; i < vlen; i++) {
                    val = values[i];
                    isStackString = typeof(val) === 'string' && val.indexOf(':') > -1;
                    if (isStackString || $.isArray(val)) {
                        stacked = true;
                        if (isStackString) {
                            val = values[i] = normalizeValues(val.split(':'));
                        }
                        val = remove(val, null); // min/max will treat null as zero
                        groupMin = Math.min.apply(Math, val);
                        groupMax = Math.max.apply(Math, val);
                        if (groupMin < stackMin) {
                            stackMin = groupMin;
                        }
                        if (groupMax > stackMax) {
                            stackMax = groupMax;
                        }
                    }
                }

                this.stacked = stacked;
                this.regionShapes = {};
                this.barWidth = barWidth;
                this.barSpacing = barSpacing;
                this.totalBarWidth = barWidth + barSpacing;
                this.width = width = (values.length * barWidth) + ((values.length - 1) * barSpacing);

                this.initTarget();

                if (chartRangeClip) {
                    clipMin = chartRangeMin === undefined ? -Infinity : chartRangeMin;
                    clipMax = chartRangeMax === undefined ? Infinity : chartRangeMax;
                }

                numValues = [];
                stackRanges = stacked ? [] : numValues;
                var stackTotals = [];
                var stackRangesNeg = [];
                for (i = 0, vlen = values.length; i < vlen; i++) {
                    if (stacked) {
                        vlist = values[i];
                        values[i] = svals = [];
                        stackTotals[i] = 0;
                        stackRanges[i] = stackRangesNeg[i] = 0;
                        for (j = 0, slen = vlist.length; j < slen; j++) {
                            val = svals[j] = chartRangeClip ? clipval(vlist[j], clipMin, clipMax) : vlist[j];
                            if (val !== null) {
                                if (val > 0) {
                                    stackTotals[i] += val;
                                }
                                if (stackMin < 0 && stackMax > 0) {
                                    if (val < 0) {
                                        stackRangesNeg[i] += Math.abs(val);
                                    } else {
                                        stackRanges[i] += val;
                                    }
                                } else {
                                    stackRanges[i] += Math.abs(val - (val < 0 ? stackMax : stackMin));
                                }
                                numValues.push(val);
                            }
                        }
                    } else {
                        val = chartRangeClip ? clipval(values[i], clipMin, clipMax) : values[i];
                        val = values[i] = normalizeValue(val);
                        if (val !== null) {
                            numValues.push(val);
                        }
                    }
                }
                this.max = max = Math.max.apply(Math, numValues);
                this.min = min = Math.min.apply(Math, numValues);
                this.stackMax = stackMax = stacked ? Math.max.apply(Math, stackTotals) : max;
                this.stackMin = stackMin = stacked ? Math.min.apply(Math, numValues) : min;

                if (options.get('chartRangeMin') !== undefined && (options.get('chartRangeClip') || options.get('chartRangeMin') < min)) {
                    min = options.get('chartRangeMin');
                }
                if (options.get('chartRangeMax') !== undefined && (options.get('chartRangeClip') || options.get('chartRangeMax') > max)) {
                    max = options.get('chartRangeMax');
                }

                this.zeroAxis = zeroAxis = options.get('zeroAxis', true);
                if (min <= 0 && max >= 0 && zeroAxis) {
                    xaxisOffset = 0;
                } else if (zeroAxis == false) {
                    xaxisOffset = min;
                } else if (min > 0) {
                    xaxisOffset = min;
                } else {
                    xaxisOffset = max;
                }
                this.xaxisOffset = xaxisOffset;

                range = stacked ? (Math.max.apply(Math, stackRanges) + Math.max.apply(Math, stackRangesNeg)) : max - min;

                // as we plot zero/min values a single pixel line, we add a pixel to all other
                // values - Reduce the effective canvas size to suit
                this.canvasHeightEf = (zeroAxis && min < 0) ? this.canvasHeight - 2 : this.canvasHeight - 1;

                if (min < xaxisOffset) {
                    yMaxCalc = (stacked && max >= 0) ? stackMax : max;
                    yoffset = (yMaxCalc - xaxisOffset) / range * this.canvasHeight;
                    if (yoffset !== Math.ceil(yoffset)) {
                        this.canvasHeightEf -= 2;
                        yoffset = Math.ceil(yoffset);
                    }
                } else {
                    yoffset = this.canvasHeight;
                }
                this.yoffset = yoffset;

                if ($.isArray(options.get('colorMap'))) {
                    this.colorMapByIndex = options.get('colorMap');
                    this.colorMapByValue = null;
                } else {
                    this.colorMapByIndex = null;
                    this.colorMapByValue = options.get('colorMap');
                    if (this.colorMapByValue && this.colorMapByValue.get === undefined) {
                        this.colorMapByValue = new RangeMap(this.colorMapByValue);
                    }
                }

                this.range = range;
            },

            getRegion: function (el, x, y) {
                var result = Math.floor(x / this.totalBarWidth);
                return (result < 0 || result >= this.values.length) ? undefined : result;
            },

            getCurrentRegionFields: function () {
                var currentRegion = this.currentRegion,
                    values = ensureArray(this.values[currentRegion]),
                    result = [],
                    value, i;
                for (i = values.length; i--;) {
                    value = values[i];
                    result.push({
                        isNull: value === null,
                        value: value,
                        color: this.calcColor(i, value, currentRegion),
                        offset: currentRegion
                    });
                }
                return result;
            },

            calcColor: function (stacknum, value, valuenum) {
                var colorMapByIndex = this.colorMapByIndex,
                    colorMapByValue = this.colorMapByValue,
                    options = this.options,
                    color, newColor;
                if (this.stacked) {
                    color = options.get('stackedBarColor');
                } else {
                    color = (value < 0) ? options.get('negBarColor') : options.get('barColor');
                }
                if (value === 0 && options.get('zeroColor') !== undefined) {
                    color = options.get('zeroColor');
                }
                if (colorMapByValue && (newColor = colorMapByValue.get(value))) {
                    color = newColor;
                } else if (colorMapByIndex && colorMapByIndex.length > valuenum) {
                    color = colorMapByIndex[valuenum];
                }
                return $.isArray(color) ? color[stacknum % color.length] : color;
            },

            /**
             * Render bar(s) for a region
             */
            renderRegion: function (valuenum, highlight) {
                var vals = this.values[valuenum],
                    options = this.options,
                    xaxisOffset = this.xaxisOffset,
                    result = [],
                    range = this.range,
                    stacked = this.stacked,
                    target = this.target,
                    x = valuenum * this.totalBarWidth,
                    canvasHeightEf = this.canvasHeightEf,
                    yoffset = this.yoffset,
                    y, height, color, isNull, yoffsetNeg, i, valcount, val, minPlotted, allMin;

                vals = $.isArray(vals) ? vals : [vals];
                valcount = vals.length;
                val = vals[0];
                isNull = all(null, vals);
                allMin = all(xaxisOffset, vals, true);

                if (isNull) {
                    if (options.get('nullColor')) {
                        color = highlight ? options.get('nullColor') : this.calcHighlightColor(options.get('nullColor'), options);
                        y = (yoffset > 0) ? yoffset - 1 : yoffset;
                        return target.drawRect(x, y, this.barWidth - 1, 0, color, color);
                    } else {
                        return undefined;
                    }
                }
                yoffsetNeg = yoffset;
                for (i = 0; i < valcount; i++) {
                    val = vals[i];

                    if (stacked && val === xaxisOffset) {
                        if (!allMin || minPlotted) {
                            continue;
                        }
                        minPlotted = true;
                    }

                    if (range > 0) {
                        height = Math.floor(canvasHeightEf * ((Math.abs(val - xaxisOffset) / range))) + 1;
                    } else {
                        height = 1;
                    }
                    if (val < xaxisOffset || (val === xaxisOffset && yoffset === 0)) {
                        y = yoffsetNeg;
                        yoffsetNeg += height;
                    } else {
                        y = yoffset - height;
                        yoffset -= height;
                    }
                    color = this.calcColor(i, val, valuenum);
                    if (highlight) {
                        color = this.calcHighlightColor(color, options);
                    }
                    result.push(target.drawRect(x, y, this.barWidth - 1, height - 1, color, color));
                }
                if (result.length === 1) {
                    return result[0];
                }
                return result;
            }
        });

        /**
         * Tristate charts
         */
        $.fn.sparkline.tristate = tristate = createClass($.fn.sparkline._base, barHighlightMixin, {
            type: 'tristate',

            init: function (el, values, options, width, height) {
                var barWidth = parseInt(options.get('barWidth'), 10),
                    barSpacing = parseInt(options.get('barSpacing'), 10);
                tristate._super.init.call(this, el, values, options, width, height);

                this.regionShapes = {};
                this.barWidth = barWidth;
                this.barSpacing = barSpacing;
                this.totalBarWidth = barWidth + barSpacing;
                this.values = $.map(values, Number);
                this.width = width = (values.length * barWidth) + ((values.length - 1) * barSpacing);

                if ($.isArray(options.get('colorMap'))) {
                    this.colorMapByIndex = options.get('colorMap');
                    this.colorMapByValue = null;
                } else {
                    this.colorMapByIndex = null;
                    this.colorMapByValue = options.get('colorMap');
                    if (this.colorMapByValue && this.colorMapByValue.get === undefined) {
                        this.colorMapByValue = new RangeMap(this.colorMapByValue);
                    }
                }
                this.initTarget();
            },

            getRegion: function (el, x, y) {
                return Math.floor(x / this.totalBarWidth);
            },

            getCurrentRegionFields: function () {
                var currentRegion = this.currentRegion;
                return {
                    isNull: this.values[currentRegion] === undefined,
                    value: this.values[currentRegion],
                    color: this.calcColor(this.values[currentRegion], currentRegion),
                    offset: currentRegion
                };
            },

            calcColor: function (value, valuenum) {
                var values = this.values,
                    options = this.options,
                    colorMapByIndex = this.colorMapByIndex,
                    colorMapByValue = this.colorMapByValue,
                    color, newColor;

                if (colorMapByValue && (newColor = colorMapByValue.get(value))) {
                    color = newColor;
                } else if (colorMapByIndex && colorMapByIndex.length > valuenum) {
                    color = colorMapByIndex[valuenum];
                } else if (values[valuenum] < 0) {
                    color = options.get('negBarColor');
                } else if (values[valuenum] > 0) {
                    color = options.get('posBarColor');
                } else {
                    color = options.get('zeroBarColor');
                }
                return color;
            },

            renderRegion: function (valuenum, highlight) {
                var values = this.values,
                    options = this.options,
                    target = this.target,
                    canvasHeight, height, halfHeight,
                    x, y, color;

                canvasHeight = target.pixelHeight;
                halfHeight = Math.round(canvasHeight / 2);

                x = valuenum * this.totalBarWidth;
                if (values[valuenum] < 0) {
                    y = halfHeight;
                    height = halfHeight - 1;
                } else if (values[valuenum] > 0) {
                    y = 0;
                    height = halfHeight - 1;
                } else {
                    y = halfHeight - 1;
                    height = 2;
                }
                color = this.calcColor(values[valuenum], valuenum);
                if (color === null) {
                    return;
                }
                if (highlight) {
                    color = this.calcHighlightColor(color, options);
                }
                return target.drawRect(x, y, this.barWidth - 1, height - 1, color, color);
            }
        });

        /**
         * Discrete charts
         */
        $.fn.sparkline.discrete = discrete = createClass($.fn.sparkline._base, barHighlightMixin, {
            type: 'discrete',

            init: function (el, values, options, width, height) {
                discrete._super.init.call(this, el, values, options, width, height);

                this.regionShapes = {};
                this.values = values = $.map(values, Number);
                this.min = Math.min.apply(Math, values);
                this.max = Math.max.apply(Math, values);
                this.range = this.max - this.min;
                this.width = width = options.get('width') === 'auto' ? values.length * 2 : this.width;
                this.interval = Math.floor(width / values.length);
                this.itemWidth = width / values.length;
                if (options.get('chartRangeMin') !== undefined && (options.get('chartRangeClip') || options.get('chartRangeMin') < this.min)) {
                    this.min = options.get('chartRangeMin');
                }
                if (options.get('chartRangeMax') !== undefined && (options.get('chartRangeClip') || options.get('chartRangeMax') > this.max)) {
                    this.max = options.get('chartRangeMax');
                }
                this.initTarget();
                if (this.target) {
                    this.lineHeight = options.get('lineHeight') === 'auto' ? Math.round(this.canvasHeight * 0.3) : options.get('lineHeight');
                }
            },

            getRegion: function (el, x, y) {
                return Math.floor(x / this.itemWidth);
            },

            getCurrentRegionFields: function () {
                var currentRegion = this.currentRegion;
                return {
                    isNull: this.values[currentRegion] === undefined,
                    value: this.values[currentRegion],
                    offset: currentRegion
                };
            },

            renderRegion: function (valuenum, highlight) {
                var values = this.values,
                    options = this.options,
                    min = this.min,
                    max = this.max,
                    range = this.range,
                    interval = this.interval,
                    target = this.target,
                    canvasHeight = this.canvasHeight,
                    lineHeight = this.lineHeight,
                    pheight = canvasHeight - lineHeight,
                    ytop, val, color, x;

                val = clipval(values[valuenum], min, max);
                x = valuenum * interval;
                ytop = Math.round(pheight - pheight * ((val - min) / range));
                color = (options.get('thresholdColor') && val < options.get('thresholdValue')) ? options.get('thresholdColor') : options.get('lineColor');
                if (highlight) {
                    color = this.calcHighlightColor(color, options);
                }
                return target.drawLine(x, ytop, x, ytop + lineHeight, color);
            }
        });

        /**
         * Bullet charts
         */
        $.fn.sparkline.bullet = bullet = createClass($.fn.sparkline._base, {
            type: 'bullet',

            init: function (el, values, options, width, height) {
                var min, max, vals;
                bullet._super.init.call(this, el, values, options, width, height);

                // values: target, performance, range1, range2, range3
                this.values = values = normalizeValues(values);
                // target or performance could be null
                vals = values.slice();
                vals[0] = vals[0] === null ? vals[2] : vals[0];
                vals[1] = values[1] === null ? vals[2] : vals[1];
                min = Math.min.apply(Math, values);
                max = Math.max.apply(Math, values);
                if (options.get('base') === undefined) {
                    min = min < 0 ? min : 0;
                } else {
                    min = options.get('base');
                }
                this.min = min;
                this.max = max;
                this.range = max - min;
                this.shapes = {};
                this.valueShapes = {};
                this.regiondata = {};
                this.width = width = options.get('width') === 'auto' ? '4.0em' : width;
                this.target = this.$el.simpledraw(width, height, options.get('composite'));
                if (!values.length) {
                    this.disabled = true;
                }
                this.initTarget();
            },

            getRegion: function (el, x, y) {
                var shapeid = this.target.getShapeAt(el, x, y);
                return (shapeid !== undefined && this.shapes[shapeid] !== undefined) ? this.shapes[shapeid] : undefined;
            },

            getCurrentRegionFields: function () {
                var currentRegion = this.currentRegion;
                return {
                    fieldkey: currentRegion.substr(0, 1),
                    value: this.values[currentRegion.substr(1)],
                    region: currentRegion
                };
            },

            changeHighlight: function (highlight) {
                var currentRegion = this.currentRegion,
                    shapeid = this.valueShapes[currentRegion],
                    shape;
                delete this.shapes[shapeid];
                switch (currentRegion.substr(0, 1)) {
                    case 'r':
                        shape = this.renderRange(currentRegion.substr(1), highlight);
                        break;
                    case 'p':
                        shape = this.renderPerformance(highlight);
                        break;
                    case 't':
                        shape = this.renderTarget(highlight);
                        break;
                }
                this.valueShapes[currentRegion] = shape.id;
                this.shapes[shape.id] = currentRegion;
                this.target.replaceWithShape(shapeid, shape);
            },

            renderRange: function (rn, highlight) {
                var rangeval = this.values[rn],
                    rangewidth = Math.round(this.canvasWidth * ((rangeval - this.min) / this.range)),
                    color = this.options.get('rangeColors')[rn - 2];
                if (highlight) {
                    color = this.calcHighlightColor(color, this.options);
                }
                return this.target.drawRect(0, 0, rangewidth - 1, this.canvasHeight - 1, color, color);
            },

            renderPerformance: function (highlight) {
                var perfval = this.values[1],
                    perfwidth = Math.round(this.canvasWidth * ((perfval - this.min) / this.range)),
                    color = this.options.get('performanceColor');
                if (highlight) {
                    color = this.calcHighlightColor(color, this.options);
                }
                return this.target.drawRect(0, Math.round(this.canvasHeight * 0.3), perfwidth - 1,
                    Math.round(this.canvasHeight * 0.4) - 1, color, color);
            },

            renderTarget: function (highlight) {
                var targetval = this.values[0],
                    x = Math.round(this.canvasWidth * ((targetval - this.min) / this.range) - (this.options.get('targetWidth') / 2)),
                    targettop = Math.round(this.canvasHeight * 0.10),
                    targetheight = this.canvasHeight - (targettop * 2),
                    color = this.options.get('targetColor');
                if (highlight) {
                    color = this.calcHighlightColor(color, this.options);
                }
                return this.target.drawRect(x, targettop, this.options.get('targetWidth') - 1, targetheight - 1, color, color);
            },

            render: function () {
                var vlen = this.values.length,
                    target = this.target,
                    i, shape;
                if (!bullet._super.render.call(this)) {
                    return;
                }
                for (i = 2; i < vlen; i++) {
                    shape = this.renderRange(i).append();
                    this.shapes[shape.id] = 'r' + i;
                    this.valueShapes['r' + i] = shape.id;
                }
                if (this.values[1] !== null) {
                    shape = this.renderPerformance().append();
                    this.shapes[shape.id] = 'p1';
                    this.valueShapes.p1 = shape.id;
                }
                if (this.values[0] !== null) {
                    shape = this.renderTarget().append();
                    this.shapes[shape.id] = 't0';
                    this.valueShapes.t0 = shape.id;
                }
                target.render();
            }
        });

        /**
         * Pie charts
         */
        $.fn.sparkline.pie = pie = createClass($.fn.sparkline._base, {
            type: 'pie',

            init: function (el, values, options, width, height) {
                var total = 0, i;

                pie._super.init.call(this, el, values, options, width, height);

                this.shapes = {}; // map shape ids to value offsets
                this.valueShapes = {}; // maps value offsets to shape ids
                this.values = values = $.map(values, Number);

                if (options.get('width') === 'auto') {
                    this.width = this.height;
                }

                if (values.length > 0) {
                    for (i = values.length; i--;) {
                        total += values[i];
                    }
                }
                this.total = total;
                this.initTarget();
                this.radius = Math.floor(Math.min(this.canvasWidth, this.canvasHeight) / 2);
            },

            getRegion: function (el, x, y) {
                var shapeid = this.target.getShapeAt(el, x, y);
                return (shapeid !== undefined && this.shapes[shapeid] !== undefined) ? this.shapes[shapeid] : undefined;
            },

            getCurrentRegionFields: function () {
                var currentRegion = this.currentRegion;
                return {
                    isNull: this.values[currentRegion] === undefined,
                    value: this.values[currentRegion],
                    percent: this.values[currentRegion] / this.total * 100,
                    color: this.options.get('sliceColors')[currentRegion % this.options.get('sliceColors').length],
                    offset: currentRegion
                };
            },

            changeHighlight: function (highlight) {
                var currentRegion = this.currentRegion,
                    newslice = this.renderSlice(currentRegion, highlight),
                    shapeid = this.valueShapes[currentRegion];
                delete this.shapes[shapeid];
                this.target.replaceWithShape(shapeid, newslice);
                this.valueShapes[currentRegion] = newslice.id;
                this.shapes[newslice.id] = currentRegion;
            },

            renderSlice: function (valuenum, highlight) {
                var target = this.target,
                    options = this.options,
                    radius = this.radius,
                    borderWidth = options.get('borderWidth'),
                    offset = options.get('offset'),
                    circle = 2 * Math.PI,
                    values = this.values,
                    total = this.total,
                    next = offset ? (2*Math.PI)*(offset/360) : 0,
                    start, end, i, vlen, color;

                vlen = values.length;
                for (i = 0; i < vlen; i++) {
                    start = next;
                    end = next;
                    if (total > 0) {  // avoid divide by zero
                        end = next + (circle * (values[i] / total));
                    }
                    if (valuenum === i) {
                        color = options.get('sliceColors')[i % options.get('sliceColors').length];
                        if (highlight) {
                            color = this.calcHighlightColor(color, options);
                        }

                        return target.drawPieSlice(radius, radius, radius - borderWidth, start, end, undefined, color);
                    }
                    next = end;
                }
            },

            render: function () {
                var target = this.target,
                    values = this.values,
                    options = this.options,
                    radius = this.radius,
                    borderWidth = options.get('borderWidth'),
                    shape, i;

                if (!pie._super.render.call(this)) {
                    return;
                }
                if (borderWidth) {
                    target.drawCircle(radius, radius, Math.floor(radius - (borderWidth / 2)),
                        options.get('borderColor'), undefined, borderWidth).append();
                }
                for (i = values.length; i--;) {
                    if (values[i]) { // don't render zero values
                        shape = this.renderSlice(i).append();
                        this.valueShapes[i] = shape.id; // store just the shapeid
                        this.shapes[shape.id] = i;
                    }
                }
                target.render();
            }
        });

        /**
         * Box plots
         */
        $.fn.sparkline.box = box = createClass($.fn.sparkline._base, {
            type: 'box',

            init: function (el, values, options, width, height) {
                box._super.init.call(this, el, values, options, width, height);
                this.values = $.map(values, Number);
                this.width = options.get('width') === 'auto' ? '4.0em' : width;
                this.initTarget();
                if (!this.values.length) {
                    this.disabled = 1;
                }
            },

            /**
             * Simulate a single region
             */
            getRegion: function () {
                return 1;
            },

            getCurrentRegionFields: function () {
                var result = [
                    { field: 'lq', value: this.quartiles[0] },
                    { field: 'med', value: this.quartiles[1] },
                    { field: 'uq', value: this.quartiles[2] }
                ];
                if (this.loutlier !== undefined) {
                    result.push({ field: 'lo', value: this.loutlier});
                }
                if (this.routlier !== undefined) {
                    result.push({ field: 'ro', value: this.routlier});
                }
                if (this.lwhisker !== undefined) {
                    result.push({ field: 'lw', value: this.lwhisker});
                }
                if (this.rwhisker !== undefined) {
                    result.push({ field: 'rw', value: this.rwhisker});
                }
                return result;
            },

            render: function () {
                var target = this.target,
                    values = this.values,
                    vlen = values.length,
                    options = this.options,
                    canvasWidth = this.canvasWidth,
                    canvasHeight = this.canvasHeight,
                    minValue = options.get('chartRangeMin') === undefined ? Math.min.apply(Math, values) : options.get('chartRangeMin'),
                    maxValue = options.get('chartRangeMax') === undefined ? Math.max.apply(Math, values) : options.get('chartRangeMax'),
                    canvasLeft = 0,
                    lwhisker, loutlier, iqr, q1, q2, q3, rwhisker, routlier, i,
                    size, unitSize;

                if (!box._super.render.call(this)) {
                    return;
                }

                if (options.get('raw')) {
                    if (options.get('showOutliers') && values.length > 5) {
                        loutlier = values[0];
                        lwhisker = values[1];
                        q1 = values[2];
                        q2 = values[3];
                        q3 = values[4];
                        rwhisker = values[5];
                        routlier = values[6];
                    } else {
                        lwhisker = values[0];
                        q1 = values[1];
                        q2 = values[2];
                        q3 = values[3];
                        rwhisker = values[4];
                    }
                } else {
                    values.sort(function (a, b) { return a - b; });
                    q1 = quartile(values, 1);
                    q2 = quartile(values, 2);
                    q3 = quartile(values, 3);
                    iqr = q3 - q1;
                    if (options.get('showOutliers')) {
                        lwhisker = rwhisker = undefined;
                        for (i = 0; i < vlen; i++) {
                            if (lwhisker === undefined && values[i] > q1 - (iqr * options.get('outlierIQR'))) {
                                lwhisker = values[i];
                            }
                            if (values[i] < q3 + (iqr * options.get('outlierIQR'))) {
                                rwhisker = values[i];
                            }
                        }
                        loutlier = values[0];
                        routlier = values[vlen - 1];
                    } else {
                        lwhisker = values[0];
                        rwhisker = values[vlen - 1];
                    }
                }
                this.quartiles = [q1, q2, q3];
                this.lwhisker = lwhisker;
                this.rwhisker = rwhisker;
                this.loutlier = loutlier;
                this.routlier = routlier;

                unitSize = canvasWidth / (maxValue - minValue + 1);
                if (options.get('showOutliers')) {
                    canvasLeft = Math.ceil(options.get('spotRadius'));
                    canvasWidth -= 2 * Math.ceil(options.get('spotRadius'));
                    unitSize = canvasWidth / (maxValue - minValue + 1);
                    if (loutlier < lwhisker) {
                        target.drawCircle((loutlier - minValue) * unitSize + canvasLeft,
                            canvasHeight / 2,
                            options.get('spotRadius'),
                            options.get('outlierLineColor'),
                            options.get('outlierFillColor')).append();
                    }
                    if (routlier > rwhisker) {
                        target.drawCircle((routlier - minValue) * unitSize + canvasLeft,
                            canvasHeight / 2,
                            options.get('spotRadius'),
                            options.get('outlierLineColor'),
                            options.get('outlierFillColor')).append();
                    }
                }

                // box
                target.drawRect(
                    Math.round((q1 - minValue) * unitSize + canvasLeft),
                    Math.round(canvasHeight * 0.1),
                    Math.round((q3 - q1) * unitSize),
                    Math.round(canvasHeight * 0.8),
                    options.get('boxLineColor'),
                    options.get('boxFillColor')).append();
                // left whisker
                target.drawLine(
                    Math.round((lwhisker - minValue) * unitSize + canvasLeft),
                    Math.round(canvasHeight / 2),
                    Math.round((q1 - minValue) * unitSize + canvasLeft),
                    Math.round(canvasHeight / 2),
                    options.get('lineColor')).append();
                target.drawLine(
                    Math.round((lwhisker - minValue) * unitSize + canvasLeft),
                    Math.round(canvasHeight / 4),
                    Math.round((lwhisker - minValue) * unitSize + canvasLeft),
                    Math.round(canvasHeight - canvasHeight / 4),
                    options.get('whiskerColor')).append();
                // right whisker
                target.drawLine(Math.round((rwhisker - minValue) * unitSize + canvasLeft),
                    Math.round(canvasHeight / 2),
                    Math.round((q3 - minValue) * unitSize + canvasLeft),
                    Math.round(canvasHeight / 2),
                    options.get('lineColor')).append();
                target.drawLine(
                    Math.round((rwhisker - minValue) * unitSize + canvasLeft),
                    Math.round(canvasHeight / 4),
                    Math.round((rwhisker - minValue) * unitSize + canvasLeft),
                    Math.round(canvasHeight - canvasHeight / 4),
                    options.get('whiskerColor')).append();
                // median line
                target.drawLine(
                    Math.round((q2 - minValue) * unitSize + canvasLeft),
                    Math.round(canvasHeight * 0.1),
                    Math.round((q2 - minValue) * unitSize + canvasLeft),
                    Math.round(canvasHeight * 0.9),
                    options.get('medianColor')).append();
                if (options.get('target')) {
                    size = Math.ceil(options.get('spotRadius'));
                    target.drawLine(
                        Math.round((options.get('target') - minValue) * unitSize + canvasLeft),
                        Math.round((canvasHeight / 2) - size),
                        Math.round((options.get('target') - minValue) * unitSize + canvasLeft),
                        Math.round((canvasHeight / 2) + size),
                        options.get('targetColor')).append();
                    target.drawLine(
                        Math.round((options.get('target') - minValue) * unitSize + canvasLeft - size),
                        Math.round(canvasHeight / 2),
                        Math.round((options.get('target') - minValue) * unitSize + canvasLeft + size),
                        Math.round(canvasHeight / 2),
                        options.get('targetColor')).append();
                }
                target.render();
            }
        });

        // Setup a very simple "virtual canvas" to make drawing the few shapes we need easier
        // This is accessible as $(foo).simpledraw()

        VShape = createClass({
            init: function (target, id, type, args) {
                this.target = target;
                this.id = id;
                this.type = type;
                this.args = args;
            },
            append: function () {
                this.target.appendShape(this);
                return this;
            }
        });

        VCanvas_base = createClass({
            _pxregex: /(\d+)(px)?\s*$/i,

            init: function (width, height, target) {
                if (!width) {
                    return;
                }
                this.width = width;
                this.height = height;
                this.target = target;
                this.lastShapeId = null;
                if (target[0]) {
                    target = target[0];
                }
                $.data(target, '_jqs_vcanvas', this);
            },

            drawLine: function (x1, y1, x2, y2, lineColor, lineWidth) {
                return this.drawShape([[x1, y1], [x2, y2]], lineColor, lineWidth);
            },

            drawShape: function (path, lineColor, fillColor, lineWidth) {
                return this._genShape('Shape', [path, lineColor, fillColor, lineWidth]);
            },

            drawCircle: function (x, y, radius, lineColor, fillColor, lineWidth) {
                return this._genShape('Circle', [x, y, radius, lineColor, fillColor, lineWidth]);
            },

            drawPieSlice: function (x, y, radius, startAngle, endAngle, lineColor, fillColor) {
                return this._genShape('PieSlice', [x, y, radius, startAngle, endAngle, lineColor, fillColor]);
            },

            drawRect: function (x, y, width, height, lineColor, fillColor) {
                return this._genShape('Rect', [x, y, width, height, lineColor, fillColor]);
            },

            getElement: function () {
                return this.canvas;
            },

            /**
             * Return the most recently inserted shape id
             */
            getLastShapeId: function () {
                return this.lastShapeId;
            },

            /**
             * Clear and reset the canvas
             */
            reset: function () {
                alert('reset not implemented');
            },

            _insert: function (el, target) {
                $(target).html(el);
            },

            /**
             * Calculate the pixel dimensions of the canvas
             */
            _calculatePixelDims: function (width, height, canvas) {
                // XXX This should probably be a configurable option
                var match;
                match = this._pxregex.exec(height);
                if (match) {
                    this.pixelHeight = match[1];
                } else {
                    this.pixelHeight = $(canvas).height();
                }
                match = this._pxregex.exec(width);
                if (match) {
                    this.pixelWidth = match[1];
                } else {
                    this.pixelWidth = $(canvas).width();
                }
            },

            /**
             * Generate a shape object and id for later rendering
             */
            _genShape: function (shapetype, shapeargs) {
                var id = shapeCount++;
                shapeargs.unshift(id);
                return new VShape(this, id, shapetype, shapeargs);
            },

            /**
             * Add a shape to the end of the render queue
             */
            appendShape: function (shape) {
                alert('appendShape not implemented');
            },

            /**
             * Replace one shape with another
             */
            replaceWithShape: function (shapeid, shape) {
                alert('replaceWithShape not implemented');
            },

            /**
             * Insert one shape after another in the render queue
             */
            insertAfterShape: function (shapeid, shape) {
                alert('insertAfterShape not implemented');
            },

            /**
             * Remove a shape from the queue
             */
            removeShapeId: function (shapeid) {
                alert('removeShapeId not implemented');
            },

            /**
             * Find a shape at the specified x/y co-ordinates
             */
            getShapeAt: function (el, x, y) {
                alert('getShapeAt not implemented');
            },

            /**
             * Render all queued shapes onto the canvas
             */
            render: function () {
                alert('render not implemented');
            }
        });

        VCanvas_canvas = createClass(VCanvas_base, {
            init: function (width, height, target, interact) {
                VCanvas_canvas._super.init.call(this, width, height, target);
                this.canvas = document.createElement('canvas');
                if (target[0]) {
                    target = target[0];
                }
                $.data(target, '_jqs_vcanvas', this);
                $(this.canvas).css({ display: 'inline-block', width: width, height: height, verticalAlign: 'top' });
                this._insert(this.canvas, target);
                this._calculatePixelDims(width, height, this.canvas);
                this.canvas.width = this.pixelWidth;
                this.canvas.height = this.pixelHeight;
                this.interact = interact;
                this.shapes = {};
                this.shapeseq = [];
                this.currentTargetShapeId = undefined;
                $(this.canvas).css({width: this.pixelWidth, height: this.pixelHeight});
            },

            _getContext: function (lineColor, fillColor, lineWidth) {
                var context = this.canvas.getContext('2d');
                if (lineColor !== undefined) {
                    context.strokeStyle = lineColor;
                }
                context.lineWidth = lineWidth === undefined ? 1 : lineWidth;
                if (fillColor !== undefined) {
                    context.fillStyle = fillColor;
                }
                return context;
            },

            reset: function () {
                var context = this._getContext();
                context.clearRect(0, 0, this.pixelWidth, this.pixelHeight);
                this.shapes = {};
                this.shapeseq = [];
                this.currentTargetShapeId = undefined;
            },

            _drawShape: function (shapeid, path, lineColor, fillColor, lineWidth) {
                var context = this._getContext(lineColor, fillColor, lineWidth),
                    i, plen;
                context.beginPath();
                context.moveTo(path[0][0] + 0.5, path[0][1] + 0.5);
                for (i = 1, plen = path.length; i < plen; i++) {
                    context.lineTo(path[i][0] + 0.5, path[i][1] + 0.5); // the 0.5 offset gives us crisp pixel-width lines
                }
                if (lineColor !== undefined) {
                    context.stroke();
                }
                if (fillColor !== undefined) {
                    context.fill();
                }
                if (this.targetX !== undefined && this.targetY !== undefined &&
                    context.isPointInPath(this.targetX, this.targetY)) {
                    this.currentTargetShapeId = shapeid;
                }
            },

            _drawCircle: function (shapeid, x, y, radius, lineColor, fillColor, lineWidth) {
                var context = this._getContext(lineColor, fillColor, lineWidth);
                context.beginPath();
                context.arc(x, y, radius, 0, 2 * Math.PI, false);
                if (this.targetX !== undefined && this.targetY !== undefined &&
                    context.isPointInPath(this.targetX, this.targetY)) {
                    this.currentTargetShapeId = shapeid;
                }
                if (lineColor !== undefined) {
                    context.stroke();
                }
                if (fillColor !== undefined) {
                    context.fill();
                }
            },

            _drawPieSlice: function (shapeid, x, y, radius, startAngle, endAngle, lineColor, fillColor) {
                var context = this._getContext(lineColor, fillColor);
                context.beginPath();
                context.moveTo(x, y);
                context.arc(x, y, radius, startAngle, endAngle, false);
                context.lineTo(x, y);
                context.closePath();
                if (lineColor !== undefined) {
                    context.stroke();
                }
                if (fillColor) {
                    context.fill();
                }
                if (this.targetX !== undefined && this.targetY !== undefined &&
                    context.isPointInPath(this.targetX, this.targetY)) {
                    this.currentTargetShapeId = shapeid;
                }
            },

            _drawRect: function (shapeid, x, y, width, height, lineColor, fillColor) {
                return this._drawShape(shapeid, [[x, y], [x + width, y], [x + width, y + height], [x, y + height], [x, y]], lineColor, fillColor);
            },

            appendShape: function (shape) {
                this.shapes[shape.id] = shape;
                this.shapeseq.push(shape.id);
                this.lastShapeId = shape.id;
                return shape.id;
            },

            replaceWithShape: function (shapeid, shape) {
                var shapeseq = this.shapeseq,
                    i;
                this.shapes[shape.id] = shape;
                for (i = shapeseq.length; i--;) {
                    if (shapeseq[i] == shapeid) {
                        shapeseq[i] = shape.id;
                    }
                }
                delete this.shapes[shapeid];
            },

            replaceWithShapes: function (shapeids, shapes) {
                var shapeseq = this.shapeseq,
                    shapemap = {},
                    sid, i, first;

                for (i = shapeids.length; i--;) {
                    shapemap[shapeids[i]] = true;
                }
                for (i = shapeseq.length; i--;) {
                    sid = shapeseq[i];
                    if (shapemap[sid]) {
                        shapeseq.splice(i, 1);
                        delete this.shapes[sid];
                        first = i;
                    }
                }
                for (i = shapes.length; i--;) {
                    shapeseq.splice(first, 0, shapes[i].id);
                    this.shapes[shapes[i].id] = shapes[i];
                }

            },

            insertAfterShape: function (shapeid, shape) {
                var shapeseq = this.shapeseq,
                    i;
                for (i = shapeseq.length; i--;) {
                    if (shapeseq[i] === shapeid) {
                        shapeseq.splice(i + 1, 0, shape.id);
                        this.shapes[shape.id] = shape;
                        return;
                    }
                }
            },

            removeShapeId: function (shapeid) {
                var shapeseq = this.shapeseq,
                    i;
                for (i = shapeseq.length; i--;) {
                    if (shapeseq[i] === shapeid) {
                        shapeseq.splice(i, 1);
                        break;
                    }
                }
                delete this.shapes[shapeid];
            },

            getShapeAt: function (el, x, y) {
                this.targetX = x;
                this.targetY = y;
                this.render();
                return this.currentTargetShapeId;
            },

            render: function () {
                var shapeseq = this.shapeseq,
                    shapes = this.shapes,
                    shapeCount = shapeseq.length,
                    context = this._getContext(),
                    shapeid, shape, i;
                context.clearRect(0, 0, this.pixelWidth, this.pixelHeight);
                for (i = 0; i < shapeCount; i++) {
                    shapeid = shapeseq[i];
                    shape = shapes[shapeid];
                    this['_draw' + shape.type].apply(this, shape.args);
                }
                if (!this.interact) {
                    // not interactive so no need to keep the shapes array
                    this.shapes = {};
                    this.shapeseq = [];
                }
            }

        });

        VCanvas_vml = createClass(VCanvas_base, {
            init: function (width, height, target) {
                var groupel;
                VCanvas_vml._super.init.call(this, width, height, target);
                if (target[0]) {
                    target = target[0];
                }
                $.data(target, '_jqs_vcanvas', this);
                this.canvas = document.createElement('span');
                $(this.canvas).css({ display: 'inline-block', position: 'relative', overflow: 'hidden', width: width, height: height, margin: '0px', padding: '0px', verticalAlign: 'top'});
                this._insert(this.canvas, target);
                this._calculatePixelDims(width, height, this.canvas);
                this.canvas.width = this.pixelWidth;
                this.canvas.height = this.pixelHeight;
                groupel = '<v:group coordorigin="0 0" coordsize="' + this.pixelWidth + ' ' + this.pixelHeight + '"' +
                    ' style="position:absolute;top:0;left:0;width:' + this.pixelWidth + 'px;height=' + this.pixelHeight + 'px;"></v:group>';
                this.canvas.insertAdjacentHTML('beforeEnd', groupel);
                this.group = $(this.canvas).children()[0];
                this.rendered = false;
                this.prerender = '';
            },

            _drawShape: function (shapeid, path, lineColor, fillColor, lineWidth) {
                var vpath = [],
                    initial, stroke, fill, closed, vel, plen, i;
                for (i = 0, plen = path.length; i < plen; i++) {
                    vpath[i] = '' + (path[i][0]) + ',' + (path[i][1]);
                }
                initial = vpath.splice(0, 1);
                lineWidth = lineWidth === undefined ? 1 : lineWidth;
                stroke = lineColor === undefined ? ' stroked="false" ' : ' strokeWeight="' + lineWidth + 'px" strokeColor="' + lineColor + '" ';
                fill = fillColor === undefined ? ' filled="false"' : ' fillColor="' + fillColor + '" filled="true" ';
                closed = vpath[0] === vpath[vpath.length - 1] ? 'x ' : '';
                vel = '<v:shape coordorigin="0 0" coordsize="' + this.pixelWidth + ' ' + this.pixelHeight + '" ' +
                    ' id="jqsshape' + shapeid + '" ' +
                    stroke +
                    fill +
                    ' style="position:absolute;left:0px;top:0px;height:' + this.pixelHeight + 'px;width:' + this.pixelWidth + 'px;padding:0px;margin:0px;" ' +
                    ' path="m ' + initial + ' l ' + vpath.join(', ') + ' ' + closed + 'e">' +
                    ' </v:shape>';
                return vel;
            },

            _drawCircle: function (shapeid, x, y, radius, lineColor, fillColor, lineWidth) {
                var stroke, fill, vel;
                x -= radius;
                y -= radius;
                stroke = lineColor === undefined ? ' stroked="false" ' : ' strokeWeight="' + lineWidth + 'px" strokeColor="' + lineColor + '" ';
                fill = fillColor === undefined ? ' filled="false"' : ' fillColor="' + fillColor + '" filled="true" ';
                vel = '<v:oval ' +
                    ' id="jqsshape' + shapeid + '" ' +
                    stroke +
                    fill +
                    ' style="position:absolute;top:' + y + 'px; left:' + x + 'px; width:' + (radius * 2) + 'px; height:' + (radius * 2) + 'px"></v:oval>';
                return vel;

            },

            _drawPieSlice: function (shapeid, x, y, radius, startAngle, endAngle, lineColor, fillColor) {
                var vpath, startx, starty, endx, endy, stroke, fill, vel;
                if (startAngle === endAngle) {
                    return '';  // VML seems to have problem when start angle equals end angle.
                }
                if ((endAngle - startAngle) === (2 * Math.PI)) {
                    startAngle = 0.0;  // VML seems to have a problem when drawing a full circle that doesn't start 0
                    endAngle = (2 * Math.PI);
                }

                startx = x + Math.round(Math.cos(startAngle) * radius);
                starty = y + Math.round(Math.sin(startAngle) * radius);
                endx = x + Math.round(Math.cos(endAngle) * radius);
                endy = y + Math.round(Math.sin(endAngle) * radius);

                if (startx === endx && starty === endy) {
                    if ((endAngle - startAngle) < Math.PI) {
                        // Prevent very small slices from being mistaken as a whole pie
                        return '';
                    }
                    // essentially going to be the entire circle, so ignore startAngle
                    startx = endx = x + radius;
                    starty = endy = y;
                }

                if (startx === endx && starty === endy && (endAngle - startAngle) < Math.PI) {
                    return '';
                }

                vpath = [x - radius, y - radius, x + radius, y + radius, startx, starty, endx, endy];
                stroke = lineColor === undefined ? ' stroked="false" ' : ' strokeWeight="1px" strokeColor="' + lineColor + '" ';
                fill = fillColor === undefined ? ' filled="false"' : ' fillColor="' + fillColor + '" filled="true" ';
                vel = '<v:shape coordorigin="0 0" coordsize="' + this.pixelWidth + ' ' + this.pixelHeight + '" ' +
                    ' id="jqsshape' + shapeid + '" ' +
                    stroke +
                    fill +
                    ' style="position:absolute;left:0px;top:0px;height:' + this.pixelHeight + 'px;width:' + this.pixelWidth + 'px;padding:0px;margin:0px;" ' +
                    ' path="m ' + x + ',' + y + ' wa ' + vpath.join(', ') + ' x e">' +
                    ' </v:shape>';
                return vel;
            },

            _drawRect: function (shapeid, x, y, width, height, lineColor, fillColor) {
                return this._drawShape(shapeid, [[x, y], [x, y + height], [x + width, y + height], [x + width, y], [x, y]], lineColor, fillColor);
            },

            reset: function () {
                this.group.innerHTML = '';
            },

            appendShape: function (shape) {
                var vel = this['_draw' + shape.type].apply(this, shape.args);
                if (this.rendered) {
                    this.group.insertAdjacentHTML('beforeEnd', vel);
                } else {
                    this.prerender += vel;
                }
                this.lastShapeId = shape.id;
                return shape.id;
            },

            replaceWithShape: function (shapeid, shape) {
                var existing = $('#jqsshape' + shapeid),
                    vel = this['_draw' + shape.type].apply(this, shape.args);
                existing[0].outerHTML = vel;
            },

            replaceWithShapes: function (shapeids, shapes) {
                // replace the first shapeid with all the new shapes then toast the remaining old shapes
                var existing = $('#jqsshape' + shapeids[0]),
                    replace = '',
                    slen = shapes.length,
                    i;
                for (i = 0; i < slen; i++) {
                    replace += this['_draw' + shapes[i].type].apply(this, shapes[i].args);
                }
                existing[0].outerHTML = replace;
                for (i = 1; i < shapeids.length; i++) {
                    $('#jqsshape' + shapeids[i]).remove();
                }
            },

            insertAfterShape: function (shapeid, shape) {
                var existing = $('#jqsshape' + shapeid),
                    vel = this['_draw' + shape.type].apply(this, shape.args);
                existing[0].insertAdjacentHTML('afterEnd', vel);
            },

            removeShapeId: function (shapeid) {
                var existing = $('#jqsshape' + shapeid);
                this.group.removeChild(existing[0]);
            },

            getShapeAt: function (el, x, y) {
                var shapeid = el.id.substr(8);
                return shapeid;
            },

            render: function () {
                if (!this.rendered) {
                    // batch the intial render into a single repaint
                    this.group.innerHTML = this.prerender;
                    this.rendered = true;
                }
            }
        });

    }))}(document, Math));

var sample_data = {"af":"16.63","al":"11.58","dz":"158.97","ao":"85.81","ag":"1.1","ar":"351.02","am":"8.83","au":"1219.72","at":"366.26","az":"52.17","bs":"7.54","bh":"21.73","bd":"105.4","bb":"3.96","by":"52.89","be":"461.33","bz":"1.43","bj":"6.49","bt":"1.4","bo":"19.18","ba":"16.2","bw":"12.5","br":"2023.53","bn":"11.96","bg":"44.84","bf":"8.67","bi":"1.47","kh":"11.36","cm":"21.88","ca":"1563.66","cv":"1.57","cf":"2.11","td":"7.59","cl":"199.18","cn":"5745.13","co":"283.11","km":"0.56","cd":"12.6","cg":"11.88","cr":"35.02","ci":"22.38","hr":"59.92","cy":"22.75","cz":"195.23","dk":"304.56","dj":"1.14","dm":"0.38","do":"50.87","ec":"61.49","eg":"216.83","sv":"21.8","gq":"14.55","er":"2.25","ee":"19.22","et":"30.94","fj":"3.15","fi":"231.98","fr":"2555.44","ga":"12.56","gm":"1.04","ge":"11.23","de":"3305.9","gh":"18.06","gr":"305.01","gd":"0.65","gt":"40.77","gn":"4.34","gw":"0.83","gy":"2.2","ht":"6.5","hn":"15.34","hk":"226.49","hu":"132.28","is":"12.77","in":"1430.02","id":"695.06","ir":"337.9","iq":"84.14","ie":"204.14","il":"201.25","it":"2036.69","jm":"13.74","jp":"5390.9","jo":"27.13","kz":"129.76","ke":"32.42","ki":"0.15","kr":"986.26","undefined":"5.73","kw":"117.32","kg":"4.44","la":"6.34","lv":"23.39","lb":"39.15","ls":"1.8","lr":"0.98","ly":"77.91","lt":"35.73","lu":"52.43","mk":"9.58","mg":"8.33","mw":"5.04","my":"218.95","mv":"1.43","ml":"9.08","mt":"7.8","mr":"3.49","mu":"9.43","mx":"1004.04","md":"5.36","mn":"5.81","me":"3.88","ma":"91.7","mz":"10.21","mm":"35.65","na":"11.45","np":"15.11","nl":"770.31","nz":"138","ni":"6.38","ne":"5.6","ng":"206.66","no":"413.51","om":"53.78","pk":"174.79","pa":"27.2","pg":"8.81","py":"17.17","pe":"153.55","ph":"189.06","pl":"438.88","pt":"223.7","qa":"126.52","ro":"158.39","ru":"1476.91","rw":"5.69","ws":"0.55","st":"0.19","sa":"434.44","sn":"12.66","rs":"38.92","sc":"0.92","sl":"1.9","sg":"217.38","sk":"86.26","si":"46.44","sb":"0.67","za":"354.41","es":"1374.78","lk":"48.24","kn":"0.56","lc":"1","vc":"0.58","sd":"65.93","sr":"3.3","sz":"3.17","se":"444.59","ch":"522.44","sy":"59.63","tw":"426.98","tj":"5.58","tz":"22.43","th":"312.61","tl":"0.62","tg":"3.07","to":"0.3","tt":"21.2","tn":"43.86","tr":"729.05","tm":0,"ug":"17.12","ua":"136.56","ae":"239.65","gb":"2258.57","us":"14624.18","uy":"40.71","uz":"37.72","vu":"0.72","ve":"285.21","vn":"101.99","ye":"30.02","zm":"15.69","zw":"5.57"};
//# sourceMappingURL=admin.js.map
