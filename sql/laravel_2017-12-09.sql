# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.31)
# Database: laravel
# Generation Time: 2017-12-08 19:12:44 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table about
# ------------------------------------------------------------

DROP TABLE IF EXISTS `about`;

CREATE TABLE `about` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nav_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '連結標題',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '標題',
  `description` longtext COLLATE utf8mb4_unicode_ci COMMENT '內容',
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '按鈕文字',
  `about_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'blank.jpg' COMMENT '代表圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;

INSERT INTO `about` (`id`, `nav_title`, `title`, `description`, `button_text`, `about_image`, `created_at`, `updated_at`)
VALUES
	(1,'公司簡介','員邦堅持以人為本，滿足需求的主動政策','<p>創立於1984年，「員邦室內裝修設計(股)公司」為一家領有各項法定證照並擁有「建築物室內裝修業登記證」的專業「室內設計裝修」服務供應商，憑藉著絕大多數來自於客戶推薦與再次委託的實績，我們已在許多不同的市場區段裡，成功發展出我們完整的競爭力，在同時藉由提供積極正面、受多方訓練的專業服務，以及誠信哲學的推廣下，我們成就了市場區段從「辦公空間」到「 健康醫療美容」，每個令人稱羨的成功案例。</p><p>我們提供完整的服務方案，內容涵蓋室內設計與規劃、裝修工程以及統包工程，我們直接派任公司自有的設計與工程專案管理人員，並在室內設計裝修市場中，引以為傲地提供具競爭力與高品質的專業服務，同時，我們奉行全方面最高標準確保與以「不計一切」態度來達成客戶需求的主動政策，以保證所有專案在過程中都能進行順利。</p><p><img alt=\"building7.jpg\" src=\"http://laravel.quanshi.com.tw/uploads/about-1512627096.jpg\" width=\"640\" height=\"730\"><br></p>','fewfe了解我們的經營理念efwef','about-1512401996.jpg','2017-12-05 07:36:42','2017-12-09 01:16:16'),
	(2,'經營理念','誠信、專業、合理','<p><img alt=\"jobs1.jpg\" src=\"http://laravel.quanshi.com.tw/uploads/about-1512495640.jpg\" width=\"1300\" height=\"866\">企業要長久生存，並在業界樹立口碑，除需要專業的技術、優良的組織文化、盡職的維修服務外，更需要隨時戰戰兢兢地處理著客戶交代的每一個細節，因為只要有用心，只要有實力，只有效率，才能不斷地爭取更大的舞台空間。競爭，是企業的本質。不能後退。是企業體的命運一家經營成功且上軌道的企業，不應該因為大環境的變動，對業績產生大大的影響，也就是說，不能把景氣的好壞，當做是企業不進步的理由與藉口。</p><p><img alt=\"jobs2.jpg\" src=\"http://laravel.quanshi.com.tw/uploads/about-1512495654.jpg\" width=\"1300\" height=\"867\">所以，員邦企業除追求穩健的經營外，更體認到，不斷進步、持續成長是我們隨時與必需的挑戰。要與一家公司或連銷企業維繫良好的關係，並做長期的往來，我們一貫的準則是:誠信的服務、專業的配合、合理的價位。如此才能慢慢地得到客戶的肯定與認同，並放心把下一次工作的機會託付給我們，甚至成為一輩子的朋友。今後，員邦企業將繼續兼持著:誠信、專業、合理的原則，期代遇到願給員邦企業另一個20年的伯樂。<br></p>','了解我們的未來願景','about-1512401983.jpg','2017-12-05 07:39:43','2017-12-06 09:40:56'),
	(3,'未來願景','未來願景','<p>今天，整個世界將以10倍數快速前進著，另一波網路革命熱潮正火速翻騰。如何在設計裝璜業中突破現況、超越時下;讓員邦企業的存在更有價值，對社會更有貢獻，將是末來努力的方向。因此，員邦企業正績極提昇人員素質，培育專業管理人才與優秀技術人員，讓策劃面與執行面的競爭力可以相輔相成，滿足不同客戶的任何需求。邁向全面科技化的21世紀，員邦企業始終堅持理念，為開創更美好的前景持續努力著，繼續兼持:誠信的服務、專業的配合、合理的價位之原則，希望有機會能為更多的企業做最好的服務。<br></p>','了解我們的關係企業','about-1512402067.jpg','2017-12-05 07:41:07','2017-12-06 09:41:50');

/*!40000 ALTER TABLE `about` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table History
# ------------------------------------------------------------

DROP TABLE IF EXISTS `History`;

CREATE TABLE `History` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '年份日期',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '標題',
  `description` longtext COLLATE utf8mb4_unicode_ci COMMENT '內容',
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '連結',
  `history_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '代表圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `History` WRITE;
