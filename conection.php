<?php 
try {
// Faz conecção com o Banco de Dados
$conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo", "root", "");


} catch (PDOException $e) {
// Caso ocorra erro na conexão com o banco, exibe mensagem
echo "Falha ao conectar com o banco de dados." . $e->getMessage();

}
?>