// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });
// $(".btn").click(function(e) {
//     e.preventDefault();
//     for (instance in CKEDITOR.instances) {
//         CKEDITOR.instances[instance].updateElement();
//     };
//     $.ajax({
//         url: 'localhost:8000/api/product/',
//         type: 'POST',
//         dataType: 'JSON',
//         // contentType:'application/x-www-form-urlencoded',
//         data: $("#data").serialize(),

//         // {
//         //     "name":$('input[name=nameProduct]').val(),
//         //     "catid":$('select[name=category]').val(),
//         //     "images":$('input[name=img]').val(),
//         //     "price":$('input[name=priceProduct]').val(),
//         //     "pricesale":$('input[name=pricesaleProduct]').val(),
//         //     "detail":$('textarea[name=detail]').val(),
//         // },

//         success: function(data) {
//             console.log(data);
//         }
//     });
// });