<?php
  include  "connect.php";
 
$id = $_POST['id'];
$nome = $_POST['nome'];
 
 mysqli_query($link,"UPDATE usuarios SET nome= '$nome' WHERE id ='$id'");
 header('location:updateUsuarios.php');

?>