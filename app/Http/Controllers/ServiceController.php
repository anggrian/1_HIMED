<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login = Auth::user();
        $services = DB::table('services')->get();
        return view('Backend_admin.Contents.Page.service', compact('login', 'services'));
    }

    public function frontend_service()
    {
        $layanan = DB::table('services')->get();
        return view('Frontend.Service.frontend_service', ['services' => $layanan]);
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
        DB::table('services')->insert([
            'title_service' => $request->title_service,
            'description_service' => $request->description_service
        ]);
        return redirect('layanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $layanan = Service::findorfail($id);
        return view('Backend_admin.Contents.Page.service_edit', ['services' => $layanan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        DB::table('services')->where('id', $request->id)->update([
            'title_service' => $request->title_service,
            'description_service' => $request->description_service
        ]);
        return redirect('layanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($service)
    {
        $layanan = Service::find($service);
        $layanan->delete();
        return redirect('layanan');
    }
}
