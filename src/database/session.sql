create table if not exists session
(
    id_session serial
        unique
        constraint session___id_user
            references "user",
    in         date not null,
    out        date not null
);