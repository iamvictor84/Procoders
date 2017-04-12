<style>
.pad-top {
    padding-top: 100px;
}

.head-glow {
    background-color: rgba(66, 139, 202, 0.8);
    color: #fff;
    padding: 0px 5px 0px 20px;
    margin: 0px 15px 0px 8px;
    border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
}

section {
    padding-top: 50px;
    padding-bottom: 50px;
}

h2 {
    text-transform: uppercase;
    font-weight: 900;
}

.sub-hr {
    border: 1px solid rgba(184, 94, 255, 1);
    width: 10%!important;
}

.min-set {
    min-height: 100px;
}

.img-set {
    height: 100px;
    margin-top: 10px;
}
/* =============================================================
  HOME SECTION STYLES
 ============================================================ */
#home-sec {
    padding: 0;
    -webkit-background-size: cover;
    background-size: cover;
    -moz-background-size: cover;
    min-height: 600px;
}

    #home-sec .overlay {
        background-color: rgba(149, 166, 248, 0.75);
        min-height: 600px;
    }

    #home-sec h1 {
        line-height: 80px;
        font-size: 45px;
        font-weight: 900;
        color: #fff;
    }

    #home-sec mark {
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        padding: 0px 5px 0px 20px;
        margin: 0px 15px 0px 8px;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
    }

.home-p {
    line-height: 30px;
    color: #E0E0E0;
    font-size: 16px;
    padding-top: 20px;
    padding-bottom: 20px;
}

.btn-home {
    background-color: rgba(66, 139, 202, 0.8);
    border-radius: 30px;
    -moz-border-radius: 30px;
    -webkit-border-radius: 30px;
}

.img-home-side {
    padding-left: 30px;
    padding-top: 180px;
    text-align: center;
    color: #fff;
}

/* =============================================================
  FEATURES SECTION STYLES 
 ============================================================ */
#features-sec h3 {
    color: #666565;
}

#features-sec hr {
    border: 1px solid rgba(184, 94, 255, 1);
    width: 30%;
}

#features-sec p {
    line-height: 30px;
    color: #9C9C9C;
}
/*  IMAGE STYLE   */
.main-img {
    cursor: pointer;
    height: 250px;
    cursor: pointer;
    margin-bottom: 80px;
}
/* =============================================================
  SKILL SECTION STYLES 
 ============================================================ */
#skill-sec h4 {
    text-align: center;
    padding-top: 20px;
    font-weight: 900;
}

#skill-sec {
    padding: 0;
    -webkit-background-size: cover;
    background-size: cover;
    color: #fff;
    background-attachment: fixed;
}

    #skill-sec .overlay {
        padding-top: 50px;
        background: url(../img/15.png);
        min-height: 250px;
        background-color: rgba(5, 5, 5, 0.45);
    }
/* =============================================================
  ADVANCE SECTION STYLES 
 ============================================================ */
#advance-sec h3 {
    color: #666565;
}

#advance-sec p {
    line-height: 30px;
    color: #9C9C9C;
}

</style>

<div id="home-sec">
        <div class="overlay">
            <div class="container">
                <div class="col-md-8 pad-top scrollclass">
                    <h1>
                        <strong><mark>Procoders </mark>It's always easy! </strong>
                    </h1>
                    <p class="home-p">
                        The platform where programmers can share tasks,ideas and also bring up the solutions to these problems.We aim to keep each other updated in this mutual programming community. Help solve tasks and give answers to problems, Our goal is to make the academic environment a better digital place. All rights reserved. <br> &copy; 2017 Procode Developers.
                    </p>
                    <a class="btn btn-primary btn-lg btn-home" href="#features-sec">Explore More &nbsp; <i class="fa fa-toggle-on"></i></a>
                </div>
                <div class="col-md-4 img-home-side ">
                    <img src="<?php echo base_url(); ?>/images/home-side.png" class="img-responsive" />
                </div>
            </div>
        </div>

    </div>
    <hr class = "colorgraph">
    <!--END HOME SECTION-->
    <section id="features-sec">
        <div class="container">
            <div class="row text-center min-set">
                <div class="col-md-12">
                    <h2><mark class="head-glow">Procoder </mark>Features </h2>
                    <hr class="sub-hr" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="<?php echo base_url(); ?>/images/bulb-white.png" class="img-set" />
                    <h3>Create an account</h3>
                    <hr />
                    <p>
                        Simply by signing up as a procoder you can achieve what ever you want in this little community of developers.
                    </p>
                </div>
                <div class="col-md-4 text-center">
                     <img src="<?php echo base_url(); ?>/images/5.png" class="img-set" />
                </div>
                <div class="col-md-4 text-center" style="padding-top: 10px;">
                    <img src="<?php echo base_url(); ?>/images/bulb-yellow.png" class="img-set" />
                    <h3>Become a Pro</h3>
                    <hr/>
                    <p>
                        Greater heights are acheived when you help others get there too. A problem is the next step to creating new ideas and innovations.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!--END FEATURES SECTION-->
    <section id="skill-sec">
        <div class="overlay">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-3 col-md-3 col-sm-3 text-center ">
                        <i class="fa fa-plug fa-5x"></i>
                        <h4>New Ideas</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 text-center ">
                        <i class="fa fa-dollar fa-5x"></i>
                        <h4>No Charges</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 text-center ">
                        <i class="fa fa-comments-o fa-5x"></i>
                        <h4>Questions and Answers  </h4>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 text-center">
                        <i class="fa fa-code fa-5x"></i>
                        <h4>Personal Improvement  </h4>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--END SKILL SECTION-->
    <hr class = "colorgraph">

    <section id="advance-sec">
        <div class="container">
            <div class="row text-center min-set">
                <div class="col-md-12">
                    <h2><mark class="head-glow">Procoders </mark>Options </h2>
                    <hr class="sub-hr" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="<?php echo base_url(); ?>/images/1.png" class="img-set" />
                    <h3>Share that task</h3>
                    <p>
                        Help by commenting to tasks posted on the platform, upload snippets or ask questions about any topic.
                    </p>
                </div>
                <div class="col-md-4 text-center">
                   <img src="<?php echo base_url(); ?>/images/3.png" class="img-set" />
                    <h3>Find that bug</h3>
                    <p>
                        Help find that error in lines of codes, pass knowledge.
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="<?php echo base_url(); ?>/images/4.png" class="img-set" />
                    <h3>Be a real programmer</h3>
                    <p>
                        Be the best you can in doing what you love.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!--END ADVANCE SECTION-->
    