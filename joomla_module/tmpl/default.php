<?php

// No direct access to this file
defined('_JEXEC') or die;

?>

<style>
	.wp_grid{
		text-align: center
	}

	#wp_grid{
		display: inline-block;
		max-width:80vw;
		max-height:75vh;
	}

</style>

<div>
	<form>
		
		<div class="d-inline-block m-2">
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
		
		<div class="form-color d-inline-block m-2">
			<label for="wp_grid_bg_color" class="form-label">Arrière-plan</label>
			<input type="color" class="form-control form-control-color" id="wp_grid_bg_color" value="#f4f1ec">
		</div>

		<div class="form-color d-inline-block m-2">
			<label for="wp_grid_border_color" class="form-label">Bordure</label>
			<input type="color" class="form-control form-control-color" id="wp_grid_border_color" value="#4b2626">
		</div>

		<div class="form-color d-inline-block m-2">
			<label for="wp_grid_icon_color" class="form-label">Icônes</label>
			<input type="color" class="form-control form-control-color" id="wp_grid_icon_color" value="#4b2626">
		</div>

		<div class="form-color d-inline-block m-2">
			<label for="wp_grid_text_color" class="form-label">Texte</label>
			<input type="color" class="form-control form-control-color" id="wp_grid_text_color" value="#4b2626">
		</div>

		
		<div class="d-inline-block m-2">
			<p>Taille de la grille dans le PDF (en cm): <input id="wp_grid_size" type="number" class="form-control d-inline" style="width: 70px" min="2" max="50" value="20"/></p>
			<button class="btn btn-primary" type="button" onclick="exportToPdf(false)">Exporter en PDF A4</button>
			<button class="btn btn-primary" type="button" onclick="exportToPdf(true)">Exporter en PDF A3</button>
		</div>

	</form>
</div>


<div class="wp_grid">
	<object id="wp_grid" data="/media/mod_anirata_wp_grid/img/wp_grid.svg" type="image/svg+xml"></object>
</div>
