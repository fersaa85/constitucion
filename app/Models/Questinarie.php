<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questinarie extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'questinarie';


    protected $fillable = ['age',
                            'sex',
                            'school','constitucion_opinion',
                            'constitucion_level',
                            'constitucion_frase',
                            'constitucion_leer',
                            'constitucion_leer_text',
                            'constitucion_no_leer',
                            'constitucion_describe',
                            'constitucion_deacuerdo',
                            'consideras' ];
}
