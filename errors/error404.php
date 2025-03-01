<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{title}}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="myApp/img/favicon.ico" />
  <link rel="stylesheet" href="myApp/styles/style.css">

</head>

<body>
  <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand">
        <img src="myApp/img/WDLogo.png" alt="missing logo ..." width="100px" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="home">Home</a>
          <a class="nav-link" href="history">History</a>
          <a class="nav-link" href="techniques">Techniques</a>
          <a class="nav-link" href="tips">Tips&Tricks</a>

        </div>
        <!-- Button trigger LOGIN modal -->
        <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Login
        </button>
        <!-- Button trigger Sign-Up modal -->
        <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal"
          data-bs-target="#exampleModal_SIGN-UP">
          Sign-Up
        </button>
      </div>
    </div>
  </nav>

  <!-- Modal LOGIN -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Login form</h1>
        </div>
        <div class="modal-body">
          <form method="POST" action="login">
            <div class="mb-3">
              <label for="userName" class="form-label">User name</label>
              <input type="text" class="form-control" id="userName" name="userName" aria-describedby="emailHelp" />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="userPass" id="exampleInputPassword1" />
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal SIGN-UP -->
  <div class="modal fade" id="exampleModal_SIGN-UP" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">
            Sign-Up form
          </h1>
        </div>
        <div class="modal-body">
          <form id="signUpForm" method="POST" action="signup">
            <div class="mb-3">
              <label for="signUpName" class="form-label">User name</label>
              <input type="text" class="form-control" id="signUpName" name="signUpName" aria-describedby="emailHelp" />
            </div>
            <div class="mb-3">
              <label for="signUpEmail" class="form-label">Email address</label>
              <input type="email" class="form-control" name="signUpEmail" id="signUpEmail" required />
          </div>           
            <div class="mb-3">
              <label for="signUpPass1" class="form-label">Password</label>
              <input type="password" class="form-control" name="signUpPass1" id="signUpPass1" />
            </div>
            <div class="mb-3">
              <label for="signUpPass2" class="form-label">Re-type password</label>
              <input type="password" class="form-control" name="signUpPass2" id="signUpPass2" />
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>


    <div class="text-center">
      <h1 class="display-2 text-primary">Resursă la care NU ai acces!</h1>
    </div>

  
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

  </body>
</html>


    <div class="text-center">
      <h1 class="display-2 text-primary">Resursa Nu a fost găsită!</h1>
    </div>

  
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

  </body>
</html>
