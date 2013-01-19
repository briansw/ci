<!doctype html>
<html>
<head>
	<title>Core Interaction</title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="UTF-8" />
    
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/application.css">
		
	<script src='assets/javascript/jquery-1.9.0.min.js'></script>
	<script src='assets/javascript/application.js'></script>
	<script src='assets/javascript/bootstrap.min.js'></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1; maximum-scale=1" />
	
</head>

<body>

<div id="wrapper">

	<div id="navigation">
		<ul>	
			<li id="home"><a href="index.php" id="home">Core Interaction</a></li>
			<li><a data-action="#readings-and-resources" href="#">Resources & Readings</a></li>
			<li><a data-action="#students" href="#" class="people">Students</a></li>
			<li><a href="#">Syllabi</a></li>
		</ul>
	</div>
	
	<ul> <!- start accordian -->
	
		<?php include('studio-1c.php'); ?>	
		<?php include('studio-1b.php'); ?>
		<?php include('lab-1a.php'); ?>
		<?php include('readings.php'); ?>
		<?php include('students.php'); ?>
		
	</ul> <!- end accordian -->
	
	<div id="footer">
		<ul>
			<li><a href="mailto:wattersb@newschool.edu">wattersb@newschool.edu</a></li>
			<li><a href="mailto:seuberlz@newschool.edu">seuberlz@newschool.edu</a></li>
			<li><img src="assets/images/crab.gif" width="33" height="15" />
		</ul>
	</div>


</div>
	
</body>

</html>