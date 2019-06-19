# Skill Refresh - Bootstrap 4 Beginner

## Create Project Structure

* Create myproject and myproject/src folder.
* Install Bootstrap
  * Go to https://getbootstrap.com, click _**Download**_ button, it will take us to Download page. 
  * Go ahead and click _**Donwload**_ button to download the compiled CSS and JS.
  * Extract the downloaded file, and move /css and /js folders into myproject/src folder.

* Prepare File Structure
  * Create a new empty style.css file in the src/css folder.
  * Create a new empty index.html file in the src folder.

* Prepare index.html and style.css
  * Go to https://getbootstrap.com, click _**Get started**_ button, it will take us to Documentation page.
  * Look for _**Starter template**_ section, copy and paste the codes to the empty index.html file.
  * Remove the code \<h1>Hello, world!\</h1>
  * Add link to style.css, inside the \<head> section, after all \<link>, add
    ```html
    <link rel="stylesheet" href="css/style.css">
    ```
  * Add global style
    ```css
    body, html {
      height: 100%;
    }
    ```
  * Go to https://fonts.google.com, search for font you love, click on the “+” sign, click on the notification “1 Family Selected” at the bottom. The notification will popup and show more information.
  * In the Customize tab, select "light 300", "regular 400", and "bold 700"
  * In the Embed tab, find and copy the HTML code that link to font’s stylesheet, paste it to index.html file, inside the \<head> section, after all \<link>. Example here using “Montserrat” font,
    ```html
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
    ```
  * In the Embed tab, find and copy the CSS code that specify the font family, paste it to style.css file inside the _**body, html**_ section. Example here using “Montserrat” font,
    ```css
    font-family: 'Montserrat', sans-serif;
    ```

* Install Font Awesome 5
  * Go to https://fontawesome.com, click _**Download**_ link, it will take us to Download page. Go ahead and click _**Free for Web**_ button to download the file.
  * Extract the downloaded file, move /css/all.css file to src/fontawesome/css folder, move /webfonts folder to src/fontawesome folder.
  * Add link to all.css, inside the \<head> section, after all \<link>, add
    ```html
    <link rel="stylesheet" href="fontawesome/css/all.css">
    ```

* Download Background Image and Logo
  * Go to https://unsplash.com, 
    * search for a background image you love, download and rename it to bg.jpg, and move it to src/img folder.
    * search for images you love for the Who section, rename to who.jpg, and move it to src/img folder.
    * search for images you love for the Latest Story section, total 8 images, rename to story1.jpg to story8.jpg, and move them to src/img folder. Resize to smaller images with same canvas size, save them as story1-small.jpg to story8-small.jpg.
  * Go to https://www.flaticon.com/, 
    * search for an eye icon, which use for hover effect over story image, rename to eye.png, and move it to src/img folder.
  * Go to https://www.freelogodesign.org, 
    * search for a logo you love, download and rename it to logo.png, and move it to src/img folder.
    * edit the logo to about 40px height, or search for another small logo, and save it as logo-small.png in src/img folder.

## Building Navigation

* Coding Navigation Bar
  * In index.html, add \<nav> element inside \<body>
    ```html
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="collapse navbar-collapse" id="navigation-bar">
      </div>
    </nav>
    ```
  * add navigation options inside \<nav>
    ```html
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="collapse navbar-collapse" id="navigation-bar">
        <ul class="navbar-nav">
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
    ```
  * add navigation toggle button inside \<nav>
    ```html
    <nav class="navbar navbar-expand-lg fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation-bar">
        <span class="navbar-toggler-icon">&#9776;</span>
      </button>
      <div class="collapse navbar-collapse" id="navigation-bar">
        ...
      </div>
    </nav>
    ```
  * add logo to navigation bar inside \<nav>
    ```html
    <nav class="navbar navbar-expand-lg fixed-top">
      ...
      <a class="navbar-brand" href="#"><img src="img/logo-small.png" class="img-fluid"></a>
      <div class="collapse navbar-collapse" id="navigation-bar">
        <ul class="navbar-nav">
          ...
        </ul>
      </div>
    </nav>
    ```
  * align navigation bar to the right by using ml-auto class which auto fill margin on the left 
    ```html
    <nav class="navbar navbar-expand-lg fixed-top">
      ...
      <div class="collapse navbar-collapse" id="navigation-bar">
        <ul class="navbar-nav ml-auto">
          ...
        </ul>
      </div>
    </nav>
    ```

* Styling Navigation Bar
  * In style.css, add
    ```css
    .navbar {
      background-color: rgba(21,31,33,0.5);
      border-bottom: 1px solid #dedede;
    }

    .navbar .navbar-nav .nav-link {
      color: #d1d1d1;
    }

    .navbar .navbar-nav .nav-link:hover {
      color: #ffffff;
    }

    .navbar-toggler-icon {
      color: #ffffff;
    }
    ```

