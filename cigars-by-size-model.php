<?php
function selectCigarsBySize() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT size, COUNT(*) as size_count FROM `Cigars` GROUP BY size ORDER BY size_count DESC, size");
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
