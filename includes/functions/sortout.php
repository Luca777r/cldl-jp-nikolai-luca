<?php
/************
 * TRIS
 ***********/

 function orderBy(string $col, string $table, string $order): array {
    $con = getDataBaseConnexion();
    $request = "SELECT * FROM '$table' ORDER BY '$col' '$order'";
    $stmt = $con->query($request);
    return $stmt->fetchAll();
}

function stockAsc(){}

function stockDesc(){}
/************
 * FILTRES
 ***********/

function priceLimit($firstPrice, $secondPrice){}

function commentIsRead(){}

function wichCategorie($categorie){}