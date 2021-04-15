$(document).ready(function() {
    $("#re-pass").validate({
        rules: {
            "old-pass": {
                required: true,
            },
            "new-pass": {
                required: true,
            },
            "con-pass": {
                required: true,
                equalTo: "#new-pass"
            },
        },
        messages: {
            "old-pass": {
                required: "Vui lòng nhập mật khẩu!",
            },
            "new-pass": {
                required: "Vui lòng nhập mật khẩu!",
            },
            "con-pass": {
                required: "Vui lòng nhập mật khẩu!",
                equalTo: "Mật khẩu chưa đúng!"
            },
        }
    });
});