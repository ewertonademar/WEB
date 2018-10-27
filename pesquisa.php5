<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pesquisa - Map Point</title>
<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/grade-fluida.css" rel="stylesheet" type="text/css">
<link href="css/menu.css" rel="stylesheet" type="text/css">

<!-- 
Para saber mais sobre os comentários condicionais sobre as tags html na parte superior do arquivo:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Se você estiver usando a compilação personalizada do modernizr (http://www.modernizr.com/), faça o seguinte:
* insira o link para o seu js aqui
* remova o link abaixo para o html5shiv
* adicione a classe "no-js" às tags html na parte superior
* você também pode remover o link para respond.min.js se tiver incluído o MQ Polyfill na sua compilação do modernizr 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="js/respond.min.js"></script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=305671712969106&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="gridContainer clearfix">

<div id='cssmenu'>
<ul>
   <li><a href='inicio_mapa.php5'><span>Página Inicial</span></a></li>
   <li  class='active has-sub'><a href='resumo-pesquisa.php5'><span>Pesquisa</span></a></li>
   <li><a href='Conheca_pg.html'><span>Conheça a Praia Grande</span></a></li>   
   <li><a href='#'><span>Quem somos</span></a></li>
   <li id="destaques"><a href='#'><span>Destaques</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Destaque 1
         <p></p>
         <img src="imagens/eventos-mix3.jpg" id="imagem"></span>
         </a></li>
         <li class='has-sub'><a href='#'><span>Destaque 2
         <p></p>
         <img src="imagens/eventos-mix.jpg" id="imagem">
         </span></a></li>
      </ul>
   </li>
   <li><a href='#'><span>Login</span></a></li>      
</ul>
</div><!--Fim div menu-->


	<div id="formPesquisa">  
    <form> <input type="search">  
    <input type="button" name="pesquisar"/>
    
    </form>
  <!--  <img src="_images/btnPesquisa.jpg"> -->
	</div><!--Fim div formPesquisa -->

  <div id="Topo"><img src="imagens/logo.png"/>
 </div><!--Fim topo -->
  
<div id="pai">  
  <div id="Quadro-de-filtros"><h3>Filtre sua pesquisa</h3>
  <form>
  <h4>Data inicio</h4>
  <input type="date" name="inicio">
  
   <h4>Data fim</h4>
  <input type="date" name="fim">
  
  <h4>Categorias</h4>

<input type="checkbox" id="eventosEsportivos" name="categoria" value="1"> Eventos esportivos<br>
<input type="checkbox" id="eventosCulturais" name="categoria" value="2"> Eventos culturais<br>
<input type="checkbox" id="baladas" name="categoria" value="3"> Baladas<br>
<input type="checkbox" id="eventosGastronômicos" name="categoria" value="4"> Eventos gastronômicos<br>
<input type="checkbox" id="bares" name="bares" value="5"> Bares<br>

<h4>Faixa etaria</h4>
 <input type="radio" id="livre" name="faixaEtaria" value="Bike"> Livre
  <input type="radio" id="gratuito" name="faixaEtaria" value="maio18"> + 18 anos<br>

  <h4>Preço</h4>
  <input type="radio" id="gratuito" name="preco" value="Bike"> Gratuito<br>
  <input type="radio" id="ate25" name="preco" value="Bike"> Até R$ 25,00<br>
  <input type="radio" id="de26A50" name="preco" value="Bike"> De R$ 26,00 até R$ 50,00<br>
  <input type="radio" id="de50A100" name="preco" value="Bike"> De R$ 51,00 até R$ 100,00<br>
  <input type="radio" id="acimaDe100" name="preco" value="Bike"> Acima de R$ 100,00<br>
</form>

</div><!--FIM DIV MENU LATERAL-->



<div id="div-pai-postagens"> 

<div class="area-postagens">

<div class="titulo-postagem"> <a href="#">Campeonato de surf</a>
</div><!--Div fim class titulo-postagem -->

<div id="div-pai-detalhes-basicos-postagem">
<h3 class="detalhes-basicos-postagem">
<img src="imagens/icon_endereco.png"> Praia da Guilhermina - Praia Grande/SP</h3>


<h3 class="detalhes-basicos-postagem">
<img src="imagens/icon-calendario2.png"> 25, 26, 27 de dezembro-14 - 10:00h |<img src="imagens/icon-cifrao-3d.png">Gratuito 
<img src="imagens/icon-categoria.png"> Evento esportivo</h3>

<h3 class="detalhes-basicos-postagem">
</h3>


</div><!--Fim div detalhes  basicos postagem-->

<div class="imagem-da-postagem">
<img src="imagens/surf.jpg"/></div>
<div class="descricao-evento" style="font-size:16px" >Campeonato de surf categoria juvenil e adulto. Para participar os atletas deverão solicitar a ficha de cadastro para o e-mail quiosque3@outlook.com. As etapas do campeonato acontecerá nos dias 25, 26 e 27 de novembro.	</div>

<div class="fb-comments" data-href="http://localhost/Site_vers%C3%A3o1.7.0/pesquisa.html" data-width="620" data-numposts="5" data-colorscheme="light"></div>


</div><!--FIM class AREA DE POSTAGENS-->



</div><!--FIM DIV PAI POSTAGENS-->
</div><!--FIM DIV PAI-->


<div id="div-pai-propagandas">
<div class="propagandas"><img src="imagens/propaganda-pg.jpg"/></div><!--FIM DIV AREA DE PROPAGANDAS-->
<div class="propagandas"><img src="imagens/propaganda-pg.jpg"/></div><!--FIM DIV AREA DE PROPAGANDAS-->
<div class="propagandas"><img src="imagens/propaganda-pg.jpg"/></div><!--FIM DIV AREA DE PROPAGANDAS-->
</div>

  
  
  


</div>
</body>
</html>
