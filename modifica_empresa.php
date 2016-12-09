<?php
 
require_once("conf.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$connect=mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

$query_select = "SELECT id FROM empresas WHERE id = '$id'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['id'];

$query_update = "UPDATE empresas SET nome = '$nome', telefone = '$telefone' WHERE ID = '$id'";
$update = mysqli_query($connect,$query_update);

echo"<script language='javascript' type='text/javascript'>alert('Empresa modificada!');
window.location.href='lista_empresas.php';
</script>";

?>