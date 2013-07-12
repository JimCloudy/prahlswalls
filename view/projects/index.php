	<div class="container">
<?php 
	$length = count($projects) - 1;
	$x=0;
	for($x=0;$x<=$length;$x+=2){
?>
		<div class="row">
			<?php
				if($x==$length){
			?>					
			<div class="container">
				<div class="row">
					<div class="span5"></div>
					<div class="span2">
						<?php $src=base_url("/public/img/" . $projects[$x]['Image']); ?>	
						<img src="<?= $src ?>">
					</div>
					<div class="span5"></div>
				</div>
				<div class="row">
					<div class="span2"></div>
					<div class="span8">
						<p><?= $projects[$x]['Detail'] ?></p>
					</div>
					<div class="span2"></div>				
				</div>
			</div>
			<?php 
				}
				else{
					$y=$x+1;
					
			?>
			<div class="container">
				<div class="row">
					<div class="span6">
						<div class="container">
							<div class="row">
								<div class="span2"></div>
								<div class="span2">
									<?php $src=base_url("/public/img/" . $projects[$x]['Image']); ?>
									<img src="<?= $src ?>">
								</div>
								<div class="span2"></div>
							</div>
							<div class="row">
								<div class="span1"></div>
								<div class="span4">
									<p><?= $projects[$x]['Detail'] ?></p>
								</div>
								<div class="span1"></div>				
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="container">
							<div class="row">
								<div class="span1"></div>
								<div class="span4">
									<?php $src=base_url("/public/img/" . $projects[$x]['Image']); ?>
									<img src="<?= $src ?>">
									<p class="pull-right"><?= $projects[$x]['Detail'] ?></p>
								</div>
								<div class="span1"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div> 
		<?php 
		} 
		?>
	</div>


<?php /* foreach($projects as $project): $src=base_url("/public/img/" . $project['Image']); ?>
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
	
<?php endforeach*/ ?>
