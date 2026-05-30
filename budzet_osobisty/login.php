<!doctype html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Logowanie | Budżet osobisty</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    background: linear-gradient(135deg, #0d6efd, #6ea8fe);
}
.login-card {
    border: none;
    border-radius: 1rem;
}
.login-card .form-control {
    padding-left: 2.5rem;
}
.input-icon {
    position: absolute;
    top: 50%;
    left: 12px;
    transform: translateY(-50%);
    color: #6c757d;
}
</style>
</head>

<body>

<div class="container vh-100 d-flex align-items-center justify-content-center">
    <div class="card login-card shadow w-100" style="max-width:400px">
        <div class="card-body p-4">

            <h4 class="text-center mb-3 fw-bold">
                <i class="bi bi-wallet2"></i> Budżet osobisty
            </h4>
            <p class="text-center text-muted mb-4">Zaloguj się do aplikacji</p>

            <form method="post" action="auth.php">
                <div class="mb-3 position-relative">
                    <i class="bi bi-person input-icon"></i>
                    <input
                        type="text"
                        name="username"
                        class="form-control"
                        placeholder="Login"
                        required
                    >
                </div>

                <div class="mb-3 position-relative">
                    <i class="bi bi-lock input-icon"></i>
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Hasło"
                        required
                    >
                </div>

                <button
                    name="login"
                    class="btn btn-primary w-100 py-2 fw-semibold"
                >
                    <i class="bi bi-box-arrow-in-right"></i>
                    Zaloguj się
                </button>
            </form>

            <hr class="my-4">

            <a
                href="register.php"
                class="btn btn-outline-secondary w-100"
            >
                <i class="bi bi-person-plus"></i>
                Dodaj nowego użytkownika
            </a>

        </div>
    </div>
</div>

</body>
</html>
