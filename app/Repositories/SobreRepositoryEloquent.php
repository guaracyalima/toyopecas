<?php

namespace Toyopecas\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Toyopecas\Repositories\SobreRepository;
use Toyopecas\Models\Sobre;
use Toyopecas\Validators\SobreValidator;

/**
 * Class SobreRepositoryEloquent
 * @package namespace Toyopecas\Repositories;
 */
class SobreRepositoryEloquent extends BaseRepository implements SobreRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Sobre::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
