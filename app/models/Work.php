<?php

class Work
{
  public $work_id;
  public $task_id;
  public $team_id;
  public $start_date;
  public $stop_date;
  public $hours;

  public function __construct($data) {
    // TODO
  }

  public static function findByTaskId($id) {
    // 1. Create db connection
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    var_dump($db);

    die;

    // 2. Build the query

    // 3. Run the query

    // 4. Handle the results
  }
}
