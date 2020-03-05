#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `views` CHARACTER SET 'utf8';
USE `views`;

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
        describ       Varchar (250) NOT NULL ,
        id_categories Int NOT NULL
	,CONSTRAINT articles_PK PRIMARY KEY (id)

	,CONSTRAINT articles_categories_FK FOREIGN KEY (id_categories) REFERENCES categories(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: subcategories
#------------------------------------------------------------

CREATE TABLE subcategories(
        id            Int  Auto_increment  NOT NULL ,
        name          Varchar (250) NOT NULL ,
        id_categories Int NOT NULL
	,CONSTRAINT subcategories_PK PRIMARY KEY (id)

	,CONSTRAINT subcategories_categories_FK FOREIGN KEY (id_categories) REFERENCES categories(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: cathusers
#------------------------------------------------------------

CREATE TABLE cathusers(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (50) NOT NULL,
        code Int NOT NULL
	,CONSTRAINT cathusers_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        id           Int  Auto_increment  NOT NULL ,
        lastname     Varchar (50) NOT NULL ,
        firstname    Varchar (50) NOT NULL ,
        birthdate    Bool NOT NULL ,
        mail         Varchar (50) NOT NULL ,
        password     Varchar (60) NOT NULL ,
        id_cathusers Int NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (id)

	,CONSTRAINT users_cathusers_FK FOREIGN KEY (id_cathusers) REFERENCES cathusers(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: views
#------------------------------------------------------------

CREATE TABLE views(
        id          Int  Auto_increment  NOT NULL ,
        title       Varchar (50) NOT NULL ,
        texte       Varchar (250) NOT NULL ,
        note        Int NOT NULL ,
        id_articles Int NOT NULL ,
        id_users    Int NOT NULL
	,CONSTRAINT avis_PK PRIMARY KEY (id)

	,CONSTRAINT avis_articles_FK FOREIGN KEY (id_articles) REFERENCES articles(id)
	,CONSTRAINT avis_users0_FK FOREIGN KEY (id_users) REFERENCES users(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: salons
#------------------------------------------------------------

CREATE TABLE salons(
        id      Int  Auto_increment  NOT NULL ,
        name    Varchar (50) NOT NULL ,
        describ Varchar (50) NOT NULL
	,CONSTRAINT salons_PK PRIMARY KEY (id)
)ENGINE=InnoDB;



