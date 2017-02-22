<?php

namespace Toyopecas\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Toyopecas\Repositories\ServicesRepository;
use Toyopecas\Models\Services;
use Toyopecas\Validators\ServicesValidator;

/**
 * Class ServicesRepositoryEloquent
 * @package namespace Toyopecas\Repositories;
 */
class ServicesRepositoryEloquent extends BaseRepository implements ServicesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Services::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
