<?php namespace bootnetcrasher\House\Models;

use Model;

/**
 * Model
 */
class AgenceModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bootnetcrasher_house_agence';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasOne = [
        'user' => ['Rainlab\User\Models\User', 'key' => 'agence_id']
    ];

    public $belongsTo = [
        "localisation" => ["bootnetcrasher\Parametre\Models\LocalisationModel", "key" => "localisation_id", "otherKey" => "id"],
    ];

    public $attachOne = [
        'agrement' => 'System\Models\File'
    ];
}
