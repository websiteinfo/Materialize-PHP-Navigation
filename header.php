  <?php 
    $directoryURI = $_SERVER['REQUEST_URI'];
    $path = parse_url($directoryURI, PHP_URL_PATH);
    $components = explode('/', $path);
    $first_part = basename($_SERVER['PHP_SELF'], ".php");
  ?>
  
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>


	  <nav>
      <div class="container">
    		<div class="nav-wrapper">
    		  <a href="#!" class="brand-logo center">Materialize active navigation</a>
    		  <ul class="left hide-on-med-and-down">
    			<li class="<?php if ($first_part=="index") {echo "active"; } else  {echo "noactive";} ?>"><a href="index.php">Home</a></li>
    			<li class="<?php if ($first_part=="test-1") {echo "active"; } else  {echo "noactive";} ?>"><a href="test-1.php">Test-1</a></li>
    			<li class="<?php if ($first_part=="test-2") {echo "active"; } else  {echo "noactive";} ?>"><a href="test-2.php">Test-2</a></li>
    		  </ul>
    		</div>
      </div>      
	  </nav>