<?php
	class Login{
		public function logar($ds_email, $ds_senha){
			$buscar=mysql_query("SELECT * FROM tb_empresa WHERE ds_email='$ds_email' AND ds_senha='$ds_senha' LIMIT 1");
			if(mysql_num_rows($buscar) == 1){
				$dados=mysql_fetch_array($buscar);
				if($dados["cd_status"] == 1){
					$_SESSION["nm_empresa"]=$dados["nm_empresa"];
					$_SESSION["ds_email"]=$dados["ds_email"];
					$_SESSION["ds_senha"]=$dados["ds_senha"];
					$_SESSION["cd_nivel"]=$dados["cd_nivel"];
					setcookie("logado",1);
					$log=1;
				}else{
					$flash="Seu cadastro ainda não foi aprovado por nossos administradores. Por favor, aguardar.";
				}
			}
				if(isset($log)){
					$emaild=$_SESSION["nm_empresa"];
                    $flash="Olá $emaild! Bem-vindo ao Map Point.";
				}else{
					if(empty($flash)){
					$flash="Ops! Digite seu e-mail e sua senha corretamente!";
					}
				}
				echo $flash;
		}
	
	}

?>
