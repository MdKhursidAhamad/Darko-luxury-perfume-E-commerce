<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DARKO - User Login</title>
    <link rel="stylesheet" href = "admin/css/mystore.css">
    <link rel="stylesheet" href="css/userlogin.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <!-- <---  bootsrap --------------------->
  
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->


</head>
<body>
 <div class="container">
		<div class="forms-container">
			<div class="signin-signup">
				<form action="login1.php" method = "POST" class="sign-in-form">
					<h2 class="title">Login</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" name = "name" placeholder="Username" required/>

					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" name = "password"  placeholder="Password" required/>

					</div>
					<input type="submit" value="Login" name = "submit" class="btn solid" />

				
				</form>
				<form action="userlogin.php" method = "POST" class="sign-up-form">
					<h2 class="title">Register</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" name = "name" placeholder="Username" required/>
					</div>
					<div class="input-field">
						<i class="fas fa-envelope"></i>
						<input type="Email" name = "email" placeholder="Email" required/>
					</div>
					<div class="input-field">
						<i class="fas fa-envelope"></i>
						<input type="number" name = "number" placeholder="Mobile No" required />
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input  type="password" name = "password" placeholder="Password" required/>
					</div>
					<input type="submit" class="btn" name = "submit" value="Register" />
          <button class = "btn-alreadya" style="background: none; border:none; border-bottom:1px solid #ab8e66;margin-top:10px;"> <a href="login.php">Already Account</a> </button>

				
				</form>
			</div>
		</div>

		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>User Register</h3>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
						ex ratione. Aliquid!
					</p>
					<button class="btn transparent" id="sign-up-btn">
						register
					</button>
				</div>
				<img  src="./admin/svg-img/1.svg" class="image" alt="" />
			</div>
			<div class="panel right-panel">
				<div class="content">
					<h3>User Login</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
						laboriosam ad deleniti.
					</p>
					<button class="btn transparent" id="sign-in-btn">
						login
					</button>
				</div>
				<img src="./admin/svg-img/undraw_login_re_4vu2 (1).svg"  class="image" alt="" />
			</div>
		</div>
	</div>

</body>

<script>
  const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
</script>
</html>