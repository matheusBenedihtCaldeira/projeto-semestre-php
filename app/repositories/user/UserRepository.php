<?php 
    
    include '../../config/database.php';

    class UserRepository{

        private $conn;

        public function __construct(){
            $this->conn = ConnectionFactory::getConnection();
        }

        public function save(UserEntity $user){
            try{
                #Query utilizada para realizar o insert do usuario no banco de dados
                $sql = "INSERT INTO tb_users (first_name, last_name, email, password, gender, date_of_birth) 
                values (:firstName, :lastName, :email, :password, :gender, :dateOfBirth);";
                #Database statement
                $dbStmt = $this->conn->prepare($sql);
                #Alterando valores da query para os dados recebidos do controller
                $dbStmt->bindValue(":firstName",$user->getFirstName());
                $dbStmt->bindValue(":lastName",$user->getLastName());
                $dbStmt->bindValue(":email",$user->getEmail());
                $dbStmt->bindValue(":password",$user->getPassword());
                $dbStmt->bindValue(":gender",$user->getGender());
                $dbStmt->bindValue(":dateOfBirth",$user->getDateOfBirth());
                #Retornando a execução da Query no banco de dados
                return $dbStmt->execute();
            }catch(Exception $e){
                echo("Erro: ". $e->getMessage());
            }
        }

        public function findByEmailAndPassword($email, $password){
            try{
                $sql = "SELECT * FROM tb_users WHERE email = :email AND password = :password;";
                $dbStmt = $this->conn->prepare($sql);
                $dbStmt->bindValue(":email",$email);
                $dbStmt->bindValue(":password",$password);
                return $dbStmt->execute();
            }catch(Exception $e){
                echo("Erro: ". $e->getMessage());
            }
        }
    }
?>