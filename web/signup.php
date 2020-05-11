<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
</head>
<!--header-->
<header id="header">
    <a href="#" class="logo">Daysons</a>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">All Games A-Z</a></li>
        <li><a href="#services">Genre</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</header>
<script type="text/javascript">
window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY)
})
</script>
<hr>
<body>
  <div>
  	<h2>SIGN UP</h2>
  </div>

  <form method="post" action="signup.php">
  	<?php include('errors.php'); ?>
  	<div>
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div>
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div>
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div>
  	  <label>Confirm password</label>
  	  <input type="password" name="conpassword">
  	</div>
  	<div>
  	  <button type="submit" class="btn" name="signup">Sign up</button>
  	</div>
  	<p>
  		Already a member? <a href="Signin.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
