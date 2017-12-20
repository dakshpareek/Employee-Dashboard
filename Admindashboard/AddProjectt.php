
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
  <script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script></head>

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
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Add New Project</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>New Project</li>
				
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  

                          </header>
                          
						  
				 <div class="col-md-6 portlets">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Project Details</div>
                  <div class="widget-icons pull-right">
                    
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">
                    
                      <div class="form quick-post">
                                      <!-- Edit profile form (not working)-->
                                      <form action="adp.php" method="post" class="form-horizontal">
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Title</label>
                                            <div class="col-lg-10"> 
                                              <input type="text" class="form-control"  name="p_name" id="title">
                                            </div>
                                          </div>   
                                          <!-- Content -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="content">Last Date</label>
                                            <div class="col-lg-10">
                                             <input type="date" class="form-control"  name="last_date" id="title">
                                            </div>
                                          </div>                           
                                          <!-- Cateogry -->
                                             
                                          <!-- Tags -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags">Working Hours Required</label>
                                            <div class="col-lg-10">
                                              <input type="number" class="form-control" name="whr" id="tags">
                                            </div>
                                          </div>
                                          
										  
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons --><label class="control-label col-lg-2" for="tags">Add Employees</label>
											 <div class="col-lg-offset-2 col-lg-9">
												<?php
include_once '../Database/mysql_connect.php';
$res=mysql_query("SELECT uid,uname FROM employee_details where role='emp'");

while($row=mysql_fetch_array($res))
{ echo  $row['uname']."   ";
	echo "<input type='checkbox' name='check_list[]' value='".$row['uid']."'><br/>";
	
}

?>
<div class="form-group">
                                             <!-- Buttons -->
											 <div class="col-lg-offset-2 col-lg-9">
												<button type="submit" class="btn btn-primary">Publish</button>
												
											 </div>
                                          </div>

												
												
											 </div>
                                          </div>
                                      </form>
                                    </div>
                  

                  </div>

						  

  <!-- container section end -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>    


  </body>
</html>
