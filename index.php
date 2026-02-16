<?php ob_start();

$HORA_USA = date("H"); 
$HORA =  ($HORA_USA - 3);
$MINUTO =  date("i"); 

if  ($HORA >=0 and $HORA<=9){
$zero = "0";	
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8">
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

    	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>

        <script type="text/javascript">
      window.onload = function()  {
        CKEDITOR.replace( 'editor1' );
     };
	 
	 
	 
	    var myVar = setInterval(myTimer, 1000);
    function myTimer() {
        var d = new Date(), displayDate;
       if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
          displayDate = d.toLocaleTimeString('pt-BR');
       } else {
          displayDate = d.toLocaleTimeString('pt-BR', {timeZone: 'America/Belem'});
       }
          document.getElementById("demo").innerHTML = displayDate;
    }


function escrever(btn){
	
	var data = new Date();
	

var hora    = data.getHours();          // 0-23	
 var minutos    = data.getMinutes(); 	      // 0-59
	
 var minutossite= document.getElementById("txtInput").value;
 
 var totalMinutos = minutos -  minutossite
 
 if (totalMinutos   >-60 && totalMinutos  <0) {
	 
	 totalMinutos  = totalMinutos  + 60;
	 hora = hora -1;
	 
 		if (hora ==-1) { 
	 	  hora = 23;
 		}
	 	 
 }else if (totalMinutos   >-120 && totalMinutos  <-60) {
	 
	 totalMinutos  = totalMinutos  + 120;
	 hora = hora -2; 
	 
	  	if (hora ==-2) { 
	 	  hora = 22;
 		}
	 
 }else if (totalMinutos   >-180 && totalMinutos  <-120) {
	 
	 totalMinutos  = totalMinutos  + 180;
	 hora = hora -3; 
 }
 
 if(totalMinutos < 10) {
	 
	 totalMinutos = "0"+totalMinutos;
	 
 }
 

  var suaVariavel  = hora+":"+(totalMinutos);
  
   
  var suaVariavelF = "<input type=\"text\" name=\"minutoAlarme\" size=\"5\" value=\""+suaVariavel+"\">";
  

  
  document.getElementById('minuto1').innerHTML = suaVariavelF;
  document.getElementById('minuto2').innerHTML = suaVariavelF;
 
}

 
  //document.get = ElementByid('minuto1').innerHTML = momento;
  //document.get = ElementByid('minuto2').innerHTML = momento;



function validar() {

var vHost = form0.Host.value;
var vtxt_problem = form0.txt_problem.value;
var vtxt_IP =  form0.txt_IP.value;
var vtxt_status = form0.txt_status.value;

if (vHost == "") {
alert('Preencha o campo Host');
form0.Host.focus();
return false;
}
if (vtxt_problem == "") {
alert('Escreva o Problema');
form0.txt_problem.focus();
return false;
}

if (vtxt_IP == "") {
alert('Escreva o IP');
form0.txt_IP.focus();
return false;
}
if (vtxt_status == "") {
alert('Escolha o Status');
return false;
}
}
</script>

</head>
<body>
<table width="934" border="0">
  <tr>
    <td width="307"><br>
    <img src="prudential.jpg" width="200" height="97" alt="prudential"><br></td>
    <td width="456"><h1>&nbsp; <br>
      GERA TXT NOC- Hora Servidor&nbsp;&nbsp; </h1></td>
    <td width="157"><h1>
      <div id="demo"></div>
    </h1></td>
  </tr>
</table>
<p align="left"><?php include_once("menu.php"); ?> </p>
<br>
<strong>Escreva aqui os minutos,  para calcular a hora do Alarme.
Conta maxima até 180 minutos.  Dai pra frente faz a conta na unha vc demorou  D+ : - [   ]</strong><br>
<br>
Tempo Alarme:
<input type="number" size="5" id="txtInput" />
<button id="myBtn" onclick="escrever(this);" >< -- Clique Aqui --> </button>
<h3>Geração de script de Chamado Dynatrace</h3>
<form action="prudential-pronto.php" method="post" name="formulario" id="formulario" >

  <p>Problema: 
    <input type="text" size="7" name="Problema" value="" id="Problema"> 
