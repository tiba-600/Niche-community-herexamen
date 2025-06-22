-- MySQL dump 10.13  Distrib 8.4.5, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: laravel
-- ------------------------------------------------------
-- Server version	8.0.42

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `countries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `intro` text COLLATE utf8mb4_unicode_ci,
  `activations` text COLLATE utf8mb4_unicode_ci,
  `days` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Belgium','Belgium is a wonderful destination for travelers seeking a mix of rich history, breathtaking nature, and delightful culinary experiences. This versatile country has something for everyone, whether you are a city enthusiast, art lover, foodie, or nature admirer.','Discover Belgium, a charming country where rich history meets breathtaking landscapes and world-class cuisine. Whether youre exploring vibrant cities or enjoying serene nature Belgium offers unforgettable experiences for every traveler.','\n    Take a canal boat tour in Bruges\n    Experience the romantic atmosphere of Bruges as you sail through its picturesque canals and enjoy stunning views of medieval buildings.\n\n    Visit the Atomium in Brussels\n    This iconic monument offers a unique view of the city and interactive exhibitions on science, design, and architecture.\n\n    Hike through the Ardennes\n    Explore the beautiful nature of the Ardennes with activities like hiking, kayaking, or visiting charming villages such as Durbuy.\n\n    Attend the Last Post ceremony in Ypres\n    A moving daily ceremony at the Menin Gate in remembrance of soldiers who fell during World War I.\n\n    Taste Belgian specialties\n    Savor chocolate, Belgian waffles, Trappist beer, and fries at the many cozy restaurants and cafés throughout the country.\n        ','5 dagen ','country/Belgium.jpg','2025-06-11 18:37:44','2025-06-11 18:37:44'),(2,'Netherlands','Nederland is een land dat wereldwijd bekendstaat om zijn schilderachtige grachten, uitgestrekte bloemenvelden en iconische windmolens. Het land heeft een rijke geschiedenis die teruggaat tot de Gouden Eeuw en staat bekend om zijn moderne steden zoals Amsterdam, Rotterdam en Utrecht, die allemaal een unieke mix van cultuur, kunst en architectuur bieden. Nederland is ook beroemd om zijn fietsvriendelijke landschap, waar je gemakkelijk het platteland en de prachtige kust kunt verkennen. Daarnaast is het land een ware topbestemming voor kunstliefhebbers, met wereldberoemde musea zoals het Van Gogh Museum en het Rijksmuseum.\n     The Netherlands is a country renowned for its picturesque canals, expansive flower fields, and iconic windmills. The country boasts a rich history dating back to the Golden Age and is known for its modern cities like Amsterdam, Rotterdam, and Utrecht, each offering a unique blend of culture, art, and architecture. The Netherlands is also famous for its bike-friendly landscape, making it easy to explore the countryside and beautiful coastlines. Additionally, the country is a top destination for art lovers, with world-famous museums like the Van Gogh Museum and the Rijksmuseum.','The Netherlands is a country known for its beautiful canals, tulip fields, and iconic windmills. With its vibrant cities, rich history, and bike-friendly landscape, the Netherlands offers something unique for every traveler.','\n    Cycle through the tulip fields\n    Explore the iconic tulip fields in the Bollenstreek, especially in spring when the flowers are in full bloom.\n\n    Visit the canals of Amsterdam\n    Take a boat tour through Amsterdam’s famous canals and discover the city from a unique perspective, passing historic houses and bridges.\n\n    Explore Zaanse Schans\n    Visit this open-air museum near Amsterdam and experience traditional windmills, wooden houses, and artisan workshops.\n\n    Hike in the Hoge Veluwe\n    Explore the Hoge Veluwe National Park with its vast forests, heathlands, and the famous Kröller-Müller Museum, home to an impressive art collection.\n\n    Visit the markets in Rotterdam\n    Explore the markets of Rotterdam, such as the Markthal, and enjoy the diverse food and shopping options in this modern, architectural city.\n    ','10 dagen ','country/Netherlands.jpg','2025-06-11 18:37:44','2025-06-11 18:37:44'),(3,'France','France is one of the most beloved travel destinations in the world, renowned for its rich culture, refined gastronomy, and breathtaking landscapes. The country has a long history dating back to Roman times and offers impressive historical landmarks, such as the castles of the Loire Valley and the medieval city of Carcassonne. Paris, the capital, is often seen as the city of love and art, featuring world-famous museums like the Louvre and iconic monuments such as the Eiffel Tower. Beyond the cities, visitors can explore Provence with its fragrant lavender fields, the French Alps for winter sports, and the expansive vineyards of Bordeaux and Burgundy. France is also a paradise for food lovers, thanks to its wine, cheeses, and gourmet dishes that are celebrated worldwide.','France is a country of romance, art, and gastronomy, with a rich history and unparalleled diversity in landscapes. From the iconic Eiffel Tower in Paris to the stunning vineyards of Bordeaux and the sunny beaches of the French Riviera, France offers an unforgettable experience for every traveler.','Visit the Eiffel Tower in Paris    Visit the iconic Eiffel Tower and enjoy panoramic views of the city from the top.       Walk through the fragrant lavender fields of Provence, especially in the summer when the flowers are in full bloom.    Cycle through the Vineyards of Bordeaux    Take a bike tour through the famous vineyards of Bordeaux and taste the delicious French wines.    Visit the Château de Versailles    Explore the majestic Palace of Versailles and its expansive gardens, one of the finest examples of French royal architecture.    Enjoy the French Riviera    Relax on the sunny beaches of the French Riviera, with iconic cities like Nice, Cannes, and Monaco.','50','images/countries/mKrmZ8HPvWyyeGLq853qofuTltqKr1ck3C2oL8pT.jpg','2025-06-11 18:37:44','2025-06-21 16:21:58'),(4,'Germany','Germany is a fascinating country known for its rich history, diverse culture, and stunning architecture. The country is home to historical landmarks such as the Berlin Wall, Cologne Cathedral, and the medieval Neuschwanstein Castle, often regarded as a fairytale symbol of Germany. Germany is also a hub of art and science, boasting world-renowned universities, museums, and music festivals. For nature enthusiasts, Germany offers a diverse landscape, from the vast forests of the Black Forest to the romantic vineyards of the Moselle Valley and the majestic peaks of the Alps. Additionally, German cuisine is beloved worldwide, with classics like bratwurst, pretzels, and a variety of beers, celebrated annually during the famous Oktoberfest.','Germany is a country of rich history, innovative technology, and diverse landscapes. From vibrant cities like Berlin and Munich to the picturesque castles along the Rhine and the fairytale forests of the Black Forest, Germany offers a perfect blend of culture, nature, and modern development.','\n    Visit the Brandenburg Gate\n    Explore the iconic Brandenburg Gate in Berlin a symbol of Germanys history and unity.\n\n    Tour the Neuschwanstein Castle\n    Visit the fairytale-like Neuschwanstein Castle in Bavaria surrounded by breathtaking landscapes.\n\n    Discover the Black Forest\n    Hike through the Black Forest region known for its scenic beauty charming villages and dense woods.\n\n    Explore the Colonge Cathedral\n    Admire the stunning Gothic architecture of the Cologne Cathedral one of Germanys most famous landmarks.\n\n    Visit the Berlin Wall Memorial\n    Learn about Germanys history at the Berlin Wall Memorial and see remnants of the wall that divided the city during the Cold War.\n    ','20 dagen ','country/Germany.jpeg','2025-06-11 18:37:44','2025-06-11 18:37:44'),(5,'Luxembourg','Luxembourg is a small yet versatile country known for its rich history, impressive architecture, and stunning natural surroundings. Situated at the heart of Europe, it serves as a crossroads of cultures, reflected in its official languages: Luxembourgish, French, and German. The capital, Luxembourg City, is a UNESCO World Heritage site thanks to its remarkable fortifications and charming old town. Beyond the city, Luxembourg offers picturesque villages, rolling hills, and vineyards along the Moselle River. The country is also a top destination for hikers and nature enthusiasts, with its expansive forests and trails in the Mullerthal region, also known as \"Little Switzerland.\" Luxembourg blends a modern financial hub with a serene and historic atmosphere, making it a truly unique destination.','Luxembourg, a small yet charming country in the heart of Europe, is renowned for its fairytale castles, stunning nature, and rich history. Despite its modest size, Luxembourg offers a unique blend of modern cities, historic landmarks, and serene landscapes.','\n    Visit the Castles of Luxembourg\n    Explore the impressive castles of Luxembourg such as Vianden Castle and Bourglinster Castle which reflect the countrys rich historical heritage.\n\n    Walk through Luxembourg City\n    Discover the capital city of Luxembourg Luxembourg City and stroll through its picturesque old town with its fortifications charming streets and breathtaking views of the city.\n\n    Explore the Mullerthal Region\n    Take a hike through the Mullerthal Region also known as \"Little Switzerland\" and enjoy the stunning rock formations and scenic landscapes.\n\n    Visit the European Court of Justice\n    Explore the European Court of Justice in Luxembourg City the highest judicial body of the European Union and learn more about the workings of the EU.\n\n    Enjoy local wines in the Moselle Valley\n    Taste local wines in the Moselle Valley famous for its wine production and take a wine walk along the vineyards.\n    ','25 dagen ','country/Luxembourg.jpeg','2025-06-11 18:37:44','2025-06-11 18:37:44'),(6,'Belgium','Belgium is a wonderful destination for travelers seeking a mix of rich history, breathtaking nature, and delightful culinary experiences. This versatile country has something for everyone, whether you are a city enthusiast, art lover, foodie, or nature admirer.','Discover Belgium, a charming country where rich history meets breathtaking landscapes and world-class cuisine. Whether youre exploring vibrant cities or enjoying serene nature Belgium offers unforgettable experiences for every traveler.','\'1\', \'Belgium\', \'Belgium is a wonderful destination for travelers seeking a mix of rich history, breathtaking nature, and delightful culinary experiences. This versatile country has something for everyone, whether you are a city enthusiast, art lover, foodie, or nature admirer.\', \'Discover Belgium, a charming country where rich history meets breathtaking landscapes and world-class cuisine. Whether youre exploring vibrant cities or enjoying serene nature Belgium offers unforgettable experiences for every traveler.\', \'\\n    Take a canal boat tour in Bruges\\n    Experience the romantic atmosphere of Bruges as you sail through its picturesque canals and enjoy stunning views of medieval buildings.\\n\\n    Visit the Atomium in Brussels\\n    This iconic monument offers a unique view of the city and interactive exhibitions on science, design, and architecture.\\n\\n    Hike through the Ardennes\\n    Explore the beautiful nature of the Ardennes with activities like hiking, kayaking, or visiting charming villages such as Durbuy.\\n\\n    Attend the Last Post ceremony in Ypres\\n    A moving daily ceremony at the Menin Gate in remembrance of soldiers who fell during World War I.\\n\\n    Taste Belgian specialties\\n    Savor chocolate, Belgian waffles, Trappist beer, and fries at the many cozy restaurants and cafés throughout the country.\\n        \', \'5 dagen \', \'country/Belgium.jpg\', \'2025-06-11 18:37:44\', \'2025-06-11 18:37:44\'','15','country/Belgium.jpg',NULL,NULL);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (5,'Ducimus non sit. Elba','Aut architecto officiis quasi quo esse. Ratione non repudiandae explicabo rerum omnis eum accusamus. Ut molestiae qui doloremque quidem esse autem quod et.','events/event2.jpg','2025-06-27','Port Natashachester','2025-06-22 13:47:02','2025-06-22 15:21:15'),(6,'Assumenda culpa officiis eos harum.','Molestias mollitia sint aut non sit. Aliquam facere laborum nam et dicta corrupti provident. Eligendi dolores omnis a quam. Numquam minus exercitationem in saepe ipsum aliquam.','events/event1.jpg',NULL,'Fayland','2025-06-22 13:47:02','2025-06-22 13:47:02'),(7,'Quia fugiat et.','Quia commodi corporis omnis architecto praesentium totam. Ut accusamus omnis id temporibus ea dolorem. Voluptatibus pariatur qui soluta veritatis tempora aliquid soluta.','events/event3.jpg',NULL,'Lake Destany','2025-06-22 13:47:02','2025-06-22 13:47:02'),(8,'Consequatur enim at.','Perferendis quas magni et perferendis nulla repellat mollitia debitis. Voluptas laborum magnam voluptatem dolor. Voluptatem fuga animi voluptates veniam est repellendus. Rerum nam incidunt autem reiciendis cumque consequuntur fugiat.','events/event3.jpg',NULL,'Ursulatown','2025-06-22 13:47:02','2025-06-22 13:47:02'),(9,'Belgie In de  zomer','Belgie In de  zomer','images/events/6hZLN27LmZnldIPmyGv1tlh7qjwIPXO3IxqcbvVy.jpg','2025-07-02','Gent','2025-06-22 17:01:32','2025-06-22 17:01:32');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_12_13_144544_create_countries_table',1),(5,'2024_12_13_144821_create_events_table',1),(6,'2025_01_15_214755_create_projects_table',1),(7,'2025_01_15_215454_create_likes_table',1),(8,'2025_01_15_215629_create_comments_table',1),(9,'2025_01_16_194556_create_products_table',1),(10,'2025_06_18_140133_create_personal_access_tokens_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `country_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,1,'blader',NULL,'2025-06-15 19:25:05'),(2,1,6,'lol','2025-06-16 09:57:46','2025-06-16 09:57:46'),(3,1,6,'Tiba wond deze lan super nice','2025-06-16 09:58:17','2025-06-16 09:58:17'),(4,4,6,'hi','2025-06-16 09:59:08','2025-06-16 09:59:08'),(5,4,6,'ger','2025-06-16 10:09:23','2025-06-16 10:09:23'),(6,1,6,'jef','2025-06-18 20:03:57','2025-06-18 20:03:57'),(7,2,6,'lolen123','2025-06-18 20:13:59','2025-06-18 20:15:45'),(8,2,6,'Tiba wond deze lan super nice','2025-06-18 20:16:37','2025-06-18 20:16:37'),(9,5,6,'Bel','2025-06-21 12:39:00','2025-06-21 12:39:00'),(10,5,7,'Tiba i s de god','2025-06-22 19:46:25','2025-06-22 19:46:25');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `groups` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` int DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `activations` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'huisen lol','1',10,500.00,'Lopen',NULL,NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('za5IKjPmtYZaldvFXHulvODa2mUu3p8NrjaVgkjl',7,'172.18.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWThuaVdTekFybXFHZjZUQ0o2Rlk2Q0JNT012N1BTbGw2N3NqRzJBWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jb3VudHJpZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O30=',1750621792);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (7,'Tiba','tiba@gmail.com',NULL,'$2y$12$ACQgc70Mp1g6qp0Vq/EVhuxgCWML0OgtwdP1jq5UaqGixdgoYVaae',NULL,'2025-06-22 13:52:36','2025-06-22 13:52:36');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

--
-- Dumping routines for database 'laravel'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-22 21:55:31
