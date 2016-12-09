<?php

require_once("conf.php"); 
 
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$username = $_POST['username'];
$senha = MD5($_POST['senha']);
$connect=mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

$query_select = "SELECT Username FROM Usuarios WHERE Username = '$username'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['username'];
 
    if(($username == "" || $username == null) || ($nome == "" || $nome == null) || ($sobrenome == "" || $sobrenome == null) || ($senha == MD5("") || $senha == null)){
        echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchidos!');
        window.location.href='cadastro_usuarios.html';
        </script>";
 
        }else{
            if($logarray == $username){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');
                window.location.href='cadastro_usuarios.html';
                </script>";
                die();
 
            }else{
                $query_insert = "INSERT INTO Usuarios (Nome,Sobrenome,Username,Senha) VALUES ('$nome','$sobrenome','$username','$senha')";
                $insert = mysqli_query($connect,$query_insert);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');
                    window.location.href='lista_usuarios.php'
                    </script>";

                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');
                    window.location.href='cadastro_usuarios.html'
                    </script>";

                }
            }
        }

?>		