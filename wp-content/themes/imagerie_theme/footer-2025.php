
		</main>
	</div>

	<footer class="je_footer">
		<div class="je_footer_left">
			<div class="je_footer_logo">
				<img src="<?php the_field('footer_footer_logo_ima', 'options'); ?>" />
			</div>
			<p class="je_typo_footer">
				<?php the_field('footer_footer_adresse', 'options'); ?>
			</p>
			<div class="je_footer_simbolos">
				<img src="<?php the_field('footer_footer_simbolos', 'options'); ?>" />
			</div>

		</div>
		<div class="je_footer_right">

			<?php $transports = get_field('footer_footer_transport', 'options'); ?>
			<?php foreach( $transports as $tr) : ?>
				<div class="je_info_transports">
					<img class="je_pictogramme_transport" src="<?php echo $tr['footer_picto_transport']; ?>" />
					<p class="je_typo_footer">
						<?php echo $tr['footer_type_de_transport']; ?>
					</p>
				</div>
					
			<?php endforeach; ?>

		</div>
	</footer>
	</div>

<?php wp_footer(); ?>
</body>

</html>