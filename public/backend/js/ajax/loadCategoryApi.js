<<<<<<< HEAD
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
=======
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
                    $('<td>').html((v.status == 0) ? "Tắt" : "Hiển Thị"),
                    $('<td>').html("<a href='" + v.id + "' class='updateStatusCategory btn btn-warning btn-category-color'><i class='fas fa-toggle-on'></i></a>" + "<a href='" + v.id + "' class='updateCategorya btn btn-default btn-info btn-category-color' >Cập Nhật</a>" + "<a href='" + v.id + "' class='delete-category btn btn-default btn-danger btn-category-color' >Xóa Loại</a>"),
                ).appendTo('#tbodyTable');

            })

        }
    });
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
});