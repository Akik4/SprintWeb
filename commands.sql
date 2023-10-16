CREATE TABLE user( id int AUTO_INCREMENT, email LONGTEXT, PASSWORD LONGTEXT, nickname VARCHAR(12), date_register DATE DEFAULT CURRENT_DATE, last_connexion DATE DEFAULT CURRENT_DATE, PRIMARY KEY(id)) ENGINE=InnoDB;

create table score(id int(255) auto_increment primary key, 
game_id int,
difficulty int(1), 
user_id int,
point int(10), 
date_played DATE default current_date,
CONSTRAINT fk_game_id
    FOREIGN KEY (game_id) REFERENCES game(gamemode_id),
CONSTRAINT fk_user_id
    FOREIGN KEY (user_id) REFERENCES user(user_id)
) ENGINE=InnoDB;


create table chat(
    id int auto_increment PRIMARY KEY, 
    game_id int, 
    sender_id int,
     content longtext, 
     date_send date default current_date,
    CONSTRAINT fk_sender_id
        FOREIGN KEY (sender_id) REFERENCES user(user_id),
    CONSTRAINT fk_games_id
        FOREIGN KEY (game_id) REFERENCES game(gamemode_id)
     )  ENGINE=InnoDB;

create table game(
    gamemode_id int auto_increment,
    gamemode_name VARCHAR(20),
    primary key (gamemode_id)
)  ENGINE=InnoDB;


INSERT INTO user (email, PASSWORD, nickname) values
    ("roger.ahmed@gmail.com", "sauce", "roro"),
    ("philibertdu39@yopmail.fr", "philibert", "philibert"),
    ("albertcarre@free.fr", "camembert", "bebert"),
    ("thibaud.M@gmail.com" , "ILoveCoding", "LE PO"),
    ("jeankikoudu95@yahoo.com", "1234", "JeanKikou");

INSERT INTO score (user_id, game_id, difficulty, point) values 
    ("5", "1", "1", "120"),
    ("5", "1", "3", "450"),
    ("5", "1", "2", "150"),
    ("5", "1", "2", "164"),
    ("5", "1", "1", "95");

INSERT INTO chat(sender_id, game_id, content) values
    ("1", "1", "hey"),
    ("2", "1", "boom"),
    ("3", "1", "boom"),
    ("4", "1", "bien"),
    ("5", "1", "gagner"),
    ("1", "1", "trop cool"),
    ("2", "1", "trop cool"),
    ("3", "1", "trop cool"),
    ("4", "1", "trop cool"),
    ("5", "1", "trop bien"),
    ("1", "1", "GG"),
    ("2", "1", "GG"),
    ("3", "1", "GG"),
    ("4", "1", "GGWP"),
    ("5", "1", "THX"),
    ("1", "1", "THX"),
    ("2", "1", "LOL"),
    ("3", "1", "WIN"),
    ("4", "1", "GG"),
    ("5", "1", "xD"),
    ("1", "1", "OTG"),
    ("2", "1", "LOL"),
    ("3", "1", "Np"),
    ("4", "1", "yeah"),
    ("5", "1", "WP");


-- 4eme story
UPDATE user 
SET email = "grandBidule@gmail.com", password = "kiwi"
-- condition WHERE
WHERE user_id = 1;

-- 5eme story
SELECT *
FROM user
WHERE email = "input_mail" and password =  "input_password";

-- 6eme story 
INSERT INTO table game ('The Power Of Memory');

-- 7eme story 
SELECT id, difficulty, point, gamemode_name, nickname from score INNER JOIN game as game_id ON (game_id=gamemode_id) INNER JOIN user ON (score.user_id=user.user_id) ORDER BY point ASC;

-- 8eme story 
SELECT id, difficulty, point, gamemode_name, nickname from score INNER JOIN game as game_id ON (game_id=gamemode_id) INNER JOIN user ON (score.user_id=user.user_id) ORDER BY point ASC;
WHERE(
    difficulty = 1;
    user_id = 2;
) 

-- 9eme story 

UPDATE point from score WHERE user_id = "1" SET 495

-- 10 story 

INSERT INTO chat (game_id, sender_id, content)
values (1, 3, "node.js >>> php")

-- 11 story 

select * from chat where date_send > now() - interval 1 day; 
--  PAST 24 hours
select content,  date_send from chat











