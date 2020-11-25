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
class Update_settings1_2 extends UpdateSettingsAbstract
{
   
    protected static $PREVIOUS_FONTAWESOME_LINK_KEY = 'fontawesome_latest_link';
    protected static $PREVIOUS_FONTAWESOME_LINK_ATTRIBUTES_KEY = 'fontawesome_latest_link_attributes';

    protected static $NEW_FONTAWESOME_LINK_KEY = 'fontawesome_link';
    protected static $NEW_FONTAWESOME_LINK_ATTRIBUTES_KEY = 'fontawesome_link_attributes';
}