<?php


namespace App\Http\Services;


use App\Http\Repositories\Bill_detailRepository;
use App\Models\Bill_detail;
use Illuminate\Support\Facades\Storage;

class Bill_detailService
{
    protected Bill_detailRepository $bill_detailRepo;

    public function __construct(Bill_detailRepository $bill_detailRepo)
    {
        $this->bill_detailRepo = $bill_detailRepo;
    }

    function getAll(){
        return $this->bill_detailRepo->getAll();
    }

    function findById($id){
        return $this->bill_detailRepo->findById($id);
    }

    function store($request){
        $bill_details= new Bill_detail();
        $bill_details->fill($request->all());
        $this->bill_detailRepo->store($bill_details);
    }

    function delete($bill_details){
        return $this->bill_detailRepo->delete($bill_details);
    }

    function update($id,$request){
        $bill_details = $this->bill_detailRepo->findById($id);
        $bill_details->fill($request->all());
        $this->bill_detailRepo->store($bill_details);
    }
}
