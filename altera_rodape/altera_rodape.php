<?php

/*
Plugin Name: Altera Rodapé
Plugin URI: http://www.exemplo.com.br
Description: Este plugin altera o rodape do Blog
Version: 1.0
Author: Romulo Xavier de Sousa
Author URL: 
Text Domain: altera_rodape
Licensa: GPLv2
*/

function meu_plugin_altera_rodape()
{
	echo "Romulo Xavier: meu primeiro plugin";
}

add_action('wp_footer', 'meu_plugin_altera_rodape');