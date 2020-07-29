
	CREATE DATABASE `zestilistas`;
	USE `zestilistas`;

	CREATE USER  'zestilistas_local'@'localhost' IDENTIFIED BY '1234';
	GRANT USAGE ON *.* TO 'zestilistas_local'@'localhost' IDENTIFIED BY PASSWORD '*A4B6157319038724E3560894F7F932C8886EBFCF'; 
	GRANT ALL PRIVILEGES ON *.* TO 'zestilistas_local'@'localhost';
	FLUSH PRIVILEGES;