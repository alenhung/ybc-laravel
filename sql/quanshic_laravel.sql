-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- 主機: localhost:3306
-- 產生時間： 2017 年 12 月 16 日 23:09
-- 伺服器版本: 5.6.38
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `quanshic_laravel`
--

-- --------------------------------------------------------

--
-- 資料表結構 `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `nav_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '連結標題',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '標題',
  `description` longtext COLLATE utf8mb4_unicode_ci COMMENT '內容',
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '按鈕文字',
  `about_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'blank.jpg' COMMENT '代表圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `about`
--

INSERT INTO `about` (`id`, `nav_title`, `title`, `description`, `button_text`, `about_image`, `created_at`, `updated_at`) VALUES
(1, '公司簡介', '員邦堅持以人為本，滿足需求的主動政策', '<p>創立於1984年，「員邦室內裝修設計(股)公司」為一家領有各項法定證照並擁有「建築物室內裝修業登記證」的專業「室內設計裝修」服務供應商，憑藉著絕大多數來自於客戶推薦與再次委託的實績，我們已在許多不同的市場區段裡，成功發展出我們完整的競爭力，在同時藉由提供積極正面、受多方訓練的專業服務，以及誠信哲學的推廣下，我們成就了市場區段從「辦公空間」到「 健康醫療美容」，每個令人稱羨的成功案例。</p><p>我們提供完整的服務方案，內容涵蓋室內設計與規劃、裝修工程以及統包工程，我們直接派任公司自有的設計與工程專案管理人員，並在室內設計裝修市場中，引以為傲地提供具競爭力與高品質的專業服務，同時，我們奉行全方面最高標準確保與以「不計一切」態度來達成客戶需求的主動政策，以保證所有專案在過程中都能進行順利。</p>', '了解我們的經營理念', 'about-1512401996.jpg', '2017-12-04 23:36:42', '2017-12-09 19:15:22'),
(2, '經營理念', '誠信、專業、合理', '<p>企業要長久生存，並在業界樹立口碑，除需要專業的技術、優良的組織文化、盡職的維修服務外，更需要隨時戰戰兢兢地處理著客戶交代的每一個細節，因為只要有用心，只要有實力，只有效率，才能不斷地爭取更大的舞台空間。競爭，是企業的本質。不能後退。是企業體的命運一家經營成功且上軌道的企業，不應該因為大環境的變動，對業績產生大大的影響，也就是說，不能把景氣的好壞，當做是企業不進步的理由與藉口。</p><p>所以，員邦企業除追求穩健的經營外，更體認到，不斷進步、持續成長是我們隨時與必需的挑戰。要與一家公司或連銷企業維繫良好的關係，並做長期的往來，我們一貫的準則是:誠信的服務、專業的配合、合理的價位。如此才能慢慢地得到客戶的肯定與認同，並放心把下一次工作的機會託付給我們，甚至成為一輩子的朋友。今後，員邦企業將繼續兼持著:誠信、專業、合理的原則，期代遇到願給員邦企業另一個20年的伯樂。<br></p>', '了解我們的未來願景', 'about-1512401983.jpg', '2017-12-04 23:39:43', '2017-12-09 19:12:23'),
(3, '未來願景', '未來願景', '<p>今天，整個世界將以10倍數快速前進著，另一波網路革命熱潮正火速翻騰。如何在設計裝璜業中突破現況、超越時下;讓員邦企業的存在更有價值，對社會更有貢獻，將是末來努力的方向。因此，員邦企業正績極提昇人員素質，培育專業管理人才與優秀技術人員，讓策劃面與執行面的競爭力可以相輔相成，滿足不同客戶的任何需求。邁向全面科技化的21世紀，員邦企業始終堅持理念，為開創更美好的前景持續努力著，繼續兼持:誠信的服務、專業的配合、合理的價位之原則，希望有機會能為更多的企業做最好的服務。<br></p>', '了解我們的關係企業', 'about-1512402067.jpg', '2017-12-04 23:41:07', '2017-12-06 01:41:50');

-- --------------------------------------------------------

--
-- 資料表結構 `History`
--

CREATE TABLE `History` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '年份日期',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '標題',
  `description` longtext COLLATE utf8mb4_unicode_ci COMMENT '內容',
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '連結',
  `history_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '代表圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `History`
