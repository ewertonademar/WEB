<?php
//Starts no fluxo do php
ob_start();
session_start();

//Variáveis globais
$home="http://localhost/MapPoint";
$title="Map Point - Área administrativa";
$startaction="";
$msg="";

if(isset($_GET["acao"])){ //inicio da validação do formulário
 $acao=$_GET["acao"];
 $startaction=1;
}

//Include das classes
include("classes/DB.class.php");
include("classes/Cadastro.class.php");
include("classes/Login.class.php");



//Conexão com o Banco de Dados

$conectar=new DB;
$conectar=$conectar->conectar();

//Método de cadastro
if($startaction == 1 && $acao == "cadastrar"){
		$nm_empresa=$_POST["nm_empresa"];
		$cd_cpf=$_POST["cd_cpf"];
		$ds_email=$_POST["ds_email"];
		$ds_senha=$_POST["ds_senha"];		
		
		if(empty($nm_empresa) || empty($cd_cpf) || empty($ds_email) || empty($ds_senha)){
			$msg="Preencha todos os campos!";
		}
		//Todos os campos preenchidos
		else{
			//Email válido
			if(filter_var($ds_email,FILTER_VALIDATE_EMAIL)){
				//Senha inválida
				if(strlen($ds_senha) < 8){
					$msg="As senhas devem ter no mínimo oito caracteres!";
				}
				//Senha válida
				else{
					//Executa a classe de cadastro
					$conectar=new Cadastro;
					echo"<div class=\"flash\">";
					$conectar=$conectar->cadastrar($nm_empresa, $cd_cpf, $ds_email, $ds_senha); 
					echo"</div>";
				}
			}
			//E-mail inválido
			else{
				$msg="Digite seu e-mail corretamente!";
			}
		}
}


//Método de login
if($startaction==1 && $acao=="logar"){
	 //Dados
	 $ds_email=addslashes($_POST["ds_email"]);
	 $ds_senha=addslashes($_POST["ds_senha"]);
	 
	 if(empty($ds_email)||empty($ds_senha)){
		 $msg="Preencha todos os campos para acessar!";
	 }
	 else{
		 if(!filter_var($ds_email,FILTER_VALIDATE_EMAIL)){
			 $msg="Digite seu email corretamente!";
		 }else{
			 //Executa select pelo usuário
			 $login=new Login;
			 echo"<div class=\"flash\">";
			 $login=$login->logar($ds_email, $ds_senha);
			 echo"</div>";
 }
	}}

//Método para sair
if($startaction==1){
	if($acao=="logout"){
	setcookie("logado","");
	unset($_SESSION["ds_email"],$_SESSION["ds_senha"],$_SESSION["cd_nivel"]);
}
}


//Checar usuário
if(isset($_SESSION["ds_email"])&&isset($_SESSION["ds_senha"])){
 $logado=1;
 $cd_nivel=$_SESSION["cd_nivel"];	
}

//Método para aprovar usuário
if($startaction==1){
	if($acao=="aprovar"){
		if($cd_nivel==2){
			if(isset($_GET["cd_empresa"])){
				$cd_empresa=$_GET["cd_empresa"];
				$query=mysql_query("UPDATE tb_empresa SET cd_status='1' WHERE cd_empresa='$cd_empresa'");
			}
		}
	}
}

//Método para bloquear usuário
if($startaction==1){
	if($acao=="bloquear"){
		if($cd_nivel==2){
			if(isset($_GET["cd_empresa"])){
				$cd_empresa=$_GET["cd_empresa"];
				$query=mysql_query("UPDATE tb_empresa SET cd_status='0' WHERE cd_empresa='$cd_empresa'");
			}
		}
	}
}


//Variáveis de estilo
if(empty($msg)){
	$display="display:none;";
}
else {
	$display="display:block;";
}
 

	?>