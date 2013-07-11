<?php foreach($projects as $project): $src=base_url("/public/img/" . $project['Image']); ?>
	<div class="container">
		<div class="row">
			<div class="span5"></div>
			<div class="span2">
				<img src="<?= $src ?>">
			</div>
			<div class="span5"></div>
		</div>
		<div class="row">
			<div class="span2"></div>
			<div class="span8">
				<p><?= $project['Detail'] ?></p>
			</div>
			<div class="span2"></div>				
		</div>
		<hr>
	</div>
	
<?php endforeach ?>
