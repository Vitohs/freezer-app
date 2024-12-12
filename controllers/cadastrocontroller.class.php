<?php
	if(!isset($_SESSION))
	{
		session_start();
	}
    class cadastrocontroller
    {
        public function cadastro()
        {
            if($_POST)
			{
                $erro = false;
				if(empty($_POST["nome"]))
				{
					$erro = true;
				}
				if(empty($_POST["email"]))
				{
					$erro = true;
				}
				else
				{
					$usuario = new Usuario(email:$_POST["email"]);
					$usuarioDAO = new UsuarioDAO();
					$retorno = $usuarioDAO->login($usuario);
					
					if(count($retorno) > 0)
					{
						$erro = true;
					}
				}
                if(empty($_POST["tel"]))
                {
                    $erro = true;
                }
				if(empty($_POST["senha"]))
				{
					$erro = true;
				}
				if(!$erro)
				{
					
					$usuario = new Usuario(nome:$_POST["nome"], email:$_POST["email"],telefone:$_POST["tel"] , senha:password_hash($_POST["senha"], PASSWORD_DEFAULT),
                    perfil:3);
					$usuarioDAO = new UsuarioDAO();
					$usuarioDAO->inserir($usuario);
				}
			}
            require_once "views/cadastro.php";
        }
    }