CREATE DATABASE cadastro;
USE cadastro;

CREATE TABLE `tb_cadastro` (
  `usuario_id` INT PRIMARY KEY AUTO_INCREMENT,
  `email` VARCHAR(200) NOT NULL Unique,
  `senha` VARCHAR(32) NOT NULL,
  `Nome` VARCHAR(100) NOT NULL,
  `Comentario` text NOT NULL,
  `PCD` text NOT NULL,
  `Tel` VARCHAR(15) NOT NULL Unique,
  `Tipo` VARCHAR(20) NOT null
);

INsert into tb_cadastro set
email="giovanna@gmail.com",
senha="123jjkatchau",
Nome="gigi fatia",
Comentario="sim",
PCD="nao",
Tel="12988301317",
Tipo="sayadin";
