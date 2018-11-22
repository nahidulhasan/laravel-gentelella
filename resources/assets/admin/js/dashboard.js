(function ($) {

    //log chart
    // var logActivity = {
    //     options: {
    //         date: {
    //             startDate: moment().subtract(6, 'days'),
    //             endDate: moment(),
    //             minDate: moment().subtract(60, 'days'),
    //             maxDate: moment(),
    //             dateLimit: {
    //                 days: 60
    //             },
    //             showDropdowns: true,
    //             showWeekNumbers: true,
    //             timePicker: false,
    //             timePickerIncrement: 1,
    //             timePicker12Hour: true,
    //             ranges: {
    //                 'Last 7 Days': [moment().subtract(6, 'days'), moment()],
    //                 'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    //                 'This Month': [moment().startOf('month'), moment().endOf('month')],
    //                 'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    //             },
    //             opens: 'left',
    //             buttonClasses: ['btn btn-default'],
    //             applyClass: 'btn-small btn-primary',
    //             cancelClass: 'btn-small',
    //             format: 'MM/DD/YYYY',
    //             separator: ' to ',
    //             locale: {
    //                 applyLabel: 'Submit',
    //                 cancelLabel: 'Clear',
    //                 fromLabel: 'From',
    //                 toLabel: 'To',
    //                 customRangeLabel: 'Custom',
    //                 daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    //                 monthNames: [
    //                     'January',
    //                     'February',
    //                     'March',
    //                     'April',
    //                     'May',
    //                     'June',
    //                     'July',
    //                     'August',
    //                     'September',
    //                     'October',
    //                     'November',
    //                     'December'
    //                 ],
    //                 firstDay: 1
    //             }
    //         },
    //         chart: {
    //             series: {
    //                 lines: {
    //                     show: false,
    //                     fill: true
    //                 },
    //                 splines: {
    //                     show: true,
    //                     tension: 0.4,
    //                     lineWidth: 1,
    //                     fill: 0.4
    //                 },
    //                 points: {
    //                     radius: 0,
    //                     show: true
    //                 },
    //                 shadowSize: 2
    //             },
    //             grid: {
    //                 verticalLines: true,
    //                 hoverable: true,
    //                 clickable: true,
    //                 tickColor: "#d5d5d5",
    //                 borderWidth: 1,
    //                 color: '#fff'
    //             },
    //             colors: ["#B71C1C", "#D32F2F", '#F44336', '#FF5722', '#FF9100', '#4CAF50', '#1976D2', '#90CAF9'],
    //             xaxis: {
    //                 tickColor: "rgba(51, 51, 51, 0.06)",
    //                 mode: "time",
    //                 tickSize: [1, "day"],
    //                 //tickLength: 10,
    //                 axisLabel: "Date",
    //                 axisLabelUseCanvas: true,
    //                 axisLabelFontSizePixels: 12,
    //                 axisLabelFontFamily: 'Verdana, Arial',
    //                 axisLabelPadding: 10
    //             },
    //             yaxis: {
    //                 ticks: 8,
    //                 tickColor: "rgba(51, 51, 51, 0.06)",
    //             },
    //             tooltip: false
    //         }
    //     },
    //     gteChartData: function ($el, start, end) {
    //         var self = this;
    //
    //         $.ajax({
    //             url: 'admin/dashboard/log-chart',
    //             data: {start: start, end: end},
    //             success: function (response) {
    //                 var data = {};
    //                 var progress = {all: 0};
    //
    //                 $.each(response, function (k, v) {
    //                     data[k] = [];
    //                     progress[k] = 0;
    //                     $.each(v, function (date, value) {
    //                         data[k].push([new Date(date).getTime(), value]);
    //                         progress.all += value;
    //                         progress[k] += value;
    //                     });
    //                 });
    //
    //                 $.plot($el,
    //                     [data.emergency, data.alert, data.critical, data.error, data.warning, data.notice, data.info, data.debug],
    //                     self.options.chart);
    //
    //
    //                 $.each(progress, function (k, v) {
    //                     var $progress = $('.progress-bar.log-' + k);
    //                     if ($progress.length) {
    //                         $progress.attr('data-transitiongoal', 100 / progress.all * v).progressbar();
    //                     }
    //                 });
    //             }
    //         });
    //     },
    //     init: function ($el) {
    //         var self = this;
    //
    //         $el = $($el);
    //
    //         var $dateEl = $el.find('.date_piker');
    //         var $chartEl = $el.find('.chart');
    //
    //         $dateEl.daterangepicker(this.options.date, function (start, end) {
    //             $dateEl.find('.date_piker_label').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    //         });
    //
    //         $dateEl.on('apply.daterangepicker', function (ev, picker) {
    //             self.gteChartData($chartEl, picker.startDate.format('YYYY-MM-DD'), picker.endDate.format('YYYY-MM-DD'));
    //         });
    //
    //         self.gteChartData($chartEl, this.options.date.startDate.format('YYYY-MM-DD'), this.options.date.endDate.format('YYYY-MM-DD'));
    //     }
    // };
    //
    // logActivity.init($('#log_activity'));
    //
    //
    // var registrationUsage = {
    //     _defaults: {
    //         type: 'doughnut',
    //         tooltipFillColor: "rgba(51, 51, 51, 0.55)",
    //         data: {
    //             labels: [],
    //             datasets: [{
    //                 data: [],
    //                 backgroundColor: [
    //                     "#3498DB",
    //                     "#3498DB",
    //                     "#9B59B6",
    //                     "#E74C3C",
    //                 ],
    //                 hoverBackgroundColor: [
    //                     "#36CAAB",
    //                     "#49A9EA",
    //                     "#B370CF",
    //                     "#E95E4F",
    //                 ]
    //             }]
    //         },
    //         options: {
    //             legend: false,
    //             responsive: false
    //         }
    //     },
    //     init: function ($el) {
    //         var self = this;
    //         $el = $($el);
    //
    //         $.ajax({
    //             url: 'admin/dashboard/registration-chart',
    //             success: function (response) {
    //                 $.each($el.find('.tile_label'), function () {
    //                     self._defaults.data.labels.push($(this).text());
    //                 });
    //
    //                 var count = 0;
    //
    //                 $.each(response, function () {
    //                     count += parseInt(this);
    //                 });
    //
    //                 $('#registration_usage_from').text(100 / count * parseInt(response.registration_form));
    //                 $('#registration_usage_google').text(100 / count * parseInt(response.google));
    //                 $('#registration_usage_facebook').text(100 / count * parseInt(response.facebook));
    //                 $('#registration_usage_twitter').text(100 / count * parseInt(response.twitter));
    //
    //                 self._defaults.data.datasets[0].data = [response.registration_form, response.google, response.facebook, response.twitter];
    //
    //                 new Chart($el.find('.canvasChart'), self._defaults);
    //             }
    //         });
    //     }
    // };
    //
    // registrationUsage.init($('#registration_usage'));


    /**
     * Resize function without multiple trigger
     *
     * Usage:
     * $(window).smartresize(function(){
 *     // code here
 * });
     */
    (function($,sr){
        // debouncing function from John Hann
        // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
        var debounce = function (func, threshold, execAsap) {
            var timeout;

            return function debounced () {
                var obj = this, args = arguments;
                function delayed () {
                    if (!execAsap)
                        func.apply(obj, args);
                    timeout = null;
                }

                if (timeout)
                    clearTimeout(timeout);
                else if (execAsap)
                    func.apply(obj, args);

                timeout = setTimeout(delayed, threshold || 100);
            };
        };

        // smartresize
        jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

    })(jQuery,'smartresize');


    var CURRENT_URL = window.location.href.split('#')[0].split('?')[0],
        $BODY = $('body'),
        $MENU_TOGGLE = $('#menu_toggle'),
        $SIDEBAR_MENU = $('#sidebar-menu'),
        $SIDEBAR_FOOTER = $('.sidebar-footer'),
        $LEFT_COL = $('.left_col'),
        $RIGHT_COL = $('.right_col'),
        $NAV_MENU = $('.nav_menu'),
        $FOOTER = $('footer');


        $('#reservation').daterangepicker({
            locale: {
                        format: 'DD/MM/YYYY'
                     }
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            console.log(start.format('DD-MM-YYYY'), end.format('DD-MM-YYYY'));
            $('#start_date').val(start.format('YYYY-MM-DD'));
            $('#end_date').val(end.format('YYYY-MM-DD'));
        });

        // $('#reservation-time').daterangepicker({
        //     timePicker: true,
        //     timePickerIncrement: 30,
        //     locale: {
        //         format: 'MM/DD/YYYY h:mm A'
        //     }
        // });




// Sidebar
    function init_sidebar() {
// TODO: This is some kind of easy fix, maybe we can improve this
        var setContentHeight = function () {
            // reset height
            $RIGHT_COL.css('min-height', $(window).height());

            var bodyHeight = $BODY.outerHeight(),
                footerHeight = $BODY.hasClass('footer_fixed') ? -10 : $FOOTER.height(),
                leftColHeight = $LEFT_COL.eq(1).height() + $SIDEBAR_FOOTER.height(),
                contentHeight = bodyHeight < leftColHeight ? leftColHeight : bodyHeight;

            // normalize content
            contentHeight -= $NAV_MENU.height() + footerHeight;

            $RIGHT_COL.css('min-height', contentHeight);
        };

        $SIDEBAR_MENU.find('a').on('click', function(ev) {
            console.log('clicked - sidebar_menu');
            var $li = $(this).parent();

            if ($li.is('.active')) {
                $li.removeClass('active active-sm');
                $('ul:first', $li).slideUp(function() {
                    setContentHeight();
                });
            } else {
                // prevent closing menu if we are on child menu
                if (!$li.parent().is('.child_menu')) {
                    $SIDEBAR_MENU.find('li').removeClass('active active-sm');
                    $SIDEBAR_MENU.find('li ul').slideUp();
                }else
                {
                    if ( $BODY.is( ".nav-sm" ) )
                    {
                        $SIDEBAR_MENU.find( "li" ).removeClass( "active active-sm" );
                        $SIDEBAR_MENU.find( "li ul" ).slideUp();
                    }
                }
                $li.addClass('active');

                $('ul:first', $li).slideDown(function() {
                    setContentHeight();
                });
            }
        });

// toggle small or large menu
        $MENU_TOGGLE.on('click', function() {
            console.log('clicked - menu toggle');

            if ($BODY.hasClass('nav-md')) {
                $SIDEBAR_MENU.find('li.active ul').hide();
                $SIDEBAR_MENU.find('li.active').addClass('active-sm').removeClass('active');
            } else {
                $SIDEBAR_MENU.find('li.active-sm ul').show();
                $SIDEBAR_MENU.find('li.active-sm').addClass('active').removeClass('active-sm');
            }

            $BODY.toggleClass('nav-md nav-sm');

            setContentHeight();

            $('.dataTable').each ( function () { $(this).dataTable().fnDraw(); });
        });

        // check active menu
        $SIDEBAR_MENU.find('a[href="' + CURRENT_URL + '"]').parent('li').addClass('current-page');

        $SIDEBAR_MENU.find('a').filter(function () {
            return this.href == CURRENT_URL;
        }).parent('li').addClass('current-page').parents('ul').slideDown(function() {
            setContentHeight();
        }).parent().addClass('active');

        // recompute content when resizing
        $(window).smartresize(function(){
            setContentHeight();
        });

        setContentHeight();

        // fixed sidebar
        if ($.fn.mCustomScrollbar) {
            $('.menu_fixed').mCustomScrollbar({
                autoHideScrollbar: true,
                theme: 'minimal',
                mouseWheel:{ preventDefault: true }
            });
        }
    };



    // Panel toolbox
    $(document).ready(function() {
        $('.collapse-link').on('click', function() {
            var $BOX_PANEL = $(this).closest('.x_panel'),
                $ICON = $(this).find('i'),
                $BOX_CONTENT = $BOX_PANEL.find('.x_content');

            // fix for some div with hardcoded fix class
            if ($BOX_PANEL.attr('style')) {
                $BOX_CONTENT.slideToggle(200, function(){
                    $BOX_PANEL.removeAttr('style');
                });
            } else {
                $BOX_CONTENT.slideToggle(200);
                $BOX_PANEL.css('height', 'auto');
            }

            $ICON.toggleClass('fa-chevron-up fa-chevron-down');
        });

        $('.close-link').click(function () {
            var $BOX_PANEL = $(this).closest('.x_panel');

            $BOX_PANEL.remove();
        });
    });
// /Panel toolbox

// Tooltip
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip({
            container: 'body'
        });
    });