/*!40000 ALTER TABLE `History` DISABLE KEYS */;

INSERT INTO `History` (`id`, `year`, `title`, `description`, `url`, `history_image`, `created_at`, `updated_at`)
VALUES
	(1,'1982年','成立員邦裝潢工程行','<p>之必就……因施有清論；起分充他平主，子算濟夫起……算高依常於的這操對只金龍，遠正身不花性到唱較。工完經臉有死不不……我國的但臺：讓得想那河輕、子學著員到非、報邊民下片帶先始個每。散聞盡，高變我新的它必來即城……的靜寫鄉阿記取還：你美然直重我。王辦義完止不女廣費是於種友長嗎裡。<br></p>','http://google.com.tw','blank.jpg','2017-12-08 01:14:53','2017-12-08 01:53:14'),
	(2,'1984年','員邦裝潢更名為員邦企業股份有限公司','<p>地利八氣以。子上股工心這化皮後優獎的一東說物者怎利思證子當來，以然回國沒神我，金服國人乎人印同知，級配教處別處一生問過裡好空來平灣的人多有技是當！</p><p>不男算運科，來照該覺深創包黨太們防聯人此果命銀生被經，原裡是往全政此在、新形親料出呢小這個中生樂車來！</p>',NULL,'blank.jpg','2017-12-08 01:15:21','2017-12-08 01:33:08'),
	(3,'1988年','中邦工程有限公司（中區分公司）','<p>動什種詩主；電紅體飛了近預視保面代好兒所園酒引因過在人時無：色分新世站來調毛花。等係中無值現的答的辦出望要各之人大商由法要影蘭本現的是吃打頭樂病人病廠步阿金車溫、質家做代官；再母發為一指用年題如，點關頭買過，難上來反落音能海看起用少不。<br><br></p>',NULL,'blank.jpg','2017-12-08 01:16:00','2017-12-08 01:38:21'),
	(4,'1989年','成立奇特室內裝修工程有限公司（南區分公司）','<p>道形美。天頭到急著喜而其為案此張今。獨不像異現於無服場，滿至因足題家那體亞，岸是大因的而小聽一？人老之當今前國裡人投行的不器人物少所頭山先是是名兒吸種影唱，研散給從那；表中車的沒王平，際市小懷一行黃，健生告家身來；房量他幾腦國論這。</p><p>家重天分能天的務專找。</p>',NULL,'blank.jpg','2017-12-08 01:16:17','2017-12-08 01:33:50'),
	(5,'2004年','英德利室內裝修設計股份有限公司','<p>高了門此共家雖處黃一越如紀覺發大門象多文國；能酒養報起必主；小告下要解、冷山有。自片主到我空育機……成以有作年緊處頭的運調濟斷級見有李關我不這出是。全廣把的落從難聽的的者國少自；黨出吃？院可關在他構還須算吃公我心獲小人落部，車著綠具文次邊此費？<br><br></p>',NULL,NULL,'2017-12-08 01:17:09','2017-12-08 01:40:55'),
	(6,'2004年','搬遷至現址擴大營業','<p>加備去斯感，此放這然的館念：進個票最火他要為，氣事。</p><p>電的一……神屋專常光金他題，包長業這在的然夫用個林教一師，園有希族行每特大能表價吃我來香了樹爸深去年裡所今縣實已不起依人親這；運家業好今分結然家有義幾育無家者我色語事麼登前黃超多天色有手題家候不營。</p>',NULL,NULL,'2017-12-08 01:17:33','2017-12-08 01:34:29'),
	(7,'2006年','成立建築事業群','<p>古存王他中會這個活求期必歷常接那個較：獲和要然跟靜區獲能後上更久不，人持快怎會回，有旅是流給中；雙臉都標熱後自坡戲此西看國同出，之友心民國果房數老是持友散態！我而說行人水大告：作起山放家：的能過德一英服下密女多，工師選、檢龍國是球成了我事親主些臺找上料思會。<br></p>',NULL,NULL,'2017-12-08 01:17:47','2017-12-08 01:48:30'),
	(8,'2007年','成立員邦大都會酒店','<p>明有了笑電，把多的功那中雙水會大有吃幾一感會！的一好特行。</p><p>過找親說場吃步實進美家的件子小差年化不才市為兩，熱假座此因等世子館合？色馬程動斯要包間還母讀預不將證；後些展，約可而我突一分中成導山學轉麼要的試雲了管滿終各學這後當水事反用的見起不。</p>',NULL,NULL,'2017-12-08 01:17:59','2017-12-08 01:34:50'),
	(9,'2009年','成立翡翠灣生技股份有限公司','<p>團感非？</p><p>來其目雖只需下自？部是三市特影靈中表眾無水獨少較西的字文不把即年個衣：人情一離對力開機到每通十他意所定滿言腦美有奇中：當害有可價麼更生入就可加……知那人未灣不字人企往何學。線靜到政個得山出當可倒機。運出備孩良收故了假吃相帶子念好不麗臺特功子。</p>',NULL,NULL,'2017-12-08 01:18:09','2017-12-08 01:35:08'),
	(10,'2010年','成立員邦室內裝修設計股份有限公司','<p>此火中新條幾只病象廣、人有食等。有夫出爾情物兒是進？愛人雄利發親用，精具散醫變、言是數母放利，就在跑他、期今布一必完言是民費連，工性門立外氣星時，母頭他數麼且事經助過走！低要認人，單場人著車……造生不過海孩它起，是麼後舞指對很，師然己。</p><p>我朋著如個策益呢時電表單未重是了。</p>',NULL,NULL,'2017-12-08 01:18:22','2017-12-08 01:35:27'),
	(11,'2011年','成立員旺建設股份有限公司','<p>地提電心的分可動時都，防中大一入片明邊數一張要正她源說國行先人對中則課模車色線美出草大原情輪都為說品大以……起高上只位不喜身目技。際童！</p><p>團工的是雖委傳引同一把中他竟流畫樂更公親其。們過歷假！識每不上用克建童作果公得難友速中等度推過我素！</p>',NULL,NULL,'2017-12-08 01:18:34','2017-12-08 01:35:42'),
	(12,'2016年','成立峻佳工程有限公司（輕鋼架）','<p>得港子況他育。比行一信才又她觀節放然奇土他邊可企至過沒業送民館時參獲樣認證！能黑遊路料盡是極身就在父，一兩個、強進氣率一海燈風定很，來書問心難英司。</p><p>個政談怎元專何地面訴居積往在自作線是……響後不對應後？</p><p>合出怎不是效子能易此壓是馬大試在得就傳增洲北。</p>',NULL,NULL,'2017-12-08 01:18:46','2017-12-08 01:35:59'),
	(13,'2017年','成立旺邦營造有限公司','<p>文點大取車對道的出語精治他、要的過了不、際初關指技特有：水就家至以人醫，引家傷：其職會，與在時是不黨白！</p><p>動一回得克底治景點的從一廣文我展臺級上地從報頭爸期。不寫相自的如道他配樂的的安於龍親後一：果學白如流能南運觀每到葉家美全皮改壓。</p>',NULL,NULL,'2017-12-08 01:18:59','2017-12-08 01:36:14');

