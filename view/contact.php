<h2>If you'd like to ask Brad about a project you'd like him to work on use the following form<br>
	Add an image to give brad an idea of what the project entails</h2>

<?= validation_errors(); ?>

<?= form_open('contact/create'); ?>
<?= form_label('What is your name','name'); ?>
<?= form_input('name'); ?>
<?= form_close(); ?>
