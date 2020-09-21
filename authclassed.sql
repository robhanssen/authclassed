
CREATE DATABASE IF NOT EXISTS authclassed;

use authclassed;

CREATE TABLE IF NOT EXISTS users (
  userid varchar(255) NOT NULL default '',
  username varchar(255) default NULL,
  password varchar(255) default NULL,
  permission int(2) default NULL,
  PRIMARY KEY  (userid)
) TYPE=MyISAM;

INSERT INTO users VALUES ('admin','Administrator',password('AuthClassed'),1);

