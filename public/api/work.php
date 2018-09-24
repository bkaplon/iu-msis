<?php
require '../../app/common.php';

// Get task_id
$taskId = $_GET['taskId'] ?? 0;

// Fetch all the work for that task id
$work = Work::findByTaskId($taskId);

// convert to json and print
echo json_encode($work);
