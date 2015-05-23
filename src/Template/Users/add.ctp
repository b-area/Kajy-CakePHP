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

				  		
                    	<!-- **************** WIZARD HEADER ********************* -->
                    	<div class="wizard-header">
	                    	<h3>
                        	   CREATE A USER<br>
                        	   <small>This wizard will guide through to create new user.</small>
                        	</h3>
                    	</div>
                    	<!-- **************** END WIZARD HEADER ********************* -->


                    	<!-- **************** WIZARD TAB ********************* -->
                    	<ul>
                            <li><a href="#personalInfo" data-toggle="tab">Personal Info</a></li>
                            <li><a href="#contactInfo" data-toggle="tab">Contact Info</a></li>
                            <li><a href="#emergencyContact" data-toggle="tab">Emergency Contact</a></li>
                            <li><a href="#credentials" data-toggle="tab">Credentials</a></li>
                        </ul>
                    	<!-- **************** END WIZARD TAB ********************* -->
                    	

                    	<!-- **************** WIZARD CONTENTS ********************* -->
                    	<!-- Personal Info Tab -->
                    	<div class="tab-content">
	                        <div class="tab-pane" id="personalInfo">
	                            <div class="row">
	                            	<h4 class="info-text"> Let's start with the basic personal info</h4>

	                              	<div class="col-sm-12 col-md-12 col-lg-12 col-sm-offset-1">

	                              		<div class="row">
	                              			<div class="col-md-5">
			                              		<!-- First name -->
												<div class="form-group">
													<label for="firstname">First Name</label>
													<input type="text" class="form-control" id="firstname" placeholder="Andrew...">
												</div>
											</div>
											<div class="col-md-5">
												<!-- Last name -->
												<div class="form-group">
													<label for="lastname">Last Name</label>
													<input type="text" class="form-control" id="lastname" placeholder="Smith...">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5">
												<!-- Date of birth -->
			                                    <div class="form-group">
			                                    	<label for="dob">Date of Birth</label>
			                                    	<input type="text" class="form-control" id="dob" placeholder="Smith...">
			                                  	</div>
			                                </div>
			                                <div class="col-md-5">
			                                  	<!-- Place of birth -->
			                                    <div class="form-group">
			                                        <label for="pob">Place of Birth</label>
			                                        <input type="text" class="form-control" id="pob" placeholder="Morondava">
			                                  	</div>
			                                </div>
		                                </div>

		                                <div class="row">
		                                	<div class="col-md-5">
			                                  	<!-- Gender (male, female) -->
											  	<div class="form-group">
			                                        <label class="radio-inline">
												    	<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Male
												    </label>
													<label class="radio-inline">
												  		<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Female
													</label>
			                                  	</div>
		                                  	</div>
	                                  	</div>

	                                  	<div class="row">

			                                <div class="col-md-5">
			                                  	<!-- Role (administrator, staff, teacher, student)-->
												<div class="form-group">
													<label>Role</label><br>
													<select name="role" class="form-control">
														<option value="Administrator">Administrator</option>
														<option value="Staff">Staff</option>
														<option value="Teacher">Teacher</option>
														<option value="Student">Student</option>
													</select>
												</div>
											</div>
										</div>

	                              	</div> <!-- End div col -->
	                         	</div> <!-- End div row -->
	                        </div> <!-- End div name -->
	                        <!-- End Personal Info Tab -->
	                        
	                        <!-- Contact info tab -->
	                        <div class="tab-pane" id="contactInfo">
	                            <div class="row">
	                                <h4 class="info-text"> Let's continue with the contact info</h4>
	                                <div class="col-sm-12 col-md-12 col-lg-12 col-sm-offset-1">
	                                	<div class="row">
	                                		<div class="col-md-5">
				                                <!-- Primary phone -->
												<div class="form-group">
													<label for="exampleInputEmail1">Primary Phone</label>
													<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andrew...">
												</div>
											</div>

	                                		<div class="col-md-5">
												<!-- Secondary phone -->
												<div class="form-group">
													<label for="exampleInputEmail1">Secondary Phone</label>
													<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Smith...">
												</div>
											</div>
										</div>

										<div class="row">
	                                		<div class="col-md-5">
												<!-- Email address -->
				                                <div class="form-group">
				                                	<label for="exampleInputEmail1">Email Address</label>
				                                	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Smith...">
				                              	</div>
			                              	</div>
		                              	</div>

		                              	<div class="row">
	                                		<div class="col-md-5">
												<!-- Address box -->
												<div class="form-group">
													<label for="exampleInputEmail1">Address Line 1</label>
													<textarea class="form-control span6" row="10" placeholder="Andrew..."></textarea>
												</div> 
											</div>              		                              	
										</div>               		                              	

	                              	</div>
	                            </div>
	                        </div>
							<!-- End contact info Tab -->

	                        
	                        <!-- Emergency contact tab -->
	                        <div class="tab-pane" id="emergencyContact">
	                            <div class="row">
	                                <h4 class="info-text"> Let's continue with emergency contact info</h4>
	                                <div class="col-sm-12 col-md-12 col-lg-12 col-sm-offset-1">
		                                
		                                <div class="row">
	                              			<div class="col-md-5">
			                              		<!-- First name -->
												<div class="form-group">
													<label for="firstname">First Name</label>
													<input type="text" class="form-control" id="firstname" placeholder="Andrew...">
												</div>
											</div>
											<div class="col-md-5">
												<!-- Last name -->
												<div class="form-group">
													<label for="lastname">Last Name</label>
													<input type="text" class="form-control" id="lastname" placeholder="Smith...">
												</div>
											</div>
										</div>

		                                <div class="row">
			                                <!-- Primary phone -->
	                                		<div class="col-md-5">
												<div class="form-group">
													<label for="exampleInputEmail1">Primary Phone</label>
													<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andrew...">
												</div>
											</div>

											<!-- Secondary phone -->
	                                		<div class="col-md-5">
												<div class="form-group">
													<label for="exampleInputEmail1">Secondary Phone</label>
													<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Smith...">
												</div>
											</div>
										</div>

										<!-- Relationship -->
										<div class="row">
											<div class="col-md-5">
				                                <div class="form-group">
				                                	<label for="exampleInputEmail1">Relationship</label>
				                                	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Smith...">
				                              	</div>
			                              	</div>
		                              	</div>

										<div class="row">
	                                		<div class="col-md-5">
												<!-- Address box -->
												<div class="form-group">
													<label for="exampleInputEmail1">Address Line 1</label>
													<textarea class="form-control span6" row="10" placeholder="Andrew..."></textarea>
												</div> 
											</div>              		                              	
										</div> 

										
	                            	</div>
	                            </div>
	                        </div>
							<!-- End emergency contact Tab -->

							<!-- Credentials tab -->
	                        <div class="tab-pane" id="credentials">
	                            <div class="row">
	                                <h4 class="info-text"> Let's set up user's credentials</h4>
	                                <div class="col-sm-12 col-md-12 col-lg-12 col-sm-offset-1">
	                                	<div class="row">
		                                	<div class="col-md-5">
				                                <!-- Username -->
												<div class="form-group">
													<label for="exampleInputEmail1">Username</label>
													<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andrew...">
												</div>
											</div>
										</div>
	                                	<div class="row">
		                                	<div class="col-md-5">
												<!-- Password -->
												<div class="form-group">
													<label for="exampleInputEmail1">Password</label>
													<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Smith...">
												</div>
											</div>
										</div>
	                                	<div class="row">
		                                	<div class="col-md-5">
												<!-- Confirm password -->
				                                <div class="form-group">
				                                	<label for="exampleInputEmail1">Confirm Password</label>
				                                	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Smith...">
				                              	</div>
											</div>
										</div>
	                              	</div>
	                            </div>
	                        </div>
							<!-- End credentials info Tab -->

                        </div> <!-- End tab-content class -->
                    	<!-- **************** END WIZARD CONTENTS ********************* -->


                    	<!-- **************** WIZARD FOOTER ********************* -->
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
                    	<!-- **************** END WIZARD FOOTER ********************* -->	
                    	
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
	
	
	
	
	

	
	
