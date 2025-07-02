<?php

namespace App\Http\Controllers;

use App\Models\BlogEdukasi;
use App\Models\Galeri;
use App\Models\Kontak;
use App\Models\Profile;
use Illuminate\Http\Request;

class UserViewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wa = Kontak::pluck('no_whatsapp')->first();
        $telepon = Kontak::pluck('no_telepon')->first();
        $email = Kontak::pluck('email')->first();
        $project = Galeri::all()->sortByDesc('created_at')->take(3);
        $blog = BlogEdukasi::all()->sortByDesc('created_at')->take(1);
        return view('home', compact('wa', 'telepon', 'email', 'project', 'blog'));
    }


    public function galeri()
    {
        $data = Galeri::all();
        $wa = Kontak::pluck('no_whatsapp')->first();
        $telepon = Kontak::pluck('no_telepon')->first();
        $email = Kontak::pluck('email')->first();
        return view('galeri', compact('data', 'wa', 'telepon', 'email'));
    }

    public function blog()
    {
        $data = BlogEdukasi::all();
        $wa = Kontak::pluck('no_whatsapp')->first();
        $telepon = Kontak::pluck('no_telepon')->first();
        $email = Kontak::pluck('email')->first();
        return view('blog', compact('data', 'wa', 'telepon', 'email'));
    }

    public function blogbaca($judul_blog)
    {
        $data = BlogEdukasi::where('judul_blog', $judul_blog)->firstOrFail();
        $wa = Kontak::pluck('no_whatsapp')->first();
        $telepon = Kontak::pluck('no_telepon')->first();
        $email = Kontak::pluck('email')->first();
        return view('bacablog', compact('data', 'wa', 'telepon', 'email'));
    }

    public function about()
    {
        $data = Profile::find(1);
        $wa = Kontak::pluck('no_whatsapp')->first();
        $telepon = Kontak::pluck('no_telepon')->first();
        $email = Kontak::pluck('email')->first();
        return view('about', compact('data', 'wa', 'telepon', 'email'));
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
