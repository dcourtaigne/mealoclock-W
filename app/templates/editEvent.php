<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
<section id="createEvent" class="largeurSite container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1><?= $this->e($title) ?></h1>
			<?php if(!empty($message)) {
  						echo '<p class="bg-success">'.$message.'</p>';
						}
			?>
				<form method="POST" action="<?= $this->e($formAction) ?>">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Nom de l'événement" name="event_title" value="<?= $this->e($event['event_title']) ?>">
			  		</div>

					<div class="form-group">
						<select class="form-control" name="community_id">
							<option value="0">Choisissez une communauté</option>

						<?php foreach ($communities as $community){
				       $this->insert('partials/options-communities',['community'=>$community, 'event'=>$event]);
			     }
			     ?>
						</select>
			  		</div>

			  		<div class="form-group">
						<textarea class="form-control" placeholder="Détails" rows="10" name="event_desc"><?= $this->e($event['event_desc']) ?></textarea>
			  		</div>

			  		<div class="form-group">
						<select class="form-control" name="event_location">
							<option value="0">Lieu</option>
							<?php $this->insert('partials/options-location',['event'=>$event]);?>
						</select>
			  		</div>

			  		<div class="form-group">
						<input type="date" class="form-control" name="event_date" min="<?=$this->e($currentDate)?>" value="<?=$this->e($event['event_date'])?>">
			  		</div>

			  		<div class="form-group">
			  			<input type="time" class="form-control" name="event_time" value="<?=$this->e($event['event_time'])?>">
			  		</div>

			  		<div class="form-group">
						<input type="number" class="form-control" placeholder="Nombre de participants" name="event_guests" value="<?=$this->e($event['event_guests'])?>">
			  		</div>

			  		<div class="text-center">
						<input type="submit" class="btn btn-primary btn-lg" value="<?= $this->e($submitName) ?>" name="submit" min="1" max="99">
					</div>
				</form>
		</div>
	</div>
</br>
</section>
<?php $this->stop('main_content') ?>
