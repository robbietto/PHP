--1 Numero totale di veicoli per categoria
SELECT categoria,
COUNT(*) AS numVeicoli
FROM veicoli
GROUP BY categoria;

--2 Prezzo medio per ogni categoria
SELECT categoria,
AVG(prezzo) as prezzoMedio
FROM veicoli
GROUP BY categoria;

--3 Prezzo massimo e minimo per categoria
SELECT categoria,
MAX(prezzo) AS prezzoMassimo,
MIN(prezzo) AS prezzoMinimo
FROM veicoli
GROUP BY categoria;

-- 4 Somma totale dei valore_extra per categoria
SELECT categoria,
SUM(valore_extra) AS sommaValoreExtra
FROM veicoli
GROUP BY categoria;

--5 Numero di veicoli con prezzo superiore a 20.000
SELECT COUNT(*) AS numVeicoliPrezzoMaggiore20K
FROM veicoli
WHERE prezzo>20000;

--6 Numero di veicoli Auto con valore_extra > 3
SELECT COUNT(*) AS numAutoValExtraMaggiore3
FROM veicoli
WHERE categoria="Auto" AND valore_extra>3;

--7 Prezzo totale dei Camion con valore_extra > 1000
SELECT SUM(prezzo) AS totalePrezzi
FROM veicoli
WHERE categoria="Camion" AND valore_extra>1000;

--8 Prezzo medio dei veicoli con valore_extra compreso tra 1 e 10
SELECT AVG(prezzo) AS mediaPrezzi
FROM veicoli
WHERE valore_extra BETWEEN 1 AND 10;

--9 Numero totale di Auto + Moto (insieme, usando OR)
SELECT COUNT(*) AS numAutoPiuMoto
FROM veicoli
WHERE categoria IN ('Auto','Moto');

--10 Valore totale combinato di tutti i veicoli → somma di (prezzo + valore_extra)
SELECT SUM(prezzo+valore_extra) AS valoreCombinato
FROM veicoli;