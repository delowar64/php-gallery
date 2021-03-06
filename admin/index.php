<?php
include("includes/header.php");
include ("includes/navigation.php");
?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Dashboard
                        <small>Subheading</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php">Admin</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Dashboard
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <?php
                        include('includes/admin_content.php');
                    ?>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>