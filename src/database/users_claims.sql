create table if not exists "users_claims"
(
    id_claim        serial
        primary key,
    claim_timestamp timestamp not null,
    id_user         integer   not null
        constraint id_user
            references users
);