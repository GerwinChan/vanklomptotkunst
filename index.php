
<?php

include('include/config.php');
include('include/database.php');

$action = isset($_GET['action'])?$_GET['action']:'homepage';
switch($action) {

  case 'homepage':





  include('home.php');





break;

case 'locations':



$id = $_GET['id'];




include('locations.php');





break;







};

?>
