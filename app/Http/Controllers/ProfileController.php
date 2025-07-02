<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataProfile = Profile::find(1);
        $dataKontak = Kontak::find(1);
        return view('admin.profile.profile', compact('dataProfile', 'dataKontak'));
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
    public function updateProfile(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'deskripsi' => 'required',
            'visi_misi' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data['deskripsi'] = $request->deskripsi;
        $data['visi_misi'] = $request->visi_misi;

        Profile::whereId($id)->update($data);
        return redirect()->route('profile');
    }

    public function updateKontak(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'whatsapp' => 'required',
            'telepon' => 'required',
            'email' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data['no_whatsapp'] = $request->whatsapp;
        $data['no_telepon'] = $request->telepon;
        $data['email'] = $request->email;

        Kontak::whereId($id)->update($data);
        return redirect()->route('profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
