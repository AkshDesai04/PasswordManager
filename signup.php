<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Sign Up</title>
		<link rel="stylesheet" href="./style.css" />
	</head>
	<body>
		<section class="form-container">
			<div class="title-container">
				<h2 class="title">Create an account</h2>
				<p class="sub-title">Let&apos;s get you registered</p>
			</div>
			<form action="">
				<div class="input-container">
					<label for="name">Name</label>
					<input
						type="name"
						name="name"
						id="name"
						placeholder="Enter you name"
					/>
				</div>
				<div class="input-container">
					<label for="email">Email</label>
					<input
						type="email"
						name="email"
						id="email"
						placeholder="Enter you email"
					/>
				</div>
				<div class="input-container">
					<label for="password">Password</label>
					<input
						type="password"
						name="password"
						id="password"
						placeholder="Enter you password"
					/>
				</div>
				<div class="input-container">
					<label for="cpassword">Confirm Password</label>
					<input
						type="cpassword"
						name="cpassword"
						id="cpassword"
						placeholder="Re-enter you password"
					/>
				</div>
				<button type="submit">Create Account</button>
			</form>
			<p class="signup">
				Already have an account? <a href="/login.html">Login</a>
			</p>
		</section>
		<section class="image"></section>
	</body>
</html>
