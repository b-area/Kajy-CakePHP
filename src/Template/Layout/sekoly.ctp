<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sekoly System</title>
    <?= $this->Html->meta('icon') ?>
    
    <!-- CSS Go Here -->
	<?php
  		echo $this->fetch('css');
  	?>

</head>


<body>

	 <div id="wrapper">
		<?php
	  		echo $this->fetch('sidebar');
	  	?> 
		 
		<!-- Contents go here -->
	    <div id="container">
	        <?= $this->fetch('content') ?>
	    </div>
	 </div>
	
	<!-- Javascripts go here -->
	<?php
  		echo $this->fetch('bottomScript');
  	?>
	

</body>

</html>
