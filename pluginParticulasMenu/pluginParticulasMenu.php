<?php
/*
Plugin Name: Particulas no menu
Plugin URI: https://github.com/salviof/wordpressSBOpenPlugin
Description: Exibe particulas no menu, passando imagem hitech modular
Author: Sálvio Furbino
Author URI: http://coletivojava.com.br
Version: 0.6.3
Text Domain: menu-efects
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/


add_action('wp_head', 'adicionarEstiloParticula');


function adicionarParticulasEmMenu() {
    ?>
  
    
   <!-- particles.js container -->
<div id="particles-js" style="height:300px;"></div>

<!-- scripts -->
<script src="/wp-content/plugins/pluginParticulasMenu/js/particles.js"></script>
<script src="/wp-content/plugins/pluginParticulasMenu/js/app.js"></script>

                <script type="text/javascript">
					/* Identify the height of headerbar */
					var headerbar_height = $('.headerbar').height();
					/* Match particle container height to headerbar. Creates window for canvas */
					$('.particles_container').css({'height': headerbar_height});
				</script>            


 <script type="text/javascript">
/* Reposition the canvas so it aligns with headerbar */
$('canvas.particles-js-canvas-el').css({'margin-top': -headerbar_height});
</script>       


<?php
}



function adicionarEstiloParticula() {
    ?>
      <link rel="stylesheet" media="screen" href="/wp-content/plugins/pluginParticulasMenu/css/style.css"
     
    <?php
}