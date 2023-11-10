<?php
/*
    Plugin name: Afficher-futur
    Author: Yehya Refaat
    Plugin uri: https://github.com/OreoBambolii
    Version: 1.0.0
    Description: Permet d'afficher la section futur du TIM selon les sessions
*/



function futur_enqueue()
{
// filemtime // retourne en milliseconde le temps de la dernière
// plugin_dir_path // retourne le chemin du répertoire du plugin
// __FILE__ // le fichier en train de s'exécuter
// wp_enqueue_futur() // Intègre le link:css dans la page
// wp_enqueue_script() // intègre le script dans la page
// wp_enqueue_scripts // le hook


$version_css = filemtime(plugin_dir_path( __FILE__ ) . "futur.css"); 
$version_js = filemtime(plugin_dir_path(__FILE__) . "js/futur.js");

    wp_enqueue_style(   'em_plugin_futur_css',
                     plugin_dir_url(__FILE__) . "futur.css",
                     array(),
                     $version_css);

    wp_enqueue_script(  'em_plugin_futur_js',
                    plugin_dir_url(__FILE__) ."js/futur.js",
                    array(),
                    $version_js,
                    true);
}
add_action('wp_enqueue_scripts', 'futur_enqueue');



function creation_futur(){
    $contenu = "
    
    <section class='futur'>
    <div class='futur1'>
        
    </div>
    </section>";
    return $contenu;
}

add_shortcode('em_futur', 'creation_futur');
?>