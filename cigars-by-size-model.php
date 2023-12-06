<?php
function selectCigarsBySize() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT cigar_id, brand, model, size FROM `Cigars` GROUP BY size ORDER BY COUNT(*) DESC, size ASC ");
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
