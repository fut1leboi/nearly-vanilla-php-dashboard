<?php

require('vendor/autoload.php');

use App\Models\Room;
use App\Controllers\Common;

$room = new Room();

$controller = new Common();
$rooms_data = $room->get();
$method = $_GET['method'] ?? 'students';
unset($_GET['method']);
unset($_GET['controller']);
$data = array_merge($_GET, $_POST);

call_user_func_array(array($controller, $method), sizeof($data) === 0 ? array() : ['data'=>$data]);