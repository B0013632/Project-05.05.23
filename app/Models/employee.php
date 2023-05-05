<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class employee
 * @package App\Models
 * @version May 4, 2023, 10:49 pm UTC
 *
 * @property string $firstname
 * @property string $surname
 * @property string $employeetype
 * @property string $dateofbirth
 */
class employee extends Model
{


    public $table = 'employees';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'firstname',
        'surname',
        'employeetype',
        'dateofbirth'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'surname' => 'string',
        'employeetype' => 'string',
        'dateofbirth' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'nullable|string|max:30',
        'surname' => 'nullable|string|max:30',
        'employeetype' => 'nullable|string|max:6',
        'dateofbirth' => 'nullable'
    ];

    
}
