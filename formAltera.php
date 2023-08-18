<!DOCTYPE html>
<html lang ="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"href="style.css">
  <title>Altera uma nova pessoa</title>
</head>
<body>
  <a href="index.php">Cancelar Alteração e voutar</a><br>

   <form action="Altera.php"method="POST">
    <fieldset>
    <input type="hidden" name="codigo"value="<?php echo $_GET['codigo']?>">
    <label for="nome">Nome</label><br>
    <input type="text" name="nome"id="nome"placeholder="Nome"value="<?php echo"$_GET[nome]"?>"><br>
    <label for="idade">Idade</label><br>
    <input type="number" name="idade"id="idade"placeholder="Idade"value="<?php echo"$_GET[idade]"?>"><br>
    <input class="btn" type="submit" value="Altera pessoa">
    </fieldset>
   </form>
</body>
</html>