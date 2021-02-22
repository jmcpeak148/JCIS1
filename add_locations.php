<!DOCTYPE html>
<html>

<head>
	<meta name="dashboard" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Tells the browser to be responsive to screen width -->
	
	<title>Joes's Caribe Locations</title>	
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Menu Icons -->
</head>

<body>
	<?php
		readfile("../menu/sidebar.inc");
	?>
	
<div id="right" class="column">

    <div class="top-right">
		<a href="#user"><i class="fa fa-user-circle fa-fw"></i>Management</a>
	</div>
	
	<div class="bottom">
		<div class="main">
		
			<p> Locations </p>

			<form method="post" action=''>
				<br>
				<b> Input Locations </b>
				<br> 
				<br>

				Location Name:
					<input type="text" name="name"/>
				<br>
				<br>

				Location Address:
					<input type="text" name="address"/>
				<br>
				<br>	

					<input type = "submit" value = "Submit" />
					<input type = "reset" value = "Clear" />

				<br>
				<br>

				</form>
				
		</div>
	</div>
</div>

</body>
</html>
