<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editGuestsModal<?php echo $guest['Guest_ID']; ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editGuestsModal<?php echo $guest['Guest_ID']; ?>" tabindex="-1" aria-labelledby="editGuestsModalLabel<?php echo $guest['Guest_ID']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editGuestsModalLabel<?php echo $$guest['Guest_ID']; ?> ">Edit Guest</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
        <form method = "post" action="">
            <div class="mb-3">
              <label for="aName" class="form-label">Attendee Name</label>
                    <?php
                        $attendeeList = selectAttendeesForInput();
                        include "view-attendee-input-list.php"
                        ?>        
            </div>
            <div class="mb-3">
              <label for="gName<?php echo $guest['Guest_ID']; ?>" class="form-label">Guest Name (First and Last)</label>
              <input type="text" class="form-control" id="gName<?php echo$guest['Guest_ID']; ?>" name="gName" value="<?php echo $guest['Guest_Name']; ?>">
            </div>
            <div class="mb-3">
              <label for="gRelationship<?php echo$guest['Guest_ID']; ?>" class="form-label">Guest Relationship to Attendee</label>
              <input type="text" class="form-control" id="gRelationship<?php echo $guest['Guest_ID']; ?>" name="gRelationship" value="<?php echo $guest['Guest_Relationship']; ?>">
            </div>
                     <input type= "hidden" name="gID" value="<?php echo $guest['guest_ID']; ?>">
                   <input type= "hidden" name="actionType" value="Edit">
            <button type="submit" class="btn btn-primary">Save Guest Info</button>
        </form>
      </div>
    </div>
  </div>
</div>
