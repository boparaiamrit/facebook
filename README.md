# Facebook

#Note
Please Get New Facebook Package
https://github.com/SammyK/LaravelFacebookSdk

Facebook PHP SDK for Laravel

Add `boparaiamrit/facebook` to `composer.json`.

    "boparaiamrit/facebook": "dev-master"
    
Run `composer update` to pull down the latest version of Facebook.

Now open up `app/config/app.php` and add the service provider to your `providers` array.

    'providers' => array(
        'Boparaiamrit\Facebook\FacebookServiceProvider',
    )

Now add the alias.

    'aliases' => array(
        'Facebook' => 'Boparaiamrit\Facebook\FacebookFacade',
    )


## Configuration

Run `php artisan config:publish boparaiamrit/facebook` and modify the config file with your own informations.

1. AppId => If you donot have appId then get it from facebook developer apps.
2. Secret => Its come with appId.
3. Redirect => Specify redirect url after logged in with facebook.
4. Logout => When somebody logout from your site, it redirects to logout url.
5. Scope => These are permission you want from your users.


## Examples

1. Get Login Url with your credentials and scope.

    `Route::get('/', function()
    {
    	return Facebook::loginUrl();
    });`

2. Get User Id

    `Route::get('/', function()
    {
    	return Facebook::getUser();
    });`

3. Use facebook API

    `Route::get('/', function()
    {
    	$profile = Facebook::api('/me?fields=id,name,first_name,last_name,username,email,gender,birthday,hometown,location,picture.width(100)');
    });`
    
4. Get Logout Url

    `Route::get('/', function()
    {
    	return Facebook::logoutUrl();
    });`
    
5. FQL

    `Route::get('/', function()
    {
    	return Facebook::api(array(
            'method' => 'fql.query',
            'query' => "SELECT uid, sex, username, birthday, education, work FROM user WHERE uid = me()",
        ));
    });`
