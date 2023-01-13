create table if not exists "user"
(
    id_user  serial
        primary key,
    nickname text              not null
        unique,
    email    text              not null
        unique,
    password text              not null,
    salt     text              not null,
    created  date              not null,
    role     integer default 0 not null,
    balance  integer default 0 not null
);


