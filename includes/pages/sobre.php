<section class="sobre">
			<div class="container">
				<div class="textos">
					<?php 
					the_post();
					the_content();
					?>
		       </div>

				<?php query_posts('post_type=habilidades&post_per_page=-1'); ?>
<ul class="habilidades wow shake" data-wow-duration="1s" data-wow-delay="3s">
				<?php if(have_posts()): ?>

					<?php while(have_posts()): the_post(); ?>

				<li class="habilidade-<?php the_field('nivel'); ?>">
					<h2>
						<style>
							.<?php the_field('icone'); ?> {
								<?php if(get_field('cor_do_icone')): ?>
									color: <?php the_field('cor_do_icone'); ?>;
								<?php else : ?>
									color: #000;
								<?php endif; ?>
							}
						</style>
						<i class="fa <?php the_field('icone'); ?>"></i> <strong><?php the_title(); ?></strong> // <?php the_field('nivel') ?>0%
						<div class="barra"><span></span></div>
					</h2>
				</li>

				<?php endwhile; ?>

				<?php else : ?>
					Não há habilidades cadastradas...

				<?php endif; ?>

				</ul>

			<?php wp_reset_query(); ?>
			<a href="<?php bloginfo('template_url');?>/portifolio" class="botao medio"><i class="fa fa-picture-o"> </i>   Acessar Portifolio</a>
			</div>

			</section>
