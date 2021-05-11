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