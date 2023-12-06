<?php
$pageTitle = "Cigars by Brand";
require_once("util-db.php");
require_once("cigars-by-brand-model.php");

$cigarsByBrand = selectCigarsByBrand();
include "cigars-by-brand-view.php";
?>

