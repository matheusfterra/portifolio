</main>

	 <footer>
		<div class="rodape">
			<div class="logo-rodape wow pulse" data-wow-duration="1s" data-wow-delay="9s">
				<a href="index.html">
					<img src="images/logo-rodape.svg" alt="Logo TAG Rodapé">
				</a>
			</div>

			<p>2017 © Todos os Direitos Reservados</p>
		</div>
	 </footer>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/wow/dist/wow.min.js"></script>

<script>
	$(function(){
	  	$('.toggle').click(function(){
			$('.layout').toggleClass('ativo');
			$('.menu-responsivo').toggleClass('ativo');
			$(this).toggleClass('ativo');
		});
		new WOW().init();
	  });
	</script>





</body>
</html>
