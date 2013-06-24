<div>
    <?php 
    if($contact['Image']>''){ ?>
    	<img src="<?= base_url('/public/images/tmp/'.$contact['Image']); ?>">
    <?php } ?>
	<h3><?= $contact['Name'] ?></h3>
	<p><?= $contact['Project'] ?></p>
</div>

<div>
	<?= form_open('brad/send'); ?>
	<?= form_hidden('email',$contact['Email']); ?><br>
	<h4>Respond back:</h4>
	<?= form_textarea('body'); ?><br><br>
	<?= form_submit('','Send'); ?>
	<?= form_close(); ?>
</div>
