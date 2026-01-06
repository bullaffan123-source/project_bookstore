<?php
class Database {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO(
            "mysql:host=".DB_HOST.";dbname=".DB_NAME,
            DB_USER,
            DB_PASS
        );
    }

    public function query($sql, $data = []) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
        return $stmt;
    }
}
