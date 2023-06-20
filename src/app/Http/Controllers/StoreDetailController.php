<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\StoreService;
use App\Service\CourseService;
class StoreDetailController extends Controller
{
    public function index($id)
    {
        return view('StoreDetail.index',[
            'courses' => CourseService::getCourse($id),
            'store' => StoreService::getstore($id)
        ]);
    }  //
}
