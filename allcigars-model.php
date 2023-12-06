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
function updateCigar($cid, $brand, $model, $size, $available, $price) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Cigars` SET `brand`=?, `model`=?, `size`=?, `available`=?, `price`=? WHERE `cigar_id`=?");
        $stmt->bind_param("sssiii", $brand, $model, $size, $available, $price, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
