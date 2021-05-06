<?php
require_once ('config2.php');

function execute($sql) {
    $con = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    $con->set_charset("utf8");
    $con->query($sql);
    $con->close();
}

function executeResult($sql) {
    $con = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    $con->set_charset("utf8");
    $result = $con->query($sql);
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $con->close();
    return $data;
}

function executeSingle($sql) {
    $con = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    $con->set_charset("utf8");
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $con->close();
    return $row;
}
