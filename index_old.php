<?php ob_start();
session_start();

require_once '../conecta.php';

if (isset($_GET['localidade'])){
	
	if(	$_GET['localidade'] != 'vazio'){
$Wlocalidade = "where localidade ='".$_GET['localidade']."'";

		$sql1 = "select * from tab_ldc ". $Wlocalidade." order by localidade asc";
		//print $sql1;
		//die;
	}else{
		
		$Wlocalidade = "where localidade =localidade=AAA+-+Em+Branco";
	}
}
?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Monitoramento Algar NOC - LDC</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 984px;
	top: 241px;
	width: 102px;
	height: 50px;
	z-index: 1;
}
</style>
</head>
<body>
<h1><img src="top-logo-tenda.jpg" width="350" height="65">&nbsp;&nbsp;&nbsp; TXT NOC</h1>
<p align="left"><?php include_once("menu.php"); ?> </p>
<!--
<form action="" method="get" enctype="application/x-www-form-urlencoded" target="_parent">
<p>Selecionar unidade: 
<select name="localidade" id="unidade">

  <option value="" selected="selected">--- Selecione a Unidade ---</option> 
  <?php 
  //$varquery = "select tab_ldc.localidade from tab_tribanco  order by localidade asc";
  //print $varquery;
  //die;
  
//$Lsql = mysqli_query($conexao, $varquery);
//while($ListaTudo  = mysqli_fetch_array($Lsql)){
	
 // print "<option value=\"".$ListaTudo['localidade']."\">".$ListaTudo['localidade']."</option>";
  //}
?>
</select>
<input type="submit" value="buscar Localidade" > &nbsp;&nbsp;&nbsp;</form>
-->
</p>
	<?php
	/*$sql = mysqli_query($conexao, "select * from tab_ldc ". $Wlocalidade." order by localidade asc");
	
	while($lista  = mysqli_fetch_array($sql)){
		
	print "<strong>Localidade: ".$lista['localidade']."&nbsp;&nbsp;&nbsp;&nbsp;CNPJ:".$lista['cnpj']."<br /><br />";
		print "<strong>Tipo Negócio: ".$lista['negocio']."<br /><br />";
	print "<strong>Tel Localidade: </strong>".$lista['tel_localidade']."<br /><br />";
	print "<strong>Equipe TI N1: </strong>".$lista['equipe_ti_n1']."<br /><br />";
	print "<strong>Equipe TI N2: </strong>".$lista['equipe_ti_n2']."<br /><br />";
	print "<strong>Coordenador: </strong>".$lista['equipe_ti_n3']."<br /><br />";

	
	print"<br /><br /><hr />"; */	?>
	
	<h3>Abertura de Chamado</h3>
<form action="tenda-pronto1.php" method="post" name="formulario" id="formulario" >

  <p><br>
  
      <br>
    Houve indisponibilidade: Sim:
    <input type="radio" name="Indisponibilidade" value="Sim">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Não: 
    <input type="radio" name="Indisponibilidade" value="Não">
       <br>   <br>
    
Data e hora do inicio do incidente: 
  <input type="text" size="10" name="dataAlarme" value="<?php print date("d/m/Y"); ?>" id="dataAlarme">
  <input type="text" size="5" name="minutoAlarme" value="00:00") id="minutoAlarme">
h    ← Definir hora e minuto do Alarme&nbsp;&nbsp;&nbsp;&nbsp;  
 <!-- <p>Data e hora do acionamento: 
    <input type="text" size="10" name="dataAcionamento" value="<?php print date("d/m/Y"); ?>" id="dataAcionamento">
    <input type="text" size="5" name="minutoAcionamento" value="00:00") id="minutoAcionamento">
    h    ← Definir hora e minuto do evento&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>-->
  <p>    HOSTNAME: 
    <input type="text" size="80" name="Host" value="" id="Host">
    <br>
  <p> STATUS:
  <input type="text" size="80" name="Status" value="" id="Status">
    <br>
    <br>
    ESCALONAMENTO: 
 Sim:
    <input type="radio" name="Escalonamento" value="Sim">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Não:
    <input type="radio" name="Escalonamento" value="Não">
<br>
    <br><!--
    Acionamento: Email:
    <input type="checkbox" name="Aemail" value=" xx ">
    &nbsp;| &nbsp;&nbsp;&nbsp;
    Fone:&nbsp;
  <input type="checkbox" name="Afone" value=" xx ">
    |    &nbsp;&nbsp; SMS:
    <input type="checkbox" name="Asms" value=" xx ">-->
    <br>
     <br>
  <input name="btn_abertura" type="submit" value="-- Gerar Script --">
    <br /><br />
  <hr />
  </p>
  <p>&nbsp;</p>
</form>
<?php
	// Fecha o  While
   // }
	
	?>

  <br>
  <br>

  <p align="center">Powered by webedu.com.br / algartech.com  | Eduardo - Vinicius - version 1.0</p>

</body>



</html>