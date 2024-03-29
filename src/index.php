<?php
  if (isset($_POST['signup'])) {
    $signupName = $_POST['signup-name'];
    $signupEmail = $_POST['signup-email'];
    $signupFrom = 'your-app-email@gmail.com';
    $signupTo = 'your-support-email@gmail.com';
    $signupSubject = 'Email signup';
    $signupBody = "Please sign $signupName ($signupEmail) up to the mailing list";
    
    if (!$_POST['signup-name']) {
      $signupNameError = '<div class="text-danger text-left"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Please enter a valid name</div>';
    }

    if (!$_POST['signup-email']) {
      $signupEmailError = '<div class="text-danger text-left"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Please enter a valid email address</div>';
    }

    $hasSignUpError = $signupEmailError || $signupNameError;

    if (!$hasSignUpError) {
      if (mail ($signupTo, $signupSubject, $signupBody, "From: {$signupFrom}")) {
        $signupResult = '<div class="text-success text-left"><i class="fa fa-check" aria-hidden="true"></i> &nbsp;thank you we\'ll keep you updated</div>';
      } else {
        $signupResult = '<div class="text-danger text-left"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;sorry there has been an error, please try again</div>';
      }
    } 
  }
?>
<?php
  if (isset($_POST['contact'])) {
    $contactName = $_POST['contact-name'];
    $contactEmail = $_POST['contact-email'];
    $contactSubject = $_POST['contact-subject'];
    $contactMessage = $_POST['contact-message'];
    $contactFrom = 'your-app-email@gmail.com';
    $contactTo = 'your-support-email@gmail.com';
    
    $contactBody = "Name: $contactName\nEmail: $contactEmail\nSubject: $contactSubject\nMessage: $contactMessage";
    
    if (!$_POST['contact-name']) {
      $contactNameError = '<div class="text-danger text-left"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Please enter a valid name</div>';
    }
    if (!$_POST['contact-email']) {
      $contactEmailError = '<div class="text-danger text-left"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Please enter a valid email address</div>';
    }
    if (!$_POST['contact-subject']) {
      $contactSubjectError = '<div class="text-danger text-left"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Please enter a valid subject</div>';
    }
    if (!$_POST['contact-message']) {
      $contactMessageError = '<div class="text-danger text-left"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Please enter a valid message</div>';
    }
    
    $hasContactError = $contactNameError || $contactEmailError || $contactSubjectError || $contactMessageError;

    if (!$hasContactError) {
      if (mail ($contactTo, $contactSubject, $contactBody, "From: {$contactFrom}")) {
        $contactResult = '<div class="text-success text-left"><i class="fa fa-check" aria-hidden="true"></i> &nbsp;thank you we\'ll keep you updated</div>';
      } else {
        $contactResult = '<div class="text-danger text-left"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;sorry there has been an error, please try again</div>';
      }
    } 
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <title>Hello, world!</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation-bar">
        <span class="navbar-toggler-icon">&#9776;</span>
      </button>
      <a class="navbar-brand" href="#"><img src="img/logo-small.png" class="img-fluid"></a>
      <div class="collapse navbar-collapse" id="navigation-bar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="#social">CONNECT</a></li>
          <li class="nav-item"><a class="nav-link" href="#who">WHO</a></li>
          <li class="nav-item"><a class="nav-link" href="#story">STORY</a></li>
          <li class="nav-item"><a class="nav-link" href="#why">WHY</a></li>
          <li class="nav-item"><a class="nav-link" href="#customers">CUSTOMERS</a></li>
          <li class="nav-item"><a class="nav-link" href="#pricing">PRICING</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
        </ul>
      </div>
    </nav>

    <!-- HEADER -->
    <section id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-6 header-left <?php if (!$hasSignUpError) {echo("wow fadeIn");}; ?>" data-wow-delay="0.2s" data-wow-duration="2s">
            <img src="img/logo.png" class="mx-auto d-block">
            <h2 class="text-center">BURGER TASTE BETTER IN SHACK</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis condimentum porttitor orci, in faucibus enim semper ut. Pellentesque lacinia erat vel ullamcorper fermentum.</p>
            <p class="d-none d-md-block">Morbi sit amet interdum ante. Nam euismod ante in augue tristique scelerisque. Morbi mattis metus non augue venenatis dapibus at mollis elit.</p>
            <p class="d-none d-md-block">Sed dui lectus, suscipit ac molestie non, vehicula sed tortor. Nulla sed mollis massa, sit amet blandit metus. Sed tempus felis at iaculis pharetra.</p>
          </div>
          <div class="col-md-6 header-right d-none d-md-block <?php if (!$hasSignUpError) {echo("wow flash");}; ?>" data-wow-delay="1s">
            <form role="form" method="post" action="#header">
              <p>Duis pulvinar imperdiet lectus, ac molestie turpis sollicitudin eget. Donec gravida, nulla quis semper cursus, eros magna rhoncus lectus, vel fermentum leo eros ac quam.</p>
              <fieldset class="form-group">
                <label class="sr-only">name</label>
                <input type="text" class="form-control" name="signup-name" placeholder="your name">
              </fieldset>
              <fieldset class="form-group">
                <label class="sr-only">email</label>
                <input type="email" class="form-control" name="signup-email" placeholder="your email">
              </fieldset>
              <button type="submit" class="btn btn-signup btn-outline-info btn-block" name="signup">sign up</button>
            </form>
            <?php echo $signupNameError;?>
            <?php echo $signupEmailError;?>
            <?php echo $signupResult;?>
          </div>
        </div>
        <div class="row <?php if (!$hasSignUpError) {echo("wow swing");}; ?>" data-wow-delay="2s">
          <div class="col text-center">
            <a href="#social"><i class="fas fa-chevron-down fa-3x"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!-- END HEADER -->

    <!-- SOCIAL -->
    <section id="social">
      <div class="container wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
        <div class="row">
          <div class="col-md-6 social-left">
            <h2>Connect with us:</h2>
            <hr align="left" width="50%">
            <p>Cras rhoncus eget tellus ut molestie. Aliquam eu euismod diam, eu ultricies dui. Duis mi tellus, tempus sit amet quam ut, consequat imperdiet massa.</p>
          </div>
          <div class="col-md-6 social-right">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fas fa-rss"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- END SOCIAL -->

    <!-- WHO -->
    <section id="who">
      <div class="container">
        <div class="row">
          <div class="col-md-6 who-left wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1s">
            <h2>Who we are...</h2>
            <hr align="left" width="50%">
            <p class="lead">Aliquam cursus ex vel magna volutpat luctus. Praesent eget maximus lacus. In hac habitasse platea dictumst.</p>
            <p>Phasellus quis ligula nunc. Aliquam quis massa consequat, placerat tortor eget, tristique augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam luctus arcu in ligula blandit, vitae ultrices dui tristique. Quisque placerat diam vel blandit dignissim. Praesent tempor ligula arcu, vitae consectetur nulla posuere interdum.</p>
            <button type="button" class="btn btn-who">Find out more</button>
          </div>
          <div class="col-md-6 who-right wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1s">
            <img class="mx-auto d-block" src="img/who.jpg"/>
          </div>
        </div>
      </div>
    </section>
    <!-- END WHO -->

    <!-- STORY -->
    <section id="story">
      <div class="container">
        <div class="row">
          <div class="col wow fadeInUp" data-wow-duration="2s">
            <h2>Our latest story...</h2>
            <hr align="left" width="30%">
            <p>Donec eu orci faucibus, aliquet felis nec, scelerisque tellus. Suspendisse luctus, ligula nec facilisis cursus, est odio iaculis sapien, vitae vulputate dolor metus sed odio.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.2s" data-wow-duration="3s">
            <div class="card my-3">
              <div class="story-img">
                <a href="#"><img src="img/story1-small.jpg" class="card-img-top img-fluid" alt="story1"></a>
                <div class="img-overlay"></div>
              </div>
              <div class="card-body">
                <p class="card-text">Curabitur tortor magna, malesuada id ante eget, ornare aliquam est. In at velit sed est sodales pellentesque non suscipit ex.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.4s" data-wow-duration="3s">
            <div class="card my-3">
              <div class="story-img">
                <a href="#"><img src="img/story2-small.jpg" class="card-img-top img-fluid" alt="story2"></a>
                <div class="img-overlay"></div>
              </div>
              <div class="card-body">
                <p class="card-text">Morbi ullamcorper justo varius ipsum elementum, in rutrum libero sodales. Nunc at ultrices lacus.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.6s" data-wow-duration="3s">
            <div class="card my-3">
              <div class="story-img">
                <a href="#"><img src="img/story3-small.jpg" class="card-img-top img-fluid" alt="story3"></a>
                <div class="img-overlay"></div>
              </div>
              <div class="card-body">
                <p class="card-text">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc a hendrerit metus, et vestibulum elit.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.8s" data-wow-duration="3s">
            <div class="card my-3">
              <div class="story-img">
                <a href="#"><img src="img/story4-small.jpg" class="card-img-top img-fluid" alt="story4"></a>
                <div class="img-overlay"></div>
              </div>
              <div class="card-body">
                <p class="card-text">Praesent pretium urna sed sapien elementum scelerisque. Vestibulum faucibus, massa sed congue placerat, libero nisl tristique magna, non tempus leo nunc fermentum lorem.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.8s" data-wow-duration="3s">
            <div class="card my-3">
              <div class="story-img">
                <a href="#"><img src="img/story5-small.jpg" class="card-img-top img-fluid" alt="story5"></a>
                <div class="img-overlay"></div>
              </div>
              <div class="card-body">
                <p class="card-text">Vivamus fringilla risus urna, in maximus lectus finibus at. Quisque pretium ipsum in vulputate semper.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.6s" data-wow-duration="3s">    
            <div class="card my-3">
              <div class="story-img">
                <a href="#"><img src="img/story6-small.jpg" class="card-img-top img-fluid" alt="story6"></a>
                <div class="img-overlay"></div>
              </div>
              <div class="card-body">
                <p class="card-text">Aenean pellentesque, velit ac placerat venenatis, sapien metus tempor erat, quis rhoncus ligula tellus a quam.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.4s" data-wow-duration="3s">
            <div class="card my-3">
              <div class="story-img">
                <a href="#"><img src="img/story7-small.jpg" class="card-img-top img-fluid" alt="story7"></a>
                <div class="img-overlay"></div>
              </div>
              <div class="card-body">
                <p class="card-text">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec eget augue ullamcorper, tempor diam id, vestibulum leo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.2s" data-wow-duration="3s">
            <div class="card my-3">
              <div class="story-img">
                <a href="#"><img src="img/story8-small.jpg" class="card-img-top img-fluid" alt="story8"></a>
                <div class="img-overlay"></div>
              </div>
              <div class="card-body">
                <p class="card-text">Phasellus ac tortor quis eros suscipit viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END STORY -->

    <!-- WHY -->
    <section id="why">
      <div class="container text-center">
        <div class="row">
          <div class="col wow fadeIn" data-wow-duration="2s">
            <h2>Why visit us?</h2>
            <hr width="30%">
            <p>In consequat ligula at massa sagittis, eu iaculis massa imperdiet. Suspendisse bibendum, nunc sed luctus luctus, est mauris maximus nisi, quis vulputate nisi metus non risus.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="2s">
            <i class="fas fa-thumbs-up fa-3x"></i>
            <h3>Customer Satisfaction</h3>
            <p>Sed laoreet sem eu ipsum finibus malesuada varius et est. Phasellus congue, ante sit amet vulputate venenatis, dui nibh volutpat enim, a interdum tellus ex condimentum felis.</p>
          </div>
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="3s">      
            <i class="fas fa-fire fa-3x"></i>
            <h3>Perfect Grill</h3>
            <p>Donec sed congue urna. Fusce volutpat feugiat condimentum. Cras est lacus, interdum ac vulputate id, malesuada vitae nulla.</p>
          </div>
          <div class="col-md-4 wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="2s">
            <i class="fas fa-trophy fa-3x"></i>
            <h3>Award Winning Service</h3>
            <p>Maecenas viverra lectus in interdum viverra. Proin ipsum nulla, euismod in placerat at, pulvinar quis nibh. Maecenas ac diam eget turpis sodales pellentesque at non sem.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END WHY -->

    <!-- CUSTOMERS -->
    <section id="customers">
      <div class="container text-center wow fadeInUp" data-wow-delay="0.2s">
        <div class="row">
          <div class="col">
            <h2>Customers</h2>
            <hr width="30%">
            <p>Sed finibus, quam a efficitur porta, dui urna vestibulum lectus, at pharetra risus tortor id dui. Donec lacinia quam a tincidunt varius. In congue leo ut nibh dapibus tempus.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div id="quotes" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#quotes" data-slide-to="0" class="active"></li>
                <li data-target="#quotes" data-slide-to="1"></li>
                <li data-target="#quotes" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <blockquote class="blockquote">
                    <p class="mb-0">Mauris justo enim, imperdiet eget orci sit amet, lacinia tincidunt urna. Phasellus fermentum arcu dui, non dapibus dui porta quis. Duis convallis auctor nibh sit amet convallis. Etiam luctus consequat dolor, eget iaculis ante sagittis a.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                  </blockquote>
                </div>
                <div class="carousel-item">
                  <blockquote class="blockquote">
                    <p class="mb-0">Aenean vel auctor velit. Nulla condimentum maximus purus, eleifend feugiat enim faucibus sed. Nam id quam justo. Morbi feugiat molestie dictum. Praesent vitae pretium odio. Cras luctus orci a justo scelerisque mollis.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></i></p>
                  </blockquote>
                </div>
                <div class="carousel-item">
                  <blockquote class="blockquote">
                    <p class="mb-0">Nullam velit eros, feugiat nec semper sit amet, volutpat id ante. Ut fermentum suscipit urna et accumsan. Phasellus eu pellentesque felis. Aliquam in pretium lorem, vel finibus erat.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i></p>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END CUSTOMERS -->

    <!-- PRICING -->
    <section id="pricing">
      <div class="container text-center">
        <div class="row">
          <div class="col">
            <h2>Pricing</h2>
            <hr width="30%">
            <p class="lead">Etiam eu aliquam metus. Cras blandit vestibulum magna, eget pretium mauris congue et. Quisque dignissim, leo quis pellentesque iaculis, est velit porta nunc, ac condimentum urna magna quis turpis.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="2s">
            <div class="card my-3">
              <div class="card-header basic">BASIC</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>$10</strong></li>
                <li class="list-group-item"><strong>1</strong> main</li>
                <li class="list-group-item"><strong>1</strong> base</li>
                <li class="list-group-item"><strong>3</strong> basic sides</li>
                <li class="list-group-item"><strong>1</strong> topping</li>
                <li class="list-group-item"><strong>Basic</strong> grill</li>
              </ul>
              <div class="card-body">
                <button type="button" class="btn btn-outline-info btn-block">ORDER</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 wow bounceIn" data-wow-delay="0.8s" data-wow-duration="2s">
            <div class="card my-3">
              <div class="card-header standard">STANDARD</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>$15</strong> <small><del>$25</del></small></li> 
                <li class="list-group-item"><strong>2</strong> main</li>
                <li class="list-group-item"><strong>1</strong> base</li>
                <li class="list-group-item"><strong>2</strong> standard sides</li>
                <li class="list-group-item"><strong>3</strong> basic sides</li>
                <li class="list-group-item"><strong>1</strong> topping</li>
                <li class="list-group-item"><strong>Fine</strong> grill</li>
              </ul>
              <div class="card-body">
                <button type="button" class="btn btn-outline-info btn-block">ORDER</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="2s">
            <div class="card my-3">
              <div class="card-header pro">PREMIUM</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>$50</strong></li>
                <li class="list-group-item"><strong>3</strong> main</li>
                <li class="list-group-item"><strong>1</strong> base</li>
                <li class="list-group-item"><strong>2</strong> premium sides</li>
                <li class="list-group-item"><strong>3</strong> standard sides</li>
                <li class="list-group-item"><strong>2</strong> topping</li>
                <li class="list-group-item"><strong>Secret</strong> grill</li>
                <li class="list-group-item"><strong>Guarantee</strong> exchange</li>
              </ul>
              <div class="card-body">
                <button type="button" class="btn btn-outline-info btn-block">ORDER</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END PRICING -->

    <!-- CONTACT -->
    <section id="contact">
      <div class="container text-center <?php if (!$hasContactError) {echo("wow zoomIn");}; ?>" data-wow-delay="0.3s">
        <div class="row">
          <div class="col">
            <h2>Contact us</h2>
            <hr width="30%">
            <p>Sed hendrerit augue nisi. Proin placerat commodo mi. Sed eu congue sapien. Vivamus vitae quam sit amet dui consectetur mattis nec at risus.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 mx-auto">
            <form role="form" method="post" action="#contact">
              <fieldset class="form-group"><input type="text" class="form-control form-control-sm" name="contact-name" placeholder="name..."></fieldset>
              <fieldset class="form-group"><input type="email" class="form-control form-control-sm" name="contact-email" placeholder="email..."></fieldset>
              <fieldset class="form-group"><input type="text" class="form-control form-control-sm" name="contact-subject" placeholder="subject..."></fieldset>
              <fieldset class="form-group"><textarea class="form-control form-control-sm" name="contact-message" placeholder="message..." rows="3"></textarea></fieldset>
              <button type="submit" class="btn btn-contact btn-outline-info btn-block" name="contact">submit</button>
            </form>
            <?php echo $contactNameError;?>
            <?php echo $contactEmailError;?>
            <?php echo $contactSubjectError;?>
            <?php echo $contactMessageError;?>
            <?php echo $contactResult;?>
          </div>
        </div>
      </div>
    </section>
    <!-- END CONTACT -->
      
    <!-- FOOTER -->
    <section id="footer">
      <div class="container wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.5s">
        <div class="row">
          <div class="col-md-8 col-sm-6">
            <h3>About THE BURGER SHACK</h3>
            <p>Nam viverra purus lorem, sed pellentesque diam porttitor eget. Aliquam erat volutpat. Fusce sed metus ut quam posuere rhoncus. Sed molestie pretium interdum.</p>
            <p>Praesent et turpis risus. Vestibulum et sagittis nulla. Nulla facilisi. Phasellus lacinia mauris rhoncus ex varius malesuada. Nulla maximus congue ligula tempor sagittis.</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fas fa-rss"></i></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6">
            <h3>Say hello:</h3>
            <ul class="list-unstyled">
              <li><p><strong><i class="fas fa-map-signs"></i> Address:</strong> Location, Street, Code</p></li>
              <li><p><strong><i class="fas fa-envelope"></i> Email:</strong> <a href="#">info@email.com</a></p></li>
              <li><p><strong><i class="fas fa-phone"></i> Phone:</strong> +01 234 567 8910</p></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p>&copy; 2019 Designed by THE BURGER SHACK</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END FOOTER -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </body>
</html>