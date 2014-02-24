-- phpMyAdmin SQL Dump
-- version 2.11.10
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 02 月 24 日 09:00
-- 服务器版本: 5.0.95
-- PHP 版本: 5.3.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `anxinchina`
--

-- --------------------------------------------------------

--
-- 表的结构 `ax_announcement_2`
--

DROP TABLE IF EXISTS `ax_announcement_2`;
CREATE TABLE IF NOT EXISTS `ax_announcement_2` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) default NULL,
  `title_en` varchar(255) default NULL,
  `file_url` varchar(100) default NULL,
  `file_url_en` varchar(50) default NULL,
  `create_time` int(11) NOT NULL default '0' COMMENT '时间戳',
  `create_time2` datetime default NULL COMMENT 'datetime格式时间',
  `isshow` tinyint(1) NOT NULL default '1' COMMENT '是否显示',
  `istop` tinyint(1) NOT NULL default '0' COMMENT '是否置顶',
  `orders` smallint(5) NOT NULL default '1' COMMENT '排序',
  `url` varchar(150) NOT NULL default '' COMMENT '定向url地址',
  `click` int(11) NOT NULL default '0' COMMENT '点击率',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=241 ;

--
-- 导出表中的数据 `ax_announcement_2`
--

INSERT INTO `ax_announcement_2` (`id`, `title`, `title_en`, `file_url`, `file_url_en`, `create_time`, `create_time2`, `isshow`, `istop`, `orders`, `url`, `click`) VALUES
(89, '董事會會議通告', 'NOTICE OF BOARD MEETING', 'Public/announcements/zh/a080901.pdf', 'Public/announcements/en/a080901.pdf', 1220198400, '2008-09-01 00:00:00', 1, 0, 1, '', 0),
(88, '截至二零零八年六月三十日止六個月中期業績公佈', 'INTERIM RESULTS ANNOUNCEMENT FOR THE SIX MONTHS ENDED 30 JUNE 2008', 'Public/announcements/zh/a080917.pdf', 'Public/announcements/en/a080917.pdf', 1221580800, '2008-09-17 00:00:00', 1, 0, 1, '', 0),
(87, '股價及成交量不尋常波動', 'UNUSUAL PRICE AND TURNOVER MOVEMENT', 'Public/announcements/zh/a081105.pdf', 'Public/announcements/en/a081105.pdf', 1225814400, '2008-11-05 00:00:00', 1, 0, 1, '', 0),
(86, '股價及成交量不尋常波動', 'UNUSUAL PRICE AND TURNOVER MOVEMENT', 'Public/announcements/zh/a081215.pdf', 'Public/announcements/en/a081215.pdf', 1229270400, '2008-12-15 00:00:00', 1, 0, 1, '', 0),
(85, '盈利警告', 'PROFIT WARNING', 'Public/announcements/zh/a090401a.pdf', 'Public/announcements/en/a090401a.pdf', 1238515200, '2009-04-01 00:00:00', 1, 0, 1, '', 0),
(82, '截至二零零八年十二月三十一日止年度全年業績公佈', 'ANNOUNCEMENT OF FINAL RESULTS FOR THE YEAR ENDED 31 DECEMBER 2008', 'Public/announcements/zh/a090424.pdf', 'Public/announcements/en/a090424.pdf', 1240502400, '2009-04-24 00:00:00', 1, 0, 1, '', 0),
(83, '配售非上市認股權證', 'PLACING OF NON-LISTED WARRANTS', 'Public/announcements/zh/a090421.pdf', 'Public/announcements/en/a090421.pdf', 1240243200, '2009-04-21 00:00:00', 1, 0, 1, '', 0),
(84, '董事會會議通告', 'NOTICE OF BOARD MEETING', 'Public/announcements/zh/a090403.pdf', 'Public/announcements/en/a090403.pdf', 1238688000, '2009-04-03 00:00:00', 1, 0, 1, '', 0),
(81, '配售非上市認股權證之更新資料', 'UPDATE ON PLACING OF NON-LISTED WARRANTS', 'Public/announcements/zh/a090428.pdf', 'Public/announcements/en/a090428.pdf', 1240848000, '2009-04-28 00:00:00', 1, 0, 1, '', 0),
(79, '二零零九年六月三日舉行之股東週年大會投票結果 ', 'POLL RESULTS OF ANNUAL GENERAL MEETING HELD ON 3 JUNE 2009', 'Public/announcements/zh/a090603.pdf', 'Public/announcements/en/a090603.pdf', 1243958400, '2009-06-03 00:00:00', 1, 0, 1, '', 0),
(80, '建議修訂本公司組織章程細則及股東週年大會通告', 'PROPOSED AMENDMENTS TO THE ARTICLES OF ASSOCIATION OF THE COMPANY AND THE NOTICE OF ANNUAL GENERAL MEETING', 'Public/announcements/zh/a090429.pdf', 'Public/announcements/en/a090429.pdf', 1240934400, '2009-04-29 00:00:00', 1, 0, 1, '', 0),
(78, '盈利警告 ', 'PROFIT WARNING', 'Public/announcements/zh/a090731.pdf', 'Public/announcements/en/a090731.pdf', 1248969600, '2009-07-31 00:00:00', 1, 0, 1, '', 0),
(77, '暫停股份買賣', 'SUSPENSION OF TRADING', 'Public/announcements/zh/a090831.pdf', 'Public/announcements/en/a090831.pdf', 1251648000, '2009-08-31 00:00:00', 1, 0, 1, '', 0),
(76, '非常重大收購建議增加法定股本及恢復買賣 ', 'VERY SUBSTANTIAL ACQUISITION PROPOSED INCREASE IN AUTHORISED SHARE CAPITAL AND RESUMPTION OF TRADING', 'Public/announcements/zh/a090904.pdf', 'Public/announcements/en/a090904.pdf', 1251993600, '2009-09-04 00:00:00', 1, 0, 1, '', 0),
(74, '更改董事會召開日期', 'CHANGE OF DATE OF BOARD MEETING', 'Public/announcements/zh/a090918.pdf', 'Public/announcements/en/a090918.pdf', 1253203200, '2009-09-18 00:00:00', 1, 0, 1, '', 0),
(75, '董事會會議通告', 'NOTICE OF BOARD MEETING', 'Public/announcements/zh/a090908.pdf', 'Public/announcements/en/a090908.pdf', 1252339200, '2009-09-08 00:00:00', 1, 0, 1, '', 0),
(58, '股東特別大會通告', 'NOTICE OF EXTRAORDINARY GENERAL MEETING', 'Public/announcements/zh/a100623.pdf', 'Public/announcements/en/a100623.pdf', 1277222400, '2010-06-23 00:00:00', 1, 0, 1, '', 0),
(59, '建議更改公司名稱', 'PROPOSED CHANGE OF COMPANY NAME', 'Public/announcements/zh/a100621a.pdf', 'Public/announcements/en/a100621a.pdf', 1277049600, '2010-06-21 00:00:00', 1, 0, 1, '', 0),
(60, '股東特別大會通告', 'NOTICE OF EXTRAORDINARY GENERAL MEETING', 'Public/announcements/zh/a100621.pdf', 'Public/announcements/en/a100621.pdf', 1277049600, '2010-06-21 00:00:00', 1, 0, 1, '', 0),
(61, '主要交易之補充協議', 'SUPPLEMENTAL AGREEMENT FOR MAJOR TRANSACTION', 'Public/announcements/zh/a100614a.pdf', 'Public/announcements/en/a100614a.pdf', 1276444800, '2010-06-14 00:00:00', 1, 0, 1, '', 0),
(62, '延遲寄發通函主要交易出售附屬公司', 'DELAY IN DESPATCH OF CIRCULAR MAJOR TRANSACTION DISPOSAL OF SUBSIDIARY', 'Public/announcements/zh/a100604.pdf', 'Public/announcements/en/a100604.pdf', 1275580800, '2010-06-04 00:00:00', 1, 0, 1, '', 0),
(63, '二零一零年六月二日舉行之股東週年大會投票結果及執行董事及核數師之變動', 'POLL RESULTS OF ANNUAL GENERAL MEETING HELD ON 2 JUNE 2010 AND CHANGE IN EXECUTIVE DIRECTOR AND AUDITORS', 'Public/announcements/zh/a100602a.pdf', 'Public/announcements/en/a100602a.pdf', 1275408000, '2010-06-02 00:00:00', 1, 0, 1, '', 0),
(64, '主要交易出售附屬公司', 'MAJOR TRANSACTION DISPOSAL OF SUBSIDIARY', 'Public/announcements/zh/a100516.pdf', 'Public/announcements/en/a100516.pdf', 1273939200, '2010-05-16 00:00:00', 1, 0, 1, '', 0),
(65, '股東週年大會通告', 'NOTICE OF ANNUAL GENERAL MEETING', 'Public/announcements/zh/a100429.pdf', 'Public/announcements/en/a100429.pdf', 1272470400, '2010-04-29 00:00:00', 1, 0, 1, '', 0),
(66, '截至二零零九年十二月三十一日止年度全年業績公佈', 'ANNOUNCEMENT OF FINAL RESULTS FOR THE YEAR ENDED 31 DECEMBER 2009', 'Public/announcements/zh/a100426.pdf', 'Public/announcements/en/a100426.pdf', 1272211200, '2010-04-26 00:00:00', 1, 0, 1, '', 0),
(67, '董事會會議通告', 'NOTICE OF BOARD MEETING', 'Public/announcements/zh/a100412.pdf', 'Public/announcements/en/a100412.pdf', 1271001600, '2010-04-12 00:00:00', 1, 0, 1, '', 0),
(68, '盈利警告', 'PROFIT WARNING', 'Public/announcements/zh/a100331.pdf', 'Public/announcements/en/a100331.pdf', 1269964800, '2010-03-31 00:00:00', 1, 0, 1, '', 0),
(69, '股價及成交量不尋常波動', 'UNUSUAL PRICE AND TURNOVER MOVEMENT', 'Public/announcements/zh/a100317.pdf', 'Public/announcements/en/a100317.pdf', 1268755200, '2010-03-17 00:00:00', 1, 0, 1, '', 0),
(70, '執行董事之辭任及委任', 'RESIGNATION AND APPOINTMENT OF EXECUTIVE DIRECTORS', 'Public/announcements/zh/a100203.pdf', 'Public/announcements/en/a100203.pdf', 1265126400, '2010-02-03 00:00:00', 1, 0, 1, '', 0),
(71, '二零零九年十月十三日舉行之股東特別大會投票結果', 'POLL RESULTS OF THE EXTRAORDINARY GENERAL MEETING HELD ON 13 OCTOBER 2009', 'Public/announcements/zh/a091013.pdf', 'Public/announcements/en/a091013.pdf', 1255363200, '2009-10-13 00:00:00', 1, 0, 1, '', 0),
(72, '截至二零零九年六月三十日止六個月中期業績公佈', 'INTERIM RESULTS ANNOUNCEMENT FOR THE SIX MONTHS ENDED 30 JUNE 2009', 'Public/announcements/zh/a090928.pdf', 'Public/announcements/en/a090928.pdf', 1254067200, '2009-09-28 00:00:00', 1, 0, 1, '', 0),
(73, '股東特別大會通告 ', 'NOTICE OF EXTRAORDINARY GENERAL MEETING', 'Public/announcements/zh/a090924.pdf', 'Public/announcements/en/a090924.pdf', 1253721600, '2009-09-24 00:00:00', 1, 0, 1, '', 0),
(90, '股東週年大會通告', 'NOTICE OF ANNUAL GENERAL MEETING', 'Public/announcements/zh/a080425.pdf', 'Public/announcements/en/a080425.pdf', 1209052800, '2008-04-25 00:00:00', 1, 0, 1, '', 0),
(91, '暫停辦理股份過戶登記手續', 'CLOSURE OF BOOKS', 'Public/announcements/zh/a080422.pdf', 'Public/announcements/en/a080422.pdf', 1208793600, '2008-04-22 00:00:00', 1, 0, 1, '', 0),
(92, '業績公佈', 'ANNOUNCEMENT', 'Public/announcements/zh/a080421.pdf', 'Public/announcements/en/a080421.pdf', 1208707200, '2008-04-21 00:00:00', 1, 0, 1, '', 0),
(93, '須予披露交易福建南少林葯業有限公司（本公司全資附屬公司）收購兩種醫藥產品之配方、藥品批准文號及日後開發權利', 'DISCLOSEABLE TRANSACTION ACQUISITION OF THE FORMULAE, MEDICAL APPROVAL NUMBERS AND THE RIGHT OF FUTURE DEVELOPMENT OF TWO PHARMACEUTICAL PRODUCTS BY FUJIAN NANSHAOLIN PHARMACEUTICAL CO. LTD. (A WHOLLY - OWNED SUBSIDIARY OF THE COMPANY)', 'Public/announcements/zh/a080418.pdf', 'Public/announcements/en/a080418.pdf', 1208448000, '2008-04-18 00:00:00', 1, 0, 1, '', 0),
(94, '董事會會議通告', 'NOTICE OF BOARD MEETING', 'Public/announcements/zh/a080403.pdf', 'Public/announcements/en/a080403.pdf', 1207152000, '2008-04-03 00:00:00', 1, 0, 1, '', 0),
(95, '二零零七年中期業績公佈', 'INTERIM RESULT ANNOUNCEMENT 2007', 'Public/announcements/zh/a070927.pdf', 'Public/announcements/en/a070927.pdf', 1190822400, '2007-09-27 00:00:00', 1, 0, 1, '', 0),
(96, '董事會會議通告', 'NOTICE OF BOARD MEETING', 'Public/announcements/zh/a070914.pdf', 'Public/announcements/en/a070914.pdf', 1189699200, '2007-09-14 00:00:00', 1, 0, 1, '', 0),
(97, '配售現有股份及補足認購新股份及恢復股份買賣', 'Placing of Existing Shares and Top-Up Subscription for New Shares and Resumption of Trading', 'Public/announcements/zh/a070813.pdf', 'Public/announcements/en/a070813.pdf', 1186934400, '2007-08-13 00:00:00', 1, 0, 1, '', 0),
(98, '暫停股份買賣', 'Suspension of Trading', 'Public/announcements/zh/a070809.pdf', 'Public/announcements/en/a070809.pdf', 1186588800, '2007-08-09 00:00:00', 1, 0, 1, '', 0),
(99, '澄清公告', 'Clarification Announcement', 'Public/announcements/zh/a070508.pdf', 'Public/announcements/en/a070508.pdf', 1178553600, '2007-05-08 00:00:00', 1, 0, 1, '', 0),
(100, '業績公佈', 'Announcement', 'Public/announcements/zh/a070424.pdf', 'Public/announcements/en/a070424.pdf', 1177344000, '2007-04-24 00:00:00', 1, 0, 1, '', 0),
(101, '配售現有股份及補足認購新股份及恢復股份買賣', 'Placing of Existing Shares and Top-Up Subscription for New Shares and Resumption of Trading', 'Public/announcements/zh/a070215.pdf', 'Public/announcements/en/a070215.pdf', 1171468800, '2007-02-15 00:00:00', 1, 0, 1, '', 0),
(102, '二零零六年中期業績公佈', 'Interim Result Announcement 2006', 'Public/announcements/zh/a060914.pdf', 'Public/announcements/en/a060914.pdf', 1158163200, '2006-09-14 00:00:00', 1, 0, 1, '', 0),
(103, '建議修訂本公司組織章程細則及股東週年大會通告', 'Proposed Amendments to the Articles of Association of the Company and the Notice of Annual General Meeting', 'Public/announcements/zh/a060425.pdf', 'Public/announcements/en/a060425.pdf', 1145894400, '2006-04-25 00:00:00', 1, 0, 1, '', 0),
(104, '業績公佈', 'Announcement', 'Public/announcements/zh/a060421.pdf', 'Public/announcements/en/a060421.pdf', 1145548800, '2006-04-21 00:00:00', 1, 0, 1, '', 0),
(105, '二零零五年中期業績公佈', 'Interim Result Announcement 2005', 'Public/announcements/zh/a050914.pdf', 'Public/announcements/en/a050914.pdf', 1126627200, '2005-09-14 00:00:00', 1, 0, 1, '', 0),
(106, '股東周年大會通告', 'Notice of Annual General Meeting', 'Public/announcements/zh/a050421.pdf', 'Public/announcements/en/a050421.pdf', 1114012800, '2005-04-21 00:00:00', 1, 0, 1, '', 0),
(107, '業績分佈', 'Announcement', 'Public/announcements/zh/a050412.pdf', 'Public/announcements/en/a050412.pdf', 1113235200, '2005-04-12 00:00:00', 1, 0, 1, '', 0),
(108, '須予披露交易福建省福清藥業有限公司（本公司間接全資附屬公司）收購39種醫藥產品之配方、藥品批准文號及日後開發權利', 'Discloseable Transaction - Acquisition of the Formulae, Medical Approval Number and the Right of Future Development of Thirty-Nine Pharmaceutical Products by Fujian Fuqing Pharmaceutical Co., Ltd. (An Indirect Wholly-Owned Subsidiary of the Company)', 'Public/announcements/zh/a050314.pdf', 'Public/announcements/en/a050314.pdf', 1110729600, '2005-03-14 00:00:00', 1, 0, 1, '', 0),
(109, '委任獨立非執行董事', 'Appointment of Independent Non-Executive Director', 'Public/announcements/zh/a040914a.pdf', 'Public/announcements/en/a040914a.pdf', 1095091200, '2004-09-14 00:00:00', 1, 0, 1, '', 0),
(110, '二零零四年中期業績公佈', 'Interim Result Announcement 2004', 'Public/announcements/zh/a040914.pdf', 'Public/announcements/en/a040914.pdf', 1095091200, '2004-09-14 00:00:00', 1, 0, 1, '', 0),
(111, '股東週年大會通告', 'Notice of Annual General Meeting', 'Public/announcements/zh/a040426.pdf', 'Public/announcements/en/a040426.pdf', 1082908800, '2004-04-26 00:00:00', 1, 0, 1, '', 0),
(112, '業績公佈', 'Announcement', 'Public/announcements/zh/a040420.pdf', 'Public/announcements/en/a040420.pdf', 1082390400, '2004-04-20 00:00:00', 1, 0, 1, '', 0),
(113, '更改主要營業地點', 'Change of Principal Place of Business', 'Public/announcements/zh/a031219.pdf', 'Public/announcements/en/a031219.pdf', 1071763200, '2003-12-19 00:00:00', 1, 0, 1, '', 0),
(114, '穩定價格行動', 'Stabilizing Action', 'Public/announcements/zh/a031211.pdf', 'Public/announcements/en/a031211.pdf', 1071072000, '2003-12-11 00:00:00', 1, 0, 1, '', 0),
(115, '以配售及公開發售方式發售新股及銷售股份', 'New Issue and Offer for Sale by Way of Placing and Public Offer', 'Public/announcements/zh/a031119.pdf', 'Public/announcements/en/a031119.pdf', 1069171200, '2003-11-19 00:00:00', 1, 0, 1, '', 0),
(116, '以配售及公開發售方式發售新股及銷售股份', 'New Issue and Offer for Sale by Way of Placing and Public Offer', 'Public/announcements/zh/a031111.pdf', 'Public/announcements/en/a031111.pdf', 1068480000, '2003-11-11 00:00:00', 1, 0, 1, '', 0),
(117, '二零一零年七月二十三日舉行之股東特別大會投票結果', ' 	POLL RESULTS OF THE EXTRAORDINARY GENERAL MEETINGS HELD ON 23 JULY 2010', 'Public/announcements/zh/a100723.pdf', 'Public/announcements/en/a100723.pdf', 1279900764, '2010-07-23 23:59:24', 1, 0, 1, '', 0),
(119, '董事會會議通告', 'NOTICE OF BOARD MEETING', 'Public/announcements/zh/a100818.pdf', 'Public/announcements/en/a100818.pdf', 1282062560, '2010-08-18 00:29:20', 1, 0, 1, '', 0),
(120, '澄清公告', 'CLARIFICATION ANNOUNCEMENT', 'Public/announcements/zh/a100818a.pdf', 'Public/announcements/en/a100818a.pdf', 1282062675, '2010-08-18 00:31:15', 1, 0, 1, '', 0),
(121, '更改公司名稱及股份簡稱及股票安排', 'CHANGE OF COMPANY NAME AND STOCK SHORT NAME AND ARRANGEMENT FOR SHARE CERTIFICATES', 'Public/announcements/zh/a100825.pdf', 'Public/announcements/en/a100825.pdf', 1282667547, '2010-08-25 00:32:27', 1, 0, 1, '', 0),
(122, '截止二零一零年六月三十日止六個月中期業績分佈', 'INTERIM RESULTS ANNOUNCEMENT FOR THE SIX MONTHS ENDED 30 JUNE 2010', 'Public/announcements/zh/a100830.pdf', 'Public/announcements/en/a100830.pdf', 1283168543, '2010-08-30 19:42:23', 1, 0, 1, '', 0),
(126, '更改公司網站', 'CHANGE OF COMPANY WEBSITE', 'Public/announcements/zh/a100908.pdf', 'Public/announcements/en/a100908.pdf', 1283875200, '2010-09-08 00:00:00', 1, 0, 1, '', 0),
(127, '根據一般授權配售非上市認股權證', 'PLACING OF UNLISTED WARRANTS UNDER GENERAL MANDATE', 'Public/announcements/zh/a101015.pdf', 'Public/announcements/en/a101015.pdf', 1287072000, '2010-10-15 00:00:00', 1, 0, 1, '', 0),
(128, '完成配售非上市認股權證', 'COMPLETION OF PLACING OF NON-LISTED WARRANTS', 'Public/announcements/zh/a101028.pdf', 'Public/announcements/en/a101028.pdf', 1288195200, '2010-10-28 00:00:00', 1, 0, 1, '', 0),
(129, '更換核數師', 'CHANGE OF AUDITOR', 'Public/announcements/zh/a101207.pdf', 'Public/announcements/en/a101207.pdf', 1291651200, '2010-12-07 00:00:00', 1, 0, 1, '', 0),
(130, '更換核數師', 'CHANGE OF AUDITOR', 'Public/announcements/zh/a101215.pdf', 'Public/announcements/en/a101215.pdf', 1292342400, '2010-12-15 00:00:00', 1, 0, 1, '', 0),
(131, '須予披露及關連交易收購物業', 'DISCLOSEABLE AND CONNECTED TRANSACTION IN RELATION TO ACQUISITION OF PROPERTY', 'Public/announcements/zh/a101228.pdf', 'Public/announcements/en/a101228.pdf', 1293465600, '2010-12-28 00:00:00', 1, 0, 1, '', 0),
(132, '配售現有股份 認購新股份', 'PLACING OF EXISTING SHARES SUBSCRIPTION FOR NEW SHARES', 'Public/announcements/zh/a110106.pdf', 'Public/announcements/en/a110106.pdf', 1294243200, '2011-01-06 00:00:00', 1, 0, 1, '', 0),
(133, '延遲寄發通函', 'DELAY IN DISPATCH OF CIRCULAR', 'Public/announcements/zh/a110117.pdf', 'Public/announcements/en/a110117.pdf', 1295193600, '2011-01-17 00:00:00', 1, 0, 1, '', 0),
(134, '完成配售現有股份 認購新股份', 'COMPLETION OF PLACING OF EXISTING SHARES   SUBSCRIPTION FOR NEW SHARES', 'Public/announcements/zh/a1101201.pdf', 'Public/announcements/en/a1101201.pdf', 1295452800, '2011-01-20 00:00:00', 1, 0, 1, '', 0),
(135, '翌日披露報表 (股份發行人 ── 已發行 股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a110121.pdf', 'Public/announcements/en/a110121.pdf', 1295539200, '2011-01-21 00:00:00', 1, 0, 1, '', 0),
(136, '翌日披露報表 (股份發行人 ── 已發行 股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a110128.pdf', 'Public/announcements/en/a110128.pdf', 1296144000, '2011-01-28 00:00:00', 1, 0, 1, '', 0),
(137, '股东特别大会通告', 'NOTICE OF EXTRAORDINARY GENERAL MEETING', 'Public/announcements/zh/a110131.pdf', 'Public/announcements/en/a110131.pdf', 1296403200, '2011-01-31 00:00:00', 1, 0, 1, '', 0),
(138, '须予披露及关连交易收购物业', 'DISCLOSEABLE AND CONNECTED TRANSACTION IN RELATION TO ACQUISITION OF PROPERTY', 'Public/announcements/zh/a110131a.pdf', 'Public/announcements/en/a110131a.pdf', 1296403200, '2011-01-31 00:00:00', 1, 0, 1, '', 0),
(139, '于二零一一年二月二十一日举行之股东特别大会适用之代表委任表格', 'Form of proxy for use at the Extraordinary General Meeting to be held on 21 February 2011', 'Public/announcements/zh/a110131aa.pdf', 'Public/announcements/en/a110131aa.pdf', 1296403200, '2011-01-31 00:00:00', 1, 0, 1, '', 0),
(140, '公司秘書及授權代表變動', 'CHANGE OF COMPANY SECRETARY AND AUTHORISED REPRESENTATIVE', 'Public/announcements/zh/a110131aaa.pdf', 'Public/announcements/en/a110131aaa.pdf', 1296403200, '2011-01-31 00:00:00', 1, 0, 1, '', 0),
(141, '截至二零一一年一月三十一日股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 January 2011', 'Public/announcements/zh/a110201.pdf', 'Public/announcements/en/a110201.pdf', 1296489600, '2011-02-01 00:00:00', 1, 0, 1, '', 0),
(142, '二零一一年二月二十一日举行之股东特别大会投票结果', 'POLL RESULTS OF THE EXTRAORDINARY GENERAL MEETING HELD ON 21 FEBRUARY 2011', 'Public/announcements/zh/a110221.pdf', 'Public/announcements/en/a110221.pdf', 1298217600, '2011-02-21 00:00:00', 1, 0, 1, '', 0),
(143, '董事會會議通告', 'Notice of Board Meeting', 'Public/announcements/zh/a110308.pdf', 'Public/announcements/en/a110308.pdf', 1299513600, '2011-03-08 00:00:00', 1, 0, 1, '', 0),
(144, '變更董事會會議日期', 'Change of Date of Board Meeting', 'Public/announcements/zh/a110317.pdf', 'Public/announcements/en/a110317.pdf', 1300291200, '2011-03-17 00:00:00', 1, 0, 1, '', 0),
(146, '截至二零一零年十二月三十一日止年度全年業績公佈', 'Annual Results Announcement For the Year Ended 31 December 2010', 'Public/announcements/zh/a110330.pdf', 'Public/announcements/en/a110330.pdf', 1301414400, '2011-03-30 00:00:00', 1, 0, 1, '', 0),
(147, '澄清公告', 'Clarification Announcement', 'Public/announcements/zh/a1103301.pdf', 'Public/announcements/en/a1103301.pdf', 1301414400, '2011-03-30 00:00:00', 1, 0, 1, '', 0),
(148, '授出购股权', 'GRANT OF SHARE OPTIONS', 'Public/announcements/zh/a1103302.pdf', 'Public/announcements/en/a1103302.pdf', 1301414400, '2011-03-30 00:00:00', 1, 0, 1, '', 0),
(149, '有關授出購股權之進一步資料', 'FURTHER INFORMATION RELATING TO THE GRANT OF SHARE OPTIONS', 'Public/announcements/zh/a110401.pdf', 'Public/announcements/en/a110401.pdf', 1301587200, '2011-04-01 00:00:00', 1, 0, 1, '', 0),
(150, '更改暫停辦理股份過戶登記期間及股東週年大會之日期', 'CHANGE OF BOOK CLOSURE PERIOD AND DATE OF ANNUAL GENERAL MEETING', 'Public/announcements/zh/a110419.pdf', 'Public/announcements/en/a110419.pdf', 1303142400, '2011-04-19 00:00:00', 1, 0, 1, '', 0),
(151, '有关授出购股权之进一步资料', 'FURTHER INFORMATION RELATING TO THE GRANT OF SHARE OPTIONS', 'Public/announcements/zh/a110420.pdf', 'Public/announcements/en/a110420.pdf', 1303228800, '2011-04-20 00:00:00', 1, 0, 1, '', 0),
(152, '股東週年大會通告', 'NOTICE OF ANNUAL GENERAL MEETING', 'Public/announcements/zh/a110428.pdf', 'Public/announcements/en/a110428.pdf', 1303986076, '2011-04-28 18:21:16', 1, 0, 1, '', 0),
(154, '有關授出購股權之進一步資料', 'FURTHER INFORMATION RELATING TO THE GRANT OF SHARE OPTIONS', 'Public/announcements/zh/a110506.pdf', 'Public/announcements/en/a110506.pdf', 1304671907, '2011-05-06 16:51:47', 1, 0, 1, '', 0),
(155, '更改香港主要營業地點', 'CHANGE OF PRINCIPAL PLACE OF BUSINESS IN HONG KONG', 'Public/announcements/zh/a1105061.pdf', 'Public/announcements/en/a1105061.pdf', 1304672069, '2011-05-06 16:54:29', 1, 0, 1, '', 0),
(157, '於二零一一年六月三日舉行之股東週年大會投票結果，董事之變動及委任行政總裁', 'Poll Results of Annual General Meeting held on 3 June 2011, Change of Directors and Appointment of Chief Executive Officer', 'Public/announcements/zh/a110603.pdf', 'Public/announcements/en/a110603en.pdf', 1307114976, '2011-06-03 23:29:36', 1, 0, 1, '', 0),
(158, '正面盈利预告', 'Positive Profit Alert', 'Public/announcements/zh/a110607.pdf', 'Public/announcements/en/a110607.pdf', 1307454016, '2011-06-07 21:40:16', 1, 0, 1, '', 0),
(160, '價格不尋常波動', 'Unusual Price Movement', 'Public/announcements/zh/a110615.pdf', 'Public/announcements/en/a110615.pdf', 1308118985, '2011-06-15 14:23:05', 1, 0, 1, '', 0),
(161, '公司秘書及授權代表變動', 'CHANGE OF COMPANY SECRETARY AND AUTHORISED REPRESENTATIVE', 'Public/announcements/zh/a2011071201.pdf', 'Public/announcements/en/a2011071201.pdf', 1310475836, '2011-07-12 21:03:56', 1, 0, 1, '', 0),
(162, '自願性公告 購回股份', 'VOLUNTARY ANNOUNCEMENT SHARE REPURCHASE', 'Public/announcements/zh/a2011071301.pdf', 'Public/announcements/en/a2011071301.pdf', 1310481468, '2011-07-12 22:37:48', 1, 0, 1, '', 0),
(163, '自願性公告 購回股份', 'VOLUNTARY ANNOUNCEMENT SHARE REPURCHASE', 'Public/announcements/zh/a2011072201.pdf', 'Public/announcements/en/a2011072201.pdf', 1311335515, '2011-07-22 19:51:55', 1, 0, 1, '', 0),
(164, '董事會會議日期', 'DATE OF BOARD MEETING', 'Public/announcements/zh/a2011081201.pdf', 'Public/announcements/en/a2011081201.pdf', 1313110494, '2011-08-12 08:54:54', 1, 0, 1, '', 0),
(165, '截至二零一一年六月三十日止六個月中期業績公佈', 'INTERIM RESULTS ANNOUNCEMENT FOR THE SIX MONTHS ENDED 30 JUNE 2011', 'Public/announcements/zh/a2011082401.pdf', 'Public/announcements/en/a2011082401.pdf', 1314182624, '2011-08-24 18:43:44', 1, 0, 1, '', 0),
(166, '自願性公告 有關董事增持本公司股份的公告', 'VOLUNTARY ANNOUNCEMENT FURTHER INCREASE IN SHAREHOLDING BY A DIRECTOR', 'Public/announcements/zh/a110914.pdf', 'Public/announcements/en/a110914.pdf', 1315962618, '2011-09-14 09:10:18', 1, 0, 1, '', 0),
(167, '自願性公告 購回股份', 'VOLUNTARY ANNOUNCEMENT SHARE REPURCHASE ', 'Public/announcements/zh/11091602.pdf', 'Public/announcements/en/11091602.pdf', 1316187632, '2011-09-16 23:40:32', 1, 0, 1, '', 0),
(168, '自願性公告 購回股份', 'VOLUNTARY ANNOUNCEMENT SHARE REPURCHASE ', 'Public/announcements/zh/a11091901.pdf', 'Public/announcements/en/a11091901.pdf', 1316436145, '2011-09-19 20:42:25', 1, 0, 1, '', 0),
(169, '自願性公告 購回股份', 'VOLUNTARY ANNOUNCEMENT SHARE REPURCHASE ', 'Public/announcements/zh/a11092101.pdf', 'Public/announcements/en/a11092101.pdf', 1316478321, '2011-09-20 08:25:21', 1, 0, 1, '', 0),
(170, '自願性公告 購回股份', 'VOLUNTARY ANNOUNCEMENT SHARE REPURCHASE', 'Public/announcements/zh/a11092103.pdf', 'Public/announcements/en/a11092103.pdf', 1316591003, '2011-09-21 15:43:23', 1, 0, 1, '', 0),
(171, '自願性公告 購回股份', 'VOLUNTARY ANNOUNCEMENT SHARE REPURCHASE ', 'Public/announcements/zh/a11092301.pdf', 'Public/announcements/en/a11092301.pdf', 1316745057, '2011-09-23 10:30:57', 1, 0, 1, '', 0),
(172, '自願性公告 購回股份', 'VOLUNTARY ANNOUNCEMENT SHARE REPURCHASE ', 'Public/announcements/zh/a11092602.pdf', 'Public/announcements/en/a11092602.pdf', 1316997245, '2011-09-26 08:34:05', 1, 0, 1, '', 0),
(173, '自願性公告 購回股份', 'VOLUNTARY ANNOUNCEMENT SHARE REPURCHASE', 'Public/announcements/zh/a2011093001.pdf', 'Public/announcements/en/a2011093001.pdf', 1317388132, '2011-09-30 21:08:52', 1, 0, 1, '', 0),
(174, '自願性公告 購回股份', 'VOLUNTARY ANNOUNCEMENT SHARE REPURCHASE ', 'Public/announcements/zh/a20111003.pdf', 'Public/announcements/en/a20111003.pdf', 1317647552, '2011-10-03 21:12:32', 1, 0, 1, '', 0),
(175, '自願性公告 購回股份', 'VOLUNTARY ANNOUNCEMENT SHARE REPURCHASE ', 'Public/announcements/zh/a2011100401.pdf', 'Public/announcements/en/a2011100401.pdf', 1317734645, '2011-10-04 21:24:05', 1, 0, 1, '', 0),
(176, '須予披露交易', 'DISCLOSEABLE TRANSACTION', 'Public/announcements/zh/a11111501.pdf', 'Public/announcements/en/a11111501.pdf', 1321319971, '2011-11-15 09:19:31', 1, 0, 1, '', 0),
(178, '更換核數師', 'CHANGE OF AUDITOR', 'Public/announcements/zh/a11120901.pdf', 'Public/announcements/en/a11120901.pdf', 1323434787, '2011-12-09 20:46:27', 1, 0, 1, '', 0),
(179, '主席、授權代表、審核委員會成員及薪酬委員會成員及董事變動', 'CHANGE OF CHAIRMAN,AUTHORIZED REPRESENTATIVE,A MEMBER OF THE AUDIT COMMITTEE AND A MEMBER OF THE REMUNERATION COMMITTEE AND DIRECTORS', 'Public/announcements/zh/a2012010901.pdf', 'Public/announcements/en/a2012010901.pdf', 1326122786, '2012-01-09 23:26:26', 1, 0, 1, '', 0),
(180, '有關收購煜宏投資有限公司之補充協議及完成收購事項', 'SUPPLEMENTAL AGREEMENT RELATING TO THE ACQUISITION OF YU HONG INVESTMENTS LIMITED AND COMPLETION OF THE ACQUISITION', 'Public/announcements/zh/a2012011001.pdf', 'Public/announcements/en/a2012011001.pdf', 1326209539, '2012-01-10 23:32:19', 1, 0, 1, '', 0),
(181, '正面盈利預告', 'POSITIVE PROFIT ALERT', 'Public/announcements/zh/a20120202.pdf', 'Public/announcements/en/a20120202.pdf', 1328150290, '2012-02-02 10:38:10', 1, 0, 1, '', 0),
(182, '股東特別大會通告', 'NOTICE OF EXTRAORDINARY GENERAL MEETING', 'Public/announcements/zh/ax2012022001.pdf', 'Public/announcements/en/ax2012022001.pdf', 1329704944, '2012-02-20 10:29:04', 1, 0, 1, '', 0),
(184, '董事會會議日期', 'DATE OF BOARD MEETING', 'Public/announcements/zh/a2012030501.pdf', 'Public/announcements/en/a2012030501.pdf', 1330954156, '2012-03-05 21:29:16', 1, 0, 1, '', 0),
(185, '於二零一二年三月七日舉行之股東特別大會投票結果', 'POLL RESULTS OF THE EXTRAORDINARY GENERAL MEETING HELD ON 7 MARCH 2012', 'Public/announcements/zh/a2012030701.pdf', 'Public/announcements/en/a2012030701.pdf', 1331128208, '2012-03-07 21:50:08', 1, 0, 1, '', 0),
(187, '截至二零一一年十二月三十一日止年度全年業績公布', 'ANNUAL RESULTS ANNOUNCEMENT FOR THE YEAR ENDED 31 DECEMBER 2011', 'Public/announcements/zh/a20120315.pdf', 'Public/announcements/en/a20120315.pdf', 1331740861, '2012-03-15 00:01:01', 1, 0, 1, '', 0),
(188, '涉及發行新股份之股份交易', 'SHARE TRANSACTION INVOLVING ISSUE OF NEW SHARES', 'Public/announcements/zh/a12031801.pdf', 'Public/announcements/en/a12031801.pdf', 1332073637, '2012-03-18 20:27:17', 1, 0, 1, '', 0),
(189, '暫停辦理股發過戶登記 ', 'CLOSURE OF REGISTER OF MEMBERS', 'Public/announcements/zh/a2012032001.pdf', 'Public/announcements/en/a2012032001.pdf', 1332258473, '2012-03-20 23:47:53', 1, 0, 1, '', 0),
(190, '成立提名委員會', 'ESTABLISHMENT OF NOMINATION COMMITTEE', 'Public/announcements/zh/A2012032801.pdf', 'Public/announcements/en/A2012032801.pdf', 1332934087, '2012-03-28 19:28:07', 1, 0, 1, '', 0),
(191, '股東週年大會通告', 'NOTICE OF ANNUAL GENERAL MEETING', 'Public/announcements/zh/a12032901.pdf', 'Public/announcements/en/a12032901.pdf', 1332981371, '2012-03-29 08:36:11', 1, 0, 1, '', 0),
(192, '授出購股權', 'GRANT OF SHARE OPTIONS', 'Public/announcements/zh/2012041601.pdf', 'Public/announcements/en/2012041601.pdf', 1334581846, '2012-04-16 21:10:46', 1, 0, 1, '', 0),
(193, '獨立非執行董事之辭任', 'RESIGNATION OF AN INDEPENDENT NON-EXECUTIVE DIRECTOR', 'Public/announcements/zh/2012042301.pdf', 'Public/announcements/en/2012042301.pdf', 1335196707, '2012-04-23 23:58:27', 1, 0, 1, '', 0),
(194, '完成涉及發行新股份之股份交易', 'COMPLETION OF SHARE TRANSACTION INVOLVING ISSUE OF NEW SHARES', 'Public/announcements/zh/2012050403.pdf', 'Public/announcements/en/2012050403.pdf', 1336137770, '2012-05-04 21:22:50', 1, 0, 1, '', 0),
(195, '於二零一二年五月十八日舉行之股東週年大會投票結果', 'POLL RESULTS OF ANNUAL GENERAL MEETING HELD ON 18 MAY 2012', 'Public/announcements/zh/2012051801.pdf', 'Public/announcements/en/2012051801.pdf', 1337355670, '2012-05-18 23:41:10', 1, 0, 1, '', 0),
(196, '暫停買賣', 'SUSPENSION OF TRADING', 'Public/announcements/zh/a20120524.pdf', 'Public/announcements/en/a20120524.pdf', 1337831239, '2012-05-24 11:47:19', 1, 0, 1, '', 0),
(197, '自願公告恢復買賣', 'VOLUNTARY ANNOUNCEMENT RESUMPTION OF TRADING', 'Public/announcements/zh/2012052401.pdf', 'Public/announcements/en/2012052401.pdf', 1337872065, '2012-05-24 23:07:45', 1, 0, 1, '', 0),
(198, '委任執行董事', 'APPOINTMENT OF AN EXECUTIVE DIRECTOR', 'Public/announcements/zh/a20120615.pdf', 'Public/announcements/en/a20120615.pdf', 1339750916, '2012-06-15 17:01:56', 1, 0, 1, '', 0),
(199, '委任副主席', 'APPOINTMENT OF VICE CHAIRMAN', 'Public/announcements/zh/2012070601.pdf', 'Public/announcements/en/2012070601.pdf', 1341567523, '2012-07-06 17:38:43', 1, 0, 1, '', 0),
(200, '涉及發行新股份之須予批露交易', 'DISCLOSEABLE TRANSACTION INVOLVING ISSUE OF NEW SHARES', 'Public/announcements/zh/06072012.pdf', 'Public/announcements/en/06072012.pdf', 1341548541, '2012-07-06 12:22:21', 1, 0, 1, '', 0),
(201, '正面盈利預告', 'POSITIVE PROFIT ALERT', 'Public/announcements/zh/07082012.pdf', 'Public/announcements/en/07082012.pdf', 1344331968, '2012-08-07 17:32:48', 1, 0, 1, '', 0),
(202, '董事會會議日期', 'DATE OF BOARD MEETING ', 'Public/announcements/zh/20120813.pdf', 'Public/announcements/en/20120813.pdf', 1344838914, '2012-08-13 14:21:54', 1, 0, 1, '', 0),
(203, '有關收購煜宏投資有限公司之相關資料', 'UPDATE ON THE STATUS OF THE PROFIT GUARANTEES RELATING TO THE ACQUISITION OF YU HONG INVESTMENTS LIMITED AND COMPLETION OF DISCLOSEABLE TRANSACTION INVOLVING ISSUE', 'Public/announcements/zh/17082012.pdf', 'Public/announcements/en/17082012.pdf', 1345173615, '2012-08-17 11:20:15', 1, 0, 1, '', 0),
(204, '截至二零一二年六月三十日止六個月中期業績公布', 'INTERIM RESULTS ANNOUNCEMENT FOR THE SIX MONTHS ENDED 30 JUNE 2012', 'Public/announcements/zh/23082012.pdf', 'Public/announcements/en/23082012.pdf', 1345734397, '2012-08-23 23:06:37', 1, 0, 1, '', 0),
(205, '委任非執行董事', 'APPOINTMENT OF NON-EXECUTIVE DIRECTORS', 'Public/announcements/zh/17092012.pdf', 'Public/announcements/en/17092012.pdf', 1347851207, '2012-09-17 11:06:47', 1, 0, 1, '', 0),
(206, '關於開曼群島之股份過戶登記總處之變更', 'CHANGE OF PRINCIPAL SHARE REGISTRAR AND TRANSFER AGENT IN THE CAYMAN ISLANDS', 'Public/announcements/zh/28122012.pdf', 'Public/announcements/en/28122012.pdf', 1356666514, '2012-12-28 11:48:34', 1, 0, 1, '', 0),
(209, '正面盈利預告', 'POSITIVE PROFIT ALERT', 'Public/announcements/zh/ax20130218001.pdf', 'Public/announcements/en/ax20130218001.pdf', 1361192177, '2013-02-18 20:56:17', 1, 0, 1, '', 0),
(212, '截至二零一二年十二月三十一日止年度全年業績公佈', 'ANNUAL RESULTS ANNOUNCEMENT FOR THE YEAR ENDED 31 DECEMBER 2012', 'Public/announcements/zh/a130318.pdf', 'Public/announcements/en/a130318.pdf', 1363536000, '2013-03-18 00:00:00', 1, 0, 1, '', 0),
(211, '董事會會議日期', 'Date of Board Meeting', 'Public/announcements/zh/a130307.pdf', 'Public/announcements/en/a130307.pdf', 1362623206, '2013-03-07 10:26:46', 1, 0, 1, '', 0),
(222, '採納股份獎勵計劃', 'ADOPTION OF SHARE AWARD SCHEME', 'Public/announcements/zh/a130409.pdf', 'Public/announcements/en/a130409.pdf', 1365436800, '2013-04-09 00:00:00', 1, 0, 1, '', 0),
(223, '根據股份獎勵計畫購買股份', 'SHARE PURCHASE PURSUANT TO THE SHARE AWARD SCHEME ', 'Public/announcements/zh/a130410.pdf', 'Public/announcements/en/a130410.pdf', 1365523200, '2013-04-10 00:00:00', 1, 0, 1, '', 0),
(224, '根據股份獎勵計畫購買股份', 'SHARE PURCHASE PURSUANT TO SHARE AWARD SCHEME', 'Public/announcements/zh/a130411.pdf', 'Public/announcements/en/a130411.pdf', 1365609600, '2013-04-11 00:00:00', 1, 0, 1, '', 0),
(225, '根據股份獎勵計畫購買股份', 'SHARE PURCHASE PURSUANT TO THE SHARE AWARD SCHEME ', 'Public/announcements/zh/a130415.pdf', 'Public/announcements/en/a130415.pdf', 1365955200, '2013-04-15 00:00:00', 1, 0, 1, '', 0),
(226, '根據股份獎勵計畫購買股份', 'SHARE PURCHASE PURSUANT TO THE SHARE AWARD SCHEME', 'Public/announcements/zh/a130416.pdf', 'Public/announcements/en/a130416.pdf', 1366041600, '2013-04-16 00:00:00', 1, 0, 1, '', 0),
(227, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回) ', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks) ', 'Public/announcements/zh/a130417.pdf', 'Public/announcements/en/a130417.pdf', 1366128000, '2013-04-17 00:00:00', 1, 0, 1, '', 0),
(228, '自願性公告購回股份', 'VOLUNTARY ANNOUNCEMENT SHARE REPURCHASE', 'Public/announcements/zh/a130417(1).pdf', 'Public/announcements/en/a130417(1).pdf', 1366128000, '2013-04-17 00:00:00', 1, 0, 1, '', 0),
(229, '股東週年大會通告 ', 'NOTICE OF ANNUAL GENERAL MEETING', 'Public/announcements/zh/a130419.pdf', 'Public/announcements/en/a130419.pdf', 1366300800, '2013-04-19 00:00:00', 1, 0, 1, '', 0),
(230, '有關股份獎勵計劃之進一步資料', 'FURTHER INFORMATION IN RELATION TO THE SHARE AWARD SCHEME', 'Public/announcements/zh/a130426.pdf', 'Public/announcements/en/a130426.pdf', 1366905600, '2013-04-26 00:00:00', 1, 0, 1, '', 0),
(231, '於二零一三年五月三十一日舉行之股東週年大會投票結果', 'POLL RESULTS OF ANNUAL GENERAL MEETING HELD ON 31 MAY 2013', 'Public/announcements/zh/a130531.pdf', 'Public/announcements/en/a130531.pdf', 1369929600, '2013-05-31 00:00:00', 1, 0, 1, '', 0),
(232, '獨立非執行董事、審核委員會、 提名委員會、薪酬委員會及 企業管治委員會成員之變動', 'CHANGE OF INDEPENDENT NON-EXECUTIVE DIRECTOR, MEMBERS OF THE AUDIT COMMITTEE, THE NOMINATION COMMITTEE, THE REMUNERATION COMMITTEE AND THE CORPORATE GOVERNANCE COMMITTEE', 'Public/announcements/zh/a130605.pdf', 'Public/announcements/en/a130605.pdf', 1370361600, '2013-06-05 00:00:00', 1, 0, 1, '', 0),
(233, '董事會會議日期', 'Date of Board Meeting', 'Public/announcements/zh/a130819.pdf', 'Public/announcements/en/a130819.pdf', 1376841600, '2013-08-19 00:00:00', 1, 0, 1, '', 0),
(234, '截至二零一三年六月三十日止六個月中期業績公佈', 'INTERIM RESULTS ANNOUNCEMENT FOR THE SIX MONTHS ENDED 30 JUNE 2013', 'Public/announcements/zh/a130831.pdf', 'Public/announcements/en/a130831.pdf', 1377878400, '2013-08-31 00:00:00', 1, 0, 1, '', 0),
(235, '自願性公告 簽訂[平安城市]合同', 'VOLUNTARY ANNOUNCEMENT SIGNING OF "SAFE CITY" CONTRACTS', 'Public/announcements/zh/a131115.pdf', 'Public/announcements/en/a131115.pdf', 1384444800, '2013-11-15 00:00:00', 1, 0, 1, '', 0),
(236, '有關可能收購事項之諒解備忘錄', 'MEMORANDUM OF UNDERSTANDING IN RESPECT OF A POSSIBLE ACQUISITION', 'Public/announcements/zh/a131121.pdf', 'Public/announcements/en/a131121.pdf', 1384963200, '2013-11-21 00:00:00', 1, 0, 1, '', 0),
(237, '自願性公告 有關主要股東增持本公司股份的公告', 'VOLUNTARY ANNOUNCEMENT FURTHER INCREASE IN SHAREHOLDING BY A SUBSTANTIAL SHAREHOLDER', 'Public/announcements/zh/a131123.pdf', 'Public/announcements/en/a131123.pdf', 1385049600, '2013-11-22 00:00:00', 1, 0, 1, '', 0),
(238, '須予披露交易', 'DISCLOSEABLE TRANSACTION ', 'Public/announcements/zh/a140204.pdf', 'Public/announcements/en/a140204.pdf', 1391443200, '2014-02-04 00:00:00', 1, 0, 1, '', 0),
(239, '自願性公告 有關主要股東進一步增持本公司股份的公告', 'VOLUNTARY ANNOUNCEMENT FURTHER INCREASE IN SHAREHOLDING BY A SUBSTANTIAL SHAREHOLDER', 'Public/announcements/zh/a140209.pdf', 'Public/announcements/en/a140209.pdf', 1391875200, '2014-02-09 00:00:00', 1, 0, 1, '', 0),
(240, '自願性公告 有關主要股東進一步增持本公司股份的公告', 'VOLUNTARY ANNOUNCEMENT FURTHER INCREASE IN SHAREHOLDING BY A SUBSTANTIAL SHAREHOLDER', 'Public/announcements/zh/a140211.pdf', 'Public/announcements/en/a140211.pdf', 1391961600, '2014-02-10 00:00:00', 1, 0, 1, '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ax_awards_2`
--

DROP TABLE IF EXISTS `ax_awards_2`;
CREATE TABLE IF NOT EXISTS `ax_awards_2` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default ' ' COMMENT '中文名称',
  `title_en` varchar(100) NOT NULL default ' ' COMMENT '英文名称',
  `pic_url` varchar(200) NOT NULL default ' ' COMMENT '图片名称',
  `pic_url_thumb` varchar(200) NOT NULL default ' ' COMMENT '图片缩略图文件名',
  `create_time` int(11) default NULL COMMENT '添加时间',
  `type` tinyint(1) NOT NULL default '0' COMMENT '所属分类，1荣誉 2著作权 3专利 4资质 5其它成果',
  `cname` varchar(50) NOT NULL default ' ' COMMENT '所属公司（拼音）',
  `orders` smallint(5) NOT NULL default '1' COMMENT '排序，小的靠前',
  `isshow` tinyint(1) NOT NULL default '1' COMMENT '是否前台显示使用',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='资质荣誉表' AUTO_INCREMENT=208 ;

--
-- 导出表中的数据 `ax_awards_2`
--

INSERT INTO `ax_awards_2` (`id`, `title`, `title_en`, `pic_url`, `pic_url_thumb`, `create_time`, `type`, `cname`, `orders`, `isshow`) VALUES
(21, '安芯煤礦遠程實時監控GIS編輯系統軟件V1.0', 'Anxin Coal Mine Real-time Remote Surveillance GIS Editing System Software V1.0', 'awards/other/51f219f32df31.jpg', 'awards/other/awards_thumb_51f219f32df31.jpg', 1374768000, 5, 'anxin', 1, 1),
(19, '安芯礦山綜合監管系統軟件V1.0', 'Anxin Coaling Mine Comprehensive Surveillance System Software V1.0', 'awards/other/51f21998609b7.jpg', 'awards/other/awards_thumb_51f21998609b7.jpg', 1374768000, 5, 'anxin', 1, 1),
(20, '安芯煤礦安全實時遠程監控系統軟件V1.1', 'Anxin Coaling Mine Real-time Remote Surveillance System Software V1.1', 'awards/other/51f219c7a7b13.jpg', 'awards/other/awards_thumb_51f219c7a7b13.jpg', 1374768000, 5, 'anxin', 1, 1),
(18, '安芯礦山人員定位軟件V1.0', 'Anxin Coaling Mine Personnel Location Software V1.0', 'awards/other/51f21972d2025.jpg', 'awards/other/awards_thumb_51f21972d2025.jpg', 1374768000, 5, 'anxin', 1, 1),
(17, '安芯礦山平台管理系統軟件V1.0', 'Anxin Coaling Mine Platform Management System Software V1.0 ', 'awards/other/51f218bd36586.jpg', 'awards/other/awards_thumb_51f218bd36586.jpg', 1374768000, 5, 'anxin', 1, 1),
(16, '安芯大數據存儲系統軟件V1.00', 'Anxin Big Data Storage System Software V1.00', 'awards/other/51f217d2eeaef.jpg', 'awards/other/awards_thumb_51f217d2eeaef.jpg', 1374768000, 5, 'anxin', 1, 1),
(22, '安芯突發公共事件資源信息集成管理系統軟件V1.0', 'Anxin Public Cases Emergency Resource Information Integration Management System Software V1.0', 'awards/other/51f21a1974a2a.jpg', 'awards/other/awards_thumb_51f21a1974a2a.jpg', 1374768000, 5, 'anxin', 1, 1),
(23, '安芯無線傳感器網絡IP接入系統軟件V1.0', 'Anxin Wireless Sensor Network IP Access System Software V1.0', 'awards/other/51f21a3e03f94.jpg', 'awards/other/awards_thumb_51f21a3e03f94.jpg', 1374768000, 5, 'anxin', 1, 1),
(24, '安芯應急救援GIS地理信息系統軟件V1.0', 'Anxin Emergency Rescue GIS System Software V1.0', 'awards/other/51f21a6774951.jpg', 'awards/other/awards_thumb_51f21a6774951.jpg', 1374768000, 5, 'anxin', 1, 1),
(25, '安芯應急救援數據接入系統軟件V1.0', 'Anxin Emergency Rescue Data Access System Software V1.0', 'awards/other/51f21a88b5eb5.jpg', 'awards/other/awards_thumb_51f21a88b5eb5.jpg', 1374768000, 5, 'anxin', 1, 1),
(26, '安芯重大危險源報表分析系統軟件', 'Anxin Origin of Peril Report Form Analysis System Software ', 'awards/other/51f21aaebd936.jpg', 'awards/other/awards_thumb_51f21aaebd936.jpg', 1374768000, 5, 'anxin', 1, 1),
(27, '安芯重大危險源平台管理系統軟件V1.0', 'Anxin Origin of Peril Report Form Platform Management System Software V1.0', 'awards/other/51f21ad44baf6.jpg', 'awards/other/awards_thumb_51f21ad44baf6.jpg', 1374768000, 5, 'anxin', 1, 1),
(28, '科技成果登記證書', 'Technological Achievement Registration Certificate', 'awards/other/51f21b42f050d.jpg', 'awards/other/awards_thumb_51f21b42f050d.jpg', 1374768000, 5, 'anxin', 1, 1),
(29, '院士專家企業工作站', 'Authorized Academician and Expert Corporate Workstation', 'awards/honor/51f21b981c58f.jpg', 'awards/honor/awards_thumb_51f21b981c58f.jpg', 1374768000, 1, 'anxin', 1, 1),
(30, '2011重點軟件企業', '2011 Key Software Enterprise', 'awards/honor/51f21bb686828.jpg', 'awards/honor/awards_thumb_51f21bb686828.jpg', 1374768000, 1, 'anxin', 1, 1),
(31, '亞太地區最具科技創新力安防企業', 'The most Scientific and Innovative Security Corporation in Asian-Pacific Region', 'awards/honor/51f21bd73cf50.jpg', 'awards/honor/awards_thumb_51f21bd73cf50.jpg', 1374768000, 1, 'anxin', 1, 1),
(32, '2011年度深圳市自主創新百強中小企業', '2011 Shenzhen Independent Innovation Small and Medium-sized Enterprise Top 100', 'awards/honor/51f21c0914e35.jpg', 'awards/honor/awards_thumb_51f21c0914e35.jpg', 1374768000, 1, 'anxin', 1, 1),
(33, '2011優秀軟件企業', '2011 Outstanding Software Enterprise', 'awards/honor/51f21deced34f.jpg', 'awards/honor/awards_thumb_51f21deced34f.jpg', 1374768000, 1, 'anxin', 1, 1),
(34, '高新協會會員證', 'Shenzhen Hi-tech Industry Association Certificate of Membership', 'awards/honor/51f21e11c7f81.JPG', 'awards/honor/awards_thumb_51f21e11c7f81.JPG', 1374768000, 1, 'anxin', 1, 1),
(35, '物聯網軟件領軍企業', 'The Leading Internet-of-things Software Corporation ', 'awards/honor/51f21e3ad09b3.JPG', 'awards/honor/awards_thumb_51f21e3ad09b3.JPG', 1374768000, 1, 'anxin', 1, 1),
(36, '深圳市成長型中小工業企業500強', 'Shenzhen Growth Corporation Small and Medium-sized Industrial Corporation Top 500', 'awards/honor/51f21e67351d5.jpg', 'awards/honor/awards_thumb_51f21e67351d5.jpg', 1374768000, 1, 'anxin', 1, 1),
(37, '軟協理事單位', 'Shenzhen Software Association President-Member ', 'awards/honor/51f21e9629aaf.jpg', 'awards/honor/awards_thumb_51f21e9629aaf.jpg', 1374768000, 1, 'anxin', 1, 1),
(38, '2009年自主創新百強中小企業', '2009 Self-innovation Small and Medium-sized Enterprise Top 100 ', 'awards/honor/51f21ec3bac1c.JPG', 'awards/honor/awards_thumb_51f21ec3bac1c.JPG', 1374768000, 1, 'anxin', 1, 1),
(39, '南山領軍企業', 'Nanshan Leading Enterprise', 'awards/honor/51f21eeb6a56b.jpg', 'awards/honor/awards_thumb_51f21eeb6a56b.jpg', 1374768000, 1, 'anxin', 1, 1),
(40, '改革開放30周年自主創新示範單位', 'Self-innovation Demonstration Unit within 30 years’ Chinese Economic Reform', 'awards/honor/51f21f12ef3e2.jpg', 'awards/honor/awards_thumb_51f21f12ef3e2.jpg', 1374768000, 1, 'anxin', 1, 1),
(41, '工業500強企業', 'Industrial Enterprise Top 500', 'awards/honor/51f21f371d62e.jpg', 'awards/honor/awards_thumb_51f21f371d62e.jpg', 1374768000, 1, 'anxin', 1, 1),
(42, '南山區納稅百強', 'Nanshan Tax Payment Enterprise Top 100', 'awards/honor/51f21f9b973d0.jpg', 'awards/honor/awards_thumb_51f21f9b973d0.jpg', 1374768000, 1, 'anxin', 1, 1),
(43, '安芯車輛監管系統軟件', 'Anxin Vehicle Surveillance System Software', 'awards/copyright/51f22187e12b2.jpg', 'awards/copyright/awards_thumb_51f22187e12b2.jpg', 1374768000, 2, 'anxin', 1, 1),
(44, '安芯大數據存儲系統軟件', 'Anxin Big Data Storage System Software', 'awards/copyright/51f221c2eb94c.jpg', 'awards/copyright/awards_thumb_51f221c2eb94c.jpg', 1374768000, 2, 'anxin', 1, 1),
(45, '安芯基于集群計算的負載均衡系統軟件', 'Anxin Cluster-computing-based Load Balance System Software  ', 'awards/copyright/51f222081ddb0.jpg', 'awards/copyright/awards_thumb_51f222081ddb0.jpg', 1374768000, 2, 'anxin', 1, 1),
(46, '安芯煤礦安全實時遠程監控系統軟件', 'Anxin Coaling Mine Safety Real-time Remote Surveillance Software System V1.1', 'awards/copyright/51f222fe53f91.jpg', 'awards/copyright/awards_thumb_51f222fe53f91.jpg', 1374768000, 2, 'anxin', 1, 1),
(47, '安芯煤礦實時遠程GIS編輯系統軟件', 'Anxin Coaling Mine Real-time GIS Editing Software System', 'awards/copyright/51f223335bfc5.jpg', 'awards/copyright/awards_thumb_51f223335bfc5.jpg', 1374768000, 2, 'anxin', 1, 1),
(48, '安芯徘徊監測分析軟件', 'Anxin Loitering Surveillance Analysis Software V1.0', 'awards/copyright/51f22364cbd9e.jpg', 'awards/copyright/awards_thumb_51f22364cbd9e.jpg', 1374768000, 2, 'anxin', 1, 1),
(49, '安芯速度監測分析軟件', 'Anxin Speed Surveillance Analysis SoftwareV1.0', 'awards/copyright/51f223ccedb5f.jpg', 'awards/copyright/awards_thumb_51f223ccedb5f.jpg', 1374768000, 2, 'anxin', 1, 1),
(50, '安芯無線傳感器網絡IP接入系統軟件', 'Anxin Wireless Sensor Network IP Access System SoftwareV1.0', 'awards/copyright/51f2247b64a57.jpg', 'awards/copyright/awards_thumb_51f2247b64a57.jpg', 1374768000, 2, 'anxin', 1, 1),
(51, '安芯物體移動監測分析軟件', 'Anxin Object Movement Surveillance Analysis Software V1.0', 'awards/copyright/51f224ba5e638.jpg', 'awards/copyright/awards_thumb_51f224ba5e638.jpg', 1374768000, 2, 'anxin', 1, 1),
(52, '呼叫中心平台系統軟件', 'Call Center Platform Software System V1.0', 'awards/copyright/51f225a381202.jpg', 'awards/copyright/awards_thumb_51f225a381202.jpg', 1374768000, 2, 'anxin', 1, 1),
(53, '礦山平台管理系統軟件', 'Coaling Mine Platform Managment Software System V1.0', 'awards/copyright/51f225d44ddbf.jpg', 'awards/copyright/awards_thumb_51f225d44ddbf.jpg', 1374768000, 2, 'anxin', 1, 1),
(54, '礦山人員定位系統軟件', 'Coaling Mine Personnel Location Software System V1.0', 'awards/copyright/51f22648212d7.jpg', 'awards/copyright/awards_thumb_51f22648212d7.jpg', 1374768000, 2, 'anxin', 1, 1),
(55, '礦山綜合監管系統軟件', 'Coaling Mine Comprehensive Software System V1.0', 'awards/copyright/51f226966b898.jpg', 'awards/copyright/awards_thumb_51f226966b898.jpg', 1374768000, 2, 'anxin', 1, 1),
(56, '企業數據采集平台管理系統軟件', 'Corporation Data Aquisition Platform Management Software System V1.0', 'awards/copyright/51f226f3173d7.jpg', 'awards/copyright/awards_thumb_51f226f3173d7.jpg', 1374768000, 2, 'anxin', 1, 1),
(57, '人臉檢測考勤系統', 'Human Face Detection Attendance System V1.0', 'awards/copyright/51f2272502b31.jpg', 'awards/copyright/awards_thumb_51f2272502b31.jpg', 1374768000, 2, 'anxin', 1, 1),
(58, '視頻監控通訊服務平台軟件', 'Video Surveillance Telecommunication Services Platform Software V1.0', 'awards/copyright/51f2274eefd1b.jpg', 'awards/copyright/awards_thumb_51f2274eefd1b.jpg', 1374768000, 2, 'anxin', 1, 1),
(59, '突發公共事件應急資源信息集成管理系統軟件', 'Public Emergency Resource Information Integration Management System Software', 'awards/copyright/51f2277ead288.jpg', 'awards/copyright/awards_thumb_51f2277ead288.jpg', 1374768000, 2, 'anxin', 1, 1),
(60, '系統管理平台系統軟件', 'System Management Platform Software SystemV1.0', 'awards/copyright/51f227b581265.jpg', 'awards/copyright/awards_thumb_51f227b581265.jpg', 1374768000, 2, 'anxin', 1, 1),
(61, '應急救援GIS地理信息系統軟件', 'Emergency Rescue GIS System Software V1.0', 'awards/copyright/51f227e6a2617.jpg', 'awards/copyright/awards_thumb_51f227e6a2617.jpg', 1374768000, 2, 'anxin', 1, 1),
(62, '應急救援數據接入系統軟件', 'Emergency Rescue Data Access Software SystemV1.0', 'awards/copyright/51f22bc2ab036.jpg', 'awards/copyright/awards_thumb_51f22bc2ab036.jpg', 1374768000, 2, 'anxin', 1, 1),
(63, '應急救援圖像接入系統軟件', 'Emergency Rescue Image Access System Software V 1.0 ', 'awards/copyright/51f22c4d91ae8.jpg', 'awards/copyright/awards_thumb_51f22c4d91ae8.jpg', 1374768000, 2, 'anxin', 1, 1),
(64, '應急數據平台系統軟件', 'Emergency Data Platform Software System V1.0', 'awards/copyright/51f22c6aedb47.jpg', 'awards/copyright/awards_thumb_51f22c6aedb47.jpg', 1374768000, 2, 'anxin', 1, 1),
(65, '應急指揮調度平台管理系統軟件', 'Emergency Resue Coordination Platform Management Software System V1.0', 'awards/copyright/51f22c9e2ba0b.jpg', 'awards/copyright/awards_thumb_51f22c9e2ba0b.jpg', 1374768000, 2, 'anxin', 1, 1),
(66, '應急資源平台管理系統軟件', 'Emergency Resource Platform Management Software System V1.0', 'awards/copyright/51f22cd55885b.jpg', 'awards/copyright/awards_thumb_51f22cd55885b.jpg', 1374768000, 2, 'anxin', 1, 1),
(67, '預測預警監控平台系統軟件', 'Forecasting and Pre-alerting Surveillance Platform Software System', 'awards/copyright/51f22d0955cb0.jpg', 'awards/copyright/awards_thumb_51f22d0955cb0.jpg', 1374768000, 2, 'anxin', 1, 1),
(68, '重大危險源報表分析系統軟件', 'Origin of Peril Report Analysis Software System V1.0', 'awards/copyright/51f22d32aa969.jpg', 'awards/copyright/awards_thumb_51f22d32aa969.jpg', 1374768000, 2, 'anxin', 1, 1),
(69, '重大危險源平台管理系統軟件', 'Origin of Peril Platform Management Software System', 'awards/copyright/51f22d5b6bbb5.jpg', 'awards/copyright/awards_thumb_51f22d5b6bbb5.jpg', 1374768000, 2, 'anxin', 1, 1),
(70, '電子行駛證安裝架', 'Electronic Driving License Installation Rack', 'awards/patent/51f22db742fc3.jpg', 'awards/patent/awards_thumb_51f22db742fc3.jpg', 1374768000, 3, 'anxin', 1, 1),
(71, '計算機信息系統集成企業資質證書（正本）', 'Computing Information Integration Enterprise Qualification Certificate Original Copy', 'awards/certificate/51f22e1de2d7f.jpg', 'awards/certificate/awards_thumb_51f22e1de2d7f.jpg', 1374768000, 4, 'anxin', 1, 1),
(72, '技防證（正本）', 'Design and Construction and Maintenance Qualification Certificate Original Copy', 'awards/certificate/51f22e629bcce.jpg', 'awards/certificate/awards_thumb_51f22e629bcce.jpg', 1374768000, 4, 'anxin', 1, 1),
(73, 'ISO', 'ISO', 'awards/certificate/51f22ebe30df6.jpg', 'awards/certificate/awards_thumb_51f22ebe30df6.jpg', 1374768000, 4, 'anxin', 1, 1),
(74, 'CMMI認證證書-安芯數字', 'CMMI Accreditation Certificate-Anxin Digital', 'awards/certificate/51f22f11de36d.jpg', 'awards/certificate/awards_thumb_51f22f11de36d.jpg', 1374768000, 4, 'anxin', 1, 1),
(75, '高新技術企業證書', 'State High-tech Corporation Qualification Certificate', 'awards/certificate/51f22f4994e47.jpg', 'awards/certificate/awards_thumb_51f22f4994e47.jpg', 1374768000, 4, 'anxin', 1, 1),
(76, '軟件企業認定證書（副本）2012年審', 'Software Corporation Accreditation Certificate Duplicate Copy 2012 Annual Verfication', 'awards/certificate/51f22fc74760e.jpg', 'awards/certificate/awards_thumb_51f22fc74760e.jpg', 1374768000, 4, 'anxin', 1, 1),
(77, '吉林省軟件行業協會會員證', 'Jilin Software Industry Association Member ', 'awards/honor/51f2305e21fc8.jpg', 'awards/honor/awards_thumb_51f2305e21fc8.jpg', 1374768000, 1, 'anxing', 1, 1),
(78, '豪威嵌入式DVR監控系統軟件V2.5.05', 'Hawell Embedded DVR Surveillance System Software V2.5.05 ', 'awards/other/51f230c8052f9.jpg', 'awards/other/awards_thumb_51f230c8052f9.jpg', 1374768000, 5, 'anxing', 1, 1),
(79, '豪威DVR監控系統軟件V9.20', 'Hawell DVR Surveillance System Software V9.20', 'awards/other/51f231f72cbd3.jpg', 'awards/other/awards_thumb_51f231f72cbd3.jpg', 1374768000, 5, 'anxing', 1, 1),
(80, '豪威HW-M6視頻監控管理軟件', 'Hawell HW-M6 Video Surveillance Management Software V7.5 ', 'awards/other/51f2321ad35c1.jpg', 'awards/other/awards_thumb_51f2321ad35c1.jpg', 1374768000, 5, 'anxing', 1, 1),
(81, '吉林安興/數字化應急預案平台管理系統 軟件産品登記證書', 'Jilin Anxing/Digital Emergency Rescue Plan Platform Management System Software Product   Registratio', 'awards/other/51f232fe7fcde.jpg', 'awards/other/awards_thumb_51f232fe7fcde.jpg', 1374768000, 5, 'anxing', 1, 1),
(82, '吉林安興數字化應急預案平台管理系統V1.0', 'Jilin Anxing/Digital Emergency Rescue Plan Platform Management System V1.0 ', 'awards/copyright/51f2333fa058f.jpg', 'awards/copyright/awards_thumb_51f2333fa058f.jpg', 1374768000, 2, 'anxing', 1, 1),
(83, '吉林省安興信息技術有限公司軟件企業認定證書', 'Jilin Anxing Information Technology Co, Ltd Software Corporation Accreditation Certificate ', 'awards/certificate/51f233c2a9c09.jpg', 'awards/certificate/awards_thumb_51f233c2a9c09.jpg', 1374768000, 4, 'anxing', 1, 1),
(84, '摄相机　FCC', 'FCC Verification of Conformity ', 'awards/other/51f234493420b.jpg', 'awards/other/awards_thumb_51f234493420b.jpg', 1374768000, 5, 'haowei', 1, 1),
(85, '摄相机　CE', 'Certificate of Complicance ', 'awards/other/51f2346289935.jpg', 'awards/other/awards_thumb_51f2346289935.jpg', 1374768000, 5, 'haowei', 1, 1),
(86, '嵌入式DVR CE', 'Certificate of Complicance ', 'awards/other/51f2347a28a8e.jpg', 'awards/other/awards_thumb_51f2347a28a8e.jpg', 1374768000, 5, 'haowei', 1, 1),
(87, '生産登記批准表 01', 'Production Registration instrument of ratification 01', 'awards/other/51f2361752981.jpg', 'awards/other/awards_thumb_51f2361752981.jpg', 1374768000, 5, 'haowei', 1, 1),
(88, '生産登記批准表 02', 'Production Registration instrument of ratification 02', 'awards/other/51f23636d136d.jpg', 'awards/other/awards_thumb_51f23636d136d.jpg', 1374768000, 5, 'haowei', 1, 1),
(89, '生産登記批准表 03', 'Production Registration instrument of ratification 03', 'awards/other/51f2364e1c562.jpg', 'awards/other/awards_thumb_51f2364e1c562.jpg', 1374768000, 5, 'haowei', 1, 1),
(90, '生産登記批准表 04', 'Production Registration instrument of ratification 04', 'awards/other/51f23667a023f.jpg', 'awards/other/awards_thumb_51f23667a023f.jpg', 1374768000, 5, 'haowei', 1, 1),
(91, '生産登記批准表 05', 'Production Registration instrument of ratification 05', 'awards/other/51f23682eb0e1.jpg', 'awards/other/awards_thumb_51f23682eb0e1.jpg', 1374768000, 5, 'haowei', 1, 1),
(92, '高清網絡槍式攝像機', 'HD Network Boxing Mode Camera', 'awards/other/51f23e636990b.jpg', 'awards/other/awards_thumb_51f23e636990b.jpg', 1374768000, 5, 'haowei', 1, 1),
(93, '高清網絡槍式攝像機', 'HD Network Boxing Mode Camera', 'awards/other/51f23e826af5b.jpg', 'awards/other/awards_thumb_51f23e826af5b.jpg', 1374768000, 5, 'haowei', 1, 1),
(94, '高清網絡球型攝像機', 'HD Network Ball Mode Camera', 'awards/other/51f23ea014f25.jpg', 'awards/other/awards_thumb_51f23ea014f25.jpg', 1374768000, 5, 'haowei', 1, 1),
(95, '高清網絡球型攝像機', 'HD Network Ball Mode Camera', 'awards/other/51f23eb64fd51.jpg', 'awards/other/awards_thumb_51f23eb64fd51.jpg', 1374768000, 5, 'haowei', 1, 1),
(96, '中國安防知名品牌獎', 'China\\''s Outstanding Well-known Brand ', 'awards/honor/51f23f3e5ec16.jpg', 'awards/honor/awards_thumb_51f23f3e5ec16.jpg', 1374768000, 1, 'haowei', 1, 1),
(97, '2009年度中國安防産品質量用戶信得過企業', '2009 China\\''s Reliable Security-Product-Quality Corportion ', 'awards/honor/51f23f667f58c.jpg', 'awards/honor/awards_thumb_51f23f667f58c.jpg', 1374768000, 1, 'haowei', 1, 1),
(98, '安全防範行業協會副會長單位', 'Shenzhen Security & Protection Industry Association Vice-Chairman Member ', 'awards/honor/51f23f9b83e07.jpg', 'awards/honor/awards_thumb_51f23f9b83e07.jpg', 1374768000, 1, 'haowei', 1, 1),
(99, '豪威DVR監控系統軟件V9.20', 'Hawell Embedded DVR Surveillance System Software V 9.20 ', 'awards/copyright/51f5bd4dc9486.jpg', 'awards/copyright/awards_thumb_51f5bd4dc9486.jpg', 1375027200, 2, 'haowei', 1, 1),
(100, '豪威HW-M6視頻監控管理軟件', 'Hawell HW-M6 Video Surveillance Management Software V7.5', 'awards/copyright/51f5bd7b38452.jpg', 'awards/copyright/awards_thumb_51f5bd7b38452.jpg', 1375027200, 2, 'haowei', 1, 1),
(101, '豪威嵌入式DVR監控系統軟件V2.5.05', 'Hawell Embedded DVR Surveillance System Software V 2.5.05 ', 'awards/copyright/51f5bd95ed633.jpg', 'awards/copyright/awards_thumb_51f5bd95ed633.jpg', 1375027200, 2, 'haowei', 1, 1),
(102, 'DVR面殼', 'DVR Head Shell ', 'awards/patent/51f5bdf3f3f5c.jpg', 'awards/patent/awards_thumb_51f5bdf3f3f5c.jpg', 1375027200, 3, 'haowei', 1, 1),
(103, '防水攝像機外殼', 'Anti-water Camera Shell', 'awards/patent/51f5be1774e17.jpg', 'awards/patent/awards_thumb_51f5be1774e17.jpg', 1375027200, 3, 'haowei', 1, 1),
(104, '紅外防水攝像機（E）', 'Infrared Anti-water Camera ', 'awards/patent/51f5be4e77788.jpg', 'awards/patent/awards_thumb_51f5be4e77788.jpg', 1375027200, 3, 'haowei', 1, 1),
(105, '視頻采集卡TV信號循環輸出電路', 'Video Capture Card TV-signal Cycle Output Circuit ', 'awards/patent/51f5be6e971dc.jpg', 'awards/patent/awards_thumb_51f5be6e971dc.jpg', 1375027200, 3, 'haowei', 1, 1),
(106, '壹種DVR視頻監控軟件加密方法和實現電路', 'Encryption Means and Achieve Circuits for DVR Video Surveillance Software', 'awards/patent/51f5be8c35a36.jpg', 'awards/patent/awards_thumb_51f5be8c35a36.jpg', 1375027200, 3, 'haowei', 1, 1),
(107, '豪威高新技術企業證書', 'High and New Technology Corporation Certificate', 'awards/certificate/51f5befd70104.jpg', 'awards/certificate/awards_thumb_51f5befd70104.jpg', 1375027200, 4, 'haowei', 1, 1),
(108, '軟件企業認定（副本）', 'Software Corporation Qualification Certificate', 'awards/certificate/51f5bf4034129.jpg', 'awards/certificate/awards_thumb_51f5bf4034129.jpg', 1375027200, 4, 'haowei', 1, 1),
(109, '設計、施工、維修證', 'Guangdong Safety Technology Defense System ', 'awards/certificate/51f5bf5ae58b5.jpg', 'awards/certificate/awards_thumb_51f5bf5ae58b5.jpg', 1375027200, 4, 'haowei', 1, 1),
(110, '和安突然出現監測分析軟件V1.0', 'He\\''an Sudden Presence Surveillance Analysis Software V1.0', 'awards/copyright/51f5bfb1ebd82.jpg', 'awards/copyright/awards_thumb_51f5bfb1ebd82.jpg', 1375027200, 2, 'hean', 1, 1),
(111, '和安物體滯留監測分析軟件V1.0', 'He\\''an Static Object Surveillance Analysis Software V1.0', 'awards/copyright/51f5bfd3c1be2.jpg', 'awards/copyright/awards_thumb_51f5bfd3c1be2.jpg', 1375027200, 2, 'hean', 1, 1),
(112, 'PDA車輛檢測軟件産品登記證書', 'Hongxin Intelligent PDA Vehicle Detection Software V1.0.0', 'awards/other/51f5c055a55a8.jpg', 'awards/other/awards_thumb_51f5c055a55a8.jpg', 1375027200, 5, 'hongxin', 1, 1),
(113, '安芯數字家庭安全系統管理中心軟件', 'Anxin Digital Family Safety System Management Center   Software V1.0.0', 'awards/other/51f5c0a6da492.jpg', 'awards/other/awards_thumb_51f5c0a6da492.jpg', 1375027200, 5, 'hongxin', 1, 1),
(114, '車輛監管系統軟件産品登記證書', 'Hongxin Intelligent Vehicle Management System Center   Software V1.0.0', 'awards/other/51f5c0e7da5b5.jpg', 'awards/other/awards_thumb_51f5c0e7da5b5.jpg', 1375027200, 5, 'hongxin', 1, 1),
(115, '洪芯礦山報表分析系統軟件V1.0', 'Hongxin Coaling Mine Analysis System Center Software V1.0.0', 'awards/other/51f5c118eaf09.jpg', 'awards/other/awards_thumb_51f5c118eaf09.jpg', 1375027200, 5, 'hongxin', 1, 1),
(116, '洪芯礦山采集企業端管理系統軟件V1.0', 'Hongxin Coaling Mine Corporate-End Management System   Software V1.0', 'awards/other/51f5c144c04de.jpg', 'awards/other/awards_thumb_51f5c144c04de.jpg', 1375027200, 5, 'hongxin', 1, 1),
(117, '洪芯礦山人員定位系統軟件V1.0', 'Hongxin Coaling Mine Personnel Location System Software V1.0', 'awards/other/51f5c1764f3ee.jpg', 'awards/other/awards_thumb_51f5c1764f3ee.jpg', 1375027200, 5, 'hongxin', 1, 1),
(118, '洪芯礦山視頻監控系統軟件V1.0', 'Hongxin Coaling Mine Video Surveillance System Software V1.0', 'awards/other/51f5c1c0b020e.jpg', 'awards/other/awards_thumb_51f5c1c0b020e.jpg', 1375027200, 5, 'hongxin', 1, 1),
(119, '洪芯智能GIS地理信息系統軟件V2.産品登記證書', 'Hongxin Intelligent GIS System Software V2.0', 'awards/other/51f5c1f4a4a53.jpg', 'awards/other/awards_thumb_51f5c1f4a4a53.jpg', 1375027200, 5, 'hongxin', 1, 1),
(120, '洪芯智能數據接入系統軟件V1.0産品登記證書', 'Hongxin Intelligent Data Access System Software V1.0', 'awards/other/51f5c23edd464.jpg', 'awards/other/awards_thumb_51f5c23edd464.jpg', 1375027200, 5, 'hongxin', 1, 1),
(121, '洪芯智能圖像接入系統軟件V1.0産品登記證書', 'Hongxin Intelligent Image Access System Software V1.0', 'awards/other/51f5c268561f9.jpg', 'awards/other/awards_thumb_51f5c268561f9.jpg', 1375027200, 5, 'hongxin', 1, 1),
(122, '洪芯智能協同工作平台系統軟件V1.0産品登記證書', 'Hongxin Intelligent Coordination Work Platform Software V1.0', 'awards/other/51f5c2935b481.jpg', 'awards/other/awards_thumb_51f5c2935b481.jpg', 1375027200, 5, 'hongxin', 1, 1),
(123, '洪芯重大危險源采集管理系統軟件V1.0', 'Hongxin Origin of Peril Collection Management System   Software V1.0', 'awards/other/51f5c2b9e740d.jpg', 'awards/other/awards_thumb_51f5c2b9e740d.jpg', 1375027200, 5, 'hongxin', 1, 1),
(124, '洪芯重大危險源平台管理軟件V1.0', 'Hongxin Origin of Peril Platform Management System Software   V1.0', 'awards/other/51f5c2e722fd2.jpg', 'awards/other/awards_thumb_51f5c2e722fd2.jpg', 1375027200, 5, 'hongxin', 1, 1),
(125, '洪芯重大危險源綜合監管系統軟件V1.0', 'Hongxin Origin of Peril Comprehensive Management System   Software V1.0', 'awards/other/51f5c30dab15f.jpg', 'awards/other/awards_thumb_51f5c30dab15f.jpg', 1375027200, 5, 'hongxin', 1, 1),
(126, '數字多媒體智能預警終端軟件', 'Anxin Digital Multi-media Intelligent Alerting-end Software   V1.0.0', 'awards/other/51f5c332d3b98.jpg', 'awards/other/awards_thumb_51f5c332d3b98.jpg', 1375027200, 5, 'hongxin', 1, 1),
(127, '規劃布局內重點軟件企業', '2011 Key Software Enterprise under Jiangsu Planning ', 'awards/honor/51f5c3ba0b5b9.jpg', 'awards/honor/awards_thumb_51f5c3ba0b5b9.jpg', 1375027200, 1, 'hongxin', 1, 1),
(128, '省科技型中小企業證書', 'Jiangsu Technological Small and Medium-sized Enterprise Certificate ', 'awards/honor/51f5c40478fbd.jpg', 'awards/honor/awards_thumb_51f5c40478fbd.jpg', 1375027200, 1, 'hongxin', 1, 1),
(129, '省民營科技企業證書', 'Jiangsu Private Science and Tehnology Enterprise', 'awards/honor/51f5c7f342ed8.jpg', 'awards/honor/awards_thumb_51f5c7f342ed8.jpg', 1375027200, 1, 'hongxin', 1, 1),
(130, '2011年市文化産業十佳單位', '2011 Annual Huai\\''an Cultural Industry', 'awards/honor/51f5c82265a06.jpg', 'awards/honor/awards_thumb_51f5c82265a06.jpg', 1375027200, 1, 'hongxin', 1, 1),
(131, '信息化和工業化融合銅牌', 'Emerge between Huaiai Informatization and Industrialization Bronze Medal', 'awards/honor/51f5c84a40e58.jpg', 'awards/honor/awards_thumb_51f5c84a40e58.jpg', 1375027200, 1, 'hongxin', 1, 1),
(132, '智能軟件工程技術研究中心', 'Jiangsu Intelligent Software Engineering Research Center', 'awards/honor/51f5c88bbffe8.jpg', 'awards/honor/awards_thumb_51f5c88bbffe8.jpg', 1375027200, 1, 'hongxin', 1, 1),
(133, 'GIS地理信息系統軟件著作權證書', 'GIS Software Copyrights Registration Certificate', 'awards/copyright/51f5c90b7cdcd.jpg', 'awards/copyright/awards_thumb_51f5c90b7cdcd.jpg', 1375027200, 2, 'hongxin', 1, 1),
(134, '多媒體智能預警終端證書（著作權）', 'Anxin Mutilmedia Intelligent Alerting-End Software V1.0.0', 'awards/copyright/51f5c93990ef9.jpg', 'awards/copyright/awards_thumb_51f5c93990ef9.jpg', 1375027200, 2, 'hongxin', 1, 1),
(135, '洪芯定向移動監測分析系統軟件V1.0', 'Hongxin Directional Motion Surveillance Analysis Software V1.0', 'awards/copyright/51f5c96a5feaf.jpg', 'awards/copyright/awards_thumb_51f5c96a5feaf.jpg', 1375027200, 2, 'hongxin', 1, 1),
(136, '洪芯活動監測分析軟件V1.0', 'Hongxin Motion Surveillance Analysis Software  V1.0', 'awards/copyright/51f5c9993adab.jpg', 'awards/copyright/awards_thumb_51f5c9993adab.jpg', 1375027200, 2, 'hongxin', 1, 1),
(137, '洪芯移動路徑監測分析V1.0', 'Hongxin Motion Path Surveillance Analysis Software', 'awards/copyright/51f5cc30110a2.jpg', 'awards/copyright/awards_thumb_51f5cc30110a2.jpg', 1375027200, 2, 'hongxin', 1, 1),
(138, '洪芯移走物體監測分析V1.0', 'Hongxin Object Removal Surveillance Analysis Software', 'awards/copyright/51f5cc644a15b.jpg', 'awards/copyright/awards_thumb_51f5cc644a15b.jpg', 1375027200, 2, 'hongxin', 1, 1),
(139, '洪芯智能PDA車輛檢測軟件著作權登記證書', 'Hongxin Intelligent PDA Vehicle Detection Software V1.0.0', 'awards/copyright/51f5cc91189c2.JPG', 'awards/copyright/awards_thumb_51f5cc91189c2.JPG', 1375027200, 2, 'hongxin', 1, 1),
(140, '洪芯智能車輛監管系統軟件著作權登記證書', 'Hongxin Intelligent Vehicle Surveillance System Software', 'awards/copyright/51f5ccb6ec375.JPG', 'awards/copyright/awards_thumb_51f5ccb6ec375.JPG', 1375027200, 2, 'hongxin', 1, 1),
(141, '家庭安全系統管理中心證書（著作權）', 'Anxin Digital Family Safety System Management Center Software V1.0.0', 'awards/copyright/51f5cce123678.jpg', 'awards/copyright/awards_thumb_51f5cce123678.jpg', 1375027200, 2, 'hongxin', 1, 1),
(142, '礦山報表分析系統軟件V1.0著作權', 'Coaling Mine Report Analyssis Software', 'awards/copyright/51f5cd08224be.jpg', 'awards/copyright/awards_thumb_51f5cd08224be.jpg', 1375027200, 2, 'hongxin', 1, 1),
(143, '礦山采集企業端管理系統軟件V1.0著作權', 'Coaling Mine Corporate-end Management System Software', 'awards/copyright/51f5cd371bf4c.jpg', 'awards/copyright/awards_thumb_51f5cd371bf4c.jpg', 1375027200, 2, 'hongxin', 1, 1),
(144, '礦山人員定位系統軟件V1.0著作權', 'Coaling Mine Personnel Location System Software V1.0', 'awards/copyright/51f5cd62739ea.jpg', 'awards/copyright/awards_thumb_51f5cd62739ea.jpg', 1375027200, 2, 'hongxin', 1, 1),
(145, '礦山視頻監控系統軟件V1.0著作權', 'Coaling Mine Video Surveillance System Software V1.0', 'awards/other/51f5cd8716b3f.jpg', 'awards/other/awards_thumb_51f5cd8716b3f.jpg', 1375027200, 2, 'hongxin', 1, 1),
(146, '數據接入系統著作權登記證書', 'Data Access System V1.0', 'awards/copyright/51f5cdbfe2bae.jpg', 'awards/copyright/awards_thumb_51f5cdbfe2bae.jpg', 1375027200, 2, 'hongxin', 1, 1),
(147, '圖像接入著作權登記證書', 'Image Access System V1.0', 'awards/copyright/51f5cdecd5151.jpg', 'awards/copyright/awards_thumb_51f5cdecd5151.jpg', 1375027200, 2, 'hongxin', 1, 1),
(148, '協同工作平台軟件著作權', 'Coordination Work Platform Software', 'awards/copyright/51f5ce1602c54.jpg', 'awards/copyright/awards_thumb_51f5ce1602c54.jpg', 1375027200, 2, 'hongxin', 1, 1),
(149, '重大危險源采集管理系統軟件V1.0著作權', 'Origin of Peril Collection Management System Software V1.0', 'awards/copyright/51f5ce3f307bc.jpg', 'awards/copyright/awards_thumb_51f5ce3f307bc.jpg', 1375027200, 2, 'hongxin', 1, 1),
(150, '重大危險源平台管理軟件V1.0著作權', 'Origin of Peril Platform Management System Software V1.0', 'awards/copyright/51f5ce6c05173.jpg', 'awards/copyright/awards_thumb_51f5ce6c05173.jpg', 1375027200, 2, 'hongxin', 1, 1),
(151, '重大危險源綜合監管系統軟件V1.0著作權', 'Origin of Peril Comprehensive Surveillance and Management System Software V1.0', 'awards/copyright/51f5ce943020d.jpg', 'awards/copyright/awards_thumb_51f5ce943020d.jpg', 1375027200, 2, 'hongxin', 1, 1),
(152, 'ISO900012012年度審核後', 'GB/T19001-2008 idt ISO 9001:2008 Standard    Research And Servcies of Intelligent Surveillance, Disa', 'awards/certificate/51f5d7ee26bfa.jpg', 'awards/certificate/awards_thumb_51f5d7ee26bfa.jpg', 1375027200, 4, 'hongxin', 1, 1),
(153, '高企證書', 'High Technology Enterprise Certificate', 'awards/certificate/51f5d819bea22.jpg', 'awards/certificate/awards_thumb_51f5d819bea22.jpg', 1375027200, 4, 'hongxin', 1, 1),
(154, '軟件企業2011年審後', 'Software Corporation Qualification Certificate   Jiangsu Hongxin Intelligent Technology Co., Ltd', 'awards/certificate/51f5d8418f257.jpg', 'awards/certificate/awards_thumb_51f5d8418f257.jpg', 1375027200, 4, 'hongxin', 1, 1),
(155, '軟件企業技術中心授牌', 'Jiangsu Software Corporation Technology Center Brand', 'awards/certificate/51f5d861a7bbb.jpg', 'awards/certificate/awards_thumb_51f5d861a7bbb.jpg', 1375027200, 4, 'hongxin', 1, 1),
(156, '資信等級證書', 'Corporate Credit Grade Certificate ', 'awards/certificate/51f5d8787c45d.jpg', 'awards/certificate/awards_thumb_51f5d8787c45d.jpg', 1375027200, 4, 'hongxin', 1, 1),
(157, '芯業·美特智能行爲分析軟件', 'Xinye & Mate Intelligent Behavior Analysis Software V1.0', 'awards/other/51f5da3d54b07.jpg', 'awards/other/awards_thumb_51f5da3d54b07.jpg', 1375027200, 5, 'xinye', 1, 1),
(158, '芯業GIS重大危險源災難模型管理系統軟件', 'Xinye GIS Origin of Peril Disaster Mode Management System   Software V1.0', 'awards/other/51f5da64b4f88.jpg', 'awards/other/awards_thumb_51f5da64b4f88.jpg', 1375027200, 5, 'xinye', 1, 1),
(159, '芯業複合規則分析軟件V1.0', 'Xinye Compound Rules Analysis Software V1.0', 'awards/other/51f5da8d3ef0b.jpg', 'awards/other/awards_thumb_51f5da8d3ef0b.jpg', 1375027200, 5, 'xinye', 1, 1),
(160, '芯業企業風險評估普查系統軟件V1.0', 'Xinye Corporate Risk Evaluation and Survey System Software   V1.0', 'awards/other/51f5dab111002.jpg', 'awards/other/awards_thumb_51f5dab111002.jpg', 1375027200, 5, 'xinye', 1, 1),
(161, '芯業視頻模擬演練系統軟件V1.0', 'Xinye Video Simulation System Software V1.0', 'awards/other/51f5db3c0e367.jpg', 'awards/other/awards_thumb_51f5db3c0e367.jpg', 1375027200, 5, 'xinye', 1, 1),
(162, '芯業重大危險源及礦山數據接入采集系統軟件V1.0', 'Xinye Origin of Peril and Coaling Mine Data Collection   System Software V1.1', 'awards/other/51f5db8337eef.jpg', 'awards/other/awards_thumb_51f5db8337eef.jpg', 1375027200, 5, 'xinye', 1, 1),
(163, 'GIS重大危險源災難模型管理系統', 'Xinye GIS Origin of Peril Disaster Mode Management System Software V1.0', 'awards/copyright/51f5dc41b9602.jpg', 'awards/copyright/awards_thumb_51f5dc41b9602.jpg', 1375027200, 2, 'xinye', 1, 1),
(164, '企業風險評估普查系統', 'Xinye Corporate Risk Evaluation and Survey System Software V1.0', 'awards/copyright/51f5dc6631050.jpg', 'awards/copyright/awards_thumb_51f5dc6631050.jpg', 1375027200, 2, 'xinye', 1, 1),
(165, '視頻模擬演練系統', 'Xinye Video Simulation System Software V1.0', 'awards/copyright/51f5dc8b18b5a.jpg', 'awards/copyright/awards_thumb_51f5dc8b18b5a.jpg', 1375027200, 2, 'xinye', 1, 1),
(166, '芯業 美特智能行爲分析軟件', 'Xinye & Mate Intelligent Behavior Analysis Software V1.0', 'awards/copyright/51f5dcb255ea6.jpg', 'awards/copyright/awards_thumb_51f5dcb255ea6.jpg', 1375027200, 2, 'xinye', 1, 1),
(167, '芯業複合規則分析軟件', 'Xinye Compound Rules Analysis System Software V1.0', 'awards/copyright/51f5dcf69e77e.jpg', 'awards/copyright/awards_thumb_51f5dcf69e77e.jpg', 1375027200, 2, 'xinye', 1, 1),
(168, '芯業密度監測分析軟件V1.0', 'Xinye Density Surveillance Analysis Software  V1.0', 'awards/copyright/51f5dd1ed37d5.jpg', 'awards/copyright/awards_thumb_51f5dd1ed37d5.jpg', 1375027200, 2, 'xinye', 1, 1),
(169, '芯业目标分类分析软件V1.0', 'Xinye Target Classification Analysis Software V1.0', 'awards/copyright/51f5dd44108c9.jpg', 'awards/copyright/awards_thumb_51f5dd44108c9.jpg', 1375027200, 2, 'xinye', 1, 1),
(170, '芯業啓動應用軟件V1.0', 'Xinye Start Application Software  V1.0', 'awards/copyright/51f5dd789967d.jpg', 'awards/copyright/awards_thumb_51f5dd789967d.jpg', 1375027200, 2, 'xinye', 1, 1),
(171, '芯業視頻源捕獲軟件V1.0', 'Xinye Video Source Capturing Software  V1.0', 'awards/copyright/51f5ddb1b32fc.jpg', 'awards/copyright/awards_thumb_51f5ddb1b32fc.jpg', 1375027200, 2, 'xinye', 1, 1),
(172, '芯業物體啓動監測分析軟件V1.0', 'Xinye Video Source Capturing Software [namely VS] V1.0', 'awards/copyright/51f5de1ea049c.jpg', 'awards/copyright/awards_thumb_51f5de1ea049c.jpg', 1375027200, 2, 'xinye', 1, 1),
(173, '芯業智能防尾隨監測分析軟件V1.0', 'Xinye Intelligent Anti-follow Surveillance Analysis Software V1.0', 'awards/copyright/51f5de53c788e.jpg', 'awards/copyright/awards_thumb_51f5de53c788e.jpg', 1375027200, 2, 'xinye', 1, 1),
(174, '重大危險源及礦山數據接入采集系統', 'Xinye Origin of Peril and Coaling Mine Data Collection System Software V1.1', 'awards/copyright/51f5de743b914.jpg', 'awards/copyright/awards_thumb_51f5de743b914.jpg', 1375027200, 2, 'xinye', 1, 1),
(175, '芯業軟件企業認定證書', 'Ascertainment Certificate of Xinye Software Enterprise', 'awards/certificate/51f5dea8128e1.jpg', 'awards/certificate/awards_thumb_51f5dea8128e1.jpg', 1375027200, 4, 'xinye', 1, 1),
(176, '贏科軟件會員證書', 'Member Certificate of Yingke Softeware ', 'awards/honor/51f5df2083f15.jpg', 'awards/honor/awards_thumb_51f5df2083f15.jpg', 1375027200, 1, 'yingke', 1, 1),
(177, '贏科軟件産品登記證書', 'Registration Certificate of Yingke  Software   Product ', 'awards/other/51f5e014318d3.jpg', 'awards/other/awards_thumb_51f5e014318d3.jpg', 1375027200, 5, 'yingke', 1, 1),
(178, '贏科計算機著作權證書', 'Yingke Computer Software Copyrights Registration Certificate', 'awards/copyright/51f5e0a6459df.jpg', 'awards/copyright/awards_thumb_51f5e0a6459df.jpg', 1375027200, 2, 'yingke', 1, 1),
(179, '贏科軟體企業認定證書', 'Ascertainment Certificate of Yingke Software Enterprise', 'awards/certificate/51f5e181999bf.jpg', 'awards/certificate/awards_thumb_51f5e181999bf.jpg', 1375027200, 4, 'yingke', 1, 1),
(180, '安芯呼叫中心平台系統軟件V1.0', 'Anxin Call Center Platform System Software V1.0', 'awards/other/52082f4f6d30a.jpg', 'awards/other/awards_thumb_52082f4f6d30a.jpg', 1376236800, 5, 'anxin', 1, 1),
(181, '安芯徘徊監測分析軟件V1.0', 'Anxin Loitering Dectection Analysis Software V1.0', 'awards/other/52082f76cacdb.jpg', 'awards/other/awards_thumb_52082f76cacdb.jpg', 1376236800, 5, 'anxin', 1, 1),
(182, '安芯企業數據采集平台管理系統軟件V1.0', 'Anxin Corporate Data Collection  Platform Managment System Software V1.0', 'awards/other/52082fa8273ea.jpg', 'awards/other/awards_thumb_52082fa8273ea.jpg', 1376236800, 5, 'anxin', 1, 1),
(183, '安芯速度監測分析軟件V1.0', 'Anxin Speed Surveillance Analysis Software V1.0', 'awards/other/52082fc67c208.jpg', 'awards/other/awards_thumb_52082fc67c208.jpg', 1376236800, 5, 'anxin', 1, 1),
(184, '安芯物體移動監測分析軟件V1.0', 'Anxin Object Removal Surveillance Analysis Software V1.0 ', 'awards/other/52082fe889706.jpg', 'awards/other/awards_thumb_52082fe889706.jpg', 1376236800, 5, 'anxin', 1, 1),
(185, '安芯系統管理平台系統軟件V1.0', 'Anxin System Management Platform System Software V1.0', 'awards/other/5208300a0259b.jpg', 'awards/other/awards_thumb_5208300a0259b.jpg', 1376236800, 5, 'anxin', 1, 1),
(186, '安芯應急數據平台系統軟件V1.0', 'Anxin Emergency Data Platform System Software V1.0', 'awards/other/52083037361f4.jpg', 'awards/other/awards_thumb_52083037361f4.jpg', 1376236800, 5, 'anxin', 1, 1),
(187, '安芯應急指揮調度平台管理系統軟件V1.0', 'Anxin Emergency Command Coordination Platform Management System Software V1.0', 'awards/other/520830bc1ad5a.jpg', 'awards/other/awards_thumb_520830bc1ad5a.jpg', 1376236800, 5, 'anxin', 1, 1),
(188, '安芯應急資源平台管理系統軟件V1.0', 'Anxin Emergency Resources Platform Management  System Software V1.0 ', 'awards/other/520830dda917d.JPG', 'awards/other/awards_thumb_520830dda917d.JPG', 1376236800, 5, 'anxin', 1, 1),
(189, '安芯預測預警監控平台系統軟件V1.0', 'Anxin Forecasting and Prealerting Surveillance System Software V1.0 ', 'awards/other/520830fa4bc99.jpg', 'awards/other/awards_thumb_520830fa4bc99.jpg', 1376236800, 5, 'anxin', 1, 1),
(190, '安芯軟件企業證書（正本）', 'Anxin Software Corporation Certificate (Original Copy)', 'awards/other/5208312b29963.jpg', 'awards/other/awards_thumb_5208312b29963.jpg', 1376236800, 5, 'anxin', 1, 1),
(191, '安芯軟件認定證書（副本）', 'Ascertainment Certificate of Anxin Software (Duplicate Copy)', 'awards/other/5208314b38684.jpg', 'awards/other/awards_thumb_5208314b38684.jpg', 1376236800, 5, 'anxin', 1, 1),
(192, '豪威軟件企業證書（正本）', 'Hawell Software Corporation Certificate(Original Copy)', 'awards/other/5208317594450.jpg', 'awards/other/awards_thumb_5208317594450.jpg', 1376236800, 5, 'haowei', 1, 1),
(193, '豪威軟件認定證書（副本）', 'Ascertainment Certificate of Hawell Software (Duplicate Copy)', 'awards/other/520831964d27c.jpg', 'awards/other/awards_thumb_520831964d27c.jpg', 1376236800, 5, 'haowei', 1, 1),
(194, '高頻水處理用電極裝置', 'High-frequency Water Process Use Electrode Device', 'awards/other/520831d0503bc.jpg', 'awards/other/awards_thumb_520831d0503bc.jpg', 1376236800, 5, 'shuiliqing', 1, 1),
(195, '芯業密度監測分析軟件V1.0', 'Xinye Density Surveillance Analysis Software V1.0', 'awards/other/520832024da99.jpg', 'awards/other/awards_thumb_520832024da99.jpg', 1376236800, 5, 'xinye', 1, 1),
(196, '芯業目標分析軟件V1.0', 'Xinye Target Analysis Software V1.0', 'awards/other/5208321f36ee7.jpg', 'awards/other/awards_thumb_5208321f36ee7.jpg', 1376236800, 5, 'xinye', 1, 1),
(197, '芯業啓動應用軟件V1.0', 'Xinye Start Application Software V1.0', 'awards/other/520832409e22e.jpg', 'awards/other/awards_thumb_520832409e22e.jpg', 1376236800, 5, 'xinye', 1, 1),
(198, '芯業視頻源捕獲軟件V1.0', 'Xinye Source of Video Capturing Software V1.0', 'awards/other/5208325d95dd9.jpg', 'awards/other/awards_thumb_5208325d95dd9.jpg', 1376236800, 5, 'xinye', 1, 1),
(199, '芯業物體起動監測分析軟件V1.0', 'Xinye Object Start Surveillance Analysis Software V1.0', 'awards/other/5208328139c21.jpg', 'awards/other/awards_thumb_5208328139c21.jpg', 1376236800, 5, 'xinye', 1, 1),
(200, '芯業智能防尾隨監測分析軟件V1.0', 'Xinye Intelligetn Anti-follow Surveillance Analysis Software V1.0 ', 'awards/other/520832a09d94f.jpg', 'awards/other/awards_thumb_520832a09d94f.jpg', 1376236800, 5, 'xinye', 1, 1),
(201, '芯業軟件企業證書（正本）', 'Xinye Software Corporation Certificate(Original Copy)', 'awards/other/520832d243082.jpg', 'awards/other/awards_thumb_520832d243082.jpg', 1376236800, 5, 'xinye', 1, 1),
(202, '芯業軟件認定證書（副本）', 'Ascertainment Certificate of Xinye Software (Duplicate Copy)', 'awards/other/520832ee9fc79.jpg', 'awards/other/awards_thumb_520832ee9fc79.jpg', 1376236800, 5, 'xinye', 1, 1),
(203, '芯業瓦斯抽放管理系統V1.0', 'Xinye Gas Drainage Management Software V1.0', 'awards/copyright/5208331fc7a47.jpg', 'awards/copyright/awards_thumb_5208331fc7a47.jpg', 1376236800, 2, 'xinye', 1, 1),
(204, '芯業安全監察系統V1.0', 'Xinye Safety Monitoring Software V1.0', 'awards/copyright/5208334ea2222.jpg', 'awards/copyright/awards_thumb_5208334ea2222.jpg', 1376236800, 2, 'xinye', 1, 1),
(206, 'test1', 'test1', 'awards/other/5209cb78afeac.jpg', 'awards/other/awards_thumb_5209cb78afeac.jpg', 1376323200, 5, 'test', 1, 2);

-- --------------------------------------------------------

--
-- 表的结构 `ax_circular_2`
--

DROP TABLE IF EXISTS `ax_circular_2`;
CREATE TABLE IF NOT EXISTS `ax_circular_2` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) default NULL,
  `title_en` varchar(255) default NULL,
  `file_url` varchar(100) default NULL,
  `file_url_en` varchar(50) default NULL,
  `create_time` int(11) NOT NULL default '0' COMMENT '时间戳',
  `create_time2` datetime default NULL COMMENT 'datetime格式时间',
  `isshow` tinyint(1) NOT NULL default '1' COMMENT '是否显示',
  `istop` tinyint(1) NOT NULL default '0' COMMENT '是否置顶',
  `orders` smallint(5) NOT NULL default '1' COMMENT '排序',
  `url` varchar(150) NOT NULL default '' COMMENT '定向url地址',
  `click` int(11) NOT NULL default '0' COMMENT '点击率',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- 导出表中的数据 `ax_circular_2`
