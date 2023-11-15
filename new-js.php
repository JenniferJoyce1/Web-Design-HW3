<head>
	<!-- Load plotly.js into the DOM -->
	<script src='https://cdn.plot.ly/plotly-2.27.0.min.js'></script>
</head>

<body>
	<div id='myDiv'><!-- Plotly chart will be drawn inside this DIV --></div>
</body>
<scrip>

var trace1 = {
  type: 'bar',
  x: [1, 2, 3, 4],
  y: [5, 10, 2, 8],
  marker: {
      color: '#C8A2C8',
      line: {
          width: 2.5
      }
  }
};

var data = [ trace1 ];

var layout = { 
  title: 'Responsive to window\'s size!',
  font: {size: 18}
};

var config = {responsive: true}

Plotly.newPlot('myDiv', data, layout, config );

  
</scrip>
