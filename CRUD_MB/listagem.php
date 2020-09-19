<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem</title>
</head>
<body>
<?php

include "connect.php";


$sql = mysqli_query($link,"SELECT * from usuarios");


while($campo = mysqli_fetch_array($sql)){

    $id = $campo['id'];
    $nome = $campo['nome'];
    $sobrenome = $campo['sobrenome'];
    $email = $campo['email'];
    $senha = $campo['senha'];

  echo "Código: $id <br>  nome: $nome<br> sobrenome: $sobrenome <br>  email: $email <br> senha: $senha <br><hr> <br><br>";
    
}
?>


</body>
</html>
