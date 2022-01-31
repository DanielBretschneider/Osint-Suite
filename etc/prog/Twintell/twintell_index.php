
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Twintell</title>

        <!-- Bootstrap core CSS -->
        <link href="../../../css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="../../../css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="../../../font-awesome/css/font-awesome.min.css">
        <!-- Page Specific CSS -->
        <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">

        <!-- JavaScript -->
        <script src="../../../js/jquery-1.10.2.js"></script>
        <script src="../../../js/bootstrap.js"></script>

        <!-- Page Specific Plugins -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
        <script src="../../../js/morris/chart-data-morris.js"></script>
        <script src="../../../js/tablesorter/jquery.tablesorter.js"></script>
        <script src="../../../js/tablesorter/tables.js"></script>
    </head>

    <body>

        <div id="wrapper">

            <!-- Include Sidebar -->
            <?php include '../../layout/sidebar.php'; ?>


            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Twintell <small>Twitter Intelligence</small></h1>
                        <ol class="breadcrumb">
                            <li class="active"><i class="fa fa-dashboard"></i> Twintell Dashboard</li>
                        </ol>
                        <!-- <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Welcome to my OSINT Tool Suite! 
                        </div>
                        <!-- CODE -->

                        <div class="row">
                            
                            <!-- 1st COL -->
                            <div class="col-lg-4">
                                
                                <!-- Usernames -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><b>GET users/search</b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <a href="twintell_usernames.php">Search and get users, or companies.</a>
                                    </div>
                                </div>
                                
                                <!-- timeline -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><b>GET statuses/user_timeline</b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <a href="twintell_usernames.php">Returns a collection of most recent Tweets posted by a user.</a>
                                    </div>
                                </div
                                
                                <!-- followers -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><b>GET followers/list</b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <a href="twintell_usernames.php">Returns a cursored collection of user objects for users following the specified user.</a>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- 2nd COL -->
                            <div class="col-lg-4">
                                
                                <!-- Usernames -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><b>GET friends/list</b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <a href="twintell_usernames.php">Returns friends of specific user.</a>
                                    </div>
                                </div>
                                
                                <!-- timeline -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><b>GET account/settings</b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <a href="twintell_usernames.php">Returns settings for the authenticating user.</a>
                                    </div>
                                </div
                                
                                <!-- followers -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><b>GET trends/place</b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <a href="twintell_usernames.php">Returns the top 50 trending topics for a specific <code>id</code>, if trending information is available for it.</a>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- 3rd COL -->
                            <div class="col-lg-4">
                                
                                <!-- Usernames -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><b>GET saved_searches/list</b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <a href="twintell_usernames.php">Returns the authenticated user's saved search queries.</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div><!-- /.row -->

                        <!-- CODE END -->
                    </div><!-- /#page-wrapper -->

                </div><!-- /#wrapper -->
                </body>
                </html>
