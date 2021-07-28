<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP security tips | SQL Injection</title>
</head>
<body>
<?php
// http://www.securityidiots.com/Web-Pentest/SQL-Injection/Basic-Union-Based-SQL-Injection.html

require 'connect.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $userid = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $stmt = $con->prepare('SELECT * FROM members WHERE id = ?');
    $stmt->execute([$userid]);
    $count = $stmt->rowCount();
    if ($count > 0) {
        while ($row = $stmt->fetch()) {
            $id = $row['id'];
            $name = $row['name'];
        }
        echo $id . ' ' . $name;
    } else {
        echo 'There is no id like that';
    }

} else {
    echo 'Please we need a valid id';
}

?>
</body>
</html>