## Building Header Section

* Coding Header Section
  * In index.html, add _**header**_ \<section> element inside \<body>
    ```html
    <!-- HEADER -->
    <section id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-6 header-left">
          </div>
          <div class="col-md-6 header-right">
          </div>
        </div>
      </div>
    </section>
    <!-- END HEADER -->
    ```
  * Add left 6 columns' content
  * Go to https://www.lipsum.com/, click "Generate Lorem Ipsum" button, it will take us to a content page with genrated paragraphs. 
  * Copy words and paste inside \<p>
    ```html
    <section id="header">
      ...
      <div class="col-md-6 header-left">
        <img src="img/logo.png" class="mx-auto d-block">
        <h2 class="text-center">BURGER TASTE BETTER IN SHACK</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis condimentum porttitor orci, in faucibus enim semper ut. Pellentesque lacinia erat vel ullamcorper fermentum.</p>
        <p>Morbi sit amet interdum ante. Nam euismod ante in augue tristique scelerisque. Morbi mattis metus non augue venenatis dapibus at mollis elit.</p>
        <p>Sed dui lectus, suscipit ac molestie non, vehicula sed tortor. Nulla sed mollis massa, sit amet blandit metus. Sed tempus felis at iaculis pharetra.</p>
      </div>
      <div class="col-md-6 header-right">
        ...
      </div>
      ...
    </section>
    ```  
  * Add right 6 columns' content
  * Go to https://getbootstrap.com/docs/4.3/components/forms/, refer _**Inline forms**_ section
    ```html
    <section id="header">
      ...
      <div class="col-md-6 header-left">
          ...
      </div>
      <div class="col-md-6 header-right">
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
      </div>
      ...
    </section>
    ```             
  * Add button to take visitor to the rest of the content
  * Go to https://fontawesome.com, click “Icons” link, and it will take us to Icons page.
  * Search for “chevron”, click the chevron-down icon, and it will take us to the detail page.
  * Find, copy and paste the HTML code of the chevron-down icon.
  * Add a _**fa-3x**_ class to the icon \<i> tag to increase the size. 
  * Add a hyperlink _**\<a>**_ to the chevron-down icon.
    ```html
    <section id="header">
      ...
      <div class="row">
        ...
      </div>
      <div class="row">
        <div class="col text-center">
          <a href="#social"><i class="fas fa-chevron-down fa-3x"></i></a>
        </div>
      </div>
      ...
    </section>
    ```

* Styling Header Section
  * In style.css, add
    ```css
    /* HEADER */

    #header {
      background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.25)), url(../img/bg.jpg) no-repeat center center fixed;
      background-size: cover;
      height: 100%;
      color: white;
      display: flex;
      align-items: center;
    }

    #header img {
      width: 30%;
    }

    #header h2 {
      margin-bottom: 16px;
    }

    #header .header-right {
      margin: auto;
    }

    #header .header-right form{
      background-color: rgba(255, 255, 255, 0.15);
      border-radius: 10px;
      padding: 15px;
    }

    #header .fas {
      margin: 5% 0;
    }

    #header a .fas {
      color: #ffffff;
    }

    #header a .fas:hover {
      color: #cccccc;
    }    
    ```

* Responsive Header Section
  * In style.css, add
    ```css
    @media (max-width: 767.98px) {
      #header {
        text-align: center;
      }

      #header img {
        width: 50% !important;
      }
    }
    ```
  * Hide insignificant paragraph, only display for medium screen size and above
    ```html
    <div class="col-md-6 header-left">
      ...
      <p class="d-none d-md-block">Morbi sit amet interdum ante. Nam euismod ante in augue tristique scelerisque. Morbi mattis metus non augue venenatis dapibus at mollis elit.</p>
      <p class="d-none d-md-block">Sed dui lectus, suscipit ac molestie non, vehicula sed tortor. Nulla sed mollis massa, sit amet blandit metus. Sed tempus felis at iaculis pharetra.</p>
    </div>
    ```
  * Hide the header-right, only display for medium screen size and above
    ```html
    <div class="col-md-6 header-right d-none d-md-block">
      ...
    </div>
    ```

## Building Social Section

