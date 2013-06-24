<?php foreach($contacts as $contact): 
	$linkurl = site_url("brad/". $contact['CID']);	
?>

    <div onclick="location.href='<?= $linkurl; ?>'" style="cursor:pointer;">
    <?php 
    if($contact['Image']>''){ ?>
    	<img src="<?= base_url('/public/images/tmp/'.$contact['Image']); ?>">
    <?php } ?>
	<h3><?= $contact['Name'] ?></h3>
	<p><?= $contact['Project'] ?></p>
</div>
<?php endforeach ?>

	