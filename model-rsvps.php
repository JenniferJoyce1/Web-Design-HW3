<?php
function selectRSVPS() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `RSVP`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function insertRSVPS($eID, $aID, $rStatus) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO RSVP (Event_ID, Attendee_ID, RSVP_Status) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $eID, $aID, $rStatus);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateRSVPS($eID, $aID, $rStatus, $rID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE RSVP SET Event_ID = ?, Attendee_ID = ?, RSVP_Status = ? WHERE RSVP_ID = ?");
        $stmt->bind_param("iisi", $eID, $aID, $rStatus, $rID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteRSVPS($rID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM RSVP WHERE RSVP_ID = ? ");
        $stmt->bind_param("i", $rID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}





?>
