$(document).ready(
    function () {
        $('.search-box input[type="text"]').on("keyup input", function () {
            /* Get input value on change */
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if (inputVal.length) {
                $.get("backend-search.php", {
                    workout_name: inputVal
                }).done(function (data) {
                    // Display the returned data in browser
                    resultDropdown.html(data);
                });
            } else {
                resultDropdown.empty();
            }
        });

        // Set search input value on click of result item
        $(document).on("click", ".result p", function () {
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });


        //small script that makes schedule system work on homepage and schedule page - 
        (function ($) {
            //nav bar animation while scrolling
            $('.navbar-collapse ul li a').click(function () {
                $('.navbar-toggle:visible').click();
            });

            // Offset for Main Navigation
            $('#mainNav').affix({
                offset: {
                    top: 100
                }
            })

            // Tabs on schedule
            $(".buttons").on('click', 'a', function () {
                event.preventDefault();
                var classToShow = this.id.split('-')[1],
                    filter = classToShow === "all" ? 'div' : '.' + classToShow;
                $(".table tbody tr td")
                    .children().show().addClass('active')
                    .not(filter).hide();
            });
            $(".buttons").on('click', '#choice-all', function () {
                $(".table tbody tr td div").removeClass('active');
            });
        })(jQuery);
    });