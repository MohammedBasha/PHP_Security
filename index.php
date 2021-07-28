<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP security tips | XSS => Cross Site Scripting</title>
</head>
<body>
<?php

// https://www.php.net/manual/en/filter.filters.sanitize.php
// https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html

 if (isset($_GET['search'])) {
     // index.php?search=ok<script>alert('ok')</script>
     echo 'Keyword ' . filter_var($_GET['search'], FILTER_SANITIZE_STRING);
     // after running will output: Keyword okalert('ok')
 }
?>
</body>
</html>