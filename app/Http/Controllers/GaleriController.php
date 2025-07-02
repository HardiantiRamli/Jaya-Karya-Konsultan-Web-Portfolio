<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Psy\Readline\Hoa\Console;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Galeri::all();
        return view('admin.galeri.galeri', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galeri.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'judul' => 'required',
        'lokasi' => 'required',
        'waktu' => 'required',
        'img' => 'required|image|max:2048'
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator);
    }

    $image = $request->file('img');
    $filename = date('Y-m-d') . '-' . $image->getClientOriginalName();
    $destinationPath = public_path('img-galeri');

    if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0755, true);
    }

    $image->move($destinationPath, $filename);

    $data['judul_gambar'] = $request->judul;
    $data['lokasi'] = $request->lokasi;
    $data['waktu'] = $request->waktu;
    $data['img'] = $filename;

    Galeri::create($data);

    return redirect()->route('galeri')->with('success', 'Gambar berhasil ditambahkan');
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
    public function edit($id)
    {
        $data = Galeri::find($id);
        return view('admin.galeri.ubah', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'lokasi' => 'required',
            'waktu' => 'required',
            'img' => 'required|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $image = $request->file('img');
        $filename = date('Y-m-d') . '-' . $image->getClientOriginalName();
        $destinationPath = public_path('img-galeri');

        $image->move($destinationPath, $filename);

        $data['judul_gambar'] = $request->judul;
        $data['lokasi'] = $request->lokasi;
        $data['waktu'] = $request->waktu;
        $data['img'] = $filename;

        Galeri::whereId($id)->update($data);
        return redirect()->route('galeri');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Galeri::find($id);
        if ($data) {
            $data->delete();
        }
        return redirect()->route('galeri');
    }
}
