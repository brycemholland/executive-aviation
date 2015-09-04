#
#	Table structture for 'flight_time'
#

CREATE TABLE flight_time(
	id int(10) unsigned NOT NULL default '0',
	destination varchar(255) NOT NULL default '',
	plane_type varchar(255) NOT NULL default '',
	hours varchar(255) NOT NULL default '0',
	minutes varchar(255) NOT NULL default '0',
	PRIMARY KEY (id)
)TYPE=MyISAM;
