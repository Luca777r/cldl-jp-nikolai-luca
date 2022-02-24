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
    $isLaptop = test_input($_POST["IsLaptop"]);
    $graphiccard = test_input($_POST["GraphicCard"]);
    $monitor = isset($_POST["Monitor"]) ? $_POST["Monitor"] : [];
    $motherboard = test_input($_POST["Motherboard"]);
    $processor = test_input($_POST["Processor"]);
    $ram = isset($_POST["Ram"]) ? $_POST["Ram"] : [];
    $keyboard = test_input($_POST["Keyboard"]);
    $mouse = test_input($_POST["Mouse"]);
    $storageSystem = isset($_POST["StorageSystem"]) ? $_POST["StorageSystem"] : [];
    $powerSupply = test_input($_POST["PowerSupply"]);

    $errorCount = 0;


    if (empty($name)) {
        $nameErr = "Le nom est nécessaire";
        $errorCount++;
    } else {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($isLaptop)) {
        $isLaptopErr = "Le type est nécessaire";
        $errorCount++;
    }

    if (empty($graphiccard)) {
        $graphiccardErr = "Choisssez une carte graphique";
        $errorCount++;
    }

    if (empty($monitor)) {
        $monitorErr = "Choisissez un écran";
        $errorCount++;
    }

    if (empty($motherboard)) {
        $motherboardErr = "Choisissez une carte mère";
        $errorCount++;
    }
    if (empty($processor)) {
        $processorErr = "Choisissez un processeur";
        $errorCount++;
    }
    if (empty($ram)) {
        $ramErr = "Choisissez une ram";
        $errorCount++;
    }
    if (empty($keyboard)) {
        $keyboardErr = "Choisissez un clavier";
        $errorCount++;
    }
    if (empty($mouse)) {
        $mouseErr = "Choisissez une souris";
        $errorCount++;
    }
    if (empty($storageSystem)) {
        $storageSystemErr = "Choisissez un disque dur";
        $errorCount++;
    }
    if (empty($powerSupply)) {
        $powerSupplyErr = "Choisissez une alimentation";
        $errorCount++;
    }

    if ($errorCount == 0) {
        $date = new DateTime();
        $id = createComputer($name, 0, $isLaptop, $date->format('Y-m-d'), 1);
        createAssembler($id, $isLaptop);
        createAssembler($id, $graphiccard);
        foreach ($monitor as $idMonitor) {
            createAssembler($id, $idMonitor);
        }
        createAssembler($id, $motherboard);
        createAssembler($id, $processor);
        foreach ($ram as $idRam) {
            createAssembler($id, $idRam);
        }
        createAssembler($id, $keyboard);
        createAssembler($id, $mouse);
        foreach ($storageSystem as $idStorageSystem) {
            createAssembler($id, $idStorageSystem);
        }
        createAssembler($id, $powerSupply);
    }
    header('location: index.php?page=designer');
}
