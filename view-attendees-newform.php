<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newAttendeesModal">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newAttendeesModal" tabindex="-1" aria-labelledby="newAttendeesModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newAttendeesModalLabel">Insert New Attendee</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method = "post" action="">
            <div class="mb-3">
              <label for="aFName" class="form-label">Attendee First Name</label>
              <input type="text" class="form-control" id="aFName" name="aFName">
            </div>
            <div class="mb-3">
              <label for="aLName" class="form-label">Attendee First Name</label>
              <input type="text" class="form-control" id="aLName" name="aLName">
            </div>
            <div class="mb-3">
              <label for="aEmail" class="form-label">Attendee Email</label>
              <input type="text" class="form-control" id="aEmail" name="aEmail">
            </div>
            <div class="mb-3">
              <label for="aPhone" class="form-label">Attendee Phone Number (###-###-####)</label>
              <input type="text" class="form-control" id="aPhone" name="aPhone">
            </div>
            <div class="mb-3">
              <label for="aPerfer" class="form-label">Attendee Perferred Contact Method (Text, Call, Or Email)</label>
              <input type="text" class="form-control" id="aPerfer" name="aPerfer">
            </div>
            <div class="mb-3">
              <label for="aEmergency" class="form-label">Attendee Emergency Contact (###-###-####)</label>
              <input type="text" class="form-control" id="aEmergency" name="aEmergency">
            </div>
                   <input type= "hidden" name="actionType" value="Add">
            <button type="submit" class="btn btn-primary">Submit New Attendee</button>
        </form>
      </div>
    </div>
  </div>
</div>
