<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<style type="text/css">
body,td,th {
	font-size: 20px;
}
#gridContainer clearfix{
	overflow: scroll;
}
</style>

<head>

<link type="text/css" rel="stylesheet" media="screen" href="css/Gerenciar_postagem.css">

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/scripts.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gerenciar Postagem</title>
</head>

<body>



<div id="site"> <!--começo da div site-->

<div id="header1"><!--começo cabeçalho1-->

<div id='cssmenu'><!--começo do menu-->
<ul>
   <li><a href='#'><span>Voltar</span></a></li>
   <li><a href='Gerenciar_postagem.php'><span>Gerenciar Postagem</span></a></li>
   <li><a href='Nova_postagem.php'><span>Nova Postagem</span></a></li>      
</ul>
</div><!--fim do menu-->

</div><!--fim cabeçalho1-->

<div id="header2"><!--começo cabeçalho2-->

<p></p>

<logo1><img src="imagens/LogoMapPoint.png"  width="365" height="119"/></logo1><!--logo--><!--logo-->
<img src="imagens/gerencie.png"  align="right" width="530" height="75"/></div><!--fim cabeçalho2-->

<div id="conteudo"> <!--começo conteudo-->



<div class="content">
  <div class="tabs-content">
    <div class="tabs-menu clearfix">
      <ul>
        <li><a class="active-tab-menu" href="#" data-tab="tab1">PUBLICAÇÕES ATIVAS</a></li>
        <li><a href="#" data-tab="tab2">PUBLICAÇÕES CONCLUÍDAS</a></li>
      </ul>
    </div> <!-- tabs-menu -->
    
    
  
  
  
 </br>  </br>  
 <p align="center">
  <?php


// Passando dt_inicio do text box "DD/MM/AAAA" para "AAAA-MM-DD"
    function gravaData ($dt_inicio) {
    if ($dt_inicio != '') {
    return (substr($dt_inicio,3,2).'/'.substr($dt_inicio,0,2).'/'.substr($dt_inicio,6,4));
    }
    else { return ''; }
    }
 
echo '<table align="center" width="1350"  id="tabela" height="80" cellpadding="5px" cellspacing="0" border="1">';
echo '<thead><tr>';
echo '<th align="center" bgcolor="blue" width="123" scope="col">Imagem</th>';
echo '<th align="center" bgcolor="blue" width="300" scope="col">Nome do Evento</th>';
echo '<th align="center" bgcolor="blue" width="300" scope="col">Descrição</th>';
echo '<th align="center" bgcolor="blue" width="116" scope="col">Data Inicial</th>';
echo '<th align="center" bgcolor="blue" width="116" scope="col">Data Final</th>';
echo '<th align="center" bgcolor="blue" width="90" scope="col">Editar</th>';
echo '<th align="center" bgcolor="blue" width="90" scope="col">Excluir</th>';
echo '</tr></thead>';
  
$conexao = mysql_connect("localhost","root","");
$db = mysql_select_db("db_mappointsenha");
$sql = "SELECT * FROM tb_postagem";
$resultado = mysql_query($sql)
or die ("Não foi possível realizar a consulta ao banco de dados");  


$sql = mysql_query('SELECT * FROM tb_postagem ');
while ($row = mysql_fetch_assoc($sql)) {
    echo '<tr>';
	echo '<td align="center" width="123" position:center ><a href="'. $row['nm_imagem'] .'"><img src="imagens"></a></td>';
    echo '<td align="center" width="462 position:center">' . utf8_encode($row['nm_postagem']) . '</td>';
	echo '<td align="center" width="462 position:center">' . utf8_encode($row['ds_postagem']) . '</td>';
    echo '<td align="center" width="106 position:center">' . $row['dt_inicio'] . '</td>';
    echo '<td align="center" width="94 position:center">' . $row['dt_fim'] . '</td>';
	echo '<td align="center" height="" width="90><a href="#"><img src="imagens/config.png"></a></td>';
	echo '<td align="center" height="" width="90><a href="#"><img src="imagens/delete.png"></a></td>';
    echo '</tr>';
}

echo '</tbody></table>';
  
  ?>

<?php


?>  

</table>

</table>
</p>
    
    </div> 
    <!-- .tab1 -->
    
    <div class="tab2 tabs">
    
    <!--
<table width="968" id="tabela" height="41" cellpadding="5px" cellspacing="0" border="1">
  <tr>
    <th width="123" scope="col">Imagem</th>
    <th width="462" scope="col">Nome do Evento</th>
    <th width="106" scope="col">Data Inicial</th>
    <th width="94" scope="col">Data Final</th>
    <th width="49" scope="col">Editar</th>
    <th width="60" scope="col">Excluir</th>
  </tr>
</table>

-->
    </div> <!-- .tab2 -->
   
    
  </div> <!-- .tabs -->
</div> <!-- .content -->
 
 
 
</div><!--fim conteudo-->

<div id="footer"><!--começo do rodapé-->

</div> <!--fim fim do rodapé-->

</div> <!--final da div site-->




</body>
</html>