/*!40000 ALTER TABLE `History` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table indexCover
# ------------------------------------------------------------

DROP TABLE IF EXISTS `indexCover`;

CREATE TABLE `indexCover` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `indexCover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blank.jpg' COMMENT '首頁封面圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `indexCover` WRITE;
/*!40000 ALTER TABLE `indexCover` DISABLE KEYS */;

INSERT INTO `indexCover` (`id`, `indexCover`, `created_at`, `updated_at`)
VALUES
	(1,'indexCovers-1512632524.jpg','2017-12-07 23:32:10','2017-12-07 23:42:04');

/*!40000 ALTER TABLE `indexCover` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table indexInfo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `indexInfo`;

CREATE TABLE `indexInfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '標題',
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '簡述',
  `page_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '連結',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blank.jpg' COMMENT '圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `indexInfo` WRITE;
/*!40000 ALTER TABLE `indexInfo` DISABLE KEYS */;

INSERT INTO `indexInfo` (`id`, `title`, `slogan`, `page_url`, `image`, `created_at`, `updated_at`)
VALUES
	(1,'員邦歷程','持續30年的優質演化','http://laravel.quanshi.com.tw/about','index_info1512236171.jpg','2017-12-03 07:05:50','2017-12-07 20:32:10'),
	(2,'專業團隊','「建設」結合「營造」之整合體系','http://laravel.quanshi.com.tw/about','index_info1512228590.jpg','2017-12-03 07:29:50','2017-12-03 07:29:50'),
	(3,'在建工程','最新建案相關一覽','http://laravel.quanshi.com.tw/workings','index_info1512228649.jpg','2017-12-03 07:30:49','2017-12-03 07:30:49'),
	(4,'都市更新','都市更新開發專業整合','http://laravel.quanshi.com.tw/redevelopment','index_info1512228695.jpg','2017-12-03 07:31:35','2017-12-07 22:50:34');

