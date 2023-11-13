<h1>Events Chart</h1>

<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'pie',
    data: {
    datasets: [{
        data: [
          
<?php
while ($event = $events -> fetch_assoc()) {    
  echo $event['num_attendees'] . ", ";
}
?>

        
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$events = selectEvents();
while ($event = $events -> fetch_assoc()) {    
  echo "'" . $event['Event_Name'] . "', ";
}
?>

    ]
}
  });
</script>





