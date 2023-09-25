<?php
require_once("util.db.php");
require_once("model-guests-per-attendee.php");

$pageTitle = "Attendees' Guests";
include "view-header.php";
$guests = selectGuestsPerAttendee($_GET['id']);
include "view-guests-per-attendee.php";
include "view-footer.php";
?>
