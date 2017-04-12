<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
?>
<hr class="colorgraph">
    <div class="container target">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="">
                    Welcome<?php echo ucfirst($this->session->userdata('username')); ?>  
                </h1>
                
                <a href = "<?php echo base_url(); ?>questions" class="btn btn-primary" disabled>Ask around
                </a>  
                
                <a href = "<?php echo base_url(); ?>snippets" class="btn btn-info ">Upload a snippet
                </a>
                            
                <h3 class="">
                    Get answers to your questions                
                </h3>
                
                <!--breadcrumbs-->
                <ol class = "breadcrumb">
                    <li><a href = "<?php echo base_url(); ?>home">Home</a></li>
                    <li><a href = "<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                    <li>Ask Around</li>
                </ol>
        </div>
        
        <div class="col-sm-2">
            <a href="#" class="pull-right">
                <img title="profile image" class="img-circle img-responsive" src="<?php echo base_url(); ?>/images/contacts2.jpeg">
            </a>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="panel panel-default widget">
                <div class="panel-heading">
                        <h3 class="panel-title">
                              <i class="fa fa-comment fa-1x"></i> Recent Posts
                        </h3>
                </div>
            
    <?php 
        foreach($records as $row){
            ?>
            <div class = "panel-body">
                <ul class = "list-group">
                    <li class = "list-group-item">
                        <div class = "row">
                            <div class="col-xs-2 col-md-1">
                                <img src="<?php echo base_url(); ?>/images/contact.jpeg" class="img-circle img-responsive" alt="" />
                            </div><!--END COL-->
                            
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    Comment : <?php echo $row->userComment; ?>
                                        <div class = "mic-info">
                                            By: <?php echo '<a href = "#">'.$row->userName.'</a>'; ?>
                                                <br>
                                            On: <?php echo $row->commentDate; ?>
                                                <br>
                                            <!--Time: <?php //echo $row->commentTime; ?>-->
                                        </div>
                                </div>
                                
                                <div class = "comment-text">
                                    <a href = "#">4 Replies</a>
                                </div>
                                
                                <div class="action">
                                    <a href = "#" class = "btn btn-xs btn-primary">  <i class="fa fa-pencil fa-1x"></i> Reply</a>
                                    
                                    <a href = "#" class = "btn btn-xs btn-danger">  <i class="fa fa-fire-extinguisher fa-1x"></i> Report</a>
                                </div>
                            </div>
                        </div><!--END ROW-->
                    </li>
                </ul>
            </div>
        <?php
    }
?>  
                <li class = "list-group-item">
                    <?php 
                        echo form_open('Main/comments');
                        $data = array(
                        'name' => 'comment',
                        'placeholder' => 'Start a discussion...',
                        'value' =>set_value('post'),
                        'class' => 'form-control',
                        'required' => 'yes'
                        );
                            echo form_input($data);
                    ?>      
                <br>
                    <?php 
                        $data = array(
                        'value' => 'Post',
                        'name' => 'submit',
                        'class' => 'btn btn-primary btn-sm '
                        );
                        echo form_submit($data);
                        echo  form_close();
                    ?>
                </li>
            
                <a href="#" class="btn btn-primary btn-sm btn-block" role="button"><span class="glyphicon glyphicon-refresh"></span> Show More Posts</a>
            </div>
        </div>
    </div>
</div>
