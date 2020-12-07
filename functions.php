<?php


define("DEV_IP", "93.148.49.106");
define("_ATTRIBUTI", "verniciatura,motorizzazione,tapezzeria,accessori,modello");
define("_ATTRIBUTI_W_TRAD", "accessori,tapezzeria,verniciatura");
add_filter('show_admin_bar', '__return_false');


/*error_reporting(E_ALL);
ini_set('display_errors', '1');*/
error_reporting(0);

add_action("init","check_user_admin");
function check_user_admin(){

}



if ( ! function_exists( 'jahreswagen_theme_setup' ) ) :

	//add_action('admin_init','optionsframework_admin_init');

	global $options;
	$options =  get_option( 'get_theme_options' );


	require_once( get_template_directory() .'/framework/yucon.php' );
	require_once( get_template_directory() .'/framework/oldani.php' );
	require_once( get_template_directory() .'/framework/preventivi.php' );
	require_once( get_template_directory() .'/framework/impostazioni.php' );
	require_once( get_template_directory() .'/framework/gestione_attributi.php' );

	//insert("/opt/lampp/htdocs/vettureaziendali.com/wp-content/themes/jahreswagen/report6490392459954555044.txt", "","");

	//require_once (get_template_directory()  . '/includes/widgets/recent_post_widget.php');


	function jahreswagen_theme_setup() {
		//register theme menu
		register_nav_menus( array(
			'primary' => __( 'Primary Menu',      'jahreswagen_theme' ),
			'salonista' => __( 'Salonista Menu',      'jahreswagen_theme' ),
			'social'  => __( 'Social Links Menu', 'jahreswagen_theme' ),
		) );


		$result = add_role( 'salonista', __(

		'Salonista' ),

		array(

			'read' => true, // true allows this capability
			'edit_posts' => false, // Allows user to edit their own posts
			'edit_pages' => false, // Allows user to edit pages
			'edit_others_posts' => false, // Allows user to edit others posts not just their own
			'create_posts' => false, // Allows user to create new posts
			'manage_categories' => false, // Allows user to manage post categories
			'publish_posts' => false, // Allows the user to publish, otherwise posts stays in draft mode
			'edit_themes' => false, // false denies this capability. User can’t edit your theme
			'install_plugins' => false, // User cant add new plugins
			'update_plugin' => false, // User can’t update any plugins
			'update_core' => false // user cant perform core updates

		));


		$result = add_role( 'tecnico', __(

		'Tecnico' ),

		array(

			'read' => true, // true allows this capability
			'edit_posts' => false, // Allows user to edit their own posts
			'edit_pages' => false, // Allows user to edit pages
			'edit_others_posts' => false, // Allows user to edit others posts not just their own
			'create_posts' => false, // Allows user to create new posts
			'manage_categories' => false, // Allows user to manage post categories
			'publish_posts' => false, // Allows the user to publish, otherwise posts stays in draft mode
			'edit_themes' => false, // false denies this capability. User can’t edit your theme
			'install_plugins' => false, // User cant add new plugins
			'update_plugin' => false, // User can’t update any plugins
			'update_core' => false // user cant perform core updates

		));

		$result = add_role( 'parcheggi_elit', __(

		'Gestione Chiavi e Parcheggi' ),

		array(

			'read' => true, // true allows this capability
			'edit_posts' => false, // Allows user to edit their own posts
			'edit_pages' => false, // Allows user to edit pages
			'edit_others_posts' => false, // Allows user to edit others posts not just their own
			'create_posts' => false, // Allows user to create new posts
			'manage_categories' => false, // Allows user to manage post categories
			'publish_posts' => false, // Allows the user to publish, otherwise posts stays in draft mode
			'edit_themes' => false, // false denies this capability. User can’t edit your theme
			'install_plugins' => false, // User cant add new plugins
			'update_plugin' => false, // User can’t update any plugins
			'update_core' => false // user cant perform core updates

		));



		$result = add_role( 'salonista_elit', __(

		'Salonista ElitCar' ),

		array(

			'read' => true, // true allows this capability
			'edit_posts' => false, // Allows user to edit their own posts
			'edit_pages' => false, // Allows user to edit pages
			'edit_others_posts' => false, // Allows user to edit others posts not just their own
			'create_posts' => false, // Allows user to create new posts
			'manage_categories' => false, // Allows user to manage post categories
			'publish_posts' => false, // Allows the user to publish, otherwise posts stays in draft mode
			'edit_themes' => false, // false denies this capability. User can’t edit your theme
			'install_plugins' => false, // User cant add new plugins
			'update_plugin' => false, // User can’t update any plugins
			'update_core' => false // user cant perform core updates

		));


		$result = add_role( 'ospite', __(

		'Ospite' ),

		array(

			'read' => true, // true allows this capability
			'edit_posts' => false, // Allows user to edit their own posts
			'edit_pages' => false, // Allows user to edit pages
			'edit_others_posts' => false, // Allows user to edit others posts not just their own
			'create_posts' => false, // Allows user to create new posts
			'manage_categories' => false, // Allows user to manage post categories
			'publish_posts' => false, // Allows the user to publish, otherwise posts stays in draft mode
			'edit_themes' => false, // false denies this capability. User can’t edit your theme
			'install_plugins' => false, // User cant add new plugins
			'update_plugin' => false, // User can’t update any plugins
			'update_core' => false // user cant perform core updates

		));


		$result = add_role( 'marketing_elit', __(

		'Gestione Marketing' ),

		array(

			'read' => true, // true allows this capability
			'edit_posts' => false, // Allows user to edit their own posts
			'edit_pages' => false, // Allows user to edit pages
			'edit_others_posts' => false, // Allows user to edit others posts not just their own
			'create_posts' => false, // Allows user to create new posts
			'manage_categories' => false, // Allows user to manage post categories
			'publish_posts' => false, // Allows the user to publish, otherwise posts stays in draft mode
			'edit_themes' => false, // false denies this capability. User can’t edit your theme
			'install_plugins' => false, // User cant add new plugins
			'update_plugin' => false, // User can’t update any plugins
			'update_core' => false // user cant perform core updates

		));

		register_post_status( 'opzionata', array(
			'label'                     => 'Opzionata',
			'public'                    => true,
			'exclude_from_search'       => false,
			'show_in_admin_all_list'    => true,
			'show_in_admin_status_list' => true,
			'label_count'               => ''
		) );

		register_post_status( 'venduta', array(
			'label'                     => 'Venduta',
			'public'                    => true,
			'exclude_from_search'       => false,
			'show_in_admin_all_list'    => true,
			'show_in_admin_status_list' => true,
			'label_count'               => ''
		) );
		register_post_status( 'invendita', array(
			'label'                     => 'InVendita',
			'public'                    => true,
			'exclude_from_search'       => false,
			'show_in_admin_all_list'    => true,
			'show_in_admin_status_list' => true,
			'label_count'               => ''
		) );

		register_post_status( 'in_attesa', array(
			'label'                     => 'In Attesa',
			'public'                    => true,
			'exclude_from_search'       => false,
			'show_in_admin_all_list'    => true,
			'show_in_admin_status_list' => true,
			'label_count'               => ''
		) );

	}
endif;
add_action( 'after_setup_theme', 'jahreswagen_theme_setup' );



add_action("init","check_tecnico");
function check_tecnico() {
	$role = elitcar_get_user_role(get_current_user_id());

	if  ( ($role == "tecnico") && ($_SERVER['REQUEST_URI'] == '/') ) {
		wp_redirect("http://jahreswagen-italia.it/?page_id=28316"); exit();
	}
}