* Coding Social Section
  * In index.html, add _**social**_ \<section> element inside \<body>
    ```html
    <!-- SOCIAL -->
    <section id="social">
      <div class="container">
        <div class="row">
          <div class="col-md-6 social-left">
          </div>
          <div class="col-md-6 social-right">
          </div>
        </div>
      </div>
    </section>
    <!-- END SOCIAL -->
    ```
  * Add left 6 columns' content
  * Go to https://www.lipsum.com/, click "Generate Lorem Ipsum" button, it will take us to a content page with genrated paragraphs. 
  * Copy words and paste inside \<p>
    ```html
    <section id="social">
      ...
      <div class="col-md-6 social-left">
        <h2>Connect with us:</h2>
        <hr align="left" width="50%">
        <p>Cras rhoncus eget tellus ut molestie. Aliquam eu euismod diam, eu ultricies dui. Duis mi tellus, tempus sit amet quam ut, consequat imperdiet massa.</p>
      </div>
      <div class="col-md-6 social-right">
        ...
      </div>
      ...
    </section>
    ```  
  * Add right 6 columns' content
  * Go to https://fontawesome.com, click “Icons” link, and it will take us to Icons page.
  * Search for “twitter”, click the twitter icon, and it will take us to the detail page.
  * Find, copy and paste the HTML code of the twitter icon.
  * Add a hyperlink _**\<a>**_ to the twitter icon.
  * Similar for other icons.
    ```html
    <section id="social">
      ...
      <div class="col-md-6 social-left">
        ...
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
      ...
    </section>
    ```

* Styling Social Section
  * In style.css, add
    ```css
    /* SOCIAL */

    #social {
      padding: 4.25rem 0;
    }

    #social .fab, #social .fas {
      font-size: 1.5em;
      color: #be2835;
      border: 2px solid #be2835;
      width: 60px;
      height: 60px;
      border-radius: 30%;
      text-align: center;
      padding: 30% 0;
      margin-top: 10px;
      transition: all 0.4s ease-in-out;
    }

    #social .fab:hover, #social .fas:hover {
      color: #ffffff;
      background-color: #be2835;
    }
    ```

* Responsive Social Section
  * In style.css, add
    ```css
    @media (max-width: 767.98px) {
      ...
      #social {
          text-align: center;
      }

      #social hr {
          margin: 8% auto;
      }
    }
    ```

## Building Who Section

* Coding Who Section
  * In index.html, add _**who**_ \<section> element inside \<body>
    ```html
    <!-- WHO -->
    <section id="who">
      <div class="container">
        <div class="row">
          <div class="col-md-6 who-left">
          </div>
          <div class="col-md-6 who-right">
          </div>
        </div>
      </div>
    </section>
    <!-- END WHO -->
    ```
  * Add left 6 columns' content
  * Go to https://www.lipsum.com/, click "Generate Lorem Ipsum" button, it will take us to a content page with genrated paragraphs. 
  * Copy words and paste inside \<p>
    ```html
    <section id="who">
      ...
      <div class="col-md-6 who-left">
        <h2>Who we are...</h2>
        <hr align="left" width="50%">
        <p class="lead">Aliquam cursus ex vel magna volutpat luctus. Praesent eget maximus lacus. In hac habitasse platea dictumst.</p>
        <p>Phasellus quis ligula nunc. Aliquam quis massa consequat, placerat tortor eget, tristique augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam luctus arcu in ligula blandit, vitae ultrices dui tristique. Quisque placerat diam vel blandit dignissim. Praesent tempor ligula arcu, vitae consectetur nulla posuere interdum.</p>
        <button type="button" class="btn btn-who">Find out more</button>
      </div>
      <div class="col-md-6 who-right">
        ...
      </div>
      ...
    </section>
    ```  
  * Add right 6 columns' content
    ```html
    <section id="who">
      ...
      <div class="col-md-6 who-left">
        ...
      </div>
      <div class="col-md-6 who-right">
        <img class="mx-auto d-block" src="img/who.jpg"/>
      </div>
      ...
    </section>
    ```

* Styling Who Section
  * In style.css, add
    ```css
    /* WHO */

    #who {
      padding: 5rem 0;
      background-color: #f6f6f6;
    }

    #who .btn-who {
      background-color: #be2835;
      color: #ffffff;
      width: 50%;
    }

    #who .btn-who:hover {
      background-color: transparent;
      border: 1px solid #be2835;
      color: #be2835
    }
    ```

* Responsive Who Section
  * In style.css, add
  * To reuse the same style, add the selector #who hr to #social hr
    ```css
    @media (max-width: 767.98px) {
      ...
      #social hr, #who hr {
        margin: 8% auto;
      }

      #who {
        text-align: center;
      }

      #who img {
        margin-top: 15%;
      }
    }
    ```

## Building Story Section

