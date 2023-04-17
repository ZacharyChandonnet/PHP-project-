<?php

session_start();

$host = 'localhost';
$dbname = 'userregistration';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$name = $_POST['user'];
$password = $_POST['password'];

// Use prepared statements to prevent SQL injection
$stmt = $pdo->prepare("SELECT * FROM usertable WHERE name = :name AND password = :password");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':password', $password);
$stmt->execute();
$num = $stmt->rowCount();

if ($num == 1) {
    $_SESSION['username'] = $name;
    header('location:index.php');
} else {
    header('location:login.php');
}
 

?>