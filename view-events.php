<div class = "row">
  <div class = "col">
    <h1>Events</h1>
  </div>
  <div class = "col-auto">
<?php
include "view-events-newform.php";
?>
  </div>
</div>

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
      <th></th>
      <th></th>
      <th></th>
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
     <td>  </td>
     <td>  </td>
  </tr>
<?php      
}
?>
    </tbody>
  </table>
</div>
