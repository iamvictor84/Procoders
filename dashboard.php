<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<hr class="colorgraph">
<div class="container target">
    <div class="row">
        <div class="col-sm-10">
            <h1 class="">
                Welcome <?php echo ucfirst($this->session->userdata('username')); ?>  
            </h1>
            
            <a href = "<?php echo base_url(); ?>questions" class="btn btn-primary">Ask around</a>  
            <a href = "<?php echo base_url(); ?>snippets" class="btn btn-info ">Upload a snippet</a>
                <br>
        </div>
        
      <div class="col-sm-2">
          <a href="#" class="pull-right">
              <img title="profile image" class="img-circle img-responsive" src="<?php echo base_url(); ?>/images/contacts2.jpeg">
          </a>
        </div>
    </div>
     
    <div class="row">
        <div class="col-sm-3">
            <!--left col-->
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Profile
                </li>
                
                <li class="list-group-item text-right">
                    <span class="pull-left"><strong class="">Joined</strong></span> 2.13.2014
                </li>
                
                <li class="list-group-item text-right">
                    <span class="pull-left"><strong class="">Last seen</strong></span> Yesterday
                </li>
                
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Full Name</strong></span>
                        Doe
                </li>
                
                <li class="list-group-item text-left">
                     <a href = "#">
                         <i class="fa fa-edit fa-1x"></i> Edit Profile Details
                    </a>
                </li>
            </ul>
            
           <div class="panel panel-default">
             <div class="panel-heading">Email <i class="fa fa-inbox fa-1x"></i>
                </div>
                <div class="panel-body"><i style="color:green" class="fa fa-check-square"></i> iamvictor84@gmail.com

                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading">Skills <i class="fa fa-tags fa-1x"></i>

                </div>
                
                <div class="panel-body">
                    <a href="#" class="">Web Developer</a>
                </div>
            </div>
          
            <ul class="list-group">
                <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i>
                </li>
                
                <li class="list-group-item text-right">
                    <span class="pull-left"><strong class="">Snippets</strong></span> 125
                </li>
                
                <li class="list-group-item text-right">
                    <span class="pull-left"><strong class="">Questions</strong></span> 13
                </li>
                
                <li class="list-group-item text-right">
                    <span class="pull-left"><strong class="">Reviews</strong></span> 37
                </li>
                        
                <li class="list-group-item text-right">
                    <span class="pull-left"><strong class="">Other web developers</strong></span> 78
                </li>
            </ul>
            
            <div class="panel panel-default">
                <div class="panel-heading">Social Media <i class="fa fa-github fa-1x"></i></div>
                <div class="panel-body">	
                    <h5>
                        <a href = "#"> <i class="fa fa-plus fa-1x"></i> Add Social Media  </a>
                    </h5>
                </div>
            </div>
        </div>
        <!--/col-3-->
        <div class="col-sm-9" style="" contenteditable="false">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo $this->session->userdata('username') ?>'s Bio <i class="fa fa-unlock-alt fa-1x"></i></div>
                <div class="panel-body"> 
                    <?php 
                        if($_SESSION['link'] == 'valid'){
                            echo '<kbd>You have completed your bio-data registration, Any more info shall be passed acrossed.</kbd>';
                        }else{
                            ?>  
                                <kbd>You have not completed your bio registration click the link below to finish</kbd>
                                    <br><br>
                                <a href= "<?php echo base_url(); ?>update_profile"><i class="fa fa-edit fa-1x"></i> Update Bio</a>
                                    <br>
                            <?php
                        }
                    ?>
                    
                    <?php     
                        if($this->session->flashdata('updated') ==  TRUE){
                            echo $this->session->flashdata('updated');
                        }else{
                           //do nothing
                        }
                    ?> 
                </div>
            </div>
            
            <div class="panel panel-default target">
                <div class="panel-heading" contenteditable="false">Categories <i class="fa fa-group fa-1x"></i></div>
                    <div class="panel-body">
                        <div class="row">                 
				            <div class="col-md-6">
					           <div class="thumbnail">
						          <img alt="300x200" src="<?php echo base_url(); ?>/images/code.jpeg">
						              <div class="caption">
							             <h3>Programmers Forum</h3>
							                 <p>
								                Share that latest info or break down that framework.
							                 </p>
							                 <p>
							                     <a href = "<?php echo base_url(); ?>dev_forum" class = "btn btn-default">View >></a>
							                 </p>
						              </div>
                                </div>  
                            </div>
                            
				            <div class="col-md-6">
					           <div class="thumbnail">
						          <img alt="desktop_developers" src="<?php echo base_url(); ?>/images/more.png">
						              <div class="caption">
							             <h3>Archives</h3>
							                 <p>
							                     Get hacked files or free version apps	
                                            </p>
							                 <p>
							                     <a href = "#" class = "btn btn-default">View >></a>
							                 </p>
						              </div>
					           </div>
				            </div>   
                        </div>    
                    </div>
                </div>
</div>
       

