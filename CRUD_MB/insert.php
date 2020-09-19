<?php
    include "connect.php";

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


mysqli_query($link,"INSERT INTO usuarios(nome,sobrenome,email,senha)
   VALUES('$nome','$sobrenome','$email','$senha')");
 header('location:formInsert.php');
?>