function vali() {
    $("#profile").validate({
        rules: {
            "name": {
                required: true,
            },
            "phone": {
                required: true,
            },
            "address": {
                required: true,
            },
        },
        messages: {
            "name": {
                required: "Vui lòng nhập tên!",
            },
            "phone": {
                required: "Vui lòng nhập số điện thoại!",
            },
            "address": {
                required: "Vui lòng nhập địa chỉ!",
            },
        }
    });
}