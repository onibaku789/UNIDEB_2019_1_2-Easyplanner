<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

set_include_path(__DIR__);

include_once "components/system/autoload.php";
(new Autoload)->loadClasses();
(new Launcher)->launch();
