<?php
namespace App\Repository;

use App\Models\Store;

class StoreRepository
{
    public static function findAllstore()
    {
        return Store::all();
    }
}