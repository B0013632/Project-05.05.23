<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\BaseRepository;

/**
 * Class CustomerRepository
 * @package App\Repositories
 * @version May 4, 2023, 11:43 pm UTC
*/

class CustomerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'firstname',
        'surname',
        'email',
        'phone',
        'vip',
        'comments'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Customer::class;
    }
}
