<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">

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
          @if(Auth::check())

          @if (Auth::user()->admin)
          <li class="nav-item">
            <a class="navbar-brand" href="messageTable">Message by customers</a>
          </li>
          @endif
          @endif
        </ul>
        @guest


        <form action="/login" class="form-inline my-2 my-lg-0">
          <button class="btn btn-primary btn-lg" >Log in</button>
        </form>
          @if (Route::has('register'))
          <form action="/register" class="form-inline my-2 my-lg-0">
            <button class="btn btn-primary btn-lg" >Register</button>
          </form>
          @endif
      @else
        <div class="navbar-brand">


                  {{ Auth::user()->name }}

</div>

                  <a  href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">



                    <button class="btn btn-primary btn-lg" >  {{ __('Logout') }}</button>

                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest
        </div>
    </nav>

</head>

<body>

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

  <div class="overlay">

  <video class="vdo "playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="new zealand.mp4" type="video/mp4">
  </video>


    </div>



<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
<p>NZ Events is the New Zealand based company which was launched in 2019. This is the platfrom where you can promote your event in wide range of mass. It will also help you to upgrade Your event and run smoothly.</p>
  <form  action="/register" >


        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Register</button>

        </form>
      </div>
    </div>
  </div>
</section>
<br>
<br>
<br>

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
