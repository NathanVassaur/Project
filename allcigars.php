<?php
$pageTitle = "Cigars";
require_once("util-db.php");
require_once("model-allcigars.php");


$cigars = selectCigars();
include "allcigars-view.php";

?>


