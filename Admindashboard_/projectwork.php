
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/favicon.png">


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
            <a href="index.html" class="logo"> <span class="lite">Admin Panel</span></a>
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
                          <li><a class="" href="addevent.html">Add New Events</a></li>                          
                          <li><a class="" href="showevents.php">Events</a></li>
                      </ul>
                  </li>       
                  
            <li>                     
                      <a class="" href="adminnotice.html">
                          
                          <span>Add Notice</span>
                          
                      </a>
                                         
                  </li>
           <li>                     
                      <a class="" href="addemployee.html">
                          
                          <span>Add User/Admin</span>
                          
                      </a>
                                         
                  </li>
              <li>                     
                      <a class="" href="notices.php">
                          
                          <span>Show Notices</span>
                          
                      </a>
                                         
                  </li>
          
                  <li>
                      <a class="" href="addsalary.html">
                          <i class="icon_genius"></i>
                          <span>Salary</span>
                      </a>
                  </li>
          <li>
                      <a class="" href="policy.html">
                          <i class="icon_genius"></i>
                          <span>Policy</span>
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
					<h3 class="page-header"><i class="fa fa-table"></i> Show Project</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-table"></i>Employee Project</li>
						<li><i class="fa fa-th-list"></i>Show Project</li>
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
                                  
                                  <th>UID</th>
                                  <th>Project Name</th>
                                  <th>Date Worked</th>
                                  <th>Working Hours</th>
                                
                                  
                                </tr>
                              </thead>
                              <tbody>
                               <?php
							  
							   
							   
include_once '../Database/mysqli_connect.php';
$sql = "SELECT * from project_process";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
	{   
								
								echo "<tr>
								
                                  
                                  <td>".$row["uid"]."</td>
                                  <td>".$row["p_name"]."</td>
                                  <td>".$row["udate"]."</td>
                                  <td>".$row["ewhr"]."</td>
                                                                                                 
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
