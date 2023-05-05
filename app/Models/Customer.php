<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Customer
 * @package App\Models
 * @version May 4, 2023, 11:43 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $orders
 * @property string $firstname
 * @property string $surname
 * @property string $email
 * @property string $phone
 * @property boolean $vip
 * @property string $comments
 */
class Customer extends Model
{


    public $table = 'customers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'firstname',
        'surname',
        'email',
        'phone',
        'vip',
        'comments'
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
        'email' => 'string',
        'phone' => 'string',
        'vip' => 'boolean',
        'comments' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'nullable|string|max:30',
        'surname' => 'nullable|string|max:30',
        'email' => 'nullable|string|max:50',
        'phone' => 'nullable|string|max:20',
        'vip' => 'required|boolean',
        'comments' => 'nullable|string|max:100'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class, 'customer_id');
    }
}
