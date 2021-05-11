function change(sl, id) {
    var xmlhttp;
    var id = id;
    var num = 0;
    num = num + sl;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // alert(xmlhttp.responseText);
            window.location.href = "User-cart.php";
        }
    }
    xmlhttp.open("GET", "update.php?id=" + id + "&num=" + num, true);
    xmlhttp.send();
}
function con(){
    alert("Thanh toán thành công!");
}