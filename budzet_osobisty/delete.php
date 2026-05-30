<?php
require "db.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$id = (int)($_GET['id'] ?? 0);

// usuwamy TYLKO jeśli rekord należy do użytkownika
$stmt = $conn->prepare(
    "DELETE FROM transactions WHERE id=? AND user_id=?"
);
$stmt->bind_param("ii", $id, $user_id);
$stmt->execute();

header("Location: index.php");
exit;
