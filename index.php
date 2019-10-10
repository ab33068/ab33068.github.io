<?php
session_start();
session_destroy();

$username="";
$password="";
$error = false;
$loginOK = true;

if(isset($_POST["submit"]))
{
  if(isset($_POST["username"])) $username=$_POST["username"];
  if(isset($_POST["password"])) $password=$_POST["password"];

  if(empty($username) || empty($password))
  {
    $error=true;
  }

  if(!$error)
  {
    if(isset($_POST["submit"]))
    {
      if (strcmp("password", $_POST["password"]) == 0)
      {
        header("HTTP/1.1 307 Temporary Redirect");
        header("Location: surveys_list.php");

      }
      else
      {
        $loginOK = false;
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Group 10"/>
    <meta name="description" content="This is the page that the user can log into the system"/>

    <title>RRCDO - Login</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/form_styles.css">
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/login_scripts.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <h2 class="text-center heading">Login</h2>

      <form id="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
        <div class="container-fluid form-border">
          <div class="row data-row">
            <div class="col-md-8 offset-md-2">
              <h4>Email</h4>
              <input type="email" id="username" name="username" placeholder="Enter your student email"
              >
            </div>
          </div>

          <div class="row data-row">
            <div class="col-md-8 offset-md-2">
              <h4>Password</h4>
              <input type="password" id="password" name="password" placeholder="Enter your password"
              >
            </div>
          </div>

          <?php
          if (!$loginOK)
          {
            echo "<br><div class='row'><div class='col-12 mx-auto'>" .
              "<div class='text-center'>Invalid username and/or password. " .
              "Please try again.</div></div></div>";
          }
          ?>
        </div>

        <div class="row data-row justify-content-center">
          <div class="col-md-12 text-center">
            <input type="submit" name="submit" class="btn nav-forward clickable login-btn" value="Login"
            style="width: 130px;">
          </div>
        </div>

        <br>

        <div class="row justify-content-center last-row">
          <div class="col-md-12 text-center">
            <a href="create-account.php">
              <button type="button" class="btn nav-forward clickable" style="width: 130px;">New Account</button>
            </a>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
