<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Course;
class AddImageController extends Controller
{
    public function index()
    {
        return  view('image.index');
    }
    public function addImage(Request $request){
        $img = $request->image->store('', 'public');;
        $stores = Course::find(1);
        $stores->icon = $img;
        $stores->save();
    }
}
