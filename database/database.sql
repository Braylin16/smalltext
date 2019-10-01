CREATE TABLE text (
    id              int(11) auto_increment primary key,
    text            text not null,
    letras          varchar(100) not null,
    palabras        varchar(100) not null,
    parrafos        varchar(100) not null
)ENGINE=InnoDb;