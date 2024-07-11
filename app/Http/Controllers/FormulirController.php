<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = form::orderBy('form','asc')->get();

        return view('dashboard.form.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.form.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama',$request->nama);
        Session::flash('provinsi',$request->provinsi);
        Session::flash('email',$request->email);
        Session::flash('isi',$request->isi);
        Session::flash('posisi',$request->posisi);
        Session::flash('perusahaan',$request->perusahaan);
        Session::flash('tgl_mulai',$request->tgl_mulai);
        Session::flash('tgl_akhir',$request->tgl_akhir);
        Session::flash('jobdesk',$request->jobdesk);
        Session::flash('sekolah',$request->sekolah);
        Session::flash('jurusan',$request->jurusan);
        Session::flash('tgl_mulai2',$request->tgl_mulai2);
        Session::flash('tgl_akhir2',$request->tgl_akhir2);
        Session::flash('ipk',$request->ipk);
        Session::flash('isi2',$request->isi2);
        Session::flash('softskill',$request->softskill);
        Session::flash('hardskill',$request->hardskill);
        Session::flash('bahasa',$request->bahasa);

        $request->validate(
            [
                'nama' =>'required',
                'provinsi' =>'required',
                'email' =>'required',
                'isi' =>'required',
                'posisi' =>'required',
                'perusahaan' =>'required',
                'tgl_mulai' =>'required',
                'tgl_akhir' =>'required',
                'jobdesk' =>'required',
                'sekolah' =>'required',
                'jurusan' =>'required',
                'tgl_mulai2' =>'required',
                'tgl_akhir2' =>'required',
                'ipk' =>'required',
                'isi2' =>'required',
                'softskill' =>'required',
                'hardskill' =>'required',
                'bahasa' =>'required',
            ],[
                'nama.required' =>'nama wajib di isi',
                'provinsi.required' =>'isian tulisan wajib di isi',
                'email.required' =>'isian tulisan wajib di isi',
                'isi.required' =>'isian tulisan wajib di isi',
                'posisi.required' =>'isian tulisan wajib di isi',
                'perusahaan.required' =>'isian tulisan wajib di isi',
                'tgl_mulai.required' =>'isian tulisan wajib di isi',
                'tgl_akhir.required' =>'isian tulisan wajib di isi',
                'jobdesk.required' =>'isian tulisan wajib di isi',
                'sekolah.required' =>'isian tulisan wajib di isi',
                'jurusan.required' =>'isian tulisan wajib di isi',
                'tgl_mulai2.required' =>'isian tulisan wajib di isi',
                'tgl_akhir2.required' =>'isian tulisan wajib di isi',
                'ipk.required' =>'isian tulisan wajib di isi',
                'isi2.required' =>'isian tulisan wajib di isi',
                'softskill.required' =>'isian tulisan wajib di isi',
                'hardskill.required' =>'isian tulisan wajib di isi',
                'bahasa.required' =>'isian tulisan wajib di isi',
            ]
        );

        $data =[
            'nama'=>$request->nama,
            'provinsi'=>$request->provinsi,
            'email'=>$request->email,
            'isi'=>$request->isi,
            'posisi'=>$request->posisi,
            'perusahaan'=>$request->perusahaan,
            'tgl_mulai'=>$request->tgl_mulai,
            'tgl_akhir'=>$request->tgl_akhir,
            'jobdesk'=>$request->jobdesk,
            'sekolah'=>$request->sekolah,
            'jurusan'=>$request->jurusan,
            'tgl_mulai2'=>$request->tgl_mulai2,
            'tgl_akhir2'=>$request->tgl_akhir2,
            'ipk'=>$request->ipk,
            'isi2'=>$request->isi2,
            'softskill'=>$request->softskill,
            'hardskill'=>$request->hardskill,
            'bahasa'=>$request->bahasa,
        ];
        form::create($data);
        return redirect()->route('form.index')->with('success','Berhasil menambahkan data');
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
        $data = form::where('id',$id)->first();
        return view('dashboard.form.edit')->with('data',$data);
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
        form::where('id',$id)->update($data);
        return redirect()->route('form.index')->with('success','Berhasil melakukan UPDATE data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        form::where('id',$id)->delete();
        return redirect()->route('form.index')->with('success','Berhasil melakukan delete data');
    }
}
