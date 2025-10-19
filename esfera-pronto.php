<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

<h1><a href="javascript:history.back()"><img src="voltar.jpg" width="77" height="68" alt="voltar" /></a>&nbsp;&nbsp;&nbsp; <img src="top-logo-tenda.jpg" width="350" height="65" /><br />
<p align="left"><?php include_once("menu.php"); ?> </p>
  Texto pronto para envio de e-mail.<br />
</h1>

<?php
if(isset($_POST['btn_abertura'])){
	
	
if($_POST['minutoAlarme'] === '00:00'){
	print "<script> window.alert('Vc colocou a hora padrão pré preenchida. será marcado 00:00h');</script>";
}
	
print "<textarea  class=\"ckeditor\" id=\"editor1\" rows=\"150\" cols=\"25\">";
print"Boa tarde ! <br /><br />Identificamos o seguinte alarme em nossa monitoria e não houve abertura automática no JIRA, segue abaixo para tratativa: <br /><br />";
print "Problem:".$_POST['Problema']."<br /><br /> ";
print"Data do Alarme: ".$_POST['dataAlarme']."   -  Hora do Alarme ".$_POST['minutoAlarme']."<br /><br />" ;
print("Quantidade de serviços impactados: ".$_POST['QuantidadeServicos']."  <br /><br />");
print "Solicitações impactadas por minuto: ".$_POST['SoluImpctadas']."<br /><br />";
print("Aplicativos Afetados: ".$_POST['AplicativosAfetados']."<br /><br />");
print("Método de serviço: ".$_POST['MetodoServi']."<br /><br />");
print("URL do Alarme: ".$_POST['url']."<br /><br />");
print("Evidência:  ".$_POST['evidencia']."<br /><br />");

print "Atenciosamente <br /><br />";

//print("<img src=".$_POST['PrintTela']."\"> <br /><br />");

print $_POST['Ass']." <br /><br />";

print "NOC – Algar <br /><br /> Tel: 0800342525 Posição menu 4";

print "<br /><br /><br /><br />";

print "</textarea>";
}
//print("Acionamento: Email:(".$_POST['Aemail'].")    Fone:(".$_POST['Afone'].")    SMS:(".$_POST['Asms'].") <br /><br />");
/*
if(isset($_POST['btn_operadora'])){
print "<textarea rows=\"20\" cols=\"95\">";
print"OPERADOR RESPONSÁVEL: ".$_POST['operador']."\n" ;
print"OPERADORA: ".$_POST['operadora'].	"\n" ;
print"ATENDENTE: ".$_POST['atendente']."\n" ;
print"TELEFONE: ".$_POST['telefone']."\n" ;
print"CHAMADO: ".$_POST['chamado']."\n" ;
print"PREVISÃO: ".$_POST['previsao']."\n" ;
print"RESUMO:".$_POST['resumoA']."\n\n" ;
print $_POST['data2']."\n\n" ;
print "</textarea>";
}
*/


?>

<br>
<br>
<br>
<br>
<br>

</body>
</html>