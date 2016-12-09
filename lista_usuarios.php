<html>
 <head>
  <title>Listar Usuários</title>
 </head>
<body>

<?php

require_once("conf.php"); 

$cx = mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

$sql = mysqli_query($cx, "SELECT * FROM Usuarios") or die(
	mysqli_error($cx) //caso haja um erro na consulta
);

$linha = mysqli_fetch_assoc($sql);
$total = mysqli_num_rows($sql);

echo "ID / Nome / Sobrenome / Username / Senha (criptografada)";

	if($total > 0) {
		
		do {
?>
			<p><?=$linha['ID']?> / <?=$linha['Nome']?> / <?=$linha['Sobrenome']?> / <?=$linha['Username']?> / <?=$linha['Senha']?></p>
<?php

		}while($linha = mysqli_fetch_assoc($sql));

	}

echo"<br><a href='index_admin.php'>Clique aqui para voltar ao Menu de Administrador</a><br>";

?>
</body>
</html>	