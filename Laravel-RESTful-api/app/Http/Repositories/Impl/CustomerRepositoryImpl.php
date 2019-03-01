<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 28/02/2019
 * Time: 15:22
 */

namespace App\Http\Repositories\Impl;


use App\Http\Repositories\Eloquent\EloquentRepository;
use App\Http\Repositories\CustomerRepository;
use App\Customer;

class CustomerRepositoryImpl extends EloquentRepository implements CustomerRepository
{
    public function getModel()
    {
        $model = Customer::class;
        return $model;
    }

}