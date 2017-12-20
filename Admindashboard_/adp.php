
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Basic Table | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
            <!--logo end-->

              <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                  
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>   
			</header> 
      <!--header end-->

      <!--sidebar start-->
     <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Events</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Add New Events</a></li>                          
                          <li><a class="" href="showevents.php">Events</a></li>
                      </ul>
                  </li>       
                  
				    <li>                     
                      <a class="" href="adminnotice.html">
                          
                          <span>Add Notice</span>
                          
                      </a>
                                         
                  </li>
				      <li>                     
                      <a class="" href="notices.php">
                          
                          <span>Show Notices</span>
                          
                      </a>
                                         
                  </li>
				  
                  <li>
                      <a class="" href="form_validation.html">
                          <i class="icon_genius"></i>
                          <span>Salary</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="adminleave.php">
                          
                          <span>Leave Requests</span>
                          
                      </a>
                                         
                  </li>
				 
                             
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <span>Employee Project</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="addprojectt.php">Add project</a></li>
							<li><a class="" href="projectwork.php">Show Project Work</a></li>
					  </ul>
                  </li>
                  
                 
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-table"></i>Table</li>
						<li><i class="fa fa-th-list"></i>Basic Table</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              
              
                  
            
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              
                          </header>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  
                                  <th>ID</th>
                                  <th>Project Name</th>
                                  <th>Last Date</th>
                                  <th>Working Hours Required</th>
                                  <th>Selected Employee's</th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                               <?php
include_once '../Database/mysqli_connect.php';
include_once '../Database/mysql_connect.php';
$p_name=$_POST['p_name'];
$last_date=$_POST['last_date'];
$whr=$_POST['whr'];
$emp=implode(",",$_POST['check_list']);
mysql_query("insert into project_status(p_name,last_date,whr,working_emp,status,project_process) values ('$p_name','$last_date','$whr','$emp',0,'$whr')");



$sql = "SELECT * from project_status ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
	{   
								
								echo "<tr>
								
                                  
                                  <td>".$row["id"]."</td>
                                  <td>".$row["p_name"]."</td>
                                  <td>".$row["last_date"]."</td>
                                  <td>".$row["whr"]."</td>
                                  <td>".$row["working_emp"]."
								  
								  </td>                                                                  
								</tr>
								</form>
								";
       }
	
}
?>                         
								
                              </tbody>
                            </table>
                          </div>

                      </section>
                  </div>
              </div>
              
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
