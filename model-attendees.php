<?php
function selectAttendees() {
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


function insertAttendees($aFName, $aLName, $aEmail) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO Attendee (Attendee_FirstName, Attendee_LastName, Attendee_Email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $aFName, $aLName, $aEmail);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateAttendees($aFName, $aLName, $aEmail, $aID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Attendee SET Attendee_FirstName = ?, Attendee_LastName = ?, Attendee_Email = ? WHERE Attendee_ID = ?");
        $stmt->bind_param("sssi",$aFName, $aLName, $aEmail, $aID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteAttendees($aID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM Attendee WHERE Attendee_ID = ? ");
        $stmt->bind_param("i", $aID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
