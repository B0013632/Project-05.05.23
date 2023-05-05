<?php

namespace App\Repositories;

use App\Models\employees;
use App\Repositories\BaseRepository;

/**
 * Class employeesRepository
 * @package App\Repositories
 * @version May 4, 2023, 10:47 pm UTC
*/

class employeesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'firstname',
        'surname',
        'jobtitle',
        'dateofbirth',
        'full_time'
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
        return employees::class;
    }
}
