-- STORY 1
CREATE TABLE user( 
    id INT UNSIGNED NOT NULL AUTO_INCREMENT, 
    email varchar(100) NOT NULL UNIQUE KEY, 
    psw varchar(255) NOT NULL,
    nickname VARCHAR(12) NOT NULL UNIQUE KEY,
    date_register DATE DEFAULT CURRENT_DATE,
    last_connexion DATE DEFAULT CURRENT_DATE,
    PRIMARY KEY(id)) 
CHARACTER SET utf8 
ENGINE=InnoDB;

create table score(
id INT UNSIGNED NOT NULL auto_increment primary key, 
game_id INT UNSIGNED NOT NULL,
difficulty int(1) NOT NULL, 
user_id int UNSIGNED NOT NULL,
points int(10) NOT NULL, 
date_played DATE default current_date,
CONSTRAINT fk_game_id
    FOREIGN KEY (game_id) REFERENCES game(gamemode_id),
CONSTRAINT fk_user_id
    FOREIGN KEY (user_id) REFERENCES user(user_id)
) 
CHARACTER SET utf8
ENGINE=InnoDB;


create table chat(
    id INT UNSIGNED NOT NULL auto_increment PRIMARY KEY, 
    game_id INT UNSIGNED NOT NULL, 
    sender_id INT UNSIGNED NOT NULL,
    content longtext NOT NULL, 
    date_send date default current_date,
    CONSTRAINT fk_sender_id
    FOREIGN KEY (sender_id) REFERENCES user(user_id),
    CONSTRAINT fk_games_id
        FOREIGN KEY (game_id) REFERENCES game(gamemode_id)
     )
     CHARACTER SET utf8  
     ENGINE=InnoDB;

create table game(
    gamemode_id INT UNSIGNED NOT NULL auto_increment,
    gamemode_name VARCHAR(20) NOT NULL,
    primary key (gamemode_id)
)  
CHARACTER SET utf8  
ENGINE=InnoDB;

-- STORY 2

INSERT INTO user (email, psw, nickname) values
    ("roger.ahmed@gmail.com", "sauce", "roro"),
    ("philibertdu39@yopmail.fr", "philibert", "philibert"),
    ("albertcarre@free.fr", "camembert", "bebert"),
    ("thibaud.M@gmail.com" , "ILoveCoding", "LE PO"),
    ("jeankikoudu95@yahoo.com", "1234", "JeanKikou");


INSERT INTO score (user_id, game_id, difficulty, points) values 
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

-- Story 3
INSERT INTO user(email, pwd, nickname)
value ("input_email", "input_pwd", "input_nickname");

-- 4eme story
UPDATE user 
SET email = "grandBidule@gmail.com", psw = "kiwi"
WHERE user_id = 1;

-- 5eme story
SELECT *
FROM user
WHERE email = "input_mail" and psw =  "input_psw";

-- 6eme story 
INSERT INTO table game ('The Power Of Memory');

-- 7eme story 
SELECT id, difficulty, points, gamemode_name, nickname from score
 INNER JOIN game as game_id 
    ON (game_id=gamemode_id) 
 INNER JOIN user 
    ON (score.user_id=user.user_id) 
ORDER BY gamemode_name ASC, difficulty ASC, points ASC;

-- 8eme story 
SELECT id, difficulty, points, gamemode_name, nickname from score
 INNER JOIN game as game_id 
    ON (game_id=gamemode_id) 
 INNER JOIN user 
    ON (score.user_id=user.user_id) 
where gamemode_name ="memory" and nickname = "roro" and difficulty = "2"
ORDER BY gamemode_name ASC, difficulty ASC, points ASC;

-- 9eme story 

UPDATE points from score WHERE user_id = "1" and difficulty = "1" and game_id = "1" SET 495

-- 10 story 

INSERT INTO chat (game_id, sender_id, content)
values (1, 3, "node.js >>> php")

-- 11 story 

select content,  date_send, nickname from chat
INNER JOIN user on (chat.sender_id=user.user_id)
where date_send > now() - interval 1 day;

-- 12 STORY

select points, nickname from score
INNER JOIN user on (score.user_id=user.user_id) 
where nickname like "%i%";

select points, nickname from score
INNER JOIN user on (score.user_id=user.user_id) 
where nickname like "%o%";











