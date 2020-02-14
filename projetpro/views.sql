#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `views` CHARACTER SET 'utf8';
USE `views`;

#------------------------------------------------------------
# Table: consumers
#------------------------------------------------------------

CREATE TABLE consumers(
        id        Int  Auto_increment  NOT NULL ,
        lastname  Varchar (50) NOT NULL ,
        firstname Varchar (50) NOT NULL ,
        birthname Date NOT NULL ,
        mail      Varchar (50) NOT NULL ,
        avatar    Mediumblob NOT NULL
	,CONSTRAINT consumers_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categories
#------------------------------------------------------------

CREATE TABLE categories(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (50) NOT NULL
	,CONSTRAINT categories_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: articles
#------------------------------------------------------------

CREATE TABLE articles(
        id            Int  Auto_increment  NOT NULL ,
        name          Varchar (50) NOT NULL ,
        type          Varchar (50) NOT NULL ,
        manual        Mediumblob NOT NULL ,
        id_categories Int NOT NULL
	,CONSTRAINT articles_PK PRIMARY KEY (id)

	,CONSTRAINT articles_categories_FK FOREIGN KEY (id_categories) REFERENCES categories(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: views
#------------------------------------------------------------

CREATE TABLE views(
        id           Int  Auto_increment  NOT NULL ,
        tilte        Varchar (50) NOT NULL ,
        category     Varchar (50) NOT NULL ,
        nbview       Int NOT NULL ,
        id_consumers Int NOT NULL ,
        id_articles  Int NOT NULL
	,CONSTRAINT views_PK PRIMARY KEY (id)

	,CONSTRAINT views_consumers_FK FOREIGN KEY (id_consumers) REFERENCES consumers(id)
	,CONSTRAINT views_articles0_FK FOREIGN KEY (id_articles) REFERENCES articles(id)
)ENGINE=InnoDB;