function widgets_init() {


	register_sidebar( array(
		'name' => __( 'Sidebar', 'zumi' ),
		'id' => 'sidebar-1',
		'description'   => 'Default Sidebar',
		'before_widget' => '<div id="%1$s" class="sidebar-item widget %2$s">',
		'after_widget' => '<div class="sidebar-divider"></div></div>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );

	register_sidebar( array(
		'name' => __( 'Sidebar 2', 'zumi' ),
		'id' => 'sidebar-2',
		'description'   => 'Default Sidebar 2',
		'before_widget' => '<div id="%1$s" class="sidebar-item widget %2$s">',
		'after_widget' => '<div class="sidebar-divider"></div></div>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );

	register_sidebar( array(
		'name' => __( 'Sidebar 3', 'zumi' ),
		'id' => 'sidebar-3',
		'description'   => 'Default Sidebar 3',
		'before_widget' => '<div id="%1$s" class="sidebar-item widget %2$s">',
		'after_widget' => '<div class="sidebar-divider"></div></div>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );

	register_sidebar( array(
		'name' => __( 'Sidebar 4', 'zumi' ),
		'id' => 'sidebar-4',
		'description'   => 'Default Sidebar 4',
		'before_widget' => '<div id="%1$s" class="sidebar-item widget %2$s">',
		'after_widget' => '<div class="sidebar-divider"></div></div>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );

	register_sidebar( array(
		'name' => __( 'Sidebar 5', 'zumi' ),
		'id' => 'sidebar-5',
		'description'   => 'Default Sidebar 4',
		'before_widget' => '<div id="%1$s" class="sidebar-item widget %2$s">',
		'after_widget' => '<div class="sidebar-divider"></div></div>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
}

add_action( 'widgets_init', 'widgets_init' );

//add car
add_shortcode("add_car","add_car");
function add_car( $atts ){

	global $wpdb;

	//global $product;
	extract(shortcode_atts(array(
	  "action" => ""
	), $atts));

	if ($_GET['fill_edit'] == "true"){
		$edit_car = true;
		$post_id = $_GET['carID'];


		//update_sistema_ricerca($post_id,"","","");


		$sku = get_post_meta($post_id, "_sku", true);
		$chiave = get_post_meta($post_id, "Chiave", true);
		$chilometri = get_post_meta($post_id, "Chilometri", true);
		$data_di_arrivo = get_post_meta($post_id, "Data di Arrivo", true);
        $targa = get_post_meta($post_id, "targa",true);

		if (empty($data_di_arrivo)) {
			$data_di_arrivo =  strtotime("+25 days");
		}

		if (is_numeric($data_di_arrivo)) {
			$data_di_arrivo = date("d/m/Y",$data_di_arrivo);
		}



		$tipologia = array_shift( wc_get_product_terms( $post_id , 'pa_tipologia', array( 'fields' => 'names' ) ) );
		$sede = array_shift( wc_get_product_terms( $post_id , 'pa_sede', array( 'fields' => 'names' ) ) );
		$modello = array_shift( wc_get_product_terms( $post_id , 'pa_modello', array( 'fields' => 'names' ) ) );
		$motorizzazione = array_shift( wc_get_product_terms( $post_id , 'pa_motorizzazione', array( 'fields' => 'names' ) ) );
		$versione = array_shift( wc_get_product_terms( $post_id , 'pa_versione', array( 'fields' => 'names' ) ) );
		$verniciatura = array_shift( wc_get_product_terms( $post_id , 'pa_verniciatura', array( 'fields' => 'names' ) ) );
		$tapezzeria = array_shift( wc_get_product_terms( $post_id , 'pa_tapezzeria', array( 'fields' => 'names' ) ) );
		$alimentazione = array_shift( wc_get_product_terms( $post_id , 'pa_alimentazione', array( 'fields' => 'names' ) ) );



		$descrizione_parti_mancanti = get_post_meta($post_id, "Descrizione Parti Mancanti", true);
		$descrizione_perizia = get_post_meta($post_id, "Descrizione Perizia", true);
		$descrizione_ripristino = get_post_meta($post_id, "Descrizione Ripristino", true);

		$immatricolazione = get_post_meta($post_id, "Immatricolazione", true);

        $nome_fornitore = get_post_meta($post_id, "nomeFornitore", true);




		$prezzo_parti_mancanti = get_post_meta($post_id, "Prezzo Parti Mancanti", true);
		$prezzo_perizia = get_post_meta($post_id, "Prezzo Perizia", true);

		$prezzo_ripristino = get_post_meta($post_id, "Prezzo Ripristino", true);



		$strada = get_post_meta($post_id, "Messa in Strada", true);
		$ecobonus = get_post_meta($post_id,"ecobonus",true);
		$ipt = get_post_meta($post_id, "IPT", true);

		$provenienza = get_post_meta($post_id,"provenienza",true);

		$prezzo_acquisto_lordo = get_post_meta($post_id, "Prezzo Acquisto Lordo", true);
		$prezzo_acquisto_netto = get_post_meta($post_id, "Prezzo Acquisto Netto", true);
		$prezzo_acquisto_netto_nascosto = get_post_meta($post_id, "prezzo acquisto netto nascosto", true);

		$prezzo_pubblico = get_post_meta($post_id, "Prezzo Pubblico", true);
		$prezzo_pubblico_con_ritiro = get_post_meta($post_id, "Prezzo Pubblico con ritiro", true);
		$prezzo_pubblico_con_ritiro_usato = get_post_meta($post_id, "Prezzo Pubblico con ritiro usato", true);



		$_prezzo_listino = get_post_meta($post_id, "_regular_price", true);

		$spese_trasporto = get_post_meta($post_id, "Spese Trasporto", true);
		$spese_documenti = get_post_meta($post_id, "Spese Documenti", true);
		$spese_generiche = get_post_meta($post_id, "Spese Ricondizionamento", true);

		$ricondizionamento_teorico = get_post_meta($post_id, "Spese Ricondizionamento Teorico", true);

		$prezzo_salonista = get_post_meta($post_id, "Prezzo Salonista", true);
		$prezzo_salonista_netto = get_post_meta($post_id, "Prezzo Salonista Netto", true);
		$margine 		 = get_post_meta($post_id, "Margine", true);
		$margine_con_ritiro 		 = get_post_meta($post_id, "Margine Salonista Con Ritiro", true);


		$deducibile 		= get_post_meta($post_id, "Deducibile", true);
		$auto_disponibile = get_post_meta($post_id, "Auto Disponibile", true);
		$auto_inripristino = get_post_meta($post_id, "In Ripristino", true);
		$auto_pronta  = get_post_meta($post_id, "Auto Pronta", true);



		$accessori = get_post_meta($post_id, "Accessori", true);

		$promo  = get_post_meta($post_id,"Promo",true);
		$note_interno  = get_post_meta($post_id,"Note Interne",true);


		$trapasso = get_post_meta($post_id,"Trapasso",true);
		$prezzoalcliente=get_post_meta($post_id,"Prezzo al Cliente",true);
		$prezzoalcommerciante=get_post_meta($post_id,"Prezzo al Commerciante",true);
		$prezzoalsalonista=get_post_meta($post_id,"Prezzo al Salonista",true);
		$prezzodicaricol85=get_post_meta($post_id,"Prezzo di carico L 85",true);
		$prezzodiriconoscimento=get_post_meta($post_id,"Prezzo di riconoscimento",true);
		$scadenzarevisioneministerial=get_post_meta($post_id,"Scadenza Revisione riconoscimento",true);
		$scadenzabollo=get_post_meta($post_id,"Scadenza Bollo",true);
		$esposta = get_post_meta($post_id,"Esposta",true);

		$Parcheggio = get_post_meta($post_id,"Parcheggio",true);
		$StatoAuto = get_post_meta($post_id,"StatoAuto",true);

		$co2 = get_post_meta($post_id,"CO2",true);
		$consumi = get_post_meta($post_id,"Consumi",true);


		$PressoSalone = get_post_meta($post_id, "PressoSalone",true);

		/** OPTIONAL PRINCIPALI **/
		$navigatore = array_shift( wc_get_product_terms( $post_id , 'pa_navigatore', array( 'fields' => 'names' ) ) );
		$tetto_apribile = array_shift( wc_get_product_terms( $post_id , 'pa_tetto', array( 'fields' => 'names' ) ) );
		$sensore_park = array_shift( wc_get_product_terms( $post_id , 'pa_park', array( 'fields' => 'names' ) ) );
		$cambio_automatico = array_shift( wc_get_product_terms( $post_id , 'pa_automatico', array( 'fields' => 'names' ) ) );
		$specchi_richiudibili = array_shift( wc_get_product_terms( $post_id , 'pa_specchirichiudibili', array( 'fields' => 'names' ) ) );
		$fari_xeno = array_shift( wc_get_product_terms( $post_id , 'pa_farixeno', array( 'fields' => 'names' ) ) );
		$clima_automatico = array_shift( wc_get_product_terms( $post_id , 'pa_climaautomatico', array( 'fields' => 'names' ) ) );
		$tetto_panoramico = array_shift( wc_get_product_terms( $post_id , 'pa_tettopanoramico', array( 'fields' => 'names' ) ) );


		$tipologiaAS = get_post_meta($post_id, "tipologiaAS", true);
		$ColEsternoAS = get_post_meta($post_id, "ColEsternoAS", true);
		$ColInternoAS = get_post_meta($post_id, "ColInternoAS", true);
		$internoAS = get_post_meta($post_id, "internoAS", true);
		$marcaAS = get_post_meta($post_id, "marcaAS", true);
		$modelloAS = get_post_meta($post_id, "modelloAS", true);

		$potenzaAS = get_post_meta($post_id, "potenzaAS", true);
		$potenzaKW = get_post_meta($post_id, "PotenzaKW", true);
		$cambioAS = get_post_meta($post_id, "cambioAS", true);
		$cilindrataAS = get_post_meta($post_id, "cilindrataAS", true);


		$ripepa = get_post_meta($post_id, "Ri Pe Pa", true);

		/** POST GALLERY **/
		$immagineCopertina = get_post_meta($post_id, "_thumbnail_id", true);
		$IdsGallery = get_post_meta($post_id, "_product_image_gallery", true);


		/** ATTRIBUTI **/
		$product_cats = wp_get_post_terms( $post_id, 'product_cat' );
	    if ( $product_cats && ! is_wp_error ( $product_cats ) ){  $single_cat = array_shift( $product_cats ); $marca = $single_cat->name; }

	    $note =  get_post_meta($post_id, "Note", true);


	    $scadenzaRevisione = get_post_meta($post_id, "scadenzaRevisione", true);

	    if (!empty($immatricolazione)){

			if (is_numeric($immatricolazione)) {
				$immatricolazione = date("d/m/Y", $immatricolazione);
			} else {
				$immatricolazione = $immatricolazione;
			}

	    	//$immatricolazione = date("d/m/Y",$immatricolazione);
	    }


	    $edit_label = "Modifica Auto";
	} else {
		$edit_label = " ";
		$titolo = "Inserisci Auto";
		$edit_car = false;
		$immatricolazione = "";

		$data_di_arrivo =  strtotime("+25 days");

		if (is_numeric($data_di_arrivo)) {
			$data_di_arrivo = date("d/m/Y",$data_di_arrivo);
		}
	}

	?>



	<style>
/*	.dashboard-wrapper {
		width: 75%;
	}*/
	<?php
		$current_user 	 = wp_get_current_user();
	?>
	<?php if (trim($current_user->versione) != "002") : ?>
		.dashboard-wrapper {
			width: 75%;
		}
	<?php endif; ?>

	</style>


	<form method="post" enctype="multipart/form-data">
		 <fieldset class="inserisci_auto">

			<div style="width:48%; float:left; margin-right:2%">
				<h4>
					Dettagli Auto
				</h4>
				<br/>
				<label>
					Sede
				</label>
				<select class="sede" name="pa_sede">
					<option>-- Seleziona Sede --</option>
					<option <?php if ($sede == "magenta"): echo "selected"; endif; ?> value="magenta" >Magenta</option>
					<option <?php if ($sede == "olbia"): echo "selected"; endif; ?> value="olbia" >Olbia</option>
				</select>

                <br/>
                <label>
                    Contributo ecobonus elitcar
                </label>
                <input type="text" class="meta_ecobonus" name="meta_ecobonus" value="<?php echo $ecobonus ?>" />
                <br/>

                <label>
                    Nome Fornitore
                </label>
                <input class="nomeFornitore" name="meta_nomeFornitore" type="text" value="<?php echo $nome_fornitore;   ?>" />
                <br>
                <label>
                    Paese di provenienza
                </label>
                <input class="provenienza" name="meta_provenienza" type="text" value="<?php echo $provenienza;   ?>" />

                <br/>

				<label>
					Telaio
				</label>
				<input class="telaio" name="telaio" type="text" value="<?php echo $sku ?>" />

				<br/>

                <label>
                    Targa
                </label>
                <input class="targa" name="meta_targa" type="text" value="<?php echo $targa ?>" />

                <br/>

				<label>
					Tipologia
				</label>

				<select class="tipologia" name="pa_tipologia">
				<?php
					$terms = array("jahreswagen","AZIENDALI IMMATRICOLATE","disponibilita","aziendali", "kmzero", "nuovo", "usato");
					foreach ( $terms as $term ) {

						if (strtoupper($term) == strtoupper($tipologia)):
							$selected = "selected";
						else:
							$selected = "";
						endif;

						/*if (($term== "disponibilità") && ($tipologia == "disponibilita")) {
							$class_selected = "selected";
						}*/

						echo "<option ".$selected ." value='".$term."'>" . ucfirst ($term) . "</option>";
					}
				?>
				</select>

				<br/>

				<label>
					Marca
				</label>

				<select id="cambia_marca" class="marca" name="marca">
					<option value="-1">Seleziona Marca</option>
					<?php

					  $taxonomy     = 'product_cat';
					  $orderby      = 'name';
					  $show_count   = 0;      // 1 for yes, 0 for no
					  $pad_counts   = 0;      // 1 for yes, 0 for no
					  $hierarchical = 1;      // 1 for yes, 0 for no
					  $title        = '';
					  $empty        = 0;

					  $args = array(
					         'taxonomy'     => $taxonomy,
					         'orderby'      => $orderby,
					         'show_count'   => $show_count,
					         'pad_counts'   => $pad_counts,
					         'hierarchical' => $hierarchical,
					         'title_li'     => $title,
					         'hide_empty'   => $empty
					  );
					 $all_categories = get_categories( $args );
					 foreach ($all_categories as $cat) {
					    if($cat->category_parent == 0) {
					        $category_id = $cat->term_id;

							if ($cat->name == $marca):
								$selected = "selected";
							else:
								$selected = "";
							endif;



							if (strpos($cat->name, 'as_') !== false) {
					        	echo '<option style="color:red !important; font-weight:bold !important" '.$selected.' marcaid="'.$cat->term_id.'" value="'.$cat->name.'">' .  str_replace("as_", "", $cat->name) . '</option>';
					        } else {
					        	echo '<option '.$selected.' marcaid="'.$cat->term_id.'" value="'.$cat->name.'">' .  str_replace("as_", "", $cat->name) . '</option>';
					        }



					    }
					}
					?>
				</select>

				<br/>

				<label>
					Modello
				</label>

				<?php
					echo $models_list[$i]['value'];
				?>
				<select id="modello" class="modello" name="pa_modello" style="/*width: 100%;*/ border: 1px solid #000;">

					<option>-- Seleziona prima una Marca --</option>
					<?php

						$terms = get_terms("pa_modello", array('hide_empty' => false ));

						foreach ( $terms as $term ) {
							if ($modello == $term->name) {
								$class_selected = "selected";
							} else {
								$class_selected = "";
							}
							//echo "<option marcaid='".$term->description."' ".$class_selected." value='".$term->name."'>" . $term->name . "</option>";
							if (strpos($term->name, 'as_') !== false) {
					        	echo "<option style='color:red !important; font-weight:bold;' marcaid='".$term->description."' ".$class_selected." value='".$term->name."'>" . str_replace("as_", "", $term->name) . "</option>";
					        } else {
					        	echo "<option marcaid='".$term->description."' ".$class_selected." value='".$term->name."'>" .  str_replace("as_", "", $term->name) . "</option>";
					        }
						}

					?>
				</select>
				<!-- <select class="modello ui search dropdown" name="pa_modello" id="autocomplete_modello" style="width: 100%; border: 1px solid #000;"> -->
				<?php
					/*$terms = get_terms("pa_modello", array('hide_empty' => false ));
					foreach ( $terms as $term ) {
						if ($modello == $term->name) {
							$class_selected = "selected";
						} else {
							$class_selected = "";
						}
						echo "<option ".$class_selected." value='".$term->name."'>" . $term->name . "</option>";
					}*/
				?>
				<!-- </select>-->


				<?php
					/*$i = 0;
					$terms = get_terms("pa_modello", array("hide_empty" => false));
					foreach ( $terms as $term ) {
						if ($term->parent == 0){ continue; }


						$models_list[$i]['value'] = $term->name;

						$i++;
					}*/
				?>

				<!-- <input type="text" value="<?php echo $modello  ?>" name="pa_modello" id="autocomplete_modello"/> -->

				<br/>

				<label>
					Motorizzazione
				</label>

				<?php
					$i = 0;
					$terms = get_terms("pa_motorizzazione", array("hide_empty" => false));
					foreach ( $terms as $term ) {
						if ($term->parent == 0){ continue; }
						$motorizzazione_list[$i]['value'] = $term->name;

						$i++;
					}
				?>
				<input type="text" value="<?php echo $motorizzazione  ?>"  name="pa_motorizzazione" id="autocomplete_motorizzazione"/>
				<br/>

				<label>
					Potenza (kW)
				</label>
				<input type="text" class="meta_PotenzaKW" name="meta_PotenzaKW" value="<?php echo $potenzaKW ?>" />

				<br/>

				<label>
					Versione
				</label>

				<?php
					$i = 0;
					$terms = get_terms("pa_versione", array("hide_empty" => false));
					foreach ( $terms as $term ) {
						if ($term->parent == 0){ continue; }
						$versione_list[$i]['value'] = $term->name;

						$i++;
					}
				?>
				<input type="text" value="<?php echo $versione  ?>"   name="pa_versione" id="autocomplete_versione"/>
				<br/>

				<label>
					Verniciatura
				</label>

				<?php
					$i = 0;
					$terms = get_terms("pa_verniciatura", array("hide_empty" => false));
					foreach ( $terms as $term ) {
						if ($term->parent == 0){ continue; }
						$verniciatura_list[$i]['value'] = $term->name;

						$i++;
					}
				?>
				<input type="text" value="<?php echo $verniciatura  ?>"   name="pa_verniciatura" id="autocomplete_verniciatura"/>

				<br/>

				<label>
					Tapezzeria
				</label>

				<?php
					$i = 0;
					$terms = get_terms("pa_tapezzeria", array("hide_empty" => false));
					foreach ( $terms as $term ) {
						if ($term->parent == 0){ continue; }
						$tapezzeria_list[$i]['value'] = $term->name;

						$i++;
					}
				?>
				<input type="text" value="<?php echo $tapezzeria  ?>"   name="pa_tapezzeria" id="autocomplete_tapezzeria"/>

				<br/>

				<label>
					Alimentazione
				</label>
				<select class="alimentazione" name="pa_alimentazione">
				<?php
					$terms = get_terms("pa_alimentazione", array("hide_empty" => false));
					foreach ( $terms as $term ) {

						if ($term->name == $alimentazione):
							$selected = "selected";
						else:
							$selected = "";
						endif;

						echo "<option ".$selected." value='".$term->name."'>" . $term->name . "</option>";
					}
				?>
				</select>

				<br/>
				<label>
					Co2
				</label>
				<input type="text" class="meta_CO2" name="meta_CO2" value="<?php echo $co2 ?>" />

				<br/>
				<label>
					Consumi Ciclo Comb.
				</label>
				<input type="text" class="meta_Consumi" name="meta_Consumi" value="<?php echo $consumi ?>" />

				<br/>
				<div style="background-color: #eaeaea;padding: 15px; padding-bottom:0; margin-bottom: 15px; border: 3px dashed #fe7500">
					<!-- TEST ESEGUITO SU CODICE TELAIO: WDC1569081J377374 -->

					<label>Marca <small style="font-weight: bold; color: red">[ Auto Scout ]</small></label>
					<select class="tipologia search selection dropdown" id="jsMarcaAS" name="meta_marcaAS">
						<option value="-1">- Seleziona -</option>
						<?php
							$results = $wpdb->get_results("SELECT * FROM autoScoutMarche");
							foreach ( $results as $result ) {

								if ($marcaAS == $result->descrizione) :
									$marcaASSelected = 'selected';
								else:
									$marcaASSelected = '';
								endif;

								echo '<option '.$marcaASSelected.' value="'.$result->descrizione.'" marcaid="'.$result->idAS.'">'.$result->descrizione.'</option>';
							}
						?>
					</select>
					<br/>

					<label>Modello <small style="font-weight: bold; color: red">[ Auto Scout ]</small></label>
					<select class="tipologia search selection dropdown" name="meta_modelloAS" id="jsModelloAS">
						<option value="-1">- Seleziona -</option>
						<?php
							$results = $wpdb->get_results("SELECT * FROM autoScoutModello");
							foreach ( $results as $result ) {

								if ($modelloAS == $result->descrizione) :
									$modelloASSelected = 'selected';
								else:
									$modelloASSelected = '';
								endif;

								echo '<option '.$modelloASSelected.' data-group="'.$result->idMarcaAS.'" value="'.$result->descrizione.'">'.$result->descrizione.'</option>';
							}
						?>
					</select>
					<br/>


					<label>Tipologia <small style="font-weight: bold; color: red">[ Auto Scout ]</small></label>
					<select class="tipologia" name="meta_tipologiaAS">
						<option value="-1">- Seleziona -</option>
						<option <?php if ($tipologiaAS == "bus_van") : echo 'selected'; endif; ?> value="bus_van">Bus Van</option>
						<option <?php if ($tipologiaAS == "compact") : echo 'selected'; endif; ?> value="compact">Compatta</option>
						<option <?php if ($tipologiaAS == "convertible") : echo 'selected'; endif; ?> value="convertible">Cabrio</option>
						<option <?php if ($tipologiaAS == "coupe") : echo 'selected'; endif; ?> value="coupe">Coupe</option>
						<option <?php if ($tipologiaAS == "off_road") : echo 'selected'; endif; ?> value="off_road">Off Road</option>
						<option <?php if ($tipologiaAS == "sedan") : echo 'selected'; endif; ?> value="sedan">Berlina</option>
						<option <?php if ($tipologiaAS == "station_wagon") : echo 'selected'; endif; ?> value="station_wagon">Station Wagon</option>
						<option <?php if ($tipologiaAS == "transporter") : echo 'selected'; endif; ?> value="transporter">Transporter</option>
						<option <?php if ($tipologiaAS == "other_car") : echo 'selected'; endif; ?> value="other_car">Altro</option>
					</select>
					<br/>


					<label>Colore Esterno <small style="font-weight: bold; color: red">[ Auto Scout ]</small></label>
					<select class="tipologia" name="meta_ColEsternoAS">
						<option value="-1">- Seleziona -</option>
						<option <?php if ($ColEsternoAS == "beige") : echo 'selected'; endif; ?> value="beige">Beige</option>
						<option <?php if ($ColEsternoAS == "black") : echo 'selected'; endif; ?> value="black">Nero</option>
						<option <?php if ($ColEsternoAS == "blue") : echo 'selected'; endif; ?> value="blue">Blu/Azzurro</option>
						<option <?php if ($ColEsternoAS == "bronze") : echo 'selected'; endif; ?> value="bronze">Bronzo</option>
						<option <?php if ($ColEsternoAS == "brown") : echo 'selected'; endif; ?> value="brown">Marrone</option>
						<option <?php if ($ColEsternoAS == "green") : echo 'selected'; endif; ?> value="green">Verde</option>
						<option <?php if ($ColEsternoAS == "grey") : echo 'selected'; endif; ?> value="grey">Grigio</option>
						<option <?php if ($ColEsternoAS == "orange") : echo 'selected'; endif; ?> value="orange">Arancione</option>
						<option <?php if ($ColEsternoAS == "red") : echo 'selected'; endif; ?> value="red">Rosso</option>
						<option <?php if ($ColEsternoAS == "silver") : echo 'selected'; endif; ?> value="silver">Argento</option>
						<option <?php if ($ColEsternoAS == "violet") : echo 'selected'; endif; ?> value="violet">Viola</option>
						<option <?php if ($ColEsternoAS == "white") : echo 'selected'; endif; ?> value="white">Bianco</option>
						<option <?php if ($ColEsternoAS == "yellow") : echo 'selected'; endif; ?> value="yellow">Giallo</option>
					</select>
					<br/>

					<label>Colore Interno <small style="font-weight: bold">[ Auto Scout ]</small></label>
					<select class="tipologia" name="meta_ColInternoAS">
						<option value="-1">- Seleziona -</option>
						<option <?php if ($ColInternoAS == "beige") : echo 'selected'; endif; ?> value="beige">Beige</option>
						<option <?php if ($ColInternoAS == "black") : echo 'selected'; endif; ?> value="black">Nero</option>
						<option <?php if ($ColInternoAS == "blue") : echo 'selected'; endif; ?> value="blue">Blu/Azzurro</option>
						<option <?php if ($ColInternoAS == "brown") : echo 'selected'; endif; ?> value="brown">Marrone</option>
						<option <?php if ($ColInternoAS == "green") : echo 'selected'; endif; ?> value="green">Verde</option>
						<option <?php if ($ColInternoAS == "grey") : echo 'selected'; endif; ?> value="grey">Grigio</option>
						<option <?php if ($ColInternoAS == "orange") : echo 'selected'; endif; ?> value="orange">Arancione</option>
						<option <?php if ($ColInternoAS == "red") : echo 'selected'; endif; ?> value="red">Rosso</option>
						<option <?php if ($ColInternoAS == "white") : echo 'selected'; endif; ?> value="white">Bianco</option>
						<option <?php if ($ColInternoAS == "yellow") : echo 'selected'; endif; ?> value="yellow">Giallo</option>
						<option <?php if ($ColInternoAS == "other") : echo 'selected'; endif; ?> value="other">Altro</option>
					</select>
					<br/>


					<label>Interni <small style="font-weight: bold">[ Auto Scout ]</small></label>
					<select class="tipologia" name="meta_internoAS">
						<option value="-1">- Seleziona -</option>
						<option <?php if ($internoAS == "alcantara") : echo 'selected'; endif; ?> value="alcantara">Alcantara</option>
						<option <?php if ($internoAS == "cloth") : echo 'selected'; endif; ?> value="cloth">Stoffa</option>
						<option <?php if ($internoAS == "full_leather") : echo 'selected'; endif; ?> value="full_leather">Pelle Totale</option>
						<option <?php if ($internoAS == "part_leather") : echo 'selected'; endif; ?> value="part_leather">Pelle Parziale</option>
						<option <?php if ($internoAS == "velour") : echo 'selected'; endif; ?> value="velour">Velour</option>
						<option <?php if ($internoAS == "other") : echo 'selected'; endif; ?> value="other">Altro</option>
					</select>
					<br/>

					<label>Potenza KW <small style="font-weight: bold">[ Auto Scout ]</small></label>
					<input type="text" value="<?php echo $potenzaAS; ?>" name="meta_potenzaAS" />

					<label>Cambio <small style="font-weight: bold">[ Auto Scout ]</small></label>
					<select class="tipologia" name="meta_cambioAS">
						<option value="-1">- Seleziona -</option>
						<option <?php if ($cambioAS == "manual") : echo 'selected'; endif; ?> value="manual">Manuale</option>
						<option <?php if ($cambioAS == "automatic") : echo 'selected'; endif; ?> value="automatic">Automatico</option>
						<option <?php if ($cambioAS == "semi-automatic") : echo 'selected'; endif; ?> value="semi-automatic">Semi Automatico</option>
					</select>


					<label>Cilindrata <small style="font-weight: bold">[ Auto Scout ]</small></label>
					<input type="text" value="<?php echo $cilindrataAS; ?>"  name="meta_cilindrataAS" />


					<?php

					$equiments_AS = array (
						array("Alloy_wheels","Cerchi in Lega"),
						//array("Central_door_lock","Chiusura Centralizzato"),
						array("Alarm_system","Allarme"),
						array("Navigation_system","Navigatore"),
						//array("Side_airbag","Airbag Laterale"),
						array("Seat_heating","Sedili Riscaldabili"),
						array("Cruise_control","Cruise Control"),
						array("Xenon_headlights","Fari allo Xeno"),
						//array("Onboard_computer","Onboard_computer"), // Tutte
						//array("Electronic_stability_control","ESP"),
						array("Fog_lights","Fendinebbia"),
						array("Trailer_hitch","Gancio Traino"),
						array("Air_conditioning","Aria Condizionata"),
						array("Automatic_climate_control","Climatizzatore Automatico"),
						array("Traction_control","Traction Control"),
						array("Electrically_adjustable_seats","Sedili regolabili elettricamente"),
						//array("MP3","MP3"), //Tutte
						array("Rear_airbag","Airbag Posteriore"),
						array("Head_airbag","Airbag per la testa"),
						array("Central_door_lock with_remote_control","Chiusura Centralizzata con telecomando"),
						//array("With_full_service_history","Libretto Service"), //Tutte
						array("Panorama_roof","Tetto Panoramico"),
						array("Sunroof","Tetto Apribile"),
						array("Driver_Drowsiness_Detection","Attention Assist"),

						array("Particulate_filter","Filtro Antiparticolato"),
						//array("Nonsmoking_vehicle","Veicolo non Fumatori"),
						//array("Cab_or_rented_Car","Auto a Noleggio"),
						array("Sport_package","Pacchetto Sport"),
						array("Startstop_system","Start & Stop"),
						array("Multi-function_steering_wheel","Volante Multifunzione"),
						array("Sport_suspension","Sospensioni sportive"),
						array("Sport_seats","Sedili sportivi"),
						array("Adaptive_headlights","Fari adattivi"),
						array("Electrical_side_mirrors","Specchietti laterali elettrici"),
						array("Bluetooth","Bluetooth"),
						array("Isofix","Isofix"),
						array("Light_sensor","Sensore di luce"),
						array("Rain_sensor","Sensore di Pioggia"),
						array("Parking_assist_system_sensors_front","Sensori di parcheggio anteriore"),
						array("Parking_assist_system_sensors_rear","Sensore di parcheggio posteriore"),
						array("CD_player","Lettore CD"),
						array("Adaptive_cruise_control","Adaptive Cruise Control"),
						array("Armrest","Bracciolo"),
						array("Electrically_heated_windshield","Parabrezza riscaldato elettricamente"),
						array("Heated_steering_wheel","Volante Riscaldato"),
						array("Electric_tailgate","Portellone elettrico"),
						array("LED_Headlights","Fari a LED"),
						array("LED_Daytime_running_lights","Luci di marcia diurna a LED"),
						array("Leather_steering_wheel","Volante in Pelle"),
						array("Lumbar_support","Supporto Lombare"),
						array("Air_suspension","Sospensioni ad Aria"),
						//array("Night_view_assist","Night View Assist"),
						array("Emergency_break_assistant","Assistente freni di emergenza"),
						array("Emergency_system","Sistema di emergenza"),
						array("Tire_pressure_monitoring_system","Sistema di monitoraggio della pressione degli pneumatici"),
						array("Seat_ventilation","Ventilazione del sedile"),
						array("Sound_system","Sound System"),
						array("Voice_control","Controllo Vocale"),
						array("Touch_screen","Touch Screen"),
						array("USB","USB"),
						array("Traffic_sign_recognition","Riconoscimento del segnale stradale"),
						array("Blind_spot_monitor","Blind Spot Monitor"), //Daltonico?
						array("Hill_holder","Hill Holder"), // Qualcosa sulla discesa
						array("Parking_assist_system_camera","Telecamera Posteriore"),
						array("Lane_departure_warning_system","Lane keeping assist"),
						array("Parking_assist_system_self","Parcheggio Automatizzato"),
						array("Shift_paddles","Palette Cambio Volante"),
						//array("Daytime_running_lights","Luci Diurne"), Sempre Flaggato
						array("Auxiliary_heating","Riscaldamento Ausiliare"),
						array("Tinted_windows","Finestrini Oscurati")
					);


					?>
					<style type="text/css">

						ul.listtwo {

						  	columns: 2;
							-webkit-columns: 2;
						  	-moz-columns: 2;

						  	margin: 0;
						  	padding: 0;

						}

						ul.listtwo li {
							list-style: none;
						}
						ul.listtwo li input {
							width: auto;
						}
						ul.listtwo li label {
							width: 65%;
						}

					</style>
					<?php
					$count = 1;
					echo '<ul class="listtwo">';
					foreach ($equiments_AS as $val) : ?>

						<li>
							<label for="meta_<?php echo $val[0];?>"><?php echo $val[1]; ?></label>

							<input type="hidden" value="0" name="meta_<?php echo $val[0];?>" style="display: none"  />
							<input type="checkbox" value="1" <?php if ( get_post_meta($_GET['carID'], str_replace("_", " ", $val[0]), true ) == "1") : echo "checked"; endif; ?>  name="meta_<?php echo $val[0];?>"  id="meta_<?php echo $val[0];?>" />

						</li>

						<!-- <div style="display: block;clear: both; border-top: 1px solid #dcdcdc; margin-bottom: 10px;"></div> -->
					<?php
						if ($count == 2) {
							echo '<div style="clear:both; display:block"></div>';
							$count = 1;
						}
						$count++;
					endforeach;


					$equiments_AS = array (

						array("meta:Onboard computer","Computer di bordo"),
						array("meta:Electronic stability control","ESP"),
						array("meta:Central door lock","Chiusura centralizzata"),
						array("meta:ABS","ABS"),
						array("meta:Radio","Radio"),
						array("meta:Side_airbag","Airbag Laterali"),
						array("Power_steering","Servosterzo"),
						array("Digital_radio","Radio Digitale"),

					);

					$count = 1;
					foreach ($equiments_AS as $val) :

						$checkedFlag = get_post_meta($_GET['carID'], str_replace("_", " ", $val[0]), true );

/*						echo $val[0]." -> ".$checkedFlag."<br/>";

						if ( empty( $checkedFlag ) ) {
							$checkedFlag = 1;
						}*/



					?>

					<li>
						<label for="meta_<?php echo $val[0];?>"><?php echo $val[1]; ?></label>
						<input type="hidden" value="0" name="meta_<?php echo $val[0];?>" style="display: none"  />
						<input type="checkbox" value="1" <?php if ( $checkedFlag == "1" || strlen($checkedFlag) == 0) : echo "checked"; endif; ?>   name="meta_<?php echo $val[0];?>"  id="meta_<?php echo $val[0];?>" />

					</li>

					<?php

						if ($count == 2) {
							echo '<div style="clear:both; display:block"></div>';
							$count = 1;
						}
						$count++;

					endforeach;





					echo '</ul>';
					?>

				</div>


				<label>
					Chilometri
				</label>
				<input type="text" class="chilometri" name="meta_Chilometri" value="<?php echo $chilometri ?>"   />


				<br/>
				<label>
					Immatricolazione (gg/mm/aaaa)
				</label>
				<input type="text" class="immatricolazione" name="meta_Immatricolazione" value="<?php echo $immatricolazione; ?>"   />



				<br/>

				<label>
					Chiave
				</label>
				<input type="text" class="chiave" id="chiave_gen" name="meta_Chiave" value="<?php echo $chiave ?>"  />
				<a href="#" style="font-size:80%; margin-left: 10px;" id="generaChiave">Genera Numero</a>
				<br/>

				<script type="text/javascript">
					jQuery(document).ready( function($) {

						$( "#generaChiave" ).click(function() {

							_numero_corrente = $("#chiave_gen").val();

					  		$.post(ajaxurl, { 'action': 'generaNumeroChiave', numero_corrente: _numero_corrente }, function(response) {

					  			$("#chiave_gen").val(response);
								//console.log(response);

							});

							return false;

						});

						/**/

					})
				</script>


				<br/>

				<div style="display: block;clear: both;width: 100%;"></div>
				<label>
					Conto Esposizione Presso
					<b><small>L'auto impostata come conto esposizione sarà visibile solo al salone selezionato e l'utente amministratore</small></b>
				</label>

				<?php
				$PressoSalone = trim($PressoSalone);
				 //echo "Presso: ".$PressoSalone; ?>
				<select class="modello" name="meta_PressoSalone">
					<option>Elitcar</option>
					<?php
						$blogusers = get_users( 'orderby=nicename&role=salonista' );
						foreach ( $blogusers as $user ) {

							if (!empty(trim($PressoSalone ))){
								if ($PressoSalone == esc_html( $user->ID )) {
									$class_pressoSaloneCheck = "selected";
								} else {
									$class_pressoSaloneCheck = "";
								}
							} else {
								$class_pressoSaloneCheck = "";
							}

							echo '<option '.$class_pressoSaloneCheck.' value=" '.esc_html( $user->ID ).' ">' . esc_html( $user->ragione_sociale ) . '</option>';
						}
					?>
				</select>
				<div style="display: block;clear: both;width: 100%;"></div>

				<label>
					Parcheggio
				</label>

				<?php ParcheggiDisponibili($Parcheggio); ?>


				<a style="font-size:80%; margin-left: 10px;" href="http://jahreswagen-italia.it/wp-content/uploads/2018/03/PlanimetriaColori.jpg" target="_blank">Guarda la Planimetria</a>
				<br/>

				<br/>


				<label>
					Stato Dell'Auto / Reparto
				</label>
				<select class="modello" name="meta_StatoAuto">

					<option <?php if ($StatoAuto == "Da Definire") : echo 'selected'; endif; ?> >Da Definire</option>

					<option <?php if ($StatoAuto == "Libera") : echo 'selected'; endif; ?> >Libera</option>

					<option <?php if ($StatoAuto == "Carrozzeria") : echo 'selected'; endif; ?> >Carrozzeria</option>
					<option <?php if ($StatoAuto == "Officina") : echo 'selected'; endif; ?> >Officina</option>

					<option <?php if ($StatoAuto == "Venduta") : echo 'selected'; endif; ?> >Venduta</option>
					<option <?php if ($StatoAuto == "Preconsegna") : echo 'selected'; endif; ?> >Preconsegna</option>
					<option <?php if ($StatoAuto == "Consegnata") : echo 'selected'; endif; ?> >Consegnata</option>

				</select>

				<br/>

				<label>
					Data di Arrivo
				</label>
				<input type="text" class="data_arrivo" name="meta_Data_di_Arrivo" value="<?php echo $data_di_arrivo ?>"  />

				<br/>

				<label>
					Auto In Arrivo
				</label>
				<?php
					if ($auto_disponibile) { $class_auto_disp  = "checked";} else { $class_auto_disp  = ""; }
				?>
				<input type='hidden' value='0' name='meta_Auto_Disponibile'>
				<input type="checkbox" <?php echo $class_auto_disp; ?> class="auto_disponibile" name="meta_Auto_Disponibile" />

				<br/>


				<label>
					In Ripristino
				</label>
				<?php
					if ($auto_inripristino) { $class_auto_in_ripristino  = "checked";} else { $class_auto_in_ripristino  = ""; }
				?>
				<input type='hidden' value='0' name='meta_In_Ripristino'>
				<input type="checkbox" style="width: auto;" <?php echo $class_auto_in_ripristino; ?> class="auto_inripristino" name="meta_In_Ripristino" />


				<?php
					$data_in_ripristino = get_post_meta($post_id,"data_in_ripristino",true);
					if ($data_in_ripristino):
				?>
				<label style="float:none;text-align: left; margin-left: 12px;">Data Ripristino:  <?php echo date("d/m/Y",$data_in_ripristino); ?>  </label>
				<?php
					endif;
				?>
				<!-- data_in_ripristino
				 -->

				<br/>


				<label>
					Auto Pronta
				</label>
				<?php
					if ($auto_pronta) { $class_auto_pronta  = "checked";} else { $class_auto_pronta  = ""; }
				?>
				<input type='hidden' value='0' name='meta_Auto_Pronta'>
				<input type="checkbox" style="width: auto;" <?php echo $class_auto_pronta; ?> class="auto_pronta" name="meta_Auto_Pronta" />
				<?php
					$data_auto_disponibile = get_post_meta($post_id,"data_auto_disponibile",true);
					if ($data_auto_disponibile):
				?>
				<label style="float:none;text-align: left; margin-left: 12px;">Data Disponibile: <?php echo date("d/m/Y",$data_auto_disponibile); ?> </label>
				<?php
					endif;
				?>
				<br/>



				<h4>
					Ri / Pe / Pa
				</h4>
				<br/>

				<label>
					Prezzo Ripristino
				</label>
				<input type="text" class="prezzo_ripristino" name="meta_Prezzo_Ripristino" value="<?php echo $prezzo_ripristino ?>"  />

				<br/>

				<label>
					Descrizione Ripristino
				</label>
				<textarea class="descrizione_ripristino" name="meta_Descrizione_Ripristino" ><?php echo br2nl($descrizione_ripristino) ?></textarea>

				<br/>

				<label>

					Prezzo Perizia
				</label>
				<input type="text" class="prezzo_perizia" name="meta_Prezzo_Perizia"  value="<?php echo $prezzo_perizia ?>"  />

				<br/>

				<label>
					Descrizione Perizia
				</label>
				<textarea class="descrizione_perizia" name="meta_Descrizione_Perizia" ><?php echo br2nl($descrizione_perizia) ?></textarea>

				<br/>

				<label>
					Prezzo Parti Mancanti
				</label>
				<input type="text" class="prezzo_parti_mancanti" name="meta_Prezzo_Parti_Mancanti" value="<?php echo $prezzo_parti_mancanti ?>" />


				<br/>

				<label>
					Descrizione Parti Mancanti
				</label>
				<textarea class="descrizione_parti_mancanti" name="meta_Descrizione_Parti_Mancanti" ><?php echo br2nl($descrizione_parti_mancanti) ?></textarea>


			</div>

			<div style="width:50%; float:left">
				<?php if (strtoupper($tipologia)  == "USATO"){
					?>
					<div id="wrapper-prezzi-usato">
					<?php
				} else {
					?>
					<div id="wrapper-prezzi-usato" style="display: none">
					<?php
				}
				?>

					<h4>
						Prezzi Usato
					</h4>
					<label>
						Promo
					</label>


					<?php

					if (strtoupper($tipologia)  == "USATO") :

						if ($promo) { $class_promo  = "checked";} else { $class_promo  = ""; }
					?>
					<input type='hidden' value='0' name='meta_Promo'>
					<input type="checkbox" <?php echo $class_promo; ?> class="meta_Promo" name="meta_Promo" />
					<?php

					endif;

					?>
					<br/>
					<label>
						Trapasso
					</label>
					<input type="text" class="meta_Trapasso" name="meta_Trapasso" value="<?php echo $trapasso ?>" />

                    <br>

					<label>
						Prezzo al Cliente
					</label>
					<input type="text" class="meta_Prezzo_al_Cliente" name="meta_Prezzo_al_Cliente" value="<?php echo $prezzoalcliente ?>" />
					<br/>
					<label>
						Prezzo al Cliente con Ritiro Usato
					</label>
					<input type="text" class="meta_Prezzo_Pubblico_con_ritiro_usato" name="meta_Prezzo_Pubblico_con_ritiro_usato" value="<?php echo $prezzo_pubblico_con_ritiro_usato ?>" />
					<br/>
					<label>
						Prezzo al Commerciante WEB
					</label>
					<input type="text" class="meta_Prezzo_al_Commerciante" name="meta_Prezzo_al_Commerciante" value="<?php echo $prezzoalcommerciante ?>" />
					<br/>
					<label>
						Prezzo al Salonista
					</label>
					<input type="text" class="meta_Prezzo_al_Salonista" name="meta_Prezzo_al_Salonista" value="<?php echo $prezzoalsalonista ?>" />
					<br/>
					<label>
						Prezzo di carico L.85
					</label>
					<input type="text" class="meta_Prezzo_di_carico_L85" name="meta_Prezzo_di_carico_L_85" value="<?php echo $prezzodicaricol85 ?>" />
					<br/>
					<label>
						Costo di ricondizionamanto
					</label>
					<input type="text" class="meta_Prezzo_di_riconoscimento" name="meta_Prezzo_di_riconoscimento" value="<?php echo $prezzodiriconoscimento ?>" />
					<br/>
					<label>
						Scadenza Revisone Ministeriale
					</label>
					<input type="text" class="meta_Scadenda_Revisione_Ministeriale" name="meta_Scadenza_Revisione_riconoscimento" value="<?php echo $scadenzarevisioneministerial ?>" />

					<br/>
					<label>
						Scadenza Revisione (gg/mm/aaaa)
					</label>
					<input type="text" class="scadenzaRevisione" name="meta_scadenzaRevisione" value="<?php echo $scadenzaRevisione; ?>"   />

					<br/>
					<div style="clear:both; width:100%;"></div>
					<label>
						Scadenza Bollo
					</label>
					<input type="text" class="meta_Scadenda_Bollo" name="meta_Scadenza_Bollo" value="<?php echo $scadenzabollo ?>" />
					<div style="clear:both; width:100%;"></div>

					<label>
						Iva Esposta
					</label>
					<?php
						if ($esposta) { $class_iva_esp  = "checked";} else { $class_iva_esp  = ""; }
					?>
					<input type='hidden' value='0' name='meta_Esposta'>
					<input type="checkbox" <?php echo $class_iva_esp; ?> class="meta_Esposta" name="meta_Esposta" />
					<div style="clear:both; width:100%;"></div>
				</div>


				<?php if (strtoupper($tipologia)  != "USATO"){
					?>
					<div id="wrapper-prezzi-default">
					<?php
				} else {
					?>
					<div id="wrapper-prezzi-default"  style="display: none">
					<?php
				}
				?>
					<h4>
						Prezzi
					</h4>
					<br/>


					<label>
						Promo
					</label>
					<?php

					if (strtoupper($tipologia)  != "USATO"){
						if ($promo) { $class_promo  = "checked";} else { $class_promo  = ""; }
					?>
					<input type='hidden' value='0' name='meta_Promo'>
					<input type="checkbox" <?php echo $class_promo; ?> class="meta_Promo" name="meta_Promo" />
					<?php } ?>
					<br/>




                    <br/>

					<label>
						Messa in strada
					</label>
					<input type="text" class="meta_Messa_in_Strada" name="meta_Messa_in_Strada" value="<?php echo $strada ?>" />
					
					<br/>
					
					<label>
						IPT
					</label>
					<input type="text" class="meta_IPT" name="meta_IPT" value="<?php echo $ipt ?>" />

					<br/>

					<label>
						Prezzo listino
					</label>
					<input type="text" class="meta_Prezzo_Listino" name="meta_Prezzo_Listino" value="<?php echo $_prezzo_listino ?>" />


					<br/>

					<label>
						Prezzo pubblico scontato
					</label>
					<input type="text" class="meta_Prezzo_Pubblico" name="meta_Prezzo_Pubblico" value="<?php echo $prezzo_pubblico ?>" />

					<br/>

					<label>
						Prezzo Con Ritiro Usato
					</label>
					<input type="text" class="meta_Prezzo_Pubblico_con_ritiro" name="meta_Prezzo_Pubblico_con_ritiro" value="<?php echo $prezzo_pubblico_con_ritiro ?>" />


					<br/>
					<label>
						Prezzo acquisto netto Base
					</label>
					<input type="text" style="border: 2px solid #f54a4a" class="prezzo_acquisto_netto_nascosto" name="meta_prezzo_acquisto_netto_nascosto" value="<?php echo $prezzo_acquisto_netto_nascosto ?>"  />

					<br/>

					<label>
						Costo del veicolo netto
					</label>
					<input type="text" class="meta_Prezzo_Acquisto_Netto" name="meta_Prezzo_Acquisto_Netto" value="<?php echo $prezzo_acquisto_netto ?>"  />



					<br/>

					<label>
						Costo del veicolo lordo
					</label>
					<input type="text" class="meta_Prezzo_Acquisto_Lordo" name="meta_Prezzo_Acquisto_Lordo" value="<?php echo $prezzo_acquisto_lordo ?>"  />


					<br/>



					<!--<label>
						Prezzo Salonista
					</label>
					<input type="text" class="prezzo_salonista" name="prezzo_salonista" value="<?php echo $prezzo_salonista ?>" /> -->
					<label>
						Spese Trasporto Netto
					</label>
					<input type="text" class="meta_Spese_Trasporto" name="meta_Spese_Trasporto" value="<?php echo $spese_trasporto ?>" />

					<br/>

					<label>
						Spese Documenti Netto
					</label>
					<input type="text" class="meta_Spese_Documenti" name="meta_Spese_Documenti" value="<?php echo $spese_documenti ?>" />

					<br/>


					<label>
						Spese di Ricondizionamento Netto Teorico
					</label>
					<input type="text" class="meta_Spese_Ricondizionamento_Teorico" name="meta_Spese_Ricondizionamento_Teorico" value="<?php echo $ricondizionamento_teorico ?>" />

					<br/>


					<label>
						Spese di Ricondizionamento Netto Effettivo
					</label>
					<input type="text" class="meta_Spese_Generiche" name="meta_Spese_Ricondizionamento" value="<?php echo $spese_generiche ?>" />

					<br/>

					<div style="background-color: #eaeaea;padding: 15px; padding-bottom:0; margin-bottom: 15px; border: 3px dashed #fe0000">

						<label>
							Margine Netto al Pubblico
						</label>
						<input readonly  style="border:none! important; font-weight: bold; color:red" type="text" class="meta_Margine_Salonista" name="meta_Margine_Salonista" value="<?php echo $margine ?>" />
						<br/>
						<label>
							Margine Netto al Pubblico Con Ritiro Usato
						</label>
						<input readonly  style="border:none! important; font-weight: bold; color:red" type="text" class="meta_Margine_Salonista_Con_Ritiro" name="meta_Margine_Salonista_Con_Ritiro" value="<?php echo $margine_con_ritiro ?>" />
						<br/>
						<label>
							Margine Netto Salonista
						</label>
						<input readonly  style="border:none! important; font-weight: bold; color:red" type="text" class="meta_Margine" name="meta_Margine" value="<?php echo $margine ?>" />


					</div>

					<div style="clear:both; width:100%;"></div>

					<label>
						Prezzo Salonista Netto
					</label>
					<input readonly  style="border:none! important; font-weight:bold; "type="text" class="prezzo_salonista" id="meta_Prezzo_Salonista_Netto" name="meta_Prezzo_Salonista_Netto" value="<?php echo $prezzo_salonista_netto ?>" />

					<div style="clear:both; width:100%;"></div>

					<label>
						Prezzo Salonista Lordo
					</label>
					<input style="font-weight:bold; " type="text" id="meta_Prezzo_Salonista" class="meta_Prezzo_Salonista" name="meta_Prezzo_Salonista" value="<?php echo $prezzo_salonista ?>" />

					<br/>



					<label>
						Iva Deducibile
					</label>
					<?php
						if ($deducibile) { $class_iva_ded  = "checked";} else { $class_iva_ded  = ""; }
					?>
					<input type='hidden' value='0' name='meta_Deducibile'>
					<input type="checkbox" <?php echo $class_iva_ded; ?> class="iva_deducibile" name="meta_Deducibile" />
				</div>

				<br/>

				<h4>
					Optional Principali
				</h4>
				<br/>


				<?php

					if ($navigatore) { $class_navigatore  = "checked";} else { $class_navigatore  = ""; }
					if ($tetto_apribile) { $class_tetto  = "checked";} else { $class_tetto  = ""; }
					if ($tetto_panoramico) { $class_tettopanoramico  = "checked";} else { $class_tettopanoramico  = ""; }
					if ($sensore_park) { $class_sensore_park  = "checked";} else { $class_sensore_park  = ""; }
					if ($cambio_automatico) { $class_cambio_automatico  = "checked";} else { $class_cambio_automatico  = ""; }
					if ($specchi_richiudibili) { $class_richiudibili  = "checked";} else { $class_richiudibili  = ""; }
					if ($fari_xeno) { $class_farixeno  = "checked";} else { $class_farixeno  = ""; }
					if ($clima_automatico) { $class_clima_automatico  = "checked";} else { $class_clima_automatico  = ""; }
				?>

				<label>Navigatore</label> <input type='hidden' value='0' name='pa_navigatore'><input type="checkbox" value="NAVIGATORE" <?php echo $class_navigatore; ?> name="pa_navigatore" class="navigatore" /><br/>
				<label>Tetto apribile elettrico</label> <input type='hidden' value='0' name='pa_tetto'><input type="checkbox" value="TETTO" <?php echo $class_tetto; ?> name="pa_tetto" class="tetto_apribile" /><br/>
				<label>Tetto panoramico</label> <input type='hidden' value='0' name='pa_tettopanoramico'><input type="checkbox" value="TETTO PANORAMICO" <?php echo $class_tettopanoramico; ?> name="pa_tettopanoramico" class="pa_tettopanoramico" /><br/>
				<label>Sensore Park</label> <input type='hidden' value='0' name='pa_park'><input value="SENSORE PARK" type="checkbox" <?php echo $class_sensore_park; ?> name="pa_park" class="sensore_park" /><br/>
				<label>Cambio automatico</label> <input type='hidden' value='0' name='pa_automatico'><input value="CAMBIO AUTOMATICO" type="checkbox" <?php echo $class_cambio_automatico; ?> name="pa_automatico" class="cambio_automatico" /><br/>
				<label>Specchi Richiudibili</label> <input type='hidden' value='0' name='pa_specchirichiudibili'><input value="SPECCHI RICHIUDIBILI" type="checkbox" <?php echo $class_richiudibili; ?> name="pa_specchirichiudibili" class="specchi_richiudibili" /><br/>
				<label>Fari Xeno</label> <input type='hidden' value='0' name='pa_farixeno'><input type="checkbox" value="FARI-XENO" <?php echo $class_farixeno; ?> name="pa_farixeno" class="farixeno" /><br/>
				<label>Clima Automatico</label> <input type='hidden' value='0' name='pa_climaautomatico'><input type="checkbox" value="CLIMA AUTOMATICO" <?php echo $class_clima_automatico; ?> name="pa_climaautomatico" class="clima_automatico" /><br/>

				<h4>
					Accessori
				</h4>
				<br/>

<!--
				<label>
					<a class='inline' href="#inline_content">Visualizza</a>
				</label>
				<span style="display:block" class="nessun_accessorio">Nessun Accessorio Selezionato</span>
				<style>
					.accessori_list li { line-height: 15px; }
				</style>
				<ul style="display:block; margin-left:150px; font-size:10px" class="accessori_list">

				</ul>
				<input type="hidden" value="" id="str_accessori" name="str_accessori" />-->
				<div style="width:100%; margin-bottom:25px; text-align:center; cursor:pointer">
					<a class='aggiungi_accessorio'>Aggiungi Accessorio</a>
				</div>

				<div class="accessoriWrapper">
					<?php
					if (!empty($accessori)) {
						$accessori = explode("|",$accessori);
						$index_id = 0;
						foreach ($accessori as $accessorio){
							$index_id++;
							?>
							<div id="acc_<?php echo $index_id ?>">
								<div style="clear:both"></div>
								<label>Accessorio</label>
								<input type="text" class="meta_Accessorio" name="meta_Accessorio[]" value="<?php echo $accessorio ?>" />
								 <a class="delete_accessorio" idAccessorio="<?php echo $index_id; ?>" href="#"><i class="fa fa-times"></i></a>
							 </div>
							<?php
						}
					}
					?>
				</div>




				<div style="clear:both"></div>
				<br/>
				<br/>
				<h4>
					Note Interne
				</h4>
				<br/>

				<textarea style="width:95% ; margin:0 auto" class="note" name="meta_Note_Interne" ><?php echo $note_interno; ?></textarea>

				<h4>
					Note Aggiuntive
				</h4>
				<br/>

				<?php if ($_GET['fill_edit'] == "true") : ?>
					<!-- <a href="http://jahreswagen-italia.it/?page_id=22422&auto_id=<?php echo $_GET['carID'] ?>" target="_blank" data-jax="false">Crea Scheda Usato</a><br/><br> -->
					<!-- <span id="crea_scheda_usato">Crea Scheda Usato</span>-->
				<?php endif; ?>

				<textarea style="width:95% ; margin:0 auto" class="note" name="meta_Note" ><?php echo $note; ?></textarea>

				<div class="btnWrapper">
					<input type="submit" class="btn salva_auto" value="<?php echo $edit_label  ?>">
				</div>

				<?php
				if ($edit_car){
					?>
						<input type="hidden" name="oldani_modifica_auto" value="<?php echo wp_create_nonce('oldani_modifica_auto'); ?>"/>
						<input type="hidden" name="post_id" value="<?php echo $_GET['carID']; ?>"/>
					<?php
				} else {
					?>
						<input type="hidden" name="oldani_inserisci_auto" value="<?php echo wp_create_nonce('oldani_inserisci_auto'); ?>"/>
					<?php
				}
				?>


			</div>

			<div style="clear:both"></div>


				<div style="width:100%">
					<h4>
						Immagini
					</h4>
					<br/>

					<table>
						<tr>
							<td>
								<input type="file" name="car_imgs[]" multiple="multiple" />
							</td>
							<td>
								<!-- <input style="margin-left:15px" type="submit" value="Carica Immagine" /> -->
							</td>
						</tr>
					</table>

				<?php
					global $wpdb;
					/*$results = $wpdb->get_results('select scheda_id from wp_scheda_usato WHERE meta_key = "su_ntarga" and meta_value = "'.$sku.'"');
					$scheda_id = $results[0]->scheda_id;*/
					$scheda_id = get_post_meta($_GET['carID'],"su_scheda_id",true);

					if (!empty($scheda_id)) {
						echo '<input type="hidden" name="imageFor" value="scheda_usato" />';
						echo '<input type="hidden" name="schedaUsatoID" value="'.$scheda_id.'" />';
					} else {
						echo '<input type="hidden" name="imageFor" value="scheda_base" />';
					}

				    $results = $wpdb->get_results("SELECT * FROM wp_scheda_usato_img WHERE su_id = '$scheda_id'");
				    //echo "n. foto: ".count($results);
				    echo $IdsGallery."<br/>";
					if ($tipologia != "USATO" || count($results) <= 0) :
				?>


						<ul class="galleryimg">
							<?php
								$IdsGallery = str_replace(" ", "", $IdsGallery);
								$IdsGallery = explode(",",$IdsGallery);
								$IdsGallery = array_filter($IdsGallery);

								if (count($IdsGallery) > 0){
									foreach($IdsGallery as $IdGallery){
										if ($immagineCopertina == $IdGallery){
											$class = "coverImg";
										} else {
											$class = "";
										}
										echo '<li class="'.$class.'">';

											$status_usato = get_post_meta($IdGallery,"_per_usato",true);
											if ($status_usato == 'si'){
												$ex_class = "cl_foto_usato";
											} else {
												$ex_class = "";
											}

											echo '<a class="removeImgClass fotoPerUsato '.$ex_class.'" href="'.site_url().'?act=SetUsatoImg&idPic='.$IdGallery.'&post_id='.$post_id.'" style="margin-right:65px;color:#fff;font-size:26px;"><i class="fa fa-car"></i></a>';
											echo '<a class="removeImgClass" href="'.site_url().'?act=removeImg&idPic='.$IdGallery.'&post_id='.$post_id.'"><i class="fa fa-times"></i></a>';
										echo '<a href="'.site_url().'?act=changeCoverImg&idPic='.$IdGallery.'&post_id='.$post_id.'">';
											echo wp_get_attachment_image( $IdGallery, 'thumbnail' );
										echo '</a></li>';

										echo '<input type="hidden" name="attach_ids[]" value="'.$IdGallery.'" />';
									}
								}
							?>
						</ul>

					<?php else:


					    $results = $wpdb->get_results("SELECT * FROM wp_scheda_usato_img WHERE su_id = '$scheda_id'");

					    echo "SELECT * FROM wp_scheda_usato_img WHERE su_id = '$scheda_id'";

					    echo '<ul class="galleryimg">';
			    			foreach ($results as $result) :

			    				if ($result->gia_caricato == 1){
			    					$class = "coverImg";
			    				} else {
			    					$class = "";
			    				}


			    				echo '<li class="'.$class.'">';

								/*echo '<a class="removeImgClass fotoPerUsato '.$ex_class.'" href="'.site_url().'?act=SetUsatoImg&idPic='.$IdGallery.'&post_id='.$post_id.'" style="margin-right:65px;color:#fff;font-size:26px;"><i class="fa fa-car"></i></a>';*/

								echo '<a class="removeImgClass" href="'.site_url().'?act=removeImgUsed&idPic='.$result->id.'&post_id='.$result->su_id.'&carID='.$_GET['carID'].'"><i class="fa fa-times"></i></a>';
								echo '<a href="'.site_url().'?act=changeCoverImgUsed&idPic='.$result->id.'&post_id='.$result->su_id.'&carID='.$_GET['carID'].'">';
									echo '<img class="attachment-thumbnail size-thumbnail" width="150" height="150" src="http://jahreswagen-italia.it/uploadTest/uploads/'.$result->img.'" />';

								echo '</a></li>';


		    				endforeach;
	    				echo '</ul>';

					endif; ?>
				</div>
			<!-- FINE POPUP GESTIONE ACCESSORI -->

		</fieldset>
	</form>


	<script>
jQuery.noConflict();
(function( $ ) {
  $(function() {

  		ricalcolaAcquistoNeto();

  		var full_list_modelli = $('#modello > option');

  		<?php

  		/*if (  !empty ( $modello )  ) {

  			?>


  				$("#modello").removeAttr('disabled', 'disabled');
				var marcaID = $("#cambia_marca option:selected").attr("marcaid");
				var val = marcaID;

	    		var options = full_list_modelli.filter('[marcaid=' + val + ']');

	  			$('#modello').html(options);

  			<?php

  		}*/

  		?>

  		$( "#cambia_marca" ).change(function() {

  			 $("#modello").removeAttr('disabled', 'disabled');

			var marcaID = $("option:selected", this).attr("marcaid");
			var val = marcaID;

    		var options = full_list_modelli.filter('[marcaid=' + val + ']');

  			$('#modello').html(options);


  		});


		$( ".meta_Prezzo_Salonista, .meta_Prezzo_Pubblico_con_ritiro, .meta_Prezzo_Acquisto_Netto, .meta_Spese_Trasporto, .meta_Spese_Documenti, .meta_Margine, .meta_Spese_Generiche, .meta_Spese_Ricondizionamento_Teorico" ).keyup(function() {

			ricalcolaAcquistoNeto();

		  	$("#meta_Prezzo_Salonista_Netto").val(calcolaTotale().toFixed(2));

		  	calcolaMargineSalonista();
		  	calcolaMarginePubblico();

		  	//$("#meta_Prezzo_Salonista").val((calcolaTotale() * 1.22).toFixed(2));
		});


		//TEORICO
		$( ".meta_Spese_Ricondizionamento_Teorico" ).keyup(function() {


			ricalcolaAcquistoNeto();

		  	$("#meta_Prezzo_Salonista_Netto").val(calcolaTotale().toFixed(2));
		  	//$("#meta_Prezzo_Salonista").val((calcolaTotale() * 1.22).toFixed(2));


		  	/*$("#meta_Prezzo_Salonista").val((calcolaTotale() * 1.22).toFixed(2));*/
		});



		var meta_Prezzo_Acquisto_Lordo = $(".meta_Prezzo_Acquisto_Lordo").val();

		//meta_Prezzo_Acquisto_Lordo 		= isNaN(meta_Prezzo_Acquisto_Lordo) ? 0 : meta_Prezzo_Acquisto_Lordo;
		if (isNaN(meta_Prezzo_Acquisto_Lordo)) {
			meta_Prezzo_Acquisto_Lordo = 0;
		}

		if (meta_Prezzo_Acquisto_Lordo <= 0){
			$(".meta_Prezzo_Acquisto_Lordo").val( (parseFloat($(".meta_Prezzo_Acquisto_Netto").val()) * 1.22).toFixed(2) );
		}


		$( ".prezzo_acquisto_netto_nascosto ").keyup(function() {
			/*var prezzo_netto = $(this).val();
			$(".meta_Prezzo_Acquisto_Lordo").val((prezzo_netto * 1.22).toFixed(2));*/
			ricalcolaAcquistoNeto();
		});


		//Calcola Margine
		calcolaMargineSalonista();
		calcolaMarginePubblico();

		$( ".meta_Prezzo_Acquisto_Netto ").keyup(function() {
			var prezzo_netto = $(this).val();
			$(".meta_Prezzo_Acquisto_Lordo").val((prezzo_netto * 1.22).toFixed(2));
		});


		$( ".tipologia" ).change(function() {
			//console.log($(this).val());
			if ($(this).val() == "usato"){
				$("#wrapper-prezzi-default").css( "display","none" );
				$("#wrapper-prezzi-usato").css( "display","block" );

				$("#wrapper-prezzi-usato input").attr("disabled", false);


			} else {
				$("#wrapper-prezzi-default").css( "display","block" );
				$("#wrapper-prezzi-usato").css( "display","none" );

				$("#wrapper-prezzi-usato input").attr("disabled", true);

			}
		});

		//Calcola Margine
		function calcolaMarginePubblico() {
			//Calcolo margine

			var _acquistoPerMargine = parseFloat($(".meta_Prezzo_Acquisto_Lordo").val());
			var _salonistaPerMargine = parseFloat($(".meta_Prezzo_Pubblico").val());
			var _margine = _salonistaPerMargine - _acquistoPerMargine;
			var _percentuale = 100 - ( ( _acquistoPerMargine / _salonistaPerMargine) * 100 );
			$(".meta_Margine_Salonista").val( _margine.toFixed(2) + " - " + _percentuale.toFixed(2) + " %" );



			var _acquistoPerMargine_con_ritiro = parseFloat($(".meta_Prezzo_Acquisto_Lordo").val());
			var _salonistaPerMargine_con_ritiro = parseFloat($(".meta_Prezzo_Pubblico_con_ritiro").val());
			var _margine_con_ritiro = _salonistaPerMargine_con_ritiro - _acquistoPerMargine_con_ritiro;
			var _percentuale_con_ritiro = 100 - ( ( _acquistoPerMargine_con_ritiro / _salonistaPerMargine_con_ritiro) * 100 );
			$(".meta_Margine_Salonista_Con_Ritiro").val( _margine_con_ritiro.toFixed(2) + " - " + _percentuale_con_ritiro.toFixed(2) + " %" );
			//Margine Con Rt
		}

		//Calcola Margine
		function calcolaMargineSalonista() {
			//Calcolo margine

			var _acquistoPerMargine = parseFloat($(".prezzo_acquisto_netto_nascosto").val() * 1.22);
			_acquistoPerMargine 		= isNaN(_acquistoPerMargine) ? -1 : _acquistoPerMargine;

			var spese_ricondizionamento 	= parseFloat($(".meta_Spese_Generiche").val());
			spese_ricondizionamento 		= isNaN(spese_ricondizionamento) ? 0 : spese_ricondizionamento;

			if (spese_ricondizionamento > 0) {
				_acquistoPerMargine = parseFloat($(".meta_Prezzo_Acquisto_Lordo").val());
			} else {

				if ( _acquistoPerMargine <= 0) {

					_acquistoPerMargine = parseFloat($(".meta_Prezzo_Acquisto_Lordo").val());

				}

			}

			var _salonistaPerMargine = parseFloat($(".meta_Prezzo_Salonista").val());
			var _margine = _salonistaPerMargine - _acquistoPerMargine;
			var _percentuale = 100 - ( ( _acquistoPerMargine / _salonistaPerMargine) * 100 );
			$(".meta_Margine").val( _margine.toFixed(2) + " - " + _percentuale.toFixed(2) + " %" );
		}

		function ricalcolaAcquistoNeto() {

			var prezzo_acquisto_netto 	= parseFloat($(".prezzo_acquisto_netto_nascosto").val());
			prezzo_acquisto_netto 		= isNaN(prezzo_acquisto_netto) ? 0 : prezzo_acquisto_netto;

			var prezzo_ricondizionamento_teorico 	= parseFloat($(".meta_Spese_Ricondizionamento_Teorico").val());
			prezzo_ricondizionamento_teorico 		= isNaN(prezzo_ricondizionamento_teorico) ? 0 : prezzo_ricondizionamento_teorico;


			var spese_ricondizionamento 	= parseFloat($(".meta_Spese_Generiche").val());
			var spese_ricondizionamento_string 	= $(".meta_Spese_Generiche").val();
			spese_ricondizionamento 		= isNaN(spese_ricondizionamento) ? 0 : spese_ricondizionamento;

			var spese_trasporto 		= parseFloat($(".meta_Spese_Trasporto").val());
			spese_trasporto 			= isNaN(spese_trasporto) ? 0 : spese_trasporto;

			var acq_netto = 0;
			if (spese_ricondizionamento >= 0 && spese_ricondizionamento_string.toString().length > 0) {
				acq_netto = prezzo_acquisto_netto + spese_ricondizionamento;
				//console.log("Length: " +  );
			} else {
				acq_netto = prezzo_acquisto_netto + prezzo_ricondizionamento_teorico;
			}

			acq_netto = acq_netto + spese_trasporto;
//			console.log("A: " + acq_netto);
		  	$(".meta_Prezzo_Acquisto_Netto").val(acq_netto);
		  	$(".meta_Prezzo_Acquisto_Lordo").val(($(".meta_Prezzo_Acquisto_Netto").val() * 1.22).toFixed(2));

		}

		function calcolaTotale(){

			/*var prezzo_ricondizionamento_teorico 	= parseFloat($(".meta_Spese_Ricondizionamento_Teorico").val());
			prezzo_ricondizionamento_teorico 		= isNaN(prezzo_ricondizionamento_teorico) ? 0 : prezzo_ricondizionamento_teorico;

			var prezzo_acquisto_netto 	= parseFloat($(".prezzo_acquisto_netto_nascosto").val());
			prezzo_acquisto_netto 		= isNaN(prezzo_acquisto_netto) ? 0 : prezzo_acquisto_netto;

			var spese_trasporto 		= parseFloat($(".meta_Spese_Trasporto").val());
			spese_trasporto 			= isNaN(spese_trasporto) ? 0 : spese_trasporto;

			var spese_documenti 		= parseFloat($(".meta_Spese_Documenti").val());
			spese_documenti 			= isNaN(spese_documenti) ? 0 : spese_documenti;

			var spese_generiche 		= parseFloat($(".meta_Spese_Generiche").val());
			spese_generiche 			= isNaN(spese_generiche) ? 0 : spese_generiche;

			var margine 				= parseFloat($(".meta_Margine").val());
			margine 					= isNaN(margine) ? 0 : margine;

			return prezzo_acquisto_netto+spese_trasporto+spese_documenti+spese_generiche+margine; // - prezzo_ricondizionamento_teorico;*/

			var prezzo_acquisto_lordo 	= parseFloat($(".meta_Prezzo_Salonista").val());

			return prezzo_acquisto_lordo / 1.22;
		}



		$(document).on('click', '.salva_auto', function(){

			var data_immatricolazione = $(".immatricolazione").val();

			console.log(data_immatricolazione);


			if( data_immatricolazione.length > 0 ){
				if (!isValidDate(data_immatricolazione)) {
					alert("La Data non è corretta (gg/mm/aaaa)");
					return false;
				}
			}



		});

		$(document).on('click', '.delete_accessorio', function(){
			var idAccessorio = $(this).attr("idAccessorio");
			$("#acc_"+idAccessorio).remove();
			return false;
		});

		$( ".aggiungi_accessorio" ).click(function() {

			var numItems = new Date().getTime(); //$('.meta_Accessorio').length
			//numItems = numItems + 1;

			var html_code = '<div id="acc_'+numItems+'">';
			html_code += '<div style="clear:both"></div>';
			html_code += '<label>Accessorio</label><input type="text" class="meta_Accessorio" name="meta_Accessorio[]" value="" />';
			html_code += '<a class="delete_accessorio" idAccessorio="'+numItems+'" href="#"><i class="fa fa-times"></i></a>';
			html_code += '</div>';

		  	$(".accessoriWrapper").append(html_code);

		  	return false;
		});

		//Calcolo Spese Salonista
		var a_models 			= JSON.parse( '<?php echo json_encode($models_list); ?>' );
		var a_motorizzazione 	= JSON.parse( '<?php echo json_encode($motorizzazione_list); ?>' );
		var a_versione		 	= <?php echo json_encode($versione_list); ?>;

		var a_verniciatura	 	= JSON.parse( '<?php echo json_encode($verniciatura_list); ?>' );
		var a_tapezzeria	 	= JSON.parse( '<?php echo json_encode($tapezzeria_list); ?>' );


		$('#autocomplete_modello')
		  .dropdown({
		    allowAdditions: true
		  })
		;

		$('#jsMarcaAS')
		  .dropdown({
		    allowAdditions: false
		  })
		;

		$('#jsModelloAS')
		  .dropdown({
		    allowAdditions: false
		  })
		;


		var full_list = $('#jsModelloAS > option');
		$("select#jsMarcaAS").change(function(){

			var marcaID = $("option:selected", this).attr("marcaid");

			var val = marcaID;
			console.log('[data-group=' + val + ']');
    		var options = full_list.filter('[data-group=' + val + ']');
  			$('#jsModelloAS').html(options);

    		//$("#jsModelloAS > option[data-group='"+ marcaID +"']").remove();

            /*var sub = $('#jsModelloAS');
	        $('option', sub).filter(function(){
	            if (
	                 $(this).attr('data-group') === val
	              || $(this).attr('data-group') === 'SHOW'
	            ) {
	              if ($(this).parent('span').length) {
	                $(this).unwrap();
	              }
	            } else {
	              if (!$(this).parent('span').length) {
	                $(this).wrap( "<span>" ).parent().hide();
	              }
	            }
	        });*/

		});

		/*$('#autocomplete_modello').autocomplete({
		    lookup: a_models,
		    onSelect: function (suggestion) {
		        //alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
		    }
		});*/
		$('#autocomplete_motorizzazione').autocomplete({
		    lookup: a_motorizzazione,
		    onSelect: function (suggestion) {
		        //alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
		    }
		});
		$('#autocomplete_versione').autocomplete({
		    lookup: a_versione,
		    onSelect: function (suggestion) {
		        //alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
		    }
		});
		$('#autocomplete_verniciatura').autocomplete({
		    lookup: a_verniciatura,
		    onSelect: function (suggestion) {
		        //alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
		    }
		});
		$('#autocomplete_tapezzeria').autocomplete({
		    lookup: a_tapezzeria,
		    onSelect: function (suggestion) {
		        //alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
		    }
		});

  });
})(jQuery);


	</script>
	<?php
}

add_action("init","inserisci_auto");
function inserisci_auto($ext_file = false,$data = false){


	/*if ($_GET['act'] == "INSERIMENTO_ATTR")
	{
		global $wpdb;

	    $csv = array_map('str_getcsv', file("/home/admin/web/jahreswagen-italia.it/public_html/modelli.csv"));
		array_walk($csv, function(&$a) use ($csv) {
			$a = array_combine($csv[0], $a);
		});
		array_shift($csv);

		//print_r ($csv);
		foreach ($csv as $value)
		{


			$DATI = $value["a;b;c;"];
			$DATI = explode(";",$DATI);


			$descrizione = $DATI[0];
			$modello = $DATI[1];
			$id_marca = $DATI[2];


			$modello = "as_".$modello;
			$term_exist = term_exists( $modello, "pa_modello", 0 ) ;

			if (!is_array($term_exist)) {
				echo $descrizione." - ".$modello." - ".$id_marca."<br/>";

				wp_insert_term(
					  $modello,
					  'pa_modello', // the taxonomy
					  array(
					    'description'=> $id_marca,
					    'slug' => sanitize_title($modello),
					    'parent'=> 0
					  )
				);
			}


		}

		echo "<span style='color:white'>Ins 2.</span>";
	}*/

	if (!empty($ext_file) && !empty($data)){

		//PARSE YUCON FILE
		if ($ext_file == "yucon"){
			foreach ($data as $key => $value){
				//echo $key." -> ".$value."<br/>";
				$_POST[$key] = $value;
			}

			$insert_yucon = true;
		}

		if ($ext_file == "csv"){
			foreach ($data as $key => $value){
				$_POST[$key] = $value;
			}
			$_POST['meta_Prezzo Salonista Netto'] = round($_POST["meta_Prezzo Salonista"] / 1.22,2);

			$insert_csv = true;
		}

	} else {
		$insert_edit_manual = true;
	}
	if ($ext_file == "manual") {
		$manual = true;
	} else {
		$manual = false;
	}
	if ((wp_verify_nonce($_POST['oldani_inserisci_auto'], 'oldani_inserisci_auto')) ||
		$insert_yucon || $insert_csv || $manual ||
		wp_verify_nonce($_POST['oldani_modifica_auto'], 'oldani_modifica_auto')) {

		//print_r($_POST);

		global $wpdb;

		$current_user 	 = wp_get_current_user();
		$current_user_id = $current_user->ID;

		//if ($current_user->user_login != "oldanist"){

			// DETTAGLI AUTO
			$telaio 					= $_POST['telaio'];
			$marca 						= $_POST['marca'];

			// RI / PE / PA
			$ripepa 					= $_POST['meta_Prezzo_Ripristino'] + $_POST['meta_Prezzo_Parti_Mancanti'] + $_POST['meta_Prezzo_Perizia'];

			$titolo =  $_POST['marca']." ".$_POST['pa_modello']." ".$_POST['pa_motorizzazione']." ".$_POST['pa_versione'];



			$post_status = $_POST['post_status'];
			if (empty($post_status))
			{
				$post_status = "publish";
			}

			$Salonista_Elitcar = $_POST['Salonista_Elitcar'];
			if (empty($Salonista_Elitcar))
			{
				$Salonista_Elitcar = "1";
			}



			// PREZZI VARI
			if((wp_verify_nonce($_POST['oldani_inserisci_auto'], 'oldani_inserisci_auto')) || ($manual)  || ($insert_yucon)  || ($insert_csv)){

				$prodotti_con_codice = get_post_by_sku($_POST['telaio']);

				if ($prodotti_con_codice == 0) {
					$car = array(
					    'post_title' => $titolo,
					    'post_status' => $post_status,
					    'post_date' => date('Y-m-d H:i:s',time()),
					    'post_author' => $Salonista_Elitcar,
					    'post_type' => 'product'
					);
					$post_id = wp_insert_post( $car );

					update_post_meta($post_id,"auto_status",$post_status);

					$continue_insert = true;
				} else {
					$continue_insert = false;
				}

			} else {
				$post_id = $_POST['post_id'];
				$continue_insert = true;
			}

			if ($continue_insert){
				//image
				//set_post_thumbnail( $post_id, $attach_ids[0] );
				//update_post_meta( $post_id, '_product_image_gallery', implode(',', $attach_ids));


				// NUOVO SISTEMA RICERCA
				$_FIL_MARCA = $_POST['marca'];
				$_FIL_MODELLO = $_POST['pa_modello'];
				$_FIL_ALIMENTAZIONE = $_POST['pa_alimentazione'];
				$_FIL_TIPOLOGIA = $_POST['pa_tipologia'];
				

				update_sistema_ricerca( $post_id, $_FIL_MARCA, $_FIL_MODELLO, $_FIL_ALIMENTAZIONE, $_FIL_TIPOLOGIA);




				$meta_In_Ripristino = $_POST['meta_In_Ripristino'];
				$meta_Auto_Disponibile = $_POST['meta_Auto_Pronta'];

				$c_meta_In_Ripristino = get_post_meta( $post_id, 'data_in_ripristino');
				$c_meta_Auto_Disponibile = get_post_meta( $post_id, 'data_auto_disponibile');

				if ($meta_In_Ripristino == "on") {
					if (empty($c_meta_In_Ripristino)) {
						update_post_meta( $post_id, 'data_in_ripristino', time());
					}
				}


				if ($meta_Auto_Disponibile == "on") {
					if (empty($c_meta_Auto_Disponibile)) {
						update_post_meta( $post_id, 'data_auto_disponibile', time());
					}
				}



				$_STATO_AUTO 					= $_POST['meta_StatoAuto'];

				//Gestione Chiave
				$_CHIAVE 						= $_POST['meta_Chiave'];

				//Chiave corrente
				$_CHIAVE_CORRENTE = get_post_meta($post_id, "Chiave", true);

				$wpdb->get_results("UPDATE wp_postmeta SET meta_value = -1 WHERE meta_key = 'Chiave' AND meta_value = '".$_CHIAVE."' AND post_id != '".$post_id."' ");

				if (!empty($_CHIAVE_CORRENTE)) {
					$wpdb->get_results("UPDATE nchv SET libera = 0 WHERE numero = '$_CHIAVE_CORRENTE'");
				}

				//if ($_STATO_AUTO != "Venduta") {
					$wpdb->get_results("UPDATE nchv SET libera = 1 WHERE numero = '$_CHIAVE'");
				//}


				$user_ID 						= get_current_user_id();
				update_post_meta($post_id,"SpostataDa",$user_ID);




				//Product Type
				wp_set_object_terms ($post_id, 'simple', 'product_type');

				//Category
				//$category_id = inserisci_attributo($category,"product_cat");
				wp_set_object_terms( $post_id, $marca, 'product_cat' );

				//Basic Data
				update_post_meta( $post_id, '_stock_status', 'instock');
				update_post_meta( $post_id, '_sku', $telaio);
				update_post_meta( $post_id, '_stock', "1" );
				update_post_meta( $post_id, '_visibility', 'visible' );
				update_post_meta( $post_id, '_price', $_POST['meta_Prezzo_Listino']);
				update_post_meta( $post_id, '_regular_price', $_POST['meta_Prezzo_Listino']);

				update_post_meta( $post_id, 'data_ultima_modifica', time() );
				update_post_meta( $post_id, 'utente_ultima_modifica', $current_user_id );




				$user = wp_get_current_user();
				update_post_meta($post_id,"SpostataDa",$user->user_login);
				update_post_meta($post_id,"SpostataData",time() );



				//SETUP ATTRIBUTES
					foreach ($_POST as $key => $value){
						if (strpos($key, 'pa_') !== false) {
						    //echo $_POST[$key]."<br/>";
							$_product_attributes[$key]['name'] = $key;
							$_product_attributes[$key]['value'] = '';
							$_product_attributes[$key]['is_visible'] = '1';
							$_product_attributes[$key]['is_variation'] = '1';
							$_product_attributes[$key]['is_taxonomy'] = '1';

							if (!empty($_POST[$key])){

								$parent_id =  get_term_by( "name", $_POST['marca'], $key );

								wp_set_object_terms_elit( $post_id, $_POST[$key] , $key, false, false  );
							} elseif (empty($_POST[$key]) && wp_verify_nonce($_POST['oldani_modifica_auto'], 'oldani_modifica_auto') ){

								//Remove Associate Term
								$term_to_remove = array_shift( wc_get_product_terms( $post_id , $key, array( 'fields' => 'names' ) ) );
								wp_remove_object_terms( $post_id, $term_to_remove  , $key );
								unset($_product_attributes[$key]);

							}
						}
					}

					update_post_meta( $post_id,'_product_attributes',$_product_attributes);
				// END SETUP ATTRIBUTES

				//SETUP META
					foreach ($_POST as $key => $value){
						if (strpos($key, 'meta_') !== false) {
							$raw_meta = explode("meta_",$key);
							$clean_meta = str_replace("_", " ", $raw_meta[1]);
							//echo $clean_meta.": ". $_POST[$key]." - ".$raw_meta[1]."<br/>";

							if ($clean_meta == "data venduta") {
								$clean_meta = "data_venduta";
							}

							if ($clean_meta == "Immatricolazione"){
								if (!empty($_POST[$key])){
									$immatricolazione = vsprintf('%3$04d/%2$02d/%1$02d', sscanf($_POST[$key],'%02d/%02d/%04d'));
									$_POST[$key] = strtotime($immatricolazione);
								}
							}


							if ($clean_meta == "Prezzo Acquisto Netto"){

								if ( empty($_POST["Prezzo Acquisto Lordo"]) ) {
									$_POST["Prezzo Acquisto Lordo"] =  $_POST["Prezzo Acquisto Netto"];
								}

							}

							if (strpos($key, 'Accessorio') !== false) {
								if ($insert_edit_manual){
									$raw_accessori = implode("|", $_POST[$key] );
								} else {
									$raw_accessori = $_POST[$key];
								}
								update_post_meta( $post_id, "Accessori", $raw_accessori   );
							} else{
								update_post_meta( $post_id, $clean_meta, $_POST[$key]);
							}


						}
					}

					if ($post_status == "venduta")
					{
						update_post_meta( $post_id, "data_venduta", time());
					}

					update_post_meta( $post_id, "Ri Pe Pa", $ripepa);
				//END SETUP META

				if ($insert_edit_manual){
					foreach ($_POST['attach_ids'] as $single_attach):
						$attach_ids[] = $single_attach;
					endforeach;


/*					imageFor

					scheda_base*/

					if (count($_FILES['car_imgs']['name']) > 0 ){
						for($i=0; $i<count($_FILES['car_imgs']['name']); $i++) {

						  $tmpFilePath = $_FILES['car_imgs']['tmp_name'][$i];


						  if ($tmpFilePath != ""){


						  	if ($_POST['imageFor'] == "scheda_usato") {

								$target_path = "./uploadTest/uploads/";
								$target_path = $target_path . basename( $_FILES['car_imgs']['name'][$i] );


								if (move_uploaded_file($_FILES['car_imgs']['tmp_name'][$i], $target_path)) {

									$image_fn = $_FILES['car_imgs']['name'][$i];
									$schedaUsatoID = $_POST['schedaUsatoID'];

									//echo "A: ". $image_fn." - ".$schedaUsatoID."<br/>";
									$wpdb->get_results("INSERT INTO wp_scheda_usato_img VALUES(NULL,'$schedaUsatoID','$image_fn',0)");

								}
						  	}

						  	if ($_POST['imageFor'] == "scheda_base") {
							    $newFilePath = "./tmpUploads/" . $_FILES['car_imgs']['name'][$i];

							    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

							        $upload_dir = wp_upload_dir();
							        $image_data = file_get_contents( $newFilePath );
							        $filename = basename( $newFilePath );

							        if(wp_mkdir_p($upload_dir['path']))
							            $file = $upload_dir['path'] . '/' .time()."_". $filename;
							        else
							            $file = $upload_dir['basedir'] . '/'.time()."_". $filename;

							        file_put_contents($file, $image_data);

							        $wp_filetype = wp_check_filetype($filename, null );
							        $attachment = array(
							            'post_mime_type' => $wp_filetype['type'],
							            'post_title' => sanitize_file_name($filename),
							            'post_content' => '',
							            'post_status' => 'inherit'
							        );
							        $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
							        if ($count = 0){
							        	$first_id = $attach_id;
							        }
							        require_once(ABSPATH . 'wp-admin/includes/image.php');
							        $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
							        wp_update_attachment_metadata( $attach_id, $attach_data );

							        $attach_ids[] = $attach_id;

							        unlink($newFilePath);

							    }

							}



						  }
						}

						//set_post_thumbnail( $post_id, $attach_ids[0] );
						update_post_meta( $post_id, '_product_image_gallery', implode(',', $attach_ids));
					}
				}

				if (!$ext_file){


					//wp_redirect(site_url()."?page_id=452&fill_edit=true&carID=".$post_id); exit();

				} else {
					return 1;
				}

			} else {
				return 0;
			}


		//}
	}
}

function update_sistema_ricerca( $post_id, $_FIL_MARCA, $_FIL_MODELLO, $_FIL_ALIMENTAZIONE, $_FIL_TIPOLOGIA) {

	global $wpdb;

	$query = "SELECT * FROM ListaAuto WHERE post_id = '$post_id'";
	$numeroRisultati = $wpdb->get_results($query);

	if (count($numeroRisultati) == 0){
		$query = "INSERT INTO ListaAuto VALUES(DEFAULT,'$post_id','$_FIL_MARCA','$_FIL_MODELLO','$_FIL_ALIMENTAZIONE', '$_FIL_TIPOLOGIA')";
	} else {
		$query = "UPDATE ListaAuto SET marca = '$_FIL_MARCA', modello = '$_FIL_MODELLO', alimentazione = '$_FIL_ALIMENTAZIONE', tipologia = '$_FIL_TIPOLOGIA' WHERE post_id = '$post_id'";
	}

	$wpdb->get_results($query);

}


add_shortcode("auto_by_status","auto_by_status");
function auto_by_status( $atts ){

	/*error_reporting(E_ALL);
	ini_set('display_errors', '1');
*/
	global $wpdb;
	extract(shortcode_atts(array(
	  "status" => "opzionata"
	), $atts));

/*
	if( current_user_can('administrator')) {
		$super_admin = true;
	} else {
		$super_admin = false;
	}
*/


	    /*$args = array(
	        'post_type' => 'product',
	        'post_status' => $status,
	        'meta_key' => 'data_venduta',
	        'orderby' => 'data_venduta',
	        'order' => 'DESC',
	        'posts_per_page' => -1
	    );
	    $wp_query = new WP_Query($args);
	    $count_posts = $wp_query->post_count;

	    echo $count_posts*/
	    $telaio = $_GET['telaio'];
	    $paged = $_GET['paged'];
	    if (empty($paged)) {
	    	$paged = 0;
	    }

		if( !current_user_can('administrator')) {
		//if(!is_elitcar($super_admin )){
			$user_ID = get_current_user_id();


			if (!empty($telaio)) {
				$query_telaio = "SELECT * FROM wp_posts, wp_postmeta WHERE wp_posts.post_status = '".$status."' AND wp_posts.ID = wp_postmeta.post_id AND wp_postmeta.meta_key = '_sku' AND wp_postmeta.meta_value LIKE '%".$telaio."%'  AND post_author = '".$user_ID."' ";
			} else {
				$query_telaio = "SELECT * FROM wp_posts WHERE post_status = '".$status."' AND post_author = '".$user_ID."' ";
			}

			$queryCPost = $wpdb->get_results($query_telaio);
		    $count_posts = count($queryCPost);


			if ($status == "venduta"){
			    $args = array(
			        'post_type' => 'product',
			        'post_status' => $status,
			        'author' => $user_ID,
			        'meta_key' => 'data_'.$status,
			        'orderby' => 'data_'.$status,
			        'order' => 'DESC',
			        'posts_per_page' => 50,
			        'paged' => $paged,
	                "meta_query" => array(
			                "key" => "_sku",
			                "value" => $telaio,
			                "compare" => "LIKE"
			        )
			    );
		    } else {
				    $args = array(
			        'post_type' => 'product',
			        'post_status' => $status,
			        'author' => $user_ID,
			        'meta_key' => 'data_'.$status,
			        'orderby' => 'data_'.$status,
			        'order' => 'DESC',
			        'posts_per_page' => -1,
			        'paged' => $paged,
	                "meta_query" => array(
			                "key" => "_sku",
			                "value" => $telaio,
			                "compare" => "LIKE"
			        )
			    );
		    }

		} else {

			if (!empty($telaio)) {
				$query_telaio = "SELECT * FROM wp_posts, wp_postmeta WHERE wp_posts.post_status = '".$status."' AND wp_posts.ID = wp_postmeta.post_id AND wp_postmeta.meta_key = '_sku' AND wp_postmeta.meta_value LIKE '%".$telaio."%'";
			} else {
				$query_telaio = "SELECT * FROM wp_posts WHERE post_status = '".$status."'";
			}

			$queryCPost = $wpdb->get_results($query_telaio);
		    $count_posts = count($queryCPost);


			if ($status == "venduta"){
			    $args = array(
			        'post_type' => 'product',
			        'post_status' => $status,
			        'meta_key' => 'data_venduta',
			        'orderby' => 'data_venduta',
			        'order' => 'DESC',
			        'posts_per_page' => 50,
			        'paged' => $paged,
	                "meta_query" => array(
			                "key" => "_sku",
			                "value" => $telaio,
			                "compare" => "LIKE"
			        )
			    );
			} else {
				    $args = array(
			        'post_type' => 'product',
			        'post_status' => $status,
			        'meta_key' => 'data_'.$status,
			        'orderby' => 'data_'.$status,
			        'order' => 'DESC',
			        'posts_per_page' => -1,
			        'paged' => $paged,
	                "meta_query" => array(
			                "key" => "_sku",
			                "value" => $telaio,
			                "compare" => "LIKE"
			        )
			    );
			}


		}


    $wp_query = new WP_Query($args);
    //$count_posts = $wp_query->post_count;
?>

<form method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>" style="text-align: center">
	<input type="text" placeholder="Cerca Per Telaio" name="telaio" value="<?php echo $_GET['telaio']; ?>"  style="padding: 5px; margin: 15px; width: 50%; font-size: 18px; border: 1px solid #c3c3c3 "  />

	<input type="hidden" name="paged" value="0"/>
	<input type="hidden" name="page_id" value="473" />

	<input type="submit" value="Cerca"  style="padding: 5px; " />
</form>

<div style="width:100%; display: block; text-align: center;">
	<a style="font-size: 12px; color: #ed1c24; text-decoration: none !important;" href="https://www.jahreswagen-italia.it/?page_id=473">Annulla Filtri</a>
</div>

<ul class="products">
	<table class="jungeSterneCarList" cellpadding="0" cellspacing="0" border="0">

		<thead>
			<tr>

		<?php

			//if( current_user_can('administrator')) {
				echo '<th></th>';
			//}
		?>

				<th>
					<?php //if( current_user_can('administrator')) :	?>
					<?php if(is_elitcar($super_admin)) : ?>
						Opzionatore
					<?php endif; ?>
				</th>

				<th>Data Op.</th>

				<th>Marca</th>
				<th>Telaio</th>
				<th>Modello</th>

				<th>Versione</th>
				<th>Verniciatura</th>
				<th>Tapezzeria</th>
				<th>Imm.</th>
				<th>KM</th>
				<th>Optional Principali</th>
				<th>Prezzo</th>


				<th>Ri/Pe/Pa</th>

				<?php
					if( current_user_can('administrator')  && $_GET['act'] == "invendita") :
				?>
					<th>Data Ins.</th>
					<th>Contr. Rif.</th>
					<th></th>
				<?php
					endif;
				?>

				<?php

					//if( current_user_can('administrator')) {
						echo '<th></th>';
					//}
				?>

			</tr>
		</thead>
		<?php
		while ($wp_query->have_posts()) : $wp_query->the_post();

			wc_get_template_part( 'content', 'ext-product-row' );

		endwhile;


		$POST_PER_PAGE = 50;
		$currentPage = $_GET['paged'];
		if (empty($currentPage)) {
			$currentPage = 1;
		}



		$page = 1;
		$lastPage = ceil($count_posts / $POST_PER_PAGE);



		$increaseEndingBy = ($currentPage < 6) ? 10 - $currentPage : 4;
		$increaseStartingBy = ($currentPage > ($lastPage - 7)) ? 8 - ($lastPage-$currentPage) : 3;


		$startPaging = ($currentPage > 6) ? ($currentPage - $increaseStartingBy) : 1;
		$endPaging = ($currentPage < ($lastPage - 6)) ? $currentPage+$increaseEndingBy : $lastPage +1;


		//Get Pagination
		$query=$_GET;


		echo '<ul class="pagination" >';

			if ($currentPage > 6) {

				$query['paged']=1;
				$url=$_SERVER['PHP_SELF']. '?' .  http_build_query($query);


				echo '<li><a href="'.$url.'">1</a></li>';
				//echo '<li>-</li>';
			}

			for ($i = $startPaging ; $i< $endPaging; $i++) {

				$query['paged']=$i;
				$url=$_SERVER['PHP_SELF']. '?' .  http_build_query($query);

				if ($currentPage == $i) {
					echo '<li class="selected"><a href="'.$url.'" >'.$i.'</a></li>';
				} else {
					echo '<li><a href="'.$url.'">'.$i.'</a></li>';
				}

			}

			if ($currentPage < ($lastPage - 6)) {

				$query['paged']=$lastPage;
				$url=$_SERVER['PHP_SELF']. '?' .  http_build_query($query);
				//echo '<li>-</li>';
				echo '<li id="lastPage"><a href="'.$url.'">'.$lastPage.'</a></li>';
			}

		echo '</ul>';

		?>
	</table>
</ul>
	<?php
}



//PRENDO L'ID DEL POST DA USARE NELLA PAGINA PREVENTIVI
add_shortcode("get_post_id","get_post_id");
function get_post_id(){
	?>
	<style>
		.dashboard-wrapper {
			width: 75%;
		}
	</style>
	<?php
 	$user_ID = get_current_user_id();

 	$html .= "<input type='hidden' name='prezzo_auto_acquisto' id='prezzo_auto_acquisto' value='".get_post_meta($_GET['post_id'], "Prezzo Acquisto Lordo", true)."' />";

	return $html."<input type='hidden' name='user_id' value='".$user_ID."' /><input type='hidden' name='post_id' value='".$_GET['post_id']."' />";
}
//FINE RECUPERO ID




//CAMBIA LO STATO DELL'AUTO IN OPZIONATA
add_action('init', 'opziona');
function opziona(){
	if ($_GET['act'] == 'opziona'){

		global $wpdb;

		if( !current_user_can('administrator')) {
			$user_ID = get_current_user_id();
		} else {
			$user_ID = $_GET['author'];
		}

		$post_ID = $_GET['post_id'];
		$post_status = $_GET['status'];

		$wpdb->update($wpdb->posts, array('post_status'=>$post_status, 'post_author'=>$user_ID ), array('id'=>$post_ID));

		update_post_meta($post_ID,"auto_status",$post_status);

		//cancello le date inserite precedentemente
		delete_post_meta($post_ID, 'data_in_attesa');

		delete_post_meta($post_ID, 'data_opzionata');
		delete_post_meta($post_ID, 'data_invendita');
		/*delete_post_meta($post_ID, 'data_venduta');*/

		update_post_meta( $post_ID, 'data_'.$_GET['status'], time() );

		if ( isset($_GET["cliente_opzione"]) ) {
			update_post_meta( $post_ID, 'cliente_opzione', $_GET["cliente_opzione"] );
		}

		//CALLBACK
		$callback_link = (empty($_GET['callback'])) ? get_post_permalink($_GET['post_id']) : $_GET['callback'];
		wp_redirect(urldecode($callback_link)); exit();

	}
}

add_action('init', 'assegna');
function assegna(){
	if ($_GET['act'] == 'assegna'){

		global $wpdb;

		$user_ID = $_GET['author'];

		$post_ID = $_GET['post_id'];
		$post_status = $_GET['status'];

		if( current_user_can('administrator')) {
			$user_ID = 1;
		}

		$wpdb->update($wpdb->posts, array('post_status'=>$post_status, 'post_author'=>$user_ID ), array('id'=>$post_ID));
		update_post_meta($post_ID,"auto_status",$post_status);

		delete_post_meta($post_ID, 'data_in_attesa');
		delete_post_meta($post_ID, 'data_opzionata');
		delete_post_meta($post_ID, 'data_invendita');
		delete_post_meta($post_ID, 'data_venduta');

		update_post_meta( $post_ID, 'data_'.$_GET['status'], time() );

		//CALLBACK
		$callback_link = (empty($_GET['callback'])) ? get_post_permalink($_GET['post_id']) : $_GET['callback'];
		wp_redirect(urldecode($callback_link)); exit();

	}
}
//FINE CAMBIO STATO



add_action('init', 'gestione_immagini');
function gestione_immagini() {

	//ELIMINAZIONE IMMAGINE UTENTE
	if ($_GET['act'] == 'removeUserImg'){

		$user_id = $_GET['user_id'];
		$path = $_GET['path'];

		unlink(".".$path);

		delete_user_meta( $user_id, "elit_user_logo" );

		if( current_user_can('administrator')) {
			$add_query = "?user_id=".$_GET['user_id'];
		} else {
			$add_query = "";
		}

		wp_redirect( get_permalink( get_page_by_path( 'modifica-utente' ) ).$add_query ); exit();
	}

	if ($_GET['act'] == 'SetUsatoImg'){
		$post_id = $_GET['post_id'];
		$idPic = $_GET['idPic'];

		$status_usato = get_post_meta($idPic,"_per_usato",true);
		if ($status_usato == "si"){
			update_post_meta($idPic,"_per_usato","no");
		} else {
			update_post_meta($idPic,"_per_usato","si");
		}


		wp_redirect(site_url()."?page_id=452&fill_edit=true&carID=".$post_id); exit();
	}




	//ELIMINAZIONE IMMAGINE AUTO
	if ($_GET['act'] == 'removeImgUsed'){

		global $wpdb;

		$post_id = $_GET['post_id'];
		$idPic = $_GET['idPic'];
		$carID = $_GET['carID'];

		$wpdb->get_results("DELETE FROM wp_scheda_usato_img WHERE id = '".$idPic."'");

		wp_redirect(site_url()."?page_id=452&fill_edit=true&carID=".$carID); exit();

	}


	//ELIMINAZIONE IMMAGINE AUTO
	if ($_GET['act'] == 'removeImg'){

		$post_id = $_GET['post_id'];
		$idPic = $_GET['idPic'];

		wp_delete_attachment( $idPic, $force_delete );

		$IdsGallery = get_post_meta( $post_id , "_product_image_gallery", true);
		$IdsGallery = explode(",",$IdsGallery);
		$IdsGallery = array_filter($IdsGallery);
		foreach($IdsGallery as $IdGallery){
			if ($IdGallery != $idPic){
				$new_gallery[] = $IdGallery;
			}
		}
		update_post_meta( $post_id, '_product_image_gallery', implode(',', $new_gallery));


		//wp_redirect(get_permalink ( $post_id )); exit();
		if ($_GET['sec'] == "articolo"){
			wp_redirect(site_url()."?page_id=19533&fill_edit=true&artID=".$post_id); exit();
		} else {
			wp_redirect(site_url()."?page_id=452&fill_edit=true&carID=".$post_id); exit();
		}
	}

	//CAMBIO IMMAGINE COPERTINA USATO
	if ($_GET['act'] == 'changeCoverImgUsed'){
		global $wpdb;
		$post_id = $_GET['post_id'];
		$idPic = $_GET['idPic'];
		$carID = $_GET['carID'];

		$wpdb->get_results("UPDATE wp_scheda_usato_img SET gia_caricato = 0 WHERE su_id = '".$post_id."'");

		$wpdb->get_results("UPDATE wp_scheda_usato_img SET gia_caricato = 1 WHERE id = '".$idPic."'");



		wp_redirect(site_url()."?page_id=452&fill_edit=true&carID=".$carID); exit();

		/*update_post_meta($post_id, "_thumbnail_id", $idPic );

		//wp_redirect(get_permalink ( $post_id )); exit();

		if ($_GET['sec'] == "articolo"){
			wp_redirect(site_url()."?page_id=19533&fill_edit=true&artID=".$post_id); exit();
		} else {
			wp_redirect(site_url()."?page_id=452&fill_edit=true&carID=".$post_id); exit();
		}*/

	}

	//CAMBIO IMMAGINE COPERTINA
	if ($_GET['act'] == 'changeCoverImg'){

		$post_id = $_GET['post_id'];
		$idPic = $_GET['idPic'];

		update_post_meta($post_id, "_thumbnail_id", $idPic );

		//wp_redirect(get_permalink ( $post_id )); exit();

		if ($_GET['sec'] == "articolo"){
			wp_redirect(site_url()."?page_id=19533&fill_edit=true&artID=".$post_id); exit();
		} else {
			wp_redirect(site_url()."?page_id=452&fill_edit=true&carID=".$post_id); exit();
		}

	}

	//CARICAMENTO FOTO AUTO
  	if (wp_verify_nonce($_POST['carica_foto_nonce'], 'carica_foto_nonce')){
  		/*$post_id = $_POST['post_id'];

		for($i=0; $i<count($_FILES['car_imgs']['name']); $i++) {

		  $tmpFilePath = $_FILES['car_imgs']['tmp_name'][$i];


		  if ($tmpFilePath != ""){

		    $newFilePath = "./tmpUploads/" . $_FILES['car_imgs']['name'][$i];

		    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

		        $upload_dir = wp_upload_dir();
		        $image_data = file_get_contents( $newFilePath );
		        $filename = basename( $newFilePath );

		        if(wp_mkdir_p($upload_dir['path']))
		            $file = $upload_dir['path'] . '/' .time()."_". $filename;
		        else
		            $file = $upload_dir['basedir'] . '/'.time()."_". $filename;

		        file_put_contents($file, $image_data);

		        $wp_filetype = wp_check_filetype($filename, null );
		        $attachment = array(
		            'post_mime_type' => $wp_filetype['type'],
		            'post_title' => sanitize_file_name($filename),
		            'post_content' => '',
		            'post_status' => 'inherit'
		        );
		        $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
		        if ($count = 0){
		        	$first_id = $attach_id;
		        }
		        require_once(ABSPATH . 'wp-admin/includes/image.php');
		        $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
		        wp_update_attachment_metadata( $attach_id, $attach_data );

		        $attach_ids[] = $attach_id;

		        unlink($newFilePath);

		    }

		  }
		}

		set_post_thumbnail( $post_id, $attach_ids[0] );
		update_post_meta( $post_id, '_product_image_gallery', implode(',', $attach_ids));


		wp_redirect(get_permalink ( $post_id )); exit();*/

	}

}


//?act=elimina_auto&post_id=<?php echo get_the_ID() &time=<?php echo time(); &callback=
add_action("init","status_auto");
function status_auto(){





	if (!empty($_GET['time']) && ($_GET['act'] == 'elimina_auto')){
		$post_id = $_GET['post_id'];
		$callback = $_GET['callback'];

		wp_delete_post($post_id);
		$callback = urldecode($callback);
		wp_redirect(site_url()."?".$callback); exit;

	}

	if (!empty($_GET['time']) && ($_GET['act'] == 'status_web')){
		$post_id = $_GET['post_id'];
		$callback = $_GET['callback'];
		$status = $_GET['status'];

		//wp_delete_post($post_id);
		update_post_meta( $post_id, 'status_web', $status);
		$callback = urldecode($callback);
		wp_redirect(site_url()."?".$callback); exit;

	}


	if (!empty($_GET['time']) && ($_GET['act'] == 'status_salonista')){
		$post_id = $_GET['post_id'];
		$callback = $_GET['callback'];
		$status = $_GET['status'];
		//wp_delete_post($post_id);
		update_post_meta( $post_id, 'status_salonista', $status);
		$callback = urldecode($callback);
		wp_redirect(site_url()."?".$callback); exit;

	}
}

add_filter('woocommerce_get_catalog_ordering_args', 'am_woocommerce_catalog_orderby');
function am_woocommerce_catalog_orderby( $args ) {
    //$args['meta_key'] = 'post_author';
    $args['orderby'] = 'post_author';
    $args['order'] = 'desc';
    return $args;
}


add_action( 'pre_get_posts', 'rc_modify_query_get_design_projects' );
function rc_modify_query_get_design_projects( $query ) {

	//if( ! is_admin() && $query->is_main_query() && $query->query_vars['post_type'] != 'product' ) {
	if ( ! is_admin() && is_shop() && !is_elitcar()) {

		$query->set('meta_key', 'status_salonista');
		$query->set('meta_value', '1');

	}

}

add_action( 'wp_ajax_nopriv_registraPrezzo', 'registraPrezzo_callback' );
add_action( 'wp_ajax_registraPrezzo', 'registraPrezzo_callback' );

function registraPrezzo_callback() {


	$raw_data	= $_POST['raw_data'];
	$price		= $_POST['price'];

	$raw_data 	= explode("_",$raw_data);

	$user_id 	= $raw_data[1];
	$post_id 	= $raw_data[2];


	//update_post_meta(76, 'my_key', 'Steve');
	$metaData = "prezzoSalonista_".$post_id."_".$user_id;

	update_post_meta($post_id, $metaData, $price );

	die("salvato");
	//echo $user_id." - ".$post_id." - ".$price."\n";
}


add_shortcode("leggiMarcheCat","leggiMarcheCat");
function leggiMarcheCat(){

	$terms = get_terms( 'product_cat', array(
	    'orderby'    => 'count',
	    'hide_empty' => 0
	) );



	$current_user = wp_get_current_user();
	if (trim($current_user->versione) != "002") :

		$html .= '<select onChange="gotoCat(this.value)" style="display:block;" name="product_cat"><option value="" selected="selected">Seleziona una categoria</option>';
		foreach ($terms as $term):
			if(($term->count > 0) && ($term->slug != "marketing")):

				if ($_GET['product_cat'] == $term->slug) { $class_selected = "selected"; } else { $class_selected = ""; }

				$as_marca = $term->name;

				if (strpos($as_marca, "as_") !== false)
				{
                    $as_marca = str_replace("as_", "", $as_marca);
				    if(isset($_GET['filter_tipologia'])){
					    if($_GET['filter_tipologia'] == 'jahreswagen'){
                            if($term->slug== "as_mercedes-benz"  ||  $term->slug== "as_smart") {//se la tipologia è jharesaghen, mostra
                                $html .= '<option ' . $class_selected . ' value="' . $term->slug . '">' . $as_marca . '</option>';

                            }
                        }else{

                            $html .= '<option '.$class_selected.' value="'.$term->slug.'">'.$as_marca. '</option>';

                        }

                    }
                    else{

                        $html .= '<option '.$class_selected.' value="'.$term->slug.'">'.$as_marca. '</option>';

                    }

				}









			endif;
		endforeach;
		$html .= '</select>';

	else:
		?>
			<style type="text/css">
				.logo-sidebar
				{
					max-width:	30px;
					max-height: 20px;
					margin-top: 8px;
				}
			</style>
		<?php


		$html .= '<ul>';
		foreach ($terms as $term):
			if(($term->count > 0) && ($term->slug != "marketing")):

				if ($_GET['product_cat'] == $term->slug) { $class_selected = "selected"; } else { $class_selected = ""; }
				//$html .= '<option '.$class_selected.' value="'.$term->slug.'">'.$term->name.'</option>';

				if ($_GET['debug'] == "1")
				{
					$html .= '<li><a class="'.$class_selected.'" onclick="gotoCat(\''.$term->slug.'\')">'.$term->name.'</a></li>';
				}
				else
				{
					$term_name = $term->name;

					if (strpos($term_name, 'as_') !== false) {

						$term_name = pulisci_as($term_name);

						$html .= '<li>';
							$html .= '<a class="'.$class_selected.'" onclick="gotoCat(\''.$term->slug.'\')">';
								$html .= '<div class="logoWrapper" style="float:left; width:30px;">';
									$html .= '<img class="logo-sidebar" style=" display:block;" src="/wp-content/themes/jahreswagen/images/loghi/'.strtolower( $term_name ).'.png">';
								$html .= '</div>';
								$html .= '<div style="float:left; margin-top: 6px; line-height:20px; font-size: 16px !important">';
									$html .= $term_name;
								$html .= '</div>';

								$html .= '<div style="display:block;clear:both"></div>';
							$html .= '</a>';
						$html .= '</li>';
					}

				}

			endif;
		endforeach;
		$html .= '</ul>';
	endif;


	//$html .= '<select onChange="gotoCat(this.value)" style="display:block;" name="product_cat"><option value="" selected="selected">Seleziona una categoria</option>';

	//$html .= '</select>';

	return $html;


}

function cleanDataOrdine($string){

	preg_match('~([0-9]{1,2}[\/|/][0-9]{1,2}[\/|/][0-9]{1,4})~', $string, $matches);
	$_data = $matches[1];
	$_string = preg_replace('~[[:space:]]{2,}~', ' ', str_replace($_data, '', $string));

	$_string = str_replace("ordine del", "", $_string);

	$data['data'] = $_data;
	$data['value'] = $_string;

	return $data;

}




add_shortcode("contratto_privati_readonly","contratto_privati_readonly");
function contratto_privati_readonly( $atts ){

	global $wpdb;

	extract(shortcode_atts(array(
	  "readonly" => "false"
	), $atts));

	$current_user = wp_get_current_user();

?>
	<style>

	<?php //if ($current_user->user_login != "oldanist26") : ?>
	<?php if (trim($current_user->versione) != "002") : ?>
	.dashboard-wrapper {
		width: 75%;
	}
	<?php endif; ?>

	.br {
		width: 100%;
		display: block;
		clear: both;
		margin: 15px 0;
	}

	.required_symbol:after {
		content: '*';
		font-size: 17px;
		color: #f00;
		margin-left: 10px;
		font-weight: bold;
	}
	</style>
	<br/>
<?php

	$readonly = $atts['readonly'];
	if ($readonly == "true") {
		//echo $_SERVER['REMOTE_ADDR'];
		$extension = "";

		//if ($_SERVER['REMOTE_ADDR'] == "93.148.48.137") {

			?>
			<script>
				localStorage.clear();
			</script>
			<?php
			$CONTRATTO_TEMP_ID = $_GET['contrattoId'];

			$dati_contratto = $wpdb->get_results("SELECT * FROM contratti_pt WHERE cid = '$CONTRATTO_TEMP_ID'");



			$dati_contratto_user = $wpdb->get_results("SELECT * FROM contratti_pt_list WHERE id = '$CONTRATTO_TEMP_ID'");
			$auto_id = $dati_contratto_user[0]->auto_id;

			$user_id = $dati_contratto_user[0]->user_id;
			$data_contratto = $dati_contratto_user[0]->data_inserimento;
			$status = $dati_contratto_user[0]->status;

			$dati_cliente = get_cliente_privato($user_id, $CONTRATTO_TEMP_ID);


			$extension = "ext_";
			//print_r($dati_contratto);


			//$valore_totale_concordato; = $dati_contratto;
			foreach ($dati_contratto as $dato) {
				if ($dato->meta_key == "daticontratto_prezzo_auto"){
					$tmp_valore_autovettura = $dato->meta_value;
				}
				if ($dato->meta_key == "daticontratto_messa_su_strada"){
					$tmp_valore_messa_su_strada = $dato->meta_value;
				}
				if ($dato->meta_key == "daticontratto_ipt"){
					$tmp_valore_ipt = $dato->meta_value;
				}
				if ($dato->meta_key == "daticontratto_gestione_permuta_usato"){
					$tmp_valore_permuta_usato = $dato->meta_value;
				}
			}




			$garanzia_12_mesi 		= get_contratti_pt_meta("daticontratto_garanzia_12_mesi",$CONTRATTO_TEMP_ID);
			$garanzia_ufficiale 	= get_contratti_pt_meta("daticontratto_garanzia_ufficiale",$CONTRATTO_TEMP_ID);
			$garanzia_numero_mesi 	= get_contratti_pt_meta("daticontratto_numero_mesi",$CONTRATTO_TEMP_ID);
			$garanzia_euro 			= get_contratti_pt_meta("daticontratto_euro",$CONTRATTO_TEMP_ID);

			//15990
			$accessori_extra_prezzo = get_contratti_pt_meta('daticontratto_accessori_extra_prezzo',$CONTRATTO_TEMP_ID);
			$valore_totale_concordato = get_contratti_pt_meta('daticontratto_valore_totale_concordato',$CONTRATTO_TEMP_ID);

			if (empty($valore_totale_concordato)) {
				//echo "contr: ".$tmp_valore_autovettura." -" .$tmp_valore_messa_su_strada." -" .$tmp_valore_permuta_usato." -" . $accessori_extra;
				$valore_totale_concordato = ($tmp_valore_autovettura + $tmp_valore_messa_su_strada + $tmp_valore_ipt + $tmp_valore_permuta_usato + $accessori_extra_prezzo + $garanzia_euro);
			}



		//}
	}



	?>
	<style type="text/css">

		.hide {
			display: none;
		}

		.button_contratti {

		    background: #f3f3f3;
		    padding: 10px;
		    border: 1px solid #c1c1c1;
		    margin-right: 10px;

		}

		.button_contratti.checked {
			background: #1fc730;
			border: 1px solid #1fc730;
			color: #fff;
		}

		.button_contratti.orange {

			background: #ff9300;
			border: 1px solid #ff9300;
			color: #fff;
		}

		.button_contratti.red {

			background: #f91b1b;
			border: 1px solid #f91b1b;
			color: #fff;
		}

		.button_contratti.white {
			background:#ffffff !important;
			columns: #444;
		}

	</style>

	<?php

		//if ( !empty(get_contratti_pt_meta('daticontratto_valore_sconto_supervalutazione', $CONTRATTO_TEMP_ID)) ) {
		if ( !empty(get_contratti_pt_meta('valori_fiscali_confermati', $CONTRATTO_TEMP_ID)) ) {

			$valori_fiscali_completato = true;
		}


		if ( ( !empty(get_contratti_pt_meta('daticontratto_valore_sconto_supervalutazione', $CONTRATTO_TEMP_ID)) ) &&
			( !empty(get_contratti_pt_meta('daticontratto_deposito_70_cauzionale',$CONTRATTO_TEMP_ID)) || !empty(get_contratti_pt_meta('daticontratto_saldo',$CONTRATTO_TEMP_ID)) ) ) {

				$status_targatura = true;

				$class_Targatura = "orange";

		} else {

			$status_targatura = false;
			$class_Targatura = "red";

		}

		if ( !empty( get_contratti_pt_meta('daticontratto_data_status_5', $CONTRATTO_TEMP_ID) ) ) {

			$status_targatura = false;

			$status_consegna = true;
			$class_Targatura = "checked";
			$class_Consegna = "orange";

		} else {

			$status_consegna = false;
			$class_Consegna = "red";
		}


		if ( !empty( get_contratti_pt_meta('daticontratto_data_status_6', $CONTRATTO_TEMP_ID) ) ) {

			$class_Targatura = "checked";
			$class_Consegna = "checked";

			$status_consegna = false;
			$auto_consegnata = true;

 		} else {
 			$auto_consegnata = false;
 		}


		if (  get_contratti_pt_meta('valori_fiscali_confermati', $CONTRATTO_TEMP_ID)  ||  !empty(get_contratti_pt_meta('daticontratto_valore_sconto_supervalutazione',$CONTRATTO_TEMP_ID)) ) {
			$class_ValoriFiscali = "checked";
		} else {
			$class_ValoriFiscali = "orange";
		}


		$contratto_annullato = get_contratti_pt_meta("daticontratto_data_status_0",$CONTRATTO_TEMP_ID);

		if (!empty($contratto_annullato)) {
			$class_ValoriFiscali = "red";
			$class_Annullato = "checked";
		} else {
			$class_Annullato = "white";
		}
	?>

<div style="padding:20px; padding-top: 0;">
	<!-- <div style="width:100%;">

		<a class="button_contratti <?php echo $class_Annullato; ?>" href="#">Annullato</a>
		<a class="button_contratti checked" href="#">Acconto</a>
		<a class="button_contratti <?php echo $class_ValoriFiscali; ?>" href="#">Valori Fiscali</a>
		<a class="button_contratti <?php if ( !empty(get_contratti_pt_meta('daticontratto_deposito_70_cauzionale',$CONTRATTO_TEMP_ID)) ) { echo 'checked'; } else { echo "orange"; } ?>" href="#">Acconto 70%</a>
		<a class="button_contratti <?php if ( !empty(get_contratti_pt_meta('daticontratto_saldo',$CONTRATTO_TEMP_ID)) ) { echo 'checked'; } else { echo "orange"; } ?>" href="#">Saldo</a>
		<a class="button_contratti <?php echo $class_Targatura; ?>" href="#">Targatura</a>
		<a class="button_contratti <?php echo $class_Consegna; ?>" href="#">Consegna</a>
	</div> -->



	<div style="width:48%; float:left; margin-right:2%">
		<h4>Dettagli Auto</h4>
		<b style='display: inline-block; width:250px; margin-bottom:6px'>Marca</b><?php echo array_shift( wc_get_product_terms( $auto_id, 'product_cat', array( 'fields' => 'names' ) ) ); ?><br/>
		<b style='display: inline-block; width:250px; margin-bottom:6px'>Modello</b><?php echo array_shift( wc_get_product_terms( $auto_id, 'pa_modello', array( 'fields' => 'names' ) ) ); ?><br/>
		<b style='display: inline-block; width:250px; margin-bottom:6px'>Motorizzazione</b><?php echo array_shift( wc_get_product_terms( $auto_id, 'pa_motorizzazione', array( 'fields' => 'names' ) ) ); ?><br/>
		<b style='display: inline-block; width:250px; margin-bottom:6px'>Versione</b><?php echo array_shift( wc_get_product_terms( $auto_id, 'pa_versione', array( 'fields' => 'names' ) ) ); ?><br/>
		<b style='display: inline-block; width:250px; margin-bottom:6px'>Colore</b><?php echo array_shift( wc_get_product_terms( $auto_id, 'pa_verniciatura', array( 'fields' => 'names' ) ) ); ?><br/>

		<hr/>

		<a href="http://jahreswagen-italia.it/?page_id=452&fill_edit=true&carID=<?php echo $auto_id; ?>"><b>Modifica Auto</b></a>
		<br/>

		<b style='display: inline-block; width:250px; margin-bottom:6px'>Stato del Contratto</b>
			<?php //echo contratto_by_status( $status ); ?>
			<select style="width: 150px;" id="change_contratto_status" cid="<?php echo $CONTRATTO_TEMP_ID; ?>" >

				<option <?php if( $status == 1) { echo "selected"; } ?> value="1">Acconto</option>
				<option <?php if( $status == 2) { echo "selected"; } ?> value="2">Valori Fiscali</option>
				<option <?php if( $status == 3) { echo "selected"; } ?> value="3">Acconto 80%</option>
				<option <?php if( $status == 4) { echo "selected"; } ?> value="4">Targatura</option>
				<option <?php if( $status == 5) { echo "selected"; } ?> value="5">Saldo e Consegna</option>
				<option <?php if( $status == 0) { echo "selected"; } ?> value="0">Annullato</option>

			</select>
		<br/>

		<!-- <a href="http://jahreswagen-italia.it/PDF/contratto_privato_v2.php?contrattoId=<?php echo $CONTRATTO_TEMP_ID; ?>" target="_blank">
		Proforma Contratto
		</a><br/>

		<a href="http://jahreswagen-italia.it/PDF/contratto_privato_v2.php?contrattoId=<?php echo $CONTRATTO_TEMP_ID; ?>&type=contratto" target="_blank">
		Contratto
		</a><br/> -->


		<?php

			$daticontratto_scheda_id = get_contratti_pt_meta('daticontratto_scheda_id',$CONTRATTO_TEMP_ID);

			/*if (!empty($daticontratto_scheda_id)) :
		?>

		<a href="http://jahreswagen-italia.it/PDF/scheda_usato_v2.php?su_id=<?php echo $daticontratto_scheda_id; ?>" target="_blank">
		Scheda Usato
		</a><br/>

		<a href="http://jahreswagen-italia.it/?page_id=22422&fill=<?php echo $daticontratto_scheda_id; ?>" target="_blank">
		Apri Scheda Usato
		</a><br/>

		<?php

			endif;*/

		?>


		<hr/>
		<a href="http://jahreswagen-italia.it/?page_id=51941&fill=<?php echo $CONTRATTO_TEMP_ID; ?>" target="_blank">Modifica Contratto</a><br/>
		<!-- <a href="http://jahreswagen-italia.it/PDF/contratto_privato_v3.php?contrattoId=<?php echo $CONTRATTO_TEMP_ID; ?>" target="_blank">Proforma Contratto </a><br/>-->
		<a href="http://jahreswagen-italia.it/PDF/contratto_privato_v3.php?contrattoId=<?php echo $CONTRATTO_TEMP_ID; ?>&type=contratto" target="_blank">Contratto</a><br/>

		<?php
			$cntr = get_contratti_pt_meta_list( $CONTRATTO_TEMP_ID );
			$linkName = $cntr['data_inserimento']."_".$cntr['user_id']."_".$cntr['auto_id'].".pdf";
		?>
		<!-- http://jahreswagen-italia.it/contratti_pvt/<?php echo $linkName; ?> -->
		<!-- http://jahreswagen-italia.it/PDF/contratto_privato_v5.php?contrattoId=<?php echo $CONTRATTO_TEMP_ID; ?>&type=contratto -->
		<B><a href="http://jahreswagen-italia.it/PDF/contratto_privato_v5.php?contrattoId=<?php echo $CONTRATTO_TEMP_ID; ?>&type=contratto" target="_blank" style="color: red">CONTRATTO CON VALORI FISCALI</a><br/></B>
		<?php



		if (!empty($daticontratto_scheda_id)){
			$tipo_contratto = get_contratti_pt_meta("tipo",$CONTRATTO_TEMP_ID);
			if ($tipo_contratto == "azienda") {
				?>
					<a href="http://jahreswagen-italia.it/PDF/contratto_privato_v3.php?contrattoId=<?php echo $CONTRATTO_TEMP_ID; ?>&contrattoUsato=yes" target="_blank">
						Contratto Usato
					</a>
				<?php
			}
		}

		?>


		<br/>
		<a style="font-weight: bold;" href="http://jahreswagen-italia.it/?page_id=33255&auto_consegnata=consegnata&auto_id=<?php echo $auto_id; ?>&contrattoId=<?php echo $_GET['contrattoId']; ?>">Segna Auto come Consegnata</a>


		<?php
			if ($_GET['auto_consegnata'] == "consegnata")
			{
				$auto_id = $_GET['auto_id'];

				$numero_chiave = get_post_meta($auto_id,"Chiave",true);

				echo "<br/>Azzero chiave n. ".$numero_chiave." per l'auto: ".$auto_id;

				update_post_meta($auto_id,"Chiave","-1");
				$wpdb->get_results("UPDATE nchv SET libera = 0 WHERE numero = '".$numero_chiave."'");


			}
		?>

		<hr/>



		<h4>Anagrafica</h4>
		<?php


		$campiLbl = array("Il Sottoscritto", "Codice Fiscale", "Data di Nascita", "Luogo", "Residente in Via", "Città", "Prov.", "CAP", "Tel", "Fax", "Cell", "Mail", "Riferimento", "Ragione Sociale", "P.Iva", "Legale Rappresentante" );

		$campi = array("ilsottoscritto", "codicefiscale", "datadinascita", "luogo", "residenteinvia", "citta", "provincia", "cap", "telefono", "fax", "cell", "mail", "personadiriferimento", "ragionesociale", "piva", "legalerappresentante" );

		$counter = 0;

		$i = 0;
		foreach ($campi as $campo)
		{

			$campoValue = get_contratti_pt_meta($campo,$CONTRATTO_TEMP_ID);

			if (!empty($campoValue))
			{
				echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>".$campiLbl[$i].":</b> ".ucfirst($campoValue)."<br/>";
			}

			$i++;
		}
		/*foreach ((array)$dati_cliente[0] as $key => $dato) {




			//
			if ((strpos($key, 'daticontratto_') === false) && (strpos($key, 'valori_fiscali_') === false)) {
				echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>".$key.":</b> ".ucfirst($dato)."<br/>";
			}

			$counter++;

		}*/

		?>
	</div>

	<div style="width:48%; float:left; margin-right:2%">

		<?php

			if (!empty($daticontratto_scheda_id)){
				?>
					<h4>Permuta</h4>

					<b style='display: inline-block; width:250px; margin-bottom:6px'>Marca</b><?php echo get_su_meta($daticontratto_scheda_id,"su_marca"); ?><br/>
					<b style='display: inline-block; width:250px; margin-bottom:6px'>Modello</b><?php echo get_su_meta($daticontratto_scheda_id,"su_modello"); ?><br/>
					<b style='display: inline-block; width:250px; margin-bottom:6px'>Motorizzazione</b><?php echo get_su_meta($daticontratto_scheda_id,"su_motorizzazione"); ?><br/>
					<b style='display: inline-block; width:250px; margin-bottom:6px'>Alimentazione</b><?php echo get_su_meta($daticontratto_scheda_id,"su_alimentazione"); ?><br/>



					<b style='display: inline-block; width:250px; margin-bottom:6px'>KM</b><?php echo get_su_meta($daticontratto_scheda_id,"su_km1valutazione"); ?><br/>
					<b style='display: inline-block; width:250px; margin-bottom:6px'>N. Porte</b><?php echo get_su_meta($daticontratto_scheda_id,"su_nporte"); ?><br/>

					<b style='display: inline-block; width:250px; margin-bottom:6px'>Anno</b><?php echo get_su_meta($daticontratto_scheda_id,"su_primaimmatricolazione"); ?><br/>


					<b style='display: inline-block; width:250px; margin-bottom:6px'>Valutazione Tax</b><?php echo get_su_meta($daticontratto_scheda_id,"su_valutazionetax"); ?><br/>
					<b style='display: inline-block; width:250px; margin-bottom:6px'>Valutazione Autoscout</b><?php echo get_su_meta($daticontratto_scheda_id,"su_valutazioneautoscout"); ?><br/>

				<?php

				$rres = $wpdb->get_results("SELECT * FROM wp_scheda_usato_img WHERE su_id = '$daticontratto_scheda_id'");
				echo '<ul style="margin-left:0; padding-left:0">';
				foreach ($rres as $imgs ) {
					echo '<li style="display:inline-table"><img style="padding:5px" width="200" onclick="Popup(\'http://jahreswagen-italia.it/uploadTest/uploads/'.$imgs->img.'\')" src="http://jahreswagen-italia.it/uploadTest/uploads/'.$imgs->img.'" /></li>';
				}
				echo '</ul>';

			}
		?>
		<h4>Dettagli Contrattuali</h4>
			<?php

				if ( $status == 0 ){
					$dStart = new DateTime(date("Y-m-d",$data_contratto));
				} else {

					$data_by_status = get_contratti_pt_meta('daticontratto_data_status_'.$status,$CONTRATTO_TEMP_ID);

					$dStart = new DateTime(date("Y-m-d", $data_by_status ) );

					if (empty($data_by_status)) {
						$dStart = new DateTime(date("Y-m-d", $data_contratto ));
					} else {
						$dStart = new DateTime(date("Y-m-d", $data_by_status ) );
					}

				}


				//VERIFICO QUANTI GIORNI SONO PASSATI
				$checkEnd  = new DateTime( date("Y-m-d", time() ));
				$checkDifference = $dStart->diff($checkEnd);
				$checkDifference = $checkDifference->days;

				if ($checkDifference == 0) {
					$n_giorni = "Oggi";
				} else {
					$n_giorni = $checkDifference. " Giorni";
				}




				echo "<span style='color:red'><b style='display: inline-block; width:250px; margin-bottom:6px'>Data Stipulazione Contratto:</b> ".date("d/m/Y",$data_contratto)."</span><br/>";
				echo "<span style='color:red'><b style='display: inline-block; width:250px; margin-bottom:6px'>Stato del Contratto:</b> <span id='status_contratto'>".contratto_by_status( $status )."<b> da ".$n_giorni."</b></span></span><br/>";
				echo '<div class="br"></div>';






				$iva4percento = get_contratti_pt_meta("daticontratto_iva4",$CONTRATTO_TEMP_ID);
				$valore_auto = get_contratti_pt_meta("daticontratto_prezzo_auto",$CONTRATTO_TEMP_ID);
				$sconto_auto = get_contratti_pt_meta('daticontratto_sconto',$CONTRATTO_TEMP_ID);
				$prezzo_totale = get_contratti_pt_meta('daticontratto_prezzototale',$CONTRATTO_TEMP_ID);
				$messa_su_strada = get_contratti_pt_meta('daticontratto_messa_su_strada',$CONTRATTO_TEMP_ID);
				$ipt = get_contratti_pt_meta('daticontratto_ipt',$CONTRATTO_TEMP_ID);
				$permuta_usato = get_contratti_pt_meta('daticontratto_gestione_permuta_usato',$CONTRATTO_TEMP_ID);
				$sconto_valutazione_usato = get_contratti_pt_meta('daticontratto_sconto_valutazione_usato',$CONTRATTO_TEMP_ID);




				$su_valutazionetax = get_su_meta($daticontratto_scheda_id,'su_valutazionetax');
				$su_valutazioneautoscout = get_su_meta($daticontratto_scheda_id,'su_valutazioneautoscout');

				$daticontratto_valore_totale_concordato = get_contratti_pt_meta('daticontratto_valore_totale_concordato',$CONTRATTO_TEMP_ID);



				$accessori_extra_prezzo = get_contratti_pt_meta('daticontratto_accessori_extra_prezzo',$CONTRATTO_TEMP_ID);
				$accessori_extra = get_contratti_pt_meta('daticontratto_accessori_extra',$CONTRATTO_TEMP_ID);


				if ($iva4percento == "iva4percento") {

					$valore_auto = round(($valore_auto / 1.22));
					$valore_auto = round(($valore_auto * 1.04));


					$messa_su_strada = round(($messa_su_strada / 1.22));
					$messa_su_strada = round(($messa_su_strada * 1.04));

					$ipt = round(($ipt / 1.22));
					$ipt = round(($ipt * 1.04));

					/*$daticontratto_valore_totale_concordato = round(($daticontratto_valore_totale_concordato / 1.22));
					$daticontratto_valore_totale_concordato = round(($daticontratto_valore_totale_concordato * 1.04));*/

					$valore_totale_concordato = ceil(($valore_totale_concordato / 1.22));
					$valore_totale_concordato = ceil(($valore_totale_concordato * 1.04));


					$permuta_usato = round(($permuta_usato / 1.22));
					$permuta_usato = round(($permuta_usato * 1.04));


					/*$gestione_usato = round(($gestione_usato / 1.22));
					$gestione_usato = round(($gestione_usato * 1.04));*/

					$add_string_prezzi = " <small>Iva 4%</small>";

				}

				$sconto_auto = get_contratti_pt_meta("daticontratto_sconto",$CONTRATTO_TEMP_ID);
				//echo "Abc=".$sconto_auto;
				if (empty($sconto_auto)) {
					//$valore_totale_concordato= $valore_totale_concordato -$sconto_auto;
					$sconto_auto = 0;
				}

				//40480

				$prezzo_di_acquisto = get_post_meta($auto_id,"Prezzo Acquisto Lordo",true);
				if (empty($prezzo_di_acquisto)) {
					$prezzo_di_acquisto = get_post_meta($auto_id,"Prezzo di carico L 85",true);
				}

				echo "<span><b style='display: inline-block; width:250px; margin-bottom:6px'>Valore Acquisto (Lordo):</b> ".$prezzo_di_acquisto."</span><br/>";

				//echo "<span><b style='display: inline-block; width:250px; margin-bottom:6px'>Valutazione TAX:</b> ".$su_valutazionetax."</span><br/>";
				//echo "<span><b style='display: inline-block; width:250px; margin-bottom:6px'>Valore Auto Scout:</b> ".$su_valutazioneautoscout."</span><br/>";



				echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Prezzo Auto Proposta:</b> ".$valore_auto." ".$add_string_prezzi."<br/>";
				echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Messa su Strada:</b> ".$messa_su_strada." ".$add_string_prezzi."<br/>";
				echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>IPT:</b> ".$ipt." ".$add_string_prezzi."<br/>";


				if (!empty($rinuncio_garanzia)) {
					echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Rinuncio Garanzia</b><br/>";
				}


				if (!empty($garanzia_12_mesi)) {
					echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Garanzia 12 Mesi</b><br/>";
				}


				if (!empty($garanzia_ufficiale)) {
					echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Garanzia Ufficiale</b> ".number_format($garanzia_ufficiale, 2, ',', '.').'<br/>';
				}

				if (!empty($garanzia_numero_mesi)) {
					echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Estensione Garanzia ".$garanzia_numero_mesi."</b> ".number_format($garanzia_euro, 2, ',', '.').'<br/>';
				}


				if (!empty($accessori_extra_prezzo)) {

					echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Accessori Extra:</b> ".$accessori_extra."<br/>";
					echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Accessori Extra Prezzo:</b> ".$accessori_extra_prezzo."<br/>";
				}

				if (!empty($daticontratto_scheda_id)){
					echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Spese Gestione Usato:</b> ".$permuta_usato." ".$add_string_prezzi."<br/>";


					echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Prezzo Auto Totale Concordato:</b> ".$valore_totale_concordato."<br/>";
					echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Valore Permuta con Sconto e Supervalutazione:</b> ".$sconto_valutazione_usato."<br/>";

					$_t_sconto_supervalutazione = get_contratti_pt_meta('daticontratto_valore_sconto_supervalutazione',$CONTRATTO_TEMP_ID);;
					$_t_valore_fatturato = get_contratti_pt_meta('daticontratto_valore_fatturato',$CONTRATTO_TEMP_ID);;

					if (!empty($_t_sconto_supervalutazione)) {
						echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Valore Sconto / Supervalutazione Usato (SURPLUS):</b> ".$_t_sconto_supervalutazione."<br/>";
					}

					if (!empty($_t_valore_fatturato)) {
						echo "<b style='display: inline-block; width:100%; margin-bottom:6px; font-size:18px; line-height34px;'>Valore Fiscale Auto in Permuta (L. 85 Dini): Euro ".$_t_valore_fatturato."</b><br/>";
					}

					$valore_fattura_print =  get_contratti_pt_meta('daticontratto_valore_fattura',$CONTRATTO_TEMP_ID);
					if (!empty($valore_fattura_print)) {
						echo "<b style='display: inline-block; width:100%; margin-bottom:6px; font-size:18px; line-height34px;'>Valore Fattura: Euro ".$valore_fattura_print."</b><br/>";
					}






					 get_contratti_pt_meta('',$CONTRATTO_TEMP_ID);



//(($prezzo_auto - $sconto_auto - $valore_usato) + $gestione_usato +  $messa_su_strada + $garanzia_euro + get_contratti_pt_meta("accessori_extra_prezzo",$contrattoId) );
					 //- $sconto_auto  + $garanzia_euro  + $permuta_usato - $sconto_valutazione_usato
					 echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Sconto:</b> ".$sconto_auto."<br/>";
					echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Totale per Differenza:</b> <span id='totale_per_diff'>".($valore_auto + $garanzia_euro + $messa_su_strada + $ipt + $accessori_extra_prezzo  + $permuta_usato - $sconto_valutazione_usato  - $sconto_auto  )."</span><br/>";
				} else {
					echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Sconto:</b> ".$sconto_auto."<br/>";
					echo "<b style='display: inline-block; width:250px; margin-bottom:6px'>Totale per Differenza:</b> <span id='totale_per_diff'>".(($valore_auto - $sconto_auto) + $garanzia_euro + $accessori_extra_prezzo + $messa_su_strada + $ipt + $permuta_usato - $sconto_valutazione_usato )."</span><br/>";

				}

			?>

			<?php //if ($status == 2) : ?>

				<form method="post" id="valori_fiscali_form">

			<?php if (!empty($daticontratto_scheda_id)){ ?>
			<div class="block_dati_generici block_dati_2 hide">
				<h4>Valori Fiscali</h4>

					<label>
						Prezzo Auto Totale Concordato:
					</label>
					<input readonly type="text" value="<?php echo $valore_totale_concordato;  ?>" name="daticontratto_valore_totale_concordato" id="daticontratto_valore_totale_concordato" />
					<div class="br"></div>

					<label>
						Valore Sconto / Supervalutazione Usato (SURPLUS):
					</label>
					<input type="text" value="<?php echo get_contratti_pt_meta('daticontratto_valore_sconto_supervalutazione',$CONTRATTO_TEMP_ID); ?>" name="daticontratto_valore_sconto_supervalutazione" id="daticontratto_valore_sconto_supervalutazione" />
					<div class="br"></div>

					<label>
						Valore Fattura
					</label>
					<input type="text" value="<?php echo get_contratti_pt_meta('daticontratto_valore_fattura',$CONTRATTO_TEMP_ID); ?>" name="daticontratto_valore_fattura" id="daticontratto_valore_fattura" />
					<div class="br"></div>

					<label>
						Valore Fiscale Auto in Permuta (L. 85 Dini)
					</label>
					<input type="text" value="<?php echo get_contratti_pt_meta('daticontratto_valore_fatturato',$CONTRATTO_TEMP_ID); ?>" name="daticontratto_valore_fatturato" id="daticontratto_valore_fatturato" />
					<div class="br"></div>

					<label>
						Totale Per Differenza
					</label>
					<input type="text" value="<?php echo get_contratti_pt_meta('daticontratto_valore_totale_per_differenza',$CONTRATTO_TEMP_ID); ?>" name="daticontratto_valore_totale_per_differenza" id="daticontratto_valore_totale_per_differenza" />
					<div class="br"></div>
			</div>
			<?php } ?>

			<div class="block_dati_generici block_dati_3 hide">
				<h4>Deposito Cauzionale 80%</h4>
				<div class="br"></div>

				<label>
					Euro:
				</label>
				<input type="text" value="<?php echo get_contratti_pt_meta('daticontratto_deposito_70_cauzionale',$CONTRATTO_TEMP_ID); ?>" name="daticontratto_deposito_70_cauzionale"  id="daticontratto_deposito_70_cauzionale" onkeyup='saveValue(this);' />
				<div class="br"></div>

				<label>
					Bonifico
				</label>
				<input style="display: none;" type="checkbox" value="" name="daticontratto_dep_70_cau_bonifico" />
				<input type="checkbox" <?php if (get_contratti_pt_meta('daticontratto_dep_70_cau_bonifico',$CONTRATTO_TEMP_ID)) { echo 'checked'; } ?> value="si" name="daticontratto_dep_70_cau_bonifico" id="daticontratto_dep_70_cau_bonifico" />
				<div class="br"></div>


				<label>
					Carta di Credito
				</label>
				<input style="display: none;" type="checkbox" value="" name="daticontratto_dep_70_cau_carta_credito" />
				<input type="checkbox" <?php if (get_contratti_pt_meta('daticontratto_dep_70_cau_carta_credito',$CONTRATTO_TEMP_ID)) { echo 'checked'; } ?> value="si" name="daticontratto_dep_70_cau_carta_credito" id="daticontratto_dep_70_cau_carta_credito" />
				<div class="br"></div>

				<label>
					Contanti
				</label>
				<input style="display: none;" type="checkbox" value="" name="daticontratto_dep_70_cau_contatti" />
				<input type="checkbox" <?php if (get_contratti_pt_meta('daticontratto_dep_70_cau_contatti',$CONTRATTO_TEMP_ID)) { echo 'checked'; } ?> value="si" name="daticontratto_dep_70_cau_contatti" id="daticontratto_dep_70_cau_contatti" />
				<div class="br"></div>

				<label>
					Assegno
				</label>
				<input style="display: none;" type="checkbox" value="" name="daticontratto_dep_70_cau_assegno" />
				<input type="checkbox"  <?php if (get_contratti_pt_meta('daticontratto_dep_70_cau_assegno',$CONTRATTO_TEMP_ID)) { echo 'checked'; } ?>  value="si" name="daticontratto_dep_70_cau_assegno" id="daticontratto_dep_70_cau_assegno" />
				<input type="text"  value="<?php echo get_contratti_pt_meta('daticontratto_dep_70_cau_n',$CONTRATTO_TEMP_ID); ?>" name="daticontratto_dep_70_cau_n" id="daticontratto_dep_70_cau_n" placeholder="N." style="width:50px;" onkeyup='saveValue(this);' />
				<input type="text"  value="<?php echo get_contratti_pt_meta('daticontratto_dep_70_cau_banca',$CONTRATTO_TEMP_ID); ?>" name="daticontratto_dep_70_cau_banca" id="daticontratto_dep_70_cau_banca" placeholder="Banca" style="width:100px;" onkeyup='saveValue(this);'  />
				<input type="text"  value="<?php echo get_contratti_pt_meta('daticontratto_dep_70_cau_filiale',$CONTRATTO_TEMP_ID); ?>" name="daticontratto_dep_70_cau_filiale" id="daticontratto_dep_70_cau_filiale" placeholder="Filiale" style="width:100px;" onkeyup='saveValue(this);'  />
				<div class="br"></div>
			</div>

			<div class="block_dati_generici block_dati_5  hide">
				<h4>Saldo</h4>
				<div class="br"></div>
				<label>
					Euro:
				</label>
				<input type="text" value="<?php echo get_contratti_pt_meta('daticontratto_saldo',$CONTRATTO_TEMP_ID); ?>" name="daticontratto_saldo" id="daticontratto_saldo" onkeyup='saveValue(this);' />
				<div class="br"></div>

				<label>
					Bonifico
				</label>
				<input style="display: none;" type="checkbox" value="" name="daticontratto_saldo_bonifico" />
				<input type="checkbox"  <?php if (get_contratti_pt_meta('daticontratto_saldo_bonifico',$CONTRATTO_TEMP_ID)) { echo 'checked'; } ?> value="si" name="daticontratto_saldo_bonifico" id="daticontratto_saldo_bonifico" />
				<div class="br"></div>


				<label>
					Carta di Credito
				</label>
				<input style="display: none;" type="checkbox" value="" name="daticontratto_saldo_credito" />
				<input type="checkbox"  <?php if (get_contratti_pt_meta('daticontratto_saldo_carta_credito',$CONTRATTO_TEMP_ID)) { echo 'checked'; } ?> value="si" name="daticontratto_saldo_carta_credito" id="daticontratto_saldo_carta_credito" />
				<div class="br"></div>

				<label>
					Contanti
				</label>
				<input style="display: none;" type="checkbox" value="" name="daticontratto_saldo_contatti" />
				<input type="checkbox"  <?php if (get_contratti_pt_meta('daticontratto_saldo_contatti',$CONTRATTO_TEMP_ID)) { echo 'checked'; } ?> value="si" name="daticontratto_saldo_contatti" id="daticontratto_saldo_contatti" />
				<div class="br"></div>

				<label>
					Assegno
				</label>
				<input style="display: none;" type="checkbox" value="" name="daticontratto_saldo_assegno" />
				<input type="checkbox" value="si" <?php if (get_contratti_pt_meta('daticontratto_saldo_assegno',$CONTRATTO_TEMP_ID)) { echo 'checked'; } ?> name="daticontratto_saldo_assegno" id="daticontratto_saldo_assegno" />
				<input type="text" value="<?php echo get_contratti_pt_meta('daticontratto_saldo_n',$CONTRATTO_TEMP_ID); ?>" name="daticontratto_saldo_n" id="daticontratto_saldo_n" placeholder="N." style="width:50px;" onkeyup='saveValue(this);' />
				<input type="text" value="<?php echo get_contratti_pt_meta('daticontratto_saldo_banca',$CONTRATTO_TEMP_ID); ?>" name="daticontratto_saldo_banca" id="daticontratto_saldo_banca" placeholder="Banca" style="width:100px;" onkeyup='saveValue(this);'  />
				<input type="text" value="<?php echo get_contratti_pt_meta('daticontratto_saldo_filiale',$CONTRATTO_TEMP_ID); ?>" name="daticontratto_saldo_filiale" id="daticontratto_saldo_filiale" placeholder="Filiale" style="width:100px;" onkeyup='saveValue(this);'  />
				<div class="br"></div>

			</div>

				<br/>
					<div style="width:100%; margin: 0 auto;text-align: center;">
						<input type="hidden" value="<?php echo $CONTRATTO_TEMP_ID; ?>" name="contratto_id" />


						<input type="hidden" name="id_scheda_usato" value="<?php echo $daticontratto_scheda_id; ?>"/>
							<input type="hidden" name="salva_valori_fiscali_nonce" value="<?php echo wp_create_nonce('salva_valori_fiscali_nonce'); ?>"/>

					<?php if (empty($contratto_annullato)) : ?>
						<?php if (!$auto_consegnata) : ?>
							<?php if (!empty($daticontratto_scheda_id)){ ?>
								<input style="width:100%; line-height: 40px;" id="salva_valori_fiscali" style="padding:5px" type="submit" value="Salva"/>
						<?php } else { ?>

							<?php if ( empty(get_contratti_pt_meta('valori_fiscali_confermati', $CONTRATTO_TEMP_ID)) && current_user_can('administrator') ) { ?>

								<input style="width:100%; line-height: 40px;" id="conferma_contratto" style="padding:5px" type="submit" value="Conferma"/>

							<?php } else { ?>
								<input style="width:100%; line-height: 40px;" id="salva_generic" style="padding:5px" type="submit" value="Salva"/>
							<?php } ?>

						<?php } ?>
						<?php if( current_user_can('administrator')) { ?>
							<input class="button_contratti red" style="width:100%; line-height: 40px; margin-top:15px;" id="annulla_contratto" style="padding:5px" type="submit" value="Annulla Contratto"/>
						<?php } ?>
						<?php endif; ?>

					<?php endif; ?>

					</div>





				</form>
				<?php if (empty($contratto_annullato)) : ?>
				<?php if ($status_targatura) { ?>

					<input style="width:100%;line-height: 40px;margin-top: 15px;background: #31af31;color: #fff;" id="invia_auto_consegna" style="padding:5px" type="submit" value="Passa in Consegna"/>

				<?php } else if ($status_consegna) { ?>

					<input style="width:100%;line-height: 40px;margin-top: 15px;background: #31af31;color: #fff;" id="auto_consegnata" style="padding:5px" type="submit" value="Segna Come Auto Consegnata"/>

				<?php } else { ?>

				<?php } ?>

					<?php if ((!$auto_consegnata) ) : ?>

						<?php if( current_user_can('administrator')) { ?>
							<input style="width:100%;line-height: 40px;margin-top: 15px;background: #31af31;color: #fff;" id="invia_tramite_mail" style="padding:5px" type="submit" value="Invia Tramite Email"/>
						<?php } ?>

					<?php endif; ?>

			<?php endif; ?>

	</div>
</div> <!-- end -->

	<script>

		var stile = "top=10, left=10, width=800, height=640, status=no, menubar=no, toolbar=no scrollbars=no";

		function Popup(apri) {
		  window.open(apri, "", stile);
		}


		jQuery.noConflict();
		(function( $ ) {
		  $(function() {



		  	var stato_corrente = $( "#change_contratto_status option:selected" ).val();

		  	$(".block_dati_generici").addClass("hide");
		  	$(".block_dati_"+stato_corrente).removeClass("hide");

		  	//console.log(stato_corrente);

		  	$( "#invia_tramite_mail" ).click(function() {

		  		var cid = "<?php echo $_GET['contrattoId']; ?>" // $(this).attr("cid");

				$.ajax({
				  type: "GET",
				  url: "http://jahreswagen-italia.it/PDF/contratto_privato_v2.php?contrattoId="+cid+"&type=contratto&send_mail=yes",
				  dataType: "html",
				  success: function(risposta){
				  	console.log(risposta);
				    alert("Contratto Inviato");
				  }
				});
		  	});



		  	$( "#auto_consegnata" ).click(function() {

		  		var cid = "<?php echo $_GET['contrattoId']; ?>" // $(this).attr("cid");

		  		$.post(ajaxurl, { 'action': 'cambiastatuscontratto', 'cur_val': 6, 'cid': cid }, function(response) {

					location.reload();

				});

		  	});


		  	$( "#invia_auto_consegna" ).click(function() {

		  		var cid = "<?php echo $_GET['contrattoId']; ?>" // $(this).attr("cid");

		  		$.post(ajaxurl, { 'action': 'cambiastatuscontratto', 'cur_val': 5, 'cid': cid }, function(response) {

					location.reload();

				});

		  	});


		  	$( "#conferma_contratto").click(function() {
		  		var cid = "<?php echo $_GET['contrattoId']; ?>" // $(this).attr("cid");
		  		$.post(ajaxurl, { 'action': 'cambiastatuscontratto', 'cur_val': 3, 'cid': cid, 'extra': 'conferma_valori_fiscali' }, function(response) {

					location.reload();

				});

				return false;

		  	});


		  	$( "#annulla_contratto").click(function() {

		  		var cid = "<?php echo $_GET['contrattoId']; ?>" // $(this).attr("cid");

		  		if (confirm("Annullare il Contratto?")) {
			  		$.post(ajaxurl, { 'action': 'cambiastatuscontratto', 'cur_val': 0, 'cid': cid }, function(response) {

						location.reload();

					});
		  		} else{
		  			return false;
		  		}

		  	});

		  	$("#salva_generic").click(function() {
		  		$("#valori_fiscali_form").submit();
		  	});


		  	$( "#salva_valori_fiscali" ).click(function() {


				/**/


				var totale_per_diff_originale = $("#totale_per_diff").text();
				var totale_per_diff = $("#daticontratto_valore_totale_per_differenza").val();

				if (totale_per_diff != totale_per_diff_originale){

					alert("I Valori Fiscali non sono Corretti");

					return false;

			  	} else {


					$("#valori_fiscali_form").submit();

					return false;

			  	}
		  	});

		  	$( "#change_contratto_status" ).change(function() {
		  		var stato_corrente = $(this).val();
			  	$(".block_dati_generici").addClass("hide");
			  	$(".block_dati_"+stato_corrente).removeClass("hide");
/*
		  		var cur_text = $(this).find("option:selected").text();
		  		var cur_val = $(this).val();
		  		var cid = $(this).attr("cid");

		  		$("#status_contratto").html(cur_text);


				$.post(ajaxurl, { 'action': 'cambiastatuscontratto', 'cur_val': cur_val, 'cid': cid }, function(response) {

					$("#status_contratto").html(cur_text);

				});
*/


		  	});

			$( "#daticontratto_valore_sconto_supervalutazione, #daticontratto_valore_fatturato, #daticontratto_valore_totale_per_differenza  " ).keyup(function() {

		  		var daticontratto_valore_totale_concordato = $("#daticontratto_valore_totale_concordato").val();
				if (!daticontratto_valore_totale_concordato) { daticontratto_valore_totale_concordato = 0; }

		  		var daticontratto_valore_sconto_supervalutazione = $("#daticontratto_valore_sconto_supervalutazione").val();
				if (!daticontratto_valore_sconto_supervalutazione) { daticontratto_valore_sconto_supervalutazione = 0; }

				var daticontratto_valore_fatturato = $("#daticontratto_valore_fatturato").val();
				if (!daticontratto_valore_fatturato) { daticontratto_valore_fatturato = 0; }

				/*var daticontratto_valore_totale_per_differenza = $("#daticontratto_valore_totale_per_differenza").val();
				if (!daticontratto_valore_totale_per_differenza) { daticontratto_valore_totale_per_differenza = 0; }*/




				var valore_fatturato = parseFloat(daticontratto_valore_totale_concordato) - parseFloat(daticontratto_valore_sconto_supervalutazione);
				var totale_per_differenza = parseFloat(daticontratto_valore_totale_concordato) - parseFloat(daticontratto_valore_sconto_supervalutazione) - parseFloat(daticontratto_valore_fatturato);
				var totale_per_diff_originale = $("#totale_per_diff").text();


				$("#daticontratto_valore_fattura").val(valore_fatturato);

				if (totale_per_differenza != totale_per_diff_originale){
					$("#daticontratto_valore_totale_per_differenza").css("color", "red");
				} else {
					$("#daticontratto_valore_totale_per_differenza").css("color", "#000");
				}
				$("#daticontratto_valore_totale_per_differenza").val( totale_per_differenza  );
			});


	  });
	})(jQuery);
	</script>
	<?php
}
add_action( 'wp_ajax_nopriv_cambiastatuscontratto', 'cambiastatuscontratto_callback' );
add_action( 'wp_ajax_cambiastatuscontratto', 'cambiastatuscontratto_callback' );

function cambiastatuscontratto_callback() {

	global $wpdb;

	$cur_val 	= $_POST['cur_val'];
	$cid 		= $_POST['cid'];
	$extra 		= $_POST['extra'];

	if ($extra == 'conferma_valori_fiscali') {
		update_contratto_meta("valori_fiscali_confermati",time(),$cid);
	}

	$wpdb->get_results("UPDATE contratti_pt_list SET status = '$cur_val' WHERE id = '$cid'");
	update_contratto_meta("daticontratto_data_status_".$cur_val,time(),$cid);

	wp_die();
}

add_shortcode("contratto_privati","contratto_privati");
function contratto_privati( $atts ){

	global $wpdb;

	extract(shortcode_atts(array(
	  "readonly" => "false"
	), $atts));


	$from = $_GET['from'];



	?>
	<style>
	.dashboard-wrapper {
		width: 75%;
	}
	.br {
		width: 100%;
		display: block;
		clear: both;
		margin: 15px 0;
	}

	.required_symbol:after {
		content: '*';
		font-size: 17px;
		color: #f00;
		margin-left: 10px;
		font-weight: bold;
	}
	</style>
	<br/>

	<form method="post" enctype="multipart/form-data">
		<div style="width:48%; float:left; margin-right:2%">
			<h4>Acquirente</h4>
			<br/>
			<label>
				Tipo Azienda
			</label>
			<select name="cp_tipo" id="cp_tipo" style="width: 179px;">
				<option value="privato">Privato</option>
				<option value="azienda">Azienda</option>
			</select>
			<div class="br"></div>
		<?php

			$i = 0;

			$campiEscludere = array();

			$campi = array("ilsottoscritto", "codicefiscale", "datadinascita", "luogo", "residenteinvia", "citta", "provincia", "cap", "telefono", "fax", "cell", "mail", "personadiriferimento", "ragionesociale", "piva", "legalerappresentante" );

			$campi_azienda = array( "personadiriferimento","ragionesociale","piva","legalerappresentante");
			$campi_non_obblicagori = array( "telefono", "fax");
			$class_campo = "";
			$required_symbol = "";

			$campiLbl = array("Il Sottoscritto", "Codice Fiscale", "Data di Nascita", "Luogo", "Residente in Via", "Città", "Prov.", "CAP", "Tel", "Fax", "Cell", "Mail", "Riferimento", "Ragione Sociale", "P.Iva", "Legale Rappresentante" );


			if ($from == "preventivo") {
				//$dati_cliente = $wpdb->get_results("SELECT * FROM clienti_elitcar WHERE id = '".$_GET['cliente_id']."'",ARRAY_A);

				$prezzo_vendita 	  = $wpdb->get_results("SELECT * FROM wp_postmeta WHERE meta_key = 'prezzo_vendita' AND post_id = '".$_GET['id_preventivo']."'");
				$prezzo_vendita 	  = $prezzo_vendita[0]->meta_value;

				$messa_strada 	  = $wpdb->get_results("SELECT * FROM wp_postmeta WHERE meta_key = 'messa_strada' AND post_id = '".$_GET['id_preventivo']."'");
				$messa_strada 	  = $messa_strada[0]->meta_value;

				$ipt 	  = $wpdb->get_results("SELECT * FROM wp_postmeta WHERE meta_key = 'ipt' AND post_id = '".$_GET['id_preventivo']."'");
				$ipt 	  = $ipt[0]->meta_value;

				$spesegestioneusato 	  = $wpdb->get_results("SELECT * FROM wp_postmeta WHERE meta_key = 'spesegestioneusato' AND post_id = '".$_GET['id_preventivo']."'");
				$dati_usato['gestione_permuta_usato'] 	  = $spesegestioneusato[0]->meta_value;

				$supervalutazione 	  = $wpdb->get_results("SELECT * FROM wp_postmeta WHERE meta_key = 'supervalutazione' AND post_id = '".$_GET['id_preventivo']."'");
				$dati_usato['sconto_valutazione_usato'] = $supervalutazione[0]->meta_value;

				$auto_id = $_GET['auto_id'];

				echo $prezzo_vendita;

			} else {

				$auto_id = $_GET['auto_id'];

				$prezzo_vendita = get_post_meta($_GET['auto_id'],"Prezzo Pubblico",true);
				$messa_strada = get_post_meta($_GET['auto_id'],"Messa in Strada",true);
				$ipt = get_post_meta($_GET['auto_id'],"IPT",true);

				$dati_usato['gestione_permuta_usato'] = "";
				$dati_usato['sconto_valutazione_usato'] = "";
			}

			foreach($campi as $campo): ?>
				<?php

					if (in_array($campo, $campi_azienda)) {
						$class_campo = "azienda";
					} else {
						$class_campo = "privato";
					}

					if (in_array($campo, $campi_non_obblicagori)) {
						$is_required = "";
						$required_symbol = "_required_symbol";
					} else {
						$is_required = "required";
						$required_symbol = "required_symbol";
					}
				?>
				<div class="<?php echo $class_campo; ?>">
					<label>
						<?php echo $campiLbl[$i]; $i++ ?>
					</label>
					<!--  -->


<span class="<?php echo $required_symbol; ?>"><input type="text" <?php echo $is_required; ?> class="required" value="<?php if (isset($dati_cliente[0][$campo])) { echo $dati_cliente[0][$campo]; } ?>" name="<?php echo $extension ?>cp_<?php echo $campo; ?>" id="cp_<?php echo $campo; ?>"  onkeyup='saveValue(this);' /></span>

					<div class="br"></div>
				</div>
			<?php endforeach; ?>

		</div>
		<div style="width:48%; float:left; margin-right:2%">
			<!-- <h4>Scheda Usato</h4>
				<a href="#">Crea Scheda Usato</a>
				<br/>
				<a href="#">Associa Scheda Usato</a> -->

			<h4>Scheda Usato</h4>
			<div id="wrapper-link-scheda-usato">
				<?php if(isset($_GET['scheda_id'])) :
					?>
					<!-- ID SCHEDA USATO -->

					<a href="http://jahreswagen-italia.it/?page_id=22422&fill=<?php echo $_GET['scheda_id']; ?>" target="_blank" style="font-size:18px;">

						<b><?php echo get_su_meta($_GET['scheda_id'],"su_nomeecognomeragionesociale")." - ".get_su_meta($_GET['scheda_id'],"su_marca")." ".get_su_meta($_GET['scheda_id'],"su_modello"); ?></b>

					</a><br/>
					<a id="rimuovi_scheda_usato" style="font-size:18px;">Rimuovi Scheda Usato</a>
				<?php else: ?>

				<?php endif; ?>
			</div>

			<input type="hidden" id="id_auto_usata" name="id_auto_usata" value="<?php echo $_GET['scheda_id']; ?>" />

			<a  data-remodal-target='seleziona_scheda_usato' id="seleziona_scheda_usato" style="font-size:18px;">Seleziona Scheda Usato</a>
			<br/>
			<a id="crea_scheda_usato" href="http://jahreswagen-italia.it/?page_id=22422&da_contratto=yes" target="_blank" style="font-size:18px;">Crea Scheda Usato</a>
			<!-- <span id="crea_scheda_usato">Crea Scheda Usato</span> -->
			<h4>Granzia <b style="color:red">*</b></h4>
			<label>
				Rinuncio Garanzia
			</label>
			<!-- <input style="display: none;" type="checkbox" value="" id="daticontratto_rinuncio_garanzia" name="daticontratto_rinuncio_garanzia" /> -->
			<input type="checkbox" value="rinuncio_garanzia" id="daticontratto_rinuncio_garanzia" name="daticontratto_rinuncio_garanzia" />
			<div class="br"></div>

			<label>
				Garanzia 12 Mesi
			</label>
			<!--  <input style="display: none;" type="checkbox" value="" id="daticontratto_garanzia_12_mesi" name="daticontratto_garanzia_12_mesi" /> -->
			<input type="checkbox" value="12mesi" id="daticontratto_garanzia_12_mesi" name="daticontratto_garanzia_12_mesi" />
			<div class="br"></div>
			<label>
				Garanzia Ufficiale
			</label>
			<input type="text" value="" name="daticontratto_garanzia_ufficiale"  id="daticontratto_garanzia_ufficiale" onkeyup='saveValue(this);' />
			<div class="br"></div>

			<label>
				Estensione Garanzia Mesi
			</label>
			<input style="width:130px;" type="text" value="" id="daticontratto_numero_mesi"  name="daticontratto_numero_mesi" onkeyup='saveValue(this);' />
			&nbsp;&nbsp;&nbsp;Euro
			<input style="width:70px" type="text" value="" id="daticontratto_euro"  name="daticontratto_euro" onkeyup='saveValue(this);' />

			<div class="br"></div>
			<h4>Prezzo Usato</h4>
			<label>
				Iva 4%
			</label>
			<!-- <input style="display: none;" type="checkbox" value="" id="daticontratto_rinuncio_garanzia" name="daticontratto_rinuncio_garanzia" /> -->
			<input type="checkbox" value="iva4percento" id="daticontratto_iva4" name="daticontratto_iva4" />
			<div class="br"></div>
			<?php
					$i = 0;
					$campi = array("gestione_permuta_usato", "sconto_valutazione_usato" );
					$campiLbl = array("Gestione Permuta Usato", "Supervalutazione Usato");

				foreach($campi as $campo): ?>

					<div class="blocco_usato">
						<label>
							<?php echo $campiLbl[$i]; $i++ ?>
						</label>
						<span class="_required_symbol"><input type="text" value="<?php echo $dati_usato[$campo]; ?>" name="daticontratto_<?php echo $campo; ?>" id="daticontratto_<?php echo $campo; ?>"  onkeyup='saveValue(this);'  /></span>
						<div class="br"></div>
					</div>
				<?php endforeach; ?>


			<label>
				Iva Esposta
			</label>
			<!--  <input style="display: none;" type="checkbox" value="" id="daticontratto_garanzia_12_mesi" name="daticontratto_garanzia_12_mesi" /> -->
			<input type="checkbox" value="ivaesposta" id="daticontratto_iva_esposta" name="daticontratto_iva_esposta" />
			<div class="br"></div>

			<div class="br"></div>
			<h4>Prezzi</h4>
				<label>
					Prezzo Auto
				</label>
				<span class="required_symbol"><input  type="text"  id="daticontratto_prezzo_auto" name="daticontratto_prezzo_auto" value="<?php echo $prezzo_vendita; ?>" onkeyup='saveValue(this);' /></span>
				<div class="br"></div>
			<?php
				$i = 0;
				$campi = array("messa_su_strada", "sconto", "prezzototale" );
			  	$campiLbl = array("Messa su Strada", "Sconto", "Prezzo Totale" );

				$campi_non_obblicagori = array( "sconto");
				$class_campo = "";
				$required_symbol = "";

				foreach($campi as $campo): ?>
					<label>
						<?php echo $campiLbl[$i]; $i++ ?>
					</label>

					<?php

					if (in_array($campo, $campi_non_obblicagori)) {
						$is_required = "";
						$required_symbol = "_required_symbol";
					} else {
						$is_required = "required";
						$required_symbol = "required_symbol";
					}

					if ($campo == "messa_su_strada") {
						$value =  $messa_strada;
					} else {
						$value = "";
					}

					?>
					<span class="<?php echo $required_symbol; ?>"><input type="text" <?php echo $is_required; ?> value="<?php echo $value; ?>" name="daticontratto_<?php echo $campo; ?>" id="daticontratto_<?php echo $campo; ?>" onkeyup='saveValue(this);' /></span>
					<div class="br"></div>
				<?php endforeach; ?>

			<div class="br"></div>
			<h4>Dettagli</h4>
			<?php
					$i = 0;
					$campi = array("presunta_data_consegna", "assistenza_elitcar");
					$campiLbl = array("Data di Consegna Prevista", "Assistenza Elitcar Mesi / KM");

				foreach($campi as $campo): ?>
					<label>
						<?php echo $campiLbl[$i]; $i++ ?>
					</label>
					<?php if ($campo == "presunta_data_consegna") {
						$date = date("Y-m-d");
						$value =  date('d/m/Y', strtotime($date. ' + 45 days'));
					} else {
						$value = "";
					}
					?>
					<input type="text" value="<?php echo $value; ?>" name="daticontratto_<?php echo $campo; ?>" id="daticontratto_<?php echo $campo; ?>" onkeyup='saveValue(this);' />
					<div class="br"></div>
				<?php endforeach; ?>

			<div class="br"></div>
			<h4>Extra</h4>
			<label>
				Accessori Extra
			</label>
			<input type="text" value="" name="daticontratto_accessori_extra" id="daticontratto_accessori_extra" onkeyup='saveValue(this);' /> (separare con virgola)
			<div class="br"></div>
			<label>
				Prezzo
			</label>
			<input type="text" value="" name="daticontratto_accessori_extra_prezzo" id="daticontratto_accessori_extra_prezzo" onkeyup='saveValue(this);' />
			<div class="br"></div>


			<h4>Amministrativo</h4>


			<b>Finanziamento</b>

			<div class="br"></div>
			<div class="br"></div>

			<label>
				Finanziamento €
			</label>
			<input type="text" value="" name="daticontratto_saldo_finanziamento" id="daticontratto_saldo_finanziamento" onkeyup='saveValue(this);' />
			<div class="br"></div>


			<b>Deposito Cauzionale</b>
			<div class="br"></div>

			<label>
				Euro:
			</label>
			<input type="text" value="" name="daticontratto_deposito_cauzionale" id="daticontratto_deposito_cauzionale" onkeyup='saveValue(this);' />
			<div class="br"></div>


			<label>
				Bonifico
			</label>
			<input style="display: none;" type="checkbox" value="" name="daticontratto_dep_cau_bonifico" />
			<input type="checkbox" value="si" name="daticontratto_dep_cau_bonifico" id="daticontratto_dep_cau_bonifico"  />
			<div class="br"></div>


			<label>
				Carta di Credito
			</label>
			<input style="display: none;" type="checkbox" value="" name="daticontratto_dep_cau_carta_credito" />
			<input type="checkbox" value="si" name="daticontratto_dep_cau_carta_credito" id="daticontratto_dep_cau_carta_credito" />
			<div class="br"></div>

			<label>
				Contanti
			</label>
			<input style="display: none;" type="checkbox" value="" name="daticontratto_dep_cau_contatti" />
			<input type="checkbox" value="si" name="daticontratto_dep_cau_contatti"  id="daticontratto_dep_cau_contatti" />
			<div class="br"></div>

			<label>
				Assegno
			</label>
			<input style="display: none;" type="checkbox" value="" name="daticontratto_dep_cau_assegno" />
			<input type="checkbox" value="si" name="daticontratto_dep_cau_assegno" id="daticontratto_dep_cau_assegno" />
			<input type="text" name="daticontratto_dep_cau_n" id="daticontratto_dep_cau_n" placeholder="N." style="width:50px;" onkeyup='saveValue(this);'/>
			<input type="text" name="daticontratto_dep_cau_banca" id="daticontratto_dep_cau_banca" placeholder="Banca" style="width:100px;" onkeyup='saveValue(this);' />
			<input type="text" name="daticontratto_dep_cau_filiale" id="daticontratto_dep_cau_filiale" placeholder="Filiale" style="width:100px;" onkeyup='saveValue(this);' />
			<div class="br"></div>

			<b>Deposito Cauzionale 80%</b>
			<div class="br"></div>

			<label>
				Euro:
			</label>
			<input type="text" value="" name="daticontratto_deposito_70_cauzionale"  id="daticontratto_deposito_70_cauzionale" onkeyup='saveValue(this);' />
			<div class="br"></div>

			<label>
				Bonifico
			</label>
			<input style="display: none;" type="checkbox" value="" name="daticontratto_dep_70_cau_bonifico" />
			<input type="checkbox" value="si" name="daticontratto_dep_70_cau_bonifico" id="daticontratto_dep_70_cau_bonifico" />
			<div class="br"></div>


			<label>
				Carta di Credito
			</label>
			<input style="display: none;" type="checkbox" value="" name="daticontratto_dep_70_cau_carta_credito" />
			<input type="checkbox" value="si" name="daticontratto_dep_70_cau_carta_credito" id="daticontratto_dep_70_cau_carta_credito" />
			<div class="br"></div>

			<label>
				Contanti
			</label>
			<input style="display: none;" type="checkbox" value="" name="daticontratto_dep_70_cau_contatti" />
			<input type="checkbox" value="si" name="daticontratto_dep_70_cau_contatti" id="daticontratto_dep_70_cau_contatti" />
			<div class="br"></div>

			<label>
				Assegno
			</label>
			<input style="display: none;" type="checkbox" value="" name="daticontratto_dep_70_cau_assegno" />
			<input type="checkbox" value="si" name="daticontratto_dep_70_cau_assegno" id="daticontratto_dep_70_cau_assegno" />
			<input type="text" name="daticontratto_dep_70_cau_n" id="daticontratto_dep_70_cau_n" placeholder="N." style="width:50px;" onkeyup='saveValue(this);' />
			<input type="text" name="daticontratto_dep_70_cau_banca" id="daticontratto_dep_70_cau_banca" placeholder="Banca" style="width:100px;" onkeyup='saveValue(this);'  />
			<input type="text" name="daticontratto_dep_70_cau_filiale" id="daticontratto_dep_70_cau_filiale" placeholder="Filiale" style="width:100px;" onkeyup='saveValue(this);'  />
			<div class="br"></div>


			<b>Saldo</b>
			<div class="br"></div>
			<label>
				Euro:
			</label>
			<input type="text" value="" name="daticontratto_saldo" id="daticontratto_saldo" onkeyup='saveValue(this);' />
			<div class="br"></div>

			<label>
				Bonifico
			</label>
			<input style="display: none;" type="checkbox" value="" name="daticontratto_saldo_bonifico" />
			<input type="checkbox" value="si" name="daticontratto_saldo_bonifico" id="daticontratto_saldo_bonifico" />
			<div class="br"></div>


			<label>
				Carta di Credito
			</label>
			<input style="display: none;" type="checkbox" value="" name="daticontratto_saldo_credito" />
			<input type="checkbox" value="si" name="daticontratto_saldo_carta_credito" id="daticontratto_saldo_carta_credito" />
			<div class="br"></div>

			<label>
				Contanti
			</label>
			<input style="display: none;" type="checkbox" value="" name="daticontratto_saldo_contatti" />
			<input type="checkbox" value="si" name="daticontratto_saldo_contatti" id="daticontratto_saldo_contatti" />
			<div class="br"></div>

			<label>
				Assegno
			</label>
			<input style="display: none;" type="checkbox" value="" name="daticontratto_saldo_assegno" />
			<input type="checkbox" value="si" name="daticontratto_saldo_assegno" id="daticontratto_saldo_assegno" />
			<input type="text" name="daticontratto_saldo_n" id="daticontratto_saldo_n" placeholder="N." style="width:50px;" onkeyup='saveValue(this);' />
			<input type="text" name="daticontratto_saldo_banca" id="daticontratto_saldo_banca" placeholder="Banca" style="width:100px;" onkeyup='saveValue(this);'  />
			<input type="text" name="daticontratto_saldo_filiale" id="daticontratto_saldo_filiale" placeholder="Filiale" style="width:100px;" onkeyup='saveValue(this);'  />
			<div class="br"></div>

			<?php

				/*$i = 0;
				$campi = array( "","","","",
				"acconto_70_cc_n","acconto_70_banca","acconto_70_agenzia","acconto_70_euro","acconto_70_contante","acconto_70_iban_per",
				"saldo_euro","saldo_contanti","saldo_iban","");

				$campiLbl = array("","", "" , "",
					"Acconto 70% N.","Acconto 70% Banca","Acconto 70% Agenzia","Acconto 70% Per","Acconto 70% Contante","Acconto 70% IBAN",
					"Saldo Euro","Saldo Contanti","IBAN","");*/



				/*$i = 0;
				$campi = array( "deposito_cauzionale","dep_cau_bancomat","dep_cau_carta_credito","dep_cau_contatti",
				"acconto_70_cc_n","acconto_70_banca","acconto_70_agenzia","acconto_70_euro","acconto_70_contante","acconto_70_iban_per",
				"saldo_euro","saldo_contanti","saldo_iban","saldo_finanziamento");

				$campiLbl = array("Deposito Cauzionale","Bancomat", "Carta di Credito" , "Contanti",
					"Acconto 70% N.","Acconto 70% Banca","Acconto 70% Agenzia","Acconto 70% Per","Acconto 70% Contante","Acconto 70% IBAN",
					"Saldo Euro","Saldo Contanti","IBAN","Finanziamento");


				foreach($campi as $campo): ?>
					<label>
						<?php echo $campiLbl[$i]; $i++ ?>
					</label>
					<input type="text" value="" name="daticontratto_<?php echo $campo; ?>" />
					<div class="br"></div>
				<?php endforeach;*/ ?>

			<input type="hidden" name="contratto_privati_nonce" value="<?php echo wp_create_nonce('contratto_privati_nonce'); ?>"/>
			<input type="submit" id="genera_contratto_btn" value="Genera Contratto" />

			<input type="hidden" readonly="true" value="<?php echo $auto_id; ?>" name="auto_id" id="auto_id" />
			<input type="hidden" value="<?php echo $_GET['scheda_id']; ?>" id="daticontratto_scheda_id" name="daticontratto_scheda_id" />
			<!-- <input type="text" value="<?php echo $value; ?>" name="daticontratto_statopratica" />-->

		</div>
	</form>

	<div id="scheda_usato_popup_ct" style="display: none;">
		<?php //echo do_shortcode("[scheda_usato]"); ?>
	</div>

	<div class="remodal" data-remodal-id="seleziona_scheda_usato">
	  <button data-remodal-action="close" class="remodal-close"></button>

	  <?php echo do_shortcode("[visualizza_schede_usato_popup]"); ?>
	  <br/>
	  <button data-remodal-action="cancel" class="remodal-cancel">Annulla</button>
	  <button data-remodal-action="confirm" class="remodal-confirm seleziona_scheda_usato">Conferma</button>
	</div>
    <?php
	    if(!session_id()) {
	        session_start();
	    }


    ?>
	<script>




		jQuery.noConflict();
		(function( $ ) {
		  $(function() {

		  	//console.log("A: " + localStorage.nome_auto_ls);
	 		/*$( "#crea_scheda_usato" ).click(function(event) {
	 			//console.log("po");
	 			event.preventDefault();
	 			var w = window.open("http://jahreswagen-italia.it/popupTest.html", "_blank", "scrollbars=1,resizable=1,height=800,width=1600");
				var $w = $(w.document.body);
			    //$w.html($('#modalText').html());
			    $w.find(".chiudi").click(function(e) {
			    	e.preventDefault();
			    	console.log("Click");
			    });

	 		});
*/

 			$("#crea_scheda_usato").colorbox({
 				iframe:true,
 				innerWidth:'90%',
 				innerHeight:'80%',
                onClosed: function () {

                    /*alert("Closed");*/
                    //console.log("ok");


					/*$_SESSION['id_scheda_usato_ls'] = $id_scheda_usato;
					$_SESSION['nome_auto_ls'] = $_POST['su_nomeecognomeragionesociale'];." - ".$_POST['su_marca']." - ".$_POST['su_modello'];*/

/*					var id_auto_usata = "<?php echo $_SESSION['id_scheda_usato_ls']; ?>";
					var id_scheda_usato_ls = "<?php echo $_SESSION['id_scheda_usato_ls']; ?>";

					$("#id_auto_usata").val(id_auto_usata);
					$("#daticontratto_scheda_id").val(id_auto_usata);

					$("#wrapper-link-scheda-usato").empty();
					$("#wrapper-link-scheda-usato").append('<a href="http://jahreswagen-italia.it/?page_id=22422&fill='+id_auto_usata+'" target="_blank" style="font-size:18px; font-weight:bold">'+id_scheda_usato_ls+'</a>');
					$("#wrapper-link-scheda-usato").append('<br/><a id="rimuovi_scheda_usato" style="font-size:18px;">Rimuovi Scheda Usato</a>');                    */

                }
 			})



			  	var check_daticontratto_rinuncio_garanzia = localStorage.daticontratto_rinuncio_garanzia === 'true'? true: false;
			  	var check_daticontratto_garanzia_12_mesi = localStorage.daticontratto_garanzia_12_mesi === 'true'? true: false;
	    		$('#daticontratto_rinuncio_garanzia').prop('checked', check_daticontratto_rinuncio_garanzia || false);
	    		$('#daticontratto_garanzia_12_mesi').prop('checked', check_daticontratto_garanzia_12_mesi || false);

				$('#daticontratto_rinuncio_garanzia').on('change', function() {
				    localStorage.daticontratto_rinuncio_garanzia = $(this).is(':checked');
				});


				$('#daticontratto_garanzia_12_mesi').on('change', function() {
				    localStorage.daticontratto_garanzia_12_mesi = $(this).is(':checked');
				});


				var check_daticontratto_iva4 = localStorage.daticontratto_iva4 === 'true'? true: false;
				var check_daticontratto_iva_esposta = localStorage.daticontratto_iva_esposta === 'true'? true: false;
	    		$('#daticontratto_iva4').prop('checked', check_daticontratto_iva4 || false);
	    		$('#daticontratto_iva_esposta').prop('checked', check_daticontratto_iva_esposta || false);

				$('#daticontratto_iva4').on('change', function() {
				    localStorage.daticontratto_iva4 = $(this).is(':checked');
				});

				$('#daticontratto_iva_esposta').on('change', function() {
				    localStorage.daticontratto_iva_esposta = $(this).is(':checked');
				});





			  	//Deposito Cauzionale
	  			var check_daticontratto_dep_cau_bonifico = localStorage.daticontratto_dep_cau_bonifico === 'true'? true: false;
	  			var check_daticontratto_dep_cau_carta_credito = localStorage.daticontratto_dep_cau_carta_credito === 'true'? true: false;
	  			var check_daticontratto_dep_cau_contatti = localStorage.daticontratto_dep_cau_contatti === 'true'? true: false;
	  			var check_daticontratto_dep_cau_assegno = localStorage.daticontratto_dep_cau_assegno === 'true'? true: false;
	    		$('#daticontratto_dep_cau_bonifico').prop('checked', check_daticontratto_dep_cau_bonifico || false);
	    		$('#daticontratto_dep_cau_carta_credito').prop('checked', check_daticontratto_dep_cau_carta_credito || false);
	    		$('#daticontratto_dep_cau_contatti').prop('checked', check_daticontratto_dep_cau_contatti || false);
	    		$('#daticontratto_dep_cau_assegno').prop('checked', check_daticontratto_dep_cau_assegno || false);


				$('#daticontratto_dep_cau_bonifico').on('change', function() {
				    localStorage.daticontratto_dep_cau_bonifico = $(this).is(':checked');
				});


				$('#daticontratto_dep_cau_carta_credito').on('change', function() {
				    localStorage.daticontratto_dep_cau_carta_credito = $(this).is(':checked');
				});


				$('#daticontratto_dep_cau_contatti').on('change', function() {
				    localStorage.daticontratto_dep_cau_contatti = $(this).is(':checked');
				});


				$(' #daticontratto_dep_cau_assegno ').on('change', function() {
				    localStorage.daticontratto_dep_cau_assegno = $(this).is(':checked');
				});



				//Deposito Cauzionale 80%
	  			var check_daticontratto_dep_70_cau_bonifico = localStorage.daticontratto_dep_70_cau_bonifico === 'true'? true: false;
	  			var check_daticontratto_dep_70_cau_carta_credito = localStorage.daticontratto_dep_70_cau_carta_credito === 'true'? true: false;
	  			var check_daticontratto_dep_70_cau_contatti = localStorage.daticontratto_dep_70_cau_contatti === 'true'? true: false;
	  			var check_daticontratto_dep_70_cau_assegno = localStorage.daticontratto_dep_70_cau_assegno === 'true'? true: false;
	    		$('#daticontratto_dep_70_cau_bonifico').prop('checked', check_daticontratto_dep_70_cau_bonifico || false);
	    		$('#daticontratto_dep_70_cau_carta_credito').prop('checked', check_daticontratto_dep_70_cau_carta_credito || false);
	    		$('#daticontratto_dep_70_cau_contatti').prop('checked', check_daticontratto_dep_70_cau_contatti || false);
	    		$('#daticontratto_dep_70_cau_assegno').prop('checked', check_daticontratto_dep_70_cau_assegno || false);

				$('#daticontratto_dep_70_cau_bonifico').on('change', function() {
				    localStorage.daticontratto_dep_70_cau_bonifico = $(this).is(':checked');
				});


				$('#daticontratto_dep_70_cau_carta_credito').on('change', function() {
				    localStorage.daticontratto_dep_70_cau_carta_credito = $(this).is(':checked');
				});


				$('#daticontratto_dep_70_cau_contatti').on('change', function() {
				    localStorage.daticontratto_dep_70_cau_contatti = $(this).is(':checked');
				});


				$(' #daticontratto_dep_70_cau_assegno ').on('change', function() {
				    localStorage.daticontratto_dep_70_cau_assegno = $(this).is(':checked');
				});



			  	//Saldo
	  			var check_daticontratto_saldo_bonifico = localStorage.daticontratto_saldo_bonifico === 'true'? true: false;
	  			var check_daticontratto_saldo_carta_credito = localStorage.daticontratto_saldo_carta_credito === 'true'? true: false;
	  			var check_daticontratto_saldo_contatti = localStorage.daticontratto_saldo_contatti === 'true'? true: false;
	  			var check_daticontratto_saldo_assegno = localStorage.daticontratto_saldo_assegno === 'true'? true: false;
	    		$('#daticontratto_saldo_bonifico').prop('checked', check_daticontratto_saldo_bonifico || false);
	    		$('#daticontratto_saldo_carta_credito').prop('checked', check_daticontratto_saldo_carta_credito || false);
	    		$('#daticontratto_saldo_contatti').prop('checked', check_daticontratto_saldo_contatti || false);
	    		$('#daticontratto_saldo_assegno').prop('checked', check_daticontratto_saldo_assegno || false);


				$('#daticontratto_saldo_bonifico').on('change', function() {
				    localStorage.daticontratto_saldo_bonifico = $(this).is(':checked');
				});


				$('#daticontratto_saldo_carta_credito').on('change', function() {
				    localStorage.daticontratto_saldo_carta_credito = $(this).is(':checked');
				});


				$('#daticontratto_saldo_contatti').on('change', function() {
				    localStorage.daticontratto_saldo_contatti = $(this).is(':checked');
				});


				$(' #daticontratto_saldo_assegno ').on('change', function() {
				    localStorage.daticontratto_saldo_assegno = $(this).is(':checked');
				});




		  	var daticontratto_euro = $("#daticontratto_euro").val();
			if (!daticontratto_euro) { daticontratto_euro = 0; }

			var daticontratto_prezzo_auto = $("#daticontratto_prezzo_auto").val();
			if (!daticontratto_prezzo_auto) { daticontratto_prezzo_auto = 0; }

			var daticontratto_messa_su_strada = $("#daticontratto_messa_su_strada").val();
			if (!daticontratto_messa_su_strada) { daticontratto_messa_su_strada = 0; }

			$("#daticontratto_prezzototale").val( parseFloat(daticontratto_prezzo_auto) + parseFloat(daticontratto_messa_su_strada) );

			$( "#seleziona_scheda_usato" ).click(function() {
				$("#schede_usato_table tbody").empty();
				$.post(ajaxurl, { 'action': 'leggischedeusato' }, function(response) {


					var html = "";

					var obj = jQuery.parseJSON(response);
					$.each(obj, function(key,value) {


						html += '<tr class="suidrow" suid="'+value.id+'">';
							html += '<td><span>'+value.id+'</span></td>';
							html += '<td><a href="http://jahreswagen-italia.it/?page_id=22422&fill='+value.id+'">'+value.nome_cognome+'</a></td>';
							html += '<td><span>'+value.data_creazione+'</span></td>';
							html += '<td><span>'+value.marca+'</span></td>';
							html += '<td><span>'+value.modello+'</span></td>';
							html += '<td><a href="http://jahreswagen-italia.it/PDF/scheda_usato_v2.php?su_id='+value.id+'" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>';
						html += '</tr>';

					});

					$("#schede_usato_table tbody").append(html);

				});

			});

			$( ".seleziona_scheda_usato" ).click(function() {

				var nome_scheda_usato = $(".selected td:eq(" + 1 + ")").text()+ " - " + $(".selected td:eq(" + 3 + ")").text() + " " + $(".selected td:eq(" + 4 + ")").text();

				var suid = $( ".suidrow.selected" ).attr("suid");

				$("#id_auto_usata").val(suid);
				$("#daticontratto_scheda_id").val(suid);

				$("#wrapper-link-scheda-usato").empty();
				$("#wrapper-link-scheda-usato").append('<a href="http://jahreswagen-italia.it/?page_id=22422&fill='+suid+'" target="_blank" style="font-size:18px; font-weight:bold">'+nome_scheda_usato+'</a>');
				$("#wrapper-link-scheda-usato").append('<br/><a id="rimuovi_scheda_usato" style="font-size:18px;">Rimuovi Scheda Usato</a>');
				/*<a href="http://jahreswagen-italia.it/?page_id=22422&fill=<?php echo $_GET['scheda_id']; ?>" target="_blank" style="font-size:18px;">Vai alla scheda Usato</a>*/
			});


			$( "#daticontratto_prezzo_auto, #daticontratto_messa_su_strada, #daticontratto_sconto, #daticontratto_gestione_permuta_usato, #daticontratto_sconto_valutazione_usato, #daticontratto_euro" ).keyup(function() {


		  		var daticontratto_euro = $("#daticontratto_euro").val();
				if (!daticontratto_euro) { daticontratto_euro = 0; }

				var daticontratto_gestione_permuta_usato = $("#daticontratto_gestione_permuta_usato").val();
				if (!daticontratto_gestione_permuta_usato) { daticontratto_gestione_permuta_usato = 0; }

				var daticontratto_sconto_valutazione_usato = $("#daticontratto_sconto_valutazione_usato").val();
				if (!daticontratto_sconto_valutazione_usato) { daticontratto_sconto_valutazione_usato = 0; }


				var daticontratto_sconto = $("#daticontratto_sconto").val();
				if (!daticontratto_sconto) { daticontratto_sconto = 0; }

				var daticontratto_prezzo_auto = $("#daticontratto_prezzo_auto").val();
				if (!daticontratto_prezzo_auto) { daticontratto_prezzo_auto = 0; }

				var daticontratto_messa_su_strada = $("#daticontratto_messa_su_strada").val();
				if (!daticontratto_messa_su_strada) { daticontratto_messa_su_strada = 0; }

				console.log(daticontratto_prezzo_auto);

				$("#daticontratto_prezzototale").val( (parseFloat(daticontratto_prezzo_auto) + parseFloat(daticontratto_messa_su_strada) + parseFloat(daticontratto_gestione_permuta_usato) + parseFloat(daticontratto_euro) ) - parseFloat(daticontratto_sconto) - parseFloat(daticontratto_sconto_valutazione_usato) );
			});


	  });
	})(jQuery);



	//Dati ANAGRAFICI

		document.getElementById("cp_ilsottoscritto").value = getSavedValue("cp_ilsottoscritto");
		document.getElementById("cp_codicefiscale").value = getSavedValue("cp_codicefiscale");
		document.getElementById("cp_datadinascita").value = getSavedValue("cp_datadinascita");
		document.getElementById("cp_luogo").value = getSavedValue("cp_luogo");
		document.getElementById("cp_residenteinvia").value = getSavedValue("cp_residenteinvia");
		document.getElementById("cp_citta").value = getSavedValue("cp_citta");
		document.getElementById("cp_provincia").value = getSavedValue("cp_provincia");
		document.getElementById("cp_cap").value = getSavedValue("cp_cap");

		document.getElementById("cp_telefono").value = getSavedValue("cp_telefono");
		document.getElementById("cp_fax").value = getSavedValue("cp_fax");
		document.getElementById("cp_cell").value = getSavedValue("cp_cell");
		document.getElementById("cp_mail").value = getSavedValue("cp_mail");
		document.getElementById("cp_personadiriferimento").value = getSavedValue("cp_personadiriferimento");
		document.getElementById("cp_ragionesociale").value = getSavedValue("cp_ragionesociale");
		document.getElementById("cp_piva").value = getSavedValue("cp_piva");
		document.getElementById("cp_legalerappresentante").value = getSavedValue("cp_legalerappresentante");



		//DATI PREZZO
		document.getElementById("daticontratto_prezzo_auto").value = getSavedValue("daticontratto_prezzo_auto");
		document.getElementById("daticontratto_messa_su_strada").value = getSavedValue("daticontratto_messa_su_strada");
		document.getElementById("daticontratto_sconto").value = getSavedValue("daticontratto_sconto");
		document.getElementById("daticontratto_prezzototale").value = getSavedValue("daticontratto_prezzototale");


		//DATI DETTAGLI
		//document.getElementById("daticontratto_presunta_data_consegna").value = getSavedValue("daticontratto_presunta_data_consegna");
		document.getElementById("daticontratto_assistenza_elitcar").value = getSavedValue("daticontratto_assistenza_elitcar");


		//DATI AMMINISTRATIVO
		document.getElementById("daticontratto_saldo_finanziamento").value = getSavedValue("daticontratto_saldo_finanziamento");
		document.getElementById("daticontratto_deposito_cauzionale").value = getSavedValue("daticontratto_deposito_cauzionale");
		document.getElementById("daticontratto_deposito_70_cauzionale").value = getSavedValue("daticontratto_deposito_70_cauzionale");
		document.getElementById("daticontratto_saldo").value = getSavedValue("daticontratto_saldo");



		document.getElementById("daticontratto_dep_cau_n").value = getSavedValue("daticontratto_dep_cau_n");
		document.getElementById("daticontratto_dep_cau_banca").value = getSavedValue("daticontratto_dep_cau_banca");
		document.getElementById("daticontratto_dep_cau_filiale").value = getSavedValue("daticontratto_dep_cau_filiale");
		document.getElementById("daticontratto_dep_70_cau_n").value = getSavedValue("daticontratto_dep_70_cau_n");
		document.getElementById("daticontratto_dep_70_cau_banca").value = getSavedValue("daticontratto_dep_70_cau_banca");
		document.getElementById("daticontratto_dep_70_cau_filiale").value = getSavedValue("daticontratto_dep_70_cau_filiale");
		document.getElementById("daticontratto_saldo_n").value = getSavedValue("daticontratto_saldo_n");
		document.getElementById("daticontratto_saldo_banca").value = getSavedValue("daticontratto_saldo_banca");
		document.getElementById("daticontratto_saldo_filiale").value = getSavedValue("daticontratto_saldo_filiale");


		document.getElementById("daticontratto_garanzia_ufficiale").value = getSavedValue("daticontratto_garanzia_ufficiale");
		document.getElementById("daticontratto_numero_mesi").value = getSavedValue("daticontratto_numero_mesi");
		document.getElementById("daticontratto_euro").value = getSavedValue("daticontratto_euro");

		document.getElementById("daticontratto_gestione_permuta_usato").value = getSavedValue("daticontratto_gestione_permuta_usato");
		document.getElementById("daticontratto_sconto_valutazione_usato").value = getSavedValue("daticontratto_sconto_valutazione_usato");


        function saveValue(e){
            var id = e.id;
            var val = e.value;
            localStorage.setItem(id, val);
        }
        function getSavedValue  (v){
            if (localStorage.getItem(v) === null) {
                return document.getElementById(v).value; //$("#"+v).val();
            } else {
            	return localStorage.getItem(v);
            }
        }

	</script>
	<?php
}




add_action( 'wp_ajax_nopriv_leggischedeusato', 'leggischedeusato_callback' );
add_action( 'wp_ajax_leggischedeusato', 'leggischedeusato_callback' );

function leggischedeusato_callback() {


    global $wpdb;



    $i = 0;
    $results = $wpdb->get_results( "SELECT * FROM wp_scheda_usato_list" );
    foreach ($results as $result){

    	/*if (strpos($row->event_id, '_pt') !== false) {
    		$append_text = '<small style="display:block; margin-left:10px;">'.$row->dettagli.'</small>';
    	}*/

    	$data[$i]['id'] = $result->id;
    	$data[$i]['nome_cognome'] = get_su_meta($result->id,"su_nomeecognomeragionesociale");
    	$data[$i]['data_creazione'] = date("d/m/Y",$result->data_creazione);
    	$data[$i]['marca'] = get_su_meta($result->id,"su_marca");
    	$data[$i]['modello'] = get_su_meta($result->id,"su_modello");

    	$i++;
    }

    echo json_encode($data);


    wp_die();

}


add_action("init","gestisci_contratto_privato");
function gestisci_contratto_privato(){


	if (wp_verify_nonce($_POST['salva_valori_fiscali_nonce'], 'salva_valori_fiscali_nonce')) {

		global $wpdb;

		$daticontratto_valore_totale_concordato					= $_POST['daticontratto_valore_totale_concordato'];
		$daticontratto_valore_sconto_supervalutazione			= $_POST['daticontratto_valore_sconto_supervalutazione'];
		$daticontratto_valore_fattura							= $_POST['daticontratto_valore_fattura'];
		$daticontratto_valore_fatturato							= $_POST['daticontratto_valore_fatturato'];
		$daticontratto_valore_totale_per_differenza				= $_POST['daticontratto_valore_totale_per_differenza'];

		$contratto_id = $_POST['contratto_id'];

		foreach ($_POST as $key => $value) {

			if (strpos($key, 'daticontratto_') !== false) {
				//$t_key = str_replace("daticontratto_", "", $key);
				update_contratto_meta($key,$value,$contratto_id);

				$id_scheda_usato = $_POST['id_scheda_usato'];

				if (!empty($id_scheda_usato)) {
					update_su_meta("su_prezzodicaricol85",$daticontratto_valore_fatturato,"",$id_scheda_usato);

					$codice_auto = get_su_meta($id_scheda_usato,"su_ntarga");


					$result = $wpdb->get_results("select * from wp_postmeta WHERE meta_key = '_sku' and meta_value = '$codice_auto'" );
					$auto_id = $result[0]->post_id;

					update_post_meta($auto_id, 'Prezzo di carico L 85', $daticontratto_valore_fatturato);
				}





			}

		}

		if ( !empty(get_contratti_pt_meta('daticontratto_valore_sconto_supervalutazione', $contratto_id)) ) {
			update_contratto_meta("valori_fiscali_confermati",time(),$contratto_id);
		}

		if ( !empty(get_contratti_pt_meta('daticontratto_valore_sconto_supervalutazione', $contratto_id)) && (

			!empty(get_contratti_pt_meta('daticontratto_deposito_70_cauzionale', $contratto_id)) ||
			!empty(get_contratti_pt_meta('daticontratto_saldo', $contratto_id))

			) ) {

				$wpdb->get_results("UPDATE contratti_pt_list SET status = '4' WHERE id = '$contratto_id'");
				update_contratto_meta("daticontratto_data_status_4",time(),$contratto_id);

		}

		header("Location: http://jahreswagen-italia.it/?page_id=33255&contrattoId=".$contratto_id); exit();

	};

	if (wp_verify_nonce($_POST['contratto_privati_nonce'], 'contratto_privati_nonce')) {
		global $wpdb;
		/*if (isset($_POST['id_scheda_usato'])){
			$id_scheda_usato = $_POST['id_scheda_usato'];
		}*/
/*error_reporting(E_ALL);
ini_set('display_errors', '1');*/
		foreach ($_POST as $key => $value) {
			if (strpos($key, 'cp_') !== false) {
				if (!empty($value)){
					$t_key = str_replace("cp_", "", $key);
					$keys[] 	= $t_key;
					$values[] 	= "'".$value."'";



				}
			}

			/*if (strpos($key, 'daticontratto_') !== false) {
				$t_key = str_replace("cp_", "", $key);
				update_contratto_meta($t_key,$value)
			}*/
		}

	    $keys = implode(",",$keys);
	    $values = implode(",",$values);

	    $auto_id = $_POST['auto_id'];

    	$query = 'INSERT INTO clienti_elitcar ('.$keys.') VALUES ('.$values.')';
	    $wpdb->query($query);
	    $ins_user_id = $wpdb->insert_id;

	    $filename = $ins_user_id."_".time()."_contratto.pdf";

	    $data_inserimento = time();
	    $query = "INSERT INTO contratti_pt_list (user_id, data_inserimento, link_contratto,auto_id,status) VALUES ('$ins_user_id','$data_inserimento','$filename','$auto_id','2')";
		$wpdb->query($query);
	    $ins_contratto_id = $wpdb->insert_id;



		foreach ($_POST as $key => $value) {
			if (strpos($key, 'cp_') !== false) {
				if (!empty($value)){
					$t_key = str_replace("cp_", "", $key);

					update_contratto_meta($t_key,$value,$ins_contratto_id);
				}
			}

			if (strpos($key, 'daticontratto_') !== false) {
				//$t_key = str_replace("daticontratto_", "", $key);
				update_contratto_meta($key,$value,$ins_contratto_id);
			}
		}

		header("Location: http://jahreswagen-italia.it/PDF/contratto_privato_v2.php?&contrattoId=$ins_contratto_id"); exit();



	}
}


function get_cp_meta($cp_id, $meta_key){
	global $wpdb;
	$results = $wpdb->get_results("SELECT * FROM clienti_elitcar WHERE meta_key = '$meta_key'");
	if (count($results) > 0){
		//foreach ( $results as $result ){
		return $results[0]->meta_value;
		//}

	}
}

function update_cp_meta($meta_key, $meta_value, $cp_id = NULL){

	global $wpdb;

	/*if (isset($su_id) && !empty($su_id)) {
		$query_extra = " AND scheda_id = '$su_id' ";
	} */

	$results = $wpdb->get_results("SELECT * FROM clienti_elitcar WHERE meta_key = '$meta_key' $query_extra ");
	if (count($results) > 0){
		$wpdb->get_results("UPDATE clienti_elitcar SET meta_value = '$meta_value' WHERE meta_key = '$meta_key' $query_extra ");
	} else {
		$wpdb->get_results("INSERT INTO clienti_elitcar VALUES(NULL,'2','$meta_key','$meta_value')");
	}

}

function update_contratto_meta($meta_key, $meta_value, $cp_id = NULL){

	global $wpdb;

	/*if (isset($su_id) && !empty($su_id)) {
		$query_extra = " AND scheda_id = '$su_id' ";
	} */

	$results = $wpdb->get_results("SELECT * FROM contratti_pt WHERE meta_key = '$meta_key' AND cid = '$cp_id'");
	if (count($results) > 0){
		$wpdb->get_results("UPDATE contratti_pt SET meta_value = '$meta_value' WHERE meta_key = '$meta_key' AND cid = '$cp_id' ");
	} else {
		$wpdb->get_results("INSERT INTO contratti_pt VALUES(NULL,'$meta_key','$meta_value','$cp_id')");
	}
}


add_shortcode("visualizza_clienti_elitcar","visualizza_clienti_elitcar");
function visualizza_clienti_elitcar(){

	global $wpdb;
	?>
		<style>
			.clienti_elitcar th { padding-bottom: 15px; }
		</style>
	<?php

	echo '<br/><br/><table style="width:100%;" class="clienti_elitcar">';
		echo '<tr>';
			echo '<th>Nome e Cognome</th>';
			echo '<th>Codice Fiscale</th>';
			echo '<th>Data di Nascita</th>';
			echo '<th>Luogo</th>';
			echo '<th>Via</th>';
			echo '<th>Citta</th>';
			echo '<th>Provincia</th>';
			echo '<th>CAP</th>';
			echo '<th>Telefono</th>';
			echo '<th>Fax</th>';
			echo '<th>Cell</th>';
			echo '<th>Mail</th>';
			echo '<th>Riferimento</th>';
			echo '<th>Ragione Sociale</th>';
			echo '<th>P.iva</th>';
			echo '<th>Legale Rappresentante</th>';
		echo '</tr>';
	$results = $wpdb->get_results("SELECT * FROM clienti_elitcar");
	foreach ($results as $result){
		echo '<tr>';
			echo '<td>'.$result->ilsottoscritto.'</td>';
			echo '<td>'.$result->codicefiscale.'</td>';
			echo '<td>'.$result->datadinascita.'</td>';
			echo '<td>'.$result->luogo.'</td>';
			echo '<td>'.$result->residenteinvia.'</td>';
			echo '<td>'.$result->citta.'</td>';
			echo '<td>'.$result->provincia.'</td>';
			echo '<td>'.$result->cap.'</td>';
			echo '<td>'.$result->telefono.'</td>';
			echo '<td>'.$result->fax.'</td>';
			echo '<td>'.$result->cell.'</td>';
			echo '<td>'.$result->mail.'</td>';
			echo '<td>'.$result->personadiriferimento.'</td>';
			echo '<td>'.$result->ragionesociale.'</td>';
			echo '<td>'.$result->piva.'</td>';
			echo '<td>'.$result->legalerappresentante.'</td>';

		echo '</tr>';
	}
	echo '</table>';
}



add_action('wp_head', 'myplugin_ajaxurl');

function myplugin_ajaxurl() {

   echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}


add_shortcode("visualizza_contratti","visualizza_contratti");
function visualizza_contratti(){
	global $wpdb;
	$current_user = wp_get_current_user();

	?>
		<style>
			<?php //if ($current_user->user_login != "oldanist26") : ?>
			<?php if (trim($current_user->versione) != "002") : ?>
			.dashboard-wrapper {
				width: 60%;
			}
			<?php endif; ?>

			.tabella_padding th { padding-bottom: 15px; }
			.tabella_padding td { padding: 5px 0 }

			.generic_table tr td, .table-list-jahreswagen tr td {
				padding: 0;
			}

			.table_contratti a {
				padding: 16px;
				display: block;
				font-weight: bold;
			}
		</style>
	<?php


	echo '<div style="padding:20px;">';
		echo '<h4>
			Contratto Salonista
		</h4>';


		if ($_GET['libera_chiave'] == "true")
		{
			$auto_id = $_GET['auto_id'];
			$chiave = $_GET['chiave'];

			if (!empty($chiave) && $chiave != -1 && !empty($auto_id)) {


				$auto_id = $wpdb->get_results("SELECT * FROM wp_postmeta WHERE meta_key = '_sku' AND meta_value = '$auto_id'");
				$auto_id = $auto_id[0]->post_id;


				$numero_chiave = get_post_meta($auto_id,"Chiave",true);
				update_post_meta($auto_id,"Chiave","-1");
			 	$wpdb->get_results("UPDATE nchv SET libera = 0 WHERE numero = '".$numero_chiave."'");


				echo "Libera la chiave: " . $chiave." auto: ".$auto_id;

			}

		}

		echo '<table style="width:100%;" class="table_contratti generic_table">';
			echo '<tr>';
				echo '<th>Id</th>';
				echo '<th>Data Contratto</th>';
				echo '<th>Salonista</th>';
				echo '<th>Telaio</th>';
				echo '<th>Chiave</th>';
				echo '<th></th>';

			echo '</tr>';
		$results = $wpdb->get_results("SELECT * FROM contratti ORDER BY data_inserimento DESC");
		foreach ($results as $result){

			$user_data = get_userdata($result->user_id);
			$auto_id = get_post_meta($result->auto_id,"_sku",true);

			echo '<tr>';
				echo '<td><a href="http://jahreswagen-italia.it/contratti/'.$result->link_contratto.'" target="_blank">'.$result->id.'</a></td>';
				echo '<td><a href="http://jahreswagen-italia.it/contratti/'.$result->link_contratto.'" target="_blank">'.date("d/m/Y",$result->data_inserimento).'</a></td>';
				echo '<td><a href="http://jahreswagen-italia.it/contratti/'.$result->link_contratto.'" target="_blank">'.$user_data->ragione_sociale.'</a></td>';

				echo '<td><a href="http://jahreswagen-italia.it/contratti/'.$result->link_contratto.'" target="_blank">'.$auto_id.'</a></td>';

				$chiave = get_post_meta($result->auto_id,"Chiave",true);
				if ($chiave == -1)
				{
					$chiave_label = "Chiave non Assegnata";
				}
				else
				{
					$chiave_label = $chiave;
				}
				echo '<td><a href="http://jahreswagen-italia.it/contratti/'.$result->link_contratto.'" target="_blank">'.$chiave_label.'</a></td>';

				//if ($chiave != -1)
				if (!empty($chiave))
				{
					if ($chiave != -1)
					{
						$chiave_bg_color = "#ed1c24";
					}
					else
					{
						$chiave_bg_color = "#19b302";
					}


//http://jahreswagen-italia.it/?page_id=24385&libera_chiave=true&auto_id='.$result->auto_id.'&chiave='.$chiave.'

					echo '<td><a auto_id="'.$auto_id.'" chiave="'.$chiave.'" style="background:'.$chiave_bg_color .'; color:#fff !important;" href="#" id="azzera_chiave" >Libera Chiave <b style="display:block; color:white; font-size:80%;">Non Funzionante</b></a></td>';
				}

			echo '</tr>';

		}
		echo '</table>';
	echo '</div>';

}


add_shortcode("visualizza_contratti_privato","visualizza_contratti_privato");
function visualizza_contratti_privato(){
	global $wpdb;

	$current_user = wp_get_current_user();
	?>
		<style>
			<?php //if ($current_user->user_login != "oldanist26") : ?>
			<?php if (trim($current_user->versione) != "002") : ?>
			.dashboard-wrapper {
				width: 60%;
			}
			<?php endif; ?>

			.tabella_padding th { padding-bottom: 15px; }
			.tabella_padding td { padding: 5px 0 }

			.button_contratti {

			    background: #f3f3f3;
			    padding: 10px;
			    border: 1px solid #c1c1c1;
			    margin-right: 10px;

			}


		</style>
	<?php

	$stat = $_GET['status'];

	if (!empty($stat) || $stat === "0" ) {

		if ($stat == 7) {
			$stat = 2;
		}
		if ($stat == 8) {
			$stat = 2;
		}

		$query_status = "WHERE status = ".$stat;
	} else {
		$query_status = "";
	}


	echo '<div style="padding:20px;">';
		echo '<h4>
			Contratto Privati
			<a class="floatright aggiungiBtnSmall" href="https://jahreswagen-italia.it/?page_id=51941"><i class="fa fa-plus-circle"></i></a>
		</h4>';

		echo '<form method="GET" action="http://jahreswagen-italia.it/?page_id=28316">';
			echo '<input name="search" style="width:90%; float:left; padding:5px;" type="text" placeholder="Cerca" />';
			echo '<input style="width:8%; line-height:28px; float:right;" type="submit" value="Cerca" /> <br/>';
			echo '<input type="hidden" value="28316" name="page_id" />';
			echo '<div style="width:100%; clear:both"></div>';
		echo '</form>';


		$role = elitcar_get_user_role(get_current_user_id());


		if ($role != "tecnico") {

			//if ($current_user->user_login != "oldanist26") :
			if (trim($current_user->versione) != "002") :

				echo '<br/>';
				echo '<a class="button_contratti" href="http://jahreswagen-italia.it/?page_id=28316&status=0">Annullato</a>';
				echo '<a class="button_contratti" href="http://jahreswagen-italia.it/?page_id=28316&status=1">Acconto</a>';

				echo '<a class="button_contratti" href="http://jahreswagen-italia.it/?page_id=28316&status=7">Valori Fiscali Da Confermare</a>';
				echo '<a class="button_contratti" href="http://jahreswagen-italia.it/?page_id=28316&status=8">Valori Fiscali Confermati</a>';

				echo '<a class="button_contratti" href="http://jahreswagen-italia.it/?page_id=28316&status=3">Acconto 80%</a>';
				echo '<a class="button_contratti" href="http://jahreswagen-italia.it/?page_id=28316&status=4">Targatura</a>';
				echo '<a class="button_contratti" href="http://jahreswagen-italia.it/?page_id=28316&status=5">Saldo a Consegna</a>';
				echo '<a class="button_contratti" href="http://jahreswagen-italia.it/?page_id=28316&status=6">Auto Consegnate</a>';

			endif;

		}


		echo '<table style="width:100%;" class="generic_table table_contratti">';
			echo '<tr>';
				echo '<th>Id</th>';
				echo '<th>Telaio</th>';
				echo '<th>Venditore</th>';
				echo '<th>Modello</th>';
				echo '<th>Data Contratto</th>';
				echo '<th>Cliente</th>';
				echo '<th>Stato</th>';
				echo '<th>Giorni</th>';



				if( current_user_can('administrator')) {
					echo '<th></th>';
				}
			echo '</tr>';


			//TODO: DELETE THAT IF AND THE ELSE CONDITION
			if ( $current_user->user_login == "oldanist26")
			{

				// NUOVA VERSIONE
				if (!empty($_GET['search'])) {

					$queryTelaio = "SELECT post_id from wp_postmeta WHERE meta_value = '%".$_GET['search']."%'";
					$resultsTelaio = $wpdb->get_results($queryTelaio);
					$post_id_telaio = $resultsTelaio[0]->post_id;


					$query = ", contratti_pt WHERE contratti_pt_list.id = contratti_pt.cid AND contratti_pt.meta_value LIKE '%".$_GET['search']."%' GROUP BY contratti_pt.cid";
				} else {
					$query = $query_status;
				}

				$_COUNT_QUERY = "SELECT COUNT(id) as numberRes FROM contratti_pt_list ". $query;
				$_QUERY_RICERCA = "SELECT * FROM contratti_pt_list ".$query." ORDER BY data_inserimento DESC LIMIT 20 OFFSET ";
				$_CALLBACK = "http://jahreswagen-italia.it/?page_id=28316";

				$results = paginazione($_COUNT_QUERY, $_QUERY_RICERCA, $_CALLBACK, true, 20);


			}
			else
			{

				//UTENTE NORMALE

				if (!empty($_GET['search'])) {

					$queryTelaio = "SELECT post_id from wp_postmeta WHERE meta_value = '%".$_GET['search']."%'";
					$resultsTelaio = $wpdb->get_results($queryTelaio);
					$post_id_telaio = $resultsTelaio[0]->post_id;


					$query = ", contratti_pt WHERE contratti_pt_list.id = contratti_pt.cid AND contratti_pt.meta_value LIKE '%".$_GET['search']."%' GROUP BY contratti_pt.cid";
				} else {
					$query = $query_status;
				}

				//echo "SELECT * FROM contratti_pt_list ".$query."  ORDER BY data_inserimento DESC";

				$results = $wpdb->get_results("SELECT * FROM contratti_pt_list ".$query."  ORDER BY data_inserimento DESC");

			}






		foreach ($results as $result){

			if ( $_GET['status'] == 7 ) {


				/*if (is_superadmin()) {

					$check_date = strtotime ("25 March 2017" );

					if ($result->data_inserimento < $check_date ) {

						$id_contratto = $result->id;


						//$wpdb->get_results("UPDATE contratti_pt_list SET status = -1 WHERE id = ".$id_contratto);

						echo date("d/m/Y",$result->data_inserimento)." - ".$id_contratto." - Oldanist<br/>";
					}

				}*/

				if ( !empty(get_contratti_pt_meta('valori_fiscali_confermati', $result->id  )) ) {

					continue;

				}

			}

			if ( $_GET['status'] == 8 ) {

				if ( empty(get_contratti_pt_meta('valori_fiscali_confermati', $result->id  )) ) {

					continue;

				}

			}


			$user_data = get_cliente_privato($result->user_id, $result->id);

			$marca = array_shift( wc_get_product_terms( $result->auto_id, 'product_cat', array( 'fields' => 'names' ) ) );
			$modello = array_shift( wc_get_product_terms( $result->auto_id, 'pa_modello', array( 'fields' => 'names' ) ) );
			$motorizzazione = array_shift( wc_get_product_terms( $result->auto_id, 'pa_motorizzazione', array( 'fields' => 'names' ) ) );
			$versione = array_shift( wc_get_product_terms( $result->auto_id, 'pa_versione', array( 'fields' => 'names' ) ) );
			$verniciatura = array_shift( wc_get_product_terms( $result->auto_id, 'pa_verniciatura', array( 'fields' => 'names' ) ) );

			$modello_auto = $marca." ".$modello." ".$motorizzazione." ".$versione;


			/*$dStart = new DateTime(date("Y-m-d",$result->data_inserimento));

			//VERIFICO QUANTI GIORNI SONO PASSATI
			$checkEnd  = new DateTime( date("Y-m-d", time() ));
			$checkDifference = $dStart->diff($checkEnd);
			$checkDifference = $checkDifference->days;		*/


			if ( $result->status == 0 ){
				$dStart = new DateTime(date("Y-m-d", $result->data_inserimento ));
			} else {

				$data_by_status = get_contratti_pt_meta('daticontratto_data_status_'.$result->status, $result->id );

				if (empty($data_by_status)) {
					$dStart = new DateTime(date("Y-m-d", $result->data_inserimento ));
				} else {
					$dStart = new DateTime(date("Y-m-d", $data_by_status ) );
				}


			}


			//VERIFICO QUANTI GIORNI SONO PASSATI
			$checkEnd  = new DateTime( date("Y-m-d", time() ));
			$checkDifference = $dStart->diff($checkEnd);
			$checkDifference = $checkDifference->days;

			if ($checkDifference == 0) {
				$n_giorni = "Oggi";
			} else {
				$n_giorni = $checkDifference. " Giorni";
			}


			/*if( current_user_can('administrator')) {
				$link_contratto = "http://jahreswagen-italia.it/?page_id=33255&contrattoId=".$result->id;
			} else {
				$link_contratto = "";
			}*/


			$role = elitcar_get_user_role(get_current_user_id());

			if ($role == "tecnico") {
				if (!empty($result->cid)) {
					$link_contratto = "http://jahreswagen-italia.it/?page_id=51941&fill=".$result->cid;
				} else {
					$link_contratto = "http://jahreswagen-italia.it/?page_id=51941&fill=".$result->id;
				}
			} else {
				if (!empty($result->cid)) {
					$link_contratto = "http://jahreswagen-italia.it/?page_id=33255&contrattoId=".$result->cid;
				} else {
					$link_contratto = "http://jahreswagen-italia.it/?page_id=33255&contrattoId=".$result->id;
				}
			}

			echo '<tr>';

				$telaio = get_post_meta($result->auto_id,"_sku", true);

				echo '<td><a href="'.$link_contratto.'">'.$result->id.'</a></td>';
				echo '<td><a href="'.$link_contratto.'">'.$telaio.'</a></td>';
				echo '<td><a href="'.$link_contratto.'">'.getVenditore($result->auto_id).'</a></td>';
				echo '<td><a href="'.$link_contratto.'">'.$modello_auto.'</a></td>';
				echo '<td><a href="'.$link_contratto.'">'.date("d/m/Y",$result->data_inserimento).'</a></td>';
				echo '<td><a href="'.$link_contratto.'">'.$user_data[0]->ilsottoscritto.'</a></td>';
				echo '<td><a href="'.$link_contratto.'">'.contratto_by_status($result->status).'</a></td>';
				echo '<td><a href="'.$link_contratto.'">';
					echo $n_giorni;
				echo '</a></td>';

				if( current_user_can('administrator')) {
					echo '<td><a class="elimina_contratto_pvt" href="#" vid="'.$result->id.'"><i class="fa fa-times"></i></a></td>';
				}

			echo '</tr>';

		}
		echo '</table>';
	echo '</div>';
}

function getVenditore($audo_id)
{
	global $wpdb;

	$opzionatore = get_the_author_meta('elit_user_mail', get_post_field( 'post_author', $audo_id ) );

	if (empty($opzionatore)){
		$opzionatore = get_the_author_meta('user_login', get_post_field( 'post_author', $audo_id ) );
	}
	return $opzionatore;
}

add_shortcode("visualizza_contratti_in_corso","visualizza_contratti_in_corso");
function visualizza_contratti_in_corso(){
	global $wpdb;
	?>
		<style>

			.dashboard-wrapper {
				width: 60%;
			}

			.tabella_padding th { padding-bottom: 15px; }
			.tabella_padding td { padding: 5px 0 }

			.button_contratti {

			    background: #f3f3f3;
			    padding: 10px;
			    border: 1px solid #c1c1c1;
			    margin-right: 10px;

			}

		</style>
	<?php

	$stat = $_GET['status'];

	if (!empty($stat) || $stat === "0" ) {

		if ($stat == 7) {
			$stat = 2;
		}
		if ($stat == 8) {
			$stat = 2;
		}

		$query_status = "WHERE status = ".$stat;
	} else {
		$query_status = "";
	}



	echo '<h4>
		Contratto Privati
		<a class="floatright aggiungiBtnSmall" href="https://jahreswagen-italia.it/?page_id=51941"><i class="fa fa-plus-circle"></i></a>
	</h4>';

	echo '<form method="GET" action="http://jahreswagen-italia.it/?page_id=28316">';
		echo '<input name="search" style="width:90%; float:left;" type="text" placeholder="Cerca" style="width:100%; padding:25px 10px;" />';
		echo '<input style="width:8%; line-height40px; float:right;" type="submit" value="Cerca" /> <br/>';
		echo '<input type="hidden" value="28316" name="page_id" />';
		echo '<div style="width:100%; clear:both"></div>';
	echo '</form>';


	$role = elitcar_get_user_role(get_current_user_id());



	echo '<table style="width:100%;" class="generic_table">';
		echo '<tr>';
			echo '<th>Id</th>';
			echo '<th>Modello</th>';
			echo '<th>Data Contratto</th>';
			echo '<th>Cliente</th>';
			//echo '<th>Stato</th>';
			echo '<th>Giorni</th>';



			if( current_user_can('administrator')) {
				echo '<th></th>';
			}
		echo '</tr>';

	if (!empty($_GET['search'])) {
		$query = ", contratti_pt WHERE contratti_pt_list.id = contratti_pt.cid AND contratti_pt.meta_value LIKE '%".$_GET['search']."%' GROUP BY contratti_pt.cid";
	} else {
		$query = $query_status;
	}

	$results = $wpdb->get_results("SELECT * FROM contratti_pt_list ".$query."  ORDER BY data_inserimento DESC");
	foreach ($results as $result){

		if ( $_GET['status'] == 7 ) {


			if ( !empty(get_contratti_pt_meta('valori_fiscali_confermati', $result->id  )) ) {

				continue;

			}

		}

		if ( $_GET['status'] == 8 ) {

			if ( empty(get_contratti_pt_meta('valori_fiscali_confermati', $result->id  )) ) {

				continue;

			}

		}


		$user_data = get_cliente_privato($result->user_id, $result->id);

		$marca = array_shift( wc_get_product_terms( $result->auto_id, 'product_cat', array( 'fields' => 'names' ) ) );
		$modello = array_shift( wc_get_product_terms( $result->auto_id, 'pa_modello', array( 'fields' => 'names' ) ) );
		$motorizzazione = array_shift( wc_get_product_terms( $result->auto_id, 'pa_motorizzazione', array( 'fields' => 'names' ) ) );
		$versione = array_shift( wc_get_product_terms( $result->auto_id, 'pa_versione', array( 'fields' => 'names' ) ) );
		$verniciatura = array_shift( wc_get_product_terms( $result->auto_id, 'pa_verniciatura', array( 'fields' => 'names' ) ) );

		$modello_auto = $marca." ".$modello." ".$motorizzazione." ".$versione;


		/*$dStart = new DateTime(date("Y-m-d",$result->data_inserimento));

		//VERIFICO QUANTI GIORNI SONO PASSATI
		$checkEnd  = new DateTime( date("Y-m-d", time() ));
		$checkDifference = $dStart->diff($checkEnd);
		$checkDifference = $checkDifference->days;		*/


		if ( $result->status == 0 ){
			$dStart = new DateTime(date("Y-m-d", $result->data_inserimento ));
		} else {

			$data_by_status = get_contratti_pt_meta('daticontratto_data_status_'.$result->status, $result->id );

			if (empty($data_by_status)) {
				$dStart = new DateTime(date("Y-m-d", $result->data_inserimento ));
			} else {
				$dStart = new DateTime(date("Y-m-d", $data_by_status ) );
			}


		}


		//VERIFICO QUANTI GIORNI SONO PASSATI
		$checkEnd  = new DateTime( date("Y-m-d", time() ));
		$checkDifference = $dStart->diff($checkEnd);
		$checkDifference = $checkDifference->days;

		if ($checkDifference == 0) {
			$n_giorni = "Oggi";
		} else {
			$n_giorni = $checkDifference. " Giorni";
		}


		$role = elitcar_get_user_role(get_current_user_id());

		if ($role == "tecnico") {
			if (!empty($result->cid)) {
				$link_contratto = "http://jahreswagen-italia.it/?page_id=51941&fill=".$result->cid;
			} else {
				$link_contratto = "http://jahreswagen-italia.it/?page_id=51941&fill=".$result->id;
			}
		} else {
			if (!empty($result->cid)) {
				$link_contratto = "http://jahreswagen-italia.it/?page_id=33255&contrattoId=".$result->cid;
			} else {
				$link_contratto = "http://jahreswagen-italia.it/?page_id=33255&contrattoId=".$result->id;
			}
		}

		echo '<tr>';
			echo '<td><a href="'.$link_contratto.'">'.$result->id.'</a></td>';
			echo '<td><a href="'.$link_contratto.'">'.$modello_auto.'</a></td>';
			echo '<td><a href="'.$link_contratto.'">'.date("d/m/Y",$result->data_inserimento).'</a></td>';
			echo '<td><a href="'.$link_contratto.'">'.$user_data[0]->ilsottoscritto.'</a></td>';
			//echo '<td><a href="'.$link_contratto.'">'.contratto_by_status($result->status).'</a></td>';
			echo '<td><a href="'.$link_contratto.'">';
				echo $n_giorni;
			echo '</a></td>';

			if( current_user_can('administrator')) {
				echo '<td><a class="elimina_contratto_pvt" href="#" vid="'.$result->id.'"><i class="fa fa-times"></i></a></td>';
			}

		echo '</tr>';

	}
	echo '</table>';
}

function is_superadmin() {
	$current_user = wp_get_current_user();
	$username = $current_user->user_login;
	if ($username == "oldanist") {
		return true;
	} else {
		return false;
	}
}


add_action( 'wp_ajax_nopriv_eliminaContratto', 'eliminaContratto_callback' );
add_action( 'wp_ajax_eliminaContratto', 'eliminaContratto_callback' );

function eliminaContratto_callback() {

/*
	$raw_data	= $_POST['raw_data'];
	$price		= $_POST['price'];

	$raw_data 	= explode("_",$raw_data);

	$user_id 	= $raw_data[1];
	$post_id 	= $raw_data[2];


	//update_post_meta(76, 'my_key', 'Steve');
	$metaData = "prezzoSalonista_".$post_id."_".$user_id;

	update_post_meta($post_id, $metaData, $price );*/

	die("Elimino Contratto");
	//echo $user_id." - ".$post_id." - ".$price."\n";
}

add_action("init","delCtr");
function delCtr() {
	if ($_GET['action'] == "delCtr") {
		global $wpdb;

		$vid = $_GET["vid"];

		$wpdb->get_results("DELETE FROM contratti_pt_list WHERE id = '$vid'");
		$wpdb->get_results("DELETE FROM contratti_pt WHERE cid = '$vid");
	}
}


function get_cliente_privato($id,$cid){
	global $wpdb;
/*
	if ($id != 0) {
		$results = $wpdb->get_results("SELECT * FROM clienti_elitcar WHERE id = '$id'");
		//print_r($results);
	} else {*/
		$results = $wpdb->get_results("SELECT * FROM contratti_pt WHERE cid = '$cid'", ARRAY_A);
		foreach ($results as $value) {

			$t_res[$value['meta_key']] = $value['meta_value'];

		}

		$object = new stdClass();
		foreach ($t_res as $key => $value) {
		    $object->$key = $value;
		}

		$_object = (object)$object;

		$results[0] = $_object;

		//print_r(/$object);
	//}

	/*print_r($results);
	echo "<hr/>";*/

	return $results;
}


//Leggo Attributo
function jahreswagen_get_attribute($post_id){
	global $wpdb;

    $query = $wpdb->get_results("SELECT *
		FROM  wp_term_relationships as wtr, wp_term_taxonomy as wtt, wp_terms as wt
		WHERE
		wtr.term_taxonomy_id = wtt.term_taxonomy_id AND
		wt.term_id = wtt.term_id AND
		object_id ='$post_id'");

    foreach ($query as $attribute) {
		$data[$attribute->taxonomy] = $attribute->name;
    }

    return $data;
}


//Enqueue Scripts
function jahreswagen_enqueue_style() {

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css', false );
	wp_enqueue_style( 'bootstrap-responsive-css', get_template_directory_uri().'/css/bootstrap-responsive.min.css', false );
	wp_enqueue_style( 'bootstrap-base-css', get_template_directory_uri().'/css/base.css', false );
	wp_enqueue_style( 'bootstrap-submenu-css', get_template_directory_uri().'/css/bootstrap-submenu.min.css', false );


	//wp_enqueue_style( 'datatable-css', 'https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css', false);
	wp_enqueue_style( 'datatable-css', get_template_directory_uri().'/css/datatables.min.css', false );
	wp_enqueue_style( 'colorbox-css', get_template_directory_uri().'/css/colorbox.css', false );
	wp_enqueue_style( 'remodal-css', get_template_directory_uri().'/css/remodal.css', false );
	wp_enqueue_style( 'remodal-default-theme-css', get_template_directory_uri().'/css/remodal-default-theme.css', false );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/font-awesome.min.css', false );

	wp_enqueue_style( 'main-style-css', get_template_directory_uri().'/style.css?v=0008', false );
}

function jahreswagen_enqueue_script() {

	wp_enqueue_script( 'jquery-ui-js', get_template_directory_uri().'/js/jquery-ui.js', false );

	wp_enqueue_script( 'transition-ui-js', get_template_directory_uri().'/js/transition.min.js', false );

	//wp_enqueue_script( 'datatable-js', 'https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js', false );
	wp_enqueue_script( 'datatable-js', get_template_directory_uri().'/js/datatables.min.js?v=001', false );
	wp_enqueue_script( 'colorbox-js', get_template_directory_uri().'/js/jquery.colorbox-min.js', false );
	wp_enqueue_script( 'autocomplete-js', get_template_directory_uri().'/js/jquery.autocomplete.js', false );
	wp_enqueue_script( 'remodal-js', get_template_directory_uri().'/js/remodal.min.js', false );

	wp_enqueue_script( 'jahreswagen-js', get_template_directory_uri().'/js/jahreswagen.js?v=004', false );

	wp_enqueue_script( 'ricerca-avanzata-js', get_template_directory_uri().'/js/ricerca_avanzate.js?v=004', false );

	wp_enqueue_script( 'dropdown-min', get_template_directory_uri().'/js/dropdown.min.js', false );


	wp_enqueue_script( 'gestione_attributi-js', get_template_directory_uri().'/js/gestione_attributi.js?v=001', false );


}

add_action( 'wp_enqueue_scripts', 'jahreswagen_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'jahreswagen_enqueue_script' );


function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url("http://jahreswagen-italia.it/wp-content/uploads/user_images/logo_vettureaziendali.png");
            padding-bottom: 30px;
            width: 310px !important;
            background-size: 100%;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


function contratto_by_status($id){
	switch($id) {
		case 1:
			$label = "Acconto";
			break;
		case 2:
			$label = "Valori Fiscali";
			break;
		case 3:
			$label = "Acconto 80%";
			break;
		case 4:
			$label = "Targatura";
			break;
		case 5:
			$label = "Saldo e Consegna";
			break;
		case 6:
			$label = "Auto Consegnata";
			break;
		case 0:
			$label = "Annullato";
			break;
		default:
			$label = "Annullato";
			break;
	}

	return $label;
}



function get_contratti_pt_meta($meta_key,$cid){
	global $wpdb;

    $query = $wpdb->get_results("SELECT * FROM contratti_pt WHERE  meta_key = '$meta_key' AND cid = '$cid'");


    return $query[0]->meta_value;
}

function get_contratti_pt_meta_list($cid){
	global $wpdb;

    $query = $wpdb->get_results("SELECT * FROM contratti_pt_list WHERE id = '$cid'");


	$data['user_id'] = $query[0]->user_id;
	$data['data_inserimento'] = $query[0]->data_inserimento;
	$data['auto_id'] = $query[0]->auto_id;

    return $data;
}


add_action( 'wp_ajax_refreshtooltipjx', 'refreshtooltipjx_ajax' );
add_action( 'wp_ajax_nopriv_refreshtooltipjx', 'refreshtooltipjx_ajax' );
function refreshtooltipjx_ajax() {

	error_reporting(0);
	$data = $_POST['data'];
	$post_id = $_POST['post_id'];
	$note = $_POST['note'];

	$pagenumber = $_POST['page_id'];

	if ($data == "auto_acquistata"){
		update_post_meta( $post_id, "auto_acquistata", "acquistata" );
	}
	if ($data == "inseriscinota"){
		update_post_meta( $post_id, "inseriscinota", $note );
		update_post_meta( $post_id, "notaletta", 0 );
	}

	if ($data == "chiamata_accettata"){
		$numero_chiamate = get_post_meta($post_id, "numero_chiamate", true);
		$numero_chiamate = $numero_chiamate +1;
		update_post_meta( $post_id, "numero_chiamate", $numero_chiamate );
		update_post_meta( $post_id, "stato_ultima_chiamata", "accettata" );
	}
	if ($data == "chiamata_rifiutata"){
		$numero_chiamate = get_post_meta($post_id, "numero_chiamate", true);
		$numero_chiamate = $numero_chiamate +1;
		update_post_meta( $post_id, "numero_chiamate", $numero_chiamate );
		update_post_meta( $post_id, "stato_ultima_chiamata", "rifiutata" );
	}

	if ($data == "notaletta"){
		update_post_meta( $post_id, "notaletta", 1 );
	}


	/*if ($data == "cambia_pagina"){

	}*/

	echo do_shortcode('[preventivitooltip pagenumber="'.$pagenumber.'"]');

    // Don't forget to stop execution afterward.
    wp_die();
}

add_shortcode("preventivitooltip", "preventivitooltip");
function preventivitooltip($atts) {

 //if( current_user_can('administrator')) { ?>

 		<?php
 		global $wpdb;

 	if (is_elitcar()) {

 		$note_non_lette = 0;

 		?>
        <div id="preventivitooltip" class="hideblock">

            <i class="closebtn fa fa-times" aria-hidden="true"></i>

            <style type="text/css">
                .closebtn {
                    color: #ed1c24;
                    font-size: 28px;
                }
                #ultimi-preventivi li{
                    list-style: none;
                    padding: 20px;
                    padding-top: 10px;
                    padding-bottom: 10px;
                    border-bottom: 1px solid #e2e2e2;
                }

                #preventivitooltip {
                    width:580px;background: #f1f1f1;position: fixed;z-index: 9999;left: 30px;bottom: 30px; border: 2px solid #dcdcdc
                }

                .hideblock {
                    display: none;
                }
                #apripreventivi {
                    width:150px; height: 80px; position: fixed; bottom: 30px; left: 30px; z-index: 999999999999999
                }

                .fa {
                	cursor: pointer;
                }

            </style>
            <ul id="ultimi-preventivi" style="margin-left: 0; padding-left: 0;">

                <?php


                	//echo "P.N. " . $count_posts;

					$currentPage = $atts['pagenumber'];
					if (empty($currentPage)) {
						$currentPage = 1;
					}

					if ($currentPage <= 1) {
						$currentPageOff = 0;
					} else {
						$currentPageOff = $currentPage ;
					}

					if( !current_user_can('administrator')) {

						$auth_id = get_current_user_id();

						$args = array(
	                        'post_type' => 'preventivo_type',
	                        'posts_per_page' => 5,
	                        'offset' => 5 * $currentPageOff,
	                        'orderby'   => 'post_date',
	                        'order' => 'DESC',
	                        'author' => $auth_id
	                    );

						//echo "SELECT * FROM wp_posts WHERE post_author == '".$auth_id."' AND post_type = 'preventivo_type'";
	                    $queryCPost = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_author = '".$auth_id."' AND post_type = 'preventivo_type'");
	                    $count_posts = count($queryCPost);


	                    $pv_admin_tooltip = false;

					} else {
	                    $args = array(
	                        'post_type' => 'preventivo_type',
	                        'posts_per_page' => 5,
	                        'offset' => 5 * $currentPageOff,
	                        'orderby'   => 'post_date',
	                        'order' => 'DESC',
	                    );

						$count_posts = wp_count_posts( 'preventivo_type' )->publish;

						$pv_admin_tooltip = true;


					}






                    $preventivi = new WP_Query( $args );

                    //echo "P.N.N. " . count($preventivi);

                    if ( $preventivi->have_posts() ) :
                        while ( $preventivi->have_posts() ) : $preventivi->the_post();

                        $post_id = $preventivi->post->ID;
                        $post_author = get_user_meta($preventivi->post->post_author, 'ragione_sociale', true)." ".get_user_meta($preventivi->post->post_author, 'first_name', true);
                    ?>
                    <li >
                        <table style="width: 100%; ">
                            <tr>
                                <td style="text-align: left; width: 280px;">
                                    <a target="_blank" target="_blank" href="<?php echo get_post_meta ( $post_id, 'pdf_link', true); ?>">
                                    	<?php //if ($pv_admin_tooltip) : ?>
                                        	<b>(<?php echo get_post_meta ( $post_id, 'numero_documento', true); ?>)</b> - <?php echo $post_author; ?><br/>
                                        	<small style="color: #444 !important"><?php echo get_post_meta ( $post_id, 'destinatario', true); ?>
                                    	<?php //endif; ?>
                                		<?php

                                    		$auto_id = get_post_meta ( $post_id, 'auto_id', true);

                                    		echo "<br/>";

                                    		echo get_the_title($auto_id)

                                		?>
                                    </a>
                                </td>
                                <td style="text-align: center">
                                    <b><?php echo date("d/m/Y",get_post_meta ( $post_id, 'data_documento', true)); ?></b>
                                </td>


                                <td  postid="<?php echo $post_id; ?>" style="text-align: center; width: 50px;" pagenumber="<?php echo $currentPage ?>" class="auto_acquistata">
                                	<?php
                                	if (get_post_meta($post_id, "auto_acquistata", true)== "acquistata") {
                                    	echo '<i class="fa fa-usd" style="color:green" aria-hidden="true"></i>';
                                	} else {

                                   		echo '<i class="fa fa-usd" aria-hidden="true"></i>';
                                	}
                                	?>

                                </td>
                                <td style="text-align: center; width: 40px;" postid="<?php echo $post_id; ?>" pagenumber="<?php echo $currentPage ?>" class="chiamata_rifiutata">
                                    <i class="fa fa-phone" aria-hidden="true" style="color: #f00"  ></i>
                                </td>
                                <td style="text-align: center; width: 40px;" postid="<?php echo $post_id; ?>" pagenumber="<?php echo $currentPage ?>" class="chiamata_accettata">
                                    <i class="fa fa-phone" aria-hidden="true" style="color: #7fc31f"  ></i>
                                </td>
								<td style="text-align: center; width: 40px;" postid="<?php echo $post_id; ?>" pagenumber="<?php echo $currentPage ?>"  class="add_note">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </td>

                                <td style="text-align: center; width: 40px">
                                	<?php if (get_post_meta($post_id, "stato_ultima_chiamata", true)== "rifiutata") :
                                			echo '<span style="color:red">';
                                		endif;
                            		?>
									<?php if (get_post_meta($post_id, "stato_ultima_chiamata", true)== "accettata") :
                                			echo '<span style="color:green">';
                                		endif;
                            		?>
                                    (
                                    <?php
                                    if (get_post_meta($post_id, "numero_chiamate", true) > 0) {
                                    	echo get_post_meta($post_id, "numero_chiamate", true);
                                	} else {
                                		echo '0';
                            		}
                            		?>
                            		)
                            		</span>
                                </td>
                            </tr>
                            <tr>
                            	<td colspan="6">
                            		<?php

                            		$nota_inserita = get_post_meta ( $post_id, 'inseriscinota', true);
                            		$nota_inserita = trim($nota_inserita);




                            		if (get_post_meta($post_id, "notaletta", true) > 0 || empty($nota_inserita)) {
                            			$class_note = "hideblock";
                            		} else {
                            			$class_note = "";
                            			$note_non_lette++;
                            		}

                            		?>

                            		<div id="note_<?php echo $post_id; ?>" class="notelist <?php echo $class_note; ?>">
                            			<textarea  id="notetext_<?php echo $post_id; ?>"  style="width: 100%;" placeholder="NOTE"><?php echo $nota_inserita; ?></textarea>
                            			<input type="submit" pagenumber="<?php echo $currentPage ?>" value="Chiudi" class="chiudinota" postid="<?php echo $post_id; ?>" />
                            			<input type="submit" pagenumber="<?php echo $currentPage ?>" placeholder="Inserisci Nota" value="Inserisci Nota" class="inseriscinota" postid="<?php echo $post_id; ?>" />

                            			<input style="background: mediumspringgreen; border: 1px solid #36bd79;" type="submit" value="Nota Letta" class="notaletta" pagenumber="<?php echo $currentPage ?>" postid="<?php echo $post_id; ?>" />

                        			</div>
                            	</td>
                        </table>
                     </li>
                <?php
                        endwhile;

                    endif;

                    if ($note_non_lette > 0 ) {
                    	?>

						<script>
							jQuery.noConflict();
							(function( $ ) {
							  $(function() {

							  		$("#preventivitooltip").removeClass("hideblock");
	  								$("#apripreventivi").addClass("hideblock");

							  });
							})(jQuery);
						</script>

                    	<?php
                    }
                ?>

            </ul>

            <style>


				/** PAGINATION **/
				.pagination {
				    margin: 0;
				    padding: 0;
				    width: 100%;
				    text-align: center;
				    border-top: 2px solid black;
				    margin-top: 20px;
				    padding-top: 10px;
				}



				.pagination li {
				    display: inline-block;
				    width: 40px;
				    height: 40px;
				    line-height: 40px;
				    margin-bottom: 20px;
				    text-align: center;
				    cursor: pointer;
				}

				.pagination li.selected {
				    background-color: #D8D8D8
				}

			</style>
            <?php



				$page = 1;
				$lastPage = ceil($count_posts / 5);



				$increaseEndingBy = ($currentPage < 6) ? 10 - $currentPage : 4;
				$increaseStartingBy = ($currentPage > ($lastPage - 7)) ? 8 - ($lastPage-$currentPage) : 3;


				$startPaging = ($currentPage > 6) ? ($currentPage - $increaseStartingBy) : 1;
				$endPaging = ($currentPage < ($lastPage - 6)) ? $currentPage+$increaseEndingBy : $lastPage +1;

				echo '<ul class="pagination">';

					if ($currentPage > 6) {
						echo '<li pagenumber="1" id="firstPage">1</li>';
						echo '<li>-</li>';
					}

					for ($i = $startPaging ; $i< $endPaging; $i++) {

						if ($currentPage == $i) {
							echo "<li pagenumber='".$i."' class='selected'>".$i."</li>";
						} else {
							echo "<li pagenumber='".$i."'>".$i."</li>";
						}

					}

					if ($currentPage < ($lastPage - 6)) {
						echo '<li>-</li>';
						echo '<li pagenumber="'.$lastPage.'" id="lastPage">'.$lastPage.'</li>';
					}

				echo '</ul>';

				echo '<span class="closebtn" style="font-size: 13px; font-weight: bold; cursor: pointer ">Chiudi</span>';

            ?>
        </div>

        <div id="apripreventivi" class="hideblock">
            <i class="fa fa-eye" aria-hidden="true" style="font-size: 60px"></i>
        </div>

      <?php }
}

function elitcar_get_user_role( $user = null ) {
	$user = $user ? new WP_User( $user ) : wp_get_current_user();
	return $user->roles ? $user->roles[0] : false;
}


add_shortcode("autoscout_sync","autoscout_sync");
function autoscout_sync() {

	echo '<div style="width:100%; margin:0 auto; padding:20px; text-align:center">';
		echo '<a href="#"><img src="http://jahreswagen-italia.it/wp-content/uploads/2018/02/autoscout24-logo-og.png" /></a>';
	echo '</div>';

}


add_action( 'wp_ajax_nopriv_generaNumeroChiave', 'generaNumeroChiave_callback' );
add_action( 'wp_ajax_generaNumeroChiave', 'generaNumeroChiave_callback' );
function generaNumeroChiave_callback() {


	global $wpdb;

	$numero_corrente = $_POST['numero_corrente'];



	/*if ( $numero_corrente <= 200 ) {
		$OFFSET = 200;
	} else {
		$OFFSET = 0;
	}*/

	//if (empty($numero_corrente)) {
		$OFFSET = 0;
	//}

	$numeroChiave = $wpdb->get_results("SELECT * FROM nchv WHERE libera = 0 LIMIT 1 OFFSET $OFFSET");
	$numeroChiave = $numeroChiave[0]->numero;
	echo $numeroChiave;
	wp_die();


}

add_shortcode("cercaTelaio","cercaTelaio");
function cercaTelaio() {

	global $wpdb;
	global $product;

	if (empty( $_GET['sku']) ) {


		$user = wp_get_current_user();
		$is_parcheggiatore = false;
		if ( in_array( 'parcheggi_elit', (array) $user->roles ) ) {
		    $is_parcheggiatore = true;
		}

		if (!$is_parcheggiatore) {
		?>

				<h2 style="color: #444;">Trova Auto</h2>
				<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input style="padding:12px; width: 350px;"; type="text" name="sku" placeholder="inserisci n. telaio / targa o n. chiave" />
					<input style="padding:12px"; type="hidden" name="page_id" value="67193" />
					<input style="padding:12px"; type="submit" value="CERCA" />
				</form>


		<?php
		}
	} else {


		$codice_sku = $_GET['sku'];

		if (strlen($codice_sku) > 5) {
			$post_id = $wpdb->get_results("SELECT * FROM wp_postmeta WHERE meta_key = '_sku' AND meta_value LIKE '%".$codice_sku."'");
			$post_id = $post_id[0]->post_id;
		} else {
			$post_id = $wpdb->get_results("SELECT * FROM wp_postmeta WHERE meta_key = 'Chiave' AND meta_value = '".$codice_sku."'");
			$post_id = $post_id[0]->post_id;
		}


		$post_status = get_post_status( $post_id );
		$_sku = get_post_meta($post_id, '_sku', true);
		$accessori = get_post_meta($post_id, 'Accessori', true);

	    $product_cats = wp_get_post_terms( $post_id, 'product_cat' );
	    if ( $product_cats && ! is_wp_error ( $product_cats ) ){  $single_cat = array_shift( $product_cats ); $marca = $single_cat->name; }
	    $modello = array_shift( wc_get_product_terms( $post_id, 'pa_modello', array( 'fields' => 'names' ) ) );

	    $motorizzazione = array_shift( wc_get_product_terms( $post_id, 'pa_motorizzazione', array( 'fields' => 'names' ) ) ); //$product->get_attribute( 'pa_motorizzazione' );
	    $versione = array_shift( wc_get_product_terms( $post_id, 'pa_versione', array( 'fields' => 'names' ) ) ); //$product->get_attribute( 'pa_versione' );

	    $verniciatura = array_shift( wc_get_product_terms( $post_id, 'pa_verniciatura', array( 'fields' => 'names' ) ) ); //$product->get_attribute( 'pa_verniciatura' );
	    $tapezzeria = array_shift( wc_get_product_terms( $post_id, 'pa_tapezzeria', array( 'fields' => 'names' ) ) ); //$product->get_attribute( 'pa_tapezzeria' );

	    $pa_tipologia =  array_shift( wc_get_product_terms( $post_id, 'pa_tapezzeria', array( 'fields' => 'names' ) ) ); //$product->get_attribute( 'pa_tipologia' );
	    $chilometri = get_post_meta($post_id, 'Chilometri', true);
		
	    $chiave = get_post_meta($post_id, 'Chiave', true);


		$Parcheggio = get_post_meta($post_id,"Parcheggio",true);
		$StatoAuto = get_post_meta($post_id,"StatoAuto",true);
		$luogoChiave = get_post_meta($post_id, "luogoChiave", true);
		if (is_wp_error($luogoChiave)){
			add_post_meta($post_id, 'luogoChiave', -1);
		}
		$is_Occupata   = get_post_meta($post_id, "isOccupata", true);
		$is_OccupataDa = get_post_meta($post_id, "isOccupataDa", true);
		
		$ultimoUtilizzo = get_post_meta($post_id, "SpostataDa", true);


?>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>?sku=<?php echo $_sku; ?>&page_id=67193">
<?php
	echo '<div style="padding:25px; width: 100%;">';

		if ($post_status=="publish") {
			$post_status = "Libera";
		}
		echo "<div class='clearfix attrseparation'></div>";
		echo "<label class='label-list'>Stato Auto</label><span class='value-block' style=''>".$post_status."&nbsp;</span><hr>";
		echo "<div class='clearfix attrseparation'></div>";



		echo "<label class='label-list'>Chiave</label><span class='value-block' style=''>".$chiave."&nbsp;</span><hr>";
		echo "<div class='clearfix attrseparation'></div>";

		echo "<label class='label-list'>Telaio</label><span class='value-block' style=''>".$_sku."&nbsp;</span><hr>";
		echo "<div class='clearfix attrseparation'></div>";

		echo "<label class='label-list'>Marca</label><span class='value-block'>".$marca."&nbsp;</span><hr>";
		echo "<div class='clearfix attrseparation'></div>";
		echo "<label class='label-list'>Modello</label><span class='value-block'>".$modello."&nbsp;</span><hr>";
		echo "<div class='clearfix attrseparation'></div>";
		//echo "<label class='label-list'>Motorizzazione</label><span class='value-block'>".$motorizzazione."&nbsp;</span><hr>";
		//echo "<div class='clearfix attrseparation'></div>";
		//echo "<label class='label-list'>Versione</label><span class='value-block'>".$versione."</span><hr>";
		//echo "<div class='clearfix attrseparation'></div>";
		echo "<label class='label-list'>Colore</label><span class='value-block'>".$verniciatura." - ".elit_get_termsmeta( $verniciatura, "verniciatura" )."&nbsp;</span><hr>";
		echo "<div class='clearfix attrseparation'></div>";
		echo "<label class='label-list'>Spostata da</label><span class='value-block' style=''>".$ultimoUtilizzo."&nbsp;</span><hr>";
		echo "<div class='clearfix attrseparation'></div>";

		//echo "<label class='label-list'>Interni</label><span class='value-block'>".$tapezzeria." - ".elit_get_termsmeta( $tapezzeria , "tapezzeria")."&nbsp;</span><hr>";
		//echo "<div class='clearfix attrseparation'></div>";
		/*echo "<label class='label-list'>Chilometri</label><span class='value-block'>".$chilometri."&nbsp;</span>";
		echo "<div class='clearfix attrseparation'></div>";*/
		/*echo "<label class='label-list'>Immatricolazione</label><span class='value-block'>";
		if (!empty($immatricolazione)) {
			echo date("d/m/Y",$immatricolazione);
		}*/
		echo "&nbsp;</span>";
		echo "<div class='clearfix attrseparation'></div>";

		?>

		<div class='clearfix attrseparation'></div>

		<!-- <label class='label-list'>
			Chiave
		</label>
		<input style="text-indent:5px;" type="text" class="chiave" id="chiave_gen" name="meta_Chiave" value="<?php echo $chiave ?>"  />

		<br/>

		<script type="text/javascript">
			jQuery(document).ready( function($) {

				$( "#generaChiave" ).click(function() {

					_numero_corrente = $("#chiave_gen").val();

			  		$.post(ajaxurl, { 'action': 'generaNumeroChiave', numero_corrente: _numero_corrente }, function(response) {

			  			$("#chiave_gen").val(response);
						//console.log(response);

					});

					return false;

				});

				/**/

			})
		</script>
		<br/> -->

		<div class='clearfix attrseparation'></div>

		<table>
			<tr>
				<td>
					<label class='label-list'>
						Parcheggio / Zona Veicolo
						<br>
					</label>
					<?php ParcheggiDisponibili($Parcheggio); ?>
				</td>
				<td>

				<td>

				</td>
			</tr>
		</table>
		<hr>
		<table>
			<tr>
				<td>
					<label class='label-list'>
						Luogo Chiave
					</label>
					<select class="Modello" name="meta_luogoChiave">
				<option <?php if ($luogoChiave == '-1'){echo 'selected=""';} ?>>Da Definire</option>
				<option <?php if ($luogoChiave == '1'){echo 'selected=""';} ?> value="1" >Cassaforte Vendite</option>
				<option <?php if ($luogoChiave == '2'){echo 'selected=""';} ?> value="2">Cassaforte Service</option>
				<option <?php if ($luogoChiave == '3'){echo 'selected=""';} ?> value="3">Scheda di lavoro</option>
				<option <?php if ($luogoChiave == '4'){echo 'selected=""';} ?> value="4">Impegnata</option>
				</select>	
				</td>
				<td>

				<td>

				</td>
			</tr>
		</table>

		<br/>

		<div class='clearfix attrseparation'></div>

		<!-- <table>
			<tr>
				<td>
					<label class='label-list'>
						Stato Dell'Auto / Reparto
					</label>
				</td>
				<td>
					<select class="modello" name="meta_StatoAuto">

						<option <?php if ($StatoAuto == "Da Definire") : echo 'selected'; endif; ?> >Da Definire</option>

						<option <?php if ($StatoAuto == "Libera") : echo 'selected'; endif; ?> >Libera</option>

						<option <?php if ($StatoAuto == "Carrozzeria") : echo 'selected'; endif; ?> >Carrozzeria</option>
						<option <?php if ($StatoAuto == "Officina") : echo 'selected'; endif; ?> >Officina</option>

						<option <?php if ($StatoAuto == "Venduta") : echo 'selected'; endif; ?> >Venduta</option>
						<option <?php if ($StatoAuto == "Preconsegna") : echo 'selected'; endif; ?> >Preconsegna</option>
						<option <?php if ($StatoAuto == "Consegnata") : echo 'selected'; endif; ?> >Consegnata</option>

					</select>
				</td>
			</tr>
		</table> -->

		<br/><br/>
		<input type="hidden" name="oldani_modifica_parcheggio" value="<?php echo wp_create_nonce('oldani_modifica_parcheggio'); ?>"/>
		<input type="hidden" name="post_id" value="<?php echo $post_id; ?>"/>
		<input type="submit" value="Salva" style="

				    display:  block;
				    width: 100%;
				    padding: 10px;
				    font-size: 48px;
				    color: white;
				    background: #ed1c24;
				    font-weight:  bold;
" />

	</div>
	

	<div style="clear: both"></div>
</form>
<div style="width: 100%; align-content:center">
		<img src="http://jahreswagen-italia.it/wp-content/uploads/2018/03/PlanimetriaColori.jpg" style="width: 80%;" />
	</div>

	<?php
	}
}

add_action("init","modificaParcheggioAct");
function modificaParcheggioAct() {
	if ( wp_verify_nonce($_POST['oldani_modifica_parcheggio'], 'oldani_modifica_parcheggio') ) {
		global $wpdb;
		$post_id 						= $_POST['post_id'];

		$_STATO_AUTO 					= $_POST['meta_StatoAuto'];

		//Gestione Chiave
		//$_CHIAVE 						= $_POST['meta_Chiave'];

		$_luogoChiave                   = $_POST['meta_luogoChiave'];
		$_PARCHEGGIO 					= $_POST['meta_Parcheggio'];

		$user_ID 						= get_current_user_id();

		//update_post_meta($post_id,"Chiave",$_CHIAVE);
		update_post_meta($post_id,"SpostataDa",$user_ID);

		update_post_meta($post_id,"StatoAuto",$_STATO_AUTO);
		update_post_meta($post_id,"Parcheggio",$_PARCHEGGIO);
		update_post_meta($post_id,"luogoChiave", $_luogoChiave); 

		$user = wp_get_current_user();

		update_post_meta($post_id,"SpostataDa",$user->user_login);
		update_post_meta($post_id,"SpostataData",time() );
	}

}


add_shortcode("genera_schede_da_telaio","genera_schede_da_telaio");
function genera_schede_da_telaio()
{
	?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>/?page_id=70127" >
			<br/>
			<label>Telaio
				<input type="text" value="<?php echo $_POST['_sku']; ?>" name="_sku"> <small>Inserire un valore separato da virgola</small>
				<input type="hidden" name="search" value="true">
				<input type="submit" name="Cerca" />
			</label>
		</form>



	<?php


	if ($_POST['search'] == "true")
	{
		global $wpdb;
		echo '<br/><hr/>';
		$telai = $_POST['_sku'];

		$telai = explode(",",$telai);

		foreach ($telai as $telaio) {

			//echo $telaio."<br/>";
			$querySchedeLibere = "SELECT post_id FROM wp_postmeta WHERE meta_key='_sku' AND meta_value LIKE '%".$telaio."%' LIMIT 1";
			$product_id = $wpdb->get_results($querySchedeLibere);
			$product_id = $product_id[0]->post_id;
			$products_id[] = $product_id;

			$queryChiave = "SELECT meta_value FROM wp_postmeta WHERE meta_key='Chiave' AND post_id = '".$product_id."' LIMIT 1";
			$chiavi_id = $wpdb->get_results($queryChiave);
			$chiavi_id = $chiavi_id[0]->meta_value;
			$_chiavi_id[] = $chiavi_id;

		}

		echo "<a target='_blank' href='http://jahreswagen-italia.it/PDF/scheda_pubblico_v2.php?post_id=".implode(",",$products_id)."'>Genera Schede Libere</a><br/>";
		echo "<a target='_blank' href='http://jahreswagen-italia.it/PDF/numero_chiave.php?chiavi=".implode(",",$_chiavi_id)."'>Stampa Chiavi</a><br/>";

	}


}

/***
	PARCHEGGI DISPONIBILI
**/
function ParcheggiDisponibili($Parcheggio)
{

	?>
		<select class="modello" name="meta_Parcheggio">

			<option <?php if ($Parcheggio == "Da Definire") : echo 'selected'; endif; ?> >Da Definire</option>

			<option>------------------</option>

			<option value="Verde Scuro" <?php if ($Parcheggio == "Verde Scuro") : echo 'selected'; endif; ?> >Verde Scuro - Officina</option>
			<option value="Rosso Magenta" <?php if ($Parcheggio == "Rosso Magenta") : echo 'selected'; endif; ?> >Rosso Magenta - Lavaggio / Preconsegna</option>
			<option value="Arancione Carro" <?php if ($Parcheggio == "Arancione Carro") : echo 'selected'; endif; ?> >Arancione - Carrozzeria</option>

			<option>------------------</option>

			<option value="Giallo"  <?php if ($Parcheggio == "Giallo") : echo 'selected'; endif; ?> >Giallo - Area Consegna</option>
			<option value="Giallo1"  <?php if ($Parcheggio == "Giallo1") : echo 'selected'; endif; ?> >Area Consegna - Lato Officina</option>

			<option>------------------</option>

			<option value="Marrone" <?php if ($Parcheggio == "Marrone") : echo 'selected'; endif; ?> >Marrone - Lato Carrozzeria</option>
			<option value="Arancione" <?php if ($Parcheggio == "Arancione") : echo 'selected'; endif; ?> >Rosso - Parcheggio Dietro Carrozzeria</option>
			<option value="Blu" <?php if ($Parcheggio == "Blu") : echo 'selected'; endif; ?> >Blu - Lato Prato Capannone</option>
			<option value="Viola" <?php if ($Parcheggio == "Viola") : echo 'selected'; endif; ?> >Viola - Fronte Nuovo Capannone</option>
			<option value="Bianco" <?php if ($Parcheggio == "Bianco") : echo 'selected'; endif; ?> >Bianco - Laterale Capannone Nuovo</option>

            <option>------------------</option>

            <option value="Lavanda"  <?php if ($Parcheggio == "Lavanda") : echo 'selected'; endif; ?> >Lavanda - Nuova area consegna</option>

            <option>------------------</option>



            <option value="Dormelletto"  <?php if ($Parcheggio == "Dormelletto") : echo 'selected'; endif; ?> >Deposito Arona</option>

            <option>------------------</option>

			<option value="Verde A" <?php if ($Parcheggio == "Verde A") : echo 'selected'; endif; ?> >Verde - Parcheggio Fra Due Esposizioni</option>
			<option value="Verde B" <?php if ($Parcheggio == "Verde B") : echo 'selected'; endif; ?> >Verde - Salone Mercedes</option>
			<option value="Verde C" <?php if ($Parcheggio == "Verde C") : echo 'selected'; endif; ?> >Verde - Parcheggio Dietro Salone Mercedes</option>

			<option value="Azzurro A" <?php if ($Parcheggio == "Azzurro A") : echo 'selected'; endif; ?> >Azzurro - Salone Volkswagen</option>
			<option value="Azzurro B" <?php if ($Parcheggio == "Azzurro B") : echo 'selected'; endif; ?> >Azzurro - Esterno Volkswagen</option>


			<!-- <option <?php if ($Parcheggio == "Grigio") : echo 'selected'; endif; ?> >Grigio - </option> -->
			<option value="Rosa"  <?php if ($Parcheggio == "Rosa") : echo 'selected'; endif; ?> >Rosa - Parcheggio Esterno Parte Bassa</option>

			<option value="Bidoni"  <?php if ($Parcheggio == "Bidoni") : echo 'selected'; endif; ?> >Rosa - Zona Bidoni</
				option>
			<option>------------------</option>

			<option style="color: red; font-weight: bold" <?php if ($Parcheggio == "Via Espinasse") : echo 'selected'; endif; ?> >Via Espinasse</option>



		</select>
	<?php

}



/***
	GESTORE PAGINAZIONE
**/
function paginazione($_COUNT_QUERY, $_QUERY_RICERCA, $_CALLBACK,$return_data = true,$post_per_page = 15)
{

	global $wpdb;

	$results = $wpdb->get_results($_COUNT_QUERY);
	$numberPage = $results[0]->numberRes;



    //INIT PAGINATION
    $currentPage = $_GET['page'];
    if (empty($currentPage)) {
    	$currentPage =1;
    }
    $page = 1;
    $lastPage = ceil($numberPage / $post_per_page );
    $increaseEndingBy = ($currentPage <6) ? 10 -$currentPage : 4;
    $increaseStartingBy = ($currentPage > ($lastPage - 7)) ? 8 -($lastPage-$currentPage)  : 3;
    $startPaging = ($currentPage > 6) ? ($currentPage -$increaseStartingBy) : 1;
    $endPaging = ($currentPage < ($lastPage - 6)) ? $currentPage+$increaseEndingBy : $lastPage +1;


    echo '<ul class="pagination">';

    	if ($currentPage > 6) {
    		echo '<li id="firstPage"><a href="'.$_CALLBACK.'&page=1">1</a></li>';
    		//echo '<li>-</li>';
    	}

    	for ($i = $startPaging; $i < $endPaging; $i++) {
    		if ($currentPage == $i) {
    			echo '<li class="selected"><a href="'.$_CALLBACK.'&page='.$i.'">'.$i.'</a></li>';
    		} else {
    			echo '<li><a href="'.$_CALLBACK.'&page='.$i.'">'.$i.'</li></li>';
    		}
    	}

    	if ($currentPage < ($lastPage < 6)) {
    		//echo '<li>-</li>';
    		echo '<li id="lastPage"><a href="'.$_CALLBACK.'&page='.$lastPage.'">'.$lastPage.'</a></li>';
    	}

    echo '</ul>';

    if ($return_data)
    {
	    $offset = ($currentPage - 1)  * 20;
		$results = $wpdb->get_results( $_QUERY_RICERCA. " ". $offset );

		return $results;
    }


}




/***
	PULISCI AS_
**/
function pulisci_as( $value )
{
	return str_replace("as_", "", $value);
}


/***
	OVERRIDE WOOCOMMERCE WIDGET
**/

add_action( 'widgets_init', 'override_woocommerce_widgets', 15 );
function override_woocommerce_widgets() {


	$current_user = wp_get_current_user();
	if (trim($current_user->versione) == "002") :

		// Widget Filter
		if ( class_exists( 'WC_Widget_Layered_Nav' ) ) {

			unregister_widget( 'WC_Widget_Layered_Nav' );
			include_once( 'widgets/class-wc-widget-layered-nav.php' );
			register_widget( 'Elitcar_WC_Widget_Layered_Nav' );

		}


		// Widget Actived Filter
		if ( class_exists( 'WC_Widget_Layered_Nav_Filters' ) ) {

			unregister_widget( 'WC_Widget_Layered_Nav_Filters' );
			include_once( 'widgets/class-wc-widget-layered-nav-filters.php' );
			register_widget( 'Elitcar_WC_Widget_Layered_Nav_Filters' );

		}


	endif;

}


function custom_search_form( $form, $value = "Search", $post_type = 'post' ) {


    $form_value = $_GET['s']; //(isset($value)) ? $value : attribute_escape(apply_filters('the_search_query', get_search_query()));
    $form = '
    <h5 class="widget-title" style="font-weight:bold; margin-bottom:6px;">CERCA</h5>
    <form method="get" id="searchform" action="' . get_option('home') . '/" >
    <div style="margin-bottom:18px;">
        <input type="hidden" name="post_type" value="'.$post_type.'" />
        <input style="padding:5px;" type="text" placeholder="Cerca" value="' . $form_value . '" name="s" id="s" />
        <input style="line-height: 28px;" type="submit" id="searchsubmit" value="'.attribute_escape(__('Search')).'" />
    </div>
    </form>';
    return $form;
}


/** STATISTICHE **/

// Come ci hanno conosciuti
add_shortcode("statistiche_comecihannoconosciuto","statistiche_comecihannoconosciuto");
function statistiche_comecihannoconosciuto()
{
	global $wpdb;
	$query = "SELECT meta_value,COUNT(*) as numero FROM wp_postmeta WHERE meta_key LIKE '%come%' GROUP BY meta_value";
	$results = $wpdb->get_results($query);

	echo '<table style="width:100%;">';

	echo '<tr>';
		echo '<th style="background:#eaeaea; padding:5px;">Canale</th><th style="background:#eaeaea; padding:5px;">Numero</th>';
	echo '</tr>';
	foreach ($results as $value) {

		echo '<tr>';
			echo '<td style="padding:5px;">'.utf8_decode( $value->meta_value ).'</td>';
			echo '<td style="padding:5px;">'.$value->numero.'</td>';
		echo '</tr>';

	}

	echo '</table>';

}


// Vendita per salonisti
add_shortcode("vendite_per_salonisti", "vendite_per_salonisti");
function vendite_per_salonisti()
{


	global $wpdb;

	$args = array(
		'role'         => 'salonista'
	 );
	$users = get_users( $args );

	$index = 1;

	//class="generic_table table_contratti"
	echo '<table style="width:100%;" class="generic_table table_contratti" >';

		echo '<tr>';
			//echo '<th align="left"></th>';
			//echo '<th align="left">Email</th>';
			echo '<th align="left">Salone</th>';
			echo '<th align="left">Riferimento</th>';
			echo '<th align="left">Telefono</th>';
			echo '<th align="left">Indirizzo</th>';
			echo '<th align="left">N. Acquisti</th>';
			echo '<th align="left">Data Acquisto</th>';
		echo '</tr>';
	foreach ($users as $user)
	{

		$dettagliAcquisto = autoAcquistate($user->ID);

		$telefoni = null;
		if (!empty($user->cellulare))
		{
			$telefoni[] = $user->cellulare;
		}

		if (!empty($user->telefono))
		{
			$telefoni[] = $user->telefono;
		}

		echo '<tr>';

			echo '<td><span style="padding:8px; font-weight:bold;font-size:12px;">'.$user->ragione_sociale."</span></td>";
			echo '<td><span style="padding:8px; font-weight:bold;font-size:12px;">'.$user->riferimento."</span></td>";
			echo '<td><span style="padding:8px; font-weight:bold;font-size:12px;">'.implode(" / ",$telefoni)."</td>";
			echo '<td><span style="padding:8px; font-weight:bold;font-size:12px;">'.$user->citta." ".$user->indirizzo.", ".$user->cap.", ".$user->provincia."</span></td>";
			echo '<td><span style="padding:8px; font-weight:bold;font-size:12px;">'.$dettagliAcquisto['numeroAcquisti'].'</span></td>';
			echo '<td><span style="padding:8px; font-weight:bold;font-size:12px;">'.$dettagliAcquisto['dataAcquisto'].'</span></td>';
		echo '</tr>';

		$index++;

	}
	echo '</table>';
}

function autoAcquistate($user_id)
{
	global $wpdb;

	$results = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_author = '$user_id' AND post_type= 'product'");
	$data['numeroAcquisti'] = count($results);

	$data['dataAcquisto'] = count($results);


	$results = $wpdb->get_results("SELECT meta_value FROM wp_posts as wp, wp_postmeta as wpm WHERE wp.post_author = '$user_id' AND wp.ID = wpm.post_id AND wpm.meta_key = 'data_venduta' ORDER BY wpm.meta_value DESC limit 1");
	//print_r($results);
	if (empty($results[0]->meta_value))
	{
		$data_val = "-";
	}
	else
	{
		$data_val = date("d/m/Y",$results[0]->meta_value);
	}
	$data['dataAcquisto'] = $data_val;

	return $data;

}


//Statistiche per venditore
add_shortcode("statistiche_per_venditore", "statistiche_per_venditore");
function statistiche_per_venditore()
{



	global $wpdb;

	if (!empty($_POST['data_inizio']))
	{
		$data_inizio = $_POST['data_inizio'];
		$data_inizio = str_replace('/', '-', $data_inizio);
		$data_inizio = strtotime($data_inizio);
		$data_inizio_val = date("d/m/Y",$data_inizio);
	}
	else
	{
		$data_inizio = strtotime( "2018-01-01" );
	}

	if (!empty($_POST['data_fine']))
	{
		$data_fine = $_POST['data_fine'];
		$data_fine = str_replace('/', '-', $data_fine);
		$data_fine = strtotime($data_fine);

		$data_fine_val = date("d/m/Y",$data_fine);
	}
	else
	{
		$data_fine = strtotime( "2018-12-31" );
	}

	//$query = 'SELECT wpu.user_login,COUNT(*) as numero FROM wp_posts as wp, wp_users wpu WHERE wp.post_status = "venduta" AND wp.post_type = "product" AND wpu.ID = wp.post_author GROUP BY wp.post_author ORDER BY numero DESC';

	if (empty($_GET['uid']))
	{
		$query = 'SELECT wpu.ID,wpu.user_login,COUNT(*) as numero  FROM wp_posts as wp, wp_users wpu,  wp_postmeta as wpm  WHERE  wp.ID = wpm.post_id AND  wpm.meta_key = "data_venduta" AND  wp.post_status = "venduta" AND  wp.post_type = "product" AND  wpu.ID = wp.post_author AND wpm.meta_value > "'.$data_inizio.'" AND wpm.meta_value < "'.$data_fine.'" GROUP BY wp.post_author ORDER BY numero DESC';

		$results = $wpdb->get_results($query);

		echo '<form action="http://jahreswagen-italia.it/?page_id=76152" method="POST" style="margin-bottom:20px;">';
			echo '<input style="margin:5px; padding:5px;" type="text" value="'.$data_inizio_val.'" placeholder="Data Inizio gg/mm/aaaa" name="data_inizio" />';
			echo '<input style="margin:5px; padding:5px;" type="text" value="'.$data_fine_val.'" placeholder="Data Inizio gg/mm/aaaa" name="data_fine" />';
			echo '<input style="margin:5px; padding:5px;" type="submit" value="Cerca" /><br/>';
		echo '</form>';

		echo '<table style="width:100%;">';

		echo '<tr>';
			echo '<th style="background:#eaeaea; padding:5px;">Venditore</th><th style="background:#eaeaea; padding:5px;">N. Vendite</th>';
		echo '</tr>';
		foreach ($results as $value) {

			echo '<tr>';
				echo '<td style="padding:5px;"><a href="http://jahreswagen-italia.it/?page_id=76152&uid='.$value->ID.'&data_inizio='.$data_inizio.'&data_fine='.$data_fine.'">'.utf8_decode( $value->user_login ).'</a></td>';
				echo '<td style="padding:5px;">'.$value->numero.'</td>';
			echo '</tr>';

		}

		echo '</table>';
	}
	else
	{

		$data_inizio = $_GET['data_inizio'];
		$data_fine = $_GET['data_fine'];

		$query = 'SELECT wpu.ID,wpu.user_login,wp.ID  FROM wp_posts as wp, wp_users wpu,  wp_postmeta as wpm  WHERE wp.post_author = "'.$_GET['uid'].'" AND  wp.ID = wpm.post_id AND  wpm.meta_key = "data_venduta" AND  wp.post_status = "venduta" AND  wp.post_type = "product" AND  wpu.ID = wp.post_author AND wpm.meta_value > "'.$data_inizio.'" AND wpm.meta_value < "'.$data_fine.'"';

		$results = $wpdb->get_results($query);
		$auto_ids = null;
		foreach ($results as $value)
		{
			$auto_ids[] = $value->ID;
		}


		$args = array(
			'post_type' => 'product',
			'orderby' => 'date',
			'order' => 'DESC',
			'author_id' => $_GET['uid'],
			'posts_per_page' => -1,
			'post__in' => $auto_ids
		);

		// Set the query
		$products = new WP_Query( $args );

		echo '<a href="http://jahreswagen-italia.it/?page_id=76152">Torna Indietro</a><br/><br/>';

		echo '<table style="width:100%">';
		echo '<tr>';
			//<th style="background:#eaeaea; padding:5px;">Prezzo Vendita</th>
			echo '<th style="background:#eaeaea; padding:5px;">Auto</th><th style="background:#eaeaea; padding:5px;">Telaio</th>';
		echo '</tr>';
		if ( $products->have_posts() ) :
			while ( $products->have_posts() ) : $products->the_post();
				echo '<tr>';
					echo '<td  style="padding:5px;"><b>( '.get_the_ID().' )</b> - '.get_the_title().'</td>';
					echo '<td  style="padding:5px;">'.get_post_meta(get_the_ID(), "_sku", true).'</td>';
					//echo '<td  style="padding:5px;">'.leggiPrezzoVenduto(get_the_ID()).'</td>';
				echo '</tr>';
			endwhile;
			wp_reset_postdata();
		endif;
		echo '</table>';

	}
}

function leggiPrezzoVenduto($aid)
{
	global $wpdb;
	$query = "SELECT * FROM contratti_pt_list as cpl, contratti_pt as cp WHERE cpl.auto_id = '$aid' AND cp.cid = cpl.id AND cp.meta_key = 'daticontratto_prezzototale' ";
	$results = $wpdb->get_results($query);
	$results = $results[0]->meta_value;

	return $results;
}



/** SANDBOX **/
add_shortcode("sandbox","sandbox");
function sandbox()
{

	$cSession = curl_init();

	curl_setopt($cSession,CURLOPT_URL,"https://culturedigitali.com/wp-content/plugins/culturedigitali_toolbox/api/pdf_join_upload.php?act=upload_from_remote");
	curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($cSession,CURLOPT_HEADER, false);

	$result=curl_exec($cSession);

	curl_close($cSession);

	echo $result;

/*    ob_clean();
	header("Cache-Control: maxage=1");
	header("Pragma: public");
    header("Content-type: application/pdf");

    header("Content-Disposition: inline;  filename=".$result.".pdf");
    header("Content-Description: Jahreswagen-Italia");
    header("Content-Transfer-Encoding: binary");
    header('Content-Length: ' . filesize("https://culturedigitali.com//wp-content/plugins/culturedigitali_toolbox/uploads/join_pdf/".$result.".pdf"));
    //echo $this->output;
    readfile("https://culturedigitali.com//wp-content/plugins/culturedigitali_toolbox/uploads/join_pdf/".$result.".pdf");*/

}

?>
