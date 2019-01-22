<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * @package ElectricPowerCalculatorBr
 * @version 0.1
 */
/*
Plugin Name: Electric Power Calculator Br
Description: This plugin adds the electric power calculator in your page. To add the calculator, insert the shortcode <strong>[ElectricPowerCalculatorShortcodeBr]</strong>.
Author: Ismael Tiago Pereira
Version: 0.1
Text Domain: electric-power-calculator-br
*/

class ElectricPowerCalculatorBr extends WP_Widget {
  public function __construct() {
    add_shortcode('ElectricPowerCalculatorShortcodeBr', array($this, 'shortcode'));
  }

  public function shortcode() {
    $pluginPath = dirname(__FILE__);
    ob_start();
    include("$pluginPath/calculator/index.php");
    return ob_get_clean();
  }
}

$electricPowerCalculatorBr = new ElectricPowerCalculatorBr();
