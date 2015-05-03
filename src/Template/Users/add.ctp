    <?= $this->Html->css('wizard/gsdk-base.css') ?>   


	<div class="image-container set-full-height" style="background-image: url('img/wizard/wizard.jpg')">
	   
	    <a href="#">
	         <div class="logo-container">
	            <div class="logo">
	                <?php echo $this->Html->image('wizard/new_logo.png'); ?>
	            </div>
	            <div class="brand">
	                Sekoly 2.0
	            </div>
	        </div>
	    </a>

	
		<!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2 col-md-10 col-sm-offset-1">
			      
			      <!-- Start div wizard container -->
			      <div class="wizard-container">
				  	<form action="" method="">
				  	<div class="card wizard-card ct-wizard-green" id="wizard">

				  		<!-- Wizard header -->
                    	<div class="wizard-header">
	                    	<h3>
                        	   <b>BUILD</b> PROFILE <br>
                        	   <small>This wizard will guide through to create new user.</small>
                        	</h3>
                    	</div>
                    	
						<!------------------------------------------>
                    	<!-- What will go into the wizrd menu bar -->
                    	<!------------------------------------------>
                    	<ul>
                            <li><a href="#name" data-toggle="tab">Name</a></li>
                            <li><a href="#birth" data-toggle="tab">Birth</a></li>
                            <li><a href="#credentials" data-toggle="tab">Credentials</a></li>
                            <li><a href="#address" data-toggle="tab">Address</a></li>
                        </ul>
                    	
                    	<!------------------------->
                    	<!-- Wizard tab contents -->
                    	<!------------------------->
                    	<div class="tab-content">
	                    	
	                    	<! ----- Name Tab --------->
                            <div class="tab-pane" id="name">
                                <div class="row">
	                              
	                              <h4 class="info-text"> Let's start with the basic information</h4>
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
	                                          <?php echo $this->Html->image('wizard/default-avatar.png', array('class'=>'picture-src', 'id'=> 'wizardPicturePreview')); ?>
                                              <input type="file" id="wizard-picture">
                                          </div>
                                          <h6>Choose Picture</h6>
                                      </div>
                                  </div>
                                  
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andrew...">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Smith...">
                                      </div>
                                  </div>
	                         	</div> <!-- End div row -->
                            </div> <!-- End div name -->
                            <!-- END Name Tab --->
                            
                            
                            <!---- Birth Tab --------->
                            <div class="tab-pane" id="birth">
                                <div class="row">
	                                <h4 class="info-text"> Let's continue with the birth infos</h4>
									<div class="col-sm-5 col-sm-offset-2">
										<div class="form-group">
										  <?php echo $this->Form->input('DOB', array('class' => 'pickdate form-control'));?>
										       <!-- <span class="help-block">Fagnazavana ..</span> -->
										</div>
			
										<div class="form-group">
										  <?php echo $this->Form->input('POB', array('class' => 'form-control', 'placeholder' => 'Lieu de naissance'));?>
										       <!-- <span class="help-block">Fagnazavana ..</span> -->
										</div>
										
										
									</div>
                                </div>
                            </div>
							<!-- END  Birth Tab ----->
							
							<!---- Credentials Tab --------->
                            <div class="tab-pane" id="credentials">
                                <div class="row">
	                                <h4 class="info-text">Let's setup your username and password</h4>
	                                <div class="col-sm-2">
	                                </div>
	                                <div class="col-sm-5">
		                                <div class="form-group">
										  <?php echo $this->Form->input('username', array('class' => 'form-control'));?>
										       <span class="help-block">Fagnazavana ..</span>
										</div>
	                                </div>
						
									<div class="col-sm-5">
										<div class="form-group">
										  <?php echo $this->Form->input('password', array('class' => 'form-control'));?>
										       <span class="help-block">Fagnazavana ..</span>
										</div>
									</div>
	                                
                                </div>
                            </div>
							<!-- END  Credentials Tab ----->
                            
                            
                    	</div> 
                    	<!-- End div wizard tab-content -->
                    	
                    	
                    	
                    	
                    	
                    	<!--- Wizard Footer -->
                    	<div class="wizard-footer">
	                    	<div class="pull-right">
                            	<input type='button' class='btn btn-next btn-fill btn-success btn-wd btn-sm' 
                            		name='next' value='Next' />
								<input type='button' class='btn btn-finish btn-fill btn-success btn-wd btn-sm'
                            		name='finish' value='Finish' />
                            </div>
                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm'
                                 	name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                    	</div>
                    	<!--- END Wizard Footer -->
                    	
                    	
                    	
				  	</div>
				  	</form>
			      </div>
			      <!-- END div wizard container -->
			      
			      <div class="footer">
				      <div class="container">
				      </div>
			      </div>
			        
		        </div>
	        </div>
	    </div>
	</div>
	
	
	
	
	

	
	
