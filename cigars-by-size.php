<?php
$pageTitle = "Cigars by Size";
require_once("util-db.php");
require_once("cigars-by-size-model.php");

$cigarsBySize = selectCigarsBySize();
include "cigars-by-size-view.php";
?>

