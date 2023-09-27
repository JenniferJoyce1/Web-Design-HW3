<h1>Events and their Attendees</h1>
<div class="card-group">
<?php
while ($event = $events -> fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $event['Event_Name']; ?></h5>
      <p class="card-text"> 
<?php 
  $attendees = selectAttendeesByEvent($event['Event_ID']);
  while ($attendee = $attendees->fetch_assoc()) {
?>
<?php    
    }
?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Date: <td><?php echo $event['Event_Date']; ?>Last updated 3 mins ago</small></p>
    </div>
  </div>
<?php      
}
?>
</div>
