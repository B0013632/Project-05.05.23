<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class tables
 * @package App\Models
 * @version May 5, 2023, 12:24 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $orders
 * @property integer $capacity
 */
class tables extends Model
{


    public $table = 'tables';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'capacity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'capacity' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'capacity' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class, 'table_id');
    }
}
