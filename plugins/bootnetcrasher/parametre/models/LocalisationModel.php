<?php namespace bootnetcrasher\Parametre\Models;

use Model;

/**
 * Model
 */
class LocalisationModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bootnetcrasher_parametre_localisation';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $belongsTo = [
        "commune" => ["bootnetcrasher\Parametre\Models\CommuneModel", "key" => "commune_id", "otherKey" => "id"]
    ];
}
