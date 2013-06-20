<h1>Login to get to your goodies</h1>
    <?= validation_errors(); ?>
    <?= form_open('login/verifyLogin'); ?>
    <?= form_label('Username','username'); ?>
    <?= form_input('username'); ?><br>
    <?= form_label('Password','password'); ?>
    <?php
      $data=array(
        'type'=>'password',
        'name'=>'password'
        );
    ?>
    <?= form_input($data); ?><br/>
    <?= form_submit('','Login'); ?>
    <?= form_close(); ?>


