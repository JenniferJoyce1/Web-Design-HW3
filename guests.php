<?php
require_once("util.db.php");
require_once("model-guests.php");

$pageTitle = "Guests";
include "view-header.php";



if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      if (insertGuests($_POST['gName'], $_POST['gRelationship'])) {
        echo '<div class="alert alert-success" role="alert" > Success! Event Added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error.</div>';
      }
        break;
        case "Delete":
      if (deleteGuests($_POST['gID'])) {
        echo '<div class="alert alert-success" role="alert" > Success! Event Deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error.</div>';
      }
        break;
        case "Edit":
      if (updateGuests($_POST[aID], $_POST['gName'], $_POST['gRelationship'],$_POST['gID'])) {
        echo '<div class="alert alert-success" role="alert" > Success! Event Edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error.</div>';
      }
        break;
  }
}







$guests = selectGuests();
include "view-guests.php";
include "view-footer.php";
?>
