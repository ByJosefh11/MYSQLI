CREATE DATABASE LOL;

CREATE TABLE champ (
id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
`name` VARCHAR(32) NOT NULL,
rol ENUM("Asesinos", "Luchadores", "Magos", "Tiradores", "Apoyos", "Tanques") NOT NULL,
difficulty ENUM("Alta", "Moderada", "Baja") NOT NULL,
`description` text NOT NULL
);


INSERT INTO champ VALUES (1, "AHRI", "Asesinos ", "Moderada", "Ahri es una vastaya conectada de forma innata al poder latente de Runaterra, y es capaz de convertir la magia en orbes de energía pura. Le gusta jugar con su presa, manipulando sus emociones antes de devorar su esencia de vida.");

INSERT INTO champ VALUES (2, "DARIUS", "Luchadores ", "Baja", "No hay mayor símbolo del poder de Noxus que Darius, el comandante más temido y más curtido en batallas de toda la nación. Pasando de orígenes humildes a convertirse en la Mano de Noxus, se abre paso a tajos entre los enemigos del imperio, muchos de ellos noxianos.");

INSERT INTO champ VALUES (3, "AZIR", "Magos ", "Alta", "Azir, emperador de Shurima en un pasado remoto, fue un hombre orgulloso que estuvo a punto de alcanzar la inmortalidad. Dominado por la arrogancia, fue traicionado y asesinado en la hora de su mayor triunfo, pero ahora, milenios después, ha renacido como un ser Ascendido de inmenso poder.");

INSERT INTO champ VALUES (4, "AMUMU", "Tanques ", "Baja", "Cuenta la leyenda que Amumu es un alma solitaria y melancólica de la vieja Shurima que vaga por el mundo en busca de un amigo. Condenado por una maldición ancestral, su destino es permanecer solo para siempre, pues su tacto es muerte y su cariño, la perdición");

INSERT INTO champ VALUES (5, "Esther", "Apoyos ", "Alta", "Bardo, un viajero de más allá de las estrellas, es un agente de la serendipia que lucha para mantener un equilibrio en el que la vida pueda soportar la indiferencia del caos. Muchos habitantes de Runaterra cantan canciones que hablan de su naturaleza extraordinaria, pero todos están de acuerdo en que el vagabundo cósmico se siente atraído por los artefactos de gran poder mágico.");