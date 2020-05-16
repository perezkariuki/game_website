<?php
session_start();
//user signup
// initializing variables
$username = "";
$email    = "";
$errors = array();

//DATABASE Connection
include_once("dbconnect.php");

// REGISTER USER
if (isset($_POST['signup'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $conpassword = mysqli_real_escape_string($conn, $_POST['conpassword']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $conpassword) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM account WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO account (username, email, password)
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($conn, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.html');
  }
}

// ...

// login user
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM account WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.html');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

//Game input
if(isset($_POST['addGame'])) {
	$GameName = $_POST['GameName'];
	$Mainimage = $_POST['Mainimage'];
	$category = $_POST['category'];
  $company = $_POST['company'];
  $language = $_POST['language'];
  $totalSize = $_POST['totalSize'];
  $compressedSize = $_POST['compressedSize'];
  $image1 = $_POST['image1'];
  $image2 = $_POST['image2'];
  $image3 = $_POST['image3'];
  $Gameabout = $_POST['Gameabout'];
  $require = $_POST['require'];
	$account_Id = $_SESSION['Id'];


	$result = mysqli_query($conn, "INSERT INTO Gameupload (GameName, Mainimage, category, company, language, totalSize, compressedSize,
      image1, image2, image3, Gameabout, require, account_Id) VALUES('$GameName', '$Mainimage', '$category', '$company', '$language', '$totalSize', '$compressedSize',
      '$image1', '$image2', '$image3', '$Gameabout', '$require', '$account_Id')");

		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.html'>View Result</a>";
	}
?>
