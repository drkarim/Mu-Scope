<!--

Rashed Karim KCL 2016

The following template is taken from Boostrap portfolio template:
1 Col Portfolio - Start Bootstrap Template

-->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Bootstrap Core CSS -->
    <link href="../api/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../api/bootstrap/css/1-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts -->
    <link href="../api/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic' rel='stylesheet' type='text/css'>


    <style>

    .intbut .btnl:hover,
    .intbut .btnl:focus {
      padding: 2px 13px 3px 13px;
      text-decoration: none;
      background: #F23B3E;
      color: #f8f8f8;
    }

    .intbut .btnl {
      padding: 3px 7px 3px 7px;
      background: rgba(0, 0, 0, 0);
      color: rgb(105, 105, 105);
    }

    </style>
</head>
<?php

    include_once("../api/kcl/ServerLogs.php");
    include_once("../api/kcl/XMLConfig.php");

    // Read the XML config file
    $SPECIMEN = 'vertebrates';
    $xml_config = new XMLConfig('../xml/museum.xml');
    $specimen_data = $xml_config->GetSpecimenDataDigest($SPECIMEN);



?>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="../welcome">
                      <img src="../img/KCL_logo.png" alt="KCL Logo" height="22" style="filter: invert(60%);">
                </a>
                <a class="navbar-brand" id="mls" style="color:rgba(0, 0, 0, 0.7);text-transform:uppercase;letter-spacing:0.03em;" href="../welcome">Museum <span id="of">of</span> Life Sciences</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../collections">collections</a>
                    </li>
                    <li>
                        <a style="color:rgba(0, 0, 0, 0.7);;" href="#">what's on</a>
                    </li>
                    <li>
                        <a href="../about">about</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <section id="events">
    <div style="border-radius:8px;" class="container">

        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12 text-center">
              <h2 style="color:#F23B3E">What's On</h2>
              <hr class="star-primary">
          </div>
        </div>
        <!-- /.row -->
        <p class="text-center">No events at the moment, please come back later. Follow us on social media, to keep up to date:<br><br>
        <span class="intbut" data-dismiss="modal" style=" display:inline; padding-bottom: 30px;"><a href="#a1" id="afterarrow" style="font-size:18px;" class="btnl page-scroll"><f class="fa fa-facebook"></f> <span id="beforearrow">&nbsp;Facebook</span></a></span>
        <span class="intbut" data-dismiss="modal" style=" display:inline; padding-bottom: 30px;"><a href="#a1" id="afterarrow" style="font-size:18px;" class="btnl page-scroll"><f class="fa fa-twitter"></f> <span id="beforearrow">&nbsp;Twitter</span></a></span>
        <span class="intbut" data-dismiss="modal" style=" display:inline; padding-bottom: 30px;"><a href="#a1" id="afterarrow" style="font-size:18px;" class="btnl page-scroll"><f class="fa fa-youtube"></f> <span id="beforearrow">&nbsp;Youtube</span></a></span>
        <span class="intbut" data-dismiss="modal" style=" display:inline; padding-bottom: 30px;"><a href="#a1" id="afterarrow" style="font-size:18px;" class="btnl page-scroll"><f class="fa fa-google-plus"></f> <span id="beforearrow">&nbsp;Google +</span></a></span>
      </p>
        <!-- Pagination -->
        <!-- <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>

                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!-- /.row -->
      </section>
        <hr>

        <!-- Footer -->
        <footer>
          <div class="row">
              <div class="col-lg-12 text-center">
                  <p>Copyright &copy; 2016 Rashed Karim, Kawal Rhode and Tobias Whetton. All Rights Reserved.</p>
              </div>
          </div>
          <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../api/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../api/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
