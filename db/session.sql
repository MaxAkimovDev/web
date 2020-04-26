CREATE TABLE IF NOT EXISTS 'ci_sessios' (
	'id' varchar(128) NOT NULL,
	'ip_address' varchar(45) NOT NULL,
	'timestamp' int(10) unsigned DEFAULT 0 NOT NULL,
	'data' blob NOT NULL,
	KEY 'ci_sessios_timestamp' ('timestamp')
);
ALTER TABLE ci_sessios ADD PRIMARY KEY(id);