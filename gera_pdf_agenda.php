<?
require_once("conf.php"); 

$titulo = "CONTATOS"; 

$imagem = "exemplo_mini.jpg"; 

$end_fpdf = "fpdf";

$por_pagina = 13; 

$end_final = "contatos.pdf";

$tipo_pdf = "F";

$conn = @mysql_connect($servidorconf, $usuarioconf, $senhaconf);
$db = @mysql_select_db($bdconf, $conn); 
$sql = @mysql_query("SELECT * FROM agenda", $conn);
$row = mysql_num_rows($sql);

//VERIFICA SE RETORNOU ALGUMA LINHA
if(!$row) { echo "N�o retornou nenhum registro";
die; }

//CALCULA QUANTAS P�GINAS V�O SER NECESS�RIAS
$paginas = ceil($row/$por_pagina);

//PREPARA PARA GERAR O PDF
define("FPDF_FONTPATH", "$end_fpdf/font/");
require_once("$end_fpdf/fpdf.php"); 
$pdf = new FPDF();

//INICIALIZA AS VARI�VEIS
$linha_atual = 0;
$inicio = 0;

//P�GINAS
for($x=1; $x<=$paginas; $x++) {

//VERIFICA
$inicio = $linha_atual;
$fim = $linha_atual + $por_pagina;
if($fim > $row) $fim = $row;

//$pdf->Open(); 
$pdf->AddPage(); 
$pdf->SetFont("Arial", "B", 10);

$pdf->Image($imagem, 0, 8);
$pdf->Ln(2);
$pdf->Cell(185, 8, "P�gina $x de $paginas",
0, 0, �R�);

//QUEBRA DE LINHA
$pdf->Ln(20);

//MONTA O CABE�ALHO 
$pdf->Cell(10, 8, "ID", 1, 0, �C�); 
$pdf->Cell(22, 8, "Nome", 1, 0, �L�);

$pdf->Cell(22, 8, "Sobrenome", 1, 0, �L�);
$pdf->Cell(22, 8, "Endereco", 1, 0, �L�);
$pdf->Cell(22, 8, "CEP", 1, 0, �L�);
$pdf->Cell(22, 8, "Bairro", 1, 0, �L�);
$pdf->Cell(22, 8, "Cidade", 1, 0, �L�);
$pdf->Cell(22, 8, "Empresa (ID)", 1, 0, �L�);
$pdf->Cell(35, 8, "Data Atualiz./Cria��o", 1, 1, �L�);

//EXIBE OS REGISTROS 
for($i=$inicio; $i<$fim; $i++) {
$pdf->Cell(10, 8, mysql_result($sql, $i, "iD"),
1, 0, �C�);
$pdf->Cell(22, 8, mysql_result($sql, $i, "nome"),
1, 0, �L�); 
$pdf->Cell(22, 8, mysql_result($sql, $i, "sobrenome"),
1, 0, �L�); 
$pdf->Cell(22, 8, mysql_result($sql, $i, "endereco"),
1, 0, �L�); 
$pdf->Cell(22, 8, mysql_result($sql, $i, "cep"),
1, 0, �L�); 
$pdf->Cell(22, 8, mysql_result($sql, $i, "bairro"),
1, 0, �L�); 
$pdf->Cell(22, 8, mysql_result($sql, $i, "cidade"),
1, 0, �L�); 
$pdf->Cell(22, 8, mysql_result($sql, $i, "idempresa"),
1, 0, �L�);
$pdf->Cell(35, 8, mysql_result($sql, $i, "CriacaoAtualizacao"),
1, 1, �L�); 
$linha_atual++;
}//FECHA FOR(REGISTROS � i)
}//FECHA FOR(PAGINAS � x)

//SAIDA DO PDF
$pdf->Output();
?>