<?php
//In this file starts the App
require_once './Models/bootcampModel.php';
require_once './Controllers/bootcampController.php';

$controller = new BootcampController ();
$controller -> add ();

?>