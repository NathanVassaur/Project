<?php
$pageTitle = "Home";
<?php
require_once("util-db.php");
require_once("model-cigars.php");

$pageTitle = "Cigars";
include "view-header.php";
$cigars = selectCigars();
include "view-cigars.php";
include "view-footer.php";
?>

<?php
function selectCigars() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT brand, model, size FROM `Cigars`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>


