$(document).on("click", ".updateStatusCategory", function(event) {
    event.preventDefault();
    var id = $(this).attr("href");

    var url = 'http://127.0.0.1:8000/api/admin/category/' + id;

    $.ajax({
        url: url,
        type: "PUT",
        success: function(data) {
            $('#ketqua').html('<h4 style="color:green;">' + data.message + '</h4>');
            console.log(data);

        },
    }).done(function() {
        loadDataAfterInsert();
    });
});
$('.btn-category-exit').click(function(event) {
    event.preventDefault();
    window.location = BASE;
});
$(document).on("click", ".updateCategorya", function(event) {
    event.preventDefault();

    $('.modal-update').modal('show');

    var id = $(this).attr("href");

    var url = 'http://127.0.0.1:8000/api/admin/category/' + id;

    var hr = $.ajax({
        url: url,
        type: "GET",
        dataType: 'json',
        jsonpCallback: "index",
        success: function(data) {
            $('input[name="id-category"]').val(data.id);
            $('input[name="nameCategoryUpdate"]').val(data.name);
            $('input[name="inputMetaKeyUpdate"]').val(data.metakey);
            $('input[name="inputMetaDescUpdate"]').val(data.metadesc);
            console.log(data);
            hr.abort();
        },
    });



});
$('.update-category-btn').click(function(event) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    event.preventDefault();
    var id = $('input[name=id-category]').val();
    console.log(id);
    var url = 'http://127.0.0.1:8000/api/admin/category/' + id;

    console.log(url);
    var xhr = $.ajax({
        url: url,
        type: "PUT",
        data: $('.updateCategoryForm').serialize(),
        dataType: 'JSON',
        async: false,
        jsonpCallback: "update",

        success: function(data) {
            console.log(data);
            if (typeof data.error !== 'undefined') {
                $('#return').html('<h4 style="color:red;">Lỗi </h4>');
            } else {

                console.log(data.dataProductsNew);
                $('.modal-update').modal('hide');
                $('#ketqua').html('<h4 style="color:green;">Update Thành Công</h4>');

            }

        },
    }).done(function() {
        loadDataAfterInsert();
    });
});