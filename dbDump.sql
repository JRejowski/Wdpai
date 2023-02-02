create table if not exists users
(
    id       serial
        primary key,
    email    varchar(255) not null
        unique,
    password varchar(255) not null
);

alter table users
    owner to postgres;

create table if not exists workout_plan
(
    id      serial
        primary key,
    title   varchar(100) not null,
    id_user integer      not null
        constraint workout_plan_users_id_fk
            references users
            on update cascade on delete cascade,
    image   varchar(255)
);

alter table workout_plan
    owner to postgres;

create table if not exists exercises
(
    id        serial
        primary key,
    name      varchar(255) not null,
    body_part varchar(50)  not null
);

alter table exercises
    owner to postgres;

create table if not exists workout_content
(
    id_workout_plan integer not null
        constraint workout_content_workout_plan_id_fk
            references workout_plan
            on update cascade on delete cascade,
    id_exercise     integer not null
        constraint exercises_workout_content_fk
            references exercises
            on update cascade on delete cascade
);

alter table workout_content
    owner to postgres;

create table if not exists details
(
    id           serial
        primary key,
    id_exercises integer           not null
        constraint details_fk
            references exercises
            on update cascade on delete cascade,
    weight       real    default 0 not null,
    reps         integer default 0 not null
);

alter table details
    owner to postgres;

create table if not exists tracked_workout
(
    id      serial
        primary key,
    id_user integer            not null
        constraint tracked_workout_users_id_fk
            references users
            on update cascade on delete cascade,
    date    date default now() not null
);

alter table tracked_workout
    owner to postgres;

create table if not exists tracked_workout_content
(
    id_tracked_workout integer not null
        constraint tracked_workout_content_tracked_workout_id_fk
            references tracked_workout
            on update cascade on delete cascade,
    id_details         integer not null
        constraint tracked_workout_content_details_id_fk
            references details
            on update cascade on delete cascade
);

alter table tracked_workout_content
    owner to postgres;

insert into tracked_workout_content(id_tracked_workout, id_details)
values  (1, 1),
        (1, 2),
        (1, 3);

insert into tracked_workout (id, id_user, date)
values  (1, 3, '2023-01-31');

insert into exercises (id, name, body_part)
values  (1, 'Bench press', 'Chest'),
        (2, 'Lateral raises', 'Shoulders'),
        (3, 'Squat', 'Legs'),
        (4, 'Deadlift', 'Back'),
        (5, 'Lat pulldown', 'Back'),
        (6, 'Dumbbell Curl', 'Biceps'),
        (7, 'Skull crushers', 'Triceps');

insert into users(id, email, password)
values  (2, 'qwe@qwe.pl', '202cb962ac59075b964b07152d234b70'),
        (3, 'major@bombas.pl', '056eafe7cf52220de2df36845b8ed170c67e23e3');

insert into workout_plan (id, title, id_user, image)
values  (4, 'Chest like Arnold!', 2, 'chest.jpg'),
        (5, 'Old but gold!', 2, 'elders.jpg');

insert into workout_content (id_workout_plan, id_exercise)
values  (4, 1),
        (4, 2),
        (4, 3),
        (5, 3);

insert into details (id, id_exercises, weight, reps)
values  (1, 1, 2, 5),
        (2, 2, 30, 10),
        (3, 3, 1, 500);