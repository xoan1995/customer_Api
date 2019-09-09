<?php


namespace App\Http\Services\Impl;


use App\Http\Repositories\CustomerRepository;
use App\Http\Services\CustomerService;

class CustomerServiceImpl implements CustomerService
{
    protected $cutomerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->cutomerRepository = $customerRepository;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        $customers = $this->cutomerRepository->getAll();
        return $customers;
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        $customer = $this->cutomerRepository->findById();
        $statusCode = 200;
        if (!$customer)
            $statusCode = 404;
        $data = [
            'statusCode' => $statusCode,
            'customers' => $customer
        ];
        return $data;
    }

    public function create($request)
    {
        // TODO: Implement create() method.
        $customer = $this->cutomerRepository->create($request);
        $statusCode = 201;
        if (!$customer)
            $statusCode = 500;
        $data = [
            'statusCode' => $statusCode,
            'customers' => $customer
        ];
        return $data;
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
        $oldCustomer = $this->cutomerRepository->findById($id);
        if (!$oldCustomer) {
            $newCustomer = null;
            $statusCode = 404;
        } else {
            $newCustomer = $this->cutomerRepository->update($request, $oldCustomer);
            $statusCode = 200;
        }
        $data = [
            'statusCode' => $statusCode,
            'customers' => $newCustomer
        ];
        return $data;
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        $customer = $this->cutomerRepository->destroy($id);
        $statusCode = 404;
        $message = "User not found";
        if ($customer) {
            $this->cutomerRepository->destroy($customer);
            $statusCode = 200;
            $message = "Delete data success!";
        }
        $data = [
            'statusCode' => $statusCode,
            'message' => $message
        ];
        return $data;
    }
}
