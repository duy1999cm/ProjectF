function del(id) {
    var id = id;
    var name = confirm("Bạn có đồng ý xóa?");
    if (name == true) {
        var xmlhttp;
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                // document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
                window.location.href = "Admin-cate.php";
            }
        }
        xmlhttp.open("GET", "delete.php?id=" + id, true);
        xmlhttp.send();
    }
}

function add() {
    $("#search-form").validate({
        rules: {
            "catename1": {
                required: true,
            }
        },
        messages: {
            "catename1": {
                required: "Vui lòng nhập tên!"
            }
        }
    })
}

function update() {
    $("#up-form").validate({
        rules: {
            "cateid": {
                required: true,
            },
            "catename2": {
                required: true,
            }
        },
        messages: {
            "cateid": {
                required: "Vui lòng nhập id!",
            },
            "catename2": {
                required: "Vui lòng nhập tên!"
            }
        }
    })
}