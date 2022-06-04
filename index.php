<!DOCTYPE html>
<html>
   
<?php session_start();
 /* Starts the session */
 if(isset($_SESSION['UserData']['Username'])){
	header("location:home.php");
	exit;
}
                                $msg="<span></span>";
        /* Check Login form submitted */        
        if(isset($_POST['submit'])){
                /* Define username and associated password array */
                $logins = array('admin' => 'password','username1' => 'password1','username2' => 'password2');
                
                /* Check and assign submitted Username and Password to new variable */
                $Username = isset($_POST['username']) ? $_POST['username'] : '';
                $Password = isset($_POST['password']) ? $_POST['password'] : '';
				$msg="<span style='color:red'>Out password match</span>";

                /* Check Username and Password existence in defined array */            
                if (isset($logins[$Username]) && $logins[$Username] == $Password){
                        /* Success: Set session variables and redirect to Protected page  */
						$msg="<span style='color:red'>password match</span>";

                        $_SESSION['UserData']['Username']=$logins[$Username];
                        header("location: home.php");
                        exit;
                } else {
                        /*Unsuccessful attempt: Set error message */
                        $msg="<span style='color:red'>Invalid Login Details</span>";
                }
        }
?>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />

</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="" method="post" name="Login_Form">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input id="username" type="text" name="username" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input id="password" type="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" onclick="" name="submit" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
		
				<div style="color:red;" class="mt-4">
					<div id="error" class="d-flex justify-content-center links">
						<?php echo $msg; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script>

var x = document.getElementById("demo");
function login() {
    $('#error').html("");
    var username = $('#username').val();
    var password = $('#password').val();

    if(username=='admin' && password=="password"){
        location.href="home.php";
    }else{
        $('#error').html("Invalid username or password!");
    }
    console.log(username+", login, "+password);
}
</script>