/*

//search classes found in database
$('.search-box input[type="text"]').on("keyup input", function () {
    // Get input value on change
    var inputVal = $(this).val();
    var resultDropdown = $(this).siblings(".result");
    if (inputVal.length) {
        $.get("backend-search.php", {
            term: inputVal
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


//search classes found in database
$('.search-box input[type="text"]').on("keyup input", function () {
    // Get input value on change
    var inputVal = $(this).val();
    var resultDropdown = $(this).siblings(".result");
    if (inputVal.length) {
        $.get("backend-buttons.php", {
            term: inputVal
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
/*

//hide elements that dont appear in search
function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("timetable");
    tr = document.getElementById("timetable_row2");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            };
        };
    };
};



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



function joinClass() {

    //button onclick display add/remove from class card
    var x = document.getElementById("join");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }

};

function classInfo() {

    //button onclick display add/remove from class card
    var x = document.getElementById("form2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }

};

function row() {

    //button onclick display add/remove from class card
    var a = document.getElementById("update");

    if (a.style.display === "none") {
        a.style.display = "block";
    }
    else {
        a.style.display = "none";

    }

};

*/