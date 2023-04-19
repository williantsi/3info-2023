<?php
// Conexão com o banco de dados
include_once("conexao.php");

// Verifica se o ID do produto foi informado
if (!empty($_GET['id'])) {
    // Recupera o ID do produto a ser excluído
    $id_produto = $_GET['id'];

    // Exclui o produto do banco de dados
    $stmt = $con->prepare('DELETE FROM produtos WHERE id = ?');
    $stmt->bind_param('i', $id_produto);
    $stmt->execute();

    // Redireciona para a lista de produtos
    header('Location: consulta.php');
    exit;
} else {
    // ID do produto não foi informado
    echo 'ID do produto não informado.';
}
?>
