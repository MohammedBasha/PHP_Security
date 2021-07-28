<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP security tips | Password Hash</title>
</head>
<body>
<?php
// https://www.php.net/manual/en/function.password-hash.php
// https://www.php.net/manual/en/function.password-verify.php

$password = 'mohammed123';
$theGoodHashedPassword = password_hash($password, PASSWORD_DEFAULT);
echo $theGoodHashedPassword . '<br>';
$hashedPassword = md5($password);
echo $hashedPassword . '<br>';

if (password_verify($password, $theGoodHashedPassword)) {
    echo 'The Good one';
} else {
    echo 'The bad one';
}
?>
</body>
</html>