<?php 
include_once "conection.php";

try {
    // Página mais importante: Execução da instrução SQL
    $consulta = $conectar->query("SELECT * FROM jogadores");

    echo "<a href='formCadastro.php'>Novo Cadastro</a><br/><br/>Listagem dos Jogadores";

    echo "<table border='1'>
        <tr>
        <td>Jogador</td>
        <td>Posição</td>
        <td>Ações</td>
        </tr>";
        
    
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
        <td>$linha[jogador]</td>
        <td>$linha[posicao]</td>
        <td><a href='formEditar.php?id=$linha[id]'> Editar</a> - <a href='excluir.php?id=$linha[id]'>Excluir</a></td>
        </tr>";
    }
        echo "</table>";
        echo $consulta->rowCount() . " Registros Exibidos";
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>