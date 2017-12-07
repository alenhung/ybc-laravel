# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.20)
# Database: laravel
# Generation Time: 2017-12-07 09:01:55 +0000
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
  `about_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'about_image.jpg' COMMENT '代表圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;

INSERT INTO `about` (`id`, `nav_title`, `title`, `description`, `button_text`, `about_image`, `created_at`, `updated_at`)
VALUES
	(1,'公司簡介','員邦堅持以人為本，滿足需求的主動政策','<p><img alt=\"41263302-Closeup-shot-of-a-woman-taking-down-note-in-a-personal-organizer--Stock-Photo.jpg\" src=\"http://laravel.quanshi.com.tw/uploads/about-1512495477.jpg\" width=\"1300\" height=\"863\">創立於1984年，「員邦室內裝修設計(股)公司」為一家領有各項法定證照並擁有「建築物室內裝修業登記證」的專業「室內設計裝修」服務供應商，憑藉著絕大多數來自於客戶推薦與再次委託的實績，我們已在許多不同的市場區段裡，成功發展出我們完整的競爭力，在同時藉由提供積極正面、受多方訓練的專業服務，以及誠信哲學的推廣下，我們成就了市場區段從「辦公空間」到「 健康醫療美容」，每個令人稱羨的成功案例。</p><p>我們提供完整的服務方案，內容涵蓋室內設計與規劃、裝修工程以及統包工程，我們直接派任公司自有的設計與工程專案管理人員，並在室內設計裝修市場中，引以為傲地提供具競爭力與高品質的專業服務，同時，我們奉行全方面最高標準確保與以「不計一切」態度來達成客戶需求的主動政策，以保證所有專案在過程中都能進行順利。</p><p><img alt=\"building7.jpg\" src=\"http://laravel.quanshi.com.tw/uploads/about-1512627096.jpg\" width=\"640\" height=\"730\"><br></p>','fewfe了解我們的經營理念efwef','about-1512401996.jpg','2017-12-04 23:36:42','2017-12-07 14:11:58'),
	(2,'經營理念','誠信、專業、合理','<p><img alt=\"jobs1.jpg\" src=\"http://laravel.quanshi.com.tw/uploads/about-1512495640.jpg\" width=\"1300\" height=\"866\">企業要長久生存，並在業界樹立口碑，除需要專業的技術、優良的組織文化、盡職的維修服務外，更需要隨時戰戰兢兢地處理著客戶交代的每一個細節，因為只要有用心，只要有實力，只有效率，才能不斷地爭取更大的舞台空間。競爭，是企業的本質。不能後退。是企業體的命運一家經營成功且上軌道的企業，不應該因為大環境的變動，對業績產生大大的影響，也就是說，不能把景氣的好壞，當做是企業不進步的理由與藉口。</p><p><img alt=\"jobs2.jpg\" src=\"http://laravel.quanshi.com.tw/uploads/about-1512495654.jpg\" width=\"1300\" height=\"867\">所以，員邦企業除追求穩健的經營外，更體認到，不斷進步、持續成長是我們隨時與必需的挑戰。要與一家公司或連銷企業維繫良好的關係，並做長期的往來，我們一貫的準則是:誠信的服務、專業的配合、合理的價位。如此才能慢慢地得到客戶的肯定與認同，並放心把下一次工作的機會託付給我們，甚至成為一輩子的朋友。今後，員邦企業將繼續兼持著:誠信、專業、合理的原則，期代遇到願給員邦企業另一個20年的伯樂。<br></p>','了解我們的未來願景','about-1512401983.jpg','2017-12-04 23:39:43','2017-12-06 01:40:56'),
	(3,'未來願景','未來願景','<p>今天，整個世界將以10倍數快速前進著，另一波網路革命熱潮正火速翻騰。如何在設計裝璜業中突破現況、超越時下;讓員邦企業的存在更有價值，對社會更有貢獻，將是末來努力的方向。因此，員邦企業正績極提昇人員素質，培育專業管理人才與優秀技術人員，讓策劃面與執行面的競爭力可以相輔相成，滿足不同客戶的任何需求。邁向全面科技化的21世紀，員邦企業始終堅持理念，為開創更美好的前景持續努力著，繼續兼持:誠信的服務、專業的配合、合理的價位之原則，希望有機會能為更多的企業做最好的服務。<br></p>','了解我們的關係企業','about-1512402067.jpg','2017-12-04 23:41:07','2017-12-06 01:41:50'),
	(4,'測試選項1212','標題','<p><img alt=\"background1.jpg\" src=\"http://laravel.quanshi.com.tw/uploads/about-1512627384.jpg\" width=\"1000\" height=\"652\"><br></p><p>她那了說路於道到影信是商！演史放經能……好家吸光人市。能經影學在會放：法出了我像；心爸高象上期樂充青全山，天城放物海了地曾出人師活感？要計飯中我片是記的議海然車裝們下亮者、之後著工三黃論濟同、須勢景克法排社首用，正不知師開業是，就少候會學，人顧也，保麼過像小，只合方收代。之代要生式說士個春，味沒成吃告今信統果線表香十因裡法傳告前政地一主持什作亞這越此。太是民詩，布打似法期。方但們十的白，子準我製那車適？心影重法。進生好是想也音活所來我。點中兒重藥民原腦資，輕是食保法課笑？各工草這積……學義子。綠門說士父投小？格基表動人我下。時參西已待德廣，的車不指小意能決技。不把一吃者作任父快聯使面讀世能，車直有出話們看書心同好，何又愛大國成進手沒情收當智是來情局此時是，大總具麼開資再較供刻物；第看般里位水年教有件就？係上得十給，特書期演想不一小算反功？北開劇有通星依出特自心？農體居去月處的園最，能家國以對樂，現識高斯立時是、住溫十的認教頭興；保增傳著間常腳要。不心被相可股企頭。<br></p>','按鈕的文字','about-1512627391.jpg','2017-12-07 14:16:31','2017-12-07 14:18:27');

/*!40000 ALTER TABLE `about` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table indexCover
# ------------------------------------------------------------

DROP TABLE IF EXISTS `indexCover`;

CREATE TABLE `indexCover` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `indexCover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'indexCover.jpg' COMMENT '首頁封面圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `indexCover` WRITE;
/*!40000 ALTER TABLE `indexCover` DISABLE KEYS */;

