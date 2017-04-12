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
    				<h2>
                        <?php                 
                            $attributes = array('id' => 'login_form','class' => 'form_horizontal'); 
                                echo form_open('Main/login', $attributes);
                        
                            //setting condition for newly registered account
                            if($this->session->flashdata('success') == TRUE){
                                echo $this->session->flashdata('success');
                            }else{
                                echo "Login to your account";    
                            }
                        ?>
                            <small>It's always easy</small></h2>
                
                        <?php
                            //condition for incorrect password
                            if($this->session->flashdata('login_failed') == TRUE){
                                echo $this->session->flashdata('login_failed');
                            }else{
                                //do nothing;
                            }
                        ?>
                    
                        <hr class="colorgraph">
                            <?php echo validation_errors('<p class = "alert alert-dismissable alert-danger">'); ?>
    
					<div class="form-group">
                        <?php 
                            $data = array(
                            'name' => 'username',
                            'placeholder' => 'Enter your username',
                            'value' =>set_value('username'),
                            'class' => 'form-control input-lg',
                            'required' => 'yes'
                            );
                            echo form_input($data);
                        ?>
                    </div>
				
					<div class="form-group">
						<?php 
                            $data = array(
                            'name' => 'password',
                            'placeholder' => 'Enter your password',
                            'value' =>set_value('password'),
                            'class' => 'form-control input-lg',
                            'required' => 'yes'
                            );
                            echo form_password($data);
                        ?>
					</div>
                    
                     <?php
                        echo form_checkbox('Remember Me[]','Recall',set_checkbox('Remember Me[]','Recall'));
                    ?>Remember Me | <a href = "#"> Forgot Password? </a>
                
			<hr class="colorgraph">
                
			<div class="row"></div>
                <div class="col-xs-12 col-md-6"></div>
				<div class="col-xs-12 col-md-6">
                   
                    <?php 
                        $data = array(
                        'value' => 'Login',
                        'name' => 'login',
                        'class' => 'btn btn-success btn-lg btn-block'
                        );
                        echo form_submit($data);
                        echo form_close();
                    ?>
                </div>
			</div>
        </div>
</div>
