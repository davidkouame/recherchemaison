<?php namespace bootnetcrasher\House\Models;

use Model;

/**
 * Model
 */
class DemarcheurModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bootnetcrasher_house_demarcheur';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasOne = [
        'user' => ['Rainlab\User\Models\User', 'key' => 'demarcheur_id']
    ];
}
