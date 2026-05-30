<?php
require "db.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

/* ======================
   ZAPIS DANYCH
====================== */
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $type = $_POST['type'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $amount = $_POST['amount'];

    $stmt = $conn->prepare(
        "INSERT INTO transactions (user_id, type, category, description, amount)
         VALUES (?, ?, ?, ?, ?)"
    );
    $stmt->bind_param("isssd", $user_id, $type, $category, $description, $amount);
    $stmt->execute();
}

/* ======================
   PODSUMOWANIA
====================== */
$stmt = $conn->prepare(
    "SELECT SUM(amount) FROM transactions WHERE type='income' AND user_id=?"
);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($income);
$stmt->fetch();
$stmt->close();

$stmt = $conn->prepare(
    "SELECT SUM(amount) FROM transactions WHERE type='expense' AND user_id=?"
);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($expense);
$stmt->fetch();
$stmt->close();

$income = $income ?? 0;
$expense = $expense ?? 0;

/* ======================
   LISTA OPERACJI
====================== */
$stmt = $conn->prepare(
    "SELECT * FROM transactions
     WHERE user_id=?
     ORDER BY created_at DESC"
);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$list = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Budżet osobisty</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<link rel="manifest" href="/manifest.json">
<link rel="icon" href="/icons/favicon.ico">
<meta name="theme-color" content="#0d6efd">

<style>
.table .row-income td {
    background-color: #eafaf1 !important;
}
.table .row-expense td {
    background-color: #fdecea !important;
}
.table tbody tr:hover td {
    filter: brightness(0.97);
}
</style>
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand">Budżet osobisty</span>
        <a href="logout.php" class="btn btn-light btn-sm">Wyloguj</a>
    </div>
</nav>

<div class="container py-3">

<div class="row g-3">
    <!-- FORMULARZ -->
    <div class="col-12 col-md-4">
        <form method="post" class="card p-3">
            <h5>Dodaj operację</h5>

            <select name="type" class="form-select mb-2">
                <option value="income">Przychód</option>
                <option value="expense">Wydatek</option>
            </select>

            <input type="text" name="category" class="form-control mb-2"
                   placeholder="Tytuł / kategoria" required>

            <textarea name="description" class="form-control mb-2"
                      placeholder="Opis (opcjonalnie)"></textarea>

            <input type="number" step="0.01" name="amount"
                   class="form-control mb-2" placeholder="Kwota" required>

            <button class="btn btn-primary w-100">Dodaj</button>
        </form>
    </div>

    <!-- PODSUMOWANIE -->
    <div class="col-12 col-md-8">
        <div class="row">
            <div class="col-6">
                <div class="card bg-success text-white p-3">
                    Przychody<br><b><?= number_format($income, 2) ?> zł</b>
                </div>
            </div>
            <div class="col-6">
                <div class="card bg-danger text-white p-3">
                    Wydatki<br><b><?= number_format($expense, 2) ?> zł</b>
                </div>
            </div>
        </div>

        <div class="card mt-3 p-3 text-center">
            <canvas id="chart" style="max-width:300px;margin:auto;"></canvas>
        </div>
    </div>
</div>

<!-- HISTORIA -->
<div class="card mt-4">
    <div class="card-body">
        <h5>Historia operacji</h5>

        <div class="table-responsive">
            <table class="table table-sm align-middle">
                <thead>
                    <tr>
                        <th>Typ</th>
                        <th>Tytuł</th>
                        <th>Opis</th>
                        <th>Kwota</th>
                        <th>Data</th>
                        <th>Akcje</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = $list->fetch_assoc()): ?>
                <tr class="<?= $row['type']==='income' ? 'row-income' : 'row-expense' ?>">
                    <td><?= $row['type']==='income' ? '➕' : '➖' ?></td>
                    <td><?= htmlspecialchars($row['category']) ?></td>
                    <td><?= htmlspecialchars($row['description']) ?></td>
                    <td><?= number_format($row['amount'],2) ?> zł</td>
                    <td><?= date('Y-m-d', strtotime($row['created_at'])) ?></td>
                    <td class="text-nowrap">
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">✏️</a>
                        <a href="delete.php?id=<?= $row['id'] ?>"
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('Czy na pewno usunąć tę operację?')">🗑</a>
                    </td>
                </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

<script>
new Chart(document.getElementById('chart'), {
    type: 'doughnut',
    data: {
        labels: ['Przychody', 'Wydatki'],
        datasets: [{ data: [<?= $income ?>, <?= $expense ?>] }]
    }
});
</script>

<script>
if ("serviceWorker" in navigator) {
    navigator.serviceWorker.register("/sw.js");
}
</script>

</body>
</html>
