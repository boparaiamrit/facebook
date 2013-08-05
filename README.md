# Facebook

Facebook PHP SDK for Laravel

Add `boparaiamrit/facebook` to `composer.json`.

    "boparaiamrit/facebook": "dev-master"
    
Run `composer update` to pull down the latest version of Twitter.

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