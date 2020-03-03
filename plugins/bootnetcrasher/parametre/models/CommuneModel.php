<?php namespace bootnetcrasher\Parametre\Models;

use Model;

/**
 * Model
 */
class CommuneModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bootnetcrasher_parametre_commune';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $hasMany = [
        'quartiers' => [
            'bootnetcrasher\Parametre\Models\LocalisationModel',
            'key' => 'commune_id',
        ]
    ];
}
