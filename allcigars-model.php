<?php
function selectCigars() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT cigar_id, brand, model, available, price, size FROM `Cigars`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertCigar($model, $brand, $size, $available, $price) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Cigars` (`model`, `brand`, `size`, `available`, `price`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssii", $model, $brand, $size, $available, $price);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
