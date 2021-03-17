<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require "vendor/autoload.php";
use TaskApp\Request;
use TaskApp\Router;

require Router::load('routes.php')->direct(Request::uri());