<?php
foreach ($profile as $lookup):
	$avatar_path = $lookup->avatar_id;
	
$login = array(
              'name'        => 'login',
              'id'          => 'login',
              'value'       => $lookup->login,
              'maxlength'   => '100',
              'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );


$name = array(
              'name'        => 'name',
              'id'          => 'name',
              'value'       => $lookup->name,
              'maxlength'   => '100',
              'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );

$email = array(
              'name'        => 'email',
              'id'          => 'email',
              'value'       => $lookup->email,
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

$Fdata = array(
			 'name' => 'userfile', 
			 'class' => 'file'
		 	  );
			  
$attributes = array('class' => 'profile', 'id' => 'profile_form');
$campaign_name = array(
		     'name'        => 'campaign_name',
		     'id'          => 'campaign_name',
		     'value'       => $lookup->campaign_name,
		     'maxlength'   => '100',
		     //'size'        => '50',
		     'onClick'     => 'form_onCLick()',
		     'onFocus'     => 'form_onFocus()'
		      );
			  
$twitter = array(
		'name'        => 'twitter',
   	 	'id'          => 'twitter',
    	'value'       => $lookup->twitter,
    	'maxlength'   => '100',
    	//'size'        => '50',
    	'onClick'     => 'form_onCLick()',
    	'onFocus'     => 'form_onFocus()'
		);

$facebook = array(
		  'name'        => 'facebook',
	      'id'          => 'facebook',
	      'value'       => $lookup->facebook,
	      'maxlength'   => '100',
	      //'size'        => '50',
	      'onClick'     => 'form_onCLick()',
	      'onFocus'     => 'form_onFocus()'                                         
			);
			
$youtube_channel = array(
		  'name'        => 'youtube_channel',
	      'id'          => 'youtube_channel',
	      'value'       => $lookup->youtube_channel,
	      'maxlength'   => '100',
	      //'size'        => '50',
	      'onClick'     => 'form_onCLick()',
	      'onFocus'     => 'form_onFocus()'
		  );



$address1 = array(
		     'name'        => 'address1',
		     'id'          => 'address1',
		     'value'       => $lookup->address1,
		     'maxlength'   => '100',
		    // 'size'        => '50',
		     'onClick'     => 'form_onCLick()',
		     'onFocus'     => 'form_onFocus()'
		      );
		
$address2 = array(
		     'name'        => 'address2',
		     'id'          => 'address2',
		     'value'       => $lookup->address2,
		     'maxlength'   => '100',
		     //'size'        => '50',
		     'onClick'     => 'form_onCLick()',
		     'onFocus'     => 'form_onFocus()'
		      );
		
$city = array(
              'name'        => 'city',
              'id'          => 'city',
              'value'       => $lookup->city,
              'maxlength'   => '100',
              //'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );

$state = array(
              'name'        => 'state',
              'id'          => 'state',
              'value'       =>  $lookup->state,
              'maxlength'   => '100',
              //'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );


$zip = array(
              'name'        => 'zip',
              'id'          => 'zip',
              'value'       => $lookup->zip,
              'maxlength'   => '100',
              //'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );


$phone = array(
	'name'        => 'phone',
      'id'          => 'phone',
      'value'       => $lookup->phone,
      'maxlength'   => '100',
      //'size'        => '50',
      'onClick'     => 'form_onCLick()',
      'onFocus'     => 'form_onFocus()'
);
$fax = array(
	'name'        => 'fax',
      'id'          => 'fax',
      'value'       => $lookup->fax,
      'maxlength'   => '100',
      //'size'        => '50',
      'onClick'     => 'form_onCLick()',
      'onFocus'     => 'form_onFocus()'
);
$website_url = array(
	'name'        => 'website_url',
      'id'          => 'website_url',
      'value'       => $lookup->website_url,
      'maxlength'   => '100',
      //'size'        => '50',
      'onClick'     => 'form_onCLick()',
      'onFocus'     => 'form_onFocus()'
);
$about_me = array(
	'name'        => 'about_me',
      'id'          => 'about_me',
      'value'       => $lookup->about_me,
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

$id = $lookup->id;
endforeach;

echo form_open_multipart('profile/update', $attributes);
echo form_hidden('id', $id);
echo form_fieldset('Login Details');
echo '<div id="avatar" style="position:relative; float:right;">';
echo img($avatar_path);
echo '</div>';
echo form_label('Username', 'login');
echo form_input($login).'<br />';
echo form_label('Full Name', 'name');
echo form_input($name).'<br />';
echo form_label('Email', 'email');
echo form_input($email).'<br />';
echo form_label('Password', 'password');
echo form_input($password).'<br />';
echo form_label('Upload Picture', 'avatar_id');
echo form_upload($Fdata);
echo form_fieldset_close();
echo form_fieldset('Social Media');
echo form_label('Twitter', 'twitter');
echo form_input($twitter).'<br />';
echo form_label('Facebook', 'facebook');
echo form_input($facebook).'<br />';
echo form_label('You Tube', 'youtube');
echo form_input($youtube_channel).'<br />';

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
echo form_label('Phone', 'phone');
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
