

function initialize() {// Inicio do metodo que inicia o mapa
    var latlng = new google.maps.LatLng(-24.0369462, -46.5020322);
    var options = {
        zoom: 13,
        center: latlng,
		
		 zoomControlOptions: {
                style: google.maps.ZoomControlStyle.LARGE,
            },
            disableDoubleClickZoom: true,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            },
            scaleControl: true,
            scrollwheel: true,
            panControl: true,
            streetViewControl: true,
            draggable : true,
            overviewMapControl: true,
            overviewMapControlOptions: {
                opened: true,
            },
          		
		
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
 
    map = new google.maps.Map(document.getElementById("map_canvas"), options);

   infoWindow = new google.maps.InfoWindow();
   google.maps.event.addListener(map, 'click', function() {
      infoWindow.close(); });
	displayMarkers();
}// Fim do metodo que inicia o mapa
google.maps.event.addDomListener(window, 'load', initialize);



 /*
function codificarEndereco() { // Inicio do metodo que codifica endereço e cria marcador
var address = document.getElementById('enderecoParaCodificacao').value;
	var geocoder = new google.maps.Geocoder();
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
		  animation: google.maps.Animation.DROP,//Anima o marcador
          position: results[0].geometry.location

      });


	} else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });


}

  
 *//*
var enderecosStrings = [
['Teste',-23.5711520,-46.6442116],
['hrml:<p>Text 2</p><p>Rua Augusta, 10, Sao Paulo, SP</p>',-23.52342423,-46.5675616],
['html:<p>Text 3</p><p>Rua Ipes, 500, Suzano, SP</p>',-23.4562340,-46.87972116]
];
//['Marechal', -24.0070648, -46.4067234],
//['Costa e Silva', -24.0065759, -46.4135611]

function setMarkers(map, locations) {
 var image = {
  url: 'images/beachflag.png',
    size: new google.maps.Size(20, 32),
    origin: new google.maps.Point(0,0),
    
    anchor: new google.maps.Point(0, 32)
  };
  var shape = {
      coords: [1, 1, 1, 20, 18, 20, 18 , 1],
      type: 'poly'
  };
  for (var i = 0; i < locations.length; i++) {
    var beach = locations[i];
    var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
    var marker = new google.maps.Marker({
        position: myLatLng,
		 animation: google.maps.Animation.DROP,
        map: map
      /*  icon: image,
        shape: shape,
        title: beach[0],
        zIndex: beach[3]
  

    });




google.maps.event.addDomListener(window, 'load', initialize);


  }}
  */
    
	var customIcons = {
  1: {
    icon: 'imagens/icon.png'
  },
  2: {
    icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png'
  },
    3: {
    icon:'imagens/prancha.png'
  },
    4: {
    icon:'imagens/palco.png'
  }
};	
	
 var markersData = [
  {
      lat: -24.0053651,
      lng: -46.4080775,
      nomeEvento: "<a href='pesquisa2.php5' target='_blank'>Festa Black and White - Open Bar</a>",
      dataHorario:"29/12/2014 - 22:00h",
	  imagemEvento: "<img src='imagens/rock.jpg' height='83' width='115'>",	  
      descricao: "Entrada R$50,00 homens e R$ 35,00 mulheres. Open bar de cerveja, vod... <a href='pesquisa2.php5'>+Mais detalhes</a>",
	  categoriaEvento: 1,
      codPostal: "Avenida Marechal Mallet, 736 - Canto do Forte, 11700-400 Praia Grande</br>Santo Canto Bar" 
   },
   {
      lat: -24.0467392,
      lng: -46.529276,
      nomeEvento: "<a href='pesquisa2.php5' target='_blank'>Festa Black and White - Open Bar</a>",
      dataHorario:"29/12/2014 - 22:00h",
	  imagemEvento: "<img src='imagens/blackWhite.jpg' height='83' width='115'>",	  
      descricao: "Entrada R$50,00 homens e R$ 35,00 mulheres. Open bar de cerveja, vod... <a href='pesquisa2.php5'>+Mais detalhes</a>",
	  categoriaEvento: 1,
      codPostal: "Avenida Presidente Kennedy 13000 - Vila Caiçara - Praia Grande</br>Aldeia Caiçara" 
   },
      {
      lat: -24.015463,
      lng: -46.4257846,
      nomeEvento: "<a href='pesquisa2.php5' target='_blank'>Show de Verão 2015</a>",
      dataHorario:"25 de Dez a 10 de Jan/15",
	  imagemEvento: "<img src='imagens/show.png' height='83' width='115'>",	  
      descricao: "Diversos cantores para agitar seu verão...<a href='pesquisa2.php5'>+Mais detalhes</a>",
  	  categoriaEvento: 4,
      codPostal: "Praia da Guilhermina, Praia Grande, São Paulo</br>Prefeitura de Praia Grande" 
   },
   {
      lat: -24.0170296,
      lng: -46.4362697,
      nomeEvento: "<a href='pesquisa.php5' target='_blank'>Campeonato de surf</a>",
      dataHorario:"25,26 e 27 de Nov/14-10:30h",
	  imagemEvento: "<img src='imagens/surf.jpg' height='83' width='115'>",	  
      descricao: "Campeonato de surf categoria juvenil e ad...<a href='pesquisa.php5'>+Mais detalhes</a>",
  	  categoriaEvento: 3,
      codPostal: "Av. Pres. Castelo Branco, 9 - Vila Guilhermina, 11702-200 - Praia Grande</br>Quiosque 3" 
   },
   {
      lat: -24.025048,
      lng: -46.4770603,
      nomeEvento: "<a href='pesquisa2.php5' target='_blank'>Pagode ao vivo e churrasco</a>",
      dataHorario:"22/12/2014 - 00:00h",
      imagemEvento: "<img src='imagens/pagodeChurrasco.jpg' height='83' width='115'>",	  
      descricao: "Pagode ao vivo com o grupo fulanos de tal. <a href='pesquisa2.php5'>+Mais detalhes</a>",
  	  categoriaEvento: 1,
      codPostal: "Avenida Presidente Kennedy 13000 - Vila Caiçara - Praia Grande</br>Panificadora Santa Teresinha" ,
   } 
]; 

