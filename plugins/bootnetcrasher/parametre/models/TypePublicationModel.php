<?php namespace Bootnetcrasher\Parametre\Models;

use Model;

/**
 * Model
 */
class TypePublicationModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'bootnetcrasher_parametre_type_publication';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
