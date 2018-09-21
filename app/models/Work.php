<?php

class Work
{
  public $id;
  public $start_date;  //'YYYY-MM-DD'
  public $end_date;    //'YYYY-MM-DD'

  public function __construct($row) {
    $this->id = $row['id'];

    $this->start_date = $row['start_date'];
    $this->end_date = $row['end_date'];

    // TODO: Where should this be calculated? $this->hours = 0;
  }

  public static function getAllWorkByTask(int $taskId) {
    // 1. Connect to the database
    // 2. Run a query
    // 3. Read the results
    // 4. For each row, make a new work object
    // 5. return the array of work objects
    return [];
  }
}
