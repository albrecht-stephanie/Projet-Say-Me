-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 29 juin 2020 à 19:44
-- Version du serveur :  8.0.20-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sayme`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `startdescrib` text NOT NULL,
  `describ` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `publishDate` date NOT NULL,
  `id_categories` int NOT NULL,
  `id_marques` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `image`, `startdescrib`, `describ`, `publishDate`, `id_categories`, `id_marques`) VALUES
(1, 'Samsung Galaxy S9+', 'Samsung-galaxy-s9-noir-64-go.jpg', 'Smartphone débloqué Samsung S9 doté d\'un écran infinity 6, 2\" Quad HD+ ultra lumineux, d\'un mode vidéo super ralenti de 960 images/secondes.', 'Grâce à son appareil photo arrière de 12 MP Dual Pixel, faisant capteur téléobjectif zoom optique x2, il est désormais possible de bénéficier de photos claires même en basse lumière.\r\nIl est également équipé d\'un appareil photo frontal de 8MP doté d\'un autofocus, du contrôle par mouvement\r\net vocal, du flash avant et d\'ouverture f/1, 7.\r\nLe Samsung Galaxy S9 Plu6 est doté de haut-parleurs stéréo développés par AKG. Le processeur Octo core et les mémoires RAM de 6Go, et ROM de 64Go (plus port microSD jusqu\'à 256Go) permettent d\'avoir accès à vos contenus rapidement.\r\nIl est équipé d\'une batterie de 3500mAh, rechargeable en charge rapide et/ou charge sans fil, et dotée de mode économie d\'énergie, et ultra économie d\'énergie. Il est compatible avec les réseaux 2G, 3G, 4G, 4G+,fonctionne sous Android Oreo 8.0, et avec une surcouche Samsung Expérience 9.0.\r\nIl est doté d\'un double port nano SIM. La sécurité de votre smartphone est garantie grâce à la reconnaissance par: empreinte digitale, iris, faciale, ainsi que par la technologie embarquée Knox 3.1.', '2020-03-10', 1, 1),
(2, 'Samsung Galaxy S20 Ultra 5G', 'samsung-galaxy-s20-ultra.jpg', 'Ecran Infinity Quad HD+, 120 Hz, Dynamic AMOLED – 16M de couleurs, Gorilla Glass 6, Filtre de lumière bleue, Always On Display.', 'Caméra frontale : 10 MP Dual Pixel, Ouverture f/2.2, Autofocus, HDR10+, Contrôle par mouvement, Contrôle\r\nvocal, Flash avant, Touche flottante.\r\nModes et interface : AR Emoji, Panorama, Pro, Mode portrait, Mode portrait Vidéo, Nourriture, per ralenti,\r\nRalenti, Hyperlapse, Nuit.\r\nLecture d’images – Formats supportés : AGIF, BMP, GIF, JPG, PNG, WBMP.\r\nEnregistrement jusqu’en 8K 24fps (principal) et 4K 30 fps (frontal), Lecture jusqu’en 8K 30 fps, Lecture\r\nde vidéos - Formats supportés : MP4, M4V, 3GP, 3G2, WMV, ASF, AVI, FLV, MKV, WEBM.\r\nCapteurs : Accéléromètre , Baromètre, Capteur magnétique, Capteur de luminosité, Capteur de proximité,\r\nEmpreinte digitale, Gyroscope, Mémoire RAM : 12 Go, Double port SIM hybride + E-SIM, Thèmes personnalisables, Fond d’écran photo ou vidéo, Reconnaissance faciale, Haut-parleurs stéréo AKG,\r\nSon compatible Dolby Atmos, Lecture de musique – formats supportés :MP3, M4A, 3GA, AAC, OGG, OGA, WAV, WMA, AMR, AWB, FLAC, MID, MIDI, XMF, MXMF, IMY,\r\nRTTTL, RTX, OTA, DFF, DSF, APE ; Localisation : GPS, GLONASS, Beidou, Galileo.', '2020-03-10', 1, 1),
(3, 'Acer Predator Helios Gaming 15.6\"', 'pc-predator.jpg', 'Compacte, solide, performant et favorable à l\'upgrade, l\'Acer Predator Helios\r\nPH315-52-54FD avance quelques arguments convaincants, ', 'Compacte, solide, performant et favorable à l\'upgrade, l\'Acer Predator Helios PH315-52-54FD avance\r\nquelques arguments convaincants,\r\nsans parler de sa carte graphique récente GeForce GTX 1660 Ti qui offre une niveau de jeu haut de gamme.\r\nDerrière son look racé aux accents bleutés,\r\nil installe également une base correcte partagée entre un Quad Core i5 et un stockage basique de 1 To avec\r\n8 Go de RAM.\r\nL\'écran IPS borderless apporte sa part d\'immersion tandis que le système de refroidissement a été\r\nretravaillé au service de l\'efficacité.\r\nLe package est convaincant, à condition de passer outre l\'absence de SSD, sa connectique mal organisée et\r\nson écran de fréquence basique.', '2020-03-10', 4, 8),
(4, 'Apple iMac 21.5\" 2017', 'pc mac.jpg', 'L\'iMac dispose d\'un écran de 21,5\" avec un écran FHD qui vous offre une expérience visuelle si spectaculaire que tout ce qui est autour semble s’effacer. ', 'C’est un formidable bond en avant. Vers une sensation d’immersion plus intense que jamais. L\'iMac est équipé d’un processeur Intel Core i5 bicoeur de 2,3 GHz avec 8 Go de RAM. D’un point de vue stockage, l\'iMac est équipé d’un disque dur de 1 To. Vous pouvez aisément sauvegarder des fichiers lourds sans vous demander s’il y a assez de place dans cet iMac. L\'iMac vous procure une connectivité de tout confort : wiFi ac, Bluetooth 4.0 ou encore le réseau filaire Gigabit Ethernet. En toute situation, pour répondre à vos besoins divers, il est équipé de 4 ports USB 3.0 afin de pouvoir connecter vos périphériques externes.\r\nApple intègre à sa machine un processeur Intel Core efficace : Intel Core i5. Ce processeur offre de bonnes performances. Idéal pour jouer à vos jeux ou pour une utilisation bureautique et multimédia : navigation Internet, traitement de texte et lecture de vidéos HD.\r\nUn Mac se doit d\'être bien équipé en stockage et en mémoire. Avec sa capacité de stockage de 1000 Go présente sur l\'iMac, vous avez la possiblité de sauvergarder toutes les données que vous souhaitez sans jamais vous soucier de la place qu\'il vous reste. De plus, vous serez surpris par la rapidité d\'exécution de toutes vos tâches grâce aux 8 Go de mémoire vive qui accompagnent à merveille le processeur Intel Core i5.\r\nDésormais standard sur les PC, la norme USB 3.0 augmente de près de 10 fois la vitesse de transfert de données par rapport à la norme USB 2.0. Avec elle, les fichiers sont déplacés et sauvegardés instantanément et vous pourrez alors oublier les moments d\'attente lors de la copie de vos plus gros fichiers. Pour exemple, un film Blu-Ray de 25 Go ne mettra que 70 secondes à être transféré !\r\nL\'iMac possède 4 ports USB 3.0 pour des transferts plus rapides. Il possède également un port HDMI. Enfin, le port Ethernet permet une connexion à un réseau filaire. L\'iMac embarque le WiFi 802.11ac et la technologie Bluetooth 4.0 pour une connexion sans fil efficace.', '2020-03-10', 4, 2),
(5, 'Xiaomi Mi Band 4 Noir ', 'xiomi montre.jpg', 'Les points clés\r\n- iOS et Android\r\n- Etanche jusqu\'à 50 m\r\n- Cardiofréquencemètre Au poignet\r\n\r\n', 'Cardiofréquencemètre (+ d\'infos) : au poignet\r\nSuivi de votre activité : Oui\r\nGyroscope (+ d\'infos) : Oui\r\nAccéléromètre : Oui, à 3 axes\r\nGPS : Non\r\nSuivi sportif : Oui\r\nAppels : Notification de l\'appelant\r\nBluetooth : Bluetooth 5.0\r\nCapacité de stockage : 16 Mo\r\nSystème d\'exploitation : iOS et Android\r\nPoids : 21 g\r\nLivré avec : Notice, Câble de charge: Oui\r\nGPS au poignet : Non', '2020-03-10', 3, 7),
(6, 'Huawei Mediapad T5 10\'', 'tablette huawei.jpg', 'Les points clés\r\n- Ecran XL 10,1\" (25,6 cm)\r\n- Légère (460g)\r\n- Autonomie non communiquée\r\n- Processeur Huawei\r\n\r\n', 'Ecran et diagonale : Ecran XL 10,1\" (25,6 cm)\r\nWebcam avant : 2 mégapixels\r\nWebcam arrière : 5 mégapixels\r\nSystème : Android 8.0 Oreo\r\nRéférence et spécificités : HUAWEI Kirin 659 Octo-Core A53 (4 x 2,36 GHz, 4 x 1,7 GHz)\r\nCapacité totale : 3,0 Go\r\nType de stockage : Mémoire flash\r\nLecteur de carte mémoire : Lecteur de carte mémoire\r\nWifi : Oui\r\nBluetooth : Oui\r\nDAS : débit d\'absorption spécifique local (tête et tronc) : 2,000 W/kg. Le DAS des téléphones mobiles quantifie le niveau d exposition maximal de l utilisateur aux ondes électromagnétiques, pour une utilisation à l oreille. La réglementation française impose que le DAS ne dépasse pas 2 W/kg\r\nDétail : DAS : débit d\'absorption spécifique local (tête et tronc) (en W/kg)(2.000), Wifi: Oui, Bluetooth: Oui\r\nPoids : Légère (460g)\r\nColoris : Noir\r\nDimensions l x h x p : 24.3 x 16.4 x 0.78 cm\r\nPoids : 460 g\r\n', '2020-03-10', 2, 6),
(7, 'Cookeo Moulinex + Connect Grameez ', 'moulinex_cookeo.jpg', 'Les points clés\r\n- Cookeo connect - 1600 W\r\n- 6 personnes\r\n- Cuisson vapeur, Mijoter, Maintien au chaud automatique, Réchauffage, Dorage, Cuisson sous pression\r\nLe + : Connectivité entre la balance, le Cookéo et l\'application pour vous proposer des recettes adaptées\r\n\r\n', 'Type de produit : Cookeo connect\r\nFonction : Tout type de cuisson\r\nMatière du corps : Thermoplastique\r\nPuissance : 1600 W\r\nCapacité : 6,00 L\r\nPersonnes : 6 personnes\r\nIndicateur de fonctionnement : Oui\r\nVoyant lumineux : Oui\r\nTouche Marche/arrêt : Oui\r\nThermostat : Non\r\nEcran : LCD\r\nDépart différé : Oui\r\nMinuterie : Oui\r\nCouleur : Noir\r\nPanier vapeur externe : Oui\r\nBol/Panier/faitout amovible : Oui\r\nCapacité : 6,00 L\r\nCuve amovible : Oui\r\nCuve anti-adhésive : Oui\r\nNombre de recettes préprogrammées : 150 recettes préprogrammées\r\nDétail des programmes : Cuisson vapeur, Mijoter, Maintien au chaud automatique, Réchauffage, Dorage, Cuisson sous pression\r\nMenu ingrédients : Je choisis l\'ingrédient, l\'appareil le cuit tout seul ! Viandes, poissons, légumes, fruits,...\r\nMenu recettes : 150 recettes préprogrammées, sucrées ou salées !\r\nMenu manuel : C\'est vous qui pilotez le mode et le temps de cuisson ! Dorer, rissoler, cuisson rapide, cuisson vapeur et en sauce\r\nMenu Favori : Mémorisez vos recettes préférées puis accédez y en un seul clic !\r\nApplication gratuite à télécharger : Mon Cookéo : Profitez de l\'application connectée qui vous propose plus de 2000 recettes avec des explications pas à pas, les listes de courses des recettes que vous souhaitez et suivez aussi l\'évolution de la cuisson de vos plats.\r\nSystème compatible : iOS (compatible iPad 3 ou plus récent, compatible iPhone 4S ou plus récent) et Android à partir de Août 2015\r\nMode de transfert des données : Bluetooth Smart\r\nPieds anti-dérapants : Oui\r\nParois froides : Oui\r\nPoignées froides : Oui\r\nCompatibilité lave-vaisselle : Cuve, couvercle et panier\r\nLivré avec : Notice, Panier vapeur\r\nDimensions l x h x p : 37.6 x 35.5 x 35.4 cm\r\nPoids Net : 6,40 Kg', '2020-03-10', 5, 24),
(8, 'Lave linge Electrolux autodose', 'lave linge electrolux.jpeg', 'Les points clés\r\nL x H x P : 60 x 85 x 66 cm\r\nCapacité XL (9kg) - Tambour 69L\r\nEssorage très élevé (1600 trs) - Eco A+++\r\nDépart différé 20 heures\r\nLe + : Les capteurs AutoDose calculent la quantité précise de lessive et d\'assouplissant pour protéger les vêtements.\r\n\r\n', 'SensiCare : Cela permet une détection rapide de la charge. Il adapte ainsi la durée du cycle 10 à 15 minutes après son lancement et à partir de 2kg de linge\r\nAutoDose : Les réservoirs à lessive et d\'adoucissant sont un vrai gain de temps et dénergie. Le dosage automatique adapte la quantité de produit en fonction du cycle choisi.\r\nCapacité lavage (+ d\'infos) : 9,0 kg\r\nEssorage (+ d\'infos) : 1600 tr/mn\r\nTambour de (+ d\'infos) : 69 L\r\nType de moteur (+ d\'infos) : Moteur Eco Inverter: permet de connaitre la durée du cycle 30 secondes seulement après son lancement en fonction de la charge du linge\r\nNiveau sonore au lavage (+ d\'infos) : 51 dB\r\nNiveau sonore à l\'essorage (+ d\'infos) : 77 dB\r\nEcran d\'affichage : LCD\r\nType de programmation : Electronique\r\nDépart différé ou fin différée : Départ différé 20 heures\r\nType d\'évacuation : Pompe : Permet de raccorder la vidange à une évacuation classique\r\nFonction vapeur : Permet de rafraichir votre linge et de réduire votre temps de repassage.\r\nLave linge connecté : Il est maintenant possible d\'être relié et de contrôler en permanence votre machine. Une simple connexion Wifi permet de gérer à distance le bon déroulement de votre lessive.\r\nSpécificité(s) détenue(s) : Reconnaissance de la charge\r\nDétail : Rapide, Laine, Coton, Delicat, Jean, Synthétique\r\nDétail : Chemise, Imperméabilisant, Anti allergie, Soie, Voilage/lingerie, Lavage tambour\r\nDétail : Rinçage plus, Prélavage\r\nClasse énergétique (+ d\'infos) : A+++\r\nClasse d\'efficacité à l\'essorage : A\r\nConsommation d\'energie annuelle : 152 kW\r\nConsommation d\'eau annuelle : 10500 L\r\nCoût annuel d\'utilisation (basé sur 220 cycles de lavage par an) : 63 euros\r\nProgramme référent : Coton 60°C\r\nDétail : Sécurité enfant, Anti-débordement\r\nCuve : Polypropylène\r\nHublot : Verre\r\nTambour : Tambour inox alvéolé: il permet de réduire le frottement et l\'étirement du linge lors des cycles de lavage.\r\nTop amovible : Non\r\nFormat (Profondeur) : XL\r\nL x H x P : : 60 x 85 x 66 cm\r\nAstuces : Prévoir 3 cm supplémentaire au niveau de la profondeur pour le dépassement des boutons, hublot et fond non lisse\r\nLongueur du cordon électrique : 180 cm\r\nLongueur du cordon d\'évacuation d\'eau : 145 cm\r\nPoids net : 71,5 kg\r\nPoids brut : 73,0 kg\r\nLivré avec : Notice, Cordon d\'alimentation électrique, Cordon d\'alimentation d\'eau, Cordon d\'évacuation d\'eau', '2020-03-10', 7, 17),
(9, 'Aspirateur balai Dyson Cyclone V10 Animal ', 'dyson balai v10.jpg', 'Les points clés\r\n- Très élevée (25,2 volts) - Sols, meubles & hauteurs\r\n- Batterie longue durée (Lithium)\r\n- Autonomie élevée (60 min) - Temps de charge 3 heures 30 minutes\r\n- Aspirateur main détachable - 2,50 Kg\r\nLe + : Capacité du bac XL: 0,8L / 2 mini brosses supplémentaires\r\n\r\n', 'Utilisation : Sans fil\r\nProduit : Aspirateur Balai\r\nUsage : Sols, meubles & hauteurs\r\nGamme : V10\r\nModèle : Animal\r\nFonction supplémentaire : Aspirateur main détachable\r\nAlimentation : Rechargeable\r\nTechnologie d\'aspiration (+ d\'infos) : Cyclonique\r\nAutre technologie : Moteur numérique V10\r\nPuissance maximale : 525 W\r\nPuissance (en V) (+ d\'infos) : Très élevée (25,2 volts)\r\nAutonomie (+ d\'infos) : Autonomie élevée (60 min)\r\nTemps de charge : 3 heures 30 minutes\r\nNombre de vitesse : 3 vitesses\r\nCapacité du sac/bac : 0,8 L\r\nBrosse principale : Brosse motorisée\r\nColoris : Violet\r\nAspirateur main : Aspirateur main détachable\r\nNiveau sonore : 77,0 dB\r\nBrosse à entraînement direct (Motorhead) (+ d\'infos) : Brosse pour tous types de sols. Les poils rigides en nylon gainés pénètrent et décollent efficacement la poussière des moquettes. Les poils en fibre de carbone permettent de retirer la poussière fine des sols durs.\r\nAccessoire combiné (Dyson) (+ d\'infos) : Large conduit pour les miettes et les grosses particules et brosse pour la poussière.\r\nLong suceur (Dyson) (+ d\'infos) : Pour nettoyer dans les endroits confinés\r\nMini brosse motorisée (Dyson) (+ d\'infos) : Pour enlever plus de poussières incrustées dans les espaces confinés et nettoyer efficacement les tissus d\'ameublement.\r\nMini brosse douce (Dyson) (+ d\'infos) : Dotée de poils souples pour éliminer la poussière des surfaces fragiles\r\nStation murale de chargement et de rangement (Dyson) (+ d\'infos) : Pour recharger et ranger l\'appareil et ses accessoires lorsqu\'il n\'est pas utilisé.\r\nFiltre avant moteur : Oui\r\nFiltre sortie d\'air : Système de filtration complet de lappareil. Un système de filtration parfaitement étanche qui capture et emprisonne 99,97 % des particules aussi petites que 0,3 microns pour rejeter un air plus propre. (Testé selon la norme ASTM F1977-04)\r\nConseil d\'entretien : à laver tous les mois\r\nModèle de batterie (+ d\'infos) : Batterie longue durée (Lithium)\r\nSupport de charge : Station murale\r\nDimensions l x h x p : 12.49 x 2.5 x 2.56 cm\r\nPoids net : 2,50 Kg\r\nLivré avec : Brosse à entraînement direct (Motorhead), Accessoire combiné (Dyson), Long suceur (Dyson), Mini brosse motorisée (Dyson), Mini brosse douce (Dyson), Station murale de chargement et de rangement (Dyson), Mini brosse douce', '2020-03-10', 8, 23),
(10, 'Lenovo Ideapad S340-15API ', 'lenovo_id_s340-15apir7.jpg', 'L\'ordinateur portable  IdeaPad S340-15API  de Lenovo a été spécialement conçu pour vous offrir le meilleur du multimédia à portée de main. Ultra-performant, il est doté d\'un écran LED 15 ,6\" HD,', 'd\'un processeur AMD Ryzen 7 3700U, une carte graphique AMD Radeon RX Vega 10 et de multiples connectiques pour vous garantir un accès rapide et fluide à l\'ensemble de vos contenus, où que vous soyez. Arborant un châssis gris au design épuré, il vous accompagnera avec élégance partout au quotidien.\r\nEcran LED Full HD 15,6 pouces: parfait pour le surf et la bureautique !\r\nAvec une résolution de 1920 x 1080 pixels,  l\'écran LED 15,6 pouces Full HD du PC portable  IdeaPad S340-15API vous propose un affichage aux couleurs plus riches et aux contrastes plus soutenus pour une image stable.  Avec son large touchpad tactile multipoints,  le clavier vous apporte un réel confort d\'utilisation.\r\nProcesseur AMD Ryzen 7 3700U   et carte graphique AMD Radeon RX Vega 10 : un usage fiable et polyvalent !\r\nProcesseur AMD Ryzen 7 3700U  avec  8 Go de mémoire vive, le tout couplé à  une carte graphique  AMD Radeon RX Vega 10, synonyme de  fiabilité et de polyvalence. De plus,  le Lenovo  IdeaPad  S340-15API  embarque  un disque dur 512 Go SSD pour stocker facilement tout ce que vous souhaitez. ', '2020-03-11', 4, 12),
(11, 'Samsung Galaxy Note 10+', 'Galaxy-Note-10-Double-SIM-256-Go.jpg', 'Les points clés\r\n- Ecran large 6,3\" soit 16 cm\r\n- Stockage très élevé 256 Go\r\n- Batterie très longue durée 3500mAh\r\n- Mémoire RAM 8 Go\r\nLe + : Triple capteur photo avec mode Instagram !\r\n\r\n', 'Appareil photo numérique\r\nNombre de capteurs (+ d\'infos) : 3\r\nRésolution : 12 mégapixels+ 16 mégapixels+ 12 mégapixels\r\nRésolution caméra avant (Selfie) : 10 mégapixels\r\nStabilisateur : Optique\r\nDétails appareil photo numérique avant : 10 MP Dual Pixel\r\nEnregistrement vidéo (appareil frontal) : Enregistrement jusqu\'en UHD 4K 60 fps (principal) et 30 fps (frontal)\r\nMode HDR (+ d\'infos) : Oui\r\nRésolution maximale d\'une vidéo : 3840 x 2160 pixels\r\nType de Flash : Flash\r\nZoom optique x : 2\r\nTaille de l\'écran (diagonale, en pouces) (+ d\'infos) : 6,3\" soit 16 cm\r\nTechnologie de l\'écran : AMOLED (OLED)\r\nRésolution de l\'écran : 2280 x 1080 pixels\r\nType d\'écran : Bord à bord avec Stylet\r\nMémoire interne : 256 Go\r\nExtension de la mémoire : Non', '2020-03-11', 1, 1),
(12, 'Samsung - Gear Fit 2 PRO ', 'samsung gear fit2.jpg', 'Bracelet Samsung Gear Fit2 Pro rouge taille S SM-R365NZRN : - Moniteur d\'activité autonome - Capteurs : GPS, cardiofréquencemètre, accéléromètre, baromètre, gyroscope ', ' Bien-être au quotidien : Nombre de pas, nombre d\'étages gravis, eau ingérée, caféine ingérée, calories dépensées - Mesure automatique de l\'activité physique - Suivi sportif\r\nGraphique fractionnés et statistiques consultables par types d\'activité - Lecteur audio : environ 500 morceaux - Autres fonctionnalités. Wi-Fi: 802.11 b/g/n 2.4GHz\r\nCertification IP 68 - Bluetooth 4.2 et Wifi - Bracelet interchangeable - Compatible avec les smartphones sous Android 4.4 et versions ultérieures possédant 1.5 Go de RAM minimum et IOS 9.0\r\nEcran capacitif super AMOLED - Tizen - Exynos 3250, Dual Core 1.0 GHz - Mémoire partagée : 4 Go - Mémoire RAM : 512 Mo - Batterie Li-ion 200 mAh - Vendu avec bracelet taille S : 125 - 170 mm\r\nRésolution: 216 x 432.GPS Battery Time: Jusqu\'à 9 Hours ', '2020-03-11', 3, 1),
(13, 'Tablette Apple Ipad 10.2 32Go', 'Ipad 10.2 31Go.jpeg', 'Les points clés\r\n- Ecran XL 10,2\" (25,4 cm)\r\n- Légère (483g)\r\n- Stockage standard (32 go)\r\n- Autonomie élevée (10h max.)\r\n- Processeur Apple\r\n', 'Ecran et diagonale : Ecran XL 10,2\" (25,4 cm)\r\nRésolution de l\'écran : 2160 x 1620 pixels\r\nEcran brillant : Oui\r\nTechnologie de la dalle (+ d\'infos) : IPS\r\nWebcam avant : 1,2 mégapixels\r\nWebcam arrière : 8 mégapixels\r\nSystème : iPadOS\r\nRéférence et spécificités : Apple A10 Fusion\r\nPrécision : architecture 64 bits Coprocesseur M10 intégré\r\nCapacité totale : 2,0 Go\r\nCapacité en Go : Stockage standard (32 go)\r\nType de stockage : Mémoire flash\r\nWifi : 802.11 a/b/g/n/ac\r\nBluetooth : 4.2\r\nWifi Direct (+ d\'infos) : Oui\r\nDétail : Communication: Wi-Fi, Wifi: 802.11 a/b/g/n/ac, Wifi Direct: Oui, Bluetooth: 4.2\r\nSortie casque : Oui\r\nPort Lightning : 1\r\nAutonomie en heures : Autonomie élevée (10h max.)\r\nType de batterie : Lithium polymer\r\nPuissance (en Wh) : 32.4\r\nAutonomie : Jusqu\'à 10 heures\r\nRechargeable : Via secteur et USB\r\nEnceintes : Haut-parleurs stéréos intégrés\r\nMicrophone intégré : 2 microphones\r\nDimensions l x h x p : 17.4 x 25 x 0.7 cm\r\nPoids : 483 g\r\nLivré avec : Adaptateur secteur', '2020-03-11', 2, 2),
(14, 'Robot multifonction Magimix', 'Magimix-Multifonction-CS-4200-XL.jpg', 'Les points clés\r\n- Capacité standard (3 L)\r\n- Moteur professionnel - 950 W\r\n- 3 fonctions - 1 vitesse\r\nLe + : Compact, robuste et polyvalent grâce à ses nombreux accessoires.\r\n\r\n', 'Type robot : Robot multi-fonctions\r\nGamme : 4200 XL\r\nNombre de fonction(s) : 3 fonctions\r\nProgramme(s) : Pétrir, Fouetter, Battre, Trancher, Couper, Râper, Mixer\r\nDouble cheminée : Oui\r\nOuverture assistée du bras : Non\r\nMatière du corps : ABS : Plastique haute résistance\r\nColoris : Blanc\r\nEcran : Non\r\nAccessoire(s) fourni(s) : Rappeur/Trancheur, BlenderMix, Couvercle anti-éclaboussures, Disque(s) râpeur, Disque(s) éminceur, Pétrin, Spatule, Boîte de rangement des accessoires\r\nPuissance : 950 W\r\nNombre de vitesse : 1 vitesse\r\nTouche turbo/pulse : Oui\r\nVariateur de vitesses : Non\r\nPétrir (+ d\'infos) : Oui\r\nFouetter (+ d\'infos) : Oui\r\nBattre (+ d\'infos) : Oui\r\nTrancher : Oui\r\nCouper : Oui\r\nRâper : Oui\r\nMixer : Oui\r\nMatière du blender : Thermoresist\r\nMatière du bol : Plastique\r\nNombre de bols : 3\r\nCapacité du bol : Capacité standard (3 L)\r\nPoignée bol : Oui\r\nAutres accessoires : 3 cuves : 3L, 2,6L et 1,2L\r\nAccessoire(s) fourni(s) : Rappeur/Trancheur, BlenderMix, Couvercle anti-éclaboussures, Disque(s) râpeur, Disque(s) éminceur, Pétrin, Spatule, Boîte de rangement des accessoires\r\nieds antidérapants : Oui\r\nCheminée : Vous permet d\'insérer de plus gros morceaux d\'aliments sans les prédécouper\r\nSécurité couvercle : Oui\r\nGaranti sans Bisphénol A : Sans composants chimiques\r\nDimensions l x h x p : 21 x 42.5 x 26 cm', '2020-03-11', 5, 27),
(15, 'Huawei Mate 20 Lite', 'Huawei phone.jpeg', 'Le Huawei Mate 20 Lite SNE-LX1 est un bon portable Android avec processeur de 2.2Ghz Octa-Core qui permet d\'exécuter des jeux et les applications lourds.', 'Cet appareil dispose d\'une entrée pour carte SIM. Le Huawei Mate 20 Lite SNE-LX1 permet le téléchargement maximale jusqu\'à 600 Mbps pour la navigation sur Internet, mais cela dépend aussi de l\'opérateur.\r\nExcellent connectivité de cet appareil qui dispose de Bluetooth version 4.2 avec A2DP, WiFi 802.11 a/b/g/n/ac + MIMO (2.4Ghz, 5Ghz) et la technologie NFC pour effectuer des paiements et connexion d\'autres appareils.\r\nY compris la batterie, le portable Huawei Mate 20 Lite SNE-LX1 pèse 172 grammes et est un appareil très mince avec seulement 7,6 mm. \r\nArchitecture - Chipset	64bits - HiSilicon Kirin 710 (12nm)\r\nCPU processeur / nombre de cœurs	Octa-Core, 2 processeurs:\r\n2.2Ghz Quad-Core ARM Cortex-A73\r\n1.7Ghz Quad-Core ARM Cortex-A53\r\nGPU carte graphique	ARM Mali-G51 MP4 1Ghz\r\nMémoire vive (RAM) : 4Go LPDDR4\r\nMémoire de masse : 64Go (50Go accessible à l\'utilisateur)\r\nMémoire pour extension : Jusqu\'à 256Go microSD, microSDHC, microSDXC\r\n(emplacement dédié)\r\nType d\'écran	LTPS IPS LCD\r\nTaille de l\'affichage	6.3\" pouces\r\nRapport écran/appareil	~81,7% (screen-to-body ratio)\r\nTouchscreen : Capacitif Multitouch\r\nRésolution d\'affichage : 1080x2340 pixels\r\nDensité de pixel (PPI) : 409 PPI\r\nCouleurs d\'affichage : 16 millions\r\nDouble Sim : Non supporté\r\nCarte SIM : 1 connecteur\r\nnano-SIM (4FF)\r\nFréquence GSM Mhz : Quad-Band 850/900/1800/1900\r\nRéseau 2G primaire : GSM 850/900/1800/1900\r\nRéseau 3G primaire : UMTS 850/900/1700/1900/2100\r\nRéseau 4G/5G primaire : LTE Cat12 (Bands 1, 3, 7, 8, 20)\r\nRéseau de données primaire : GPRS, EDGE, UMTS, HSDPA, HSUPA, HSPA+, LTE, LTE-A\r\nAppareil photo primaire	(double caméra)\r\n20 mégapixels\r\nRésolution appareil photo primaire	5184x3840 pixels\r\nEnregistrement vidéo (primaire)	Full HD (1920x1080 pixels) 30 fps\r\nAppareil photo secondaire	(double caméra frontale)\r\n24 mégapixels\r\n2MP depth sensor\r\nRésolution appareil photo secondaire	5632x4224 pixels\r\nEnregistrement vidéo (secondaire)	Full HD (1920x1080 pixels)\r\nUSB 2.0 Type-C connecteur réversible\r\nSortie audio : prise jack 3.5mm\r\nBluetooth :version 4.2 avec A2DP\r\nWiFi : 802.11 a/b/g/n/ac + MIMO (2.4Ghz, 5Ghz)\r\nNFC :Supporté\r\nGPS :A-GPS, GeoTagging, GLONASS\r\nCapteurs	Accéléromètre\r\nProximité\r\nMagnétomètre\r\nLumière ambiante\r\nGyroscope\r\nReconnaissance faciale (débloquer)\r\nCapteur d\'empreintes digitales (à l\'arrière)', '2020-03-11', 1, 6),
(16, 'Sèche linge Electrolux', 'electroluc sèche-linge.jpg', 'Les points clés\r\nL x H x P : 60 x 85 x 60 cm\r\n- Pompe à chaleur - Très éco A++\r\n- Capacité standard (8kg)\r\n- Tambour robuste (Inox) - Départ différée 12 heures\r\nLe + : Woolmark® Blue, pas de rétrécissement, ni de déformation\r\n', 'Capacité : 8,0 kg\r\nVolume : 118 L\r\nType de tambour : Inox : Le plus solide et le plus résistant des matériaux s\'invite dans votre appareil. Il offre sérénité et des cycles plus silencieux.\r\nType de séchage : Condensation : pour être mis en marche, ils n\'ont besoin que d\'une prise de courant. L\'eau est récupérée dans un réservoir, que vous viderez après chaque utilisation\r\nBac de récupération d\'eau : Réservoir d\'eau intégré au bandeau\r\nProgramme intelligent : Mesure électronique de l\'humidité du linge\r\nDépart différé ou fin différée : Départ différée 12 heures\r\nEcran d\'affichage : LCD\r\nProgrammateur : Electronique : une précision de séchage optimale : elle mesure au degré près le taux d\'humidité de votre linge. Résultat, votre sèche-linge s\'arrête automatiquement une fois les textiles séchés selon vos réglages.\r\nPompe chaleur (+ d\'infos) : Pompe à chaleur : système de création de chaleur innovant, il permet de réaliser des économies d\'énergies importantes et préserve votre linge lors du séchage même les plus délicats.\r\nDétails : Eclairage intérieur, Indicateur de saturation du filtre, Affichage bac plein\r\nConsommation\r\nClasse énergétique (+ d\'infos) : A++\r\nProgramme référent pour les données mesurées : Coton prêt à ranger pleine charge\r\nConsommation d\'énergie moyenne par cycle : 1,99 kWh\r\nConsommation d\'énergie annuelle : 235 kWh/an\r\nCoût annuel en consommation d\'énergie (pour 160 cycles par an et 0.1503 E /Kwh ) : 35 euros\r\nNiveau sonore (+ d\'infos) : 66 dB\r\nTaux d\'humidité résiduelle : B\r\nDimensions du sèche linge\r\nTop amovible : Non\r\nL x H x P : : 60 x 85 x 60 cm\r\nPoids net : 48,6 kg\r\nPoids brut : 51,2 kg\r\n\r\n', '2020-03-11', 7, 17),
(17, 'Irobot Roomba 676', 'irobot676.jpeg', 'Les points forts :\r\nAspirateur robot connecté pour sols durs et moquettes\r\nSurface couverte jusqu\'à 80 m² - Programmation : quotidienne\r\nConnexion WiFi iRobot Home App : personnalisation du nettoyage\r\nSe déplace facilement sous les meubles\r\n', 'Retour à la base automatique et reprise du travail : Non\r\n\r\nFonctionnalités aspirateur robot :\r\n- Détection du vide\r\n- Détection automatique de la poussière\r\n- Détection des obstacles\r\n- Programmable\r\n\r\nConnecté : Oui\r\n\r\nAutonomie max (pour un cycle de nettoyage) : 90 MN\r\n\r\nSurface couverte : 80 m²\r\n\r\nCapacité du réservoir : 0,6 l\r\n\r\nDurée de garantie de la batterie : 12 MN\r\n\r\nProgrammes : Quotidienne\r\n\r\nTechnologie de navigation : iAdopt\r\n\r\nTélécommande fournie : Non\r\n\r\nTemps de chargement : 120 min\r\n\r\nType de batterie : Lithium\r\n\r\nType de pare-chocs : Pare-chocs à sensibilité tactile\r\n\r\nAccessoires fournis : \r\n- Base de chargement Home Base \r\n- Cordon d’alimentation \r\n- Guide d’utilisation et documentation\r\n\r\nCaractéristiques complémentaires 	\r\nType de sols: Durs et moquette\r\nBrosse latérale: oui\r\nPoids : 3 kg\r\n\r\nDimensions : 34x9\r\n\r\nFiltres aspirateur : AeroVac\r\n\r\nDisponibilité des pièces détachées : 2 ans\r\n', '2020-03-13', 8, 28);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'smartphone'),
(2, 'tablette'),
(3, 'montre connectée'),
(4, 'pc'),
(5, 'cuisiner'),
(7, 'entretien du linge'),
(8, 'entretien de la maison');

-- --------------------------------------------------------

--
-- Structure de la table `catusers`
--

CREATE TABLE `catusers` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `catusers`
--

INSERT INTO `catusers` (`id`, `name`) VALUES
(1, 'standard'),
(2, 'intermédiaire'),
(3, 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `chat_room`
--

CREATE TABLE `chat_room` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `describ` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

CREATE TABLE `marques` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `marques`
--

INSERT INTO `marques` (`id`, `name`) VALUES
(1, 'Samsung'),
(2, 'Apple'),
(3, 'Sony'),
(4, 'Nokia'),
(5, 'Google'),
(6, 'Huawei'),
(7, 'Xiaomi'),
(8, 'Acer'),
(9, 'Asus'),
(10, 'HP'),
(11, 'Parkardbell'),
(12, 'Lenovo'),
(13, 'Whirpool'),
(14, 'Brant'),
(15, 'Bosh'),
(16, 'Siemens'),
(17, 'Electrolux'),
(18, 'Sauter'),
(19, 'Indesit'),
(20, 'Candy'),
(21, 'Haier'),
(22, 'Sharp'),
(23, 'Dyson'),
(24, 'Moulinex'),
(25, 'LG'),
(26, 'Kenwook'),
(27, 'Magimix'),
(28, 'autre');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `id_catusers` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`, `email`, `password`, `id_catusers`) VALUES
(2, 'Dupont', 'Dany', 'dupont.dany@orange.fr', '$2y$10$mBzkZKWJeb5msuFACYTA1O299QHXmkhx0aKoRDm.cn3Rpj1Kdrt3u', 1),
(3, 'Vaneste', 'Catherine', 'vaneste.catherine@free.fr', '$2y$10$vpYlIzOQbQpuLsrsLs5a9eAlMll5qoskKDG5mBxOVfTVuLH8Gy/RC', 1),
(4, 'Albrecht', 'Stéphanie', 'albrecht.stephanie@outlook.fr', '$2y$10$8cDv5TuiavhAxwq20foH8.o7VRh4jylrMztwWFr01AkVBfxKIbpM6', 3),
(5, 'Kisungu', 'Noé', 'noekisungu@gmail.com', '$2y$10$V8v2G2zkVjcVxKaop3apA.BQsmLQ3H7caZTQPkr0tu7MycFRDtVoC', 1),
(6, 'Albrecht', 'Eric', 'e.albrecht@laposte.net', '$2y$10$vHY.s02iVmFLTOAhg.xZAuhLrsCxqG6x2AglPPDtvCbdtbSgvaA7q', 1),
(7, 'Delaforet', 'Jean-Michel', 'jm.delaforet@free.fr', '$2y$10$pREyYtZiep2P1Gw1HA/njuUf59vKiHgQjRw0Uvx89nnxsB9qVq2qu', 1);

