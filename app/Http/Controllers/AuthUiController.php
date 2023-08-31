<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthUiController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->username!=request()->route('user')) {
            abort(404);
        };
        return view("ui.index");
    }

    public function postule_bourse()  {
    
    }
    public function postuler_offre() {
        
    }

    public function notifications(){
        return view("ui.notifications.index");
    }

    public function parametres(){
        return view("ui.settings.index");
    }

    public function profile(){
        if(auth()->user()->username!=request()->route('user')) {
            abort(404);
        };
        // dd(auth()->user()->profile->CandidatIsComplete());
        $user_data = Auth::user()->profile()->first();
        return view("ui.profile.index",compact("user_data"));
    }

    public function messages(){
        return view("ui.messages.index");
    }
    public function rdvs(){
        return view("ui.rdv.index");
    }
    public function entretiens(){
        return view("ui.rdv.index");
    }
    
    public function offres(){
        return view("ui.jobs.index");
    }
    public function bourses(){
        return view("ui.bourses.index");
    }

    
    public function competences()
    {
        return view("ui.competences.index");
    }
    public function store_competences()
    {
        //
    }
    public function formations()
    {
        return view("ui.formations.index");
    }
    public function store_formations()
    {
        //
    }
    public function experiences()
    {
        return view("ui.experiences.index");
    }
    public function store_experiences()
    {
        //
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
