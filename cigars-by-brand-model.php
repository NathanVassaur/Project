
<?php
function selectCigarsByBrand() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT cigar_id, brand, model, size, available FROM `Cigars` ORDER BY brand, model");
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
