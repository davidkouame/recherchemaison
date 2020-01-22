<?php namespace bootnetcrasher\Parametre\Models;

use Model;

/**
 * Model
 */
class CategorieMaisonModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bootnetcrasher_parametre_categorie_maison';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
