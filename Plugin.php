<?php namespace October\Drivers;

use System\Classes\PluginBase;

use Illuminate\Foundation\AliasLoader;
/**
 * Drivers Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Drivers',
            'description' => 'Provider of third party drivers',
            'author'      => 'October',
            'icon'        => 'icon-leaf',
            'homepage'    => 'https://github.com/octoberrain/drivers-plugin'
        ];
    }

    public function boot()
    {
        // Register ServiceProviders
        \App::register('Collective\Remote\RemoteServiceProvider');

        // Register aliases
        $alias = \Illuminate\Foundation\AliasLoader::getInstance();
        $alias->alias('SSH', 'Collective\Remote\RemoteFacade');
    }
}
