<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Portifolio</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/geral.css">
<link rel="stylesheet" href="css/plugins.css">
<link rel="stylesheet" href="css/<?php echo $style;?>.css">
<link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">

</head>
<body>
	<?php include("includes/organisms/menu-responsivo.php");?>
	<?php 
	if ($style == "home") 
	{
	?>

 	<div class="layout">
		<header>
		<div class="container">
			<div class="logo wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
				<a href="index.html">
					<img src="images/logo-topo.svg" alt="Logo Topo Tag">
				</a>
			</div>

			<div class="links">
			<?php include("includes/organisms/menu.php");?>
				
			<a class="toggle" href="javascript:;"><span></span><span></span><span></span></a>

			<ul class="social wow fadeInDown" data-wow-duration="1s" data-wow-delay="2s">
				<li>
					<a href="#"><i class="fa fa-facebook"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-github-alt"></i></a>
				</li>
			</ul>
			</div>

			<?php echo $chamada;?>

			<p class="wow flipInX" data-wow-duration="1s" data-wow-delay="3.5s">Code // Development // Designer</p>
			</div>
		</header>

		<main>
	<?php  }else{
		?>
		<div class="layout">
		<header>
		<div class="container">
			<div class="logo">
				<a href="index.html">
					<img src="images/logo-topo.svg" alt="Logo Topo Tag">
				</a>
			</div>

			<div class="links">
			<?php include("includes/organisms/menu.php");?>
<a class="toggle" href="javascript:;"><span></span><span></span><span></span></a>
			<ul class="social">
				<li>
					<a href="#"><i class="fa fa-facebook"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-github-alt"></i></a>
				</li>
			</ul>
			</div>

			<?php echo $chamada;?>

			<p>Lorem Ipsum is simply dummy</p>
			</div>
		</header>

		<main>
		<?php
	};
			?>