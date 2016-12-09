<?php

require_once("conf.php"); 
 
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$connect=mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

//$query_select = "SELECT Username FROM Usuarios WHERE Username = '$username'";
//$select = mysqli_query($connect,$query_select);
//$array = mysqli_fetch_array($select);
//$logarray = $array['username'];
 
    if(($endereco == "" || $endereco == null) || ($nome == "" || $nome == null) || ($sobrenome == "" || $sobrenome == null) || ($cep == "" || $cep == null) || ($bairro == "" || $bairro == null) || ($cidade == "" || $cidade == null)){
        echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchidos!');
        window.location.href='cadastro_agenda.html';
        </script>";
 
        }else{
            //if($logarray == $username){
 
                //echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');
                //window.location.href='cadastro_usuarios.html';
                //</script>";
                //die();
 
            //}else{
                $query_insert = "INSERT INTO agenda (nome,sobrenome,endereco,cep,bairro,cidade) VALUES ('$nome','$sobrenome','$endereco','$cep','$bairro','$cidade')";
                $insert = mysqli_query($connect,$query_insert);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Contato cadastrado com sucesso!');
                    window.location.href='lista_agenda.php'
                    </script>";

                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse contato');
                    window.location.href='cadastro_agenda.html'
                    </script>";

                }
            //}
        }

?>		