create database stoneforest;
use stoneforest;
-- Create tables

CREATE TABLE SITE (
  site_id INT PRIMARY KEY,
  name VARCHAR(255),
  location_coordinates VARCHAR(255),
  survey_date DATE
);

CREATE TABLE PERMIT (
  permit_id INT PRIMARY KEY,
  permit_name VARCHAR(255),
  permit_date DATE
);

CREATE TABLE SITE_PERMIT (
  site_id INT,
  permit_id INT,
  PRIMARY KEY (site_id, permit_id),
  FOREIGN KEY (site_id) REFERENCES SITE(site_id),
  FOREIGN KEY (permit_id) REFERENCES PERMIT(permit_id)
);

CREATE TABLE MINERAL (
  mineral_id INT PRIMARY KEY,
  mineral_name VARCHAR(255),
  mineral_composition VARCHAR(255)
);

CREATE TABLE SITE_MINERAL (
  site_id INT,
  mineral_id INT,
  PRIMARY KEY (site_id, mineral_id),
  FOREIGN KEY (site_id) REFERENCES SITE(site_id),
  FOREIGN KEY (mineral_id) REFERENCES MINERAL(mineral_id)
);

CREATE TABLE EMPLOYEE (
  employee_id INT PRIMARY KEY,
  name VARCHAR(255),
  position VARCHAR(255),
  certification VARCHAR(255),
  training_records VARCHAR(255),
  site_id INT,
  FOREIGN KEY (site_id) REFERENCES SITE(site_id)
);

CREATE TABLE EQUIPMENT (
  equipment_id INT PRIMARY KEY,
  item_name VARCHAR(255),
  type VARCHAR(255),
  capacity VARCHAR(255),
  maintenance_date DATE,
  site_id INT,
  FOREIGN KEY (site_id) REFERENCES SITE(site_id)
);

CREATE TABLE INVENTORY (
  inventory_id INT PRIMARY KEY,
  item_name VARCHAR(255),
  quantity INT,
  type VARCHAR(255),
  site_id INT,
  FOREIGN KEY (site_id) REFERENCES SITE(site_id)
);

CREATE TABLE GOLD_PRODUCTION (
  production_id INT PRIMARY KEY,
  site_id INT,
  gold_amount DECIMAL(10, 2),
  refining_process VARCHAR(255),
  survey_date DATE,
  FOREIGN KEY (site_id) REFERENCES SITE(site_id)
);

CREATE TABLE DAILY_MINING_ACTIVITY (
  activity_id INT PRIMARY KEY,
  site_id INT,
  date DATE,
  ore_extraction_volume DECIMAL(10, 2),
  work_hours INT,
  equipment_usage VARCHAR(255),
  safety_inspection VARCHAR(255),
  FOREIGN KEY (site_id) REFERENCES SITE(site_id)
);

CREATE TABLE PROTOCOL (
  protocol_id INT PRIMARY KEY,
  name VARCHAR(255),
  description VARCHAR(255),
  status VARCHAR(255),
  site_id INT,
  FOREIGN KEY (site_id) REFERENCES SITE(site_id)
);

CREATE TABLE REPORT (
  report_id INT PRIMARY KEY,
  date DATE,
  details VARCHAR(255),
  severity_level VARCHAR(255),
  resolution_status VARCHAR(255),
  protocol_id INT,
  employee_id INT,
  FOREIGN KEY (protocol_id) REFERENCES PROTOCOL(protocol_id),
  FOREIGN KEY (employee_id) REFERENCES EMPLOYEE(employee_id)
);