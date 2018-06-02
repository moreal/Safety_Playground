CREATE TABLE games (
    gid MEDIUMINT NOT NULL AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL,
    win FLOAT,
    draw FLOAT,
    lose FLOAT,
    date TIMESTAMP,
    ret varchar(4),
    PRIMARY KEY (gid)
);