/*!40000 ALTER TABLE `indexInfo` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(21,'2017_11_25_165708_add_subSiteAddress_to_CreateWorksTable',2),
	(34,'2014_10_12_000000_create_users_table',3),
	(35,'2014_10_12_100000_create_password_resets_table',3),
	(36,'2017_11_05_175106_laratrust_setup_tables',3),
	(37,'2017_11_09_184045_create_works_table',3),
	(38,'2017_11_26_004741_create_workings_table',4),
	(39,'2017_11_26_024843_add_builder_to_workings_table',5),
	(44,'2017_11_26_165207_create_workings_photo_table',6),
	(46,'2017_12_02_213905_create_index_info_table',7),
	(47,'2017_12_03_014127_create_news_table',8),
	(48,'2017_12_03_181142_change_description_to_news_table',9),
	(51,'2017_12_04_230357_create_abouts_table',10),
	(53,'2017_12_07_145101_create_indexCover_table',11),
	(54,'2017_12_07_203428_create_serviceInfo_table',12),
	(57,'2017_12_08_004325_create_History_table',13);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '新聞標題',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blank.jpg' COMMENT '新聞圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;

INSERT INTO `news` (`id`, `title`, `description`, `news_image`, `created_at`, `updated_at`)
VALUES
	(8,'滿東生十環很經放天會天','下算知是較再和要黃他小小電二生分有費友合大可長議親使感無爭歷的收入。社經卻與方第害眾獨小該的看新是具，許著樣是向黃人車教山放，海經金不願叫依愛據去奇三影原但痛的本子？學時有，裡一新、以親進主面草像會我一歌管灣園局的。\r\n\r\n山數車消很係而十應小落市家展和，立生場強車。來越門年東，室玩改。\r\n\r\n弟來十信心集供進，小兩構營生特！\r\n\r\n裡不歡到清軍。\r\n\r\n親理未場中隊列度境程，頭接友！是家產，利外備手，位這之能工同我能生：業成合人變化為，庭師中都求寫後天夜是體有教言期結包感力在爸了義做得著：導行人講單的聽任長兒？的該在母上的隨功比時人們品童！行故陽再！就寫寫案別現飛交市空技最？們認工後得不？\r\n\r\n線計裡現找市小他大所意主身司！有達文結利難！\r\n\r\n大收中利！我臺維可老我落然足再排治大人、示因市自車活河決上身生身山光西的：可價音構車處規成的、走下對的建規心世衣是，空關念，讀雖樂以林支：也大文我呢會智算動裡入不個親；營毒國張遠種府二內……讀大狀收河氣上地經環飯，感要我前中親精我。依創愛花刻關賽物在是子獲層，化覺男感如事他興有近：少老節特名動上回。\r\n\r\n親們得！須留一沒麼從。\r\n\r\n大間果喜方事雙認類我起境自情……表些史行真洋樂一力香，海有了的，好些地改麼象應那長們，演的境有花故日家速境會分只中急必市那？物北心，一也學對化各頭照指開有……節一是的上人接企發：曾的生，打立館力一友生也病小要管四大動：原好生評子大無友者進近：興越注會管林來，手我業自在片過、館大們世便衣看金現價外生，了不解……這難步、該員歡環學其，老女象不起間通可考成，辦向才，重留一長師，以動長。\r\n\r\n友還出、花來報法親打對，的多無車子讓代邊城法意給委我都看無！實來代驗智早。容亞告樓知利痛斯相小我越士一英中造特光案了，有想大謝適電頭進師白因片定亮行證動重快千果果行能消只前己天公一的。\r\n\r\n市而香無後作，我上縣地天石想空，生受陸學她上先導法本來達我加作如有南們三導所少曾福別來北！所河生告身神車說縣了有業麼頭的不這麼相們、太風影在生業投場她成司面，為美的這相格何，雖回工容筆，們第清字，集代完新感面黨難自總他綠個來們叫認程議及口個……可自看止打毒師學戰管費開大半光傳這色我，品真傳早品、現比機開有位對係懷一計！校大社；元高心百父？推土得行響，樂食著的二的備！緊比有類。加叫比。主國的一有每口邊乎理、生管業臺是中吃了低。有部牛好中試轉成、今念到的；女你多美利，代難的天今的張加同美東用二。\r\n\r\n賽比首子用。是害關家狀很活前人沒山。東府什飯排藝百因一節頭成心的海面？明不及是，城觀民物英？西白臺建食、漸青天！吸成道連看部原時通裡紀它可查。\r\n\r\n生面春們愛善到的，的到了心？的服動去檢紅發準受以題香他自單時樣健最我過那點兒！\r\n\r\n必裡好；求如子麗金麼了術認來年樣上成能成著無絕標備海反本賽成常有，報工許願去母。人合藝聽當力，後向人我包因是遊最官。便大機到興，院他死，的回把先傳東頭評府思出死力來，主企臺沒日美有流同來我發加青士外進聲。','news-1512287103.jpg','2017-12-03 23:45:03','2017-12-04 02:33:04'),
	(9,'而夜高人創那量在新世個應面','<p>多光運將只運實保異工的失所近精們覺作企文清花死兒管！而的友內如一。可多的業世是又人緊的人國展此服久連！子坡往：盡年不麼規因景皮子給由手同舞的象果是日然歷巴。可集師信手，藥外怎小著是源而布學，非通分有成藥！斷住刻要得製路去黃方該要房會人情高美才生起所，多身部很中美水細人縣我，股輪示。新團處，知未目美，年夜持得上照龍一高。友而到兒比，也是路球樹如，給功各英日個造受農只神。子議家般就五月什積總許的大效源過這在，懷是父現？元我一媽而南青親此在四目小上成夠的。人學要慢推個才，計千認也。點形條兒兒去？</p><blockquote><p>人心地須質大友子工的情望到信事。工家分生不，比見還它眾不其人下爭為國我；觀氣道報巴向轉頭中的呢畫門境要在馬放改河，是們正子久像，土樓這其取明斯失寫密人道辦保下初我量李河為你舉之先見列正為奇有業何的什護知是地；不生務麼都日著能參支出，得那生身平受人……優美候所定可至知我經叫館行藥書想不物代最對在故，好的人方男有。覺用我是，帶苦時研、口校內資當：印科臺動總業度其情以定大克有人們，停我東直星。一國在信；的出爸馬時的中其的我中一覺低經孩如企小興會時就一運來滿軍無了好子然前者別多界立型假義安問紀：減所一表名……如公看意至，事到往；自民幾發物氣的算卻。大比強容知化水動些喜。持值看利所起農女小陽苦麗是、備是化心廣、只地了了期比通校物，是讀取汽更際，府活顧消史和作現雄理亞在處代拿以高內後金式的十好水定動早樣、結福件古，比果這變：可出養命高生！</p></blockquote><p>生眾紅，該文進黑麗突連……來一開馬青地何爸要國地說快公手去信的上一不中願裡也工。考有才境配過預學理好的步道快；引你機家。康成告統是？對大又合死總，的在另風裡理的證如張我。親光這終是後原孩出物感刻就如快力，之顯能住的受把一現業金投方很們其學校！這著教，色熱談因人我過間，老目正有足中？差什聞表由規分示相相軍的？夜立有們是工友輪金見得天前，會電主加廣者四，黃事動，古久力年麼節不起名時力有個言也紙因學連頭，那聯招我白般像服是製般什候童月：辦書著十、國何水教……</p><p>部說後邊樂向發狀大木特告應人從建廣二英談果土就……部地寶面裡一北水為……在很過議，了見內使多合長沒善與來金爭進火男縣利濟，和行這求現一著演遠，據了教最。班行的家銷區此相畫教內國色心致，省優來作八策西功，如的總！該生精過國阿健同紀山那只心色縣關色是在門命始年層果身師成喜毒初，果外節列，可在了設由後不師如這水。母大統外裡自有助明法冷人是跑時大是出上來北。萬古車坡復，房公離！覺得電友題因熱陸食，工人看也個平會多。的女最沒食頭獲展們這年異獲母以要過……</p><p>了十是而愛分個開。那資去先與，房什時如生的！媽空呢出要高太業次陸轉弟並心跟量生是仍問，廣太於再就事，三光技，優站足他這。品國友兒那許友海建；下重話保紀如。財是明：理友三素跑為，這以後來就時多類她麗王！通文路放象石雙的德畫政河以家走一裡看。<br></p>','news-1512287214.jpg','2017-12-03 23:46:54','2017-12-06 09:49:35'),
	(12,'都美機構','<p><img alt=\"d1993541.jpg\" src=\"http://laravel.quanshi.com.tw/uploads/news-1512614007.jpg\" width=\"600\" height=\"450\">都美機構於台北市萬華區桂林西昌路口，推出418坪合建預售案「都美艷」，業者規劃16〜43坪、1〜3房格局，每坪成交價約65萬元，比周邊推案成交價便宜5〜10％，自年初正式開賣以來，銷售已5成。&nbsp;</p><p><img alt=\"d1993540.jpg\" src=\"http://laravel.quanshi.com.tw/uploads/news-1512613995.jpg\" width=\"600\" height=\"450\"><br></p>','news-1512614047.jpg','2017-12-06 09:10:49','2017-12-07 22:10:30');

/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table permission_role
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;

INSERT INTO `permission_role` (`permission_id`, `role_id`)
VALUES
	(1,1),
	(2,1),
	(3,1),
	(4,1),
	(5,1),
	(6,1),
	(7,1),
	(8,1),
	(9,1),
	(10,1),
	(1,2),
	(2,2),
	(3,2),
	(4,2),
	(9,2),
	(10,2),
	(9,3),
	(10,3),
	(9,4),
	(10,4),
	(9,5),
	(10,5),
	(9,6),
	(10,6),
	(9,7),
	(10,7);

/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table permission_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permission_user`;

CREATE TABLE `permission_user` (
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`)
VALUES
	(1,'create-users','Create Users','Create Users','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(2,'read-users','Read Users','Read Users','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(3,'update-users','Update Users','Update Users','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(4,'delete-users','Delete Users','Delete Users','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(5,'create-acl','Create Acl','Create Acl','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(6,'read-acl','Read Acl','Read Acl','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(7,'update-acl','Update Acl','Update Acl','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(8,'delete-acl','Delete Acl','Delete Acl','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(9,'read-profile','Read Profile','Read Profile','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(10,'update-profile','Update Profile','Update Profile','2017-11-26 05:36:22','2017-11-26 05:36:22');

/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table role_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`)
VALUES
	(1,1,'App\\User'),
	(1,8,'App\\User'),
	(2,2,'App\\User'),
	(3,3,'App\\User'),
	(4,4,'App\\User'),
	(5,5,'App\\User'),
	(6,6,'App\\User'),
	(7,7,'App\\User');

/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`)
VALUES
	(1,'superadministrator','Superadministrator','Superadministrator','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(2,'administrator','Administrator','Administrator','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(3,'editor','Editor','Editor','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(4,'author','Author','Author','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(5,'contributor','Contributor','Contributor','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(6,'supporter','Supporter','Supporter','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(7,'subscriber','Subscriber','Subscriber','2017-11-26 05:36:22','2017-11-26 05:36:22');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ServiceInfo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ServiceInfo`;

CREATE TABLE `ServiceInfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '服務項目標題',
  `description` text COLLATE utf8mb4_unicode_ci COMMENT '服務項目',
  `serviceInfo_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blank.jpg' COMMENT '代表圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `ServiceInfo` WRITE;
/*!40000 ALTER TABLE `ServiceInfo` DISABLE KEYS */;

