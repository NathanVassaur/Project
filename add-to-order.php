<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['cigarId'])) {
    $cigarId = $_POST['cigarId'];

    // add the selected cigar to the order tables
  
    echo '<div class="alert alert-success" role="alert">Cigar added to order.</div>';
  }
}
?>
