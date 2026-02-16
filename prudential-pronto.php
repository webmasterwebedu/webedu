<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css"/>
<title>Monitoramento Algar NOC - LDC ;-)</title>

    	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>

        <script type="text/javascript">
      window.onload = function()  {
        CKEDITOR.replace( 'editor1' );
     };
	 </script>


</head>

<body>

<h1><a href="javascript:history.back()"><img src="voltar.jpg" width="77" height="68" alt="voltar" /></a>&nbsp;&nbsp;&nbsp;<img src="prudential.jpg" width="163" height="64" />
  <p align="left"><?php include_once("menu.php"); ?> 
</p>
  Texto pronto para abrir chamado<br />
</h1>

<?php
// Função auxiliar para escapar output
function escape_output($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

if(isset($_POST['btn_abertura'])){
	
print "<textarea  class=\"ckeditor00\" id=\"editor100\" rows=\"40\" cols=\"115\">";
print "Problem: " . escape_output($_POST['Problema'] ?? '') . "\n";
print "Aplicativos / service / infraestruture foi impactado: " . escape_output($_POST['txt-servicos'] ?? '') . "\n";
print "Problema: " . escape_output($_POST['problema2'] ?? '') . "\n";
print "Quantidade de usuarios impactados: " . escape_output($_POST['usuarios'] ?? '') . "\n";
print "URL do alarme: " . escape_output($_POST['txt_url'] ?? '') . "\n";
print "Data do alarme: " . escape_output($_POST['dataAlarme'] ?? '') . "   -  Hora do Alarme " . escape_output($_POST['minutoAlarme'] ?? '') . "\n";
print "[Dynatrace]-" . escape_output($_POST['txt-servicos'] ?? '') . " " . escape_output($_POST['problema2'] ?? '') . "\n";
print "Analista acionado: " . escape_output($_POST['Contato'] ?? '') . "\n";
print "Telefone: " . escape_output($_POST['txt_tel'] ?? '') . "\n";
print "Posicionamento: " . escape_output($_POST['posicionamento'] ?? '') . "\n";
print "</textarea>";
}

if(isset($_POST['btn_zabbix'])){

print "<textarea  class=\"ckeditor00\" id=\"editor100\" rows=\"40\" cols=\"115\">";
print "Host: " . escape_output($_POST['txt_host'] ?? '') . "\n";
print "IP do HOST: " . escape_output($_POST['txt_IP'] ?? '') . "\n";
print "Problema: " . escape_output($_POST['Problema'] ?? '') . "\n";
print "Data do alarme: " . escape_output($_POST['dataAlarme'] ?? '') . "   -  Hora do Alarme " . escape_output($_POST['minutoAlarme'] ?? '') . "\n";
print "Severidade do alarme: " . escape_output($_POST['txt_severidade'] ?? '') . "\n";	

print "</textarea>";	
}


?>

<br>
<br>
<br>
<br>
<br>

</body>
</html>