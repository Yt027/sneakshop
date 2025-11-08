<?php
require_once __DIR__ . "/../configs/database.php";

class Users {
    private $conn;

    public function __construct() {
        $db = new Database();
        $connection = $db->connect();

        $this->conn = $connection;
    }

    public function getAllUsers() {
        $query = "SELECT * FROM users";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    private function getUserById($id) {
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    private function getUserByEmail($email) {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function addUser($first_name, $last_name, $email, $password, $cart)
    {
        // Return -1 if another user exist with the same email address
        if($this->getUserByEmail($email)) {
            return -1;
        }

        $query = "INSERT INTO users (first_name, last_name, email, password, cart) VALUES (:first_name, :last_name, :email, :password, :cart)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT));
        $stmt->bindParam(':cart', $cart);

        if ($stmt->execute()) {
            return $this->conn->lastInsertId();
        }
        return false;
    }

    public function checkUser($email, $password) {
        $user = $this->getUserByEmail($email);
        if($user && password_verify($password, $user["password"])) {
            unset($user["id"]);
            unset($user["privilege"]);
            unset($user["password"]);
            unset($user["cart"]);
            return $user;
        }
        return false;
    }
}