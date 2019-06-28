<?php

header('Content-Type: text/html; charset=utf-8');
$banco = "db_mappointsenha";
$usuario = "root";
$senha = "";
$hostname = "localhost";
$conn = mysql_connect($hostname,$usuario,$senha); 
mysql_select_db($banco,$conn) or die( "Não foi possível conectar ao banco MySQL");

$nomeempresa=utf8_decode($_POST ["nomeempresa"]); //nm_empresa
$cpf=utf8_decode($_POST ["cpf"]); //cd_cpf
/* $cnpj=utf8_decode($_POST ["cnpj"]); //cd_cnpj */
$email=utf8_decode($_POST ["email"]); //ds_email
$senha=utf8_decode($_POST ["senha"]); //ds_senha
$cep=utf8_decode($_POST ["cep"]); //cd_cep
$logradouro=utf8_decode($_POST ["logradouro"]);// nm_endereco
$bairro=utf8_decode($_POST ["bairro"]); //nm_bairro
$numero=utf8_decode($_POST ["numero"]); //qt_numero
$complemento=utf8_decode($_POST ["complemento"]); //nm_complemento
$telefonefixo=utf8_decode($_POST ["telefonefixo"]); // cd_telefonefixo
$telefonecelular=utf8_decode($_POST ["telefonecelular"]); // cd_telefonecelular


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

/* -------------------------------------- */ 
$query = "INSERT INTO tb_endereco(nm_endereco,qt_numero,cd_cep,nm_complemento,cd_bairro) VALUES ('$logradouro','$numero','$cep','$complemento','$bairroCadastro');";
$_res = mysql_query($query, $conn);
if($_res===FALSE){echo "Erro na inclusão do registro".mysql_error();}


	$query = "SELECT cd_endereco FROM tb_endereco WHERE cd_cep = '$cep' and qt_numero = '$numero';"; //Verifica se o end já está cadastrado no banco
	$consulta=mysql_query($query,$conn);
	$resultadoSelect = mysql_fetch_assoc($consulta);
	$resultadoSelect = $resultadoSelect["cd_endereco"]; 

$query = "INSERT INTO tb_empresa(nm_empresa, cd_cpf, ds_email, ds_senha, cd_nivel, cd_status, cd_endereco) VALUES ('$nomeempresa','$cpf','$email','$senha', '1', '0', '$resultadoSelect');";
$_res = mysql_query($query, $conn);
/*if($_res===FALSE){echo "Erro na inclusão do registro".mysql_error();}*/

$query = "SELECT cd_empresa FROM tb_empresa WHERE cd_cpf = '$cpf' and ds_email = '$email' ;"; //Verifica se o end já está cadastrado no banco
	$consulta=mysql_query($query,$conn);
	$resultadoSelect = mysql_fetch_assoc($consulta);
	$resultadoSelect = $resultadoSelect["cd_empresa"];

$query = "INSERT INTO tb_contato(cd_telefonefixo, cd_telefonecelular, cd_empresa) VALUES ('$telefonefixo','$telefonecelular', '$resultadoSelect');";
$_res = mysql_query($query, $conn);
if($_res===FALSE){echo "Erro na inclusão do registro".mysql_error();}


echo "<div style='width:400px; height:200px; font-size:18px; margin:0 auto; margin-top:50px; background-color:#CCC;'>Cadastro realizado com sucesso!</br>
<a href='file:///C|/Program Files (x86)/EasyPHP-DevServer-14.1VC9/data/localweb/MapPoint/Login.php'><button style='	background-color:#f2f2f2;
    border: 2px solid #09F;
	font-size: 17px;
    padding:10px;
	padding-left:20px;
	padding-right:20px;	
	margin-left: 100px;
	margin-top: 40px;
'>LOGIN</button></div>";

?>