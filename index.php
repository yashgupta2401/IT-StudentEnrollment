<?php require_once 'admin/db_con.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'>
  <!--style for overall pagelook-->
  
  <title>Student | Enrollment</title>
</head>
<!--Student Information-->

<body>
  <div class="container"><br>
  
    <a class="btn btn-primary float-right" href="admin/login.php">Login Here</a>
    <h1 class="navbar-brand">Welcome to Student Enrollment System</h1><br><br>  

    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form method="POST">
          <table class="infotable">
            <tr>
              <th colspan="2">
                <p class="text-center">Student Information</p>
              </th>
            </tr>
            <tr>
              <td>
                <p class="text-class">Class</p>
              </td>
              <td>
                <select class="form-control" name="choose">
                  <option value="">
                    Select
                  </option>
                  <option value="1st">
                    1st
                  </option>
                  <option value="2nd">
                    2nd
                  </option>
                  <option value="3rd">
                    3rd
                  </option>
                  <option value="4th">
                    4th
                  </option>
                  <option value="5th">
                    5th
                  </option>
                </select>
              </td>
            </tr>

            <tr>
              <td>
                <p class="label-roll"><label for="roll">Roll No</label></p>
              </td>
              <td>
                <input class="form-control" type="text"  id="roll" placeholder="Enter Digit Enrolle No." name="roll">
              </td>
            </tr>
            <tr>
              <td colspan="2" class="text-btn">
                <input class="btn btn-danger" type="submit" name="showinfo">
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
    <img src="logo2.png" alt="logo2" class="center"><br>
    <h5 class="text-wan">Wanpor University™</h5>

    <!--Connecting to db for retrieving info..-->
    <?php if (isset($_POST['showinfo'])) {
      $choose = $_POST['choose'];
      $roll = $_POST['roll'];
      if (!empty($choose && $roll)) {
        $query = mysqli_query($db_con, "SELECT * FROM `student_info` WHERE `roll`='$roll' AND `class`='$choose'");
        if (!empty($row = mysqli_fetch_array($query))) {
          if ($row['roll'] == $roll && $choose == $row['class']) {
            $stroll = $row['roll'];
            $stname = $row['name'];
            $stclass = $row['class'];
            $city = $row['city'];
            $photo = $row['photo'];
            $pcontact = $row['pcontact'];
    ?>
            <div class="row">
              <div class="col-sm-6 offset-sm-3">
                <table>
                  <tr>
                    <td rowspan="5">
                      <h3>Student Info</h3><img class="img-thumbnail" src="admin/images/<?= isset($photo) ? $photo : ''; ?>" width="250px">
                    </td>
                    <td><b>Name</b></td>
                    <td><?= isset($stname) ? $stname : ''; ?></td>
                  </tr>
                  <tr>
                    <td><b>Roll</b></td>
                    <td><?= isset($stroll) ? $stroll : ''; ?></td>
                  </tr>
                  <tr></b>
                    <td><b>Class</b></td>
                    <td><?= isset($stclass) ? $stclass : ''; ?></td>
                  </tr>
                  <tr>
                    <td><b>City</b></td>
                    <td><?= isset($city) ? $city : ''; ?></td>
                  </tr>
                  <tr>
                    <td><b>Contact</b></td>
                    <td><?= isset($pcontact) ? $pcontact : ''; ?></td>
                  </tr>
                </table>
              </div>
            </div>
        <?php
          } else {
            echo '<p style="color:red;">Please Input Valid RollNo</p>';
          }
        } else {
          echo '<p style="color:red;">Your Input Doesn\'t Match!</p>';
        }
      } else { ?>
        <script type="text/javascript">
          alert("Data Not Found!");
        </script>
    <?php }
    }; ?>
  </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>