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
  <!--style for overall pagelook-->
  <style>
    body,
    html {
      height: 110%;
      margin: 0;
    }

    body {
      background-image: url("form2.jpg");
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    table,
    th,
    td {
      border: 1px solid black;
      padding-top: 5px;
      padding-bottom: 5px;
      padding-left: 20px;
      padding-right: 20px;
    }
  </style>
  <title>Student | Enrollment</title>
</head>
<!--Student Information-->

<body>
  <div class="container"><br>
    <a class="btn btn-primary float-right" href="admin/login.php">Login Here</a>
    <h1 class="text-center">Welcome to Student Enrollment System</h1><br>

    <div class="row">
      <div class="col-md-4 offset-md-4">
        <form method="POST">
          <table class="text-center infotable">
            <tr>
              <th colspan="2">
                <p class="text-center">Student Information</p>
              </th>
            </tr>
            <tr>
              <td>
                <p>Class</p>
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
                <p><label for="roll">Roll No</label></p>
              </td>
              <td>
                <input class="form-control" type="text" pattern="[0-9]{6}" id="roll" placeholder="Enter 6 Digit RollNo." name="roll">
              </td>
            </tr>
            <tr>
              <td colspan="2" class="text-center">
                <input class="btn btn-danger" type="submit" name="showinfo">
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
    <br>
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