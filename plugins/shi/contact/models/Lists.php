<?php 

namespace SHI\Contact\Models;

use Model;

/**
 * Model
 */
class Lists extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $timestamps = true;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'shi_contact_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
