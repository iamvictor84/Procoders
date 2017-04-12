<hr class="colorgraph">
    <div class="container target">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="">
                    Welcome <?php echo ucfirst($this->session->userdata('username')); ?> 
                </h1>
                
                <a href = "<?php echo base_url(); ?>questions" class="btn btn-primary" >Ask around
                </a>  
                
                <a href = "<?php echo base_url(); ?>snippets" class="btn btn-info " >Upload a snippet
                </a>
                            
                <h3 class="">
                    Let's keep each other posted      
                </h3>
                
                <!--breadcrumbs-->
                <ol class = "breadcrumb">
                    <li><a href = "<?php echo base_url(); ?>home">Home</a></li>
                    <li><a href = "<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                    <li>Programmers Forum</li>    
                </ol>
            </div>
        
        <div class="col-sm-2">
            <a href="#" class="pull-right">
                <img title="profile image" class="img-circle img-responsive" src="<?php echo base_url(); ?>/images/contacts2.jpeg">
            </a>
        </div>
    </div>
        
    <div class="page-header">
        <h1 id="timeline">Developers Timeline </h1>
            <button type = "submit" class = "btn btn-default" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil fa-1x"></i> Compose</button>
                <?php echo $this->session->flashdata('posted'); ?>
    </div>
        
            <?php foreach($timelines as $row){
                ?>
            <section class="comment-list">
                <article class="row">
                    <div class="col-md-12 col-md-12 ">
                        <div class="panel panel-default arrow left">
                            <div class="panel-body">
                                <header class="text-left">
                                    <div class="comment-user">
                                        <i class="fa fa-microphone"></i> <?= $row->userName; ?></div>
                                        <i class="fa fa-calendar-o"></i> <?= $row->date; ?>
                                </header>   
                                    <hr class = "colorgraph">
                            <div class="comment-post">
                                <p><?= $row->timeline; ?>
                                </p>
                            </div>
                                <p class="text-right">
                                    <a href="#" class="btn btn-default btn-sm"><i class="fa fa-ban"></i> Report Post</a>
                                    <a href="#" class="btn btn-default btn-sm"><i class="fa fa-share-alt"></i> Share</a>
                                </p>
                            </div>
                        </div>
                    </div>
            </article>
        </section>
        <?php
    }
?>            
    </div>

<!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼              <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                            
                        <h4 class="modal-title" id="myModalLabel"> 
                            Post latest news or info here
                        </h4> 
                    </div>
        
                    <div class="modal-body">
                        <?php
                            $attributes = array('id' => 'forum_textbox','class' => 'form_horizontal'); 
                            echo validation_errors('<p class = "alert alert-dismissable alert-danger">');
                                echo form_open('Main/forums', $attributes);
                        ?>
                        <?php
                            $data = array(
                            'name' => 'timeline',
                            'placeholder' => 'Enter text here...Not more than 500 characters',
                            'value' =>set_value('timeline'),
                            'class' => 'form-control',
                            'required' => 'yes'
                            );
                            echo form_textarea($data);
                        ?>
                    </div>
        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Close
                        </button>
                        <?php
                            $data = array(
                            'value' => 'Post',
                            'name' => 'post',
                            'class' => 'btn btn-primary'
                        );
                            echo form_submit($data);
                        echo form_close();
                        ?>
                    </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>