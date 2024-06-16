<?php 
    
    include '../../config/database.php';
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
    }
?>