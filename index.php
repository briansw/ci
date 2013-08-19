<?php include('favicon.php'); ?>

<!doctype html>
<html>
<head>
	<title>Core Interaction</title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="UTF-8" />
    
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/application.css">
	<link rel="icon" href="assets/images/favicons/<?php print($favicon_to_use); ?>" />
	
	<script src='assets/javascript/jquery-1.9.0.min.js'></script>
	<script src='assets/javascript/application.js'></script>
	<script src='assets/javascript/bootstrap.min.js'></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1; maximum-scale=1" />
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-3074640-7']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
</head>

<body>

<div id="wrapper">

	<div id="navigation">
		<ul>	
			<li id="home"><a href="/" id="home">Core Interaction</a></li>
			<li><a class="hash" data-action="#readings-and-resources" href="#">Resources & Readings</a></li>
			<li><a class="hash" data-action="#students" href="#" class="people">Students</a></li>
		</ul>
	</div>
	
	<ul> <!- start accordian -->

		<?php include('readings.php'); ?>
		<?php include('students.php'); ?>
		
	</ul> <!- end accordian -->
	
	<div id="footer">
		<ul>
			<li><a href="mailto:wattersb@newschool.edu">wattersb@newschool.edu</a></li>
			<li><a href="mailto:griffitb@newschool.edu">griffitb@newschool.edu</a></li>
			<li><img src="assets/images/crab.gif" width="33" height="15" />
		</ul>
	</div>


</div>
	
</body>

</html>