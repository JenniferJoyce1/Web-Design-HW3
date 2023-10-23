<?php
require_once("util.db.php");
require_once("model-attendees.php");

$pageTitle = "Attendees";
include "view-header.php";


if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      if (insertEvents($_POST['aFName'], $_POST['aLName'], $_POST['aEmail'])) {
        echo '<div class="alert alert-success" role="alert" > Success! Attendee Added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error.</div>';
      }
        break;
        case "Delete":
      if (deleteEvents($_POST['aID'])) {
        echo '<div class="alert alert-success" role="alert" > Success! Attendee Deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error.</div>';
      }
        break;
        case "Edit":
      if (updateEvents($_POST['aFName'], $_POST['aLName'], $_POST['aEmail'], $_POST['aID'])) {
        echo '<div class="alert alert-success" role="alert" > Success! Attendee Edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error.</div>';
      }
        break;
  }
}





$attendees = selectAttendees();
include "view-attendees.php";
include "view-footer.php";
?>
