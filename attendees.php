<?php
require_once("util.db.php");
require_once("model-attendees.php");

$pageTitle = "Attendees";
include "view-header.php";
$Attendees = selectAttendees();
include "view-attendees.php";
include "view-footer.php";
?>
