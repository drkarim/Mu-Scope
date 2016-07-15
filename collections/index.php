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
      background: #fbf8f2;
    }

    .nav.navbar-nav li a {
        color: rgba(0, 0, 0, 0.5);
    }

    .nav.navbar-nav li a:hover,
    .nav.navbar-nav li a:active {
        color: rgba(0, 0, 0, 0.7);
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
        color: #F23B3E;
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
        border:none;
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
        outline:none !important;
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
        top: 90%;
        width: 100%;
        height: 20px;
        margin-top: -20px;
        text-align: center;
        font-size: 20px;
    }

    #portfolio .portfolio-item .portfolio-link .caption .caption-content i {
        margin-top: -12px;
        font-size: 18px;
        color: rgba(0, 0, 0, 0.8);
        text-transform: uppercase;
        font-style: normal;
        padding: 2px 10px 4px 10px;
        border-radius: 20px;
        -webkit-transition:  .3s ease-in-out;
        -moz-transition:  .3s ease-in-out;
        transition:  .3s ease-in-out;
        background: rgba(230, 226, 215, 0.8);
        font-family: 'Crimson Text', serif;
    }

    #portfolio .portfolio-item .portfolio-link .caption:hover .caption-content i {
        background: rgba(242, 59, 62, 0.8);
        color: #F8F8F8;
        padding: 3px 15px 5px 15px;
          -webkit-filter: blur(0px);
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
        text-align: center;
        background: rgba(177, 175, 168, 0.5);
        -webkit-backdrop-filter: blur(12px);
        -moz-backdrop-filter: blur(12px);
        -backdrop-filter: blur(12px);
        background-clip: border-box;
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 0;
        border-radius: 0;


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
        background-color: #F8F8F8;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .portfolio-modal .close-modal .lr .rl {
        z-index: 1052;
        width: 1px;
        height: 75px;
        background-color: #F8F8F8;
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
      background: #F8F8F8;
      color: grey;
    }

    .intbut .btnl {
      padding: 0px 3px 0px 3px;
      background: rgba(0, 0, 0, 0);
      color: #F8F8F8;
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
                <?php

                    // Read the XML config file
                    
                    //$collection_name = 'zoological';
                    $xml_config = new XMLConfig('../xml/museum.xml');
                    
                    // Get a list of all collections 
                    $collections = $xml_config->GetAllCollections(); 
                    error_log(print_r($collections, true));
                    
                    
                    foreach ($collections as $collection_name)
                    {
                        //error_log("Collection = ".$collection_name);
                        $specimen_data = $xml_config->GetSpecimenDataDigest($collection_name);

                ?>
                    <div class="col-sm-4 portfolio-item">
                        <a href="#<?php echo $collection_name; ?>portfolio" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i><?php echo $collection_name; ?></i>
                                </div>
                            </div>
                            <img src="../img/<?php echo $collection_name; ?>.png" class="img-responsive" alt="">
                        </a>
                    </div>
                <?php 
                    } 
                ?>
                
              </div>
        </div>
    </section>

    <?php

                
                foreach ($collections as $collection_name)
                {
                    //error_log("Collection = ".$collection_name);
                    $specimen_data = $xml_config->GetSpecimenDataDigest($collection_name);

                ?>
        <!-- Portfolio Modals -->
        <div class="portfolio-modal modal fade" id="<?php echo $collection_name; ?>portfolio" tabindex="-1" role="dialog" aria-hidden="true">
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

                                                <h1 class="page-header" style="color:#F8F8F8;"><?php echo ucwords($collection_name); ?> Collection<br>

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
                                                        <div style="background:#fbf8f2;border-radius:4px;padding-top:7px;padding-bottom:20px;margin: 0 0px 0 0px;">
                                                        <?php
                                                                $specimen_name = $specimen['specimen_name'];

                                                                // URL for each specimen button is constructed here
                                                                $url = '../specimen/specimen.php?specimen_type='.$collection_name.'&specimen_name='.$specimen_name.'&specimen_id='.$specimen_id;
                                                        ?>
                                                            <a href="<?php echo $url; ?>" id="polaroid">
                                                                <?php


                                                                    if ($specimen['stl_description'] == '')
                                                                        $stl_icon = '';
                                                                    else
                                                                        $stl_icon = 'fa fa-dot-circle-o';

                                                                ?>
                                                                <?php


                                                                    if ($specimen['dicom_description'] == '')
                                                                        $dicom_icon = '';
                                                                    else
                                                                        $dicom_icon = 'fa fa-plus-circle';

                                                                ?>
                                                                <div class="text-right" style="padding: 0 7px 7px 7px;letter-spacing: 2px; color:rgba(0, 0, 0, 0.2);">
                                                                    &nbsp;<i class="<?php echo $stl_icon; ?>" alt"This specimen has a 3D model"></i>
                                                                    <i class="<?php echo $dicom_icon; ?>" alt"This specimen has a DICOM model"></i>
                                                                </div>
                                                                <?php


                                                                    if ($specimen['image'] == '')
                                                                        $image_url = '../img/img_placeholder_700_300.png';
                                                                    else
                                                                        $image_url = $specimen['image'];

                                                                ?>
                                                                <img class="img-responsive" src="<?php echo $image_url; ?>" alt="" style="max-width: 100%;">



                                                            <h2 style="font-size:33px;"><?php echo $specimen['title']; ?></h2>
                                                            <p><?php echo $specimen['subtitle']; ?></p>

                                                                </a>
                                                        </div>
                                                    </div>

                                                <?php

                                            }       // end php foreach
                                        ?>





                                    </div>
                                    <div class="col-md-12 container">
                                        <br>
                                        <hr>
                                    <span class="intbut" data-dismiss="modal" style=" display:inline; padding-bottom: 30px;"><a href="#a1" id="afterarrow" style="font-size:18px;" class="btnl page-scroll"><f class="fa fa-times-circle"></f> <span id="beforearrow">close&nbsp;</span></a></span>

                         


                              <footer>
                                  <div class="row">
                                      <div class="col-lg-12 text-center">
                                          <p style="color:#F8F8F8">Copyright &copy; 2016 Rashed Karim, Kawal Rhode and Tobias Whetton. All Rights Reserved.</p>
                                      </div>
                                  </div>
                                  <!-- /.row -->
                              </footer>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php 
                                    
            }  // end foreach iterating over collections
            
    ?>



    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../api/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../api/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
