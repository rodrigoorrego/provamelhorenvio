<?php

require_once("conf.php"); 
 
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$connect=mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

//$query_select = "SELECT Username FROM Usuarios WHERE Username = '$username'";
//$select = mysqli_query($connect,$query_select);
//$array = mysqli_fetch_array($select);
//$logarray = $array['username'];
 
    if(($nome == "" || $nome == null) || ($telefone == "" || $telefone == null)){
        echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchidos!');
        window.location.href='cadastro_empresas.html';
        </script>";
 
        }else{
            //if($logarray == $username){
 
                //echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');
                //window.location.href='cadastro_usuarios.html';
                //</script>";
                //die();
 
            //}else{
                $query_insert = "INSERT INTO empresas (nome,telefone) VALUES ('$nome','$telefone')";
                $insert = mysqli_query($connect,$query_insert);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Empresa cadastrada com sucesso!');
                    window.location.href='lista_empresas.php'
                    </script>";

                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse contato');
                    window.location.href='cadastro_empresas.html'
                    </script>";

                }
            //}
        }

?>		