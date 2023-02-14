<?php

require 'Database.php';
require 'config/router.php';

include('./helpers/functions.php');


routeToController($uri, $routes);