<?php

require_once("conf.php"); 
 
$idcontato = $_POST['idcontato'];
$numero = $_POST['numero'];
$labeltext = $_POST['labeltext'];

$connect=mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

//$query_select = "SELECT Username FROM Usuarios WHERE Username = '$username'";
//$select = mysqli_query($connect,$query_select);
//$array = mysqli_fetch_array($select);
//$logarray = $array['username'];
 
    if(($idcontato == "" || $idcontato == null) || ($labeltext == "" || $labeltext == null) || ($numero == "" || $numero == null)){
        echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchidos!');
        window.location.href='telefones.html';
        </script>";
 
        }else{
            //if($logarray == $username){
 
                //echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');
                //window.location.href='cadastro_usuarios.html';
                //</script>";
                //die();
 
            //}else{
                $query_insert = "INSERT INTO telefones (numero,labeltext,idcontato) VALUES ('$numero','$labeltext','$idcontato')";
                $insert = mysqli_query($connect,$query_insert);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Telefone cadastrado com sucesso!');
                    window.location.href='lista_agenda.php'
                    </script>";

                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse telefone');
                    window.location.href='telefones.html'
                    </script>";

                }
            //}
        }

?>		