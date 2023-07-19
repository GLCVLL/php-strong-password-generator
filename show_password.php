<?php
// Avvio la sessione per accedere alla password memorizzata in $_SESSION
session_start();

// Verifico se la password è memorizzata in $_SESSION
if (isset($_SESSION['generated_password'])) {
    $generated_password = $_SESSION['generated_password'];
} else {
    // Se la password non è presente in $_SESSION, reindirizzo l'utente nuovamente alla pagina index.php
    header('Location: index.php');
    exit();
}

// Cancello la password memorizzata da $_SESSION
unset($_SESSION['generated_password']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1 class="mt-5">Password Generata</h1>
        <div class="alert alert-success mt-3">Password: <?php echo $generated_password; ?></div>
        <a href="index.php" class="btn btn-primary mt-3">Genera una nuova password</a>
    </div>
</body>
</html>