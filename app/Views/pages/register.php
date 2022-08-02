<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300&display=swap" rel="stylesheet"> 	<title>Ci4 Blog</title>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand m-auto" href="/">Ci4 Blog</a>
	</div>
	</nav>

<div class="container mt-5">
	<div class="row">
		<form class="col-fluid col-sm-8 m-auto border rounded-4 p-5 pt-5 d-felx">
		<div class="text-center">
			<h1 class="p-2">Ci4 Blog</h1>
		</div>
		<h3 class="text-center mb-4">Register</h3>
        <div class="row">
			<div class="col form-floating mb-4">
				<input type="text" class="form-control" id="floatingFirstName" placeholder="First name">
				<label for="floatingFirstName" style="margin-left: 0.8rem;">First name</label>
			</div>
			<div class="col form-floating mb-4">
				<input type="text" class="form-control" id="floatingLastName" placeholder="Last name">
				<label for="floatingLastName" style="margin-left: 0.8rem;">Last name</label>
			</div>
        </div>
		<div class="row">
			<div class="col">
				<div class="form-floating mb-4">
				<input type="email" class="form-control" id="floatingInput" placeholder="Email address">
				<label for="floatingInput">Email address</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col form-floating mb-4">
				<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
				<label for="floatingPassword" style="margin-left: 0.8rem;">Password</label>
			</div>
			<div class="col form-floating mb-4">
				<input type="password" class="form-control" id="floatingConfirm" placeholder="Confirm password">
				<label for="floatingConfirm" style="margin-left: 0.8rem;">Confirm password</label>
			</div>
        </div>
			<button type="submit" class="btn btn-primary">Register</button>
			<a style="float: right;" href="/login">Already have an account?</a>
		</form>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script>
	var password = document.getElementById("floatingPassword")
  , confirm_password = document.getElementById("floatingConfirm");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</body>