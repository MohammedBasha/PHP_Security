<?php
session_start();
session_regenerate_id();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP security tips | Prevent session fixation</title>
</head>
<body>
<?php
// https://owasp.org/www-community/attacks/Session_fixation

echo session_id();

?>
</body>
</html>