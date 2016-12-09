<?php
 
require_once("conf.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$connect=mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

$query_select = "SELECT id FROM agenda WHERE id = '$id'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['id'];

$query_update = "UPDATE agenda SET nome = '$nome', sobrenome = '$sobrenome', endereco = '$endereco', cep = '$cep', bairro = '$bairro', cidade = '$cidade' WHERE ID = '$id'";
$update = mysqli_query($connect,$query_update);

echo"<script language='javascript' type='text/javascript'>alert('Contato modificado!');
window.location.href='lista_agenda.php';
</script>";

?>	