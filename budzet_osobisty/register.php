<?php
require "db.php";

$message = "";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = trim($_POST['username']);
    $password = md5($_POST['password']);

    if ($username && $_POST['password']) {
        $stmt = $conn->prepare(
            "INSERT INTO users (username, password) VALUES (?, ?)"
        );
        if ($stmt->bind_param("ss", $username, $password) && $stmt->execute()) {
            $message = "✅ Użytkownik dodany poprawnie";
        } else {
            $message = "❌ Taki użytkownik już istnieje";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rejestracja</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container vh-100 d-flex align-items-center justify-content-center">

<form method="post" class="card p-4 w-100" style="max-width:400px">
    <h4 class="text-center mb-3">Dodaj użytkownika</h4>

    <?php if ($message): ?>
        <div class="alert alert-info"><?= $message ?></div>
    <?php endif; ?>

    <input
        type="text"
        name="username"
        class="form-control mb-2"
        placeholder="Login"
        required
    >

    <input
        type="password"
        name="password"
        class="form-control mb-3"
        placeholder="Hasło"
        required
    >

    <button class="btn btn-success w-100">Dodaj użytkownika</button>

    <a href="login.php" class="btn btn-link w-100 mt-2">
        Powrót do logowania
    </a>
</form>

</div>
</body>
</html>
