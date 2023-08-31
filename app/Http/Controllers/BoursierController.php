<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Boursier;
use App\Http\Requests\StoreBoursierRequest;
use App\Http\Requests\UpdateBoursierRequest;

class BoursierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boursiers = User::all();
        return view("admin.boursiers.index",compact("boursiers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBoursierRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Boursier $boursier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Boursier $boursier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBoursierRequest $request, Boursier $boursier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boursier $boursier)
    {
        //
    }
}