// /Tooltip

// Progressbar
    if ($(".progress .progress-bar")[0]) {
        $('.progress .progress-bar').progressbar();
    }
// /Progressbar

// Switchery
    $(document).ready(function() {
        if ($(".js-switch")[0]) {
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            elems.forEach(function (html) {
                var switchery = new Switchery(html, {
                    color: '#26B99A'
                });
            });
        }
    });
// /Switchery



    /* INPUTS */

    function onAddTag(tag) {
        alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
    }

    //tags input
    function init_TagsInput() {

        if(typeof $.fn.tagsInput !== 'undefined'){

            $('#tags_1').tagsInput({
                width: 'auto'
            });

        }

    };


    /* SELECT2 */

    function init_select2() {

        if( typeof (select2) === 'undefined'){ return; }
        console.log('init_toolbox');

        $(".select2_single").select2({
            placeholder: "Select a state",
            allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
            maximumSelectionLength: 4,
            placeholder: "With Max Selection limit 4",
            allowClear: true
        });

    };


    /* INPUT MASK */

    function init_InputMask() {

        if( typeof ($.fn.inputmask) === 'undefined'){ return; }
        console.log('init_InputMask');

        $(":input").inputmask();

    };


    /* VALIDATOR */

    function init_validator () {

        if( typeof (validator) === 'undefined'){ return; }
        console.log('init_validator');

        // initialize the validator function
        validator.message.date = 'not a real date';

        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

        $('.multi.required').on('keyup blur', 'input', function() {
            validator.checkField.apply($(this).siblings().last()[0]);
        });

        $('form').submit(function(e) {
            e.preventDefault();
            var submit = true;

            // evaluate the form using generic validaing
            if (!validator.checkAll($(this))) {
                submit = false;
            }

            if (submit)
                this.submit();

            return false;
        });

    };


    $(document).ready(function() {
        init_InputMask();
        init_validator();

        init_TagsInput();
        init_sidebar();
        init_select2();
        
        $(document).on('click','#notifications', function () {
            $.ajax({
                url: NOTIFICATION_URL,
                    success: function (response) {
                        $('#notification_count').html(0);
                    }
            });
        })
    });



    //jcarousel
    // var jcarousel = $('.jcarousel').jcarousel();
    //
    // $('.jcarousel-control-prev')
    //     .on('jcarouselcontrol:active', function () {
    //         $(this).removeClass('inactive');
    //     })
    //     .on('jcarouselcontrol:inactive', function () {
    //         $(this).addClass('inactive');
    //     })
    //     .jcarouselControl({
    //         target: '-=1'
    //     });
    //
    // $('.jcarousel-control-next')
    //     .on('jcarouselcontrol:active', function () {
    //         $(this).removeClass('inactive');
    //     })
    //     .on('jcarouselcontrol:inactive', function () {
    //         $(this).addClass('inactive');
    //     })
    //     .jcarouselControl({
    //         target: '+=1'
    //     });

    // var url = 'https://photolancer.zone/api/photos',
    //     param = {
    //         page: 1,
    //         perPage: 10,
    //         sort: [{by: 'rating', type: 'desc'}]
    //     };
    //
    // $.ajax({
    //     url: url + '?' + $.param(param),
    //     method: 'GET',
    //     success: function (response) {
    //         var html = '<ul>';
    //
    //         var href = 'https://photolancer.zone/photos';
    //
    //         $.each(response, function () {
    //             html += '<li><a href="' + href + '/' + this.slug + '/detail" target="_blank"><img src="' + this.thumbnails.file.photos.small + '" alt="' + this.name + '"/></a></li>';
    //         });
    //
    //         html += '</ul>';
    //
    //         // Append items
    //         jcarousel
    //             .html(html);
    //
    //         // Reload carousel
    //         jcarousel
    //             .jcarousel('reload');
    //     }
    // });


})(jQuery);
