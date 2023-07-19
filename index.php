<?php 


// Avvio la sessione per utilizzare $_SESSION
session_start();

// includo file functions.php
include_once 'functions.php';

 // Verifico se il form è stato inviato
 if (isset($_GET['password_length'])) {
    $password_length = intval($_GET['password_length']);
    // Limito la lunghezza della password tra 5 e 50 caratteri
    $password_length = max(5, min(50, $password_length));

    // Genero la password casuale utilizzando la function
    $generated_password = $generateRandomPassword($password_length);

    // Memorizzo la password in $_SESSION
    $_SESSION['generated_password'] = $generated_password;

    // Eseguo il redirect alla pagina show_password.php
    header('Location: show_password.php');
    exit();
};
?>



<!DOCTYPE html>
<html lang="en">
<?php
$pageTitle = "Generatore di Password Casuale";
include 'head.php';
?>
<body>
    <div class="container">
    <h1 class="mt-5">Generatore di Password Casuale</h1>
        <form method="get" action="#" class="my-3" <?php if (isset($_GET['password_length'])) echo 'style="display: none;"'; ?>>
            <div class="form-group">
                <label for="password_length">Scegli un numero per la lunghezza Password:</label>
                <input type="number" id="password_length" name="password_length" class="form-control" min="5" max="50" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Genera Password</button>
        </form>
    </div>
</body>
</html>