<?php
    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aula_pw2"; //Por o nome do banco de vcs

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    //Inserir dados no banco
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    
    $sql = "INSERT INTO cadastro VALUES ";
    $sql .= "(null,'$nome', '$email', '$sexo', null)"; 
   echo $sql;
    mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($conn);

    echo "Cliente cadastrado com sucesso!";
    echo "<a href='formulario.html'>Clique aqui para realizar um novo cadastro</a><br>";
    echo "<a href='consulta.php'>Clique aqui para realizar uma consulta</a><br>";

  ?>