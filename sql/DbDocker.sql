
CREATE DATABASE IF NOT EXISTS dockerProjet;
USE dockerProjet;


CREATE TABLE `Personne` (`nom` varchar(20) NOT NULL,`age` int(3) NOT NULL,`email` varchar(40) NOT NULL) ENGINE = InnoDB DEFAULT CHARSET = latin1;
INSERT INTO `Personne` (`nom`, `age`,`email`) VALUES ('Guillaume',23,'guig@gmail.com'),('Kevin',30,'kevindu64@gmail.com'),('Bobby',18, 'bobby@hotmail.com'),('Jessica',35,'jess@gmail.com');

