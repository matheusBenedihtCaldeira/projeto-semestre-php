CREATE TABLE tb_sequencings(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    method VARCHAR(255) NOT NULL,
    sequencing TEXT NOT NULL,
    project_id INT,
    comments TEXT,
    FOREIGN KEY (project_id) REFERENCES tb_projects(id) ON DELETE CASCADE
);