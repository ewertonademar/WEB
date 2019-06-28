<!DOCTYPE html> <!--Declara a aplicação como Html5 -->
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link href="css/menu-inicio.css" rel="stylesheet" type="text/css">
    <link href="css/grade-fluida.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCAZ_ZB6Kn5sothSuLTzBfLIXHevYgE4JY"></script>
   <script type="text/javascript" src="js/mapa.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
  </head>
    
  <body onload="initialize()">
  <div class="gridContainer clearfix">
  <div id="logo-tela-inicio"><img src="imagens/logo.png"/></div><!--Fim topo -->
  
  <div id='cssmenu'>
<ul>
   <li class='active has-sub'><a href='inicio_mapa.php5'><span>Página Inicial</span></a></li>
   <li><a href='resumo-pesquisa.php5'><span>Pesquisa </span></a></li>
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
         </a></li>         
      </ul>
   </li>
   <li><a href='Login.php'><span>Login</span></a></li>   
</ul>
</div><!--Fim div menu-->


    <div id="map_canvas"></div>
    
    </div><!--Fim div gridContainer-->
  </body>
</html>