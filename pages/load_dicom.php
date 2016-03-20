<!DOCTYPE html>
<html>

<head>
<?php 
	    include_once("../api/kcl/ServerLogs.php");
		include_once("../api/kcl/XMLConfig.php");


?>
<title></title>
<meta charset="UTF-8">
<meta name="description" content="DICOM Web Viewer (DWV) simple version">
<meta name="keywords" content="DICOM,HTML5,JavaScript,medical,imaging,DWV">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link type="text/css" rel="stylesheet" href="../../api/dwv/css/style.css" />
<link type="text/css" rel="stylesheet" href="../../api/dwv/ext/jquery-mobile/jquery.mobile-1.4.5.min.css" />
<!-- mobile web app -->
<meta name="mobile-web-app-capable" content="yes" />
<link rel="shortcut icon" sizes="16x16" href="../../api/dwv/resources/icons/dwv-16.png" />
<link rel="shortcut icon" sizes="60x60" href="../../api/dwv/resources/icons/dwv-60.png" />
<link rel="shortcut icon" sizes="128x128" href="../../api/dwv/resources/icons/dwv-128.png" />
<!-- apple specific -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<link rel="apple-touch-icon" sizes="16x16" href="../../api/dwv/resources/icons/dwv-16.png" />
<link rel="apple-touch-icon" sizes="60x60" href="../../api/dwv/resources/icons/dwv-60.png" />
<link rel="apple-touch-icon" sizes="128x128" href="../../api/dwv/resources/icons/dwv-128.png" />
<!-- Third party -->
<script type="text/javascript" src="../../api/dwv/ext/jquery/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../../api/dwv/ext/jquery-mobile/jquery.mobile-1.4.5.min.js"></script>
<!-- decoders -->
<script type="text/javascript" src="../../api/dwv/ext/pdfjs/jpx.js"></script>
<script type="text/javascript" src="../../api/dwv/ext/pdfjs/util.js"></script>
<script type="text/javascript" src="../../api/dwv/ext/pdfjs/arithmetic_decoder.js"></script>
<script type="text/javascript" src="../../api/dwv/ext/rii-mango/lossless-min.js"></script>
<script type="text/javascript" src="../../api/dwv/ext/notmasteryet/jpg.js"></script>
<!-- Local -->
<script type="text/javascript" src="../../api/dwv/src/app/application.js"></script>
<script type="text/javascript" src="../../api/dwv/src/app/toolboxController.js"></script>
<script type="text/javascript" src="../../api/dwv/src/app/viewController.js"></script>
<script type="text/javascript" src="../../api/dwv/src/dicom/dicomParser.js"></script>
<script type="text/javascript" src="../../api/dwv/src/dicom/dictionary.js"></script>
<script type="text/javascript" src="../../api/dwv/src/gui/filter.js"></script>
<script type="text/javascript" src="../../api/dwv/src/gui/browser.js"></script>
<script type="text/javascript" src="../../api/dwv/src/gui/generic.js"></script>
<script type="text/javascript" src="../../api/dwv/src/gui/help.js"></script>
<script type="text/javascript" src="../../api/dwv/src/gui/html.js"></script>
<script type="text/javascript" src="../../api/dwv/src/gui/layer.js"></script>
<script type="text/javascript" src="../../api/dwv/src/gui/loader.js"></script>
<script type="text/javascript" src="../../api/dwv/src/gui/style.js"></script>
<script type="text/javascript" src="../../api/dwv/src/gui/tools.js"></script>
<script type="text/javascript" src="../../api/dwv/src/gui/undo.js"></script>
<script type="text/javascript" src="../../api/dwv/src/image/filter.js"></script>
<script type="text/javascript" src="../../api/dwv/src/image/geometry.js"></script>
<script type="text/javascript" src="../../api/dwv/src/image/image.js"></script>
<script type="text/javascript" src="../../api/dwv/src/image/luts.js"></script>
<script type="text/javascript" src="../../api/dwv/src/image/view.js"></script>
<script type="text/javascript" src="../../api/dwv/src/image/reader.js"></script>
<script type="text/javascript" src="../../api/dwv/src/io/file.js"></script>
<script type="text/javascript" src="../../api/dwv/src/io/url.js"></script>
<script type="text/javascript" src="../../api/dwv/src/math/bucketQueue.js"></script>
<script type="text/javascript" src="../../api/dwv/src/math/point.js"></script>
<script type="text/javascript" src="../../api/dwv/src/math/scissors.js"></script>
<script type="text/javascript" src="../../api/dwv/src/math/shapes.js"></script>
<script type="text/javascript" src="../../api/dwv/src/math/stats.js"></script>
<script type="text/javascript" src="../../api/dwv/src/tools/draw.js"></script>
<script type="text/javascript" src="../../api/dwv/src/tools/ellipse.js"></script>
<script type="text/javascript" src="../../api/dwv/src/tools/filter.js"></script>
<script type="text/javascript" src="../../api/dwv/src/tools/info.js"></script>
<script type="text/javascript" src="../../api/dwv/src/tools/line.js"></script>
<script type="text/javascript" src="../../api/dwv/src/tools/livewire.js"></script>
<script type="text/javascript" src="../../api/dwv/src/tools/rectangle.js"></script>
<script type="text/javascript" src="../../api/dwv/src/tools/roi.js"></script>
<script type="text/javascript" src="../../api/dwv/src/tools/scroll.js"></script>
<script type="text/javascript" src="../../api/dwv/src/tools/toolbox.js"></script>
<script type="text/javascript" src="../../api/dwv/src/tools/undo.js"></script>
<script type="text/javascript" src="../../api/dwv/src/tools/windowLevel.js"></script>
<script type="text/javascript" src="../../api/dwv/src/tools/zoomPan.js"></script>
<script type="text/javascript" src="../../api/dwv/src/utils/string.js"></script>
<script type="text/javascript" src="../../api/dwv/src/utils/uri.js"></script>
<script type="text/javascript" src="../../api/dwv/src/utils/thread.js"></script>

