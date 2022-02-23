<?php

$name = $islap = $graphiccard = $monitor = $motherboard = $processor = $ram = $keyboard = $mouse = $storageSystem = $powerSupply = "";
$nameErr = $isLaptopErr = $graphiccardErr = $monitorErr = $motherboardErr = $processorErr = $ramErr = $keyboardErr = $mouseErr = $storageSystemErr = $powerSupplyErr = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["Name"]);
    // $islap = test_input($_POST["IsLaptop"]);
    // $graphiccard = test_input($_POST["GraphicCard"]);
    // $monitor = test_input($_POST["Monitor"]);
    // $motherboard = test_input($_POST["Motherboard"]);
    // $processor = test_input($_POST["Processor"]);
    // $ram = test_input($_POST["Ram"]);
    // $keyboard = test_input($_POST["Keyboard"]);
    // $mouse = test_input($_POST["mouse"]);
    // $storageSystem = test_input($_POST["StorageSystem"]);
    // $powerSupply = test_input($_POST["PowerSupply"]);
    
    $errorCount = 0;
    

    if (empty($name)) {
        $nameErr = "Le nom est nécessaire";
        $errorCount++;
    } else {
        $name = test_input($_POST["Name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($isLaptop)) {
        $isLaptopErr = "Le type est nécessaire";
        $errorCount++;
    } 

    if (empty($grapiccard)) {
        $graphiccardErr = "Choisssez une carte graphique";
        $errorCount++;
    } else {
        $graphiccard = test_input($_POST["GraphicCard"]);
    }

    if (empty($monitor)) {
        $monitorErr = "Choisissez un écran";
        $errorCount++;
    } else {
        $monitor = test_input($_POST["Monitor"]);
    }

    if (empty($motherboard)) {
        $motherboardErr = "Choisissez une carte mère";
        $errorCount++;
    } else {
        $motherboard = test_input($_POST["Motherboard"]);
    }
    if (empty($processor)) {
        $processorErr = "Choisissez un processeur";
        $errorCount++;
    } else {
        $processor = test_input($_POST["Processor"]);
    }
    if (empty($ram)) {
        $ramErr = "Choisissez une ram";
        $errorCount++;
    } else {
        $ram = test_input($_POST["Ram"]);
    }
    if (empty($keyboard)) {
        $keyboardErr = "Choisissez un clavier";
        $errorCount++;
    } else {
        $keyboard = test_input($_POST["Keyboard"]);
    }
    if (empty($mouse)) {
        $mouseErr = "Choisissez une souris";
        $errorCount++;
    } else {
        $mouse = test_input($_POST["mouse"]);
    }
    if (empty($storageSystem)) {
        $storageSystemErr = "Choisissez un disque dur";
        $errorCount++;
    } else {
        $storageSystem = test_input($_POST["StorageSystem"]);
    }
    if (empty($powerSupply)) {
        $powerSupplyErr = "Choisissez une alimentation";
        $errorCount++;
    } else {
        $powerSupply = test_input($_POST["PowerSupply"]);
    }
}

