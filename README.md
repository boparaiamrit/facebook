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

1. AppId => If you donot have appId then get it fromm facebook developer apps.
2. Secret => Its come with appId.
3. Redirect => Specify redirect url(its your home page eg http://example.com/) after logged in with facebook.
4. Logout => When somebody logout from your site, it redirects to logout url.
5. Scope => These are permission you want from your users.

##Helpers Function

	public function loginUrl(){
	    $params = array(
	      'scope' => Config::get('facebook::scope'),
	      'redirect_uri' => Config::get('facebook::redirect'),
	    );
	    return $this->getLoginUrl($params);
	}

	public function logoutUrl(){
     $params = array( 'next' => Config::get('facebook::logout'));
     return $this->getLogoutUrl($params);
    }


    public function logout(){
     if($this->getUser()){
       $this->destroySession();
     }
    }


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