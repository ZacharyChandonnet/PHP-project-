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
$email  = $_POST['email'];

// Use prepared statements to prevent SQL injection
$stmt = $pdo->prepare("SELECT * FROM usertable WHERE name = :name");
$stmt->bindParam(':name', $name);
$stmt->execute();
$num = $stmt->rowCount();

if ($num == 1) {
    echo '<script>alert("Username already taken!");';
    echo 'setTimeout(function() { window.location.href = "register.php"; }, 1);</script>'; // Redirect after 2 seconds
    exit; // add exit after header to prevent further execution of the script
} else {
    $stmt = $pdo->prepare("INSERT INTO usertable (name, password, email) VALUES (:name, :password, :email)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    header('location:login.php');
    die;
}



?>
