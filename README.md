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

Run `php artisan config:publish boparaiamrit\facebook` and modify the config file with your own informations.


## Examples

Get Login Url // helper method to get login url
 for ur app with scope specify
	Route::get('/', function()
	{
		return Facebook::loginUrl();
	});
