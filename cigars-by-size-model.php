<?php
function selectCigarsBySize() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT cigar_id, brand, model, size, COUNT(*) as cigar_count FROM `Cigars` GROUP BY size ORDER BY cigar_count DESC");
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
