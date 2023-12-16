<?php
$pageTitle = "Sign Up";
require_once("util-db.php");
require_once("signup-model.php");
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            $email = $_POST['email'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];

            if (insertCustomer($email, $firstName, $lastName)) {
                echo '<div class="alert alert-success" role="alert">Account created successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error creating account.</div>';
            }
            break;
    }
}
?>

<?php include "signup-view.php"; ?>
<?php include "view-footer.php"; ?>
