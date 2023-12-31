CREATE DATABASE IF NOT EXISTS pi23_projetospesqext;
USE pi23_projetospesqext;
CREATE TABLE IF NOT EXISTS area(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20)
);
CREATE TABLE IF NOT EXISTS categoria(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20)
);
CREATE TABLE IF NOT EXISTS administrador(
matricula VARCHAR(07) PRIMARY KEY NOT NULL,
nome VARCHAR(200) NOT NULL,
senha CHAR(40) NOT NULL
);
CREATE TABLE IF NOT EXISTS projeto(
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
titulo VARCHAR(300) NOT NULL,
descricao VARCHAR(600) NOT NULL,
coordenador VARCHAR(200) NOT NULL,
imagem VARCHAR(200) NOT NULL,
id_area INT NOT NULL,
id_categoria INT NOT NULL,
FOREIGN KEY (id_area) REFERENCES area(id),
FOREIGN KEY (id_categoria) REFERENCES categoria(id)
);
