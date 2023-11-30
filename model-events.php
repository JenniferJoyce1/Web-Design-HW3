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

function insertEvents($eName, $eDate, $eLocation, eCapacity) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO Event (Event_Name, Event_Date, Event_Location, Event_Capacity) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $eName, $eDate, $eLocation, $eCapacity);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateEvents($eName, $eDate, $eLocation, $eCapacity, $eID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Event SET Event_Name = ?, Event_Date = ?, Event_Location = ?, Event_Capacity = ? WHERE Event_ID = ?");
        $stmt->bind_param("sssii", $eName, $eDate, $eLocation, $eCapacity, $eID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
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
