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

function changepass() {
    var xmlhttp;
    var x = document.getElementById("old-pass").value
    var y = document.getElementById("new-pass").value
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            alert(xmlhttp.responseText);
        }
    }
    xmlhttp.open("POST", "changepass.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // xmlhttp.send();
    xmlhttp.send("oldpass=" + x + "&newpass=" + y);
}