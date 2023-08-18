<?php
  include"conexão.php";
  $conexão->query("DELETE FROM pessoa WHERE codigo=$_POST[codigo]");
  header("location:index.php");
?>

