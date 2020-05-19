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