<?php

require '../../app/common.php';

// Get the taskId
$taskId = $_GET['taskId'] ?? 0;

// Fetch Work from database
$work = Work::findByTaskId($taskId);

// convert to JSON and print
header('Content-type: applicaiton/json');
echo json_encode($work);
