<?php
require_once __DIR__ . "/../configs/database.php";

class Temp
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $connection = $db->connect();

        $this->conn = $connection;
    }

    public function addTemp($content, $duration)
    {
        $now = time();
        $deletion = $now + intval($duration);
        
        $query = "INSERT INTO temps (content, registration, deletion) VALUES (:content, :registration, :deletion)";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':registration', $now);
        $stmt->bindParam(':deletion', $deletion);
        
        var_dump($deletion);
        if ($stmt->execute()) {
            return $this->conn->lastInsertId();
        }
        return false;
    }
}
