<?php
 
require_once("conf.php"); 
 
$link = @mysql_connect($servidorconf, $usuarioconf, $senhaconf);
@mysql_select_db($bdconf);
 
require 'exportcsv_emails.inc.php';
 
$table="Emails";

exportMysqlToCsv($table);
 
?>