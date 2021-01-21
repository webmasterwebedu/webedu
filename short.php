﻿<?php ob_start();
session_start();

require_once 'conecta.php';


?>
﻿
﻿
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css"/>
<title>SHORT DESCRIPTION</title>
</head>

<body>
<img src="/algar/logo-topo.jpg">
<h1>QUANDO UTILIZAR O SHORT DESCRIPTION<br /></h1><br />

<p align="left"><?php include_once("menu.php"); ?> </p>
<br>
<br>

<p align="center">
<form action="short.php" method="post">
  <label for="busca" > &nbsp;&nbsp;&nbsp;&nbsp;BUSCAR -  SHORT DESCRIPTION &nbsp;&nbsp;&nbsp;</label>
  <input type="text" name="busca" id="busca" >&nbsp;&nbsp;&nbsp;&nbsp;
  <button name="bt_busca" type="submit">OK</button> 
  &nbsp;&nbsp;&nbsp;Palavra Buscada :  <?php print $_POST['busca']; ?>
</form>
<br />
<br />

</p>

<p>
  <?php

if(isset($_POST['bt_busca'])){
    
    $q = $_POST['busca'];
    
    $vquery = "select * from short_tb where short_q like '%".$q."%' or short_d like '%".$q."%' order by short_q asc";
    
    //print "<br />".$vquery;
    //die;

  
$Lsql = mysqli_query($conexao, $vquery);

$numRegistros = mysqli_num_rows($Lsql);

//print $numRegistros;

	if($numRegistros !=0){
  
  	print "<table width=\"90%\" border=\"1\">";
	print "<tr><td ".$bk." width=\"30%\" align=\"center\"><strong>Short</strong></td>
		   <td ".$bk." width=\"30%\" align=\"center\"><strong>Descrição do Evento</strong></td>
		   <td ".$bk." width=\"30%\" align=\"center\"><strong>Equipamento</strong></td></tr>";

	
	$conta=0;
	
while($ListaTudo  = mysqli_fetch_array($Lsql)){
	
	if($conta % 2 ==0){
		
	$bk =  "class=\"td2\"";
	}else{
	$bk =  "class=\"td\"";
	}
	$conta = $conta + 1;
	
print "<tr><td ".$bk." width=\"30%\" align=\"center\">".$ListaTudo['short_d']."</td>
		   <td ".$bk." width=\"30%\" align=\"center\">".$ListaTudo['short_q']."</td>
		   <td ".$bk." width=\"30%\" align=\"center\">".$ListaTudo['service_off']."</td>  	</tr>";
	}

print "</table>";
	}else{
	print "<p align=\"center\">Sua busca não retornou nada  : - (  </p>";  
 
  
}

}

?>

  <br>
  <br>
  <br>
  <br>


</body>
</html>