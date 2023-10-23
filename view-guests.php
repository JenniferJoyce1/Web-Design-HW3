<h1>Guests</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr> 
      <th>ID</th>   
      <th>Attendee ID</th>
      <th>Guest Name</th>
      <th>Relationship</th>
        </tr>
    </thead>
    <tbody>
<?php
while ($guest = $guests -> fetch_assoc()) {
?>
  <tr> 
     <td><?php echo $guest['Guest_ID']; ?></td>
     <td><?php echo $guest['Attendee_ID']; ?></td>
     <td><?php echo $guest['Guest_Name']; ?></td>
     <td><?php echo $guest['Guest_Relationship']; ?></td>
  </tr>
<?php      
}
?>
    </tbody>
  </table>
</div>
