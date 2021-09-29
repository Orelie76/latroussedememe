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
        $text .= '<p class="plugin_textecta">';
        $text .= '<br>';
        $text .= '<a href="https://www.latroussedememe.com/produit/sac-a-vrac/" class="wop_cta">Acheter ce sac à vrac</a>';
        $text .= '</p>';
        $text .= '</div>';
        return $text;
        /*
       (!empty($_POST['envoyer'])) {
        echo "Bonjour !";
         // ou echo afficher();
         
         <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="submit" id="envoyer" name="envoyer" value="envoyer">
        <form>
    }*/
    
    
}
    
}

