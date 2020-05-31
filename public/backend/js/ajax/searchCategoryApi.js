<<<<<<< HEAD
 function showResult(str) {
     var key = str;

     //get dữ liệu người dùng nhập vào
     if (key != '') { //call ajax api
         var url = 'http://127.0.0.1:8000/api/admin/category/' + key;
         $.ajax({
             url: url,
             type: 'GET',
             dataType: 'json',

             success: function(v) {

                 if (v.erro != null) {
                     $('#tbodyTable').empty();
                     var $tr = $('<tr>').append(


                         $('<td colspan="5" style="text-align:center;">').html("Không Có Dữ Liệu"),


                     ).appendTo('#tbodyTable');

                 } else {
                     $('#tbodyTable').empty();

                     var $tr = $('<tr>').append(


                         $('<td>').html(v.id),
                         $('<td>').html(v.name),
                         $('<td>').html((v.created_at)),
                         $('<td>').html(v.ten_admin_create),
                         $('<td>').html((v.status == 0) ? "Tắt" : "Hiển Thị")

                     ).appendTo('#tbodyTable');
                 }

             }
         });
         //end call ajax api
         //Nếu người dùng xóa hết trong box
     } else {
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
     }
 }
=======
 function showResult(str) {
     var key = str;

     //get dữ liệu người dùng nhập vào
     if (key != '') { //call ajax api
         var url = 'http://127.0.0.1:8000/api/admin/category/' + key;
         $.ajax({
             url: url,
             type: 'GET',
             dataType: 'json',

             success: function(v) {

                 if (v.erro != null) {
                     $('#tbodyTable').empty();
                     var $tr = $('<tr>').append(


                         $('<td colspan="5" style="text-align:center;">').html("Không Có Dữ Liệu"),


                     ).appendTo('#tbodyTable');

                 } else {
                     $('#tbodyTable').empty();

                     var $tr = $('<tr>').append(


                         $('<td>').html(v.id),
                         $('<td>').html(v.name),
                         $('<td>').html((v.created_at)),
                         $('<td>').html(v.ten_admin_create),
                         $('<td>').html((v.status == 0) ? "Tắt" : "Hiển Thị"),
                         $('<td>').html("<a href='" + v.id + "' class='updateStatusCategory btn btn-warning btn-category-color'><i class='fas fa-toggle-on'></i></a>" + "<a href='" + v.id + "' class='updateCategorya btn btn-default btn-info btn-category-color' >Cập Nhật</a>" + "<a href='" + v.id + "' class='delete-category btn btn-default btn-danger btn-category-color' >Xóa Loại</a>"),
                     ).appendTo('#tbodyTable');
                 }

             }
         });
         //end call ajax api
         //Nếu người dùng xóa hết trong box
     } else {
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
     }
 }

 //load buttton thêm
 $('#radioBtn a').on('click', function() {
     var sel = $(this).data('title');
     var tog = $(this).data('toggle');
     $('#' + tog).prop('value', sel);

     $('a[data-toggle="' + tog + '"]').not('[data-title="' + sel + '"]').removeClass('active').addClass('notActive');
     $('a[data-toggle="' + tog + '"][data-title="' + sel + '"]').removeClass('notActive').addClass('active');
 })
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
