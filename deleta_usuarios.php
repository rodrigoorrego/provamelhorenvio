<?php

require_once("conf.php");
 
//$nome = $_POST['nome'];
//$sobrenome = $_POST['sobrenome'];
$username = $_POST['username'];
//$senha = MD5($_POST['senha']);
$connect=mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

$query_select = "SELECT Username FROM Usuarios WHERE Username = '$username'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['username'];

$query_delete = "DELETE FROM Usuarios WHERE Username = '$username'";
$delete = mysqli_query($connect,$query_delete);

echo"<script language='javascript' type='text/javascript'>alert('Usuario deletado!');
window.location.href='lista_usuarios.php';
</script>";

?>		