<?php
// Table role
    require("connectdb.php");
    $sql = "CREATE TABLE role(
        id_role  Int  Auto_increment  NOT NULL ,
        nom_role Varchar (255) NOT NULL
	,CONSTRAINT role_PK PRIMARY KEY (id_role)
    )ENGINE=InnoDB;";

    echo "Table role created".PHP_EOL;
    $dbh->exec($sql);
// Table user
    $sql = "CREATE TABLE user(
        id_user     Int  Auto_increment  NOT NULL ,
        nom_user    Varchar (255) NOT NULL ,
        prenom_user Varchar (255) NOT NULL ,
        mail_user   Varchar (255) NOT NULL ,
        mdp_user    Varchar (255) NOT NULL ,
        id_role     Int NOT NULL
	,CONSTRAINT user_PK PRIMARY KEY (id_user)

	,CONSTRAINT user_role_FK FOREIGN KEY (id_role) REFERENCES role(id_role)
    )ENGINE=InnoDB;";

    echo "Table user created".PHP_EOL;
    $dbh->exec($sql);
// Table role
    $sql ="CREATE TABLE film(
        id_film    Int  Auto_increment  NOT NULL ,
        titre_film Varchar (50) NOT NULL ,
        sysnopsis  Varchar (2000) NOT NULL ,
        video_url  Varchar (255) NOT NULL ,
        image_url  Varchar (255) NOT NULL
	,CONSTRAINT film_PK PRIMARY KEY (id_film)
    )ENGINE=InnoDB;";

    echo "Table film created".PHP_EOL;
    $dbh->exec($sql);
// Table genre
    $sql = "CREATE TABLE genre(
        id_genre  Int  Auto_increment  NOT NULL ,
        nom_genre Varchar (50) NOT NULL
	,CONSTRAINT genre_PK PRIMARY KEY (id_genre)
    )ENGINE=InnoDB;";

    echo "Table genre created".PHP_EOL;
    $dbh->exec($sql);
// Table acteur
    $sql = "CREATE TABLE Acteur(
        id_acteur     Int  Auto_increment  NOT NULL ,
        nom_acteur    Varchar (50) NOT NULL ,
        prenom_acteur Varchar (50) NOT NULL
	,CONSTRAINT Acteur_PK PRIMARY KEY (id_acteur)
    )ENGINE=InnoDB;";

    echo "Table acteur created".PHP_EOL;
    $dbh->exec($sql);
// Table favoris
    $sql = "CREATE TABLE favoris(
        id_film Int NOT NULL ,
        id_user Int NOT NULL
	,CONSTRAINT favoris_PK PRIMARY KEY (id_film,id_user)

	,CONSTRAINT favoris_film_FK FOREIGN KEY (id_film) REFERENCES film(id_film)
	,CONSTRAINT favoris_user0_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
    )ENGINE=InnoDB;";

    echo "Table favoris created".PHP_EOL;
    $dbh->exec($sql);
// Table possede 
        $sql = "CREATE TABLE possede(
            id_genre Int NOT NULL ,
            id_film  Int NOT NULL
        ,CONSTRAINT possede_PK PRIMARY KEY (id_genre,id_film)
    
        ,CONSTRAINT possede_genre_FK FOREIGN KEY (id_genre) REFERENCES genre(id_genre)
        ,CONSTRAINT possede_film0_FK FOREIGN KEY (id_film) REFERENCES film(id_film)
    )ENGINE=InnoDB;";
    echo "Table possede created".PHP_EOL;
    $dbh ->exec($sql);
// Table participe
    $sql = "CREATE TABLE Participe(
            id_acteur Int NOT NULL ,
            id_film   Int NOT NULL
        ,CONSTRAINT Participe_PK PRIMARY KEY (id_acteur,id_film)
    
        ,CONSTRAINT Participe_Acteur_FK FOREIGN KEY (id_acteur) REFERENCES Acteur(id_acteur)
        ,CONSTRAINT Participe_film0_FK FOREIGN KEY (id_film) REFERENCES film(id_film)
    )ENGINE=InnoDB;";
    echo "Table participe created".PHP_EOL;
    
    $dbh -> exec($sql);