function displayMarkers(){

   var bounds = new google.maps.LatLngBounds();

   for (var i = 0; i < markersData.length; i++){
      var latlng = new google.maps.LatLng(markersData[i].lat, markersData[i].lng);
      var nomeEvento = markersData[i].nomeEvento;
      var dataHorario = markersData[i].dataHorario;
	  var imagemEvento = markersData[i].imagemEvento;
      var descricao = markersData[i].descricao;
	  var categoriaEvento = markersData[i].categoriaEvento;
      var codPostal = markersData[i].codPostal;

      createMarker(latlng, nomeEvento, dataHorario, imagemEvento, descricao, codPostal, categoriaEvento);
      bounds.extend(latlng); 
   }

   map.fitBounds(bounds);
}

// Função que cria os marcadores e define o conteúdo de cada Info Window.
function createMarker(latlng, nomeEvento, dataHorario, imagemEvento, descricao, codPostal, categoriaEvento){
	var icon = customIcons[categoriaEvento] || {};
   var marker = new google.maps.Marker({
      map: map,
	   animation: google.maps.Animation.DROP,//Anima o marcador
      position: latlng,
      title: nomeEvento,
	  icon :icon.icon
   });

   google.maps.event.addListener(marker, 'click', function() {
      
	  var conteudo = '<div id="iw-container">' +
                    '<div class="iw-title">'+nomeEvento+'</div>' +
                   '<div class="iw-content">' +
                      '<div class="iw-subTitle">'+dataHorario+'</div>' +
					 imagemEvento +
                      '<p>'+descricao+'</p>' +
                      '<h5>Endereço:'+codPostal+categoriaEvento+'</h5>'+
                    '</div>' +
                  '</div>';
      infoWindow.setContent(conteudo);
      infoWindow.open(map, marker);
   });
}
   



   



