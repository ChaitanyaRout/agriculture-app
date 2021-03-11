<?php
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
  
  INSERT INTO `ag_states` (`id`, `state_name`, `date_add`, `date_upd`) VALUES
  (1, 'Andhra Pradesh', '0000-00-00', NULL),
  (2, 'Arunachal Pradesh', '0000-00-00', NULL),
  (3, 'Assam', '0000-00-00', NULL),
  (4, 'Bihar', '0000-00-00', NULL),
  (5, 'Chandigarh', '0000-00-00', NULL),
  (6, 'Chhattisgarh', '0000-00-00', NULL),
  (7, 'Delhi', '0000-00-00', NULL),
  (8, 'Goa', '0000-00-00', NULL),
  (9, 'Gujarat', '0000-00-00', NULL),
  (10, 'Haryana', '0000-00-00', NULL),
  (11, 'Himachal Pradesh', '0000-00-00', NULL),
  (12, 'Jammu & Kashmir', '0000-00-00', NULL),
  (13, 'Jharkhand', '0000-00-00', NULL),
  (14, 'Karnataka', '0000-00-00', NULL),
  (15, 'Kerala', '0000-00-00', NULL),
  (16, 'Ladakh', '0000-00-00', NULL),
  (17, 'Madhya Pradesh', '0000-00-00', NULL),
  (18, 'Maharashtra', '0000-00-00', NULL),
  (19, 'Manipur', '0000-00-00', NULL),
  (20, 'Meghalaya', '0000-00-00', NULL),
  (21, 'Mizoram', '0000-00-00', NULL),
  (22, 'Nagaland', '0000-00-00', NULL),
  (23, 'Odisha', '0000-00-00', NULL),
  (24, 'Pondicherry', '0000-00-00', NULL),
  (25, 'Punjab', '0000-00-00', NULL),
  (26, 'Rajasthan', '0000-00-00', NULL),
  (27, 'Sikkim', '0000-00-00', NULL),
  (28, 'Tamil Nadu', '0000-00-00', NULL),
  (29, 'Telangana ', '0000-00-00', NULL),
  (30, 'Tripura', '0000-00-00', NULL),
  (31, 'UT of DNH and DD', '0000-00-00', NULL),
  (32, 'Uttarakhand', '0000-00-00', NULL),
  (33, 'Uttar Pradesh ', '0000-00-00', NULL),
  (34, 'West Bengal', '0000-00-00', NULL);

CREATE TABLE ag_district (
  id int AUTO_INCREMENT,
  st_id int NOT NULL,
  district varchar(255),
  date_add datetime,
  date_upd datetime,
  PRIMARY KEY (id),
  FOREIGN KEY (st_id) REFERENCES ag_states(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE ag_scheme (
  id int AUTO_INCREMENT,
  st_id int NOT NULL,
  scheme_name varchar(255),
  type smallint(1),
  link varchar(255),
  date_add datetime,
  date_upd datetime,
  PRIMARY KEY (id),
  FOREIGN KEY (st_id) REFERENCES ag_states(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE ag_crops (
  id int AUTO_INCREMENT,
  dt_id int NOT NULL,
  crop_name varchar(255),
  date_add datetime,
  date_upd datetime,
  PRIMARY KEY (id),
  FOREIGN KEY (dt_id) REFERENCES ag_district(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--------------------------------------------------------
?>