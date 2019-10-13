<?php
var_dump($_POST);

$pdo = new PDO('sqlite:./db', '', '', [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
]);

$data = [
    'email' => $_POST['email'],
    'message' => $_POST['message']
];

$sql = "INSERT INTO contact (email, message) VALUES (:email, :message)";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);
