<?php 

session_start();

$password = $_SESSION["password"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <nav>
        <a href="./index.php">Prev</a>
    </nav>
    <h1>La tua password di <?php echo strlen($password) ?> caratteri</h1>
    <pre>

        <?php echo $password ?>

    </pre>
</body>
</html>