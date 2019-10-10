<?php
$error = false;
$loginOK = false;
$diff_pass = false;
$firstname = "";
$lastname = "";
$email = "";

if(isset($_POST["submit"]))
{
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];

  if (strcmp($_POST["password"], $_POST["confirm-password"]) == 0)
  {
    Header("Location: index.php");
  }
  else
  {
    $diff_pass = true;
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
    <meta name="description" content="This is the page where users can
    optimize delivery assignments."/>

    <title>RRCDO - Create Account</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/form_styles.css">
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/newaccount_scripts.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <h2 class="text-center heading">Login</h2>

      <form id="createaccount" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
        <div class="container-fluid form-border">
          <div class="row data-row">
            <div class="col-md-8 offset-md-2">
              <h4>First Name</h4>
              <input type="text" id="firstname" name="firstname" placeholder="Enter your first name"
              value="<?php echo $firstname; ?>">
            </div>
          </div>

          <div class="row data-row">
            <div class="col-md-8 offset-md-2">
              <h4>Last Name</h4>
              <input type="text" id="lastname" name="lastname" placeholder="Enter your last name"
              value="<?php echo $lastname; ?>">
            </div>
          </div>

          <div class="row data-row">
            <div class="col-md-8 offset-md-2">
              <h4>Email</h4>
              <input type="email" id="email" name="email" placeholder="Enter your student email"
              value="<?php echo $email; ?>">
            </div>
          </div>

          <div class="row data-row">
            <div class="col-md-8 offset-md-2">
              <h4>Password</h4>
              <input type="password" id="password" name="password" placeholder="Enter a password">
            </div>
          </div>

          <div class="row data-row">
            <div class="col-md-8 offset-md-2">
              <h4>Confirm Password</h4>
              <input type="password" id="confirm-password" name="confirm-password"
              placeholder="Re-enter the same password">
            </div>
          </div>

          <?php
          if ($diff_pass)
          {
            echo "<br><div class='row'><div class='col-12 mx-auto'>" .
              "<div class='text-center'>Password does not match with confirm password. " .
              "Please type in the same password.</div></div></div>";
          }
          ?>
        </div>

        <div class="row data-row justify-content-center">
          <div class="col-md-12 text-center">
            <input type="submit" name="submit" class="btn clickable nav-forward" value="Create Account"
            style="width: 150px;">
          </div>
        </div>

        <br>

        <div class="row justify-content-center last-row">
          <div class="col-md-12 text-center">
            <a href="index.php">
              <button type="button" class="btn clickable"
              style="width: 150px;">Cancel</button>
            </a>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
