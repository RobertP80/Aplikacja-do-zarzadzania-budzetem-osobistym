<?php
require "db.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$id = (int)($_GET['id'] ?? 0);

// pobierz tylko operację użytkownika
$stmt = $conn->prepare(
    "SELECT * FROM transactions WHERE id=? AND user_id=?"
);
$stmt->bind_param("ii", $id, $user_id);
$stmt->execute();
$result = $stmt->get_result();
$transaction = $result->fetch_assoc();

if (!$transaction) {
    header("Location: index.php");
    exit;
}

// zapis edycji
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $type = $_POST['type'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $amount = $_POST['amount'];

    $stmt = $conn->prepare(
        "UPDATE transactions
         SET type=?, category=?, description=?, amount=?
         WHERE id=? AND user_id=?"
    );
    $stmt->bind_param(
        "sssdii",   // 🔥 POPRAWIONE
        $type, $category, $description, $amount, $id, $user_id
    );
    $stmt->execute();

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edycja operacji</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container py-4">
<div class="card p-3 mx-auto" style="max-width:500px">
<h4 class="mb-3">Edytuj operację</h4>

<form method="post">
    <select name="type" class="form-select mb-2">
        <option value="income" <?= $transaction['type']=='income'?'selected':'' ?>>Przychód</option>
        <option value="expense" <?= $transaction['type']=='expense'?'selected':'' ?>>Wydatek</option>
    </select>

    <input name="category" class="form-control mb-2"
           value="<?= htmlspecialchars($transaction['category']) ?>" required>

    <textarea name="description" class="form-control mb-2"><?= htmlspecialchars($transaction['description']) ?></textarea>

    <input type="number" step="0.01" name="amount"
           class="form-control mb-3"
           value="<?= $transaction['amount'] ?>" required>

    <button class="btn btn-primary w-100">Zapisz zmiany</button>
    <a href="index.php" class="btn btn-secondary w-100 mt-2">Anuluj</a>
</form>

</div>
</div>
</body>
</html>
