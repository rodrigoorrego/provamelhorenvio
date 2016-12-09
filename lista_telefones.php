<html>
 <head>
  <title>Listar Telefones</title>
 </head>
<body>

<?php

require_once("conf.php"); 

$cx = mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);


$sql = mysqli_query($cx, "SELECT * FROM telefones") or die(
	mysqli_error($cx) //caso haja um erro na consulta
);

$linha = mysqli_fetch_assoc($sql);
$total = mysqli_num_rows($sql);

echo "ID / Numero / Label / Label (texto) / ID Contato";

	if($total > 0) {
		
		do {
?>
			<p><?=$linha['id']?> / <?=$linha['numero']?> / <?=$linha['label']?> / <?=$linha['labeltext']?> / <?=$linha['idcontato']?></p>
<?php

		}while($linha = mysqli_fetch_assoc($sql));

	}

echo"<br><a href='index_admin.php'>Clique aqui para voltar ao Menu de Administrador</a><br>";

?>
</body>
</html>	