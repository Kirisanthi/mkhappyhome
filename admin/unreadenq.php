<?php session_start();
error_reporting(0);
// Database Connection
include('includes/config.php');
//Validating Session
if(strlen($_SESSION['aid'])==0)
  { 
header('location:index.php');
}
else{


  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>MK Happy Home|| Unread Contact Details</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="images/logo.webp">
  <link rel="shortcut icon" href="images/1.jpg">
  
</head>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include_once('includes/header.php');?>
    <!-- partial -->
    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
&nbsp;
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-center">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item ml-0">
            <h4>Unread Contact Details</h4>
          </li>
        </ul>
       
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
  
      <!-- partial:partials/_sidebar.html -->
     <?php include_once('includes/sidebar.php');?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">


          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <h4 class="card-title" style="padding-left: 20px; padding-top: 20px;">Unread Contact Details</h4>
                <div class="table-responsive pt-3">
                  
                  <table class="table table-striped project-orders-table">
                    <thead>
                       <tr>
                   <th>S.No</th>
                   <th>Name</th>
                    <th>Email</th>
                    <th>Contact Details Date</th>
                     <th>Action</th>
                  </tr>
                    </thead>
                    <tbody>
                      <?php
$ret=mysqli_query($con,"select * from tblcontact where IsRead is null");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                      <tr class="gradeX">
                 <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                                        <td><?php  echo $row['Email'];?></td>
                                        <td>
                                            <span class="badge badge-primary"><?php echo $row['EnquiryDate'];?></span>
                                        </td>
                                         <td>
                                          <a href="view-Contact Details.php?viewid=<?php echo $row['ID'];?>" class="btn btn-success btn-sm btn-icon-text mr-3">View <i class="typcn typcn-eye btn-icon-append"></i> </a></td>
                </tr><?php $cnt=$cnt+1; } ?>
                      
                    </tbody>
                  </table>


                </div>
                
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include_once('includes/footer.php');?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

</html>
<?php } ?>