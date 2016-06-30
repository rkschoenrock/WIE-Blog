<footer class="row">
    <div class="twelve columns">
        <p>&copy; 2016 Rebecca Schoenrock
        <span class="footer-right">
			<?php
				wp_nav_menu(array(
					'sort_column' => 'menu_order',
					'container_class' => 'blank-menu-footer'
				));
			?>
		</span></p>
    </div>
</footer>


</div> <!-- End Container Div -->
<?php wp_footer(); ?>
</body>

</html>
