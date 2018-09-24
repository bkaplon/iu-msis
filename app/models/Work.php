<?php

class Work
{
  public static function findByTaskId($id) {
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    var_dump($db);

    die;
  }
}
