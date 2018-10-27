<?php 

header('Content-Type: text/html; charset=utf-8');
$banco = "db_mappointsenha";
$usuario = "root";
$senha = "";
$hostname = "localhost";
$conn = mysql_connect($hostname,$usuario,$senha); 
mysql_select_db($banco,$conn) or die( "Não foi possível conectar ao banco MySQL");


$nm_postagem=utf8_decode($_POST ["nm_postagem"]); 
$dt_inicio=utf8_decode($_POST ["dt_inicio"]);
$dt_fim=utf8_decode($_POST ["dt_fim"]); 
$nm_categoria=utf8_decode($_POST ["nm_categoria"]); 
$vl_postagem=utf8_decode($_POST ["vl_postagem"]); 
$nm_classificacao=utf8_decode($_POST ["nm_classificacao"]); 
$ds_postagem=utf8_decode($_POST ["ds_postagem"]);
$cd_cep=utf8_decode($_POST ["cd_cep"]); 
$nm_endereco=utf8_decode($_POST ["logradouro"]); 
$bairro=utf8_decode($_POST ["bairro"]); 
$numero=utf8_decode($_POST ["numero"]);

// Passando dt_inicio do text box "DD/MM/AAAA" para "AAAA-MM-DD"
    function gravaData ($dt_inicio) {
    if ($dt_inicio != '') {
    return (substr($dt_inicio,3,2).'/'.substr($dt_inicio,0,2).'/'.substr($dt_inicio,6,4));
    }
    else { return ''; }
    }

// Passando dt_final do text box "DD/MM/AAAA" para "AAAA-MM-DD"
    function gravaData2 ($dt_final) {
    if ($dt_final != '') {
    return (substr($dt_final,3,2).'/'.substr($dt_final,0,2).'/'.substr($dt_final,6,4));
    }
    else { return ''; }
    }



// A imagem
$imagem = isset( $_FILES['nm_imagem'] ) ? $_FILES['nm_imagem'] : null;

// Verifica se existe imagem
if ( empty( $imagem ) ) {
	// Mensagem para o usuário
	echo 'Envie sua foto.';
	
	// Mata o script
	exit;
}

// Dados da imagem
$imagem_tmp   = $imagem['tmp_name'];
$nm_imagem  = $imagem['name'];
$diretorio    = '../imagens/';
$envia_imagem = $diretorio . $nm_imagem;

// Envia a foto
if ( ! move_uploaded_file( $imagem_tmp , $envia_imagem ) ) {
	// Mensagem para o usuário
	echo 'Erro ao enviar foto.';
	
	// Mata o script
	exit;
}



do{
	$query = "SELECT nm_bairro FROM tb_bairro WHERE nm_bairro = '$bairro';"; //Verifica se o bairro já está cadastrado no banco
	$consulta=mysql_query($query,$conn);
	$resultadoSelect = mysql_fetch_assoc($consulta);
	$resultadoSelect = $resultadoSelect["nm_bairro"]; 
	
		if($resultadoSelect != $bairro){
				$query = "INSERT INTO tb_bairro (nm_bairro, cd_cidade) VALUES ('$bairro',1);";
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
$query = "INSERT INTO tb_endereco(nm_endereco,qt_numero,cd_cep,cd_bairro) VALUES('$nm_endereco','$numero','$cd_cep','$bairroCadastro');";
$_res = mysql_query($query, $conn);
if($_res===FALSE){echo "Erro na inclusão do registro".mysql_error();}


	$query = "SELECT cd_endereco FROM tb_endereco WHERE cd_cep = '$cd_cep' and qt_numero = '$numero';"; //Verifica se o end já está cadastrado no banco
	$consulta=mysql_query($query,$conn);
	$resultadoSelect = mysql_fetch_assoc($consulta);
	$resultadoSelect = $resultadoSelect["cd_endereco"]; 

$query = "SELECT cd_empresa FROM tb_empresa WHERE cd_empresa = 1;"; //Verifica se o end já está cadastrado no banco
	$consulta=mysql_query($query,$conn);
	$resultadoSelect2 = mysql_fetch_assoc($consulta);
	$resultadoSelect2 = $resultadoSelect2["cd_empresa"];

$urlimagem = "imagens/".$nm_imagem;

$query = "INSERT INTO tb_postagem(nm_postagem, dt_inicio, dt_fim, nm_categoria, vl_postagem, nm_classificacao, ds_postagem, nm_imagem, cd_endereco, cd_empresa) VALUES ('$nm_postagem', '$dt_inicio', '$dt_fim', '$nm_categoria', '$vl_postagem', '$nm_classificacao', '$ds_postagem', '$urlimagem', '$resultadoSelect', $resultadoSelect2 );";
$_res = mysql_query($query, $conn);
/*if($_res===FALSE){echo "Erro na inclusão do registro".mysql_error();}*/

echo "Cadastro realizado com sucesso!";
