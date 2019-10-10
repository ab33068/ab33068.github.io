<?php
  session_start();

  $completed = false;

  if (isset($_SESSION["completed"]))
  {
    $completed = true;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="SMU Peer Evaluators"/>
    <meta name="description" content="This is the page where users can
    submit a survey of a teammate for a specific project."/>

    <title>Submit Survey</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/general.css">
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/sidebar_scripts.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <nav id="sidebar" class="active">
        <div class="sidebar-header">
          <h3>Menu</h3>
        </div>

        <ul class="list-unstyled components">
          <li>
            <a href="#">Dashboard</a>
          </li>
          <li class="active">
            <a href="#">Classes</a>
          </li>
          <li>
            <a href="#">Teams</a>
          </li>
          <li>
            <a href="#">Account</a>
          </li>
          <li>
            <a class="logout" href="index.php">Log Out</a>
          </li>
        </ul>
      </nav>

      <!--Page Content-->
      <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn clickable nav-forward">
              <i class="fas fa-align-left"></i>
              <span>Toggle Menu</span>
            </button>

            <div>
              <span>Business IT > Tech Tut > Group 1</span>
            </div>
          </div>
        </nav>

        <div class="list-group">
          <a href="survey.php" class="list-group-item list-group-item-action">
            <p>Survey for Jordan Phillips -
              <?php
                if ($completed)
                {
                  echo "Done";
                }
                else
                {
                  echo "Todo";
                }
              ?>
            </p>
            <small class="text-muted">Due: October 30, 2019</small>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
