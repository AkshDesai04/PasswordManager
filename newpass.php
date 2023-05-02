<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Login</title>
		<link rel="stylesheet" href="./style.css" />
	</head>
	<body>
		<section class="form-container">
			<div class="title-container">
				<h2 class="title">New Password</h2>
				<!-- <p class="sub-title">Let&apos;s get you signed in</p> -->
			</div>
			<form action="authAction.php" method="post">
				<div class="input-container">
					<label for="text">Name</label>
					<input
						type="text"
						name="text"
						id="text"
						placeholder="Enter the name"
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
				<button type="submit">Submit</button>
			</form>
		</section>
	</body>
</html>
