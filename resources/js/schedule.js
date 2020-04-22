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

    //TODO add user to class
    //Update php class members table to add a new user.

};

// $(document).ready(function(){
//     $("#form").submit(function(){
//         window.location.replace("backend.php");
//     });
//   });


// // handles the click event for link 1, sends the query
// function getOutput() {
//     getRequest(
//         '/teamproject/classes/backend.php', // URL for the PHP file
//         drawOutput,  // handle successful request
//         drawError    // handle error
//     );
//     return false;
// }
// // handles drawing an error message
// function drawError() {
//     var container = document.getElementById('output');
//     container.innerHTML = 'Bummer: there was an error!';
// }
// // handles the response, adds the html
// function drawOutput(responseText) {
//     var container = document.getElementById('output');
//     container.innerHTML = responseText;
// }
// // helper function for cross-browser request object
// function getRequest(url, success, error) {
//     var req = false;
//     try {
//         // most browsers
//         req = new XMLHttpRequest();
//     } catch (e) {
//         // IE
//         try {
//             req = new ActiveXObject("Msxml2.XMLHTTP");
//         } catch (e) {
//             // try an older version
//             try {
//                 req = new ActiveXObject("Microsoft.XMLHTTP");
//             } catch (e) {
//                 return false;
//             }
//         }
//     }
//     if (!req) return false;
//     if (typeof success != 'function') success = function () { };
//     if (typeof error != 'function') error = function () { };
//     req.onreadystatechange = function () {
//         if (req.readyState == 4) {
//             return req.status === 200 ?
//                 success(req.responseText) : error(req.status);
//         }
//     }
//     req.open("GET", url, true);
//     req.send(null);
//     return req;
// }