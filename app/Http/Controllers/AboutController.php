<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tentang = DB::table('abouts')->get();
        return view('Backend_admin.Contents.Page.about', ['abouts' => $tentang]);
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
        if ($request->hasFile('img_about')) {
            $img_about = $request->file('img_about');
            $tujuan_upload = 'assets/uploads/';
            $nama_file = time() . "." . $img_about->getClientOriginalExtension();
            $img_about->move($tujuan_upload, $nama_file);
            DB::table('abouts')->insert([
                'title_about' => $request->title_about,
                'description_about' => $request->description_about,
                'img_about' => $nama_file
            ]);
            // dd($request->all());
        }

        return redirect(route('tentang'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        // $tentang = About::find($request->id);
        $tentang = About::where('id', $request->id)->first();
        return view('Backend_admin.Contents.Page.about_edit', compact('tentang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        DB::table('abouts')->where('id', $request->id)->update([
            'title_about' => $request->title_about,
            'description_about' => $request->description_about
        ]);


        // $data = About::find($request->id);
        // if ($request->hasFile('img_about')) {
        //     $foto = $request->file('img_about');
        //     $tujuan_upload = 'assets/uploads/';
        //     $nama_file = time() . "." . $foto->getClientOriginalExtension();
        //     $foto->move($tujuan_upload, $nama_file);
        //     $input = [
        //         'title_about' => $request->title_about,
        //         'description_about' => $request->description_about,
        //         'img_about' => $nama_file
        //     ];
        // } else {
        //     $input = [
        //         'title_about' => $request->title_about,
        //         'description_about' => $request->description_about,
        //         'img_about' => null
        //     ];
        // }
        // $action = $data->update($input);
        // if($action) {
        // }
        return redirect('tentang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($about)
    {
        $tentang = About::find($about);
        $tentang->delete();
        return redirect('tentang');
    }
}