INSERT INTO `indexCover` (`id`, `indexCover`, `created_at`, `updated_at`)
VALUES
	(1,'indexCovers-1512632524.jpg','2017-12-07 15:32:10','2017-12-07 15:42:04');

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
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `indexInfo` WRITE;
/*!40000 ALTER TABLE `indexInfo` DISABLE KEYS */;

INSERT INTO `indexInfo` (`id`, `title`, `slogan`, `page_url`, `image`, `created_at`, `updated_at`)
VALUES
	(1,'員邦歷程','ji121312312持續30年的優質演化','http://laravel.quanshi.com.tw/about','index_info1512236171.jpg','2017-12-02 23:05:50','2017-12-07 10:13:46'),
	(2,'專業團隊','「建設」結合「營造」之整合體系','http://laravel.quanshi.com.tw/about','index_info1512228590.jpg','2017-12-02 23:29:50','2017-12-02 23:29:50'),
	(3,'在建工程','最新建案相關一覽','http://laravel.quanshi.com.tw/workings','index_info1512228649.jpg','2017-12-02 23:30:49','2017-12-02 23:30:49'),
	(4,'都市更新','都市更新開發專業整合','http://laravel.quanshi.com.tw/','index_info1512228695.jpg','2017-12-02 23:31:35','2017-12-02 23:31:35');

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
	(53,'2017_12_07_145101_create_indexCover_table',11);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '新聞標題',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'news_image.jpg' COMMENT '新聞圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;

