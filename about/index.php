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
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic' rel='stylesheet' type='text/css'>


    <style>



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
                    <img src="../img/KCL_logo.png" alt="KCL Logo" height="22">
                </a>
                <a class="navbar-brand" style="color:white;text-transform:uppercase;letter-spacing:0.03em;font-size:16px;" href="../welcome">Museum <span style="font-size:12px;">of</span> Life Sciences</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../collections">collections</a>
                    </li>
                    <li>
                        <a href="../events">what's on</a>
                    </li>
                    <li>
                        <a style="color:#fff;" href="#">about</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div style="background:#F8F8F8;border-radius:8px;" class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About

                </h1>
            </div>
        </div>
        <!-- /.row -->

      <div class="row">
        <div class="container">
          <p>The Museum of Life Sciences exists to celebrate and explain the diversity of animal and plant life in the context of the biological and health sciences.</p><p>
          This little-known part of the heritage of King’s College London is the first new museum in the College for over 100 years. Opened in 2009, it brings together historic biological and pharmaceutical collections from the constituent colleges that make up the modern College.</p><p>
          Specimens date from the early 19th century to the present and include skeletal material, fluid-preserved items, taxidermy, dried material, fossils and fossil casts, microscope and 35mm slides as well as a herbarium of plant material. They come from a variety of habitats around the world from the arctic to the tropics, from the deep sea to the Russian steppes. The material has been collected mainly for teaching and research over the history of the college.</p><p>
          The Museum is housed adjacent to the Gordon Museum on the Guy’s Site. It is used by staff and students from King’s and other academic organizations for a range of activities including practical classes, tutorials, seminars and lectures, private study by students at the College, research by students and other workers, exhibitions and the care and curation of specimens. Students are able to study plants and animals of medical importance as well as broadening their knowledge of the Life Sciences.</p>

          <br>

          <h3>Supporting the Museum</h3>
          <p>The Museum currently has no recurrent budget for ongoing expenses and only one part-time member of staff. Resources and help are needed to develop the educational use of the Museum and to expand the collection.</p><p>
          Funds are needed especially for:
          <ul><li><strong>Curation costs</strong>: materials and expertise for restoration and preservation</li>
          <li><strong>Cataloguing and digitizing</strong>: photographic equipment and software</li>
          <li><strong>Outreach</strong>: acquisition and development of materials suitable for work with local schools and colleges</li>
          <li><strong>Promotion</strong>: production of literature, internet-based information and other materials</li>
          <li><strong>Teaching and training</strong>: purchase of equipment, materials and development of teaching aids</li>
          </ul>
          <p>A small band of volunteers, including present and former students as well as former staff, currently provides invaluable help. Each volunteer comes as their commitments allow. We try to match them with their interests and experience and to give them the opportunity to acquire new skills.</p>

          <br>

          <h3>Visits and Contact</h3>
          <p>The Museum is open to members of the college and their invited guests during the opening hours of the Gordon Museum. We regret that the Museum is not currently accesible to the public, but we do plan to open to the public in future when funding allows. Visits by academically-related non-members of the College can be arranged with the Curator.</p><p>
          The Museum is situated in the Hodgkin Building, on the Guy’s Site of King’s College. It is close to London Bridge underground and mainline stations and is well served by buses.</p><p>
          Access is via the Gordon Museum, Hodgkin Building unless by prior agreement when non-step access direct from the Memorial Garden in the centre of the site can be arranged.</p>

          <br>

          <h3>Contact the Curator</h3>

          <p>
          <strong>Dr Gillian Sales</strong><br>
          Museum of Life Sciences<br>
          Department of Anatomy & Human Sciences<br>
          King’s College London<br>
          Hodgkin Building<br>
          Guy’s Campus<br>
          London SE1 1UL<br>
          Email: gillian.sales@kcl.ac.uk
          </p>

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
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../api/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../api/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
