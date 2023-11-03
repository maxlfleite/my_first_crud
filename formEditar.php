<?php
include_once "conection.php";
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $consulta = $conectar->query("SELECT * FROM jogadores WHERE id='$id'");
    $linha = $consulta->fetch(PDO::FETCH_ASSOC);

?>

<form action="editar.php" method="post">
    Jogador: <input type="text" name="jogador" value="<?= $linha['jogador']?>" id="jogador"/><br/>
    Posição: <input type="text" name="posicao" value="<?=$linha['posicao']?>" id="posicao"/>
    <input type="hidden" name="id" value="<?=$linha['id']?>">
    <input type="submit" value="Modificar">
</form>
