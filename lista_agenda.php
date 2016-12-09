<html>
 <head>
  <title>Listar Contatos</title>
 </head>
<body>

<?php

require_once("conf.php"); 

$cx = mysqli_connect($servidorconf,$usuarioconf,$senhaconf,$bdconf);

$sql = mysqli_query($cx, "SELECT * FROM agenda") or die(
	mysqli_error($cx) //caso haja um erro na consulta
);

$linha = mysqli_fetch_assoc($sql);
$total = mysqli_num_rows($sql);

echo "AGENDA DE CONTATOS:";
echo "<br>ID / Nome / Sobrenome / Endereco / CEP / Bairro / Cidade / Empresa (ID) / Data de Atualização/Criação";

	if($total > 0) {
		
		do {
?>
			<p><?=$linha['id']?> / <?=$linha['nome']?> / <?=$linha['sobrenome']?> / <?=$linha['endereco']?> / <?=$linha['cep']?>  / <?=$linha['bairro']?> / <?=$linha['cidade']?> / <?=$linha['idempresa']?> / <?=$linha['CriacaoAtualizacao']?></p>
<?php

		}while($linha = mysqli_fetch_assoc($sql));

	}

echo"<br><a href='telefones.html'>Prosseguir para Adicionar Telefones ao Contato</a><br>";
echo"<br><a href='emails.html'>Prosseguir para Adicionar E-Mails ao Contato</a><br>";
echo"<br><a href='empresas.html'>Prosseguir para Adicionar uma Empresa ao Contato</a><br>";
echo"<br><a href='detalhescontato.html'>Clique aqui para ver Detalhes de um Contato</a><br>";
echo"<br><a href='lista_telefones.php'>Clique aqui para ver a Lista de Telefones</a><br>";
echo"<br><a href='lista_emails.php'>Clique aqui para ver a Lista de e-Mails</a><br>";
echo"<br><a href='index_admin.php'>Clique aqui para voltar ao Menu de Administrador</a><br>";

?>
</body>
</html>	