* Coding Story Section
  * In index.html, add _**story**_ \<section> element inside \<body>
    ```html
    <!-- STORY -->
    <section id="story">
      <div class="container">
        <div class="row">
          <div class="col">
          </div>
        </div>
        <div class="row">
        </div>
        <div class="row">
        </div>
      </div>
    </section>
    <!-- END STORY -->
    ```
  * Add 1st row's column's content
  * Go to https://www.lipsum.com/, click "Generate Lorem Ipsum" button, it will take us to a content page with genrated paragraphs. 
  * Copy words and paste inside \<p>
    ```html
    <section id="story">
      ...
      <div class="row">
        <div class="col">
          <h2>Our latest story...</h2>
          <hr align="left" width="30%">
          <p>Donec eu orci faucibus, aliquet felis nec, scelerisque tellus. Suspendisse luctus, ligula nec facilisis cursus, est odio iaculis sapien, vitae vulputate dolor metus sed odio.</p>
        </div>
      </div>
      <div class="row">
        ...
      </div> 
      ...
    </section>
    ```

  * Add 2nd and 3rd row's content
  * Go to https://getbootstrap.com, click _**Documentation**_ link at the top menu, it will take us to Documentation page.
  * At the left sidemenu, click _**Components**_ , and click _**Card**_
  * Look for _**Images**_ section, copy and paste the codes, and start editing.
  * Go to https://www.lipsum.com/, click "Generate Lorem Ipsum" button, it will take us to a content page with genrated paragraphs. 
  * Copy words and paste inside \<p>
  * Similar for other icons.
    ```html
    <section id="story">
      ...
      <div class="row">
          ...
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6 d-flex">
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
        <div class="col-md-3 col-sm-6 d-flex">
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
        <div class="col-md-3 col-sm-6 d-flex">
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
        <div class="col-md-3 col-sm-6 d-flex">
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
        <div class="col-md-3 col-sm-6 d-flex">
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
        <div class="col-md-3 col-sm-6 d-flex">
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
        <div class="col-md-3 col-sm-6 d-flex">
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
        <div class="col-md-3 col-sm-6 d-flex">
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
      ...
    </section>
    ```

* Styling Story Section
  * In style.css, add
    ```css
    /* STORY */

    #story {
      padding: 5rem 0;
    }

    #story .story-img {
      position: relative;
    }

    #story .story-img .img-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background:  rgba(0, 0, 0, 0.5) url(../img/eye.png) no-repeat center center;
      opacity: 0;
      z-index: 0;
      transition: all 0.3s ease-in-out;
    }

    #story .story-img .img-overlay:hover {
      opacity: 1;
      z-index: 1;
    }
    ```

## Building Why Section

* Coding Why Section
  * In index.html, add _**why**_ \<section> element inside \<body>
    ```html
    <!-- WHY -->
    <section id="why">
      <div class="container text-center">
        <div class="row">
          <div class="col">
          </div>
        </div>
        <div class="row">
        </div>
      </div>
    </section>
    <!-- END WHY -->
    ```
  * Add 1st row's column's content
  * Go to https://www.lipsum.com/, click "Generate Lorem Ipsum" button, it will take us to a content page with genrated paragraphs. 
  * Copy words and paste inside \<p>
    ```html
    <section id="why">
      ...
      <div class="row">
        <div class="col">
          <h2>Why visit us?</h2>
          <hr width="30%">
          <p>In consequat ligula at massa sagittis, eu iaculis massa imperdiet. Suspendisse bibendum, nunc sed luctus luctus, est mauris maximus nisi, quis vulputate nisi metus non risus.</p>
        </div>
      </div>
      <div class="row">
        ...
      </div>
      ...
    </section>
    ```
  * Add 2nd row's column's content
  * Go to https://fontawesome.com, click “Icons” link, and it will take us to Icons page.
  * Search for "thumbs up", click the thumbs-up icon, and it will take us to the detail page.
  * Find, copy and paste the HTML code of the thumbs-up icon. 
  * Add a _**fa-3x**_ class to the icon \<i> tag to increase the size. 
  * Similar for other icons.
  * Go to https://www.lipsum.com/, click "Generate Lorem Ipsum" button, it will take us to a content page with genrated paragraphs. 
  * Copy words and paste inside \<p>
    ```html
    <section id="why">
      ...
      <div class="row">
          ...
      </div>
      <div class="row">
        <div class="col-md-4">
          <i class="fas fa-thumbs-up fa-3x"></i>
          <h3>Customer Satisfaction</h3>
          <p>Sed laoreet sem eu ipsum finibus malesuada varius et est. Phasellus congue, ante sit amet vulputate venenatis, dui nibh volutpat enim, a interdum tellus ex condimentum felis.</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-fire fa-3x"></i>
          <h3>Perfect Grill</h3>
          <p>Donec sed congue urna. Fusce volutpat feugiat condimentum. Cras est lacus, interdum ac vulputate id, malesuada vitae nulla.</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-trophy fa-3x"></i>
          <h3>Award Winning Service</h3>
          <p>Maecenas viverra lectus in interdum viverra. Proin ipsum nulla, euismod in placerat at, pulvinar quis nibh. Maecenas ac diam eget turpis sodales pellentesque at non sem.</p>
        </div>
      </div>
      ...
    </section>
    ```
