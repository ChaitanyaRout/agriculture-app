<?php
?>
----------------------------------------------------------
11-03-2021 Chaitanya Rout
----------------------------------------------------------
CREATE TABLE `ag_states` (
  `id` int(11) AUTO_INCREMENT,
  `state_name` varchar(255) NOT NULL,
  `date_add` datetime DEFAULT current_timestamp(),
  `date_upd` datetime DEFAULT NULL,
  PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
  
  INSERT INTO `ag_states` (`state_name`) VALUES
  ('Andhra Pradesh'),
  ('Arunachal Pradesh'),
  ('Assam'),
  ('Bihar'),
  ('Chandigarh'),
  ('Chhattisgarh'),
  ('Delhi'),
  ('Goa'),
  ('Gujarat'),
  ('Haryana'),
  ('Himachal Pradesh'),
  ('Jammu & Kashmir'),
  ('Jharkhand'),
  ('Karnataka'),
  ('Kerala'),
  ('Ladakh'),
  ('Madhya Pradesh'),
  ('Maharashtra'),
  ('Manipur'),
  ('Meghalaya'),
  ('Mizoram'),
  ('Nagaland'),
  ('Odisha'),
  ('Pondicherry'),
  ('Punjab'),
  ('Rajasthan'),
  ('Sikkim'),
  ('Tamil Nadu'),
  ('Telangana '),
  ('Tripura'),
  ('UT of DNH and DD'),
  ('Uttarakhand'),
  ('Uttar Pradesh '),
  ('West Bengal');

CREATE TABLE ag_district (
  id int AUTO_INCREMENT,
  st_id int NOT NULL,
  district varchar(255),
  date_add datetime DEFAULT current_timestamp(),
  date_upd datetime DEFAULT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (st_id) REFERENCES ag_states(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE ag_scheme (
  id int AUTO_INCREMENT,
  st_id int NOT NULL,
  scheme_name varchar(255),
  type smallint(1),
  link varchar(255),
  date_add datetime DEFAULT current_timestamp(),
  date_upd datetime DEFAULT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (st_id) REFERENCES ag_states(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE ag_crops (
  id int AUTO_INCREMENT,
  st_id int NOT NULL,
  crop_name varchar(255),
  date_add datetime DEFAULT current_timestamp(),
  date_upd datetime DEFAULT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (st_id) REFERENCES ag_states(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

---------------------------------------------------------------
## 14-March-2021 AKRAM SOLANKI ##
INSERT INTO `ag_states` (`state_name`) VALUES ('Lakshadweep');
---------------------------------------------------------------
## 17-March-2021 Chaitanya Rout ##
Define it in config/server_config.php
define("REPLY_TO", "no-reply@krushaksathi.com");
define("EMAIL_FROM", "routjulu@gmail.com");
define("FROM_NAME", "Krushak Sathi");
define("HOST", "smtp.gmail.com");
define("USERNAME", "chaitanyarout1997@gmail.com");
define("PASSWORD", "Rout@\$chaitanya");
define("SMTP_SECURE", "tls");
define("PORT", 587);

---------------------------------------------------------------
## 21-03-2021 Chaitanya Rout ##

INSERT INTO `ag_crops` (`st_id`,`crop_name`,`type`) VALUES 
(25,'rice',1),
(25,'maize',1),
(25,'barley',1),
(25,'pulses',1),
(25,'raspeseed',1),
(25,'mustard',1),
(25,'sunflower',1),
(25,'oil seeds',1),
(25,'sugarcane',1),
(25,'cotton',1),
(10,'sugarcane',1),
(10,'barley',1),
(10,'jowar',1),
(10,'bajra',1),
(10,'gram',1),
(10,'rice',1),
(10,'wheat',1),
(10,'mustard',1),
(10,'cotton',1),
(10,'sugarcane',1),
(26,'wheat',1),
(26,'sugarcane',1),
(26,'bajra',1),
(26,'barley',1),
(26,'jowar',1),
(26,'maize',1),
(26,'chilli',1),
(26,'cotton',1),
(26,'rice',1),
(26,'groundnuts',1),
(26,'pulses',1),
(33,'spices',1),
(33,'floriculture medicinal',1),
(33,'aromatic plant',1),
(33,'betel vine',1),
(33,'mushroom',1),
(33,'honey plantation',1),
(4,'rice',1),
(4,'wheat',1),
(4,'maize',1),
(4,'pulses',1),
(4,'sugarcane',1),
(4,'jute',1),
(17,'rice',1),
(17,'jowar',1),
(17,'bajra',1),
(17,'wheat',1),
(17,'pulses',1),
(17,'cotton',1),
(17,'soyabean',1),
(17,'sunflower',1),
(6,'rice',1),
(6,'maize',1),
(6,'wheat',1),
(6,'niger',1),
(6,'groundnuts',1),
(6,'pulses',1),
(13,'rice',1),
(13,'ragi',1),
(13,'maize',1),
(13,'wheat',1),
(13,'redgram',1),
(13,'niger',1),
(11,'off season vegetables',1),
(11,'potatos',1),
(11,'ginger',1),
(11,'soyabean',1),
(12,'paddy',1),
(12,'wheat',1),
(12,'maize',1),
(12,'barley',1),
(12,'bajra',1),
(12,'jowra',1),
(12,'gram',1),
(34,'rice',1),
(34,'jute',1),
(34,'tea',1),
(34,'potatoes',1),
(34,'betel vines',1),
(34,'tobacco',1),
(34,'wheat',1),
(34,'barley',1),
(34,'maize',1),
(14,'paddy',1),
(14,'jowar',1),
(14,'ragi',1),
(14,'maize',1),
(14,'sunflower',1),
(14,'cotton',1),
(14,'tobacco',1),
(14,'coffee',1),
(14,'silk',1),
(15,'coffee',1),
(1,'silk',1),
(1,'tobacco',1),
(1,'cotton',1),
(3,'tea',1);
---------------------------------------------------------------
## 20-March-2020 AKRAM SOLANKI ##
CREATE TABLE `ag_sa_credentials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` tinyint(1) DEFAULT NULL,
  `date_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_upd` datetime,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
---------------------------------------------------------------
## 21-03-2021 AKRAM SOLANKI ##

define it in super_admin/config/server_config.php and config/server_config.php
define("PAYMENT_NAME", "KrushakSathi");
-----------------------------------------------------------------
