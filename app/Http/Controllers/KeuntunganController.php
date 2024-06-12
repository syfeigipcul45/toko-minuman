<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKeuntunganRequest;
use App\Http\Requests\UpdateKeuntunganRequest;
use App\Models\Keuntungan;

class KeuntunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['keuntungans'] = Keuntungan::orderby('tanggal_diambil', 'desc')->get();
        return view('pages.keuntungan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.keuntungan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKeuntunganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Keuntungan $keuntungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keuntungan $keuntungan)
    {
        return view('pages.keuntungan.edit', compact('keuntungan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKeuntunganRequest $request, Keuntungan $keuntungan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keuntungan $keuntungan)
    {
        //
    }
}
