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

    body {
      background: #E6E2D7;
    }

    .navbar {
      background: #E6E2D7;
      border-bottom: none;
    }

    .nav.navbar-nav li a {
        color: rgba(0, 0, 0, 0.5);
    }

    .nav.navbar-nav li a:hover,
    .nav.navbar-nav li a:active {
        color: #F23B3E;
    }


    section {
        padding: 100px 0;
    }

    section h2 {
        margin: 0;
        font-size: 3em;
    }

    section.success {
        color: #F8F8F8;
        background: #F23B3E;
    }

    section.success a,
    section.success a:hover,
    section.success a:focus,
    section.success a:active,
    section.success a.active {
        outline: 0;
        color: #2c3e50;
    }

    @media(max-width:767px) {
        section {
            padding: 75px 0;
        }

        section.first {
            padding-top: 75px;
        }
    }

    #portfolio .portfolio-item {
        right: 0;
        margin: 0 0 15px;
        filter: grayscale(100%);
        -webkit-filter: grayscale(100%);
        -webkit-transition: all ease .5s;
        -moz-transition: all ease .5s;
        transition: all ease .5s;
    }

    #portfolio .portfolio-item:hover {
        filter: grayscale(0%);
        -webkit-filter: grayscale(0%);
    }

    #portfolio .portfolio-item .portfolio-link {
        display: block;
        position: relative;
        margin: 0 auto;
        max-width: 400px;
    }

    #portfolio .portfolio-item .portfolio-link .caption {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 1;
        -webkit-transition: all ease .5s;
        -moz-transition: all ease .5s;
        transition: all ease .5s;
    }

    #portfolio .portfolio-item .portfolio-link .caption:hover {
        opacity: 1;
        /*background: rgba(0, 0, 0, 0.3);*/
    }

    #portfolio .portfolio-item .portfolio-link .caption .caption-content {
        position: absolute;
        top: 100%;
        width: 100%;
        height: 20px;
        margin-top: -20px;
        text-align: center;
        font-size: 20px;
    }

    #portfolio .portfolio-item .portfolio-link .caption .caption-content i {
        margin-top: -12px;
        font-size: 20px;
        background: #F8F8F8;
        color: rgba(0, 0, 0, 0.7);
        text-transform: uppercase;
        font-style: normal;
        padding: 2px 8px 4px 8px;
        border-radius: 2px;

    }

    #portfolio .portfolio-item .portfolio-link .caption .caption-content h3,
    #portfolio .portfolio-item .portfolio-link .caption .caption-content h4 {
        margin: 0;
    }

    #portfolio * {
        z-index: 2;
    }

    @media(min-width:767px) {
        #portfolio .portfolio-item {
            margin: 0 0 30px;
        }
    }


    .portfolio-modal .modal-content {
        padding: 100px 0;
        min-height: 100%;
        border-radius: 15px;
        text-align: center;
        background: #fbf8f2;

    }

    .portfolio-modal .modal-content h2 {
        margin: 0;
        font-size: 3em;
    }

    .portfolio-modal .modal-content img {
        margin-bottom: 30px;
    }

    .portfolio-modal .modal-content .item-details {
        margin: 30px 0;
    }

    .portfolio-modal .close-modal {
        position: absolute;
        top: 25px;
        right: 25px;
        width: 75px;
        height: 75px;
        background-color: transparent;
        cursor: pointer;
    }

    .portfolio-modal .close-modal:hover {
        opacity: .3;
    }

    .portfolio-modal .close-modal .lr {
        z-index: 1051;
        width: 1px;
        height: 75px;
        margin-left: 35px;
        background-color: #F23B3E;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .portfolio-modal .close-modal .lr .rl {
        z-index: 1052;
        width: 1px;
        height: 75px;
        background-color: #F23B3E;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .portfolio-modal .modal-backdrop {
        display: none;
        opacity: 0;
    }

    .intbut .btnl:hover,
    .intbut .btnl:focus {
      padding: 2px 7px 3px 7px;
      text-decoration: none;
    }

    .intbut .btnl {
      padding: 0px 3px 0px 3px;
    }

    #polaroid {
      color: rgba(0, 0, 0, 0.7);
    }

    #polaroid:hover {
      text-decoration: none;
      color: #F23B3E;
    }





    </style>
