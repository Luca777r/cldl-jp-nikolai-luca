<?php


$id = 26;

function pray($id){
    $results = updateForm($id);
$components = [];
$components = array_map(function($result){
        return $result['idComponent'];
    }, $results);

    var_dump($components);
}

