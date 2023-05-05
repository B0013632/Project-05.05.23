<?php

namespace App\Repositories;

use App\Models\employee;
use App\Repositories\BaseRepository;

/**
 * Class employeeRepository
 * @package App\Repositories
 * @version May 4, 2023, 10:49 pm UTC
*/

class employeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'firstname',
        'surname',
        'employeetype',
        'dateofbirth'
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
        return employee::class;
    }
}
