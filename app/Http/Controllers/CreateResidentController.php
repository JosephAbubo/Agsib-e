<?php

namespace App\Http\Controllers;

use App\Models\resident;
use Illuminate\Http\Request;
use App\Http\Requests\CreateResidentRequestForm;

class CreateResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateResidentRequestForm $request)
    {
        $resident = \App\Models\resident::create($request->validated());
        return $resident;
    }

    /**
     * Display the specified resource.
     */
    public function show(resident $resident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, resident $resident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(resident $resident)
    {
        //
    }
}
