<?php
 // Conectando ao banco de dados:
 include_once("conexao.php");
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recupera os dados do formulário
    $id_produto = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    // Atualiza o produto no banco de dados
    $stmt = $con->prepare('UPDATE produtos SET nome = ?, preco = ?, descricao = ? WHERE id = ?');
    $stmt->bind_param('sdsi', $nome, $preco, $descricao, $id_produto);
    $stmt->execute();

    // Redireciona para a lista de produtos
    header('Location: consulta.php');
    exit;
} else {
    // Recupera o produto a ser editado
    $id_produto = $_GET['id'];
    $stmt = $mysqli->prepare('SELECT * FROM produtos WHERE id = ?');
    $stmt->bind_param('i', $id_produto);
    $stmt->execute();
    $result = $stmt->get_result();
    $produto = $result->fetch_assoc();
}
?>
