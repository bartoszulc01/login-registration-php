<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Logowanie i Rejestracja użytkownika </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">    

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php"> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
        <div class="container">
            <div class="login-box">
             <div class="row">
                 <div class="col-md-6 login-left">
                     <h2> Zaloguj  </h2>
                     <form action="validation.php" method ="post">
                         <div class="form-group">
                             <label> Login </label>
                             <input type="text" name="user" placeholder ="Wprowadź nazwe użytkownika" class="form-control" required>
                         </div>
                         <div class="form-group">
                             <label> Hasło </label>
                             <input type="password" name="password" placeholder ="Wprowadź hasło użytkownika" class="form-control" required>
                         </div>
                         <button type ="submit" class="btn btn-primary"> Zaloguj </button>
                     </form>
                 </div>
            </div>
               <div class="row">
                 <div class="col-md-6 login-right">
                     <h2> Zarejestruj </h2>
                     <form action="register.php" method ="post">
                         <div class="form-group">
                             <label> Login </label>
                             <input type="text" name="user" placeholder ="Wprowadź nazwe użytkownika" class="form-control" required>
                         </div>
                         <div class="form-group">
                             <label> Hasło </label>
                             <input type="password" name="password" placeholder ="Wprowadź hasło" class="form-control" required>
                             
                         </div>
                         <div class="form-group">
                             <label> Email </label>
                             <input type="email" name="email" placeholder="Wprowadź email" class="form-control" required>
                         </div>
                         <button type ="submit" class="btn btn-primary"> Zarejestruj </button>
                     </form>
                   </div>
            </div>
        </div> 
        </div>
        <div class="footer"> <h1> something </h1></div>
    </body>