<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class BlogcategoryRepository.
 */
class BlogcategoryRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        //return YourModel::class;
    }
    public function edit($id, BlogcategoryRepository $categoryRepository)
    {
        //return YourModel::class;
    }
}
