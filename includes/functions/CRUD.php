<?php

function getDataBaseConnexion()
{
    try {
        $user = "root";
        $pass = "root";
        $pdo = new PDO('mysql:dbname=cldl;port=8889;host=127.0.0.1', $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br>";
        die();
    }
}

function getAllComputers()
{
    $con = getDataBaseConnexion();
    $request = 'SELECT * FROM Computer';
    $stmt = $con->query($request);
    $rows = $stmt->fetchAll(PDO::FETCH_CLASS, Computer::class);
    return $rows;
}

function readComputer($id)
{
    $con = getDataBaseConnexion();
    $request = "SELECT * FROM Computer where id = $id";
    $stmt = $con->query($request);
    $stmt->setFetchMode(PDO::FETCH_CLASS, Computer::class);
    return $stmt->fetch();
}

function createComputer($name, $quantity, $isLaptop, $dateAdd)
{
    try {
        $con = getDataBaseConnexion();
        $sql = "INSERT INTO Computer (name, quantity, isLaptop, dateAdd) VALUES ($name, $quantity, $isLaptop, $dateAdd)";
        $con->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function updateComputer($id, $name, $quantity, $isLaptop, $dateAdd)
{
    try {
        $con = getDataBaseConnexion();
        $sql = "UPDATE Computer set name = '$name', quantity = $quantity, isLaptop = $isLaptop, dateAdd = '$dateAdd' WHERE id = $id ";
        $con->exec($sql);
        header('location: ?page=designer');
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function deleteComputer($id)
{
    try {
        $con = getDataBaseConnexion();
        $id = $_GET['del'];
        $sql = "DELETE FROM Computer WHERE id = '$id' ";
        $stmt = $con->query($sql);
        header('location: ?page=designer');
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function getAllComponents()
{
    $connection = getDataBaseConnexion();
    $sql = 'SELECT * FROM Component';
    $query = $connection->query($sql);
    $result = $query->fetchAll(PDO::FETCH_CLASS, Component::class);
    return $result;
}

function deleteComponent($id)
{
    try {
        $connection = getDataBaseConnexion();

        $statement = $connection->query("SELECT * FROM Component WHERE id = $id");
        $statement->setFetchMode(PDO::FETCH_CLASS, Component::class);

        $component = $statement->fetch();
        $categorie = $component->getCategorie();

        $sql2 = "DELETE FROM $categorie WHERE id = $id ";
        $sql = "DELETE FROM Component WHERE id = $id ";
        $query2 = $connection->exec($sql2);
        $query = $connection->exec($sql);
        header('location: ?page=listComponents');
    } catch (PDOException $e) {
        echo $e . "<br>" . $e->getMessage();
    }
}
