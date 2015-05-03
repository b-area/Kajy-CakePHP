<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('dashboard/bootstrap.min.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
     
	<?= $this->Html->css('font-awesome/css/font-awesome.min.css') ?>
	<?= $this->Html->css('assets/bootstrap-datepicker.css') ?>

</head>

<body>

  <!-- Heders go here -->
  <!--
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <?= $this->fetch('header') ?>
    </nav>
   -->
    

    <!-- Contents go here -->
    <div id="container">
        <?= $this->fetch('content') ?>
    </div>

	
	
 
	<!-- jQuery -->
   <?= $this->Html->script('jquery/jquery.min.js') ?>
   <?= $this->Html->script('wizard/bootstrap.min.js')?>
   <?= $this->Html->script('wizard/jquery.bootstrap.wizard.js') ?>
   <?= $this->Html->script('wizard/wizard.js')?>
   <?= $this->Html->script('assets/bootstrap-datepicker.js') ?>
   <?= $this->fetch('script') ?>

   	<script type="text/javascript">
		$(function () {
			 $('.pickdate').datepicker({
		    	 weekStart:1,
		    	 color: 'red'
			 });
		});
	</script>

</body>
</html>
