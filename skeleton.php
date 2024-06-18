<?php
	/*
		Plugin Name: Nome del tuo plugin
		Plugin URI: http://example.com/
		Description: Un plugin per i plugin (inserisci qui la tua descrizione)
		Version: 1.0
		Author: TuoNome o NomeAzienza
		Author URI: [link al plugin]
		License: GPL2
	*/


	//Una funzione che fa qualcosa
	function funz() { 

	}

	function register_funz() {
		add_shortcode('nomeshortcode', 'funz');
	}
	add_action('init', 'register_funz');

	// Funzione per aggiungere una voce di menu al backoffice
	function my_plugin_menu() {
		// Aggiungi una voce di menu principale
		add_menu_page(
			'Testo in pagina plugin',
			'Testo nel menù',
			'manage_options', // Capacità richiesta per accedere alla pagina
			'slug-pagina',
			'render_page',
			'dashicons-admin-page' //Icona -- https://developer.wordpress.org/resource/dashicons/
		);
	}
	// Funzione per visualizzare la pagina nel backoffice
	function render_page() {
		ob_start();
		?>
			<h1>Contenuto del backoffice</h1>
		<?php
		return ob_get_flush();
	}

	// Aggiungi la voce di menu utilizzando l'hook admin_menu
	add_action('admin_menu', 'my_plugin_menu');

?>
