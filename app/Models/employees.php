<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class employees
 * @package App\Models
 * @version May 4, 2023, 10:47 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $orders
 * @property \Illuminate\Database\Eloquent\Collection $shifts
 * @property string $firstname
 * @property string $surname
 * @property string $jobtitle
 * @property string $dateofbirth
 * @property boolean $full_time
 */
class employees extends Model
{


    public $table = 'employees';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'firstname',
        'surname',
        'jobtitle',
        'dateofbirth',
        'full_time'
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
        'jobtitle' => 'string',
        'dateofbirth' => 'date',
        'full_time' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'nullable|string|max:30',
        'surname' => 'nullable|string|max:30',
        'jobtitle' => 'nullable|string|max:30',
        'dateofbirth' => 'nullable',
        'full_time' => 'required|boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class, 'employee_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function shifts()
    {
        return $this->hasMany(\App\Models\Shift::class, 'employee_id');
    }
}
