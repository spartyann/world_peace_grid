<?php

// No direct access to this file
defined('_JEXEC') or die;

$maxW = $params->get('grid_max_width');
$maxH = $params->get('grid_max_height');

?>

<style>
	.wp_grid{
		text-align: center
	}

	#wp_grid{
		display: inline-block;
		max-width: <?php echo $maxW;?>;
		max-height: <?php echo $maxH;?>;
	}

</style>

<div class="align-top">
	<div class="align-top d-inline-block m-2">
		<div class="form-check" title="May the followers of all religions and spiritual paths work together to create peace among all people on earth.">
			<input class="form-check-input" type="radio" name="wp_grid_lang" id="wp_grid_en" checked>
			<label class="form-check-label" for="wp_grid_en">
			Anglais (conseillé)
			</label>
		</div>
		<div class="form-check" title="Puissent toutes les personnes qui suivent un chemin spirituel ou religieux travailler ensemble pour apporter la paix à tous les peuples de la Terre.">
			<input class="form-check-input" type="radio" name="wp_grid_lang" id="wp_grid_fr_1">
			<label class="form-check-label" for="wp_grid_fr_1">
			Français 1
			</label>
		</div>
		<div class="form-check" title="Puissent toutes les personnes qui suivent un chemin spirituel ou religieux œuvrer ensemble pour apporter la paix sur la Terre.">
			<input class="form-check-input" type="radio" name="wp_grid_lang" id="wp_grid_fr_2">
			<label class="form-check-label" for="wp_grid_fr_2">
			Français 2
			</label>
		</div>
	</div>

	<div class="align-top d-inline-block m-2" style="max-width:150px">
		<label for="wp_grid_wood" class="form-label">Aspect bois</label>
		<input type="range" class="form-range" min="0" max="50" value="30" id="wp_grid_wood" >
	</div>

	<div class="align-top form-check d-inline-block m-2">
		<input class="form-check-input" type="checkbox" value="" id="wp_grid_wood_arround">
		<label class="form-check-label" for="wp_grid_wood_arround">
			Aspect bois autour<br/>de la grille
		</label>
	</div>
	
	<div class="align-top form-color d-inline-block m-2">
		<label for="wp_grid_bg_color" class="form-label">Arrière-plan</label>
		<input type="color" class="form-control form-control-color" id="wp_grid_bg_color" value="#F4D488">
	</div>

	<div class="align-top form-color d-inline-block m-2">
		<label for="wp_grid_border_color" class="form-label">Bordure</label>
		<input type="color" class="form-control form-control-color" id="wp_grid_border_color" value="#4b2626">
	</div>

	<div class="align-top form-color d-inline-block m-2">
		<label for="wp_grid_icon_color" class="form-label">Icônes</label>
		<input type="color" class="form-control form-control-color" id="wp_grid_icon_color" value="#4b2626">
	</div>

	<div class="align-top form-color d-inline-block m-2">
		<label for="wp_grid_text_color" class="form-label">Texte</label>
		<input type="color" class="form-control form-control-color" id="wp_grid_text_color" value="#4b2626">
	</div>

	
	<div class="align-top d-inline-block m-2">
		<label for="wp_grid_text_color" class="form-label">Taille en cm (PDF)</label>
		<input id="wp_grid_size" type="number" class="form-control " style="width: 70px" min="2" max="50" value="20"/>
	</div>

	<div class="align-top d-inline-block m-2">
		<p><button class="btn btn-primary" type="button" onclick="exportToPdf(false)">Exporter en PDF A4</button></p>
		<p><button class="btn btn-primary" type="button" onclick="exportToPdf(true)">Exporter en PDF A3</button></p>
	</div>

</div>


<div class="wp_grid">
	<object id="wp_grid" data="/media/mod_anirata_wp_grid/img/wp_grid.svg?v=1.5" type="image/svg+xml"></object>
</div>
