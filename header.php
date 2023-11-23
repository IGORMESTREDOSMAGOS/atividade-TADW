<?php
// Conexão
require_once 'db connect.php';

// Sessão
session_start();

include 'include_session_home.php';
?>
<!DOCTYPE html>
<html>
    <header>
        <title>Cat Glass</title>
        <link rel="stylesheet" type="text/css" href="src/css/style_header.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:700,400"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans"
        rel="stylesheet">

        <a href="home.php"><img src="img/felix.png" alt="Cat Glass"></a>

        <nav>
            <li>Welcome <?php echo $dadosName['nome'] ?></li>
            <li><a href="logout.php"> Logout </a></li>
        </nav>
    </header>
<body>
</body>
</html>