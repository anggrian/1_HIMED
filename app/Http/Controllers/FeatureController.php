<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Flight;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $features = DB::table('features')->get();
        $features = DB::table('features')
            ->join('packages', 'features.packages_id', '=', 'packages.id')
            ->select('features.*', 'packages.title_package')
            ->get();
        $paket = DB::table('packages')->get();
        return view('Backend_admin.Contents.Feature.feature_himed', compact('paket', 'features'));
    }

    public function frontend()
    {
        $fitur = DB::table('features')->get();
        return view('Frontend.feature.frontend_feature', compact('fitur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paket = Package::all();
        return view('Backend_admin.Contents.Feature.feature_himed', compact('paket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $tujuan_upload = 'assets/uploads/';
            $nama_file = time() . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($tujuan_upload, $nama_file);
            DB::table('features')->insert([
                'main_title' => $request->main_title,
                'packages_id' => $request->packages_id,
                'main_description' => $request->main_description,
                'thumbnail' => $nama_file
            ]);
            // dd($request->all());
        }

        return redirect('fitur');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fitur = Feature::findorfail($id);

        return view('Backend_admin.Contents.Feature.feature_edit', ['features' => $fitur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $tujuan_upload = 'assets/uploads/';
            $nama_file = time() . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($tujuan_upload, $nama_file);
            DB::table('features')->where('id', $request->id)->update([
                'main_title' => $request->main_title,
                'main_description' => $request->main_description,
                'thumbnail' => $nama_file
            ]);
        }
        return redirect('fitur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy($feature)
    {

        $fitur = Feature::find($feature);
        $fitur->delete();
        return redirect('fitur');
    }
}
