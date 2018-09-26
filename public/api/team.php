<?php
require '../../app/common.php';




// Fetch all the work for that task id
$teams = Team::findAll();

// convert to json and print
header('Content-type: application/json');
echo json_encode($teams);
