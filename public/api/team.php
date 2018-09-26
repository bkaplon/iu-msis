<?php

require '../../app/common.php';




// Fetch from database
$teams = Team::findAll();

// convert to JSON and print
echo json_encode($teams);
