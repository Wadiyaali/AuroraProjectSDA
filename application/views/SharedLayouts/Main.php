<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="JavaScript.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
<script type='text/javascript' src="<?php echo base_url(); ?>Js/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('CSS/StyleSheet2.css')?>"/>
<link rel="stylesheet" href="<?php echo base_url('CSS/StyleSheet2.min.css')?>"/>
<link rel="stylesheet" href="<?php echo base_url('CSS/StyleSheet2.scss')?>"/>

    <script src="//code.jquery.com/jquery-1.12.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('CSS/bootstrap.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('CSS/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('CSS/bootstrap.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('CSS/site.css')?>"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
 <body class="bg1">
    
     
 
    <div id="background-carousel">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               
                <div class="item active" style="background-image: url('NewFolder1/imgweb.png');"></div>

                
                <div class="item" style="background-image: url('NewFolder1/web.png');"></div>
                <div class="item" style="background-image: url('NewFolder1/webimg.png');"></div>
                <div class="item" style="background-image: url('NewFolder1/webimg1.png');"></div>
            </div>
        </div>
    </div>

    <div class="customnav">
        
        <div class="et-hero-tabs-container sticky " id="navbar">

            
            <a class="nonlink"></a>
            <a class="et-hero-tab navbar-nav" href="<?php echo site_url("Landing/ShowArticle"); ?>"><p>Articles</p></a>
            <a class="et-hero-tab navbar-nav" href="<?php echo site_url("Landing/TestD"); ?>"><p>Test</p></a>
           
            <a class="nonlink navbar-text" href="<?php echo site_url("Landing"); ?>" title="Home"><h1 style="font-size:5em">Aurora </h1></a><a class="et-hero-tab navbar-nav" href="<?php echo site_url("User/SignIn"); ?>"><p>Log In</p></a>
            <a class="et-hero-tab navbar-nav" href="<?php echo site_url("User/SignUp"); ?>"><p>Sign up</p> </a>
        
           
            <a class="nonlink"></a>


            

    </div>
           
        </div>
          <div class="col-md-12 col-lg-12">
          <?php $this->load->view($Content);?>
          </div>
      <div class="customfoot">
            <section id="footer">

                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <h3>Quick links</h3>
                        <ul class="list-unstyled quick-links">
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                            <li><a href="#" title="Design and developed by Team Aurora"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
                        </ul>

                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1809.0585537695151!2d67.15144425810752!3d24.92808017833471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3385adeb3a5db%3A0x424d30b4941075ff!2sGulistan%20e%20Johar%20Block%209%20Gul%20Housing%20Society%20Block%209%20A%20Gulshan-e-Iqbal%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1592936166077!5m2!1sen!2s" width="auto" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                    </div>
                    
                    
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <h3>Everyday is a step towards a better future, stay connected to us & help us in building a better society.</h3>
                            <div class="containernoti">
                                <div class="container">
                                    <form id="singular-form">

                                        <button class="shown" type="button" id="trigger">Subscribe</button>

                                        <div id="input-container">
                                            <input type="text" placeholder="E-mail"/>
                                            <button type="button">Send</button>
                                        </div>

                                        <div id="success">Thank you!</div>

                                    </form>
                                </div>
                            </div>

                        </div>



                    </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <hr/>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">

                        <p class="h4">&copy All right Reserved.<a href="https://www.sunlimetech.com" target="_blank">  Team Aurora 2019.</a></p>
                    </div>
                    <hr/>
                </div>

            </section>

        </div>
</body>
</html>
<script type='text/javascript' src="<?php echo base_url(); ?>Js/script.js"></script>
<script>
 
  window.onload=  function caro() {
        $('#myCarousel').carousel(
           
            
            
        )
    };
</script>

<script>
   
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 50) {
            $('.et-hero-tabs-container').css('background', '#008c76');
            $('.et-hero-tab').css('background', '#008c76');
            $('.et-slide').css('background', '#008c76');
            $('.nonlink').css('background', '#008c76');
            $('.et-hero-tabs-container').css('margin-top', '0%');
            $('.navbar').css('background', '#008c76');
 
        } else {
            $('.navbar').css('background', 'transparent');
            $('.et-hero-tabs-container').css('background', 'transparent');
            $('.et-hero-tab').css('background', 'transparent');
            $('.et-slide').css('background', 'transparent');
            $('.nonlink').css('background', 'transparent');
            $('.et-hero-tabs-container').css('margin-top', '2%');
        }
    });
