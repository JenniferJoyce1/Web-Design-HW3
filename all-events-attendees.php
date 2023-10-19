<?php
require_once("util.db.php");
require_once("model-all-events-attendees.php");

$pageTitle = "Events with their respective attendees";
include "view-header.php";


$events = selectEvents();
include "view-all-events-attendees.php";
include "view-footer.php";
?>
