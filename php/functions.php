<?php 

function connectDatabase() {
    $servername = 'localhost';
$database = 'database';
$username = 'website';
$password = '';
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}

function getAll($conn) {
    $query = $conn->prepare("SELECT * FROM games");
    $query->execute();
    $result = $query->fetchall();
    return $result;
}


function getAllPlans($conn) {
    $query = $conn->prepare("SELECT * FROM plans ORDER BY startTime ASC");
    $query->execute();
    $result = $query->fetchall();
    return $result;
}

function getFive($conn) {
    $query = $conn->prepare("SELECT * FROM games LIMIT 5");
    $query->execute();
    $result = $query->fetchall();
    return $result;
}

function getFivePlans($conn) {
    $query = $conn->prepare("SELECT * FROM plans ORDER BY startTime ASC LIMIT 5");
    $query->execute();
    $result = $query->fetchall();
    return $result;
}


function getID($conn) {
    $id = $_GET['id'];
    $query = $conn->prepare("SELECT * FROM games WHERE id=:id");
    $query->execute(['id' => $id]);
    $result = $query->fetchall();
    return $result;
}

function getPID($conn) {
    $id = $_GET['id'];
    $query = $conn->prepare("SELECT * FROM plans WHERE id=:id");
    $query->execute(['id' => $id]);
    $result = $query->fetchall();
    return $result;
}

function plansGetID($conn,$name) {
    $query = $conn->prepare("SELECT * FROM games WHERE name=:name");
    $query->execute(['name' => $name]);
    $result = $query->fetchall();
    return $result;
}

function removeGame($conn) {
    $id = $_GET['id'];

    $sql = "DELETE FROM games WHERE id=$id";

    $conn->exec($sql);
}

function removePlan($conn) {
    $id = $_GET['id'];

    $sql = "DELETE FROM plans WHERE id=$id";

    $conn->exec($sql);
}

?>