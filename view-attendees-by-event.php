<h1>Attendees for Event</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr> 
      <th>Attendee ID</th>   
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>RSVP Status</th>
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
     <td><?php echo $attendee['RSVP_Status']; ?></td>
  </tr>
<?php      
}
?>
    </tbody>
  </table>
</div>
