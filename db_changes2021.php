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
## 14-March-2021 AKRAM SOLANKI ##
INSERT INTO `ag_states` (`state_name`) VALUES ('Lakshadweep');