<?php
include_once "conection.php";
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $consulta = $conectar->query("SELECT * FROM jogadores WHERE id='$id'");
    $linha = $consulta->fetch(PDO::FETCH_ASSOC);

?>

<form action="editar.php" method="post">
    Jogador: <input type="text" name="jogador" value="<?= $linha['jogador']?>" id="jogador"/><br/>
    <label for="posicao">Posição:</label>
    <select name="posicao" value="<?=$linha['posicao']?>" id="posicao">
        <option value="Goleiro">Goleiro</option>
        <option value="Central">Central</option>
        <option value="Ala">Ala</option>
        <option value="Pivô">Pivô</option>
    </select>
    <input type="hidden" name="id" value="<?=$linha['id']?>">
   <p><input type="submit" value="Modificar"></p>
</form>
