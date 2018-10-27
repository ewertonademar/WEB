<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link type="text/css" rel="stylesheet" media="screen" href="css/Nova_postagem.css">
<script type="text/javascript" src="js/jquery-1.2.6.pack.js"/></script>
<script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"/></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/Nova_postagem.js"></script>
<title>Nova Postagem</title>
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

<logo1><img src="imagens/LogoMapPoint.png"  width="389" height="125"/></logo1><!--logo--><!--logo--><img src="imagens/Postagem.png"  align="right" width="538" height="81"/></div><!--fim cabeçalho2-->

<div id="conteudo"> <!--começo conteudo-->

<div class="clear"> <!--começo da div clear-->

<div id="conteudo1"><!--começo conteúdo da esquerda-->

<form class="form_clientes" action="classes/envio.php" method="post" enctype="multipart/form-data">

<legend id="legenda_cadastro">DADOS DO EVENTO</legend>
<HR WIDTH=100% ALIGN=center NOSHADE>
 </br>
    <fieldset>
   <fieldset class="campo">
     <div class="campo">
   <label for="nome">Nome</label>
 <input type="text" id="nm_postagem" name="nm_postagem" required style="width: 49em" value="" size=100 required>
   </div>
        </fieldset>
   
<fieldset class="grupo">

<div class="campo">
<label for=""> Data Inicial: </label> <br>
 <input type="date" class="dt_inicio" id="dt_inicio" min="2014-11-25" required style="height: 1.8em" name="dt_inicio" required>
</div>

<div class="campo">
<label for=""> Data Final: </label>
<br>
 <input type="date" class="dt_fim" id="dt_fim" required style="height: 1.8em" min="2014-11-25" name="dt_fim" required>
</div>

<div class="campo">
<label for="Categoria">Categoria</label></br>
<select class="nm_categoria" id="nm_categoria" name="nm_categoria" required title="Categoria:" required>
     <option value=""></option>
     <option value="Bar/Restaurante">Bar/Restaurante</option>
     <option value="Evento Cultural">Evento Cultural</option>
     <option value="Evento Esportivo">Evento Esportivo</option>
     <option value="Casa Noturna">Casa Noturna</option>
     <option value="Show">Show</option>
 </select>
 </div>

<div class="campo">
   <label for="Classificação_etária">Classificação Etária</label></br>
<INPUT TYPE="RADIO" NAME="nm_classificacao" class="nm_classificacao" ID="nm_classificacao" VALUE="Livre" required> livre
<INPUT TYPE="RADIO" NAME="nm_classificacao" class="nm_classificacao" ID="nm_classificacao" VALUE="18" required> +18
 </div>

 </fieldset>   
 
 

         <div class="campo">
           <label for="Preço">Preço</label> 
           
            <input type="double" placeholder="000.00" required style="height: 1.8em" title="Digite somente os números" class="vl_postagem" id="vl_postagem" name="vl_postagem" size="6" maxlength= "6" required> &nbsp; *Se o evento for de graça, deverá ser marcado &quot;0&quot;.
            
         
      </div>     
 

        <div class="campo">
            <label for="Descrição_evento">Descrição do Evento</label>
            <textarea rows="6" required spellcheck="true" style="width: 49em" class="ds_postagem" id="ds_postagem" name="ds_postagem" ></textarea required>
   </div>


<label for="imagem_evento">IMAGEM DO EVENTO</label>
<HR WIDTH=100% ALIGN=center NOSHADE>
</br>

<div class="campo">
<div id="imagem">
<input type="file" class="nm_imagem" id="nm_imagem" name="nm_imagem"  onchange="readURL(this);" required> </br>
<img src="imagens/image.png" alt="Escolha uma imagem:" name="img_upload" width="128" height="128" id="img_upload" align="right" right /></div>
</div>


<label for="endereco">ENDEREÇO</label>
<HR WIDTH=100% ALIGN=center NOSHADE>
</br>
<fieldset class="grupo">
<div class="campo">
<label for="cep">Cep</label>
<input type="text" class="cd_cep" id="cd_cep" name="cd_cep" style="width: 7em" maxlength= "8" required plack onblur="consultacep(this.value)" required>
</div>

 <div class="campo">
 <label for="logradouro">Rua</label>
 <input type="text" class="logradouro" id="logradouro" name="logradouro" required placeholder="Máximo 50 caracteres" required size="100" style="width: 40em" value="" required>
            </div>
</fieldset>

<fieldset class="grupo">
 <fieldset class="campo">
 <div class="Bairro">
 <label for="bairro">Bairro</label>
 <input type="text" class="bairro" id="bairro" name="bairro" required  required size="20" style="width: 10em" value="" required>
            </div>
 </fieldset>

<fieldset>
<fieldset class="campo">
<label for="Número">Número</label>
<input type="text" class="numero" id="numero" name="numero" required style="width: 5em" placeholder="" maxlength= "5"  value="" required>
 </fieldset>

</fieldset>


 <!--botão Cdastrar
<button type="submit" class="but" value="Enviar" >CADASTRAR</button>
 -->
 <input type="submit" class="but" value="Enviar">
 
 </form>

</div><!--fim conteudo do conteúdo1-->


</div><!--fim da div clear--> 
 
</div><!--fim conteudo-->

<div id="footer"><!--começo do rodapé-->

</div> <!--fim fim do rodapé-->

</div> <!--final da div site-->


</body>
</html>