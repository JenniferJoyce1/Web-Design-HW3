<h1>Attendees</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr> 
      <th>ID</th>   
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Hyperlink</th>
        </tr>
    </thead>
    <tbody>
<?php
while ($attendee = $attendees -> fetch_assoc()) {
?>
  <tr> 
     <td><?php echo $attendee['Attendee_ID']; ?></td>
     <td><?php echo $attendee['Attendee_FirstName']; ?></td>
     <td><?php echo $attendee['Attendee_LastName']; ?></td>
     <td><?php echo $attendee['Attendee_Email']; ?></td>
     <td><a href="guests-per-attendee.php?id=<?php echo $attendee['Attendee_ID']; ?>">Guests</a></td>
  </tr>
<?php      
}
?>
    </tbody>
  </table>
</div>





<h1>Events</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr> 
      <th>ID</th>   
      <th>Name</th>
      <th>Date</th>
      <th>Location</th>
      <th>Hyperlink</th>
        </tr>
    </thead>
    <tbody>
<?php
while ($event = $events -> fetch_assoc()) {
?>
  <tr> 
     <td><?php echo $event['Event_ID']; ?></td>
     <td><?php echo $event['Event_Name']; ?></td>
     <td><?php echo $event['Event_Date']; ?></td>
     <td><?php echo $event['Event_Location']; ?></td>
     <td><a href="attendees-by-event.php?id=<?php echo $event['Event_ID']; ?>">Attendees</a></td>
  </tr>
<?php      
}
?>
    </tbody>
  </table>
</div>
