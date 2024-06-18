<?php

    session_start();
    class ConnectionFactory{
        private static $conn = null;

        public static function getConnection(){
            if(self::$conn == null){
                $database="db_projeto_desenvolvimento_sistemas";
                $server="localhost";
                $port="3306";
                $user="root"; 
                $password="62312898";
                try{
                    self::$conn = new PDO("mysql:host={$server};port={$port};dbname={$database}", $user, $password);
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