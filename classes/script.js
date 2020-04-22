$(document).ready(function () {

    load_data();

    function load_data(query) {
        $.ajax({
            url: "fetch.php",
            method: "POST",
            data: { query: query },
            dataType: "json",
            success: function (data) {
                $('#total_records').text(data.length);
                var html = '';
                if (data.length > 0) {
                    for (var count = 0; count < data.length; count++) {
                        html += '<tr>';
                        html += '<td>' + data[count].date + '</td>';
                        html += '<td>' + data[count].class + '</td>';
                        html += '<td>' + data[count].start + '</td>';
                        html += '<td>' + data[count].finish + '</td>';
                        html += '<td>' + data[count].instructor_name + '</td></tr>';
                    }
                }
                else {
                    html = '<tr><td colspan="5">No Data Found</td></tr>';
                }
                $('tbody').html(html);
            }
        })
    }

    $('#search').click(function () {
        var query = $('#tags').val();
        load_data(query);
    });

});