<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $pageTitle;?></title>
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="includes/css/main.css">
     <link rel="stylesheet" href="includes/css/style.css">
    <link rel="stylesheet" href="includes/css/responsive.css">
    <script src="../ckeditor/ckeditor.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script>
	function initialize() {
	  var mapProp = {
		center:new google.maps.LatLng(51.508742,-0.120850),
		zoom:5,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
    <!--[if IE]><script type="text/javascript" src="excanvas.js"></script><![endif]-->
    <script type="text/javascript" src="includes/canvas/html5-canvas-drawing-app.js"></script>

  </head>
  <body>
    <header>
      <a href="index.php" id="logo">
		
        <h1><img height= "50" width= "50" src="includes/img/logo.jpg"> Dodo 手作</h1>
        <h2>陶瓷專賣店</h2>
       
      </a>
      <nav>
        <ul>
           <li><a href="about.php" <?php if ($page == about) echo 'class="selected"'; ?>>關於</a></li>
 		   <li><a href="items.php" <?php if ($page == items) echo 'class="selected"'; ?>>產品</a></li>  
 		   <li><a href="diy.php" <?php if ($page == diy) echo 'class="selected"'; ?>>DIY</a></li>
           <li><a href="contact.php"<?php if ($page == contact) echo 'class="selected"'; ?>>聯絡</a></li>
        </ul>
      </nav>
    </header>