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

<h1><a href="javascript:history.back()"><img src="voltar.jpg" width="77" height="68" alt="voltar" /></a>&nbsp;&nbsp;&nbsp;<img src="prudential.jpg" width="163" height="64" />
  <p align="left"><?php include_once("menu.php"); ?> 
</p>
  Texto pronto para abrir chamado<br />
</h1>

<?php
if(isset($_POST['btn_abertura'])){
	
print "<textarea  class=\"ckeditor00\" id=\"editor100\" rows=\"40\" cols=\"115\">";
//print"Boa tarde ! \n\nIdentificamos o seguinte alarme em nossa monitoria e não houve abertura automática no Service Now, segue abaixo para tratativa: \n\n";
print "Problem:".$_POST['Problema']."\n";
print "Aplicativos / service / infraestruture foi impactado: ".$_POST['txt-servicos']."\n";
print("Problema: ".$_POST['problema2']."\n");
print("Quantidade de usuarios impactados: ".$_POST['usuarios']."  \n");
print("URL do alarme: ".$_POST['txt_url']."\n");
print"Data do alarme: ".$_POST['dataAlarme']."   -  Hora do Alarme ".$_POST['minutoAlarme']."\n" ;
print("[Dynatrace]-".$_POST['txt-servicos']." ".$_POST['problema2']."\n");
print("Analista acionado: ".$_POST['Contato']."\n");
print("Telefone: ".$_POST['txt_tel']."\n");
print("Posicionamento: ".$_POST['posicionamento']."\n");
print "</textarea>";
}

if(isset($_POST['btn_zabbix'])){

print "<textarea  class=\"ckeditor00\" id=\"editor100\" rows=\"40\" cols=\"115\">";
print "Host:".$_POST['txt_host']."\n";
print "IP do HOST: ".$_POST['txt_IP']."\n ";
print "Problema: ".$_POST['Problema']."\n ";
print"Data do alarme: ".$_POST['dataAlarme']."   -  Hora do Alarme ".$_POST['minutoAlarme']."\n" ;
print "Severidade do alarme:".$_POST['txt_severidade']."\n";	

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