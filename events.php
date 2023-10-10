<?php
require_once("util.db.php");
require_once("model-events.php");

$pageTitle = "Events";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      insertEvent($_POST['eName'], $_POST['eDate'], $_POST['eLocation']); 
  }
}

$events = selectEvents();
include "view-events.php";
include "view-footer.php";
?>
