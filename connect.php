<?php
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    require 'bancoConnect.php';

    $sql = "INSERT INTO clientes (nome,emai,senha)
            VALUES ('$name','$email','$senha')";
    
    // Usa o método exec() para executar a consulta
    $conn->exec($sql);
    
    echo "<script>alert('dados gravados com sucesso')</script>";
    $conn = null;
?>