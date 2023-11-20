<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/tela_login (1).css">
<title>Tela de Login</title>
</head>
<body>
  <div class="login-container">
    <h2 style="margin-bottom: 10%;">Login</h2>

    <form class="login-form" method="post" action="testlogin.php">
      <label>Email:</label>
      <input type="text" name="emaillogin" required>
      
      <label>Senha:</label>
      <input type="password" name="senhalogin" required>
      
      <input name="submit" style="width: 106%; margin-top: 5%; margin-bottom: 5%;" type="submit"></input>

      <a class="se-cadastre" href="telacadastro.php">
        <span class="esquece-senha">Se cadastre aqui!</span>
      </a>
    </form>
  </div>
</body>
</html>
