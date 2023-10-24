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


function insertGuests($gName, $gRelationship) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO Guest (Guest_Name, Guest_Relationship) VALUES (?, ?)");
        $stmt->bind_param("ss", $gName, $gRelationship);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateGuests($gName, $gRelationship, $gID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Guest SET Guest_Name = ?, Guest_Relationship = ?, WHERE Guest_ID = ?");
        $stmt->bind_param("ssi", $gName, $gRelationship, $gID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteGuests($gID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM Guest WHERE Guest_ID = ? ");
        $stmt->bind_param("i", $gID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
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



?>
