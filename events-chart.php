
<?php
require_once("util.db.php");
require_once("model-events-chart.php");

$pageTitle = "Events Chart";
include "view-header.php";


$events = selectEvents();
include "view-events-chart.php";
include "view-footer.php";
?>