--

INSERT INTO `ax_circular_2` (`id`, `title`, `title_en`, `file_url`, `file_url_en`, `create_time`, `create_time2`, `isshow`, `istop`, `orders`, `url`, `click`) VALUES
(41, '發行新股份及購回股份之一般授權及修訂公司細則', 'GENERAL MANDATES TO ISSUE NEW SHARES AND REPURCHASE SHARES AND AMENDMENT OF ARTICLES OF ASSOCIATION', 'Public/circulars/zh/c040428.pdf', 'Public/circulars/en/c040428.pdf', 1083081600, '2004-04-28 00:00:00', 1, 0, 1, '', 0),
(39, '股東週年大會（或其任何續會）適用之代表委任表格', 'FORM OF PROXY FOR USE AT THE ANNUAL GENERAL MEETING', 'Public/circulars/zh/c050422.pdf', 'Public/circulars/en/c050422.pdf', 1114099200, '2005-04-22 00:00:00', 1, 0, 1, '', 0),
(40, '福建省福清藥業有限公司（本公司間接全資附屬公司）收購39種醫藥產品之配方、藥品批准文號及日後開發權利', 'ACQUISITION OF THE FORMULAE, MEDICAL APPROVAL NUMBER AND THE RIGHT OF FUTURE DEVELOPMENT OF THIRTY-NINE PHARMACEUTICAL PRODUCTS BY FUJIAN FUQING PHARMACEUTICAL CO., LTD.', 'Public/circulars/zh/c050404.pdf', 'Public/circulars/en/c050404.pdf', 1112544000, '2005-04-04 00:00:00', 1, 0, 1, '', 0),
(37, '股東週年大會（或其任何續會）適用之代表委任表格', 'FORM OF PROXY FOR USE AT THE ANNUAL GENERAL MEETING', 'Public/circulars/zh/c060425.pdf', 'Public/circulars/en/c060425.pdf', 1145894400, '2006-04-25 00:00:00', 1, 0, 1, '', 0),
(38, '購回及發行股份之一般授權、重選退任董事及股東週年大會通告', 'GENERAL MANDATES TO REPURCHASE AND ISSUE SHARES, RE-ELECTIONS OF RETIRING DIRECTORS AND NOTICE OF ANNUAL GENERAL MEETING', 'Public/circulars/zh/c050422a.pdf', 'Public/circulars/en/c050422a.pdf', 1114099200, '2005-04-22 00:00:00', 1, 0, 1, '', 0),
(32, '股東週年大會（或其任何續會）適用之代表委任表格 ', 'FORM OF PROXY FOR USE AT THE ANNUAL GENERAL MEETING (OR ANY ADJOURNMENT THEREOF)', 'Public/circulars/zh/c080425_proxy.pdf', 'Public/circulars/en/c080425_proxy.pdf', 1209052800, '2008-04-25 00:00:00', 1, 0, 1, '', 0),
(31, '須予披露交易福建南少林葯業有限公司（本公司全資附屬公司）收購兩種醫藥產品之配方、藥品批准文號及日後開發權利', 'DISCLOSEABLE TRANSACTION ACQUISITION OF THE FORMULAE, MEDICAL APPROVAL NUMBERS AND THE RIGHT OF FUTURE DEVELOPMENT OF TWO PHARMACEUTICAL PRODUCTS BY FUJIAN NANSHAOLIN PHARMACEUTICAL CO. LTD. (A WHOLLY - OWNED SUBSIDIARY OF THE COMPANY)', 'Public/circulars/zh/c080507.pdf', 'Public/circulars/en/c080507.pdf', 1210089600, '2008-05-07 00:00:00', 1, 0, 1, '', 0),
(28, '(1)非常重大交易及 (2)建議增加法定股本', '(1) VERY SUBSTANTIAL ACQUISITION AND (2) PROPOSED INCREASE IN AUTHORISED SHARE CAPITAL', 'Public/circulars/zh/c090924.pdf', 'Public/circulars/en/c090924.pdf', 1253721600, '2009-09-24 00:00:00', 1, 0, 1, '', 0),
(27, '於二零零九年十月十三日舉行之股東特別大會適用之代表委任表格', 'FORM OF PROXY FOR USE AT THE EXTRAORDINARY GENERAL MEETING TO BE HELD ON 13 OCTOBER 2009', 'Public/circulars/zh/c090924a.pdf', 'Public/circulars/en/c090924a.pdf', 1253721600, '2009-09-24 00:00:00', 1, 0, 1, '', 0),
(22, '建議更改公司名稱及股東特別大會通告', 'PROPOSED CHANGE OF COMPANY NAME AND NOTICE OF EXTRAORDINARY GENERAL MEETING', 'Public/circulars/zh/c100623.pdf', 'Public/circulars/en/c100623.pdf', 1277222400, '2010-06-23 00:00:00', 1, 0, 1, '', 0),
(23, '於二零一零年七月二十三日舉行之股東特別大會適用之代表委任表格', 'FORM OF PROXY FOR USE AT THE EXTRAORDINARY GENERAL MEETING TO BE HELD ON 23 JULY 2010', 'Public/circulars/zh/c100618a.pdf', 'Public/circulars/en/c100618a.pdf', 1276790400, '2010-06-18 00:00:00', 1, 0, 1, '', 0),
(24, '主要交易出售附屬公司', 'MAJOR TRANSACTION DISPOSAL OF SUBSIDIARY', 'Public/circulars/zh/c100618.pdf', 'Public/circulars/en/c100618.pdf', 1276790400, '2010-06-18 00:00:00', 1, 0, 1, '', 0),
(25, '股東週年大會（或其任何續會）適用之代表委任表格', 'FORM OF PROXY FOR USE AT THE ANNUAL GENERAL MEETING (OR ANY ADJOURNMENT THEREOF)', 'Public/circulars/zh/c100429a.pdf', 'Public/circulars/en/c100429a.pdf', 1272470400, '2010-04-29 00:00:00', 1, 0, 1, '', 0),
(26, '發行及購回股份之一般授權、重選退任董事、選舉新董事、更換核數師及股東週年大會通告', 'GENERAL MANDATES TO ISSUE AND REPURCHASE SHARES, RE-ELECTION OF RETIRING DIRECTORS, ELECTION OF NEW DIRECTOR, CHANGE OF AUDITORS AND NOTICE OF ANNUAL GENERAL MEETING', 'Public/circulars/zh/c100429.pdf', 'Public/circulars/en/c100429.pdf', 1272470400, '2010-04-29 00:00:00', 1, 0, 1, '', 0),
(35, '委任表格', 'PROXY FORM', 'Public/circulars/zh/c070427_proxy.pdf', 'Public/circulars/en/c070427_proxy.pdf', 1177603200, '2007-04-27 00:00:00', 1, 0, 1, '', 0),
(36, '購回及發行股份之一般授權、重選退任董事、修訂組織章程細則及股東週年大會通告', 'GENERAL MANDATES TO REPURCHASE AND ISSUE SHARES, RE-ELECTIONS OF RETIRING DIRECTORS, AMENDMENTS TO THE ARTICLES OF ASSOCIATION AND NOTICE OF ANNUAL GENERAL MEETING', 'Public/circulars/zh/c060425a.pdf', 'Public/circulars/en/c060425a.pdf', 1145894400, '2006-04-25 00:00:00', 1, 0, 1, '', 0),
(34, '發行及購回股份之一般授權、重選退任董事及股東週年大會通告', 'GENERAL MANDATES TO ISSUE AND REPURCHASE SHARES, RE-ELECTIONS OF RETIRING DIRECTORS, AND NOTICE OF ANNUAL GENERAL MEETING', 'Public/circulars/zh/c070427.pdf', 'Public/circulars/en/c070427.pdf', 1177603200, '2007-04-27 00:00:00', 1, 0, 1, '', 0),
(33, '發行及購回股份之一般授權、重選退任董事及股東週年大會通告 ', 'GENERAL MANDATES TO ISSUE AND REPURCHASE SHARES, RE-ELECTIONS OF RETIRING DIRECTORS, AND NOTICE OF ANNUAL GENERAL MEETING', 'Public/circulars/zh/c080425.pdf', 'Public/circulars/en/c080425.pdf', 1209052800, '2008-04-25 00:00:00', 1, 0, 1, '', 0),
(30, '發行及購回股份之一般授權、重選退任董事、建議修訂組織章程細則及股東週年大會通告', 'GENERAL MANDATES TO ISSUE AND REPURCHASE SHARES, RE-ELECTIONS OF RETIRING DIRECTORS, PROPOSED AMENDMENTS TO THE ARTICLES OF ASSOCIATION AND NOTICE OF ANNUAL GENERAL MEETING', 'Public/circulars/zh/c090429.pdf', 'Public/circulars/en/c090429.pdf', 1240934400, '2009-04-29 00:00:00', 1, 0, 1, '', 0),
(29, '股東週年大會（或其任何續會）適用之代表委任表格', 'FORM OF PROXY FOR USE AT THE ANNUAL GENERAL MEETING (OR ANY ADJOURNMENT THEREOF)', 'Public/circulars/zh/c090429a.pdf', 'Public/circulars/en/c090429a.pdf', 1240934400, '2009-04-29 00:00:00', 1, 0, 1, '', 0),
(21, '於二零一零年七月二十三日舉行之股東特別大會適用之代表委任表格', 'Form of proxy for use at the Extraordinary General Meeting to be held on 23 July 2010', 'Public/circulars/zh/c100623a.pdf', 'Public/circulars/en/c100623a.pdf', 1277222400, '2010-06-23 00:00:00', 1, 0, 1, '', 0),
(42, '發行及購回股份之一般授權、重選退任董事、選舉新董事及股東週年大會通告', 'GENERAL MANDATES TO ISSUE AND REPURCHASE SHARES, RE-ELECTION OF RETIRING DIRECTORS, ELECTION OF NEW DIRECTORS AND NOTICE OF ANNUAL GENERAL MEETING', 'Public/circulars/zh/c110428.pdf', 'Public/circulars/en/c110428.pdf', 1303986328, '2011-04-28 18:25:28', 1, 0, 1, '', 0),
(44, '於二零一二年三月七日舉行之股東特別大會適用之代表委任表格', 'FORM OF PROXY FOR THE EXTRAORDINARY GENERAL MEETING TO BE HELD ON 7 MARCH 2012', 'Public/circulars/zh/ax2012022003.pdf', 'Public/circulars/en/ax2012022003.pdf', 1329705533, '2012-02-20 10:38:53', 1, 0, 1, '', 0),
(43, '股東週年大會（或其任何續會）適用之代表委任表格', 'FORM OF PROXY FOR USE AT THE ANNUAL GENERAL MEETING (OR ANY ADJOURNMENT THEREOF)', 'Public/circulars/zh/c1104281.pdf', 'Public/circulars/en/c1104281.pdf', 1303986999, '2011-04-28 18:36:39', 1, 0, 1, '', 0),
(45, '建議更新購股權計劃項下之計劃授權限額及股東特別大會通告', 'PROPOSED REFRESHMENT OF THE SCHEME MANDATE LIMIT UNDER THE SHARE OPTION SCHEME AND NOTICE OF EXTRAORDINARY GENERAL MEETING', 'Public/circulars/zh/a2012022002.pdf', 'Public/circulars/en/a2012022002.pdf', 1329721922, '2012-02-20 15:12:02', 1, 0, 1, '', 0),
(46, '發行及購回股份之一般授權、重選退任董事及股東週年大會通告', 'GENERAL MANDATES TO ISSUE AND REPURCHASE SHARES,RE-ELECTION OF RETIRING DIRECTORS AND NOTICE OF ANNUAL GENERAL MEETING', 'Public/circulars/zh/a12033002.pdf', 'Public/circulars/en/a12033002.pdf', 1333067992, '2012-03-30 08:39:52', 1, 0, 1, '', 0),
(47, '股東週年大會（或其任何續會）適用之代表委任表格', 'FORM OF PROXY FOR USE AT THE ANNUAL GENERAL MEETING (OR ANY ADJOURNMENT THEREOF)', 'Public/circulars/zh/a12032903.pdf', 'Public/circulars/en/a12032903.pdf', 1332981810, '2012-03-29 08:43:30', 1, 0, 1, '', 0),
(50, '發行及購回股份之一般授權、重選退任董事、建議增加法定股本...', 'GENERAL MANDATES TO ISSUE AND REPURCHASE SHARES, RE-ELECTION OF RETIRING DIRECTORS...', 'Public/circulars/zh/a130419.pdf', 'Public/circulars/en/a130419.pdf', 1366300800, '2013-04-19 00:00:00', 1, 0, 1, '', 0),
(51, '股東週年大會 （或其任何續會） 適用之代表委任表格', 'Form of proxy for use at the Annual General Meeting (or any adjournment thereof)', 'Public/circulars/zh/a130419(1).pdf', 'Public/circulars/en/a130419(1).pdf', 1366300800, '2013-04-19 00:00:00', 1, 0, 1, '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ax_info`
--

DROP TABLE IF EXISTS `ax_info`;
CREATE TABLE IF NOT EXISTS `ax_info` (
  `id` int(11) NOT NULL auto_increment,
  `lid` smallint(5) NOT NULL default '0' COMMENT '文章信息分类id',
  `title` varchar(100) NOT NULL default '' COMMENT '文章中文标题',
  `content` text NOT NULL COMMENT '文章中文内容',
  `title_en` varchar(100) NOT NULL default '' COMMENT '文章英文标题',
  `content_en` text NOT NULL COMMENT '文章英文内容',
  `des` varchar(200) NOT NULL default '' COMMENT '中文描述',
  `des_en` varchar(200) NOT NULL default '' COMMENT '英文描述',
  `isshow` tinyint(1) NOT NULL default '1' COMMENT '是否显示默认 1 显示',
  `orders` int(8) NOT NULL default '1' COMMENT '排序，小的靠前',
  `addtime` int(11) NOT NULL default '0' COMMENT '添加或修改的时间',
  `url` varchar(120) NOT NULL default '' COMMENT '文章链接url地址',
  `file_url` varchar(150) NOT NULL default '' COMMENT '文章上传文件地址(中文)',
  `file_url_en` varchar(150) NOT NULL default '' COMMENT '文章上传文件地址(英文)',
  `coverimg` varchar(150) NOT NULL default '' COMMENT '中文封面图',
  `coverimg_en` varchar(150) NOT NULL default '' COMMENT '英文封面图',
  `istop` tinyint(1) NOT NULL default '0' COMMENT '文章是否置顶，默认0不置顶',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章信息表' AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `ax_info`
--

INSERT INTO `ax_info` (`id`, `lid`, `title`, `content`, `title_en`, `content_en`, `des`, `des_en`, `isshow`, `orders`, `addtime`, `url`, `file_url`, `file_url_en`, `coverimg`, `coverimg_en`, `istop`) VALUES
(2, 3, '测试', '测试内容', '', '', '', '', 1, 1, 1378483200, '', '', '', '', '', 0),
(3, 4, 'test ivas', '111111111111111', 'eeeeeeeeeeeeee', 'eeeeeeeeeeeeeeee', '1111111111', 'eeeeeeeeeeeeee', 1, 1, 1380211200, '', '111111', 'eeeeeeeeeeeeee', '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ax_infolist`
--

DROP TABLE IF EXISTS `ax_infolist`;
CREATE TABLE IF NOT EXISTS `ax_infolist` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '' COMMENT '文章信息分类名称',
  `pid` smallint(3) NOT NULL default '0' COMMENT '父级id',
  `path` varchar(100) NOT NULL default '' COMMENT '分类路径字符串表示',
  `isshow` tinyint(1) NOT NULL default '1' COMMENT '是否使用该分类',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章信息分类表' AUTO_INCREMENT=6 ;

--
-- 导出表中的数据 `ax_infolist`
--

INSERT INTO `ax_infolist` (`id`, `name`, `pid`, `path`, `isshow`) VALUES
(1, '集团概览', 0, '0', 1),
(2, '核心业务', 0, '0', 0),
(3, 'ISD', 2, '0-2', 0),
(4, 'ISS-IVAS', 2, '0-2', 0),
(5, 'ISS-HARDWARE', 2, '0-2', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ax_log_2`
--

DROP TABLE IF EXISTS `ax_log_2`;
CREATE TABLE IF NOT EXISTS `ax_log_2` (
  `id` smallint(5) NOT NULL auto_increment,
  `content` varchar(100) NOT NULL default '' COMMENT '记录内容',
  `create_time` int(11) NOT NULL default '0' COMMENT '记录时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='日志记录表' AUTO_INCREMENT=47 ;

--
-- 导出表中的数据 `ax_log_2`
--

INSERT INTO `ax_log_2` (`id`, `content`, `create_time`) VALUES
(46, '修改id为172新闻 成功', 1392965875);

-- --------------------------------------------------------

--
-- 表的结构 `ax_ppt_2`
--

DROP TABLE IF EXISTS `ax_ppt_2`;
CREATE TABLE IF NOT EXISTS `ax_ppt_2` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(80) NOT NULL default '' COMMENT '中文标题',
  `title_en` varchar(80) NOT NULL default '' COMMENT '英文标题',
  `file_url` varchar(100) NOT NULL default '' COMMENT '中文pdf',
  `file_url_en` varchar(100) NOT NULL COMMENT '英文pdf',
  `pic_url` varchar(150) NOT NULL default '' COMMENT '封面缩略图',
  `pic_url_t` varchar(150) NOT NULL default '' COMMENT '中文封面缩略',
  `pic_url_en` varchar(150) NOT NULL default '' COMMENT '英文缩略封面图',
  `pic_url_en_t` varchar(150) NOT NULL default '' COMMENT '英文封面缩略',
  `url` varchar(150) NOT NULL default '' COMMENT 'url转向链接',
  `create_time` int(11) NOT NULL COMMENT '添加时间',
  `istop` tinyint(1) NOT NULL default '0' COMMENT '是否置顶 默认0 不置顶 1置顶',
  `isshow` tinyint(1) NOT NULL default '1' COMMENT '是否显示',
  `orders` smallint(4) NOT NULL default '1' COMMENT 'ppt排序',
  `click` mediumint(6) NOT NULL default '0' COMMENT '浏览量',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `ax_ppt_2`
--

INSERT INTO `ax_ppt_2` (`id`, `title`, `title_en`, `file_url`, `file_url_en`, `pic_url`, `pic_url_t`, `pic_url_en`, `pic_url_en_t`, `url`, `create_time`, `istop`, `isshow`, `orders`, `click`) VALUES
(1, 'To a Safer Future', 'To a Safer Future', 'Public/powerpoint/presentation_material_0212_2014.pdf', '', 'Public/powerpoint/images/ppt1.jpg', '', '', '', '', 0, 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `ax_press_2`
--

DROP TABLE IF EXISTS `ax_press_2`;
CREATE TABLE IF NOT EXISTS `ax_press_2` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) default NULL,
  `des` varchar(200) NOT NULL COMMENT '新闻中文描述',
  `title_en` varchar(200) default NULL,
  `des_en` varchar(200) NOT NULL COMMENT '新闻英文描述',
  `pic_url` varchar(150) NOT NULL COMMENT '封面图片',
  `file_url` varchar(100) default NULL,
  `file_url_en` varchar(100) default NULL,
  `type` tinyint(1) NOT NULL default '1' COMMENT '媒体新闻类型：1.企业新闻 2.媒体报道 3.行业信息',
  `url` varchar(120) NOT NULL COMMENT 'url链接地址',
  `isshow` tinyint(1) NOT NULL default '1' COMMENT '是否显示',
  `istop` tinyint(1) NOT NULL default '0' COMMENT '是否置顶',
  `orders` smallint(5) NOT NULL default '1' COMMENT '排序',
  `create_time` int(11) NOT NULL default '0' COMMENT '时间戳',
  `create_time2` datetime default NULL COMMENT 'datetime格式时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=173 ;

--
-- 导出表中的数据 `ax_press_2`
--

INSERT INTO `ax_press_2` (`id`, `title`, `des`, `title_en`, `des_en`, `pic_url`, `file_url`, `file_url_en`, `type`, `url`, `isshow`, `istop`, `orders`, `create_time`, `create_time2`) VALUES
(23, '中國安芯於 2012 年取得亮麗業績', '', 'Anxin-China Achieves Brilliant 2012 Results', '', '', 'Public/press/zh/20130318_zh2.pdf', 'Public/press/en/20130318_en2.pdf', 1, '', 1, 0, 1, 1363569229, '2013-03-18 09:13:49'),
(22, '孝感市政法委書記一行參觀中國安芯應城ISD平臺', '', 'Leaders from Xiaogan City Political Committee Visited Anxin-China ISD Platform in Yingcheng, Hubei', '', '', 'Public/press/zh/a131216(16).pdf', 'Public/press/en/a131216(30).pdf', 1, '', 1, 0, 1, 1363622400, '2013-03-19 00:00:00'),
(85, '“院士專家企業工作站”授牌儀式在廣東省科學館隆重舉行', '', 'The Awarding Ceremony of', '', '', 'Public/press/zh/a131216(13).pdf', 'Public/press/en/a131216(27).pdf', 1, '', 1, 0, 1, 1366041600, '2013-04-16 00:00:00'),
(25, '校企合作 爲中國安防再添助力', '', 'School-enterprise Cooperation Strengthens China’s Security Industry', '', '', 'Public/press/zh/a131216(17).pdf', 'Public/press/en/a131216(31).pdf', 1, '', 1, 0, 1, 1363017600, '2013-03-12 00:00:00'),
(26, '中國安芯項目組與潛江市安監局洽談ISD項目建設', '', 'Anxin-China Discussed with Qianjiang Administration of Work ety On ISD project', '', '', 'Public/press/zh/a131216(18).pdf', 'Public/press/en/a131216(32).pdf', 1, '', 1, 0, 1, 1362931200, '2013-03-11 00:00:00'),
(27, '中國安芯項目組湖北赤壁考察ISD項目', '', 'The Project Group of Anxin-China Went to Chibi City For Local ISD Project Investigation', '', '', 'Public/press/zh/a131216(19).pdf', 'Public/press/en/a131216(33).pdf', 1, '', 1, 0, 1, 1362931200, '2013-03-11 00:00:00'),
(28, '国务院关于推进物联网有序健康发展的指导意见', '', 'State Council’s Guidance on Promoting Healthy Development of Internet-of-things Industry', '', '', 'Public/press/zh/a131216(20).pdf', 'Public/press/en/a131216(34).pdf', 1, '', 1, 0, 1, 1361116800, '2013-02-18 00:00:00'),
(29, '“院士專家企業工作站”落戶中國安芯', '', 'Academician & Expert Enterprise Workstation Settled in Shenzhen ANXIN', '', '', 'Public/press/zh/a131217.pdf', 'Public/press/en/a131217.pdf', 1, '', 1, 0, 1, 1358352000, '2013-01-17 00:00:00'),
(30, '應城市委書記徐長水調研中國安芯應城項目中心', '', 'Xu Changshui as the Yingcheng Party Secretary Visited ANXIN-CHINA Project Center in Yingcheng', '', '', 'Public/press/zh/a131217(1).pdf', 'Public/press/en/a131217(1).pdf', 1, '', 1, 0, 1, 1357401600, '2013-01-06 00:00:00'),
(31, '湖北省鐘祥市領導壹行蒞臨中國安芯控股有限公司參觀考察', '', 'Zhongxiang City Government Leaders of Hubei Province Visited ANXIN-CHINA for Investigation & Study', '', '', 'Public/press/zh/a131217(2).pdf', 'Public/press/en/a131217(2).pdf', 1, '', 1, 0, 1, 1357228800, '2013-01-04 00:00:00'),
(32, '淮安市曲福田市長壹行蒞臨我司香港總部指導工作', '', 'Qu Futian ,the Mayor of Huai’an City Visited the HK headquarter of ANXIN-CHINA', '', '', 'Public/press/zh/a131217(3).pdf', 'Public/press/en/a131217(3).pdf', 1, '', 1, 0, 1, 1356364800, '2012-12-25 00:00:00'),
(33, '中國安芯贊助之“第壹屆深圳國際生物科技創新論壇暨展覽會”順利閉幕', '', 'The 1st Shenzhen International Biotech Innovation Forum& Exhibition Successfully Closes', '', '', 'Public/press/zh/a131217(4).pdf', 'Public/press/en/a131217(4).pdf', 1, '', 1, 0, 1, 1356364800, '2012-12-25 00:00:00'),
(34, '湖北省檢查組參觀應城安全生產應急救援指揮中心', '', 'Hubei Inspection Team Visited the Rural Emergency Rescue Command Center of Safe Production in Yingcheng', '', '', 'Public/press/zh/a131217(5).pdf', 'Public/press/en/a131217(5).pdf', 1, '', 1, 0, 1, 1356019200, '2012-12-21 00:00:00'),
(35, '中國安芯應邀參加重慶市工業安全生產展覽會', '', 'ANXIN-CHINA Attended the Chongqing Industrial Security Production Exhibition', '', '', 'Public/press/zh/a131217(6).pdf', 'Public/press/en/a131217(6).pdf', 1, '', 1, 0, 1, 1355414400, '2012-12-14 00:00:00'),
(36, '中國安芯控股有限公司赴湖北鐘祥市調研考察', '', 'Representatives of ANXIN-CHINA Visited Zhongxiang City, Hubei', '', '', 'Public/press/zh/a131217(7).pdf', 'Public/press/en/a131217(7).pdf', 1, '', 1, 0, 1, 1355328000, '2012-12-13 00:00:00'),
(37, '【轉自晶報】視頻即時報警', '', 'The Crystal: iVAS System with Automatic Warning Function', '', '', 'Public/press/zh/20121119.pdf', 'Public/press/en/content_2281246.pdf', 2, 'http://jb.sznews.com/html/2012-11/19/content_2281246.htm', 1, 0, 1, 1353254400, '2012-11-19 00:00:00'),
(38, '【轉自國聯資源網】高交會上發布國際頂尖智能視頻分析技術', '', 'sznews.com: the Global advanced Intelligent Video Analysis Technology Launched in High-tech Exhibition Center, Shenzhen', '', '', 'Public/press/zh/20121119_1.pdf', 'Public/press/en/d731118.pdf', 2, 'http://www.chinasafety.gov.cn/newpage/Contents/Channel_5330/2012/0910/177801/content_177801.htm', 1, 0, 1, 1353254400, '2012-11-19 00:00:00'),
(39, '【轉自深圳新聞網】國際頂尖智能視頻分析項目落地深圳', '', 'ANXIN-CHINA iVas System Launch Conference was Successfully Held', '', '', 'Public/press/zh/20121118.pdf', 'Public/press/en/e20121118.pdf', 2, 'http://www.sznews.com/news/content/2012-11/18/content_7404857.htm', 1, 0, 1, 1353168000, '2012-11-18 00:00:00'),
(40, '第十四屆高交會讓“智能視頻分析技術”大放異彩', '', 'The 14th China High-tech Exihibition Highlights iVAS System', '', '', 'Public/press/zh/a131217(8).pdf', 'Public/press/en/a131217(8).pdf', 1, '', 1, 0, 1, 1352995200, '2012-11-16 00:00:00'),
(41, '中國安芯控股將攜智能視頻分析系統亮相高交會', '', 'ANXIN-CHINA will Attend Shenzhen High-tech Exhibition', '', '', 'Public/press/zh/a131217(9).pdf', 'Public/press/en/a131217(9).pdf', 1, '', 1, 0, 1, 1352822400, '2012-11-14 00:00:00'),
(42, '公司喜獲“2012亞太區最具科技創新力安防企業”殊榮', '', 'Shenzhen ANXIN won “2012 Asia-Pacific''s the most scientific technology innovation Security corporate” Awards', '', '', 'Public/press/zh/a131217(10).pdf', 'Public/press/en/a131217(10).pdf', 1, '', 1, 0, 1, 1351526400, '2012-10-30 00:00:00'),
(43, '城市安全科技護航-科技成果改變城市未來', '', 'Technology change the future of our city', '', '', 'Public/press/zh/a131217(11).pdf', 'Public/press/en/a131217(11).pdf', 1, '', 1, 0, 1, 1351008000, '2012-10-24 00:00:00'),
(44, '【轉自國家安全監管總局】國家安全監管總局關於進一步加強安全生產應急平台體系建設的意見', '', 'State Administration of Work Safety Declared Opinions on Further Strengthening Security System Construction [No. 114, 2012]', '', '', 'Public/press/zh/2012114.pdf', 'Public/press/en/e2012114.pdf', 2, 'http://www.chinasafety.gov.cn/newpage/Contents/Channel_5330/2012/0910/177801/content_177801.htm', 1, 0, 1, 1347292800, '2012-09-11 00:00:00'),
(45, '中國安芯有望開拓河南省市場', '', 'ANXIN-CHINA Will Expand Its Market in Henan Province', '', '', 'Public/press/zh/a131217(12).pdf', 'Public/press/en/a131217(12).pdf', 1, '', 1, 0, 1, 1346947200, '2012-09-07 00:00:00'),
(46, '常德市石門縣安監局壹行來寧鄉指揮中心參觀考察', '', 'Liao Qiling, the Director of Shimen County Administration of Work Safety Visited Ningxiang Command Center', '', '', 'Public/press/zh/a131217(13).pdf', 'Public/press/en/a131217(13).pdf', 1, '', 1, 0, 1, 1346688000, '2012-09-04 00:00:00'),
(47, '豪威安防成都研討會報導', '', 'Hawell Security Co, Ltd, Held a Special Seminar on Sichuan Security Market in Chengdu', '', '', 'Public/press/zh/a131217(14).pdf', 'Public/press/en/a131217(14).pdf', 1, '', 1, 0, 1, 1346428800, '2012-09-01 00:00:00'),
(48, '長沙市寧鄉縣ISD中心召開現場會', '', 'ANXIN-CHINA Held an On-the-spot meeting in Ningxiang County ISD Command Center, Changsha City', '', '', 'Public/press/zh/a131217(15).pdf', 'Public/press/en/a131217(15).pdf', 1, '', 1, 0, 1, 1346342400, '2012-08-31 00:00:00'),
(49, '深圳市安芯數字發展有限公司喜獲“2011年度深圳市重點軟件企業”', '', 'Shenzhen ANXIN-CHINA Digital Development Co. Ltd was Awarded as “2011 Shenzhen Key Software Enterprise”', '', '', 'Public/press/zh/a131217(17).pdf', 'Public/press/en/a131217(16).pdf', 1, '', 1, 0, 1, 1346256000, '2012-08-30 00:00:00'),
(50, '中國安芯附屬公司榮獲“深圳市自主創新百強中小企業”', '', 'Shenzhen ANXIN-CHINA Digital Development Co. Ltd was Awarded as“Top 100Shenzhen Autonomous-innovated Enterprises”', '', '', 'Public/press/zh/a131217(16).pdf', 'Public/press/en/a131217(17).pdf', 1, '', 1, 0, 1, 1345824000, '2012-08-25 00:00:00'),
(51, '公司舉行智能視頻分析系統技術與營銷培訓', '', 'ANXIN-CHINA Held the Interval marketing training', '', '', 'Public/press/zh/a131217(18).pdf', 'Public/press/en/a131217(18).pdf', 1, '', 1, 0, 1, 1345305600, '2012-08-19 00:00:00'),
(53, '江蘇省軟件與信息服務業發展推進大會應邀中國安芯參會報道', '', ' 	ANXIN-CHINA Attended Development and Promotion Conference on Jiangsu Software &Information Service', '', '', 'Public/press/zh/20120711.pdf', 'Public/press/en/e20120711.pdf', 1, '', 1, 0, 1, 1341936000, '2012-07-11 00:00:00'),
(54, '中國安芯赴彭水縣安監局落實項目推廣工作', '', 'ANXIN-CHINA Went to PengshuiAdministration of Work Safety to Execute the Security Product Promotion', '', '', 'Public/press/zh/a131217(19).pdf', 'Public/press/en/a131217(19).pdf', 1, '', 1, 0, 1, 1341763200, '2012-07-09 00:00:00'),
(55, '中國安芯公司參加重慶市安全應急產業展覽會', '', 'ANXIN-CHINA Attended Chongqing Emergency Security Industry Exhibition', '', '', 'Public/press/zh/a131217(20).pdf', 'Public/press/en/a131217(20).pdf', 1, '', 1, 0, 1, 1341504000, '2012-07-06 00:00:00'),
(56, '中國安芯推行期權激勵政策', '', 'ANXIN-CHINA Began to Implement Stock Option Grant', '', '', 'Public/press/zh/a131217(21).pdf', 'Public/press/en/a131217(21).pdf', 1, '', 1, 0, 1, 1341331200, '2012-07-04 00:00:00'),
(57, '重慶市安全生產應急救援指揮中心主任鄧榮蒞臨中國安芯參觀指導', '', 'Deng Rong as the Director of Chongqing Security Production Emergency Rescue System Command Center Visited ANXIN-CHINA', '', '', 'Public/press/zh/a131217(22).pdf', 'Public/press/en/a131217(22).pdf', 1, '', 1, 0, 1, 1340985600, '2012-06-30 00:00:00'),
(58, '重慶安監局局長肖健康實地考察寧鄉縣安全指揮中心', '', 'Xiao Jiankang as the Director of Chongqing Administration of Work Safety Visited Ningxiang Security Command Center', '', '', 'Public/press/zh/a131217(23).pdf', 'Public/press/en/a131217(23).pdf', 1, '', 1, 0, 1, 1339430400, '2012-06-12 00:00:00'),
(59, '恩施市委副書記郜誌中蒞臨中國安芯參觀指導', '', 'Hao Zhizhong as the Deputy Party Secretary of Enshi City Visited ANXIN-CHINA', '', '', 'Public/press/zh/a131217(24).pdf', 'Public/press/en/a131217(24).pdf', 1, '', 1, 0, 1, 1339084800, '2012-06-08 00:00:00'),
(60, '“國際智能交通博覽會”現場報導', '', 'InternationalSmart Traffic EXPO Exhibition was Successfully Held', '', '', 'Public/press/zh/a131217(25).pdf', 'Public/press/en/a131217(25).pdf', 1, '', 1, 0, 1, 1338393600, '2012-05-31 00:00:00'),
(61, '提振重慶安全-中國安芯打開重慶市場', '', 'ANXIN-CHINA Opened up ChongqingSecurity Industry Market', '', '', 'Public/press/zh/a131217(26).pdf', 'Public/press/en/a131217(26).pdf', 1, '', 1, 0, 1, 1337529600, '2012-05-21 00:00:00'),
(62, '安芯中国智慧天津--记中国安芯ISD系统项目天津站', '', 'ANXIN-CHINA ISD System Project was Confirmed in Tianjin, China', '', '', 'Public/press/zh/a131217(27).pdf', 'Public/press/en/a131217(27).pdf', 1, '', 1, 0, 1, 1336320000, '2012-05-07 00:00:00'),
(63, '中国安芯应邀参加2012（第三届）中国物联网大会', '', 'ANXIN-CHINA Attended the 3rd China’s Internet of Things Conference, 2012', '', '', 'Public/press/zh/a131217(28).pdf', 'Public/press/en/a131217(28).pdf', 1, '', 1, 0, 1, 1335369600, '2012-04-26 00:00:00'),
(64, '中国安芯荣获“深圳市优秀软件企业”荣誉称号', '', 'ANXIN-CHINA was Awarded as “ Shenzhen Outstanding Software Enterprise”', '', '', 'Public/press/zh/a131217(29).pdf', 'Public/press/en/a131217(29).pdf', 1, '', 1, 0, 1, 1333123200, '2012-03-31 00:00:00'),
(65, '淮安市常务副市长王正喜莅临中国安芯深圳总部参观指导', '', 'Wang Zhengxi as the Senior Vice-mayor of Huai’an City Visited ANXIN-CHINA Headquarter in Shenzhen', '', '', 'Public/press/zh/a131217(30).pdf', 'Public/press/en/a131217(30).pdf', 1, '', 1, 0, 1, 1333036800, '2012-03-30 00:00:00'),
(66, '江苏省委书记罗志军莅临中国安芯洪泽基地参观指导', '', 'Luo Zhijun as Jiangsu Provincial Party Secretary Visited Hongze Base of ANXIN-CHINA', '', '', 'Public/press/zh/a131217(31).pdf', 'Public/press/en/a131217(31).pdf', 1, '', 1, 0, 1, 1332777600, '2012-03-27 00:00:00'),
(67, '中国安芯逾2亿收购引进视频分析技术开拓ISD市场', '', 'Luo Zhijun as Jiangsu Provincial Party Secretary Visited Hongze Base of ANXIN-CHINA', '', '', 'Public/press/zh/a131217(32).pdf', 'Public/press/en/a131217(32).pdf', 1, '', 1, 0, 1, 1332172800, '2012-03-20 00:00:00'),
(68, '中国安芯成功收购深圳市豪威未来科技有限公司', '', 'ANXIN-CHINA Successfully Purchased Shenzhen Hawell Science Technology Co, Ltd.', '', '', 'Public/press/zh/a131217(33).pdf', 'Public/press/en/a131217(33).pdf', 1, '', 1, 0, 1, 1329667200, '2012-02-20 00:00:00'),
(69, '《中国安全生产报》安芯特刊', '', 'China WorkSafety News Special Edition: ANXIN-CHINA', '', '', 'Public/press/zh/a131217(34).pdf', 'Public/press/en/a131217(34).pdf', 1, '', 1, 0, 1, 1323705600, '2011-12-13 00:00:00'),
(70, '國家安全監管總局出臺《安全生產科技“十二五”規劃》', '', 'State Administration of Work Safety Released the Twelfth Five-year Plan on Security Production Technology', '', '', 'Public/press/zh/a131217(35).pdf', 'Public/press/en/a131217(35).pdf', 1, '', 1, 0, 1, 1323619200, '2011-12-12 00:00:00'),
(71, '长沙市政府领导一行参观中国安芯延边州及珲春应急救援指挥调度中心', '', 'Changsha City Government Leaders Visited ANXIN-CHINA of Emergency Rescue Center in Yanbian and Huichun', '', '', 'Public/press/zh/a131217(36).pdf', 'Public/press/en/a131217(36).pdf', 1, '', 1, 0, 1, 1311868800, '2011-07-29 00:00:00'),
(72, '中国安芯荣膺CMMI Level 3资质', '', 'ANXIN-CHINA Attained the Qualification of CMMI Level 3', '', '', 'Public/press/zh/a131217(37).pdf', 'Public/press/en/a131217(37).pdf', 1, '', 1, 0, 1, 1309104000, '2011-06-27 00:00:00'),
(73, '淮安市副市长陈洪玉一行莅临参观中国安芯', '', 'Chen Hongyu as the Vice-mayor of Huai’an Visited ANXIN-CHINA', '', '', 'Public/press/zh/a131217(38).pdf', 'Public/press/en/a131217(38).pdf', 1, '', 1, 0, 1, 1306166400, '2011-05-24 00:00:00'),
(74, '中国安芯控股有限公司新办公楼揭牌仪式隆重举行', '', 'ANXIN-CHINA Held the new HK Headquarter Opening Ceremony', '', '', 'Public/press/zh/a131217(40).pdf', 'Public/press/en/a131217(40).pdf', 1, '', 1, 0, 1, 1305820800, '2011-05-20 00:00:00'),
(75, '淮安市长高雪坤莅临中国安芯华东基地调研', '', 'Gao Xuekun as the Mayor of Huai’an City Visited Hongze Base of ANXIN-CHINA', '', '', 'Public/press/zh/a131217(39).pdf', 'Public/press/en/a131217(39).pdf', 1, '', 1, 0, 1, 1304956800, '2011-05-10 00:00:00'),
(76, '中国安芯物联网高峰论坛在洪泽举行', '', 'ANXIN-CHINA Internet of Things Summit Forum was Held in Hongze County, Jiangsu', '', '', 'Public/press/zh/a131217(41).pdf', 'Public/press/en/a131217(41).pdf', 1, '', 1, 0, 1, 1290960000, '2010-11-29 00:00:00'),
(77, '與個人投資者茶聚', '', 'Tea Party for Personal Investor', '', '', 'Public/press/zh/p061220.pdf', 'Public/press/en/a131217(42).pdf', 1, '', 1, 0, 1, 1166544000, '2006-12-20 00:00:00'),
(78, '【转自人民网】住建部公布首批国家智慧城市试点名单', '', 'State Ministry of Housing and Urban-Rural Development', '', '', 'Public/press/zh/20130214_zh.pdf', 'Public/press/en/20130214_en.pdf', 2, 'http://finance.people.com.cn/n/2013/0129/c1004-20364386.html', 1, 0, 1, 1359648000, '2013-02-01 00:00:00'),
(80, '2013全國安全培訓機構負責人研究班在深開班', '', 'The Opening of 2013 Principal Research & Training Class', '', '', 'Public/press/zh/a131216(15).pdf', 'Public/press/en/a131216(29).pdf', 1, '', 1, 0, 1, 1364313600, '2013-03-27 00:00:00'),
(81, '杭州市蕭山區委員會常委壹行領導到訪', '', 'Leaders from Hangzhou Xiaoshan District Committee visited Anxin-China', '', '', 'Public/press/zh/a131216(14).pdf', 'Public/press/en/a131216(28).pdf', 1, '', 1, 0, 1, 1364400000, '2013-03-28 00:00:00'),
(87, '國家安監總局調研組考察中國安芯應城專案基地', '', 'Research Group of State Administration of Work Safety Visited Anxin-China Yingcheng ISD Project Base', '', '', 'Public/press/zh/a131216(12).pdf', 'Public/press/en/a131216(26).pdf', 1, '', 1, 0, 1, 1366300800, '2013-04-19 00:00:00'),
(88, '中國安芯精彩亮相第十九屆俄羅斯國際安防展', '', 'Anxin-China Attended the 19th Moscow International Public Security Exhibition', '', '', 'Public/press/zh/a131216(11).pdf', 'Public/press/en/a131216(25).pdf', 1, '', 1, 0, 1, 1366646400, '2013-04-23 00:00:00'),
(89, '鳳城市市長高峻一行參觀考察中國安芯香港總部', '', 'Fengcheng Mayor Visted the H.K. Headquarter of Anxin-China', '', '', 'Public/press/zh/a131216(10).pdf', 'Public/press/en/a131216(24).pdf', 1, '', 1, 0, 1, 1366732800, '2013-04-24 00:00:00'),
(90, '湖南省懷化市安監局領導考察長沙市甯鄉縣安芯專案基地', '', 'Leaders from Huaihua Administration of Work Safety Visited Changsha Ningxiang Anxin-China ISD Project', '', '', 'Public/press/zh/a131216(9).pdf', 'Public/press/en/a131216(23).pdf', 1, '', 1, 0, 1, 1366905600, '2013-04-26 00:00:00'),
(91, '【行业解析】 環保監測系統有望成為中國安芯新的業務增長點', '', '[Industrial Analysis]Environmental Surveillance ISD System to be the Next Profitable Project  for Anxin-China', '', '', 'Public/press/zh/a131218(34).pdf', 'Public/press/en/a131218(34).pdf', 3, '', 1, 0, 1, 1367769600, '2013-05-06 00:00:00'),
(92, '【行业解析】中國安芯監測系統試圖發展從企業試點轉換為每戶使用', '', '[Industrial Analysis]The Targeting Transformation of Anxin-China ISD System from Pilot Corporations to Individual Households', '', '', 'Public/press/zh/a131218(33).pdf', 'Public/press/en/a131218(33).pdf', 3, '', 1, 0, 1, 1367856000, '2013-05-07 00:00:00'),
(95, '中国安芯高管层受邀参加以色列总理访华招待晚宴', '', 'Invited to Attend the Shanghai Banquet', '', '', 'Public/press/zh/a131216(8).pdf', 'Public/press/en/a131216(22).pdf', 1, '', 1, 0, 1, 1367942400, '2013-05-08 00:00:00'),
(96, '【行业解析】建設平安城市,提升市民歸屬感', '', '[Industrial Analysis]Construct Safe Cities, Promote Citizens’ Sense of Belongings', '', '', 'Public/press/zh/a131218(31).pdf', 'Public/press/en/a131218(31).pdf', 3, '', 1, 0, 1, 1368028800, '2013-05-09 00:00:00'),
(94, '【行业解析】 南都網新聞解析-推廣普及 iVAS 讓家園安寧', '', '[Industrial Analysis]The Popularization of iVAS System Could Make Your Life Safer and Better', '', '', 'Public/press/zh/a131218(32).pdf', 'Public/press/en/a131218(32).pdf', 3, '', 1, 0, 1, 1367942400, '2013-05-08 00:00:00'),
(97, '【行业解析】安全责任重于泰山，中国安芯竭力前进', '', '[Industrial Analysis]Always on the Way to Promise People’s Safety', '', '', 'Public/press/zh/a131218(30).pdf', 'Public/press/en/a131218(30).pdf', 3, '', 1, 0, 1, 1368115200, '2013-05-10 00:00:00'),
(98, '重慶市安監局巡視員一行前往我司彭水中心調研平臺建設情況', '', 'Inspector Group from Chongqing AWS Visited Pengshui Anxin-China ISD Construction Base', '', '', 'Public/press/zh/a131216(7).pdf', 'Public/press/en/a131216(21).pdf', 1, '', 1, 0, 1, 1368374400, '2013-05-13 00:00:00'),
(99, '【行业解析】智慧視頻監控技術現狀及發展趨勢分析（转）', '', '[Industrial Analysis] Analysis of Intelligent Video Surveillance Technology’s Current Conditions and Development Trend (Transshipment)', '', '', 'Public/press/zh/a131218(29).pdf', 'Public/press/en/a131218(29).pdf', 3, '', 1, 0, 1, 1368374400, '2013-05-13 00:00:00'),
(100, '【行业解析】智慧視頻行為分析，讓孩子遠離傷痛', '', '[Industrial Analysis] iVAS Technology Protects Your Kids from Danger', '', '', 'Public/press/zh/a131218(28).pdf', 'Public/press/en/a131218(28).pdf', 3, '', 1, 0, 1, 1368460800, '2013-05-14 00:00:00'),
(101, '【行业解析】中國安芯 ISD 與政府企業共擔安全生產重任', '', '[Industrial Analysis]Anxin-China ISD Largely Promotes the Public Safety Production', '', '', 'Public/press/zh/a131218(27).pdf', 'Public/press/en/a131218(27).pdf', 3, '', 1, 0, 1, 1368547200, '2013-05-15 00:00:00'),
(102, '【行业解析】智慧視頻行為分析系統—保輸電安全', '', '[Industrial Analysis]iVAS System Promises Residents’ Power Utilization Safe', '', '', 'Public/press/zh/a131218(26).pdf', 'Public/press/en/a131218(26).pdf', 3, '', 1, 0, 1, 1368633600, '2013-05-16 00:00:00'),
(103, '【行业解析】別讓污水寒了市民的心', '', '[Industrial Analysis]ISD System Prevents the Water Pollution', '', '', 'Public/press/zh/a131218(25).pdf', 'Public/press/en/a131218(25).pdf', 3, '', 1, 0, 1, 1368720000, '2013-05-17 00:00:00'),
(104, '【行业解析】警鐘鳴而未醒 電梯“吃人”必頻發', '', '[Industrial Analysis]The Public Security Needs Anxin-China iVAS to Prevent Elevator Accidents', '', '', 'Public/press/zh/a131218(24).pdf', 'Public/press/en/a131218(24).pdf', 3, '', 1, 0, 1, 1369152000, '2013-05-22 00:00:00'),
(105, '【行业解析】別讓安全生產僅僅成為一句口號', '', '[Industrial Analysis]Safety Production is Never Simply an Oral Slogan', '', '', 'Public/press/zh/a131218(23).pdf', 'Public/press/en/a131218(23).pdf', 3, '', 1, 0, 1, 1369238400, '2013-05-23 00:00:00'),
(106, '湖北省安監局領導考察中國安芯應城ISD項目建設', '', 'Leaders from Hubei AWS Visited Anxin-China Yingcheng ISD Construction Project', '', '', 'Public/press/zh/a131216(6).pdf', 'Public/press/en/a131216(20).pdf', 1, '', 1, 0, 1, 1369584000, '2013-05-27 00:00:00'),
(107, '【行业解析】中國安芯ISD 讓“安全生產高於一切”從認識成為事實', '', '[Industrial Analysis]Anxin-China ISD Makes “Safety Production is First” Come True', '', '', 'Public/press/zh/a131218(22).pdf', 'Public/press/en/a131218(22).pdf', 3, '', 1, 0, 1, 1369756800, '2013-05-29 00:00:00'),
(108, '【行业解析】保護文物,不僅僅只靠道德約束', '', '[Industrial Analysis]Anxin-China iVAS Effectively Protects the Cultural Relics', '', '', 'Public/press/zh/a131218(21).pdf', 'Public/press/en/a131218(21).pdf', 3, '', 1, 0, 1, 1369843200, '2013-05-30 00:00:00'),
(109, '【行业解析】別讓門成為逃生不歸路', '', '[Industrial Analysis]Anxin-China ISD System Protects You from the Fire Hazard', '', '', 'Public/press/zh/a131218(20).pdf', 'Public/press/en/a131218(20).pdf', 3, '', 1, 0, 1, 1370275200, '2013-06-04 00:00:00'),
(110, '【行业解析】在預防和治本上下更大功夫——國務院常務會議部署進一步加強安全生產工作', '', '[Industrial Analysis]State Council Execute Meeting Emphasized Precautions to Be Further Realized in Safety Production', '', '', 'Public/press/zh/a131218(19).pdf', 'Public/press/en/a131218(19).pdf', 3, '', 1, 0, 1, 1370448000, '2013-06-06 00:00:00'),
(111, '山東曲阜招商局領導蒞臨中國安芯考察會談', '', 'Leaders from Shandong Quhu Merchants Group Visited Anxin-China', '', '', 'Public/press/zh/a131216(5).pdf', 'Public/press/en/a131216(19).pdf', 1, '', 1, 0, 1, 1371139200, '2013-06-14 00:00:00'),
(112, '【轉】人民日報評論員:堅守不可逾越的紅線', '', '[Source]People''s Daily: We Should Insist Our Unbridgeable Principle', '', '', 'Public/press/zh/a130619.pdf', 'Public/press/en/a130619.pdf', 2, '', 1, 0, 1, 1371571200, '2013-06-19 00:00:00'),
(113, '【行业解析】生命最寶貴·安全大過天', '', '[Industrial Analysis]Life Safety is First in the Process of Security Production', '', '', 'Public/press/zh/a131218(18).pdf', 'Public/press/en/a131218(18).pdf', 3, '', 1, 0, 1, 1372089600, '2013-06-25 00:00:00'),
(114, '中國安芯應邀參加第四屆中國國際安全生產應急管理論壇暨應急技術與裝備展覽會', '', 'Anxin-China Attended the 4th  China''s International Safety Security Emergency Technology & Equipment Exhibition', '', '', 'Public/press/zh/a131216(2).pdf', 'Public/press/en/a131216(18).pdf', 1, '', 1, 0, 1, 1372694400, '2013-07-02 00:00:00'),
(115, '【行业解析】違規排放屢禁不止，別讓環境為企業買單', '', '[Industrial Analysis]Take Care: Violated Pollution Emissions Damage the Environment', '', '', 'Public/press/zh/a131218(17).pdf', 'Public/press/en/a131218(17).pdf', 3, '', 1, 0, 1, 1372694400, '2013-07-02 00:00:00'),
(116, '【行业解析】廢棄煤礦隱患多，iVAS 令其無處遁形', '', '[Industrial Analysis]Anxin-China’s iVAS Makes All Potential Coal Risks Visible', '', '', 'Public/press/zh/a131218(16).pdf', 'Public/press/en/a131218(16).pdf', 3, '', 1, 0, 1, 1372867200, '2013-07-04 00:00:00'),
(117, '深圳市委統戰部、市工商聯領導蒞臨中國安芯調研考察', '', 'Leaders from Shenzhen Municipal Committee United Front Department and  Association of Industry and Ecommerce Visited Anxin-China for Investigation', '', '', 'Public/press/zh/a131212(18).pdf', 'Public/press/en/a131216(17).pdf', 1, '', 1, 0, 1, 1372953600, '2013-07-05 00:00:00'),
(118, '【行业解析】賀江污染成話題，中國安芯有方案', '', '[Industrial Analysis]Anxin-China Provides Best Solutions for Solving Hejiang Pollution', '', '', 'Public/press/zh/a131218(15).pdf', 'Public/press/en/a131218(15).pdf', 3, '', 1, 0, 1, 1373299200, '2013-07-09 00:00:00'),
(119, '濮陽市安監局領導蒞臨中國安芯應城專案基地考察', '', 'Leaders from PuYang AWS Visited Anxin-China Yingcheng Project Base for Investigation and Study', '', '', 'Public/press/zh/a131212(17).pdf', 'Public/press/en/a131216(16).pdf', 1, '', 1, 0, 1, 1373558400, '2013-07-12 00:00:00'),
(120, '湖北省安監局領導蒞臨中國安芯應城專案基地考察', '', 'Leaders from Hubei AWS Visited Anxin-China ISD Base in Yingcheng', '', '', 'Public/press/zh/a131212(16).pdf', 'Public/press/en/a131216(15).pdf', 1, '', 1, 0, 1, 1373817600, '2013-07-15 00:00:00'),
(122, '肇慶經信局領導與中國安芯就共建智慧城市進行會談', '', 'Leaders from Zhaoqing Economy & Informatization Management Agency and Anxin-China Made a discussion on “Cooperative Smart City Plan”', '', '', 'Public/press/zh/a131212(15).pdf', 'Public/press/en/a131216(14).pdf', 1, '', 1, 0, 1, 1373904000, '2013-07-16 00:00:00'),
(123, '【行业解析】全覆蓋，重實效·中國安芯做好安全這件大事', '', '[Industrial Analysis]Anxin-China Achieves Security Protection Practically and Effectively', '', '', 'Public/press/zh/a131218(14).pdf', 'Public/press/en/a131218(14).pdf', 3, '', 1, 0, 1, 1374681600, '2013-07-25 00:00:00'),
(124, '【行业解析】水火無情人有情·中國安芯在參與', '', '[Industrial Analysis]Anxin-China Always Focuses on Solutions Preventing Water and Fire Hazards', '', '', 'Public/press/zh/a131218(13).pdf', 'Public/press/en/a131218(13).pdf', 3, '', 1, 0, 1, 1375027200, '2013-07-29 00:00:00'),
(125, '【行业解析】杜絕事故重在預防·中國安芯正在行動', '', '[Industrial Analysis]Anxin-China Highlights Precaution is mostly Required to Prevent Accidents', '', '', 'Public/press/zh/a131218(12).pdf', 'Public/press/en/a131218(12).pdf', 3, '', 1, 0, 1, 1375286400, '2013-08-01 00:00:00'),
(126, '貴州納雍縣縣長一行蒞臨中國安芯神農架專案基地考察', '', 'The Investigation group of Guizhou Nayong County Government Visited Anxin-China Project Base in Shenlongjia', '', '', 'Public/press/zh/a131212(14).pdf', 'Public/press/en/a131216(13).pdf', 1, '', 1, 0, 1, 1375718400, '2013-08-06 00:00:00'),
(127, '【行业解析】中國安芯，不再重復舊的腳本', '', '[Industrial Analysis]Anxin-China ISD Clears up the Incentives of Industrial Accidents', '', '', 'Public/press/zh/a131218(11).pdf', 'Public/press/en/a131218(11).pdf', 3, '', 1, 0, 1, 1375804800, '2013-08-07 00:00:00'),
(128, '中國安芯產品順利通過檢測', '', 'HD Cameras from Anxin-China successfully Passed the Government Inspection', '', '', 'Public/press/zh/a131212(13).pdf', 'Public/press/en/a131216(12).pdf', 1, '', 1, 0, 1, 1376928000, '2013-08-20 00:00:00'),
(129, '中國安芯應城指揮平臺建設企業座談會', '', 'Anxin-China ISD Platform Corporate Symposium Successfully Held in Yingcheng, Hubei', '', '', 'Public/press/zh/a131212(12).pdf', 'Public/press/en/a131216(11).pdf', 1, '', 1, 0, 1, 1376928000, '2013-08-20 00:00:00'),
(130, '中國安芯受邀參加第二期深圳智慧交通大講堂活動', '2013年8月23日下午，為宣貫普及智慧交通知識，由深圳市人民政府、交委主辦，深圳市智慧交通協會與市安全教育基地承辦的第二期深圳智慧交通大講堂活動在深圳市市民中心工業展覽館舉行。', 'Anxin-China Attended 2nd Shenzhen Smart Traffic Auditorium on Invitation', '(Shenzhen-Aug. 23th, 2013) To popularize the smart traffic knowledge among the residents, 2nd Shenzhen Smart Traffic Auditorium was successfully held in Shenzhen civic center industrial exhibition hal', '72001377619107_thumb.jpg', 'Public/press/zh/a131216.pdf', 'Public/press/en/a131216(10).pdf', 1, '', 1, 0, 1, 1377532800, '2013-08-27 00:00:00'),
(131, '【轉】第二期深圳智能交通大講堂順利開講', '', '[Source from zhinengjiaotong.com] 2nd Smart Traffic Auditorium was successfully held in Shenzhen', '', '', 'Public/press/zh/a130916(1).pdf', 'Public/press/en/a130916(1).pdf', 2, 'http://www.cpsits.com//bencandy/275/17663/1', 1, 0, 1, 1377619200, '2013-08-28 00:00:00'),
(132, '【轉】2013智能交通大講堂第二講：智能科技護航安全出行', '', '[Source from cps.com]2nd Smart Traffic Auditorium:Smart Technologies Keep Trips Safe', '', '', 'Public/press/zh/a130916.pdf', 'Public/press/en/a130916.pdf', 2, 'http://news.cps.com.cn/hyxw/2013/0828/zMMDAwMDcyNzczMQ.html', 1, 0, 1, 1377619200, '2013-08-28 00:00:00'),
(134, '【行业解析】齊心築牢防火牆壁·安芯為之不遺餘力', '', '[Industrial Analysis]Anxin-China Spares no Efforts to Develop Security Systems for Preventing Fire Hazards', '', '', 'Public/press/zh/a131218(10).pdf', 'Public/press/en/a131218(10).pdf', 3, '', 1, 0, 1, 1378915200, '2013-09-12 00:00:00'),
(135, '【行业解析】安全事故頻發，安全生產監管監控能力亟待強化', '', '[Industrial Analysis]The Safety Production Surveillance Ability Required to Be Strengthened in the Ongoing Security Cases', '', '', 'Public/press/zh/a131218(9).pdf', 'Public/press/en/a131218(9).pdf', 3, '', 1, 0, 1, 1378915200, '2013-09-12 00:00:00'),
(136, '【轉】智能交通護航安全出行——2013智能交通大講堂第二期講話實錄', '', '[Source from Transport Commision of Shenzhen Municipality ]Source from Transport Commision of Shenzhen Municipality', '', '', NULL, NULL, 2, 'http://www.sztb.gov.cn/hdjl/znjtdjt/hg/201308/t20130830_22452.htm', 1, 0, 1, 1379779200, '2013-09-22 00:00:00'),
(137, '【行业解析】有毒氣體洩露 安芯解決有方', '', '[Industrial Analysis]Anxin-China Presents Its Edges in Preventing Toxic Gas Leakage', '', '', 'Public/press/zh/a131218(8).pdf', 'Public/press/en/a131218(8).pdf', 3, '', 1, 0, 1, 1379865600, '2013-09-23 00:00:00'),
(138, '【行業解析】安全型智慧城市建設，中國安芯一直在參與', '', '[Industrial Analysis]Anxin-China Strives for the Construction of Smart and Safe Cities', '', '', 'Public/press/zh/a131218(7).pdf', 'Public/press/en/a131218(7).pdf', 3, '', 1, 0, 1, 1380038400, '2013-09-25 00:00:00'),
(139, '【行業解析】呼吸保衛戰·安芯任重道遠', '', '[Industrial Analysis]Anxin-China’s Supports for the State’s Air Pollution Prevention Plan', '', '', 'Public/press/zh/a131218(6).pdf', 'Public/press/en/a131218(6).pdf', 3, '', 1, 0, 1, 1380384000, '2013-09-29 00:00:00'),
(140, '【行業解析】PM2.5問題頻發·中國安芯解決有方', '', '[Industrial Analysis]Anxin-China Provides the Best Solution to Solve PM2.5', '', '', 'Public/press/zh/a131218(5).pdf', 'Public/press/en/a131218(5).pdf', 3, '', 1, 0, 1, 1381507200, '2013-10-12 00:00:00'),
(141, '江蘇沛縣領導蒞臨中國安芯參觀考察', '2013年10月13日下午，江蘇沛縣考察團縣長李曉雷的帶領下蒞臨中國安芯控股有限公司考察調研，陪同調研的人員主要有經濟開發區張長纓主任、發改委王德信主任、政府辦週主任、開發區招商局王局長以及朱寨鎮董鎮長等領導', 'Leaders from Pei County, Jiangsu Province Visited Anxin-China for Investigation and Study', '(Shenzhen-October 13th, 2013)Li Xiaolei, the head of Pei County, led the investigation team to visit Anxin-China on this morning, with the accompanying persons including Zhang Changying, the secretary', '20801381799586_thumb.jpg', 'Public/press/zh/a131212(10).pdf', 'Public/press/en/a131216(9).pdf', 1, '', 1, 0, 1, 1381766400, '2013-10-15 00:00:00'),
(142, '山東省莘縣領導一行蒞臨中國安芯考察', '2013 年10 月14 日上午，山東省莘縣財政局局長姜軍華、應急辦主任丁濤及科長趙永\r\n華一行三人蒞臨中國安芯控股有限公司考察調研。中國安芯行銷中心副總黃治偉、市場總監\r\n冀冰普出席了座談會議', 'Leaders from Shen County, Shandong Province Visited Anxin-China for Investigation and Study', '(Shenzhen-October 14th, 2013)Jiang Junhua, the chief of Shandong Shen County Finance Bureau,\r\nDing Tao, the secretary of local emergency office, and Zhao Yonghua, the section chief of local emergency', '77071381975013_thumb.jpg', 'Public/press/zh/a131212(9).pdf', 'Public/press/en/a131216(8).pdf', 1, '', 1, 0, 1, 1381939200, '2013-10-17 00:00:00'),
(143, '【行業解析】安一座城，穩一方心', '', '[Industrial Analysis] 	[Industrial Analysis] 	[Industrial Analysis]Anxin-China Provides the Solution Protecting a City Safe', '', '', 'Public/press/zh/a131218(4).pdf', 'Public/press/en/a131218(4).pdf', 3, '', 1, 0, 1, 1381939200, '2013-10-17 00:00:00'),
(144, '湖北荊門市東寶區領導蒞臨中國安芯參觀考察', '2013年10月18日，湖北省荊門市東寶區人民政府辦公室主任李劍、東寶經濟開發區管委會副主任邵選鋒、東寶區招商局副局長劉敬鋒蒞臨中國安芯參觀考察，中國安芯營銷中心副總經理黃治偉和項目經理陳豪出席會議並深入會談和交流', 'Governmental Leaders from Jingmen, Hubei Visited Anxin-China for Investigation and Study', '(Shenzhen-Oct. 18th, 2013) Governmental leaders from Jingmen City, Hubei Province, including M. Li Jian as the director of Dongbao District People’s Government Office, M. Shao Xuanfeng as the vice pre', '49731382491198_thumb.jpg', 'Public/press/zh/a131212(8).pdf', 'Public/press/en/a131216(7).pdf', 1, '', 1, 0, 1, 1382284800, '2013-10-21 00:00:00'),
(145, '【行業解析】危化品運輸安全警鐘敲響，中國安芯一直在行動', '', '[Industrial Analysis]Anxin-China Takes Actions against the Accidents in Dangerous Chemicals Transportation', '', '', 'Public/press/zh/a131218(3).pdf', 'Public/press/en/a131218(3).pdf', 3, '', 1, 0, 1, 1382544000, '2013-10-24 00:00:00'),
(146, '淮安市副市長唐道倫一行來我公司視察指導', '今天上午淮安市副市長唐道倫、市政府副秘書長王蘇軍、市經信委主任趙權等一行來到了中國安芯控股有限公司深圳總部進行視察指導。中國安芯與淮安市早已成為戰略合作夥伴，在多領域進行了深入的合作，已經開始進行了人防以及安監ISD系統的建設。此次，唐副市長一行來到中國安芯，是對之前合作的肯定，也是對下一步合作進行探討', 'The Deputy Mayor from Huai''an City Visited Anxin-China for Guidance and Survey', '(Shenzhen-Oct.24th, 2013)Tang Daolun, the deputy mayor of Huai’an City, Wang Sujun, the Municipal Deputy Secretary General, and et al visited Anxin-China for guidance and survey. Huai’an municipal gov', '77181382606006_thumb.jpg', 'Public/press/zh/a131212(7).pdf', 'Public/press/en/a131216(6).pdf', 1, '', 1, 0, 1, 1382544000, '2013-10-24 00:00:00'),
(148, '中國安芯應邀參加第十四屆安博會', '2013年10月29日上午9時，2013年第十四屆中國國際公共安全博覽會(簡稱安博會，英文縮寫CPSE)在深圳會展中心隆重開幕', 'Anxin-China Participated in the 14th CPSE on Invitation', '(Shenzhen-Oct. 29th, 2013) The 14th China’s International Public Security Exhibition made a bran opening in Shenzhen Exhibition Center on the morning of Oct. 29th', '66111383187103_thumb.jpg', 'Public/press/zh/a131212.pdf', 'Public/press/en/a131216(5).pdf', 1, '', 1, 0, 1, 1383148800, '2013-10-31 00:00:00'),
(147, '【行業解析】“花炮之鄉”杜絕隱患·中國安芯出謀劃策', '', '[INDUSTRIAL ANALYSIS]Anxin-China Provides Solutions for the', '', '', 'Public/press/zh/a131218(2).pdf', 'Public/press/en/a131218(2).pdf', 3, '', 1, 0, 1, 1382630400, '2013-10-25 00:00:00'),
(149, '【行業解析】校車安全之路•安芯志在建立', '', '[Industrial Analysis]Anxin-China Concentrates on Protecting the School-bus Trip', '', '', 'Public/press/zh/a131218(1).pdf', 'Public/press/en/a131218(1).pdf', 3, '', 1, 0, 1, 1383148800, '2013-10-31 00:00:00'),
(150, '【行業解析】爆竹旺季，ISD將事故擋在門外', '', '[INDUSTRIAL ANALYSIS]Anxin-China''s ISD System Prevents the Accidents in Fireworks Production', '', '', 'Public/press/zh/a131218.pdf', 'Public/press/en/a131218.pdf', 3, '', 1, 0, 1, 1384272000, '2013-11-13 00:00:00'),
(151, '應城市開發區管委會席書記一行蒞臨中國安芯參觀考察', '013年11月16日，應城市開發區管委會席書記、張主任、鐘局長一行蒞臨中國安芯參觀考察。中國安芯董事會副主席王波、營銷中心副總經理黃治偉、銷售總監劉洪波等領導熱情接待了席書記一行，並做了深入的會談', 'Secretary Xi from Yingcheng Administrative Committee of Development Zone Visited..', '(Shenzhen- Nov.16th, 2013) The leaders from Yingcheng Administrative Committee of Development Zone, including Sectary Xi, Director Zhang and Director Zhang, visited Anxin-China for investigation and s', '94291384842548_thumb.jpg', 'Public/press/zh/a131212(6).pdf', 'Public/press/en/a131216(4).pdf', 1, '', 1, 0, 1, 1384790400, '2013-11-19 00:00:00'),
(152, '【轉】內地首張電梯“三合一”標誌在深圳揭牌', '', '[source]China''s first "three-in-one" Elevator Label Unveiled in Shenzhen', '', '', NULL, NULL, 2, 'http://news.xinhuanet.com/yzyd/local/20131119/c_118201752.htm', 1, 0, 1, 1384790400, '2013-11-19 00:00:00'),
(153, '深圳市電梯“三合一”標誌啟用 暨遠端監控系統推廣現場會', '2013年11月18日上午，深圳市市場監管局在雪松大廈召開全國首張電梯“三合一”標誌正式啟用暨遠端監控系統推廣現場會', 'China''s first "three-in-one" Elevator Label Unveiled at the Remote Surveillance System Promotion Conference', '(Shenzhen-Nov. 18th, 2013) Shenzhen Markets Authority held a remote surveillance system promotion conference in Cedar Mansion on the morning of Nov. 18th, which meant that China''s first "three-in-one"', '56611384908304_thumb.jpg', 'Public/press/zh/a131212(1).pdf', 'Public/press/en/a131216(3).pdf', 1, '', 1, 0, 1, 1384790400, '2013-11-19 00:00:00'),
(154, '喀什英吉沙縣公安局汪局長一行蒞臨中國安芯參觀考察', '2013年11月20日，新疆喀什英吉沙縣公安局汪局長一行蒞臨中國安芯參觀考察，營銷中心副總經理黃治偉先生熱情接待了汪局長一行。雙方就英吉沙縣平安城市建設進行了深入探討。', 'The Chief of Xinjiang Kash Yinjisha County PSB Visited Anxin-China for Investigation and Study', '(Shenzhen-Nov.20th, 2013) The leader group from Xinjiang Yinjisha County Public Security Bureau, visited Anxin-China for investigation and study. Accordingly, M. Huang Zhiwei the deputy manager of mar', '89111384996677_thumb.jpg', 'Public/press/zh/a131212(5).pdf', 'Public/press/en/a131216(2).pdf', 1, '', 1, 0, 1, 1384963200, '2013-11-21 00:00:00'),
(155, '陝西、甘肅省安監局領導蒞臨中國安芯應城指揮中心參觀考察', '11月22日上午， 陝西省安監局科技規劃處張亞龍處長、甘肅省安監局應急中心趙處長一行四人蒞臨中國安芯應城ISD應急救援指揮中心參觀考察。中國安芯項目總監劉紅星熱情接待了張處長、趙處長一行，雙方就安全生產ISD建設進行了深入的探討', 'Leaders from Shaanxi & Gansu Administration of Work Safety Visited Anxin-China’s ISD Command Center in Yingcheng', '（Yingcheng,Hubei-Nov. 22nd, 2013）Mr. Zhang Yalong the chief of technology planning department of Shaanxi Administration of Work Safety, and Mr Zhao the director of emergency center of Gansu Administra', '96641385357863_thumb.jpg', 'Public/press/zh/a131212(4).pdf', 'Public/press/en/a131216(1).pdf', 1, '', 1, 0, 1, 1385308800, '2013-11-25 00:00:00'),
(156, '中國安芯應邀參加湖北省安全生產科技工作會議', '11月29日上午，湖北省安全生產科技工作會議如期舉行，湖北省各市（州）安監局分管安全生產科技工作的局領導及安全生產科技示範項目單位負責人出席會議，中國安芯控股有限公司作為安全科技公司的示範單位應邀參與此次會議', 'Anxin-China Attended Hubei Safety Production Technology Working Conference on Invitation', '(Hubei-Nov. 29th, 2013) Hubei safety production technology working conference was successfully held on the morning of Nov. 29th. The participants included related major leaders from all municipal Admi', '63421385968613_thumb.jpg', 'Public/press/zh/a131216(4).pdf', 'Public/press/en/a131216.pdf', 1, '', 1, 0, 1, 1385913600, '2013-12-02 00:00:00'),
(157, '【行業解析】青島中石化輸油管道洩漏爆炸事故•安全重於泰山', '', '[INDUSTRIAL ANALYSIS]Qingdao Sinopec Petroleum Pipeline Leakage and Explosion Unveils Safety is always First', '', '', 'Public/press/zh/a131217(42).pdf', 'Public/press/en/a131217(43).pdf', 3, '', 1, 0, 1, 1386000000, '2013-12-03 00:00:00'),
(159, '【行業解析】深圳光明新區一農貿市場火災 中國安芯解決有方', '', '[INDUSTRIAL ANALYSIS]Anxin-China Provides the Solution for the Fire Accident in Guangming New District, Shenzhen', '', '', 'Public/press/zh/a131213.pdf', 'Public/press/en/a131213.pdf', 3, '', 1, 0, 1, 1386864000, '2013-12-13 00:00:00'),
(160, '江蘇宿遷軟件園鄭書記一行蒞臨中國安芯參觀考察', '2013年12月18日，江蘇宿遷市軟件園黨工委書記、管委會主任鄭路一行蒞臨中國安芯參觀考\r\n察，陪同參與的還有宿遷市招商局長王萬厚、科技創業園管理辦公司主任周翔宇等。中國安芯營\r\n銷中心副總經理黃治偉、銷售總監劉洪波等領導出席並參與洽談。', 'The Leaders from Jiangsu Suqian Municipal Government Visited Anxin-China for Study', '(Shenzhen-December 18, 2013)Zheng Lu the party sectary of Jiangsu Suqian Software\r\nPark, Wang Wanhou the director of Suqian Merchants Administration, Zhou Xiangyu the\r\ndirector of Suqian Technological', '1021387509252_thumb.jpg', 'Public/press/zh/a131220.pdf', 'Public/press/en/a131220.pdf', 1, '', 1, 0, 1, 1387468800, '2013-12-20 00:00:00'),
(161, '中國安芯控股有限公司聖誕派對於香港舉行', '2013 年12 月24 日，時值聖誕前夕，中國安芯控股有限公司聖誕派對在香港總部舉行，中國\r\n安芯主要領導赴港參加此次盛宴。出席此次聖誕派對的人員包括中國安芯內地分部主要領導以及香港總部的員工，派對在溫馨愉快的氛圍中舉行，席間大家談笑風生，相互問候，相互祝福，無不體現著以“仁愛和平”為核心的聖誕精神。', 'Anxin-China Holdings Limited Held the Christmas Party in Its Hong Kong Headquarter', '(Hong Kong-December 24, 2013) Anxin-China Holdings Limited held a party on Christmas eve in its HK headquarter, and the senior leadership from Anxin-China\r\nparticipated in such a grand party.', '40451387940715_thumb.jpg', 'Public/press/zh/a131225.pdf', 'Public/press/en/a131225.pdf', 1, '', 1, 0, 1, 1387900800, '2013-12-25 00:00:00'),
(162, '【行業解析】中國安芯，讓民用安防設備物盡其用', '', '[INDUSTRIAL ANALYSIS]Anxin-China’s iVAS System Cooperates with Civic Security Devices to Ensure the Public Safety', '', '', 'Public/press/zh/a131231.pdf', 'Public/press/en/a131231.pdf', 3, '', 1, 0, 1, 1388419200, '2013-12-31 00:00:00'),
(163, '【行業解析】氨氣洩漏5小時排險，不如防患於未然', '', '[INDUSTRIAL ANALYSIS]Anxin-China’s ISD System Required to Prevent Ammonia Leak', '', '', 'Public/press/zh/a140102(1).pdf', 'Public/press/en/a140102.pdf', 3, '', 1, 0, 1, 1388592000, '2014-01-02 00:00:00'),
(164, '瀋陽化工大學白書記赴中國安芯考察', '暖冬深圳艷陽高照，新年伊始，中國安芯深圳總部迎來了老朋友瀋陽化工大學黨委書記白瑋\r\n先生，校辦主任楊學印先生一行的蒞臨。中國安芯控股有限公司執行董事、副總裁林蘇鵬先生在\r\n公司大會議室接待了白書記一行', 'Secretary Bai from Shenyang University of Chemical Technology Visited Anxin-China for Investigation and Study', '(Shenzhen-January 6,2014) In the beginning of a new year, Mr. Bai Wei, the secretary of the party committee of Shenyang University of Chemical Technology, visited\r\nAnxin-China for investigation and st', '30891388997413_thumb.jpg', 'Public/press/zh/a140106.pdf', 'Public/press/en/a140106.pdf', 1, '', 1, 0, 1, 1388937600, '2014-01-06 00:00:00'),
(166, '中國安芯榮登2014 福布斯中國上市潛力企業100 強前五名', '2014年1月7日，《福布斯》中文版發佈《2014年度中國上市潛力企業100強榜單》，中國安芯控\r\n股有限公司榮獲該榜單第五名', 'Anxin-China Ranked the 5th on the List of 2014 Forbes China''s Most Potential Enterprises Top 100', '(Shanghai- January 7, 2014) Forbes China released the list of 2014 Forbes China’s most\r\npotential enterprises Top 100 , where Anxin-China ranked the 5th. Such a list was made\r\nby Forbes China through', '3441389084065_thumb.jpg', 'Public/press/zh/a140107(1).pdf', 'Public/press/en/a140108.pdf', 1, '', 1, 0, 1, 1389024000, '2014-01-07 00:00:00'),
(167, '安芯數字通過公司“CMMI ML3”複審評估', '2014年1月15日上午11點，深圳市安芯數字發展有限公司順利通過能力CMMI ML3（成熟度模\r\n型集成3級）複審評估。由美國軟件工程研究所(SEI)授權評估師Vinit 博士在對我公司進行為期7\r\n天的審核後認為，整個組織滿足所有適用的關鍵過程域，並向深圳市安芯數字發展有限公司頒發\r\n了CMMI ML3證書。', 'Shenzhen Anxin Passed the Review of "CMMI ML3"', '(Shenzhen-January 15, 2014) Shenzhen Anxin Digital Co., Ltd successfully passed the\r\nreview of “CMMI ML3”(Capability Maturity Model Integration Level 3), an international\r\nauthorized software technolo', '87241389773852_thumb.jpg', 'Public/press/zh/a140115(1).pdf', 'Public/press/en/a140115.pdf', 1, '', 1, 0, 1, 1389715200, '2014-01-15 00:00:00'),
(168, '中國安芯將就“兆誼科技收購事項”召開電話會議', '为了进一步拓展智能监控业务，更快的进入市场庞大的电梯监控领域，中国安芯控股有限公司于2014年2月4日发布了收购荣轩发展有限公司及其全资附属公司普选有限公司及深圳市兆谊科技有限公司全部股权之公告。', 'Anxin-China to hold conference call for Feb.4 acquisition', '　　In order to further expand its ISD business and quickly get into the field of elevator safety monitoring, Anxin-China has announced that it entered into an acquisition agreement with Bloom Zone Limi', 'Public/press/images/92701392115715_thumb.jpg', 'Public/press/zh/a140212(1).pdf', 'Public/press/en/a140212.pdf', 1, '', 1, 0, 1, 1392048000, '2014-02-11 00:00:00'),
(169, '【行業解析】新疆春節連發交通事故·中國安芯ISD 枕戈待旦', '', '[INDUSTRIAL ANALYSIS]Anxin-China’s ISD System to Be Applied in Sinkiang’s Public Transport', '', '', 'Public/press/zh/a140212.pdf', 'Public/press/en/a140212(1).pdf', 3, '', 1, 0, 1, 1392134400, '2014-02-12 00:00:00'),
(170, '【行業解析】中國安芯ISD，堅決杜絕生產安全事故', '', '[INDUSTRIAL ANALYSIS]Anxin-China’s ISD System Prevents the Potential Risks of Safety Production', '', '', 'Public/press/zh/a140218.pdf', 'Public/press/en/a140218.pdf', 3, '', 1, 0, 1, 1392652800, '2014-02-18 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `ax_report_2`
--

DROP TABLE IF EXISTS `ax_report_2`;
CREATE TABLE IF NOT EXISTS `ax_report_2` (
  `id` int(11) NOT NULL auto_increment,
  `a_img` varchar(100) default NULL,
  `a_img_en` varchar(200) NOT NULL COMMENT '年报英文封面',
  `i_img` varchar(255) default NULL,
  `i_img_en` varchar(200) NOT NULL COMMENT '中期英文封面',
  `i_url` varchar(100) default NULL,
  `a_url` varchar(255) default NULL,
  `a_url_en` varchar(50) default NULL,
  `i_url_en` varchar(50) default NULL,
  `create_year` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- 导出表中的数据 `ax_report_2`
--

INSERT INTO `ax_report_2` (`id`, `a_img`, `a_img_en`, `i_img`, `i_img_en`, `i_url`, `a_url`, `a_url_en`, `i_url_en`, `create_year`) VALUES
(4, '2009ar.gif', ' ', '2009ir.gif', ' ', '09ir.pdf', '09ar.pdf', NULL, NULL, 2009),
(5, '2008ar.gif', ' ', '2008ir.gif', ' ', '08ir.pdf', '08ar.pdf', NULL, NULL, 2008),
(6, '2006ar.gif', ' ', '2006ir.gif', ' ', '06ir.pdf', '06ar.pdf', NULL, NULL, 2006),
(7, '2005ar.gif', ' ', '2005ir.gif', ' ', '05ir.pdf', '05ar.pdf', NULL, NULL, 2005),
(8, '2004ar.gif', ' ', '2004ir.gif', ' ', '04ir.pdf', '04ar.pdf', NULL, NULL, 2004),
(15, '2007ar.gif', ' ', '2007ir.gif', ' ', '07ir.pdf', '07ar.pdf', NULL, NULL, 2007),
(16, '2010ar.gif', ' ', '2010ir.gif', ' ', '10ir.pdf', '10ar.pdf', '10ar.pdf', '10ir.pdf', 2010),
(17, '2011ar.gif', ' ', '2011ir.gif', ' ', '11ir.pdf', '11ar.pdf', '11ar.pdf', '11ir.pdf', 2011),
(18, 'a_img_1304192213.jpg', ' ', '2012ir.gif', ' ', '12ir.pdf', 'a2013.pdf', 'a2013_en.pdf', '12ir.pdf', 2012),
(30, NULL, '', 'i_img_zh_1309171636.jpg', 'i_img_en_1309171636.jpg', 'ir2013_zh.pdf', NULL, NULL, 'ir2013_en.pdf', 2013);

-- --------------------------------------------------------

--
-- 表的结构 `ax_session`
--

DROP TABLE IF EXISTS `ax_session`;
CREATE TABLE IF NOT EXISTS `ax_session` (
  `sessid` char(32) NOT NULL,
  `card` char(32) NOT NULL,
  `data` text NOT NULL,
  `atime` int(10) NOT NULL,
  `ip` char(15) NOT NULL,
  PRIMARY KEY  (`sessid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `ax_session`
--

INSERT INTO `ax_session` (`sessid`, `card`, `data`, `atime`, `ip`) VALUES
('6binqerd8cfnv9pue2tcn9pok1', '', '__TOKEN__|s:32:"a657978e617862ad6ee164845a24f692";code|s:4:"VKQS";admin_id|s:7:"adminid";', 1392966316, '183.49.13.158');

-- --------------------------------------------------------

--
-- 表的结构 `ax_sharecapital_2`
--

DROP TABLE IF EXISTS `ax_sharecapital_2`;
CREATE TABLE IF NOT EXISTS `ax_sharecapital_2` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) default NULL,
  `title_en` varchar(255) default NULL,
  `file_url` varchar(100) default NULL,
  `file_url_en` varchar(50) default NULL,
  `create_time` int(11) NOT NULL default '0' COMMENT '时间戳',
  `create_time2` datetime default NULL COMMENT 'datetime格式时间',
  `isshow` tinyint(1) NOT NULL default '1' COMMENT '是否显示',
  `istop` tinyint(1) NOT NULL default '0' COMMENT '是否置顶',
  `orders` smallint(5) NOT NULL default '1' COMMENT '排序',
  `url` varchar(150) NOT NULL default '' COMMENT '定向url地址',
  `click` int(11) NOT NULL default '0' COMMENT '点击率',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=227 ;

--
-- 导出表中的数据 `ax_sharecapital_2`
--

INSERT INTO `ax_sharecapital_2` (`id`, `title`, `title_en`, `file_url`, `file_url_en`, `create_time`, `create_time2`, `isshow`, `istop`, `orders`, `url`, `click`) VALUES
(118, '截至二零零九年五月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 May 2009', 'Public/announcements/zh/a090601.pdf', 'Public/announcements/en/a090601.pdf', 1243785600, '2009-06-01 00:00:00', 1, 0, 1, '', 0),
(117, '截至二零零九年六月三十日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 30 June 2009', 'Public/announcements/zh/a090703.pdf', 'Public/announcements/en/a090703.pdf', 1246550400, '2009-07-03 00:00:00', 1, 0, 1, '', 0),
(116, '截至二零零九年七月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 July 2009', 'Public/announcements/zh/a090803.pdf', 'Public/announcements/en/a090803.pdf', 1249228800, '2009-08-03 00:00:00', 1, 0, 1, '', 0),
(115, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a090825.pdf', 'Public/announcements/en/a090825.pdf', 1251129600, '2009-08-25 00:00:00', 1, 0, 1, '', 0),
(114, '截至二零零九年八月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 August 2009', 'Public/announcements/zh/a090902.pdf', 'Public/announcements/en/a090902.pdf', 1251820800, '2009-09-02 00:00:00', 1, 0, 1, '', 0),
(112, '翌日披露報表', 'Next Day Disclosure Return', 'Public/announcements/zh/a091022.pdf', 'Public/announcements/en/a091022.pdf', 1256140800, '2009-10-22 00:00:00', 1, 0, 1, '', 0),
(113, '截至二零零九年九月三十日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 30 September 2009', 'Public/announcements/zh/a091002.pdf', 'Public/announcements/en/a091002.pdf', 1254412800, '2009-10-02 00:00:00', 1, 0, 1, '', 0),
(111, '(修訂) 翌日披露報表', '(Revised) Next Day Disclosure Returns', 'Public/announcements/zh/a091030.pdf', 'Public/announcements/en/a091030.pdf', 1256832000, '2009-10-30 00:00:00', 1, 0, 1, '', 0),
(110, '(修訂) 截至二零零九年十月三十一日止股份發行人的證券變動月報表', '(Revised) Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 October 2009', 'Public/announcements/zh/a091105.pdf', 'Public/announcements/en/a091105.pdf', 1257350400, '2009-11-05 00:00:00', 1, 0, 1, '', 0),
(109, '截至二零零九年十一月三十日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 30 November 2009', 'Public/announcements/zh/a091203.pdf', 'Public/announcements/en/a091203.pdf', 1259769600, '2009-12-03 00:00:00', 1, 0, 1, '', 0),
(108, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a091223.pdf', 'Public/announcements/en/a091223.pdf', 1261497600, '2009-12-23 00:00:00', 1, 0, 1, '', 0),
(107, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a091228.pdf', 'Public/announcements/en/a091228.pdf', 1261929600, '2009-12-28 00:00:00', 1, 0, 1, '', 0),
(106, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a091229.pdf', 'Public/announcements/en/a091229.pdf', 1262016000, '2009-12-29 00:00:00', 1, 0, 1, '', 0),
(105, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a091230.pdf', 'Public/announcements/en/a091230.pdf', 1262102400, '2009-12-30 00:00:00', 1, 0, 1, '', 0),
(104, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回) ', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a091231.pdf', 'Public/announcements/en/a091231.pdf', 1262188800, '2009-12-31 00:00:00', 1, 0, 1, '', 0),
(103, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a100104.pdf', 'Public/announcements/en/a100104.pdf', 1262534400, '2010-01-04 00:00:00', 1, 0, 1, '', 0),
(102, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a100105.pdf', 'Public/announcements/en/a100105.pdf', 1262620800, '2010-01-05 00:00:00', 1, 0, 1, '', 0),
(101, '截至二零零九年十二月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 December 2009', 'Public/announcements/zh/a100106.pdf', 'Public/announcements/en/a100106.pdf', 1262707200, '2010-01-06 00:00:00', 1, 0, 1, '', 0),
(100, '截至二零一零年一月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 January 2010', 'Public/announcements/zh/a100202.pdf', 'Public/announcements/en/a100202.pdf', 1265040000, '2010-02-02 00:00:00', 1, 0, 1, '', 0),
(99, '截至二零一零年二月二十八日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 28 February 2010', 'Public/announcements/zh/a100302.pdf', 'Public/announcements/en/a100302.pdf', 1267459200, '2010-03-02 00:00:00', 1, 0, 1, '', 0),
(98, '截至二零一零年三月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 March 2010', 'Public/announcements/zh/a100407.pdf', 'Public/announcements/en/a100407.pdf', 1270569600, '2010-04-07 00:00:00', 1, 0, 1, '', 0),
(97, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a100416.pdf', 'Public/announcements/en/a100416.pdf', 1271347200, '2010-04-16 00:00:00', 1, 0, 1, '', 0),
(96, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a100428.pdf', 'Public/announcements/en/a100428.pdf', 1272384000, '2010-04-28 00:00:00', 1, 0, 1, '', 0),
(95, '截至二零一零年四月三十日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 30 April 2010', 'Public/announcements/zh/a100504.pdf', 'Public/announcements/en/a100504.pdf', 1272902400, '2010-05-04 00:00:00', 1, 0, 1, '', 0),
(94, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a100517.pdf', 'Public/announcements/en/a100517.pdf', 1274025600, '2010-05-17 00:00:00', 1, 0, 1, '', 0),
(93, '截至二零一零年五月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 May 2010', 'Public/announcements/zh/a100602.pdf', 'Public/announcements/en/a100602.pdf', 1275408000, '2010-06-02 00:00:00', 1, 0, 1, '', 0),
(92, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a100614.pdf', 'Public/announcements/en/a100614.pdf', 1276444800, '2010-06-14 00:00:00', 1, 0, 1, '', 0),
(91, '截至二零一零年六月三十日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 30 June 2010', 'Public/announcements/zh/a100702.pdf', 'Public/announcements/en/a100702.pdf', 1278000000, '2010-07-02 00:00:00', 1, 0, 1, '', 0),
(90, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a100712.pdf', 'Public/announcements/en/a100712.pdf', 1278864000, '2010-07-12 00:00:00', 1, 0, 1, '', 0),
(119, '截至二零零九年四月三十日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 30 April 2009', 'Public/announcements/zh/a090504.pdf', 'Public/announcements/en/a090504.pdf', 1241366400, '2009-05-04 00:00:00', 1, 0, 1, '', 0),
(120, '截至二零零九年三月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 March 2009', 'Public/announcements/zh/a090401.pdf', 'Public/announcements/en/a090401.pdf', 1238515200, '2009-04-01 00:00:00', 1, 0, 1, '', 0),
(121, '截至二零零九年二月二十八日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 28 February 2009', 'Public/announcements/zh/a090302.pdf', 'Public/announcements/en/a090302.pdf', 1235923200, '2009-03-02 00:00:00', 1, 0, 1, '', 0),
(122, '截至二零零九年一月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 January 2009', 'Public/announcements/zh/a090203.pdf', 'Public/announcements/en/a090203.pdf', 1233590400, '2009-02-03 00:00:00', 1, 0, 1, '', 0),
(123, '截至二零一零年六月三十日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 30 June 2010', 'Public/announcements/zh/a100702.pdf', 'Public/announcements/en/a100702.pdf', 1278002130, '2010-07-02 00:35:30', 1, 0, 1, '', 0),
(124, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a100712.pdf', 'Public/announcements/en/a100712.pdf', 1278866257, '2010-07-12 00:37:37', 1, 0, 1, '', 0),
(125, '截至二零一零年七月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 July 2010', 'Public/announcements/zh/a100802.pdf', 'Public/announcements/en/a100802.pdf', 1280680722, '2010-08-02 00:38:42', 1, 0, 1, '', 0),
(126, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a100819.pdf', 'Public/announcements/en/a100819.pdf', 1282149591, '2010-08-19 00:39:51', 1, 0, 1, '', 0),
(127, '截至二零一零年八月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 August 2010', 'Public/announcements/zh/a100901.pdf', 'Public/announcements/en/a100901.pdf', 1283184000, '2010-08-31 00:00:00', 1, 0, 1, '', 0),
(134, '翌日披露報表 (股份發行人-已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer – changes in issued share capital and / or share buybacks)', 'Public/announcements/zh/a101117.pdf', 'Public/announcements/en/a101117.pdf', 1289923200, '2010-11-17 00:00:00', 1, 0, 1, '', 0),
(129, '截至二零一零年九月三十日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 30 September 2010', 'Public/announcements/zh/a101006.pdf', 'Public/announcements/en/a101006.pdf', 1285776000, '2010-09-30 00:00:00', 1, 0, 1, '', 0),
(133, '截至二零一零年十月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 October 2010', 'Public/announcements/zh/a101101.pdf', 'Public/announcements/en/a101101.pdf', 1288540800, '2010-11-01 00:00:00', 1, 0, 1, '', 0),
(135, '截至二零一零年十一月三十日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 30 November 2010', 'Public/announcements/zh/a101201.pdf', 'Public/announcements/en/a101201.pdf', 1291132800, '2010-12-01 00:00:00', 1, 0, 1, '', 0),
(136, '翌日披露報表 (股份發行人-已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer – changes in issued share capital', 'Public/announcements/zh/a101210.pdf', 'Public/announcements/en/a101210.pdf', 1291910400, '2010-12-10 00:00:00', 1, 0, 1, '', 0),
(137, '截至二零一零年十二月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 December 2010', 'Public/announcements/zh/a110103.pdf', 'Public/announcements/en/a110103.pdf', 1293984000, '2011-01-03 00:00:00', 1, 0, 1, '', 0),
(138, '翌日披露報表 (股份發行人-已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer – changes in issued share capital', 'Public/announcements/zh/a110103a.pdf', 'Public/announcements/en/a110103a.pdf', 1293984000, '2011-01-03 00:00:00', 1, 0, 1, '', 0),
(139, '翌日披露報表 (股份發行人 ── 已發行 股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a110120.pdf', 'Public/announcements/en/a110120.pdf', 1295452800, '2011-01-20 00:00:00', 1, 0, 1, '', 0),
(140, '翌日披露報表 (股份發行人 ── 已發行 股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a110210.pdf', 'Public/announcements/en/a110210.pdf', 1297267200, '2011-02-10 00:00:00', 1, 0, 1, '', 0),
(141, '截至二零一一年二月二十八日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 28 February 2011', 'Public/announcements/zh/a110301.pdf', 'Public/announcements/en/a110301.pdf', 1298908800, '2011-03-01 00:00:00', 1, 0, 1, '', 0),
(142, '截至二零一一年三月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 March 2011', 'Public/announcements/zh/a110407.pdf', 'Public/announcements/en/a110407.pdf', 1302105600, '2011-04-07 00:00:00', 1, 0, 1, '', 0),
(143, '截至二零一一年四月三十日止股份發行人的證券變動月報表 ', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 30 April 2011', 'Public/announcements/zh/a110504.pdf', 'Public/announcements/en/a110504.pdf', 1304491176, '2011-05-04 14:39:36', 1, 0, 1, '', 0),
(144, '翌日披露報表 (股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a110505.pdf', 'Public/announcements/en/a110505.pdf', 1304565917, '2011-05-05 11:25:17', 1, 0, 1, '', 0),
(145, '翌日披露報表 (股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a110512.pdf', 'Public/announcements/en/a110512.pdf', 1305191417, '2011-05-12 17:10:17', 1, 0, 1, '', 0),
(146, '翌日披露報表 (股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a110519.pdf', 'Public/announcements/en/a110519.pdf', 1305776832, '2011-05-19 11:47:12', 1, 0, 1, '', 0),
(147, '截至二零一一年五月三十一日止股份發行人的證券變動月報表 ', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 May 2011', 'Public/announcements/zh/a110601.pdf', 'Public/announcements/en/a110601.pdf', 1306896448, '2011-06-01 10:47:28', 1, 0, 1, '', 0),
(148, '翌日披露报表(股份发行人 ── 已发行 股本变动及/或股份购回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a110608.pdf', 'Public/announcements/en/a110608.pdf', 1307514477, '2011-06-08 14:27:57', 1, 0, 1, '', 0),
(149, '截至二零一一年六月三十日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 30 June 2011', 'Public/announcements/zh/a110706.pdf', 'Public/announcements/en/a110706.pdf', 1309948921, '2011-07-06 18:42:01', 1, 0, 1, '', 0),
(150, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return(Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a20110712.pdf', 'Public/announcements/en/a20110712.pdf', 1310472392, '2011-07-12 20:06:32', 1, 0, 1, '', 0),
(151, '翌日披露報表 (股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a20110722.pdf', 'Public/announcements/en/a20110722.pdf', 1311334392, '2011-07-22 19:33:12', 1, 0, 1, '', 0),
(152, '截至二零一一年七月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 July 2011', 'Public/announcements/zh/a110801.pdf', 'Public/announcements/en/a110801.pdf', 1312188361, '2011-08-01 16:46:01', 1, 0, 1, '', 0),
(153, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return(Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a11081901.pdf', 'Public/announcements/en/a11081901.pdf', 1313750526, '2011-08-19 18:42:06', 1, 0, 1, '', 0),
(154, '截至二零一一年八月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 August 2011', 'Public/announcements/zh/a110907.pdf', 'Public/announcements/en/a110907.pdf', 1315291021, '2011-09-06 14:37:01', 1, 0, 1, '', 0),
(155, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return(Equity issuer - changes in issued share capital and/or share buybacks) ', 'Public/announcements/zh/a110908.pdf', 'Public/announcements/en/a110908.pdf', 1315480464, '2011-09-08 19:14:24', 1, 0, 1, '', 0),
(156, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a11091601.pdf', 'Public/announcements/en/a11091601.pdf', 1316187271, '2011-09-16 23:34:31', 1, 0, 1, '', 0),
(157, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a11091902.pdf', 'Public/announcements/en/a11091902.pdf', 1316441397, '2011-09-19 22:09:57', 1, 0, 1, '', 0),
(158, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a11092102.pdf', 'Public/announcements/en/a11092102.pdf', 1316478534, '2011-09-20 08:28:54', 1, 0, 1, '', 0),
(159, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a11092104.pdf', 'Public/announcements/en/a11092104.pdf', 1316591236, '2011-09-21 15:47:16', 1, 0, 1, '', 0),
(160, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a11092302.pdf', 'Public/announcements/en/a11092302.pdf', 1316745251, '2011-09-23 10:34:11', 1, 0, 1, '', 0),
(161, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a11092601.pdf', 'Public/announcements/en/a11092601.pdf', 1316997154, '2011-09-26 08:32:34', 1, 0, 1, '', 0),
(162, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks) ', 'Public/announcements/zh/a20110930.pdf', 'Public/announcements/en/a20110930.pdf', 1317387987, '2011-09-30 21:06:27', 1, 0, 1, '', 0),
(163, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回) ', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a20111004.pdf', 'Public/announcements/en/a20111004.pdf', 1317648036, '2011-10-03 21:20:36', 1, 0, 1, '', 0),
(164, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a2011100402.pdf', 'Public/announcements/en/a2011100402.pdf', 1317696964, '2011-10-04 10:56:04', 1, 0, 1, '', 0),
(165, '截至二零一一年九月三十日止股份發行人的證券變動月報表 ', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 30 September 2011 ', 'Public/announcements/zh/a2011093003.pdf', 'Public/announcements/en/a2011093003.pdf', 1317868005, '2011-10-06 10:26:45', 1, 0, 1, '', 0),
(166, '截至二零一一年十月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 October 2011 ', 'Public/announcements/zh/2011103101.pdf', 'Public/announcements/en/2011103101.pdf', 1320032731, '2011-10-31 11:45:31', 1, 0, 1, '', 0),
(167, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks) ', 'Public/announcements/zh/a2011112301.pdf', 'Public/announcements/en/a2011112301.pdf', 1322016035, '2011-11-23 10:40:35', 1, 0, 1, '', 0),
(168, '截至二零一一年十一月三十日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 30 November 2011', 'Public/announcements/zh/a11120201.pdf', 'Public/announcements/en/a11120201.pdf', 1322824396, '2011-12-02 19:13:16', 1, 0, 1, '', 0),
(169, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks) ', 'Public/announcements/zh/a11120202.pdf', 'Public/announcements/en/a11120202.pdf', 1322825189, '2011-12-02 19:26:29', 1, 0, 1, '', 0),
(170, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks) ', 'Public/announcements/zh/a11120501.pdf', 'Public/announcements/en/a11120501.pdf', 1323089024, '2011-12-05 20:43:44', 1, 0, 1, '', 0),
(171, '截至二零一一年十二月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 December 2011 ', 'Public/announcements/zh/a20120103.pdf', 'Public/announcements/en/a20120103.pdf', 1325590411, '2012-01-03 19:33:31', 1, 0, 1, '', 0),
(172, '截至二零一二年一月三十一日止股份發行人的證券變動月報表 ', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 January 2012', 'Public/announcements/zh/a20120203.pdf', 'Public/announcements/en/a20120203.pdf', 1328208533, '2012-02-03 02:48:53', 1, 0, 1, '', 0),
(173, '截至二零一二年二月二十九日止股份發行人的證券變動月報表 ', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 29 February 2012 ', 'Public/announcements/zh/a2012030101.pdf', 'Public/announcements/en/a2012030101.pdf', 1330575565, '2012-03-01 12:19:25', 1, 0, 1, '', 0),
(174, '截至二零一二年三月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 March 2012 ', 'Public/announcements/zh/a120331011.pdf', 'Public/announcements/en/a120331011.pdf', 1333617984, '2012-04-05 17:26:24', 1, 0, 1, '', 0),
(175, '截至二零一二年四月三十日止股份發行人的證券變動月報表 ', 'MONTHLY RETURN OF EQUITY LSSUER ON MOVEMENTS IN SECUR ITIES FOR THE MONTH ENDED 30 APRIL 2012 NMENT THEREOF', 'Public/announcements/zh/2012050401.pdf', 'Public/announcements/en/2012050401.pdf', 1336120228, '2012-05-04 16:30:28', 1, 0, 1, '', 0),
(176, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'NEXT DAY DISCLOSURE RETURN (EQUITY ISSUER - CHANGES IN ISSUED SHARE CAPITAL AND/OR SHARE BUYBACKS)', 'Public/announcements/zh/2012050402.pdf', 'Public/announcements/en/2012050402.pdf', 1336121300, '2012-05-04 16:48:20', 1, 0, 1, '', 0),
(177, '截至二零一二年五月三十一日止股份發行人的證券變動月報表 ', 'Monthly Return of Equity Issuer on Movements in Securities for the month ended 31 May 2012 ', 'Public/announcements/zh/20120603.pdf', 'Public/announcements/en/20120603.pdf', 1338816118, '2012-06-04 21:21:58', 1, 0, 1, '', 0),
(178, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回) ', 'NEXT DAY DISCLOSURE RETURN (EQUITY ISSUER - CHANGES IN ISSUED SHARE CAPITAL AND/OR SHARE BUYBACKS)', 'Public/announcements/zh/a20120618.pdf', 'Public/announcements/en/a20120618.pdf', 1340005536, '2012-06-18 15:45:36', 1, 0, 1, '', 0),
(179, '截至二零一二年六月三十日止股份發行人的證券變動月報表 ', 'MONTHLY RETURN OF EQUITY LSSUER ON MOVEMENTS IN SECUR ITIES FOR THE MONTH ENDED 30 JUNE 2012 NMENT THEREOF ', 'Public/announcements/zh/2012063001.pdf', 'Public/announcements/en/2012063001.pdf', 1341307364, '2012-07-03 17:22:44', 1, 0, 1, '', 0),
(180, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'NEXT DAY DISCLOSURE RETURN (EQUITY ISSUER - CHANGES IN ISSUED SHARE CAPITAL AND/OR SHARE BUYBACKS) ', 'Public/announcements/zh/20120711.pdf', 'Public/announcements/en/20120711.pdf', 1341997788, '2012-07-11 17:09:48', 1, 0, 1, '', 0),
(181, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'NEXT DAY DISCLOSURE RETURN (EQUITY ISSUER - CHANGES IN ISSUED SHARE CAPITAL AND/OR SHARE BUYBACKS) ', 'Public/announcements/zh/20120720.pdf', 'Public/announcements/en/20120720.pdf', 1342775242, '2012-07-20 17:07:22', 1, 0, 1, '', 0),
(182, '截至二零一二年七月三十一日止股份發行人的證券變動月報表', 'MONTHLY RETURN OF EQUITY LSSUER ON MOVEMENTS IN SECUR ITIES FOR THE MONTH ENDED 31 JULY 2012 NMENT THEREOF ', 'Public/announcements/zh/20120731.pdf', 'Public/announcements/en/20120731.pdf', 1343907936, '2012-08-02 19:45:36', 1, 0, 1, '', 0),
(183, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'NEXT DAY DISCLOSURE RETURN (EQUITY ISSUER - CHANGES IN ISSUED SHARE CAPITAL AND/OR SHARE BUYBACKS) ', 'Public/announcements/zh/20120809.pdf', 'Public/announcements/en/20120809.pdf', 1344505651, '2012-08-09 17:47:31', 1, 0, 1, '', 0),
(184, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回) ', 'NEXT DAY DISCLOSURE RETURN (EQUITY ISSUER - CHANGES IN ISSUED SHARE CAPITAL AND/OR SHARE BUYBACKS) ', 'Public/announcements/zh/20120820.pdf', 'Public/announcements/en/20120820.pdf', 1345454574, '2012-08-20 17:22:54', 1, 0, 1, '', 0),
(185, '截至二零一二年八月三十一日止股份發行人的證券變動月報表', 'MONTHLY RETURN OF EQUITY LSSUER ON MOVEMENTS IN SECUR ITIES FOR THE MONTH ENDED 31 AUGUST 2012 NMENT THEREOF ', 'Public/announcements/zh/20120905.pdf', 'Public/announcements/en/20120905.pdf', 1346815807, '2012-09-05 11:30:07', 1, 0, 1, '', 0),
(186, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回)', 'NEXT DAY DISCLOSURE RETURN (EQUITY ISSUER - CHANGES IN ISSUED SHARE CAPITAL AND/OR SHARE BUYBACKS) ', 'Public/announcements/zh/20120918.pdf', 'Public/announcements/en/20120918.pdf', 1347956429, '2012-09-18 16:20:29', 1, 0, 1, '', 0),
(187, '截至二零一二年九月三十日止股份發行人的證券變動月報表 ', 'MONTHLY RETURN OF EQUITY LSSUER ON MOVEMENTS IN SECUR ITIES FOR THE MONTH ENDED 30 SEPT 2012 NMENT THEREOF ', 'Public/announcements/zh/a20121008.pdf', 'Public/announcements/en/a20121008.pdf', 1349680608, '2012-10-08 15:16:48', 1, 0, 1, '', 0),
(188, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回) ', 'NEXT DAY DISCLOSURE RETURN (EQUITY ISSUER - CHANGES IN ISSUED SHARE CAPITAL AND/OR SHARE BUYBACKS) ', 'Public/announcements/zh/a20121015.pdf', 'Public/announcements/en/a20121015.pdf', 1350291620, '2012-10-15 17:00:20', 1, 0, 1, '', 0),
(189, '截至二零一二年十月三十一日止股份發行人的證券變動月報表 ', 'MONTHLY RETURN OF EQUITY LSSUER ON MOVEMENTS IN SECUR ITIES FOR THE MONTH ENDED 31 OCT 2012 NMENT THEREOF ', 'Public/announcements/zh/a20121031.pdf', 'Public/announcements/en/a20121031.pdf', 1351758107, '2012-11-01 16:21:47', 1, 0, 1, '', 0),
(190, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回) ', 'NEXT DAY DISCLOSURE RETURN (EQUITY ISSUER - CHANGES IN ISSUED SHARE CAPITAL AND/OR SHARE BUYBACKS) ', 'Public/announcements/zh/20121121.pdf', 'Public/announcements/en/20121121.pdf', 1353488474, '2012-11-21 17:01:14', 1, 0, 1, '', 0),
(191, '截至二零一二年十一月三十日止股份發行人的證券變動月報表 ', 'MONTHLY RETURN OF EQUITY LSSUER ON MOVEMENTS IN SECUR ITIES FOR THE MONTH ENDED 30 Nov 2012 NMENT THEREOF ', 'Public/announcements/zh/a20121130.pdf', 'Public/announcements/en/a20121130.pdf', 1354524658, '2012-12-03 16:50:58', 1, 0, 1, '', 0),
(192, '翌日披露報表(股份發行人──已發行股本變動及/或股份購回) ', 'NEXT DAY DISCLOSURE RETURN (EQUITY ISSUER - CHANGES IN ISSUED SHARE CAPITAL AND/OR SHARE BUYBACKS) ', 'Public/announcements/zh/20121203.pdf', 'Public/announcements/en/20121203.pdf', 1354524734, '2012-12-03 16:52:14', 1, 0, 1, '', 0),
(193, '截至二零一二年十二月三十一日止股份發行人的證券變動月報表 ', 'MONTHLY RETURN OF EQUITY ISSUER ON MOVEMENTS IN SECUR ITIES FOR THE MONTH ENDED 31 Dec 2012 NMENT THEREOF ', 'Public/announcements/zh/20130104.pdf', 'Public/announcements/en/20130104.pdf', 1357283251, '2013-01-04 15:07:31', 1, 0, 1, '', 0),
(194, '翌日披露报表（股份发行人-已发行股本变动及/或股份回购）', 'Next Day Disclosure Return(Equity Issuer-Chages in Issued Share Capital and /or Share Buybacks)', 'Public/announcements/zh/a20130124001.pdf', 'Public/announcements/en/a20130124001.pdf', 1359035916, '2013-01-24 21:58:36', 1, 0, 1, '', 0),
(195, '截至二零一三年一月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities For the month ended', 'Public/announcements/zh/a20130204001.pdf', 'Public/announcements/en/a20130204001.pdf', 1359982192, '2013-02-04 20:49:52', 1, 0, 1, '', 0),
(196, '翌日披露报表 (股份发行人──已发行股本变动及/或股份购回)', 'Next Day Disclosure Return (Equity issuer - changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a20130215001.pdf', 'Public/announcements/en/a20130215001.pdf', 1360929453, '2013-02-15 19:57:33', 1, 0, 1, '', 0),
(197, '截至二零一三年二月二十八日止股份發行人的證券變動月報表 ', 'Monthly Return of Equity Issuer on Movements in Securities For the month ended ', 'Public/announcements/zh/ax20130301001.pdf', 'Public/announcements/en/ax20130301001.pdf', 1362143607, '2013-03-01 21:13:27', 1, 0, 1, '', 0),
(198, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a20130320.pdf', 'Public/announcements/en/a20130320.pdf', 1363780729, '2013-03-20 19:58:49', 1, 0, 1, '', 0),
(200, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks) ', 'Public/announcements/zh/a130322.pdf', 'Public/announcements/en/a130322.pdf', 1363881600, '2013-03-22 00:00:00', 1, 0, 1, '', 0),
(201, '截至二零一三年三月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities For the month ended ', 'Public/announcements/zh/a130403.pdf', 'Public/announcements/en/a130403.pdf', 1364918400, '2013-04-03 00:00:00', 1, 0, 1, '', 0),
(217, '截至二零一三年八月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities For the month ended', 'Public/announcements/zh/a130902.pdf', 'Public/announcements/en/a130902.pdf', 1378051200, '2013-09-02 00:00:00', 1, 0, 1, '', 0),
(205, '截至二零一三年五月三日止股份發行人的證券變動月報表 ', 'Monthly Return of Equity Issuer on Movements in Securities For the month ended ', 'Public/announcements/zh/a130503(1).pdf', 'Public/announcements/en/a130503(1).pdf', 1367510400, '2013-05-03 00:00:00', 1, 0, 1, '', 0),
(206, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a130527.pdf', 'Public/announcements/en/a130527.pdf', 1369584000, '2013-05-27 00:00:00', 1, 0, 1, '', 0),
(207, '截至二零一三年五月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities For the month ended ', 'Public/announcements/zh/a130807(2).pdf', 'Public/announcements/en/a130807(2).pdf', 1370188800, '2013-06-03 00:00:00', 1, 0, 1, '', 0),
(208, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a130618.pdf', 'Public/announcements/en/a130618.pdf', 1371484800, '2013-06-18 00:00:00', 1, 0, 1, '', 0),
(209, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a130626.pdf', 'Public/announcements/en/a130626.pdf', 1372176000, '2013-06-26 00:00:00', 1, 0, 1, '', 0),
(216, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a130830.pdf', 'Public/announcements/en/a130906.pdf', 1377792000, '2013-08-30 00:00:00', 1, 0, 1, '', 0),
(211, '截至二零一三年六月三十日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities For the month ended', 'Public/announcements/zh/a130807(1).pdf', 'Public/announcements/en/a130807(1).pdf', 1372953600, '2013-07-05 00:00:00', 1, 0, 1, '', 0),
(212, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a130716.pdf', 'Public/announcements/en/a130716.pdf', 1373904000, '2013-07-16 00:00:00', 1, 0, 1, '', 0),
(213, '截至二零一三年七月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities For the month ended', 'Public/announcements/zh/a130807.pdf', 'Public/announcements/en/a130807.pdf', 1375286400, '2013-08-01 00:00:00', 1, 0, 1, '', 0),
(214, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a130801(1).pdf', 'Public/announcements/en/a130801(1).pdf', 1375286400, '2013-08-01 00:00:00', 1, 0, 1, '', 0),
(215, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a130815.pdf', 'Public/announcements/en/a130815.pdf', 1376496000, '2013-08-15 00:00:00', 1, 0, 1, '', 0),
(218, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a130906.pdf', 'Public/announcements/en/a130906.pdf', 1378396800, '2013-09-06 00:00:00', 1, 0, 1, '', 0),
(219, '截至二零一三年九月三十日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities For the month ended', 'Public/announcements/zh/a131003.pdf', 'Public/announcements/en/a131003.pdf', 1380729600, '2013-10-03 00:00:00', 1, 0, 1, '', 0),
(220, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a131004.pdf', 'Public/announcements/en/a131004.pdf', 1380816000, '2013-10-04 00:00:00', 1, 0, 1, '', 0),
(221, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a131018.pdf', 'Public/announcements/en/a131018.pdf', 1382025600, '2013-10-18 00:00:00', 1, 0, 1, '', 0),
(222, '翌日披露報表 (股份發行人 - 已發行股本變動及/或股份購回)', 'Next Day Disclosure Return (Equity issuer-changes in issued share capital and/or share buybacks)', 'Public/announcements/zh/a131022.pdf', 'Public/announcements/en/a131022.pdf', 1382371200, '2013-10-22 00:00:00', 1, 0, 1, '', 0),
(223, '截至二零一三年十月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities For the month ended', 'Public/announcements/zh/a131104.pdf', 'Public/announcements/en/a131104.pdf', 1383494400, '2013-11-04 00:00:00', 1, 0, 1, '', 0),
(224, '截至二零一三年十一月三十日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities For the month ended', 'Public/announcements/zh/a131203.pdf', 'Public/announcements/en/a131203.pdf', 1386000000, '2013-12-03 00:00:00', 1, 0, 1, '', 0),
(225, '截至二零一三年十二月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities For the month ended', 'Public/announcements/zh/a140106.pdf', 'Public/announcements/en/a140106.pdf', 1388937600, '2014-01-06 00:00:00', 1, 0, 1, '', 0),
(226, '截至二零一四年一月三十一日止股份發行人的證券變動月報表', 'Monthly Return of Equity Issuer on Movements in Securities For the month ended', 'Public/announcements/zh/a140206.pdf', 'Public/announcements/en/a140206.pdf', 1391616000, '2014-02-06 00:00:00', 1, 0, 1, '', 0);
