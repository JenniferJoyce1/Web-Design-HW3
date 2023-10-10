<?php
require_once("util.db.php");
require_once("model-events.php");

$pageTitle = "Events";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      if (insertEvent($_POST['eName'], $_POST['eDate'], $_POST['eLocation'])) {
        echo '<div class="alert alert-success" role="alert" > Success! Event Added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error.</div>';
      }
        break;
        case "Delete":
      if (deletEvent($_POST['eID'])) {
        echo '<div class="alert alert-success" role="alert" > Success! Event Deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error.</div>';
      }
        break;
  }
}

$events = selectEvents();
include "view-events.php";
include "view-footer.php";
?>
