<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insert_dasos;

class insertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $data = insert_dasos::create($request->all());
        $data->save();

        if ($data->save()) {
            toast('Berhasil Tersimpan', 'success')->autoClose(5000);
            return redirect('/data-sosial');
        } else {
            toast('Gagal Tersimpan!', 'error')->autoClose(5000);
            return redirect('/');
        }
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
