<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/*
* Plugin name: WP Lista Taxonomias BROW
* Description: Apenas um plugin para gerar listas de taxonomias.
* Version: 1.0
* Author: Loko da garrafa do suco de uva
*/

add_filter('widget_text', 'do_shortcode');


function categories_list($atts){
    extract(shortcode_atts(array("taxonomy" => "teiteitei", "title_li" => "li", "show_count" => "", "orderby" => ""), $atts));
    $show_count = isset($show_count) ? $show_count : 0;
    $title_li   = isset($title_li) ? $title_li : "";
    $orderby    = isset($orderby) ? $orderby : "name";
    $args = array(
        'hide_empty'          => 1,
        'hierarchical'        => true,
        'order'               => 'ASC',
        'orderby'             => $orderby,
        'show_count'          => $show_count,
        'style'               => 'list',
        'taxonomy'            => $taxonomy,
        'title_li'            => __($title_li),
    );
    echo '<ul>';
    echo wp_list_categories($args);
    echo '</ul>';
  }
  
  add_shortcode('lista_taxonomies', 'categories_list');