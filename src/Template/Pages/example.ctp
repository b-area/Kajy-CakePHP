
<?php
	$this->append('css');
		echo $this->element('dashboard/styles/top-css');
	$this->end();
?>	
   

	
	<?php
		$this->append('sidebar');
			echo $this->element('dashboard/sidebar');
		$this->end();
	?>	    
	
	<div id="page-wrapper">
			<!-- Main contents here -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Home</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
 	</div>
 
   
<?php
	$this->append('bottomScript');
	echo $this->element('dashboard/scripts/bottom-scripts');
	$this->end();
?>

