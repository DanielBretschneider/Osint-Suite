
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Shodan</title>

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
                        <h1>Shodan <small>Search Engine for the Internet of Everything</small></h1>
                        <ol class="breadcrumb">
                            <li class="active"><i class="fa fa-dashboard"></i> Shodan Dashboard</li>
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
                                        <h3 class="panel-title"><b><code>GET /shodan/host/{ip}</code></b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <a href="shodan_host.php">Returns all services that have been found on the given host IP.</a>
                                    </div>
                                </div>
                                
                                <!-- timeline -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><b><code>GET /shodan/host/count</code></b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <a href="twintell_usernames.php">Returns total number of hosts that matched specific query.</a>
                                    </div>
                                </div
                                
                                <!-- followers -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><b><code>GET /shodan/host/search</code></b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <a href="twintell_usernames.php">Search Shodan using the same query syntax as the website and use facets to get summary information.</a>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- 2nd COL -->
                            <div class="col-lg-4">
                                
                                <!-- Usernames -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><b><code>GET /shodan/ports</code></b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <a href="twintell_usernames.php">List all ports that Shodan is crawling on the Internet.</a>
                                    </div>
                                </div>
                                
                                <!-- timeline -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><b><code>GET /shodan/protocols</code></b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <a href="twintell_usernames.php">List all protocols that can be used when performing internet scans.</a>
                                    </div>
                                </div
                                
                                <!-- followers -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><b><code>GET /shodan/scan</code></b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <a href="twintell_usernames.php">Request Shodan to crawl an IP/ netblock</a>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- 3rd COL -->
                            <div class="col-lg-4">
                                
                                <!-- Usernames -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><b><code>GET /dns/resolve</code></b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <a href="twintell_usernames.php">DNS lookup - Look up the IP address for the provided list of hostnames.</a>
                                    </div>
                                </div>
                                
                                <!-- Usernames -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><b><code>GET /tools/myip</code></b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <a href="twintell_usernames.php">Get your current IP address as seen from the Internet.</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div><!-- /.row -->

                        <!-- CODE END -->
                    </div><!-- /#page-wrapper -->

                </div><!-- /#wrapper -->
                </body>
                </html>
