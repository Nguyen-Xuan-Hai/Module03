<?php


namespace App\Http\Services;


use App\Http\Repositories\CategoryRepository;

class CategoryService
{
    protected CategoryRepository $cateRepo;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->cateRepo = $categoryRepository;
    }

    function getAll(){
        return $this->cateRepo->getAll();
    }

    function findById($id){
        return $this->cateRepo->findById($id);
    }
}
