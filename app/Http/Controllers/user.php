<?php

namespace App\Http\Controllers;
//use App\Models\user;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class user extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return user::all();
       //return author::where('fname', 'lname', )->get();
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
