<?php

require_once("conf.php"); 
 
$idcontato = $_POST['idcontato'];
$email = $_POST['email'];

$connect=mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

//$query_select = "SELECT Username FROM Usuarios WHERE Username = '$username'";
//$select = mysqli_query($connect,$query_select);
//$array = mysqli_fetch_array($select);
//$logarray = $array['username'];
 
    if(($idcontato == "" || $idcontato == null) || ($email == "" || $email == null)){
        echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchidos!');
        window.location.href='emails.html';
        </script>";
 
        }else{
            //if($logarray == $username){
 
                //echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');
                //window.location.href='cadastro_usuarios.html';
                //</script>";
                //die();
 
            //}else{
                $query_insert = "INSERT INTO emails (email,idcontato) VALUES ('$email','$idcontato')";
                $insert = mysqli_query($connect,$query_insert);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('E-Mail cadastrado com sucesso!');
                    window.location.href='lista_agenda.php'
                    </script>";

                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse telefone');
                    window.location.href='emails.html'
                    </script>";

                }
            //}
        }

?>		