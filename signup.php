
<!DOCTYPE html>
<html lang="">
	<head>
		<title>Corals</title>
		
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
		<div style="text-align:center">
    		<h2>Sign Up</h2>
    	</div>
 		
		<br>
		<br>
		<form action="" method="post">
			<div class="form-group">
				<label for="firstn">Name:</label>
				<input type="text" class="form-control" name="firstn" id="firstn" 
					value=""
					required autofocus>
			</div>
			
			<div class="form-group">
				<label for="address">Address:</label>
					<input type="text" class="form-control" name="address" id="address" 
						value=""
						required>
			</div>	
			<div class="form-group">
				<label for="contact">Contact:</label>
					<input type="text" class="form-control" name="contact" id="contact" 
						value=""
						required>
			</div>
			<div class="form-group">
				<label for="username">Username:</label>
					<input type="text" class="form-control" name="username" id="username" 
						value=""
						required>
			</div>	
			<div class="form-group">
				<label for="password1">Password:</label>
				<input type="password" class="form-control" name="password1" id="password1" required>
			</div>						
			<div class="col-md-6">
				<div class="form-group">
				<label for="password2">Password:</label>
				<input type="password" class="form-control" name="password2" id="password2" required>
			</div>							
			<button type="submit" name="submit" class="btn btn-info">
				Submit
				<span class="glyphicon glyphicon-check"></span>
			</button>	
		</form>	
	</body>
</html>