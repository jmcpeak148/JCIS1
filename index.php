<!DOCTYPE html>
<html>

<head>
	<meta name="dashboard" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Tells the browser to be responsive to screen width -->
	
	<title>Joes's Caribe Inventory</title>	
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Menu Icons -->
</head>

<body>
	<?php
		echo readfile("sidebar.inc");
	?>
	
<div id="right" class="column">

	<div class="top-right">
		<a href="#user"><i class="fa fa-user-circle fa-fw"></i>Management</h3></a>
	</div>
	
	<div class="bottom">
		<div class="main">
		
			<h2>Dashboard</h2>
			
			<!-- Status Boxes -->
			<div id="inv_box"><h3>02/18/2021</h3><p></p></div>
			<div id="crit_box"><h2>60</h2><br/><p></p></div>
			<div id="low_box"><h2>80</h2></br><p></p></div>
			<div style="clear: both;"></div>
			
			<p>Joe's Caribe Restaurant.</p>
			<p>Pensacola, FL</p>
			
			<p>Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
			<p>Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
				
		</div>
	</div>
</div>

</body>
</html>