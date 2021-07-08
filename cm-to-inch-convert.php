<?php
/**
 * Plugin Name:       cm to inch convert
 * Plugin URI:        https://ensky.tech/wordpress-plugin/
 * Description:       CM to inches converter. Easily convert Centimeters to Inches
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            ensky
 * Author URI:        https://ensky.tech/
 * Donate link:       https://paypal.me/enskytech
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       cm-to-inch-convert
 * Domain Path:       /languages
 */


// Block direct access to the main plugin file.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


function convert_cm_to_inch()
{

    return '

	<script>

		function convertInchToCm_single(length) 
		{
			var num =length*0.39;
			num = num.toFixed(2); 
			document.getElementById("inchIputHolder").value=num;
		}


		function convertCmToInch_single(length) {
			var num =length*2.54;
			num = num.toFixed(2); 
			document.getElementById("cmInputHolder").value=num;
		}

	</script>

	<!--Inch to cm -->
	<input id="cmInputHolder" type="number" placeholder="cm" oninput="convertInchToCm_single(this.value)" onchange="convertInchToCm_single(this.value)">
	cm =
	<input id="inchIputHolder" type="number" placeholder="inch" oninput="convertCmToInch_single(this.value)" onchange="convertCmToInch_single(this.value)">   </input>inch

	</div>

    ';
    
}

 

function wpdocs_add_custom_shortcode()
{
    // register shortcode
    add_shortcode('convert_cm_to_inch_shortcode', 'convert_cm_to_inch');
}

add_action( 'init', 'wpdocs_add_custom_shortcode' );
 
