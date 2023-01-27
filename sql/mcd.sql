CREATE DATABASE avis_resto;
USE avis_resto;
CREATE TABLE Restaurants (
                             idRestaurant INTEGER NOT NULL AUTO_INCREMENT,
                             nom          VARCHAR(50) NOT NULL,
                             adresse      VARCHAR(200),
                             cp           NUMERIC (5),
                             ville        VARCHAR(50) NOT NULL,
                             telephone    NUMERIC(10),
                             description  VARCHAR(2200),
                             CONSTRAINT pkRestaurants PRIMARY KEY(idRestaurant)
);

CREATE TABLE Avis (
                      idRestaurant            INTEGER NOT NULL,
                      idAvis                  INTEGER NOT NULL auto_increment,
                      auteur                  VARCHAR(50),
                      note                    INTEGER NOT NULL,
                      commentaire             VARCHAR(500),
                      CONSTRAINT pkAvis PRIMARY KEY(idAvis),
                      CONSTRAINT fkAvisRestaurant FOREIGN KEY(idRestaurant)  REFERENCES Restaurants(idRestaurant)
);