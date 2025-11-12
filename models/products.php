<?php
require_once __DIR__ . "/../configs/database.php";

class Products {
    private $conn;

    public function __construct() {
        $db = new Database();
        $connection = $db->connect();

        $this->conn = $connection;
    }

    public function getAllProducts() {
        $query = "SELECT * FROM products";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getVisibleProducts() {
        $query = "SELECT * FROM products WHERE visible = 1";
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

    public function addProduct($name, $category, $price, $stock, $description, $large_desc, $caracteristics)
    {
        $query = "INSERT INTO products (name, category, price, stock, description, large_description, caracteristics, notation) VALUES (:name, :category, :price, :stock, :description, :large_desc, :caracteristics, 1)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':stock', $stock);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':large_desc', $large_desc);
        $stmt->bindParam(':caracteristics', $caracteristics);

        if ($stmt->execute()) {
            return $this->conn->lastInsertId();
        }
        return false;
    }

    public function editProduct($key, $name, $category, $price, $stock, $description, $large_desc, $caracteristics)
    {
        $query = "UPDATE products SET name = :name, category = :category, price = :price, stock = :stock, description = :description, large_description = :large_desc, caracteristics = :caracteristics, notation = 1 WHERE id = :key";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':key', $key);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':stock', $stock);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':large_desc', $large_desc);
        $stmt->bindParam(':caracteristics', $caracteristics);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function getVisibility($id) {
        $query = "SELECT visible FROM products WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $state = $stmt->fetch()["visible"];
        return $state;
    }

    public function toggleVisibility($id) {
        $visibility = $this->getVisibility($id);
        $nextVisibility = abs(intval($visibility) - 1);
        try {
            $query = "UPDATE products SET visible = :visibility WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':visibility', $nextVisibility);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $nextVisibility;
        } catch (\Throwable $th) {
            return false;
        }
    }
}