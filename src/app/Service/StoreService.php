<?php
namespace App\Service;

use App\Repository\StoreRepository;

class StoreService
{

    // フルーツ一覧取得
    public static function getstoreList()
    {
        //storeRepositoryのfindAllstoreを呼び出し、取得
        $stores = StoreRepository::findAllstore();
        return $stores;
    }

}