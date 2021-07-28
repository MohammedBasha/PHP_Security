<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP security tips | Remote File Injection</title>
</head>
<body>
<?php
if (isset($_GET['page'])) {
    $allowedPages = ['text.txt', 'index.html'];
    $page = $_GET['page'];
    if(in_array($page, $allowedPages)) {
        include ($page);
    } else {
        echo 'Not allowed page';
    }
}
?>
</body>
</html>