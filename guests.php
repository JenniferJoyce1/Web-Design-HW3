<?php
require_once("util.db.php");
require_once("model-guests.php");

$pageTitle = "Guests";
include "view-header.php";
$guests = selectGuests();
include "view-guests.php";
include "view-footer.php";
?>
