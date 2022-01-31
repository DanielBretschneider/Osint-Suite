
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
            <?php
            # include navbar    
            include '../../layout/sidebar.php';

            # include API keys
            include './shodanAPISettings.php';

            # include formatted
            include '../../base/format/Formatter.php';

            # include twiter API Exchange
            #require_once './shodanAPISettings.php.php';
            ?>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>Shodan <small>Search Engine for the Internet of Everything</small></h1>
                        <ol class="breadcrumb">
                            <li class="active"><i class="fa fa-dashboard"></i> Returns all services that have been found on the given host IP.</li>
                        </ol>
                        <!-- <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Welcome to my OSINT Tool Suite! 
                        </div>
                        <!-- ========== CODE ============= -->

                        <!-- Username search form -->
                        <div class="panel panel-default">
                            <div class="panel-heading"><b>Retrieve information on host</b></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <form action="shodan_host.php" method="post">
                                        <input class="form-control" name="ip">
                                        <p class="help-block">Input IP Address of desired host</p>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- List starts here -->
                        <br />
                        <?php
                        if (isset($_POST['username'])) {
                            # define URL for API request
                            $url = "https://api.twitter.com/1.1/users/search.json";

                            # Request Method GET/POST
                            $requestMethod = "GET";

                            # username from textbox
                            $uname = $_POST['username'];

                            # append username to API request URL
                            $getfield = '?q=' . $uname;

                            # twitter API object 
                            $twitter = new TwitterAPIExchange($settings);

                            # data returned from API
                            $data = $twitter->setGetfield($getfield)
                                    ->buildOauth($url, $requestMethod)
                                    ->performRequest();

                            # parse JSON data into str_arr
                            $namelist = twitter_parse_username_json($data);
                        }
                        ?>

                        <!-- results (usernames as HTML list) will be printed here -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>Results</b>
                            </div>
                            <div class="panel-body">
                                <?php
                                # print string array
                                print_string_array_username_list($namelist);
                                ?>
                            </div>
                        </div>

                        <!-- ========= CODE END =============-->
                    </div><!-- /#page-wrapper -->

                </div><!-- /#wrapper -->
                </body>
                </html>
