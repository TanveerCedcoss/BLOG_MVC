<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Signin Template · Bootstrap v5.1</title>

  <!-- Bootstrap core CSS -->
  <link href="../../public/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    span {
      color: red;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../../public/assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <?php session_start();
    if (isset($_SESSION['errors'])) {
        $error = $_SESSION['errors'];
        $_SESSION['errors'] = "";
        echo "<span>";
        print_r($error);
        echo "</span>";
    } ?>
    <h1 class="h3 mb-3 fw-normal">Register Now!</h1>

    <form action="index.php" method="POST">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="Full Name" name="fname">
        <label for="floatingInput">Full Name</label>
      </div>
      <div class="form-floating">
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" 
          placeholder="Password" name="pass" style="margin-bottom: 0px;">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Re-Password" name="repass">
          <label for="floatingPassword">Confirm Password</label>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me" required> Agree to terms and condition
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="register">Sign up</button>
    </form>
    <br><br>
    <a href="<?php echo URLROOT;?>/pages/login">Already registered? Login now</a>
    <p class="mt-5 mb-3 text-muted">&copy; CEDCOSS Technologies</p>

  </main>

</body>

</html>