<?php

namespace Toyopecas\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Toyopecas\Repositories\TopoRepository;
use Toyopecas\Models\Topo;
use Toyopecas\Validators\TopoValidator;

/**
 * Class TopoRepositoryEloquent
 * @package namespace Toyopecas\Repositories;
 */
class TopoRepositoryEloquent extends BaseRepository implements TopoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Topo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
