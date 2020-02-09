-- Ajout voiture
-- modele authorisé
-- ● Citadine
-- ● Routière
-- ● Luxe
-- ● Utilitaire
-- ● Transport
use locationgsi;
INSERT INTO Vehicle(
  vehicle_id,
  vehicle_license_plate,
  vehicle_brand,
  vehicle_model,
  vehicle_category,
  vehicle_description,
  vehicle_image_link,
  vehicle_color,
  vehicle_price_per_day,
  vehicle_price_per_hours
)
VALUES
  (0, 'QM-120-SX', 'Mercedes', 'EQC', 'Luxe', 'Premier SUV 100 % électrique de la marque à l\'étoile, le Mercedes EQC a entamé sa commercialisation mi-2019. Il s’agit du premier modèle de la gamme EQ dédiée à l’électrique. Révélé en 2016 lors du Mondial de l’Automobile de Paris, le Mercedes EQC initie la nouvelle stratégie de Daimler dans le domaine de l’électromobilité. Révélé dans sa version définitive à Stockholm début septembre 2018, ce SUV 100 % électrique préfigure l’arrivée d’une offre électrique complète autour de la gamme EQ.', '/GSI_WebSite_CarLocation/public/image/vehicule/eqc.jpg', 'Blanc', 320, 30),
  (0, 'QR-231-LE', 'Mercedes', 'Classe A', 'Routière', 'Mercedes-Benz Classe A  gamme d\'automobile citadine compacte. Elle sera lancée en 1997 (Type 168) puis en 2004 (Type 169), renouvelée en 2012 (Type 176) et enfin en 2018 (Type 177). Les deux premières générations correspondaient à une citadine dont le plancher double lui donnait un aspect rehaussé. Elle pouvait, de ce fait, appartenir à la catégorie des mini monospaces, malgré son aménagement intérieur classique.', '/GSI_WebSite_CarLocation/public/image/vehicule/classeaBlanche.jpg', 'Blanc', 750, 5),
  (0, 'XT-234-YE', 'Mercedes', 'Classe A', 'Routière', 'Mercedes-Benz Classe A  gamme d\'automobile citadine compacte. Elle sera lancée en 1997 (Type 168) puis en 2004 (Type 169), renouvelée en 2012 (Type 176) et enfin en 2018 (Type 177). Les deux premières générations correspondaient à une citadine dont le plancher double lui donnait un aspect rehaussé. Elle pouvait, de ce fait, appartenir à la catégorie des mini monospaces, malgré son aménagement intérieur classique.', '/GSI_WebSite_CarLocation/public/image/vehicule/classeaGrise.jpg', 'Gris', 220, 20),
  (0, 'PT-221-AD', 'Mercedes', 'Classe C', 'Transport', 'La Mercedes-Benz Classe C Type 202 a été lancée en 1993 pour concurrencer la BMW E36, comme le fit auparavant la Type 201 (190). La Classe C, grâce à un prix raisonnable, fut très populaire, devenant rapidement pour Mercedes la meilleure vente de véhicules dans le monde entier. ', '/GSI_WebSite_CarLocation/public/image/vehicule/classecNoir.jpg', 'Noir', 120, 10),
  (0, 'PT-221-AD', 'Toyota', 'Yaris', 'Transport', 'Un vent nouveau souffle sur la Toyota Yaris. Sa gamme de couleurs éclatantes, ses nouvelles lignes dynamiques et son élégance vous procurent une expérience de conduite unique. Plaisir, émotion et fluidité de mouvement : ressentez l’énergie Yaris.', '/GSI_WebSite_CarLocation/public/image/vehicule/yarisBlanche.jpg', 'Blanc', 50, 6),
  (0, 'PT-221-AD', 'Renault', 'Triber', 'Routière', 'Le Triber est basé sur une version modifiée de la plate-forme CMF-A de la Kwid. Le constructeur au losange a réussi à placer une troisième rangée de sièges dans un véhicule de moins de 4 mètres pour proposer 7 places.', '/GSI_WebSite_CarLocation/public/image/vehicule/triberJaune.jpg', 'Jaune', 75, 19),
  (0, 'PT-221-AD', 'Renault', 'Clio', 'Citadine', 'C\'est une citadine polyvalente, habitable avec ses 4 m de long, et confortable. Par son espace intérieur et ses prestations, elle est proche de la catégorie des berlines compactes et de la Renault Mégane. Elle fait partie des toutes meilleures citadines du moment. Elle accueille confortablement 4 adultes.', '/GSI_WebSite_CarLocation/public/image/vehicule/clioOrange.jpg', 'Blanc', 112, 16);
