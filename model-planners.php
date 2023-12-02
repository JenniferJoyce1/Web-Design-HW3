<?php
function selectPlanners() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `Planner`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function insertPlanners($eID, $pName, $pNumber, $pEmail, $pSpeciality) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO Planner (Event_ID, Planner_Name, Planner_Number, Planner_Email, Planner_Speciality) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issss", $eID, $pName, $pNumber, $pEmail, $pSpeciality);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updatePlanners($eID, $pName, $pNumber, $pEmail, $pSpeciality, $pID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Planner SET Event_ID = ?, Planner_Name = ?, Planner_Number = ?, Planner_Email = ?, Planner_Speciality = ? WHERE Planner_ID = ?");
        $stmt->bind_param("issssi",$eID, $pName, $pNumber, $pEmail, $pSpeciality, $pID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlanners($aID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM Planner WHERE Planner_ID = ? ");
        $stmt->bind_param("i", $pID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
