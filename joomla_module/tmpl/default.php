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
		<div class="form-check">
			<input class="form-check-input" type="radio" name="flexRadioDefault" id="wp_grid_fr" checked>
			<label class="form-check-label" for="wp_grid_fr">
			Français
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="flexRadioDefault" id="wp_grid_en">
			<label class="form-check-label" for="wp_grid_en">
			Anglais
			</label>
		</div>
	</div>
	
	<div class="align-top form-color d-inline-block m-2">
		<label for="wp_grid_bg_color" class="form-label">Arrière-plan</label>
		<input type="color" class="form-control form-control-color" id="wp_grid_bg_color" value="#f4f1ec">
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
	<object id="wp_grid" data="/media/mod_anirata_wp_grid/img/wp_grid.svg" type="image/svg+xml"></object>
</div>