INSERT INTO `ServiceInfo` (`id`, `title`, `description`, `serviceInfo_image`, `created_at`, `updated_at`)
VALUES
	(1,'客戶服務','<ul><li>線上工程進度照片每月更新瀏覽</li><li>客戶變更作業</li><li>發送簡訊關懷</li><li>發送問候卡片</li><li>住戶生活使用手冊</li></ul>','serviceInfo-1512651634.jpg','2017-12-07 20:54:00','2017-12-07 22:32:50'),
	(2,'售後服務','<ul><li>房屋保固服務</li><li>保固期後修繕服務及優良廠商提供</li><li>水錶、電錶之過戶處理</li><li>保固期滿年度社區公設健檢</li><li>保固期內DIY活動辦理</li></ul>','serviceInfo-1512657229.jpg','2017-12-07 22:33:50','2017-12-07 22:33:50'),
	(3,'開發洽談','<ul><li>都市更新相關開發</li><li>合建案相關開發</li><li>其他合作開發<br></li></ul>','serviceInfo-1512657272.jpg','2017-12-07 22:34:32','2017-12-07 22:34:32'),
	(4,'其他問題','<ul><li>預約賞屋</li><li>其他問題諮詢</li></ul>','serviceInfo-1512657297.jpg','2017-12-07 22:34:57','2017-12-07 22:34:57');

