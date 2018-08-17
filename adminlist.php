<?php
$servername = "localhost";
$username = "root";  //your user name for php my admin if in local most probaly it will be "root"
$password = "dev12017";  //password probably it will be empty
$databasename = "test"; //Your db nane
// Create connection
//$conn = new mysqli($servername, $username, $password,$databasename);
// Check connection
$dbc = mysqli_connect('localhost', 'root', 'dev12017')
        or die(mysqli_error());
$db_select = mysqli_select_db($dbc, 'test');
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <style type="text/css">
            * { margin: 0px; padding: 0px; }
            body {
                font-size: 120%;
                background: #F8F8FF;
            }
            .header {
                width: 80%;
                margin: 50px auto 0px;
                color: white;
                background: #5F9EA0;
               
                border: 1px solid #B0C4DE;
                border-bottom: none;
                border-radius: 10px 10px 0px 0px;
                padding: 20px;
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
            .table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 1px solid #ddd;
            }
            .Container
            {
                text-align: center;
            }
            .div {
    width: 100px;
    height: 100px;
    background-color: red;

    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;

    margin: auto;
}

        </style>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/parsleyjs/2.7.1/parsley.min.js"></script>                
        <!-- <script src="javascript.js" type="text/javascript"></script>                 -->
    </head>

    <body>
        <div class="container" style="
    margin: 0px;
">
            <!--    <form  method="POST" enctype="multipart/form-data">-->
            <form class="form-horizontal demo-form" enctype="multipart/form-data" name="dwemp" data-parsley-validate="" method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>">

                 <h1>Employee Information</h1>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group">

                            <div class="col-md-8">

                                <select  class="form-control" name="any" id="any">
                                    <option value="select">--Select--</option>
                                    <option value="fname">First Name</option>
                                    <option value="experience">experience</option>
                                    <!--  <option value="other">Other</option>-->
                                </select>
                            </div>
                       
                            <div class="col-md-4">
                                <input type="submit" id="Search" name="Search" value="Search"  class="btn btn-primary pull-right" >
                            </div>
                        </div>
                        </div>
                </div>
                        <?php
                        if (isset($_REQUEST['Search'])) {
//print_r($_REQUEST);
                            $table = array(); //print json table data 
                            $any = $_REQUEST["any"];
                            if ($any == 'experience') {
                                $sql = "SELECT * 
                                        FROM register
                                        ORDER BY  `experience` ASC";
                                if ($result = mysqli_query($dbc, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {
                                        //echo "hi";
                                        echo "<table border= 1 >";
                                        echo "<thead>";
                                        echo "<tr>";
                                        echo "<th>id</th>";
                                        echo "<th>first_name</th>";
                                        echo "<th>last_name</th>";
                                        echo "<th>email</th>";
                                        echo "<th>Phone</th>";
                                        echo "<th>Experience</th>";
                                        echo "<th>Qualification</th>";
                                        echo "</tr>";
                                        echo "</thead>";
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['id'] . "</td>";
                                            echo "<td>" . $row['fname'] . "</td>";
                                            echo "<td>" . $row['lname'] . "</td>";
                                            echo "<td>" . $row['email'] . "</td>";
                                            echo "<td>" . $row['phone'] . "</td>";
                                            echo "<td>" . $row['experience'] . "</td>";
                                            echo "<td>" . $row['Qualification'] . "</td>";

                                            $json_data = json_encode($row); //json encode data
                                            // echo $json_data;
                                            file_put_contents('Namefile.json', $json_data);
                                            echo "</tr>";
                                        }

                                        echo "</table>";
                                        // Free result set
                                        mysqli_free_result($result);
                                    } else {
                                        echo "No records matching your query were found.";
                                    }
                                } else {
                                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                }
                            } else if ($any == 'fname') {
                                $sql = "SELECT * 
                                        FROM register
                                        ORDER BY  `fname` ASC";
                                if ($result = mysqli_query($dbc, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {
                                        // echo "hi";
                                        echo "<table border= 1 >";
                                        echo "<tr>";
                                        echo "<th>id</th>";
                                        echo "<th>first_name</th>";
                                        echo "<th>last_name</th>";
                                        echo "<th>email</th>";
                                        echo "<th>Phone</th>";
                                        echo "<th>Experience</th>";
                                        echo "<th>Qualification</th>";
                                        echo "</tr>";
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['id'] . "</td>";
                                            echo "<td>" . $row['fname'] . "</td>";
                                            echo "<td>" . $row['lname'] . "</td>";
                                            echo "<td>" . $row['email'] . "</td>";
                                            echo "<td>" . $row['phone'] . "</td>";
                                            echo "<td>" . $row['experience'] . "</td>";
                                            echo "<td>" . $row['Qualification'] . "</td>";
                                            $json_data = json_encode($row); //json encode data
                                            // echo $json_data;
                                            file_put_contents('Namefile.json', $json_data);

                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                        // Free result set
                                        mysqli_free_result($result);
                                    } else {
                                        echo "No records matching your query were found.";
                                    }
                                } else {
                                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                }
                            }
                        }
                        ?>

                        </form>
                    
        </div>
    </body>

</html>














