<?php 
// GENERO PASSWORD CASUALE
$generateRandomPassword = function ($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';
    $password = '';
    $chars_length = strlen($chars);

    for ($i = 0; $i < $length; $i++) {
        $random_char = $chars[rand(0, $chars_length - 1)];
        $password .= $random_char;
    }

    return $password;
};
 // Verifico se il form è stato inviato
 if (isset($_GET['password_length'])) {
    $password_length = intval($_GET['password_length']);
    // Limito la lunghezza della password tra 5 e 50 caratteri
    $password_length = max(5, min(50, $password_length));

    // Genero la password casuale utilizzando la function
    $generated_password = $generateRandomPassword($password_length);

    // Mostrare la password all'utente attraverso un alert
    echo "<div class='alert alert-success mt-3'>Password Generata: $generated_password</div>";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap link -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous'/>
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1 class="mt-5">Generatore di Password Casuale</h1>
        <form method="get" action="#" class="my-3">
            <div class="form-group">
                <label for="password_length">Scegli un numero per la lunghezza Password:</label>
                <input type="number" id="password_length" name="password_length" class="form-control" min="5" max="50" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Genera Password</button>
        </form>
    </div>
</body>
</html>