<?php
include_once 'includes/header.php';

$page = 'login';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

include_once 'pages/' . $page . '.php';
//include 'fixtures.php';

include_once 'includes/footer.php';
