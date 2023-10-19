<?php
function selectEvents() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `Event`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

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



function updateEvents($eName, $eDate, $eLocation, $eID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Event SET Event_Name = ?, Event_Date = ?, Event_Location = ? WHERE Event_ID = ?");
        $stmt->bind_param("sssi", $eName, $eDate, $eLocation, $eID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectEventsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Event_ID , Event_Name FROM Event ORDER BY Event_Name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateAttendees($aFName, $aLName, $aEmail, $aID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Attendee SET Attendee_FirstName = ?, Attendee_LastName = ?, Attendee_Email = ? WHERE Attendee_ID = ?");
        $stmt->bind_param("sssi", $aFName, $aLName, $aEmail, $aID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function selectAttendeesForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Attendee_ID, Attendee_FirstName, Attendee_LastName FROM Attendee ORDER BY Attendee_FirstName");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}





function deleteEvents($eID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM Event WHERE Event_ID = ? ");
        $stmt->bind_param("i", $eID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
