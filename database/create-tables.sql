CREATE TABLE `golfers` (
  `golfer_id` integer unique,
  `name` varchar(50)  not null,
  `handicap` double not null default '0.00',
  `gender` enum('male', 'female') not null,
  `create_at` datetime,
  `update_at` datetime,
  KEY `pk` (`golfer_id`)
);

CREATE TABLE ` tournaments` (
  `tournament_id` integer unique,
  `flight_id` integer not null,
  `create_at` datetime,
  `update_at` datetime,
  KEY `pk` (`tournament_id`),
  KEY `fk` (`flight_id`)
);

CREATE TABLE `flights` (
  `flight_id` integer unique,
  `golfer_id` integer not null,
  `num_of_players` integer,
  `type` varchar(50),
  `create_at` datetime,
  `update_at` datetime,
  KEY `pk` (`flight_id`),
  KEY `fk` (`golfer_id`)
);

