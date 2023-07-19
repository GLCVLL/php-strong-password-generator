
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