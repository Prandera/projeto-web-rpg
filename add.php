<?php
    include("connect.php");

    $recnome=$_POST['nome'];
    $recraca=$_POST['raca'];
    $recclasse=$_POST['classe'];
    $reclevel=$_POST['level'];
    mysqli_query($conexao, "INSERT INTO personagem (nome, raca, classe, level) VALUES ('$recnome','$recraca','$recclasse', $reclevel)");

    header("location:index.php");
?>
