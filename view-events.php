<h1>Events</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr> 
      <th>ID</th>   
      <th>Name</th>
      <th>Date</th>
      <th>Location</th>
        </tr>
    </thead>
    <tbody>
<?php
while ($event = $events -> fetch_assoc()) {
?>
  <tr> 
     <td><?php echo $event['event_id']; ?></td>
     <td><?php echo $event['event_name']; ?></td>
     <td><?php echo $event['event_date']; ?></td>
     <td><?php echo $event['event_location']; ?></td>
  </tr>
<?php      
}
?>
    </tbody>
  </table>
</div>
