<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\modelKategori;

use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = modelKategori::all();
        return view('category.index', compact('kategori'));

    }
    public function search(Request $request)
    {
        $query = $request->input('cari');
        $hasil = modelKategori::where('nama_kategory', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('category.result', compact('hasil', 'query'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
        // insert data ke table
        DB::table('kategori')->insert([
            'nama_kategory' => $request->nama_kategory,
            'slug' => $request->slug,
            'tanggal_input_data' => $request->tanggal_input_data,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
        ]);
        // alihkan halaman ke halaman 
        return redirect('/kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = DB::table('kategori')->where('id',$id)->get();
        return view('category.edit',['kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('kategori')->where('id',$request->id)->update([
            'nama_kategory' => $request->nama_kategory,
            'slug' => $request->slug,
            'tanggal_input_data' => $request->tanggal_input_data,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
        ]);
            return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kategori')->where('id',$id)->delete();
        return redirect('/kategori');
    }
   
}
