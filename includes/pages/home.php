<section class="sobre">
			<div class="container">
				<div class="itens">
					<div class="foto wow rotateIn" data-wow-duration="1s" data-wow-delay="6s">
						<img src="<?php bloginfo('template_url');?>/images/Elipse 1.png" alt="Foto TAG">
					</div>

					<div class="icone-youtube wow flipInX" data-wow-duration="2s" data-wow-delay="5s">
						<i class="fa fa-youtube"></i>
					</div>

					<div class="icone-codigo wow flipInX" data-wow-duration="2s" data-wow-delay="5s">
						<i class="fa fa-code"></i>
					</div>

					<div class="icone-spotify wow flipInX" data-wow-duration="2s" data-wow-delay="5s">
						<i class="fa fa-spotify"></i>
					</div>

					<div class="icone-share wow flipInX" data-wow-duration="2s" data-wow-delay="5s">
						<i class="fa fa-share-alt"></i>
					</div>
				</div>
				</div>

				<div class="textos">
				
					<?php 
						the_post();
						the_content();
		 			?>

					<a href="<?php bloginfo('template_url');?>/sobre" class="botao medio"><i class="fa fa-eye"> </i>    Continue Lendo</a>
			   </div>	

			</section>