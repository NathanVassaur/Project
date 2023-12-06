<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.68.62.201','nathanva_projectuser', 'Projectuser1!', 'nathanva_project');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
