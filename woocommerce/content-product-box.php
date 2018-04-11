<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
  $p1 = get_variable_product_by_sku("whapow_banana");
  $p2 = get_variable_product_by_sku("whapow_passion");

  $p12 = get_variable_product_by_sku("whapow_box_12");
  $p24 = get_variable_product_by_sku("whapow_box_24");
  $p36 = get_variable_product_by_sku("whapow_box_36");
?>

<?php js_set_variation_constant(array($p12, $p24, $p36 ) ); ?>


<section class="w-content-box" id="w-product-purchase" data-state="0">
  <!-- Selector -->
  <h4 class="headline-step-1"><span>Welche Box ist deine?</span></h4>
  <p class="w-info-text">
		<?php echo $p36->get_description(); ?>
  </p>

	<div class="w-box-size-wrapper">
	  <!-- 12 -->
		  <div class="w-box-size-selector" data-personalize data-id="<?php echo $p12->get_id() ?>" data-size="12">
		    <svg id="box" class="w-box" data-size="12" data-dist="20" transform="" onclick="updateButton(this)">
		      <g transform="translate(2,0),scale(0.75)">
		        <g transform="translate(25, 20)">
		          <circle class="w-icon" cx="143.5" cy="360.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="360.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="360.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="360.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="317.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="317.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="317.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="317.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="274.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="274.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="274.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="274.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="230.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="230.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="230.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="230.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="187.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="187.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="187.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="187.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="144.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="144.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="144.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="144.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="100.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="100.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="100.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="100.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="57.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="57.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="57.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="57.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="14.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="14.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="14.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="14.5" r="14.5"></circle>
		        </g>
		        <polyline class="w-box-outline-36" stroke="#000000" stroke-width="2" fill="none" points="0 8.50008716 7.66612653 408.831334 194.782001 410.069532 201.507871 8.50008716 234.519462 0.268445839 225.951893 385.927193 194.782001 410.069532"></polyline>
		        <polyline class="w-box-outline-24" stroke="#000000" stroke-width="2" fill="none" points="0 8.92813352 7.66612653 278.236579 194.782001 279.069532 201.507871 8.92813352 234.519462 0.627168504 225.951893 255.556511 194.782001 279.069532"></polyline>
		        <polyline class="w-box-outline-12" stroke="#000000" stroke-width="2" fill="none" points="0 8.90533166 7.66612653 149.634267 194.782001 150.069532 201.507871 8.90533166 234.519462 0.38715302 225.951893 125.763841 194.782001 150.069532"></polyline>
		      </g>
		    </svg>
		    <span class="w-price">
		      <?php echo wc_price($p12->get_variation_regular_price()); ?>
		    </span>
		    <span class="w-price-meta">
		      + 5,90€ Versand
		    </span>
		    <input class="w-button" type="button" value="12 Whapow" onclick="updateButton(this)" />
		    <span class="w-selected" data-personalize-items="klein aber oho!">ausgewählt</span>
		  </div>

	  <!-- 24 -->
		  <div class="w-box-size-selector" data-personalize data-id="<?php echo $p24->get_id() ?>" data-size="24" >
		    <svg id="box" class="w-box" data-size="24" data-dist="20" transform="" onclick="updateButton(this)">
		      <g transform="translate(2,0),scale(0.75)">
		        <g transform="translate(25, 20)">
		          <circle class="w-icon" cx="143.5" cy="360.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="360.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="360.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="360.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="317.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="317.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="317.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="317.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="274.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="274.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="274.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="274.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="230.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="230.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="230.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="230.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="187.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="187.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="187.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="187.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="144.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="144.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="144.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="144.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="100.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="100.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="100.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="100.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="57.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="57.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="57.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="57.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="14.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="14.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="14.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="14.5" r="14.5"></circle>
		        </g>
		        <polyline class="w-box-outline-36" stroke="#000000" stroke-width="2" fill="none" points="0 8.50008716 7.66612653 408.831334 194.782001 410.069532 201.507871 8.50008716 234.519462 0.268445839 225.951893 385.927193 194.782001 410.069532"></polyline>
		        <polyline class="w-box-outline-24" stroke="#000000" stroke-width="2" fill="none" points="0 8.92813352 7.66612653 278.236579 194.782001 279.069532 201.507871 8.92813352 234.519462 0.627168504 225.951893 255.556511 194.782001 279.069532"></polyline>
		        <polyline class="w-box-outline-12" stroke="#000000" stroke-width="2" fill="none" points="0 8.90533166 7.66612653 149.634267 194.782001 150.069532 201.507871 8.90533166 234.519462 0.38715302 225.951893 125.763841 194.782001 150.069532"></polyline>
		      </g>
		    </svg>
		    <span class="w-price">
		   		<?php echo wc_price($p24->get_variation_regular_price()); ?>
		    </span>
		    <span class="w-price-meta">
		      versandkostenfrei
		    </span>
		    <input class="w-button" type="button" value="24 Whapow" onclick="updateButton(this)" />
		    <span class="w-selected" data-personalize-items="Großartige Wahl!">alles klar!</span>
		  </div>
	  <!-- 36 -->
		  <div class="w-box-size-selector" data-personalize data-id="<?php echo $p36->get_id() ?>" data-size="36">
		    <svg id="box" class="w-box" data-size="36" data-dist="20" transform="" onclick="updateButton(this)">
		      <g transform="translate(2,0),scale(0.75)">
		        <g transform="translate(25, 20)">
		          <circle class="w-icon" cx="143.5" cy="360.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="360.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="360.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="360.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="317.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="317.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="317.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="317.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="274.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="274.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="274.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="274.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="230.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="230.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="230.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="230.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="187.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="187.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="187.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="187.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="144.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="144.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="144.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="144.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="100.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="100.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="100.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="100.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="57.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="57.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="57.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="57.5" r="14.5"></circle>
		          <circle class="w-icon" cx="143.5" cy="14.5" r="14.5"></circle>
		          <circle class="w-icon" cx="100.5" cy="14.5" r="14.5"></circle>
		          <circle class="w-icon" cx="57.5" cy="14.5" r="14.5"></circle>
		          <circle class="w-icon" cx="14.5" cy="14.5" r="14.5"></circle>
		        </g>
		        <polyline class="w-box-outline-36" stroke="#000000" stroke-width="2" fill="none" points="0 8.50008716 7.66612653 408.831334 194.782001 410.069532 201.507871 8.50008716 234.519462 0.268445839 225.951893 385.927193 194.782001 410.069532"></polyline>
		        <polyline class="w-box-outline-24" stroke="#000000" stroke-width="2" fill="none" points="0 8.92813352 7.66612653 278.236579 194.782001 279.069532 201.507871 8.92813352 234.519462 0.627168504 225.951893 255.556511 194.782001 279.069532"></polyline>
		        <polyline class="w-box-outline-12" stroke="#000000" stroke-width="2" fill="none" points="0 8.90533166 7.66612653 149.634267 194.782001 150.069532 201.507871 8.90533166 234.519462 0.38715302 225.951893 125.763841 194.782001 150.069532"></polyline>
		      </g>
		    </svg>
		    <span class="w-price">
		      <?php echo wc_price($p36->get_variation_regular_price()); ?>
		    </span>
		    <span class="w-price-meta">
		      versandkostenfrei
		    </span>
		    <input class="w-button" type="button" value="36 Whapow" onclick="updateButton(this)" />
		    <span class="w-selected" data-personalize-items="Masse mit Klasse!">ausgewählt</span>
			</div>
		</div>
  <!-- Slider -->
  <h4 class="headline-step-2 w-step-2" id="step-2"><span>Wähle eine Verteilung.</span></h4>

  <div class="w-slider-wrapper w-step-2">
    <div class="w-slider-label w-slider-label-left"><span><span data-dist-value-banana>18x</span> Banane + Rohkakao</span></div>
    <div class="w-slider"><input id="slider" type="range" step="1" onInput="updateSlider(this.value)" value="50" /></div>
    <div class="w-slider-label w-slider-label-right"><span><span data-dist-value-passion>18x</span> Passionsfrucht + Mango</span></div>
  </div>

  <div class="w-buy-wrapper w-step-2">
    <form id="w-buy-form" method="post" enctype='multipart/form-data'>
    <input type="submit" class="w-button w-buy-button" onclick="buy(event)" value="in den Warenkorb"/>
    <input type="hidden" name="add-to-cart" value="77" />
    <input type="hidden" name="product_id" value="77" />
    <input type="hidden" name="variation_id" class="variation_id" value="0" />
    <input type="hidden" name="attribute_aufteilung"  value="1" />
    </form>
  </div>



</section>

<script>
  try { updateSlider(); } catch(err) {}
  
</script>