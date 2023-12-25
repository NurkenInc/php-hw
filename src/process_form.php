<?php
require_once 'pdoconfig.php';

try {
   $conn = new PDO($dsn, $username, $password, $options);

   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   $sql = "INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)";
   $stmt = $conn->prepare($sql);
   $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);

   echo "Message sent successfully";
} catch (\PDOException $e) {
   throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
