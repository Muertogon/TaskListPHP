<?php
use TaskApp\DB;
use TaskApp\Task;
use TaskApp\Request;

$connection= DB::connect();
$tasks = new Task($connection);
$tasks->deleteTask(intval(basename(Request::uri())));