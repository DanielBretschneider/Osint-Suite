<?php
# include sidebar
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dashboard - OSINT Tool Suite </title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <!-- Page Specific CSS -->
        <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">

        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>

        <!-- Page Specific Plugins -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
        <script src="js/morris/chart-data-morris.js"></script>
        <script src="js/tablesorter/jquery.tablesorter.js"></script>
        <script src="js/tablesorter/tables.js"></script>
    </head>

    <body>

        <div id="wrapper">

            <!-- Include Sidebar -->
            <?php include './etc/layout/sidebar.php'; ?>


            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Dashboard <small >OSINT Tool Suite</small></h1>
                        <ol class="breadcrumb">
                            <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
                        </ol>
                        <!-- <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Welcome to my OSINT Tool Suite! 
                        </div>
                        <!-- insert code here -->

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <i class="fa fa-comments fa-5x"></i>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <p class="announcement-heading">1</p>
                                                <p class="announcement-text">Current Project</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/Osint-Suite/etc/prog/Twintell/twintell_index.php">
                                        <div class="panel-footer announcement-bottom">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    View Twintell
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <i class="fa fa-arrow-circle-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>  
                </div><!-- /#page-wrapper -->

            </div><!-- /#wrapper -->
    </body>
</html>