--

INSERT INTO `History` (`id`, `year`, `title`, `description`, `url`, `history_image`, `created_at`, `updated_at`) VALUES
(1, '1982年', '成立員邦裝潢工程行', NULL, NULL, NULL, '2017-12-07 17:14:53', '2017-12-16 11:48:01'),
(2, '1984年', '員邦裝潢更名為員邦企業股份有限公司', NULL, NULL, NULL, '2017-12-07 17:15:21', '2017-12-13 02:44:33'),
(3, '1988年', '中邦工程有限公司（中區分公司）', '<p>營業項目：住家、居家裝潢工程<br><br></p>', NULL, NULL, '2017-12-07 17:16:00', '2017-12-13 02:51:42'),
(4, '1989年', '成立奇特室內裝修工程有限公司（南區分公司）', '<p>營業項目：房屋居家、裝潢及相關工程、裝潢工程</p>', NULL, NULL, '2017-12-07 17:16:17', '2017-12-13 02:53:09'),
(5, '2004年', '英德利室內裝修設計股份有限公司', '<p><span style=\"color: rgb(51, 51, 51); font-size: 16px;\">營業項目：房屋居家、裝潢及相關工程、裝潢工程</span><br></p>', NULL, NULL, '2017-12-07 17:17:09', '2017-12-13 02:53:22'),
(6, '2004年', '搬遷至現址擴大營業', NULL, NULL, NULL, '2017-12-07 17:17:33', '2017-12-13 02:46:13'),
(7, '2006年', '成立建築事業群', NULL, NULL, NULL, '2017-12-07 17:17:47', '2017-12-13 02:46:28'),
(8, '2007年', '成立員邦大都會酒店', '<p>營業項目：休閒娛樂、飯店民宿旅館、飯店及旅館</p><p>大都會位於高雄繁華的市中心，鄰近中山高九如交流道、高鐵左營總站、小港國際機場、高雄火車站、愛河、國立科學工藝博物館、市立美術館、鳥松濕地、客家文化館、六和觀光夜市、城市光廊、大同百貨、澄清湖..等，絕佳的地理位置，讓您的旅程擁有最便捷的居住機能，當您在充滿藝術、人文、科技、時尚氣息的高雄，無論是要商務洽公或是shopping旅遊，大都會酒店絕對是您居住最佳的選擇。</p>', 'http://www.metropolitan-hotels.com.tw/', NULL, '2017-12-07 17:17:59', '2017-12-13 03:15:12'),
(9, '2009年', '成立翡翠灣生技股份有限公司', '<p>營業項目：【鳳梨屋水上莊園】農林漁牧、漁業及漁產品、水產養殖</p>', NULL, NULL, '2017-12-07 17:18:09', '2017-12-13 03:07:30'),
(10, '2010年', '成立員邦室內裝修設計股份有限公司', '<p><span style=\"color: rgb(0, 0, 0); font-size: 24px;\">服務項目</span></p><p style=\"\">裝修承包</p><p style=\"margin-left: 40px;\">我們擁有專業的監工施工團隊，控管嚴格，品質保證，為您打造夢想的空間透視模擬。</p><p style=\"\">商業空間</p><p style=\"margin-left: 40px;\">以多年的專業經驗與施工團隊，為您的商業展示空間提供做完整的建議與優質的服務。</p><p style=\"\">室內設計</p><p style=\"margin-left: 40px;\">以多年的專業經驗與施工團隊，為您的商業展示空間提供做完整的建議與優質的服務。</p><p style=\"\">透視模擬</p><p style=\"margin-left: 40px;\">以專業的設計繪圖師群，依設計圖所規劃方向，表現其整體立體感。</p><p style=\"\">電腦動畫</p><p style=\"margin-left: 40px;\">針對您想呈現的方式，依我們專業的設計團隊表現其未來的設計規劃，並達到最大的效果及反饋。</p>', 'http://www.yuanbang.com.tw/index.php', NULL, '2017-12-07 17:18:22', '2017-12-16 11:57:55'),
(11, '2011年', '成立員旺建設股份有限公司', '<p>營業項目：房屋居家、營建工程<br><br></p>', NULL, NULL, '2017-12-07 17:18:34', '2017-12-13 03:12:09'),
(12, '2016年', '成立峻佳工程有限公司（輕鋼架）', '<p>營業項目：輕隔間、輕鋼架天花板工程<br><br></p>', NULL, NULL, '2017-12-07 17:18:46', '2017-12-13 03:12:31'),
(13, '2017年', '成立旺邦營造有限公司', '<p>營業項目：綜理營繕工程施工及管理等整體性工作<br><br></p>', NULL, NULL, '2017-12-07 17:18:59', '2017-12-13 03:13:31');

