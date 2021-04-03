<?php


namespace App\Http\Services;


use App\Http\Repositories\BillRepository;
use App\Models\Bill;
use Illuminate\Support\Facades\Storage;

class BillService
{
    protected BillRepository $billRepository;

    public function __construct(BillRepository $billRepository)
    {
        $this->billRepository = $billRepository;
    }

    function getAll(){
        return $this->billRepository->getAll();
    }

    function findById($id){
        return $this->billRepository->findById($id);
    }

    function store($request){
        $bills= new Bill();
        $bills->fill($request->all());
        $this->billRepository->store($bills);
    }

    function delete($bills){
        return $this->billRepository->delete($bills);
    }

    function update($id,$request){
        $bills = $this->billRepository->findById($id);
        $bills->fill($request->all());
        $this->billRepository->store($bills);
    }

}
