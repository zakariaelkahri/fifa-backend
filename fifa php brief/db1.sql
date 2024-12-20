 CREATE TABLE clubs(
	id int not null PRIMARY KEY auto_increment,
    club varchar(50) not null,
    logo varchar(150) not null

);

CREATE TABLE nationalitys(
	id int not null PRIMARY KEY auto_increment,
    country varchar(50) not null,
    flag varchar(150) not null

);
 CREATE TABLE all_players(
	id int not null PRIMARY KEY auto_increment,
    name varchar(50) not null,
    photo varchar(150) not null,
    position varchar(3) not null,
    rating int not null ,
    nationality_id int not null,
    clubs_id int not null,
    foreign key (nationality_id) references nationalitys(id),
    foreign key (clubs_id) references clubs(id) 
    
);

CREATE TABLE goolkeepers(
	id int not null PRIMARY KEY auto_increment,
    diving int not null,
    handling int not null,
    kicking int not null,
    reflexes int not null ,
    speed int not null,
    positioning int not null,
    player_id int not null,
    foreign key (player_id) references all_players(id) 
    on delete CASCADE
    on update CASCADE
);
CREATE TABLE normal_players(
	id int not null PRIMARY KEY auto_increment,
    pace int not null,
    shooting int not null,
    passing int not null,
    dribbling int not null ,
    defending int not null,
    phisical int not null,
     player_id int not null,
    foreign key (player_id) references all_players(id)
    on delete CASCADE
    on update CASCADE
);



-- display players with flag and nationality 
SELECT * from all_players 
    INNER JOIN nationalitys on all_players.nationality_id = nationalitys.id
    INNER JOIN clubs on all_players.clubs_id = clubs.id


