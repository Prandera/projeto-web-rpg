<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" type="text/css" href="style_procurar.css">
    <title>RPG Characters | Search</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1 class="titulo">Lista de Personagens</h1>
    <table width="90%" cellspadding="10" cellspacing="0">
      <tr id=titulo>
        <td><strong>NOME</strong></td>
        <td><strong>RAÇA</strong></td>
        <td><strong>CLASSE</strong></td>
        <td><strong>LEVEL</strong></td>
        <td id="alterar" width="10"><strong>ALTERAR</strong></td>    
      </tr>
      <?php
        include("connect.php");
        $sellect=mysqli_query($conexao, "SELECT * FROM personagem");
        while($field=mysqli_fetch_array($sellect)){?>
          <tr>
            <td><?=$field["nome"]?></td>
            <td><?=$field["raca"]?></td>
            <td><?=$field["classe"]?></td>
            <td id="level"><?=$field["level"]?></td>
            <td id="edit" aling="center"><a href="edit.php?editid=<?=$field["idpersonagem"]?>">X</a></td>
          </tr>
        <?php }?>
    </table>
    <div name="toolbar" id="toolbar">
        <a id="voltar" href="index.php">Voltar</a>
        <!--<a id="procurar" href="#">Procurar</a>-->
    </div> 
  </body>
</html>