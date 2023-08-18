
<!DOCTYPE html>
<html lang ="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"href="style.css">
  <title>exclui pessoa</title>
</head>
<body>
  <a href="index.php">Cancelar exclusão</a><br>
  <p>Realmente Deseja Excluir <strong><?php echo $_GET['nome']?></strong> com <?php echo $_GET['idade']?> anos de idade?</p><br>
   <form action="exclui.php"method="POST">
    <input type="hidden"name="codigo"value="<?php echo $_GET['codigo']?>">
    <input type="submit" value="Sim excluir">

     
   </form>
</body>
</html>


