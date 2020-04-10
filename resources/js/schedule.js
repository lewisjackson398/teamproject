//search classes found in database
$('.search-box input[type="text"]').on("keyup input", function () {
    /* Get input value on change */
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

//hide elements that dont appear in search
function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("test");
    tr = table.getElementsByTagName("tr");
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
}

$(document).ready(function(){
	$('#lewis').on('click',function(){	
		$('.lewis').toggle();
	});
});

$(document).ready(function(){
	$('#brandon').on('click',function(){	
		$('.brandon').toggle();
	});
});

$(document).ready(function(){
	$('#arlana').on('click',function(){	
		$('.arlana').toggle();
	});
});

$(document).ready(function(){
	$('#oliver').on('click',function(){	
		$('.oliver').toggle();
	});
});

$(document).ready(function(){
	$('#all').on('click',function(){	
		$('.oliver, .lewis, .brandon, .arlana').show();
	});
});
