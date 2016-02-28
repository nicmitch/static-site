<?php //header("X-UA-Compatible: IE=edge"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lng; ?>">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Italian Food</title>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

	</head>
	<body class="<?php echo isset($bodyClass) ? $bodyClass : '' ; ?>">
		<div id="skrollr-body">
			<header id="header-main">
	              
	            <nav class="navbar navbar-default">

				  <div class="container">

				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-main-cont" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar first"></span>
				        <span class="icon-bar second"></span>
				        <span class="icon-bar third"></span>
				      </button>
				    </div>

				    <div class="collapse navbar-collapse" id="nav-main-cont">
				      <ul class="nav navbar-nav" id="nav-main">
				        <li><a <?php echo $bodyClass == 'home' ? "class=\"goTo\" " : ""; ?>href="<?php echo $bodyClass != 'home' ? "../{$lng}" : ""; ?>#intro-white">About</a></li>
				        <li><a <?php echo $bodyClass == 'home' ? "class=\"goTo\" " : ""; ?>href="<?php echo $bodyClass != 'home' ? "../{$lng}" : ""; ?>#categories-cont">Categories</a></li>
				        <li><a <?php echo $bodyClass == 'home' ? "class=\"goTo\" " : ""; ?>href="<?php echo $bodyClass != 'home' ? "../{$lng}" : ""; ?>#services-cont">Service</a></li>
				        <li><a <?php echo $bodyClass == 'home' ? "class=\"goTo\" " : ""; ?>href="<?php echo $bodyClass != 'home' ? "../{$lng}" : ""; ?>#aboutus-cont">Contact</a></li>
				        <li class="dropdown lng">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">English</a>
				          <ul class="dropdown-menu">
				            <li><a href="../ru/">Russian</a></li>
				            <li><a href="../jp/">Japan</a></li>
				            <li><a href="../fr/">Francais</a></li>
				          </ul>
				        </li>
				      </ul>
				    </div>

				  </div>

				</nav>
			</header>
