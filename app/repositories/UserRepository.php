<?php 
    include 'database.php';
    include '../models/entities/UserEntity.php';
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

        public function login($email, $password){
            try{
                $sql = "SELECT * FROM tb_users WHERE email = :email AND password = :password;";
                $dbStmt = $this->conn->prepare($sql);
                $dbStmt->bindValue(":email", $email);
                $dbStmt->bindValue(":password", $password);
                $dbStmt->execute();
                if($dbStmt->rowCount() > 0){
                    $result = $dbStmt->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['idUser'] = $result['id'];
                    return true;
                }else{
                    return false;
                }
            }catch(Exception $e){
                echo("Erro: ". $e->getMessage());
            }
        }

        public function findById($id){
            try{
                $sql = "SELECT * FROM tb_users WHERE id = :id;";
                $dbStmt = $this->conn->prepare($sql);
                $dbStmt->bindValue(":id", $id);
                $dbStmt->execute();
                $row = $dbStmt->fetch(PDO::FETCH_ASSOC);
                if($row){
                    return $this->convertUser($row);
                }
                return null;
            }catch(Exception $e){
                echo("Erro: ". $e->getMessage());
            }
        }

        public function convertUser($data){
            $user = new UserEntity();
            $user->setId($data['id']);
            $user->setFirstName($data['first_name']);
            $user->setLastName($data['last_name']);
            $user->setEmail($data['email']);
            $user->setPassword($data['password']);
            $user->setGender($data['gender']);
            $user->setDateOfBirth($data['date_of_birth']);
            return $user;
        }

        public function delete($id){
            try{
                $sql = "DELETE FROM tb_users WHERE id = :id";
                $dbStmt = $this->conn->prepare($sql);
                $dbStmt->bindValue(":id", $id);
                return $dbStmt->execute();
            }catch(Exception $e){
                echo("Error: ". $e->getMessage());
            }
        }
    }
?>