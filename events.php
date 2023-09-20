<?php
require_once("util.db.php");
require_once("model-events.php");

$pageTitle = "Events";
include "view-header.php";
$events = selectEvents();
include "view-events.php";
include "view-footer.php";
?>
