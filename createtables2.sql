DROP TABLE Review;
DROP TABLE Invoice;
DROP TABLE Artwork;
DROP TABLE Artist;

DROP TABLE Shipping;
DROP TABLE Museum;

CREATE TABLE Museum(
  museumID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  museumName VARCHAR(30),
  dateEST VARCHAR(30),
  location VARCHAR(30),
  address VARCHAR(80),
  architect VARCHAR(80),
  history VARCHAR(200),
  famousArt VARCHAR(80)
);

CREATE TABLE Shipping (
	shippingID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	shippingPlan VARCHAR(30),
	shippingCost DECIMAL(6,2) UNSIGNED
);

CREATE TABLE Artist (
  artistID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30),
  description VARCHAR(300),
  location VARCHAR(30),
  birth DATE,
  death DATE,
  genre VARCHAR(30),
  image VARCHAR(30)
);

CREATE TABLE Artwork (
  artWorkID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  artName VARCHAR(40),
  description VARCHAR(200),
  paintType VARCHAR(30),
  creationDate VARCHAR(30),
  dimensions VARCHAR(15),
  location VARCHAR(30),
  price INT(6),
  artist VARCHAR(30),
  genre VARCHAR(30),
  museum VARCHAR(30),
  image VARCHAR(30)
);

CREATE TABLE Invoice (
	invoiceID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	artName VARCHAR(40),
	quantity INT(6) UNSIGNED,
	price DECIMAL (10, 2) UNSIGNED,
	tax DECIMAL(10, 2) UNSIGNED,
	shippingCost DECIMAL(6, 2) UNSIGNED,
	totalPrice DECIMAL(15, 2) UNSIGNED,
	artWorkID INT(6) UNSIGNED,
	shippingID INT(6) UNSIGNED,
	FOREIGN KEY (artWorkID) REFERENCES Artwork(artWorkID),
	FOREIGN KEY (shippingID) REFERENCES Shipping(shippingID)
);

CREATE TABLE Review (
	reviewsID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	rating INT(6) UNSIGNED,
	description VARCHAR(300),
	artWorkID INT(6) UNSIGNED,
	FOREIGN KEY (artWorkID) REFERENCES Artwork(artWorkID)
);
	   
INSERT INTO Shipping (shippingPlan, shippingCost)
VALUES ('PRIME','10'),
       ('Standard','5'),
       ('questionable','0');

INSERT INTO Artist (name, location, birth, death,description,genre,image)
VALUES ('Leonardo Da Vinci','Italy','1452-04-15','1519-05-02','An Italian man who was known for his invention, painting, sculpting, architecture, science, music, mathematics, engineering, literature, anatomy, geology, astronomy, botany, writing, history, and cartography.','Renaissance','vinci.jpg'),
       ('Vincent Van Gogh','Zundert','1853-03-30','1890-07-29','A Dutch man, who is among the most famous and influential figures in the history of Western art.','Modern Art','gogh.jpg'),
	   ('Caspar David Friedrich','Dresden','1774-09-05','1840-05-07','A German man, the 19th-century German Romantic landscape painter, generally considered the most important German artist of his generation.','Romanticism','friedrich.jpg'),
	   ('Jacques-Louis David','France','1748-08-30','1825-12-29','A French man.','Neoclassicism','david.jpg'),
	   ('Edvard Munch','Oslo','1863-12-12','1944-01-23','A Norwegian man. as well as a printmaker.','Modern Art','munch.jpg');

INSERT INTO Museum (museumName, dateEST, location, address,architect,history,famousArt)
VALUES ('Louvre','1793','France','75001 Paris, France','Pierre Lescot, Hector Lefuel, Louis Visconti, Louis Le Vau','Originally built as a fortress in the late 12th to 13th century.','Mona Lisa and Venus de Milo'),
       ('Museum of Modern Art','11-7-1929','New York','11 West 53rd Street','Yoshio Taniguchi, Edward Durell Stone, Philip Goodwin','Holds primary source material related to the history of modern and contemporary art.','The Starry Night and The Persistence of Memory'),
	   ('Kunsthalle Hamburg','1869-20-08','Hamburg','20095 GlockengieBerwall',' Georg Theodor Schirrmacher and Hermann von der Hude','One of the largest museums in the Germany.','Wanderer above the Sea of Fog and The Sea of Ice'),
	   ('Chateau de Malmaison','1799','France','92500 Rueil-Malmaison','Charles Percier, Pierre Humbert, Pierre-Francois-Leonard Fontaine','Formerly the residence of Empress Josephine de Beauharnais.','Napolean Crossing the Alps'),
	   ('Munch Museum','1963','Oslo','Toyengata 53, 0578 Oslo, Norway','Einar Myklebust, Gunnar Fougner','Home to more than half of Edvard Munchs paintings','The Scream');
	   
INSERT INTO Artwork (artName, description, paintType, creationDate, dimensions, location, price, artist, genre, museum, image)
VALUES ('Mona Lisa','The famous painting of a woman.','Oil','1503','77cm by 53cm','Louvre','100','Leonardo Da Vinci','Portrait','Louvre','mona.jpg'),
       ('The Starry Night','A depiction of Van Goghas window view from his asylum','Oil','1889','74cm by 92cm','Museum of Modern Art','150','Vincent Van Gogh','Landscape Painting','Museum of Modern Art','starry.jpg'),
       ('Wanderer Above the Sea of Fog','Depicts a figure standing atop a cliff above a foggy expanse','Oil','1818','95cm by 75cm','Kunsthalle Hamburg','200','Caspar David Friedrich','Romanticism','Kunsthalle Hamburg','wanderer.jpg'),
       ('Napoleon Crossing the Alps','Depicts Napoleon crossing the Alps atop his horse','Oil','1801','2.6m by 2.21m','Chateau de Malmaison','180','Jacques-Louis David','Romanticism','Chateau de Malmaison','alps.jpg'),
       ('The Scream','A figure in agony against an orange sky','Oil, tempera, pastel, crayon','1893','91cm by 73.5cm','National Gallery (Oslo)','100','Edvard Munch','Modern','Munch Museum','scream.jpg');