* Styling Why Section
  * In style.css, add
    ```css
    /* WHY */

    #why {
      padding: 5rem 0;
      background-color: #f6f6f6;
    }

    #why .fas {
      color: #be2835;
      padding: 15px 0;
    }
    ```

## Building Customers Section

* Coding Customers Section
  * In index.html, add _**customers**_ \<section> element inside \<body>
    ```html
    <!-- CUSTOMERS -->
    <section id="customers">
      <div class="container text-center">
        <div class="row">
          <div class="col">
          </div>
        </div>
        <div class="row">
          <div class="col">
          </div>
        </div>
      </div>
    </section>
    <!-- END CUSTOMERS -->
    ```
  * Add 1st row's column's content
  * Go to https://www.lipsum.com/, click "Generate Lorem Ipsum" button, it will take us to a content page with genrated paragraphs. 
  * Copy words and paste inside \<p>
    ```html
    <section id="customers">
      ...
      <div class="row">
        <div class="col">
          <h2>Customers</h2>
          <hr width="30%">
          <p>Sed finibus, quam a efficitur porta, dui urna vestibulum lectus, at pharetra risus tortor id dui. Donec lacinia quam a tincidunt varius. In congue leo ut nibh dapibus tempus.</p>
        </div>
      </div>
      <div class="row">
        ...
      </div>
      ...
    </section>
    ```
  * Add 2nd row's column's content
  * Go to https://getbootstrap.com, click _**Documentation**_ link at the top menu, it will take us to Documentation page.
  * At the left sidemenu, click _**Components**_ , and click _**Carousel**_
  * Look for _**With indicators**_ section, copy and paste the codes, and start editing.
  * Go to https://fontawesome.com, click “Icons” link, and it will take us to Icons page.
  * Search for "star", click the star and star-half icon, and it will take us to the  detail page.
  * Find, copy and paste the HTML code of those icon.
  * Go to https://www.lipsum.com/, click "Generate Lorem Ipsum" button, it will take us to a content page with genrated paragraphs. 
  * Copy words and paste inside \<p>
    ```html
    <section id="customers">
      ...
      <div class="row">
          ...
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
      ...
    </section>
    ```
* Styling Customers Section
  * In style.css, add
    ```css
    /* CUSTOMERS */

    #customers {
        padding: 5rem 0;
    }

    #customers .carousel-indicators li {
        background-color: #be2835;
    }

    #customers .carousel-inner {
        margin-bottom: 50px;
    }

    #customers .carousel-indicators {
        margin-bottom: -50px;
    }
    ```

## Building Pricing Section

* Coding Pricing Section
  * In index.html, add _**pricing**_ \<section> element inside \<body>
    ```html
    <!-- PRICING -->
    <section id="pricing">
      <div class="container text-center">
        <div class="row">
          <div class="col">
          </div>
        </div>
        <div class="row">
          <div class="col">
          </div>
        </div>
      </div>
    </section>
    <!-- END PRICING -->
    ```
  * Add 1st row's column's content
  * Go to https://www.lipsum.com/, click "Generate Lorem Ipsum" button, it will take us to a content page with genrated paragraphs. 
  * Copy words and paste inside \<p>
    ```html
    <section id="pricing">
      ...
      <div class="row">
        <div class="col">
          <h2>Pricing</h2>
          <hr width="30%">
          <p class="lead">Etiam eu aliquam metus. Cras blandit vestibulum magna, eget pretium mauris congue et. Quisque dignissim, leo quis pellentesque iaculis, est velit porta nunc, ac condimentum urna magna quis turpis.</p>
        </div>
      </div>
      <div class="row">
        ...
      </div>
      ...
    </section>
    ```
  * Add 2nd row's column's content
  * Go to https://getbootstrap.com, click _**Documentation**_ link at the top menu, it will take us to Documentation page.
  * At the left sidemenu, click _**Components**_ , and click _**Carousel**_
  * Look for _**With indicators**_ section, copy and paste the codes, and start editing.
  * Go to https://fontawesome.com, click “Icons” link, and it will take us to Icons page.
  * Search for "star", click the star and star-half icon, and it will take us to the  detail page.
  * Find, copy and paste the HTML code of those icon.
  * Go to https://www.lipsum.com/, click "Generate Lorem Ipsum" button, it will take us to a content page with genrated paragraphs. 
  * Copy words and paste inside \<p>
    ```html
    <section id="pricing">
      ...
      <div class="row">
          ...
      </div>
      <div class="row">
        <div class="col-md-4">
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
        <div class="col-md-4">
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
        <div class="col-md-4">
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
      ...
    </section>
    ```
