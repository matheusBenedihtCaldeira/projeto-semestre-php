CREATE TABLE tb_sequencing(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    origin VARCHAR(255) NOT NULL,
    extraction_date DATE NOT NULL,
    sequencing TEXT NOT NULL,
    comments TEXT
);