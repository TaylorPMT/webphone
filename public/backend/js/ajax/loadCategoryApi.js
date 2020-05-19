$(document).ready(function() {
    var url = 'http://127.0.0.1:8000/api/admin/category';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        jsonpCallback: "index",
        success: function(json) {
            $('#tbodyTable').empty();
            $.each(json, function(i, v) {

                var $tr = $('<tr>').append(


                    $('<td>').html(v.id),
                    $('<td>').html(v.name),
                    $('<td>').html((v.created_at)),
                    $('<td>').html(v.ten_admin_create),
                    $('<td>').html((v.status == 0) ? "Tắt" : "Hiển Thị")

                ).appendTo('#tbodyTable');

            })

        }
    });
});