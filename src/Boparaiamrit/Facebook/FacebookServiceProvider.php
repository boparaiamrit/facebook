<?php namespace Boparaiamrit\Facebook;

use Illuminate\Support\ServiceProvider;

class FacebookServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('boparaiamrit/facebook');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['facebook'] = $this->app->share(function($app){
      return new Facebook($app['config']->get('facebook::secret'));
    });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('facebook');
	}

}