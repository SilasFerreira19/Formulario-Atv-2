CREATE TABLE Inscrito (
  id_usuario integer PRIMARY KEY AUTOINCREMENT,
  nm_usuario VARCHAR(100),
  email VARCHAR(150),
  tel VARCHAR(50),
  data_nasc VARCHAR(30),
  genero VARCHAR(20),
  tipo VARCHAR(20),
  mensagem VARCHAR(300)
);

SELECT * FROM Inscrito;

DROP TABLE Inscrito;