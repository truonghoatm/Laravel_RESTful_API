<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 28/02/2019
 * Time: 14:58
 */

namespace App\Http\Repositories;


interface Repository
{
    public function getAll();
    public function findById($id);
    public function create($data);
    public function update($data, $object);
    public function destroy($object);
}