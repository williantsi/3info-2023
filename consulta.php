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
 
 <!-- Criando tabela e cabeçalho de dados: -->
 <table border="1" style='width:50%'>
 <tr>
 <th>ID</th>
 <th>NOME</th>
 <th>PREÇO</th>
 <th>DESCRIÇÃO</th>
 <th>EDITAR</th>
 <th>EXCLUIR</th>
 </tr>
 
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 $sql = "SELECT * FROM PRODUTOS";
 $resultado = mysqli_query($con,$sql) or die("Erro ao retornar dados");
 
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   $id = $registro['id'];
   $nome = $registro['nome'];
   $preco = $registro['preco'];
   $descricao = $registro['descricao'];
   echo "<tr>";
   echo "<td>".$id."</td>"; 
   echo "<td>".$nome."</td>";
   echo "<td>".$preco."</td>";
   echo "<td>".$descricao."</td>";
   echo "<td><a href='formulario_editar.php?id=" . $id. "'>Editar</a></td>";
   echo "<td><a href='excluir.php?id=" . $id. "'>Excluir</a></td>";
   echo "</tr>";
 }
 mysqli_close($con);
 echo "</table>";
?>
</body>
</html>