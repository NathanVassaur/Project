


<?php
$pageTitle = "Cigars";
require_once("util-db.php");
require_once("allcigars-model.php");
include "view-header.php";

if (isset ($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertCigar($_POST['cigarBrand'], $_POST['cigarModel'], $_POST['cigarSize'], $_POST['cigarAvailable'], $_POST['cigarPrice'])) {
                echo '<div class="alert alert-success" role="alert">Cigar added.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error adding cigar.</div>';
            }
            break;
        case "Edit":
            if (updateCigar($_POST['cid'], $_POST['editCigarBrand'], $_POST['editCigarModel'], $_POST['editCigarSize'], $_POST['editCigarAvailable'], $_POST['editCigarPrice'])) {
                echo '<div class="alert alert-success" role="alert">Cigar edited.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error editing cigar.</div>';
            }
            break;
    }
}

$cigars = selectCigars();
include "allcigars-view.php";
?>

<?php include "view-footer.php"?>
