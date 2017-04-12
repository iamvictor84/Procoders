<hr class="colorgraph">
    <div class="container target">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="">
                    Welcome <?php echo ucfirst($this->session->userdata('username')); ?> 
                </h1>
                
                <a href = "<?php echo base_url(); ?>questions" class="btn btn-primary" disabled>Ask around
                </a>  
                
                <a href = "<?php echo base_url(); ?>snippets" class="btn btn-info" disabled>Upload a snippet
                </a>
                            
                <h3 class="">
                    Update your profile details             
                </h3>
                
                <!--breadcrumbs-->
                <ol class = "breadcrumb">
                    <li><a href = "<?php echo base_url(); ?>home">Home</a></li>
                    <li><a href = "<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                    <li>Update profile</li>
                </ol>
        </div>
        
        <div class="col-sm-2">
            <a href="#" class="pull-right">
                <img title="profile image" class="img-circle img-responsive" src="<?php echo base_url(); ?>/images/contacts2.jpeg">
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="panel-title pull-left" style="font-size:30px;"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</h1>
                </div>
            </div>
        </div>
        
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="panel-title pull-left" style="font-size:30px;">
                       <i class="fa fa-user" aria-hidden="true"></i> My Profile
                    </h1>
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <?= validation_errors('<p class = "alert alert-dismissable alert-info">'); ?>
                    <h3 class="panel-title pull-left">Describe yourself in 5 words with a hashtag</h3>
                        <br><br>
                            <?php 
                                $attributes = array('id' => 'update_bio_data_form','class' => 'form_horizontal'); 
                                echo form_open("Main/update_bio_data",$attributes);
                                    $data = array(
                                    'name' => 'hashtags',
                                    'placeholder' => 'Like #Decent #Friendly #Fun #Funny #Nice',
                                    'value' =>set_value('hashtags'),
                                    'class' => 'form-control',
                                    
                                    );
                                echo form_input($data);
                        ?>
                </div>
            </div>
            
            <!--<div class="panel panel-default">
                <!--<div class="panel-body">
                     <p class = "alert alert-info"><b>Upload Avatar:</b> Due to some reasons this function has been deactivated</p>
                        <br><br>
                            <div align="center">
                                <div class="col-lg-12 col-md-12">
                                    <img class="img-thumbnail img-responsive" src="<?php //echo base_url();?>/images/image1.png" width="300px" height="300px">
                                </div>
                        
                                <div class="col-lg-12 col-md-12">
                                    <button class="btn btn-primary" disabled><i class="fa fa-upload" aria-hidden="true"></i> Upload a new profile photo!</button>
                                </div>
                            </div>
                </div>
            </div>-->
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="panel-title pull-left">My extended profile</h3>
                        <br><br>
                        <label for="Your_location">Your location</label>
                            <?php
                                $data = array(
                                    'name' => 'location',
                                    'placeholder' => 'Your current location',
                                    'value' =>set_value('location'),
                                    'class' => 'form-control',
                                    
                                    );
                                echo form_input($data);
                            ?>
                                <br>
                        <label for="Your_gender">Your Dept/Work</label>
                           <?php
                                $data = array(
                                    'name' => 'department',
                                    'placeholder' => 'Computer Science/Businessman',
                                    'value' =>set_value('department'),
                                    'class' => 'form-control',
                                    
                                    );
                                echo form_input($data);
                            ?>
                        
                        
                                <br>
                        <label>Your Birthday</label>
                            <div class="form-inline" id="birth-date">
                                <?php 
                                    $data = array(  
                                        ""=> "Year",
                                        '2000' => '2000',
                                        '1999' => '1999',
                                        '1998' => '1998',
                                        '1997' => '1997',
                                        '1996' => '1996',
                                        '1995' => '1995',
                                        '1994' => '1994',
                                        '1993' => '1993',
                                        '1992' => '1992',
                                        '1991' => '1991',
                                        '1990' => '1990',
                                                '1989' => '1989',
                                        '1988'=> '1988',
                                        '1987'=>'1987',
                                        '1986'=>'1986',
                                        '1985'=>'1985',
                                        '1984'=>'1984',
                                        '1983'=>'1983',
                                          '1982'=>'1982',
                                          '1981'=>'1981',
                                          '1980'=>'1980',
                                          '1979'=>'1979',
                                          '1978'=>'1978',
                                          '1977'=>'1977',
                                          '1976'=>'1976',
                                          '1975'=>'1975',
                                          '1974'=>'1974',
                                          '1973'=>'1973',
                                          '1972'=>'1972',
                                          '1971'=>'1971',
                                          '1970'=>'1970'
                                    );
                                    echo form_dropdown('year',$data,set_value('year'),array('class'=> 'form-control','name' => 'year'));
                                ?>
                                                                
                                <?php 
                                    $data = array(  
                                        ""=> "Month",
                                        'January' =>'January',
                                        'February'=>'February',
                                        'March'=>'March',
                                        'April'=>'April',
                                        'May'=>'May',
                                        'June'=>'June',
                                        'July'=>'July',
                                        'August' =>'August',
                                        'September'=>'September',
                                        'October'=>'October',
                                        'November'=>'November',
                                        'December'=>'December'      
                                    );
                                    echo form_dropdown('month',$data,set_value('month'),array('class'=> 'form-control','name' => 'month'));
                                ?>
                                
                                <?php 
                                    $data = array(  
                                        ""=> "Day",
                                        '1'=>'1',
                                        '2'=>'2',
                                        '3'=>'3',
                                        '4'=>'4',
                                        '5'=>'5',
                                        '6'=>'6',
                                        '7'=>'7',
                                        '8'=>'8',
                                        '9'=>'9',
                                        '10'=>'10',
                                        '11'=>'11',
                                        '12'=>'12',
                                        '13'=>'13',
                                        '14'=>'14',
                                        '15'=>'15',
                                        '16'=>'16',
                                        '17'=>'17',
                                        '18'=>'18',
                                        '19'=>'19',
                                        '20'=>'20',
                                        '21'=>'21',
                                        '22'=>'22',
                                        '23'=>'23',
                                        '24'=>'24',
                                        '25'=>'25',
                                        '26'=>'26',
                                        '27'=>'27',
                                        '28'=>'28',
                                        '29'=>'29',
                                        '30'=>'30',
                                        '31'=>'31',  
                                    );
                                    echo form_dropdown('day',$data,set_value('day'),array('class'=> 'form-control','name' => 'day'));
                               ?>
                                
                        </div>
                </div>
            </div>
            
            <hr class = "colorgraph">
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="panel-title pull-left">Almost Done!</h3>
                    <br>
                    
                    <div class="well checkbox">
                        <label class="checkbox-inline" for="profile_searchable"><input type="checkbox" name="profile[searchable]" value="true" checked="checked" disabled>
                            Please take note: No delicate information shall be displayed.
                        </label>
                    </div>
                    
                        <label>Say something about your self</label>
                         <?php
                                $data = array(
                                    'name' => 'note',
                                    'placeholder' => 'What your desire or aspirations could be...',
                                    'value' =>set_value('display'),
                                    'class' => 'form-control',
                                    
                                    );
                                echo form_textarea($data);
                            ?>
                    <br>
                  
                    <p class="text-danger">
                        <strong>
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i> If you do not update your profile nothing will be displayed when users visit your profile.
                        </strong>
                    </p>
                    
                    <button class="btn btn-default" type = "reset">
                        Cancel
                    </button>
                    
                    <?php 
                        $data = array(
                        'value' => 'Update Profile',
                        'name' => 'update',
                        'class' => 'btn btn-primary',
                        );
                            echo form_submit($data);
                        echo form_close();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
