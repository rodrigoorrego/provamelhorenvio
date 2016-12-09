<html>
 <head>
  <title>Listar e-mails</title>
 </head>
<body>

<?php

require_once("conf.php"); 

$cx = mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);


$sql = mysqli_query($cx, "SELECT * FROM emails") or die(
	mysqli_error($cx) //caso haja um erro na consulta
);

$linha = mysqli_fetch_assoc($sql);
$total = mysqli_num_rows($sql);

echo "ID / E-Mail / ID Contato";

	if($total > 0) {
		
		do {
?>
			<p><?=$linha['id']?> / <?=$linha['email']?> / <?=$linha['idcontato']?></p>
<?php

		}while($linha = mysqli_fetch_assoc($sql));

	}

echo"<br><a href='index_admin.php'>Clique aqui para voltar ao Menu de Administrador</a><br>";

?>
</body>
</html>	