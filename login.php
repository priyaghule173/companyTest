<?php
$servername = "localhost";
$username = "root";  //your user name for php my admin if in local most probaly it will be "root"
$password = "dev12017";  //password probably it will be empty
$databasename = "test"; //Your db nane
// Create connection
//$conn = new mysqli($servername, $username, $password,$databasename);
// Check connection
$dbc = mysqli_connect('localhost','root','dev12017')
or die(mysqli_error());
$db_select = mysqli_select_db($dbc,'test');
 if(isset($_REQUEST['Login']))
 {
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
    if (($email=='admin@gmail.com')&&($password=='12345')) {
//print_r($_REQUEST);
    echo "<script>alert(' HELLO admin..click OK to see list of employees available'); document.location='adminlist.php'</script>";
         
    }
    else
    {
        echo "<script>alert(' hi user..');</script>"; 
    }

 

 }

?>
   <html>
<head>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <style type="text/css">
* { margin: 0px; padding: 0px; }
body {
	font-size: 120%;
	background: #F8F8FF;
}
.header {
	
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
	width: 40%;
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
	padding: 5px 10px;<form class="form-horizontal demo-form" enctype="multipart/form-data" name="dwemp" data-parsley-validate="" method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
     
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
#user_type {
	height: 40px;
	width: 98%;
	padding: 5px 10px;
	background: white;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;<form class="form-horizontal demo-form" enctype="multipart/form-data" name="dwemp" data-parsley-validate="" method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
     
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
.profile_info img {
	display: inline-block; 
	width: 50px; 
	height: 50px; 
	margin: 5px;
	float: left;
}
.profile_info div {
	display: inline-block; 
	margin: 5px;
}
.profile_info:after {
	content: "";
	display: block;
	clear: both;
}
</style>
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/parsleyjs/2.7.1/parsley.min.js"></script>                
        <!-- <script src="javascript.js" type="text/javascript"></script>                 -->
    </head>
    
<body>
<!--    <form  method="POST" enctype="multipart/form-data">-->
     <form class="form-horizontal demo-form" enctype="multipart/form-data" name="dwemp" data-parsley-validate="" method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
            
<div class="header">
	<h2>Login</h2>
</div>
<form method="post" action="register.php">
	
	<div class="input-group">
		<label>Email</label>
                <input type="email" name="email" required="">
	</div>
    <div class="input-group">
		<label>Password</label>
                <input type="password" name="password" required="">
	</div>
    
    
    <div class="input-group">
        <input type="submit" id="Login" name="Login" value="Login"  class="btn btn-primary pull-right" >
	</div>
	<p>
            Already a member? <a href="Register.php">Sign in</a>
	</p>
</form>
</body>

</html>