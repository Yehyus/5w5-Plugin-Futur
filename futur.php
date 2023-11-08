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
    
    <section class=futur>
    <div class='futur1'>
        <div class='animation-rectangle'>
            <div class='rectangle-deco1'></div>
            <div class='rectangle-deco2'></div>
            <div class='rectangle-deco3'></div>
            <div class='rectangle-deco4'></div>
            <div class='rectangle-deco5'></div>
        </div>

        <div class='info_ate'>
            <h6>STAGE</h6>
            <h1>ATE</h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id vitae sunt maxime nostrum esse. 
                Aspernatur minus qui laborum eveniet ratione alias tempore quaerat distinctio, 
                incidunt ab porro debitis velit fugiat. Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Modi sed obcaecati, odit fugiat pariatur odio velit dolor 
                explicabo aut est molestiae cupiditate possimus perspiciatis nostrum ullam culpa 
                excepturi omnis quibusdam. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Officia, earum nisi hic mollitia consectetur tempore provident, tempora perferendis 
                molestiae ut dicta excepturi odit. Ipsam earum animi omnis ducimus possimus nobis? 
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto quisquam minima ab 
                beatae maxime facilis cum sunt, reiciendis autem quidem eius corrupti eos corporis 
                esse numquam velit odio quo harum!
            </p>
        </div>

        <div class='animation-cube'>
            <div class='cube1'>
                <div class='cube-deco1'></div>
                <div class='cube-deco2'></div>
            </div>

            <div class='cube2'>
                <div class='cube-deco3'></div>
                <div class='cube-deco4'></div>
            </div>
        </div>
    </div>

    <div class='futur2'>
        <div class='animation-rectangle2'>
            <div class='rectangle-deco1'></div>
            <div class='rectangle-deco2'></div>
            <div class='rectangle-deco3'></div>
            <div class='rectangle-deco4'></div>
            <div class='rectangle-deco5'></div>
        </div>

        <div class='info_étude'>
            <h6>STAGE</h6>
            <h1>Fin d'études</h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id vitae sunt maxime nostrum esse. 
                Aspernatur minus qui laborum eveniet ratione alias tempore quaerat distinctio, 
                incidunt ab porro debitis velit fugiat. Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Modi sed obcaecati, odit fugiat pariatur odio velit dolor 
                explicabo aut est molestiae cupiditate possimus perspiciatis nostrum ullam culpa 
                excepturi omnis quibusdam. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Officia, earum nisi hic mollitia consectetur tempore provident, tempora perferendis 
                molestiae ut dicta excepturi odit. Ipsam earum animi omnis ducimus possimus nobis? 
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto quisquam minima ab 
                beatae maxime facilis cum sunt, reiciendis autem quidem eius corrupti eos corporis 
                esse numquam velit odio quo harum!
            </p>
        </div>

        <div class='animation-cube'>
            <div class='cube1'>
                <div class='cube-deco1'></div>
                <div class='cube-deco2'></div>
            </div>

            <div class='cube2'>
                <div class='cube-deco3'></div>
                <div class='cube-deco4'></div>
            </div>
        </div>
    </div>

    <div class='futur1'>
        <div class='animation-rectangle'>
            <div class='rectangle-deco1'></div>
            <div class='rectangle-deco2'></div>
            <div class='rectangle-deco3'></div>
            <div class='rectangle-deco4'></div>
            <div class='rectangle-deco5'></div>
        </div>

        <div class='info_programme'>
            <h6>UNIVERSITÉ</h6>
            <h1>Programmes</h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id vitae sunt maxime nostrum esse. 
                Aspernatur minus qui laborum eveniet ratione alias tempore quaerat distinctio, 
                incidunt ab porro debitis velit fugiat. 
            </p>
            <p>-Lorem ipsum dolor, sit amet</p>
            <p>-Lorem ipsum dolor, sit amet</p>
            <p>-Lorem ipsum dolor, sit amet</p>
            <p>-Lorem ipsum dolor, sit amet</p>
            <p>-Lorem ipsum dolor, sit amet</p>
        </div>

        <div class='animation-cube'>
            <div class='cube1'>
                <div class='cube-deco1'></div>
                <div class='cube-deco2'></div>
            </div>

            <div class='cube2'>
                <div class='cube-deco3'></div>
                <div class='cube-deco4'></div>
            </div>
        </div>
    </div>

    <div class='futur2'>
        <div class='animation-rectangle2'>
            <div class='rectangle-deco1'></div>
            <div class='rectangle-deco2'></div>
            <div class='rectangle-deco3'></div>
            <div class='rectangle-deco4'></div>
            <div class='rectangle-deco5'></div>
        </div>

        <div class='info_entreprise'>
            <h6>MARCHÉ DU TRAVAIL</h6>
            <h1>Entreprises</h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id vitae sunt maxime nostrum esse. 
                Aspernatur minus qui laborum eveniet ratione alias tempore quaerat distinctio, 
                incidunt ab porro debitis velit fugiat.
            </p>
            <p>-Lorem ipsum dolor, sit amet</p>
            <p>-Lorem ipsum dolor, sit amet</p>
            <p>-Lorem ipsum dolor, sit amet</p>
            <p>-Lorem ipsum dolor, sit amet</p>
            <p>-Lorem ipsum dolor, sit amet</p>
        </div>
        
        <div class='animation-cube'>
            <div class='cube1'>
                <div class='cube-deco1'></div>
                <div class='cube-deco2'></div>
            </div>

            <div class='cube2'>
                <div class='cube-deco3'></div>
                <div class='cube-deco4'></div>
            </div>
        </div>
    </div>

    </section>";
    return $contenu;
}

add_shortcode('em_futur', 'creation_futur');
?>