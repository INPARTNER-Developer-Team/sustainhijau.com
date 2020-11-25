<?php

namespace Dreainno\FontAwesomeLatestLinks\Models;

use Model;
use System\Behaviors\SettingsModel;

/**
 * Class Settings
 *
 * @package Dreainno\fontawesomelatestlinks\Models
 */
class Settings extends Model {

    const FONTAWESOME_LINK = "https://use.fontawesome.com/releases/v5.13.0/css/all.css";

    const FONTAWESOME_LINK_ATTRIBUTES = [
        [
            'attribute' => 'integrity',
            'value'     => 'SHA-256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ='
        ],
        [
            'attribute' => 'crossorigin',
            'value'     => 'anonymous'
        ]
    ];

    const FONTAWESOME_LINK_KEY = 'fontawesome_link';
    const FONTAWESOME_LINK_ATTRIBUTES_KEY = 'fontawesome_link_attributes';

    const SETTINGS_CODE = 'dreainno_fontawesomelatestlink';

    public $implement = [SettingsModel::class];

    public $settingsCode = self::SETTINGS_CODE;

    public $settingsFields = 'fields.yaml';

    /**
     * @return string
     */
    public function fontAwesomeLatestLink() : string
    {
        $link = !empty($this->{self::FONTAWESOME_LINK_KEY})
            ? (string) $this->{self::FONTAWESOME_LINK_KEY}
            : self::FONTAWESOME_LINK;

        return $link;
    }

    /**
     * @return array
     */
    public function fontAwesomeLatestLinkAttributes(): array
    {
        $rawAttributes = !empty($this->{self::FONTAWESOME_LINK_ATTRIBUTES_KEY})
            ? (array) $this->{self::FONTAWESOME_LINK_ATTRIBUTES_KEY}
            : self::FONTAWESOME_LINK_ATTRIBUTES;

        $attributes = [];

        foreach ($rawAttributes as $attribute) {
            $attributes[$attribute['attribute']] = $attribute['value'];
        }

        return $attributes;
    }
} 