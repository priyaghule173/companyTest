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
    if (isset($_REQUEST['Register'])) {
print_r($_REQUEST);
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$gender=$_REQUEST['gender'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$country=$_REQUEST['country'];
$skills=$_REQUEST['skills'];
$experience=$_REQUEST['experience'];
$Qualification=$_REQUEST['Qualification'];
//storing all necessary data into the respective variables.
$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = 'Desktop/uploads/files ';
if($file_name!="" && ($file_type="application/pdf"||$file_type="application/doc"))
if(move_uploaded_file ($file_path,'images/'.$file_name))//"images" is just a folder name here we will load the file.
//$query=mysql_query("insert into user(photo)values('$file_name')");
 $sql="insert into register(fname,lname,gender,phone,email,password,country,skills,experience,Qualification,filename) "
         . "values('$fname','$lname','$gender','$phone','$email','$password','$country','$skills', '$experience,','$Qualification','$file_name')";
 echo $sql;
 $db_insert = mysqli_query($dbc, $sql);
 
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
	width: 40%;
	margin: 50px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
.input[type=text] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
                border: 3px solid #ccc;
                -webkit-transition: 0.5s;
                transition: 0.5s;
                outline: none;
            }

.table {

                border-collapse: separate!important;
                table-layout: auto;
                width: 180px;    

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
	padding: 5px 10px;
        
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
	<h2>Register</h2>
</div>

	<div class="input-group">
		<label>First Name</label>
                <input type="text" name="fname" value="" required="">
	</div>
	<div class="input-group">
		<label>Last Name</label>
                <input type="text" name="lname" value="" required="">
	</div>
	<div class="input-group">
		<label>mobile</label>
                <input type="number" name="phone" required="">
	</div>
	<div class="input-group">
		<label>Email</label>
                <input type="email" name="email" required="">
	</div>
    <div class="input-group">
		<label>Password</label>
                <input type="password" name="password" required="">
	</div>
    <div class="input-group">
        <label>Gender</label>
    <select name="gender" id="gender">
  <option value="select">--Select--</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
  <option value="other">Other</option>
</select>
        </div>
	<div class="input-group">
		<label>Country</label>
                <input type="text" name="country" required="">
	</div>
    	<div class="input-group">
		<label>Skills</label>
                <input type="text" name="skills" >
	</div>
    <div class="input-group">
		<label>Experience</label>
                <input type="text" name="experience">
	</div>
   
  <div class="input-group">
  <label>Qualification</label>
  <select name="Qualification" id="Qualification">
  <option value="select">--Select--</option>
  <option value="Diploma">Diploma</option>
  <option value="Graduation">Graduation</option>
  <option value="HSC">Hsc</option>
  <option value="SSC">Ssc</option>
  <option value="Post Graduation">Post Graduation</option>
  </select>
  </div>
<input type="file" name="file" size="1000" />
    
    <div class="input-group">
        <input type="submit" id="Register" name="Register" value="Register"  class="btn btn-primary pull-right" >
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>

</html>