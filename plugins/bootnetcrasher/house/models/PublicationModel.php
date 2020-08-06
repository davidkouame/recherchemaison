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
        "typepublication" => ["bootnetcrasher\Parametre\Models\TypePublicationModel", "key" => "type_publication_id", "otherKey" => "id"],
        "agence" => ["bootnetcrasher\House\Models\AgenceModel", "key" => "agence_id", "otherKey" => "id"],
        "demarcheur" => ["bootnetcrasher\House\Models\DemarcheurModel", "key" => "demarcheur_id", "otherKey" => "id"],
    ];

    public $attachOne = [
        'cover' => \System\Models\File::class
    ];

    public $attachMany = [
        'photos' => 'System\Models\File'
    ];

    public function beforeCreate(){
        $this->slot = str_replace(' ', '-', $this->libelle);
        /*if (BackendAuth::check()) {
            $this->agence_id = BackendAuth::getUser()->id;
        }*/
    }

    /*public function beforeSave(){
        $this->slot = strtolower(str_replace(' ', '-', $this->libelle));
        if (BackendAuth::check()) {
            $this->agence_id = BackendAuth::getUser()->id;
        }
    }*/

    public function afterCreate(){
        $this->generateReference();
        $this->slot = $this->reference;
        // $this->published_at = now();
        //+strtolower(str_replace(' ', '-', $this->libelle));
        $this->save();
    }

    public function generateReference(){
        $this->reference = strtoupper(base_convert($this->id+1000000000, 10, 16)) ;
    }

    // Scope de filtre de la liste des publications 
    public function scopeFilterPublication($query, $filter) {
        // Les publications en attente de validation
        if ($filter == ['encours'])
            return $query->where('statut_publication', '=', 1)->whereNull('scrapping');

        // Les publications refusées 
        if ($filter == ['refusees'])
            return $query->where('statut_publication', '=', 3);
        
        // Les publications accecptées
        if ($filter == ['acceptees'])
            return $query->where('statut_publication', '=', 2);
        
        // Les publications proposées par le scrapping
        if ($filter == ['scrapping'])
            return $query->whereNotNull('scrapping')->where('statut_publication', '=', 1);
    }
}
