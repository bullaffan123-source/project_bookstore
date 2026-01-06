<?php
require_once "../core/database.php";
require_once "../models/Book.php";

class BookController {
    public function index() {
        $database = new Database();
        $conn = $database->connect();

        $bookModel = new Book($conn);
        return $bookModel->getAllBooks();
    }
}
