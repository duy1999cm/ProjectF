var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");
var a = document.getElementById("btn-log");
var b = document.getElementById("btn-reg");

function register() {
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
    b.style.color = "#FF00FF";
    a.style.color = "#0000CD";
}

function login() {
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
    a.style.color = "#FF00FF";
    b.style.color = "#0000CD";
}

$(document).ready(function() {
    $("#login").validate({
        rules: {
            "username": {
                required: true,
            },
            "password": {
                required: true,
            },
        },
        messages: {
            "username": {
                required: "Nhập vào tài khoản ",
            },
            "password": {
                required: "Vui lòng nhập mật khẩu"
            }
        }
    });
    $("#register").validate({
        rules: {
            "username": {
                required: true,
            },
            "email": {
                required: true,
                email: true,
            },
            "password": {
                required: true,
            },
        },
        messages: {
            "username": {
                required: "Nhập vào tài khoản ",
            },
            "email": {
                required: "Nhập vào email",
                email: "",
            },
            "password": {
                required: "Vui lòng nhập mật khẩu"
            }
        }
    });
});