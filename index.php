<?php

require 'Database.php';
require 'Response.php';
require 'config/router.php';

include('./helpers/functions.php');


routeToController($uri, $routes);