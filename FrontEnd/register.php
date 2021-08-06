<!DOCTYPE html>

<html>
<head>
<title>
Register
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.google.com/specimen/Roboto">
<link rel="stylesheet" href="css/stylesheet.css" />
<link rel="stylesheet" href="css/mediaquery.css" />
<link rel="stylesheet" href="css/login.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>






    // document.getElementById("txtHint").innerHTML = str;
//   if (str == "") {
//     document.getElementById("txtHint").innerHTML = "";
//     return;
//   } else {
//     var xmlhttp = new XMLHttpRequest();
//     xmlhttp.onreadystatechange = function() {
//       if (this.readyState == 4 && this.status == 200) {
//         document.getElementById("txtHint").innerHTML = this.responseText;
//       }
//     };
//     xmlhttp.open("POST","dbquery.php?submit="+submit+"username="+username+"password="+password,true);
//     xmlhttp.send();
//   }



</script>

</head>

<body>
    <div class="logo-main">
		<img src="https://i.ibb.co/DKNMyDP/Logo-2-2.png">
	</div>
    <p class="medium-text">Create your Account</p>
	<form value="Register"
    onsubmit="event.preventDefault(); checkUserName('Register')" 
    method="post">
    
		<table class="login_table" id="register">
            <tr>
                <td id="txtHint"><b></b>
                </td>
            </tr>

            <tr>
                <td>
                    <input 
                        type="text" 
                        name="firstname" 
                        id="firstname" 
                        required
                        placeholder="First Name"
                    >
                </td>
            </tr>


            <tr>
                <td>
                    <input 
                        type="text" 
                        name="lastname" 
                        id="lastname" 
                        required
                        placeholder="lastname"
                    >
                </td>
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
                    placeholder="Password">
                </td>
            </tr>

            <tr>
                <td>
                    <input 
                    type="password" 
                    name="password"
                    id="confirm_password" 
                    required
                    placeholder="Confirm Password"
                    >
                </td>
            </tr>
            <tr>
                <td>
                    <button 
                    type="submit" 
                    name="submit" 
                    value="Register" 
                    >Register
                </td>
            </tr>
		</table>

        <div class="signin">
			<p class="small-text">register with</p>
			<div id="socials">
				<img src="https://image.flaticon.com/icons/png/512/1051/1051309.png">
				<img src="https://image.flaticon.com/icons/png/512/2991/2991147.png">
				<img src="https://image.flaticon.com/icons/png/128/733/733635.png">
			</div>
			<p class="small-text">Have an account? <a href="login.php">Login</a></p>
		</div>
	</form>
</body>


<script>

    var username =  document.getElementById('username') //clean this
    var password = document.getElementById("password")
    var firstname = document.getElementById("firstname")
    var lastname = document.getElementById("lastname")


    confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_password.setCustomValidity('');
    }
    }

    password.addEventListener('change', validatePassword, false)
    confirm_password.addEventListener('keyup', validatePassword, false)

    function checkUserName(submit) {

    var arr = {
        'submit':submit,
        'firstname': firstname.value,
        'lastname': lastname.value,
        'username':username.value,
        'password':password.value}
    
    $.ajax({
        url: "dbquery.php",
        type: "post",
        data: arr ,
        success: function (response) {
            console.log(response)
            res = JSON.parse(response)
            if(res.query === "success"){
                location.href = "login.php"
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