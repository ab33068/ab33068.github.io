<?php
session_start();
$_SESSION["completed"] = true;

if (isset($_POST["submit"]))
{
  // require_once("objects/db.php");
  //
  // $mydb = new MySQLDB();
  // $mydb->open_connection();
  //
  // $sql_string = "UPDATE location SET " .
  //   "location_name = '" . $_POST["dest-name"] . "', " .
  //   "demand_lbs = '" . $_POST["dest-demand"] . "', " .
  //   "address = '" . $_POST["dest-street"] . "', " .
  //   "state = '" . $_POST["dest-state"] . "', " .
  //   "zip = '" . $_POST["dest-zip"] . "', " .
  //   "city = '" . $_POST["dest-city"] . "' " .
  //   "WHERE location_id = " . $_POST['location_id'] . ";";
  //
  // $mydb->query($sql_string);
  //
  // $mydb->close_connection();

  header("HTTP/1.1 307 Temporary Redirect");
  header("Location: surveys_list.php");
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
    <link rel="stylesheet" href="css/form_styles.css">
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <h3 class="text-center heading">Tech Tut Peer Evaluation - Jordan Phillips</h3>
      <h4 class="text-center heading">Key: 0 (Worst) - 5 (Best)</h4>

      <form id="survey" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
        <h6 class="section_header">Contribution</h6>
        <div class="container-fluid form-border">
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Participates actively and accepts a fair share of the group work:</h5>
            </div>
            <div class="col text-center">
              <select name="q1-1" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Works skillfully on assigned tasks and completes them on time:</h5>
            </div>
            <div class="col text-center">
              <select name="q1-2" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Gives timely, constructive feedback to team members:</h5>
            </div>
            <div class="col text-center">
              <select name="q1-3" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
        </div>

        <br>

        <h6 class="section_header">Communication</h6>
        <div class="container-fluid form-border">
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Communicates actively and constructively:</h5>
            </div>
            <div class="col text-center">
              <select name="q2-1" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Encourages all perspectives to be considered:</h5>
            </div>
            <div class="col text-center">
              <select name="q2-2" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Acknowledges others' contributions:</h5>
            </div>
            <div class="col text-center">
              <select name="q2-3" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Constructively builds on others' contributions:</h5>
            </div>
            <div class="col text-center">
              <select name="q2-4" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Integrates personal work with others' work:</h5>
            </div>
            <div class="col text-center">
              <select name="q2-5" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
        </div>

        <br>

        <h6 class="section_header">Planning and Management</h6>
        <div class="container-fluid form-border">
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Takes on an appropriate role in group:</h5>
            </div>
            <div class="col text-center">
              <select name="q3-1" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Takes on goals and plans the project:</h5>
            </div>
            <div class="col text-center">
              <select name="q3-2" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Reports to team on progress:</h5>
            </div>
            <div class="col text-center">
              <select name="q3-3" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
        </div>

        <br>

        <h6 class="section_header">Fostering a Team Climate</h6>
        <div class="container-fluid form-border">
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Consistent with words, tone, facial expression, and body language:</h5>
            </div>
            <div class="col text-center">
              <select name="q4-1" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Expresses positivity about team members and project:</h5>
            </div>
            <div class="col text-center">
              <select name="q4-2" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
        </div>

        <br>

        <h6 class="section_header">Conflict Management</h6>
        <div class="container-fluid form-border">
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Displays appropriate assertiveness:</h5>
            </div>
            <div class="col text-center">
              <select name="q5-1" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Contributes appropriately to heathly debate:</h5>
            </div>
            <div class="col text-center">
              <select name="q5-2" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="row data-row">
            <div class="col-md-10">
              <h5>Responds to and manages conflict constructively and effectively:</h5>
            </div>
            <div class="col text-center">
              <select name="q5-3" form="survey">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
        </div>

        <br>

        <h6 class="section_header">Additional Comments</h6>
        <div class="container-fluid form-border">
          <div class="row data-row">
            <div class="col-md-10 offset-md-1">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>
          </div>
        </div>

        <br>

        <div class="row last-row">
          <div class="col-md-6 col-sm-6 text-right">
            <a href="surveys_list.php">
              <button type="button" class="btn clickable"
              style="width: 150px;">
                Cancel
              </button>
            </a>
          </div>
          <div class="col-md-6 col-sm-6">
            <input type="submit" name="submit" class="btn clickable nav-forward" value="Submit Survey"
            style="width: 150px;">
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
