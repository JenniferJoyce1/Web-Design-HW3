<h1>Attendees</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr> 
      <th>ID</th>   
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Post Button</th>
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
     <td>
       <form meathod = "post" action="guests-per-attendee.php">
         <input type="hidden" name="iid" value="<?php echo $attendee['Attendee_ID']; ?>">
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

