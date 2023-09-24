<?php
function selectEvents() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `Attendee`");
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
