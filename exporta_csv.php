<?php
 
require_once("conf.php"); 
 
$link = @mysql_connect($servidorconf, $usuarioconf, $senhaconf);
@mysql_select_db($bdconf);
 
require 'exportcsv.inc.php';
 
$table="Usuarios";

exportMysqlToCsv($table);
 
?>