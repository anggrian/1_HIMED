<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FiturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun = DB::table('users')->get();

        return view('page/fitur', ['user' => $akun]);
        // return view('page/fitur');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fitur  $fitur
     * @return \Illuminate\Http\Response
     */
    public function show(Fitur $fitur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fitur  $fitur
     * @return \Illuminate\Http\Response
     */
    public function edit(Fitur $fitur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fitur  $fitur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fitur $fitur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fitur  $fitur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fitur $fitur)
    {
        //
    }
}
