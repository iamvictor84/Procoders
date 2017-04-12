<hr class="colorgraph">
    <div class="container target">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="">
                    Welcome <?php echo ucfirst($this->session->userdata('username')); ?> 
                </h1>
                
                <a href = "<?php echo base_url(); ?>questions" class="btn btn-primary" >Ask around
                </a>  
                
                <a href = "<?php echo base_url(); ?>snippets" class="btn btn-info " disabled>Upload a snippet
                </a>
                            
                <h3 class="">
                    Feel free to view or download other snippets          
                </h3>
                
                <!--breadcrumbs-->
                <ol class = "breadcrumb">
                    <li><a href = "<?php echo base_url(); ?>home">Home</a></li>
                    <li><a href = "<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                    <li><a href = "<?php echo base_url(); ?>snippets">Snippets</a></li>
                    <li>Displaying Snippets</li>
                </ol>
            </div>
        
        <div class="col-sm-2">
            <a href="#" class="pull-right">
                <img title="profile image" class="img-circle img-responsive" src="<?php echo base_url(); ?>/images/contacts2.jpeg">
            </a>
        </div>
    </div>
   <p class = "alert alert-success"><i class="fa fa-bullhorn fa-1x"></i> Your file was uploaded successfully!</p>
        <!--<ul>
            <?php //foreach ($upload_data as $item => $value):?>
                <li><?php //echo $item; ?><?php// echo $value; ?> <li>
                <?php //endforeach; ?>
        </ul>-->
            