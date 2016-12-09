<?php

require_once("conf.php");
 
$id = $_POST['id'];
//$nome = $_POST['nome'];
//$sobrenome = $_POST['sobrenome'];
//$username = $_POST['username'];
//$senha = MD5($_POST['senha']);

$connect=mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

$query_select = "SELECT id FROM telefones WHERE id = '$id'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['id'];

$query_delete = "DELETE FROM telefones WHERE id = '$id'";
$delete = mysqli_query($connect,$query_delete);

echo"<script language='javascript' type='text/javascript'>alert('Telefone deletado!');
window.location.href='lista_agenda.php';
</script>";

?>	