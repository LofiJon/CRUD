<?php
    include "connect.php";

  $id = $_POST['id'];

  mysqli_query($link,"DELETE FROM usuarios WHERE id = '$id' ");
  header('location:deleteUsuarios.php');
 
?>