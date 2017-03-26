-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: ibooks
-- ------------------------------------------------------
-- Server version	5.5.53-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (11,'J. K. Rowling','<p>Joanne Rowling was born on 31st July 1965. <br>J.K. Rowling is the famous British author of the worldwide attention gaining Harry Potter series. &nbsp;<br>Her best-selling novels have sold more than 400 million copies and won numerous awards. &nbsp;<br>The books have also been adapted to screen in a series of blockbuster films. &nbsp;<br>Ranked as the twelfth richest woman in the United Kingdom in 2008 with a net worth of US$1 billion, &nbsp;<br>Rowling has risen from rags to riches. Harry Potter upgraded the status of this woman from living on welfare to being a multimillionaire &nbsp;<br>in a short period of just 5 years. Titled the Most Influential Woman in Britain in 2010 by leading magazine editors, &nbsp;<br>J.K Rowling and Harry Potter have become household names globally.<br></p>','rowling','2017.01.09.08.27.51-Rowling.jpg','2017-01-09 08:27:51','2017-01-09 08:27:51'),(12,'Julia Donaldson','<p>Julia Catherine Donaldson (born 16 September 1948) is an English writer, playwright and performer, and the 2011–2013 Children\'s Laureate. &nbsp;<br>She is best known for her popular rhyming stories for children, especially those illustrated by Axel Scheffler, which include The Gruffalo, Room on the Broom and Stick Man. &nbsp;<br>She originally wrote songs for children\'s television but has concentrated on writing books since the words of one of her songs, \"A Squash and a Squeeze\", &nbsp;<br>were made into a children\'s book in 1993. Of her 184 published works, 64 are widely available in bookshops. &nbsp;<br>The remaining 120 are intended for school use and include her Songbirds phonic reading scheme, which is part of the Oxford Reading Tree.<span id=\"transmark\"></span></p>','julia-donaldson','2017.01.09.08.28.39-julia-donaldson.jpg','2017-01-09 11:04:13','2017-01-09 08:28:39'),(13,'Paula Hawkins','<p>Her best-selling novel The Girl on the Train (2015), was a complex thriller, with themes of domestic violence, alcohol, and drug abuse.She did not achieve any commercial breakthrough until she challenged herself to write a darker, more serious story. &nbsp;<br>Around 2009, Hawkins began to write romantic comedy fiction under the name Amy Silver, writing four novels including Confessions of a Reluctant Recessionista. &nbsp;<br>&nbsp;<br>&nbsp;In 2016, the book was turned into a movie starring Emily Blunt. <br>a complex thriller, with themes of domestic violence, alcohol, and drug abuse. <br>Paula Hawkins (born 26 August 1972) is a British author born in Zimbabwe, best known for her best-selling thriller novel The Girl on the Train, &nbsp;<br><br></p>','paula-hawkins','2017.01.09.08.29.25-Paula_Hawkins.jpg','2017-01-09 08:29:25','2017-01-09 08:29:25'),(14,'Jack Ludlow','<p>Jack Ludlow is the pen name of writer David Donachie, who was born in Edinburgh in 1944.&nbsp;\r\n<br>He has always had an abiding interest in the Roman Republic as well as the naval history of the eighteenth and nineteenth centuries,&nbsp;\r\n<br>which he drew on for the many historical adventure novels he has set in that period.&nbsp;\r\n<br>David lives in Deal with his partner, the novelist Sarah Grazebrook.<span id=\"transmark\"></span><br></p>','jack-ludlow','2017.01.09.08.34.26-David-Donachie.jpg','2017-01-09 08:34:26','2017-01-09 08:34:26'),(15,'James W. P. Campbell','<p>Dr James Campbell is an architect and architectural historian. He has practised as an architect in the United Kingdom,&nbsp;\r\n<br>Hong Kong and the United States. He and Frank Salmon together formed the MSt in Building History, a course in the Faculty run jointly with English Heritage.\r\n<br>&nbsp;<br>Dr Campbell is a Fellow of the Society of Antiquaries and Chairman of the Construction History Society.&nbsp;\r\n<br>He is Director of Studies and Fellow in both Architecture and History of Art in Queens’ College.<span id=\"transmark\"></span><br></p>','james-campbell','2017.01.09.08.35.18-james-campbell.jpg','2017-01-09 08:35:18','2017-01-09 08:35:18'),(16,'Julius Wiedemann','<p>&nbsp;Julius Wiedemann was born in Brazil, where he studied design and marketing, and has lived and worked in Japan, Germany, and in the UK.&nbsp;\r\n<br>&nbsp;\r\n<br>He has edited over 40 books in over 10 years, is a regular contributor to magazines, and has been on the jury of several awards all over the world.&nbsp;\r\n<br>Wiedemann’s publications have sold more than 1.5 million copies worldwide, and among his most popular titles are Information Graphics,&nbsp;\r\n<br>the series Illustration Now!, Logo Design, Japanese Graphics Now!, and books about record covers and web design.<br></p>','julius-wiedemann','2017.01.09.08.37.00-Julius-Wiedemann.jpg','2017-01-09 08:37:00','2017-01-09 08:37:00'),(17,'Sylvia Plath','<p>Sylvia Plath (October 27, 1932 – February 11, 1963) was an American poet, novelist, and short story writer.&nbsp;\r\n<br>Born in Boston, she studied at Smith College and Newnham College at the University of Cambridge before receiving acclaim as a poet and writer.&nbsp;\r\n<br>She was married to fellow poet Ted Hughes from 1956 until they separated in September 1962.&nbsp;\r\n<br>They lived together in the United States and then in England and had two children, Frieda and Nicholas.&nbsp;\r\n<br>Plath was clinically depressed for most of her adult life. She died by suicide in 1963.<span id=\"transmark\"></span><br></p>','sylvia-plath','2017.01.09.08.37.49-Sylvia-Plath.jpg','2017-01-09 08:37:49','2017-01-09 08:37:49'),(18,'Charles Bukowski','<p>Henry Charles Bukowski (born Heinrich Karl Bukowski; August 16, 1920 – March 9, 1994) was a German-born American poet, novelist, and short story writer.\r\n<br>His writing was influenced by the social, cultural, and economic ambience of his home city of Los Angeles.\r\n<br>His work addresses the ordinary lives of poor Americans, the act of writing, alcohol, relationships with women, and the drudgery of work.&nbsp;\r\n<br>Bukowski wrote thousands of poems, hundreds of short stories and six novels, eventually publishing over 60 books.&nbsp; <br></p>','charles-bukowski','2017.01.09.08.38.21-Charles-Bukowski.jpg','2017-01-16 11:27:24','2017-01-09 08:38:21'),(19,'Alfie Deyes','<p>Alfie Deyes (born 17 September 1993)[1] is an English YouTuber and author who runs the YouTube channels PointlessBlog, PointlessBlogVlogs (previously PointlessBlogTv) and PointlessBlogGames (previously AlfieGames). Since 2014 he has released two books in his Pointless Book series and one as an autobiography. On 4 September 2014 he released his first book called \"The Pointless Book\". This was followed by another book, \"The Pointless Book 2\". Deyes released it on 26 March 2015. His third book, \"The Scrapbook Of My Life\" was released on 24 March 2016.<span id=\"transmark\"></span><br></p>','alfie-deyes','2017.01.09.08.39.42-Alfie-Deyes.jpg','2017-01-09 08:39:42','2017-01-09 08:39:42'),(20,'Mike Haskins','<p>Mike Haskins was born at an early age in a Boston hospital. <br>He grew up in North Quincy, Massachusetts, and went through the public school system. In his senior year, he talked his creative writing teacher, Mrs. Shapiro, into getting the school to allow them to publish a creative writing magazine, Counterpoint. <br><br>In his writing, he has tried to be faithful to the island and its businesses.<br></p>','mike-haskins','2017.01.09.08.46.36-Mike-Haskins.jpg','2017-01-09 08:46:36','2017-01-09 08:46:36'),(21,'Nigella Lawson','<p>Nigella Lucy Lawson (born 6 January 1960) is an English journalist, broadcaster, television personality, gourmet, and food writer. In 1999, she hosted her own cooking show series, Nigella Bites, on Channel 4, accompanied by another best-selling cookbook. Nigella Bites won Lawson a Guild of Food Writers Award; her 2005 ITV daytime chat show Nigella was met with a negative critical reaction and was cancelled after attracting low ratings.&nbsp;<span id=\"transmark\"></span></p>','nigella-lawson','2017.01.15.11.36.48-nigella_lawson.jpeg','2017-01-15 11:38:18','2017-01-15 11:26:45');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (8,'Children\'s books','<p>Children\'s literature or juvenile literature includes stories, books, magazines, and poems that are enjoyed by children. Modern children\'s literature is classified in two different ways: genre or the intended age of the reader.<br><br></p>','children\'s-books','2017.01.09.08.17.30-children.jpg','2017-01-09 08:17:30','2017-01-09 08:17:30'),(9,'Crime & Thriller','<p>Crime fiction is the literary genre that fictionalises crimes, their detection, criminals, and their motives. It is usually distinguished from mainstream fiction and other genres such as historical fiction or science fiction, but the boundaries are indistinct.<span id=\"transmark\"></span><br></p>','crime-&-thriller','2017.01.09.08.18.13-thrillers.jpg','2017-01-09 08:18:13','2017-01-09 08:18:13'),(10,'Art & Photography','<p>Artists\' books have employed a wide range of forms, including scrolls, fold-outs, concertinas or loose items contained in a box. Artist\'s book is primarily a late 20th-century form with roots in earlier avant-garde movements.<br></p>','art-photography','2017.01.09.08.18.52-art.jpeg','2017-01-09 08:22:07','2017-01-09 08:18:52'),(11,'Poetry & Drama','<p>Poetry is a form of literature that uses aesthetic and rhythmic qualities of language—such as phonaesthetics, sound symbolism, and metre—to evoke meanings in addition to, or in place of, the prosaic ostensible meaning.<br></p>','poetry-drama','2017.01.09.08.19.21-poetry.jpeg','2017-01-09 08:23:17','2017-01-09 08:19:21'),(12,'Humour','<p>Humour is the tendency of particular cognitive experiences to provoke laughter and provide amusement. A joke is a display of humour in which words are used within a specific and well-defined narrative structure to make people laugh.<span id=\"transmark\"></span><br></p>','humour','2017.01.09.08.19.52-humour.jpeg','2017-01-09 08:19:52','2017-01-09 08:19:52'),(13,'Food & drink','<p>A good cookbook can open up entire worlds.From fresh central Asian flavours to pies from the deep south, cookbooks open up new mouthwatering worlds.  <span class=\"st\"><span class=\"f\"></span>The best <em>books</em> on <em>food</em> of 2016. </span><span class=\"st\"><span class=\"f\"> </span><em>Food</em> and <em>books</em>: two great tastes that taste great together...</span><a href=\"https://www.theguardian.com/books/booksblog/2016/nov/28/tis-the-season-for-books-of-the-year-what-were-your-picks-of-2016\" data-link-name=\"in standfirst link\" class=\"u-underline\"></a></p>','food-&-drink','2017.01.15.11.19.16-food.jpg','2017-01-16 11:29:16','2017-01-15 11:18:56');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contents`
--

DROP TABLE IF EXISTS `contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contents`
--

LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;
INSERT INTO `contents` VALUES (6,1,'Contact us','<p>If you\'re looking to speak to a bookseller, find out about your online \r\norder, or comment on our bookshops, you can get in touch with us filling in the <a href=\"http://books.dev/contact-us\">Contact form</a> <br></p>','2017-01-16 21:13:56','2017-01-16 12:28:07');
/*!40000 ALTER TABLE `contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (3,'Contact us','contact-us','Contact us','2017-01-11 07:36:07','2016-12-26 12:42:49');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,4,'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:12:\"The Gruffalo\";s:5:\"price\";d:8.5;s:8:\"quantity\";i:3;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',25.50,'2017-01-05 10:57:47','2017-01-05 10:57:47'),(2,4,'a:3:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:33:\"Culture and International history\";s:5:\"price\";d:25.25;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:21:\"A brush with Mondrian\";s:5:\"price\";d:28;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:12:\"The Gruffalo\";s:5:\"price\";d:8.5;s:8:\"quantity\";i:3;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',106.75,'2017-01-05 11:27:19','2017-01-05 11:27:19'),(3,3,'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:12:\"The Gruffalo\";s:5:\"price\";d:8.5;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',8.50,'2017-01-05 12:20:41','2017-01-05 12:20:41'),(4,4,'a:1:{i:6;a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:35:\"The Kingfisher history encyclopedia\";s:5:\"price\";d:18;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',18.00,'2017-01-05 12:21:33','2017-01-05 12:21:33'),(5,3,'a:2:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:12:\"The Gruffalo\";s:5:\"price\";d:8.5;s:8:\"quantity\";i:3;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:15:\"Charlotte\'s web\";s:5:\"price\";d:12.8;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',51.10,'2017-01-05 20:40:18','2017-01-05 20:40:18'),(7,3,'a:3:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:39:\"Fantastic Beasts and Where to Find Them\";s:5:\"price\";d:32;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:41:\"Harry Potter and the Order of the Phoenix\";s:5:\"price\";d:28;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:35:\"Harry Potter and the Goblet of Fire\";s:5:\"price\";d:29;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',146.00,'2017-01-11 10:26:19','2017-01-11 10:26:19'),(9,3,'a:1:{i:6;a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:12:\"The Gruffalo\";s:5:\"price\";d:14;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',14.00,'2017-01-11 20:23:22','2017-01-11 20:23:22'),(10,3,'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:41:\"Harry Potter and the Order of the Phoenix\";s:5:\"price\";d:28;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',28.00,'2017-01-11 20:24:43','2017-01-11 20:24:43'),(11,4,'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:41:\"Harry Potter and the Order of the Phoenix\";s:5:\"price\";d:28;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',28.00,'2017-01-14 20:29:26','2017-01-14 20:29:26'),(12,4,'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:41:\"Harry Potter and the Order of the Phoenix\";s:5:\"price\";d:28;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',28.00,'2017-01-14 20:32:54','2017-01-14 20:32:54'),(13,3,'a:2:{i:27;a:6:{s:2:\"id\";s:2:\"27\";s:4:\"name\";s:17:\"Nigella Christmas\";s:5:\"price\";d:25;s:8:\"quantity\";i:4;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:28;a:6:{s:2:\"id\";s:2:\"28\";s:4:\"name\";s:10:\"How To Eat\";s:5:\"price\";d:17;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',134.00,'2017-01-15 11:45:10','2017-01-15 11:45:10'),(14,3,'a:1:{i:16;a:6:{s:2:\"id\";s:2:\"16\";s:4:\"name\";s:5:\"Ariel\";s:5:\"price\";d:17;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',34.00,'2017-01-16 11:28:38','2017-01-16 11:28:38'),(15,14,'a:2:{i:22;a:6:{s:2:\"id\";s:2:\"22\";s:4:\"name\";s:24:\"The Scrapbook of My Life\";s:5:\"price\";d:10;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:23;a:6:{s:2:\"id\";s:2:\"23\";s:4:\"name\";s:18:\"The Pointless Book\";s:5:\"price\";d:9;s:8:\"quantity\";i:3;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',47.00,'2017-01-16 21:32:57','2017-01-16 21:32:57'),(16,3,'a:2:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:41:\"Harry Potter and the Order of the Phoenix\";s:5:\"price\";d:28;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:6;a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:12:\"The Gruffalo\";s:5:\"price\";d:14;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',42.00,'2017-01-18 21:39:43','2017-01-18 21:39:43'),(17,3,'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:41:\"Harry Potter and the Order of the Phoenix\";s:5:\"price\";d:28;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',28.00,'2017-01-18 21:41:59','2017-01-18 21:41:59'),(18,3,'a:2:{i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:9:\"Stick Man\";s:5:\"price\";d:16;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:6;a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:12:\"The Gruffalo\";s:5:\"price\";d:14;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}',30.00,'2017-01-18 21:43:46','2017-01-18 21:43:46');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Harry Potter and the Order of the Phoenix','<p>Dark times have come to Hogwarts. After the Dementors\' attack on his cousin Dudley, Harry Potter knows that Voldemort will stop at nothing to find him. &nbsp;<br>There are many who deny the Dark Lord\'s return, but Harry is not alone: a secret order gathers at Grimmauld Place to fight against the Dark forces. &nbsp;<br>Harry must allow Professor Snape to teach him how to protect himself from Voldemort\'s savage assaults on his mind. &nbsp;<br>But they are growing stronger by the day and Harry is running out of time. &nbsp;<br>These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, &nbsp;<br>with huge child appeal, to bring Harry Potter to the next generation of readers. &nbsp;<br>It\'s time to PASS THE MAGIC ON ...<span id=\"transmark\"></span></p>','harry-potter-and-the-order-of-the-phoenix','2017.01.09.15.00.49-2017.01.09.09.16.28-HarryPotterPhoenix.jpg',28.00,8,11,'2017-01-09 15:00:49','2017-01-09 14:53:07'),(2,'Harry Potter and the Goblet of Fire','<p>The Triwizard Tournament is to be held at Hogwarts. Only wizards who are over seventeen are allowed to enter - but that doesn\'t stop &nbsp;<br>Harry dreaming that he will win the competition. Then at Hallowe\'en, when the Goblet of Fire makes its selection, &nbsp;<br>Harry is amazed to find his name is one of those that the magical cup picks out. He will face death-defying tasks, dragons and Dark wizards, &nbsp;<br>but with the help of his best friends, Ron and Hermione, he might just make it through - alive! &nbsp;<br>These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, &nbsp;<br>with huge child appeal, to bring Harry Potter to the next generation of readers. It\'s time to PASS THE MAGIC ON ...<span id=\"transmark\"></span></p>','harry-potter-and-the-goblet-of-fire','2017.01.09.15.08.44-2017.01.09.09.18.07-HarryPotterFire.jpg',29.00,8,11,'2017-01-09 15:08:44','2017-01-09 17:07:31'),(3,'Fantastic Beasts and Where to Find Them','<p>As featured in the first year set texts reading list in Harry Potter and the Philosopher\'s Stone, Fantastic Beasts and Where to Find Them \r\nis an extensive introduction to the magical beasts that exist in the magical, non-Muggle world. Some of the animals featured in the A-Z \r\nyou will have already met in the existing Harry Potter books: for example Hippogriff, Flobberworm, Kappa - others you certainly won\'t: \r\nread on to find out exactly what a Chizpurfle is, or why one should always beware of the sinister Lethifold ...\r\nAs Albus Dumbledore says in his introduction, this set text book by Newt Scamander has given the perfect grounding to many a Hogwarts student. \r\nIt will be helpful to all Muggles out there too ...\r\nOn reading the book you will also find that Harry, Ron and (in one instance) Hermione - couldn\'t resist grafittiing the book, \r\nand adding their own personal hand-written opinions.</p>','fantastic-beasts-and-where-to-find-them','2017.01.09.15.11.57-2017.01.09.09.59.50-FantasticBeasts.jpg',32.00,8,11,'2017-01-09 15:11:57','2017-01-09 17:10:22'),(5,'Stick Man','<p>Stick Man written by erstwhile Children\'s Laureate, Julia Donaldson, and illustrated by Axel Scheffler is a children\'s story&nbsp;\r\n<br>about a anthropomorphic wooden stick who becomes separated from his family home and his Odyssey-like adventure to return there.&nbsp;\r\n<br>He is eventually reunited with his family in the \"family tree\" as a result of his interaction with Father Christmas.\r\n<br>&nbsp;<br>Stick Man has sold over 2 million copies worldwide and has been adapted into a short animated film and a successful stage play.\r\n<br>&nbsp;\'Stick Man lives in the family tree With his Stick Lady Love and their stick children three\'.&nbsp;\r\n<br>But it\'s dangerous being a Stick Man.&nbsp;\r\n<br>A dog wants to play with him, a swan builds her nest with him.&nbsp;\r\n<br>He even ends up on a fire! Join Stick Man on his troublesome journey back to the family tree.<span id=\"transmark\"></span><br></p>','stick-man','2017.01.11.06.49.22-StickMan.jpg',16.00,8,12,'2017-01-11 06:49:22','2017-01-11 06:49:22'),(6,'The Gruffalo','<p>The Gruffalo is a children\'s book by writer and playwright Julia Donaldson, illustrated by Axel Scheffler, that tells the story of a mouse,&nbsp;\r\n<br>the protagonist of the book, taking a walk in a European forest. The book has sold over 13 million copies,\r\n<br>has won several prizes for children\'s literature, and has been developed into plays on both the West End and Broadway.\r\n<br>The story of a mouse\'s walk through the woods unfolds in two phases; in both, the mouse uses cunning to evade danger.&nbsp;\r\n<br>On his way the mouse encounters several dangerous animals (a fox, an owl, and a snake).&nbsp;\r\n<br>Each of these animals, clearly intending to eat the mouse, invites him back to their home for a meal. <span id=\"transmark\"></span><br></p>','the-gruffalo','2017.01.11.06.50.29-Gruffalo.jpg',14.00,8,12,'2017-01-11 06:50:29','2017-01-11 06:50:29'),(7,'The Girl on the Train','<p>The Girl on the Train (2015) is a psychological thriller novel by British author Paula Hawkins. The novel debuted at No. 1 on The New York Times Fiction Best Sellers of 2015 list (combined print and e-book) dated February 1, 2015, and remained in the top position for 13 consecutive weeks, until April 2015. In January 2016 it became the No.1 bestseller again for two weeks. Many reviews referred to the book as \"the next Gone Girl\", referring to a popular 2012 psychological mystery with similar themes and use of unreliable narrators.<br><br>By early March 2015, the novel had sold over 1 million copies, and 1.5 million by April. It has occupied the number one spot of the UK hardback book chart for 20 weeks, the longest any book has ever held the top spot.<span id=\"transmark\"></span></p>','the-girl-on-the-train','2017.01.11.06.54.58-GirlOnTrain.jpg',20.00,9,13,'2017-01-11 06:54:58','2017-01-11 06:54:58'),(8,'Into the Water','<p>With the same propulsion that captivated millions of readers worldwide in her debut,&nbsp;\r\n<br>The Girl on the Train, Paula Hawkins unfurls a gripping, twisting, layered story set in a small riverside town.&nbsp;\r\n<br>Once again in Into The Water Hawkins demonstrates her powerful understanding of human instincts and the damage they can inflict.\r\n<br>&nbsp;<br>Described as ‘an addictive novel of psychological suspense about the slipperiness of the truth,&nbsp;\r\n<br>and a family drowning in secrets,&nbsp; Into the Water is set to establish Hawkins as the leading voice in psychological thriller writing today.<span id=\"transmark\"></span><br></p>','into-the-water','2017.01.11.06.55.52-IntoTheWater.jpg',19.00,9,13,'2017-01-11 06:55:52','2017-01-11 06:55:52'),(9,'Mercenaries','<p>Six brothers, trained since birth to become great warriors, prepare to experience their first taste of battle - 1033,&nbsp;\r\n<br>the Norman/French border. The sons of Tancred de Hauteville are following in their father\'s footsteps.&nbsp;\r\n<br>As knights, they have but one true purpose: to fight. But denied service with their duke, they are forced to take employment as mercenaries:&nbsp;\r\n<br>their unequalled battle skills are for hire to the highest bidder. Victory and defeat, betrayal and revenge combine as the desperation to rule the wealthy&nbsp;\r\n<br>Norman lands becomes an intense battle, testing even the strongest of ties.<span id=\"transmark\"></span><br></p>','mercenaries','2017.01.11.06.57.04-Mercenaries.jpg',22.00,9,14,'2017-01-11 06:57:04','2017-01-11 06:57:04'),(10,'Prince of Legend','<p>They were men born to fight. If God willed that Antioch was the place where they gave up life, so be it.&nbsp;\r\n<br>Thanks to the stratagems of Bohemund de Hauteville, leader of the Apulian Normans, the Crusade has taken the city of Antioch, and just in time.&nbsp;\r\n<br>Once the besiegers, Bohemund and his men are about to become the besieged - a huge Turkish-led army, commanded by the fearsome General Kerbogha, is fast approaching.&nbsp;\r\n<br>Provisions are needed to support not only the army, but also thousands of camp followers and pilgrims.&nbsp;\r\n<br>But the surrounding countryside is near barren and the storerooms of Antioch much depleted.&nbsp;\r\n<br>It soon becomes obvious that the Crusaders cannot hold out for long without falling prey to starvation.<span id=\"transmark\"></span><br></p>','prince-of-legend','2017.01.11.06.58.03-PrinceOfLegend.jpg',16.00,9,14,'2017-01-11 06:58:03','2017-01-11 06:58:03'),(11,'A Bitter Field','<p>1938. As Hitler sets his sights on the Sudetenland, not everyone in Britain is willing to appease him.&nbsp;\r\n<br>Convinced that the Fuehrer\'s land-hunger is insatiable, the head of the SIS recruits Cal Jardine to help him prove zechoslovakia is threatened with invasion.&nbsp;\r\n<br>Before heading undercover to Prague, however, Jardine must first extricate himself from France,&nbsp;\r\n<br>where his attempts to smuggle guns to Spain have been held up by a group of fanatical fascists.&nbsp;\r\n<br>In their struggle to overthrow the French government, they are prepared to kill for the sake of procuring weapons.&nbsp;\r\n<br>Finally arriving in Czechoslovakia, working undercover for the SIS proves no less dangerous.&nbsp;\r\n<br>As jealousy and mutual suspicions within Secret Service ranks make it impossible for Jardine to tell friend from foe,&nbsp;\r\n<br>he rediscovers old friends of dubious loyalty and makes new enemies of untested ruthlessness.<span id=\"transmark\"></span><br></p>','a-bitter-field','2017.01.11.06.59.02-BitterField.jpg',17.00,9,14,'2017-01-11 06:59:02','2017-01-11 06:59:02'),(12,'Brick : A World History','<p>This totally original architecture book - the first ever comprehensive study of brick - follows the story of brick from 5,000 bc to its use in building today,&nbsp;\r\n<br>via the vast baths and basilicas of ancient Rome, through the wonders of Gothic brick in Germany, the majestic temples of Pagan and Mughal mosques in Iran,&nbsp;\r\n<br>to its modern revival. Marvellously illustrated with spectacular, specially-taken photographs,&nbsp;\r\n<br>Brick is at once an historical account of how bricks have been employed by architects of every period,&nbsp;\r\n<br>a technical survey of brickmaking and bricklaying, and an essay in architectural and cultural history.&nbsp;\r\n<br>The authors have applied their expert visual and technical knowledge to more than one hundred themes,&nbsp;\r\n<br>from bricks in ancient Egypt to their distinctive use by such modern masters as Louis Kahn, Alvar Aalto and Renzo Piano.<span id=\"transmark\"></span><br></p>','brick-:-a-world-history','2017.01.11.07.00.31-brick.jpg',26.00,10,15,'2017-01-11 07:00:31','2017-01-11 07:00:31'),(13,'Shepard\'s War','<p>Ernest Howard Shepard was born in London in 1879 into an artistic and literary family.&nbsp;\r\n<br>He studied art from an early age and was successful in making a career out of it, particularly as a political cartoonist for Punch and a prolific book illustrator.&nbsp;\r\n<br>Shepard is most widely known for his illustrations of the Winnie-the-Pooh series by A. A. Milne and The Wind in the Willows by Kenneth Grahame,&nbsp;\r\n<br>and these drawings have become classics in their own right, iconic in the minds of children and adults everywhere.&nbsp;\r\n<br>Shepard\'s War is an intimate, illustrated narrative of the First World War seen through the mainly unpublished work of E. H. Shepard,&nbsp;\r\n<br>who served as a frontline officer from 1915 to the end of the war.<span id=\"transmark\"></span><br></p>','shepard\'s-war','2017.01.11.07.01.10-shepardsWar.jpg',26.00,10,15,'2017-01-11 07:01:10','2017-01-11 07:01:10'),(14,'Illustration Now! Portraits','<p>The field of illustration has flourished over the last decade, with professionals working both by computer and by hand.&nbsp;\r\n<br>In illustration, the single most challenging and captivating subject has been the portrait, frequently used in editorials, advertising, products, and most recently,&nbsp;\r\n<br>being the subject of major exhibitions. The book gathers together the exclusive (and frequently unpublished)&nbsp;\r\n<br>portrait work of over 80 illustrators from all over the world, many of whom were featured in Illustration Now!, including&nbsp;\r\n<br>Aaron Jasinski, Andre Carrilho, Hanoch Piven, Anita Kunz, Jody Hewgill, and Dugald Stermer.&nbsp;\r\n<br>The book also features an index of subjects and an introduction by Steven Heller.<span id=\"transmark\"></span><br></p>','illustration-now!-portraits','2017.01.11.07.01.57-Portraits.jpg',32.00,10,16,'2017-01-11 07:01:57','2017-01-11 07:01:57'),(15,'National Geographic','<p>A history of knowledge The best infographics from the National Geographic archives Back in the days when the information age \r\n<br>was a distant dream and the world a more mysterious place, National Geographic began its mission to reveal the wonders of history, \r\n<br>popular science, and culture to eager audiences around the globe. Since that 1888 launch, the world has changed; empires have risen and crumbled \r\n<br>and a galaxy of information is today only the click of a mouse away. But National Geographic endures; its calm, authoritative voice \r\n<br>is respected as ever amid the surfeit of data in our daily lives. \r\n<br>In this new anthology, TASCHEN and National Geographic gather the magazine s best infographics of the past 128 years.<span id=\"transmark\"></span><br></p>','national-geographic','2017.01.11.07.02.46-Infographics.jpg',30.00,10,16,'2017-01-14 21:03:27','2017-01-11 07:02:46'),(16,'Ariel','<p>The poems in Sylvia Plath\'s Ariel, including many of her best-known such as \'Lady Lazarus\', \'Daddy\' and \'Fever 103 degrees\',&nbsp;\r\n<br>were all written between the publication in 1960 of Plath\'s first book, The Colossus, and her death in 1963.&nbsp;\r\n<br>\'If the poems are despairing, vengeful and destructive, they are at the same time tender, open to things, and also unusually clever, sardonic, hardminded ...\r\n<br>They are works of great artistic purity and, despite all the nihilism, great generosity ...the book is a major literary event.\' <span id=\"transmark\"></span><br></p>','ariel','2017.01.11.07.03.40-Ariel.jpg',17.00,11,17,'2017-01-11 07:03:40','2017-01-11 07:03:40'),(17,'The Colossus','<p>With this startling, exhilarating book of poems, which was first published in 1960, Sylvia Plath burst into literature with spectacular force.&nbsp;\r\n<br>In such classics as \"The Beekeeper\'s Daughter\", \"The Disquieting Muses\", \"I Want, I Want\", and \"Full Fathom Five\" she writes about sows and skeletons,&nbsp;\r\n<br>fathers and suicides, about the noisy imperatives of life and the chilly hunger for death.&nbsp;\r\n<br><span id=\"transmark\"></span><br></p>','the-colossus','2017.01.11.07.04.31-Colossus.jpg',14.00,11,17,'2017-01-11 08:41:47','2017-01-11 07:04:31'),(18,'The Bell Jar','<p>Esther Greenwood is brilliant, beautiful, enormously talented, and successful, but slowly going under maybe for the last time.&nbsp;\r\n<br>In her acclaimed and enduring masterwork, Sylvia Plath brilliantly draws the reader into Esther\'s breakdown with such intensity&nbsp;\r\n<br>that her insanity becomes palpably real, even rational as accessible an experience as going to the movies.&nbsp;\r\n<br>A deep penetration into the darkest and most harrowing corners of the human psyche,&nbsp;\r\n<br>The Bell Jar is an extraordinary accomplishment and a haunting American classic.<span id=\"transmark\"></span><br></p>','the-bell-jar','2017.01.11.07.05.17-BellJar.jpg',18.00,11,17,'2017-01-11 07:05:17','2017-01-11 07:05:17'),(19,'The Captain is Out to Lunch','<p>A book length collaboration between two underground legends, Charles Bukowski and Robert Crumb. &nbsp;<br>Bukowski\'s last journals candidly and humorously reveal the events in the writer\'s life as death draws inexorably nearer, &nbsp;<br>thereby illuminating our own lives and natures, and to give new meaning to what was once only familiar. &nbsp;<br>Crumb has illustrated the text with 12 full-page drawings and a portrait of Bukowski.<span id=\"transmark\"></span><p><br></p></p>','the-captain-is-out-to-lunch','2017.01.11.07.06.04-CaptainOutOfLunch.jpg',12.00,11,18,'2017-01-11 07:06:04','2017-01-11 07:06:04'),(20,'Pulp','<p>This is Charles Bukowski\'s brilliant, fantastical pastiche of a detective story.&nbsp;\r\n<br>Packed with wit, invention and Bukowski\'s trademark lowlife adventures, it is the final novel of one of the most enjoyable and influential cult writers of the last century.&nbsp;\r\n<br>Nicky Belane, private detective and career alcoholic, is a troubled man.&nbsp;\r\n<br>He is plagued not just by broads, booze, lack of cash and a raging ego, but also by the surreal jobs he\'s been hired to do.&nbsp;\r\n<br>Not only has been hired to track down French classical author Celine - who\'s meant to be dead -&nbsp;\r\n<br>but he\'s also supposed to find the elusive Red Sparrow - which may or may not be real.<span id=\"transmark\"></span><br></p>','pulp','2017.01.11.07.06.52-Pulp.jpg',16.00,11,18,'2017-01-11 07:06:52','2017-01-11 07:06:52'),(21,'Hot Water Music','<p>Hot Water Music is a collection of short stories by Charles Bukowski, published in 1983.&nbsp;\r\n<br>The collection deals largely with: drinking, women,&nbsp;\r\n<br>gambling, and writing. It is an important collection that establishes Bukowski\'s minimalist style and his thematic oeuvre.<span id=\"transmark\"></span><br></p>','hot-water-music','2017.01.11.07.07.34-HotWaterMusic.jpg',13.00,11,18,'2017-01-11 07:07:34','2017-01-11 07:07:34'),(22,'The Scrapbook of My Life','<p>From his early days as a budding amateur vlogger, through to everyone\'s favorite YouTube superstar, Alfie Deyes\' story is the stuff of dreams.&nbsp;\r\n<br>Now, for the very first time, Alfie talks about how it all began...\r\n<br>From growing up on the sunny south coast of England, having fun with friends and thinking up pranks, dares, and silly activities throughout the long summer holidays in Brighton<span id=\"transmark\"></span>, \"The Scrapbook of My Life\" is the story of how a young, ambitious kid with a big character took the world by storm.<br></p>','the-scrapbook-of-my-life','2017.01.11.07.08.32-Scrapbook.jpg',10.00,12,19,'2017-01-11 08:46:05','2017-01-11 07:08:32'),(23,'The Pointless Book','<p>Bake a cake in a mug; take part in a people-watching challenge; create a time capsule;&nbsp;\r\n<br>diarise a week of your life and learn to make origami. Fully illustrated and packed with a host of games, activities and pranks,&nbsp;\r\n<br>Alfie invites you to join his online following as he challenges you to complete your journal of pointlessness and do virtually nothing with pride.<span id=\"transmark\"></span><br></p>','the-pointless-book','2017.01.11.07.09.21-PointlessBook.jpg',9.00,12,19,'2017-01-11 07:09:21','2017-01-11 07:09:21'),(24,'Best Classroom Jokes','<p>What\'s brown and sticky? A stick. Remember the jokes you told in the playground? The ones you annoyed your parents with for hours and hours? The ones you secretly still find hilarious? This book contains them all, and more. Clean enough for children but funny enough for adults, Best Ever Playground Jokes is packed full of the stupidest jokes ever told. What happens if you pass out after eating too much curry? You go into a korma. What\'s red and bad for your teeth? A brick. Containing a mix of well-loved favourites and brand new, originally written jokes, this rib-tickling book is an essential read for big kids everywhere. <span id=\"transmark\"></span><br></p>','best-classroom-jokes','2017.01.11.07.10.04-ClassroomJokes.jpg',12.00,12,20,'2017-01-11 08:42:52','2017-01-11 07:10:04'),(25,'Wrinklies\' Bedside Companion','<p>\"Wrinklies\' Bedside Companion\" contains everything that a wrinkly needs to know about the world, and quite a lot that they don\'t. This book has been specially designed to live on a bedside table and provide light relief before bedtime, be a source of interesting quotes and facts for the insomniac wrinkly or serve as a one-stop quote shop for all thing that wrinklies will find amusing.<span id=\"transmark\"></span><br></p>','wrinklies\'-bedside-companion','2017.01.11.07.11.51-Wrinklies.jpg',16.00,12,20,'2017-01-11 07:11:51','2017-01-11 07:11:51'),(26,'Kitchen','<p>Compendious, informative and engaging, Kitchen offers feel-good food for cooks and eaters that is comforting but always seductive, nostalgic but with a modern twist - whether express-way easy-exotic recipes for the weekday rush, leisurely slow-cook dishes for weekends and special occasions, or irresistible cakes and cookies in true \"domestic goddess\" style. It answers everyday cooking quandaries - what to give the kids for tea, how to rustle up a meal for friends or an impromptu kitchen party in moments, or what to do about those black bananas, wrinkled apples and bullet-hard plums - and since real cooking is so often about leftovers, here one recipe can morph into another...from ham hocks to pea soup and pasties, from braised chicken to Chinatown salad. <span id=\"transmark\"></span><br></p>','kitchen','2017.01.15.11.42.20-kitchen.jpg',24.00,13,21,'2017-01-15 11:42:20','2017-01-15 11:39:51'),(27,'Nigella Christmas','<p>Nigella Collection: a vibrant new look for Nigella\'s classic cookery books. \'What comes out of your kitchen means more than anything from a shop ever will. The satisfaction of the season can stem from the stove.\' With her no-nonsense approach and inspirational ideas, combined with reassuring advice and easy-to-follow, reliable recipes, Nigella Christmas is guaranteed to bring comfort and joy, and make sure the season of good will stays that way. Here is everything you need to make your Christmas easy and enjoyable, from party food ideas and scrumptious cakes and puddings to the main event itself - turkey with all the trimmings, a vegetarian Christmas dinner or a wide range of delicious alternatives.<br><br></p>','nigella-christmas','2017.01.15.11.43.35-christmas.jpg',25.00,13,21,'2017-01-15 11:43:35','2017-01-15 11:43:35'),(28,'How To Eat','<p>Cooking is not just about joining the dots, following one recipe slavishly and then moving on to the next. In cooking, as in writing, you must please yourself to please others.\' Hailed by chefs, reviewers, cookery writers and millions of home cooks worldwide as one of the best cookery books ever written, How To Eat is more than just an imaginative collection of over 350 delicious, simple recipes. Combining Nigella\'s down-to-earth, practical cookery advice with a passion for food and a friendly, chatty style, you will need two copies of this glorious classic: one for the kitchen, one for the bedside table. This is Nigel Slater\'s all-time favourite cookbook: \"If I could only keep one cookbook, this would be it. How To Eat suits the way I cook. It is as if Nigella is sitting on a stool next to me in the kitchen as I\'m cooking...<span id=\"transmark\"></span><br></p>','how-to-eat','2017.01.15.11.44.14-howtoeat.jpg',17.00,13,21,'2017-01-15 11:44:14','2017-01-15 11:44:14');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `uid` int(11) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` VALUES (3,3),(4,4),(5,4),(6,4),(7,4),(8,4),(15,4),(14,4),(16,4);
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'-','-','-','2017-01-04 13:09:30','2017-01-04 13:09:32'),(2,'--','--','--','2017-01-04 13:09:46','2017-01-04 13:09:47'),(3,'Admin','admin@gmail.com','$2y$10$8kWo53mqXJ0dC6jbBCPm0ewWKMK4LVWeatWprYye18Grkq5SSRVXi','2017-01-04 13:30:49','2017-01-04 13:30:51'),(4,'Shimi','shimi@gmail.com','$2y$10$8kWo53mqXJ0dC6jbBCPm0ewWKMK4LVWeatWprYye18Grkq5SSRVXi','2017-01-04 13:40:48','2017-01-04 13:40:49'),(5,'Popeye','popeye@gmail.com','$2y$10$8kWo53mqXJ0dC6jbBCPm0ewWKMK4LVWeatWprYye18Grkq5SSRVXi','2017-01-04 13:48:23','2017-01-04 13:48:24'),(14,'Nik','nik@gmail.com','$2y$10$8MFDddFGKZmjJZlsvSXB5.6/QjHNWrSv7arju.YekmB0SEWiM.aCa','2017-01-16 21:24:34','2017-01-16 21:24:34'),(15,'Israel','israel@gmail.com','$2y$10$fgHX.qBB0ONAkuAP8ZgSSusabEABbMohqMz5nge50VV1Kv5NP8KFu','2017-01-16 21:26:51','2017-01-16 21:26:51'),(16,'Dina','dina@gmail.com','$2y$10$lngeslyt2hepjc.jpMJ/UuUDmd7MfzGsl23IZ1Pa52RIaENpzt9eG','2017-01-16 21:41:33','2017-01-16 21:41:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-18 23:51:31
