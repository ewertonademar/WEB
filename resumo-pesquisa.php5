<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<?php include ("classes/conexao.php5");?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pesquisa - Map Point</title>
<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/grade-fluida.css" rel="stylesheet" type="text/css">
<link href="css/menu.css" rel="stylesheet" type="text/css">
<link href="css/estilo-pag-resumo-pesquisa.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="js\respond.min.js"></script>
</head>
<body>


<div class="gridContainer clearfix">
<div id='cssmenu'>
<ul>
   <li><a href='inicio_mapa.php5'><span>Página Inicial</span></a></li>
   <li  class='active has-sub'><a href='pesquisa.php5'><span>Pesquisa</span></a></li>
   <li><a href='Conheca_pg.html'><span>Conheça a Praia Grande</span></a></li>   
   <li><a href='Quem_somos.html'><span>Quem somos</span></a></li>
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
   <li><a href='Login.php'><span>Login</span></a></li>  
</ul>
</div><!--Fim div menu-->

	<div id="formPesquisa">  
    <form action="" method="post" name="form_busca"> 
    <input type="search" name="busca" id="busca"/>  
    <input type="submit" name="botao" id="botao" value=""/>
    
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
 <input type="radio" id="livre" name="faixaEtaria" value=""> Livre
  <input type="radio" id="gratuito" name="faixaEtaria" value=""> + 18 anos<br>

  <h4>Preço</h4>
  <input type="radio" id="gratuito" name="preco" value=""> Gratuito<br>
  <input type="radio" id="ate25" name="preco" value=""> Até R$ 25,00<br>
  <input type="radio" id="de26A50" name="preco" value=""> De R$ 26,00 até R$ 50,00<br>
  <input type="radio" id="de50A100" name="preco" value=""> De R$ 51,00 até R$ 100,00<br>
  <input type="radio" id="acimaDe100" name="preco" value=""> Acima de R$ 100,00<br>
  </form>
</div><!--FIM DIV MENU LATERAL-->

<div id="div-pai-postagens"> 

<!--
<div class="area-res-postagens">
<div class="titulo-postagem-resumo-pesquisa"> <a href="pesquisa.php5" target="_blank">Nome do evento</a>
</div><!--Div fim class titulo-postagem
<div id="div-pai-detalhes-basicos-postagem">
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon_endereco.png"> Av. Marechal Mallet, 340 - Canto do Forte - Praia Grande/SP</h3>
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon-calendario2.png"> 02 de novembro de 2014 - 18:00</h3>
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon-cifrao-3d.png">R$ 45,00 a R$ 150,00</h3>
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon-categoria.png"> Evento cultural</h3>
<h1><a href="#">Curtidas(45)</a><a href="pesquisa.php5" target="_blank">Comentários(9)</a></h1>
</div><!--Fim div detalhes  basicos postagem
<div class="imagem-da-postagem-resumo-postagem">
<img src="imagens/eventos-mix.jpg"/></div>
</div><!--FIM class AREA DE POSTAGENS-->

<!--<div class="area-res-postagens">
<div class="titulo-postagem-resumo-pesquisa"> <a href="pesquisa2.php5" target="_blank">Nome do evento</a>
</div><!--Div fim class titulo-postagem --
<div id="div-pai-detalhes-basicos-postagem">
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon_endereco.png"> Av. Marechal Mallet, 340 - Canto do Forte - Praia Grande/SP</h3>
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon-calendario2.png"> 02 de novembro de 2014 - 18:00</h3>
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon-cifrao-3d.png">R$ 45,00 a R$ 150,00</h3>
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon-categoria.png"> Evento esportivo</h3>
<h1><a href="#">Curtidas(45)</a><a href="pesquisa2.php5" target="_blank">Comentários(9)</a></h1>
</div><!--Fim div detalhes  basicos postagem
<div class="imagem-da-postagem-resumo-postagem">
<img src="imagens/eventos-mix2.jpg"/></div>
</div><!--FIM class AREA DE POSTAGENS-->

<!--<div class="area-res-postagens">
<div class="titulo-postagem-resumo-pesquisa"> <a href="#">Nome do evento</a>
</div>Div fim class titulo-postagem 
<div id="div-pai-detalhes-basicos-postagem">
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon_endereco.png"> Av. Marechal Mallet, 340 - Canto do Forte - Praia Grande/SP</h3>
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon-calendario2.png"> 02 de novembro de 2014 - 18:00</h3>
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon-cifrao-3d.png">Gratuito</h3>
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon-categoria.png"> Evento esportivo</h3>
<h1>Curtidas(45) | Comentários(9)</h1>
</div><!--Fim div detalhes  basicos postagem
<div class="imagem-da-postagem-resumo-postagem">
<img src="imagens/eventos-mix3.jpg"/></div>
</div><!--FIM class AREA DE POSTAGENS-->

