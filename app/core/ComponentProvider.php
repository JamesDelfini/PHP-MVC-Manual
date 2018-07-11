<?php

require 'FunctionProvider.php';
require 'RouterProvider.php';
require 'database/connection.php';

$config = require 'config.php';
$conn = Connection::make($config['database']);