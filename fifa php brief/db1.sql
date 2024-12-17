CREATE TABLE all_players(
	id int not null PRIMARY KEY,
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
	id int not null PRIMARY KEY,
    diving int not null,
    handling int not null,
    kicking int not null,
    reflexes int not null ,
    speed int not null,
    positioning int not null,
    player_id int not null,
    foreign key (player_id) references all_players(id) 
);
CREATE TABLE normal_players(
	id int not null PRIMARY KEY,
    pace int not null,
    shooting int not null,
    passing int not null,
    dribbling int not null ,
    defending int not null,
    phisical int not null,
     player_id int not null,
    foreign key (player_id) references all_players(id)
);

CREATE TABLE clubs(
	id int not null PRIMARY KEY,
    club varchar(50) not null,
    logo varchar(150) not null

);

CREATE TABLE nationalitys(
	id int not null PRIMARY KEY,
    country varchar(50) not null,
    flag varchar(150) not null

);

