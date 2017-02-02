
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


case 'admin':
  # code...
$id = $_GET['id'];




  include('administrator.php');
  break;


  case 'selectadmin':
    # code...


  $id = $_GET['id'];


    include('select_admin.php');
    break;




    case 'adminplaatsen':
      # code...




      include('plaatsen_admin.php');
      break;



      case 'verenigingpagina':


      $id = $_GET['id'];





      include('profile.php');





      break;



};

?>
