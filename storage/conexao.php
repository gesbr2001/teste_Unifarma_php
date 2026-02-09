<?php
 $conn = new mysqli ("localhost", "root", "", "estoque_teste_hoje");

    if ($conn-> connect_error) {
        die("Connection failed: " . $conn->connect_error);
    };
?>

<link rel="stylesheet" href="style.css">