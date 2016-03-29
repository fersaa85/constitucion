<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'register';


    protected $fillable = ['name','email','ages','study','sex','localite','ocupation','essay'];
}
