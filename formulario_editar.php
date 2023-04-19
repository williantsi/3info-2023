<?php
 // Conectando ao banco de dados:
 include_once("conexao.php");
?>

 <html>
 <head>
 <link href="estilos.css" rel="stylesheet" type="text/css">
 <title>Resultado da pesquisa</title>
 </head>
 <body>
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 $sql = "SELECT * FROM produtos where id = 1";
 $resultado = mysqli_query($con,$sql) or die("Erro ao retornar dados");
 
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   $id = $registro['id'];
   $nome = $registro['nome'];
   $preco = $registro['preco'];
   $descricao = $registro['descricao'];
   
   echo "<form name='editar' action='editar.php' method='POST'>
   <input name='id' type='hidden' value='".$id."' />
    <label>Nome do Produto: </label>
    <input type='text' name='nome' value='".$nome."'size='30' placeholder='Nome do produto'/><br>
    <label>Preço: </label>
    <input type='text' name='preco' value='".$preco."' size='45' placeholder='preco'><br>
    <label>Preço: </label>
    <input type='text' name='descricao' value='".$descricao."'size='45' placeholder='Descrição do produto'><br>
    <input type='submit' name='enviar' value='Atualizar' />
  </form>";

 }
 mysqli_close($con);
?>
</body>
</html>