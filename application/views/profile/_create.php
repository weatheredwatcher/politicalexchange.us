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


$name = array(
              'name'        => 'name',
              'id'          => 'name',
              'value'       => 'Name',
              'maxlength'   => '100',
              'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );

$email = array(
              'name'        => 'email',
              'id'          => 'email',
              'value'       => 'Email',
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


//TODO:This is the spot where we upload the avatar...I am thinking it should be a pointer to a resource as it can be an image or a video...maybe a modal dialog box pops up and gives us a media manager, returning the id?
$attributes = array('class' => 'profile', 'id' => 'profile_form');
$campaign_name = array(
		     'name'        => 'campaign_name',
		     'id'          => 'campaign_name',
		     'value'       => 'Campaign Name',
		     'maxlength'   => '100',
		     //'size'        => '50',
		     'onClick'     => 'form_onCLick()',
		     'onFocus'     => 'form_onFocus()'
		      );

$address1 = array(
		     'name'        => 'address1',
		     'id'          => 'address1',
		     'value'       => 'address2',
		     'maxlength'   => '100',
		    // 'size'        => '50',
		     'onClick'     => 'form_onCLick()',
		     'onFocus'     => 'form_onFocus()'
		      );
		
$address2 = array(
		     'name'        => 'address2',
		     'id'          => 'address2',
		     'value'       => 'address2',
		     'maxlength'   => '100',
		     //'size'        => '50',
		     'onClick'     => 'form_onCLick()',
		     'onFocus'     => 'form_onFocus()'
		      );
		
$city = array(
              'name'        => 'city',
              'id'          => 'city',
              'value'       => 'city',
              'maxlength'   => '100',
              //'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );

$state = array(
              'name'        => 'state',
              'id'          => 'state',
              'value'       => 'state',
              'maxlength'   => '100',
              //'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );


$zip = array(
              'name'        => 'zip',
              'id'          => 'zip',
              'value'       => 'zip',
              'maxlength'   => '100',
              //'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );


$phone = array(
	'name'        => 'phone',
      'id'          => 'phone',
      'value'       => 'phone',
      'maxlength'   => '100',
      //'size'        => '50',
      'onClick'     => 'form_onCLick()',
      'onFocus'     => 'form_onFocus()'
);
$fax = array(
	'name'        => 'fax',
      'id'          => 'fax',
      'value'       => 'fax',
      'maxlength'   => '100',
      //'size'        => '50',
      'onClick'     => 'form_onCLick()',
      'onFocus'     => 'form_onFocus()'
);
$website_url = array(
	'name'        => 'website_url',
      'id'          => 'website_url',
      'value'       => 'Website Url',
      'maxlength'   => '100',
      //'size'        => '50',
      'onClick'     => 'form_onCLick()',
      'onFocus'     => 'form_onFocus()'
);
$about_me = array(
	'name'        => 'about_me',
      'id'          => 'about_me',
      'value'       => '',
      //'maxlength'   => '100',
      //'size'        => '50',
      'onClick'     => 'form_onCLick()',
      'onFocus'     => 'form_onFocus()'
);
$party_affiliation = array(
	'name'        => 'party_affiliation',
      'id'          => 'party_affiliation',
      'value'       => '',
      'maxlength'   => '100',
      //'size'        => '50',
      'onClick'     => 'form_onCLick()',
      'onFocus'     => 'form_onFocus()'
);
$running_for = array(
	'name'        => 'running_for',
      'id'          => 'running_for',
      'value'       => 'Position Running For',
      'maxlength'   => '100',
      'size'        => '50',
      'onClick'     => 'form_onCLick()',
      'onFocus'     => 'form_onFocus()'
);
$currently_in_office = array(
	'name'        => 'currently_in_office',
      'id'          => 'currently_in_office',
      'type'       => 'checkbox',
      //'maxlength'   => '100',
      //'size'        => '50',
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


echo form_open('profile/insert_profile', $attributes);
echo form_fieldset('Login Details');
echo form_label('Username', 'login');
echo form_input($login).'<br />';
echo form_label('Full Name', 'name');
echo form_input($name).'<br />';
echo form_label('Email', 'email');
echo form_input($email).'<br />';
echo form_label('Password', 'password');
echo form_input($password).'<br />';
echo form_fieldset_close();

echo form_fieldset('Campaign Information');
echo form_label('Campaign Name', 'campaign_name');
echo form_input($campaign_name).'<br />';
echo form_fieldset('Address');
echo form_input($address1).'<br />';
echo form_input($address2).'<br />';
echo form_input($city).'<br />';
echo form_input($state);
echo form_input($zip).'<br />';
echo form_fieldset_close();
echo form_label('Phone', 'phoe');
echo form_input($phone).'<br />';
echo form_label('Fax', 'fax');
echo form_input($fax).'<br />';
echo form_label('Website', 'website_url');
echo form_input($website_url).'<br />';
echo form_fieldset('Profile Information');
echo form_label('About Me', 'about_me').'<br />';
echo form_textarea($about_me).'<br />';
echo form_label('Party Affiliation', 'party_affiliation');
echo form_input($party_affiliation).'<br />';
echo form_label('Running for', 'running_for');
echo form_input($running_for).'<br />';
echo form_label('Currently in Office', 'currently_in_office');
echo form_checkbox($currently_in_office);

echo form_fieldset_close();
echo form_submit('submit', 'Submit');
echo form_close();
?>