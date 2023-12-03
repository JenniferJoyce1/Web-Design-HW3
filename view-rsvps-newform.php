<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newRSVPsModal">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newRSVPsModal" tabindex="-1" aria-labelledby="newRSVPsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newRSVPsModalLabel">Insert New RSVP</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method = "post" action="">
            <div class="mb-3">
              <label for="eID" class="form-label">Event ID</label>
              <input type="text" class="form-control" id="eID" name="eID">
            </div>
            <div class="mb-3">
              <label for="aID" class="form-label">Attendee ID</label>
              <input type="text" class="form-control" id="aID" name="aID">
            </div>
            <div class="mb-3">
              <label for="rStatus" class="form-label">RSVP Status (Yes or No) </label>
              <input type="text" class="form-control" id="rStatus" name="rStatus">
            </div>
            <div class="mb-3">
              <label for="rGuest" class="form-label">Bringing a Guest? (Yes or No) </label>
              <input type="text" class="form-control" id="rGuest" name="rGuest">
            </div>
            <div class="mb-3">
              <label for="rDiet" class="form-label">Dietary Restrictions </label>
              <input type="text" class="form-control" id="rDiet" name="rDiet">
            </div>
                   <input type= "hidden" name="actionType" value="Add">
            <button type="submit" class="btn btn-primary">Submit New RSVP</button>
        </form>
      </div>
    </div>
  </div>
</div>
