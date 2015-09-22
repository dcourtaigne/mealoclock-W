<?php
include('header.php');

?>
<section>
	<h1>Créer un événement</h1>
	<form>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Nom de l'événement">
  		</div>
		<div class="form-group">
			<select class="form-control" name="communaute">
				<option value="0">Communauté</option>
				<option value="1">Végétariens</option>
				<option value="2">Végans</option>
				<option value="3">Sans Gluten</option>
				<option value="4">Sans Lactose</option>
			</select>
  		</div>
  		<div class="form-group">
			<textarea class="form-control" placeholder="Détails"></textarea>
  		</div>
  		<div class="form-group">
			<select class="form-control" name="lieu">
				<option value="0">Lieu</option>
				<option value="1">Paris 1er</option>
				<option value="2">Paris 2e</option>
				<option value="3">Paris 3e</option>
				<option value="4">Paris 4e</option>
				<option value="5">Paris 5e</option>
				<option value="6">Paris 6e</option>
				<option value="7">Paris 7e</option>
				<option value="8">Paris 8e</option>
				<option value="9">Paris 9e</option>
				<option value="10">Paris 10e</option>
				<option value="11">Paris 11e</option>
				<option value="12">Paris 12e</option>
				<option value="13">Paris 13e</option>
				<option value="14">Paris 14e</option>
				<option value="15">Paris 15e</option>
				<option value="16">Paris 16e</option>
				<option value="17">Paris 17e</option>
				<option value="18">Paris 18e</option>
				<option value="19">Paris 19e</option>
				<option value="20">Paris 20e</option>
			</select>
  		</div>
  		<div class="form-group">
			<input type="date" class="form-control" placeholder="Date de l'événement (format dd/mm/yyyy)">
  		</div>
  		<div class="form-group">
			<select class="form-control" name="heure">
				<option value="0">Heure</option>
				<option value="1">8:00</option>
				<option value="2">8:30</option>
				<option value="3">9:00</option>
				<option value="4">9:30</option>
				<option value="5">10:00</option>
				<option value="6">10:30</option>
				<option value="7">11:00</option>
				<option value="8">11:30</option>
				<option value="9">12:00</option>
				<option value="10">12:30</option>
				<option value="11">13:00</option>
				<option value="12">13:30</option>
				<option value="13">14:00</option>
				<option value="14">14:30</option>
				<option value="15">15:00</option>
				<option value="16">15:30</option>
				<option value="17">16:00</option>
				<option value="18">16:30</option>
				<option value="19">17:00</option>
				<option value="20">17:30</option>
				<option value="21">18:00</option>
				<option value="22">18:30</option>
				<option value="23">19:00</option>
				<option value="24">19:30</option>
				<option value="25">20:00</option>
				<option value="26">20:30</option>
				<option value="27">21:00</option>
				<option value="28">21:30</option>
				<option value="29">22:00</option>
				<option value="30">22:30</option>
				<option value="31">23:00</option>
			</select>
  		</div>
  		<div class="form-group">
			<input type="number" class="form-control" placeholder="Nombre de participants">
  		</div>
  		<div class="text-center">
			<input type="submit" class="btn btn-primary btn-lg" value="Envoyer" name="submit">
		</div>
	</form>
</section>

<?php
include('footer.php');
?>
