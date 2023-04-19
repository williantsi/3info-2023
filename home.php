<?php
     session_start();

     if (isset($_SESSION['login'])){
        echo "";
     }else{
         echo "Usuário não logado, redirecionando...";
         header("Refresh: 1; url=index.php");
         exit;
     }
 
     echo "<br>Conteúdo do site";
?>