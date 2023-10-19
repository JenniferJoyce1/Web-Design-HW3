<div class = "row">
  <div class = "col">
    <h3>Events and their Attendees</h3>
  </div>
  <div class = "col-auto">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
          <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
          <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
        </svg>
  </div>
</div>
<div class="card-group">
<?php
while ($event = $events -> fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $event['Event_Name']; ?></h5>
      <p class="card-text"> 
      <ul class="list-group">  
<?php 
  $attendees = selectAttendeesByEvent($event['Event_ID']);
  while ($attendee = $attendees->fetch_assoc()) {
?>
     <li class="list-group-item"><?php echo $attendee['Attendee_FirstName']; ?> <?php echo $attendee['Attendee_LastName']; ?> - <?php echo $attendee['RSVP_Status']; ?></li>
<?php    
    }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Date: <td><?php echo $event['Event_Date']; ?> Location: <td><?php echo $event['Event_Location']; ?></small></p>
    </div>
  </div>
<?php      
}
?>
</div>
