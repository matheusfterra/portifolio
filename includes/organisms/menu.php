<?php 
	if ($style == "home") 
	{
	?>
<nav class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="2s">
				<?php wp_nav_menu(
				array('theme_location' => 'header-menu')
	);?>
</nav>
<?php 
	}else{
?>
<nav>
				<?php wp_nav_menu(
				array('theme_location' => 'header-menu')
	);?>
</nav>

<?php };
?>