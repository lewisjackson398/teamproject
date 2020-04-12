/*

//search classes found in database
$('.search-box input[type="text"]').on("keyup input", function () {
    // Get input value on change
    var inputVal = $(this).val();
    var resultDropdown = $(this).siblings(".result");
    if (inputVal.length) {
        $.get("backend-search.php", {
            class: inputVal
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

*/
//hide elements that dont appear in search
function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("div")[0];
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

/*

function lewis() {
    a = $('.instructor_name')

    if ($('#brandon').on('click', function () {
        toggle()
    }));
}



$('#brandon').on('click', function () {
    $('.instructor_name').value = "Brandon".toggle();
});


$('#brandon').on('click', function () {
    if ($('.instructor_name'.value = "Brandon")) {
        toggle();
    }
});

$('#oliver').on('click', function () {
    if ($('.instructor_name'.value = "Oliver")) {
        toggle();
    }
});

$('#arlana').on('click', function () {
    if ($('.instructor_name'.value = "Arlana")) {
        toggle();
    }
});

$('#all').on('click', function () {
    if ($('.instructor_name'.value = "Brandon")) {
        toggle();
    }
});

$(document).ready(function(){
	$('#lewis').on('click',function(){	
		$('.instructor_name').val('LEWIS').toggle();
	});
});

*/

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
