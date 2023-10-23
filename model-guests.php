<?php
function selectGuests() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `Guest`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



function selectGuestsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Guest_ID , Guest_Name FROM Guest ORDER BY Guest_Name");
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
