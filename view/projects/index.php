<?php foreach($projects as $project): $src=base_url("/public/images/" . $project['Image']); ?>
<img src="<?= $src ?>"><br>
<div>
<?= $project['Detail'] ?>
</div>
<br>
<?php endforeach ?>
