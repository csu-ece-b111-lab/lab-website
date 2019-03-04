<?php
  if (!isset($description)) $description = '';
  if (! $title) {$title = "Electrical and Computer Engineering - College of Engineering - Colorado State University";} else {$title = $title . " - Electrical and Computer Engineering - College of Engineering - Colorado State University";}
  if (! $description) {$description = "Electrical and Computer Engineering - College of Engineering - Colorado State University";} else {$description = $description . "";}
  $basehref = "/ece/";
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<!-- Global site tag (gtag.js) - Google Analytics --> <!-- John Seim added Google Analytics code on 2/1/2018 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42716220-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-42716220-1');
</script>
<!-- Mobile Devices -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo $title ?></title>
<meta name="description" content="<?php echo $description ?>" />
<!--loading html5 shiv to provide older version of IE with support for html5 tags -->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<!-- Stylesheets -->
<link href="<?php echo $basehref ?>_support/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $basehref ?>_support/css/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css" media="screen" />
<!--<link href="_support/images/favicon.ico" rel="shortcut icon" />-->
<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo $basehref ?>_support/js/bootstrap.min.js" type="text/javascript"></script>

<!--Modules -->
<link href="<?php echo $basehref ?>_support/modules/slides/slides.css" rel="stylesheet" type="text/css" media="screen" />
<script src="<?php echo $basehref ?>_support/modules/slides/slides.min.js" type="text/javascript"></script>

<script src="<?php echo $basehref ?>_support/js/script.js" type="text/javascript"></script>

<meta name="google-site-verification" content="W4TWYHfjWoREE6Vl1sC3Jowwj9r_i43HwiWpSodjnyg" /> <!-- John Seim added this line on April 16, 2015 so that google can verify ownership of the account -->

</head>

<!-- IE Dectection, modified for Dreamweaver -->

<!--[if lt IE 7]> <body class="lt-ie10 lt-ie9 lt-ie8 lt-ie7 ie"> <![endif]-->
<!--[if IE 7]>    <body class="lt-ie10 lt-ie9 lt-ie8 ie"> <![endif]-->
<!--[if IE 8]>    <body class="lt-ie10 lt-ie9 ie"> <![endif]-->
<!--[if IE 9]>    <body class="lt-ie10 ie"> <![endif]-->
<!--[if gt IE 8 | !(IE)]><!--> <body> <!--<![endif]-->

<!-- noscript styles, loaded after the body tag for compatibility -->
<noscript>
  <style type="text/css">
    @import url("<?php echo $basehref ?>_support/css/no-js.css");
  </style>
</noscript>

<!-- Start of document -->

  <div class="content container">
  
  	<!-- replaced <div class="header"> with the following code from Chris Weller -->
    <div style="background:#1e4d2b;"> <!-- added: style="background:#1e4d2b;" -->
	
		<div style="display:inline-block; padding:5px 10px 5px 10px;"> <!-- added: <div style="display:inline-block; padding:5px 10px 5px 10px;"> -->
			<section id="BrandLogo">
				<script>(function(){BrandLogo.style.cssText = 'opacity:0; height:67px; overflow:hidden;'})();</script>
				<h1><a href="http://colostate.edu">Colorado State University</a></h1>
				<h2><a href="http://www.engr.colostate.edu/ece">Electrical and Computer Engineering</a></h2>
				<script src="//static.colostate.edu/logo/reslogo/logo.min.js" async defer></script>
				<script>
					var logosettings = {
						screenSM: 480
						,screenMD: 768
						,screenLG: 992
						,baseSize: 380
						,fontSize: 'large' //large or small (default is small)
					};
				</script>
			</section>
		</div> <!-- added: </div> -->
		<div style="display:inline-block; float:right; padding:24px 15px 24px 15px;"> <!-- added: <div style="display:inline-block; float:right; padding:24px 15px 24px 15px;"> -->
			<a style="background-color:#b4d19a; font-size:18px; color:#1e4d2b; padding:8px 13px 8px 13px;" href="https://advancing.colostate.edu/ECE" target="_blank">Give</a> <!-- added: <a style="background-color:#b4d19a; font-size:18px; color:#1e4d2b; padding:8px 13px 8px 13px;" href="https://advancing.colostate.edu/ECE" target="_blank">Give</a> -->
		</div> <!-- added: </div> -->
		<div style="clear:both;"></div> <!-- added: <div style="clear:both;"></div> -->
	
    </div>
	<!-- end -->
	
    <?php include('top-nav-new.php'); ?> <!-- changed 'top-nav.php' to 'top-nav-new.php' -->

  </div>
