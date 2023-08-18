<?php
 include"conexão.php";
 $consulta=$conexão->query("SELECT*FROM pessoa");
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Lista de pessoas</title>
</head>
<body>
  <a href="formCadastrar.php">Cadastrar Uma Nova Pessoa</a><br>
  <table>
  	<tr>
  	  <th>Nome</th>
  	  <th>Idade</th>
  	  <th colspan="2">Ações</th>
  	</tr>
  	<?php while ($linha=$consulta->fetch()):?>
  	 <tr>
  	   <td><?php echo $linha['nome']?></td>
  	   <td><?php echo $linha['idade']?></td>
  	   <td id="altera"><?php echo"<a href='formAltera.php?codigo=$linha[codigo]&nome=$linha[nome]&idade=$linha[idade]'>Altera</a>"?></td>

  	   <td id="exclui"><?php echo"<a href='formExclui.php?codigo=$linha[codigo]&nome=$linha[nome]&idade=$linha[idade]'>Excluir</a>"?></td>

  	 </tr>
      
    <?php endwhile?>
  </table>
</body>
</html>