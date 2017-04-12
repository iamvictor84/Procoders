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
                    Let them know what's cooking.            
                </h3>
                
                <!--breadcrumbs-->
                <ol class = "breadcrumb">
                    <li><a href = "<?php echo base_url(); ?>home">Home</a></li>
                    <li><a href = "<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                    <li>Upload snippet</li>
                </ol>
            </div>
        
        <div class="col-sm-2">
            <a href="#" class="pull-right">
                <img title="profile image" class="img-circle img-responsive" src="<?php echo base_url(); ?>/images/contacts2.jpeg">
            </a>
        </div>
    </div>
    
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>Upload Files</strong> 
                    <small> Share your code or make it open source</small></div>
            
    <div class="panel-body">
    <!-- Standard Form -->
        <h4>Select files from your computer/device</h4>
           <?php echo form_open_multipart('Main/do_upload');?>
                <div class="form-group">
                        <input type="file" name="userFiles" size ="20" multiple>
                            <br>
                        <textarea class = "form-control" name = "description" rows="3" placeholder="Description of files been uploaded...[Not more than 100 characters]"></textarea>
                            <?php echo $error; ?>
                </div>  
                        <br>
                <button type="submit" class="btn btn-success" name = "upload">
                    <i class = "glyphicon glyphicon-upload"></i>
                    Upload files
                </button>
                
                <button type="reset" class="btn btn-danger ">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Cancel upload</span>
                </button>
         <?php echo form_close(); ?>
        </div><!--panel body-->
      </div><!--panel default-->
</div><!--container--> 

