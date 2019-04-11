<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all    = Profil::all();
        return view('list', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/profil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi
        $this->validate($request, [
            'file'  => 'reuired|image|size:2000'
        ]);

        // Profil::create($request->all());
        $file           = $request->file('file');
        $path           = $file->store('public/gambar');
        $profil         = new Profil;
        $profil->depan  = $request->depan;
        $profil->belakang  = $request->belakang;
        $profil->alamat  = $request->alamat;
        $profil->file  = $path;
        //php artisan storage:link

        //Mengambil Nama asli file
        $request->file('file')->getClientOriginalName();
        //Format File
        $request->file('file')->getClientOriginalExtension();
        //Ukuran File
        $request->file('file')->getClientSize();

        $profil->save();

        return redirect('/profil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
