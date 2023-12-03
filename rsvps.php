<?php
require_once("util.db.php");
require_once("model-rsvps.php");

$pageTitle = "RSVPs";
include "view-header.php";


if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      if (insertRSVPS($_POST['eID'], $_POST['aID'], $_POST['rStatus'], $_POST['rGuest'], $_POST['rDiet'])) {
        echo '<div class="alert alert-success" role="alert" > Success! RSVP Added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error.</div>';
      }
        break;
        case "Delete":
      if (deleteRSVPS($_POST['rID'])) {
        echo '<div class="alert alert-success" role="alert" > Success! RSVP Deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error.</div>';
      }
        break;
        case "Edit":
      if (updateRSVPS($_POST['eID'], $_POST['aID'], $_POST['rStatus'], $_POST['rGuest'], $_POST['rDiet'], $_POST['rID'])) {
        echo '<div class="alert alert-success" role="alert" > Success! RSVP Edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error.</div>';
      }
        break;
  }
}




$rsvps = selectRSVPS();
include "view-rsvps.php";
include "view-footer.php";
?>
