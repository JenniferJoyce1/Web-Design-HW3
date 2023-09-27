<h1>Events and their Attendees</h1>
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
      <p class="card-text"><small class="text-body-secondary">Date: <td><?php echo $event['Event_Date']; ?></p>
    </div>
  </div>
<?php      
}
?>
</div>
