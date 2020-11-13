

CREATE TABLE `golfers` (
  `golfer_id` integer unique AUTO_INCREMENT,
  `flight_id` integer default null,
  `name` varchar(50)  not null,
  `handicap` double not null default '0.00',
  `gender` enum('male', 'female') not null,
  `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
  KEY `pk` (`golfer_id`),
  KEY `fk` (`flight_id`)
);

CREATE TABLE ` tournaments` (
  `tournament_id` integer unique AUTO_INCREMENT,
  `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
  KEY `pk` (`tournament_id`)
);

CREATE TABLE `flights` (
  `flight_id` integer unique AUTO_INCREMENT,
  `tournament_id` integer default null,
  `num_of_players` integer,
  `type` varchar(50),
  `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
  KEY `pk` (`flight_id`),
  KEY `fk` (`tournament_id`)
);






