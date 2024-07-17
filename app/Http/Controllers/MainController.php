<?php

namespace App\Http\Controllers;

use App\Models\main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = main::orderBy('judul','asc')->get();
        return view('user.main.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.main.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('judul',$request->judul);
        Session::flash('isi',$request->isi);

        $request->validate(
            [
                'judul' =>'required',
                'isi' =>'required',
            ],[
                'judul.required' =>'judul wajib di isi',
                'isi.required' =>'isian tulisan wajib di isi',
            ]
        );

        $data =[
            'judul'=>$request->judul,
            'isi'=>$request->isi
        ];
        main::create($data);
        return redirect()->route('main.index')->with('success','Berhasil menambahkan data');
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
        $data = main::where('id',$id)->first();
        return view('user.main.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate(
            [
                'judul' =>'required',
                'isi' =>'required',
            ],[
                'judul.required' =>'judul wajib di isi',
                'isi.required' =>'isian tulisan wajib di isi',
            ]
        );

        $data =[
            'judul'=>$request->judul,
            'isi'=>$request->isi
        ];
        main::where('id',$id)->update($data);
        return redirect()->route('main.index')->with('success','Berhasil melakukan UPDATE data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        main::where('id',$id)->delete();
        return redirect()->route('main.index')->with('success','Berhasil melakukan delete data');
    }
}
