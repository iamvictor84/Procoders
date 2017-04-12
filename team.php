<style>
.content {
    padding-top: 30px;
}

/* Heading */
.heading {
    z-index: 1;
    position: relative;
    text-align: center;
    margin-bottom: 100px;
}

.heading:after {
    left: 50%;
    height: 3px;
    width: 50px;
    content: " ";
    bottom: -35px;
    margin-left: -25px;
    position: absolute;
    background: #444;
}

.heading h2 {
    font-size: 40px;
    font-weight: 500;
    margin: 0 0 20px;
    color: #444;
}

.heading p {
    font-size: 16px;
    font-weight: 300;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    color: #8693a7;
}

/* Team Members */
.team-members {
    width: 100%;
    cursor: pointer;
    overflow: hidden;
    position: relative;
    margin-bottom: 35px;
}

.team-members .team-avatar {
    position: relative;
}

.team-members .team-avatar:after {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    content: " ";
    position: absolute;
    background: rgba(129, 129, 129, 0.1);
    transition-duration: 300ms;
    transition-property: all;
    transition-timing-function: cubic-bezier(0.7, 1, 0.7, 1);
}

.team-members .team-avatar img {
    display: block;
    margin: 0 auto;
    text-align: center;
}

.team-members .team-desc {
    left: auto;
    bottom: 0;
    width: 100%;
    padding: 0 20px;
    position: absolute;
    opacity: 0;
    color: #fff;
    -webkit-transform: translate3d(0, 10%, 0);
    transform: translate3d(0, 10%, 0);
    -webkit-transition: opacity 0.3s;
    -moz-transition: opacity 0.3s;
    -ms-transition: opacity 0.3s;
    -o-transition: opacity 0.3s;
    transition: opacity 0.3s;
}

.team-members .team-desc h4 {
    font-size: 22px;
    font-weight: 600;
    margin: 0 0 10px;
    color: #fff;
}

.team-members .team-desc span {
    display: block;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    color: #fff;
}

.team-members:hover .team-avatar:after {
    background: rgba(47, 60, 72, 0.5);
    transition-duration: 300ms;
    transition-property: all;
    transition-timing-function: cubic-bezier(0.7, 1, 0.7, 1);
}

.team-members:hover .team-desc {
    -webkit-transform: translate3d(0, -5%, 0);
    transform: translate3d(0, -5%, 0);
    -webkit-transform: translate3d(0, -10%, 0);
    transform: translate3d(0, -10%, 0);
}

.team-members:hover .team-desc {
    opacity: 1;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -ms-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}
 
</style>
<div class="container">
    <div class="heading">
        <h2>Our Little Team</h2>
        <p>We try to help out with as much as we can!
        </p>
    </div><!-- //end heading -->
        <hr class = "colorgraph">
	<div class="row">
        <div class="col-sm-4">
            <div class="team-members">
                <div class="team-avatar">
                    <img class="img-responsive" src="<?php echo base_url(); ?>/images/shades.jpg" alt="">
                </div>
                <div class="team-desc">
                    <h4>Isu I. Edom</h4>
                    <span>Design & Activist</span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="team-members">
                <div class="team-avatar">
                    <img class="img-responsive" src="<?php echo base_url(); ?>/images/jacket.jpg" alt="">
                </div>
                <div class="team-desc">
                    <h4>Ibeh C. Victor</h4>
                    <span>Programmer</span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="team-members">
                <div class="team-avatar">
                    <img class="img-responsive" src="<?php echo base_url(); ?>/images/face.jpg" alt="">
                </div>
                <div class="team-desc">
                    <h4>Ngwu C. Gideon</h4>
                    <span>Co. Programmer</span>
                </div>
            </div>
        </div>
    </div>
</div>


