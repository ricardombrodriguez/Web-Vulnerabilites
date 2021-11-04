<<<<<<< HEAD
create database if not exists `spoton` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
=======
create database if not exists `spoton`;
-- CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';
-- GRANT ALL PRIVILEGES ON spoton.* TO 'admin'@'localhost' WITH GRANT OPTION;
>>>>>>> dc0564d5b0cfec4ec3a1f0786e97a9accd126277
use `spoton`;


create table if not exists `users` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `nome` VARCHAR(100) NOT NULL,
    `email` VARCHAR(150) NOT NULL,
    `pass` VARCHAR(100) NOT NULL,

    PRIMARY KEY(`id`)
);
go

create table if not exists `trips` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(100) NOT NULL,
    `preco` DOUBLE not null,
    `descricao` VARCHAR(300),
    `lugar`  VARCHAR(100) not null,
    `avaliacao` int check (`avaliacao` >= 0 and `avaliacao` < 6),
    PRIMARY KEY( `id`)
);
go

create table if not exists `comment` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `autor` int not null,
    `texto` VARCHAR(300),
    FOREIGN KEY (`autor`) references users(`id`)
);
go


-- INSERT TRIPS
insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Grover Husband', 184.0, '1qFQ2MF8CUFz8u6Z780289PAbA36j43501jwmcdhVPeJ54q08g', 'Sułkowice', 5);
insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Vaclav Lissenden', 462.48, '8205070c7F29gsX2el7H152R59j8WT4J2K6n1pif7Y7j58XNIn', 'Xiyuan', 5);
insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Coreen Poizer', 367.04, '69v14n6ku5O616D2rYC2539W46fx68Z000qdD2QPM2o82ASY48', 'Oropesa', 5);
insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Gabie Salmon', 378.5, '7835TH729E6qosYr3G7s1424V941nnB409416jFy8670458v2r', 'Kajuru', 3);
insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Brad Peters', 235.21, 'zk30XL4K1V98h1P8e1y314HB50w1wj586f2Y9715XL3i7N7VM0', 'Zuru', 3);
insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Riane Mattin', 444.4, '8V64L3T9258K00575Jo502MiG4ej0469Y9727X40Gn85354O26', 'Kato Pyrgos', 5);
insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Noni Foynes', 64.04, 'S98S5Fx0p7Mt014Tn6o8446x5cH2BA16gCyV226G0S5pS601Cl', 'Lintaca', 5);
insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Kipper Bohike', 153.36, 'nz7S25W7f2A5427Z5ccYo48Tc0101yl3491bS3X270Wbr4x62b', 'Changqi', 3);
insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Amara Ziemsen', 144.17, '05Wf53387G3b2y69kQC844pZ17A82x12u0ODR9125w48997292', 'Nymburk', 4);
insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Odessa Steanson', 222.33, 'Mbb92726eR4i3756l9Tz379Os6r1lm2K5439506zN6g485E45X', 'Porto União', 2);
INSERT INTO `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) VALUES ('Magic Ski', 50.90, 'Melho viagem de sempre', 'Andorra', 4);


-- INSERTS USERS
INSERT INTO `users` (`nome`, `email`, `pass`) VALUES ('admin', 'admin', 'admin');
insert into `users` (`nome`,`email`,`pass`) values ('Lissi Nozzolii', 'lnozzolii0@examiner.com', '4Mhm9xslPBO');
insert into `users` (`nome`,`email`,`pass`) values ('Cherice Burds', 'cburds1@slate.com', '6kFZ96fFBY');
insert into `users` (`nome`,`email`,`pass`) values ('Murvyn Purkins', 'mpurkins2@eventbrite.com', 'bvipO5FUFeq2');
insert into `users` (`nome`,`email`,`pass`) values ('Rianon Spraggs', 'rspraggs3@tripadvisor.com', '7CAqw7V0oOe4');
insert into `users` (`nome`,`email`,`pass`) values ('Karee Greim', 'kgreim4@feedburner.com', 'cuLOVdWG');
insert into `users` (`nome`,`email`,`pass`) values ('Kriste Seefeldt', 'kseefeldt5@nyu.edu', 'zi7cDgVM');
insert into `users` (`nome`,`email`,`pass`) values ('Waylan Slimon', 'wslimon6@sphinn.com', 'ePkufSE');
insert into `users` (`nome`,`email`,`pass`) values ('Ricardo Dermott', 'rdermott7@va.gov', 'WDQ9pgWSWc');
insert into `users` (`nome`,`email`,`pass`) values ('Cal Petriello', 'cpetriello8@irs.gov', '8jdrunVIx7');
insert into `users` (`nome`,`email`,`pass`) values ('Harlan Gaukrodge', 'hgaukrodge9@de.vu', 'rTfQ8TXEd9n');