* Styling Pricing Section
  * In style.css, add
    ```css
    /* PRICING */

    #pricing {
        padding: 5rem 0;
        background-color: #f6f6f6;
    }

    #pricing .card .card-header {
        background-color: #6e6e6e;
        color: #ffffff;
    }

    #pricing .card .card-header.standard {
        background-color: #be2835;
        font-size: 1.3em;
        padding: 15px 0;
    }

    #pricing .card .card-header:hover {
        background-color: #be2835;
        color: #ffffff;
        transition: all 0.2s ease-in-out;
    }
    ```

## Building Contact Section

* Coding Contact Section
  * In index.html, add _**contact**_ \<section> element inside \<body>
    ```html
    <!-- CONTACT -->
    <section id="contact">
      <div class="container text-center">
        <div class="row">
          <div class="col">
          </div>
        </div>
        <div class="row">
        </div>
      </div>
    </section>
    <!-- END CONTACT -->
    ```
  * Add 1st row's column's content
  * Go to https://www.lipsum.com/, click "Generate Lorem Ipsum" button, it will take us to a content page with genrated paragraphs. 
  * Copy words and paste inside \<p>
    ```html
    <section id="contact">
      ...
      <div class="row">
        <div class="col">
          <h2>Contact us</h2>
          <hr width="30%">
          <p>Sed hendrerit augue nisi. Proin placerat commodo mi. Sed eu congue sapien. Vivamus vitae quam sit amet dui consectetur mattis nec at risus.</p>
        </div>
      </div>
      <div class="row">
        ...
      </div>
      ...
    </section>
    ```  
  * Add 2nd row's column's content
    ```html
    <section id="contact">
      ...
      <div class="row">
        ...
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
        </div>
      </div>
      ...
    </section>
    ```

* Styling Contact Section
  * In style.css, add
    ```css
    /* CONTACT */

    #contact {
      padding: 5rem 0;
    }
    ```

## Building Footer Section

* Coding Footer Section
  * In index.html, add _**footer**_ \<section> element inside \<body>
    ```html
    <!-- FOOTER -->
    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6">
          </div>
          <div class="col-md-4 col-sm-6">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
      </div>
    </section>
    <!-- END FOOTER -->
    ```
  * Add 1st rows's left 8 columns' content
  * Go to https://www.lipsum.com/, click "Generate Lorem Ipsum" button, it will take us to a content page with genrated paragraphs. 
  * Copy words and paste inside \<p>
  * Copy the social icon list from the social section and paste it.
    ```html
    <section id="footer">
      ...
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
          ...
        </div>
      </div>
      <div class="row">
        ...
      </div>
      ...
    </section>
    ```  
  * Add 1st row's right 4 columns' content
  * Go to https://fontawesome.com, click “Icons” link, and it will take us to Icons page.
  * Search for "map", click the map-signs icon, and it will take us to the detail page.
  * Find, copy and paste the HTML code of the map-signs icon.
    ```html
    <section id="footer">
      ...
      <div class="row">
        <div class="col-md-8 col-sm-6">
          ...
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
        ...
      </div>
      ...
    </section>
    ```
  * Add 2nd rows's column's content
  * Go to https://www.lipsum.com/, click "Generate Lorem Ipsum" button, it will take us to a content page with genrated paragraphs. 
  * Copy words and paste inside \<p>
    ```html
    <section id="footer">
      ...
      <div class="row">
        ...
      </div>
      <div class="row">
        <div class="col-md-12">
          <p>&copy; 2019 Designed by THE BURGER SHACK</p>
        </div>
      </div>
      ...
    </section>
    ```  

* Styling Footer Section
  * In style.css, add
    ```css
    /* FOOTER */

    #footer {
      padding: 2rem 0;
      background-color: #484848;
      color: #ffffff;
    }

    #footer a {
      color: #ffffff;
    }

    #footer .fab, #footer .fas {
      padding: 0 5px;
    }
    ```

* Responsive Footer Section
  * In style.css, add
    ```css
    @media (max-width: 767.98px) {
      ...
      #footer {
        text-align: center;
      }
    }
    ```

## Adding Animation

* Install Animate.css
  * Go to https://github.com/daneden/animate.css, click _**Clone or download**_ button, then click _**Download ZIP**_ button to download the file.
  * Extract the downloaded file, move /animate.min.css file to the src/css folder.
  * Add link to animate.min.css, inside the \<head> section, after all \<link>, add
    ```html
    <link rel="stylesheet" href="css/animate.min.css">
    ```

