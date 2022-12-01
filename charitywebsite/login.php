<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Charity Website</title>
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
          <a class="nav-link" href="#">Services</a>
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
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

 
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6">
    <h2>Loging Form</h2>
             <form action="validation.php" method="post">
                   <div class="form-group">
                      <label for="" >Username</label>
                      <input type="text" name ="userr" class="form-control">
                   </div>

                    <div class="form-group">
                       <label for="" >Password</label>
                      <input type="password" name ="userr" class="form-control">
                   </div>
                    <div>
                      <button class="btn btn-primary"> Login </button>
                    </div>
                     
               </form>
    </div>
    
    <div class="col col-lg-6">
    <h2>Signing Form</h2>

<form action="validation.php" method="post">
    <div class="form-group">
        <label for="" >Username</label>
        <input type="text" name ="userr" class="form-control">
    </div>

    <div class="form-group">
        <label for="" >Password</label>
        <input type="password" name ="userr" class="form-control">
    </div>

    <button class="btn btn-primary"> Signin </button>
 </form>
    </div>
  </div>
 </div>



    <footer>
     <p class="p-3 bg-dark text-white text-center">@smilefoundation-India. <br>
     created by - @vaibhavgobre
     </p>
  
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>