create table if not exists "users"
(
    id_user  serial
        primary key,
    nickname text              not null
        unique,
    email    text              not null
        unique,
    password text              not null,
    created  timestamp         not null,
    role     integer default 0 not null,
    balance  integer default 0 not null
);