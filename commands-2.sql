-- Story 7

insert into messages(id_expediteur, id_receveur, contenu) 
values (1, 2, "Salut"),
(2, 1, "Salut"),
(1, 2, "ça va ?"),
(2, 1, "Bien et toi ?"),
(1, 2, "Bien"),
(2, 1, "ça fait quoi là ?"),
(1, 2, "ça fait des base de données tranquille"),
(2, 1, "Ah ouais je vois"),
(1, 3, "Qu'est ce qui me veut"),
(5, 9, "Je sais pas c'est à qu'elle heure mon prochain rdv"),
(9, 4, "C'était comment ton rdv ?"),
(10, 3, "T'as parlé aux chats de paul ?"),
(2, 1, "Salut"),
(1, 2, "ça va ?"),
(2, 1, "Bien et toi ?"),
(1, 2, "Bien"),
(2, 1, "ça fait quoi là ?"),
(1, 2, "ça fait des base de données tranquille"),
(2, 1, "Ah ouais je vois"),
(1, 3, "Qu'est ce qui me veut"),
(5, 9, "Je sais pas c'est à qu'elle heure mon prochain rdv"),
(9, 4, "C'était comment ton rdv ?"),
(10, 3, "T'as parlé aux chats de paul ?"),
(9, 4, "C'était comment ton rdv ?"),
(10, 3, "T'as parlé aux chats de paul ?"),


select * from messages where id_expediteur = 10 order by date_envoie DESC;
select * from messages where id_expediteur = 10 and id_receveur = 2 order by date_envoie DESC;

-- story 8

SELECT pseudo, contenu, date_envoie FROM messages 
INNER JOIN utilisateurs ON messages.id_expediteur=utilisateurs.id
ORDER BY date_envoie DESC;

-- story 9

SELECT pseudo, contenu, date_envoie FROM messages 
INNER JOIN utilisateurs ON messages.id_expediteur=utilisateurs.id
WHERE id_expediteur = 1 AND id_receveur = 2 OR id_expediteur = 2 AND id_receveur = 1
ORDER BY date_envoie DESC;

-- story 10

SELECT nom, description, adresse, code_postal, ville, pays, date_service FROM services
WHERE date_service < current_date AND NOT id_utilisateur = 1
INNER JOIN services_utilisateurs on services.id = services_utilisateurs.id
ORDER BY date_service AND ville DESC;

SELECT nom, description, adresse, code_postal, ville, pays, date_service FROM services
WHERE date_service < current_date AND NOT id_utilisateur = 1 AND nom = "input_nom" OR ville = "input_ville" OR pays = "input_pays" OR code_postal = "inuput_CP"
INNER JOIN services_utilisateurs on services.id = services_utilisateurs.id
ORDER BY date_service AND ville DESC;

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

        select services.*, services_utilisateurs.date_inscription, utilisateurs.*, (
            select distinct pseudo from utilisateurs where id = services.id_utilisateur) as cu from services_utilisateurs 
        LEFT JOIN services
        ON services.id = services_utilisateurs.id_service
        LEFT JOIN utilisateurs 
        ON utilisateurs.id = services_utilisateurs.id_utilisateur
        where services_utilisateurs.id_utilisateur = 9
        ORDER BY services_utilisateurs.date_inscription ASC 
        LIMIT 1;

--  pseudo

-- 18
    with tbl1(MOIS, Utilisateur, participation_total) as
    (select 1, (select pseudo from utilisateurs where id = 10), (select count(*) from services_utilisateurs where id_utilisateur= 10 and MONTH(date_inscription) = 1) union all
    select 2 , (select pseudo from utilisateurs where id = 10), (select count(*) from services_utilisateurs where id_utilisateur= 10 and MONTH(date_inscription) = 2)  union all
    select 3 , (select pseudo from utilisateurs where id = 10), (select count(*) from services_utilisateurs where id_utilisateur= 10 and MONTH(date_inscription) = 3)  union all
    select 4 , (select pseudo from utilisateurs where id = 10), (select count(*) from services_utilisateurs where id_utilisateur= 10 and MONTH(date_inscription) = 4) union all
    select 5 , (select pseudo from utilisateurs where id = 10), (select count(*) from services_utilisateurs where id_utilisateur= 10 and MONTH(date_inscription) = 5) union all
    select 6 , (select pseudo from utilisateurs where id = 10), (select count(*) from services_utilisateurs where id_utilisateur= 10 and MONTH(date_inscription) = 6) union all
    select 7 , (select pseudo from utilisateurs where id = 10), (select count(*) from services_utilisateurs where id_utilisateur= 10 and MONTH(date_inscription) = 7) union all
    select 8 , (select pseudo from utilisateurs where id = 10), (select count(*) from services_utilisateurs where id_utilisateur= 10 and MONTH(date_inscription) = 8) union all
    select 9 , (select pseudo from utilisateurs where id = 10), (select count(*) from services_utilisateurs where id_utilisateur= 10 and MONTH(date_inscription) = 9) union all
    select 10 , (select pseudo from utilisateurs where id = 10), (select count(*) from services_utilisateurs where id_utilisateur= 10 and MONTH(date_inscription) = 10) union all
    select 11 , (select pseudo from utilisateurs where id = 10), (select count(*) from services_utilisateurs where id_utilisateur= 10 and MONTH(date_inscription) = 11) union all
    select 12 , (select pseudo from utilisateurs where id = 10), (select count(*) from services_utilisateurs where id_utilisateur= 10 and MONTH(date_inscription) = 12) )
    select * from tbl1;

SELECT M.*, 
(select utilisateurs.pseudo from utilisateurs where id = 3) as pseudo_utilisateur,

(select count(distinct services.id) from services
 LEFT JOIN services_utilisateurs
    ON services.id = services_utilisateurs.id_service
 where M.mois = MONTH(services.date_service) 
 and services.id_utilisateur = 3
 ) as count_participation

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



--     ( ) AS pseudo_utilisateur,
    -- (
        
    -- ) AS count_participation


-- where services.id_utilisateur = 3)
    -- AND services.id_utilisateur = 3;
-- where services.id_utilisateur = 3 or services.id_utilisateur  NULL;

