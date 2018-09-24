<?php

require '../../app/common.php';

// POST only, as work is normally listed with tasks
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // The request is using the POST method
}

// ELSE, get
$taskId = $GET['taskId'] ?? 0;

$work = Work::findByTaskId($taskId);

echo json_encode($work);
