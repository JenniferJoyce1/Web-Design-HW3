<h1>Attendees for Event</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>  
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>RSVP Status</th>
      <th>See their Guests</th>
        </tr>
    </thead>
    <tbody>
<?php
while ($attendee = $attendees -> fetch_assoc()) {
?>
  <tr>
     <td><?php echo $attendee['Attendee_FirstName']; ?></td>
     <td><?php echo $attendee['Attendee_LastName']; ?></td>
     <td><?php echo $attendee['Attendee_Email']; ?></td>
     <td><?php echo $attendee['RSVP_Status']; ?></td>
     <td>
       <form method = "post" action="guests-per-attendee.php">
         <input type="hidden" name="pid" value="<?php echo $attendee['Attendee_ID']; ?>">
        <button type="submit" class="btn btn-primary">Guests</button>
      </form>
  </td>
  </tr>
<?php      
}
?>
    </tbody>
  </table>
</div>
