<?php
    /*
    #Parametros de conexão do banco de dados
    $server = 'localhost';
    $port = 3306;
    $user = 'root';
    $db_name = 'db_projeto_desenvolvimento_sistemas';
    $password = '62312898';
    try{
        #Realiza conexão com banco de dados
        $database = new mysqli($server, $user, $password, $db_name, $port);
    }catch(Exception $e){
        echo("Erro: " . $e->getMessage());
    }
    */
    class ConnectionFactory{
        private static $conn = null;
        private $database;
        private $server;
        private $port;
        private $user;
        private $password;

        public function __construct($database="db_projeto_desenvolvimento_sistemas", $server="localhost", $port="3306", $user="root", $password="62312898"){
            $this->database = $database;
            $this->server = $server;
            $this->port = $port;
            $this->user = $user;
            $this->password = $password;
        }

        public function getConnection(){
            if(self::$conn == null){
                try{
                    self::$conn = new PDO("mysql:host={$this->server};port={$this->port};dbname={$this->database}", $this->user, $this->password);
                }catch(PDOException $e){
                    echo("Erro: ". $e->getMessage());
                }
            }
            return self::$conn;
        }

        public function closeConnection(){
            self::$conn = null;
        }
    }
?>