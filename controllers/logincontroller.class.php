<?php
		if(!isset($_SESSION))
        {
            session_start();
        }
    class logincontroller
    {
        public function login()
        {  	
			$erro = false;
			$mensagem = "";
			if($_POST)
			{
				if(empty($_POST["email"]))
				{
					$erro = true;
				}
				if(empty($_POST["senha"]))
				{
					$erro = true;
				}
				if(!$erro)
				{
					//verificar no BD
					$usuario = new Usuario(email:$_POST["email"]);
					
					$usuarioDAO = new usuarioDAO();
					$retorno = $usuarioDAO->login($usuario);
					
					if(count($retorno) == 1)
					{
						//encontrou
						if(password_verify($_POST['senha'], $retorno[0]->senha))
						{
							$_SESSION["idusuario"] = $retorno[0]->id;
							$_SESSION["nome"] = $retorno[0]->nome;
							$_SESSION["email"] = $retorno[0]->email;
							$_SESSION["tel"] = $retorno[0]->telefone;
							$_SESSION["perfil"] = $retorno[0]->tipo_id;
							echo "logado";
							header("location:localhost:8000");
							die();
						}
					}
						//não encontrou
						$mensagem = "Verifique os dados informados";
				}
				
			}
            require_once "views/login.php";
        }
        public function logout()
		{
			$_SESSION = array();
			session_destroy();
			header("Location:localhost:8000");
			die();
		}
    }