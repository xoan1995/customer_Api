<?php


namespace App\Http\Repositories\Impl;


use App\Customer;
use App\Http\Repositories\CustomerRepository;
use App\Http\Repositories\Eloquent\EloquentRepository;

class CustomerRepositoryImpl extends  EloquentRepository implements  CustomerRepository
{
public  function getModel()
{
    // TODO: Implement getModel() method.
    $model=Customer::class;
    return $model;
}
}
