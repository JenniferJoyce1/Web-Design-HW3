<?php
require_once("util.db.php");
require_once("model-attendees-by-event.php");

$pageTitle = "Attendees for Event";
include "view-header.php";
$attendees = selectAttendeesByEvent($_GET['id']);
include "view-attendees-by-event.php";
include "view-footer.php";
?>
