<?php
$id = $_GET['id'];
$components = [];
if (isset($_POST['number'])) {
    $value = $_POST['number'];
    $quantity = readComponent($id)->getQuantity();
    if ($quantity + $value < 0) {
        header('location: index.php?page=listComponents&invalid=1');
    } else {

        putStock($value, $id);

        header('location: index.php?page=listComponents');
    }
}