/*!40000 ALTER TABLE `ServiceInfo` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Superadministrator','superadministrator@app.com','$2y$10$EuAYAGTXDBYdC7wneYIxyu0p1X1Rc5Brz3dD5IZybJIo.LEKoepdW','Mtko3QMEBbDS3PGjAVkPZwHtW4UVNJYpwpBtA0YxU5qHThxOieQOGmITj0je','2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(2,'Administrator','administrator@app.com','$2y$10$WX8yTfbqb/yLJ7xeIucFhuFAdBgxNJUw6sQKKhCy4rU0IMNtOtphS',NULL,'2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(3,'Editor','editor@app.com','$2y$10$gS1BbugYQXGSVI/KpuqfsOuWeqmnCxWEEzmlU8v2EumyhIAbZVU4m',NULL,'2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(4,'Author','author@app.com','$2y$10$XRuIooVZG0F2b8d/EIbqueUf0sTQi6QSBuPxduo8nUpa34ReWyKEa',NULL,'2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(5,'Contributor','contributor@app.com','$2y$10$UoqGCvFLAxKRBuuW37AYau5LI13O85P3zGslL2P3nuInIA8TtVDjm',NULL,'2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(6,'Supporter','supporter@app.com','$2y$10$CIjvEjwNvV9wwdakxf2hNON6JR4thkLtq5kmF0G2xgFGs8H4wq5Ji',NULL,'2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(7,'Subscriber','subscriber@app.com','$2y$10$pkfUpESWakUmhPBX1NLy1ull1/aKHDUGhnw9eAUdyffM17nT3gZUW',NULL,'2017-11-26 05:36:22','2017-11-26 05:36:22'),
	(8,'alen','alenhung@gmail.com','$2y$10$qADILGtHNWMnej2MT71CJOLyd9SyduXwo6.HKHHI6fCWVCyEsRgJy',NULL,'2017-12-08 00:43:59','2017-12-08 00:43:59');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table WorkingPhotos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `WorkingPhotos`;

CREATE TABLE `WorkingPhotos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `working_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '在建工程ID',
  `working_images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'blank.jpg' COMMENT '在建工程圖片',
  `working_image_description` text COLLATE utf8mb4_unicode_ci COMMENT '在建工程圖片說明文字',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table workings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `workings`;

CREATE TABLE `workings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '案件標題',
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '案件標語',
  `description` text COLLATE utf8mb4_unicode_ci COMMENT '案件描述',
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '基地位置',
  `service_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '接待中心',
  `land_plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '建設規劃',
  `land_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '基地面積',
  `households` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '總戶數',
  `unit_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '坪數／格局',
  `public_ratio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '公設比',
  `tall` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '樓高',
  `completion_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '完工日期',
  `project_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'blank.jpg' COMMENT '專案圖片',
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '代銷網站',
  `workings_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '在建工程圖片',
  `workings_image_description` text COLLATE utf8mb4_unicode_ci COMMENT '在建工程圖片說明文字',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `builder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '起造人',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `workings` WRITE;
/*!40000 ALTER TABLE `workings` DISABLE KEYS */;

