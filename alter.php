<?php
    include("connect.php");

    $recid=$_POST["idpersonagem"];
    $recnome=$_POST["nome"];
    $recraca=$_POST["raca"];
    $recclasse=$_POST["classe"];
    $reclevel=$_POST["level"];

    mysqli_query($conexao, "UPDATE personagem SET nome='$recnome', raca='$recraca', 
        classe='$recclasse', level='$reclevel' where idpersonagem=$recid");

    header("location:procurar.php");

?>