$(document).ready(function() {
    $(".form-add").validate({

        rules: {
            "name-add": {
                required: true,
            },
            "phone-add": {
                required: true,
            },
            "adress-add": {
                required: true,
            }
        },
        messages: {
            "name-add": {
                required: 'Vui lòng nhập tên',
            },
            "phone-add": {
                required: 'Vui lòng nhập số điện thoại',
            },
            "adress-add": {
                required: 'Vui lòng địa chỉ'
            }
        }
    });
});