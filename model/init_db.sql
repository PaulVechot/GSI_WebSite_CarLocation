Create database LocationGSI;
Use LocationGSI;

DROP TABLE IF EXISTS User ;
CREATE TABLE VroomUser (
  user_id BIGINT AUTO_INCREMENT NOT NULL,
  user_name VARCHAR(20),
  user_rs VARCHAR(100),
  user_surname VARCHAR(20),
  user_birth_date DATE,
  user_email VARCHAR(30),
  user_phone VARCHAR(30),
  user_password VARCHAR (20),
  user_type INT,
  user_adress VARCHAR (50),
  user_adress1 VARCHAR(30),
  user_district VARCHAR (5),
  user_city VARCHAR (5),
  PRIMARY KEY (user_id)
);

DROP TABLE IF EXISTS Card ;
CREATE TABLE Card (
  card_id BIGINT AUTO_INCREMENT NOT NULL,
  card_name VARCHAR(100),
  card_owner_name VARCHAR(50),
  card_number VARCHAR(35),
  card_csv VARCHAR(3),
  card_expiration_month VARCHAR(2),
  card_expiration_year VARCHAR(2),
  user_id BIGINT,
  PRIMARY KEY (card_id)
);

DROP TABLE IF EXISTS Direct_debit ;
CREATE TABLE Direct_Debit (
  direct_debit_id BIGINT AUTO_INCREMENT NOT NULL,
  direct_debit_name VARCHAR(20),
  direct_debit_iban VARCHAR(35),
  direct_debit_bic VARCHAR(120),
  direct_debit_owner_name VARCHAR(150),
  user_id BIGINT,
  PRIMARY KEY (direct_debit_id)
);

DROP TABLE IF EXISTS Vehicle ;
CREATE TABLE Vehicle (
  vehicle_id BIGINT AUTO_INCREMENT NOT NULL,
  vehicle_license_plate VARCHAR(20),
  vehicle_brand VARCHAR(30),
  vehicle_model VARCHAR(40),
  vehicle_category VARCHAR(15),
  vehicle_description VARCHAR(1000),
  vehicle_image_link VARCHAR(300),
  vehicle_color VARCHAR(15),
  vehicle_price_per_day FLOAT,
  vehicle_price_per_hours FLOAT,
  booking_id BIGINT,
  PRIMARY KEY (vehicle_id)
);

DROP TABLE IF EXISTS Facture ;
CREATE TABLE Facture (id_facture BIGINT AUTO_INCREMENT NOT NULL,
date_facture DATE,
total_ht FLOAT(10),
id_reservation BIGINT,
PRIMARY KEY (id_facture));

DROP TABLE IF EXISTS Message ;
CREATE TABLE Message (id_message BIGINT AUTO_INCREMENT NOT NULL,
objet_message BIGINT(50),
description_message VARCHAR(500),
id_emetteur_message VARCHAR(10),
id_destinataire_message VARCHAR(10),
PRIMARY KEY (id_message));

DROP TABLE IF EXISTS Booking ;
CREATE TABLE Booking (
  booking_id BIGINT AUTO_INCREMENT NOT NULL,
  booking_status VARCHAR(10),
  booking_leaving_date DATE,
  booking_date_depart DATE,
  booking_planned_return_date DATE,
  booking_real_return_date DATE,
  booking_leaving_km FLOAT(15),
  booking_return_km FLOAT(15),
  booking_price_per_day BIGINT(8),
  booking_price_TVA BIGINT(8),
  booking_price_total FLOAT(10),
  user_id BIGINT,
  vehicle_id BIGINT,
  PRIMARY KEY (booking_id)
);

DROP TABLE IF EXISTS LLog ;
CREATE TABLE LLog (
  log_id BIGINT AUTO_INCREMENT NOT NULL,
  log_operation_name VARCHAR(50),
  log_operation_description VARCHAR(500),
  log_operation_hour DATETIME,
  user_id BIGINT,
  PRIMARY KEY (log_id)
);

ALTER TABLE Direct_debit ADD CONSTRAINT FK_Direct_debit_user_id FOREIGN KEY (user_id) REFERENCES VroomUser (user_id);
ALTER TABLE Card ADD CONSTRAINT FK_card_user_id FOREIGN KEY (user_id) REFERENCES VroomUser (user_id);

ALTER TABLE Booking ADD CONSTRAINT FK_booking_user FOREIGN KEY (user_id) REFERENCES VroomUser (user_id);
ALTER TABLE Booking ADD CONSTRAINT FK_Vehicle_booking FOREIGN KEY (vehicle_id) REFERENCES Vehicle (vehicle_id);
ALTER TABLE Vehicle ADD CONSTRAINT FK_booking_vehicle FOREIGN KEY (booking_id) REFERENCES Booking (booking_id);
