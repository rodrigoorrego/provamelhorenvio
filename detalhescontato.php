<html>
 <head>
  <title>Detalhes de Contato</title>
 </head>
<body>

<?php

require_once("conf.php"); 

$sel = $_POST['sel'];
$selint = (int) $sel;
//$id = $_POST['id'];
//$nome = $_POST['nome'];
//$sobrenome = $_POST['sobrenome'];
//$endereco = $_POST['endereco'];
//$cep = $_POST['cep'];
//$bairro = $_POST['bairro'];
//$cidade = $_POST['cidade'];

$cx = mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

//$query_select = "SELECT * FROM agenda WHERE id = '$selint'";
//$select = mysqli_query($cx,$query_select);
//$array = mysqli_fetch_array($select);
//$logarray = $array['selint'];

$sql = mysqli_query($cx, "SELECT * FROM agenda WHERE id = '$selint'") or die(
	mysqli_error($cx) //caso haja um erro na consulta
);

$linha = mysqli_fetch_assoc($sql);
$total = mysqli_num_rows($sql);

echo "DETALHES DO CONTATO";
echo "<br>ID / Nome / Sobrenome / Endereco / CEP / Bairro / Cidade / Empresa (ID) / Data de Atualização/Criação";

	if($total > 0) {
		
		do {
?>
			<p><?=$linha['id']?> / <?=$linha['nome']?> / <?=$linha['sobrenome']?> / <?=$linha['endereco']?> / <?=$linha['cep']?>  / <?=$linha['bairro']?> / <?=$linha['cidade']?> / <?=$linha['idempresa']?> / <?=$linha['CriacaoAtualizacao']?></p>
<?php

		}while($linha = mysqli_fetch_assoc($sql));

	}

//TELEFONES
$sql = mysqli_query($cx, "SELECT * FROM telefones WHERE idcontato = '$selint'") or die(
	mysqli_error($cx) //caso haja um erro na consulta
);

$linha = mysqli_fetch_assoc($sql);
$total = mysqli_num_rows($sql);

echo "TELEFONES";
echo "<br>Numero / Tipo de Telefone";

	if($total > 0) {
		
		do {
?>
			<p><?=$linha['numero']?> / <?=$linha['labeltext']?></p>
<?php

		}while($linha = mysqli_fetch_assoc($sql));

	}

//EMAILS
$sql = mysqli_query($cx, "SELECT * FROM emails WHERE idcontato = '$selint'") or die(
	mysqli_error($cx) //caso haja um erro na consulta
);

$linha = mysqli_fetch_assoc($sql);
$total = mysqli_num_rows($sql);

echo "E-MAILS";
//echo "<br>E-Mail";

	if($total > 0) {
		
		do {
?>
			<p><?=$linha['email']?></p>
<?php

		}while($linha = mysqli_fetch_assoc($sql));

	}

echo"<br><a href='index_admin.php'>Clique aqui para voltar ao Menu de Administrador</a><br>";

?>
</body>
</html>	