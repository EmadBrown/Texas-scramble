CREATE TABLE `golfers` (
  `golfer_id` integer unique AUTO_INCREMENT,
  `name` varchar(50)  not null,
  `handicap` double not null default '0.00',
  `gender` enum('M', 'F') not null,
  `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
  KEY `pk` (`golfer_id`)
);

CREATE TABLE ` tournaments` (
  `tournament_id` integer unique AUTO_INCREMENT,
  `flight_id` integer not null,
  `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
  KEY `pk` (`tournament_id`),
  KEY `fk` (`flight_id`)
);

CREATE TABLE `flights` (
  `flight_id` integer unique AUTO_INCREMENT,
  `golfer_id` integer not null,
  `num_of_players` integer,
  `type` varchar(50),
  `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
  KEY `pk` (`flight_id`),
  KEY `fk` (`golfer_id`)
);

