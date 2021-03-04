<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //
        //
        $accounts = DB::table('accounts')
            ->join('users', 'accounts.users_id', '=', 'users.id')
            ->select('accounts.*', 'users.name', 'users.email')
            ->get();
        $users = DB::table('users')->get();
        dd($users);

        return view('Backend_admin.Contents.Account.account_data', compact('accounts', 'users'));
        //
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
        if ($request->hasFile('img_profile')) {
            $img_profile = $request->file('img_profile');
            $tujuan_upload = 'assets/uploads/';
            $nama_file = time() . "." . $img_profile->getClientOriginalExtension();
            $img_profile->move($tujuan_upload, $nama_file);
            DB::table('accounts')->insert([
                'telphone' => $request->telphone,
                'users_id' => $request->users_id,
                'tgl_lahir' => $request->tgl_lahir,
                'img_profile' => $nama_file
            ]);
            dd($request->all());
        }

        return redirect('akun');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Backend_admin.Contents.Account.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
