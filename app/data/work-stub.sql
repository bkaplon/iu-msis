USE dashboard;

DROP TABLE IF EXISTS Work;

CREATE TABLE Work (
  work_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  team_id INT NOT NULL,
  task_id INT NOT NULL,
  work_start DATETIME NOT NULL,
  hours DECIMAL(3,1) NOT NULL,
  -- tz VARCHAR(10), --TODO? Too messy to deal with time zones?
  completion_estimate int NOT NULL CHECK(0 <= completion_estimate <= 100)
);

DROP TABLE IF EXISTS Teams;
CREATE TABLE Teams (
  team_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  name VARCHAR(15) NOT NULL,
  hourly_rate DECIMAL(6,2) NOT NULL
);

INSERT INTO Teams (team_id, name, hourly_rate)
VALUES (1, 'California Dream', 90);
INSERT INTO Teams (team_id, name, hourly_rate)
VALUES (2, 'Noble Carrots', 100);
INSERT INTO Teams (team_id, name, hourly_rate)
VALUES (3, 'MS Why S', 80);
INSERT INTO Teams (team_id, name, hourly_rate)
VALUES (4, 'Luke\'s Parents', 90);

INSERT INTO Work (work_id, team_id, task_id, work_start, hours, completion_estimate)
VALUES (1, 2, 1, '2018-07-29 08:30', 3, 10);
INSERT INTO Work (work_id, team_id, task_id, work_start, hours, completion_estimate)
VALUES (2, 1, 1, '2018-07-29 13:30', 2.1, 25);
INSERT INTO Work (work_id, team_id, task_id, work_start, hours, completion_estimate)
VALUES (3, 2, 1, '2018-07-30 08:30', 3, 50);
INSERT INTO Work (work_id, team_id, task_id, work_start, hours, completion_estimate)
VALUES (4, 2, 1, '2018-08-01 09:30', 4, 80);
INSERT INTO Work (work_id, team_id, task_id, work_start, hours, completion_estimate)
VALUES (5, 2, 1, '2018-08-03 14:30', 3.5, 85);
