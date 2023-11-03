<?php 
include_once "conection.php";

try {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $jogador = filter_var($_POST['jogador']);
    $posicao = filter_var($_POST['posicao']);

    $update = $conectar->prepare("UPDATE jogadores SET jogador = :jogador, posicao = :posicao where id = :id");
    $update->bindParam(':id', $id);
    $update->bindParam(':jogador', $jogador);
    $update->bindParam(':posicao', $posicao);
    $update->execute();
    header("location: index.php");
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>