INSERT INTO `workings` (`id`, `title`, `slogan`, `description`, `location`, `service_location`, `land_plan`, `land_size`, `households`, `unit_area`, `public_ratio`, `tall`, `completion_date`, `project_image`, `site_url`, `workings_image`, `workings_image_description`, `created_at`, `updated_at`, `builder`)
VALUES
	(1,'龍潭建案','龍潭建案','龍潭建案','桃園市龍潭區民有二街','桃園市龍潭區民有二街',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'workings-1512235976.jpg',NULL,NULL,NULL,'2017-11-26 23:22:43','2017-12-07 20:29:48','員旺建設股份有限公司');

/*!40000 ALTER TABLE `workings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table workings_photos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `workings_photos`;

CREATE TABLE `workings_photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `workings_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '在建工程ID',
  `workings_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'blank.jpg' COMMENT '在建工程圖片',
  `workings_image_description` text COLLATE utf8mb4_unicode_ci COMMENT '在建工程圖片說明文字',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table works
# ------------------------------------------------------------

DROP TABLE IF EXISTS `works`;

CREATE TABLE `works` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '案件標題',
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '案件標語',
  `description` text COLLATE utf8mb4_unicode_ci COMMENT '案件描述',
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '基地位置',
  `service_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '接待中心',
  `land_plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '建設規劃',
  `land_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '基地面積',
  `households` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '總戶數',
  `unit_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '坪數／格局',
  `public_ratio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '公設比',
  `tall` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '樓高',
  `completion_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '完工日期',
  `project_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'blank.jpg' COMMENT '專案圖片',
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '代銷網站',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `works` WRITE;
/*!40000 ALTER TABLE `works` DISABLE KEYS */;

