<?php

function checkComponentIsUsed($id)
{
    $connection = getDataBaseConnexion();
    $sql = "SELECT COUNT(idComputer) as nb FROM Assembler WHERE idComponent = ".$id;
    $query = $connection->query($sql);
    $counts = $query->fetchAll(PDO::FETCH_COLUMN, 'nb');
    foreach ($counts as $nb) {
        if ($nb > 0) {
            $sql = "UPDATE Component SET isUsed = 1 WHERE id = $id";
        } else {
            $sql = "UPDATE Component SET isUsed = 0 WHERE id = $id";
        }
        $connection->exec($sql);
    }
}