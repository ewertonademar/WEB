<?php 
include ("geocodificarEndereco.php5");
//include ("criarXmlGeocod.php5");
include ("conexao.php5");


/*
header('Content-Type: text/html; charset=utf-8');
$banco = "db_mapPoint";
$usuario = "root";
$senha = "";
$hostname = "localhost";
$conn = mysql_connect($hostname,$usuario,$senha); 
mysql_select_db($banco,$conn) or die( "Não foi possível conectar ao banco MySQL");*/


$cep=utf8_decode($_POST ["cep"]); //cd_cep
$logradouro=utf8_decode($_POST ["logradouro"]);// nm_endereco
$bairro=utf8_decode($_POST ["bairro"]); //nm_bairro
$numero=utf8_decode($_POST ["numero"]); //qt_numero
$complemento=utf8_decode($_POST ["complemento"]); //nm_complemento
/*
$cep=$_POST ["cep"]; //cd_cep
$logradouro=$_POST ["logradouro"];// nm_endereco
$bairro=$_POST ["bairro"]; //nm_bairro
$numero=$_POST ["numero"]; //qt_numero
$complemento=$_POST ["complemento"]; //nm_complemento
*/

do{
	$query = "SELECT nm_bairro FROM tb_bairro WHERE nm_bairro = '$bairro';"; //Verifica se o bairro já está cadastrado no banco
	$consulta=mysql_query($query,$conn);
	$resultadoSelect = mysql_fetch_assoc($consulta);
	$resultadoSelect = $resultadoSelect["nm_bairro"]; 
	
		if($resultadoSelect != $bairro){
				$query = "INSERT INTO tb_bairro (nm_bairro,cd_cidade) VALUES ('$bairro',1);";
				$_res = mysql_query($query, $conn);
				if($_res===FALSE){echo "Erro na inclusão do registro".mysql_error();}
		}
		else if($resultadoSelect==$bairro)
			{
			$query = "SELECT cd_bairro FROM tb_bairro WHERE nm_bairro = '$bairro';";
			$consulta=mysql_query($query,$conn);
			$bairroCadastro = mysql_fetch_assoc($consulta);
			$bairroCadastro = $bairroCadastro["cd_bairro"]; 
			}
}while($resultadoSelect != $bairro);

$query = "INSERT INTO tb_endereco (nm_endereco,qt_numero,cd_cep,nm_complemento,cd_bairro) VALUES ('$logradouro','$numero','$cep','$complemento','$bairroCadastro');";
$_res = mysql_query($query, $conn);
if($_res===FALSE){echo "Erro na inclusão do registro".mysql_error();}

//Prepara a variavel com o endereco completo para ser repassada à API do Google Maps
//Exemplo:Av.+Mal.+Mallet,+1229+-+Canto+do+Forte,+Praia+Grande+-+SP,+11700-400
$address = urlencode($logradouro);
$address .= urlencode(" ");
$address .= urlencode($numero);
$address .= urlencode(" ");
$address .= urlencode($bairro);
$address .= urlencode(" Praia Grande SP");

$loc = geocoder::getLocation($address);//Chama o metodo geocoder dentro em geocodificarEndereco.php5 informando o end completo
$latitude= $loc['lat'];
$longitude= $loc['lng'];

/*
$nm_marcador
	$query = "INSERT INTO tb_marcador (nm_marcador,ds_endereco,lat,lng,cd_categoria,cd_postagem) VALUES (,1);";
	$_res = mysql_query($query, $conn);
	if($_res===FALSE){echo "Erro na inclusão do registro".mysql_error();}*/





echo "Latitude: $latitude - Longitude: $longitude - Endereço: $address</br>";	



?>
