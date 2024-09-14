/*
 Database initializer
 ====================
 SQL script to load data into cmsc340.mycourses table
 Based on SQL-Script-For-Publications.sql provided in Week 4 Discussion
 
 Terrence Jackson
 CMSC 430
 Week 4 Assignment
 Last Edited: Sept 7 2024
 */
DROP DATABASE IF EXISTS cmsc340;
CREATE DATABASE cmsc340;
USE cmsc340;
DROP TABLE IF EXISTS mycourses;
CREATE TABLE mycourses (
  code varchar(10) NOT NULL default '',
  title varchar(128) default NULL,
  credit_hours int default NULL,
  PRIMARY KEY (code),
  KEY title (title(20)),
  KEY credit_hours (credit_hours(4))
) ENGINE = InnoDB DEFAULT CHARSET = latin1;
select *
from mycourses;