<?php require('connection.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Charity Website</title>
    
    
    <link rel="stylesheet" href="stylelogin.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Smile Foundation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        </ul>
      <div class="d-flex">
      
      <div class="btn-group" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-secondary" onclick="popup('login-popup')">Login</button>
          <button type="button" class="btn btn-secondary" onclick="popup('register-popup')">Signin</button>
  
      </div>
        
      </div>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/smile1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/smile2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/smile3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

   <section class="my-5">
       <div class="py-5">
           <h3 class="text-center">About Us</h3>
       </div>
    <div class="container-fluid"></div>

       <div class="row">
           <div class="col-lg-6 col-md-6 col-12">
            <img src="image/img3.jpeg" class="img-fluid">
           </div>
           <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">Our Progrees</h2>
            <h4 class="py-5">Since 2015, we have reached out to 2700 hamlets/villages across Shambhaginagar and Ahemadnagar district in Maharashtra. Our holistic development model covers all aspects of individual and community development through a unique ‘4E’ strategy: engage, empower, execute and exit.
            Our work is benefiting over 500,000 people today with the ultimate objective of rural empowerment.
            Strong Team of 1300+   
            10,000+ community volunteers & 260+ full-time staff
            <h4>
            <a href="about.php" class="btn btn-success">Check More!</a>
           </div>
          </div>
      </div>
</section>

<!--Our services-->
<section class="my-5">
       <div class="py-5">
           <h3 class="text-center">Our Services</h3>
       </div>
       <div class="container-fluid">
           <div class="row">
               <div class="col-lg-4 col-md-4 col-12" >

  <div class="card">
  <img src="image/ser1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Education</h5>
    <p class="card-text">82,568 children in 854 schools & 41 junior colleges impact.265 teachers &principle trained.</p>
    <a href="about.php" class="btn btn-primary"> Read More</a>
  </div>
  </div>
</div>


       
  <div class="col-lg-4 col-md-4 col-12" >
  <div class="card">
  <img src="image/ser4.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Health & Nutrition</h5>
    <p class="card-text">42,356 homes provided with potable water through taps. 34,700 household toilets built.</p>
    <a href="about.php" class="btn btn-primary"> Know More</a>
  </div>
</div>
</div>


  <div class="col-lg-4 col-md-4 col-12" >

  <div class="card">
  <img src="image/ser3.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Economical Development</h5>
    <p class="card-text">4,789 enterpreneurs created. 3,590 youth trained and 3,560 placed in formal employment</p>
    <a href="about.php" class="btn btn-primary">Explore</a>
  </div>
</div>
</div>
</div>
</div>
</section>  

<!--Our Gaylery-->
<section class="my-5">
       <div class="py-5">
           <h3 class="text-center">Our galarey </h3>
       </div>
       <div class="container-fluid">
           <div class="row">
               <div class="col-lg-4 col-md-4 col-12" >

  <div class="card">
  <img src="image/gal1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Success Stories</h5>
    <p class="card-text">In every intervention, we come across inspiring stories of change which strengthens our resolve to do the best for rural empowerment. Here’s a look at some of these success stories..</p>
    
  </div>
  </div>
</div>


       
  <div class="col-lg-4 col-md-4 col-12" >
  <div class="card">
  <img src="image/gal3.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Our Believers</h5>
    <p class="card-text">To empower Rural India is not an easy undertaking. But with staunch believers at every step of the way, the journey becomes very encouraging. Let’s look at some of our believers</p>
    
  </div>
</div>
</div>


  <div class="col-lg-4 col-md-4 col-12" >

  <div class="card">
  <img src="image/gal4.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Media & Awards</h5>
    <p class="card-text">Receiving meaningful recognition for your work is motivating. We have some to our credit and would like you to check them out. From Awards to news coverage, here’s a look at them.</p>
    
  </div>
</div>
</div>
</div>
</div class="py=1">

</section> 
<!--
<div class="container-fluid">
<img src="image/gal33.jpeg" class="" alt="...">
<img src="image/gal33.jpeg" class="" alt="...">
<img src="image/gal33.jpeg" class="" alt="...">
</div>

<div class="container-fluid">
<img src="image/gal44.jpeg" class="" alt="...">
<img src="image/gal55.jpeg" class="" alt="...">
<img src="image/gal66.jpeg" class="" alt="...">
</div>
-->
<section class="my-5">
       <div class="py-5">
           <h3 class="text-center">CONTACT US </h3>
       </div>

       <div class="w-50 m-auto">
          <form action="userinfo.php" method="post">
            <div class="form-group">
                <label for="">Username : </label>
                <input type="text" name="user" autocomplete = "off" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Email Id : </label>
                <input type="text" name="email" autocomplete = "off" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Moblie No : </label>
                <input type="text" name="mobile" autocomplete = "off" class="form-control">
               
            </div>

            <div class="form-group">
                <label for="">Comments : </label>
                <textarea name="comment" id="" class="form-control"></textarea>
            </div>
            <div class="py-3">
            <button type="submit
            " class="btn btn-success">Send</button>
            </div>
            
          </form>
       </div>
</section>

<footer>
     <p class="p-3 bg-dark text-white text-center">@charityfoundation-India. <br>
     created by - @vaibhavgobre
     </p>
  
</footer>

    <div class="popup-container" id="login-popup">
        <div class="popup">
          <form action="">
            <h2>
              <span>USER LOGIN</span>
              <button type ="reset" onclick="popup('login-popup')">X</button>
            </h2>
            <input type="text" placeholder="E-mail or Username" name="email_username">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" class="login-btn" name="login">Login</button>
          </form>
        </div>
    </div>

    <div class="popup-container" id="register-popup">
        <div class="register popup">
          <form method="POST" action="login_register.php" >
            <h2>
              <span>USER REGISTER</span>
              <button type ="reset" onclick="popup('register-popup')">X</button>
            </h2>
            <input type="text" placeholder="Full Name" name="fullname">
            <input type="text" placeholder="Username" name="username">
            <input type="text" placeholder="E-mail" name="email">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" class="register-btn" name="register">Signin</button>
          </form>
        </div>
    </div>
    <script>
      function popup(popup_name) 
      {
           get_popup = document.getElementById(popup_name);
           if(get_popup.style.display=="flex")
           {
            get_popup.style.display="none";
           }
           else{
            get_popup.style.display="flex";
           }
      }
    </script>
   <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    -->
  </body>
</html>