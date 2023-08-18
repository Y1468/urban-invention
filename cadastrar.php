<?php
  include"conexão.php";
  $conexão->query("INSERT INTO pessoa(nome,idade) VALUES ('$_POST[nome]',$_POST[idade])");
  header("location:index.php")
?>