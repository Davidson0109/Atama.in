<?php
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['emaillogin']) && !empty($_POST['senhalogin'])){

        include_once('conexao.php');
        $email = $_POST['emaillogin'];
        $senha = $_POST['senhalogin'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1){
            header('Location: telalgin (1).php');
        }else{
            header('Location: index.html');
        }
    } else{
        header('Location: telalogin (1).php');
    }

?>