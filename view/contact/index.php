<h2>If you'd like to ask Brad about a project you'd like him to work on use the following form<br>
	Add an image to give brad an idea of what the project entails</h2>

<?= validation_errors(); ?>

<?= form_open_multipart('contact/create'); ?>
<?= form_label('What is your name','name'); ?>
<?= form_input('name',set_value('name')); ?><br>
<?= form_label('What is your email address','email'); ?>
<?= form_input('email'); ?><br>
<?= form_label('What would you like Brad to do for you'); ?>
<?= form_textarea('project'); ?><br>
<?php $values=array(
	'type'=>'file',
	'name'=>'image',
	'value'=>set_value('image'),
	'size'=>'50'
	);
?>
<?= form_input($values); ?><br>
<?= form_submit('','Submit'); ?>
<?= form_close(); ?>
