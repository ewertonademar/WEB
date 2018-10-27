<?php
$page="Map Point - Painel Administrativo";
include("header.php");
?>

<div id="cadastrar"><a href="Login.php?acao=logout" title="Clique para sair da sua conta">Sair</a></div> 
	<div id="login" class="form bradius">
	<div class="message" style="<?php echo $display;?>"><?php echo $msg;?></div>
    <div class="logo"><a href="<?php echo $home;?>"title="<?php echo $title;?>"><img src="estilo/logo/logo.png" alt="<?php echo $title;?>"title="<?php echo $title;?>" width="250" height="90"/></a></div>
    <div class="agrupar">     
     <?php
	 if($cd_nivel==2){
		 ?>    
    <table width="100%" border="0">
    <tr>
		<th>Nome</th>
        <th>CPF/CNPJ</th>
    	<th>Ação</th>
    </tr>
    <?php
	$buscarusuarios=mysql_query("SELECT * FROM tb_empresa WHERE cd_nivel='1'");
    if(mysql_num_rows($buscarusuarios) == 0){
    echo"Nenhum usuário cadastrado no sistema!";
	}else{
		while($linha=mysql_fetch_array($buscarusuarios)){
	?>
    <tr class>
    	<td><?php echo $linha["nm_empresa"];?></td>
        <td><?php echo $linha["cd_cpf"];?></td>
        <td><?php $cd_empresa=$linha["cd_empresa"]; if($linha["cd_status"] == 0){ echo "<a href=\"Login.php?acao=aprovar&amp;cd_empresa=$cd_empresa\">✓ - Aprovar</a>";}else{echo"<a href=\"Login.php?acao=bloquear&amp;cd_empresa=$cd_empresa\">X - Bloquear</a>";}?></td>
    </tr>	
    <?php } }?>
    </table>
    <?php }else{?> 


 <div id="form" class="bradius">
    <div class="agrupar">
    	<form action="" method="post">      
               
         <input type="button" class="sb bradius" value="Nova Postagem" title="Publique uma nova postagem." onclick="window.location.href='Nova_Postagem/Nova_postagem.html'"/>
     	<input type="button" class="sb bradius" value="Gerenciar postagem" title="Gerencie as suas postagens feitas anteriormente." onclick="window.location.href='Nova_Postagem/Nova_postagem.html'"/>
        
        
      
       
  </div>
</div>   
    <?php }?>
  </div>
</div>
</body>
</html>