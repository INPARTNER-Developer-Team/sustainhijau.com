<?php

namespace Dreainno\FontAwesomeLatestLinks\Components;

use Cms\Classes\ComponentBase;
use Dreainno\FontAwesomeLatestLinks\Plugin;
use Dreainno\FontAwesomeLatestLinks\Models\Settings;


/**
 * Class FontAwesomeLatestLink
 *
 * @package Dreainno\fontawesomelatestlinks
 */
class FontAwesomeLatestLink extends ComponentBase
{
    const NAME = 'fontawesomelatestlinks';

    /**
     * Returns information about this component, including name and description
     */
    public function componentDetails(): array
    {
        return [
            'name'        => Plugin::LOCALIZATION_KEY . 'components.fontawesomelatestlinks.name',
            'description' => Plugin::LOCALIZATION_KEY . 'components.fontawesomelatestlinks.description'
        ];
    }

    /**
     * Query the tag and posts belonging to it
     */
    public function onRun()
    {
        /** @var Settings $settings */
        $settings = Settings::instance();

        $this->addCss(
            $settings->fontAwesomeLatestLink(),
            $settings->fontAwesomeLatestLinkAttributes()
        );
    }
}
