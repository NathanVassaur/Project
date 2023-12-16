<?php
function insertCustomer($email, $firstName, $lastName)
{
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Customers` (`email`, `first_name`, `last_name`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $firstName, $lastName);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