<!-- Launch the app -->
<script type="text/javascript" src="appgui.js"></script>
<!-- <script type="text/javascript" src="applauncher.js"></script> --> 
</head>
<?php 
	
	$xml_config = new XMLConfig('../xml/museum.xml');

	
	// Extract dicom   
	$specimen_id = $_GET['specimen_id']; 	   // under ../dicom 
	

	$description = $xml_config->GetSpecimenData($specimen_id, "description");

?> 

<body>

<!-- Main page -->
<div data-role="page" data-theme="b">

<!-- Main content -->
<div data-role="content">

<!-- DWV -->
<div id="dwv">

<!-- Toolbar -->
<div class="toolbar"></div>

<!-- Layer Container -->
<div class="layerContainer">
<canvas class="imageLayer">Only for HTML5 compatible browsers...</canvas>

</div><!-- /layerContainer -->

<div id="specimen_description"><?php echo $description; ?></div>

</div><!-- /dwv -->

</div><!-- /content -->

</div><!-- /page -->

<script>
	/**
	 * Application launcher.
	 */

	// check browser support
	dwv.browser.check();

	// launch when page is loaded
	$(document).ready( function()
	{
	    // main application
	    var myapp = new dwv.App();
	    // initialise the application
	    myapp.init({
	        "containerDivId": "dwv",
	        "fitToWindow": true,
	        "gui": ["tool"],
	        "tools": ["Scroll", "Zoom/Pan", "Window/Level"],
	        "isMobile": true
	    });
	    dwv.gui.appendResetHtml(myapp);

	    var dicom_folder = <?php echo "'".$specimen_id."'" ?>; 
	    var dicom_file_list = [];

	  	$.get("read_dicom_images.php?folder="+dicom_folder, function(data, status){
        		
        		/*data = ["../dicom/hedgehog/1.3.6.1.4.1.12842.1.1.14.2.20160129.173014.188.2644821263", 
	    				"../dicom/hedgehog/1.3.6.1.4.1.12842.1.1.14.2.20160129.173014.188.4132043441", 
	    				"../dicom/hedgehog/1.3.6.1.4.1.12842.1.1.14.2.20160129.173014.189.1273933236"];		*/
        		dicom_file_list = data; 		
        		/*
        			$.each(data, function(i, dicom_file) {
        				dicom_file_list = dicom_file
        			}
        		*/
        		dicom_file_list = $.parseJSON(data);
        		myapp.loadURLs(dicom_file_list);

    	});
	    
	    /*myapp.loadURLs(["../dicom/hedgehog/1.3.6.1.4.1.12842.1.1.14.2.20160129.173014.188.2644821263", 
	    				"../dicom/hedgehog/1.3.6.1.4.1.12842.1.1.14.2.20160129.173014.188.4132043441", 
	    				"../dicom/hedgehog/1.3.6.1.4.1.12842.1.1.14.2.20160129.173014.189.1273933236"]);*/
	    
	});
</script>

</body>
</html>
