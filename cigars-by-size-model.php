<?php
function selectCigarsBySize() {
    try {
        $conn = get_db_connection();

     
        $sizeCountQuery = "SELECT size, COUNT(*) as count FROM `Cigars` GROUP BY size ORDER BY count DESC";
        $sizeCountResult = $conn->query($sizeCountQuery);
        $sizeCounts = array();

        while ($row = $sizeCountResult->fetch_assoc()) {
            $sizeCounts[$row['size']] = $row['count'];
        }

        $cigarsQuery = "SELECT cigar_id, brand, model, size FROM `Cigars` ORDER BY FIELD(size, " . implode(", ", array_keys($sizeCounts)) . ") DESC";
        $cigarsResult = $conn->query($cigarsQuery);

        $conn->close();

        return $cigarsBySize;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