INSERT INTO `news` (`id`, `title`, `description`, `news_image`, `created_at`, `updated_at`)
VALUES
	(1,'fewfe這是標題','','news-1512273391.jpg','2017-12-03 11:56:31','2017-12-03 11:58:27'),
	(2,'經相正人人酒後好成集','','news-1512278890.jpg','2017-12-03 13:28:10','2017-12-03 13:28:10'),
	(3,'界達大前直物笑','','news-1512278937.jpg','2017-12-03 13:28:57','2017-12-03 13:28:57'),
	(4,'看出什們她裡差書易便實以南可','','news-1512278998.jpg','2017-12-03 13:29:58','2017-12-03 13:29:58'),
	(5,'界的獨印加呢得程分票銀直也','國雄飛育制遠我查什學為取和！定他界把步天作影廠臺響本育讀此來、業術認倒的這命。\r\n\r\n離歡速過後是傷示我清了教布子親，太成腦；花坡開……業想別要於月斯新、笑受喜當起們了可放護了支進強過一法，是得細候在管文作現合受的飛院所回車正母著之財也路年知電我把哥思原樂象她十布孩；傳記中……股的和熱去灣演難效今們元給觀期自狀們我不經一？規為父情易一才，著識總以是不音，用城他都家主！不例回新一舉，想新一場空專一了總便大似覺，師照即非卻際子城我著，的人因那，白書品？有眼學能用，器小國法如證機光綠候我面紙件不情看集，動同一；型想離大給青情言？\r\n\r\n自大制傳病好公下頭媽表般子，臺爭看來；房化先兩裡，開以系理新發切我友鄉輕話書當看分利毛告苦就才學酒不。令廠始受筆於己。\r\n\r\n通心他平期書達領活代票布統飛停冷話人列會極式明：節中全深野我時；黑便營，活又然說中政。的落房，於費不升戰卻流眾意會……跑此會，的好種好能能空決實行一。\r\n\r\n語河岸有師間一似出辦野面體同市年個功。\r\n\r\n和常人師、便就奇這濟比有畫司在集樣成；落多年有不習叫提，如上食知而天城求對根親有部是來指，師善一國問買士引生益知爸來看入更開到女國化成府英加。然特病強反型我都朋量花己長你星的市成門言多世童多，料一電復？命的大做生記足除我了共在很邊電：道都樂是大深黃……家試有為快獎下情公演！後令別格節吃人點的是提……士春異施；產常。\r\n\r\n結各可來那傷權節樣前其不人立用、來這沒選法進果起次題是過你王便條望停空。\r\n\r\n須有這草程是別即的自、前工風氣度我已法通視師球很白仍雜場人不理它小自動及音命以的己點之微。\r\n\r\n國成十這？\r\n\r\n銷生我食海養在易我媽民……外許年改定斷母學：話場一口牛天和，從山而同用單要上：再城王為十團我子腦機支？\r\n\r\n出來形，都藥車上未經一由學近血期年實初已不委其們受：成導臺當有除房語、方到多天居做樣母看了力緊我展我條形時都遊無車、進歌量法，業仍一現親如集院來金助們，的舉排動知還滿人斷方工面在是想速兩種意的也地有！統他母過，們復水人之說如：給活文而……提日天服自同微院極一方以亞與確，機善活到，由家北多自候高地時！歡需素步帶現日時媽深大經個自了；成教自不。\r\n\r\n石的地。生分觀一界，大個王，買時母高；的家細氣出顧雖了書喜實處決質？吃到和的的！西去童開險放市不她果又的道我在強小聲師兒都利源者為最如認車紀灣用的除市！期家兒象色費的動總病他畫著他保國做利變大也推體基將解出；候當特不等。\r\n\r\n慢傳分其什天士出間、年研動情、義有生人行治想登說？才天長無系認保，學從環……加知常動活真成界語屋師方馬可人人影術最男回把產：只公太，我一政論！上光師……或者華落力年所親同。\r\n\r\n民際演物裡。比水不、世才斯空照習，有國形間斯去教片間出子著色原！關市學一老。通布對喜的打其件明險行景物書男配性天人飛事改向先上能港！態見書程的好情力；氣如金那、的孩利顧深黨加是提企登排你太爸火的夫機起遠氣學形世。','news-1512286843.jpg','2017-12-03 15:40:43','2017-12-03 18:33:50'),
	(6,'馬多以面同分原化野一中加','解遠如，百一長道單我笑？\r\n\r\n知的們院而事讀歡頭。\r\n\r\n開倒一多產甚的走開水作：的術性。球美以取，分展人。長準程變不然舉展社學步費比心走然內。\r\n\r\n以安觀！\r\n\r\n便可這選身流現讓也題的營法獎是留是體腦看！親立開後，課說經她像也題的爭……回經個自靈去！論報標，法相問錢局觀此的，阿成電接年，便無相相國手是意他高、的而小。海生道果於元要四康紀著得水教已頭兒走斷音考之，習很自時今己，看們中，如格事片調蘭火和只外住石大臺在經現……雨可導車多很卻於司神一少片又一臺確生無樂古微望多，有性由開正往專……我代提華一路化出天給大心師對怎重兒當造簡車腳出為色可型不色行孩海的同。\r\n\r\n單的則是上動自加林於做理斷相現。百每家動司，林而定第保、也球許會準當心住民通生電資來就明人李上準有影洲房該兒獨回日不事自心臺公木不人速於不期否細頭女奇強花平所致技小面天運團者力小的時電克看先成：那作東。資仍公一裡，水富洲了重臺，了一想錯，了公應成個後邊而從引應歌們。\r\n\r\n裡算活進較兒美得的另相直的育條一了著細可想道我們這心假，男灣故之子容孩有洲想有車系升個？他的定決張長用後的，她好的會，制怎步來參到：看作飯……男模國聽成本傳車起招集不葉公全景能速跟今性目點。因年笑底了早行投不有聲多法：陽目水被，們器加計們言充生術展兒果，分團氣是之去球包以聯西不學能，條心理只國力不健星下是合，卻突富是因家那體星舞形。\r\n\r\n生上年外手密民成立權，藝盡之卻可。那式的，量一首代北，業通文經都打分父家南難備起影出這們中開效課山具緊易廣使區聲平服風定著就視生當內過生水藝只笑喜光安我結。\r\n\r\n們未和。\r\n\r\n說對機文大旅這知原，人不方長畫一，電有己充多……二成連過不代角，我信由比養制了筆其！維以醫器甚：有車教道麼觀男，管了供國主個就何由結信中景下為他能而備而。進生是話的，期工表從個生一，中現養際加：果腳新……地一生或者對集！\r\n\r\n家視早中？太不己防心太連別，一來過各究月的一里演過現青！施己子並用國理！男也經報臉看演必國集如爾飯府都苦不神、放對個的平如什已場分過業媽不麼於收……圖他我飛學？她這我出等人才臺，心營例本使黑出能的個年國道懷市假一不資響東人建力一定？題球卻總經樂。內微公三，和出經人通害還飛失望因心錯？對語事公出過類電怎知來登說頭年護因要決趣使，強定之結製。\r\n\r\n遠紅工大……一無打臺……主著電；是花到金但拉電一寫的二發全很機院什；軍於稱，聽成我看行導，知環十後在無答眼了開員房水果任而團有百化制年力漸元空主消與高利眼人基現，有教生。現童黃看人國男民因。是求就樣別去樣……廠中集。體對過；北樣親區樓。汽亞功！乎體那比準實是前的幾士笑進星消條相為教少係爭復業登時聲年詩時座不認。在上強美心候記報裡；在不全，合位百的兒酒。\r\n\r\n見笑良：是期開運買保在中約精相像河許管上舞文，受學員化什機什廣腦，年老白技規意男完黨前反；入天理都之大的，裡動如計，團提年要快也院班可童我！','news-1512286874.jpg','2017-12-03 15:41:14','2017-12-03 18:33:32'),
	(7,'黃構冷全不得二可','用看然、而如思政濟少就因系前容大童教美我老務來滿有的般。公始條部分他理前獲春的力近馬多。精公他化？公不所班法年公感想無毛政學五了合得應同。易真一的過拉推裝醫不的保率臺？見了今謝麼我法的灣。男水叫。到看隊對續醫，上麼連灣想又法陽的容家中，社保之失意老買回會商得公他能談什南和人和告新一！石重校？能盡就去，區雙間水傳確天到，排天把生工工進業白不。像臺思身愛平長望夫教算！營願孩力友地？立上深再是！魚聯吃明中書國政，地能人竟環前：以氣好內考唱的正隨，黃存自它又不實工要任如，等育且想灣環……來大職獎了元跑形數理望，風只家人東什成水前復腦盡認決了乎，火我我；何升音選因國萬好有無息公物辦其管身會……汽管火級起死不！各古德異走面，麼議衣遠，不性小提起海，為到然發把速否不直下不，至看有必的訴議本地生城品。\r\n\r\n要建自是文不……坐我孩近定地也力司手事了整去；現多生最的當體一應月是我山中片媽大非言要即看向能品該！那收得難準山金醫這回是！你覺等就將並意、數死對心平直臺然動向分，比公準館是親以爸寫？民驚是花苦的選高計時象自旅動聞器初眾可密期看而身，親大書一現……精該母省慢錯林定，馬使走發不產得老理工腦。安部程、氣一定利善我條之話雲選告心整國想代知了、機業人、報回國土民給視一日、了準的又手輪當看，發形第中相好事不觀苦工圖長能原名如能改小！加語操事記提經滿修動那定帶間不，本商小個法少量國們也代如走，天錢其，效綠光易定得區此有期觀下關人地說且打色南！青國部還去印間電力者；民四然業山木便化感種在得隨石望臺！過信政計被前內下力國影不事用展不動數一成紀親都牛成親海，理有？\r\n\r\n女他角，安種完上拿站突香員，基視要人多綠大兩第；議目險！主舉這頭的就年經縣們數他一出本想個聲，上近物同白功想灣中生因紅命真比超好想隊的角一間生人人我步獎頭稱起們。不陸如美，劇洲我所？樣美提：味經根它布論小自世著施而公對趣觀這親候。\r\n\r\n正這的亮媽友面是……別如案員學。省有裝為。\r\n\r\n保然是中修的香得：生廣立導兒神開馬，三動容回否計走專人為有不你汽弟見大等精能？我實運住時民別香、為怎持再數一認終心方北；前風兩工。花小合的，雖起國果意多放舞前農北藝大校苦事深生月說可排可角，顧開藝我電麼；山題環候布境離一，交步馬這難強笑做一要說我關身更真有影充了公形技不民度，考臺門力果得記：機今方對金關關是際產上他朋國大善從外受一種同！資兒面是，或滿國能我少血，嚴是作說動毒何，完東大經點因一？獎改親影，電人而開一筆人里了如陽濟，會公地節，那港其習實印，主表英時……食那讀，保一上、性何關能理院下些你十，少心真以康，保我說程天富票了色技便臺；開近同，禮方為年時自坡明變工節經教。說口象且大乎們；自這保中功哥！買樓簡理角你線頭？山望下加員定大制首致比的李還知：自來之一長。使然童公量己。高裡馬紅老！\r\n\r\n土我蘭腦不功團正場。告曾和多建和親是這隨的如時辦他夠壓！','news-1512286897.jpg','2017-12-03 15:41:37','2017-12-03 18:33:18'),
	(8,'滿東生十環很經放天會天','下算知是較再和要黃他小小電二生分有費友合大可長議親使感無爭歷的收入。社經卻與方第害眾獨小該的看新是具，許著樣是向黃人車教山放，海經金不願叫依愛據去奇三影原但痛的本子？學時有，裡一新、以親進主面草像會我一歌管灣園局的。\r\n\r\n山數車消很係而十應小落市家展和，立生場強車。來越門年東，室玩改。\r\n\r\n弟來十信心集供進，小兩構營生特！\r\n\r\n裡不歡到清軍。\r\n\r\n親理未場中隊列度境程，頭接友！是家產，利外備手，位這之能工同我能生：業成合人變化為，庭師中都求寫後天夜是體有教言期結包感力在爸了義做得著：導行人講單的聽任長兒？的該在母上的隨功比時人們品童！行故陽再！就寫寫案別現飛交市空技最？們認工後得不？\r\n\r\n線計裡現找市小他大所意主身司！有達文結利難！\r\n\r\n大收中利！我臺維可老我落然足再排治大人、示因市自車活河決上身生身山光西的：可價音構車處規成的、走下對的建規心世衣是，空關念，讀雖樂以林支：也大文我呢會智算動裡入不個親；營毒國張遠種府二內……讀大狀收河氣上地經環飯，感要我前中親精我。依創愛花刻關賽物在是子獲層，化覺男感如事他興有近：少老節特名動上回。\r\n\r\n親們得！須留一沒麼從。\r\n\r\n大間果喜方事雙認類我起境自情……表些史行真洋樂一力香，海有了的，好些地改麼象應那長們，演的境有花故日家速境會分只中急必市那？物北心，一也學對化各頭照指開有……節一是的上人接企發：曾的生，打立館力一友生也病小要管四大動：原好生評子大無友者進近：興越注會管林來，手我業自在片過、館大們世便衣看金現價外生，了不解……這難步、該員歡環學其，老女象不起間通可考成，辦向才，重留一長師，以動長。\r\n\r\n友還出、花來報法親打對，的多無車子讓代邊城法意給委我都看無！實來代驗智早。容亞告樓知利痛斯相小我越士一英中造特光案了，有想大謝適電頭進師白因片定亮行證動重快千果果行能消只前己天公一的。\r\n\r\n市而香無後作，我上縣地天石想空，生受陸學她上先導法本來達我加作如有南們三導所少曾福別來北！所河生告身神車說縣了有業麼頭的不這麼相們、太風影在生業投場她成司面，為美的這相格何，雖回工容筆，們第清字，集代完新感面黨難自總他綠個來們叫認程議及口個……可自看止打毒師學戰管費開大半光傳這色我，品真傳早品、現比機開有位對係懷一計！校大社；元高心百父？推土得行響，樂食著的二的備！緊比有類。加叫比。主國的一有每口邊乎理、生管業臺是中吃了低。有部牛好中試轉成、今念到的；女你多美利，代難的天今的張加同美東用二。\r\n\r\n賽比首子用。是害關家狀很活前人沒山。東府什飯排藝百因一節頭成心的海面？明不及是，城觀民物英？西白臺建食、漸青天！吸成道連看部原時通裡紀它可查。\r\n\r\n生面春們愛善到的，的到了心？的服動去檢紅發準受以題香他自單時樣健最我過那點兒！\r\n\r\n必裡好；求如子麗金麼了術認來年樣上成能成著無絕標備海反本賽成常有，報工許願去母。人合藝聽當力，後向人我包因是遊最官。便大機到興，院他死，的回把先傳東頭評府思出死力來，主企臺沒日美有流同來我發加青士外進聲。','news-1512287103.jpg','2017-12-03 15:45:03','2017-12-03 18:33:04'),
	(9,'而夜高人創那量在新世個應面','<p>多光運將只運實保異工的失所近精們覺作企文清花死兒管！而的友內如一。可多的業世是又人緊的人國展此服久連！子坡往：盡年不麼規因景皮子給由手同舞的象果是日然歷巴。可集師信手，藥外怎小著是源而布學，非通分有成藥！斷住刻要得製路去黃方該要房會人情高美才生起所，多身部很中美水細人縣我，股輪示。新團處，知未目美，年夜持得上照龍一高。友而到兒比，也是路球樹如，給功各英日個造受農只神。子議家般就五月什積總許的大效源過這在，懷是父現？元我一媽而南青親此在四目小上成夠的。人學要慢推個才，計千認也。點形條兒兒去？</p><blockquote><p>人心地須質大友子工的情望到信事。工家分生不，比見還它眾不其人下爭為國我；觀氣道報巴向轉頭中的呢畫門境要在馬放改河，是們正子久像，土樓這其取明斯失寫密人道辦保下初我量李河為你舉之先見列正為奇有業何的什護知是地；不生務麼都日著能參支出，得那生身平受人……優美候所定可至知我經叫館行藥書想不物代最對在故，好的人方男有。覺用我是，帶苦時研、口校內資當：印科臺動總業度其情以定大克有人們，停我東直星。一國在信；的出爸馬時的中其的我中一覺低經孩如企小興會時就一運來滿軍無了好子然前者別多界立型假義安問紀：減所一表名……如公看意至，事到往；自民幾發物氣的算卻。大比強容知化水動些喜。持值看利所起農女小陽苦麗是、備是化心廣、只地了了期比通校物，是讀取汽更際，府活顧消史和作現雄理亞在處代拿以高內後金式的十好水定動早樣、結福件古，比果這變：可出養命高生！</p></blockquote><p>生眾紅，該文進黑麗突連……來一開馬青地何爸要國地說快公手去信的上一不中願裡也工。考有才境配過預學理好的步道快；引你機家。康成告統是？對大又合死總，的在另風裡理的證如張我。親光這終是後原孩出物感刻就如快力，之顯能住的受把一現業金投方很們其學校！這著教，色熱談因人我過間，老目正有足中？差什聞表由規分示相相軍的？夜立有們是工友輪金見得天前，會電主加廣者四，黃事動，古久力年麼節不起名時力有個言也紙因學連頭，那聯招我白般像服是製般什候童月：辦書著十、國何水教……</p><p>部說後邊樂向發狀大木特告應人從建廣二英談果土就……部地寶面裡一北水為……在很過議，了見內使多合長沒善與來金爭進火男縣利濟，和行這求現一著演遠，據了教最。班行的家銷區此相畫教內國色心致，省優來作八策西功，如的總！該生精過國阿健同紀山那只心色縣關色是在門命始年層果身師成喜毒初，果外節列，可在了設由後不師如這水。母大統外裡自有助明法冷人是跑時大是出上來北。萬古車坡復，房公離！覺得電友題因熱陸食，工人看也個平會多。的女最沒食頭獲展們這年異獲母以要過……</p><p>了十是而愛分個開。那資去先與，房什時如生的！媽空呢出要高太業次陸轉弟並心跟量生是仍問，廣太於再就事，三光技，優站足他這。品國友兒那許友海建；下重話保紀如。財是明：理友三素跑為，這以後來就時多類她麗王！通文路放象石雙的德畫政河以家走一裡看。<br></p>','news-1512287214.jpg','2017-12-03 15:46:54','2017-12-06 01:49:35'),
	(10,'dasdsadas','<p>下初我量李河為你舉之先見列正為奇有業何的什護知是地；不生務麼都日著能參支出，得那生身平受人……優美候所定可至知我經叫館行藥書想不物代最對在故，好的人方男有。覺用我是，帶苦時研、口校內資當：印科臺動總業度其情以定大克有人們，停我東直星。一國在信；的出爸馬時的中其的我中一覺低經孩如企小興會時就一運來滿軍無了好子然前者別多界立型假義安問紀：減所一表名……如公看意至，事到往；自民幾發物氣的算卻。大比強容知化水動些喜。</p><p>持值看利所起農女小陽苦麗是、備是化心廣、只地了了期比通校物，是讀取汽更際，府活顧消史和作現雄理亞在處代拿以高內後金式的十好水定動早樣、結福件古，比果這變：可出養命高生！生眾紅，該文進黑麗突連……來一開馬青地何爸要國地說快公手去信的上一不中願裡也工。考有才境配過預學理好的步道快；引你機家。康成告統是？ 對大又合死總，的在另風裡理的證如張我。親光這終是後原孩出物感刻就如快力，之顯能住的受把一現業金投方很們其學校！這著教，色熱談因人我過間，老目正有足中？ 差什聞表由規分示相相軍的？ 夜立有們是工友輪金見得天前，會電主加廣者四，黃事動，古久力年麼節不起名時力有個言也紙因學連頭，那聯招我白般像服是製般什候童月：辦書著十</p>','news-1512494667.jpg','2017-12-05 23:20:51','2017-12-06 01:32:01'),
	(11,'1233ewrewrew','<p>下初我量李河為你舉之先見列正為奇有業何的什護知是地；不生務麼都日著能參支出，得那生身平受人……優美候所定可至知我經叫館行藥書想不物代最對在故，好的人方男有。覺用我是，帶苦時研、口校內資當：印科臺動總業度其情以定大克有人們，停我東直星。一國在信；的出爸馬時的中其的我中一覺低經孩如企小興會時就一運來滿軍無了好子然前者別多界立型假義安問紀：減所一表名……如公看意至，事到往；自民幾發物氣的算卻。大比強容知化水動些喜。</p><p>持值看利所起農女小陽苦麗是、備是化心廣、只地了了期比通校物，是讀取汽更際，府活顧消史和作現雄理亞在處代拿以高內後金式的十好水定動早樣、結福件古，比果這變：可出養命高生！生眾紅，該文進黑麗突連……來一開馬青地何爸要國地說快公手去信的上一不中願裡也工。考有才境配過預學理好的步道快；引你機家。康成告統是？ 對大又合死總，的在另風裡理的證如張我。親光這終是後原孩出物感刻就如快力，之顯能住的受把一現業金投方很們其學校！這著教，色熱談因人我過間，老目正有足中？ 差什聞表由規分示相相軍的？ 夜立有們是工友輪金見得天前，會電主加廣者四，黃事動，古久力年麼節不起名時力有個言也紙因學連頭，那聯招我白般像服是製般什候童月：辦書著十</p>','news-1512494717.jpg','2017-12-06 00:12:31','2017-12-06 01:31:42'),
	(12,'都美機構','<p><img alt=\"d1993541.jpg\" src=\"http://laravel.quanshi.com.tw/uploads/news-1512614007.jpg\" width=\"600\" height=\"450\">都美機構於台北市萬華區桂林西昌路口，推出418坪合建預售案「都美艷」，業者規劃16〜43坪、1〜3房格局，每坪成交價約65萬元，比周邊推案成交價便宜5〜10％，自年初正式開賣以來，銷售已5成。&nbsp;</p><p><img alt=\"d1993540.jpg\" src=\"http://laravel.quanshi.com.tw/uploads/news-1512613995.jpg\" width=\"600\" height=\"450\"><br></p>','news-1512614047.jpg','2017-12-06 01:10:49','2017-12-07 14:10:30');

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
	(1,'create-users','Create Users','Create Users','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(2,'read-users','Read Users','Read Users','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(3,'update-users','Update Users','Update Users','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(4,'delete-users','Delete Users','Delete Users','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(5,'create-acl','Create Acl','Create Acl','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(6,'read-acl','Read Acl','Read Acl','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(7,'update-acl','Update Acl','Update Acl','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(8,'delete-acl','Delete Acl','Delete Acl','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(9,'read-profile','Read Profile','Read Profile','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(10,'update-profile','Update Profile','Update Profile','2017-11-25 21:36:22','2017-11-25 21:36:22');

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
	(1,'superadministrator','Superadministrator','Superadministrator','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(2,'administrator','Administrator','Administrator','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(3,'editor','Editor','Editor','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(4,'author','Author','Author','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(5,'contributor','Contributor','Contributor','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(6,'supporter','Supporter','Supporter','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(7,'subscriber','Subscriber','Subscriber','2017-11-25 21:36:22','2017-11-25 21:36:22');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
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
	(1,'Superadministrator','superadministrator@app.com','$2y$10$EuAYAGTXDBYdC7wneYIxyu0p1X1Rc5Brz3dD5IZybJIo.LEKoepdW','Mtko3QMEBbDS3PGjAVkPZwHtW4UVNJYpwpBtA0YxU5qHThxOieQOGmITj0je','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(2,'Administrator','administrator@app.com','$2y$10$WX8yTfbqb/yLJ7xeIucFhuFAdBgxNJUw6sQKKhCy4rU0IMNtOtphS',NULL,'2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(3,'Editor','editor@app.com','$2y$10$gS1BbugYQXGSVI/KpuqfsOuWeqmnCxWEEzmlU8v2EumyhIAbZVU4m',NULL,'2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(4,'Author','author@app.com','$2y$10$XRuIooVZG0F2b8d/EIbqueUf0sTQi6QSBuPxduo8nUpa34ReWyKEa',NULL,'2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(5,'Contributor','contributor@app.com','$2y$10$UoqGCvFLAxKRBuuW37AYau5LI13O85P3zGslL2P3nuInIA8TtVDjm',NULL,'2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(6,'Supporter','supporter@app.com','$2y$10$CIjvEjwNvV9wwdakxf2hNON6JR4thkLtq5kmF0G2xgFGs8H4wq5Ji',NULL,'2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(7,'Subscriber','subscriber@app.com','$2y$10$pkfUpESWakUmhPBX1NLy1ull1/aKHDUGhnw9eAUdyffM17nT3gZUW',NULL,'2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(8,'alen','alenhung@gmail.com','$2y$10$qADILGtHNWMnej2MT71CJOLyd9SyduXwo6.HKHHI6fCWVCyEsRgJy',NULL,'2017-12-07 16:43:59','2017-12-07 16:43:59');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table WorkingPhotos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `WorkingPhotos`;

CREATE TABLE `WorkingPhotos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `working_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '在建工程ID',
  `working_images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '在建工程圖片',
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
  `project_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'project_image.jpg' COMMENT '專案圖片',
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
	(1,'龍潭建案','龍潭建案','龍潭建案','桃園市龍潭區民有二街','桃園市龍潭區民有二街',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'workings-1512235976.jpg',NULL,NULL,NULL,'2017-11-26 15:22:43','2017-12-03 01:32:56','員旺建設股份有限公司');

/*!40000 ALTER TABLE `workings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table workings_photos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `workings_photos`;

CREATE TABLE `workings_photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `workings_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '在建工程ID',
  `workings_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '在建工程圖片',
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
  `project_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'project_image.jpg' COMMENT '專案圖片',
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '代銷網站',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `works` WRITE;
/*!40000 ALTER TABLE `works` DISABLE KEYS */;

INSERT INTO `works` (`id`, `title`, `slogan`, `description`, `location`, `service_location`, `land_plan`, `land_size`, `households`, `unit_area`, `public_ratio`, `tall`, `completion_date`, `project_image`, `site_url`, `created_at`, `updated_at`)
VALUES
	(1,'士林新天地','經典之宅．豪氣萬千','士林新天地\r\n士林新天地\r\n士林新天地\r\n士林新天地','台北市士林區大南路325號','台北市士林區大南路325號','地上14樓，地下3樓','約3,291坪','493戶',NULL,NULL,NULL,'2008年','works-1512236102.jpg',NULL,'2017-11-25 21:46:28','2017-12-03 01:35:02'),
	(2,'桂林苑','中華香榭大道 百年經典建築','中華香榭大道 百年經典建築中華香榭大道 百年經典建築中華香榭大道 百年經典建築','台北市萬華區桂林路6號','台北市萬華區桂林路6號','地上15層，地下四層','479坪','119戶',NULL,NULL,NULL,'2010年4月','works-1512236090.jpg',NULL,'2017-11-25 21:48:17','2017-12-03 01:34:50'),
	(3,'員邦夢想家-圓夢區','美夢成真','圓夢區圓夢區圓夢區圓夢區','台北市內湖區新明路498巷','台北市內湖區新明路498巷','地上8層，地下3層','約245坪','43戶',NULL,NULL,NULL,'2011年12月','works-1512236077.jpg',NULL,'2017-11-25 21:49:20','2017-12-03 01:34:37'),
	(4,'員邦夢想家-美夢區','美夢成真','員邦夢想家-美夢區員邦夢想家-美夢區員邦夢想家-美夢區員邦夢想家-美夢區','台北市內湖區新明路498巷','台北市內湖區新明路498巷','地上7層，地下3層','約286坪','27戶',NULL,NULL,NULL,'2011年12月','works-1512236064.jpg',NULL,'2017-11-25 21:50:19','2017-12-03 01:34:24'),
	(5,'楊明峰匯','台北門牌　山海城市','楊明峰匯楊明峰匯楊明峰匯楊明峰匯','台北市北投區立功街79巷','台北市北投區立功街79巷','地上14層，地下3層','約2300坪','273戶',NULL,NULL,NULL,'2015年3月','works-1512236050.jpg',NULL,'2017-11-25 21:51:57','2017-12-03 01:34:10'),
	(6,'員邦華宴','中華大道旁　最精采的生活饗宴','中華大道旁　最精采的生活饗宴中華大道旁　最精采的生活饗宴','台北市萬華區桂林路28號','台北市萬華區桂林路28號','地上19層，地下3層','約312坪','住宅72戶/店面5戶',NULL,'32%',NULL,'2015年5月','works-1512236038.jpg',NULL,'2017-11-25 21:54:52','2017-12-03 01:33:58'),
	(7,'台北甜心','4米2新甜品宅','台北甜心台北甜心台北甜心台北甜心','新北市泰山區工專路50號','新北市泰山區工專路50號','地上9~11樓，地下2樓',NULL,'74戶',NULL,'32%','4米2','預計2017年10月','works-1512236025.jpg',NULL,'2017-11-25 21:56:02','2017-12-03 01:33:45'),
	(8,'都美艷','BEAUTY ALL IN ONE','都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷','台北市萬華區桂林西昌路口','臺北市萬華區西昌街134號','A棟，地上23樓，地下5樓 B棟，地上15樓','418坪','188戶','16〜43坪／1〜3房','33%','一樓大廳4米2、住家3米3','預定2019年','works-1512236006.jpg',NULL,'2017-11-25 21:57:23','2017-12-03 01:33:26');

/*!40000 ALTER TABLE `works` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
