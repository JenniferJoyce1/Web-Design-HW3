<h1>Attendees for Event</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr> 
      <th>Attendee First Name</th>   
      <th>Attendee Last Name</th>
      <th>is bringing their </th>
      <th>Relationship</th>
      <th>Guest Name</th>
        </tr>
    </thead>
    <tbody>
<?php
while ($guest = $guests -> fetch_assoc()) {
?>
  <tr> 
     <td><?php echo $guest['Attendee_FirstName']; ?></td>
     <td><?php echo $guest['Attendee_LastName']; ?></td>
     <td> is bringing their </td>
     <td><?php echo $guest['Guest_Relationship']; ?></td>
     <td><?php echo $guest['Guest_Name']; ?></td>
  </tr>
<?php      
}
?>
    </tbody>
  </table>
</div>