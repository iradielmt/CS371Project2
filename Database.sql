DROP SCHEMA IF EXISTS Project2;
CREATE DATABASE Project2;
USE Project2;
SET SQL_SAFE_UPDATES = 0;

CREATE TABLE IF NOT EXISTS Advertisements
(Advertisement_ID SMALLINT UNSIGNED AUTO_INCREMENT,
Adv_Title VARCHAR(30),
Adv_Deets VARCHAR(100),
Adv_DateTime DATE, 
Price DOUBLE(7,2),
Category_ID VARCHAR(15),
User_ID VARCHAR(15),
Moderator_ID VARCHAR(15),
Status_ID VARCHAR(2),

CONSTRAINT PK_ADVERT_ID PRIMARY KEY (Advertisement_ID),
CONSTRAINT FK_USER_ID FOREIGN KEY (User_ID) REFERENCES Users (User_ID) ON DELETE CASCADE,
CONSTRAINT FK_MOD_ID FOREIGN KEY (Moderator_ID) REFERENCES Moderators (User_ID) ON DELETE SET NULL,
CONSTRAINT FK_CAT_ID FOREIGN KEY (Category_ID) REFERENCES Categories (Category_ID) ON DELETE RESTRICT,
CONSTRAINT FK_STAT_ID FOREIGN KEY (Status_ID) REFERENCES Statuses (Status_ID) ON DELETE RESTRICT
);

INSERT INTO Advertisements
(Adv_Title, Adv_Deets, Adv_DateTime, Price, Category_ID, User_ID, Moderator_ID, Status_ID)
VALUES 
("2010 Sedan Subaru", "2010 sedan car in great shape for sale", "2017-02-10", 6000, "CAT", "Rkale", "Jsmith", "AC"),
("Nice Office Desk", "Nice office desk for sale", "2017-02-15", "50.25", "HOU", "Rkale", "Jsmith", "AC"),
("Smart LG TV for $200 ONLY", "Smart LG TV 52 inches! Really cheap!", "2017-03-15", "200", "ELC", "Sali", "Jsmith", "AC"),
("HD Tablet for $25 only", "Amazon Fire Tablet HD", "2017-03-20", "25", "ELC", "Rkale", NULL, "PN"),
("Laptop for $100", "Amazing HP laptop for $100", "2017-03-20", "100", "ELC", "Rkale", NULL, "PN");


CREATE TABLE IF NOT EXISTS Categories
(Category_ID VARCHAR (3),
Cat_Name VARCHAR(20),

CONSTRAINT PK_CAT_ID PRIMARY KEY (Category_ID)
);

INSERT INTO Categories (Category_ID, Cat_Name)
VALUES ("CAT", "Cars and Trucks"), ("HOU", "Housing"), ("ELC", "Electronics"), ("CCA", "Child Care");

CREATE TABLE IF NOT EXISTS Statuses
(Status_ID VARCHAR(2),
Status_Name VARCHAR(15),

CONSTRAINT PK_STAT_ID PRIMARY KEY (Status_ID)
);

INSERT INTO Statuses (Status_ID, Status_Name)
VALUES ("PN", "Pending"), ("AC", "Active"), ("DI", "Disapprove");

CREATE TABLE IF NOT EXISTS Users
(User_ID VARCHAR (15),
UserFirstName VARCHAR(15),
UserLastName VARCHAR(15),

CONSTRAINT PK_USER_ID PRIMARY KEY (User_ID)
);

INSERT INTO Users (User_ID, UserFirstName, UserLastName)
Values 
("Jsmith", "John", "Smith"), ("Ajackson", "Ann", "Jackson"),
("Rkale", "Rania", "Kale"), ("Sali", "Samir", "Ali");

CREATE TABLE IF NOT EXISTS Moderators
(User_ID VARCHAR (15),

CONSTRAINT PK_MOD_ID PRIMARY KEY (User_ID),
CONSTRAINT FK_MOD_ID FOREIGN KEY (User_ID) REFERENCES Users (User_ID) ON DELETE RESTRICT
);

INSERT INTO Moderators (User_ID)
VALUES ("Jsmith"), ("Ajackson");


create table IF NOT EXISTS Logins
 (LoginID INT(5) AUTO_INCREMENT,
 login varchar(255) NOT NULL,
 password varchar(255) NOT NULL,
 PRIMARY KEY (loginID)
 )ENGINE = INNODB;


/*Login Query*/
insert into Logins (login, password) VALUES
(('moderator'), ('$2y$10$hlqdfwHAFTQlxvsuvvczCepNTIPK3phC/njEWnKOsjt9jyx1vfliy')),
(('customer'), ('$2y$10$R8TVrXKcsGnBImMC6UGah.NpWaBP2N69Q13NYSXBksSZ1ghB5S4N2'));