<!--<div class="area-res-postagens">
<div class="titulo-postagem-resumo-pesquisa"> <a href="#">Nome do evento</a>
</div>Div fim class titulo-postagem 
<div id="div-pai-detalhes-basicos-postagem">
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon_endereco.png"> Av. Marechal Mallet, 340 - Canto do Forte - Praia Grande/SP</h3>
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon-calendario2.png"> 02 de novembro de 2014 - 18:00</h3>
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon-cifrao-3d.png">R$ 45,00 a R$ 150,00</h3>
<h3 class="detalhes-basicos-resumo-postagem">
<img src="imagens/icon-categoria.png"> Evento esportivo</h3>
<h1>Curtidas(45) | Comentários(9)</h1>
</div><!--Fim div detalhes  basicos postagem
<div class="imagem-da-postagem-resumo-postagem">
<img src="imagens/eventos-mix4.jpg"/></div>
</div><!--FIM class AREA DE POSTAGENS-->


<?php
			if(!isset($_POST['botao'])) {//O que aparecerá ao carregar a página antes da pesquisa ser solicitada:
		echo "<div class='area-res-postagens'>
<div class='titulo-postagem-resumo-pesquisa'> <a href='pesquisa.php5' target='_blank'>Exemplo de vento</a>
</div><!--Div fim class titulo-postagem-->
<div id='div-pai-detalhes-basicos-postagem'><h5>Descrição do evento.Descrição do evento.
Descrição do evento.Descrição do evento.Descrição do evento.Descrição do evento.Descrição do evento.</h5>
<h3 class='detalhes-basicos-resumo-postage'>
<img src='imagens/icon_endereco.png'> Av. Marechal Mallet, 340 - Canto do Forte - Praia Grande/SP</h3>
<h3 class='detalhes-basicos-resumo-postagem'>
<img src='imagens/icon-calendario2.png'> 02 de novembro de 2014 - 18:00</h3>
<h3 class='detalhes-basicos-resumo-postagem'>
<img src='imagens/icon-cifrao-3d.png'>R$ 45,00 a R$ 150,00</h3>
<h3 class='detalhes-basicos-resumo-postagem'>
<img src='imagens/icon-categoria.png'> Evento cultural</h3>
</div><!--Fim div detalhes  basicos postagem-->
<div class='imagem-da-postagem-resumo-postagem'>
<img src='imagens/eventos-mix2.jpg'/></div>
</div><!--FIM class AREA DE POSTAGENS-->";
		}

		if(!isset($_POST['botao']) && isset($_POST['busca'])) {//Algoritmo de pesquisa
		header("Location: ");
		exit;
		}
	if(isset($_POST['botao']) && isset($_POST['busca'])) {
		$busca = $_POST['busca'];
		
		if($busca == "" or $busca == " "){
			echo "<center><strong>Digite algo para busca!</strong></center>";
			}
		else{
		$busca_dividida = explode(' ',$busca);
		$quant = count($busca_dividida);
		$idMostrado = array("");
		
		for($i=0; $i<$quant;$i++){
			$pesquisa = $busca_dividida[$i];
			
			$sql = mysql_query("SELECT * FROM tb_postagem WHERE nm_postagem LIKE '%$pesquisa%'");
			$quant_campos = mysql_num_rows($sql);
			if($quant_campos == 0){
			echo "<center><strong>Nenhum resultado encontrado!</strong></center>";
			}
			else{
			while($linha = mysql_fetch_array($sql)){
				$cd_postagem = $linha['cd_postagem'];
				$titulo = utf8_encode($linha['nm_postagem']);
				$conteudo = utf8_encode($linha['ds_postagem']);
				$url_imagem = $linha['nm_imagem'];
				if(!array_search($cd_postagem, $idMostrado)){
				echo "
					<div class='area-res-postagens'>
						<div class='titulo-postagem-resumo-pesquisa'><a href='pesquisa.php5' target='_blank'>".$titulo."</a></div>
						<div id='div-pai-detalhes-basicos-postagem'><h5>".$conteudo."</h5>
						<h3 class='detalhes-basicos-resumo-postagem'>
<img src='imagens/icon_endereco.png'> Av. Marechal Mallet, 340 - Canto do Forte - Praia Grande/SP</h3>
<h3 class='detalhes-basicos-resumo-postagem'>
<img src='imagens/icon-calendario2.png'> 02 de novembro de 2014 - 18:00</h3>
<h3 class='detalhes-basicos-resumo-postagem'>
<img src='imagens/icon-cifrao-3d.png'>R$ 45,00 a R$ 150,00</h3>
<h3 class='detalhes-basicos-resumo-postagem'>
<img src='imagens/icon-categoria.png'> Evento cultural</h3>
</div>
<div class='imagem-da-postagem-resumo-postagem'>
<img src='".$url_imagem."'/></div>

</div>
						
					";	
				array_push($idMostrado, $cd_postagem);
							
							}//fim else verifica se não houve resultados na pesq
						}//fim while
					}//fim else verificar campo de pesq em branco em branco
					}//fim for
			}//else campo vazio
		}//if botão pressionado
?>

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
