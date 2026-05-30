<?php
require "db.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    // 🔐 BEZPIECZNY RESET SESJI
    session_unset();                 // usuń stare dane sesji
    session_regenerate_id(true);     // nowy identyfikator sesji

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $stmt = $conn->prepare(
        "SELECT id FROM users WHERE username=? AND password=?"
    );
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->bind_result($user_id);

    if ($stmt->fetch()) {

        // ✅ NOWA SESJA DLA NOWEGO UŻYTKOWNIKA
        $_SESSION['user'] = $username;
        $_SESSION['user_id'] = (int)$user_id;

        header("Location: index.php");
        exit;

    } else {
        header("Location: login.php?error=1");
        exit;
    }
}
