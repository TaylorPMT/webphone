$("#submitbtn").click(function(e) {
    e.preventDefault;
    var nameCate = $('#nameCategory').val();
    if (nameCate == '') {
        $('#return').html('<h4 style="color:red;">Vui lòng Không Bỏ Trống</h4>');
    }



    var url = 'http://127.0.0.1:8000/api/admin/category/';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: url,
        type: 'POST',
        data: $('#insertCategory').serialize(),
        contentType: 'application/x-www-form-urlencoded',
        dataType: 'JSON',
        success: function(data) {
            console.log(data);
            if (typeof data.error !== 'undefined') {
                $('#return').html('<h4 style="color:red;">Lỗi Vui Lòng Chọn Trạng Thái</h4>');
            } else {

                console.log(data.dataProductsNew);
                $('#exampleModalCenter').modal('hide');
                $('#ketqua').html('<h4 style="color:green;">Thêm Thành Công</h4>');

            }
        },
        error: function(data) {

        }


    }).done(function() {
        loadDataAfterInsert();
    });
});