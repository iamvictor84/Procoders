<?php defined('BASEPATH') OR exit ('No direct script access allowed'); ?>
<div class="container">
	<div class="row" id="main">
        <div class="col-md-4 well" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
                	<div>
        				<img src="<?php echo base_url(); ?>/images/download.png" alt="Texto Alternativo" class="img-circle img-thumbnail">
        				<h2>Procoders </h2>
        				<p>The platform where technology is disintegrated. Let's help make the world a better digital place.</p>
        			</div>
        		</div>
            </div>
        </div>
        <div class="col-md-8 well" id="rightPanel">
            <div class="row">
                <div class="col-md-12">
    				<h2>Become a Procoder. <small>It's always easy</small></h2>
                        <hr class="colorgraph">
                        <?php
                            echo validation_errors('<p class = "alert alert-dismissable alert-danger">');
                            echo form_open('Main/register');
                         ?>
			
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <?php 
                            $data = array(  
                            'name' => 'fname',
                            'value' => set_value('fname'),
                            'class' => 'form-control input-lg',
                            'placeholder' => 'First Name',
                            'tabindex' => '1'
                            );
                            echo form_input($data);
                        ?>
					</div>
				</div>
                
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<?php 
                            $data = array(  
                            'name' =>'lname',
                            'value' =>set_value('lname'),
                            'class' => 'form-control input-lg',
                            'placeholder' => 'Last Name',
                            'tabindex' => '2'
                            );
                            echo form_input($data);
                        ?>
					</div>
				</div>
			
            
        <div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				<?php 
                    $data = array(  
                    'name' =>'email',
                    'value' =>set_value('email'),
                    'class' => 'form-control input-lg',
                    'placeholder' => 'Email'
                    );
                    echo form_input($data);
                ?>
			</div>
        </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
                    <?php 
                        $data = array(  
                        'name' =>'phone',
                        'value' =>set_value('phone'),
                        'class' => 'form-control input-lg',
                        'placeholder' => 'Phone No'
                        );
                        echo form_input($data);
                    ?>
				</div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
                    <?php 
                        $data = array(  
                        ""=> "Select Gender",
                        'male' => 'Male', 
                        'female' => 'Female',
                        );
                        echo form_dropdown('gender',$data,set_value('gender'),array('class'=> 'form-control input-lg','name' => 'gender'));
                    ?>
				</div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
                    <?php 
                        $data = array(  
                        ""=> "Select as appropriate",
                        'web' => 'Web Developer', 
                        'android' => 'Android Developer',
                        'desktop' => 'Desktop Developer',
                        'networker' => 'Networker',
                        'others' => 'Others...',
                        );
                        echo form_dropdown('skill',$data,set_value('skill'),array('class'=> 'form-control input-lg','name' => 'skill'));
                    ?>
				</div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
                    <?php 
                        $data = array(  
                        ""=> "Level of study",
                        '100' => '100', 
                        '200' => '200',
                        '300' => '300',
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                        'others' => 'Others...',
                        );
                        echo form_dropdown('level',$data,set_value('level'),array('class'=> 'form-control input-lg','name' => 'level'));
                    ?>
				</div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
                    <?php  
                        $data = array(  
                        'name' =>'username',
                        'value' =>set_value('username'),
                        'class' => 'form-control input-lg',
                        'placeholder' => 'Create a username'
                        );
                        echo form_input($data);
                        ?>
                </div>
            </div>
            
			
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<?php
                            $data = array(  
                            'name' =>'password',
                            'value' =>set_value('password'),
                            'class' => 'form-control input-lg',
                            'type' => 'password',
                            'placeholder' => 'Custom password'
                            );
                            echo form_input($data);
                        ?>
					</div>
				</div>
          
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<?php 
                            $data = array(  
                            'name' =>'pword2',
                            'value' =>set_value('pword2'),
                            'class' => 'form-control input-lg',
                            'type' => 'password',
                            'placeholder' => 'Re-type custom password'
                            );
                            echo form_input($data);
                        ?>
					</div>
				</div>
			</div>
                
			<hr class="colorgraph">
                
			<div class="row"></div>
				<div class="col-xs-12 col-md-6"></div>
				<div class="col-xs-12 col-md-6">
                    <?php  
                        $data = array(  
                        'value' =>'Register',
                        'name' => 'register',
                        'class' => 'btn btn-success btn-lg btn-block'
                        );
                    echo form_submit($data);
                    echo form_close(); ?>
                </div>
			
        </div>
</div>
