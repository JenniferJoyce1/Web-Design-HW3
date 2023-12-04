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


function insertAttendees($aFName, $aLName, $aEmail, $aPhone, $aPerfer, $aEmergency) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO Attendee (Attendee_FirstName, Attendee_LastName, Attendee_Email, Attendee_Phone, Attendee_Perferred, Attendee_Emergency) 
        VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $aFName, $aLName, $aEmail, $aPhone, $aPerfer, $aEmergency);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateAttendees($aFName, $aLName, $aEmail, $aPhone, $aPerfer, $aEmergency, $aID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Attendee SET Attendee_FirstName = ?, Attendee_LastName = ?, Attendee_Email = ?, Attendee_Phone = ?, Attendee_Perferred = ?, Attendee_Emergency = ?
        WHERE Attendee_ID = ?");
        $stmt->bind_param("ssssssi",$aFName, $aLName, $aEmail, $aPhone, $aPerfer, $aEmergency, $aID);
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
