DROP TABLE IF EXISTS Vehicule ;
CREATE TABLE Vehicule (id_vehicule BIGINT AUTO_INCREMENT NOT NULL,
immatriculation VARCHAR(20),
marque VARCHAR(30),
modele VARCHAR(40),
categorie VARCHAR(15), /*Citadine, Routière, Luxe, Utilitaire, transport*/
couleur VARCHAR(15),
id_reservation BIGINT, 
description VARCHAR (200),
prix INT,
PRIMARY KEY (id_vehicule));

INSERT INTO Vehicule Values (0,'AA-001-BB','Honda', 'Jazz','Citadine','Jaune', 1, 'La Jazz est une auto diablement homogène. Spacieuse, la deuxième génération dispose d un très grand coffre et de la possibilité de relever les assises de la banquette arrière pour caser des plantes vertes ou un petit vélo. Ce sont les Magic seats. Elle est également parmi les plus fiables de sa catégorie, si ce n est la plus fiable', 300),
							/*https://images.caradisiac.com/images/0/2/1/4/40214/S0-Les-meilleures-citadines-524180.jpg*/
							(0, 'AA-002-BB','Kia', 'Picanto','Citadine','Bleu', 2, 'La deuxième génération, plus sexy, mais aussi plus chère car plus récente, est un must dans la catégorie et sa fiabilité est également sans reproche à date, et la garantie constructeur court toujours pendant au moins 1 an, même pour les premières', 300),
							/*https://images.caradisiac.com/images/0/2/1/4/40214/S1-Les-meilleures-citadines-524177.jpg*/
							(0, 'AA-003-BB','Peugeot', '108','Citadine','Rouge', 3,'Elle est relativement confortable, suffisamment bien insonorisée pour envisager de longs trajets, et déjà suffisamment performante, même avec le petit moteur 1.0 68 ch. Et le 1.2 2 ch lui donne des ailes et une grande polyvalence.', 300),
							/*https://www.caradisiac.com/les-12-meilleures-citadines-d-occasion-40214.htm*/
							(0, 'AA-004-BB','Renault', 'Twingo 2','Citadine','Gris', 4,'La deuxième mouture est bien plus mature que la première. Plus confortable, mieux insonorisée et disposant enfin de moteurs diesels efficaces et sobres, elle est un excellent choix.', 300),
							/*https://images.caradisiac.com/images/0/2/1/4/40214/S0-Les-meilleures-citadines-524181.jpg*/
							(0, 'AA-005-BB','Skoda', 'Fabia','Citadine','Rouge', 5,'Son gabarit lui permet une grande polyvalence tandis que sa sobriété rattrape un peu un coût d entretien audessus de la moyenne', 300),
							/*https://images.caradisiac.com/images/0/2/1/4/40214/S0-Les-meilleures-citadines-524156.jpg*/
							(0, 'AA-006-BB','AUDI', 'A4','Routière','Gris', 6,'Avec son nouveau design et sa carrosserie presque entièrement remodelée, l’Audi A4 Berline affirme plus que jamais son caractère sportif.', 400),
							/*https://www.audi.fr/fr/web/fr/gamme/a4/a4-berline.html*/
							(0, 'AA-007-BB','BMW','Serie 3 Berline','Routière','Noir', 7,' la BMW Série 3 Berline fascine à chaque trajet. Elle incarne comme nulle autre la notion de berline sportive. Le modèle en est désormais à sa septième génération', 400),
							/*https://www.bmw.fr/fr/tous-les-modeles/3-series.html*/
							(0, 'AA-008-BB','mercedes-benz','Classe C Berline','Routière','', 8,'Plus athlétique et intelligente que jamais, la Classe C Berline est au sommet de sa forme', 400),
							/*https://www.mercedes-benz.fr/passengercars/mercedes-benz-cars/c-class-landing-page/video.module.html*/
							(0, 'AA-009-BB','Renault','Talisman','Routière','Gris', 9,'Lignes dynamiques soulignées de chrome, face avant affirmée, signature lumineuse high-tech, la berline 5 portes Renault TALISMAN se distingue par son élégance racée', 400),
							/*https://www.renault.fr/vehicules/vehicules-particuliers/talisman.html*/
							(0, 'AA-010-BB','Skoda','Superb','Routière','Noir', 10,'La Škoda Superb est une automobile haut de gamme produite et commercialisée par le constructeur automobile tchèque Škoda Auto', 400),
							/*https://fr.skoda.be/modeles/superb/superb*/
							(0, 'AA-011-BB','Rolls Royce', 'Corniche 2000','Luxe','Crème', 11,'Fabriquée par les constructeurs d’automobiles Frederick Henry Royce et Charles Stewart Rolls, cette voiture se démarque de toutes les autres par son aspect imposant et surtout son confort ', 800),
							/* https://www.cars-data.com/en/pictures-rolls-royce-corniche-2000/3645/2 */
							(0, 'AA-012-BB','Bentley', 'Continental GT','Luxe','Bleu', 12,'Très prisée par les athlètes et les superstars millionnaires, cette voiture de luxe reste sans doute la plus belle de toute la liste. Elle se distingue par son originalité et ses récentes améliorations telles que : les nouvelles calandres « B » de Bentley sur les ailes, le système d’info divertissement frais et les pare-chocs avisés', 800),
							/* http://www.autonews.fr/actualite/bentley-continental-gt-2018-79631 */
							(0, 'AA-013-BB','Ferrari', '488','Luxe','Rouge', 13,'C’est l’une des meilleures voitures de course aujourd’hui, et elle se considère comme la plus rapide et la plus performante de tous les temps', 800),
							/* https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.challenges.fr%2Fassets%2Fimg%2F2018%2F02%2F21%2Fcover-r4x3w1000-5a8d42f0e83fb-180059-car-488-pista-jpg.jpg&imgrefurl=https%3A%2F%2Fwww.challenges.fr%2Fautomobile%2Fgeneve%2Fferrari-488-pista-pour-la-route-comme-pour-la-piste_568970&docid=CocUj1g_9EezcM&tbnid=ek3yEdAvEplL6M%3A&vet=10ahUKEwiI8JjprKLnAhVAUxUIHaHaDckQMwhKKAIwAg..i&w=1000&h=749&bih=647&biw=1280&q=Ferrari%20488&ved=0ahUKEwiI8JjprKLnAhVAUxUIHaHaDckQMwhKKAIwAg&iact=mrc&uact=8*/
							(0, 'AA-014-BB','Lamborghini', 'Urus','Luxe','Jaune', 14,'Comme le voulait son constructeur l’industriel Ferruccio Lamborghini, cette voiture vient concurrencer la Ferrari et la Maserati. Au-delà de sa beauté très captivante, la Lamborghini possède des dimensions extrêmes, un design distinctif et des performances exceptionnelles qui la rendent unique', 800),
							/* https://www.google.com/search?tbm=isch&sxsrf=ACYBGNS43dyzom-ZEFPNRWxSP0cTwO_Iig%3A1580079200619&sa=1&ei=YBguXoe_Jfe61fAPxKG1kAk&q=urus+lambo&oq=Urus%E2%80%89&gs_l=img.1.4.0j0i67j0l3j0i67j0l4.1016.1016..4509...0.0..0.109.147.1j1......0....2j1..gws-wiz-img.......35i39.D9QulvrZ4R0#imgdii=z6B2d9aKX0kxFM:&imgrc=27W9R7RUfYyuKM:*/
							(0, 'AA-015-BB','Maserati', 'levante','Luxe','Noir',15,'La voiture de luxe avec des performances hors du commun. La Maserati combine un style sophistiqué, une puissance raciale, une tenue de route sportive et un confort impeccable pour vous garantir tout le luxe dont vous rêvez. Que vous choisissez la Levante, la Quattroporte ou la GT Décapotable, vous ne manquerez pas d’apprécier la performance de cette marque', 800),
							/* https://www.google.com/search?q=maserati+levante&hl=fr&sxsrf=ACYBGNTioLaHBTvC4h08GTfVS5DzuxuA5A:1580079358377&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiFz_2mrqLnAhWNyIUKHRgkBKoQ_AUoAXoECA8QAw&biw=1280&bih=647&dpr=2#imgrc=CXqDPeXJi7TlOM:*/
							(0, 'AA-016-BB','Renault', 'Kangoo','Utilitaire','Noir', 16,'La troisième génération de Renault Kangoo est préfigurée à 80 % par le Renault Kangoo ZE concept présenté le 23 avril 2019. Le Kangoo ZE est un véhicule électrique et, comme le futur Kangoo, il est dénué de montant central pour faciliter l accès à bord.', 450),
							/* https://www.renault.fr/vehicules/vehicules-particuliers/kangoo.html*/
							(0, 'AA-017-BB','Renault', 'Master III','Utilitaire','Gris', 17,'Le Renault Master III est une camionnette produite par Renault depuis avril 2010. Il s agit de la troisième génération du Renault Master qui remplace le Master II.', 450),
							/* https://www.google.com/search?q=Master+III+Renault&sxsrf=ACYBGNTOk9rqVi52Aa8uPS0d0y13f0dSAQ:1580080086512&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjjvpeCsaLnAhUmxoUKHQuJAG4Q_AUoAXoECAwQAw&biw=1280&bih=647#imgrc=K_68O6MqIVoUtM: */
							(0, 'AA-018-BB','Renault', 'Trafic','Utilitaire','Noir', 18,'Le Renault Trafic est l’un des véhicules utilitaires qui figure parmi les plus vendus. Décliné en 13 versions, il dispose de deux empattements (3098 et 3498 mm), deux hauteurs (1,96 et 2,50 m) deux charges utiles (1000 à 1200 kg) et quatre types de carrosseries (fourgon de 5 à 8 m3, cabine approfondie, combi et plancher cabine)', 450),
							/* https://www.google.com/search?hl=fr&biw=1280&bih=647&tbm=isch&sxsrf=ACYBGNTE-R1TRljCPgdTdDBrBICjivK-ag%3A1580080372968&sa=1&ei=9BwuXtrhOv6O1fAPkI6a0Ac&q=renault+trafic&oq=Renault+Trafic&gs_l=img.1.0.0l10.13256.13256..14592...2.0..0.47.136.3......0....2j1..gws-wiz-img.......0i67.KLZ3YDzjbas#imgrc=Re90LG8VrCPz9M:*/
							(0, 'AA-019-BB','Fiat', 'Ducato','Utilitaire','Blanc', 19,'e meilleur compagnon de voyage que vous pourriez souhaiter avoir. Depuis plus de 10 ans, les véhicules utilitaires Fiat Professional sont leaders dans ce secteur.', 450),
							/* https://www.google.com/search?q=Fiat+Ducato&sxsrf=ACYBGNS519-gjNWn7KXJkYAWkp8fKuzsNQ:1580080551490&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiAv_PfsqLnAhUJ4YUKHTsrCKwQ_AUoAXoECAwQAw&biw=1280&bih=647#imgrc=Fh1pWWIUshauRM: */
							(0, 'AA-020-BB','Citroën', 'Berlingo','Utilitaire','Blanc', 20,'récurseur en matière de ludospaces depuis 1996, Citroën présente son Berlingo qui conserve tous les atouts de ses prédécesseurs et gagne en modernité. Citroën Berlingo apporte une réponse innovante et audacieuse en termes de design, de modularité et de praticité.', 450),
							/* https://www.google.com/search?q=Citro%C3%ABn+Berlingo&sxsrf=ACYBGNSQjJHWjFuaWGzFZ6nea0nRcsFtuA:1580080740725&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjHwJG6s6LnAhWGzoUKHbgmAGEQ_AUoAXoECBIQAw&biw=1280&bih=647&dpr=2#imgrc=5a1EH3E0zuYfYM: */
							(0, 'AA-021-BB','Renault','Grand Scenic','Transport','Marron', 21,'Parce que les grandes familles ont aussi droit au design, Nouveau Grand SCENIC fait peau neuve. Laissez-vous séduire par son style aérodynamique et élégant.', 400),
							/*https://www.renault.fr/vehicules/vehicules-particuliers/grand-scenic.html?ORIGIN=F6liens-commerciaux&CAMPAIGN=modeles_grand-scenic_go_def-exact&utm_campaign=modeles_grand-scenic_go_def-exact&utm_medium=cpc&utm_source=google&utm_content=modeles_grand-scenic_1-brand_def-exact&utm_term=renault%20grand%20scenic&gclsrc=aw.ds&&gclid=CjwKCAiAjrXxBRAPEiwAiM3DQueuDzhByuq7WcBlzsaVJ9rEKHG3g5g_5Zbj8AIpe0yYttGCeRytFxoCmcsQAvD_BwE */
							(0, 'AA-022-BB','Citroën','Grand C4 SpaceTourer','Transport','Gris', 22,'Devenu C4 SpaceTourer, le C4 Picasso hérite en ce troisième trimestre 2018 d’une nouvelle motorisation diesel de dernière génération venant chapeauter la gamme.', 400),
							/* https://www.caradisiac.com/essai-citroen-grand-c4-space-tourer-bluehdi-160-eat8-la-creme-des-familles-170362.htm*/
							(0, 'AA-023-BB','Volkswagen','Touran','Transport','Noir', 23,'Le Volkswagen Touran est un monospace compact basé sur les Volkswagen Golf V, VI et VII. Sorti depuis avril 2003, il a été renouvelé en 2010, puis en 2015.', 400),
							/* https://www.google.com/search?q=volkswagen%27,%27Touran&sxsrf=ACYBGNSqBWWIK3e7_IIoY_M9fNIQO28ASA:1580081765906&source=lnms&tbm=isch&sa=X&ved=2ahUKEwi3uP2it6LnAhWpyYUKHcFpArwQ_AUoAXoECBIQAw&biw=1280&bih=647#imgrc=G1TF2v4Nat9LXM:*/
							(0, 'AA-024-BB','Renault','Espace','Transport','Rouge', 24,'Avec sa nouvelle grille de calandre chromée, ses nouveaux boucliers avant et arrière ainsi que ses nouvelles jantes 20’’, Nouvel ESPACE renforce son caractère de crossover.', 400),
							/* https://www.renault.fr/vehicules/vehicules-particuliers/nouvel-espace.html*/
							(0, 'AA-025-BB','Dacia','Lodgy','Transport','Bleu', 25,'Adaptée à toutes les familles sans oublier d avoir du style. Sa calandre, ses boucliers généreux, ses larges projecteurs et ses feux arrière au design affûté renforcent sa personnalité.', 400);
							/* https://www.google.com/search?q=Dacia%27,%27Lodgy&sxsrf=ACYBGNTvkLxvb4f1zHOtZOgENDgD4b-W7A:1580082052470&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjo_M-ruKLnAhWCyYUKHWXGChUQ_AUoAXoECAwQAw&biw=1280&bih=647#imgrc=NVzifOM7FGMheM:*/