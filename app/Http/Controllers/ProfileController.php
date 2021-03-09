<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login = Auth::user();
        // dd($login);
        return view('Backend_admin.Contents.Account.profile', compact('login'));
    }

    public function lengkapi_data()
    {

        $login = Auth::user();
        // dd($login);

        return view('Backend_admin.Contents.Account.input_data', compact('login'));
    }

    public function profil_akun()
    {

        $users = DB::table('users')->get();

        // dd($login);

        return view('Backend_admin.Contents.Account.account_data', compact('users'));
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
        $login = Auth::user();

        if ($request->hasFile('img_profile')) {
            $img_profile = $request->file('img_profile');
            $tujuan_upload = 'assets/uploads/profiles';
            $nama_file = time() . "." . $img_profile->getClientOriginalExtension();
            $img_profile->move($tujuan_upload, $nama_file);
            DB::table('users')->where('id', $login->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                // 'password' => $request->password,
                'telphone' => $request->telphone,
                'tgl_lahir' => $request->tgl_lahir,
                'img_profile' => $nama_file
            ]);
            // dd($request->all());
        } else {
            DB::table('users')->where('id', $login->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                // 'password' => $request->password,
                'telphone' => $request->telphone,
                'tgl_lahir' => $request->tgl_lahir
            ]);
        }

        return redirect('akun');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
