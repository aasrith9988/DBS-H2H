
<!DOCTYPE html>
<html lang="">
	<head>
		<title>Banking</title>
		
		<style>
			{
    margin: 0px;
    padding: 0px;
  }
  body {
    font-size: 120%;
    background: #F8F8FF;
  }
  
  .header {
    width: 30%;
    margin: 50px auto 0px;
    color: white;
    background: #5F9EA0;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
  }
  form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
  }
  .input-group {
    margin: 10px 0px 10px 0px;
  }
  .input-group label {
    display: block;
    text-align: left;
    margin: 3px;
  }
  .input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
  }
  .btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
  }
  .error {
    width: 92%; 
    margin: 0px auto; 
    padding: 10px; 
    border: 1px solid #a94442; 
    color: #a94442; 
    background: #f2dede; 
    border-radius: 5px; 
    text-align: left;
  }
  .success {
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    margin-bottom: 20px;
  }
		</style>
	</head>
	<body>

		<br>
		<br>
		<br>
		<div style="text-align:center">
		<h2>HNI</h2>
		</div>
		<br>
		<br>
		<form action="" method="post">
			<div class="form-group">
				<label for="inputdefault">Username:</label>
					<input class="form-control" name="username" type="text" required autofocus
				 		value="">
			</div>
			<div class="form-group">
				<label for="inputdefault">Password:</label>
					<input class="form-control" name="password" type="password" required>
			</div>
			<button class="btn btn-info" type="submit" name="login">
				<a href="hni.html"> Login 
				<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
			</button>
			<p>Not a user? <a href="signup.php">Sign up</a></p>
		</form>
	</body>
</html>