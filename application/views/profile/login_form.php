<?php

$login = array(
              'name'        => 'login',
              'id'          => 'login',
              'value'       => 'Username',
              'maxlength'   => '100',
              'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );


$password = array(
             'name'        => 'password',
             'id'          => 'password',
             'value'       => '',
             'maxlength'   => '100',
		  	 'type'        => 'password',
             'size'        => '50',
             'onClick'     => 'form_onCLick()',
             'onFocus'     => 'form_onFocus()'
              );


$submit = array(
    'name' => 'submit',
    'class' => 'submit',
	'width' => '100',
    'value' => 'Submit',
    'type' => 'submit'
);
$attributes = array('class' => 'login', 'id' => 'login_form');

echo form_open('profile/auth', $attributes);
echo form_fieldset('Login');
echo form_label('Username', 'login');
echo form_input($login).'<br />';
echo form_label('Password', 'password');
echo form_input($password).'<br />';
echo form_fieldset_close();
echo form_submit('submit', 'Submit');
echo form_close();
?>