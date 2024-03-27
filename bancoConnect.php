<?php
$servername = "localhost";
$username = "Ama goticas";
$password = "amante das goticas";
$dbname = "vendas";




try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Define o modo de erro do PDO como exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Fecha a conexão
$conn = null;
?>