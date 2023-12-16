<?php
function selectCigarsBySize() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.cigar_id, c.brand, c.model, c.size, c.available, c.price
                                FROM `Cigars` c
                                JOIN (
                                    SELECT size, COUNT(*) as size_count
                                    FROM `Cigars`
                                    GROUP BY size
                                ) counts ON c.size = counts.size
                                ORDER BY size_count DESC, c.size ASC");
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

