<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'jennif18_hw3user', 'hw3userpassword', 'jennif18_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
