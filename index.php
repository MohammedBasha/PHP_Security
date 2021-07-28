<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP security tips | Header Location Redirect the right way</title>
</head>
<body>
<?php

$id = 0;

if ($id !== 1) {
    header('Location: test.php');
    exit; // we should exit the script after redirecting
}

echo 'This info will be shown for admins only';

?>
</body>
</html>