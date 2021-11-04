create database if not exists `spoton`;
-- CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';
-- GRANT SELECT, INSERT, CREATE, DROP ON spoton.* TO 'admin'@'localhost';
use `spoton`;


create table if not exists `users` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `nome` VARCHAR(100) NOT NULL,
    `email` VARCHAR(150) NOT NULL,
    `pass` VARCHAR(100) NOT NULL,

    PRIMARY KEY(`id`)
);

create table `trips` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(100) NOT NULL,
    `preco` DOUBLE not null,
    `descricao` VARCHAR(300),
    `lugar`  VARCHAR(100) not null,
    `avaliacao` int check (`avaliacao` >= 0 and `avaliacao` < 6),
    PRIMARY KEY( `id`)
);

create table `comment` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `autor` int not null,
    `texto` VARCHAR(300),
    FOREIGN KEY (`autor`) references users(`id`)
);

INSERT INTO `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) VALUES ('Magic Ski', 50.90, 'Melho viagem de sempre', 'Andorra', 4);


INSERT INTO `users` (`nome`, `mail`, `pass`) VALUES ('admin', 'admin', 'admin');