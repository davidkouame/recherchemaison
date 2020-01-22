<?php namespace bootnetcrasher\House\Models;

use Model;
use BackendAuth;

/**
 * Model
 */
class PublicationModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bootnetcrasher_house_publication';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        "communes" => ["bootnetcrasher\Parametre\Models\CommuneModel", "key" => "commune_id", "otherKey" => "id"],
        "villes" => ["bootnetcrasher\Parametre\Models\VilleModel", "key" => "ville_id", "otherKey" => "id"],
        "localisations" => ["bootnetcrasher\Parametre\Models\LocalisationModel", "key" => "localisation_id", "otherKey" => "id"],
    ];

    public $attachOne = [
        'cover' => \System\Models\File::class
    ];

    public $attachMany = [
        'photos' => 'System\Models\File'
    ];

    public function beforeCreate(){
        if (BackendAuth::check()) {
            $this->agence_id = BackendAuth::getUser()->id;
        }
    }
}
