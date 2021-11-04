USE tolkien;

SELECT * FROM tolkien.human;

DELETE FROM human WHERE id_human >4;

SELECT name FROM tolkien.human;

-- UPDATE human SET father = "Arathorn II" WHERE id_human = 1;

SET sql_safe_updates = 0; -- buscar qué es...

