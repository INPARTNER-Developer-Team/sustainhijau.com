<?php

namespace Dreainno\FontAwesomeLatestLinks\Updates;

use DB;
use Schema;
use October\Rain\Database\Updates\Migration;

/**
 * Class UpdateSettingsTo5120
 *
 * @package Dreainno\FontAwesomeLatestLinks\Updates
 */
class Update_settings1_3 extends UpdateSettingsAbstract
{
   
    protected static $PREVIOUS_FONTAWESOME_LINK_ATTRIBUTES =   [
        [
            'attribute' => 'integrity',
            'value'     => 'sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/'
        ],
        [
            'attribute' => 'crossorigin',
            'value'     => 'anonymous'
        ]
    ];
   
    protected static $NEW_FONTAWESOME_LINK_ATTRIBUTES =   [
        [
            'attribute' => 'integrity',
            'value'     => 'SHA-256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ='
        ],
        [
            'attribute' => 'crossorigin',
            'value'     => 'anonymous'
        ]
    ];
}