-- --------------------------------------------------------

--
-- 資料表結構 `indexCover`
--

CREATE TABLE `indexCover` (
  `id` int(10) UNSIGNED NOT NULL,
  `indexCover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blank.jpg' COMMENT '首頁封面圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `indexCover`
--

INSERT INTO `indexCover` (`id`, `indexCover`, `created_at`, `updated_at`) VALUES
(1, 'indexCovers-1512632524.jpg', '2017-12-07 15:32:10', '2017-12-07 15:42:04');

-- --------------------------------------------------------

--
-- 資料表結構 `indexInfo`
--

CREATE TABLE `indexInfo` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '標題',
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '簡述',
  `page_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '連結',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blank.jpg' COMMENT '圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `indexInfo`
--

INSERT INTO `indexInfo` (`id`, `title`, `slogan`, `page_url`, `image`, `created_at`, `updated_at`) VALUES
(1, '員邦歷程', '持續30年的優質演化', 'http://ybl.quanshi.com.tw/about?url=history', 'index_info1512236171.jpg', '2017-12-02 23:05:50', '2017-12-15 02:36:31'),
(2, '專業團隊', '「建設」結合「營造」之整合體系', 'http://ybl.quanshi.com.tw/about?url=affiliated', 'index_info1512228590.jpg', '2017-12-02 23:29:50', '2017-12-15 02:36:00'),
(3, '在建工程', '最新建案相關一覽', 'http://ybl.quanshi.com.tw/workings', 'index_info1512228649.jpg', '2017-12-02 23:30:49', '2017-12-15 02:30:45'),
(4, '都市更新', '都市更新開發專業整合', 'http://ybl.quanshi.com.tw/redevelopment', 'index_info1512228695.jpg', '2017-12-02 23:31:35', '2017-12-15 02:31:00');

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2017_11_25_165708_add_subSiteAddress_to_CreateWorksTable', 2),
(34, '2014_10_12_000000_create_users_table', 3),
(35, '2014_10_12_100000_create_password_resets_table', 3),
(36, '2017_11_05_175106_laratrust_setup_tables', 3),
(37, '2017_11_09_184045_create_works_table', 3),
(38, '2017_11_26_004741_create_workings_table', 4),
(39, '2017_11_26_024843_add_builder_to_workings_table', 5),
(44, '2017_11_26_165207_create_workings_photo_table', 6),
(46, '2017_12_02_213905_create_index_info_table', 7),
(47, '2017_12_03_014127_create_news_table', 8),
(48, '2017_12_03_181142_change_description_to_news_table', 9),
(51, '2017_12_04_230357_create_abouts_table', 10),
(53, '2017_12_07_145101_create_indexCover_table', 11),
(54, '2017_12_07_203428_create_serviceInfo_table', 12),
(57, '2017_12_08_004325_create_History_table', 13);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '新聞標題',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blank.jpg' COMMENT '新聞圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `news_image`, `created_at`, `updated_at`) VALUES
(8, '萬華熱銷新案，「都美艷」慶開工', '<p><span style=\"color: rgb(51, 51, 51); font-size: 16px;\">2016/5/13【MyGoNews蕭又安‧方暮晨/綜合報導】</span><span style=\"color: rgb(51, 51, 51); font-size: 16px;\"><br></span></p><p><span style=\"color: rgb(51, 51, 51); font-size: 16px;\">整體房價修正回歸合理，許多購屋族紛紛從蛋白區回轉蛋黃區，因都更蓬勃、市容逐漸變美的萬華，成了最近的賞屋熱區！台北市萬華車站BOT案、萬大線動工等建設正如火如荼進行，讓喊了多年的西區翻轉不再是口號，也因為如此，在2015年房市寒冬強襲之下，萬華區卻是實價登錄上，少數抗跌小漲的區域，其中新案「都美艷」更是從潛銷開始就有著高詢問度，至2016年4月甫公開已熱銷5成，堪稱區域最賣座！2016年5月12日「都美艷」舉行開工典禮。</span></p><p><span style=\"color: rgb(51, 51, 51); font-size: 16px;\">&nbsp;</span></p><p><img width=\"216\" alt=\"\" src=\"http://pic.mygonews.com/fetch.php?v=02a47c08fa21198241cf6b8b75db0ca3.jpg&amp;t=newsPhoto\"></p><p>2016年5月12日「都美艷」舉行開工典禮</p><p><span style=\"color: rgb(51, 51, 51); font-size: 16px;\">都美機構表示：「『都美艷』是我們在萬華桂林路上的第三座個案，產品尚在規劃的時候，就已經有許多買過我們房子的住戶為親友詢問、甚至指定預約，高重購率與高介紹率，是『都美艷』熱銷的原因，也是對我們品牌的一大信任！」秉持一貫好建築、平實價的理念，不只要讓人長住久安，更希望回歸過去「買房能保值」的踏實感。願讓利，讓買過的客戶都說：都美的房子會帶財。</span></p><p><span style=\"color: rgb(51, 51, 51); font-size: 16px;\">&nbsp;</span></p><p><img width=\"216\" alt=\"\" src=\"http://pic.mygonews.com/fetch.php?v=28f26d56552ef72e7c3c6808cd12f4c8.jpg&amp;t=newsPhoto\"></p><p>「都美艷」規劃地下開挖5層、連續壁深近40公尺，大大超過本來法規的開挖深度</p><p><span style=\"color: rgb(51, 51, 51); font-size: 16px;\">前陣子地震新聞讓「防災型都更」話題沸沸揚揚，但都美機構早已積極推動都市更新多年，尤其對於開發甚早、房屋普遍高齡的萬華區而言，都美一直以都更、合建方式取代購地，從老屋舊地重建著手，讓舊市區的市容能因新建築而翻轉，同時也保留了一定的綠地與空曠度；而「都美艷」規劃地下開挖5層、連續壁深近40公尺，大大超過本來法規的開挖深度，這樣的精工結構，更成為公開銷售後持續賣座的最大關鍵！</span></p><p><span style=\"color: rgb(51, 51, 51); font-size: 16px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p><p><img width=\"216\" alt=\"\" src=\"http://pic.mygonews.com/fetch.php?v=8884585c819c0b387820866252811e2c.jpg&amp;t=newsPhoto\"></p><p>&nbsp;</p><p><span style=\"color: rgb(51, 51, 51); font-size: 16px;\">「都美艷」慶祝開工動土，推出『總價1188萬起，買北市捷運2房』的大讓利，再加上每個月只要一坪55元的低管理費，就能享受飯店式管理的社區服務，讓許多年輕小家庭既心動、也能立刻行動！其中五代都在萬華居住的已購客說：「這裡離板南線龍山寺站約只要350米，到西門町也只要一站，通勤很快速，附近又有24小時家樂福、山水街市場、華西街夜市…等商圈，出租客源很充足，更好的是『都美艷』有提供代租服務，能幫我代尋房客、租賃合約、修繕維護等租屋大小事，在我小孩還沒要住之前，這間房子還能幫我多存一點。」</span></p>', 'news-1512287103.jpg', '2017-12-03 15:45:03', '2017-12-13 03:36:09'),
(9, '萬華都更王　新案「讓利」搏成交', '<p>2016/5/12 【蘋果日報 文/記者 詹宜軒】<br></p><p></p><p>在萬華區桂林路上已推出3都更案的都美機構（前員邦建設），位於桂林路、西昌街的建案「都美艷」今正式動工，都美機構董事長曹來春指出，目前在貴陽街、西寧南路口，及漢口街共有3都更案還在進行，同意比例已達8成以上，在萬華區深耕多起都更案的曹來春，堪稱「萬華都更王」。</p><p> </p><p>雖台北市都更案進程緩慢，許多建商言明避之唯恐不及，但曹來春說：「對中小型建商來說，要取得精華地區的土地也只能靠都更、合建，我們做都更案多年，有相當經驗、機動性也強，所以多選擇都更案來操作。」</p><p> </p><p>「都美艷」上月正式公開，此案整合約30幾位地主，總基地面積420坪，規劃16~43坪，其中8成是小坪數產品，開價每坪68~75萬元，成交均價每坪64~65萬元，較區域新案行情約低5~10%，以讓利吸引購屋客，平均周來人數約30餘組，已售5成。</p><p> </p><p>此案周圍目前尚有一都更案進行中，基地位於桂林路、西園路一段交叉口，案名「富都新紳」，據了解基地面積超過500坪、開價75~85萬元，坪數規劃亦有小坪數。</p>', 'news-1512287214.jpg', '2017-12-03 15:46:54', '2017-12-13 03:32:18'),
(12, '都美艷 北萬華1~3房 建物耐震6級', '<p>2016/5/28 【自由時報 文/記者 朱語蕎】</p><p>萬華區預售新案「都美艷」，鄰近捷運龍山寺站，桂林路、華西街商圈集中，生活機能成熟，產品規劃16、27、43坪1~3房，每坪開價68~75萬元，建商有感讓價10%，銷售已破5成，預計6月動工。</p><p>都美機構推出的「都美艷」，基地位桂林路，為都更合建案，整合基地約420坪，現場專案經理黃思維表示，北萬華現有約40個都更案進行中，光是桂林路就有2塊預備推案，後市備受期待。</p><p><br>此案距離捷運龍山寺站僅350公尺，社區外就有公車站牌可搭乘，桂林路、華西街、西昌街都有觀光夜市，距離西門町也不遠，還有知名的家電街、佛具街，觀光人潮多。台北市政府為加強西區改造，推出中正萬華復興計劃，將大幅改善西區市容，備受關注的雙子星計劃，也是眾多利多之一。</p><p><br>「都美艷」規劃兩棟建物，分別為地上15、24層、地下5層，1樓有7戶店面，住家逐層退縮，單層10~4戶都有，建商特別注重施工品質，6樓以下使用5千磅混凝土，6樓以上使用6千磅混凝土，連續壁開挖至40米，建物可耐震6級地震。</p><h4>專家意見 「都美艷」專案經理 黃思維</h4><p>本案周邊生活機能成熟，沿線就有3個觀光夜市，距離捷運站也很近，建商特別注重施工工法，建物可耐震6級，定簽只需5%，工程期分40期10%，平均月付約3萬元，對一般雙薪家庭來說，還算可負擔，加上建商有感讓價，比區內新案行情便宜約10%，銷售狀況相當好。</p>', 'news-1513135634.jpg', '2017-12-06 01:10:49', '2017-12-13 03:27:14');

