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

function addbill() {
    var xmlhttp;
    var x = document.getElementById("address").value;
    var y = document.getElementById("payment").value;
    var z = document.getElementById("sum").value;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            alert(xmlhttp.responseText);
            window.location.href = "User-cart.php";
        }
    }
    xmlhttp.open("GET", "addbill.php?address=" + x + "&payment=" + y + "&sum=" + z, true);
    xmlhttp.send();
}