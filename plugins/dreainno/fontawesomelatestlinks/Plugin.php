<?php namespace Dreainno\FontAwesomeLatestLinks;

use System\Classes\PluginBase;
use Dreainno\FontAwesomeLatestLinks\Components\FontAwesomeLatestLink;
use Dreainno\FontAwesomeLatestLinks\Models\Settings;
use Dreainno\FontAwesomeLatestLinks\FormWidgets\FontAwesomeIconsList;

class Plugin extends PluginBase
{
    const DEFAULT_ICON = 'oc-icon-external-link';

    const LOCALIZATION_KEY = 'dreainno.fontawesomelatestlinks::lang.';

    public function pluginDetails(): array
    {
        return [
            'name'        => self::LOCALIZATION_KEY . 'plugin.name',
            'description' => self::LOCALIZATION_KEY . 'plugin.description',
            'author'      => 'Dreainno',
            'icon'        => self::DEFAULT_ICON,
            'homepage'    => ''
        ];
    }

    public function registerFormWidgets(): array
    {
        return [
            FontAwesomeIconsList::class => FontAwesomeIconsList::DEFAULT_ALIAS
        ];
    }

    public function registerComponents()
    {
        return [
            FontAwesomeLatestLink::class => FontAwesomeLatestLink::NAME,
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => self::LOCALIZATION_KEY . 'settings.name',
                'description' => self::LOCALIZATION_KEY . 'settings.description',
                'icon'        => self::DEFAULT_ICON,
                'class'       => Settings::class,
                'order'       => 100
            ]
        ];
    }
}