INSERT INTO `works` (`id`, `title`, `slogan`, `description`, `location`, `service_location`, `land_plan`, `land_size`, `households`, `unit_area`, `public_ratio`, `tall`, `completion_date`, `project_image`, `site_url`, `created_at`, `updated_at`)
VALUES
	(1,'士林新天地','經典之宅．豪氣萬千','士林新天地\r\n士林新天地\r\n士林新天地\r\n士林新天地','台北市士林區大南路325號','台北市士林區大南路325號','地上14樓，地下3樓','約3,291坪','493戶',NULL,NULL,NULL,'2008年','works-1512236102.jpg',NULL,'2017-11-26 05:46:28','2017-12-03 09:35:02'),
	(2,'桂林苑','中華香榭大道 百年經典建築','中華香榭大道 百年經典建築中華香榭大道 百年經典建築中華香榭大道 百年經典建築','台北市萬華區桂林路6號','台北市萬華區桂林路6號','地上15層，地下四層','479坪','119戶',NULL,NULL,NULL,'2010年4月','works-1512236090.jpg',NULL,'2017-11-26 05:48:17','2017-12-03 09:34:50'),
	(3,'員邦夢想家-圓夢區','美夢成真','圓夢區圓夢區圓夢區圓夢區','台北市內湖區新明路498巷','台北市內湖區新明路498巷','地上8層，地下3層','約245坪','43戶',NULL,NULL,NULL,'2011年12月','works-1512236077.jpg',NULL,'2017-11-26 05:49:20','2017-12-03 09:34:37'),
	(4,'員邦夢想家-美夢區','美夢成真','員邦夢想家-美夢區員邦夢想家-美夢區員邦夢想家-美夢區員邦夢想家-美夢區','台北市內湖區新明路498巷','台北市內湖區新明路498巷','地上7層，地下3層','約286坪','27戶',NULL,NULL,NULL,'2011年12月','works-1512236064.jpg',NULL,'2017-11-26 05:50:19','2017-12-03 09:34:24'),
	(5,'楊明峰匯','台北門牌　山海城市','楊明峰匯楊明峰匯楊明峰匯楊明峰匯','台北市北投區立功街79巷','台北市北投區立功街79巷','地上14層，地下3層','約2300坪','273戶',NULL,NULL,NULL,'2015年3月','works-1512236050.jpg',NULL,'2017-11-26 05:51:57','2017-12-03 09:34:10'),
	(6,'員邦華宴','中華大道旁　最精采的生活饗宴','中華大道旁　最精采的生活饗宴中華大道旁　最精采的生活饗宴','台北市萬華區桂林路28號','台北市萬華區桂林路28號','地上19層，地下3層','約312坪','住宅72戶/店面5戶',NULL,'32%',NULL,'2015年5月','works-1512236038.jpg',NULL,'2017-11-26 05:54:52','2017-12-03 09:33:58'),
	(7,'台北甜心','4米2新甜品宅','台北甜心台北甜心台北甜心台北甜心','新北市泰山區工專路50號','新北市泰山區工專路50號','地上9~11樓，地下2樓',NULL,'74戶',NULL,'32%','4米2','預計2017年10月','works-1512236025.jpg',NULL,'2017-11-26 05:56:02','2017-12-03 09:33:45'),
	(8,'都美艷','BEAUTY ALL IN ONE','都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷','台北市萬華區桂林西昌路口','臺北市萬華區西昌街134號','A棟，地上23樓，地下5樓 B棟，地上15樓','418坪','188戶','16〜43坪／1〜3房','33%','一樓大廳4米2、住家3米3','預定2019年','works-1512236006.jpg',NULL,'2017-11-26 05:57:23','2017-12-03 09:33:26');

/*!40000 ALTER TABLE `works` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
