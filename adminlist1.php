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
    if (isset($_REQUEST['Login'])) {
print_r($_REQUEST);

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
//$sql="SELECT * 
//FROM register
//ORDER BY  `fname` ASC, `experience` DESC";
 $sql="select * from register";
 //echo $sql;
 //$db_insert = mysqli_query($dbc, $sql);
 if($result = mysqli_query($dbc, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "hi";
       echo "<table class='table table-bordered'>";
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
                echo "<th>Phone</th>";
                 echo "<th>Experience</th>";
                  echo "<th>Qualification</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                 echo "<td>" . $row['phone'] . "</td>";
                  echo "<td>" . $row['experience'] . "</td>";
                    echo "<td>" . $row['Qualification'] . "</td>";
                  
                  
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
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
	<h2>Register</h2>
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
        <input type="submit" id="Login" name="Login" value="Login"  class="btn btn-primary pull-right" >
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>

</html>


















<!--<div class="table-responsive">           
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>SerialNo</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Skills</th>
                <th>Experience</th>
                <th>Qualification</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                for ($mydw = 1; $mydw <= count($currentdw); $mydw++) {
                    ?>   
                    <th scope="row"><?php echo $mydw; ?></th>
                    <th ><?php echo $currentdw[$mydw - 1]['fname'] ?>  </th>
                    <td><?php echo $currentdw[$mydw - 1]['lname'] ?></td>
                    <td><?php echo $currentdw[$mydw - 1]['phone'] ?></td>
                    <td><?php echo $currentdw[$mydw - 1]['email'] ?></td>
                    <td><?php echo $currentdw[$mydw - 1]['gender'] ?></td>
                    <td><?php echo $currentdw[$mydw - 1]['country'] ?></td>
                    <td><?php echo $currentdw[$mydw - 1]['skills'] ?></td>
                    <td><?php echo $currentdw[$mydw - 1]['expierience'] ?></td>
                    <td><?php echo $currentdw[$mydw - 1]['Qualification'] ?></td>
                    <td> <a href="<?php echo site_url() . '/editdw ?v_regid=' . $currentdw[0]['regid'] . '&v_dwid=' . $currentdw[0]['dwid'] . '&v_regmobile=' . $currentdw[0]['regmobile']; ?>&search=Search"><span class='glyphicon glyphicon-pencil' data-toggle="tooltip" title="Update"></span></a>
                        &emsp;<a href="<?php echo site_url() . '/updatebenefits ?v_dwid=' . $currentdw[0]['dwid'] . '&v_regmobile=' . $currentdw[0]['regmobile']; ?>&search=Search"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Benefits"></span></a>
                        &nbsp;
                    </td>
                    <?php
                    if ($currentdw[$mydw - 1]['activeflag'] == 1) {
                        echo '<td><button class="glyphicon glyphicon-thumbs-up"   style="font-size: 24px; color: #108db7;" data-toggle="tooltip" title="Active"></button></td>';
                    } else {
                        echo '<td><button class="glyphicon glyphicon-thumbs-down"   style="font-size: 24px; color: #108db7;" title="Inactive"></nutton></td>';
                    }
                    ?>


                <?php } ?>
            </tr>
            </tr>
        </tbody>
    </table> -->