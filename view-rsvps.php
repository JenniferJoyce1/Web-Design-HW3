<h1>Attendees</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr> 
      <th>RSVP ID</th>   
      <th>Event ID</th>
      <th>Attendee ID</th>
      <th>Status</th>
        </tr>
    </thead>
    <tbody>
<?php
while ($rsvp = $rsvps -> fetch_assoc()) {
?>
  <tr> 
     <td><?php echo $rsvp['RSVP_ID']; ?></td>
     <td><?php echo $rsvp['Event_ID']; ?></td>
     <td><?php echo $rsvp['Attendee_ID']; ?></td>
     <td><?php echo $rsvp['RSVP_Status']; ?></td>
  </tr>
<?php      
}
?>
    </tbody>
  </table>
</div>
