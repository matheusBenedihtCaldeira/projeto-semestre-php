<?php

    include_once 'database.php';
    include_once "ProjectRepository.php";
    include_once "../models/entities/ProjectEntity.php";
    include_once "../models/entities/SequencingEntity.php";
    class SequencingRepository{
        private $conn;

        public function __construct(){
            $this->conn = ConnectionFactory::getConnection();
        }

        public function save(SequencingEntity $entity){
            try{
                $sql = "INSERT INTO tb_sequencings(name, method, sequencing, project_id, comments) 
                VALUES (:name, :method, :sequencing, :project_id, :comments);";
                $dbStmt = $this->conn->prepare($sql);
                $dbStmt->bindValue(":name", $entity->getName());
                $dbStmt->bindValue(":method", $entity->getMethod());
                $dbStmt->bindValue(":sequencing", $entity->getSequencing());
                $dbStmt->bindValue(":project_id", $entity->getProject()->getId());
                $dbStmt->bindValue(":comments", $entity->getComments());
                return $dbStmt->execute();
            }catch(Exception $e){
                echo("Error: ". $e->getMessage());
            }
        }

        public function findAll(){
            try{
                $sql = "SELECT sq.id, sq.name, sq.method, p.name AS project_name
                FROM tb_sequencings sq
                LEFT JOIN tb_projects p ON sq.project_id = p.id";
                $result = $this->conn->query($sql);
                $list = $result->fetchAll(PDO::FETCH_ASSOC);
                $sequencings = [];
                foreach($list as $l){
                    $sequencings[] = $this->listSequencings($l);
                }
                return $sequencings;
            }catch(PDOException $e){
                print "Error: " . $e;
            }
        }

        public function listSequencings($row){
            $sequencing = new SequencingEntity();
            $sequencing->setId($row['id']);
            $sequencing->setName($row['name']);
            $sequencing->setMethod($row['method']);
            $sequencing->setProject($row['project_name']);
            return $sequencing;
        }

        public function delete($id){
            try{
                $sql = "DELETE FROM tb_sequencings WHERE id = :id";
                $dbStmt = $this->conn->prepare($sql);
                $dbStmt->bindValue(":id", $id);
                return $dbStmt->execute();
            }catch(Exception $e){
                echo("Error: ". $e->getMessage());
            }
        }

        public function findById($id){
            try {
                $sql = "SELECT *  FROM tb_sequencings WHERE id = :id";
                $dbStmt = $this->conn->prepare($sql);
                $dbStmt->bindValue(":id", $id);
                $dbStmt->execute();
                $result = $dbStmt->fetch(PDO::FETCH_ASSOC);
                
                if ($result) {
                    $projectRepository = new ProjectRepository();
                    $project = $projectRepository->findById($result['project_id']);
                    $sequencing = new SequencingEntity($result['name'], $result['method'], $result['sequencing'], $project, $result['comments']);
                    $sequencing->setId($result['id']);
                    return $sequencing;    
                } else {
                    return;
                }
            } catch(Exception $e) {
                echo("Error: ". $e->getMessage());
            }
        }
        
    }
?>