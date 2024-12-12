<?php
	class Usuario
	{
		public function __construct(
        private int $idusuario = 0,
        private string $nome = "",
        private string $email = "",
        private string $telefone = "",
        private string $senha = "",
        private int $perfil = 3){}

		public function getId_usuario()
		{
			return $this->idusuario;
		}
		
		public function getNome()
		{
			return $this->nome;
		}
		
		public function getEmail()
		{
			return $this->email;
		}

		public function getTel()
		{
			return $this->telefone;
		}
		
		public function getSenha()
		{
			return $this->senha;
		}
		
		public function getPerfil()
		{
			return $this->perfil;
		}
	}//fim da classe
?>