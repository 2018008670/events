<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="event.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <title>NZ Event/events</title>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <img src="logo.png" href= "welcome" alt="" class="center">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
          <a class="navbar-brand" href="welcome">Home <span class="sr-only">(current)</span></a>
          <li class="nav-item active">
            <a class="navbar-brand" href="event">Event </a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" href="aboutus">About Us</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" href="contactUs">Contact Us</a>
            <li class="nav-item">
              <a class="navbar-brand" href="eventList"> EventList</a>
            </li>
          </li>
        </ul>
        <form action="/login" class="form-inline my-2 my-lg-0">
    <button class="btn btn-primary btn-lg" >Log in</button>
      </form>
      <form action="/register" class="form-inline my-2 my-lg-0">
  <button class="btn btn-primary btn-lg" >Register</button>
    </form>
      </div>
    </nav>

  </head>
  <body style="background-color:#f8f9fa;">



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

    <br>
    <center><h7>Events</h7></center>
    <?php
@foreach ($events as $event)

  <h3> {{<a href="/events/{{$event->eventid}}">{{$event->eventName}}></a>}}</h3>
@endforeach
?>
<div class="container">

<div class="row">
  <div class="column">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">



        <div class="hovereffect">
            <img class="img-responsive" src="ev1.jpg" alt="">


            <div class="overlay">
               <h2> title</h2>
               <a class="info" href="#">More Info</a>
            </div>
        </div>
    </div>
    </div>



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
<?php /**PATH /Users/krishnabhandari/.composer/vendor/bin/Events/resources/views/eventList.blade.php ENDPATH**/ ?>