</head>
<?php

    include_once("../api/kcl/ServerLogs.php");
    include_once("../api/kcl/XMLConfig.php");

    // Read the XML config file
    $specimen_type = 'vertebrates';
    $xml_config = new XMLConfig('../xml/museum.xml');
    $specimen_data = $xml_config->GetSpecimenDataDigest($specimen_type);



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
                <a class="navbar-brand" style="color:rgba(0, 0, 0, 0.7);text-transform:uppercase;letter-spacing:0.03em;font-size:16px;" href="../welcome">Museum <span style="font-size:12px;">of</span> Life Sciences</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a style="color:rgb(29, 29, 29);" href="#">collections</a>
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
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 style="color:#F23B3E">Collections</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i>zoological</i>
                            </div>
                        </div>
                        <img src="../img/hedgehog.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i>botanical</i>
                            </div>
                        </div>
                        <img src="../img/hedgehog.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i>pharmaceutical</i>
                            </div>
                        </div>
                        <img src="../img/hedgehog.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i>microscopic</i>
                            </div>
                        </div>
                        <img src="../img/hedgehog.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i>craniofacial</i>
                            </div>
                        </div>
                        <img src="../img/hedgehog.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                  <a href="portfolioModal11" class="portfolio-link" data-toggle="modal">
                      <div class="caption">
                          <div class="caption-content">
                              <i>other</i>
                          </div>
                      </div>
                      <img src="../img/hedgehog.jpg" class="img-responsive" alt="">
                  </a>
                </div>
              </div>
        </div>
    </section>


        <!-- Portfolio Modals -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="modal-body">


                                  <!-- Page Heading -->

                                        <h1 class="page-header" style="color:#F23B3E;">Zoological Collection<br>
                                            <small><small><?php echo ucwords($specimen_type); ?></small></small>
                                        </h1>


                                  <!-- /.row -->

                                  <?php

                                      /*
                                      *   Each specimen loaded from config XML
                                      */
                                      foreach ($specimen_data as $specimen_id => $specimen)
                                      {
                                          ?>
                                              <!-- Project One/Two/Three and so on -->
                                              <div class="col-sm-4">
                                                <div style="background:white;border-radius:4px;padding-top:18px;padding-bottom:20px;margin: 0 0px 0 0px;">
                                                <?php
                                                        $specimen_name = $specimen['specimen_name'];

                                                        // URL for each specimen button is constructed here
                                                        $url = '../specimen/specimen.php?specimen_type='.$specimen_type.'&specimen_name='.$specimen_name.'&specimen_id='.$specimen_id;
                                                ?>
                                                      <a href="<?php echo $url; ?>" id="polaroid">
                                                          <?php


                                                              if ($specimen['image'] == '')
                                                                  $image_url = '../img/img_placeholder_700_300.png';
                                                              else
                                                                  $image_url = $specimen['image'];

                                                          ?>
                                                          <img class="img-responsive" src="<?php echo $image_url; ?>" alt="" style="max-width: 100%;">



                                                      <h2><?php echo $specimen['title']; ?></h2>
                                                      <p><?php echo $specimen['subtitle']; ?></p>

                                                        </a>
                                                  </div>
                                              </div>

                                          <?php

                                      }       // end php foreach
                                  ?>





                            </div>
                              <div class="col-lg-12">
                            <span class="intbut" data-dismiss="modal" style=" display:inline; padding-bottom: 30px;"><a href="#a1" id="afterarrow" style="font-size:18px;" class="btnl page-scroll"><f class="fa fa-times-circle"></f> <span id="beforearrow">close&nbsp;</span></a></span>
                            <hr>
                            </div>



                              <footer>
                                  <div class="row">
                                      <div class="col-lg-12 text-center">
                                          <p>Copyright &copy; 2016 Rashed Karim, Kawal Rhode and Tobias Whetton. All Rights Reserved.</p>
                                      </div>
                                  </div>
                                  <!-- /.row -->
                              </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

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
