<?php
 
require_once("conf.php");

$id = $_POST['id'];
$email = $_POST['email'];

$connect=mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

$query_select = "SELECT id FROM emails WHERE id = '$id'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['id'];

$query_update = "UPDATE emails SET email = '$email' WHERE ID = '$id'";
$update = mysqli_query($connect,$query_update);

echo"<script language='javascript' type='text/javascript'>alert('E-mail modificado!');
window.location.href='lista_agenda.php';
</script>";

?>