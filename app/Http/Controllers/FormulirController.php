<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Auth::user()->role_id;// Ambil role_id dari pengguna yang sedang login

        $identitas = form::get();
        return view('dashboard.form.index')->with('identitas',$identitas);
    }
    public function result()
    {
        $user = Auth::user()->role_id;// Ambil role_id dari pengguna yang sedang login

        $identitas = form::get();
        return view('dashboard.hasil.index', compact('identitas'));
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
                'provinsi.required' =>'provinsi tulisan wajib di isi',
                'email.required' =>'email tulisan wajib di isi',
                'isi.required' =>'isi tulisan wajib di isi',
                'posisi.required' =>'posisi tulisan wajib di isi',
                'perusahaan.required' =>'perusahaan tulisan wajib di isi',
                'tgl_mulai.required' =>'tanggal tulisan wajib di isi',
                'tgl_akhir.required' =>'tanggal tulisan wajib di isi',
                'jobdesk.required' =>'jobdesk tulisan wajib di isi',
                'sekolah.required' =>'sekolah tulisan wajib di isi',
                'jurusan.required' =>'jurusan tulisan wajib di isi',
                'tgl_mulai2.required' =>'tanggal tulisan wajib di isi',
                'tgl_akhir2.required' =>'tanggal tulisan wajib di isi',
                'ipk.required' =>'ipk tulisan wajib di isi',
                'isi2.required' =>'isian tulisan wajib di isi',
                'softskill.required' =>'softskill tulisan wajib di isi',
                'hardskill.required' =>'softskill tulisan wajib di isi',
                'bahasa.required' =>'bahasa tulisan wajib di isi',
            ]
        );

        $identitas =[
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
        form::create(array_merge(
            $request->all(),
            [
                'role_id' => Auth::user()->role_id // Set role_id dari pengguna yang sedang login
            ]
        ));
        return redirect()->route('form.index')->with('success','Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $identitas = form::where('id',$id)->first();
        return view('dashboard.form.edit')->with('identitas',$identitas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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
                'provinsi.required' =>'provinsi tulisan wajib di isi',
                'email.required' =>'email tulisan wajib di isi',
                'isi.required' =>'isi tulisan wajib di isi',
                'posisi.required' =>'posisi tulisan wajib di isi',
                'perusahaan.required' =>'perusahaan tulisan wajib di isi',
                'tgl_mulai.required' =>'tanggal tulisan wajib di isi',
                'tgl_akhir.required' =>'tanggal tulisan wajib di isi',
                'jobdesk.required' =>'jobdesk tulisan wajib di isi',
                'sekolah.required' =>'sekolah tulisan wajib di isi',
                'jurusan.required' =>'jurusan tulisan wajib di isi',
                'tgl_mulai2.required' =>'tanggal tulisan wajib di isi',
                'tgl_akhir2.required' =>'tanggal tulisan wajib di isi',
                'ipk.required' =>'ipk tulisan wajib di isi',
                'isi2.required' =>'isian tulisan wajib di isi',
                'softskill.required' =>'softskill tulisan wajib di isi',
                'hardskill.required' =>'softskill tulisan wajib di isi',
                'bahasa.required' =>'bahasa tulisan wajib di isi',
            ]
        );

        $identitas =[
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
        form::where('id',$id)->update($identitas);
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
