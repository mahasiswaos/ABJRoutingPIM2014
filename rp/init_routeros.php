<?php

require './config.php';
require './routeros_api.class.php';
$API = new routeros_api();
$API->debug = $conn['debug'];
$API->connect($conn['ip'], $conn['username'], $conn['password']);

