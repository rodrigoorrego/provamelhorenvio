<?php

require_once("conf.php"); 
 
$idcontato = $_POST['idcontato'];
$idempresa = $_POST['idempresa'];

$connect=mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

//$query_select = "SELECT Username FROM Usuarios WHERE Username = '$username'";
//$select = mysqli_query($connect,$query_select);
//$array = mysqli_fetch_array($select);
//$logarray = $array['username'];
 
    if(($idcontato == "" || $idcontato == null) || ($idempresa == "" || $idempresa == null)){
        echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchidos!');
        window.location.href='empresas.html';
        </script>";
 
        }else{
            //if($logarray == $username){
 
                //echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');
                //window.location.href='cadastro_usuarios.html';
                //</script>";
                //die();

                $query_select = "SELECT id FROM agenda WHERE id = '$idcontato'";
                $select = mysqli_query($connect,$query_select);
                $array = mysqli_fetch_array($select);
                $logarray = $array['id'];

                $query_update = "UPDATE agenda SET idempresa = '$idempresa' WHERE ID = '$idcontato'";
                $update = mysqli_query($connect,$query_update);

                echo"<script language='javascript' type='text/javascript'>alert('Empresa adicionada a contato!');
                window.location.href='lista_agenda.php';
                </script>";

 
            //}else{
                //$query_insert = "INSERT INTO emails (email,idcontato) VALUES ('$email','$idcontato')";
                //$insert = mysqli_query($connect,$query_insert);
                 
                //if($insert){
                    //echo"<script language='javascript' type='text/javascript'>alert('E-Mail cadastrado com sucesso!');
                    //window.location.href='lista_agenda.php'
                    //</script>";

                //}else{
                    //echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse telefone');
                    //window.location.href='empresas.html'
                    //</script>";

                //}
            //}
        }

?>		