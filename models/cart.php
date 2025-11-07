<?php
require_once __DIR__ . "/../configs/database.php";
class Cart {
    private $conn;
    public $email;
    public $cart;

    public function __construct($email)
    {
        // Initialise database
        $db = new Database();
        $this->conn = $db->connect();

        // Load database cart
        $this->email = $email;
        $this->cart = $this->getCart($this->email);
        $this->cart = json_decode($this->cart, true) ?? [];
    }

    public function getCart() {
        $query = "SELECT cart from users WHERE email = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(array($this->email));

        return $stmt->fetch()["cart"];
    }

    public function setCart($cart) {
        $cartJson = json_encode($cart);
        $query = "UPDATE users SET cart = ? WHERE email = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(array($cartJson, $this->email));

        $this->cart = $cart;
    }

    public function add() {
        echo "";
    }
}