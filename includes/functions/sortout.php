<?php
/************
 * TRIS
 ***********/

function priceAsc(string $col, string $table){
    $con = getDataBaseConnexion();
    $request = "SELECT $col FROM $table ORDER BY price ASC";
    $stmt = $con->query($request);
    return $stmt->fetch();
}

 function priceDesc(string $col, string $table){
    $con = getDataBaseConnexion();
    $request = "SELECT $col FROM $table ORDER BY price DESC";
    $stmt = $con->query($request);
    return $stmt->fetch();
}

function nameAsc(string $table){
    $con = getDataBaseConnexion();
    $request = "SELECT name FROM $table ORDER BY name ASC"; 
    $stmt = $con->query($request);
    return $stmt->fetch();
}

function nameDesc(string $table){
    $con = getDataBaseConnexion();
    $request = "SELECT name FROM $table ORDER BY name DESC"; 
    $stmt = $con->query($request);
    return $stmt->fetch();
}

function recentAsc(string $table){
    $con = getDataBaseConnexion();
    $request = "SELECT dateAdd FROM $table ORDER BY dateAdd ASC"; 
    $stmt = $con->query($request);
    return $stmt->fetch();
}

function recentDesc(string $table){
    $con = getDataBaseConnexion();
    $request = "SELECT dateAdd FROM $table ORDER BY dateAdd DESC"; 
    $stmt = $con->query($request);
    return $stmt->fetch();
}

function stockAsc(){}

function stockDesc(){}

function quantityAsc(string $table){
    $con = getDataBaseConnexion();
    $request = "SELECT quantity FROM $table ORDER BY quantity ASC"; 
    $stmt = $con->query($request);
    return $stmt->fetch();
}

function quantityDesc(string $table){
    $con = getDataBaseConnexion();
    $request = "SELECT quantity FROM $table ORDER BY quantity ASC"; 
    $stmt = $con->query($request);
    return $stmt->fetch();
}



// fonction nombre de modèle créer avec cette pièce


/************
 * FILTRES
 ***********/

function priceLimit($firstPrice, $secondPrice){}

function commentIsRead(){}

function wichCategorie($categorie){}