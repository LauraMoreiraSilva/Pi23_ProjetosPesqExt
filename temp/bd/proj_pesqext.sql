CREATE DATABASE IF NOT EXISTS proj_pesqext;
USE proj_pesqext;
CREATE TABLE IF NOT EXISTS curso(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20),
periodo INT NOT NULL
);
CREATE TABLE IF NOT EXISTS area(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20)
);
CREATE TABLE IF NOT EXISTS categoria(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20)
);
CREATE TABLE IF NOT EXISTS status(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20)
);
CREATE TABLE IF NOT EXISTS administrador(
matricula VARCHAR(07) PRIMARY KEY NOT NULL,
nome VARCHAR(200) NOT NULL,
email VARCHAR(200) NOT NULL,
senha VARCHAR (08) NOT NULL
);
CREATE TABLE IF NOT EXISTS docente(
matricula VARCHAR(07) PRIMARY KEY NOT NULL,
nome VARCHAR(200) NOT NULL,
email VARCHAR(200) NOT NULL,
telefone VARCHAR(11) NOT NULL,
senha VARCHAR (08) NOT NULL
);
CREATE TABLE IF NOT EXISTS discente(
matricula VARCHAR(14) PRIMARY KEY NOT NULL,
nome VARCHAR(200) NOT NULL,
cpf VARCHAR(11) NOT NULL,
rg VARCHAR(09) NOT NULL,
email VARCHAR(100) NOT NULL,
telefone VARCHAR(11),
id_curso INT NOT NULL,
FOREIGN KEY (id_curso) REFERENCES curso(id)
);
CREATE TABLE IF NOT EXISTS projeto(
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
titulo VARCHAR(300) NOT NULL,
descricao CHAR NOT NULL,
matricula_docente VARCHAR(07) NOT NULL,
id_status INT NOT NULL,
id_area INT NOT NULL,
id_categoria INT NOT NULL,
FOREIGN KEY (matricula_docente) REFERENCES docente(matricula),
FOREIGN KEY (id_status) REFERENCES status(id),
FOREIGN KEY (id_area) REFERENCES area(id),
FOREIGN KEY (id_categoria) REFERENCES categoria(id)
);
CREATE TABLE IF NOT EXISTS projeto_administrador(
id_projeto INT NOT NULL,
matricula_administrador VARCHAR(07),
FOREIGN KEY (id_projeto) REFERENCES projeto(id),
FOREIGN KEY (matricula_administrador) REFERENCES administrador(matricula)
);
CREATE TABLE IF NOT EXISTS projeto_docente(
id_projeto INT NOT NULL,
matricula_docente VARCHAR(07),
FOREIGN KEY (id_projeto) REFERENCES projeto(id),
FOREIGN KEY (matricula_docente) REFERENCES docente(matricula)
);
CREATE TABLE IF NOT EXISTS projeto_discente(
id_projeto INT NOT NULL,
matricula_discente VARCHAR(14),
FOREIGN KEY (id_projeto) REFERENCES projeto(id),
FOREIGN KEY (matricula_discente) REFERENCES discente(matricula)
);

