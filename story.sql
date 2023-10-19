-- story 11 
-- story 11 

SELECT id, nom, description, adresse, code_postal, ville, pays, u.portable FROM services 
INNER JOIN utilisateur AS u ON u.id =  services.id_utilisateur

-- story 12 
-- story 12 

DELETE from services
WHERE id = 1 

-- story 13 
-- story 13 

-- DROP TABLE services_utilisateurs
DELETE FROM services_utilisateurs 
WHERE id = 1

-- story 14 
-- story 14 

DELETE FROM utilisateurs 
WHERE id = 1

-- story 15
-- story 15

DELETE FROM messages 
WHERE id = 1

-- story 16 
-- story 16 

SELECT services.*, utilisateurs.pseudo, (SELECT DISTINCT utilisateurs.pseudo FROM utilisateurs WHERE utilisateurs.id = 4) as cu FROM services_utilisateurs
INNER JOIN services ON services.id = services_utilisateurs.id_service
INNER JOIN utilisateurs on utilisateurs.id = services.id_utilisateur
where services_utilisateurs.id_utilisateur = 4
ORDER BY date_service DESC, ville ASC;  


-- 17

        select services.*, services_utilisateurs.date_inscription, utilisateurs.pseudo, (
            select distinct pseudo from utilisateurs where id = 10) as cu from services_utilisateurs 
        LEFT JOIN services
        ON services.id = services_utilisateurs.id_service
        LEFT JOIN utilisateurs 
        ON utilisateurs.id = services.id_utilisateur
        where services_utilisateurs.id_utilisateur = 8
        ORDER BY services_utilisateurs.date_inscription ASC 
        LIMIT 1;

--  pseudo

-- 18

SELECT M.*, 
(select utilisateurs.pseudo from utilisateurs where id = 3) as pseudo_utilisateur,

(select count(distinct services.id) from services
 LEFT JOIN services_utilisateurs
    ON services.id = services_utilisateurs.id_service
 where M.mois = MONTH(services.date_service) 
 and services.id_utilisateur = 3
 ) AS count_participation;

FROM (   
select 1 as mois union all
select 2 union
select 3 union 
select 4 union 
select 5 union 
select 6 union 
select 7 union 
select 8 union 
select 9 union 
select 10 union 
select 11 union 
select 12 ) as M;

