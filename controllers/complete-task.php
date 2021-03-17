<?php

use TaskApp\DB;
use TaskApp\Task;
use TaskApp\Request;

$connection = DB::connect();
$tasks = new Task($connection);
$tasks->setComplete(intval(basename(Request::uri())));