<?php
//iniciar sessão
  session_start();

  // Conexão com o banco de dados
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "aula_pw2"; //Por o nome do banco de vcs

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
  }

  // Verificação das informações de login
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $_SESSION['login'] = $username; //sessão criada pq o login deu certo
    echo "Login realizado com sucesso!";
    header("Refresh: 1; url=home.php");//envia para a página principal
  } else {
    echo "Dados inválidos, informe novemente...";
    header("Refresh: 1; url=index.php"); //redireciona para realizar login novamente
  }

  $conn->close();
?>
