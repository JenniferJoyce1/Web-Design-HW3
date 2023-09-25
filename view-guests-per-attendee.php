<h1>Attendees for Event</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr> 
      <th>Attendee First Name</th>   
      <th>Attendee Last Name</th>
      <th>Relationship</th>
      <th>Guest Name</th>
        </tr>
    </thead>
    <tbody>
<?php
while ($guest = $guests -> fetch_assoc()) {
?>
  <tr> 
     <td><?php echo $guests['Attendee_FirstName']; ?></td>
     <td><?php echo $guests['Attendee_LastName']; ?></td>
     <td><?php echo $guests['Guest_Relationship']; ?></td>
     <td><?php echo $guests['Guest_Name']; ?></td>
  </tr>
<?php      
}
?>
    </tbody>
  </table>
</div>
