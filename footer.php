</main>

	 <footer>
		<div class="rodape">
			<div class="logo-rodape wow pulse" data-wow-duration="1s" data-wow-delay="9s">
				<a href="<?php bloginfo('url');?>">
					<img src="<?php bloginfo('template_url');?>/images/logo-rodape.svg" alt="Logo TAG Rodapé">
				</a>
			</div>

			<p><?php echo date('Y');?> © Todos os Direitos Reservados</p>
		</div>
	 </footer>
</div>

<script src="<?php bloginfo('template_url');?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/bower_components/wow/dist/wow.min.js"></script>
<?php if(is_page('portifolio')) { ?>
<script src="<?php bloginfo('template_url');?>/bower_components/lightbox2/dist/js/lightbox.min.js"></script>
<?php };?>
<?php if(is_front_page()) { ?>
<script src="<?php bloginfo('template_url');?>/bower_components/slick-carousel/slick/slick.min.js"></script>
<?php };?>
<?php wp_footer();?>
<script>
	$(function(){
	  	$('.toggle').click(function(){
			$('.layout').toggleClass('ativo');
			$('.menu-responsivo').toggleClass('ativo');
			$(this).toggleClass('ativo');
		});
		new WOW().init();
		
		<?php if(is_front_page()): ?>
					$('.slide').slick({
						infinite: true,
						slideToShow: 1,
						autoplay: true,
						autoplaySpeed: 2000,

					});
				<?php endif; ?>

	  });
	</script>





</body>
</html>
