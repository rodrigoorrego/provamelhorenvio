<?php
 
require_once("conf.php");

$id = $_POST['id'];
$numero = $_POST['numero'];
//$label = $_POST['label'];
$labeltext = $_POST['labeltext'];

$connect=mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

$query_select = "SELECT id FROM telefones WHERE id = '$id'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['id'];

$query_update = "UPDATE telefones SET numero = '$numero', labeltext = '$labeltext' WHERE ID = '$id'";
$update = mysqli_query($connect,$query_update);

echo"<script language='javascript' type='text/javascript'>alert('Telefone modificado!');
window.location.href='lista_agenda.php';
</script>";

?>	