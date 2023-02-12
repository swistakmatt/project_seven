create table if not exists "coinflip_draws"
(
    id_draw            serial
        primary key,
    coinflip_timestamp timestamp not null,
    id_user            integer   not null
        constraint id_user
            references users,
    result             boolean   not null,
    amount             integer   not null,
    side               text      not null
);