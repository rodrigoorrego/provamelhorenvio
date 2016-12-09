<?php
 
require_once("conf.php");

$id = $_POST['id'];
$username = $_POST['username'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$senha = MD5($_POST['senha']);
$connect=mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

$query_select = "SELECT Username FROM Usuarios WHERE Username = '$username'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['username'];

$query_update = "UPDATE Usuarios SET Nome = '$nome', Sobrenome = '$sobrenome', Username = '$username', Senha = '$senha' WHERE ID = '$id'";
$update = mysqli_query($connect,$query_update);

echo"<script language='javascript' type='text/javascript'>alert('Usuario modificado!');
window.location.href='lista_usuarios.php';
</script>";

?>		