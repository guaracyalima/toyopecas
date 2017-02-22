<?php

namespace Toyopecas\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Toyopecas\Repositories\ProdutosRepository;
use Toyopecas\Models\Produtos;
use Toyopecas\Validators\ProdutosValidator;

/**
 * Class ProdutosRepositoryEloquent
 * @package namespace Toyopecas\Repositories;
 */
class ProdutosRepositoryEloquent extends BaseRepository implements ProdutosRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Produtos::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
