<?php
class Book {
    private $db;

    public function __construct($conn) {
        $this->db = $conn;
    }

    public function getAllBooks() {
        $stmt = $this->db->query("SELECT * FROM books");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

