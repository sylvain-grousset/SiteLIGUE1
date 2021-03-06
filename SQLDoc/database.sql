drop table if exists rencontre cascade;
drop table if exists equipe cascade;
drop table if exists score cascade;

CREATE TABLE equipe (
    id_equipe       INT,
    nom             VARCHAR(50) NOT NULL,
    stade           VARCHAR(50) NOT NULL,
    ville           VARCHAR(15) NOT NULL,
	logo			VARCHAR(255) NOT NULL,
    CONSTRAINT PK_equipe PRIMARY KEY (id_equipe),
    CONSTRAINT UK_nom UNIQUE (nom)
);

CREATE TABLE rencontre (
   id_domicile      INT,
   id_visiteur      INT,
   date_match       DATE,
   score_domicile   INT NOT NULL,
   score_visiteur   INT NOT NULL,
   arbitre          VARCHAR(15) NOT NULL,
   etat				VARCHAR(20) NOT NULL,
   CONSTRAINT PK_rencontre PRIMARY KEY (id_domicile,id_visiteur,date_match),
   CONSTRAINT FK_id_domicile FOREIGN KEY (id_domicile) REFERENCES equipe (id_equipe) ON DELETE CASCADE,
   CONSTRAINT FK_id_visiteur FOREIGN KEY (id_visiteur) REFERENCES equipe (id_equipe) ON DELETE CASCADE
);

CREATE TABLE score (
	id_equipe int, 
	matchsJoues int, 
	points int, 
	gagne int, 
	egalite int, 
	perdu int, 
	butPour int, 
	butContre int,
	
CONSTRAINT PK_score PRIMARY KEY (id_equipe)
);


INSERT INTO equipe VALUES (1,'PSG','Parc des prince','Paris', '..\img\PSG.png');
INSERT INTO equipe VALUES (2,'ASM','Louis II','Monaco','..\img\ASM.png');
INSERT INTO equipe VALUES (3,'ASSE','Geoffroy-Guichard','Saint-etienne','..\img\ASSE.png');
INSERT INTO equipe VALUES (4,'FCGB','Matmut Atlantique','Bordeaux','..\img\FCGB.png');
INSERT INTO equipe VALUES (5,'OL','Groupama Stadium','Lyon','..\img\OL.png');
INSERT INTO equipe VALUES (6,'OM','Orange Vélodrome','Marseille','..\img\OM.png');

INSERT INTO equipe VALUES (7,'SCO','Raymond-Kopa','Angers','..\img\SCO.png');
INSERT INTO equipe VALUES (8,'FCO','Gaston-Gérard','Dijon','..\img\FCO.png');
INSERT INTO equipe VALUES (9,'FCLorient','Stade du moustoir','Lorient','..\img\FCLorient.png');
INSERT INTO equipe VALUES (10,'RCSA','Stade de la Meinau','Strasbourg','..\img\RCSA.png');

INSERT INTO rencontre VALUES (1,5,'2006-09-15',1,4,'Mr Leblond', 'Termine');
INSERT INTO rencontre VALUES (2,6,'2006-09-15',2,1,'Mr Vessiere', 'Termine');
INSERT INTO rencontre VALUES (4,3,'2006-09-15',3,2,'Mr Collina', 'Termine');
INSERT INTO rencontre VALUES (5,2,'2006-09-28',3,0,'Mr Vessiere', 'Termine');
INSERT INTO rencontre VALUES (6,4,'2006-09-28',1,1,'Mr Dupond', 'Termine');
INSERT INTO rencontre VALUES (3,1,'2006-09-28',1,2,'Mr Leblond', 'Termine');

INSERT INTO rencontre VALUES (7,8,'2006-09-25',1,2,'Mr Leblond', 'Termine');
INSERT INTO rencontre VALUES (9,10,'2006-09-25',4,2,'Mr Leblond', 'Termine');
INSERT INTO rencontre VALUES (8,9,'2006-09-25',1,0,'Mr Leblond', 'Termine');
INSERT INTO rencontre VALUES (10,7,'2006-09-24',0,0,'Mr Leblond', 'Termine');
INSERT INTO rencontre VALUES (9,7,'2006-09-24',0,0,'Mr Leblond', 'Termine');
INSERT INTO rencontre VALUES (8,10,'2006-09-24',1,0,'Mr Leblond', 'Termine');
