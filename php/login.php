<?php
    session_start();
    //print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //Acessa
        include_once('conect.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        

        //print_r('Email : '. $email);
        //print_r('Senha : '. $senha);

        $sql = "SELECT * FROM tb_cadastro where email = '$email' and senha = '$senha'";

        $result = $conn->query($sql);

        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            //print_r('Não existe');
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: caminhoLogin.php');
        }
        else{
            //print_r('Existe');
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: verifica_login.php');
        }

    }
    else
    {
        // Não acessa
        header('Location: index.php');
    }


?>