</script>

<script>
    
    'use strict'
    var testim = document.getElementById("testim"),
            testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
        testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
        testimLeftArrow = document.getElementById("left-arrow"),
        testimRightArrow = document.getElementById("right-arrow"),
        testimSpeed = 4500,
        currentSlide = 0,
        currentActive = 0,
        testimTimer,
            touchStartPos,
            touchEndPos,
            touchPosDiff,
            ignoreTouch = 30;
    ;

    window.onload = function () {

        // Testim Script
        function playSlide(slide) {
            for (var k = 0; k < testimDots.length; k++) {
                testimContent[k].classList.remove("active");
                testimContent[k].classList.remove("inactive");
                testimDots[k].classList.remove("active");
            }

            if (slide < 0) {
                slide = currentSlide = testimContent.length - 1;
            }

            if (slide > testimContent.length - 1) {
                slide = currentSlide = 0;
            }

            if (currentActive != currentSlide) {
                testimContent[currentActive].classList.add("inactive");
            }
            testimContent[slide].classList.add("active");
            testimDots[slide].classList.add("active");

            currentActive = currentSlide;

            clearTimeout(testimTimer);
            testimTimer = setTimeout(function () {
                playSlide(currentSlide += 1);
            }, testimSpeed)
        }

        testimLeftArrow.addEventListener("click", function () {
            playSlide(currentSlide -= 1);
        })

        testimRightArrow.addEventListener("click", function () {
            playSlide(currentSlide += 1);
        })

        for (var l = 0; l < testimDots.length; l++) {
            testimDots[l].addEventListener("click", function () {
                playSlide(currentSlide = testimDots.indexOf(this));
            })
        }

        playSlide(currentSlide);

        // keyboard shortcuts
        document.addEventListener("keyup", function (e) {
            switch (e.keyCode) {
                case 37:
                    testimLeftArrow.click();
                    break;

                case 39:
                    testimRightArrow.click();
                    break;

                case 39:
                    testimRightArrow.click();
                    break;

                default:
                    break;
            }
        })

        testim.addEventListener("touchstart", function (e) {
            touchStartPos = e.changedTouches[0].clientX;
        })

        testim.addEventListener("touchend", function (e) {
            touchEndPos = e.changedTouches[0].clientX;

            touchPosDiff = touchStartPos - touchEndPos;

            console.log(touchPosDiff);
            console.log(touchStartPos);
            console.log(touchEndPos);


            if (touchPosDiff > 0 + ignoreTouch) {
                testimLeftArrow.click();
            } else if (touchPosDiff < 0 - ignoreTouch) {
                testimRightArrow.click();
            } else {
                return;
            }

        })
    }
</script>
           
<script>
    const sf = {};

    sf.container = document.querySelector('.container');
    sf.form = document.querySelector('.container > #singular-form');
    sf.trigger = document.querySelector('.container > #singular-form > button#trigger');
    sf.input = document.querySelector('.container>#singular-form>#input-container>input');
    sf.submitButton = document.querySelector('.container > #singular-form > #input-container > button');
    sf.successMessage = document.querySelector('.container > #singular-form > #success');

    sf.submitDelay = 1500;

    sf.clickHandler = (e) => {
        switch (e.target) {
            case sf.trigger:
                console.log('case trigger');
                sf.container.style.width = '40rem'
               
                
                e.target.classList.remove('shown');
                sf.input.classList.add('shown');
                sf.submitButton.classList.add('shown');
                sf.input.focus();
                break;
            case sf.submitButton:
                sf.submitForm();
                break;
        }
    }

    sf.handleInputKeypress = (e) => {
        if (e.keyCode === 13) {
            e.preventDefault();
            sf.submitForm();
        }
    }

    sf.submitForm = () => {
        sf.input.style.transition = 'all .4s ease';
        sf.submitButton.style.transition = 'all .4s ease';
        sf.input.classList.remove('shown');
        sf.submitButton.classList.remove('shown');
        sf.container.style.transition = 'all .4s cubic-bezier(0.47, 0.47, 0.27, 1.20) .4s';
        sf.container.style.width = '';
        sf.successMessage.classList.add('shown');
        let submission = setTimeout(() => sf.form.submit(), sf.submitDelay);
    }

    sf.input.addEventListener('keypress', (e) => sf.handleInputKeypress(e));
    document.addEventListener('click', (e) => sf.clickHandler(e));
</script>
