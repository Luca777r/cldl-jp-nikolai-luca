<?php
/************
 * TRIS
 ***********/

 function orderByComputer(string $col, string $table, string $order): array {
    $con = getDataBaseConnexion();
    $request = "SELECT * FROM $table ORDER BY $col $order";
    $stmt = $con->query($request);
    return $stmt->fetchAll(PDO::FETCH_CLASS, Computer::class);
}

function orderByComponent(string $col, string $table, string $order): array {
    $con = getDataBaseConnexion();
    $request = "SELECT * FROM $table ORDER BY $col $order";
    $stmt = $con->query($request);
    return $stmt->fetchAll(PDO::FETCH_CLASS, Component::class);
}

function stockAsc(){}

function stockDesc(){}
/************
 * FILTRES
 ***********/

function priceLimit($firstPrice, $secondPrice){}

function commentIsRead(){}

function wichCategorie($categorie){}