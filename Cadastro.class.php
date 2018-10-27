<?php
	class Cadastro{
		public function cadastrar($nm_empresa,$cd_cpf,$ds_email,$ds_senha){
			
			$nm_empresa=ucwords(strtolower($nm_empresa));
			
			 
			
			//Inserindo no db
			$validaremail=mysql_query("SELECT * FROM tb_empresa WHERE ds_email='$ds_email'");
			$contar=mysql_num_rows($validaremail);
			if($contar==0){			
			$insert=mysql_query("INSERT INTO tb_empresa(nm_empresa, cd_cpf, ds_email, ds_senha, nivel, cd_status)VALUES('$nm_empresa','$cd_cpf','$ds_email','$ds_senha',1,0)");}
			else{
				$flash="Impossível realizar o cadastro. O email utilizado já está em uso.";
			}
			if(isset($insert)){
				$flash="Cadastro realizado com êxito. Aguarde a sua aprovação!";
			}else{
				if(empty($flash)){
					$flash="Não foi possível realizar o seu cadastro. Tente novamente";
				} 
			}
			
			//Retorno para o user
			echo $flash;
		
		}
	}



?>