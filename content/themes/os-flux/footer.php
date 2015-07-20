<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 *
 * @package flux
 */
?>

	</div><!-- #content .site-content -->

	<footer id="colophon" class="site-footer padded-4 bg-pink100 text-center" role="contentinfo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oven-street-bakery-logo.svg" />

        <div class="site-info v-margin-1">
            <p class="no-margin"><a href="mailto:<?php echo antispambot( 'info@ovenstreet.com' ); ?>"><?php echo antispambot( 'info@ovenstreet.com' ); ?></a></p>
            <p class="no-margin"><a href="tel:+19373079975">937.307.9975</a></p>
            <p class="copyright small no-margin">© 2015 Oven Street, LLC</p>
        </div>

	</footer><!-- #colophon .site-footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
