<!DOCTYPE html>
<html>
  <head>
    <title>Tela de login</title>
  </head>
  <body>
    <h1>Tela de login</h1>
    <form method="post" action="verifica_login.php">
      <label for="username">Nome de usuário:</label>
      <input type="text" name="username" id="username" required>
      <br>
      <label for="password">Senha:</label>
      <input type="password" name="password" id="password" required>
      <br>
      <input type="submit" value="Entrar">
    </form>
  </body>
</html>
