<?php

namespace App\Repositories;

use App\Models\customersfromTable;
use App\Repositories\BaseRepository;

/**
 * Class customersfromTableRepository
 * @package App\Repositories
 * @version May 4, 2023, 11:39 pm UTC
*/

class customersfromTableRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return customersfromTable::class;
    }
}
