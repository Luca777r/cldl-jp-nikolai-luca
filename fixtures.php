<?php

include './includes/variables/variables.php';
include './includes/variables/fixtures.php';
include './includes/variables/bd.php';

$connection->exec("SET FOREIGN_KEY_CHECKS=0;TRUNCATE Component;SET FOREIGN_KEY_CHECKS=1;");
$connection->exec("SET FOREIGN_KEY_CHECKS=0;TRUNCATE GraphicCard;SET FOREIGN_KEY_CHECKS=1;");
$connection->exec("SET FOREIGN_KEY_CHECKS=0;TRUNCATE GraphicCard;SET FOREIGN_KEY_CHECKS=1;");
$connection->exec("SET FOREIGN_KEY_CHECKS=0;TRUNCATE Keyboard;SET FOREIGN_KEY_CHECKS=1;");
$connection->exec("SET FOREIGN_KEY_CHECKS=0;TRUNCATE Monitor;SET FOREIGN_KEY_CHECKS=1;");
$connection->exec("SET FOREIGN_KEY_CHECKS=0;TRUNCATE Motherboard;SET FOREIGN_KEY_CHECKS=1;");
$connection->exec("SET FOREIGN_KEY_CHECKS=0;TRUNCATE Mouse;SET FOREIGN_KEY_CHECKS=1;");
$connection->exec("SET FOREIGN_KEY_CHECKS=0;TRUNCATE PowerSupply;SET FOREIGN_KEY_CHECKS=1;");
$connection->exec("SET FOREIGN_KEY_CHECKS=0;TRUNCATE Processor;SET FOREIGN_KEY_CHECKS=1;");
$connection->exec("SET FOREIGN_KEY_CHECKS=0;TRUNCATE Ram;SET FOREIGN_KEY_CHECKS=1;");
$connection->exec("SET FOREIGN_KEY_CHECKS=0;TRUNCATE StorageSystem;SET FOREIGN_KEY_CHECKS=1;");

$sql = "INSERT INTO Component (categorie, model, brand, price, quantity, numberCreated, dateAdd, isPeripheral) VALUES (:categorie, :model, :brand, :price, :quantity, :numberCreated, :dateAdd, :isPeripheral)";

$pdoStatement = $connection->prepare($sql);

foreach ($components as $component) {
    $pdoStatement->bindParam(':categorie', $component['categorie']);
    $pdoStatement->bindParam(':model', $component['model']);
    $pdoStatement->bindParam(':brand', $component['brand']);
    $pdoStatement->bindParam(':price', $component['price']);
    $pdoStatement->bindParam(':quantity', $component['quantity']);
    $pdoStatement->bindParam(':numberCreated', $component['numberCreated']);
    $pdoStatement->bindParam(':dateAdd', $component['dateAdd']);
    $pdoStatement->bindParam(':isPeripheral', $component['isPeripheral']);

    $count = $pdoStatement->execute();

    $subData = $component['subData'];
    $id = $connection->lastInsertId();

    switch ($component['categorie']) {
        case 'GraphicCard':
            $subStatement = $connection->prepare('INSERT INTO GraphicCard VALUES (:id, :chipset, :memory)');
            $subStatement->execute([
                ':id' => $id,
                ':chipset' => $subData['chipset'],
                ':memory' => $subData['memory']
            ]);
            break;
        case 'Keyboard':
            $subStatement = $connection->prepare('INSERT INTO Keyboard VALUES (:id, :isWired, :hasNumKeypad, :keypadType)');
            $subStatement->execute([
                ':id' => $id,
                'isWired' => $subData['isWired'],
                'hasNumKeypad' => $subData['hasNumKeypad'],
                'keypadType' => $subData['keypadType'],
            ]);
            break;
        case 'Monitor':
            $subStatement = $connection->prepare('INSERT INTO Monitor VALUES (:id, :diagonalSize)');
            $subStatement->execute([
                ':id' => $id,
                'diagonalSize' => $subData['diagonalSize']
            ]);
            break;
        case 'Motherboard':
            $subStatement = $connection->prepare('INSERT INTO Motherboard VALUES (:id, :socket, :format)');
            $subStatement->execute([
                ':id' => $id,
                ':socket' => $subData['socket'],
                ':format' => $subData['format']
            ]);
            break;
        case 'Mouse':
            $subStatement = $connection->prepare('INSERT INTO Mouse VALUES (:id, :isPad, :isWired, :numKey)');
            $subStatement->execute([
                ':id' => $id,
                ':isPad' => $subData['isPad'],
                ':isWired' => $subData['isWired'],
                ':numKey' => $subData['numKey']
            ]);
            break;
        case 'PowerSupply':
            $subStatement = $connection->prepare('INSERT INTO PowerSupply VALUES (:id, :powerSupply)');
            $subStatement->execute([
                ':id' => $id,
                ':powerSupply' => $subData['powerSupply']
            ]);
            break;
        case 'Processor':
            $subStatement = $connection->prepare('INSERT INTO Processor VALUES (:id, :frequences, :nbCore, :chipset)');
            $subStatement->execute([
                ':id' => $id,
                ':frequences' => $subData['frequences'],
                ':nbCore' => $subData['nbCore'],
                ':chipset' => $subData['chipset']
            ]);
            break;
        case 'Ram':
            $subStatement = $connection->prepare('INSERT INTO Ram VALUES (:id, :memory, :nbStrip, :typeFrequences)');
            $subStatement->execute([
                ':id' => $id,
                ':memory' => $subData['memory'],
                ':nbStrip' => $subData['nbStrip'],
                ':typeFrequences' => $subData['typeFrequences']
            ]);
            break;
        case 'StorageSystem':
            $subStatement = $connection->prepare('INSERT INTO StorageSystem VALUES (:id, :isSsd, :memory)');
            $subStatement->execute([
                ':id' => $id,
                ':isSsd' => $subData['isSsd'],
                ':memory' => $subData['memory']
            ]);
            break;
    }
    //    var_dump($count);
}

$connection->exec("SET FOREIGN_KEY_CHECKS=0;TRUNCATE GlobalUser;SET FOREIGN_KEY_CHECKS=1;");
$connection->exec("SET FOREIGN_KEY_CHECKS=0;TRUNCATE Concepteur;SET FOREIGN_KEY_CHECKS=1;");
$connection->exec("SET FOREIGN_KEY_CHECKS=0;TRUNCATE Monteur;SET FOREIGN_KEY_CHECKS=1;");

$sql = "INSERT INTO GlobalUser (email, password) VALUES (:email, :password)";

$pdoStatement = $connection->prepare($sql);

foreach ($users as $user) {
    $pdoStatement->bindParam(':email', $user['id']);
    $pdoStatement->bindParam(':password', $user['password']);

    $count = $pdoStatement->execute();
    $id = $connection->lastInsertId();

    switch ($user['type']) {
        case 'Monteur':
            $subStatement = $connection->prepare('INSERT INTO Monteur VALUES (:id)');
            $subStatement->execute([
                ':id' => $id,
            ]);
            break;
        case 'Concepteur':
            $subStatement = $connection->prepare('INSERT INTO Concepteur VALUES (:id)');
            $subStatement->execute([
                ':id' => $id,
            ]);
            break;
    }
}
