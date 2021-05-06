function cancel() {
    window.location.href = "Admin-items.php";
}

function add() {
    document.getElementById("big-box").style.display = 'none';
    document.getElementById('add-box').style.display = 'block';
}

$(document).ready(function() {
    $("#add1-box").validate({
        rules: {
            "idadd": {
                required: true,
            },
            "noteadd": {
                required: true,
            },
            "priceadd": {
                required: true,
            },
            "nameadd": {
                required: true,
            },
            "avtadd": {
                required: true,
            },
        },
        messages: {
            "idadd": {
                required: 'Nhập vào ID!',
            },
            "noteadd": {
                required: 'Nhập vào mô tả!',
            },
            "priceadd": {
                required: 'Nhập vào giá!',
            },
            "nameadd": {
                required: 'Nhập vào tên!',
            },
            "avtadd": {
                required: 'Nhập vào avatar!',
            },
        }
    });
});