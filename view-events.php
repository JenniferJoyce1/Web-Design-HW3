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
     <td><?php echo $event['Event_ID']; ?></td>
     <td><?php echo $event['Event_Name']; ?></td>
     <td><?php echo $event['Event_Date']; ?></td>
     <td><?php echo $event['Event_Location']; ?></td>
  </tr>
<?php      
}
?>
    </tbody>
  </table>
</div>
