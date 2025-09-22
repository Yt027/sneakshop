<?php
require_once __DIR__ . "/../configs/database.php";
$db = new Database();
$connection = $db->connect();

class Products {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllProducts() {
        $query = "SELECT * FROM products";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getProductById($id) {
        $query = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function searchProducts($name) {
        $query = "SELECT * FROM products WHERE name LIKE :name";
        $stmt = $this->conn->prepare($query);
        $searchTerm = "%$name%";
        $stmt->bindParam(':name', $searchTerm);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function addProduct($name, $category, $price, $description, $large_desc, $caracteristics)
    {
        $query = "INSERT INTO products (name, category, price, description, large_description, caracteristics) VALUES (:name, :category, :price, :description, :large_desc, :caracteristics)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':large_desc', $large_desc);
        $stmt->bindParam(':caracteristics', $caracteristics);

        if ($stmt->execute()) {
            return $this->conn->lastInsertId();
        }
        return false;
    }
}