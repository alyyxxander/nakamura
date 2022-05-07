create table users (
    usersId          int(11) NOT NULL AUTO_INCREMENT,
    usersFirstName   varchar(128) NOT NULL,
    usersLastName    varchar(128) NOT NULL,
    usersEmail       varchar(128) NOT NULL,
    usersUid         varchar(128) NOT NULL,
    usersPwd         varchar(128) NOT NULL,
    userAddress      varchar(128) NOT NULL,
    userCity         varchar(128) NOT NULL,
    userState        varchar(128) NOT NULL,
    userZip          int(5) NOT NULL,
    PRIMARY KEY (usersId)
);