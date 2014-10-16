-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2014 �?10 ??16 ??10:33
-- 伺服器版本: 5.6.17
-- PHP 版本： 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `work_remotely`
--

-- --------------------------------------------------------

--
-- 資料表結構 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_title` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 資料表的匯出資料 `category`
--

INSERT INTO `category` (`category_id`, `category_title`) VALUES
(1, '視覺設計'),
(2, '程式設計'),
(3, '網路行銷'),
(4, '市場開發 / 業務'),
(5, '網站內容編輯'),
(6, '行銷 / 企劃'),
(7, '其他'),
(8, '醫療'),
(9, '電子業');

-- --------------------------------------------------------

--
-- 資料表結構 `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `jobs_id` int(11) NOT NULL AUTO_INCREMENT,
  `jobs_title` varchar(50) NOT NULL,
  `jobs_category` int(11) NOT NULL,
  `jobs_lower` int(11) NOT NULL,
  `jobs_higher` int(11) NOT NULL,
  `jobs_place` text NOT NULL,
  `jobs_description` text NOT NULL,
  `jobs_hire` text NOT NULL,
  `jobs_company` varchar(50) NOT NULL,
  `jobs_url` text NOT NULL,
  `jobs_email` text NOT NULL,
  `jobs_update` date NOT NULL,
  PRIMARY KEY (`jobs_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 資料表的匯出資料 `jobs`
--

INSERT INTO `jobs` (`jobs_id`, `jobs_title`, `jobs_category`, `jobs_lower`, `jobs_higher`, `jobs_place`, `jobs_description`, `jobs_hire`, `jobs_company`, `jobs_url`, `jobs_email`, `jobs_update`) VALUES
(11, 'Back-End Engineer', 2, 660000, 660000, '台北市中正區衡陽路 ', 'Pinkoi 是個亞洲最大的設計商品網路購物商城，擁有亞洲最多的優質設計師，四千多個設計品牌，一萬多位來自不同國家的設計師們都在 Pinkoi 販售及分享他們的設計，Pinkoi 從台灣開始，幫助設計師的作品銷售往超過十六個國家，我們希望因為設計，帶給大家更多歡笑和喜悅，讓設計成為生活中的一部分，接下來幾年，我們將把經營的重心放在國際市場的經營，以日本、中國、台灣、香港為主，讓亞洲優質設計和歐美一樣被全世界的人看見．\r\n\r\n在 Pinkoi，工程師的任務是讓每個來 Pinkoi 的人都能擁有難以忘懷的使用體驗，你必需擁有極大的熱情，因為我們相信一個令人讚賞的網站服務，是由背後每一位工程師努力的追求卓越，每一個小細節都是 Pinkoi 非常在乎的事情！\r\n\r\n**我們希望你能擁有的特質**\r\n\r\n不需要是相關科系或是名校畢業，我們只在乎你的想法、你的能力。\r\n要有良好的溝通能力，能和 Pinkoi 優秀的夥伴密切協同工作，能夠清晰勇敢的表達自己的想法。\r\n樂於學習矽谷最新的網路技術。\r\n平常喜歡逛國內外的新創網站，擁有好奇心和對網路熟悉，才有辦法明白使用者要什麼。\r\n你肯定要發自內心的熱愛 Pinkoi！\r\n\r\n**我們希望你能擁有的專業技能**\r\n\r\n熟悉 Web 程式開發。\r\n熟悉 Python。\r\n熟悉 MVC 開發架構，有 Django 或者 Flask 等框架的使用經驗。\r\n熟悉 HTTP 協定，有用過第三方 API (Facebook / Google) 的實作經驗。\r\n熟悉 Linux 系統，Pinkoi 用 Ubuntu。\r\n熟悉 MySQL 資料庫。\r\n熟悉 NoSQL 資料庫 (e.g. CouchDB)。(加分)\r\n\r\n**你的工作內容**\r\n\r\n開發新的功能。\r\nExport API 給 Pinkoi 所有平台使用 - Web / Mobile Web / iOS APP / Android APP。\r\n精進舊有的功能和架構。\r\n我們對新技術採取開放態度，你隨時可以吸收和整合矽谷最新的網路技術進入平台。\r\n和我們一起開發世界級的產品，Pinkoi 今年的主力國際市場在日本和大陸。\r\n\r\n**加入 Pinkoi 的福利**\r\n\r\n你會有一台 Mac\r\n漂亮的工作環境 https://www.flickr.com/photos/toomore/sets/72157645504882575/ 和開心的工作氣氛 http://instagram.com/ilovepinkoi\r\n我們有個經常會自己長出飲料的冰箱，還有咖啡喝不完的膠囊咖啡機\r\n我們每個星期一早上有免費的ＣＡＭＡ咖啡，幫你補充滿滿一星期的能量\r\n團隊如果達到公司的目標，每季都會有獎金來激勵大家\r\n偷偷告訴你，團隊達成去年公司目標，今年公司全額補助到日本沖繩玩四天三夜\r\n我們隨時都會有好玩的事情和活動\r\nPinkoi 在做的是國際化的產品、我們也在快速的成長，加入 Pinkoi 你會有最好的成長環境和舞台\r\n你會跟非常優秀的團隊成員一起共事，Pinkoi 每個人都很棒\r\n更多你來面試的時候我們再聊\r\n\r\n**不用想了，趕快來當個 Pinkoi 人**\r\n\r\n附上個人履歷和作品 (你的 Github、網站網址或其他資料)，來信 mike.lee@pinkoi.com，我們會通知合適者約面試，若不符合資格，將不另行通知。\r\n薪資 40,000 ~ 100,000，細節面議', '附上個人履歷和作品 (你的 Github、網站網址或其他資料)，來信 mike.lee@pinkoi.com，我們會通知合適者約面試，若不符合資格，將不另行通知。', 'Pinkoi', 'http://www.pinkoi.com/', 'mike.lee@pinkoi.com', '2014-08-26'),
(13, '資深 UX / UI / Visual 設計師', 1, 660000, 660000, '台北市中正區新生南路一段110號4樓', '### 應徵基本條件\r\n\r\n\r\n具備三~五年以上網站及行動平台設計，擅長 Wireframe 與 Prototype，並熟悉歐美簡潔設計風格及趨勢。\r\n了解網路服務介面之資訊架構、元素設計、使用介面優化概念。 包含使用情境設計，使用流程規劃，使用介面呈現等。\r\n對於 visual design 有無比熱情。\r\n能流暢閱讀英文技術文件。\r\n具有團隊開發經驗。\r\n\r\n### 加分條件\r\n\r\n\r\n擅長 HTML 與 CSS，熟悉 Javascript (jQuery)、Bootstrap 響應式網頁設計。\r\n熟悉 Ruby on Rail / MVC framework\r\n熟悉 Ember.js\r\n熟悉 Agile 、 Scrum 開發方式\r\niOS、Android 開發經驗\r\n熟悉高爾夫的基本規則\r\n\r\n### 團隊簡介\r\n\r\n\r\nCODE GREEN係由資深產業專家主導的網路程式開發團隊，有別於由程式 設計師組成的開發商，我們的團隊組成具國際化的多元背景，在財務上，我們有穩固的事業營收基礎與健康的現金流量，就事業開發策略，目標市場定位與產品策略 已有明確的規劃，結合有效的業界人脈網絡，對於成功我們有十足的信心，歡迎有創業熱情的開發者加入團隊。\r\n理想的工作條件\r\n\r\nCODE GREEN提供夥伴們合理的工時要求、15天全薪年假、舒適便利的辦公環境，以及不設限制的休憩空間，除此之外，更著重活力、積極和正面的團隊文化，塑造開放型的溝通管理模式，因為我們深信提升創造力的最佳公式，是提供夥伴們一個能與真實生活接軌的工作氛圍。 \r\n開發專案\r\n\r\nGolfwebclub 是開啟多方交流的體育社群活動平台，結合高爾夫差點(正式積分)記錄、課程銷售、活動策劃、電子商務等收費雲端Saas服務，以提升高爾夫運動休閒產業的商業創新與社群生產力。 運用Golfwebclub雲端平台，一般高爾夫愛好者與產業相關人士可快速了解掌握最新活動資訊，共享知識，更可以進一步創造屬於自己的資訊、活動介面。\r\n\r\n### [ English Version ]\r\n\r\n\r\nCODE GREEN is a developer''s studio based in Taipei city. We are a nimble team of developers and golf specialists. We''re currently looking for a talented Web Front-end Engineer / Designer, who are enthusiastic about their work, to help us build and visualize the future of golf sport for the world market.\r\n\r\nYou will work alongside our team members to think through user flows create wire frames, and design new user interface concepts. You’ll also be tasked with creating visually rich graphics and styles for websites and applications.\r\n\r\n### Qualifications:\r\n\r\n\r\nExperience in designing and iterating on web / mobile apps\r\nExcellent written and verbal communication skills, especially when talking about design\r\nExceptional Adobe Illustrator, Photoshop, and InDesign skills\r\nWorking knowledge of HTML/CSS/Javascript, especially frameworks such as Bootstrap or Foundation.\r\nWe have a very tight-knit culture that values openness, constant communication, and a sense of humor. No matter your level of skill, we look first and foremost for cultural fit.', '有意應徵者，請備妥個人履歷等相關資料，逕寄至電子信箱 ，如有疑問，歡迎聯絡洽詢。\r\n\r\n職務聯絡人：蕭先生 \r\nE-mail：contact@codegreenit.com \r\n電洽：02-2391 0328\r\n\r\nIf you are interested in this position, please send your resume to contact@codegreenit.com. Moreover, feel free to send us an email if you have any questions regarding this position.', 'CODEGREEN', 'http://codegreenit.com/', 'contact@codegreenit.com', '2014-08-26'),
(14, 'Qoo', 1, 120000, 120000, 'Qoo', 'Qoo', 'Qoo', 'Qoo', 'http://Qoo.com', 'Qoo@gmail.com', '2014-08-27');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `user_password` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`) VALUES
(1, '123@gmail.com', '12345678');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
