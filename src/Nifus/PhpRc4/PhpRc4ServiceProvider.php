<?php namespace Nifus\PhpRc4;

use Illuminate\Support\ServiceProvider;

class PhpRc4ServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->package('nifus/PhpRc4');
        $this->app['rc4'] = $this->app->share(function () {
            return new RC4();
        });
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}
    public function boot()
    {

    }

}