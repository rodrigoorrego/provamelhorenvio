<?php

    require_once("conf.php"); 

    $username = $_POST['username'];
    $entrar = $_POST['entrar'];
    $senha = md5($_POST['senha']);
    $connect=mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

        if (isset($entrar)) {
                     
            $query_verifica = "SELECT * FROM Admins WHERE Username = '$username' AND Senha = '$senha'";
            $verifica = mysqli_query($connect,$query_verifica) or die("erro ao selecionar");

                if (mysqli_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');
                    window.location.href='login.html';
                    </script>";
                    die();

                }else{
                    setcookie("username_admin",$username);
                    header("Location:index_admin.php");
                }
        }
?>	