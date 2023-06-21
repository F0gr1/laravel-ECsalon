<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\StoreService;
class StoreController extends Controller
{
    private $store;
    public function __construct(StoreService $store)
    {
        $this->StoreService = $store;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Store/index',[
            'stores' => $this->StoreService->getstoreList()
        ]);
    }

    public function sample()
    {
        return view('Store/sample');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Store/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->StoreService->createStore($request);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
