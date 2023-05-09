<?php namespace October\Drivers;

use System\Classes\PluginBase;

/**
 * Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails returns information about this plugin.
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Drivers',
            'description' => 'Provider of third party drivers',
            'author' => 'October',
            'icon' => 'icon-leaf',
            'homepage' => 'https://github.com/octoberrain/drivers-plugin'
        ];
    }
}
