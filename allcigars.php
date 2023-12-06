<?php
$pageTitle = "Home";
require_once("util-db.php");
require_once("model-allcigars.php");

$pageTitle = "Cigars";
include "view-header.php";
$cigars = selectCigars();
include "view-allcigars.php";
include "view-footer.php";
?>



