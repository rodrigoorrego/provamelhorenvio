<?php
    $login_cookie = $_COOKIE['username'];
        if(isset($login_cookie)){
            echo"Bem-Vindo, $login_cookie !<br>";
            echo"Voc� est� logado!<br>";
            echo"<br><a href='logout.php'>Clique aqui</a> para deslogar";

        }else{
            echo"Bem-Vindo, visitante!<br>";
            echo"Voc� ainda n�o est� logado..<br>";
            echo"<br><a href='login.html'>Fa�a Login</a> para acessar o site<br>";
            echo"Ou <a href='login_admin.html'>Clique Aqui</a> para logar como administrador";
        }
?>	