<?php


namespace App\Http\Services;


use App\Http\Repositories\CustomerRepository;
use App\Models\Customer;
use Illuminate\Support\Facades\Storage;

class CustomerService
{
    protected CustomerRepository $customerRepo;

    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepo = $customerRepo;
    }

    function getAll(){
        return $this->customerRepo->getAll();
    }

    function findById($id){
        return $this->customerRepo->findById($id);
    }

    function store($request){
        $customers= new Customer();
        $customers->fill($request->all());
        $this->customerRepo->store($customers);
    }

    function delete($customer){
        return $this->customerRepo->delete($customer);
    }

    function update($id,$request){
        $customer = $this->customerRepo->findById($id);
        $customer->fill($request->all());
        $this->customerRepo->store($customer);
    }
}
