<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" type="text/css" href="style_adicionar.css">
    <title>RPG Characters | Add</title>
    <meta charset="utf-8">
  </head>
  <body>
      <div name="titulo" id="titulo">
        <h1>Adicionar Personagem</h1>
      </div>
      <div name="formulario" id="formulario">
        <form method="POST" action="add.php">  
            <label for="nome">Nome </label><br>
            <input type="text" name="nome" id="nome"><br>
            <label for="raca">Raça </label><br>
            <select name="raca"><br>
                <option value="nenhum">Escolher</option>
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
            <select name="classe"><br>
                <option value="nenhum">Escolher</option>
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
            <input type="number" name="level" id="level" min="1" max="60"><br>
            <input id="adicionar" type="submit" value="ADICIONAR" class="botform">
        </form>
      </div>
      <div name="toolbar" id="toolbar">
        <a id="voltar" href="index.php">Voltar</a>
      </div>
  </body>
</html>