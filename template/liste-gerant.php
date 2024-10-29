<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/morvin/layouts/tables-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:03:52 GMT -->
<head>
        
        
        <?php $titre = 'Liste des gerants';
        include_once('includes/meta.php') ?>
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


          <!-- DataTables -->
          <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
          <link href="assets/libs/datatables.net-autoFill-bs4/css/autoFill.bootstrap4.min.html" rel="stylesheet" type="text/css" />
          <link href="assets/libs/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  
          <!-- Responsive datatable examples -->
          <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />   

    </head>

    
    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include_once "includes/header.php" ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <!-- start page title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                         <div class="row align-items-center">
                             <div class="col-sm-6">
                                 <div class="page-title">
                                     <h4>Editable Table</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                             <li class="breadcrumb-item active">Editable Table</li>
                                         </ol>
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                <div class="float-end d-none d-sm-block">
                                    <a href="#" class="btn btn-success">Add Widget</a>
                                </div>
                             </div>
                         </div>
                        </div>
                     </div>
                     <!-- end page title -->    


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Datatable Editable</h4>
                                            <p class="card-title-desc">Table Edits is a lightweight jQuery plugin for making table rows editable.</p>
            
                                            <div class="table-responsive">
                                                <table class="table table-editable table-nowrap align-middle table-edits">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Age</th>
                                                            <th>Gender</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-id="1">
                                                            <td data-field="id" style="width: 80px">1</td>
                                                            <td data-field="name">David McHenry</td>
                                                            <td data-field="age">24</td>
                                                            <td data-field="gender">Male</td>
                                                            <td style="width: 100px">
                                                                <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr data-id="2">
                                                            <td data-field="id">2</td>
                                                            <td data-field="name">Frank Kirk</td>
                                                            <td data-field="age">22</td>
                                                            <td data-field="gender">Male</td>
                                                            <td>
                                                                <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr data-id="3">
                                                            <td data-field="id">3</td>
                                                            <td data-field="name">Rafael Morales</td>
                                                            <td data-field="age">26</td>
                                                            <td data-field="gender">Male</td>
                                                            <td>
                                                                <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr data-id="4">
                                                            <td data-field="id">4</td>
                                                            <td data-field="name">Mark Ellison</td>
                                                            <td data-field="age">32</td>
                                                            <td data-field="gender">Male</td>
                                                            <td>
                                                                <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr data-id="5">
                                                            <td data-field="id">5</td>
                                                            <td data-field="name">Minnie Walter</td>
                                                            <td data-field="age">27</td>
                                                            <td data-field="gender">Female</td>
                                                            <td>
                                                                <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div>
        
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php include_once('includes/footer.php') ?>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        
        <!-- Table Editable plugin -->
        <script src="assets/libs/table-edits/build/table-edits.min.js"></script>

        <script src="assets/js/pages/table-editable.init.js"></script> 

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/morvin/layouts/tables-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:03:54 GMT -->
</html>
