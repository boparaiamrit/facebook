<?php 

return array(
	'secret' => array(
		//put your app id and secret
								'appId'  => 'appId',
						  	'secret' => 'secret'
							),
	//Redirect after successfull login
	'redirect' => 'YourSiteURL',
	//When Someone Logout from your Site
	'logout' => 'LogoutPageUrl',
	//you can add scope according to your requirement
	'scope' => 'user_birthday,email,user_hometown,user_location,user_status,user_photos,user_likes,user_education_history'
	);
