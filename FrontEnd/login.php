<!DOCTYPE html>

<html>
<head>
<title>
Login to Continue
</title>
<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.google.com/specimen/Roboto">
<link rel="stylesheet" href="css/stylesheet.css" />
<link rel="stylesheet" href="css/mediaquery.css" />
<link rel="stylesheet" href="css/login.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	

</head>

<body>

	<div class="logo-main">
		<img src="https://i.ibb.co/DKNMyDP/Logo-2-2.png">
	</div>

	<p class="medium-text">Login your Account</p>
	

	<form autocomplete="off"  onsubmit="
	event.preventDefault();
	validate('Login')" method="post">
		

		<table class="login_table">
		<tr>
			<td id="txtHint"><b></b></td>
		</tr>
		<tr>
			<td>
				<input 
					type="text" 
					name="username" 
					id="username" 
					required
					placeholder="Username"
				>
			</td>
		</tr>
		<tr>
			<td>
				<input 
					type="password" 
					name="password" 
					id="password" 
					required
					placeholder="Password"
				>
			</td>
		</tr>

		<tr>
			<td>
				<button type="submit" name="submit" value="Login">
				Login
			</td>
		</tr>

	
		<!-- <tr>
			<td>
				<input type="checkbox" name="keep" value="true"> 
				<small>Keep Me</small>
			</td>
		</tr> -->
		<!-- <tr class="signin">
			<td >
			
			</td>
		</tr> -->

		
		</table>

		<div class="signin">
			<p class="small-text">signin with</p>
			<div id="socials">
				<img src="https://image.flaticon.com/icons/png/512/1051/1051309.png">
				<img src="https://image.flaticon.com/icons/png/512/2991/2991147.png">
				<img src="https://image.flaticon.com/icons/png/128/733/733635.png">
			</div>
			<p class="small-text">Don't have an account? <a href="register.php">Register</a></p>
		</div>
	</form>


</body>

<script>
	var username =  document.getElementById('username') //clean this
    var password = document.getElementById("password")


	function validate(submit) {
		var arr = {'submit':submit,'username':username.value,'password':password.value}
		$.ajax({
			url: "dbquery.php",
			type: "post",
			data: arr ,
			success: function (response) {
				console.log(response)
				res = JSON.parse(response)
				console.log(res)
				if(res.query === "success"){
					// console.log(res.querydata)
					location.href = "main.html"
				}else if(res.query === "error"){
				
					document.getElementById("txtHint").innerHTML = res.data;
				}
				else{
					document.getElementById("txtHint").innerHTML = 'Unkown Error';
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
			console.log(textStatus, errorThrown);
			}
		});
    }
</script>
</html>