* Install Wow.js
  * Go to https://github.com/graingert/wow, click _**Clone or download**_ button, then click _**Download ZIP**_ button to download the file.
  * Extract the downloaded file, move /dist/wow.min.js file to the src/js folder.
  * Go to to https://wowjs.uk/docs.html, and look for _**Setup wow.js**_ section.
  * Find and copy the HTML code that link and activate wow.js, paste it to index.html file, at the line above \</body>
    ```html
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    ``` 
* Refer to https://wowjs.uk/docs.html _**Reveal CSS Animations**_ section for adding animations.

* Animating Header section
  * In the _**header**_ section, \<div> element of the left 6 columns
    ``` html
    <div class="col-md-6 header-left wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
    ```
  * In the _**header**_ section, \<div> element of the right 6 columns
    ``` html
    <div class="col-md-6 header-right d-none d-md-block wow flash" data-wow-delay="1s">
    ```
  * In the _**header**_ section, \<div> element of the 2nd row
    ``` html
    <div class="row wow swing" data-wow-delay="2s">
    ```
* Animating Social section
  * In the _**social**_ section, \<div> element of the container
    ``` html
    <div class="container wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
    ```
  * In style.css, to avoid fadeInUp animation content overflow and overlap the next section, add
    ```css
    #social {
        padding: 4.25rem 0;
        overflow: hidden;
    }
* Animating Who section
  * In the _**who**_ section, \<div> element of the left 6 columns
    ``` html
    <div class="col-md-6 who-left wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1s">
    ```
  * In the _**who**_ section, \<div> element of the right 6 columns
    ``` html
    <div class="col-md-6 who-right wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1s">
    ```
* Animating Story section
  * In the _**story**_ section, \<div> element of the 1st row's column
    ``` html
    <div class="col wow fadeInUp" data-wow-duration="2s">
    ```
  * In the _**story**_ section, for each \<div> element of the column before card
    ``` html
    <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.2s" data-wow-duration="3s">
    <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.4s" data-wow-duration="3s">
    <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.6s" data-wow-duration="3s">
    <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.8s" data-wow-duration="3s">
    <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.8s" data-wow-duration="3s">
    <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.6s" data-wow-duration="3s">
    <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.4s" data-wow-duration="3s">
    <div class="col-md-3 col-sm-6 d-flex wow fadeIn" data-wow-delay="0.2s" data-wow-duration="3s">
    ```
* Animating Why section
  * In the _**why**_ section, \<div> element of the 1st row's column
    ``` html
    <div class="col wow fadeIn" data-wow-duration="2s">
    ```
  * In the _**why**_ section, for each \<div> element of the 2nd row's columns 
    ``` html
    <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="2s">
    <div class="col-md-4 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="3s">
    <div class="col-md-4 wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="2s">
* Animating Customers section
  * In the _**customers**_ section, \<div> element of the container
    ``` html
    <div class="container text-center wow fadeInUp" data-wow-delay="0.2s">
    ```
  * In style.css, to avoid fadeInUp animation content overflow and overlap the next section, add
    ```css
    #customers {
        padding: 5rem 0;
        overflow: hidden;
    }
    ```
