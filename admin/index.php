<?php

define('DS',DIRECTORY_SEPARATOR);
define('ROOT',realpath(dirname(__FILE__)).DS);
define('URL',"http://localhost/main3/admin/");

require_once "Config/Autoload.php";
Config\Autoload::run();
require_once "Views/main.php";
Config\Enrutador::run(new Config\Request());
