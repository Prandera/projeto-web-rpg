<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" type="text/css" href="style_adicionar.css">
    <title>RPG Characters | Add</title>
    <meta charset="utf-8">
  </head>
  <body>
      <div name="titulo" id="titulo">
        <h1>Alterar Personagem</h1>
      </div>
      <?php
        include("connect.php");
        $recid=$_GET["editid"];
        $select=mysqli_query($conexao, "SELECT * FROM personagem WHERE idpersonagem=$recid");
        $field=mysqli_fetch_array($select);
      ?>
      <div name="formulario" id="formulario">
        <form method="POST" action="alter.php">
            <input type="hidden" name="id"value="<?=$field["idpersonagem"]?>">  
            <label for="nome">Nome </label><br>
            <input type="text" name="nome" id="nome" value<?=$field["nome"]?>><br>
            <label for="raca">Raça </label><br>
            <select name="raca" value<?$field["raca"]?>><br>
                <option value="Orc">Orc</option>
                <option value="Humano">Humano</option>
                <option value="Anão">Anão</option>
                <option value="Goblin">Goblin</option>
                <option value="Drainei">Drainei</option>
                <option value="Tauren">Tauren</option>
                <option value="Troll">Troll</option>
                <option value="Elfo">Elfo</option>
            </select><br>
            <label for="classe">Classe </label><br>
            <select name="classe" value<?=$field["classe"]?>><br>
                <option value="Bruxo">Bruxo</option>
                <option value="Cacadar">Caçador</option>
                <option value="Caçador de Demônios">Caçador de Demônios</option>
                <option value="Cavaleiro da Morte">Cavaleiro da Morte</option>
                <option value="Druida">Druida</option>
                <option value="Guerreiro">Guerreiro</option>
                <option value="Ladino">Ladino</option>
                <option value="Mago">Mago</option>
                <option value="Monge">Monge</option>
                <option value="Paladino">Paladino</option>
                <option value="Sacerdote">Sacerdote</option>
                <option value="Xamã">Xamã</option>
            </select><br>
            <label for="level">Level </label><br>
            <input type="number" name="level" id="level" min="1" max="60" value<?=$field["level"]?>><br>
            <input id="alterar" type="submit" value="ALTERAR" class="botform">
        </form>
      </div>
      <div name="toolbar" id="toolbar">
        <a id="voltar" href="index.php">Voltar</a>
      </div>
  </body>
</html>