* Animating Pricing section
  * In the _**pricing**_ section, for each \<div> element of the 2nd row's columns 
    ``` html
    <div class="col-md-4 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="2s">
    <div class="col-md-4 wow bounceIn" data-wow-delay="0.8s" data-wow-duration="2s">
    <div class="col-md-4 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="2s">
* Animating Contact section
  * In the _**contact**_ section, \<div> element of the container
    ``` html
    <div class="container text-center wow zoomIn" data-wow-delay="0.3s">
    ```
* Animating Footer section
  * In the _**footer**_ section, \<div> element of the container
    ``` html
    <div class="container wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.5s">
    ```

## Adding PHP 
* Prepare PHP file
  * Transform HTML file into PHP file, Save As… change filename from index.html to index.php

### Send Email for Sign Up
* Add PHP code
  * In index.php, at the top, before \<!doctype html>, add
    ```php
    <?php
      if (isset($_POST['signup'])) {
        $signupName = $_POST['signup-name'];
        $signupEmail = $_POST['signup-email'];
        $signupFrom = 'your-app-email@gmail.com';
        $signupTo = 'your-support-email@gmail.com';
        $signupSubject = 'Email signup';
        $signupBody = "Please sign $signupName ($signupEmail) up to the mailing list";
        
        if (!$_POST['signup-name']) {
          $signupNameError = 'Please enter a valid name</div>';
        }
        if (!$_POST['signup-email']) {
          $signupEmailError = 'Please enter a valid email address</div>';
        }
        
        $hasSignUpError = $signupEmailError || $signupNameError;

        if (!$hasSignUpError) {
          if (mail ($signupTo, $signupSubject, $signupBody, "From: {$signupFrom}")) {
            $signupResult = 'thank you we\'ll keep you updated</div>';
          } else {
            $signupResult = 'sorry there has been an error, please try again</div>';
          }
        } 
      }
    ?>
    ```

  * In index.php, to remove animation on sign up error, amend the following 3 lines with php
    ```php
    <div class="col-md-6 header-left <?php if (!$hasSignUpError) {echo("wow fadeIn");}; ?>" data-wow-delay="0.2s" data-wow-duration="1.5s">
    <div class="col-md-6 header-right d-none d-md-block <?php if (!$hasSignUpError) {echo("wow flash");}; ?>" data-wow-delay="1s">
    <div class="row <?php if (!$hasSignUpError) {echo("wow swing");}; ?>" data-wow-delay="1s">
    ```

  * In index.php, after the \</form>, add
    ```php
    <section id="signup">
      ...
      <div class="col-md-12">
        <form role="form" method="post" action="#header">
          ...
        </form>
        <?php echo $signupNameError;?>
        <?php echo $signupEmailError;?>
        <?php echo $signupResult;?>
      </div>
      ...
    </section>
    ```

* Add Styling
  * Add bootstrap styling and fontawesome icon to the success and failure messages
    ```php
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
    ```


### Send Email for Contact
* Add PHP code
  * In index.php, at the top, before \<!doctype html>, add
    ```php
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
          $contactNameError = 'Please enter a valid name</div>';
        }
        if (!$_POST['contact-email']) {
          $contactEmailError = 'Please enter a valid email address</div>';
        }
        if (!$_POST['contact-subject']) {
          $contactSubjectError = 'Please enter a valid subject</div>';
        }
        if (!$_POST['contact-message']) {
          $contactMessageError = 'Please enter a valid message</div>';
        }
        
        $hasContactError = $contactNameError || $contactEmailError || $contactSubjectError || $contactMessageError;

        if (!$hasContactError) {
          if (mail ($contactTo, $contactSubject, $contactBody, "From: {$contactFrom}")) {
            $contactResult = 'thank you we\'ll keep you updated</div>';
          } else {
            $contactResult = 'sorry there has been an error, please try again</div>';
          }
        } 
      }
    ?>
    ```

  * In index.php, to remove animation on contact error, amend the following line with php
    ```php
    <div class="container text-center <?php if (!$hasContactError) {echo("wow zoomIn");}; ?>" data-wow-delay="0.3s">
    ``` 

  * In index.php, after the \</form>, add
    ```php
    <section id="contact">
      ...
      <div class="col-md-8 mx-auto">
        <form role="form" method="post" action="#contact">
          ...
        </form>
        <?php echo $contactNameError;?>
        <?php echo $contactEmailError;?>
        <?php echo $contactSubjectError;?>
        <?php echo $contactMessageError;?>
        <?php echo $contactResult;?>
      </div>
      ...
    </section>
    ```

* Add Styling
  * Add bootstrap styling and fontawesome icon to the success and failure messages
    ```php
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
    ```

## Setup Docker for Apache, PHP with SMTP Client

* Create a new empty _**Dockerfile**_ file in the myproject folder, add
  ```
  FROM php:7-apache

  RUN apt-get update
  RUN apt-get install -q -y ssmtp
  RUN echo "TLS_CA_File=/etc/ssl/certs/ca-certificates.crt" >> /etc/ssmtp/ssmtp.conf
  RUN echo "root=your-gmail-address@gmail.com" >> /etc/ssmtp/ssmtp.conf
  RUN echo "mailhub=smtp.gmail.com:587" >> /etc/ssmtp/ssmtp.conf
  RUN echo "AuthUser=your-gmail-address@gmail.com" >> /etc/ssmtp/ssmtp.conf
  RUN echo "AuthPass=your-gmail-app-password" >> /etc/ssmtp/ssmtp.conf
  RUN echo "UseTLS=YES" >> /etc/ssmtp/ssmtp.conf
  RUN echo "UseSTARTTLS=YES" >> /etc/ssmtp/ssmtp.conf
  RUN echo "FromLineOverride=YES" >> /etc/ssmtp/ssmtp.conf
  RUN echo "sendmail_path=ssmtp -t" >> /usr/local/etc/php/conf.d/php-ssmtp.ini

  COPY src/ /var/www/html/
  ```
* Run the command in the myproject folder to start the app
  ```
  $ docker build -t bootstrap-beginner-app .
  $ docker run -p 80:80 -d --name my-bootstrap-beginner-app bootstrap-beginner-app
  ```

* Open web browser, test http://localhost