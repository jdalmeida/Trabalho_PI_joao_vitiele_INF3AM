<?php
    require "./include/bd.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $dataEntrada = $_POST['dataEntrada'];
    $dataSaida = $_POST['dataSaida'];
    
    // $sql = "INSERT INTO aluno (nome, dt_nasc, rg, email, endereco, cidade, estado) VALUES ('$nome','$dtNasc','$rg','$email','$endereco','$cidade','$estado');";
    // mysqli_query($bd, $sql);
    // mysqli_close($bd);
    
    echo "Aluno cadastrado com sucesso!\n";
    header("Location: ../index.html");
    exit;
?>