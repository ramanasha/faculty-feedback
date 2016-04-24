<?php
session_start();
   include('config.php');

if(!isset($_SESSION['login_user'])){
      header("location:log.php");
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Delete Feedback</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/form-basic.css">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    Hi
                    <?php  echo $_SESSION['login_user']; ?>!
                    </a>
                </li>
                <li class="sidebar-brand">
                    <a href="logout.php">
                        Logout
                    </a>
                </li>
                <li>Feedback
                <ul style="list-style-type:none">
                <li>
                    <a href="Insertfeedback.php">Insert</a>
                </li>
                <li>
                    <a href="updateFeedback.php">Update</a>
                </li>
                <li>
                    <a href="DeleteFeedback.php">Delete</a>
                </ul></li>
                </li>
                <li>
                    <a href="Contact_Us.php">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    	<center>
                        	<h1>DTU Faculty Feedback System</h1>
                        	<header >
   								<a href="session-student.php">
   									<img src="DTU-logo.jpe" alt="logo" id="logo" title="Go to homepage"/>
   								</a>
   							</header
                    	</center>
                    	<br>
                    	<br>
                        <form class="form-basic" method="post" action="insertfeedbackdatabase.php">

            <div class="form-title-row">
<<<<<<< HEAD:form-3/DeleteFeedback.php
                <h1>Delete Teacher Feedback</h1>
=======
                <h1>Contact Us</h1>
>>>>>>> b98a29a934d7232412c516289bc754c8b3736072:form-3/Contact_Us.html
            </div>
			 <div class="form-row">
                <label>
<<<<<<< HEAD:form-3/DeleteFeedback.php
                    <span>Full Name</span>
                    <input type="text" name="name">
=======
                    You may contact us at the following:  
>>>>>>> b98a29a934d7232412c516289bc754c8b3736072:form-3/Contact_Us.html
                </label>
            </div> 
            <div class="form-row">
                <label>
<<<<<<< HEAD:form-3/DeleteFeedback.php
                    <span>Registration No</span>
                    <input type="text" name="registration-no">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Semester</span>
                    <select name="dropdown">
                        <option>I</option>
                        <option>II</option>
                        <option>III</option>
                        <option>IV</option>
                        <option>V</option>
                        <option>VI</option>
                        <option>VII</option>
                        <option>VIII</option>
                    </select>
                </label>
            </div>
                <div class="form-row">
                <label>
                    <span>Branch</span>
                    <input type="text" name="branch">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Additional Remarks(if any):</span>
                    <textarea name="remarks"></textarea>
                </label>
            </div>
    
            



            <div class="form-row">
                <button type="submit">Submit Form</button>
            </div>

        </form>

                    <br>   
                    <center>  <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                   </center>
				   </div>
=======
                    <span>Phone:</span><span>+91-11-27871018</span>       
                </label>
            </div>


            <div class="form-row">
                <label>
                    <span>Fax:</span><span>+91-11-27871023</span> 
                  
                </label>
            </div>
				<div class="form-row">
                <label>
                    <span>Address:</span><span>Delhi Technological University,Shahbad Daulatpur,
												Main Bawana Road, 
												Delhi-110042.India</span> 
   
                </label>
            </div>
        </form>

                       <br>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
>>>>>>> b98a29a934d7232412c516289bc754c8b3736072:form-3/Contact_Us.html
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
