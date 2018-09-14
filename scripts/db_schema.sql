DROP SCHEMA IF EXISTS tildawn;
CREATE SCHEMA tildawn;
USE tildawn;


CREATE TABLE Teams (
    id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(16) NOT NULL UNIQUE,
	color VARCHAR(8) NOT NULL UNIQUE,
	score INT DEFAULT 0,
	nbLivesTakenByPlayers INT DEFAULT 0,
	nbPlayersArrested INT DEFAULT 0,
	nbPlayersLost INT DEFAULT 0,
	nbPlayersWon INT DEFAULT 0,
	nbEnemyLivesBroughtByPlayers INT DEFAULT 0,
	nbPlayersDeaths INT DEFAULT 0,
	nbKillsByPlayers INT DEFAULT 0,
	nbMainObjectsFoundByPlayers INT DEFAULT 0,
	
	PRIMARY KEY(id)
);

CREATE TABLE Players (
    id INT NOT NULL AUTO_INCREMENT,
    amulet VARCHAR(5) UNIQUE,
	firstname VARCHAR(32) NOT NULL,
	lastname VARCHAR(32) NOT NULL,
	gender ENUM('M', 'F'),
	`group` VARCHAR(32),
	teamId INT NOT NULL,
    score INT DEFAULT 0, 	
	nbDeaths INT DEFAULT 0,
	nbKills INT DEFAULT 0,
	nbEnemyLivesGiven INT DEFAULT 0,
	nbOwnLivesTaken INT DEFAULT 0, 
	nbAmuletsTaken INT DEFAULT 0,
	nbCheatersCaught INT DEFAULT 0, 
	nbTimesArrested INT DEFAULT 0,
	nbTimesTransformed INT DEFAULT 0,
	nbPlayersTransformed INT DEFAULT 0,
	nbObjectsFound INT DEFAULT 0,
	
	PRIMARY KEY(id),
	FOREIGN KEY(teamId) REFERENCES Teams(id)
);

CREATE TABLE Objects (
    id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(32) NOT NULL UNIQUE,
	`found` BOOLEAN NOT NULL DEFAULT FALSE, 
	`value` INT NOT NULL,
	teamId INT,
	main BOOLEAN,
	-- add boolean for main

	
	PRIMARY KEY(id),
	FOREIGN KEY(teamId) REFERENCES Teams(id)
);

CREATE TABLE Causes (
    id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(32) NOT NULL,
	category ENUM('Bonus','Malus'),
	`value` INT NOT NULL, 
	
	PRIMARY KEY(id)

);

CREATE TABLE SpecialTeamLog (
    id INT NOT NULL AUTO_INCREMENT,
	causeId INT NOT NULL,
	teamId INT NOT NULL,
	scoreImpact INT NOT NULL,
	
	PRIMARY KEY(id),
	FOREIGN KEY(causeId) REFERENCES Causes(id),
	FOREIGN KEY(teamId) REFERENCES Teams(id)
);

CREATE TABLE SpecialPlayerLog (
    id INT NOT NULL AUTO_INCREMENT,
	causeId INT NOT NULL,
	playerId INT NOT NULL, 
	scoreImpact INT NOT NULL, 
	
	PRIMARY KEY(id),
	FOREIGN KEY(causeId) REFERENCES Causes(id),
	FOREIGN KEY(playerId) REFERENCES Players(id)
);

CREATE TABLE Alerts (
    id INT NOT NULL AUTO_INCREMENT,
	title VARCHAR(32),
	text VARCHAR(255),
	status BOOLEAN DEFAULT FALSE,

	PRIMARY KEY(id)
);

CREATE TABLE Messages (
    id INT NOT NULL AUTO_INCREMENT,
	title VARCHAR(32),
	text VARCHAR(255),
	status BOOLEAN DEFAULT FALSE,
	
	PRIMARY KEY(id)
);