<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vdasos;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Main.home');
    }

    public function dataSosial()
    {
        return view('Main.dasos');
    }

    public function regRajal()
    {
        return view('Main.regRajal');
    }

    public function tes()
    {
        return view('livewire.searchdasos');
    }

    public function searchMR(Request $request)
    {
        // $result = vdasos::where('nama', 'like', '%' . $request . '%')->get();
        // return view('Main.regRajal', ['result' => $result]);
        // dd($result);

        // if ($request->has('term')) {
        //     return vdasos::where('nama', 'like', '%' . $request->input('term') . '%')->get();
        // }


        $query = $request->get('term');
        $data = vdasos::select('nama')->where('nama', 'like', '%' . $query . '%')->pluck('nama');
        return response()->json($data);
        // dd($data);
        // return view('Main.regRajal', [
        //     'data1' => '$data'
        // ]);
    }
    /**
     * Show the form for creating a new resource.
     */

    public function cariMR(Request $request)
    {
        $string =  $request->get('cari2');
        $result = vdasos::select('mr', 'nama')->where('nama', '=', $string)->get();
        // dd($result);
        return $result->toJson();
        // return response()->json($result);
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
