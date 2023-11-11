<?php
function selectEvents() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare(SELECT Event_Name, count(r.RSVP_Status) AS num_attendees FROM `Event` e JOIN `RSVP` r ON e.Event_ID=r.Event_ID 
            WHERE r.RSVP_Status = 'Yes' GROUP BY Event_Name;");
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
