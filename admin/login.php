<?php require_once 'db_con.php';
session_start();
if (isset($_SESSION['user_login'])) {
	header('Location: index.php');
}
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	//Authentication of users 
	$input_arr = array();

	if (empty($username)) {
		$input_arr['input_user_error'] = "Username Is Required!";
	}

	if (empty($password)) {
		$input_arr['input_pass_error'] = "Password Is Required!";
	}

	// Script md5 for hiding password form others
	if (count($input_arr) == 0) {
		$query = "SELECT * FROM `users` WHERE `username` = '$username';";
		$result = mysqli_query($db_con, $query);
		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
			// if ($row['password'] == sha1(md5($password))) {
			if ($row['password'] == $password) {
				if ($row['status'] == 'active') {
					$_SESSION['user_login'] = $username;
					header('Location: index.php');
					//only active one is admin if incase user is inactive then it gets alert shown below....
				} else {
					$status_inactive = "Your Status is inactive, please contact with admin at gupta.yash2410@gmail.com .";
				}
			} else {
				$worngpass = "This password Wrong!";
			}
		} else {
			$usernameerr = "Username Not Found!";
		}
	}
}


?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'>
	<style>
		body,
		html {
			height: 100%;
			margin: 0;
		}

		body {
			background-color: #f0ecdc;
    		font-family: Source Sans Pro;
			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
	<!--Login page details with register page link-->
	<title>Login</title>
</head>

<body>
	<div class="container"><br>
		<a class="btn btn-primary float-right" href="../index.php">Home</a>
		<h1 class="text-center">Login Here</h1>
		<hr><br>
		<div class="d-flex justify-content-center">
			<?php if (isset($usernameerr)) { ?> <div role="alert" aria-live="assertive" aria-atomic="true" align="center" class="toast alert alert-danger fade hide" data-delay="2000"><?php echo $usernameerr; ?></div><?php }; ?>
			<?php if (isset($worngpass)) { ?> <div role="alert" aria-live="assertive" aria-atomic="true" align="center" class="toast alert alert-danger fade hide" data-delay="2000"><?php echo $worngpass; ?></div><?php }; ?>
			<?php if (isset($status_inactive)) { ?> <div role="alert" aria-live="assertive" aria-atomic="true" align="center" class="toast alert alert-danger fade hide" data-delay="2000"><?php echo $status_inactive; ?></div><?php }; ?>
		</div>
		<div class="row animate__animated animate__pulse">
			<div class="col-md-4 offset-md-4">
				<!--Form tag used to submit the response-->
				<form method="POST" action="">
					<div class="form-group row">
						<div class="col-sm-12">
							<input type="text" class="form-control" name="username" value="<?= isset($username) ? $username : ''; ?>" placeholder="Username" id="inputEmail3"> <?php echo isset($input_arr['input_user_error']) ? '<label>' . $input_arr['input_user_error'] . '</label>' : ''; ?>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
							<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password"><label><?php echo isset($input_arr['input_pass_error']) ? '<label>' . $input_arr['input_pass_error'] . '</label>' : ''; ?>
						</div>
					</div>
					<div class="text-center">
						<button type="submit" name="login" class="btn btn-warning">Sign in</button>
						<button type="reset" name="login" class="btn btn-warning">Reset</button>
					</div>
					<p>If you don't have account, You can<a href="register.php"> Register Here</a></p>
			</div>
			</form>
		</div>
	</div>
	</div>

	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$('.toast').toast('show')
	</script>
</body>

</html>