-- --------------------------------------------------------

--
-- Structure de la table `views`
--

CREATE TABLE `views` (
  `id` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `textView` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `note` int NOT NULL,
  `publishDate` date NOT NULL,
  `id_articles` int NOT NULL,
  `id_users` int NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `views`
--

INSERT INTO `views` (`id`, `title`, `textView`, `note`, `publishDate`, `id_articles`, `id_users`, `status`) VALUES
(1, 'hh', 'fff', 5, '2020-06-05', 17, 2, 1),
(2, 'ee', 'ddd', 5, '2020-06-20', 17, 2, 1),
(6, 'ok', 'oki', 5, '2020-06-26', 17, 2, 1),
(8, 'hh', 'fff', 5, '2020-06-05', 17, 2, 1),
(12, 'rr', 'rrr', 5, '2020-06-25', 17, 2, 1),
(13, 'fff', 'fff', 5, '2020-06-13', 17, 2, 1),
(20, 'r', 'r', 5, '2020-06-12', 17, 2, 1),
(25, 'Null et dangereux', 'Hyper dangereux, il a aspiré mon hamster. Je l&#39;ai retrouvé le soir dans le bac a poussiere completement terrorisé.', 5, '2020-06-18', 17, 4, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_categories_FK` (`id_categories`),
  ADD KEY `articles_marques_FK` (`id_marques`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `catusers`
--
ALTER TABLE `catusers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chat_room`
--
ALTER TABLE `chat_room`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marques`
--
ALTER TABLE `marques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_cathusers_FK` (`id_catusers`);

--
-- Index pour la table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_articles_FK` (`id_articles`),
  ADD KEY `views_users0_FK` (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `catusers`
--
ALTER TABLE `catusers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `chat_room`
--
ALTER TABLE `chat_room`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `marques`
--
ALTER TABLE `marques`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `views`
--
ALTER TABLE `views`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_categories_FK` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `articles_marques_FK` FOREIGN KEY (`id_marques`) REFERENCES `marques` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_cathusers_FK` FOREIGN KEY (`id_catusers`) REFERENCES `catusers` (`id`);

--
-- Contraintes pour la table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_articles_FK` FOREIGN KEY (`id_articles`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `views_users0_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