-- --------------------------------------------------------

--
-- 資料表結構 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-users', 'Create Users', 'Create Users', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(2, 'read-users', 'Read Users', 'Read Users', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(3, 'update-users', 'Update Users', 'Update Users', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(4, 'delete-users', 'Delete Users', 'Delete Users', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(5, 'create-acl', 'Create Acl', 'Create Acl', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(6, 'read-acl', 'Read Acl', 'Read Acl', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(7, 'update-acl', 'Update Acl', 'Update Acl', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(8, 'delete-acl', 'Delete Acl', 'Delete Acl', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(9, 'read-profile', 'Read Profile', 'Read Profile', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(10, 'update-profile', 'Update Profile', 'Update Profile', '2017-11-25 21:36:22', '2017-11-25 21:36:22');

-- --------------------------------------------------------

--
-- 資料表結構 `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(9, 2),
(10, 2),
(9, 3),
(10, 3),
(9, 4),
(10, 4),
(9, 5),
(10, 5),
(9, 6),
(10, 6),
(9, 7),
(10, 7);

-- --------------------------------------------------------

--
-- 資料表結構 `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(2, 'administrator', 'Administrator', 'Administrator', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(3, 'editor', 'Editor', 'Editor', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(4, 'author', 'Author', 'Author', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(5, 'contributor', 'Contributor', 'Contributor', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(6, 'supporter', 'Supporter', 'Supporter', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(7, 'subscriber', 'Subscriber', 'Subscriber', '2017-11-25 21:36:22', '2017-11-25 21:36:22');

-- --------------------------------------------------------

--
-- 資料表結構 `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(1, 8, 'App\\User'),
(1, 9, 'App\\User'),
(2, 2, 'App\\User'),
(3, 3, 'App\\User'),
(4, 4, 'App\\User'),
(5, 5, 'App\\User'),
(6, 6, 'App\\User'),
(7, 7, 'App\\User');

-- --------------------------------------------------------

--
-- 資料表結構 `ServiceInfo`
--

CREATE TABLE `ServiceInfo` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '服務項目標題',
  `description` text COLLATE utf8mb4_unicode_ci COMMENT '服務項目',
  `serviceInfo_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blank.jpg' COMMENT '代表圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `ServiceInfo`
--

INSERT INTO `ServiceInfo` (`id`, `title`, `description`, `serviceInfo_image`, `created_at`, `updated_at`) VALUES
(1, '客戶服務', '<ul><li>線上工程進度照片每月更新瀏覽</li><li>客戶變更作業</li></ul>', 'serviceInfo-1512651634.jpg', '2017-12-07 12:54:00', '2017-12-13 02:42:53'),
(2, '售後服務', '<ul><li>房屋保固服務</li><li>保固期後修繕服務及優良廠商提供</li></ul>', 'serviceInfo-1512657229.jpg', '2017-12-07 14:33:50', '2017-12-13 02:42:38'),
(3, '開發洽談', '<ul><li>都市更新相關開發</li><li>合建案相關開發</li><li>其他合作開發<br></li></ul>', 'serviceInfo-1512657272.jpg', '2017-12-07 14:34:32', '2017-12-07 14:34:32'),
(4, '其他問題', '<ul><li>預約賞屋</li><li>其他問題諮詢</li></ul>', 'serviceInfo-1512657297.jpg', '2017-12-07 14:34:57', '2017-12-07 14:34:57');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadministrator', 'superadministrator@app.com', '$2y$10$EuAYAGTXDBYdC7wneYIxyu0p1X1Rc5Brz3dD5IZybJIo.LEKoepdW', 'rhSoLCMGhMasc07EngZHmfnKZbhWZfUSNKH5xhWVxXql70YhXWLLI88plPZK', '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(2, 'Administrator', 'administrator@app.com', '$2y$10$WX8yTfbqb/yLJ7xeIucFhuFAdBgxNJUw6sQKKhCy4rU0IMNtOtphS', NULL, '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(3, 'Editor', 'editor@app.com', '$2y$10$gS1BbugYQXGSVI/KpuqfsOuWeqmnCxWEEzmlU8v2EumyhIAbZVU4m', NULL, '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(4, 'Author', 'author@app.com', '$2y$10$XRuIooVZG0F2b8d/EIbqueUf0sTQi6QSBuPxduo8nUpa34ReWyKEa', NULL, '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(5, 'Contributor', 'contributor@app.com', '$2y$10$UoqGCvFLAxKRBuuW37AYau5LI13O85P3zGslL2P3nuInIA8TtVDjm', NULL, '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(6, 'Supporter', 'supporter@app.com', '$2y$10$CIjvEjwNvV9wwdakxf2hNON6JR4thkLtq5kmF0G2xgFGs8H4wq5Ji', NULL, '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(7, 'Subscriber', 'subscriber@app.com', '$2y$10$pkfUpESWakUmhPBX1NLy1ull1/aKHDUGhnw9eAUdyffM17nT3gZUW', NULL, '2017-11-25 21:36:22', '2017-11-25 21:36:22'),
(8, 'alen', 'alenhung@gmail.com', '$2y$10$qADILGtHNWMnej2MT71CJOLyd9SyduXwo6.HKHHI6fCWVCyEsRgJy', 'z8TQAGKkGpzutirOncJFg4tUZcBNxICtBK0xpuTuNdCVStw3MCGlPUrIm7Ol', '2017-12-07 16:43:59', '2017-12-07 16:43:59'),
(9, '怡均', 'yijyun@yuanbang.com.tw', '$2y$10$N4xaCpamsxfictUaSYM7qOtRLDI5/V/qNifqTnvphtIctcEDaL3pS', 'mCcFdWRdiW0yEdNamYHuSNe0OICAnbB3Qa8ns5X2OJDofRsiRWvA19invrll', '2017-12-09 18:13:38', '2017-12-09 18:13:38');

-- --------------------------------------------------------

--
-- 資料表結構 `WorkingPhotos`
--

CREATE TABLE `WorkingPhotos` (
  `id` int(10) UNSIGNED NOT NULL,
  `working_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '在建工程ID',
  `working_images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'blank.jpg' COMMENT '在建工程圖片',
  `working_image_description` text COLLATE utf8mb4_unicode_ci COMMENT '在建工程圖片說明文字',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `workings`
--

CREATE TABLE `workings` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `builder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '起造人'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `workings`
--

INSERT INTO `workings` (`id`, `title`, `slogan`, `description`, `location`, `service_location`, `land_plan`, `land_size`, `households`, `unit_area`, `public_ratio`, `tall`, `completion_date`, `project_image`, `site_url`, `workings_image`, `workings_image_description`, `created_at`, `updated_at`, `builder`) VALUES
(1, '龍潭建案', '龍潭建案', '龍潭建案', '桃園市龍潭區民有二街', '桃園市龍潭區民有二街', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'workings-1512235976.jpg', NULL, NULL, NULL, '2017-11-26 15:22:43', '2017-12-07 12:29:48', '員旺建設股份有限公司');

-- --------------------------------------------------------

--
-- 資料表結構 `workings_photos`
--

CREATE TABLE `workings_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `workings_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '在建工程ID',
  `workings_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'blank.jpg' COMMENT '在建工程圖片',
  `workings_image_description` text COLLATE utf8mb4_unicode_ci COMMENT '在建工程圖片說明文字',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `works`
--

INSERT INTO `works` (`id`, `title`, `slogan`, `description`, `location`, `service_location`, `land_plan`, `land_size`, `households`, `unit_area`, `public_ratio`, `tall`, `completion_date`, `project_image`, `site_url`, `created_at`, `updated_at`) VALUES
(1, '士林新天地', '基隆河濱及景觀視野，飯店門廳規劃，60M超大建築棟距，縱深100M椰林大道。', '士林新天地\r\n士林新天地\r\n士林新天地\r\n士林新天地', '台北市士林區大南路325號', '台北市士林區大南路325號', '地上13樓，地下3樓', '約3,291坪', '493戶', '12~75坪', '27%~30%', NULL, '2008年', 'works-1512236102.jpg', NULL, '2017-11-25 21:46:28', '2017-12-12 01:07:18'),
(2, '桂林苑', '中華香榭大道 百年經典建築', '鄰近博愛特區，緊鄰中華路80米林蔭大道，西門町商圈步行僅10分鐘，鄰近龍山寺捷運站及萬華火車站，地段與生活機能佳。', '台北市萬華區桂林路6號', '台北市萬華區桂林路6號', '地上15層，地下四層', '479坪', '118戶', '25~91坪', '26%', NULL, '2010年4月', 'works-1512236090.jpg', NULL, '2017-11-25 21:48:17', '2017-12-12 01:09:18'),
(3, '員邦夢想家-圓夢區', '美夢成真', '內湖最靠近信義計劃區的建案，近松山火車站商圈、饒河夜市，鄰三高三快聯外動線與舊宗路量販店群，享受便利生活圈。', '台北市內湖區新明路498巷', '台北市內湖區新明路498巷', '地上8層，地下3層', '約245坪', '43戶', '32~35坪', '32%', NULL, '2011年12月', 'works-1512236077.jpg', NULL, '2017-11-25 21:49:20', '2017-12-12 01:13:09'),
(4, '員邦夢想家-美夢區', '美夢成真', '內湖最靠近信義計劃區的建案，近松山火車站商圈、饒河夜市，鄰三高三快聯外動線與舊宗路量販店群，享受便利生活圈。', '台北市內湖區新明路498巷', '台北市內湖區新明路498巷', '地上7層，地下3層', '約286坪', '27戶', '32~35坪', '32%', NULL, '2011年12月', 'works-1512236064.jpg', NULL, '2017-11-25 21:50:19', '2017-12-12 01:12:46'),
(5, '陽明峰匯', '台北門牌　山海城市', '傲擁台北市北投、關渡人文勝景、山海城市悠遊首選，關渡捷運站徒步三分鐘', '台北市北投區立功街79巷', '台北市北投區立功街79巷', '地上12層，地下3層', '約2300坪', '273戶', '19~50坪', '32%', NULL, '2015年3月', 'works-1512236050.jpg', NULL, '2017-11-25 21:51:57', '2017-12-15 02:28:50'),
(6, '員邦華宴', '中華大道旁　最精采的生活饗宴', '「員邦華宴」位於萬華區桂林路，以鄰近家樂福、西門捷運站等生活機能為訴求，且位於交通樞紐，生活機能方便。', '台北市萬華區桂林路28號', '台北市萬華區桂林路28號', '地上19層，地下3層', '約312坪', '住宅72戶/店面5戶', '30~60坪', '32%', NULL, '2015年5月', 'works-1512236038.jpg', NULL, '2017-11-25 21:54:52', '2017-12-12 01:10:19'),
(7, '台北甜心', '4米2新甜品宅', '台北甜心，泰山區最黃金地段，比鄰明志科大，步行1分鐘可到，提供寬廣休閒運動空間。 鄰近明志路三段熱鬧商圈，生活機能豐富多元，各式商店林立，最便利的居家生活。 交通便利，捷運泰山貴和站1公里，連接台北及桃園地區，通勤工作、出外遊玩皆方便。', '新北市泰山區工專路50號', '新北市泰山區工專路50號', '地上9~11樓，地下2樓', NULL, '74戶', NULL, '32%', '4米2', '預計2017年10月', 'works-1512236025.jpg', NULL, '2017-11-25 21:56:02', '2017-12-12 01:03:11'),
(8, '都美艷', 'BEAUTY ALL IN ONE', '博愛特區、台北雙子星特區、西門水岸觀光特區，啟動第一波東軸西轉！萬華的第二次翻轉，將從十大計劃加碼捷運佈局、建築質感、生活素質，扭轉老城印象，再造北市宜居新天地。', '台北市萬華區桂林西昌路口', '臺北市萬華區西昌街134號', 'A棟，地上23樓，地下5樓 B棟，地上15樓', '418坪', '188戶', '16〜43坪／1〜3房', '33%', '一樓大廳4米2、住家3米3', '預定2019年', 'works-1512236006.jpg', NULL, '2017-11-25 21:57:23', '2017-12-12 01:02:48');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `History`
--
ALTER TABLE `History`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `indexCover`
--
ALTER TABLE `indexCover`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `indexInfo`
--
ALTER TABLE `indexInfo`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- 資料表索引 `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- 資料表索引 `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- 資料表索引 `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- 資料表索引 `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- 資料表索引 `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- 資料表索引 `ServiceInfo`
--
ALTER TABLE `ServiceInfo`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 資料表索引 `WorkingPhotos`
--
ALTER TABLE `WorkingPhotos`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `workings`
--
ALTER TABLE `workings`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `workings_photos`
--
ALTER TABLE `workings_photos`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `History`
--
ALTER TABLE `History`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用資料表 AUTO_INCREMENT `indexCover`
--
ALTER TABLE `indexCover`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `indexInfo`
--
ALTER TABLE `indexInfo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- 使用資料表 AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用資料表 AUTO_INCREMENT `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用資料表 AUTO_INCREMENT `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用資料表 AUTO_INCREMENT `ServiceInfo`
--
ALTER TABLE `ServiceInfo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用資料表 AUTO_INCREMENT `WorkingPhotos`
--
ALTER TABLE `WorkingPhotos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `workings`
--
ALTER TABLE `workings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `workings_photos`
--
ALTER TABLE `workings_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
