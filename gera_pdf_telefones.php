<?
require_once("conf.php"); 

$titulo = "TELEFONES"; 

$imagem = "exemplo_mini.jpg"; 

$end_fpdf = "fpdf";

$por_pagina = 13; 

$end_final = "telefones.pdf";

$tipo_pdf = "F";

$conn = @mysql_connect($servidorconf, $usuarioconf, $senhaconf);
$db = @mysql_select_db($bdconf, $conn); 
$sql = @mysql_query("SELECT * FROM telefones", $conn);
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
$pdf->Cell(15, 8, "ID", 1, 0, �C�); 
$pdf->Cell(28, 8, "ID (Contato)", 1, 0, �L�);

$pdf->Cell(28, 8, "Numero", 1, 0, �L�);
$pdf->Cell(28, 8, "Tipo de Telefone", 1, 1, �L�);

//EXIBE OS REGISTROS 
for($i=$inicio; $i<$fim; $i++) {
$pdf->Cell(15, 8, mysql_result($sql, $i, "id"),
1, 0, �C�); 
$pdf->Cell(28, 8, mysql_result($sql, $i, "idcontato"),
1, 0, �L�); 
$pdf->Cell(28, 8, mysql_result($sql, $i, "numero"),
1, 0, �L�); 
$pdf->Cell(28, 8, mysql_result($sql, $i, "labeltext"),
1, 1, �L�); 
$linha_atual++;
}//FECHA FOR(REGISTROS � i)
}//FECHA FOR(PAGINAS � x)

//SAIDA DO PDF
$pdf->Output();
?>