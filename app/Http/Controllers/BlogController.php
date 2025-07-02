<?php

namespace App\Http\Controllers;

use App\Models\BlogEdukasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BlogEdukasi::all();
        return view('admin.blog.blog', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $author = Auth::user()->name;
        return view('admin.blog.tambah', compact('author'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'author' => 'required',
            'judul_blog' => 'required',
            'isi_blog' => 'required',
            'img' => 'required|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $image = $request->file('img');
        $filename = date('Y-m-d') . $image->getClientOriginalName();
        $destinationPath = public_path('img-blog');

        if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0755, true);
        }

        $image->move($destinationPath, $filename);

        $data['author'] = Auth::user()->id;
        $data['judul_blog'] = $request->judul_blog;
        $data['isi_blog'] = $request->isi_blog;
        $data['img'] = $filename;

        BlogEdukasi::create($data);
        return redirect()->route('blog');
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
        $data = BlogEdukasi::find($id);
        return view('admin.blog.ubah', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'author' => 'required',
            'judul_blog' => 'required',
            'isi_blog' => 'required',
            'img' => 'required|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $image = $request->file('img');
        $filename = date('Y-m-d') . $image->getClientOriginalName();
        $destinationPath = public_path('img-blog');

        $image->move($destinationPath, $filename);

        $data['author'] = Auth::user()->id;
        $data['judul_blog'] = $request->judul_blog;
        $data['isi_blog'] = $request->isi_blog;
        $data['img'] = $filename;

        BlogEdukasi::whereId($id)->update($data);
        return redirect()->route('blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = BlogEdukasi::find($id);
        if ($data) {
            $data->delete();
        }
        return redirect()->route('blog');
    }
}
