<?php
  if(isset($_POST['submit'])){
    //print_r($_POST['nome']);
    //print_r($_POST['email']);
    //print_r($_POST['senha']);

    include_once('conexao.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $dataNascimento = $_POST['dataNascimento'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,cpf,email,telefone,dataNascimento) 
    VALUES ('$nome','$senha','$cpf','$email','$telefone','$dataNascimento')");
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/tela_cadastro.css">
<title>Tela de cadastro</title>
</head>
<body>
  <div class="register-container">
    <h1>Cadastro</h1>
    <form action="telacadastro.php" method="post" class="register-form">
      <label for="Nome">Nome:</label>
      <input type="text" id="nome" name="nome" required><br>
      
      <label for="CPF">CPF:</label>
      <input type="number" id="cpf" name="cpf" required><br>

      <label for="email">Email:</label>
      <input type="text" id="mail" name="email" required><br>
      
      <label for="senha">Senha:</label>
      <input type="password" id="password" name="senha" required><br>

      <label for="telefone">Telefone:</label>
      <input type="number" id="tel" name="telefone" required><br>
      
      <label for="dataNascimento">Data de nascimento:</label>
      <input type="date" id="Data" name="dataNascimento" required><br>
       
      <label style="display: inline-block;" for="termoDeUso">Termos de uso</label>
      <input style="width: 5%;" type="checkbox" id="termos" name="Termos de uso" required><br>

      <input type="submit" name="submit" style="width: 103%; margin-bottom: 2%; border-radius: 5%;"></input>

      <a class="jatemlogin" href="telalogin (1).php">
        <span class="jatemlogin">Já tem um login? Entre aqui</span>
      </a>
    </form>
  </div>
</body>
</html>