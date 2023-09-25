<?php
function selectAttendeesByEvent($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT a.Attendee_ID, a.Attendee_FirstName, a.Attendee_LastName, a.Attendee_Email,r.RSVP_Status 
        FROM `Attendee` a JOIN RSVP r on a.Attendee_ID = r.Attendee_ID 
        WHERE r.Event_ID=?");
        $stmt->bind_param("i", $iid);
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
