
<!doctype html>
<html lang="en">
<head>
<?php
	 session_start();
				  if (!isset($_SESSION["uname"]))
   {
      header("location: ../Login/login.html");
   }
	include_once '../Database/mysqli_connect.php';

?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
     <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([

          ['Project', 'Hrs'],
            <?php 
	        	$query = "SELECT ewhr AS count, p_name FROM project_process where uid=".$_SESSION['uid']." GROUP BY p_name ORDER BY p_name";

	        	$exec = mysqli_query($conn,$query);
	        	while($row = mysqli_fetch_array($exec)){

	        		echo "['".$row['p_name']."',".$row['count']."],";
	        	}
	   ?>
         
        ]);

        var options = {
        	title: 'Hrs Spended on Projects'
        };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart"));
      chart.draw(data, options);
  }
  </script>




	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />



	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                  <?php
				  echo $_SESSION['uname'];
				  $servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dashboard";

$connn = new mysqli($servername, $username, $password, $dbname);

if ($connn->connect_error) {
    die("Connection failed: " . $connn->connect_error);
} 

$sql = "SELECT * from project_process where uid=".$_SESSION['uid']." ";
$result = $connn->query($sql);
				  
				  
				  ?>
                </a>
            </div>

          <ul class="nav">
               
                <li>
                    <a href="profile.php">
                        <i class="pe-7s-user"></i>
                        <p>My Profile</p>
                    </a>
                </li>
                <li>
                    <a href="share.php">
                        <i class="pe-7s-users"></i>
                        <p>Share and Learning</p>
                    </a>
                </li>
                <li>
                    <a href="newsfeed.php">
                        <i class="pe-7s-note2"></i>
                        <p>Newsfeed</p>
                    </a>
                </li>
                <li>
                    <a href="suggest.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Suggest</p>
                    </a>
                </li>
                <li>
                    <a href="suggestions.php">
                        <i class="pe-7s-study"></i>
                        <p>Suggestions</p>
                    </a>
                </li>
                <li>
                    <a href="ApplyForLeave.php">
                        <i class="pe-7s-home"></i>
                        <p>Apply For Leave</p>
                    </a>
                </li>
                <li>
                    <a href="showleaves.php">
                        <i class="pe-7s-bell"></i>
                        <p>Leaves Status</p>
                    </a>
                </li>
                <li>
                    <a href="showsalary.php">
                        <i class="pe-7s-piggy"></i>
                        <p>Salary Report</p>
                    </a>
                </li>
                <li>
                    <a href="events.php">
                        <i class="pe-7s-smile"></i>
                        <p>Events</p>
                    </a>
                </li>
                <li>
                    <a href="projects.php">
                        <i class="pe-7s-graph"></i>
                        <p>See Projects</p>
                    </a>
                </li>
                <li>
                    <a href="notices.php">
                        <i class="pe-7s-help1"></i>
                        <p>Notices</p>
                    </a>
                </li>
                <li>
                    <a href="policyshow.php">
                        <i class="pe-7s-link"></i>
                        <p>Policy</p>
                    </a>
                </li>
                <li>
                    <a href="myprojectstatus.php">
                        <i class="pe-7s-graph1"></i>
                        <p>Your Project Status</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>


     <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Here You Can See Status of Your Projects</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                       <th>Project Name</th>
                                    	<th>Your Working Hr</th>
                                    	<th>Date</th>
                                    	
                                    </thead>
                                    <tbody>
									<?php
									if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) 
									{  
									?>
                                        <tr>
                                        	<td><?php echo $row["p_name"] ?></td>
                                        	<td><?php echo $row["ewhr"] ?></td>
                                        	<td><?php echo $row["udate"] ?></td>
                                        
                                        </tr>
                                    <?php
									}
									}
									?>									
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
					
					


									
									

                                     

				   
				   

                </div>
            </div>
        </div>



    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>