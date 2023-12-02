<?php
require_once("util.db.php");
require_once("model-planners.php");

$pageTitle = "Planners";
include "view-header.php";


if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      if (insertPlanners($_POST['eID'], $_POST['pName'], $_POST['pNumber'], $_POST['pEmail'], $_POST['pSpeciality'])) {
        echo '<div class="alert alert-success" role="alert" > Success! Planner Added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error.</div>';
      }
        break;
        case "Delete":
      if (deletePlanners($_POST['pID'])) {
        echo '<div class="alert alert-success" role="alert" > Success! Planner Deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error.</div>';
      }
        break;
        case "Edit":
      if (updatePlanners($_POST['eID'], $_POST['pName'], $_POST['pNumber'], $_POST['pEmail'], $_POST['pSpeciality'], $_POST['pID'])) {
        echo '<div class="alert alert-success" role="alert" > Success! Planner Edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error.</div>';
      }
        break;
  }
}





$planners = selectPlanners();
include "view-planners.php";
include "view-footer.php";
?>
