CREATE TABLE users (
    _uid MEDIUMINT NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    salary INTEGER,
    PRIMARY KEY (_uid),
    UNIQUE(name)
);