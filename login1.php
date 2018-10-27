<?php
$page="Map Point - Login";
include("header.php");
?>

	<div id="login" class="form bradius">
	<div class="message" style="<?php echo $display;?>"><?php echo $msg;?></div>
    <div class="logo"><a href="<?php echo $home;?>"title="<?php echo $title;?>"><img src="estilo/logo/logo.png" alt="<?php echo $title;?>"title="<?php echo $title;?>" width="250" height="90"/></a></div>
    <div class="agrupar">
    
    
   
    	<form action="Login.php?acao=logar" method="post">
        <label for="email">E-mail: </label><input id="ds_email" type="text" class="txt bradius" name="ds_email" value=""/>
        <label for="senha">Senha: </label><input id="ds_senha" type="password" class="txt bradius" name="ds_senha" value=""/>
        <input type="submit" class="sb bradius" value="Entrar"/>
        <input type="button" class="sb bradius" value="Cadastre-se" title="Cadastre-se e comece a divulgar os seus eventos!" onclick="window.location.href='Cadastro.html'"/>
        
        </form>
       
  </div>
       
</div>
</body>
</html>