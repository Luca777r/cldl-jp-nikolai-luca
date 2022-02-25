<?php

function orderBy($field, $direction = 'ASC')
{
    $connection = getDataBaseConnexion();
    $sql = "SELECT * FROM Component ORDER BY $field $direction";
    $query = $connection->query($sql);
    $result = $query->fetchAll(PDO::FETCH_CLASS, Component::class);
    return $result;
}