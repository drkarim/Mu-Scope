<!--

Rashed Karim and Tobias Whetton KCL 2016

The following has been heavily modified from the Boostrap portfolio template:
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
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic' rel='stylesheet' type='text/css'>

    <!-- Custom Page Style (to be placed in CSS file once happy with changes) -->
    <style>

    .navbar {
      border-bottom: none;
      -webkit-backdrop-filter: blur(12px);
      -moz-backdrop-filter: blur(12px);
      -backdrop-filter: blur(12px);
      background: rgba(0, 0, 0, 0.05);
      -webkit-transition:  .3s ease-in-out;
      -moz-transition:  .3s ease-in-out;
      transition:  .3s ease-in-out;
      transition-delay: 2s;
    }

    .navbar .container {
      opacity: 0.4;
      -webkit-transition:  .3s ease-in-out;
      -moz-transition:  .3s ease-in-out;
      transition:  .3s ease-in-out;
    }

    .navbar .container:hover {
      opacity: 1;
    }

    .navbar:hover {
      background: #F23B3E;
      -webkit-transition:  .3s ease-in-out;
      -moz-transition:  .3s ease-in-out;
      transition:  .3s ease-in-out;
    }

    body {
        background:#F8F8F8;
    }

    </style>


    <!--Unity Integration -->
    <link rel="shortcut icon" href="T../stl/9a46016fc7074e609b83421bdcc6c865/TemplateData/favicon.ico" />
    <script src="../stl/9a46016fc7074e609b83421bdcc6c865/TemplateData/UnityProgress.js"></script>

</head>

<?php

    include_once("../api/kcl/ServerLogs.php");
    include_once("../api/kcl/XMLConfig.php");

    // Read the XML config file

    $specimen_type = $_GET['specimen_type']; // vertebrates';
    $specimen_name = $_GET['specimen_name'];
    $specimen_id = $_GET['specimen_id'];

    $xml_config = new XMLConfig('../xml/museum.xml');
    $specimen_data = $xml_config->GetSpecimenDataDigest($specimen_type);


    $title = $specimen_data[$specimen_id]['title'];


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
                <a class="navbar-brand page-scroll" href="../starting_page">
                    <img src="../img/KCL_logo.png" alt="KCL Logo" height="22">
                </a>
                <a class="navbar-brand" style="color:white;text-transform:uppercase;letter-spacing:0.03em;font-size:16px;" href="../starting_page">Museum <span style="font-size:12px;">of</span> Life Sciences</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../landing_page">collections</a>
                    </li>
                    <li>
                        <a href="../events">what's on</a>
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
    <div style="background:#F8F8F8;" class="container specimen-div">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
              <h1 style="color:#F23B3E;" class="text-center"><?php echo $title; ?><p class="text-center"><?php echo $specimen_data[$specimen_id]['subtitle']; ?></p></h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page-line -->
        <div class="row text-center">
          <div class="col-md-6 col-md-offset-3">
            <hr>
          </div>
        </div>

        <!-- Picture Taken from the Life Sciences Musuem -->
        <div class="text-center" style="align-items:middle;">
          <?php $image_url = $specimen_data[$specimen_id]['image']; ?>
          <img src="<?php echo $image_url; ?>" style="width:550px; max-width: 100%; display: inline; margin-left: auto; margin-right: auto;">
        </div>

        <!-- Introductory Description -->
        <div class="row text-center">
          <div class="col-md-6 col-md-offset-3">
            <hr><p><?php echo $specimen_data[$specimen_id]['introduction']; ?></p><hr>
          </div>
        </div>


        <!-- Stl Viewer -->
        <h3 class="text-center">Three Dimensional View</h3><br>
        <div class="text-center clear">
          <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="400px" width="550px"></canvas>
          <br>
          <!-- Fullscreen fails to work and logo removed is cleaner -->
          <!-- <div class="logo"></div> -->
          <!-- <div class="fullscreen"><img src="../stl/9a46016fc7074e609b83421bdcc6c865/TemplateData/fullscreen.png" width="38" height="38" alt="Fullscreen" title="Fullscreen" onclick="SetFullscreen(1);" /></div> -->
        </div>

        <!-- Stl-Text -->
        <div class="row text-center">
          <div class="col-md-6 col-md-offset-3">
            <br><p><?php echo $specimen_data[$specimen_id]['stl_description']; ?></p>
            <hr>
          </div>
        </div>

        <!-- Dicom Viewer (not working so dummy image is present at the moment)-->
        <h3 class="text-center">Cross-Sectional View</h3><br>
        <div class="text-center" style="align-items:middle;">
          <img src="../img/dicom_dummy.jpg" style="width:550px; max-width: 100%; display: inline; margin-left: auto; margin-right: auto;">
        </div>

        <!-- Dicom-Text -->
        <div class="row text-center">
          <div class="col-md-6 col-md-offset-3">
            <br><p><?php echo $specimen_data[$specimen_id]['dicom_description']; ?></p>
          </div>
        </div>

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

    <!-- Unity -->
    <script type='text/javascript'>
    var Module = {
      TOTAL_MEMORY: 268435456,
      errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
      compatibilitycheck: null,
      dataUrl: "../stl/9a46016fc7074e609b83421bdcc6c865/Release/hedgehogSkullViewer.data",
      codeUrl: "../stl/9a46016fc7074e609b83421bdcc6c865/Release/hedgehogSkullViewer.js",
      memUrl: "../stl/9a46016fc7074e609b83421bdcc6c865/Release/hedgehogSkullViewer.mem",
    };
    </script>
    <script src="../stl/9a46016fc7074e609b83421bdcc6c865/Release/UnityLoader.js"></script>


    <!-- jQuery -->
    <script src="../api/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../api/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
