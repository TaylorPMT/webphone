$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
// $(".btn").click(function(e) {
//     e.preventDefault();
//     for (instance in CKEDITOR.instances) {
//         CKEDITOR.instances[instance].updateElement();
//     };
$(document).on('submit', "#data", function(e) { //If you use form submit then have your form name here
    //$('#btnAddProduct').on('click', function() {
    var inputData = new FormData($(this)[0]);
    //var inputData = $('#formAddProduct').serialize(); not matter :p
    e.preventDefault();
    $.ajax({
        url: 'http://127.0.0.1:8000/api/admin/product/',
        type: 'POST',
        dataType: 'JSON',
        async: false,
        // contentType: 'application/x-www-form-urlencoded',
        data: inputData, //$("#data").serialize(),

        processData: false,
        contentType: false,

        // {
        //     "name": $('input[name=nameProduct]').val(),
        //     "catid": $('select[name=category]').val(),
        //     "images": $('input[name=img]').val(),
        //     "price": $('input[name=priceProduct]').val(),
        //     "pricesale": $('input[name=pricesaleProduct]').val(),
        //     "detail": $('textarea[name=detail]').val(),
        // },

        success: function(data) {
            console.log("message" + ":" + data.message);
            console.log("status" + ":" + data.status);
            if (typeof data.status == 200) {
                $('#exampleModal').modal('show');
                $('.alert').html("Thêm Thành Công");
            } else {
                $('#exampleModal').modal('show');
                $('.alert').html("Thêm Thất Bại");
            }
        },
        error: function(data) {

        }


    });
});