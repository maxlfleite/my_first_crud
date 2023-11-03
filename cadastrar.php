<?php 
include_once "conection.php";

try {
    $jogador = filter_var($_POST['jogador']);
    $posicao = filter_var($_POST['posicao']);

    $insert = $conectar->prepare("INSERT INTO jogadores (jogador, posicao) VALUES (:jogador, :posicao)");
    $insert->bindParam(':jogador', $jogador);
    $insert->bindParam(':posicao', $posicao);
    $insert->execute();
    header("location: index.php");
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>