&nbsp;&nbsp;&nbsp;Hora e Data  do inicio do incidente: <span id="minuto1"></span>h    ← Definir hora e minuto do Alarme&nbsp;&nbsp;&nbsp;&nbsp; 
    
    <input type="text" size="10" name="dataAlarme" value="<?php print date("d/m/Y"); ?>" id="dataAlarme">
  &nbsp;&nbsp;  
    <!-- <p>Data e hora do acionamento: 
    <input type="text" size="10" name="dataAcionamento" value="<?php print date("d/m/Y"); ?>" id="dataAcionamento">
    <input type="text" size="5" name="minutoAcionamento" value="00:00") id="minutoAcionamento">
    h    ← Definir hora e minuto do evento&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>-->
  <p>Quantidade de usuarios impactados: 
    <input type="text" size="5" name="usuarios" value="" id="usuarios">
    <br>
  <p>Aplicativos / service / infraestruture foi impactado: <br>
    <br>
    <label for="txt-servicos"></label>
    <textarea name="txt-servicos" cols="80" rows="3" id="txt-servicos"></textarea>
<br>

    <br>
    <br>
    Problema: 
    <input  name="problema2" type="text" id="problema2" value="" size="70"><br><br /><br />
  
  URL do alarme : 
  <textarea name="txt_url" cols="80" rows="3" id="txt_url"></textarea>
  <br>
  <br>
  <strong>Preenchimento de Follow-up:</strong>
<br>
  <br>
  Contato Acionado :
  <input  name="Contato" type="text" id="Contato" value="" size="95">
  <br>
  <br>
Telefone:
<input  name="txt_tel" type="text" id="txt_tel" value="" size="70">
  <br>
  <br>
  <p>Posicionamento:
    <input name="posicionamento" type="text" id="posicionamento" value="Acionado Analista para verificar alerta." size="70">
    <br />
    <br />
  <p>
    <input name="btn_abertura" type="submit" value="-- Gerar Script --">
    <br /><br />
  <hr />
  </p>
</form>


<br>
  <br>
  	<h3>Geração de script de Chamado Zabix</h3>
  
<form action="prudential-pronto.php" method="post" name="formulario" id="formulario" >

  <p>&nbsp;Hora e Data  do inicio do incidente: <span id="minuto2"></span>h    ← Definir hora e minuto do Alarme&nbsp;&nbsp;&nbsp;&nbsp; 
    
  <input type="text" size="10" name="dataAlarme" value="<?php print date("d/m/Y"); ?>" id="dataAlarme">
  <br>
    <br>
    <br>
    Host:
  <input name="txt_host" type="text" id="txt_host" value="" size="50">
  <br>
  <br>
  IP:
  <input type="text" size="40" name="txt_IP"  id="txt_IP">
STATUS:
<label for="txt_status"></label>
<select name="txt_severidade" id="txt_severidade">
  <option value="">--Selecione --</option>
  <option value="WARNING">WARNING</option>
  <option value="CRITICAL">CRITICAL</option>
  <option value="DISASTER">DISASTER</option>
</select>
  
  <p>Problema:
    <br>
    <textarea name="Problema" cols="80" rows="3" id="Problema"></textarea>
    <br>
  <p><br>
    <br>
    <input name="btn_zabbix" type="submit" value="-- Gerar Script Zabbix --">
    <br /><br />
  <hr />
  </p>
</form>
  <h3><img src="procedimento.jpg" ><br>
    <br>
    <img src="procedimento2.jpg" width="784" height="535"><br>
    <br>
    <br>
  </h3>
  <p align="center">Powered by webedu.com.br / algartech.com  | Eduardo - version 1.0</p>

</body>



</html>