<?php
$form = array(
    'class'     => 'form-horizontal',
    'id' => 'register-form'
);
$label = array(
    'class'     => 'col-sm-12'
);
if ($use_username) {
    $username = array(
        'name'	=> 'username',
        'class'     => 'form-control',
        'id'	=> 'username',
        'value' => set_value('username'),
        'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
        'size'	=> 30,
    );
}
$email = array(
    'name'	=> 'email',
    'class'     => 'form-control',
    'id'	=> 'email',
    'value'	=> set_value('email'),
    'maxlength'	=> 80,
    'size'	=> 30,
);
$password = array(
    'name'	=> 'password',
    'class'     => 'form-control',
    'id'	=> 'password',
    'value' => set_value('password'),
    'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
    'size'	=> 30,
);
$confirm_password = array(
    'name'	=> 'confirm_password',
    'class'     => 'form-control',
    'id'	=> 'confirm_password',
    'value' => set_value('confirm_password'),
    'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
    'size'	=> 30,
);
$captcha = array(
    'name'	=> 'captcha',
    'class'     => 'form-control',
    'id'	=> 'captcha',
    'maxlength'	=> 8,
);
$submit = array(
    'name'	=> 'register',
    'class'     => 'btn btn-primary',
    'id'	=> 'register',
    'value'	=> 'Register',
);
?>
<div class="content">
<?php echo form_open($this->uri->uri_string(), $form); ?>

<?php if ($use_username) { ?>
<div class="form-group">
    <?php echo form_label('Username', $username['id'], $label); ?>
    <div class="col-sm-12"><?php echo form_input($username); ?></div>
    <div class="col-sm-12"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></div>
</div>
<?php } ?>
<div class="form-group">
    <?php echo form_label('Email Address', $email['id'], $label); ?>
    <div class="col-sm-12"><?php echo form_input($email); ?></div>
    <div class="col-sm-12"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></div>
</div>
<div class="form-group">
    <?php echo form_label('Password', $password['id'], $label); ?>
    <div class="col-sm-12"><?php echo form_password($password); ?></div>
    <div class="col-sm-12"><?php echo form_error($password['name']); ?></div>
</div>
<div class="form-group">
    <?php echo form_label('Confirm Password', $confirm_password['id'], $label); ?>
    <div class="col-sm-12"><?php echo form_password($confirm_password); ?></div>
    <div class="col-sm-12"><?php echo form_error($confirm_password['name']); ?></div>
</div>

<?php if ($captcha_registration) {
    if ($use_recaptcha) { ?>
<div class="form-group">
    <div class="col-sm-12">
        <div id="recaptcha_image"></div>
    </div>
    <div class="col-sm-12">
        <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
        <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
        <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-12">
        <div class="recaptcha_only_if_image">Enter the words above</div>
        <div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
    </div>
    <div class="col-sm-12"><input type="text" class="form-control" id="recaptcha_response_field" name="recaptcha_response_field" /></div>
    <div class="col-sm-12"><?php echo form_error('recaptcha_response_field'); ?></div>
    <?php echo $recaptcha_html; ?>
</div>
<?php } else { ?>
<div class="form-group">
    <div class="col-sm-12 text-center">
        <p>Enter the code exactly as it appears:</p>
        <?php echo $captcha_html; ?>
    </div>
</div>
<div class="form-group">
    <?php echo form_label('Confirmation Code', $captcha['id'], $label); ?>
    <div class="col-sm-12"><?php echo form_input($captcha); ?></div>
    <div class="col-sm-12"><?php echo form_error($captcha['name']); ?></div>
</div>
<?php }
} ?>
<div class="form-group text-center">
<?php echo form_submit($submit); ?>
</div>
<?php echo form_close(); ?>
</div>