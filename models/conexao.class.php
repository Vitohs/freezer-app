<?php
class Conexao
{
    public function __construct(protected $db = null)
    {
        $servername = "localhost";
        $username = "root";
        $password = "Ovocelente@06";
        $dbname = "login";
        try 
        {
            $this->db = new mysqli($servername, $username, $password, $dbname);
            if ($this->db->connect_error) 
            {
                throw new Exception("Connection failed: " . $this->db->connect_error);
            }
        } 
        catch (Exception $e) 
        {
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
        }
    }
}