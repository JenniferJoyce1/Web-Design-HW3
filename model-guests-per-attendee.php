<?php
function selectGuestsPerAttendee($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT a.Attendee_FirstName, a.Attendee_LastName, g.Guest_Relationship, g.Guest_Name 
        FROM Attendee a JOIN Guest g ON a.Attendee_ID = g.Attendee_ID
        WHERE a.Attendee_ID=?");
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
