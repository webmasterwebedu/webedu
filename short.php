﻿<?php ob_start();
session_start();

require_once 'conecta.php';

// Função auxiliar para escapar output e prevenir XSS
function escape_output($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

?>
﻿
﻿
﻿<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8">
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
  &nbsp;&nbsp;&nbsp;Palavra Buscada :  <?php print isset($_POST['busca']) ? escape_output($_POST['busca']) : ''; ?>
</form>
<br />
<br />

</p>

<p>
  <?php

if(isset($_POST['bt_busca'])){
    
    $q = $_POST['busca'];
    
    // Usar prepared statement para prevenir SQL Injection
    $vquery = "select * from short_tb where short_q like ? or short_d like ? order by short_q asc";
    $stmt = mysqli_prepare($conexao, $vquery);
    if ($stmt) {
        $search_term = '%' . $q . '%';
        mysqli_stmt_bind_param($stmt, 'ss', $search_term, $search_term);
        mysqli_stmt_execute($stmt);
        $Lsql = mysqli_stmt_get_result($stmt);
    } else {
        die('Erro na consulta: ' . mysqli_error($conexao));
    }
    


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
	
print "<tr><td ".$bk." width=\"30%\" align=\"center\">" . escape_output($ListaTudo['short_d']) . "</td>
		   <td ".$bk." width=\"30%\" align=\"center\">" . escape_output($ListaTudo['short_q']) . "</td>
		   <td ".$bk." width=\"30%\" align=\"center\">" . escape_output($ListaTudo['service_off']) . "</td></tr>";
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