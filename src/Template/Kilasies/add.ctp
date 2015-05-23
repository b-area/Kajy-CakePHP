    <?= $this->Html->css('wizard/gsdk-base.css') ?>   
 


    <div class="image-container set-full-height" style="background-image: url('img/wizard/wizard.jpg')">
    <!--   Creative Tim Branding   -->
    <a href="http://creative-tim.com">
         <div class="logo-container">
            <div class="logo">
                <?php echo $this->Html->image('wizard/new_logo.png'); ?>
            </div>
            <div class="brand">
                Sekoly Profile
            </div>
        </div>
    </a>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        
         <div class="col-sm-8 col-sm-offset-2 col-md-10 col-sm-offset-1">

            <!--      Wizard container        -->
            <div class="wizard-container">
                <form action="" method="">
                <div class="card wizard-card ct-wizard-green" id="wizard">

                        <div class="wizard-header">
                            <h3>
                               CREATE A CLASS<br>
                               <small>This form will let you create a class.</small>
                            </h3>
                        </div>
                        <ul>
                            <li><a href="#classinfo" data-toggle="tab">Class Info</a></li>
                        </ul>
                        
                     
                        <div class="tab-content">
                  
                            <div class="tab-pane" id="classinfo">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-2">
                                         <div class="form-group">
                                            <labe>Class Name</label>
                                            <input type="text" class="form-control" placeholder="5em A">
                                          </div>
                                    </div>
                                    
                                    <div class="col-sm-6 col-sm-offset-2">
                                         <div class="form-group">
                                            <label>Class Level</label><br>
                                             <select name="country" class="form-control">
                                                <option value="Terminal"> Terminal </option>
                                                <option value="Premiere"> Premiere </option>
                                                <option value="Second"> Second </option>
                                                <option value="Troisieme"> Troisieme </option>
                                                <option value="Quatrieme"> Quatrieme </option>
                                                <option value="Cinquieme"> Cinquieme </option>
                                                <option value="Sixieme"> Sixieme </option>
                                                <option value="Septieme"> Septieme </option>
                                                <option value="...">...</option>
                                            </select>
                                          </div>
                                    </div>

                                    <div class="col-sm-6 col-sm-offset-2">
                                         <div class="form-group">
                                            <label>Titulaire</label><br>
                                             <select name="country" class="form-control">
                                                <option value="Terminal"> Eddy BORERA </option>
                                                <option value="Premiere"> Arisoa RANDRIANASOLO </option>
                                                <option value="Premiere"> Yannick ANTONIN </option>
                                                <option value="Second"> Andry RANDRIAMANOHISOA </option>
                                                <option value="Troisieme"> Rado RAMBININTSOA </option>
                                                <option value="...">...</option>
                                            </select>
                                          </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                    <input type='button' class='btn btn-finish btn-fill btn-success btn-wd btn-sm' name='finish' value='Finish' />

                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                        </div>
                </div>
                </form>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->


     <div class="footer">
      <div class="container">
             
      </div>
    </div>


</div>
