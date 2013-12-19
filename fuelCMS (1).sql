-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2013 at 11:45 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.6-1ubuntu1.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fuelCMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `fuel_archives`
--

CREATE TABLE IF NOT EXISTS `fuel_archives` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(10) unsigned NOT NULL,
  `table_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `version` smallint(5) unsigned NOT NULL,
  `version_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `archived_user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `fuel_archives`
--

INSERT INTO `fuel_archives` (`id`, `ref_id`, `table_name`, `data`, `version`, `version_timestamp`, `archived_user_id`) VALUES
(1, 1, 'fuel_pages', 'a:9:{s:2:"id";i:1;s:8:"location";s:21:"FUEL-CMS-master/about";s:6:"layout";s:4:"main";s:9:"published";s:3:"yes";s:5:"cache";s:3:"yes";s:10:"date_added";s:19:"2013-11-11 01:46:57";s:13:"last_modified";s:19:"2013-11-11 01:46:57";s:16:"last_modified_by";s:0:"";s:9:"variables";a:6:{s:4:"copy";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:4:"copy";s:4:"type";s:6:"string";}s:10:"page_title";a:4:{s:7:"page_id";s:1:"1";s:4:"name";s:10:"page_title";s:5:"value";s:5:"about";s:4:"type";s:6:"string";}s:16:"meta_description";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:16:"meta_description";s:4:"type";s:6:"string";}s:13:"meta_keywords";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:13:"meta_keywords";s:4:"type";s:6:"string";}s:4:"body";a:4:{s:7:"page_id";s:1:"1";s:4:"name";s:4:"body";s:5:"value";s:8:"About Us";s:4:"type";s:6:"string";}s:10:"body_class";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:10:"body_class";s:4:"type";s:6:"string";}}}', 1, '2013-11-11 09:46:57', 1),
(2, 1, 'fuel_pages', 'a:9:{s:2:"id";s:1:"1";s:8:"location";s:6:"/about";s:6:"layout";s:4:"main";s:9:"published";s:3:"yes";s:5:"cache";s:3:"yes";s:10:"date_added";s:19:"2013-11-11 01:46:57";s:13:"last_modified";s:19:"2013-11-11 01:47:25";s:16:"last_modified_by";s:1:"1";s:9:"variables";a:6:{s:4:"copy";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:4:"copy";s:4:"type";s:6:"string";}s:10:"page_title";a:4:{s:7:"page_id";s:1:"1";s:4:"name";s:10:"page_title";s:5:"value";s:5:"about";s:4:"type";s:6:"string";}s:16:"meta_description";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:16:"meta_description";s:4:"type";s:6:"string";}s:13:"meta_keywords";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:13:"meta_keywords";s:4:"type";s:6:"string";}s:4:"body";a:4:{s:7:"page_id";s:1:"1";s:4:"name";s:4:"body";s:5:"value";s:8:"About Us";s:4:"type";s:6:"string";}s:10:"body_class";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:10:"body_class";s:4:"type";s:6:"string";}}}', 2, '2013-11-11 09:47:25', 1),
(3, 1, 'fuel_pages', 'a:9:{s:2:"id";s:1:"1";s:8:"location";s:5:"about";s:6:"layout";s:4:"main";s:9:"published";s:3:"yes";s:5:"cache";s:3:"yes";s:10:"date_added";s:19:"2013-11-11 01:46:57";s:13:"last_modified";s:19:"2013-11-11 01:47:33";s:16:"last_modified_by";s:1:"1";s:9:"variables";a:6:{s:4:"copy";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:4:"copy";s:4:"type";s:6:"string";}s:10:"page_title";a:4:{s:7:"page_id";s:1:"1";s:4:"name";s:10:"page_title";s:5:"value";s:5:"about";s:4:"type";s:6:"string";}s:16:"meta_description";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:16:"meta_description";s:4:"type";s:6:"string";}s:13:"meta_keywords";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:13:"meta_keywords";s:4:"type";s:6:"string";}s:4:"body";a:4:{s:7:"page_id";s:1:"1";s:4:"name";s:4:"body";s:5:"value";s:8:"About Us";s:4:"type";s:6:"string";}s:10:"body_class";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:10:"body_class";s:4:"type";s:6:"string";}}}', 3, '2013-11-11 09:47:33', 1),
(4, 1, 'fuel_pages', 'a:9:{s:2:"id";s:1:"1";s:8:"location";s:13:"company/about";s:6:"layout";s:4:"main";s:9:"published";s:3:"yes";s:5:"cache";s:3:"yes";s:10:"date_added";s:19:"2013-11-11 01:46:57";s:13:"last_modified";s:19:"2013-11-11 01:47:44";s:16:"last_modified_by";s:1:"1";s:9:"variables";a:6:{s:4:"copy";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:4:"copy";s:4:"type";s:6:"string";}s:10:"page_title";a:4:{s:7:"page_id";s:1:"1";s:4:"name";s:10:"page_title";s:5:"value";s:5:"about";s:4:"type";s:6:"string";}s:16:"meta_description";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:16:"meta_description";s:4:"type";s:6:"string";}s:13:"meta_keywords";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:13:"meta_keywords";s:4:"type";s:6:"string";}s:4:"body";a:4:{s:7:"page_id";s:1:"1";s:4:"name";s:4:"body";s:5:"value";s:8:"About Us";s:4:"type";s:6:"string";}s:10:"body_class";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:10:"body_class";s:4:"type";s:6:"string";}}}', 4, '2013-11-11 09:47:44', 1),
(5, 1, 'fuel_pages', 'a:9:{s:2:"id";s:1:"1";s:8:"location";s:5:"about";s:6:"layout";s:4:"main";s:9:"published";s:3:"yes";s:5:"cache";s:3:"yes";s:10:"date_added";s:19:"2013-11-11 01:46:57";s:13:"last_modified";s:19:"2013-11-11 01:49:07";s:16:"last_modified_by";s:1:"1";s:9:"variables";a:6:{s:4:"copy";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:4:"copy";s:4:"type";s:6:"string";}s:10:"page_title";a:4:{s:7:"page_id";s:1:"1";s:4:"name";s:10:"page_title";s:5:"value";s:5:"about";s:4:"type";s:6:"string";}s:16:"meta_description";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:16:"meta_description";s:4:"type";s:6:"string";}s:13:"meta_keywords";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:13:"meta_keywords";s:4:"type";s:6:"string";}s:4:"body";a:4:{s:7:"page_id";s:1:"1";s:4:"name";s:4:"body";s:5:"value";s:8:"About Us";s:4:"type";s:6:"string";}s:10:"body_class";a:3:{s:7:"page_id";s:1:"1";s:4:"name";s:10:"body_class";s:4:"type";s:6:"string";}}}', 5, '2013-11-11 09:49:07', 1),
(6, 1, 'fuel_blog_posts', 'a:12:{s:2:"id";i:1;s:5:"title";s:9:"New Posts";s:9:"permalink";s:9:"new-posts";s:7:"content";s:12:"hi new posts";s:10:"formatting";s:15:"auto_typography";s:7:"excerpt";s:0:"";s:9:"author_id";s:0:"";s:6:"sticky";s:2:"no";s:14:"allow_comments";s:3:"yes";s:10:"date_added";s:19:"2013-11-15 00:00:00";s:13:"last_modified";s:19:"2013-11-15 01:38:03";s:9:"published";s:3:"yes";}', 1, '2013-11-15 09:38:03', 1),
(7, 1, 'fuel_blog_comments', 'a:13:{s:2:"id";s:1:"1";s:7:"post_id";s:1:"1";s:9:"parent_id";s:1:"0";s:9:"author_id";s:1:"0";s:11:"author_name";s:5:"sefsf";s:12:"author_email";s:14:"akee@gmail.com";s:14:"author_website";s:0:"";s:9:"author_ip";s:9:"127.0.0.1";s:7:"is_spam";s:2:"no";s:7:"content";s:6:"sfsfsf";s:9:"published";s:3:"yes";s:10:"date_added";s:19:"2013-11-15 02:20:06";s:13:"last_modified";s:19:"2013-11-15 02:20:52";}', 1, '2013-11-15 10:20:52', 1),
(8, 2, 'fuel_blog_posts', 'a:12:{s:2:"id";i:2;s:5:"title";s:24:"Hi this another new post";s:9:"permalink";s:24:"hi-this-another-new-post";s:7:"content";s:1122:"Virtually every good (and bad) thing you can say about Apple''s iPad Air is applicable to the new iPad mini with Retina display. The 7.8-inch tablet''s second edition is virtually identical inside and out to the 9.7-inch iPad Air, with the obvious exception of size and weight.\n\nBoth tablets have a powerful, dual-core A7 chip, an M7 motion coprocessor, a 1.2-megapixel, 720p FaceTime camera, a 5-megapixel, 1080p iSight camera, MIMO Wi-Fi technology, a single radio for all bands of LTE (if you buy the 4G model) and Retina display.\n\nThe iPad mini Retina also has the same resolution as the iPad Air, but naturally, in a smaller frame. What happens when you squeeze a 2,048 x 1,536-pixel resolution into a 7.9-inch display? You get a whopping 326 pixels per inch. In comparison, the iPad Air only offers 264 ppi. The mini’s resolution actually beats Amazon''s Kindle Fire HDX 7-inch, which boasts 323 ppi in its 1,920 x 1,200-pixel resolution screen.\n\nOf course, if you’re counting a few pixels, you may be missing the big picture, which is that all of these new tablets have high-resolution and very attractive screens.";s:10:"formatting";s:15:"auto_typography";s:7:"excerpt";s:1122:"Virtually every good (and bad) thing you can say about Apple''s iPad Air is applicable to the new iPad mini with Retina display. The 7.8-inch tablet''s second edition is virtually identical inside and out to the 9.7-inch iPad Air, with the obvious exception of size and weight.\n\nBoth tablets have a powerful, dual-core A7 chip, an M7 motion coprocessor, a 1.2-megapixel, 720p FaceTime camera, a 5-megapixel, 1080p iSight camera, MIMO Wi-Fi technology, a single radio for all bands of LTE (if you buy the 4G model) and Retina display.\n\nThe iPad mini Retina also has the same resolution as the iPad Air, but naturally, in a smaller frame. What happens when you squeeze a 2,048 x 1,536-pixel resolution into a 7.9-inch display? You get a whopping 326 pixels per inch. In comparison, the iPad Air only offers 264 ppi. The mini’s resolution actually beats Amazon''s Kindle Fire HDX 7-inch, which boasts 323 ppi in its 1,920 x 1,200-pixel resolution screen.\n\nOf course, if you’re counting a few pixels, you may be missing the big picture, which is that all of these new tablets have high-resolution and very attractive screens.";s:9:"author_id";s:1:"1";s:6:"sticky";s:2:"no";s:14:"allow_comments";s:3:"yes";s:10:"date_added";s:19:"2013-11-18 22:46:00";s:13:"last_modified";s:19:"2013-11-18 22:50:16";s:9:"published";s:3:"yes";}', 1, '2013-11-19 06:50:16', 1),
(9, 1, 'fuel_blog_comments', 'a:13:{s:2:"id";s:1:"1";s:7:"post_id";s:1:"2";s:9:"parent_id";s:1:"0";s:9:"author_id";s:1:"0";s:11:"author_name";s:5:"akeel";s:12:"author_email";s:22:"akeel.munshi@gmail.com";s:14:"author_website";s:0:"";s:9:"author_ip";s:9:"127.0.0.1";s:7:"is_spam";s:2:"no";s:7:"content";s:26:"hi this is good blog topic";s:9:"published";s:3:"yes";s:10:"date_added";s:19:"2013-11-18 23:37:12";s:13:"last_modified";s:19:"2013-11-18 23:37:46";}', 2, '2013-11-19 07:37:46', 1),
(10, 3, 'fuel_blog_posts', 'a:12:{s:2:"id";i:3;s:5:"title";s:18:"new post by seller";s:9:"permalink";s:18:"new-post-by-seller";s:7:"content";s:18:"new post by seller";s:10:"formatting";s:15:"auto_typography";s:7:"excerpt";s:0:"";s:9:"author_id";s:1:"2";s:6:"sticky";s:2:"no";s:14:"allow_comments";s:3:"yes";s:10:"date_added";s:19:"2013-11-19 00:36:00";s:13:"last_modified";s:19:"2013-11-19 00:37:17";s:9:"published";s:3:"yes";}', 1, '2013-11-19 08:37:17', 2),
(11, 2, 'fuel_navigation', 'a:11:{s:2:"id";i:2;s:8:"group_id";s:1:"1";s:8:"location";s:4:"Home";s:7:"nav_key";s:4:"Home";s:5:"label";s:4:"Home";s:9:"parent_id";s:1:"0";s:10:"precedence";s:1:"0";s:10:"attributes";s:0:"";s:8:"selected";s:0:"";s:6:"hidden";s:2:"no";s:9:"published";s:3:"yes";}', 1, '2013-11-19 11:54:34', 1),
(12, 2, 'fuel_pages', 'a:9:{s:2:"id";i:2;s:8:"location";s:4:"Home";s:6:"layout";s:4:"main";s:9:"published";s:3:"yes";s:5:"cache";s:3:"yes";s:10:"date_added";s:19:"2013-11-19 04:58:04";s:13:"last_modified";s:19:"2013-11-19 04:58:04";s:16:"last_modified_by";s:0:"";s:9:"variables";a:6:{s:4:"copy";a:3:{s:7:"page_id";s:1:"2";s:4:"name";s:4:"copy";s:4:"type";s:6:"string";}s:10:"page_title";a:4:{s:7:"page_id";s:1:"2";s:4:"name";s:10:"page_title";s:5:"value";s:4:"Home";s:4:"type";s:6:"string";}s:16:"meta_description";a:3:{s:7:"page_id";s:1:"2";s:4:"name";s:16:"meta_description";s:4:"type";s:6:"string";}s:13:"meta_keywords";a:3:{s:7:"page_id";s:1:"2";s:4:"name";s:13:"meta_keywords";s:4:"type";s:6:"string";}s:4:"body";a:4:{s:7:"page_id";s:1:"2";s:4:"name";s:4:"body";s:5:"value";s:6:"sfsfsf";s:4:"type";s:6:"string";}s:10:"body_class";a:3:{s:7:"page_id";s:1:"2";s:4:"name";s:10:"body_class";s:4:"type";s:6:"string";}}}', 1, '2013-11-19 12:58:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fuel_blocks`
--

