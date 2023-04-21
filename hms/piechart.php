<!DOCTYPE html>
<html>
<head>
	<title>Hospital Data Pie Chart</title>
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<style>
h1{
  margin-top: 0%;
}
		.chart-container {
			/* align-items: center; */
			width: 30%;
			margin: 10%;
      margin-left: 40%;
		}
	</style>
</head>
<body>
<?php include('include/sidebar.php');?>


<div>

  <h1 >
    <p>Patients Overall Expenditure:</p>
  </h1>
	<div class="chart-container">
		<canvas id="myChart"></canvas> 
	</div>
</div>
	<script>
		// Data for the pie chart
		var labels = ['Consultancy', 'Treatment', 'Medicine', 'Tests','Total Paid'];
		var sizes = [800, 2522, 1554, 3250,8126];

		// Create a pie chart
		var ctx = document.getElementById('myChart').getContext('2d');
		var chart = new Chart(ctx, {
		    type: 'pie',
		    data: {
		        labels: labels,
		        datasets: [{
		            data: sizes,
		            backgroundColor: [
		                'rgb(255, 0, 0)',
		                'rgb(0, 0, 255)',
		                'rgb(255, 255, 0)',
		                'rgb(75, 192, 192)',
						'rgb(25,128,0)',
						'rgb(128,0,128)'
		            ]
		        }]
		    },
		    options: {
		        title: {
		            display: true,
		            text: 'Hospital Data Pie Chart'
		        }
		    }
		});
	</script>
 
</body>
</html>