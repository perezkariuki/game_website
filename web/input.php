<!DOCTYPE html>
<html>
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

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.html?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

<!--body-->
<form action = "server.php" method= "post" autocomplete = "off" >
			<div>
				<label for="GameName"> Game Name </label>
				<input type="text" id="GameName" name="GameName" required/>
			</div>
      <br>
      <div>
				<label for="Mainupload"> Game Main image </label>
				<br>
				<input type="file" id="Mainimage" name="Mainimage" accept="image/png, image/jpeg, image/png" required/>
			</div>
      <br>
      <div>
					<label for="category">Game Category</label>
					<select id="category" name="category">
						<option value="action"> Action</option>
						<option value="racing"> Racing </option>
            <option value="advanture"> Advanture </option>
            <option value="openWorld"> Open World </option>
					</select>
			</div>
			<br>
      <div>
        <label for="company"> Game Company </label>
        <input type="text" id="company" name="company" required autofocus />
      </div>
      <br>
      <div>
        <label for="language"> Game Language </label>
        <input type="text" id="language" name="language" required autofocus />
      </div>
      <br>
      <div>
        <label for="totalSize"> Game Total Size </label>
        <input type="text" id="totalSize" name="totalSize" required autofocus />
      </div>
      <br>
      <div>
        <label for="compressedSize"> Game Compressed Size </label>
        <input type="text" id="compressedSize" name="compressedSize" required autofocus />
      </div>
			<br>
			<div>
        <label for="image1">First image upload</label>
				<input type="file" id="image1" name="image1" accept="image/png, image/jpeg, image/png" required autofocus/>
        <label for="image2">Second image upload</label>
        <input type="file" id="image2" name="image2" accept="image/png, image/jpeg, image/png" required/>
        <label for="image3">Third image upload</label>
        <input type="file" id="image3" name="image3" accept="image/png, image/jpeg, image/png" required/>
			</div>
			<br>
			<div>
				<label for="about"> About the Game </label>
				<input type="text" id="about" name="Gameabout" placeholder="write a text about the game" required/>
			</div>
			<br>
      <div>
				<label for="require">Game requirements </label>
				<input type="text" id="require" name="require" placeholder="write the game requirements" required/>
			</div>
      <br>
			<div>
				<button type="submit" name="addGame" value="addGame">
				<strong>Add</strong>
				</button>
			</div>

		</form>

</body>
</html>
