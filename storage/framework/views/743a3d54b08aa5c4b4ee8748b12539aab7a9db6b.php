<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="contactus.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <title>NZ Events/Home</title>





        <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <a href="home">   <img src="logo.png"  alt="" class="center"></a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <ul class="navbar-nav mr-auto">
                <a class="navbar-brand" href="welcome">Home <span class="sr-only">(current)</span></a>
                <li class="nav-item">
                  <a class="navbar-brand" href="eventList">Event</a>
                </li>


              <li class="nav-item">
                <a class="navbar-brand" href="aboutus">About Us</a>
              </li>
              <li class="nav-item">
                <a class="navbar-brand" href="contactUs">Contact Us</a>
              </li>
              <?php if(Auth::check()): ?>

              <?php if(Auth::user()->admin): ?>
              <li class="nav-item">
                <a class="navbar-brand" href="messageTable">Message by customers</a>
              </li>
              <?php endif; ?>
              <?php endif; ?>
            </ul>
            <?php if(auth()->guard()->guest()): ?>


            <form action="/login" class="form-inline my-2 my-lg-0">
              <button class="btn btn-primary btn-lg" >Log in</button>
            </form>
              <?php if(Route::has('register')): ?>
              <form action="/register" class="form-inline my-2 my-lg-0">
                <button class="btn btn-primary btn-lg" >Register</button>
              </form>
              <?php endif; ?>
          <?php else: ?>
            <div class="navbar-brand">


                      <?php echo e(Auth::user()->name); ?>


    </div>

                      <a  href="<?php echo e(route('logout')); ?>"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">



                        <button class="btn btn-primary btn-lg" >  <?php echo e(__('Logout')); ?></button>

                      </a>

                      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                          <?php echo csrf_field(); ?>
                      </form>
                  </div>
              </li>
          <?php endif; ?>
            </div>
        </nav>

</head>

<body style="background-color:#f8f9fa;">


  <div id="GetOfferModal" class="modal fade modal-get-offer" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">

                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                  <form class="form" role="form" autocomplete="off" id="formGetOffer" novalidate="" method="POST">
                    <Center><h3>Login</h3>
                      <div class="form-group">
                          <input type="text" class="form-control" name="uname1" id="uname1" required="" placeholder="LoginID">
                          <div class="invalid-feedback">Oops, you missed this one.</div>
                      </div>
                      <div class="form-group">
                          <input type="tel" class="form-control" id="pwd1" required="" placeholder="Password">
                          <div class="invalid-feedback">Enter your password too!</div>
                      </div>

                      <div class="form-group py-4">
                          <button type="submit" class="btn btn-success" id="btnGetOffer">Login</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

  <script type="text/javascript">
  $("#btnGetOffer").click(function(event) {

   //Fetch form to apply custom Bootstrap validation
   var form = $("#formGetOffer")

   if (form[0].checkValidity() === false) {
     event.preventDefault()
     event.stopPropagation()
   }

   form.addClass('was-validated');
 });
</script>

<div class="bg-img">
<!-- Contact Us Section -->
  <section class="Material-contact-section section-padding section-dark">
    <div class="box">


    <div class="container">
      <div class="content">
<div class="container">


        <div class="row">
          <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
              <center><h1 class="section-title">Love to Hear From You</h1></center>
          </div>
            <!-- Section Titile -->
            <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content.</p>

              <div class="find-widget">
               Company:  NZ events
              </div>
              <div class="find-widget">
               Address: Level 2 Dart House, Hawthorne Drive, Remarkables Park Town Centre, Queenstown
              </div>
              <div class="find-widget">
                Phone: 0272260339,0210702286
              </div>
              <div class="find-widget">
                 Opening Hours: Mon to Sat: 09:30 AM - 4.00 PM
              </div>
            </div>


            <script>
              function myFunction() {
                alert("Your message was submitted");
                      }
                    </script>

            <!-- contact form -->
            <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                <form class="shake" action="/contactUs/thanks" role="form" method="post" onsubmit="myFunction()"id="contactForm" name="contact-form" data-toggle="validator">
                    <!-- Name -->
                    <?php echo csrf_field(); ?>
                    <div class="form-group label-floating">
                      <label class="control-label" for="name">Name</label>
                      <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>
                    <!-- email -->
                    <div class="form-group label-floating">
                      <label class="control-label" for="email">Email</label>
                      <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                      <div class="help-block with-errors"></div>
                    </div>
                    <!-- Subject -->
                    <div class="form-group label-floating">
                      <label class="control-label">Subject</label>
                      <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                      <div class="help-block with-errors"></div>
                    </div>
                    <!-- Message -->
                    <div class="form-group label-floating">
                        <label for="message" class="control-label">Message</label>
                        <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Form Submit -->
                    <div class="form-submit mt-5">
                        <button class="btn btn-success" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
            </div>
            </div>
    </div>
  </div>

    </div>
  </section>
</div>
<div class="container0">
<center><h8>Meet The Team</h8></center>
</div>


<div class="team-grid">
        <div class="container">
            <div class="intro">
                <p class="text-center">These are the faces behind this sucessfull Website. </p>
            </div>
            <div class="row people">
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(shubham.jpg)">
                        <div class="cover">
                            <h3 class="name">Shubham Paudel</h3>
                            <p class="title">Project Manager</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(krishna.jpg)">
                        <div class="cover">
                            <h3 class="name">Krishna Bhandari</h3>
                            <p class="title">Web Developer </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(sushant.jpg)">
                        <div class="cover">
                            <h3 class="name">Sushant Bhandari</h3>
                            <p class="title">Front End Developer</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(dikshant.jpg)">
                        <div class="cover">
                            <h3 class="name">Dikshant Shrestha</h3>
                            <p class="title">Programmer</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(anush.jpg)">
                        <div class="cover">
                            <h3 class="name">Anush Badwal</h3>
                            <p class="title">Test Analyst</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


</body>

<ul class="nav1 justify-content-center">
  <br>
  <ul class="social-network social-circle">

          <li><a href="https://www.facebook.com/sakds.eventsnz.9" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/NzEvents1" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://mail.google.com/mail/u/0/?tab=rm1#inbox?compose=CllgCJNqtLJNcgdlmvHbrfCNGrNzgFbFDDvJptMBMLqvkqhGrBqKmRPMSZJKphtQpkNZHDwGwgB" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="https://www.linkedin.com/in/nz-events-989a8b1a0/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
        </ul>
</ul>

</html>
<?php /**PATH /Users/krishnabhandari/.composer/vendor/bin/Events/resources/views//contactUs.blade.php ENDPATH**/ ?>