<?php
include_once 'includes/header.php';

$page = 'login';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

if (isset($_POST['submit'])){
    $isLaptop = $_POST['isLaptop'];
    $quantity = $_POST['quantity'];
    $dateadd = $_POST['dateadd'];
    $name = $_POST['name'];

    createComputer($isLaptop, $quantity, $dateAdd, $name);
    header('location: index.php');
}

include_once 'pages/' . $page . '.php';
//include 'fixtures.php';

include_once 'includes/footer.php';
