<?php
include "../config/Database.php";

$keyword = $_GET['q'];

$sql = "SELECT * FROM books WHERE title LIKE '%$keyword%'";
$result = mysqli_query($conn, $sql);

$books = [];

while ($row = mysqli_fetch_assoc($result)) {
    $books[] = $row;
}

echo json_encode($books);
