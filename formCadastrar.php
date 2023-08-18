<!DOCTYPE html>
<html lang ="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"href="style.css">
  <title>Cadastrar uma nova pessoa</title>
</head>
<body>
  <a href="index.php">Cancelar cadastro e voutar</a><br>

   <form action="cadastrar.php"method="POST">
    <fieldset>
    <label for="nome">Nome</label><br>
    <input type="text" name="nome"id="nome"placeholder="Nome"><br>
    <label for="idade">Idade</label><br>
    <input type="number" name="idade"id="idade"placeholder="Idade"><br>
    <input class="btn" type="submit" value="Cadastrar pessoa">
    </fieldset>
   </form>
</body>
</html>