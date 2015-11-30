SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- cqrfs //Fengguo tian editing

-- Database: `posting`
-- Table structure for table `posting_detail`
CREATE TABLE IF NOT EXISTS 'posting_detail'(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, user_name varchar(50),user_mail varchar(50),project_name varchar(50), budget varchar(50), programming_language varchar(50), project_detail text);

-- Inl data for `posting_detail`

INSERT INTO `user_reg` (`user_name`, `user_mail`, 'project_name','budget', 'programming_language','project_detail') 
VALUES('fengguotian','fengguotian@buffalo.edu','CQRFS','$1000.00','java','CODING NOW, CODING LIFE!');


CREATE TABLE 'posting_detail' (user_name varchar(50),
user_mail varchar(50),
project_name varchar(50),	
 budget	varchar(50),	
 programming_language varchar(50),			
 project_detail	text) ENGINE=MyISAM ;
