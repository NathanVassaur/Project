<?php
function selectCigarsBySize() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT cigar_id, brand, model, size FROM `Cigars` ORDER BY size DESC"); 
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
