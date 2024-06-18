<?php 
    include_once 'database.php';
    class ProjectRepository{
        private $conn;

        public function __construct(){
            $this->conn = ConnectionFactory::getConnection();
        }

        public function save(ProjectEntity $project){
            try{
                #Query utilizada para realizar o insert do usuario no banco de dados
                $sql = "INSERT INTO tb_projects (name, start_date, end_date, description) 
                values (:name, :startDate, :endDate, :description);";
                #Database statement
                $dbStmt = $this->conn->prepare($sql);
                #Alterando valores da query para os dados recebidos do controller
                $dbStmt->bindValue(":name",$project->getName());
                $dbStmt->bindValue(":startDate",$project->getStartDate());
                $dbStmt->bindValue(":endDate",$project->getEndDate());
                $dbStmt->bindValue(":description",$project->getDescription());
                #Retornando a execução da Query no banco de dados
                return $dbStmt->execute();
            }catch(Exception $e){
                echo("Erro: ". $e->getMessage());
            }
        }

        public function findById($id){
            try{
                $sql = "SELECT * FROM tb_projects WHERE id = :id";
                $dbstmt = $this->conn->prepare($sql);
                $dbstmt->bindValue(":id",$id);
                $dbstmt->execute();
                $row = $dbstmt->fetch(PDO::FETCH_ASSOC);
                if ($row) {
                    return $this->listProjects($row);
                }
                return null;
            }catch(Exception $e){
                echo("Erro: ". $e->getMessage());
            }
        }

        public function findAll(){
            try{
                $sql = "SELECT * FROM tb_projects;";
                $result = $this->conn->query($sql);
                $list = $result->fetchAll(PDO::FETCH_ASSOC);
                $projects = [];
                foreach($list as $l){
                    $projects[] = $this->listProjects($l);
                }
                return $projects;
            }catch(PDOException $e){
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        public function listProjects($row){
            $projeto = new ProjectEntity();
            $projeto->setId($row['id']);
            $projeto->setName($row['name']);
            $projeto->setStartDate($row['start_date']);
            $projeto->setEndDate($row['end_date']);
            $projeto->setDescription($row['description']);
            return $projeto;
        }

        public function delete($id){
            try{
                $sql = "DELETE FROM tb_projects WHERE id = :id";
                $dbStmt = $this->conn->prepare($sql);
                $dbStmt->bindValue(":id", $id);
                return $dbStmt->execute();
            }catch(Exception $e){
                echo("Error: ". $e->getMessage());
            }
        }
    }
?>