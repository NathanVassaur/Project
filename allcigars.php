<?php
$pageTitle = "Cigars";
require_once("util-db.php");
require_once("allcigars-model.php");


$cigars = selectCigars();
include "allcigars-view.php";

?>



