<?php
if ( ! class_exists( 'Easy_Instagram_Utils' ) ) :
	_e( 'Please install the Easy Instagram plugin.', 'Easy_Instagram' );
else :
	$ei_utils = new Easy_Instagram_Utils();
	$kses_author = array(
		'a' => array( 'href' => array(), 'title' => array(), 'target' => array() )
	);

	if ( ! empty( $easy_instagram_elements ) ) {
		$element = $easy_instagram_elements[0];
		if ( !empty( $element['thumbnail_width'] ) ) {
			$element_width = $element['thumbnail_width'];
			$element_padding = 10; // px
			$element_style = sprintf( 'width: %dpx; padding: %dpx;', $element_width, $element_padding );
		}
	}
	else {
		$element_style = '';
	}
?>

<ul class="instagram-list clearfix">

<?php foreach ( $easy_instagram_elements as $element ) : ?>
    <?php $element['dynamic_thumb'] = 'dynamic_normal'; ?>

    <li class="instagram-item">
        <a href="<?php echo esc_url( $element['thumbnail_link_url'] ); ?>" target="_blank">
            <img src="<?php echo esc_url_raw( $element['thumbnail_normal_link_url'] ); ?>" alt="Oven Street Gluten Free Bakery Instagram Photo" title="<?php echo esc_attr( $element['thumbnail_caption'] ); ?>" />
            <div class="instagram-overlay desktop-only">
                <div class="overlay bg-pink500"></div>
                <h6 class="caption text-white no-margin"><?php echo esc_html( $element['thumbnail_caption'] ); ?></h6>
            </div>
        </a>
    </li>

<?php endforeach; ?>

</ul>

<?php endif;
