<?php
/**
 * PHP file to use when rendering the gallery block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $galleryID (array): The ID for Gallery post.
 *     $displayMode (string): The display mode.
 *
 * @package gallery-pro
 */

$display = '';

if ( ! empty( $attributes['showPdf'] ) && ! empty( $attributes['showPrint'] ) ) {
	$display = 'pdf,print';
} elseif ( ! empty( $attributes['showPdf'] ) ) {
	$display = 'pdf';
} elseif ( ! empty( $attributes['showPrint'] ) ) {
	$display = 'print';
} else {
	$display = '';
}

?>
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php echo do_shortcode( "[bws_pdfprint display='" . $display . "']" ); ?>
</p>
