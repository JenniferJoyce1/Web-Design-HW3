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