CREATE TABLE IF NOT EXISTS `fuel_blocks` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `view` text COLLATE utf8_unicode_ci NOT NULL,
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `date_added` datetime DEFAULT NULL,
  `last_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fuel_blog_categories`
--

CREATE TABLE IF NOT EXISTS `fuel_blog_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permalink` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'If left blank, the permalink will automatically be created for you.',
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permalink` (`permalink`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fuel_blog_categories`
--

INSERT INTO `fuel_blog_categories` (`id`, `name`, `permalink`, `published`) VALUES
(1, 'Uncategorized', 'uncategorized', 'yes'),
(2, 'iPad Mini', 'ipad-mini', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_blog_comments`
--

CREATE TABLE IF NOT EXISTS `fuel_blog_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  `author_id` int(10) unsigned NOT NULL,
  `author_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_ip` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `is_spam` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `date_added` datetime NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fuel_blog_comments`
--

INSERT INTO `fuel_blog_comments` (`id`, `post_id`, `parent_id`, `author_id`, `author_name`, `author_email`, `author_website`, `author_ip`, `is_spam`, `content`, `published`, `date_added`, `last_modified`) VALUES
(1, 2, 0, 0, 'akeel', 'akeel.munshi@gmail.com', '', '127.0.0.1', 'no', 'hi this is good blog topic', 'yes', '2013-11-18 23:37:12', '2013-11-18 18:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_blog_links`
--

CREATE TABLE IF NOT EXISTS `fuel_blog_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `target` enum('blank','self','parent') DEFAULT 'blank',
  `description` varchar(100) DEFAULT NULL,
  `precedence` int(11) NOT NULL DEFAULT '0',
  `published` enum('yes','no') DEFAULT 'yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fuel_blog_posts`
--

CREATE TABLE IF NOT EXISTS `fuel_blog_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permalink` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'This is the last part of the url string. If left blank, the permalink will automatically be created for you.',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `content_filtered` text COLLATE utf8_unicode_ci NOT NULL,
  `formatting` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'A condensed version of the content',
  `author_id` int(10) unsigned NOT NULL COMMENT 'If left blank, you will assumed be the author.',
  `sticky` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `allow_comments` enum('yes','no') COLLATE utf8_unicode_ci DEFAULT 'no',
  `date_added` datetime DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permalink` (`permalink`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fuel_blog_posts`
--

INSERT INTO `fuel_blog_posts` (`id`, `title`, `permalink`, `content`, `content_filtered`, `formatting`, `excerpt`, `author_id`, `sticky`, `allow_comments`, `date_added`, `last_modified`, `published`) VALUES
(1, 'New Posts', 'new-posts', 'hi new posts', 'hi new posts', 'auto_typography', '', 0, 'no', 'yes', '2013-11-15 00:00:00', '2013-11-14 20:08:03', 'yes'),
(2, 'Hi this another new post', 'hi-this-another-new-post', 'Virtually every good (and bad) thing you can say about Apple''s iPad Air is applicable to the new iPad mini with Retina display. The 7.8-inch tablet''s second edition is virtually identical inside and out to the 9.7-inch iPad Air, with the obvious exception of size and weight.\n\nBoth tablets have a powerful, dual-core A7 chip, an M7 motion coprocessor, a 1.2-megapixel, 720p FaceTime camera, a 5-megapixel, 1080p iSight camera, MIMO Wi-Fi technology, a single radio for all bands of LTE (if you buy the 4G model) and Retina display.\n\nThe iPad mini Retina also has the same resolution as the iPad Air, but naturally, in a smaller frame. What happens when you squeeze a 2,048 x 1,536-pixel resolution into a 7.9-inch display? You get a whopping 326 pixels per inch. In comparison, the iPad Air only offers 264 ppi. The mini’s resolution actually beats Amazon''s Kindle Fire HDX 7-inch, which boasts 323 ppi in its 1,920 x 1,200-pixel resolution screen.\n\nOf course, if you’re counting a few pixels, you may be missing the big picture, which is that all of these new tablets have high-resolution and very attractive screens.', 'Virtually every good (and bad) thing you can say about Apple''s iPad Air is applicable to the new iPad mini with Retina display. The 7.8-inch tablet''s second edition is virtually identical inside and out to the 9.7-inch iPad Air, with the obvious exception of size and weight.\n\nBoth tablets have a powerful, dual-core A7 chip, an M7 motion coprocessor, a 1.2-megapixel, 720p FaceTime camera, a 5-megapixel, 1080p iSight camera, MIMO Wi-Fi technology, a single radio for all bands of LTE (if you buy the 4G model) and Retina display.\n\nThe iPad mini Retina also has the same resolution as the iPad Air, but naturally, in a smaller frame. What happens when you squeeze a 2,048 x 1,536-pixel resolution into a 7.9-inch display? You get a whopping 326 pixels per inch. In comparison, the iPad Air only offers 264 ppi. The mini’s resolution actually beats Amazon''s Kindle Fire HDX 7-inch, which boasts 323 ppi in its 1,920 x 1,200-pixel resolution screen.\n\nOf course, if you’re counting a few pixels, you may be missing the big picture, which is that all of these new tablets have high-resolution and very attractive screens.', 'auto_typography', 'Virtually every good (and bad) thing you can say about Apple''s iPad Air is applicable to the new iPad mini with Retina display. The 7.8-inch tablet''s second edition is virtually identical inside and out to the 9.7-inch iPad Air, with the obvious exception of size and weight.\n\nBoth tablets have a powerful, dual-core A7 chip, an M7 motion coprocessor, a 1.2-megapixel, 720p FaceTime camera, a 5-megapixel, 1080p iSight camera, MIMO Wi-Fi technology, a single radio for all bands of LTE (if you buy the 4G model) and Retina display.\n\nThe iPad mini Retina also has the same resolution as the iPad Air, but naturally, in a smaller frame. What happens when you squeeze a 2,048 x 1,536-pixel resolution into a 7.9-inch display? You get a whopping 326 pixels per inch. In comparison, the iPad Air only offers 264 ppi. The mini’s resolution actually beats Amazon''s Kindle Fire HDX 7-inch, which boasts 323 ppi in its 1,920 x 1,200-pixel resolution screen.\n\nOf course, if you’re counting a few pixels, you may be missing the big picture, which is that all of these new tablets have high-resolution and very attractive screens.', 1, 'no', 'yes', '2013-11-18 22:46:00', '2013-11-18 18:13:11', 'yes'),
(3, 'new post by seller', 'new-post-by-seller', 'new post by seller', 'new post by seller', 'auto_typography', '', 2, 'no', 'yes', '2013-11-19 00:36:00', '2013-11-18 19:07:17', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_blog_posts_to_categories`
--

CREATE TABLE IF NOT EXISTS `fuel_blog_posts_to_categories` (
  `post_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`post_id`,`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fuel_blog_posts_to_categories`
--

INSERT INTO `fuel_blog_posts_to_categories` (`post_id`, `category_id`) VALUES
(1, 1),
(2, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fuel_blog_settings`
--

CREATE TABLE IF NOT EXISTS `fuel_blog_settings` (
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fuel_blog_settings`
--

INSERT INTO `fuel_blog_settings` (`name`, `value`) VALUES
('title', 'My Blog'),
('uri', 'blog/'),
('theme_layout', 'blog'),
('theme_path', 'themes/default/'),
('theme_module', 'blog'),
('use_cache', '0'),
('cache_ttl', '3600'),
('per_page', '2'),
('description', ''),
('use_captchas', '1'),
('monitor_comments', '1'),
('save_spam', '1'),
('allow_comments', '1'),
('akismet_api_key', ''),
('comments_time_limit', ''),
('multiple_comment_submission_time_limit', '30'),
('asset_upload_path', 'images/blog/');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_blog_users`
--

CREATE TABLE IF NOT EXISTS `fuel_blog_users` (
  `fuel_user_id` int(10) unsigned NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `avatar_image` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `date_added` datetime DEFAULT NULL,
  `active` enum('yes','no') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`fuel_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fuel_blog_users`
--

INSERT INTO `fuel_blog_users` (`fuel_user_id`, `display_name`, `website`, `about`, `avatar_image`, `twitter`, `facebook`, `date_added`, `active`) VALUES
(1, 'Admin', '', '', '', '', '', '2013-11-15 01:37:51', 'yes'),
(2, 'akeel munshi', '', '', '', '', '', '2013-11-19 00:37:17', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_logs`
--

CREATE TABLE IF NOT EXISTS `fuel_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `fuel_logs`
--

INSERT INTO `fuel_logs` (`id`, `entry_date`, `user_id`, `message`) VALUES
(1, '2013-11-11 01:47:25', 1, 'Pages item <em>about</em> edited'),
(2, '2013-11-11 01:47:33', 1, 'Pages item <em>about</em> edited'),
(3, '2013-11-11 01:47:44', 1, 'Pages item <em>company/about</em> edited'),
(4, '2013-11-11 01:49:07', 1, 'Pages item <em>about</em> edited'),
(5, '2013-11-15 01:38:03', 1, 'Posts item <em>New Posts</em> edited'),
(6, '2013-11-15 02:20:52', 1, 'Comments item <em>sefsf</em> edited'),
(7, '2013-11-18 22:50:16', 1, 'Posts item <em>Hi this another new post</em> edited'),
(8, '2013-11-18 23:37:46', 1, 'Comments item <em>akeel</em> edited'),
(9, '2013-11-18 23:43:11', 1, 'Posts item <em>Hi this another new post</em> edited'),
(10, '2013-11-19 00:36:09', 1, 'Users item <em>seller_1@gmail.com</em> edited'),
(11, '2013-11-19 00:37:17', 2, 'Posts item <em>new post by seller</em> edited'),
(12, '2013-11-19 00:39:29', 1, 'Users item <em>seller_1@gmail.com</em> edited'),
(13, '2013-11-19 00:39:39', 1, 'Users item <em>seller_1@gmail.com</em> edited'),
(14, '2013-11-19 03:54:34', 1, 'Navigation item <em>Home</em> edited'),
(15, '2013-11-19 19:10:13', 1, 'Multiple module navigation data deleted'),
(16, '2013-11-19 19:10:33', 1, 'Multiple module pages data deleted');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_navigation`
--

CREATE TABLE IF NOT EXISTS `fuel_navigation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(5) unsigned NOT NULL DEFAULT '1',
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The part of the path after the domain name that you want the link to go to (e.g. comany/about)',
  `nav_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The nav key is a friendly ID that you can use for setting the selected state. If left blank, a default value will be set for you',
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The name you want to appear in the menu',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Used for creating menu hierarchies. No value means it is a root level menu item',
  `precedence` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'The higher the number, the greater the precedence and farther up the list the navigational element will appear',
  `attributes` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Extra attributes that can be used for navigation implementation',
  `selected` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The pattern to match for the active state. Most likely you leave this field blank',
  `hidden` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'A hidden value can be used in rendering the menu. In some areas, the menu item may not want to be displayed',
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes' COMMENT 'Determines whether the item is displayed or not',
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_id` (`group_id`,`location`,`parent_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fuel_navigation`
--

INSERT INTO `fuel_navigation` (`id`, `group_id`, `location`, `nav_key`, `label`, `parent_id`, `precedence`, `attributes`, `selected`, `hidden`, `published`) VALUES
(1, 1, 'FUEL-CMS-master/about', 'FUEL-CMS-master/about', 'about', 0, 0, '', '', 'no', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_navigation_groups`
--

CREATE TABLE IF NOT EXISTS `fuel_navigation_groups` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fuel_navigation_groups`
--

INSERT INTO `fuel_navigation_groups` (`id`, `name`, `published`) VALUES
(1, 'main', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_pages`
--

CREATE TABLE IF NOT EXISTS `fuel_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Add the part of the url after the root of your site (usually after the domain name). For the homepage, just put the word ''home''',
  `layout` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The name of the template to associate with this page',
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes' COMMENT 'A ''yes'' value will display the page and an ''no'' value will give a 404 error message',
  `cache` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes' COMMENT 'Cache controls whether the page will pull from the database or from a saved file which is more effeicent. If a page has content that is dynamic, it''s best to set cache to ''no''',
  `date_added` datetime DEFAULT NULL,
  `last_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_modified_by` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `location` (`location`),
  KEY `layout` (`layout`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fuel_pages`
--

INSERT INTO `fuel_pages` (`id`, `location`, `layout`, `published`, `cache`, `date_added`, `last_modified`, `last_modified_by`) VALUES
(1, 'about', 'main', 'yes', 'yes', '2013-11-11 01:46:57', '2013-11-10 20:19:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fuel_page_variables`
--

CREATE TABLE IF NOT EXISTS `fuel_page_variables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('string','int','boolean','array','template') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'string',
  `active` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_id` (`page_id`,`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `fuel_page_variables`
--

INSERT INTO `fuel_page_variables` (`id`, `page_id`, `name`, `scope`, `value`, `type`, `active`) VALUES
(30, 1, 'body_class', '', '', 'string', 'yes'),
(29, 1, 'body', '', 'About Us', 'string', 'yes'),
(28, 1, 'meta_keywords', '', '', 'string', 'yes'),
(27, 1, 'meta_description', '', '', 'string', 'yes'),
(25, 1, 'copy', '', '', 'string', 'yes'),
(26, 1, 'page_title', '', 'about', 'string', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_permissions`
--

CREATE TABLE IF NOT EXISTS `fuel_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Permissions beginning with ''Manage '' will allow items to appear on the left menu',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `fuel_permissions`
--

INSERT INTO `fuel_permissions` (`id`, `name`, `description`, `active`) VALUES
(1, 'pages', 'Manage pages', 'yes'),
(2, 'pages_publish', 'Publish Pages', 'yes'),
(3, 'pages_delete', 'Delete Pages', 'yes'),
(4, 'navigation', 'Manage navigation', 'yes'),
(5, 'users', 'Manage users', 'yes'),
(6, 'tools/backup', 'Manage database backup', 'yes'),
(7, 'manage/cache', 'Manage the page cache', 'yes'),
(8, 'manage/activity', 'View activity logs', 'yes'),
(9, 'myPHPadmin', 'myPHPadmin', 'yes'),
(10, 'google_analytics', 'Google Analytics', 'yes'),
(11, 'tools/user_guide', 'Access the User Guide', 'yes'),
(12, 'manage', 'View the Manage Dashboard Page', 'yes'),
(13, 'permissions', 'Manage Permissions', 'yes'),
(14, 'tools', 'Manage Tools', 'yes'),
(15, 'tools/seo/google_keywords', 'Google Keywords', 'yes'),
(16, 'sitevariables', 'Site Variables', 'yes'),
(17, 'blog/posts', 'Blog Posts', 'yes'),
(18, 'blog/categories', 'Blog Categories', 'yes'),
(19, 'blog/comments', 'Blog Comments', 'yes'),
(20, 'blog/links', 'Blog Links', 'yes'),
(21, 'blog/users', 'Blog Authors', 'yes'),
(22, 'blog/settings', 'Blog Settings', 'yes'),
(23, 'assets', 'Assets', 'yes'),
(24, 'tools/validate', 'Validate', 'yes'),
(25, 'tools/seo', 'Page Analysis', 'yes'),
(26, 'tools/tester', 'Tester Module', 'yes'),
(27, 'blocks', 'Manage Blocks', 'yes'),
(28, 'site_docs', 'Site Documentation', 'yes'),
(29, 'tools/cronjobs', 'Cronjobs', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_site_variables`
--

CREATE TABLE IF NOT EXISTS `fuel_site_variables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'leave blank if you want the variable to be available to all pages',
  `active` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fuel_users`
--

CREATE TABLE IF NOT EXISTS `fuel_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'english',
  `reset_key` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `super_admin` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `active` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fuel_users`
--

INSERT INTO `fuel_users` (`id`, `user_name`, `password`, `email`, `first_name`, `last_name`, `language`, `reset_key`, `super_admin`, `active`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'Admin', '', 'english', '', 'yes', 'yes'),
(2, 'seller_1', '779c8a016e118e92401aa09e7fd4ddc4', 'seller_1@gmail.com', 'akeel', 'munshi', 'english', '', 'no', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_user_to_permissions`
--

CREATE TABLE IF NOT EXISTS `fuel_user_to_permissions` (
  `user_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fuel_user_to_permissions`
--

INSERT INTO `fuel_user_to_permissions` (`user_id`, `permission_id`) VALUES
(2, 1),
(2, 2),
(2, 8),
(2, 15),
(2, 17),
(2, 18),
(2, 19),
(2, 21),
(2, 29);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
