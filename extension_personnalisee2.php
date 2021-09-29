<?php
/*
Plugin Name: Extension personnalisée Orélie
Plugin URI: https://www.latroussedememe.com/details-de-mon-plugin-personnalisee-orelie/
Description: Ceci est mon plugin personnalisé qui permet d ajouter, avec un shortcode, un CTA 
Author: Orélie CANU
Version: 1.0
Author URI: https://www.latroussedememe.com/
*/


add_shortcode('extension_personnalisee', 'shortcode_boutoncta');

if (!function_exists('shortcode_boutoncta' )) {
    function shortcode_boutoncta() {
        
        $text .= '<hr>';
        $text = '<div class="plugin_style">';
        $text .= '<br>';
        $text .= '<a href="https://www.latroussedememe.com/produit/sac-a-vrac/" class="plugin_textecta">Acheter ce sac à vrac</a>';
        $text .= '</div>';
        return $text;
       
    
    
}
    
}

