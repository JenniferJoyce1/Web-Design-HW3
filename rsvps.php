<?php
require_once("util.db.php");
require_once("model-rsvps.php");

$pageTitle = "RSVPs";
include "view-header.php";
$rsvps = selectRSVPS();
include "view-rsvps.php";
include "view-footer.php";
?>
