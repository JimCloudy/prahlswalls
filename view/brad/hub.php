<?php foreach($contacts as $contact): 
    if($contact['Image']>''){ ?>
    	<img src="<?= base_url('/public/images/tmp/'.$contact['Image']); ?>">
    <?php } ?>
	<h3><?= $contact['Name'] ?></h3>
	<p><?= $contact['Project'] ?></p>
<?php endforeach ?>

	