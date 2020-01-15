Create database LocationGSI;
Use LocationGSI;

DROP TABLE IF EXISTS Client ;
CREATE TABLE Client (id_client BIGINT AUTO_INCREMENT NOT NULL,
nom_client VARCHAR(20),
prenom_client VARCHAR(20),
birth_date Date,
email_client VARCHAR(30),
adress_client VARCHAR (50),
adress_complement VARCHAR(30),
code_postal VARCHAR (5),
ville VARCHAR (5),
telephone_client VARCHAR(15),
password VARCHAR (20),
PRIMARY KEY (id_client));

DROP TABLE IF EXISTS Moyen_paiement ;
CREATE TABLE Moyen_paiement (id_moyen_paiement BIGINT AUTO_INCREMENT NOT NULL,
type_moyen_paiement VARCHAR(20),
numero_moyen_paiement VARCHAR(35),
Id_client BIGINT,
PRIMARY KEY (id_moyen_paiement));

DROP TABLE IF EXISTS Adresse ;
CREATE TABLE Adresse (id_adresse BIGINT AUTO_INCREMENT NOT NULL,
adress_client VARCHAR (50),
adress_complement VARCHAR(30),
code_postal VARCHAR (5),
ville VARCHAR (5),
Id_client BIGINT,
PRIMARY KEY (id_adresse));

DROP TABLE IF EXISTS Vehicule ;
CREATE TABLE Vehicule (id_vehicule BIGINT AUTO_INCREMENT NOT NULL,
immatriculation VARCHAR(15),
marque VARCHAR(10),
modele VARCHAR(10),
categorie VARCHAR(12),
couleur VARCHAR(10),
Id_reservation BIGINT,
PRIMARY KEY (id_vehicule));

DROP TABLE IF EXISTS Gestionnaire ;
CREATE TABLE Gestionnaire (id_gestionnaire BIGINT AUTO_INCREMENT NOT NULL,
nom_gestionnaire VARCHAR(20),
prenom_gestionnaire VARCHAR(20),
code_gestionnaire VARCHAR(5),
telephone_gestionnaire VARCHAR(15),
email_gestionnaire VARCHAR(30),
PRIMARY KEY (id_gestionnaire));

DROP TABLE IF EXISTS Tache ;
CREATE TABLE Tache (id_tache BIGINT AUTO_INCREMENT NOT NULL,
nom_tache VARCHAR(12),
statut_tache VARCHAR(10),
Id_gestionnaire BIGINT,
PRIMARY KEY (id_tache));

DROP TABLE IF EXISTS Facture ;
CREATE TABLE Facture (id_facture BIGINT AUTO_INCREMENT NOT NULL,
date_facture DATE,
total_ht FLOAT(10),
Id_reservation BIGINT,
PRIMARY KEY (id_facture));

DROP TABLE IF EXISTS Espace_perso ;
CREATE TABLE Espace_perso (id_espace_perso BIGINT AUTO_INCREMENT NOT NULL,
id_titulaire VARCHAR(20),
login VARCHAR(20),
password VARCHAR(45),
PRIMARY KEY (id_espace_perso));

DROP TABLE IF EXISTS Connexion ;
CREATE TABLE Connexion (id_connexion BIGINT AUTO_INCREMENT NOT NULL,
heure_connexion DATETIME,
heure_deconnexion DATETIME,
PRIMARY KEY (id_connexion));

DROP TABLE IF EXISTS Modification ;
CREATE TABLE Modification (id_modification BIGINT AUTO_INCREMENT NOT NULL,
provenance_modification VARCHAR(10),
heure_modification DATETIME,
id_client_modifie VARCHAR(10),
PRIMARY KEY (id_modification));

DROP TABLE IF EXISTS Message ;
CREATE TABLE Message (id_message BIGINT AUTO_INCREMENT NOT NULL,
objet_message BIGINT(50),
description_message VARCHAR(500),
id_emetteur_message VARCHAR(10),
id_destinataire_message VARCHAR(10),
PRIMARY KEY (id_message));

DROP TABLE IF EXISTS Reservation ;
CREATE TABLE Reservation (id_reservation BIGINT AUTO_INCREMENT NOT NULL,
statut_reservation VARCHAR(10),
date_reservation DATE,
date_depart DATE,
date_retour_prevue DATE,
date_retour_reelle DATE,
km_depart_ FLOAT(15),
km_retour FLOAT(15),
prix_journalier BIGINT(8),
montant_accompte FLOAT(10),
Id_client BIGINT,
Id_gestionnaire BIGINT,
PRIMARY KEY (id_reservation));

DROP TABLE IF EXISTS Historique ;
CREATE TABLE Historique (id_historique BIGINT AUTO_INCREMENT NOT NULL,
type_operation DATETIME,
heure_operation DATETIME,
provenance_operation VARCHAR(20),
id_reservation_historisee VARCHAR(10),
PRIMARY KEY (id_historique));

ALTER TABLE Moyen_paiement ADD CONSTRAINT FK_Moyen_paiement_id_client FOREIGN KEY (id_client) REFERENCES Client (id_client);

ALTER TABLE Adresse ADD CONSTRAINT FK_Adresse_id_client FOREIGN KEY (id_client) REFERENCES Client (id_client);
ALTER TABLE Vehicule ADD CONSTRAINT FK_Vehicule_id_reservation FOREIGN KEY (id_reservation) REFERENCES Reservation (id_reservation);
ALTER TABLE Tache ADD CONSTRAINT FK_Tache_id_gestionnaire FOREIGN KEY (id_gestionnaire) REFERENCES Gestionnaire (id_gestionnaire);
ALTER TABLE Facture ADD CONSTRAINT FK_Facture_id_reservation FOREIGN KEY (id_reservation) REFERENCES Reservation (id_reservation);
ALTER TABLE Reservation ADD CONSTRAINT FK_Reservation_id_client FOREIGN KEY (id_client) REFERENCES Client (id_client);
ALTER TABLE Reservation ADD CONSTRAINT FK_Reservation_id_gestionnaire FOREIGN KEY (id_gestionnaire) REFERENCES Gestionnaire (id_gestionnaire);
