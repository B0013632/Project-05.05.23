<?php

namespace App\Repositories;

use App\Models\tables;
use App\Repositories\BaseRepository;

/**
 * Class tablesRepository
 * @package App\Repositories
 * @version May 5, 2023, 12:24 am UTC
*/

class tablesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'capacity'
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
        return tables::class;
    }
}
